<?php
namespace Lycoreco\Apps\Users\Models;

use Lycoreco\Includes\Model\{
    BaseModel,
    CustomDateTime
};

use function PHPSTORM_META\map;

class BanlistModel extends BaseModel
{
    public $field_user_id;
    public $field_reason;
    public $field_created_at = null;
    public $field_end_at = null;
    static protected $table_name = 'user_banlist';
    static protected $table_fields = [
        'id'            => 'int',
        'user_id'       => 'int',
        'reason'        => 'string',
        'created_at'    => 'DateTime',
        'end_at'        => 'DateTime'
    ];
    static protected $search_fields = ['obj.reason'];

    public static function init_table()
    {
        $result = db_query('CREATE TABLE ' . static::$table_name . ' (
            id INT AUTO_INCREMENT PRIMARY KEY,

            user_id INT NOT NULL,
            reason VARCHAR(255) NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            end_at TIMESTAMP,

            FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
        );');
        return $result;
    }
    public function is_active()
    {
        return new CustomDateTime() <= $this->field_end_at;
    }

    public function send_email_notification() 
    {
        require_once APPS_PATH . '/Users/functions.php';

        $user = UserModel::get(array(
            [
                'name'  => 'obj.id',
                'type'  => '=',
                'value' => $this->field_user_id
            ]
        ));

        send_email(
            "Account banned", 
            get_ban_template($user->field_username, $this),

            get_ban_alt_template($user->field_username, $this),

            $user->field_email,
            $user->get_public_name()
        );
    }
}