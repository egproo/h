<?php

return [

    'actions' => [

        'close' => [
            'label' => 'إغلاق',
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
];
