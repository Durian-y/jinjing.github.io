<?php
if(!defined('IN_CRONLITE'))exit();
@header('Content-Type: text/html; charset=UTF-8');
$qqs=$DB->count("SELECT count(*) from ".DBQZ."_qq WHERE 1"); //获取QQ数量
$users=$DB->count("SELECT count(*) from ".DBQZ."_user WHERE 1"); //获取用户数量
$zongq=$qqs+122000;
$zongy=$users+221000;

$qqjobs=$DB->count("SELECT count(*) from ".DBQZ."_qqjob WHERE 1");
$signjobs=$DB->count("SELECT count(*) from ".DBQZ."_signjob WHERE 1");
$wzjobs=$DB->count("SELECT count(*) from ".DBQZ."_wzjob WHERE 1");
$zongs=$qqjobs+$signjobs+$wzjobs+323000; //获取总任务数量
/*$info['times'] //系统累计运行的次数*/
$yxts=ceil((time()-strtotime($conf['build']))/86400); //本站已运行多少天
$zongt=$yxts+200;
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $conf['sitename'].$conf['sitetitle']?></title>		
        <meta name="description" content="<?php echo $conf['description']?>">
        <meta name="keywords" content="<?php echo $conf['keywords']?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="shortcut icon" href="images/favicon.ico">
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css"  href="http://cdn.odata.cc/assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="http://cdn.odata.cc/assets/vendor/font-awesome/css/font-awesome.min.css">

		<!-- Slider -->
		<link href="http://cdn.odata.cc/assets/Index/css/owl.carousel.css" rel="stylesheet" media="screen">
		<link href="http://cdn.odata.cc/assets/Index/css/owl.theme.css" rel="stylesheet" media="screen">

		<!-- Stylesheet -->
		<link rel="stylesheet" type="text/css"  href="http://cdn.odata.cc/assets/Index/css/style.css">

		<!--[if lt IE 9]>
		  <script src="http://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    </head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <?php if($is_fenzhan==1) $logoname = DBQZ;else $logoname = ''; 
                  if(!file_exists(ROOT.'images/'.$logoname.'logo.png')) $logoname='';
                ?>
				                <a class="navbar-brand page-scroll" href="#page-top"><img src="images/<?php echo $logoname?>logo.png" height="36" alt="<?php echo $conf['sitename']?>"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">我们优势</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#works">我们特色</a>
                    </li>                    
                    <li>
                        <a class="page-scroll" href="#about">拥有功能</a>
                    </li>                    
                    <li>
                        <a class="page-scroll" href="#achivements">数据统计</a>
                    </li>
                    <li>
	                    <?php if($islogin==1){?>
							<a class="page-scroll" href="index.php?mod=user">用户中心</a>
						<?php }else{?>
							<a class="page-scroll" href="index.php?mod=login">登录注册</a>
						<?php }?>
					</li>                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<!-- Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1><span class="brand-heading"><?php echo $conf['sitename']?></span></h1>
                        <p class="intro-text">全网最稳定的离线秒赞平台</p>
                        
						<p><span style="margin-top:40px;">目前我们正在为 <font color=red><?php echo $zongy?></font> 用户的 <font color=red><?php echo $zongq?></font> 个QQ提供服务,欢迎您的加入。</span></p>
                      <p>   <?php if($islogin==1){?>
							<a  href="index.php?mod=user"style="margin-top:15px;">用户中心</a>
						<?php }else{?>
							<a class="page-scroll" href="index.php?mod=login">登录注册</a>
						<?php }?> </p>
                        
                        <a href="#services" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
<div class="copyrights"><?php echo $_SERVER['HTTP_HOST']?><a href="/" ><?php echo $conf['sitename']?></a></div>
<!-- Services Section -->
<div id="services" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>我们 <strong>优势</strong></h2>
      <hr>
      </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-laptop"></i>
        <h4><strong>24H运行</strong></h4>
        <p>
		服务器24h不间断运行</br>
		稳定、快速、实用</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-code"></i>
        <h4><strong>专人维护</strong></h4>
        <p>有专人维护更新协议</br>
		使用更放心、贴心</br>
		</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-rocket"></i>
        <h4><strong>等级加速</strong></h4>
        <p>内置全套QQ等级加速</br>
		稳定永远在线，安全快捷</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-bullseye"></i>
        <h4><strong>账号安全</strong></h4>
        <p>正版程序授权</br>
		绝对保证所有QQ信息安全</p>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="works">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center">
      <h2>我们 <strong>特色</strong></h2>
      <hr>
      <div class="clearfix"></div>
      <p>使用彩虹分布式云任务进行挂机，无需安装任何额外软件，注册登陆后添加QQ即可正常运行，您可以随时在电脑/手机/平板登陆本网站进行功能设置。高配置服务器采用分布式监控系统的运行，24小时不间断稳定不宕机，服务器秒级切换更改随心，离线托管完美使用体验！</p>
	  <br>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2><strong>拥有</strong> 功能</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-6"> <img src="http://cdn.odata.cc/assets/Index/img/about.png" class="col-xs-12"> </div>
      <div class="col-md-6">
        <div class="about-text"> <i class="fa fa-users"></i>
          <div class="padding-left"><h4>空间类</h4>
          <p>离线秒赞、秒评、发图片说说、说说转发、说说圈图、批量删除说说、批量删除留言、互刷主页赞、互刷留言等</p></div>
          <i class="fa fa-magic"></i>
          <div class="padding-left"><h4>签到类</h4>
          <p>空间签到、会员签到、钱包签到、QQ群签到、群问问签到、部落签到、花藤服务、书城签到、QQ浏览器赚积分、微云签到、绿钻黄钻蓝钻粉钻签到等等</p></div>
          <i class="fa fa-check-square-o"></i>
          <div class="padding-left"><h4>实用工具</h4>
          <p>单项检测、秒赞检测、刷圈圈赞、说说刷赞、互刷人气、刷说说队形、空间音乐查询、批量添加好友、导出群成员</p></div>
        </div>
      </div>
    </div>
  </div>
</div>
	<div id="achivements" class="section dark-bg">
			<div class="container">	
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<div class="achivement-box">
							<i class="fa fa-smile-o"></i>
							<span class="count"><?php echo $zongy?></span>
							<h4>用户</h4>                            
						</div>
					</div> 
					<div class="col-md-3 col-sm-3">
						<div class="achivement-box">
							<i class="fa fa-code"></i>
							<span class="count"><?php echo $zongq?></span>
							<h4>QQ</h4>                            
						</div>
					</div> 
					<div class="col-md-3 col-sm-3">
						<div class="achivement-box">
							<i class="fa fa-check-square-o"></i>
							<span class="count"><?php echo $zongt?></span>
                            <h4>建站天数</h4>
						</div>
					</div> 
					<div class="col-md-3 col-sm-3">
						<div class="achivement-box">
							<i class="fa fa-trophy"></i>
							<span class="count"><?php echo $zongs?></span>
							<h4>任务</h4>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>

				<div class="container">
					<div class="row" style="margin:0 auto;">
					
						<div class="section-title text-center center">
							<h2><strong>最新</strong> 添加的QQ</h2>
                                                        <hr>
						</div>
 <div class="row">
<?php //获取最新QQ列表
$liukay=$DB->query("select qq,time from ".DBQZ."_qq order by id desc limit 24");
while ($lingku = $DB->fetch($liukay))
{
echo '<div class="col-xs-3 col-md-2 col-lg-1"><a href="./index.php?mod=search&q='.$lingku['qq'].'" target="_blank"><img class="qqlogo"  src="http://q1.qlogo.cn/g?b=qq&nk='.$lingku['qq'].'&s=100" width="80px" height="80px" alt="'.$lingku['qq'].'" title="'.$lingku['qq'].'|添加时间:'.$lingku['time'].'"></a></div>';
}
?>
 </div>				                   
						
					</div>
				</div><br>
			

<nav id="footer">
  <div class="container">
    <div class="pull-left fnav">
      <p>Copyright &copy 2016-2018 <?php echo $conf['sitename']?>	  <a style='color:#F4D03F' href="/"><?php echo $_SERVER['HTTP_HOST']?></a> </p>
	  <p><a  href="http://www.miitbeian.gov.cn/"  target="_blank">冀ICP备16016552号</a> | <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1259086582'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1259086582%26online%3D1%26show%3Dline' type='text/javascript'%3E%3C/script%3E"));</script></p>
          
    </div>
    <div class="pull-right fnav">
      	<a href="http://webscan.360.cn/index/checkwebsite/url/www.exuanmz.com"><img border="0" src="http://www.wuaishare.cn/qiniu/o_1bng8oqpe192uf8m8o81aj9pfpa.png"/></a>
    </div>
  </div>
</nav>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="http://cdn.odata.cc/assets/js/modernizr-2.6.2.min.js"></script>
<script src="http://cdn.odata.cc/assets/vendor/js/jquery-2.1.4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="http://cdn.odata.cc/assets/vendor/bootstrap/js/bootstrap.min.js"></script> 

<script type="text/javascript" src="http://cdn.odata.cc/assets/Index/js/jquery.isotope.js"></script> 
<script type="text/javascript" src="http://cdn.odata.cc/assets/Index/js/jquery.counterup.js"></script> 
<script type="text/javascript" src="http://cdn.odata.cc/assets/Index/js/waypoints.js"></script>
<script type="text/javascript" src="http://cdn.odata.cc/assets/Index/js/jqBootstrapValidation.js"></script> 
<script src="http://cdn.odata.cc/assets/Index/js/owl.carousel.js"></script>

<script type="text/javascript" src="http://cdn.odata.cc/assets/Index/js/main.js"></script>
<?php if(!empty($conf['ui_backmusic'])){?>
<section class="u-audio hidden" data-src="<?php echo $conf['ui_backmusic']?>"></section>
<div class="btnAudio" id="btnAudio"></div>
 
<script>
var bg_audio_val = true;
var bg_audio = new Audio();
function audio_init(){
        var options_audio = {
                loop: true,
                preload: "auto",
                src: $('.u-audio').attr('data-src')
        }
        for (var key in options_audio) {
                bg_audio[key] = options_audio[key];
        }
        bg_audio.load();
        audio_addEvent();
        bg_audio.play();
}
function audio_addEvent(){
        $("#btnAudio").on('click', audio_control);
        $(bg_audio).on('play',function(){
                bg_audio_val = false;
                $('#btnAudio').addClass('rotate1circle');
        })
        $(bg_audio).on('pause',function(){
                $('#btnAudio').removeClass('rotate1circle');
        })
}
function audio_control(){
        if(!bg_audio_val){
                bg_audio.pause();
                bg_audio_val = true;
        }else{
                bg_audio.play();
        }
}
audio_init();
</script>
<?php }?>
<script>
 $(function()
 {
 var u = navigator.userAgent;
if (u.indexOf('Android') > -1 || u.indexOf('Linux') > -1||u.indexOf('iPhone') > -1||u.indexOf('Windows Phone') > -1||navigator.userAgent.indexOf("iPad")>-1) {
   $(".hover-bg .hover-text").css({'opacity':'1'});
   
   $(".hover-bg .hover-text>h4").css({'opacity':'1','-webkit-transform':'translateY(0)','transform':'translateY(0)'});
   
   $(".hover-bg .hover-text>i").css({'opacity':'1'});
} 
    
 });
  

</html>