<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人设置</title>
<link href="/tp/test/Public/css/global.css" type="text/css" rel="stylesheet" />
<link href="/tp/test/Public/css/setting.css" type="text/css" rel="stylesheet" />
<script src="/tp/test/Public/script/iframeauto.js" language="javascript"></script>
</head>

<body>
<!-- container部分DIV -->
<div id="container">
	<!-- top部分DIV -->
	<div id="top">
    	<!-- top部分的LogoDIV -->
    	<div id="topLogo">
        	<!-- topLogo部分的icoDIV -->
            <div id="topLogoIco"> <a href="CustomerIndex.html"><img src="images/logo_ipad.png" width="72" height="72" alt="" /></a>
          </div>
            <!-- topLogo部分的icoDIV结束 -->
            
            <!-- topLogo部分的wordDIV -->
            <div id="topLogoWord"> <a href="CustomerIndex.html"><img src="images/LogoMaker.gif" width="128" height="60" alt="" /></a>
          </div>
            <!-- topLogo部分的wordDIV -->
        </div>
        <!-- top部分的LogoDIV结束 -->
        
        <!-- top部分的文字导航 -->
        <div id="topWordMenu">
        	<ul>
            	<li><a href="CustomerIndex.html">首页</a></li>
                <li><a href="MyWB.html">我的微博</a></li>
                <li><a href="#">找人</a></li>
                <li><a href="setting.html">设置</a></li>
                <li><a href="#">手机</a></li>
                <li><a href="#">帮助</a></li>
                <li><a href="index.html">退出</a></li>
            </ul>
        </div>
        <!-- top部分的文字导航结束 -->
    </div>
    <!-- top部分结束 -->
    <!-- header部分DIV -->
    <div id="header">
        <ul>
           <li><a href="account.html" class="header" target="win">帐号设置</a></li>
           <li><a href="password.html" class="header" target="win">密码</a></li>
           <li><a href="avatar.html" class="header" target="win">头像</a></li>
           <li><a href="mobile.html" class="header" target="win">手机绑定</a></li>
           <li><a href="design.html" class="header" target="win">模板</a></li>
        </ul>
    </div>
    <!-- header部分DIV结束 -->
    	<iframe src="account.html" id="win" width="765" scrolling="no" name="win" onload="SetWinHeight(this)" frameborder="0"></iframe>
        <!-- banner部分的DIV结束 -->
  	<!-- footer部分 -->
    <div id="footer">
    	<!-- footer网站链接部分 -->
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
        <!-- footer网站链接部分结束 -->
        <!-- footer网站版权信息 -->
        <div id="footerCopy">
        	Copyright&copy;2011-2012 灵步小组 版权所有
      </div>
        <!-- footer网站版权信息结束 -->
    </div>
    <!-- footer部分结束 -->
</div>
<!-- container部分结束 -->
</body>
</html>