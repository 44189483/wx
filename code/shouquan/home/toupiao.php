<!DOCTYPE html>
<html lang="zh-cmn-Hans">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
        <title>投票测试-慕课吧</title>
        <link rel="stylesheet" href="../weui/css/weui.min.css"/>
        <link rel="stylesheet" href="../weui/css/style.css"/>
    </head>
    <body ontouchstart>
        <div class="container" id="container"></div>
        <script type="text/html" id="tpl_cell">
        <div class="hd">
            <p class="page_desc"><img src="logo.png" width="65%"></p>
            <h2 class="page_title">投票测试</h2>
        </div>
        <div class="bd">
            <form id="form" action="add.php" method="POST">
                <div class="weui_cells_title">1、您愿意付费成为慕课吧的超级会员吗？</div>
                <div class="weui_cells weui_cells_radio">
                    <label class="weui_cell weui_check_label">
                        <div class="weui_cell_bd weui_cell_primary">
                            <p>愿意</p>
                        </div>
                        <div class="weui_cell_ft">
                            <input type="radio" class="weui_check" name="pay" value="1" checked="checked">
                            <span class="weui_icon_checked"></span>
                        </div>
                    </label>
                    <label class="weui_cell weui_check_label">
                        <div class="weui_cell_bd weui_cell_primary">
                            <p>不愿意</p>
                        </div>
                        <div class="weui_cell_ft">
                            <input type="radio" name="pay" value="2" class="weui_check">
                            <span class="weui_icon_checked"></span>
                        </div>
                    </label>
                </div>  
                <div class="weui_cells_title">2、您希望哪种方式来学习微信开发课程？</div>
                <div class="weui_cells weui_cells_radio">
                    <label class="weui_cell weui_check_label">
                        <div class="weui_cell_bd weui_cell_primary">
                            <p>直播</p>
                        </div>
                        <div class="weui_cell_ft">
                            <input type="radio" class="weui_check" name="how" value="1" checked="checked">
                            <span class="weui_icon_checked"></span>
                        </div>
                    </label>
                    <label class="weui_cell weui_check_label">
                        <div class="weui_cell_bd weui_cell_primary">
                            <p>录播</p>
                        </div>
                        <div class="weui_cell_ft">
                            <input type="radio" name="how" value="2" class="weui_check">
                            <span class="weui_icon_checked"></span>
                        </div>
                    </label>
                </div>                         
                <div class="weui_btn_area">
                    <input type="submit" class="weui_btn weui_btn_primary" value="提交">
                </div>
            </form>
            <p class="page_desc mt30">
                @2016 慕课吧（moocba.com）-为原创而生
            </p>
        </div>
        </script>

        <script type="text/html" id="tpl_msg">
        <div class="weui_msg">
            <div class="weui_icon_area"><i class="weui_icon_success weui_icon_msg"></i></div>
            <div class="weui_text_area">
                <h2 class="weui_msg_title">投票成功</h2>
                <p class="weui_msg_desc">祝您生活愉快！</p>
            </div>
            <!--
            <div class="weui_opr_area">
                <p class="weui_btn_area">
                    <a href="toupiao.php#/" class="weui_btn weui_btn_primary">确定</a>
                </p>
            </div>
            -->
        </div>
        </script>

        <script type="text/html" id="tpl_fail_msg">
        <div class="weui_msg">
            <div class="weui_icon_area"><i class="weui_icon_warn weui_icon_msg"></i></div>
            <div class="weui_text_area">
                <h2 class="weui_msg_title">投票失败</h2>
            </div>
            <div class="weui_opr_area">
                <p class="weui_btn_area">
                    <a href="toupiao.php#/" class="weui_btn weui_btn_default">重新投票</a>
                </p>
            </div>
        </div>
        </script>
        <script src="../weui/js/zepto.min.js"></script>
        <script src="../weui/js/router.min.js"></script>
        <script src="../weui/js/page.js"></script>
    </body>
</html>