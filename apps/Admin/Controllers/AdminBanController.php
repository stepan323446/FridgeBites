<?php
namespace Lycoreco\Apps\Admin\Controllers;

class AdminBanController extends Abstract\AdminSingleController
{
    protected $model_сlass_name = "Lycoreco\Apps\Users\Models\BanlistModel";
    protected $field_title = 'field_created_at';
    protected $object_router_name = 'admin:ban';
    protected $verbose_name = "ban";
    protected $fields = array(
        [
            'model_field' => 'user_id',
            'input_type'  => 'number',
            'dynamic_save' => false,
            'input_label' => 'User id',
            'input_attrs' => ['required', 'disabled']
        ],
        [
            'model_field' => 'reason',
            'input_type'  => 'text',
            'input_label' => 'Reason',
        ],
        [
            'model_field' => 'end_at',
            'input_type' => 'datetime-local',
            'input_label' => 'End at',
            'input_attrs' => ['required']
        ],
        [
            'model_field' => 'created_at',
            'input_type' => 'text',
            'dynamic_save'  => false,
            'input_label' => 'Created at',
            'input_attrs' => ['disabled']
        ],
    );
    protected function save(&$object)
    {
        $is_new = !$object->is_saved();

        $object->save();

        if($is_new)
            $object->send_email_notification();
    }

    protected function get_model() 
    {
        $model = parent::get_model();

        if($this->context['is_new'])
            $model->field_user_id = (int)$this->url_context['url_1'];

        return $model;
    }
}