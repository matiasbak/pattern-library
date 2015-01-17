<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pattern extends CI_Controller {
	private $contents = array(
		'buttons',
		'feedback',
		'forms',
		'grid',
		'icons',
		'typography',
		'accordions',
		'carousels',
		'navigation',
		'tabs',
		'animations',
		'modals',
		'dialogs',
		'tables',
	);
	
	public function __construct()
	{
		parent::__construct();

	}
	function _remap($parameter){
		$this->index($parameter);
	}

	public function index($param)
	{
		if(in_array(strtolower($param), $this->contents)){
			var_dump($param);
		} else {
			var_dump('not');
		}
	}

}

/* End of file pattern.php */
/* Location: ./application/controllers/pattern.php */