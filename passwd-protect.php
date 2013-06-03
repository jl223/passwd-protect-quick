<?php

$config['password'] = "";
$config['salt'] = "";

class Password_Protect {
	protected $_config;

	public $login_page;
	public $error = false;

	public function __construct($config) {
		session_start();
		$this->_config = $config;

		$this->login_page = file_get_contents('login.php');
		if (isset($_GET['logout'])) {
			$this->logout();
		}
	}

	public function is_logged_in() {
		return (isset($_SESSION['passwd-protect-quick-is-logged-in']) && $_SESSION['passwd-protect-quick-is-logged-in']);
	}

	public function render_login_form() {
		print $this->login_page;
	}

	public function hash_me($str) {
		return md5($str.$this->_config['salt']);
	}

	public function login($password) {
		if ($this->hash_me($password) == $this->hash_me($this->_config['password'])) {
			$_SESSION['passwd-protect-quick-is-logged-in'] = true;
			return true;
		} else {
			$_GET['login_error'] = "Password incorrect.";
			return false;
		}
	}

	public function logout() {
		$_SESSION['passwd-protect-quick-is-logged-in'] = false;
		unset($_GET['logout']);
		return;
	}
}