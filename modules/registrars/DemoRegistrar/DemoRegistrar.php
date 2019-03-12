<?php
/**
 * 禁止 WHMCS 外直接访问
 */
defined("WHMCS") OR die('Access Denied');

use WHMCS\Domains\DomainLookup\ResultsList;
use WHMCS\Domains\DomainLookup\SearchResult;

/**
 * 模块配置
 *
 * @return array
 */
function DemoRegistrar_GetConfigArray()
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
 * 注册域名
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_RegisterDomain($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 返回成功
         */
        return [
            'success' => true,
        ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 转移域名
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_TransferDomain($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 返回成功
         */
        return [
            'success' => true,
        ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 域名续费
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_RenewDomain($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 返回成功
         */
        return [
            'success' => true,
        ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 获取 NS 服务器
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_GetNameservers($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 返回成功
         */
        return [
            'success' => true,
            'ns1'     => '服务器 1',
            'ns2'     => '服务器 2',
            'ns3'     => '服务器 3',
            'ns4'     => '服务器 4',
            'ns5'     => '服务器 5',
        ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 修改 NS 服务器
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_SaveNameservers($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 返回成功
         */
        return [
            'success' => true,
        ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 获取联系信息
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_GetContactDetails($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 返回结果
         */
        return [
            /**
             * 注册人
             */
            'Registrant' => [
                'First Name'    => '名字',
                'Last Name'     => '姓氏',
                'Company Name'  => '公司名',
                'Email Address' => '邮箱地址',
                'Address 1'     => '地址 1',
                'Address 2'     => '地址 2',
                'City'          => '城市',
                'State'         => '省份',
                'Postcode'      => '邮编',
                'Country'       => '国家',
                'Phone Number'  => '手机',
                'Fax Number'    => '传真号码',
            ],
            /**
             * 技术员
             */
            'Technical'  => [
                'First Name'    => '名字',
                'Last Name'     => '姓氏',
                'Company Name'  => '公司名',
                'Email Address' => '邮箱地址',
                'Address 1'     => '地址 1',
                'Address 2'     => '地址 2',
                'City'          => '城市',
                'State'         => '省份',
                'Postcode'      => '邮编',
                'Country'       => '国家',
                'Phone Number'  => '手机',
                'Fax Number'    => '传真号码',
            ],
            /**
             * 付款人
             */
            'Billing'    => [
                'First Name'    => '名字',
                'Last Name'     => '姓氏',
                'Company Name'  => '公司名',
                'Email Address' => '邮箱地址',
                'Address 1'     => '地址 1',
                'Address 2'     => '地址 2',
                'City'          => '城市',
                'State'         => '省份',
                'Postcode'      => '邮编',
                'Country'       => '国家',
                'Phone Number'  => '手机',
                'Fax Number'    => '传真号码',
            ],
            /**
             * 管理员
             */
            'Admin'      => [
                'First Name'    => '名字',
                'Last Name'     => '姓氏',
                'Company Name'  => '公司名',
                'Email Address' => '邮箱地址',
                'Address 1'     => '地址 1',
                'Address 2'     => '地址 2',
                'City'          => '城市',
                'State'         => '省份',
                'Postcode'      => '邮编',
                'Country'       => '国家',
                'Phone Number'  => '手机',
                'Fax Number'    => '传真号码',
            ],
        ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 修改联系信息
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_SaveContactDetails($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 返回成功
         */
        return [
            'success' => true,
        ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 检查可用性
 *
 * @param $vars
 *
 * @return array|ResultsList
 */
function DemoRegistrar_CheckAvailability($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 发起请求
         */
        $response = []; // 根据需求自行编写内容

        /**
         * 实例化结果列表
         */
        $result = new ResultsList();

        foreach ($response as $item)
        {
            /**
             * 实例化搜索结果
             */
            $searchResult = new SearchResult($item['sld'], $item['tld']);

            /**
             * 检查域名状态
             */
            if ($item['status'] == 'available')
            {
                $status = SearchResult::STATUS_NOT_REGISTERED;
            }
            else if ($item['statis'] == 'registered')
            {
                $status = SearchResult::STATUS_REGISTERED;
            }
            else if ($item['statis'] == 'reserved')
            {
                $status = SearchResult::STATUS_RESERVED;
            }
            else
            {
                $status = SearchResult::STATUS_TLD_NOT_SUPPORTED;
            }

            /**
             * 设置状态
             */
            $searchResult->setStatus($status);

            /**
             * 检查是否溢价域名
             */
            if ($item['isPremiumName'])
            {
                $searchResult->setPremiumDomain(true);

                /**
                 * 设置溢价价格
                 */
                $searchResult->setPremiumCostPricing([
                    /**
                     * 域名注册价格
                     */
                    'register'     => $item['premiumRegistrationPrice'],
                    /**
                     * 域名续费价格
                     */
                    'renew'        => $item['premiumRenewPrice'],
                    /**
                     * 货币代码
                     */
                    'CurrencyCode' => 'USD',
                ]);
            }

            /**
             * 加入结果
             */
            $result->append($searchResult);
        }

        return $result;
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 域名建议设置 ( 域名 GetConfigArray 函数可返回的内容相同 )
 *
 * @return array
 */
function DemoRegistrar_DomainSuggestionOptions()
{
    return [];
}

/**
 * 获取域名建议 ( 即推荐注册的域名 )
 *
 * @param $vars
 *
 * @return array|ResultsList
 */
function DemoRegistrar_GetDomainSuggestions($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 发起请求
         */
        $response = []; // 根据需求自行编写内容

        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 发起请求
         */
        $response = []; // 根据需求自行编写内容

        /**
         * 实例化结果列表
         */
        $result = new ResultsList();

        foreach ($response as $item)
        {
            /**
             * 实例化搜索结果
             */
            $searchResult = new SearchResult($item['sld'], $item['tld']);

            /**
             * 检查域名状态
             */
            if ($item['status'] == 'available')
            {
                $status = SearchResult::STATUS_NOT_REGISTERED;
            }
            else if ($item['statis'] == 'registered')
            {
                $status = SearchResult::STATUS_REGISTERED;
            }
            else if ($item['statis'] == 'reserved')
            {
                $status = SearchResult::STATUS_RESERVED;
            }
            else
            {
                $status = SearchResult::STATUS_TLD_NOT_SUPPORTED;
            }

            /**
             * 设置状态
             */
            $searchResult->setStatus($status);

            /**
             * 检查是否溢价域名
             */
            if ($item['isPremiumName'])
            {
                $searchResult->setPremiumDomain(true);

                /**
                 * 设置溢价价格
                 */
                $searchResult->setPremiumCostPricing([
                    /**
                     * 域名注册价格
                     */
                    'register'     => $item['premiumRegistrationPrice'],
                    /**
                     * 域名续费价格
                     */
                    'renew'        => $item['premiumRenewPrice'],
                    /**
                     * 货币代码
                     */
                    'CurrencyCode' => 'USD',
                ]);
            }

            /**
             * 加入结果
             */
            $result->append($searchResult);
        }

        return $result;
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 获取锁定状态
 *
 * @param $vars
 *
 * @return array|string
 */
function DemoRegistrar_GetRegistrarLock($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 返回状态 ( 包含 locked / unlocked 两种 )
         */
        return 'locked';
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 修改锁定状态
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_SaveRegistrarLock($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 返回成功
         */
        return [
            'success' => 'success',
        ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 获取 DNS 解析记录
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_GetDNS($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 发起请求
         */
        $response = []; // 根据需求自行编写内容

        /**
         * 拼接结果
         */
        $result = [];

        foreach ($response as $item)
        {
            $result[] = [
                /**
                 * 记录值, 例如: www
                 */
                "hostname" => $item['name'],
                /**
                 * 记录类型, 例如: A
                 */
                "type"     => $item['type'],
                /**
                 * 解析内容: 例如: 127.0.0.1
                 */
                "address"  => $item['address'],
                /**
                 * MX 优先级, 例如: 10
                 */
                "priority" => $item['mxpref'],
            ];
        }

        return $result;
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 修改 DNS 解析记录
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_SaveDNS($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 返回成功
         */
        return [
            'success' => 'success',
        ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 启用或关闭 ID 保护
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_IDProtectToggle($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 返回成功
         */
        return [
            'success' => 'success',
        ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 获取转移授权码
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_GetEPPCode($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 转移代码
         */
        $eppCode = null;

        /**
         * 返回成功
         */
        return $eppCode
            ? [
                'eppcode' => $eppCode
                // 有返回 EPP Code 则返回
            ]
            : [
                'success' => 'success'
                // 未返回 ( 或通过邮件发送 ) EPP Code, 但成功了, 那么可以返回这个
            ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 发布域名 ( 用于启用转出, 例如 IPSTAG 对 .uk 后缀的要求 )
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_ReleaseDomain($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 返回成功
         */
        return [
            'success' => 'success'
        ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 删除域名
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_RequestDelete($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 返回成功
         */
        return [
            'success' => 'success'
        ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 注册 NS 服务器
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_RegisterNameserver($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 返回成功
         */
        return [
            'success' => 'success'
        ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 修改 NS 服务器
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_ModifyNameserver($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 返回成功
         */
        return [
            'success' => 'success'
        ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 删除 NS 服务器
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_DeleteNameserver($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 返回成功
         */
        return [
            'success' => 'success'
        ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 同步状态和过期信息
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_Sync($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 返回结果
         */
        return [
            'expirydate'      => date('Y-m-d'),
            // 格式必须是 YYYY-MM-DD
            'active'          => true,
            // 可用状态, 布尔值
            'expired'         => true,
            // 过期状态, 布尔值
            'transferredAway' => true,
            // 已转出, 布尔值
        ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 同步转入状态
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_TransferSync($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 转入状态
         */
        $status = null; // 根据需求自行编写判断内容

        if ($status === '成功')
        {
            return [
                'completed'  => true,
                'expirydate' => date('Y-m-d'),
                // 格式必须是 YYYY-MM-DD
            ];
        }
        else if ($status === '失败')
        {
            return [
                'failed' => true,
                'reason' => '失败原因'
            ];
        }
        else
        {
            /**
             * 状态未更新返回空数组
             */
            return [];
        }
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 客户中心按钮
 *
 * @return array
 */
function DemoRegistrar_ClientAreaCustomButtonArray()
{
    return [
        '演示功能' => 'DemoFunction',
    ];
}

/**
 * 客户中心允许执行的函数 ( 和按钮功能一样、但是不显示按钮 )
 *
 * @return array
 */
function DemoRegistrar_ClientAreaAllowedFunctions()
{
    return [
        '演示功能' => 'DemoFunction',
    ];
}

/**
 * 自定义函数
 *
 * @param $vars
 *
 * @return array
 */
function DemoRegistrar_DemoFunction($vars)
{
    try
    {
        /**
         * 传入信息
         */
        print_r($vars);
        die(); // 可执行慈航打印展示

        /**
         * 需要处理的内容
         */

        // 根据需求自行编写内容

        /**
         * 返回成功
         */
        return [
            'success' => 'success'
        ];
    }
    catch (Exception $e)
    {
        /**
         * 返回错误
         */
        return [
            'error' => $e->getMessage(),
        ];
    }
}

/**
 * 前台输出
 *
 * @param $vars
 *
 * @return null
 */
function DemoRegistrar_ClientArea($vars)
{
    /**
     * 传入信息
     */
    print_r($vars);
    die(); // 可执行慈航打印展示

    /**
     * 需要处理的内容
     */

    // 根据需求自行编写内容

    /**
     * 返回结果 ( HTML 内容, 以字符串形式返回, 可以是支付按钮, 也可以是 QR Code 图片 )
     */
    return null;
}