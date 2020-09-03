<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * <strong style="color:#03A9F4;">网页特效整理</strong>
 * 
 * @package <strong style="color:#03A9F4;">WenYu</strong>
 * @author <strong style="color:#03A9F4;">闻语</strong>
 * @version <strong style="color:#03A9F4;">2.0.0</strong>
 * @link https://www.zpblogs.cn
 */

// 插件设置模块
include 'controller/form.min.php';
// 前端header
include 'controller/header.min.php';
// 前端footer
include 'controller/footer.min.php';

class WenYu_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Typecho_Plugin::factory('Widget_Archive')->header = array(__CLASS__, 'header');
        Typecho_Plugin::factory('Widget_Archive')->footer = array(__CLASS__, 'footer');
		
		// 激活后台menu页面接口
        // Typecho_Plugin::factory('admin/menu.php')->navBar = array('WenYu_Plugin', 'render');

        // 激活后台header接口
        Typecho_Plugin::factory('admin/header.php')->header = array('WenYu_Plugin', 'A_Header');
        // 激活后台footer接口
        Typecho_Plugin::factory('admin/footer.php')->end = array('WenYu_Plugin', 'A_Footer');

    }
    
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate()
    {
    }
    
    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form)
    {
        /** 分类名称 */
        $name = new Typecho_Widget_Helper_Form_Element_Text('word', NULL, '欢迎大佬来我博客留言！！！', _t('前言'));
        $form->addInput($name);

        //鼠标特效（指针）
        $form->addInput(Effect::pointerStyle());
        //鼠标特效（移动）
        $form->addInput(Effect::MouseStyle());
        // 背景特效（点击）
        $form->addInput(Effect::MouseStyle2());
        //背景特效
        $form->addInput(Effect::PrettifyStyle());
        //handsome功能
        $form->addInput(Effect::handsome());
        //后台美化
        $form->addInput(Effect::htStyle());
        //其它功能
        $form->addInput(Effect::Smallfunction());
        

    }
    
    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
    
    /**
     * 插件实现方法
     * 
     * @access public
     * @return void
     */
    public static function render()
    {
        // echo '<span class="message success">'
        //     . htmlspecialchars(Typecho_Widget::widget('Widget_Options')->plugin('WenYu')->word)
        //     . '</span>';
    }

    /**
     *为header添加css文件
     * @return void
     */
    public static function header(){
        // 鼠标特效（指针）
        EffectHead::pointerStyle();
        // 主题美化
        EffectHead::PrettifyStyle();
        // 其它功能
        EffectHead::Smallfunction();
        // handsome功能
        EffectHead::handsome();
    }

    /**
     *为footer添加js文件
     * @return void
     */
    public static function footer(){
        // 默认加载事件
        EffectFooter::PageLoading();
        // 鼠标特效（移动）
        EffectFooter::MouseStyle();
		// 鼠标特效（点击）
        EffectFooter::MouseStyle2();
		// 背景特效
        EffectFooter::PrettifyStyle();
        // 其它功能
        EffectFooter::Smallfunction();
        // handsome功能
        EffectFooter::handsome();
        
    }

    /**
     *为后台header添加css文件
     * @return void
     */
    public static function A_Header(){
        EffectHead::htStyle();
    }
    
    /**
     *为后台footer添加js文件
     * @return void
     */
     public static function A_Footer(){
        EffectFooter::htStyle();
     }

}
