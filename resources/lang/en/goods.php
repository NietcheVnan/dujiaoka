<?php

return [
    'labels' => [
        'Goods' => 'Goods',
        'goods' => 'Goods',
    ],
    'fields' => [
        'actual_price' => 'Actual Price',
        'group_id' => 'Category',
        'api_hook' => 'Callback Event',
        'buy_prompt' => 'Purchase Prompt',
        'description' => 'Product Description',
        'gd_name' => 'Product Name',
        'gd_description' => 'Product Description',
        'gd_keywords' => 'Product Keywords',
        'in_stock' => 'Stock',
        'ord' => 'Sorting Weight',
        'other_ipu_cnf' => 'Other Input Box Configuration',
        'picture' => 'Product Image',
        'retail_price' => 'Retail Price',
        'sales_volume' => 'Sales Volume',
        'type' => 'Product Type',
        'buy_limit_num' => 'Maximum Quantity for Single Purchase',
        'wholesale_price_cnf' => 'Wholesale Price Configuration',
        'automatic_delivery' => 'Automatic Delivery',
        'manual_processing' => 'Manual Processing',
        'is_open' => 'Is On Sale',
        'coupon_id' => 'Available Coupon Code'
    ],
    'options' => [
    ],
    'helps' => [
        'retail_price' => 'Can be left blank, mainly for display',
        'picture' => 'Can be left blank for default image',
        'in_stock' => 'When the product type is "Manual Processing", manually entered inventory quantity will take effect. For "Automatic Delivery" type products, the system will automatically recognize the inventory quantity',
        'buy_limit_num' => 'Prevent malicious stockpiling, 0 means no limit on the maximum quantity per order for customers',
        'other_ipu_cnf' => 'Format is [Unique Identifier (English)=Input Box Name=Required or Not], for example: entering qq_account=QQ Account=true means that a [QQ Account] input box will be added to the product details page, where customers can enter [QQ Account], true means it is required, false means it is optional. (One line per item)',
        'wholesale_price_cnf' => 'For example, entering 5=3 means that when customers purchase 5 items or more, the price per item is 3 yuan. (One line per item)',
    ]
];
