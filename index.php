<?php 
header("content-type:text/html;charset=utf-8");
function show_bug($mes){
	echo "<pre style='red'>";
	var_dump($mes);
	echo "</pre>";
}
define("APP_DEBUG",true);
define('css','/Topcoder/Public/css');
define('fonts','/Topcoder/Public/fonts');
define('image','/Topcoder/Public/image');
define('images','/Topcoder/Public/images');
define('js','/Topcoder/Public/js');
define('jsjs','/Topcoder/Public/jsjs');
define('BT','/Topcoder/');
define('Bbs_share','/Topcoder/Home/Public/share');
define('Bbs_css','/Topcoder/Home/Public/css/Bbs_css');
define('Bbs_app','/Topcoder/Home/Public/app/bbs_app');
define('Bbs_share_editor','/Topcoder/Home/Public/share/editor');
define('Bbs_editor','/Topcoder/Home/Public/editor');
define('Bbs_images','/Topcoder/Home/Public/images/Bbs_images');
//define('Bbs_app','/XXXX/TC/Home/Public/app/bbs_app');
include "ThinkPHP/ThinkPHP.php";