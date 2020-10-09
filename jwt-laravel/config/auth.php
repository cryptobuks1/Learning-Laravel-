<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    */
    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    | Supported: "session", "token"
    |
    */
    //duy trì SESSION trạng thái người dùng
    //yêu cầu người dùng phải hợp lệ với bộ lưu trữ BE
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],

        // ------------
        'customer' => [
            'driver' => 'session',
            'provider' => 'customers',
        ],
        'customer-api' => [
            'driver' => 'token',
            'provider' => 'customers',
        ],
        // ------------
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    | Supported: "database", "eloquent"
    |
    */
    //có sẵn trong auth.php------
    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        // ------------
        //truy suất dữ liệu cho bảng thông qua Model
        //providers lấy dữ liệu ng dùng từ phía BE
        'customers' => [
            'driver' => 'eloquent',
            'model' => App\Customer::class,
        ],
        // ------------
        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    */
    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'customers' => [
            'provider' => 'customers',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    */
    'password_timeout' => 10800,

];
