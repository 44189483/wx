<?php
    /**
     * @authors 慕课吧-军哥 
     * @qq      413920268
     * @weixin  wx_jayjun
     * @url     http://www.moocba.com
     * @date    2016-07-23 23:49:16
     */
    require("../../weixin_oop_api.php");
    //获取接口调用凭证
    $appid = "";
    $appsecret = "";

    $wx = new WeixinApi($appid,$appsecret);
    $redirect_uri = "http://1.moocba.applinzi.com/shouquan/home/center.php";
    $result = $wx->snsapi_userinfo($redirect_uri);
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
        <title>个人中心-慕课吧</title>
        <link rel="stylesheet" href="../weui/css/weui.min.css"/>
        <link rel="stylesheet" href="../weui/css/style.css"/>
    </head>
    <body ontouchstart>
        <div class="container" id="container"></div>
        <div class="hd">
            <p class="page_desc"><img src="<?php echo $result['headimgurl'];?>" class="avatar"></p>
        </div>
        <div class="bd">
            <div class="weui_cells weui_cells_access">
                <a class="weui_cell" href="javascript:;">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>优惠券</p>
                    </div>
                    <div class="weui_cell_ft"></div>
                </a>
                <a class="weui_cell" href="javascript:;">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>我的订单</p>
                    </div>
                    <div class="weui_cell_ft"></div>
                </a>

                <a class="weui_cell" href="javascript:;">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>常用地址</p>
                    </div>
                    <div class="weui_cell_ft"></div>
                </a>

                <a class="weui_cell" href="javascript:;">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>我的权益</p>
                    </div>
                    <div class="weui_cell_ft"></div>
                </a>
                <a class="weui_cell" href="javascript:;">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>用户协议</p>
                    </div>
                    <div class="weui_cell_ft"></div>
                </a>
            </div>
            <p class="page_desc mt30">
                @2016 慕课吧（moocba.com）-为原创而生
            </p>
        </div>
    </body>
</html>
