<?php

// +----------------------------------------------------------------------
// | QCCMS8.2 内容解析标签处理类
// +----------------------------------------------------------------------
// | Copyright (c) 2012-2014 http://www.lovegq1314.com, All rights reserved.
// +----------------------------------------------------------------------
// | Author: lp <lin19940620@sina.com>
// +----------------------------------------------------------------------

session_start();
require_once('./Captcha.class.php');
$captcha = new Captcha();
$captcha->width = 120;
$captcha->height = 45;
$captcha->Generate();