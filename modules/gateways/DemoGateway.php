<?php
/**
 * 模块配置
 *
 * @return array
 */
function DemoGateway_Config()
{
    /**
     * 返回结果
     */
    return [
        /**
         * 模块名称
         */
        'FriendlyName' => [
            'Type'  => 'System',
            'Value' => '某某支付',
        ],
        /**
         * 文字输入框
         */
        'text'         => [
            'FriendlyName' => '文字输入框',
            'Type'         => 'text',
            'Size'         => '25',
            'Default'      => '',
            'Description'  => '内容较短时可以使用此组件',
        ],
        /**
         * 密码输入框
         */
        'password'     => [
            'FriendlyName' => '密码输入框',
            'Type'         => 'password',
            'Size'         => '25',
            'Default'      => '',
            'Description'  => '需要收集密码时可使用此组件',
        ],
        /**
         * 多选框
         */
        'checkbox'     => [
            'FriendlyName' => '多选框',
            'Type'         => 'yesno',
            'Description'  => '需要使用布尔型内容时可使用此组件',
        ],
        /**
         * 下拉框
         */
        'dropdown'     => [
            'FriendlyName' => '下拉框',
            'Type'         => 'dropdown',
            'Options'      => [
                '选项1',
                '选项2',
                '选项...'
            ],
            'Description'  => '有多个选项但只能单选, 需要下拉框时可以使用此组件',
        ],
        /**
         * 单选框
         */
        'radio'        => [
            'FriendlyName' => '单选框',
            'Type'         => 'radio',
            'Options'      => [
                '选项1',
                '选项2',
                '选项...'
            ],
            'Description'  => '有多个选项但只能单选时可以使用此组件',
        ],
        /**
         * 文字区输入框
         */
        'textarea'     => [
            'FriendlyName' => '文字区输入框',
            'Type'         => 'textarea',
            'Rows'         => '3',
            'Cols'         => '60',
            'Description'  => '比较多的文字内容可使用此组件',
        ],
    ];
}

/**
 * 支付链接
 *
 * @param $vars
 *
 * @return string
 */
function DemoGateway_Link($vars)
{
    /**
     * 传入信息
     */
    print_r($vars);
    die(); // 可执行慈航打印展示

    /**
     * 发起退款请求
     */
    $response = null; // 根据需求自行编写内容

    /**
     * 返回结果 ( HTML 内容, 以字符串形式返回, 可以是支付按钮, 也可以是 QR Code 图片 )
     */
    return null;
}

/**
 * 流水退款
 *
 * @param $vars
 *
 * @return array
 */
function DemoGateway_Refund($vars)
{
    /**
     * 传入信息
     */
    print_r($vars);
    die(); // 可执行慈航打印展示

    /**
     * 发起退款请求
     */
    $response = null; // 根据需求自行编写内容

    /**
     * 返回结果
     */
    return [
        /**
         * 成功时返回 success, 失败时返回非 success 作为内容
         */
        'status'  => 'success',
        /**
         * 记录接口返回内容, 可以是字符串或数组
         */
        'rawdata' => $response,
        /**
         * 退款流水号 ( 必须唯一 )
         */
        'transid' => null,
        /**
         * 退款手续费 ( 可选 )
         */
        'fees'    => null,
    ];
}

/**
 * 取消订阅
 *
 * @param $vars
 *
 * @return array
 */
function DemoGateway_CancelSubscription($vars)
{
    /**
     * 传入信息
     */
    print_r($vars);
    die(); // 可执行慈航打印展示

    /**
     * 发起退款请求
     */
    $response = null; // 根据需求自行编写内容

    /**
     * 返回结果
     */
    return [
        /**
         * 成功时返回 success, 失败时返回非 success 作为内容
         */
        'status'  => 'success',
        /**
         * 记录接口返回内容, 可以是字符串或数组
         */
        'rawdata' => $response,
    ];
}