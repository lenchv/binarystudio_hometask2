<?php
namespace Elevator;

class Elevator extends Singleton {
	private $iPeople = 0;
	private $iFloor = 0;
	/**
	 *	@return String - state of elevator
	 */
	public function getState() {
		return "Floor: ".$this->iFloor." People: ".$this->iPeople;
	}
	/**
	 *	Send elevator to floor $iFloor 
	 *	@var Integer $iFloor - floor number
	 *	@return Elevator $this
	 */
	public function sendTo($iFloor) {
		if ($iFloor < 1) {
			throw new \OutOfBoundsException("Minimal floor is 1");
		}
		if ($iFloor > 9) {
			throw new \OutOfBoundsException("Maximal floor is 9");
		}
		if ($this->iPeople > 4) {
			throw new \LogicException("In the elevator of people for more than four");
		}
		if ($this->iPeople == 0) {
			throw new \LogicException("Elevator is empty");
		}
		$this->iFloor = $iFloor;
		return $this;
	}
	/**
	 *	Push people to elevator
	 *	@var Integer $iPeople - count people
	 *	@return Elevator $this
	 */
	public function push($iPeople) {
		if ($iPeople < 0) {
			throw new \InvalidArgumentException("Count people can't be negative number");
		}
		$this->iPeople += $iPeople;
		return $this;
	}
	/**
	 *	Pop people from elevator
	 *	@var Integer $iPeople - count people
	 *	@return Elevator - $this
	 */
	public function pop($iPeople) {
		if ($iPeople < 0) {
			throw new \InvalidArgumentException("Count people can't be negative number");
		}
		if ($iPeople > $this->iPeople) {
			throw new \InvalidArgumentException("People in elevator less than in argument");
		}
		$this->iPeople -= $iPeople;
		return $this;
	}
}