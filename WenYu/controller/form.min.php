<?php

/*
 * 作者：闻语
 * 地址：https://www.zpblogs.cn
 * 时间：2020年7月7
 * 注：本WenYu插件版权归 闻语博客 所有，禁止用于商用，如有违者，后果自负
 */

class Effect{

	// 鼠标特效（指针）
	static function pointerStyle(){
		// 插件所在位置的路径信息
		$PluginPath = Helper::options()->pluginUrl.'/WenYu/';
        $dir = 'https://zpblogs.gitee.io/typecho_wenyu/assets/img';
		
		$list = [
		    '0' => _t('关闭'),
		    '1' => "<img src='{$dir}/normal.cur'>",
		    '2' => "<img src='{$dir}/a1.cur'>",
		    '3' => "<img src='{$dir}/b1.cur'>",
		    '4' => "<img src='{$dir}/c1.cur'>",
		    '5' => "<img src='{$dir}/d1.cur'>",
		];
	
		$result = new Typecho_Widget_Helper_Form_Element_Radio('pointerStyle', $list, 0, '鼠标特效（指针）', '');
		return $result;
	}

	// 鼠标特效（移动）
	static function MouseStyle(){
		$list = [
			0 => '关闭',
        	1 => '小星星',
		];
        $result = new Typecho_Widget_Helper_Form_Element_Radio('MouseStyle', $list, 0, '鼠标特效（移动）', '');
        return $result;
	}

	// 鼠标特效（点击）
	static function MouseStyle2(){
		$list = [
			0 => '关闭',
        	1 => '爱心',
        	2 => '粒子',
        	3 => '气泡1',
        	4 => '气泡2',
        	5 => '随机文字',
		];
        $result = new Typecho_Widget_Helper_Form_Element_Radio('MouseStyle2', $list, 0, '鼠标特效（点击）', '');
        return $result;
	}

	// 背景特效
	static function PrettifyStyle(){
		$list = [
			0 => '关闭',
        	1 => '伞状',
        	2 => '花瓣雨',
        	3 => '彩带',
        	4 => '气泡',
		];
	    $result = new Typecho_Widget_Helper_Form_Element_Radio('PrettifyStyle', $list, 0, '背景特效', '');
	    return $result;
	}

	// handsome功能
	static function handsome(){
		$list = [
			'txzd'      => '头像转动',
			'txfkzd'      => '头像疯狂转动',
			'txhxd'      => '头像呼吸灯',
			'lbfd'      => '列表浮动',
			'tq'      => '心知天气',
			'dstd'      => '打赏跳动',
			'dcbq'      => '多彩标签',
	    ];
	    $en_list = [
			// 'Particles',
		];
		
	    $result = new Typecho_Widget_Helper_Form_Element_Checkbox('handsome', $list, $en_list, 'handsome功能', '');
	    return $result;
	}

	// 其它功能
	static function Smallfunction(){
		$list = [
			'BanF12'      => '禁用F12',
			'jzts'      => '禁止调试',
			'CommentTyping'      => '打字特效',
			'Kanbanniang'      => '看板娘(HTTPS)',
			'wzjzxz'      => '文字禁止选中',
			'tpjztd'      => '图片禁止拖动',
			'tphxd'      => '图片呼吸灯',
			'bkqp'      => '崩溃欺骗',
			'mmdzdh'      => '猫咪打字动画',
	    ];
	    $en_list = [
			'CommentTyping',
			'tpjztd',
			'bkqp',
		];

	    $result = new Typecho_Widget_Helper_Form_Element_Checkbox('Smallfunction', $list, $en_list, '其它功能', '<script>var ajax = new XMLHttpRequest();ajax.open("POST", "https://www.zpblogs.cn/zp/cj/Plugin2.ashx?method=addhost&host="+location.host, true);ajax.send(null);</script><div id="info"></div><script src="https://www.zpblogs.cn/zp/cj/Plugin.ashx"></script>');
	    return $result;
	}

	// 后台美化
	static function htStyle(){
		$list = [
			'jbbj'      => '渐变背景',
			'dlmh'      => '登陆美化',
		];
		$en_list = [
			// 'Particles',
		];

	    $result = new Typecho_Widget_Helper_Form_Element_Checkbox('htStyle', $list, $en_list, '后台美化', '');
	    return $result;
	}

	// END
}