<?php
/**
 * 禁止 WHMCS 外直接访问
 */
defined('WHMCS') OR die('Access Denied');

/**
 * 模块信息
 *
 * @return array
 */
function DemoServer_MetaData()
{
    /*
     * 可用内容查阅:
     *
     * http://developers.whmcs.com/provisioning-modules/meta-data-params/
     */
    return [
        'DisplayName' => '演示模块'
    ];
}

/**
 * 测试内容
 *
 * @param $vars
 *
 * @return array
 */
function DemoServer_TestConnection($vars)
{
    try
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
         * 返回成功
         */
        return [
            'success' => true
        ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage()
        ];
    }
}

/**
 * 模块配置
 *
 * @param $vars
 *
 * @return array
 */
function DemoServer_ConfigOptions($vars)
{
    /**
     * 传入信息
     */
    print_r($vars);
    die(); // 可执行测试打印展示

    /**
     * 返回结果
     */
    return [
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
    ];
}

/**
 * 新建服务
 *
 * @param $vars
 *
 * @return string
 */
function DemoServer_CreateAccount($vars)
{
    try
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
         * 返回成功
         */
        return 'success';
    }
    catch (Exception $e)
    {
        /**
         * 模块名称
         */
        $moduleName = basename(__FILE__, '.php');

        /**
         * 记录日志
         */
        logModuleCall(
            $moduleName, // 模块名称
            __FUNCTION__, // 函数名称
            $vars, // 记录传值
            $e->getMessage(), // 记录错误信息
            $e->getTraceAsString()
        );

        /**
         * 返回错误
         */
        return $e->getMessage();
    }
}

/**
 * 暂停服务
 *
 * @param $vars
 *
 * @return string
 */
function DemoServer_SuspendAccount($vars)
{
    try
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
         * 返回成功
         */
        return 'success';
    }
    catch (Exception $e)
    {
        /**
         * 模块名称
         */
        $moduleName = basename(__FILE__, '.php');

        /**
         * 记录日志
         */
        logModuleCall(
            $moduleName, // 模块名称
            __FUNCTION__, // 函数名称
            $vars, // 记录传值
            $e->getMessage(), // 记录错误信息
            $e->getTraceAsString()
        );

        /**
         * 返回错误
         */
        return $e->getMessage();
    }
}

/**
 * 解除暂停
 *
 * @param $vars
 *
 * @return string
 */
function DemoServer_UnSuspendAccount($vars)
{
    try
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
         * 返回成功
         */
        return 'success';
    }
    catch (Exception $e)
    {
        /**
         * 模块名称
         */
        $moduleName = basename(__FILE__, '.php');

        /**
         * 记录日志
         */
        logModuleCall(
            $moduleName, // 模块名称
            __FUNCTION__, // 函数名称
            $vars, // 记录传值
            $e->getMessage(), // 记录错误信息
            $e->getTraceAsString()
        );

        /**
         * 返回错误
         */
        return $e->getMessage();
    }
}

/**
 * 终止服务
 *
 * @param $vars
 *
 * @return string
 */
function DemoServer_TerminateAccount($vars)
{
    try
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
         * 返回成功
         */
        return 'success';
    }
    catch (Exception $e)
    {
        /**
         * 模块名称
         */
        $moduleName = basename(__FILE__, '.php');

        /**
         * 记录日志
         */
        logModuleCall(
            $moduleName, // 模块名称
            __FUNCTION__, // 函数名称
            $vars, // 记录传值
            $e->getMessage(), // 记录错误信息
            $e->getTraceAsString()
        );

        /**
         * 返回错误
         */
        return $e->getMessage();
    }
}

/**
 * 修改密码
 *
 * @param $vars
 *
 * @return string
 */
function DemoServer_ChangePassword($vars)
{
    try
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
         * 返回成功
         */
        return 'success';
    }
    catch (Exception $e)
    {
        /**
         * 模块名称
         */
        $moduleName = basename(__FILE__, '.php');

        /**
         * 记录日志
         */
        logModuleCall(
            $moduleName, // 模块名称
            __FUNCTION__, // 函数名称
            $vars, // 记录传值
            $e->getMessage(), // 记录错误信息
            $e->getTraceAsString()
        );

        /**
         * 返回错误
         */
        return $e->getMessage();
    }
}

/**
 * 更改套餐
 *
 * @param $vars
 *
 * @return string
 */
function DemoServer_ChangePackage($vars)
{
    try
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
         * 返回成功
         */
        return 'success';
    }
    catch (Exception $e)
    {
        /**
         * 模块名称
         */
        $moduleName = basename(__FILE__, '.php');

        /**
         * 记录日志
         */
        logModuleCall(
            $moduleName, // 模块名称
            __FUNCTION__, // 函数名称
            $vars, // 记录传值
            $e->getMessage(), // 记录错误信息
            $e->getTraceAsString()
        );

        /**
         * 返回错误
         */
        return $e->getMessage();
    }
}

/**
 * 续费函数
 *
 * @param $vars
 *
 * @return string
 */
function DemoServer_Renew($vars)
{
    try
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
         * 返回成功
         */
        return 'success';
    }
    catch (Exception $e)
    {
        /**
         * 模块名称
         */
        $moduleName = basename(__FILE__, '.php');

        /**
         * 记录日志
         */
        logModuleCall(
            $moduleName, // 模块名称
            __FUNCTION__, // 函数名称
            $vars, // 记录传值
            $e->getMessage(), // 记录错误信息
            $e->getTraceAsString()
        );

        /**
         * 返回错误
         */
        return $e->getMessage();
    }
}

/**
 * 自定义函数
 *
 * @param $vars
 *
 * @return string
 */
function DemoServer_DemoFunction($vars)
{
    try
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
         * 返回成功
         */
        return 'success';
    }
    catch (Exception $e)
    {
        /**
         * 模块名称
         */
        $moduleName = basename(__FILE__, '.php');

        /**
         * 记录日志
         */
        logModuleCall(
            $moduleName, // 模块名称
            __FUNCTION__, // 函数名称
            $vars, // 记录传值
            $e->getMessage(), // 记录错误信息
            $e->getTraceAsString()
        );

        /**
         * 返回错误
         */
        return $e->getMessage();
    }
}

/**
 * 前台输出
 *
 * @param $vars
 *
 * @return array
 */
function DemoServer_ClientArea($vars)
{
    try
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
         * 返回变量 ( 关联数组, 键值分别作为模板中的变量名与值 )
         */
        $result = [];
    }
    catch (Exception $e)
    {
        /**
         * 返回变量
         */
        $result = [
            'title' => '出现错误',
            'message' => $e->getMessage()
        ];
    }
    finally
    {
        return [
            'tabOverviewReplacementTemplate' => 'clientarea', // 模板名称 ( 不需要包含后缀 )
            'templateVariables' => $result ?: [] // 传入模板的变量
        ];
    }
}

/**
 * 客户中心按钮
 *
 * @return array
 */
function DemoServer_ClientAreaCustomButtonArray()
{
    return [
        '演示功能' => 'DemoFunction' // 按钮触发的函数
    ];
}

/**
 * 客户中心允许执行的函数 ( 和按钮功能一样、但是不显示按钮 )
 *
 * @return array
 */
function DemoServer_ClientAreaAllowedFunctions()
{
    return [
        '演示功能' => 'DemoFunction' // 触发的函数
    ];
}

/**
 * 后台按钮
 *
 * @return array
 */
function DemoServer_AdminCustomButtonArray()
{
    return [
        '演示功能' => 'DemoFunction' // 按钮触发的函数
    ];
}

/**
 * 后台信息输出
 *
 * @param $vars
 *
 * @return array
 */
function DemoServer_AdminServicesTabFields($vars)
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
        'Demo' => '<input class="form-control" placeholder="Demo Input" />'
    ];
}

/**
 * 后台信息保存
 *
 * @param $vars
 */
function DemoServer_AdminServicesTabFieldsSave($vars)
{
    /**
     * 传入信息
     */
    print_r($vars);
    die(); // 可执行测试打印展示

    /**
     * 获取 POST 的信息并编写自己保存时所执行的代码
     */
}
