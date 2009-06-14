<?php
/**
 * Definition of the AttachmentInfoResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the AttachmentInfoResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_AttachmentInfoResponseMessageType {
	/**
	 * Attachments property
	 * 
	 * @var EWSType_ArrayOfAttachmentsType
	 */
	public $Attachments;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'Attachments',
				'required' => false,
				'type' => 'ArrayOfAttachmentsType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class AttachmentInfoResponseMessageType