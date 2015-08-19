<?php
return array(
	//'配置项'=>'配置值'
    //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'cctddb', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'cctddb1234', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'cctd_', // 数据库表前缀
    //其他配置
    'TMPL_L_DELIM'  => '{<',//模板引擎普通标签开始标记
    'TMPL_R_DELIM' => '>}', //模板引擎普通标签结束标记
 /* 'SHOW_RUN_TIME'    => true, // 运行时间显示
    'SHOW_ADV_TIME'    => true, // 显示详细的运行时间
    'SHOW_DB_TIMES'    => true, // 显示数据库查询和写入次数
    'SHOW_CACHE_TIMES' => true, // 显示缓存操作次数
    'SHOW_USE_MEM'     => true, // 显示内存开销
    'SHOW_LOAD_FILE'   => true, // 显示加载文件数
    'SHOW_FUN_TIMES'   => true, // 显示函数调用次数*/
);
?>