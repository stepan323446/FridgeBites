<?php

namespace Lycoreco\Apps\Admin\Controllers;


class AdminBanListController extends Abstract\AdminListController
{
    protected $model_сlass_name = "Lycoreco\Apps\Users\Models\BanlistModel";
    protected $table_fields = array(
        'Reason' => 'field_reason',
        'Created at' => 'field_created_at',
        'End at' => 'field_end_at',
        'Active?' => 'is_active()',
    );
    protected $single_router_name = 'admin:ban';
    protected $verbose_name = "ban";
    protected $verbose_name_multiply = "banlist";
    protected $sort_by = ['-obj.end_at'];

    public function custom_filter_fields()
    {
        $user_id = $this->url_context['url_1'];
        return array(
            [
                'name'  => 'obj.user_id',
                'type'  => '=',
                'value' => $user_id
            ]
        );
    }
}
