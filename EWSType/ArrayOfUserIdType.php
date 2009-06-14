<?php
/**
 * Definition of the ArrayOfUserIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ArrayOfUserIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ArrayOfUserIdType {
	/**
	 * UserId property
	 * 
	 * @var EWSType_UserIdType
	 */
	public $UserId;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'UserId',
				'required' => false,
				'type' => 'UserIdType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ArrayOfUserIdType