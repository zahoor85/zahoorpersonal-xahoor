<?php
/**
 * Definition of the InternetHeaderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the InternetHeaderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_InternetHeaderType {
	/**
	 * _ property
	 * 
	 * @var EWSType_string
	 */
	public $_;

	/**
	 * HeaderName property
	 * 
	 * @var EWSType_string
	 */
	public $HeaderName;

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
				'name' => 'HeaderName',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class InternetHeaderType