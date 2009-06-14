<?php
/**
 * Definition of the Value type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the Value type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_Value {
	/**
	 * _ property
	 * 
	 * @var EWSType_string
	 */
	public $_;

	/**
	 * Name property
	 * 
	 * @var EWSType_string
	 */
	public $Name;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => '_',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'Name',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class Value