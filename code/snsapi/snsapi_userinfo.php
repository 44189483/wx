<?php
	/**
	 * @authors 慕课吧-军哥 
	 * @qq      413920268
	 * @weixin  wx_jayjun
	 * @url     http://www.moocba.com
	 * @date    2016-07-23 23:49:16
	 */
	require("../weixin_oop_api.php");
	//获取接口调用凭证
	$appid = "";
	$appsecret = "";

	$wx = new WeixinApi($appid,$appsecret);
	$redirect_uri = "http://1.moocba.applinzi.com/snsapi/snsapi_userinfo.php";
	$result = $wx->snsapi_userinfo($redirect_uri);
	echo "<pre>";
	print_r($result);
	echo "</pre>";
?>