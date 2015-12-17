<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>国家公考面试 -- 面试课程费用</title>
<meta name="keywords" content="面试,公务员面试,面试培训" />
<meta name="description" content="国家公考面试集训班" />
<link href="http://mianshi.buzhi.com/public/css/global.css" rel="stylesheet" type="text/css" />
<link href="http://mianshi.buzhi.com/public/css/ms-index.css" rel="stylesheet" type="text/css" />
<link href="http://mianshi.buzhi.com/public/css/ui-dialog.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="http://mianshi.buzhi.com/public/js/jquery1.8.js"></script>
<script language="javascript" src="http://mianshi.buzhi.com/public/js/dialog-min.js"></script>
</head>
<body>
<div class="ms-header">
  <div class="conter-auto">
    <div class="img logo left"><a href="#!" class="link"></a></div>
    <div class="right">
      <div class="link-list"><a href="#!" class="img xl-weibo"></a><a href="#!" class="img tx-weibo"></a><a href="#!" class="img qq-kj"></a><a href="#!" class="img weixing"></a></div>
      <div class="header-hotline">
        <h3>客服热线</h3>
        <span class="img hotline"></span>
        <p class="text">周一至周五8：30~17：30</p>
      </div>
    </div>
  </div>
</div>
<div class="ms-menu">
  <div class="conter-auto"><a href="/index.php/Home/Index/" class="link ">首页</a><a href="/index.php/Home/Index/question" class="link">上课须知</a><a href="/index.php/Home/Index/pay" class="link current">费用及付款方式</a><a href="/index.php/Home/Index/#goto-comment" class="link">用户评价</a><a href="/index.php/Home/Index/form" class="link">面试模拟评测（免费）</a><a href="/index.php/Home/Index/#goto-baoguo" class="link ">培训包过吗？</a></div>
</div>
<div class="ms-banner">
  <div class="conter-auto">
    <div class="left">
      <p class="text">全国限招21名学员，每班1名班主任，每个学员配备1名助教！</p>
      <br />
      <p class="text">中政行测，中政申论VIP备考会员优先！</p>
    </div>
    <div class="right ms-video"><a class="link" href="javascript:show_video();"></a></div>
  </div>
</div>



<div class="box-video" style="display:none;"><script type="text/javascript"> var letvcloud_player_conf =  {"uu":"47448b57d7","vu":"cfc0abbff4","auto_play":1,"gpcflag":1,"width":640,"height":360};</script><script type="text/javascript" src="http://yuntv.letv.com/bcloud.js"></script>
</div>
<script language="javascript">

function show_video(){
	dialog({id:'vide-box', title: '2015国家公务员在线面试培训', content: $('.box-video').html(), padding:0}).showModal();
}

</script>


<div class="ms-evaluation">
  <div class="conter-auto"><span class="text">面试神秘、严格、而且充满变数...？  因为不了解，所以会误解...</span><a href="http://www.zoobao.com/?c=post" class="link">点击预约录取面试评测（免费）</a></div>
</div>

<div class="conter-auto wt-column1">
  <div class="wt-clause jf-clause">
    <div class="wt-title"><span class="img pay"></span>
      <h1>费用及付款方式</h1>
      <p class="text">未通过录取测试的用户请勿缴费</p>
    </div>
	<div class="conter">
      <h4>途径一 网银转账</h4>
      <p class="text">银行账号  </p><p class="text">申请中...</p>
    </div>
	<div class="conter">
      <h4>途径二 支付宝转账</h4>
      <p class="text">支付宝账号  申请中..</p>
    </div>
  </div>
  
	<p class="bottom-text">温馨提示：请通过以上安全途径缴费和确认，勿听信其他来源信息以免造成损失。</p>
</div>
<div class="conter-auto jf-column2">
<h3>以下银行均支持完成以上在线支付</h3><div>
<img src="http://mianshi.buzhi.com/public/images/zf1.gif" /><img src="http://mianshi.buzhi.com/public/images/zf2.gif" /><img src="http://mianshi.buzhi.com/public/images/zf3.gif" /><img src="http://mianshi.buzhi.com/public/images/zf4.gif" /><img src="http://mianshi.buzhi.com/public/images/zf5.gif" /><img src="http://mianshi.buzhi.com/public/images/zf6.gif" /><img src="http://mianshi.buzhi.com/public/images/zf7.gif" /><img src="http://mianshi.buzhi.com/public/images/zf8.gif" /><img src="http://mianshi.buzhi.com/public/images/zf9.gif" /><img src="http://mianshi.buzhi.com/public/images/zf10.gif" /><img src="http://mianshi.buzhi.com/public/images/zf11.gif" /><img src="http://mianshi.buzhi.com/public/images/zf12.gif" /><img src="http://mianshi.buzhi.com/public/images/zf13.gif" /><img src="http://mianshi.buzhi.com/public/images/zf14.gif" /><img src="http://mianshi.buzhi.com/public/images/zf15.gif" /></div>
<a class="conter-link" href="javascript:show_dr_msg('big-goto-pay');" id="big-goto-pay">立即缴费</a>
</div>



<script language="javascript">

function show_dr_msg(dr){
	location.href='/alipay/pay.php';
	return;
	
	var d			= dialog.get('dr-msg');
	if(d){ d.close().remove(); }
	
	var d = dialog({align: 'top', content: '请先预约录取面试,进行免费模拟评测,通过即可报名。', id:'dr-msg'});
		d.show(document.getElementById(dr));
}

</script>

<div class="ms-footer"><div class="conter-auto"><a class="link" href="http://www.zoobao.com/" target="_blank">关于我们</a>|<a class="link" href="http://www.zoobao.com/products/" target="_blank">产品服务</a>|<a class="link" href="http://www.zoobao.com/contact/" target="_blank">合作联系</a>|<a class="link" href="http://www.zoobao.com/?c=question" target="_blank">上课须知</a>|<a class="link" href="http://www.zoobao.com/?goto=comment#goto-comment" target="_blank">用户评价</a><p class="text">全国客服热线：<strong>400-000-5784</strong>  湘ICP备13008748号-4</p><p class="text">版权所有 @ 2005-2014 国家公务员考试资讯平台(zoobao.com) all right Reseverd</p></div></div>


</body>
</html>