<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
	public function signin()
	{
		show_view('auth/signin', false, false, false);
	}
	public function signup()
	{
		show_view('auth/signup', false, false, false);
	}
	public function signout()
	{
		show_view('auth/signout', false, false, false);
	}
	public function forgot_password()
	{
		show_view('auth/forgot_password', false, false, false);
	}
	public function reset_password()
	{
		show_view('auth/reset_password', false, false, false);
	}
	public function lock()
	{
		show_view('auth/lock', false, false, false);
	}
}
