<?php
namespace Lycoreco\Apps\Admin\Controllers;

class AdminHomeController extends Abstract\AdminBaseController
{
    protected $template_name = APPS_PATH . '/Admin/Templates/home.php';

    public function get_context_data()
    {
        $context = parent::get_context_data();

        $context['last_orders'] = [];

        $datetime_month_ago = new \DateTime();
        $datetime_month_ago->modify("-1 month");


        return $context;
    }
}
