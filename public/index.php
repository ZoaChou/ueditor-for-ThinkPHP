<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://topthink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

//定义站点根目录
define('WEB_ROOT',dirname(dirname(__FILE__)));
// 定义应用名称
define('APP_NAME', 'ueditor');
// 定义应用目录
define('APP_PATH', WEB_ROOT.'/Ueditor/');
//是否开启调试模式
define('APP_DEBUG',true);
//站点链接
define('WEB_URL','http://localhost/ueditor-for-ThinkPHP/public');
//是否开启跟踪调试
define('SHOW_PAGE_TRACE',true);
// 引入ThinkPHP入口文件
require WEB_ROOT . '/ThinkPHP/ThinkPHP.php';
