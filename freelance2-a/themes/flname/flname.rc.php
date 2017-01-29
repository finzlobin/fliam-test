<?php
/**
 * JavaScript and CSS loader for news theme
 * @Site https://templatespro.ru/
 * @package Cotonti
 * @version 0.9.18 FL 2.6.8
 * @author Vladimir Wiper
 * @copyright Copyright (c) Cotonti Team 2016
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

if(function_exists("uk_com")){
    uk_com("uikit");
    //uk_com("");
}

//cot_rc_add_file($cfg['themes_dir'].'/'.$usr['theme'].'/css/style.css');
//cot_rc_link_footer($cfg['themes_dir'].'/'.$usr['theme'].'/js/.js');