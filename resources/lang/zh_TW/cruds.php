<?php

return [
    'userManagement'    => [
        'title'          => '使用者管理',
        'title_singular' => '使用者管理',
    ],
    'permission'     => [
        'title'          => '權限',
        'title_singular' => '權限',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'title'             => '標題',
            'title_helper'      => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => '角色',
        'title_singular' => '角色',
        'fields'         => [
            'id'                 => '編號',
            'id_helper'          => '',
            'title'              => '標題',
            'title_helper'       => '',
            'permissions'        => '權限',
            'permissions_helper' => '',
            'created_at'         => '建立時間',
            'created_at_helper'  => '',
            'updated_at'         => '更新時間',
            'updated_at_helper'  => '',
            'deleted_at'         => '刪除時間',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => '使用者',
        'title_singular' => '使用者',
        'fields'         => [
            'id'                       => '編號',
            'id_helper'                => '',
            'name'                     => '名稱',
            'name_helper'              => '',
            'email'                    => '電子郵件',
            'email_helper'             => '',
            'email_verified_at'        => '電子郵件驗證時間',
            'email_verified_at_helper' => '',
            'password'                 => '密碼',
            'password_helper'          => '',
            'roles'                    => '角色',
            'roles_helper'             => '',
            'remember_token'           => '記住令牌',
            'remember_token_helper'    => '',
            'created_at'               => '建立時間',
            'created_at_helper'        => '',
            'updated_at'               => '更新時間',
            'updated_at_helper'        => '',
            'deleted_at'               => '刪除時間',
            'deleted_at_helper'        => '',
        ],
    ],
    'expenseManagement' => [
        'title'          => '費用管理',
        'title_singular' => '費用管理',
    ],
    'expenseCategory'   => [
        'title'          => '費用類別',
        'title_singular' => '費用類別',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'name'              => '名稱',
            'name_helper'       => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
            'created_by'        => '建立人員',
            'created_by_helper' => '',
        ],
    ],
    'incomeCategory'    => [
        'title'          => '收入類別',
        'title_singular' => '收入類別',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'name'              => '名稱',
            'name_helper'       => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
            'created_by'        => '建立人員',
            'created_by_helper' => '',
        ],
    ],
    'expense'           => [
        'title'          => '費用',
        'title_singular' => '費用',
        'fields'         => [
            'id'                      => '編號',
            'id_helper'               => '',
            'expense_category'        => '費用類別',
            'expense_category_helper' => '',
            'entry_date'              => '紀錄日期',
            'entry_date_helper'       => '',
            'amount'                  => '總額',
            'amount_helper'           => '',
            'description'             => '描述',
            'description_helper'      => '',
            'created_at'              => '建立時間',
            'created_at_helper'       => '',
            'updated_at'              => '更新時間',
            'updated_at_helper'       => '',
            'deleted_at'              => '刪除時間',
            'deleted_at_helper'       => '',
            'created_by'              => '建立人員',
            'created_by_helper'       => '',
        ],
    ],
    'income'            => [
        'title'          => '收入',
        'title_singular' => '收入',
        'fields'         => [
            'id'                     => '編號',
            'id_helper'              => '',
            'income_category'        => '收入類別',
            'income_category_helper' => '',
            'entry_date'             => '紀錄日期',
            'entry_date_helper'      => '',
            'amount'                 => '總額',
            'amount_helper'          => '',
            'description'            => '描述',
            'description_helper'     => '',
            'created_at'             => '建立時間',
            'created_at_helper'      => '',
            'updated_at'             => '更新時間',
            'updated_at_helper'      => '',
            'deleted_at'             => '刪除時間',
            'deleted_at_helper'      => '',
            'created_by'             => '建立人員',
            'created_by_helper'      => '',
        ],
    ],
    'expenseReport'     => [
        'title'          => '月報',
        'title_singular' => '月報',
        'reports'        => [
            'title'             => '報告',
            'title_singular'    => '報告',
            'incomeReport'      => '收入報告',
            'incomeByCategory'  => '依類別收入',
            'expenseByCategory' => '依類別花費',
            'income'            => '收入',
            'expense'           => '花費',
            'profit'            => '利潤',
        ],
    ],
];
