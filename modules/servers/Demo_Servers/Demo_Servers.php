<?php
// 禁止除了 WHMCS 之外的地方访问
defined('WHMCS') OR die('Access denied.');

// 模块信息
function Demo_Servers_MetaData()
{
    /*
     * 可用内容查阅:
     *
     * http://developers.whmcs.com/provisioning-modules/meta-data-params/
     */
    return [
        'DisplayName' => 'Demo Server'
    ];
}

// 测试连接
function Demo_Servers_TestConnection($vars)
{
    try
    {
        /*
         * 编写测试代码
         */

        // 返回成功
        return ['success' => true];
    }
    catch (Exception $e)
    {
        // 返回错误信息
        return ['error' => $e->getMessage()];
    }
}

// 模块配置
function Demo_Servers_ConfigOptions($vars)
{
    /*
     * 返回一个数组，其中包含你需要输出的配置项目
     *
     * http://developers.whmcs.com/provisioning-modules/config-options/
     */
    return [
        "username" => [
            "FriendlyName" => "UserName",
            "Type" => "text", // Text Box
            "Size" => "25", // Defines the Field Width
            "Description" => "Textbox",
            "Default" => "Example",
        ],
        "password" => [
            "FriendlyName" => "Password",
            "Type" => "password", // Password Field
            "Size" => "25", // Defines the Field Width
            "Description" => "Password",
            "Default" => "Example",
        ],
        "usessl" => [
            "FriendlyName" => "Enable SSL",
            "Type" => "yesno", // Yes/No Checkbox
            "Description" => "Tick to use secure connections",
        ],
        "package" => [
            "FriendlyName" => "Package Name",
            "Type" => "dropdown", // Dropdown Choice of Options
            "Options" => "Starter,Advanced,Ultimate",
            "Description" => "Sample Dropdown",
            "Default" => "Advanced",
        ],
        "packageWithNVP" => [
            "FriendlyName" => "Package Name v2",
            "Type" => "dropdown", // Dropdown Choice of Options
            "Options" => [
                'package1' => 'Starter',
                'package2' => 'Advanced',
                'package3' => 'Ultimate',
            ],
            "Description" => "Sample Dropdown",
            "Default" => "package2",
        ],
        "disk" => [
            "FriendlyName" => "Disk Space",
            "Type" => "radio", // Radio Selection of Options
            "Options" => "100MB,200MB,300MB",
            "Description" => "Radio Options Demo",
            "Default" => "200MB",
        ],
        "comments" => [
            "FriendlyName" => "Notes",
            "Type" => "textarea", // Textarea
            "Rows" => "3", // Number of Rows
            "Cols" => "50", // Number of Columns
            "Description" => "Description goes here",
            "Default" => "Enter notes here",
        ],
    ];
}

// 新建服务
function Demo_Servers_CreateAccount($vars)
{
    // 错误处理
    try
    {
        /*
         * 编写代码
         */
        print_r($vars);die();

        // 如果成功的话返回 success 字符串
        return 'success';
    }
    catch (Exception $e)
    {
        // 获取函数名称
        $funcName = explode('_', __FUNCTION__);
        $funcName = end($funcName);

        // 模块名称 ( 通过替换删除函数名称取得模块名称 )
        $moduleName = str_replace(
            '_'.$funcName,
            '',
            __FUNCTION__
        );

        // 记录日志
        logModuleCall(
            $moduleName, // 模块名称
            $funcName, // 函数名称
            $vars, // 记录传值
            $e->getMessage(), // 记录错误信息
            $e->getTraceAsString()
        );

        // 返回错误信息
        return $e->getMessage();
    }
}

// 暂停服务
function Demo_Servers_SuspendAccount($vars)
{
    // 错误处理
    try
    {
        /*
         * 编写代码
         */
        print_r($vars);die();

        // 如果成功的话返回 success 字符串
        return 'success';
    }
    catch (Exception $e)
    {
        // 获取函数名称
        $funcName = explode('_', __FUNCTION__);
        $funcName = end($funcName);

        // 模块名称 ( 通过替换删除函数名称取得模块名称 )
        $moduleName = str_replace(
            '_'.$funcName,
            '',
            __FUNCTION__
        );

        // 记录日志
        logModuleCall(
            $moduleName, // 模块名称
            $funcName, // 函数名称
            $vars, // 记录传值
            $e->getMessage(), // 记录错误信息
            $e->getTraceAsString()
        );

        // 返回错误信息
        return $e->getMessage();
    }
}

// 解除暂停
function Demo_Servers_UnSuspendAccount($vars)
{
    // 错误处理
    try
    {
        /*
         * 编写代码
         */
        print_r($vars);die();

        // 如果成功的话返回 success 字符串
        return 'success';
    }
    catch (Exception $e)
    {
        // 获取函数名称
        $funcName = explode('_', __FUNCTION__);
        $funcName = end($funcName);

        // 模块名称 ( 通过替换删除函数名称取得模块名称 )
        $moduleName = str_replace(
            '_'.$funcName,
            '',
            __FUNCTION__
        );

        // 记录日志
        logModuleCall(
            $moduleName, // 模块名称
            $funcName, // 函数名称
            $vars, // 记录传值
            $e->getMessage(), // 记录错误信息
            $e->getTraceAsString()
        );

        // 返回错误信息
        return $e->getMessage();
    }
}

// 终止服务
function Demo_Servers_TerminateAccount($vars)
{
    // 错误处理
    try
    {
        /*
         * 编写代码
         */
        print_r($vars);die();

        // 如果成功的话返回 success 字符串
        return 'success';
    }
    catch (Exception $e)
    {
        // 获取函数名称
        $funcName = explode('_', __FUNCTION__);
        $funcName = end($funcName);

        // 模块名称 ( 通过替换删除函数名称取得模块名称 )
        $moduleName = str_replace(
            '_'.$funcName,
            '',
            __FUNCTION__
        );

        // 记录日志
        logModuleCall(
            $moduleName, // 模块名称
            $funcName, // 函数名称
            $vars, // 记录传值
            $e->getMessage(), // 记录错误信息
            $e->getTraceAsString()
        );

        // 返回错误信息
        return $e->getMessage();
    }
}

// 修改密码
function Demo_Servers_ChangePassword($vars)
{
    // 错误处理
    try
    {
        /*
         * 编写代码
         */
        print_r($vars);die();

        // 如果成功的话返回 success 字符串
        return 'success';
    }
    catch (Exception $e)
    {
        // 获取函数名称
        $funcName = explode('_', __FUNCTION__);
        $funcName = end($funcName);

        // 模块名称 ( 通过替换删除函数名称取得模块名称 )
        $moduleName = str_replace(
            '_'.$funcName,
            '',
            __FUNCTION__
        );

        // 记录日志
        logModuleCall(
            $moduleName, // 模块名称
            $funcName, // 函数名称
            $vars, // 记录传值
            $e->getMessage(), // 记录错误信息
            $e->getTraceAsString()
        );

        // 返回错误信息
        return $e->getMessage();
    }
}

// 更改套餐
function Demo_Servers_ChangePackage($vars)
{
    // 错误处理
    try
    {
        /*
         * 编写代码
         */
        print_r($vars);die();

        // 如果成功的话返回 success 字符串
        return 'success';
    }
    catch (Exception $e)
    {
        // 获取函数名称
        $funcName = explode('_', __FUNCTION__);
        $funcName = end($funcName);

        // 模块名称 ( 通过替换删除函数名称取得模块名称 )
        $moduleName = str_replace(
            '_'.$funcName,
            '',
            __FUNCTION__
        );

        // 记录日志
        logModuleCall(
            $moduleName, // 模块名称
            $funcName, // 函数名称
            $vars, // 记录传值
            $e->getMessage(), // 记录错误信息
            $e->getTraceAsString()
        );

        // 返回错误信息
        return $e->getMessage();
    }
}

// 客户中心
function Demo_Servers_ClientArea($vars)
{
    // 错误处理
    try
    {
        /*
         * 编写代码
         */
        print_r($vars);die();

        // 返回变量到页面
        $result = [];
    }
    catch (Exception $e)
    {
        // 返回变量到页面
        $result = [
            'title' => '出现错误',
            'message' => $e->getMessage()
        ];
    }
    finally
    {
        return [
            'tabOverviewReplacementTemplate' => 'clientarea',
            'templateVariables' => $result ?: []
        ];
    }
}

// 客户中心按钮
function Demo_Servers_ClientAreaCustomButtonArray($vars)
{
    return [
        '演示功能' => 'DemoFunction' // 按钮触发的函数
    ];
}

// 客户中心允许执行的函数 ( 和按钮功能一样、但是不显示按钮 )
function Demo_Servers_ClientAreaAllowedFunctions($vars)
{
    return [
        '演示功能' => 'DemoFunction' // 触发的函数
    ];
}

// 后台按钮
function Demo_Servers_AdminCustomButtonArray($vars)
{
    return [
        '演示功能' => 'DemoFunction' // 按钮触发的函数
    ];
}

// 后台信息输出
function Demo_Servers_AdminServicesTabFields($vars)
{
    // 返回信息
    return [
        'Demo' => '<input class="form-control" placeholder="Demo Input" />'
    ];
}

// 后台信息保存
function Demo_Servers_AdminServicesTabFieldsSave($vars)
{
    // 获取 _POST 的信息并编写自己保存时所执行的代码
}

// 续费服务
function Demo_Servers_Renew($vars)
{
    // 错误处理
    try
    {
        /*
         * 编写代码
         */
        print_r($vars);die();

        // 如果成功的话返回 success 字符串
        return 'success';
    }
    catch (Exception $e)
    {
        // 获取函数名称
        $funcName = explode('_', __FUNCTION__);
        $funcName = end($funcName);

        // 模块名称 ( 通过替换删除函数名称取得模块名称 )
        $moduleName = str_replace(
            '_'.$funcName,
            '',
            __FUNCTION__
        );

        // 记录日志
        logModuleCall(
            $moduleName, // 模块名称
            $funcName, // 函数名称
            $vars, // 记录传值
            $e->getMessage(), // 记录错误信息
            $e->getTraceAsString()
        );

        // 返回错误信息
        return $e->getMessage();
    }
}

// 其他函数 ( 自己的函数 )
function Demo_Servers_DemoFunction($vars)
{
    // 错误处理
    try
    {
        /*
         * 编写代码
         */
        print_r($vars);die();

        // 如果成功的话返回 success 字符串
        return 'success';
    }
    catch (Exception $e)
    {
        // 获取函数名称
        $funcName = explode('_', __FUNCTION__);
        $funcName = end($funcName);

        // 模块名称 ( 通过替换删除函数名称取得模块名称 )
        $moduleName = str_replace(
            '_'.$funcName,
            '',
            __FUNCTION__
        );

        // 记录日志
        logModuleCall(
            $moduleName, // 模块名称
            $funcName, // 函数名称
            $vars, // 记录传值
            $e->getMessage(), // 记录错误信息
            $e->getTraceAsString()
        );

        // 返回错误信息
        return $e->getMessage();
    }
}