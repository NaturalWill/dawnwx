<?php


$wechatoptions = array(
		//'logcallback'=>'runlog',
		//'debug'=>true,
		'token'=>'mytoken', //��д���趨��key
        'encodingaeskey'=>'encodingaeskey' //��д�����õ�EncodingAESKey����ӿ�Ϊ����ģʽ�ɺ���
	);
//�����û�
$testusers = array('wechatid');//��д���΢�ź�id

//define('UC_PPP', 20);
define('WG_BXGS','���޸�ʽ�������� ѧ�� ���� ����� ����� �˿ں� ��ϵ�绰 ����������������磺������ 13207060001 ���� ��ݸ2�� 219 A 13650328888/678888 ��������10��ʱ��������������691������PS�������ֶ��ÿո�ָ�����ϵ�绰����Ҫ�г��ţ����ж̺ſ����ڳ��ź�ӡ�/���������֣���1����2�����������д����ݸ��1��������ݸ��2����');

//Ucenter Home���ò���
$_SC = array();
$_SC['dbhost']  		= '127.1.1.1'; //��������ַ
$_SC['dbuser']  		= 'root'; //�û�
$_SC['dbpw'] 	 		= 'root'; //����
$_SC['dbcharset'] 		= 'utf8'; //�ַ���
$_SC['pconnect'] 		= 0; //�Ƿ��������
$_SC['dbname']  		= 'mydatabase'; //���ݿ�
$_SC['tablepre'] 		= ''; //����ǰ׺
$_SC['charset'] 		= 'utf-8'; //ҳ���ַ���


//email
$_SC['username'] = "gdmunm@163.com"��
$_SC['password'] = "password";
$_SC['fromaddr'] = 'gdmunm@163.com';
$_SC['fromname'] = 'GDMUѧ������';
$_SC['replyaddr'] = 'replyaddr@qq.com';
$_SC['replyname'] = '��Դ';

$_SC['sendaddr'] = 'sendaddr@qq.com';
$_SC['sendname'] = 'Jier';

?>