<?php
namespace Elevator;

class Singleton {
	public static function getInstance() {
		static $instance = null;
		if ($instance === null) {
			$instance = new static();
		}
		return $instance;
	}
	private function __construct() {}
	private function __clone() {}
	private function __wakeup() {}
}