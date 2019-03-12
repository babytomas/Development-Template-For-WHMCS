<?php
/**
 * 引入相关 WHMCS 文件
 */
require_once dirname(dirname(dirname(__DIR__))) . '/init.php';
require_once dirname(dirname(dirname(__DIR__))) . '/includes/gatewayfunctions.php';
require_once dirname(dirname(dirname(__DIR__))) . '/includes/invoicefunctions.php';

/**
 * 模块名称
 */
$moduleName = basename(__FILE__, '.php');

/**
 * 获取模块信息
 */
$moduleVars = getGatewayVariables($moduleName);

// 模块未启用
$moduleVars['type'] OR die('Access Denied');

/**
 * 获取信息 ( 从回调内容中获取 )
 */
$invoiceId = null; // 账单编号
$transactionId = null; // 流水编号
$amount = null; // 流水金额
$fee = null; // 手续费
$status = 'Success'; // 成功状态 ( 用于记录日志, 有 Success / Failurea 两种 )

/**
 * 检查签名
 */
$sign = null; // 根据需求自行编写判断内容

if (!$sign)
{
    die('签名有误');
}

/**
 * 检查账单 ( 不存在则执行 die )
 */
$invoiceId = checkCbInvoiceID($invoiceId, $moduleVars['name']);

/**
 * 检查流水 ( 存在则执行 die )
 */
checkCbTransID($transactionId);

/**
 * 增加网关日志
 */
logTransaction($moduleVars['name'], $_POST, $status);

/**
 * 检查是否已支付
 */
$paid = null; // 根据需求自行编写判断内容

if ($paid)
{
    /**
     * 记录流水信息
     */
    addInvoicePayment($invoiceId, $transactionId, $amount, $fee, $moduleName);
}