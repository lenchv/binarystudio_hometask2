<?php
namespace Elevator;

class Application {
	public static function run() {
		try {
			Elevator::getInstance()->to(3)->sendTo(5)->from(2)->sendTo(9)->from(1)->to(6)->sendTo(1);
		} catch (\Exception $e) {
			echo $e->getMessage() . PHP_EOL;
		}
	} 
}