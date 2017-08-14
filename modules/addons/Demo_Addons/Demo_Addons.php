<?php
// 禁止除了 WHMCS 之外的地方访问
defined('WHMCS') OR die('Access denied.');

// 设置函数
function Demo_Addons_Config()
{
    return [
        'name' => '演示模块', // 模块名称
        'description' => '这是一个演示模块', // 模块描述
        'version' => '1.0', // 模块版本
        'anthor' => '极霸创新', // 模块作者或团队
        'fields' => [ // 可配置选项
            'shurukuang' => [ // 数据库中的字段名称
                'FriendlyName' => '配置项名称1', // 友好名称，仅用于显示
                'Description' => '描述信息1', // 配置项的描述信息
                'Default' => 'xxx', // 默认值
                'Type' => 'text', // 配置项的类型
            ],
            'xialalan' => [ // 数据库中的字段名称
                'FriendlyName' => '配置项名称2', // 友好名称，仅用于显示
                'Description' => '描述信息2', // 配置项的描述信息
                'Default' => 'xxx', // 默认值
                'Type' => 'dropdown', // 配置项的类型
                'Options' => [
                    'a' => '第一个',
                    'b' => '第二个'
                ]
            ]
        ]
    ];
}

// 激活函数
function Demo_Addons_Activate()
{
    /**
     * 激活模块的时候要执行的内容
     *
     * 一般用来导入模块需要用到的数据表
     */

    // 执行完要返回的状态
    return [
        'status' => 'success', // 成功状态
        'description' => '激活成功' // 描述信息
    ];
}

// 关闭函数
function Demo_Addons_Dectivate()
{
    /**
     * 模块关闭的时候需要执行的内容
     *
     * 一般用来删除模块启动时导入的表、保持 WHMCS 清洁
     */

    // 执行完要返回的状态
    return [
        'status' => 'success', // 成功状态
        'description' => '关闭成功' // 描述信息
    ];
}

// 后台输出
function Demo_Addons_OutPut($vars)
{
    /**
     * 这里 $vars 会给你一些可能有用的内容
     *
     * 你可以在下方使用 $vars 中的内容，具体可 print_r 打印出来看一下
     */

    // 后台需要输出的内容
    echo 'Demo Content';
}

// 前台输出
function Demo_Addons_ClientArea($vars)
{
    /**
     * 这里 $vars 会给你一些可能有用的内容
     *
     * 你可以在下方使用 $vars 中的内容，具体可 print_r 打印出来看一下
     */

    // 后台需要返回的内容
    return [
        'pagetitle' => '演示模块', // 前台页面标题
        'breadcrumb' => ['index.php?m=Demo_Addons'=>'Demo Addons'], // 面包屑导航
        'templatefile' => 'clientarea', // Smarty 模板文件、不带后缀
        'requirelogin' => true, // 是否需要客户登陆了才能看到
        'forcessl' => false, // 是否强制 SSL 访问
        'vars' => [ // 传给 Smarty 的变量
            'a' => 'b',
            'c' => 'd'
        ]
    ];
}