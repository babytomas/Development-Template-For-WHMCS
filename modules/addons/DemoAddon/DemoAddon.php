<?php
/**
 * 禁止 WHMCS 外直接访问
 */
defined('WHMCS') OR die('Access Denied');

/**
 * 模块配置
 *
 * @return array
 */
function DemoAddon_Config()
{
    return [
        /**
         * 模块名称
         */
        'name' => '演示模块',
        /**
         * 模块描述
         */
        'description' => '这是一个演示模块',
        /**
         * 模块版本
         */
        'version' => '1.0',
        /**
         * 模块作者
         */
        'author' => '极霸创新',
        /**
         * 默认语言
         */
        'language' => 'chinese',
        /**
         * 配置项目
         */
        'fields' => [
            /**
             * 文字输入框
             */
            'text' => [
                'FriendlyName' => '文字输入框',
                'Type' => 'text',
                'Size' => '25',
                'Default' => '',
                'Description' => '内容较短时可以使用此组件',
            ],
            /**
             * 密码输入框
             */
            'password' => [
                'FriendlyName' => '密码输入框',
                'Type' => 'password',
                'Size' => '25',
                'Default' => '',
                'Description' => '需要收集密码时可使用此组件',
            ],
            /**
             * 多选框
             */
            'checkbox' => [
                'FriendlyName' => '多选框',
                'Type' => 'yesno',
                'Description' => '需要使用布尔型内容时可使用此组件',
            ],
            /**
             * 下拉框
             */
            'dropdown' => [
                'FriendlyName' => '下拉框',
                'Type' => 'dropdown',
                'Options' => [
                    '选项1',
                    '选项2',
                    '选项...'
                ],
                'Description' => '有多个选项但只能单选, 需要下拉框时可以使用此组件',
            ],
            /**
             * 单选框
             */
            'radio' => [
                'FriendlyName' => '单选框',
                'Type' => 'radio',
                'Options' => [
                    '选项1',
                    '选项2',
                    '选项...'
                ],
                'Description' => '有多个选项但只能单选时可以使用此组件',
            ],
            /**
             * 文字区输入框
             */
            'textarea' => [
                'FriendlyName' => '文字区输入框',
                'Type' => 'textarea',
                'Rows' => '3',
                'Cols' => '60',
                'Description' => '比较多的文字内容可使用此组件',
            ],
        ]
    ];
}

/**
 * 启用函数
 *
 * @return array
 */
function DemoAddon_Activate()
{
    /**
     * 启用模块时需要执行的内容
     */

    // 根据需求自行编写内容

    /**
     * 返回结果
     */
    return [
        'status' => 'success', // 操作状态 ( 包含 success / error / info 三种 )
        'description' => '激活成功' // 描述信息
    ];
}

/**
 * 关闭函数
 *
 * @return array
 */
function DemoAddon_Dectivate()
{
    /**
     * 关闭模块时需要执行的内容
     */

    // 根据需求自行编写内容

    /**
     * 返回结果
     */
    return [
        'status' => 'success', // 操作状态 ( 包含 success / error / info 三种 )
        'description' => '关闭成功' // 描述信息
    ];
}

/**
 * 后台输出
 *
 * @param $vars
 */
function DemoAddon_OutPut($vars)
{
    /**
     * 传入信息
     */
    print_r($vars);
    die(); // 可执行测试打印展示

    /**
     * 输出内容
     */
    echo 'Demo Content';
}

/**
 * 前台输出
 *
 * @param $vars
 *
 * @return array
 */
function DemoAddon_ClientArea($vars)
{
    /**
     * 传入信息
     */
    print_r($vars);
    die(); // 可执行测试打印展示

    /**
     * 需要处理的内容
     */

    // 根据需求自行编写内容

    /**
     * 返回结果
     */
    return [
        /**
         * 页面标题
         */
        'pagetitle' => '演示模块',
        /**
         * 面包屑导航
         */
        'breadcrumb' => [
            'index.php?m=Demo_Addons' => 'Demo Addons'
        ],
        /**
         * Smarty 模板文件、不带后缀
         */
        'templatefile' => 'clientarea',
        /**
         * 是否需要客户登陆了才能看到
         */
        'requirelogin' => true,
        /**
         * 是否强制 SSL 访问
         */
        'forcessl' => false,
        /**
         * 传给 Smarty 的变量
         */
        'vars' => [
            'a' => 'b',
            'c' => 'd'
        ]
    ];
}
