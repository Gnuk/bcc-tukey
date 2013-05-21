<?php
namespace Chart;

/**
* Js class
* @author Anthony
* @since 21/05/2013
*/
class Js extends Ressource{

	/**
	* Js constructor
	*/
	public function __construct($url, $ieVersion = null){
		parent::__construct($url);
		if(isset($ieVersion)){
			$this->setIeMaxVersion($ieVersion);
		}
	}
}
?>
