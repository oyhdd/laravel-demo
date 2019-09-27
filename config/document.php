<?php

return [

    //外部接口
    'otherApi'  => [
        // 项目名 => 获取该项目接口列表的接口
        'rpc_order' => 'http://host.docker.internal:18310/apidoc/getApiDoc',
        'rpc_product' => 'http://host.docker.internal:18311/apidoc/getApiDoc',
    ],

    // 路由分组的分隔符
    'delimiter' => '.',

    // 不需展示的接口路由
    'hiddenMethods' => [
        // Controller::class
        'Oyhdd\Document\Controllers\TestController' => [
            // 'test',//该Controller下的此action
            // '*',//该Controller下的所有action
        ],
    ],

    // 是否显示未配置路由的接口
    'showUndefinedRouter' => false,
];