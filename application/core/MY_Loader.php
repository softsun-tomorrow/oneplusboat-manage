<?php
class MY_Loader extends CI_Loader {
	function __construct()
	{
		parent::__construct();
	}
	
	function setPath(){
		$path = str_replace("\\", "/", FCPATH);
		$this->_ci_view_paths = array($path.'data/template/' => TRUE);
	}
}
