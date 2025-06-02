<?php

namespace Lycoreco\Apps\Admin\Controllers\Abstract;

define('ADMIN_MAX_ELEMENTS', value: 20);

abstract class AdminListController extends AdminBaseController
{
    protected $template_name =  APPS_PATH . '/Admin/Templates/list-view.php';

    // Model related with BaseModel
    protected $model_сlass_name;
    /**
     * Fields to show in the table
     * array(
     *  "title_1" => "field_name_1",
     *  "title_2" => "field_name_2",
     * )
     * @var array
     */
    protected $table_fields;
    protected $single_router_name;
    protected $create_router_name;
    protected $verbose_name = "object";
    protected $verbose_name_multiply = "objects";
    protected $sort_by = array();

    public function custom_filter_fields()
    {
        return array();
    }
    public function get_context_data()
    {
        $context = parent::get_context_data();

        $search = $_GET['s'] ?? '';

        $page = 1;
        if (isset($_GET['page'])) {
            $page = (int)$_GET['page'];
        }

        // Get objects by sort and search
        $context['objects'] = $this->model_сlass_name::filter(
            $this->custom_filter_fields(),
            $this->sort_by,
            ADMIN_MAX_ELEMENTS,
            'OR',
            calc_page_offset(ADMIN_MAX_ELEMENTS, $page),
            $search
        );
        $context['page'] = $page;
        $context['elem_per_page'] = ADMIN_MAX_ELEMENTS;
        $context['count'] = $this->model_сlass_name::count(
            $this->custom_filter_fields(),
            $search
        );

        // Get fields to display in the table
        $table_fields = array();
        foreach ($this->table_fields as $title => $field) {
            // Check field is function or not
            $is_func = false;
            if (str_ends_with($field, "()")) {
                $is_func = true;
                $field = substr($field,  0, -strlen('()'));
            }


            $table_fields[] = array(
                'field_title' => $title,
                'is_func' => $is_func,
                'field_name' => $field
            );
        }
        $context['table_fields'] = $table_fields;

        // Verbose names
        $context['verbose_name'] = $this->verbose_name;
        $context['verbose_name_multiply'] = $this->verbose_name_multiply;

        // Router name to link every object and link to create object
        $context['single_router_name'] = $this->single_router_name;
        $context['create_router_name'] = $this->create_router_name;

        return $context;
    }
}
