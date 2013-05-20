<?php
use \Gnkw\Prepare;
/*
* Copyright (c) 2012 GNKW
*
* This file is part of GNKW Creator.
*
* GNKW Creator is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* GNKW Creator is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with GNKW Creator.  If not, see <http://www.gnu.org/licenses/>.
*/
	define('LINK_ROOT', realpath(dirname(__FILE__)).'/');
	require_once(LINK_ROOT . 'app/Gnkw/Prepare.class.php');
	Prepare::initialize('src', LINK_ROOT);
	/**
	* Test des boîtes de Tukey
	*/
	$chartView = new \Chart\View();
	$chartView->addJs("js/protovis/protovis.min.js");
	$chartView->addJs("js/data_protovis.js");
	$chartView->addCss("css/protovis.css");
	$chartView->indexAction();
?>