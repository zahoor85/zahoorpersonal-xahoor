<?php
/**
 * Definition of the ArrayOfSuggestion type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ArrayOfSuggestion type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ArrayOfSuggestion {
	/**
	 * Suggestion property
	 * 
	 * @var EWSType_Suggestion
	 */
	public $Suggestion;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'Suggestion',
				'required' => false,
				'type' => 'Suggestion',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ArrayOfSuggestion