<?php exit;?>a:3:{s:8:"template";a:12:{i:0;s:45:"/srv/www/el/themes/ecmoban_dangdang/index.dwt";i:1;s:59:"/srv/www/el/themes/ecmoban_dangdang/library/page_header.lbi";i:2;s:67:"/srv/www/el/themes/ecmoban_dangdang/library/category_tree_index.lbi";i:3;s:56:"/srv/www/el/themes/ecmoban_dangdang/library/index_ad.lbi";i:4;s:59:"/srv/www/el/themes/ecmoban_dangdang/library/ad_position.lbi";i:5;s:60:"/srv/www/el/themes/ecmoban_dangdang/library/new_articles.lbi";i:6;s:67:"/srv/www/el/themes/ecmoban_dangdang/library/recommend_promotion.lbi";i:7;s:61:"/srv/www/el/themes/ecmoban_dangdang/library/recommend_new.lbi";i:8;s:61:"/srv/www/el/themes/ecmoban_dangdang/library/recommend_hot.lbi";i:9;s:62:"/srv/www/el/themes/ecmoban_dangdang/library/recommend_best.lbi";i:10;s:52:"/srv/www/el/themes/ecmoban_dangdang/library/help.lbi";i:11;s:59:"/srv/www/el/themes/ecmoban_dangdang/library/page_footer.lbi";}s:7:"expires";i:1422863362;s:8:"maketime";i:1422859762;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="ECSHOP演示站" />
<meta name="Description" content="ECSHOP演示站" />
<title>ECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/ecmoban_dangdang/style.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|ECSHOP演示站 - Powered by ECShop" href="feed.php" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/index.js"></script></head>
<body class="index_page">
<link href="themes/ecmoban_suning/qq/images/qq.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
//设为首页 www.ecmoban.com
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
 
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
<div class="top_nav"> 
  <script type="text/javascript">
          //初始化主菜单
            function sw_nav(obj,tag)
            {
     
            var DisSub = document.getElementById("DisSub_"+obj);
            var HandleLI= document.getElementById("HandleLI_"+obj);
                if(tag==1)
                {
                    DisSub.style.display = "block";
             
                    
                }
                else
                {
                    DisSub.style.display = "none";
                
                }
     
            }
     
    </script>
  <div class="block"> 
    
    <ul class="top_bav_l">
      <li class="top_sc"> <a href="javascript:void(0);" onclick="AddFavorite('我的网站',location.href)">收藏本站</a> </li>
      <li>关注我们：</li>
      <li style="border:none" class="menuPopup"  onMouseOver="sw_nav(1,1);" onMouseOut="sw_nav(1,0);"> <a id="HandleLI_1" href="javascript:;" title="微博" class="attention"></a>
        <div id=DisSub_1 class="top_nav_box  top_weibo"> <a href="http://e.weibo.com/ECMBT" target="_blank" title="新浪微博" class="top_weibo"></a> <a href="http://e.t.qq.com/ecmoban_com" target="_blank" title="QQ微博" class="top_qq"></a> </div>
      </li>
      <li class="menuPopup" onMouseOver="sw_nav(2,1);" onMouseOut="sw_nav(2,0);"> <a id="HandleLI_2" href="javascript:;" title="微信" class="top_weixin"></a>
        <div id="DisSub_2" class="weixinBox" style="display: none;"> <img src="themes/ecmoban_dangdang/images/weixin.png" style="width:150px; height:190px;  background:#0000CC" width="150" height="190"> </div>
      </li>
    </ul>
    
    <div class="header_r"> <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script> <font id="ECS_MEMBERZONE" >554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </font> <a id="ECS_CARTINFO" class="ddnewhead_cart" >554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca </a> 
       
       
      <a href="flow.php" >查看购物车</a> 
       
      | 
       
       
      <a href="pick_out.php" >选购中心</a> 
       
      | 
       
       
      <a href="tag_cloud.php" >标签云</a> 
       
      | 
       
       
      <a href="quotation.php" >报价单</a> 
       
       
       
      
    </div>
  </div>
</div>
<div  class="clearfix">
  <div class="block header">
    <div class="top"> <a href="index.php" class="logo"><img src="themes/ecmoban_dangdang/images/logo.gif"> </a>
      <div class="head_r">
        <div class="top_search"> 
          <script type="text/javascript">
            
            <!--
            function checkSearchForm()
            {
                if(document.getElementById('keyword').value)
                {
                    return true;
                }
                else
                {
                    alert("请输入搜索关键词！");
                    return false;
                }
            }
            -->
            
			
			function show()
            {
                document.getElementById("close").style.display = "block";
            }
            
           
            </script>
          <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()"  style="_position:relative; top:5px;">
            <input name="keywords" type="text" id="keyword" class="keyword" value=""  />
            <input value="" id="seachbtn" type="submit">
          </form>
          <div class="vjia-suggest-container">
            <div class="vjia-suggest-content"></div>
            <ol>
            </ol>
          </div>
          <div style="clear:both"></div>
           </div>
        <div class="top_shopCart clearfix"  >
          <div class="qrcode" id="headererweima"> 
            <p><a href="#" class="qrcode_img" ><img src="themes/ecmoban_dangdang/images/erweima.png"></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div style="clear:both"></div>
<div class="menu_box clearfix">
  <div class="block">
    <div class="menu"> <a href="index.php" class="cur">首页<span></span></a> 
       
      <a href="category.php?id=3"  > GSM手机 <span></span> </a> 
      
       
      <a href="category.php?id=5"  > 双模手机 <span></span> </a> 
      
       
      <a href="category.php?id=6"  > 手机配件 <span></span> </a> 
      
       
      <a href="message.php"  > 留言板 <span></span> </a> 
      
       
    </div>
  </div>
</div>
<div class="block clearfix">
<div class="AreaL" style="width:189PX;">
<script type="text/javascript">
          //初始化主菜单
            function sw_nav2(obj,tag)
            {
            var DisSub2 = document.getElementById("DisSub2_"+obj);
            var HandleLI2= document.getElementById("HandleLI2_"+obj);
                if(tag==1)
                {
                    DisSub2.style.display = "block";
					HandleLI2.className="current";
                }
                else
                {
                    DisSub2.style.display = "none";
					HandleLI2.className="";
                }
            }
</script>
 
    
    
  <div id="category_tree">
  <div class="tit"> </div>
  <dl class="clearfix" >
             <div  class="dt" onMouseOver="sw_nav2(1,1);" onMouseOut="sw_nav2(1,0);" 
         
        >
        
        <div id="HandleLI2_1">
        <a    class="a    
          
"
 href="category.php?id=1">
 手机类型 </a>
</div>
        
        
        
<dd  id=DisSub2_1 style="display:none"> 
 <a class="over_2" href="category.php?id=2">CDMA手机</a>  
<div class="clearfix">
</div>   
       
 <a class="over_2" href="category.php?id=3">GSM手机</a>  
<div class="clearfix">
</div>   
       
 <a class="over_2" href="category.php?id=4">3G手机</a>  
<div class="clearfix">
</div>   
       
 <a class="over_2" href="category.php?id=5">双模手机</a>  
<div class="clearfix">
</div>   
       
</dd> 
</div>
        <div  class="dt" onMouseOver="sw_nav2(2,1);" onMouseOut="sw_nav2(2,0);" 
         
        >
        
        <div id="HandleLI2_2">
        <a    class="a    
         t 
 
"
 href="category.php?id=6">
 手机配件 </a>
</div>
        
        
        
<dd  id=DisSub2_2 style="display:none"> 
 <a class="over_2" href="category.php?id=7">充电器</a>  
<div class="clearfix">
</div>   
       
 <a class="over_2" href="category.php?id=8">耳机</a>  
<div class="clearfix">
</div>   
       
 <a class="over_2" href="category.php?id=9">电池</a>  
<div class="clearfix">
</div>   
       
 <a class="over_2" href="category.php?id=11">读卡器和内存卡</a>  
<div class="clearfix">
</div>   
       
</dd> 
</div>
        <div  class="dt" onMouseOver="sw_nav2(3,1);" onMouseOut="sw_nav2(3,0);" 
         
        >
        
        <div id="HandleLI2_3">
        <a    class="a    
          
"
 href="category.php?id=12">
 充值卡 </a>
</div>
        
        
        
<dd  id=DisSub2_3 style="display:none"> 
 <a class="over_2" href="category.php?id=13">小灵通/固话充值卡</a>  
<div class="clearfix">
</div>   
       
 <a class="over_2" href="category.php?id=14">移动手机充值卡</a>  
<div class="clearfix">
</div>   
       
 <a class="over_2" href="category.php?id=15">联通手机充值卡</a>  
<div class="clearfix">
</div>   
       
</dd> 
</div>
 
</dl>
</div>
<div class="blank"></div>
    
  </div>
<div class="f_l" style=" width:772px;"> 
<style type="text/css">
.container, .container * {
	margin: 0;
	padding: 0;
}
.container {
	width: 772px;
	height: 310px;
	overflow: hidden;
	position: relative;
}
.slider {
	position: absolute;
}
.slider li {
	list-style: none;
	display: inline;
}
.slider img {
	width: 772px;
	height: 310px;
	display: block;
}
.slider2 {
	width: 2000px;
}
.slider2 li {
	float: left;
}
.num {
	position: absolute;
	right: 5px;
	bottom: 5px;
}
.num li {
	float: left;
width: 20px;
height: 20px;
overflow: hidden;
font-size: 12px;
cursor: pointer;
background-color: #8c8c8c;
margin-right: 10px;
border-radius: 10px;
font-family: "arial";
color: #fff;
line-height: 20px;
text-align: center;
}
.num li.on {
	background-color: #ff2832;
}
</style>
<div class="container" id="idTransformView">
  <ul class="slider" id="idSlider">
        
  </ul>
  <ul class="num" id="idNum">
    
        
  </ul>
</div>
<script type="text/javascript">
var $ = function (id) {
	return "string" == typeof id ? document.getElementById(id) : id;
};
var Class = {
  create: function() {
	return function() {
	  this.initialize.apply(this, arguments);
	}
  }
}
Object.extend = function(destination, source) {
	for (var property in source) {
		destination[property] = source[property];
	}
	return destination;
}
var TransformView = Class.create();
TransformView.prototype = {
  //容器对象,滑动对象,切换参数,切换数量
  initialize: function(container, slider, parameter, count, options) {
	if(parameter <= 0 || count <= 0) return;
	var oContainer = $(container), oSlider = $(slider), oThis = this;
	this.Index = 0;//当前索引
	
	this._timer = null;//定时器
	this._slider = oSlider;//滑动对象
	this._parameter = parameter;//切换参数
	this._count = count || 0;//切换数量
	this._target = 0;//目标参数
	
	this.SetOptions(options);
	
	this.Up = !!this.options.Up;
	this.Step = Math.abs(this.options.Step);
	this.Time = Math.abs(this.options.Time);
	this.Auto = !!this.options.Auto;
	this.Pause = Math.abs(this.options.Pause);
	this.onStart = this.options.onStart;
	this.onFinish = this.options.onFinish;
	
	oContainer.style.overflow = "hidden";
	oContainer.style.position = "relative";
	
	oSlider.style.position = "absolute";
	oSlider.style.top = oSlider.style.left = 0;
  },
  //设置默认属性
  SetOptions: function(options) {
	this.options = {//默认值
		Up:			true,//是否向上(否则向左)
		Step:		5,//滑动变化率
		Time:		10,//滑动延时
		Auto:		true,//是否自动转换
		Pause:		2000,//停顿时间(Auto为true时有效)
		onStart:	function(){},//开始转换时执行
		onFinish:	function(){}//完成转换时执行
	};
	Object.extend(this.options, options || {});
  },
  //开始切换设置
  Start: function() {
	if(this.Index < 0){
		this.Index = this._count - 1;
	} else if (this.Index >= this._count){this.Index = 0;}
	
	this._target = -1 * this._parameter * this.Index;
	this.onStart();
	this.Move();
  },
  //移动
  Move: function() {
	clearTimeout(this._timer);
	var oThis = this, style = this.Up ? "top" : "left", iNow = parseInt(this._slider.style[style]) || 0, iStep = this.GetStep(this._target, iNow);
	
	if (iStep != 0) {
		this._slider.style[style] = (iNow + iStep) + "px";
		this._timer = setTimeout(function(){oThis.Move();}, this.Time);
	} else {
		this._slider.style[style] = this._target + "px";
		this.onFinish();
		if (this.Auto) { this._timer = setTimeout(function(){oThis.Index++; oThis.Start();}, this.Pause); }
	}
  },
  //获取步长
  GetStep: function(iTarget, iNow) {
	var iStep = (iTarget - iNow) / this.Step;
	if (iStep == 0) return 0;
	if (Math.abs(iStep) < 1) return (iStep > 0 ? 1 : -1);
	return iStep;
  },
  //停止
  Stop: function(iTarget, iNow) {
	clearTimeout(this._timer);
	this._slider.style[this.Up ? "top" : "left"] = this._target + "px";
  }
};
window.onload=function(){
	function Each(list, fun){
		for (var i = 0, len = list.length; i < len; i++) {fun(list[i], i);}
	};
	
	var objs = $("idNum").getElementsByTagName("li");
	
	var tv = new TransformView("idTransformView", "idSlider", 310, 5, {
		onStart : function(){ Each(objs, function(o, i){o.className = tv.Index == i ? "on" : "";}) }//按钮样式
	});
	
	tv.Start();
	
	Each(objs, function(o, i){
		o.onmouseover = function(){
			o.className = "on";
			tv.Auto = false;
			tv.Index = i;
			tv.Start();
		}
		o.onmouseout = function(){
			o.className = "";
			tv.Auto = true;
			tv.Start();
		}
	})
	
	////////////////////////test2
	
	var objs2 = $("idNum2").getElementsByTagName("li");
	
	var tv2 = new TransformView("idTransformView2", "idSlider2", 772, 5, {
		onStart: function(){ Each(objs2, function(o, i){o.className = tv2.Index == i ? "on" : "";}) },//按钮样式
		Up: false
	});
	
	tv2.Start();
	
	Each(objs2, function(o, i){
		o.onmouseover = function(){
			o.className = "on";
			tv2.Auto = false;
			tv2.Index = i;
			tv2.Start();
		}
		o.onmouseout = function(){
			o.className = "";
			tv2.Auto = true;
			tv2.Start();
		}
	})
	
	$("idStop").onclick = function(){tv2.Auto = false; tv2.Stop();}
	$("idStart").onclick = function(){tv2.Auto = true; tv2.Start();}
	$("idNext").onclick = function(){tv2.Index++; tv2.Start();}
	$("idPre").onclick = function(){tv2.Index--;tv2.Start();}
	$("idFast").onclick = function(){ if(--tv2.Step <= 0){tv2.Step = 1;} }
	$("idSlow").onclick = function(){ if(++tv2.Step >= 10){tv2.Step = 10;} }
	$("idReduce").onclick = function(){ tv2.Pause-=1000; if(tv2.Pause <= 0){tv2.Pause = 0;} }
	$("idAdd").onclick = function(){ tv2.Pause+=1000; if(tv2.Pause >= 5000){tv2.Pause = 5000;} }
	
	$("idReset").onclick = function(){
		tv2.Step = Math.abs(tv2.options.Step);
		tv2.Time = Math.abs(tv2.options.Time);
		tv2.Auto = !!tv2.options.Auto;
		tv2.Pause = Math.abs(tv2.options.Pause);
	}
	
}
</script> 
 
 
</div>
<div  class="f_r" style="width:235px;"> 
<div class="fr da0x70"> 
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";N;s:3:"num";N;}554fcae493e564ee0dc75bdf2ebf94ca
<div class="blank"></div>
</div>
 <div id="virtuals">
 
 
  <div class="mt">
      <ul class="fore1 lh">
        <li ><a href="javascript:void(0);">商城公告</a></li>
      </ul>
    </div>
    <div class="mc" >
     <div class="virtuals-iframes" >
        <ul>
                <li>
      <a href="article.php?id=33" title="三星SGHU308说明书下载">三星SGHU308说明书下载</a>
        </li>
                <li>
      <a href="article.php?id=32" title="手机游戏下载">手机游戏下载</a>
        </li>
                <li>
      <a href="article.php?id=30" title="促销诺基亚N96">促销诺基亚N96</a>
        </li>
                <li>
      <a href="article.php?id=29" title="诺基亚5320 促销">诺基亚5320 促销</a>
        </li>
                <li>
      <a href="article.php?id=34" title="3G知识普及">3G知识普及</a>
        </li>
                <li>
      <a href="article.php?id=31" title="诺基亚6681手机广告欣赏">诺基亚6681手机广告欣赏</a>
        </li>
                <li>
      <a href="article.php?id=28" title="飞利浦9@9促销">飞利浦9@9促销</a>
        </li>
                <li>
      <a href="article.php?id=27" title="800万像素超强拍照机 LG Viewty Smart再曝光">800万像素超强拍照机 LG V...</a>
        </li>
                </ul>
        </div>
    </div>
 
 </div>
  </div>
    <div class="blank"></div> 
 
 
  
<div class="blank"></div> 
  <div class="goodsBox_1">
  
  
  
<div class="xm-box">
  <h4 class="title"><span>新品上架</span> <a class="more" href="search.php?intro=new">更多</a></h4>
  <div id="show_new_area" class="clearfix"> 
     
        <div class="pic"  style='margin-left:0px;' > <a href="goods.php?id=20"><img src="images/200905/thumb_img/20_thumb_G_1242106490058.jpg" alt="三星BC01" class="img" /></a>
      <p class="name"><a href="goods.php?id=20" title="三星BC01">三星BC01</a></p>
     <p class="price"> 市场价：<font class="market">￥336元</font> 
      本店价：<font class="f1"> 
       
      ￥280元 
       
      </font> </p></div>
        <div class="pic" > <a href="goods.php?id=9"><img src="images/200905/thumb_img/9_thumb_G_1241511871555.jpg" alt="诺基亚E66" class="img" /></a>
      <p class="name"><a href="goods.php?id=9" title="诺基亚E66">诺基亚E66</a></p>
     <p class="price"> 市场价：<font class="market">￥2758元</font> 
      本店价：<font class="f1"> 
       
      ￥2298元 
       
      </font> </p></div>
        <div class="pic" > <a href="goods.php?id=1"><img src="images/200905/thumb_img/1_thumb_G_1240902890710.jpg" alt="KD876" class="img" /></a>
      <p class="name"><a href="goods.php?id=1" title="KD876">KD876</a></p>
     <p class="price"> 市场价：<font class="market">￥1666元</font> 
      本店价：<font class="f1"> 
       
      ￥1388元 
       
      </font> </p></div>
     
    
     
  </div>
</div>
<div class="blank"></div>
 
 
<div class="xm-box">
  <h4 class="title"><span>热卖商品</span> <a class="more" href="search.php?intro=hot">更多</a></h4>
  <div id="show_hot_area" class="clearfix"> 
     
        <div class="pic"   style='margin-left:0px;' > <a href="goods.php?id=20"><img src="images/200905/thumb_img/20_thumb_G_1242106490058.jpg" alt="三星BC01" class="img" /></a>
      <p class="name"><a href="goods.php?id=20" title="三星BC01">三星BC01</a></p>
      <p class="price">市场价：<font class="market">￥336元</font>
      本店价：<font class="f1"> 
       
      ￥280元 
       
      </font></p> </div>
        <div class="pic"  > <a href="goods.php?id=9"><img src="images/200905/thumb_img/9_thumb_G_1241511871555.jpg" alt="诺基亚E66" class="img" /></a>
      <p class="name"><a href="goods.php?id=9" title="诺基亚E66">诺基亚E66</a></p>
      <p class="price">市场价：<font class="market">￥2758元</font>
      本店价：<font class="f1"> 
       
      ￥2298元 
       
      </font></p> </div>
        <div class="pic"  > <a href="goods.php?id=1"><img src="images/200905/thumb_img/1_thumb_G_1240902890710.jpg" alt="KD876" class="img" /></a>
      <p class="name"><a href="goods.php?id=1" title="KD876">KD876</a></p>
      <p class="price">市场价：<font class="market">￥1666元</font>
      本店价：<font class="f1"> 
       
      ￥1388元 
       
      </font></p> </div>
     
    
     
  </div>
</div>
<div class="blank"></div>
 
 
<div class="xm-box">
  <h4 class="title"><span>精品推荐</span> <a class="more" href="search.php?intro=best">更多</a></h4>
  <div id="show_best_area" class="clearfix"> 
     
        <div class="pic"  style='margin-left:0px;'  > <a href="goods.php?id=20"><img src="images/200905/thumb_img/20_thumb_G_1242106490058.jpg" alt="三星BC01" class="img" /></a>
      <p class="name"><a href="goods.php?id=20" title="三星BC01">三星BC01</a></p>
      <p class="price">市场价：<font class="market">￥336元</font>
      本店价：<font class="f1"> 
       
      ￥280元 
       
      </font></p> </div>
        <div class="pic"  > <a href="goods.php?id=9"><img src="images/200905/thumb_img/9_thumb_G_1241511871555.jpg" alt="诺基亚E66" class="img" /></a>
      <p class="name"><a href="goods.php?id=9" title="诺基亚E66">诺基亚E66</a></p>
      <p class="price">市场价：<font class="market">￥2758元</font>
      本店价：<font class="f1"> 
       
      ￥2298元 
       
      </font></p> </div>
        <div class="pic"  > <a href="goods.php?id=1"><img src="images/200905/thumb_img/1_thumb_G_1240902890710.jpg" alt="KD876" class="img" /></a>
      <p class="name"><a href="goods.php?id=1" title="KD876">KD876</a></p>
      <p class="price">市场价：<font class="market">￥1666元</font>
      本店价：<font class="f1"> 
       
      ￥1388元 
       
      </font></p> </div>
     
    
     
  </div>
</div>
<div class="blank"></div>
 
 
  </div> 
  
    </div>
  
  
  
 
    <a href="http://www.ecmoban.com" class="ecmoban">ecshop模板堂</a>
 
<div id="footer">
  <div class="footer">
  <div class="footer_pic_new">
		<div class="footer_pic_new_inner">
		    <a name="foot_1" href="#" target="_blank" class="footer_pic01"><span>正规渠道正品保障</span></a>
		    <a name="foot_2" class="footer_pic02" href="#" target="_blank"><span>放心购物货到付款</span></a>
		    <a name="foot_3" class="footer_pic03" href="#" target="_blank"><span>150城市次日送达</span></a>
		    <a name="foot_4" class="footer_pic04" href="#" target="_blank"><span>上门退货当场退款</span></a>
		</div>
	</div>
     <div class="public_footer_new">
     
        <div class="footer_sort fore1">
    <span class="f_title">新手上路 </span>
     
      <ul> 
                <li><a href="article.php?id=9" target="_blank" title="售后流程">售后流程</a></li>
                <li><a href="article.php?id=10" target="_blank" title="购物流程">购物流程</a></li>
                <li><a href="article.php?id=11" target="_blank" title="订购方式">订购方式</a></li>
         
      </ul>
    </div>
     
     
        <div class="footer_sort fore2">
    <span class="f_title">手机常识 </span>
     
      <ul> 
                <li><a href="article.php?id=12" target="_blank" title="如何分辨原装电池">如何分辨原装电池</a></li>
                <li><a href="article.php?id=13" target="_blank" title="如何分辨水货手机 ">如何分辨水货手机</a></li>
                <li><a href="article.php?id=14" target="_blank" title="如何享受全国联保">如何享受全国联保</a></li>
         
      </ul>
    </div>
     
     
        <div class="footer_sort fore3">
    <span class="f_title">配送与支付 </span>
     
      <ul> 
                <li><a href="article.php?id=15" target="_blank" title="货到付款区域">货到付款区域</a></li>
                <li><a href="article.php?id=16" target="_blank" title="配送支付智能查询 ">配送支付智能查询</a></li>
                <li><a href="article.php?id=17" target="_blank" title="支付方式说明">支付方式说明</a></li>
         
      </ul>
    </div>
     
     
        <div class="footer_sort fore4">
    <span class="f_title">会员中心</span>
     
      <ul> 
                <li><a href="article.php?id=18" target="_blank" title="资金管理">资金管理</a></li>
                <li><a href="article.php?id=19" target="_blank" title="我的收藏">我的收藏</a></li>
                <li><a href="article.php?id=20" target="_blank" title="我的订单">我的订单</a></li>
         
      </ul>
    </div>
     
     
        <div class="footer_sort fore5">
    <span class="f_title">服务保证 </span>
     
      <ul> 
                <li><a href="article.php?id=21" target="_blank" title="退换货原则">退换货原则</a></li>
                <li><a href="article.php?id=22" target="_blank" title="售后服务保证 ">售后服务保证</a></li>
                <li><a href="article.php?id=23" target="_blank" title="产品质量保证 ">产品质量保证</a></li>
         
      </ul>
    </div>
     
     
        <div class="footer_sort fore6">
    <span class="f_title">联系我们 </span>
     
      <ul> 
                <li><a href="article.php?id=24" target="_blank" title="网站故障报告">网站故障报告</a></li>
                <li><a href="article.php?id=25" target="_blank" title="选机咨询 ">选机咨询</a></li>
                <li><a href="article.php?id=26" target="_blank" title="投诉与建议 ">投诉与建议</a></li>
         
      </ul>
    </div>
     
     
</div>
 
  
  <div class="footer_nav_box">
        <div class="footer_nav"> 
       
      <a href="article.php?id=1" >免责条款</a> 
       |  
       
      <a href="article.php?id=2" >隐私保护</a> 
       |  
       
      <a href="article.php?id=3" >咨询热点</a> 
       |  
       
      <a href="article.php?id=4" >联系我们</a> 
       |  
       
      <a href="article.php?id=5" >公司简介</a> 
       |  
       
      <a href="wholesale.php" >批发方案</a> 
       |  
       
      <a href="myship.php" >配送方式</a> 
       
       
    </div>
    
   <div class="footer_copyright"><span>
     &copy; 2005-2015 ECSHOP 版权所有，并保留所有权利。<br />
      
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
      <br />
      
       
      </span>
    </div>
    <div align="center"><a href=" http://www.ecmoban.com" target="_blank"><img src="themes/ecmoban_dangdang/images/ecmoban.gif" alt="ECShop模板" /></a></div>
    
    <div class="footer_icon footer_icon2">
				<div class="validator"><a href="#" target="_blank" class="footer_img"><img src="themes/ecmoban_dangdang/images/validate.gif"></a></div>
				<div class="knet">
					
					<a href="#" tabindex="-1" id="urlknet" target="_blank"><img width="128" height="47" alt="可信网站" name="CNNIC_seal" border="true" src="themes/ecmoban_dangdang/images/knetSealLogo.png" oncontextmenu="return false;" onclick="CNNIC_change('urlknet')"> </a>
					</div>
					<div class="clear"></div>
				</div>  
     </div>
</div>
</div>
  
<link href="ecmoban_qq/images/qq.css" rel="stylesheet" type="text/css" />
<div class="QQbox" id="divQQbox" style="width: 170px; ">
<div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display: none; " onmouseover="OnlineOver();">
    <div class="t"></div>
    <div class="infobox">我们营业的时间<br>9:00-18:00</div>
    <div class="con">
        <ul>
 
  
  
  
  
  
                                                                                  
    
  
  
  
  
  
  
  
  
  
  
	         </ul>
    </div>
    <div class="b"></div>
</div>
<div id="divMenu" onmouseover="OnlineOver();" style="display: block; "><img src="ecmoban_qq/images/qq_1.gif" class="press" alt="在线咨询"></div>
</div>
<script type="text/javascript">
//<![CDATA[
var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
//!]]>
initFloatTips();
function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "170px";
}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{   
      HTMLElement.prototype.contains=function(obj)   
      {   
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;   
   　　　　obj=obj.parentNode;
   　　}   
          return false;   
      };   
}  
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
} 
} 
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script>
 
</body>
</html>
