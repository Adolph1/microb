<?php
use common\widgets\Menu;

echo Menu::widget(
    [
        'options' => [
            'class' => 'sidebar-menu'
        ],
        'items' => [
            [
                'label' => Yii::t('app', 'Dashboard'),
                'url' => Yii::$app->homeUrl,
                'icon' => 'fa-dashboard',
                'active' => Yii::$app->request->url === Yii::$app->homeUrl
            ],

            [
                'label' => Yii::t('app', 'Branches'),
                'url' => ['#'],
                'icon' => 'fa fa-share-alt',
                'options' => [
                    'class' => 'treeview',
                ],
                //'visible' => Yii::$app->user->can('readPost'),
                'items' => [
                    [
                        'label' =>'Manage Branches',
                        'url' => ['/branch/index'],
                        'icon' => 'fa fa-lock',
                    ],

                ],
            ],

            [
                'label' => Yii::t('app', 'General Ledger'),
                'url' => ['#'],
                'icon' => 'fa fa-share-alt',
                'options' => [
                    'class' => 'treeview',
                ],
                //'visible' => Yii::$app->user->can('readPost'),
                'items' => [
                    [
                        'label' =>'Manage GLS',
                        'url' => ['/general-ledger/index'],
                        'icon' => 'fa fa-lock',
                    ],

                ],
            ],

			[
                'label' => Yii::t('app', 'Customers'),
                'url' => ['#'],
                'icon' => 'fa fa-users',
                'options' => [
                    'class' => 'treeview',
                ],
                //'visible' => Yii::$app->user->can('readPost'),
                'items' => [
                    [
                        'label' => Yii::t('app', 'Customer Details'),
                         'url' => ['/customer/index'],
                        'icon' => 'fa fa-user',
                    ],
                    [
                        'label' => Yii::t('app', 'Customer Accounts'),
                        'url' => ['/account/index'],
                        'icon' => 'fa fa-lock',
                    ],
                     [
                        'label' => Yii::t('app', 'Business Signatory'),
                         'url' => ['/business-signatory/index'],
                        'icon' => 'fa fa-user',
                    ],
                     [
                        'label' =>'Customer Identification',
                        'url' => ['/customer-identification/index'],
                        'icon' => 'fa fa-user',
                    ],
                ],
            ],

            [
                'label' => Yii::t('app', 'Loans and Deposits'),
                'url' => ['#'],
                'icon' => 'fa fa-money',
                'options' => [
                    'class' => 'treeview',
                ],
                //'visible' => Yii::$app->user->can('readPost'),
                'items' => [
                    [
                        'label' =>'Loans',
                        'url' => ['/contract-master/index'],
                        'icon' => 'fa fa-credit-card',
                    ],
                    [
                        'label' =>'Deposits',
                        'url' => ['/deposit/index'],
                        'icon' => 'fa fa-cc-mastercard',
                    ],
                    [
                        'label' =>'Product Definition',
                        'url' => ['/product/index'],
                        'icon' => 'fa fa-th',
                    ],
                     [
                        'label' =>'Accounting roles',
                        'url' => ['/accounting/index'],
                        'icon' => 'fa fa-lock',
                    ],

                     [
                        'label' =>'Contract events',
                        'url' => ['/event/index'],
                        'icon' => 'fa fa-th-list',
                    ],
                
                ],
            ],

            [
                'label' => Yii::t('app', 'Transaction Input'),
                'url' => ['#'],
                'icon' => 'fa fa-shopping-cart',
                'options' => [
                    'class' => 'treeview',
                ],
                //'visible' => Yii::$app->user->can('readPost'),
                'items' => [
                    [
                        'label' =>'Teller',
                        'url' => ['/teller/index'],
                        'icon' => 'fa fa-user',
                    ],
                    [
                        'label' =>'Product Definition',
                        'url' => ['/teller-product/index'],
                        'icon' => 'fa fa-lock',
                    ],
                
                ],
            ],
              [
                'label' => Yii::t('app', 'Reports'),
                'url' => ['#'],
                'icon' => 'fa fa-bar-chart',
                'options' => [
                    'class' => 'treeview',
                ],
                //'visible' => Yii::$app->user->can('readPost'),
                'items' => [
                    [
                        'label' =>'Account Statement',
                        'url' => ['/account/calculatestatement'],
                        'icon' => 'fa fa-caret-right',
                    ],
                    [
                        'label' =>'Repayment Schedule',
                        'url' => ['/loan/repaymentschedule'],
                        'icon' => 'fa fa-caret-right',
                    ],
                     [
                        'label' =>'Interest Calculation',
                        'url' => ['/account/interest'],
                        'icon' => 'fa fa-caret-right',
                    ],
                    [
                        'label' =>'Deposit interests',
                        'url' => ['/deposit/interest'],
                        'icon' => 'fa fa-caret-right',
                    ],
                
                
                ],
            ],

            [
                'label' => Yii::t('app', 'System'),
                'url' => ['#'],
                'icon' => 'fa fa-cog',
                'options' => [
                    'class' => 'treeview',
                ],
                'items' => [
                    [
                        'label' => Yii::t('app', 'Manage Users'),
                        'url' => ['/user/index'],
                        'icon' => 'fa fa-user',
                        //'visible' => (Yii::$app->user->identity->username == 'admin'),
                    ],
                    [
                        'label' => Yii::t('app', 'Manage User Roles'),
                        'url' => ['/role/index'],
                        'icon' => 'fa fa-lock',
                    ],
                     [
                        'label' => Yii::t('app', 'Manage Permissions'),
                        'url' => ['/auth-item-child/index'],
                        'icon' => 'fa fa-lock',
                    ],
                     [
                        'label' => Yii::t('app', 'GII'),
                        'url' => ['/gii'],
                        'icon' => 'fa fa-lock',
                    ],
                ],
            ],
        ]
    ]
);