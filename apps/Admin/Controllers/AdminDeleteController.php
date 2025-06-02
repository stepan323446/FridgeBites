<?php
namespace Lycoreco\Apps\Admin\Controllers;

use Lycoreco\Includes\Routing\HttpExceptions;
use Lycoreco\Apps\Users\Models\UserModel;

/**
 * Controller to delete every object model using className and id
 */
class AdminDeleteController extends Abstract\AdminBaseController
{
    protected $template_name = APPS_PATH . '/Admin/Templates/delete.php';

    /**
     * @return null|UserModel
     */
    protected function get_model()
    {
        if (isset($this->__model))
            return $this->__model;

        $id = $this->url_context['url_2'];
        $model_class = '';

        switch ($this->url_context['url_1']) {
            case 'users':
                $model_class = "Lycoreco\Apps\Users\Models\UserModel";
                break;
            case 'user-banlist':
                $model_class = "Lycoreco\Apps\Users\Models\BanlistModel";
                break;

            default:
                return null;
        }
        return $model_class::get(array(
            [
                'name' => 'obj.id',
                'type' => '=',
                'value' => $id
            ]
        ));
    }
    public function get_context_data()
    {
        $context = parent::get_context_data();

        $model = $this->get_model();
        if (empty($model))
            throw new HttpExceptions\NotFound404();

        // Display field to show what's model
        $field = '';
        $back_url = '';
        switch ($this->url_context['url_1']) {
            case 'users':
                $back_url = get_permalink('admin:user', [$model->get_id()]);
                $field = 'field_username';
                break;

            case 'user-banlist':
                $back_url = get_permalink('admin:ban', [$model->get_id()]);
                $field = 'field_reason';
                break;
        }

        $context['back_url'] = $back_url;
        $context['model'] = $model;
        $context['field'] = $field;

        return $context;
    }
    protected function post()
    {
        $model = $this->get_model();

        if (empty($model))
            throw new HttpExceptions\NotFound404();

        $model->delete();

        // Redirect after delete
        $type_model = $this->url_context['url_1'];
        switch ($type_model) {
            case 'users':
                $link = get_permalink('admin:user-list');
                break;
            default:
                $link = get_permalink('admin:home');
                break;
        }
        redirect_to($link);
    }
}
