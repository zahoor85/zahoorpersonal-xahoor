<?php
/**
 * Definition of the ResponseObjectType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ResponseObjectType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ResponseObjectType {
	/**
	 * ObjectName property
	 * 
	 * @var EWSType_string
	 */
	public $ObjectName;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ObjectName',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ResponseObjectType