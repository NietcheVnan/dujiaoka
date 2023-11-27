<?php

return [
    'labels' => [
        'Carmis' => 'Activation Code',
        'carmis' => 'Activation Code',
    ],
    'fields' => [
        'goods_id' => 'Belongs to Product',
        'status' => 'Status',
        'carmi' => 'Activation Code Content',
        'status_unsold' => 'Not Sold',
        'status_sold' => 'Sold',
        'is_loop' => 'Looping Activation Code',
		'yes' => 'Yes',
        'import_carmis' => 'Import Activation Codes',
        'carmis_list' => 'Activation Code List',
        'carmis_txt' => 'Activation Code Text',
        'are_you_import_sure' => 'Are you sure you want to import activation codes?',
        'remove_duplication' => 'Remove Duplicates',
    ],
    'options' => [
    ],
    'helps' => [
        'carmis_list' => 'One per line, separated by Enter. Do not import activation codes with individual text length too large, as it may lead to memory overflow. If the activation code is too large, it is recommended to manually process the product.'
    ],
    'rule_messages' => [
        'carmis_list_and_carmis_txt_can_not_be_empty' => 'Please fill in the activation codes to be imported or select the activation code file to be uploaded',
        'import_carmis_success' => 'Activation codes imported successfully!'
    ]
];
