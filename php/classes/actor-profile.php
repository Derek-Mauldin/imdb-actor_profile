<?php

require_once(dirname(__DIR__) . "/lib/date-utils.php");



/**
 * Actor Profile Class
 *
 * This class contains the personal information of an actor
 *
 * @author Derek Mauldin <dmauldin2@cnm.edu>
 **/
class ActorProfile {

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
	 * constructor for this new actore
	 *
	 * @param mixed $newActorId new ID for this actor
	 * @param string $newActorName name for this actor
	 * @param string $newBirthday birthday for this actor
	 * @param string $newBirthName date birth name for this actor
	 * @param string $newHeight height of this actor
	 * @throws InvalidArgumentException if data types are not valid
	 * @throws RangeException if data values are out of bounds (e.g., strings too long, negative integers)
	 * @throws Exception if some other exception is thrown
	 **/
	public function __construct($newActorId, $newActorName, $newBirthday, $newBirthName, $newHeight) {

		try {
				$this->setActorId($newActorId);
				$this->setActorName($newActorName);
				$this->setBirthday($newBirthday);
				$this->setBirthName($newBirthName);
				$this->setHeight($newHeight);
		}	catch(InvalidArgumentException $invalidArgument) {
					throw(new InvalidArgumentException($invalidArgument->getmessage(), 0, $invalidArgument));
		}	catch(RangeException $range) {
					throw(new RangeException($range->getMessage(), 0, $range));
		}	catch(Exception $exception) {
					throw(new Exception($exception->getMessage(), 0, $exception));
		}

	}

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
			throw(new RangeException("Actor ID is not a positive number"));
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
	 * @param string $newActorName: name for for a new actor
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
			throw(new RangeException("Actor Name is too large.  Maximum 40 characters"));
		}

		// store actor name
		$this->actorName = $newActorName;

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
	 * Mutator Method for birthday
	 *
	 * @param mixed $newBirthday: birthday for a new actor
	 * @throws InvalidArgumentException if the date is in an invalid format
	 * @throws RangeException if the date is not a Gregorian date
	 *
	 **/
	public function setBirthday($newBirthday) {

		try {
			$newBirthday = validateDate($newBirthday);
		} 	catch(InvalidArgumentException $invalidArgument) {
			throw(new InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
		}	catch(RangeException $range) {
			throw(new RangeException($range->getMessage(), 0, $range));
		}

		$this->birthday = $newBirthday;

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
	 * Mutator Method for actors birth name
	 *
	 * @param string $newBirthName: birth name for a new actor
	 * @throws InvalidArgumentException if $newBirthName is insecure or empty
	 * @throws RangeException if $newBirthName is to large for the database
	 *
	 **/
	public function setBirthName($newBirthName) {

		// verify that that $newBirthName is secure
		$newBirthName = trim($newBirthName);
		$newBirthName = filter_var($newBirthName, FILTER_SANITIZE_STRING);
		if(empty($newBirthName) === true) {
			throw(new InvalidArgumentException("Birth Name is insecure or empty"));
		}

		// verify the new actor name will fit the database
		if(strlen($newBirthName) > 40) {
			throw(new RangeException("Birth Name is too large.  Maximum 40 characters"));
		}

		// store actor name
		$this->birthName = $newBirthName;

	}

	/**
	 *Accessor Method for this actors height
	 *
	 * @return string value of actors height
	 **/
	public function getHeight() {
		return($this->height);
	}

	/**
	 *Mutator Method for this actors height
	 *
	 * @param $newHeight string: the height of this new actor
	 * @throws InvalidArgumentException if the string is insecure or empty
	 * @throws RangeException if the string is to long
	 *
	 **/
	public function setHeight($newHeight) {

		// verify that that $newHeight is secure
		$newHeight = trim($newHeight);
		$newHeight = filter_var($newHeight, FILTER_SANITIZE_STRING);
		if(empty($newHeight) === true) {
			throw(new InvalidArgumentException("Height entry is insecure or empty"));
		}

		// verify the new height entry will fit the database
		if(strlen($newHeight) > 15) {
			throw(new RangeException("Height entry is to large  Maximum 15 characters"));
		}

		// store actor height
		$this->height = $newHeight;
	}


}  // close class actorProfile