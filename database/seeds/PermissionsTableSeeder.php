<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'setting_access',
            ],
            [
                'id'    => 20,
                'title' => 'cm_access',
            ],
            [
                'id'    => 21,
                'title' => 'order_create',
            ],
            [
                'id'    => 22,
                'title' => 'order_edit',
            ],
            [
                'id'    => 23,
                'title' => 'order_show',
            ],
            [
                'id'    => 24,
                'title' => 'order_delete',
            ],
            [
                'id'    => 25,
                'title' => 'order_access',
            ],
            [
                'id'    => 26,
                'title' => 'coupon_create',
            ],
            [
                'id'    => 27,
                'title' => 'coupon_edit',
            ],
            [
                'id'    => 28,
                'title' => 'coupon_show',
            ],
            [
                'id'    => 29,
                'title' => 'coupon_delete',
            ],
            [
                'id'    => 30,
                'title' => 'coupon_access',
            ],
            [
                'id'    => 31,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 32,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 33,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 34,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 35,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 36,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 37,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 38,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 39,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 40,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 41,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 42,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 43,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 44,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 45,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 46,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 47,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 48,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 49,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 50,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 51,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 52,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 53,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 54,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 55,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 56,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 57,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 58,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 59,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 60,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 61,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 62,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 63,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 64,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 65,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 66,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 67,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 68,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 69,
                'title' => 'product_create',
            ],
            [
                'id'    => 70,
                'title' => 'product_edit',
            ],
            [
                'id'    => 71,
                'title' => 'product_show',
            ],
            [
                'id'    => 72,
                'title' => 'product_delete',
            ],
            [
                'id'    => 73,
                'title' => 'product_access',
            ],
            [
                'id'    => 74,
                'title' => 'banner_create',
            ],
            [
                'id'    => 75,
                'title' => 'banner_edit',
            ],
            [
                'id'    => 76,
                'title' => 'banner_show',
            ],
            [
                'id'    => 77,
                'title' => 'banner_delete',
            ],
            [
                'id'    => 78,
                'title' => 'banner_access',
            ],
            [
                'id'    => 79,
                'title' => 'news_create',
            ],
            [
                'id'    => 80,
                'title' => 'news_edit',
            ],
            [
                'id'    => 81,
                'title' => 'news_show',
            ],
            [
                'id'    => 82,
                'title' => 'news_delete',
            ],
            [
                'id'    => 83,
                'title' => 'news_access',
            ],
            [
                'id'    => 84,
                'title' => 'brand_create',
            ],
            [
                'id'    => 85,
                'title' => 'brand_edit',
            ],
            [
                'id'    => 86,
                'title' => 'brand_show',
            ],
            [
                'id'    => 87,
                'title' => 'brand_delete',
            ],
            [
                'id'    => 88,
                'title' => 'brand_access',
            ],
            [
                'id'    => 89,
                'title' => 'usp_create',
            ],
            [
                'id'    => 90,
                'title' => 'usp_edit',
            ],
            [
                'id'    => 91,
                'title' => 'usp_show',
            ],
            [
                'id'    => 92,
                'title' => 'usp_delete',
            ],
            [
                'id'    => 93,
                'title' => 'usp_access',
            ],
            [
                'id'    => 94,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
