<?php

return [
    [
        'key' => 'sales.carriers.fedex',
        'name' => 'admin::app.admin.system.fedex-shipping',
        'sort' => 1,
        'fields' => [
            [
                'name' => 'title',
                'title' => 'admin::app.admin.system.title',
                'type' => 'text',
                'validation' => 'required',
                'channel_based' => true,
                'locale_based' => true
            ], [
                'name' => 'description',
                'title' => 'admin::app.admin.system.description',
                'type' => 'textarea',
                'channel_based' => true,
                'locale_based' => false
            ], [
                'name' => 'default_rate',
                'title' => 'admin::app.admin.system.rate',
                'type' => 'text',
                'channel_based' => true,
                'locale_based' => false
            ], [
                'name' => 'base_amount',
                'title' => 'admin::app.admin.system.minimum-amount',
                'type' => 'text',
                'channel_based' => true,
                'locale_based' => false
            ], [
                'name' => 'active',
                'title' => 'admin::app.admin.system.status',
                'type' => 'select',
                'options' => [
                    [
                        'title' => 'Active',
                        'value' => true
                    ], [
                        'title' => 'Inactive',
                        'value' => false
                    ]
                ],
                'validation' => 'required',
                'channel_based' => false,
                'locale_based' => true
            ]
        ]
    ]
];