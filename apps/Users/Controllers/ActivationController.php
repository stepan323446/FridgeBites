<?php

namespace Lycoreco\Apps\Users\Controllers;

use Lycoreco\Apps\Users\Models\{
    ActivateCodeModel,
    UserModel
};
use Lycoreco\Includes\Routing\HttpExceptions;
use Lycoreco\Includes\BaseController;

class ActivationController extends BaseController
{
    protected $template_name = APPS_PATH . '/Users/Templates/activation.php';

    protected function get_model(): ActivateCodeModel
    {
        if (isset($this->__model))
            return $this->__model;

        $this->__model = ActivateCodeModel::get(array(
            [
                'name' => 'obj.activate_slug',
                'type' => '=',
                'value' => $this->url_context['url_1'] // slug
            ]
        ));
        
        if(empty($this->__model))
            throw new HttpExceptions\NotFound404('The account activation link is invalid');

        return $this->__model;
    }
    public function get_context_data() {
        $context = parent::get_context_data();

        $activation_model = $this->get_model();
        $user = UserModel::get(array(
            [
                'name'  => 'obj.id',
                'type'  => '=',
                'value' => $activation_model->field_user_id
            ]
            ));
        if($user->field_is_active)
            throw new HttpExceptions\BadRequest400("The account already activated");

        $user->field_is_active = true;
        $user->save();

        return $context;
    }
}
