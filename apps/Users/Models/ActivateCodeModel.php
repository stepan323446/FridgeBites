<?php
namespace Lycoreco\Apps\Users\Models;

use Lycoreco\Includes\Model\BaseModel;

class ActivateCodeModel extends BaseModel
{
    public $field_user_id;
    public $field_activate_slug;
    public $field_created_at = null;
    static protected $table_name = 'user_activate_codes';
    static protected $table_fields = [
        'id'            => 'int',
        'user_id'       => 'int',
        'activate_slug' => 'string',
        'created_at'    => 'DateTime'
    ];
    public static function init_table()
    {
        $result = db_query('CREATE TABLE ' . static::$table_name . ' (
            id INT AUTO_INCREMENT PRIMARY KEY,

            user_id INT NOT NULL,
            activate_slug VARCHAR(255) UNIQUE NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

            FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
        );');
        return $result;
    }
    public static function send_activation(UserModel $user) 
    {
        require_once APPS_PATH . '/Users/functions.php';

        if ($user->field_is_active)
            return;

        $activation_code = ActivateCodeModel::get([
            [
                'name'  => 'obj.user_id',
                'type'  => '=',
                'value' => $user->get_id()
            ]
            ]);

        // If activation link does not exist - create new
        if(!$activation_code) {
            $activation_code = new ActivateCodeModel(array(
                'user_id' => $user->get_id(),
                'activate_slug' => generate_uuid() 
            ));
            $activation_code->save();
        }
        $link_to_activate = get_permalink('users:activate', [
            $activation_code->field_activate_slug
        ]);

        send_email(
            "Activation account", 
            get_activation_email_template(
                $user->field_username, 
                $link_to_activate),

            get_activation_email_alt_template(
                $user->field_username, 
                $link_to_activate),

            $user->field_email,
            $user->get_public_name()
        );
    }
}