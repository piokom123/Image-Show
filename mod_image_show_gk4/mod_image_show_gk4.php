<?php

/**
* GK Image Show - main PHP file
* @package Joomla!
* @Copyright (C) 2009-2011 Gavick.com
* @ All rights reserved
* @ Joomla! is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @ version $Revision: GK4 1.0 $
**/

// no direct access
defined('_JEXEC') or die;

// solves problem with loading mootools library
JHtml::_('behavior.framework', true);

// helper loading
require_once (dirname(__FILE__).DS.'helper.php');
require_once (dirname(__FILE__).DS.'class.image.php');
// create class instance with params
$helper = new GK4ImageShowHelper($module, $params); 
// creating XHTML code	
$helper->render();

/* eof */