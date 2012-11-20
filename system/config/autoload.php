<?php

/**
 * CalibreFx
 *
 * WordPress Themes Framework by CalibreWorks Team
 *
 * @package		CalibreFx
 * @author		CalibreWorks Team
 * @copyright           Copyright (c) 2012, CalibreWorks. (http://www.calibreworks.com/)
 * @license		Commercial
 * @link		http://calibrefx.com
 * @since		Version 1.0
 * @filesource 
 *
 * WARNING: This file is part of the core CalibreFx framework. DO NOT edit
 * this file under any circumstances. 
 *
 * This define the framework constants
 *
 * @package CalibreFx
 */

/*
 * Auto-load Libraries
 */

$autoload['libraries'] = array('cache','breadcrumb','security','replacer');

/*
 * Auto-load Helper File
 */

$autoload['helpers'] = array('debug','format', 'image', 'html', 'url', 'widget', 
                             'option', 'layout', 'meta_box','nav','post','seo', 
                             'user','script','admin_menu');

/*
 *  Auto-load Config files
 */
$autoload['configs'] = array();

/*
 *  Auto-load Config files
 */
$autoload['widgets'] = array('Facebook_Comment', 'Facebook_Like', 'Feature_Page_Slider', 
                            'Feature_Page', 'Feature_Post_Slider', 'Feature_Post',
                            'Latest_Tweets', 'Subscriber', 'Twitter');

/*
 *  Auto-load Config files
 */
$autoload['models'] = array('theme_settings_m', 'seo_settings_m');

/*
 *  Auto-load Config files
 */
$autoload['hooks'] = array('header', 'logo', 'script', 'widget','layout', 'menu', 
                          'login','user','admin_bar','post','inpost','comments', 'footer',
                          'sidebar','seo','performance','search','third_party','upgrade');

/*
 *  Auto-load Shortcode files
 */
$autoload['shortcodes'] = array('calibrefx','header','post','footer');