<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

if( ! function_exists('app_view') )
{
	function app_view()
	{
		$CI =& get_instance();

		$CI->load->view('template/head', $CI->data);
		$CI->load->view("template/main");
        $CI->load->view("template/scripts");
	}
}