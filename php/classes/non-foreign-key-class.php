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
	 * Mutator Method for actor ID
	 *
	 * @param mixed $newActorId: ID value for a new actor
	 * @throws InvalidArgumentException if $newActorId is not an integer
	 * @throws RangeException if $newActorID is not positive
	 *
	 **/
	public function setActorId($newActorId) {

		// base case: if the actorId is null, this is a new actor without a mySQL assigned ID
		if($newActorId === null) {
			$this->actorId = null;
			return;
		}

		// validate that $newActorId is an integer
		$newActorId = filter_var($newActorId, FILTER_VALIDATE_INT);
		if($newActorId === false) {
			throw(new InvalidArgumentException("Actor ID is not a valid integer"));
		}

		// validate that $newActorId is positive
		if($newActorId <= 0) {
			throw(new RangeException("Actor ID is not a positive number"))
		}

		// convert and store the actor ID
		$this->actorId = intval($newActorId);

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
	 * Mutator Method for actor name
	 *
	 * @param mixed $newActorName: ID value for a new actor
	 * @throws InvalidArgumentException if $newActorName is insecure or empty
	 * @throws RangeException if $newActorName is too large for the database
	 *
	 **/
	public function setActorName($newActorName) {

		// verify that that $newActorName is secure
		$newActorName = trim($newActorName);
		$newActorName = filter_var($newActorName, FILTER_SANITIZE_STRING);
		if(empty($newActorName) === true) {
			throw(new InvalidArgumentException("Actor Name is insecure or empty"));
		}

		// verify the new actor name will fit the database
		if(strlen($newActorName) > 40) {
			throw(new RangeException("Actor Name is too large"))
		}

		// store actor name
		$this->actorName = $newActorName;

	}

	/**
	 * Mutator Method for actor name
	 *
	 * @param mixed $newActorName: ID value for a new actor
	 * @throws InvalidArgumentException if $newActorName is insecure or empty
	 * @throws RangeException if $newActorName is too large for the database
	 *
	 **/
	public function setBirthday($newBirthday) {

		// base case if $newBirthday
		$newBirthday = trim($newBirthday);




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
	public function getHeight() {
		return($this->height);
	}

}  // close class actorProfile

?>