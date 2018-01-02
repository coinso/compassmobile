<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/1/2018
 * Time: 09:06
 */
if ( !defined( 'MAIN_CONTENT_AREA_CLASS' ) ){
	define( 'MAIN_CONTENT_AREA_CLASS', 'col-sm-12');
}
if ( !defined( 'GLOBALS_PARTS_FOLDER' ) ){
	define( 'GLOBALS_PARTS_FOLDER', 'template-parts/globals/content');
}
if( !defined('FORNT_PAGE_ID') ){

	define ('FORNT_PAGE_ID', get_option('page_on_front') );
}