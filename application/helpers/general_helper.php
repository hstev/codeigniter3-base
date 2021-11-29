<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @param String $path path from view folder
 * @param Bool   $nav  show or not the nav section
 * @param Bool   $header show or not the header section
 * 
 * @return void  
 */
if( ! function_exists('show_view') )
{
	function show_view($path, $nav=true, $header=true, $footer=true)
	{
		$CI =& get_instance();
		$CI->load->view('template/head', @$CI->data);
		$nav ? $CI->load->view('template/nav') : NULL;
		$header ? $CI->load->view('template/header') : NULL;
		$path ? $CI->load->view($path) : NULL;
		$footer ? $CI->load->view('template/footer') : NULL;
		$CI->load->view("template/scripts");
	}
}
/**
 * Valida si el usuario está logueado
 */
if( ! function_exists('is_logged_in') )
{
	function is_logged_in() {
	    // Get current CodeIgniter instance
	    $CI =& get_instance();
	    // We need to use $CI->session instead of $this->session
	    $user = $CI->session->userdata('logged_in');
	    if (!isset($user)) { return false; } else { return true; }
	}
}
/**
 * Valida si es un administrador el usuario logueado
 */
if( ! function_exists('is_admin') )
{
	function is_admin() {
	    // Get current CodeIgniter instance
	    $CI =& get_instance();
	    // We need to use $CI->session instead of $this->session
	    $profile_id = $CI->session->userdata('profile_id');
	    if (is_logged_in() && (isset($profile_id) && $profile_id == PROFILE_ADMIN)) { return TRUE; } else { return FALSE; }
	}
}

if( ! function_exists('is_leader') )
{
	function is_leader() {
	    // Get current CodeIgniter instance
	    $CI =& get_instance();
	    // We need to use $CI->session instead of $this->session
	    $profile_id = $CI->session->userdata('profile_id');
	    if (is_logged_in() && (isset($profile_id) && $profile_id == PROFILE_LEADER)) { return TRUE; } else { return FALSE; }
	}
}
if( ! function_exists('is_analyst') )
{
	function is_analyst() {
	    // Get current CodeIgniter instance
	    $CI =& get_instance();
	    // We need to use $CI->session instead of $this->session
	    $profile_id = $CI->session->userdata('profile_id');
	    if (is_logged_in() && (isset($profile_id) && $profile_id == PROFILE_ANALYST)) { return TRUE; } else { return FALSE; }
	}
}
if( ! function_exists('is_commercial') )
{
	function is_commercial() {
	    // Get current CodeIgniter instance
	    $CI =& get_instance();
	    // We need to use $CI->session instead of $this->session
	    $profile_id = $CI->session->userdata('profile_id');
	    if (is_logged_in() && (isset($profile_id) && $profile_id == PROFILE_COMMERCIAL)) { return TRUE; } else { return FALSE; }
	}
}
/**
 * Permite ver las vistas predeterminadas desde el dashboard/DB
 * Se debe realizar una consulta a la base de datos 
 * para comprobar el estado de los privilegios
 */
if( ! function_exists('can_watch') )
{
	function can_watch() {
	    return FALSE;
	}
}

if( ! function_exists('states') )
{
	function states() {
		$CI =& get_instance();
		return $CI->db->select('*')->from('states')->get()->result_object();
	}
}

if( ! function_exists('profiles') )
{
	function profiles() {
		$CI =& get_instance();
		return $CI->db->select('*')
		->from('users_profiles')
		->where('state', 1)
		->get()
		->result_object();
	}
}

if( ! function_exists('current_user_id') )
{
	function current_user_id() {
		$CI =& get_instance();
		return $CI->session->userdata("id");
	}
}

if( ! function_exists('dd') )
{
	function dd($element) {
		die(var_dump($element));
	}
}