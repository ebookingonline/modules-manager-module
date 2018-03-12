<?php
    return [
        "id"                  => "modules-manager",
        "name"                => "Modules manager",
        "description"         => "Manage system modules",
        "icon"                => '',
        "priority"            => 10,
        "autoActive"          => true,
        "contexts"            => ['backend'],
        "controllerNamespace" => "Modules\\ModulesManager\\Http\\Controllers",
        "version"             => 1.0,
        "author"              => "Ata amini",
        "email"               => "ata.aminie@gmail.com",
        "basePath"            => __DIR__,
        "resourcesPath"       => "Resources",
        "modules"             => [],
        "aliases"             => [],
        "configuration"       => [],
        "menuExtender"        => [
            "admin::sidebar" => "Modules\\ModulesManager\\Menu\\Backend\\SidebarMenuExtender"
        ],
        "routes"              => [
            "backend" => "Http/Routes/Backend/Routes.php"
        ],
        "providers"           => [
            "Modules\\ModulesManager\\Providers\\ModulesManagerServiceProvider"
        ]
    ];