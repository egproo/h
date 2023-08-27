<?php

return [

    'direction' => 'rtl',

    'actions' => [

        'billing' => [
            'label' => 'الفواتير',
        ],

        'logout' => [
            'label' => 'تسجيل الخروج',
        ],

        'open_database_notifications' => [
            'label' => 'عرض التنبيهات',
        ],

        'open_user_menu' => [
            'label' => 'قائمة المستخدم',
        ],

        'sidebar' => [

            'collapse' => [
                'label' => 'طيّ الشريط الجانبي',
            ],

            'expand' => [
                'label' => 'توسيع الشريط الجانبي',
            ],

        ],
    'validation' => [
        'required' => 'حقل :attribute مطلوب.',
        'string' => 'يجب أن يكون :attribute نصيًا.',
        'max' => [
            'string' => ':attribute يجب ألا يتجاوز :max حرفًا.',
        ],
        'unique' => ':attribute مُستخدم بالفعل.',
        'boolean' => 'يجب أن يكون :attribute صحيحًا أو خاطئًا.',
    ],
        'theme_switcher' => [

            'dark' => [
                'label' => 'تفعيل الوضع الليلي',
            ],

            'light' => [
                'label' => 'تفعيل وضع النهار',
            ],

            'system' => [
                'label' => 'تفعيل سمة النظام',
            ],

        ],

    ],

];
