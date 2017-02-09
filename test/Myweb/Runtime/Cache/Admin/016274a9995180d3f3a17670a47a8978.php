<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>灵步网后台 公告管理</title>
<link href="/tp/test/Public/css/global.css" type="text/css" rel="stylesheet" />
<link href="/tp/test/Public/css/notice.css" type="text/css" rel="stylesheet" />
</head>

<body>
<!--页面整体-->
<div id="container">
<!-- top部分DIV -->
	<div id="top">
    	<!-- top部分的LogoDIV -->
    	<div id="topLogo">
        	<!-- topLogo部分的icoDIV -->
            <div id="topLogoIco">
           	  <img src="/tp/test/Public/images/avatar1.png" width="72" height="72" alt="" />
            </div>
            <!-- topLogo部分的icoDIV结束 -->
            
            <!-- topLogo部分的wordDIV -->
            <div id="topLogoWord">
       	    	<img src="/tp/test/Public/images/LBWB2.gif" width="128" height="60" alt="" />
            </div>
            <!-- topLogo部分的wordDIV -->
        </div>
        <!-- top部分的LogoDIV结束 -->
        
        <!-- top部分的文字导航 -->
        <div id="topWordMenu">
        	<ul>
            	<li><a href="#"><?php echo ($_SESSION['username']); ?>欢迎您</a></li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
              <li><a href="/tp/test/index.php/admin/Login/logout">退出系统</a></li>
            </ul>
        </div>
        <!-- top部分的文字导航结束 -->
        </div>
    <!-- top部分结束 -->
    <!--文字导航部分-->
    <div id="menu">
      <table width="767" border="0" align="center">
      <tr>
          <td width="113"><a href="Customer.html">用户管理</a></td>
          <td width="123"><a href="content.html">关键字管理</a></td>
          <td width="118"><a href="content_2.html">内容管理</a></td>
          <td width="122"><a href="notice.html">微博公告</a></td>
        </tr>
      </table>
    </div>
    <!--主体-->
    <div id="banner">
      <textarea name="textarea" cols="50" rows="25" readonly="readonly" id="textarea">                 灵步微博公告：


各位灵步微博网友，大家好


    近期我们发现部分用户使用非法的外挂程序，破坏了微博的正常秩序，且导致账号及密码存在被盗的严重风险。为了维护微博秩序，保护大家财产和个人信息的安全，灵步网将严厉打击微博外挂，具体措施如下：
  
  1.第一次使用外挂：限制登录灵步微博一周、解除使用外挂收听人和此新增的听众。
  
  2.第二次使用外挂：限制登录灵步微博一个月、解除所有收听的人和听众、回收微博账号。
  
  3.第三次使用外挂：永久限制登录灵步微博、解除所有收听的人和听众、回收微博账号。


灵步网保留追究外挂作者法律责任的权利。请大家相互转告：安全第一，勿用外挂。谢谢！</textarea>
	<!--发布按钮部分-->
	<div><input name="" type="button" value="发布" /></div>
      <p align="center"></p>
	</div>
  <!-- footer部分 -->
    <div id="footer">
    	 <!--footer网站链接部分--> 
    	<div id="footerLink">
        	<ul>
            	<li><a href="#">灵步网介绍</a></li>
                <li><a href="#">广告服务</a></li>
                <li><a href="#">API</a></li>
                <li><a href="#">诚征英才</a></li>
                <li><a href="#">保护隐私权</a></li>
                <li><a href="#">免责条款</a></li>
                <li><a href="#">法律顾问</a></li>
                <li><a href="#">意见反馈</a></li>
            </ul>
        </div>
        <!-- footer网站链接部分结束--> 
         <!--footer网站版权信息--> 
        <div id="footerCopy">
        	Copyright&copy;2011-2012 灵步小组 版权所有
        </div>
         <!--footer网站版权信息结束--> 
    </div>
     <!--footer部分结束-->   
</body>
</html>