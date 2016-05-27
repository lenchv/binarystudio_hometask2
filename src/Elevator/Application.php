<?php
namespace Elevator;

class Application {
	public static function run() {
		try {
			Elevator::getInstance()->push(3)->sendTo(5);
			echo Elevator::getInstance()->getState() . PHP_EOL;
			Elevator::getInstance()->pop(1)->sendTo(8);
			echo Elevator::getInstance()->getState() . PHP_EOL;
			Elevator::getInstance()->pop(2)->push(4)->sendTo(2);
			echo Elevator::getInstance()->getState() . PHP_EOL;
		} catch (\Exception $e) {
			echo $e->getMessage() . PHP_EOL;
		}

		try {
			Elevator::getInstance()->push(-4)->sendTo(10);
			echo Elevator::getInstance()->getState() . PHP_EOL;
		} 
		catch (\LogicException $e) {
			echo $e->getMessage() . PHP_EOL;
		}
		catch (\OutOfBoundsException $e) {
			echo $e->getMessage() . PHP_EOL;
		}

		try {
			Elevator::getInstance()->push(3)->sendTo(5);
			echo Elevator::getInstance()->getState() . PHP_EOL;
		} catch (\Exception $e) {
			echo $e->getMessage() . PHP_EOL;
		}

		try {
			Elevator::getInstance()->sendTo(array(3));
			echo Elevator::getInstance()->getState() . PHP_EOL;
		} catch (\Exception $e) {
			echo $e->getMessage() . PHP_EOL;
		}
	} 
}