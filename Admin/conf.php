<?php
include '../libs/Smarty.class.php';
$smarty=new Smarty();
//���¶����̨ģ���ļ��Ĵ��·��
$smarty->template_dir = array('./tpl/');
//�����̨�����ļ��Ĵ��·��
$smarty->compile_dir = './tpl_c/';
//�����̨���css�ļ���·��
define("ADMIN_CSS_URL", "../Public/Admin/css/");
//����ǰ̨���ͼƬ���ļ�·��
define("ADMIN_PICS_URL","../Public/Admin/images/");
//����ǰ̨js�ļ��Ĵ��·��
define("ADMIN_JS_URL", "../Public/Admin/js/");
?>