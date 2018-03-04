<?php  
/* 
 * wechat php test 
*/
define("TOKEN", "weixin"); 

$signature = $_GET["signature"];//从用户端获取签名赋予变量signature  
$timestamp = $_GET["timestamp"];//从用户端获取时间戳赋予变量timestamp  
$nonce = $_GET["nonce"];    //从用户端获取随机数赋予变量nonce  
          
$token = TOKEN;//将常量token赋予变量token  
$tmpArr = array($token, $timestamp, $nonce);//简历数组变量tmpArr  
sort($tmpArr, SORT_STRING);//新建排序  
$tmpStr = implode( $tmpArr );//字典排序  
$tmpStr = sha1( $tmpStr );//shal加密  
//tmpStr与signature值相同，返回真，否则返回假  
if( $tmpStr == $signature ){  

    $postData = "
        <xml>
            <ToUserName><![CDATA[toUser]]></ToUserName>
            <FromUserName><![CDATA[fromUser]]></FromUserName>
            <CreateTime>1348831860</CreateTime>
            <MsgType><![CDATA[text]]></MsgType>
            <Content><![CDATA[this is a test]]></Content>
            <MsgId>1234567890123456</MsgId>
        </xml>
     ";

    //接收XML数据包
    //$postData = $HTTP_RAW_POST_DATA;或file_get_contents("php://input");

    //处理XML数据包
    $xmlObj = simplexml_load_string($postData,"SimpleXMLElement",LIBXML_NOCDATA);

    //获取开发者微信号
    $toUserName = $xmlObj->ToUserName;

    //获取用户的openID
    $fromUserName = $xmlObj->FromUserName;

    //消息的类型text
    $msgType = $xmlObj->MsgType;

    //获取文本消息的内容
    $content = $xmlObj->Content;

}else{  
    //false;  
}  
/*
$url = "网址";

$post = array();//提交数组

//初始化cURL:   
$ch = curl_init();
//设置传输选项：  
curl_setopt($ch,CURLOPT_URL,$url);

//没有此方法刚GET全部,有此方法以数据流GET获取内容
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

//POST提交
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$post);

//执行并获取结果：  
curl_exec($ch);
//关闭cURL：  
curl_close($ch);
*/

function httprest($url,$post){

}

/*
Memcache缓存
高性能的分布式的内存对象缓存系统
将数据调用到内存中，然后从内存中读取，一方面降低数据库的负担，另一方面大大提高读取速度

文件缓存
将数据调用到某个文件，然后从文件中读取，涉及到对文件的读写操作

数据库缓存
把数据存储到数据表中，然后从数据表中读取，其实就是对数据表进行读写操作
*/

/*
微信类封装类
1.验证token
2.接收处理XML数据
3.curl
4.access_token
5.xml spint_r
*/
?>