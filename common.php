<?php

//����Ŀ¼
define('S_ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);

//�����ļ�
include_once(S_ROOT.'./wechat-php-sdk/wechat.class.php');
include_once(S_ROOT.'./PHPMailer/PHPMailerAutoload.php');
if(!@include_once(S_ROOT.'./config.php')) {
	//header("Location: install/index.php");//��װ
	echo 'No Access';
	exit();
}

?>