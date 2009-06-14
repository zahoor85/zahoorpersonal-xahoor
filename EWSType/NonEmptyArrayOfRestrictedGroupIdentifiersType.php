<?php
/**
 * Definition of the NonEmptyArrayOfRestrictedGroupIdentifiersType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfRestrictedGroupIdentifiersType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfRestrictedGroupIdentifiersType {
	/**
	 * RestrictedGroupIdentifier property
	 * 
	 * @var EWSType_SidAndAttributesType
	 */
	public $RestrictedGroupIdentifier;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'RestrictedGroupIdentifier',
				'required' => false,
				'type' => 'SidAndAttributesType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NonEmptyArrayOfRestrictedGroupIdentifiersType