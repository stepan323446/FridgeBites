<?php

namespace Lycoreco\Apps\Users\Models;

use Lycoreco\Includes\Model\BaseModel;

class UserModel extends BaseModel
{
    public $field_username;
    public $field_email;
    public $field_fname;
    public $field_lname;
    public $field_password;
    public $field_is_admin = false;
    public $field_is_active = false;
    public  $field_register_at = null;
    
    protected $is_banned = false;

    static protected $additional_fields = array(
        [
            'field' => [
                '(EXISTS (
                SELECT 1 FROM user_banlist b 
                WHERE b.user_id = obj.id AND b.end_at > NOW()
            )) AS is_banned'
            ]
        ]
    );

    static protected $table_name = 'users';
    static protected $table_fields =  [
        'id'         => 'int',
        'username'   => 'string',
        'email'      => 'string',
        'fname'      => 'string',
        'lname'      => 'string',
        'password'   => 'string',
        'is_admin'   => 'bool',
        'is_active'  => 'bool',
        'register_at' => 'DateTime'
    ];
    static protected $search_fields = ['obj.username', 'obj.email', 'obj.fname', 'obj.lname'];

    public static function init_table()
    {
        $result = db_query('CREATE TABLE ' . static::$table_name . ' (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(20) UNIQUE NOT NULL,
            email VARCHAR(40) UNIQUE NOT NULL,
            fname VARCHAR(20) NOT NULL,
            lname VARCHAR(20) NOT NULL,
            password VARCHAR(255) NOT NULL,
            is_admin TINYINT(1) DEFAULT 0,
            is_active TINYINT(1) DEFAULT 0,

            register_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );');
        return $result;
    }
    public function get_role()
    {
        if ($this->field_is_admin)
            return 'Admin';
        else
            return 'User';
    }
    public function is_banned() 
    {
        return (bool)$this->is_banned;
    }
    /**
     * Get public user name
     * if user has first name, we get first name
     * if user has first and last name, we get first and last name
     * if user hasn't first name, we get username
     * @return string
     */
    public function get_public_name()
    {
        if (empty($this->field_fname))
            return $this->field_username;

        $full_name = $this->field_fname;

        if ($this->field_lname)
            $full_name .= " " . $this->field_lname;

        return $full_name;
    }

    public static function password_hash($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
    public function password_verify($password)
    {
        return password_verify($password, $this->field_password);
    }
    public static function valid_password($password)
    {
        $errors = [];
        $password_len = strlen($password);
        if ($password_len < 4 || $password_len > 10)
            $errors[] = 'The password is between 4 and 10 characters long.';

        if (strpos($password, ' '))
            $errors[] = 'Spaces are not allowed.';

        if (empty($errors))
            return true;

        return $errors;
    }
    public function valid()
    {
        $errors = array();

        // Check if exists another user with same username/email
        $exists_user = UserModel::get(
            array(
                [
                    'name' => 'obj.username',
                    'type' => '=',
                    'value' => $this->field_username,
                ],
                [
                    'name' => 'obj.email',
                    'type' => '=',
                    'value' => $this->field_email
                ]
            ),
            array(),
            'OR'
        );
        if (!empty($exists_user)) {
            if ($exists_user->get_id() !== $this->get_id()) {
                if ($exists_user->field_email == $this->field_email)
                    $errors[] = 'The user with this email already exists';

                if ($exists_user->field_username == $this->field_username)
                    $errors[] = 'The user with this username already exists';
            }
        }

        // Check length 
        $username_len = strlen($this->field_username);
        $email_len = strlen($this->field_username);
        $fname_len = strlen($this->field_username);
        $lname_len = strlen($this->field_username);

        if ($username_len > 20 || $username_len < 4)
            $errors[] = 'The username must be between 4 and 20 characters long';

        if ($email_len > 40 || $email_len < 4)
            $errors[] = 'The email must be between 4 and 40 characters long';

        if ($fname_len > 20 || $fname_len < 3)
            $errors[] = 'The first name must be between 4 and 20 characters long';

        if ($lname_len > 20 || $lname_len < 3)
            $errors[] = 'The last name must be between 4 and 40 characters long';

        if (empty($errors))
            return true;

        return $errors;
    }
}
