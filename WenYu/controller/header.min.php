<?php	

/*
 * 作者：闻语
 * 地址：https://www.zpblogs.cn
 * 时间：2020年7月7
 * 注：本WenYu插件版权归 闻语博客 所有，禁止用于商用，如有违者，后果自负
 */
 
class EffectHead{

	// 鼠标特效（指针）
	static function pointerStyle(){

		// 插件所在位置的路径信息
		//$PluginPath = Helper::options()->pluginUrl.'/WenYu/';
		$PluginPath='https://zpblogs.gitee.io/typecho_wenyu/';
	
		// 获取配置信息
		$type = Typecho_Widget::widget('Widget_Options')->plugin('WenYu')->pointerStyle;
	
		if ($type == 0) {

		}else if($type==1){// 指针1
			echo '
			<style>
				body { cursor: url(' . $PluginPath . 'assets/img/normal.cur), default;  }
				a,button,img { cursor: url(' . $PluginPath . 'assets/img/link.cur), pointer !important; }
			</style>
			';
		}else if($type==2){// 指针2
			echo '
			<style>
				body { cursor: url(' . $PluginPath . 'assets/img/a1.cur), default; }
				a,button,img { cursor: url(' . $PluginPath . 'assets/img/a2.cur), pointer !important; }
			</style>
			';
		}else if($type==3){// 指针3
			echo '
			<style>
				body { cursor: url(' . $PluginPath . 'assets/img/b1.cur), default; }
				a,button,img { cursor: url(' . $PluginPath . 'assets/img/b2.cur), pointer !important; }
			</style>
			';
		}else if($type==4){// 指针4
			echo '
			<style>
				body { cursor: url(' . $PluginPath . 'assets/img/c1.cur), default; }
				a,button,img { cursor: url(' . $PluginPath . 'assets/img/c2.cur), pointer !important; }
			</style>
			';
		}else if($type==5){// 指针5
			echo '
			<style>
				body { cursor: url(' . $PluginPath . 'assets/img/d1.cur), default; }
				a,button,img { cursor: url(' . $PluginPath . 'assets/img/d2.cur), pointer !important; }
			</style>
			';
		}
	
	}
	
	// 背景特效
	static function PrettifyStyle(){
	
		// 插件所在位置的路径信息
		//$PluginPath = Helper::options()->pluginUrl.'/WenYu/';
		$PluginPath='https://zpblogs.gitee.io/typecho_wenyu/';
	
		// 获取配置信息
		$type = Typecho_Widget::widget('Widget_Options')->plugin('WenYu')->PrettifyStyle;
	
		if(!empty($type)){
			
			
		
		}
	
	}

	// 其它功能
	static function Smallfunction(){
	
		// 插件所在位置的路径信息
		//$PluginPath = Helper::options()->pluginUrl.'/WenYu/';
		$PluginPath='https://zpblogs.gitee.io/typecho_wenyu/';
	
		// 获取配置信息
		$type = Typecho_Widget::widget('Widget_Options')->plugin('WenYu')->Smallfunction;
	
		if(!empty($type)){
			
			// 看板娘
			if(in_array("Kanbanniang",$type)){
				echo '
					<link rel="stylesheet" href="' . $PluginPath . 'assets/js/kanbanniang/waifu.css"></script>
					<script type="text/javascript" src="' . $PluginPath . 'assets/js/kanbanniang/jquery.js"></script>
					<script type="text/javascript" src="' . $PluginPath . 'assets/js/kanbanniang/live2d.min.js"></script>
					<script type="text/javascript" src="' . $PluginPath . 'assets/js/kanbanniang/waifu-tips.js"></script>
					<div class="waifu" id="waifu"><div class="waifu-tips" style="opacity: 1;"></div><canvas id="live2d" width="280" height="250" class="live2d"></canvas></div><script type="text/javascript">initModel()</script>
				';
			}
			
			// 文字禁止选中
			if(in_array("wzjzxz",$type)){
				echo '
				<style>
					 body{user-select: none; }
				</style>
				';
			}
			// 图片禁止拖动
			if(in_array("tpjztd",$type)){
				echo '
				<style>
					body img { -webkit-user-drag: none; }
				</style>
				';
			}
			// 图片呼吸灯
			if(in_array("tphxd",$type)){
				echo '
				<style>
				img { -webkit-animation: ani 2s linear infinite; }
				@keyframes ani {
					0% { box-shadow: 0 0 0px #00BCD4; }
					25% { box-shadow: 0 0 10px #00BCD4; }
					50% { box-shadow: 0 0 20px #00BCD4; }
					75% { box-shadow: 0 0 10px #00BCD4; }
					100% { box-shadow: 0 0 0px #00BCD4; }
				}
				</style>
				';
			}
			// 禁用debug
			if(in_array("jzts",$type)){
				echo '
				<script>
					//你瞅啥？
					debugger;
				</script>
				';
			}

		}
	
	}

// handsome功能
static function handsome(){
	
	// 插件所在位置的路径信息
		//$PluginPath = Helper::options()->pluginUrl.'/WenYu/';
		$PluginPath='https://zpblogs.gitee.io/typecho_wenyu/';
	// 获取配置信息
	$type = Typecho_Widget::widget('Widget_Options')->plugin('WenYu')->handsome;

	if(!empty($type)){
		
		// 头像转动
		if(in_array("txzd",$type)){
			echo '
			<style>
				.img-full,.img-40px { transition: all 2.0s; }.img-full:hover,.img-40px:hover { transform: rotate(360deg); }
			</style>
			';
		}
		// 头像疯狂转动
		if(in_array("txfkzd",$type)){
			echo '
			<style>
				.img-full:hover,.img-40px:hover { 
					transform: rotate(666turn);
					transition-duration: 59s;
					transition-timing-function: cubic-bezier(.34, 0, .84, 1)
				}
			</style>
			';
		}
		// 头像呼吸灯
		if(in_array("txhxd",$type)){
			echo '
			<style>
			.img-full,.img-40px{
				-webkit-animation: ani 2s linear infinite;
			}
			@keyframes ani {
                0% { box-shadow: 0 0 0px #00BCD4; }
                25% { box-shadow: 0 0 10px #00BCD4; }
                50% { box-shadow: 0 0 20px #00BCD4; }
                75% { box-shadow: 0 0 10px #00BCD4; }
                100% { box-shadow: 0 0 0px #00BCD4; }
            }
			</style>
			';
		}
		// 列表浮动
		if(in_array("lbfd",$type)){
			echo '
			<!--友链：,.list-group-sp .list-group-item:not(article):hover-->
			<style>
				.blog-post .panel:not(article):hover,.blog-post .panel-small:not(article):hover,.blog-post .panel-picture:not(article):hover { 
					box-shadow: 0 0 50px #ccc; 
					transition: all 0.5s; 
					transition: all 0.5s; 
					transform: translate(0,-5px); 
				}
			</style>
			';
		}
		// 天气
		if(in_array("tq",$type)){
			echo '
			<!--心知天气插件-->
			<style>
				#tp-weather-widget { position: fixed; margin: 0.8% 0 0 23.8%; z-index: 9999; }
				@media all and (max-width: 640px) {
					#tp-weather-widget { margin: 3.5% 0 0 13.8%; }
				}
			</style>
			<div id="tp-weather-widget"></div>
			<script>
				(function (a, h, g, f, e, d, c, b) { b = function () { d = h.createElement(g); c = h.getElementsByTagName(g)[0]; d.src = e; d.charset = "utf-8"; d.async = 1; c.parentNode.insertBefore(d, c) }; a["SeniverseWeatherWidgetObject"] = f; a[f] || (a[f] = function () { (a[f].q = a[f].q || []).push(arguments) }); a[f].l = +new Date(); if (a.attachEvent) { a.attachEvent("onload", b) } else { a.addEventListener("load", b, false) } }(window, document, "script", "SeniverseWeatherWidget", "//cdn.sencdn.com/widget2/static/js/bundle.js?t=" + parseInt((new Date().getTime() / 100000000).toString(), 10)));
				window.SeniverseWeatherWidget("show", {
					flavor: "slim",
					location: "WTW3SJ5ZBJUY",
					geolocation: true,
					language: "auto",
					unit: "c",
					theme: "auto",
					token: "f3ca38ea-d36e-4d8c-b680-d1bb7462ca64",
					hover: "disabled",
					container: "tp-weather-widget"
				})
			</script>
			';
		}
		// 打赏跳动
		if(in_array("dstd",$type)){
			echo '
				<style>
					/*文章内打赏图标跳动*/
					.btn-pay {
					    animation: star 0.5s ease-in-out infinite alternate;
					}
					
					@keyframes star {
					    from {
					        transform: scale(1);
					    }
					
					    to {
					        transform: scale(1.1);
					    }
					}
				</style>
			';
		}
		
		
		
		
	}

}


static function htStyle(){
	
		//$PluginPath = Helper::options()->pluginUrl.'/WenYu/';
		$PluginPath='https://zpblogs.gitee.io/typecho_wenyu/';
	// 获取配置信息
	$type = Typecho_Widget::widget('Widget_Options')->plugin('WenYu')->htStyle;

	echo '
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/style.css">
		<style>
		.typecho-list-table td{
			padding: 6px;
    		font-size: 15px;
		}
		</style>
	';
	
	if(!empty($type)){

		// 渐变背景
		if(in_array("jbbj",$type)){
			echo '
			<style>
				/*纯色渐变*/
				body{background: linear-gradient(90deg,rgba(255,165,150,0.3) 10%,rgba(0,228,255,0.35)) no-repeat;}
				input[type=text], input[type=password], input[type=email], textarea{background-color: #9e9e9e00;}
				.main{background: linear-gradient(90deg,rgb(253, 228, 224) 10%,rgb(177, 244, 251)) no-repeat;}
				.typecho-foot{background: linear-gradient(90deg,rgb(253, 228, 224) 10%,rgb(177, 244, 251)) no-repeat;}
				.typecho-table-wrap{    background: #9e9e9e00;}
				.typecho-list-table td{border-top: 1px solid #ffffff;}
				.category-option ul{background-color: #9e9e9e00;}
				ul.token-input-list{background-color: #9e9e9e00;}
				#custom-field{background: linear-gradient(90deg,rgb(245, 229, 227) 10%,rgb(206, 238, 241)) no-repeat;}
				.typecho-list-table tbody tr:hover td {background-color: #f6f6f300;}
				#upload-panel{    background: linear-gradient(90deg,rgb(206, 238, 241) 10%,rgb(193, 240, 245)) no-repeat;}

				/*带背景图纯色渐变*/
				/*body{background: url(https://zpblogs.gitee.io/typecho_wenyu/assets/img/渐变背景底部.png) no-repeat center bottom 0/contain fixed,linear-gradient(90deg,rgba(255,165,150,0.3) 10%,rgba(0,228,255,0.35)) no-repeat;}*/
			</style>
			';
		}

		// 登录美化
		if(in_array("dlmh",$type)){
			echo '
			<style>
				.typecho-login { position: absolute; top: 50%; left: 50%; width: 400px; padding: 40px; transform: translate(-50%, -50%);background: rgb(255, 255, 255); box-sizing: border-box; box-shadow: 0 15px 25px rgba(0,0,0,.6); border-radius: 10px;user-select: none; }
				.i-logo{background: url(' . $PluginPath . 'assets/img/hydl.png) 10% 20% no-repeat;opacity: 1;user-select: none;pointer-events: none;}
				.i-logo:hover{opacity: 1;}
				.submit .primary{background: #448bff linear-gradient(45deg,#448bff,#44e9ff);}
				.typecho-login .more-link{margin-top:0}
			</style>
			';
		}

	}

}
	
	// END
}





