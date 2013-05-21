<?php
namespace Chart;

/**
* Css class
* @author Anthony
* @since 21/05/2013
*/
class Css extends Ressource{

	/**
	* Css constructor
	*/
	public function __construct($url, $ieVersion = null){
		parent::__construct($url);
		if(isset($ieVersions)){
			$this->setIeMaxVersion($ieVersion);
		}
	}
}
?>
