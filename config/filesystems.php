<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. A "local" driver, as well as a variety of cloud
    | based drivers are available for your choosing. Just store away!
    |
    | Supported: "local", "ftp", "s3", "rackspace"
    |
    */

    'default' => 'local',

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => 's3',

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root'   => storage_path('app'),
        ],

        'ftp' => [
            'driver'   => 'ftp',
            'host'     => 'ftp.example.com',
            'username' => 'your-username',
            'password' => 'your-password',

            // Optional FTP Settings...
            // 'port'     => 21,
            // 'root'     => '',
            // 'passive'  => true,
            // 'ssl'      => true,
            // 'timeout'  => 30,
        ],

        's3_first' => [
            'driver' => 's3',
//            'key'    => 'AKIAJT3IHN6PY3XITZ2Q',
//            'secret' => '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',
//            'region' => 'ap-southeast-1',
//            'bucket' => 'scalehack-test-bucket-one',
            'key'    => 'AKIAJMNPUPX3I62WFM4Q',
            'secret' => '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',
            'region' => 'eu-central-1',
            'bucket' => 'pylypen',
        ],
        
        's3_second' => [
            'driver' => 's3',
//            'key'    => 'AKIAJBPLWIEL6KAKAS3A',
//            'secret' => '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',
//            'region' => 'ap-southeast-1',
//            'bucket' => 'scalehack-test-bucket-two',
            'key'    => 'AKIAJMNPUPX3I62WFM4Q',
            'secret' => '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',
            'region' => 'eu-central-1',
            'bucket' => 'pylypen',
        ],

        'rackspace' => [
            'driver'    => 'rackspace',
            'username'  => 'your-username',
            'key'       => 'your-key',
            'container' => 'your-container',
            'endpoint'  => 'https://identity.api.rackspacecloud.com/v2.0/',
            'region'    => 'IAD',
            'url_type'  => 'publicURL',
        ],

    ],

];
