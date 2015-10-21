<?php

class actorProfile {

	/**
	 * ID for this actor; primary key
	 * @var int $actorId
	 **/
	private $actorId;

	/**
	 * The name of this actor, indexed in mySQL
	 * @var string $actorName
	 **/
	private $actorName;

	/**
	 * This actors birthday, in a PHP DateTime object
	 * @var DateTime $birthday
	 **/
	private $birthday;

	/**
	 * This actors birth name
	 * @var string $birthName
	 **/
	private $birthName;

	/**
	 * This actors height
	 * @var string $height
	 **/
	private $height;



	/**
 	* Accessor Method for actor ID
 	*
 	* @return int value of actor ID
 	**/
	public function getActorId() {
		return($this->actorId);
}

	/**
 	* Accessor Method for this actors name
 	*
 	* @return string value of actors name
 	*/
	public function getActorName() {
		return ($this->actorName);
}
	/**
	 * Accessor Method for this actors birthday
	 *
	 * @return DateTime object with actors birthday
	 *
	 */
	public function getBirthday() {
		return($this->birthday);
	}

	/**
	 *Accessor Method for this actors birth name
	 *
	 * @return string value of actors birth name
	 **/
	public function getBirthName() {
		return($this->birthName);
	}

	/**
	 *Accessor Method for this actors height
	 *
	 * @return string value of actors height
	 **/
public function() {
	return($this->height);
}


} // close class actorProfile








?>