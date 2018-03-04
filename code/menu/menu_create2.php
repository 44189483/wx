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
$post = ' {
		     "button":[
		      {	
		          "name":"关于我们",
		          "sub_button":[
		            {
		          		"type":"click",
		          		"name":"我们的故事",
		          		"key":"STORY"
		          	},
		            {
		          		"type":"click",
		          		"name":"么么哒",
		          		"key":"MMD"
		          	},		  
		          	{
		          		"type":"view",
		          		"name":"官网地址",
		          		"url":"http://www.baidu.com"
		          	}
		          	
		          ]
		      },
		      {
		           "name":"个人中心",
		           "type":"view",
		           "url":"http://1.moocba.applinzi.com/shouquan/home/center.php"		   
		       },
		      {
				  "name":"网页授权",
		          "sub_button":[		  
		          	{
		          		"type":"view",
		          		"name":"base型",
		          		"url":"http://1.moocba.applinzi.com/snsapi/snsapi_base.php"
		          	},
					{
		          		"type":"view",
		          		"name":"userinfo型",
		          		"url":"http://1.moocba.applinzi.com/snsapi/snsapi_userinfo.php"
		          	}		          	
		          ]	   
		       }
		     ]
		 }';
$result = $wx->menu_create($post);
print_r($result);
