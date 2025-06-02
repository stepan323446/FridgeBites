<?php

function get_ajax_error($message, $error_code = 500)
{
    http_response_code($error_code);

    $error = array();
    $error['error'] = $message;

    return json_encode($error, JSON_PRETTY_PRINT);
}

/**
 * Ajax actions
 */
function ajax_search($args) {
    $search_query = $args['query'];

    $result = [];
    $data = [
        [
            'id' => 2,
            'name' => 'Genshin Impact'
        ],
        [
            'id' => 3,
            'name' => 'Zenless zone zero'
        ],
        [
            'id' => 4,
            'name' => 'Honkai Star Rail'
        ],
        [
            'id' => 5,
            'name' => 'Honkai Impact'
        ],
    ];
    $result['results'] = [];

    foreach ($data as $key => $value) {
        if(str_contains($value['name'], $search_query)) 
            $result['results'][] = $value;
    }
    sleep(3);

    return json_encode($result, JSON_PRETTY_PRINT);
}