<?php

// +----------------------------------------------------------------------
// | ShuipFCMS
// +----------------------------------------------------------------------
// | Copyright (c) 2012-2014 http://www.shuipfcms.com, All rights reserved.
// +----------------------------------------------------------------------
// | Author: 水平凡 <admin@abc3210.com>
// +----------------------------------------------------------------------
return array(
    /* 数据库设置 */
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => '127.0.0.1', // 服务器地址
    'DB_NAME' => 'crs', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => 'root', // 密码
    'DB_PORT' => '3306', // 端口
    'DB_PREFIX' => 'crs_', // 数据库表前缀
    'DB_DEBUG' => false,

    /* 站点安全设置 */
    "AUTHCODE" => 'iQGOMjSqTWKRrD2phc', //密钥

    /* Cookie设置 */
    "COOKIE_PREFIX" => 'I5n_', //Cookie前缀

    /* 数据缓存设置 */
    'DATA_CACHE_PREFIX' => 'bKi_', // 缓存前缀
);
