<?php
namespace Lycoreco\Apps\Admin\Controllers;

use Lycoreco\Includes\Model\ValidationError;
use Lycoreco\Apps\Users\Models\UserModel;

class AdminUserController extends Abstract\AdminSingleController
{
    protected $model_сlass_name = "Lycoreco\Apps\Users\Models\UserModel";
    protected $field_title = 'field_username';
    protected $verbose_name = 'user';
    protected $object_router_name = 'admin:user';
    protected $component_widgets = ['the_user_banlist'];
    protected $fields = array(
        [
            'model_field' => 'username',
            'input_type' => 'text',
            'input_attrs' => ['required']
        ],
        [
            'model_field' => 'email',
            'input_type' => 'email',
            'input_label' => 'E-mail',
            'input_attrs' => ['required']
        ],
        [
            'model_field' => 'password',
            'input_type' => 'text',
            'dynamic_save' => false,
            'input_attrs' => ['required']
        ],
        [
            'model_field' => 'is_admin',
            'input_type' => 'checkbox',
            'input_label' => 'Is admin'
        ],
        [
            'model_field' => 'is_active',
            'input_type' => 'checkbox',
            'input_label' => 'Is active'
        ],
        [
            'model_field' => 'register_at',
            'input_type' => 'text',
            'dynamic_save'  => false,
            'input_label' => 'Register at',
            'input_attrs' => ['disabled']
        ],
        '<hr>',
        [
            'model_field' => 'fname',
            'input_type' => 'text',
            'input_label' => 'First name',
            'input_attrs' => ['required']
        ],
        [
            'model_field' => 'lname',
            'input_type' => 'text',
            'input_label' => 'Last name',
            'input_attrs' => ['required']
        ]
    );
    /**
     * Some code for updating object before save
     * @param UserModel $object
     * @return void
     */
    protected function before_save(&$object)
    {
        $password = $_POST['password'] ?? '';

        // If password doesn't changed
        if ($password === $object->field_password && $this->context['is_new'] == false)
            return;

        $result_valid = UserModel::valid_password($password);

        // If password is valid - hash password and save to object
        if ($result_valid === true) {
            $password_hash = UserModel::password_hash($password);
            $object->field_password = $password_hash;
        }
        // if not, throw ValidationError
        else {
            throw new ValidationError($result_valid);
        }
    }
}