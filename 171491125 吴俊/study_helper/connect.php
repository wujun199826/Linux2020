<?php
//header("Content-type:text/html;charset=gb2312");
$con = mysql_connect('localhost','root','123456') or die("与本地端Mysql服务器连接失败");
mysql_query("set names 'gb2312'",$con);//设置数据代码
mysql_select_db('study',$con) or die("与连接失败");
header("Content-type:text/html;charset=gb2312");
?>