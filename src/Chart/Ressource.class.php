<?php
namespace Chart;

/**
* Ressource class
* @author Anthony
* @since 21/05/2013
*/
class Ressource{

	/**
	* @var boolean
	*/
	private $ieOnly;

	/**
	* @var array
	*/
	private $ieMaxVersion;

	/**
	* @var string
	*/
	private $url;

	/**
	* Ressource constructor
	*/
	public function __construct($url){
		$this->url = $url;
		$this->ieOnly = false;
	}

 	/**
	* Méthode setMaxVersion
	*/
	public function setIeMaxVersion($ieVersion)
	{
		$this->ieMaxVersion = $ieVersion;
		$this->ieOnly = true;
	}

 	/**
	* Méthode getIeMaxVersion
	*/
	public function getIeMaxVersion()
	{
		return $this->ieMaxVersion;
	}

 	/**
	* Méthode isIe
	*/
	public function isIe()
	{
		return $this->ieOnly;
	}

	/**
	* Récupère le rendu
	*/
	public function render()
	{
		return $this->url;
	}
}
?>
