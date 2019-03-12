# 开发模板

基于 WHMCS 的开发模板, 提供一个最基础的模块开发范例, 可以帮助你了解或开发 WHMCS 模块. 你可以基于此库中的演示模板创建自己的模块. 

# 目录介绍 

当前路径下包含 `includes/hooks` 与 `modules`, 分别为钩子和模块目录.
 
相应目录的名称及描述如下.

| 目录 | 名称 | 描述 |
| :---: | :---: | :---: |
| includes/hooks | 钩子 | 开发需要响应 WHMCS 某些操作的小功能 |
| modules/addons | 附加模块 | 开发扩展应用, 例如短信发送模块 |
| modules/servers | 服务器模块 | 开发需要开通业务的模块, 例如虚拟主机开通 |
| modules/registrars | 域名模块 | 开发域名注册模块, 例如对接万网接口开通域名 |
| modules/gateways | 网关模块 | 开发支付接口, 例如支付宝或微信等支付接口 |

# 钩子机制

此类文件可在 `includes/hooks` 下新建 php 文件 ( 名称随意, 但必须符合 php 命名要求 ), WHMCS 会在启动是自动引入. 

# 模块机制

##### Addon / Server / Registrars 模块

此类模块在相应的目录下新建模块目录, 并在模块目录内新建相同名称的 php 文件作为模块主文件, WHMCS 会根据名称自动引入. 

例如 `addons/DemoAddon/DemoAddon.php` 是一个附加模块主文件, 它的文件夹与文件名称均是 DemoAddon ( 必须相同 )

注意: 模块中也支持钩子, 但钩子名称必须为 `hooks.php`, 并放置在模块主文件相同目录下.

##### Gateway 模块

此类模块在 `modules/gateways` 目录下新建模块文件, 并在 `modules/gateways/callback` 目录下新建用于处理支付接口回调内容的文件即可. 

# 注意事项

所有模块内部的函数名称均以模块文件名开头, 由于 php 命名规则有限制, 因此请勿使用特殊符号进行命名. 例如数字开头或包含除 `_` 之外的符号都是不允许的.
 
推荐使用驼峰 ( Camel Case ) 或蛇形命名 ( Snake Case ) 等方式为你的模块目录及文件起名.

| 小驼峰式 | 大驼峰式 | 蛇形 |
| :---: | :---: | :---: |
| demoModule | DemoModule | Demo_Module |

# 相关网站

主机部落: https://www.hostribe.com

极霸创新: https://www.geebastudio.com ( 极霸创新团队官网, 提供中文化 WHMCS 扩展支持 ) 

WHMCS 官方网站: https://www.whmcs.com ( 购买 WHMCS 授权请前往官网订购 )

WHMCS 开发文档: https://developers.whmcs.com 

WHMCS Eloquent 模型及其他类: https://docs.whmcs.com/classes/7.6/index.html ( 其中 `7.6` 是 WHMCS 版本 ) 