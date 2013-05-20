<?php
namespace Chart;

/**
* View class
* @author Anthony
* @since 20/05/2013
*/
class View{
	/**
	* @var array
	*/
	private $scripts;

	/**
	* @var array
	*/
	private $styles;

	/**
	* View constructor
	*/
	public function __construct(){
		$this->scripts = array();
		$this->styles = array();
	}

 	/**
	* Méthode indexAction
	*/
	public function indexAction()
	{
		require_once(__DIR__ . "/index.html.php");
	}

	/**
	* Méthode addCss
	*/
	public function addCss($css)
	{
		$this->styles[] = $css;
	}

	/**
	* Méthode addJs
	*/
	public function addJs($js)
	{
		$this->scripts[] = $js;
	}
}
?>