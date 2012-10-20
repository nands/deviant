<?php

namespace Deviant\Library\Module;

/**
 * Abstract class used for identifying Staff modules
 * 
 * @var $minRole
 * @var $maxRole
 * @method start(Request $request, Response $response)   
 */
class Staff extends Module implements Iface\Action {
	
	public $minRole, $maxRole;
	
	public function __construct() {
		echo \strval($this->minRole) . ' -> ' . \strval($this->maxRole) . '<br />';
	}
}
