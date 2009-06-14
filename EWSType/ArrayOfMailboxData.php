<?php
/**
 * Definition of the ArrayOfMailboxData type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ArrayOfMailboxData type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ArrayOfMailboxData {
	/**
	 * MailboxData property
	 * 
	 * @var EWSType_MailboxData
	 */
	public $MailboxData;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'MailboxData',
				'required' => false,
				'type' => 'MailboxData',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ArrayOfMailboxData