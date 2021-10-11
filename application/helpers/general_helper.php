<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @param String $path path from view folder
 * @param Bool   $nav  show or not the nav section
 * @param Bool   $heade show or not the header section
 * 
 * @return void  
 */
if( ! function_exists('show_view') )
{
	function show_view($path, $nav=true, $header=true)
	{
		$CI =& get_instance();
		$CI->load->view('template/head', @$CI->data);
		$nav ? $CI->load->view('template/nav') : NULL;
		$header ? $CI->load->view('template/header') : NULL;
		$path ? $CI->load->view($path) : NULL;
		$CI->load->view("template/footer");
		$CI->load->view("template/scripts");
	}
}