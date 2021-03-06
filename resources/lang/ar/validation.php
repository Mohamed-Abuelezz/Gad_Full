<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'email' => 'يرجي ادخال بريد اليكتروني صالح',
    'image' => 'يجب ان تكون من نوع صورة فقط',
    'in' => 'The selected :attribute is invalid.',
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'numeric' => 'هذا الحقل يجب ان يكون رقم.',
    'password' => 'الرقم السري خطأ',
    'required' => 'هذا الحقل اجباري',
    'confirmed' => 'التأكيد لا يتطابق .',
    'same' =>   'ال :attribute وال :other يجب ان يكونوا متطابقين',
    'unique' => 'ال :attribute تم اخذه من قبل',
    'min' => [
        'numeric' => 'ال :attribute يجب ان يكون علي الاقل :min ارقام',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'هذا الحقل يجب عن يحتوي علي :min احرف علي الاقل',
        'array' => 'The :attribute must have at least :min items.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
