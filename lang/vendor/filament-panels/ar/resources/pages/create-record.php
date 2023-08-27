<?php

return [

    'title' => 'إضافة :label',

    'breadcrumb' => 'إضافة',

    'form' => [

        'actions' => [

            'cancel' => [
                'label' => 'إلغاء',
            ],

            'create' => [
                'label' => 'إضافة',
            ],

            'create_another' => [
                'label' => 'إضافة وبدء إضافة المزيد',
            ],

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
    'notifications' => [

        'created' => [
            'title' => 'تمت الإضافة',
        ],

    ],

];
