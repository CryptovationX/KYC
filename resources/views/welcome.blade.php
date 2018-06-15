<!DOCTYPE html>
<html ng-app="accountApp">
<head>
	<meta charset="utf-8" />
	<meta name="format-detection" content="telephone=no,email=no,address=no">
	<title ng-bind="webtitle +' - '+ ('binancetitle'| T)"></title>
	<link rel="stylesheet" type="text/css" href="/resources/css/global.css?v=2.0.185"/>
	<link rel="Shortcut Icon" href="https://ex.bnbstatic.com/resources/img/favicon.ico">
	<script id="loadeden"  src="/resources/js/i18n/en.js?v=2.0.185"></script>
	<script id="loadeden"  src="https://ex.bnbstatic.com/resources/js/i18n/en.js?v=2.0.185"></script>
	<script src="https://ex.bnbstatic.com/resources/lib/jQuery1.10.2.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://ex.bnbstatic.com/resources/js/angular.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://ex.bnbstatic.com/resources/js/angular-cookies.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://ex.bnbstatic.com/resources/js/JQuery.md5.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://ex.bnbstatic.com/resources/js/layer/layer.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://ex.bnbstatic.com/resources/js/angular-translate.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://ex.bnbstatic.com/resources/js/angular-translate-loader-static-files.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://ex.bnbstatic.com/resources/js/JQuery.cookie.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://ex.bnbstatic.com/resources/js/sensorsdata2.js" type="text/javascript"  charset="utf-8"></script>
	<script type="text/javascript">
			var app = angular.module('accountApp', ['ngCookies','pascalprecht.translate'])
			
			 <!--layer全局配置-->
		    layer.config({
		         extend: ['skin/myskin/myLayer.css'],
		         shift:null,
		         closeBtn:2
		     })
			
		     $(document).ajaxSend(function(event, jqxhr, settings) {
				jqxhr.setRequestHeader("CSRFToken",$.md5($.cookie('CSRFToken'))),
				jqxhr.setRequestHeader("clientType","web"),
				jqxhr.setRequestHeader("lang",localStorage.lang)
			});
	</script>
	<script src="https://ex.bnbstatic.com/resources/js/paging.js" type="text/javascript" charset="utf-8"></script>
	<style>
	/* body{ overflow-x: hidden;}  */
	.usercenter-subnav{
		display:none;
	}
	.usercenter-subnav.cur{
		display:block;
	}
	.inviteBanner a{display:inline-block;width:100%;min-width:1200px;height:90px;background:url(https://ex.bnbstatic.com/resources/img/activity/invite_rk_en.jpg)no-repeat center;}
	.inviteBanner a.inviteBanner_cn{background:url(https://ex.bnbstatic.com/resources/img/activity/invite_rk_cn.jpg)no-repeat center;}
	</style>
	<script src="https://ex.bnbstatic.com/resources/js/myInterceptor.js?v=2.0.185" type="text/javascript" charset="utf-8"></script>
	<script src="https://ex.bnbstatic.com/resources/js/myFactory.js?v=2.0.185" type="text/javascript" charset="utf-8"></script>
	<script src="https://ex.bnbstatic.com/resources/js/usercenterLayout.js?v=2.0.185" type="text/javascript" charset="utf-8"></script>
</head>
<body ng-controller="usercenterCtr" ng-cloak>
		



<script>
  var initLang='en'
  var notChinese=true

  function setCookie(name,value)
  {
	  var Days = 3000;
	  var exp = new Date();
	  exp.setTime(exp.getTime() + Days*24*60*60*1000);
	  document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
  }
  if(document.cookie.indexOf("lang")==-1) {
	  localStorage.lang = initLang
	  setCookie('lang',initLang)
  }
</script>
<script type="text/javascript" src="https://ex.bnbstatic.com/resources/js/i18n/langs.js?v=2.0.185"></script>
<script  id="loadeden" src="https://ex.bnbstatic.com/resources/js/i18n/en.js?v=2.0.185"></script>
<script type="text/javascript" src="https://ex.bnbstatic.com/resources/js/head.js?v=2.0.185"></script>
<script src="https://ex.bnbstatic.com/resources/js/sensorsdata2.js" type="text/javascript" charset="utf-8"></script>

<div ng-controller="headCtr" >
		
		<div ng-if="showMobileTip" class="switchPcTip"><span><i class="iconfont icon-mobile round"></i> {{"We've detected that you are using a small display"|T}} .<br> <a href="/m-HomePage.html">{{"Want to switch to the mobile version of the site"|T}} &gt;&gt;</a></span><label class="close" ng-click="closeShowMobileTip()"><i class="iconfont icon-delete"></i></label></div>
		<!-- 主导航 -->
		<div class="header">
			<a href="/" class="logo"><img ng-src="{{'logoSrc' | T}}"/></a>
			
			<ul class="main-nav exchange" ng-if="notChinese">
					<li>
						
						<a  href="javascript:;"><i class="iconfont icon-exchange"></i>{{"Exchange" | T}}</a>
						<img src="/resources/img/header-sj.png"/>
						<ul class="subNav">
							<li><a ng-href="/{{cur_lang}}/trade/BTC_USDT">{{"Basic" | T}}</a></li>
							<li><a  ng-click="changeToDetail()">{{"Advanced" | T}}</a></li>
						</ul>
					</li>
					
				</ul>
				
	 			<ul class="main-nav exchange" ng-if="notChinese">
					<li>
						<a style="line-height: 47px" target="_blank"  href="https://labs.binance.com"><i class="iconfont icon-lab"></i>Labs</a>
					</li>
				</ul>
				
				<ul class="main-nav exchange" ng-if="notChinese">
					<li>
						<a href="https://launchpad.binance.com/" style="line-height: 47px" target="_blank"><i class="iconfont icon-launchPad"></i>{{'LaunchPad' | T}}</a>
					</li>
				</ul>
				
				<ul class="main-nav exchange" ng-if="notChinese">
					<li>
						<a ng-href="{{cur_lang=='cn' ? 'https://info.binance.com/cn' : 'https://info.binance.com/en'}}" style="line-height: 47px" target="_blank"><i class="iconfont icon-infoicoLine" style="font-size:14px;margin-right:5px;"></i>{{'Info' | T}}</a>
					</li>
				</ul>
				<div class="googleFY f-fr"  ng-click="showGoogleFY=!showGoogleFY" ng-show="initLang!='cn'">
					<img src="https://ex.bnbstatic.com/resources/img/googleFY.png"/>
					<div class="googleFY-language" >
						<h3>{{'Website Translator' | T}}</h3>
						<div id="google_translate_element"></div>
						<p>Translations by Google is provided for 
							convenience and is not verified contextually.<br/>
							Please refer to original for accuracy.
						</p>
					</div>
				</div>
				
				<div class="f-fr">
					<div class="languages" id="languagesSpanI"  ng-mouseover="showFlags=true;" ng-mouseout="showFlags=false;">
						<span ng-repeat="l in langs" class="font-lang" ng-if="cur_lang==l.code"><i class="iconfont icon-diqiu"></i>{{l.name}}</span>
						<img src="/resources/img/header-sj.png"/>
						<ul ng-show="showFlags">
							<li ng-repeat="l in langs" ng-click="switching(l.code)" ng-if="l.isUsed"><span ng-if="cur_lang==l.code" class="duigou"></span>{{l.name}}</li>
						</ul>
					</div>
				</div>
				
				<div class="logined f-fr" ng-if="Islogin" ng-mouseenter="getTotalAsset()">
					<i class="iconfont icon-touxiang"></i>
					<img src="/resources/img/header-sj.png"/>
					<ul>
						<li>
							<a class="link" href="/userCenter/myAccount.html">
								<strong>{{"User Center" | T}}</strong><br/>
								<span>{{user.email}}</span>
								<i class="iconfont icon-right"></i>
							</a>
						</li>
						<li>
							<a class="link"  href="/userCenter/balances.html">
								<span>{{"Estimated Value" | T}}: </span><br/>
								<strong>{{totalAsset.totalTransferBtc | number:8}} BTC</strong>
							</a>
						</li>
						<li>
							<a class="link"  href="javascript:;" ng-click="logout()">
								{{"logout"|T}}
							</a>
						</li>
					</ul>
				</div>
				
				<div class="login-register f-fr" ng-if="!Islogin">
					<a href="/login.html">{{"login"|T}}</a>&nbsp;&nbsp;<span ng-if="notChinese">{{"or" | T}}&nbsp;&nbsp;</span>
					<a href="/register.html" ng-if="notChinese">{{'register'|T}}</a>
				</div>
				
				<ul class="main-nav">
					<li ng-if="Islogin" >
						<a  href="javascript:;" ng-class="{true:'cur',false:''}[curPage=='funds']">{{"Funds" | T}}</a>
						<img src="/resources/img/header-sj.png"/>
						<ul class="subNav">
							<li><a href="/userCenter/balances.html">{{"Balances"| T}}</a></li>
							<li><a href="/userCenter/deposit.html">{{"Deposits"| T}}</a></li>
							<li><a href="/userCenter/withdrawal.html">{{"Withdrawals"| T}}</a></li>
							<li><a href="/userCenter/moneyLog.html">{{"Transaction History" | T}}</a></li>
							<!-- <li><a href="/userCenter/depositWithdraw.html">{{"czth"| T}}</a></li>
							<li><a href="/userCenter/transactionHistory.html">{{"History" | T}}</a></li> -->
						</ul>
					</li>
					<li ng-if="Islogin" >
						<a href="javascript:;" ng-class="{true:'cur',false:''}[curPage=='orders']">{{"Order Management" | T}}</a><img src="/resources/img/header-sj.png"/>
						<ul class="subNav">
							<li><a href="/userCenter/openOrders.html">{{"Open Orders" | T}}</a></li>
							<li><a href="/userCenter/orderHistory.html">{{"Order History" | T}}</a></li>
							<li><a href="/userCenter/tradeHistory.html">{{"Trade History" | T}}</a></li>							
						</ul>
					</li>
					<li><a ng-href="/Careers.html" target="_blank">{{"Careers" | T}}</a></li>
					<li><a href="{{helpCenterUrl}}" target="_blank">{{"Support" | T}}</a></li>
					<li><a href="{{ggCenterUrl}}" target="_blank">{{"Announcement" | T}}</a></li>
				</ul>
		</div>
		<div class="top-news-box" style="display:none;">
			<div class="top-news-cont">
				<div class="top-news-left">
					<span id="top-news-title"></span><a id="top-news-link" href="#" target="_blank">{{'gengduo' | T}}</a>
				</div>
				<span class="iconfont icon-delete"></span>
			</div>
		</div>
</div>

<script>
$(function(){
	$('.googleFY').on('click',function(e){
		e.stopPropagation();
		$(this).find('div').show();
		$(document).not(this).on('click',function(){
			$('.googleFY>div').hide();
		})
	});
	
	
	
	$(".top-news-box .iconfont").click(function(){
		$(this).parents(".top-news-box").slideUp(200);
	});
})
</script>

		
		<!-- 主体内容 -->
		<div class="wrap">
			<div class="inviteBanner" ng-if="inviteStarted">
				<a href="/invite.html" ng-if="cur_lang=='cn'" class="inviteBanner_cn">
					
				</a>
				<a href="/invite.html" ng-if="cur_lang!='cn'">
					
				</a>
			</div>
			<div class="container">
				




<style>
.wrap,body{background:#f5f5f5;}
.identity{width:960px;margin:15px auto;background:#fff;}
.identity-title{padding:0 20px;height:50px;line-height:50px;border-bottom:1px solid #efefef;font-size:16px;color:#454545;}
.identity-body{padding:30px 40px 0;}
.filed{min-height:30px;}
.filed.filed-file{padding-top:30px;margin-top:10px;border-top:1px solid #efefef;}
.filed .label{margin-right:22px;width:130px;line-height:30px;text-align:right;font-size:14px;color:#666;}
.filed .label.sp{line-height:16px;}
.filed .label.sp.zh{line-height:30px;}
.filed input[type='text']{display:inline-block;width:280px;height:28px;border:1px solid #d4d4d4;padding:0 10px;}
.filed input[type=radio]{vertical-align:middle;margin-right:10px;}
.filed .select-input{margin-bottom:20px;padding-left:0;}
.filed .select-input input[type='text']{width:250px;height:26px;border:none;line-height:28px;}
.filed .select-input-list{height:200px;overflow-y:scroll;}
.filed .select-input .Validform_checktip{position:absolute;left:0;top:30px;}
.select label{font-size:14px;color:#333;margin-right:36px;line-height:30px;}

.select label input{vertical-align:middle;}
.select label img{vertical-align:middle;margin:0 6px;}
.filed .tip{font-size:12px;color:#666;padding:10px 0;}
.filed .tip p{line-height:18px;width:700px;padding:10px 0;}
.preView{width:314px;height:200px;background:#fdfdfd url('/resources/img/preview-bg.png')no-repeat center;border:1px dashed #e4e4e4;position:relative;}
.preView img{max-width:100%;max-height:100%;position:absolute;left:50%;top:50%;-webkit-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);transform:translate(-50%,-50%);}
.uploadBox .li{margin-left:15px;}
.uploadBox .li img{vertical-align:middle;}
.uploadBox .li span,.Choose FileBox .li span .iconfont{font-size:14px;color:#666;}
.uploadBox .tip p{line-height:18px;}
.other-info{overflow:hidden;width:350px;margin-bottom:10px;}
.other-info li{float:left;width:170px;}
.other-info li .iconfont{font-size:12px;vertical-align:middle;margin-right:5px;color:#079900;}
.nopadding{padding:0!important;}
.submit{padding:30px 0 30px 154px;border-top:1px solid #efefef;}
.submit .btn{padding:0;width:150px;height:34px;text-align:center;line-height:34px;}
.nomargin{margin:0!important;}
.identity .sex{display:inline-block;margin-right:45px;vertical-align:middle;font-size:14px;color:#333;height:30px;line-height:30px;}
.identity .sex input{vertical-align:middle;margin-right:10px;height:30px;line-height:30px;}
.identity select{height:30px;width:302px;}
.file-btn{position:relative;padding:9px 21px;}
.file-btn +input[type=file]{position:absolute;left:0;top:0;cursor:pointer;height:32px;width:98px;opacity:0;}
.fileName{font-size:14px;color:#333;}
.Validform_checktip{color:#ff5252!important;}
.identity-body .messageBox{margin:0 auto;padding:170px 0 200px;}
.identity-body .messageBox a{color:#e8b342;text-decoration:underline;}
.layui-layer-content .error a:hover{text-decoration:underline;}
</style>

<div class="identity" ng-controller="identityCtrl">
	
	<div class="identity-title">{{'Personal' | T}}</div>

	<div class="identity-body">
	<div class="select">
		<div class="filed f-cb">
			<div class="label f-fl">{{'selectType' | T}}</div>
			<div class="f-fl">
				<label><input type="radio" name="type" value="1" ng-model="identity.type" ng-change="selectType()"/><img src="/resources/img/map-cn.png"/>{{'China' | T}}</label>
				<label><input type="radio" name="type" value="2" ng-model="identity.type" ng-change="selectType()"/><img src="/resources/img/map-other.png"/>{{'International' | T}}</label>
			</div>
		</div>
	</div>
	<p class="nomargin Validform_checktip"></p>
	<form id="authenticationForm" action="/identity/photo.html" enctype="multipart/form-data" method="post" ng-if="identity.type==1">
		<input type="hidden" name="countryOrigin" value="中国大陆" />
		<input type="hidden"  name="type" value="1" />
			<div class="filed f-cb">
				<div class="label f-fl"></div>
				<div class="f-fl">
					<div class="tip" style="margin-left:154px;"><p class="nopadding">{{'Please make sure you use your real identity to do this verification.' | T}}</p></div>
				</div>
			</div>
			<p class="nomargin Validform_checktip"></p>
			
			<div class="filed f-cb">
				<div class="label f-fl">{{"Last Name" | T}}</div>
				<div class="f-fl">
					<input type="text" name="lastNameOrigin" datatype="*" nullmsg="{{'This field is required.' | T}}"/>
					<p class="nomargin Validform_checktip"></p>
				</div>
			</div>
			
			<div class="filed f-cb">
				<div class="label f-fl">{{"First Name" | T}}</div>
				<div class="f-fl">
					<input type="text" name="firstNameOrigin" datatype="*" nullmsg="{{'This field is required.' | T}}"/>
					<p class="nomargin Validform_checktip"></p>
				</div>
			</div>
			
			<div class="filed f-cb">
				<div class="label f-fl">{{"Valid Identity Card" | T}}</div>
				<div class="f-fl">
					<input type="text" name="idNumOrigin" datatype="idcard" nullmsg="{{'This field is required.' | T}}" errormsg="{{'The ID number is wrong' | T}}"/>
					<p class="nomargin Validform_checktip"></p>
				</div>
			</div>
			<div class="filed filed-file f-cb">
				<div class="label sp f-fl" ng-class="{true:'zh',false:''}[cur_lang=='cn']">{{"Identity Card Front Side" | T}}</div>
				<div class="f-fl">
					<div class="uploadBox f-prz">
						<span class="file-btn btn btn-orange">
							{{"Choose File" | T}}
						</span>
						<input type="file" name="frontOrigin" value="点击上传" id="frontBtn" onchange="preView('frontBtn','canvas1','ok1','img1','frontError')" datatype="*" nullmsg="{{'Unselected file' | T}}"/>
						<input type="hidden" id="frontVal"/>
						<span class="fileName"></span>
						<div class="tip"><p>{{'Please make sure that the photo is complete and clearly visible, in JPG format.' | T}}</p></div>
						<div class="f-cb">
							<div class="preView f-fl">
								<canvas id="canvas1" style="display:none;"></canvas>
								<img src="" id="img1">
							</div>
							<div class="f-fl li">
								<span>{{'Example' | T}}<i class="iconfont icon-list"></i></span>
								<img src="/resources/img/idcard-f.png"/>
							</div>
						</div>
						<p class="nomargin Validform_checktip" id="frontError"></p>
					</div>
				</div>
			</div>
			<div class="filed filed-file f-cb">
				<div class="label sp f-fl" ng-class="{true:'zh',false:''}[cur_lang=='cn']">{{"Identity Card Back Side" | T}}</div>
				<div class="f-fl">
					<div class="uploadBox f-prz">
						<span class="file-btn btn btn-orange">
							{{"Choose File" | T}}
						</span>
						<input type="file" name="backOrigin" value="点击上传" id="backBtn" onchange="preView('backBtn','canvas2','ok2','img2','backError')" datatype="*" nullmsg="{{'Unselected file' | T}}"/>
						<input type="hidden" id="backVal"/>
						<span class="fileName"></span>
						<div class="tip"><p>{{'Please make sure that the photo is complete and clearly visible, in JPG format. Id card must be in the valid period.' | T}}</p></div>
						<div class="f-cb">
							<div class="preView f-fl">
								<canvas id="canvas2" style="display:none;"></canvas>
								<img src="" id="img2">
							</div>
							<div class="f-fl li">
								<span>{{'Example' | T}}<i class="iconfont icon-list"></i></span>
								<img src="/resources/img/idcard-b.png"/>
							</div>
						</div>
						<p class="nomargin Validform_checktip" id="backError"></p>
					</div>
				</div>
			</div>
			<div class="filed filed-file f-cb">

				<div class="label sp f-fl">{{"cn-handPhoto" | T}}</div>

				<div class="f-fl">
					<div class="uploadBox f-prz">
						<span class="file-btn btn btn-orange">
							{{"Choose File" | T}}
						</span>
						<input type="file" name="handOrigin" value="点击上传" id="handBtn" onchange="preView('handBtn','canvas3','ok3','img3','handError')" datatype="*" nullmsg="{{'Unselected file' | T}}"/>
						<input type="hidden" id="handVal"/>
						<span class="fileName"></span>
						
						<div class="tip">
							<p>{{"Please provide a photo of you holding your Identity Card front side. In the same picture, make a reference to Binance and today's date displayed. Make sure your face is clearly visible and that all passport details are clearly readable." | T}}</p>
							<ul class="other-info">
								<li><i class="iconfont icon-gou"></i>{{"Face clearly visible" | T}}</li>
								<li><i class="iconfont icon-gou"></i>{{"cn-Photoclearly" | T}}</li>
								<li><i class="iconfont icon-gou"></i>{{'cn-note' | T}}</li>
								<li><i class="iconfont icon-gou"></i>{{"Note with today's date" | T}}</li>
							</ul>
						</div>
						<div class="f-cb">
							<div class="preView f-fl">
								<canvas id="canvas3" style="display:none;"></canvas>
								<img src="" id="img3">
							</div>
							<div class="f-fl li">
								<span>{{'Example' | T}}<i class="iconfont icon-list"></i></span>
								<img src="/resources/img/idcard-h.png"/>
							</div>
						</div>
						<p class="nomargin Validform_checktip" id="handError"></p>
						<div class="filed">
							<p class="tip"><span style="color:#f00;">*</span> {{"The uploaded images should clearly show the face and text information." | T}}</p>
						</div>
						
					</div>
				</div>
			</div>
			<div class="submit">
				<input type="submit" value="{{'Submit' | T}}" class="btn btn-orange" id="btn-submit"/>
			</div>
		
	</form>
	
	
	<form id="authenticationForm" action="/identity/photo.html" enctype="multipart/form-data" method="post" ng-if="identity.type==2">
		<input type="hidden"  name="type" value="2" />
			<div class="filed f-cb">
				<div class="label f-fl"></div>
				<div class="f-fl">
					<div class="tip" style="margin-left:154px;">
						<p class="nopadding">{{"Please make sure you use your real identity to do this verification. We will protect your personal information.Verification are only the users of Hong Kong, Macao,Taiwan and other countries." | T}}</p>
						<p class="nopadding">
							1, {{'Passport' | T}}<br/>
							2, {{"Driver's license" | T}}<br/>
							3, {{'National ID Card' | T}}
						</p>
					</div>
				</div>
			</div>
			<p class="nomargin Validform_checktip"></p>
			<div class="filed f-cb">
				<div class="label f-fl">{{"First Name" | T}}</div>
				<div class="f-fl">
					<input type="text" name="firstNameOrigin" datatype="nameLen" nullmsg="{{'This field is required.' | T}}"/>
					<p class="nomargin Validform_checktip"></p>
				</div>
			</div>
			<div class="filed f-cb">
				<div class="label f-fl">{{"Last Name" | T}}</div>
				<div class="f-fl">
					<input type="text" name="lastNameOrigin" datatype="nameLen" nullmsg="{{'This field is required.' | T}}"/>
					<p class="nomargin Validform_checktip"></p>
				</div>
			</div>
			
			
			<div class="filed f-cb">
				<div class="label f-fl">{{"Gender" | T}}</div>
				<div class="f-fl">
					<input id="male" type="radio" name="sex" value="1" datatype="*" nullmsg="{{'This field is required.' | T}}"/><label class="sex" for="male">{{"Male" | T}}</label>
					<input id="female" type="radio" name="sex" value="2"/><label class="sex" for="female">{{"Female" | T}}</label>
					<p class="nomargin Validform_checktip"></p>
				</div>
			</div>
			<div class="filed f-cb">
				<div class="label sp f-fl" ng-class="{true:'zh',false:''}[cur_lang=='cn']">{{'Country And Territory' | T}}</div>
				<div class="f-fl">
					<div class="select-input" style="width:302px;" ng-init="showlist=false">
						<input id="countryName" type="text" placeholder="{{'Please enter the keyword and select' | T}}"  ng-model="countryName" datatype="*" nullmsg="{{'This field is required.' | T}}" ng-keydown="showLists($event)" ng-blur="validateCountry($event)"/>
						<input id="countryOrigin" type="text" name="countryOrigin" ng-model="country" style="display:none;"/>
						<span class="iconfont icon-downsj"></span>
						<ul class="select-input-list">
							<li ng-if="cur_lang!='cn'" ng-repeat="c in countrys | filter:{'en':countryName}" ng-click="selectCountry($event,c,'en')">{{c['en']}}</li>
							<li ng-if="cur_lang=='cn'" ng-repeat="c in countrys | filter:{'cn':countryName}" ng-click="selectCountry($event,c,'cn')">{{c[cur_lang]}}</li>
						</ul>
						<p class="nomargin Validform_checktip"></p>
					</div>
					
				</div>
			</div>
			
			<div class="filed f-cb">
				<div ng-if="cur_lang!='cn'" class="label f-fl">Passport/ID Number</div>
				<div ng-if="cur_lang=='cn'" class="label f-fl">护照ID</div>
				<div class="f-fl">
					<input type="text" name="idNumOrigin" placeholder="{{'Or Driver\'s License ID or National ID' | T}}" datatype="passport" nullmsg="{{'This field is required.' | T}}" errormsg="{{'Passport ID is wrong' | T}}"/>
					<p class="nomargin Validform_checktip"></p>
				</div>
			</div>
			<div class="filed filed-file f-cb">
				<div class="label f-fl">{{"Passport Cover" | T}}</div>
				<div class="f-fl">
					<div class="uploadBox f-prz">
						<span class="file-btn btn btn-orange">
							{{"Choose File" | T}}
							
						</span>
						<input type="file" name="frontOrigin" value="点击上传" id="frontBtn" onchange="preView('frontBtn','canvas1','ok1','img1','frontError')" datatype="*" nullmsg="{{'This field is required.' | T}}"/>
						<input type="hidden" id="frontVal"/>
						<span class="fileName"></span>
						<div class="tip">
							<p class="nopadding">{{"Or you can choose to upload the front of your Driver's License or National ID Document." | T}}</p>
							<p class="nopadding">{{'Please make sure that the photo is complete and clearly visible, in JPG format.' | T}}</p>
						</div>
						<div class="f-cb">
							<div class="preView f-fl">
								<canvas id="canvas1" style="display:none;"></canvas>
								<img src="" id="img1">
							</div>
							<div class="f-fl li">
								<span>{{'Example' | T}}<i class="iconfont icon-list"></i></span>
								<img src="/resources/img/passport-f.png"/>
							</div>
						</div>
						<p class="nomargin Validform_checktip" id="frontError"></p>
					</div>
				</div>
			</div>
			<div class="filed filed-file f-cb">
				<div class="label sp f-fl" ng-class="{true:'zh',false:''}[cur_lang=='cn']">{{"Passport Personal Page" | T}}</div>
				<div class="f-fl">
					<div class="uploadBox f-prz">
						<span class="file-btn btn btn-orange">
							{{"Choose File" | T}}
							
						</span>
						<input type="file" name="backOrigin" value="点击上传" id="backBtn" onchange="preView('backBtn','canvas2','ok2','img2','backError')" datatype="*" nullmsg="{{'This field is required.' | T}}"/>
						<input type="hidden" id="backVal"/>
						<span class="fileName"></span>
						<div class="tip">
							<p class="nopadding">{{"Or you can choose to upload the back of your Driver's License or National ID Document." | T}}</p>
							<p class="nopadding">{{"Please make sure the photo is complete and clearly visible, in JPG format.  Identity card must be in the valid period." | T}}</p>
						</div>
						<div class="f-cb">
							<div class="preView f-fl">
								<canvas id="canvas2" style="display:none;"></canvas>
								<img src="" id="img2">
							</div>
							<div class="f-fl li">
								<span>{{'Example' | T}}<i class="iconfont icon-list"></i></span>
								<img src="/resources/img/passport-b.png"/>
							</div>
						</div>
						<p class="nomargin Validform_checktip" id="backError"></p>
					</div>
				</div>
			</div>
			<div class="filed filed-file f-cb">
				<div class="label sp f-fl">{{"en-handPhoto" | T}}</div>
				<div class="f-fl">
					<div class="uploadBox f-prz">
						<span class="file-btn btn btn-orange">
							{{"Choose File" | T}}
							
						</span>
						<input type="file" name="handOrigin" value="点击上传" id="handBtn" onchange="preView('handBtn','canvas3','ok3','img3','handError')" datatype="*" nullmsg="{{'This field is required.' | T}}"/>
						<input type="hidden" id="handVal"/>
						<span class="fileName"></span>
						
						<div class="tip">
							<p class="nopadding">{{"Or you can choose to upload the front of your Driver's License or your National ID Document, together with a Note." | T}}</p>
							<p class="nopadding">{{"Please provide a photo of you holding your Identity card. In the same picture, make a reference to Binance and today's date displayed. Make sure your face is clearly visible and that all Identity card details are clearly readable." | T}}</p>
							<ul class="other-info">
								<li><i class="iconfont icon-gou"></i>{{"Face clearly visible" | T}}</li>
								<li><i class="iconfont icon-gou"></i>{{'en-Photoclearly' | T}}</li>
								<li><i class="iconfont icon-gou"></i>{{'en-note' | T}}</li>
								<li><i class="iconfont icon-gou"></i>{{"Note with today's date" | T}}</li>
							</ul>
						</div>
						<div class="f-cb">
							<div class="preView f-fl">
								<canvas id="canvas3" style="display:none;"></canvas>
								<img src="" id="img3">
							</div>
							<div class="f-fl li">
								<span>{{'Example' | T}}<i class="iconfont icon-list"></i></span>
								<img src="/resources/img/passport-h.png"/>
							</div>
						</div>
						
						<p class="nomargin Validform_checktip" id="handError"></p>
						
					</div>
				</div>
			</div>
			<div class="submit">
				<input type="submit" value="{{'Submit' | T}}" class="btn btn-orange" id="btn-submit"/>
			</div>
		
	</form>
	</div>
	</div>
</div>
<script src="/resources/js/idNumCheck.js" type="text/javascript" charset="utf-8"></script>
<script src="/resources/js/countrys.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="/resources/plus/Validform_v5.3.2/Validform_v5.3.2_min.js"></script>
<link rel="stylesheet" type="text/css" href="/resources/plus/Validform_v5.3.2/css/style.css" />
<script src="/resources/js/cutImage.js" type="text/javascript" charset="utf-8"></script>
<script src="/resources/js/identityPersonal.js?v=2.0.185" type="text/javascript" charset="utf-8"></script>
<script>
setTimeout(function(){
	$(".file-btn").click(function(){
		$(this).siblings('input[type=file]').trigger('click');
	})
},500)


var forntValue,backValue,handValue;
var rFilter = /^(image\/jpeg)$/i; //控制格式
function preView(fileId,canvasId,okbtn,imgId,errorId){
	var fileBtn=document.getElementById(fileId);
	var canvas = document.getElementById(canvasId);
	var img=document.getElementById(imgId)
	var context = canvas.getContext('2d');
	var selection
	var files=fileBtn.files[0];
	var fileName=files.name;
	$(fileBtn).parent().siblings('.fileName').text(fileName);
	
	if(!rFilter.test(files.type)){
		fileBtn.value="";
		var msg;
		if(localStorage.lang=='en'){
			msg='Only support jpg format';
		}else{
			msg="只能上传jpg格式的图片";
		}
		$("#"+errorId).text(msg);
		if(fileId=='frontBtn'){
    		forntValue=false;
    		
    	}else if(fileId=='backBtn'){
    		
    		backValue=false;
    	}else{
    		
    		handValue=false;
    	}
		 context.clearRect(0,0,1000,1000);
		 img.src="";
		 imgToggleClass(imgId);
		 return false;
	}else{
		$("#"+errorId).text("");
	}
	
	oFReader = new FileReader()
	oFReader.onload = function (oFREvent) {
    //document.getElementById("Choose FilePreview").src = oFREvent.target.result;
	img.src=oFREvent.target.result;
	imgToggleClass(imgId)
	var base64 = oFREvent.target.result;
	setValue(fileId, base64);
	if (files.size > 1048576 * 1.5) {
		var image = new Image();
		image.src = oFREvent.target.result;
		image.onload = function () {
			blWH=scaleDown(720,540,image.width,image.height);
			canvas.width = blWH.imgWidth;
			canvas.height = blWH.imgHeight;
			canvas.style.Width = blWH.imgWidth;
			canvas.style.Height = blWH.imgHeight;
			context.drawImage(image, 0, 0, image.width, image.height, 0, 0, canvas.width, canvas.height);
			var base64=canvas.toDataURL('image/jpeg',0.92).replace('image/jpeg','image/octet-stream');
			setValue(fileId, base64);
		}
	}
	
	
 };
   
    
    oFReader.readAsDataURL(files);
}

function setValue(fileId, base64) {
	if(fileId=='frontBtn'){
		$('#frontVal').val(base64);
		/* formData.append("front",blob, files.name); */
		forntValue=true;
	}else if(fileId=='backBtn'){
		/* formData.append("back",blob, files.name); */
		$('#backVal').val(base64);
		backValue=true;
	}else{
		/* formData.append("hand",blob, files.name); */
		$('#handVal').val(base64);
		handValue=true;
	}
}

	
function imgToggleClass(imgId){
	if(imgId=='img1'){
		if($("#"+imgId).attr('src')){
			$("#"+imgId).parent().removeClass('front');
		}else{
			$("#"+imgId).parent().addClass('front');
		}
		
	}else if(imgId=='img2'){
		if($("#"+imgId).attr('src')){
			$("#"+imgId).parent().removeClass('back');
		}else{
			$("#"+imgId).parent().addClass('back');
		}
	}
	
	 
}
</script>
			</div>
		</div>
		<!-- 底部 -->
		



    
	    <div class="section footer">
	    	<div class="footerTWrap">
		    	<div class="container">
			    	<div class="footerT">
				    	<div class="footerTL">
				    		<ul>
				    			<li><a href="/aboutUs.html">{{"About" | T}}</a></li>
				    			<li><a href="/agreement.html">{{"Terms" | T}}</a></li>
				    			<li><a href="/statement.html">{{"Privacy" | T}}</a></li>
				    			<li><a href="/fees.html" target="_blank">{{"Fees" | T}}</a></li>
				    			<li><a ng-href="/contactUsCn.html" >{{"Contact" | T}}</a></li>
				    			<li><a href="https://github.com/binance-exchange/binance-official-api-docs" Target="_blank" >{{"API" | T}}</a></li>
				    			<li><a href="/userCenter/coinApply.html">{{"Apply to List" | T}}</a></li>
				    			<!-- <li><a href="/Careers.html">{{"Careers" | T}}</a></li> -->
				    			<li><a href="/clientDownloads.html">{{'Download' | T}}</a></li>
				    	
				    		</ul>
				    	</div>
			    		<div class="footerTR f-cb">
				    		<ul class="f-fr f-cb">
				    			<li onClick="showTelegram()" title="Telegram"><a href="javascript:;" target="_blank"><i class="media media-telegram"></i></a></li>
				    <!--			<li title="support@binance.zendesk.com"><a href="mailTo:support@binance.zendesk.com"><i class="media media-email"></i></a></li>   -->
				    			<li><a href="https://www.facebook.com/binanceexchange" title="Facebook" target="_blank"><i class="media media-fb"></i></a></li>
				    			<li><a href="https://twitter.com/binance" title="Twitter" target="_blank"><i class="media media-tt"></i></a></li>
				    			<li><a href="https://www.reddit.com/r/binanceexchange" title="Reddit" target="_blank"><i class="media media-rd"></i></a></li>
				    <!-- 			<li><a href="https://joinslack.binance.com/" target="_blank"><i class="media media-sk"></i></a></li> -->
				    			<li ng-if="cur_lang=='cn'"><a href="http://weibo.com/binance?is_hot=1" title="Weibo" target="_blank"><i class="media media-wb"></i></a></li>
				    			<li><a href="https://steemit.com/@binanceexchange" title="Steemit" target="_blank"><i class="media media-steemit"></i></a></li>
				    			<li><a href="https://medium.com/binanceexchange" title="Medium" target="_blank"><i class="media media-medium"></i></a></li>
				    			<li><a href="https://www.instagram.com/binanceexchange/" title="Instagram" target="_blank"><i class="media media-instagram"></i></a></li>
				    		
				    		</ul>
				    	</div>
			    	</div>
			    </div>
			</div>
	    </div>
	    <div class="footerB">
	    	<div class="container">
		    	<span class="footerBL">
		    		© 2017-2018 Binance.com All Rights Reserved
		    	</span>
		    	<div class="footerBR" ng-if="curPage=='index' || curPage=='trade'">
		    		<div>
		    			<span class="footerBRName footerBRTimer"><i class="iconfont icon-clock"></i></span>
		    			<span>{{today|date:'yyyy-MM-dd HH:mm:ss'}}</span>
		    		</div>
		    		 <div>
		    			<span style="margin: 0" class="footerBRName">24h {{"Trade Volume" | T}}：</span>
		    			<span  class="volume" ng-repeat="volume in totalTradeMoney">{{volume[1]|number:2}} <i>{{volume[0]}}</i><i ng-hide="$last==true" class="gang">/</i></span> 		
		    		</div>
		    		
		    		<div>
		    			<span class="footerBRName"><i class="wify wify-connect" ng-class="{true:'wify-connect',false:'wify-reconnect'}[websocketStatus=='connected']"></i></span>
		    			<span class="websocketStatus">{{websocketStatus | T}}</span>
		    		</div>
		    	</div>
		   	</div>
		 </div>
		 
		 <div id="telegram" class="telegram">
		 	<div class="telegram-title">
		 		<img src="https://ex.bnbstatic.com/resources/img/telegram.png"/>
		 		<h4>{{"Binance Telegram" | T}}</h4>
		 	</div>
		 	<ul class="f-cb">
		 		<li>
		 			<span>中文</span>
		 			<div class="linkBox">
		 				<a href="https://t.me/BinanceChinese" target="_blank">https://t.me/BinanceChinese</a>
		 			</div>
		 		</li>
		 		<li>
		 			<span>Português</span>
		 			<div class="linkBox">
		 				<a href="https://t.me/BinancePortuguese" target="_blank">https://t.me/BinancePortuguese</a>
		 			</div>
		 		</li>
		 		
		 				<li>
		 			<span>English</span>
		 			<div class="linkBox">
		 				<a href="https://t.me/binanceexchange" target="_blank">https://t.me/binanceexchange</a>
		 			</div>
		 		</li>
		 		<li>
		 			<span>भारतीय</span>
		 			<div class="linkBox">
		 				<a href="https://t.me/BinanceIndian" target="_blank">https://t.me/BinanceIndian</a>
		 			</div>
		 		</li>
		 		
		 				<li>
		 			<span>Русский</span>
		 			<div class="linkBox">
		 				<a href="https://t.me/BinanceRussian" target="_blank">https://t.me/BinanceRussian</a>
		 			</div>
		 		</li>
		 		<li>
		 			<span>日本語</span>
		 			<div class="linkBox">
		 				<a href="https://t.me/BinanceJapanese" target="_blank">https://t.me/BinanceJapanese</a>
		 			</div>
		 		</li>
		 		
		 				<li>
		 			<span>Français</span>
		 			<div class="linkBox">
		 				<a href="https://t.me/BinanceFrench" target="_blank">https://t.me/BinanceFrench</a>
		 			</div>
		 		</li>
		 		<li>
		 			<span>Italiano</span>
		 			<div class="linkBox">
		 				<a href="https://t.me/BinanceItalian" target="_blank">https://t.me/BinanceItalian</a>
		 			</div>
		 		</li>
		 		
		 				<li>
		 			<span>Español</span>
		 			<div class="linkBox">
		 				<a href="https://t.me/BinanceSpanish" target="_blank">https://t.me/BinanceSpanish</a>
		 			</div>
		 		</li>
		 		<li>
		 			<span>한국어</span>
		 			<div class="linkBox">
		 				<a href="https://t.me/BinanceKorean" target="_blank">https://t.me/BinanceKorean</a>
		 			</div>
		 		</li>
		 			<li>
		 			<span>Deutsch</span>
		 			<div class="linkBox">
		 				<a href="https://t.me/BinanceGerman" target="_blank">https://t.me/BinanceGerman</a>
		 			</div>
		 		</li>
		 	</ul>
		 </div>
		 
		 <script>
		  function showTelegram(){
		 	layer.open({
		 	  type:1,
		 	  title:null,
		 	  area:['745px','450px'],
		 	  content:$('#telegram')
		 	})
		  }
		 </script>

		<script>
			function googleTranslateElementInit(lang) {
				new google.translate.TranslateElement({pageLanguage: lang, layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
			}
		  if(initLang!='cn'){
			var script=document.createElement('script');
			script.src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
			document.body.appendChild(script);
			script.onload=function(){
				googleTranslateElementInit(initLang);
			}
		  }
		</script>
</body>
</html>
