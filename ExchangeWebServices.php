<?php
/**
 * Base class of the Exchange Web Services application.
 *
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Base class of the Exchange Web Services application.
 *
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class ExchangeWebServices {
	/**
	 * Location of the Exchange server.
	 *
	 * @var string
	 */
	protected $server;

	/**
	 * Username to use when connecting to the Exchange server.
	 *
	 * @var string
	 */
	protected $username;

	/**
	 * Password to use when connecting to the Exchange server.
	 *
	 * @var string
	 */
	protected $password;

	/**
	 * Constructor for the ExchangeWebServices class
	 *
	 * @param string $server
	 * @param string $username
	 * @param string $password
	 */
	public function __construct($server = null, $username = null,
		$password = null) {
		// set the object properties
		$this->setServer($server);
		$this->setUsername($username);
		$this->setPassword($password);
	} // end function __construct()
	
	/**
	 * Returns the SOAP Client that may be used to make calls against the server
	 * 
	 * @return NTLMSoapClient_Exchange
	 */
	public function getClient()
	{
		return $this->initializeSoapClient();
	} // end function getClient()
	
	/**
	 * Sets the password property
	 *
	 * @param string $password
	 */
	public function setPassword($password) {
		$this->password = $password;

		return true;
	} // end function setPassword()

	/**
	 * Sets the server property
	 *
	 * @param string $server
	 */
	public function setServer($server) {
		$this->server = $server;

		return true;
	} // end function setServer()

	/**
	 * Sets the user name property
	 *
	 * @param string $username
	 */
	public function setUsername($username) {
		$this->username = $username;

		return true;
	} // end function setUsername()

	/**
	 * Function Description
	 *
	 * @param AddDelegateType $request
	 * @return AddDelegateResponseMessageType
	 */
	public function AddDelegate($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function AddDelegate()

	/**
	 * Function Description
	 *
	 * @param ConvertIdType $request
	 * @return ConvertIdResponseType
	 */
	public function ConvertId($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function ConvertId()

	/**
	 * Function Description
	 *
	 * @param CopyFolderType $request
	 * @return CopyFolderResponseType
	 */
	public function CopyFolder($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function CopyFolder()

	/**
	 * Function Description
	 *
	 * @param CopyItemType $request
	 * @return CopyItemResponseType
	 */
	public function CopyItem($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function CopyItem()

	/**
	 * Function Description
	 *
	 * @param CreateAttachmentType $request
	 * @return CreateAttachmentResponseType
	 */
	public function CreateAttachment($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function CreateAttachment()

	/**
	 * Function Description
	 *
	 * @param CreateFolderType $request
	 * @return CreateFolderResponseType
	 */
	public function CreateFolder($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function CreateFolder()

	/**
	 * Function Description
	 *
	 * @param CreateItemType $request
	 * @return CreateItemResponseType
	 */
	public function CreateItem($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function CreateItem()

	/**
	 * Function Description
	 *
	 * @param CreateManagedFolderRequestType $request
	 * @return CreateManagedFolderResponseType
	 */
	public function CreateManagedFolder($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function CreateManagedFolder()

	/**
	 * Function Description
	 *
	 * @param DeleteAttachmentType $request
	 * @return DeleteAttachmentResponseType
	 */
	public function DeleteAttachment($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function DeleteAttachment()

	/**
	 * Function Description
	 *
	 * @param DeleteFolderType $request
	 * @return DeleteFolderResponseType
	 */
	public function DeleteFolder($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function DeleteFolder()

	/**
	 * Function Description
	 *
	 * @param DeleteItemType $request
	 * @return DeleteItemResponseType
	 */
	public function DeleteItem($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function DeleteItem()

	/**
	 * Function Description
	 *
	 * @param ExpandDLType $request
	 * @return ExpandDLResponseType
	 */
	public function ExpandDL($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function ExpandDL()

	/**
	 * Function Description
	 *
	 * @param EWS_FindFolderType $request
	 * @return EWS_FindFolderResponseType
	 */
	public function FindFolder($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function FindFolder()

	/**
	 * Function Description
	 *
	 * @param FindItemType $request
	 * @return FindItemResponseType
	 */
	public function FindItem($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function FindItem()

	/**
	 * Function Description
	 *
	 * @param GetAttachmentType $request
	 * @return GetAttachmentResponseType
	 */
	public function GetAttachment($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function GetAttachment()

	/**
	 * Function Description
	 *
	 * @param GetDelegateType $request
	 * @return GetDelegateResponseMessageType
	 */
	public function GetDelegate($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function GetDelegate()

	/**
	 * Function Description
	 *
	 * @param GetEventsType $request
	 * @return GetEventsResponseType
	 */
	public function GetEvents($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function GetEvents()

	/**
	 * Function Description
	 *
	 * @param GetFolderType $request
	 * @return GetFolderResponseType
	 */
	public function GetFolder($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function GetFolder()

	/**
	 * Function Description
	 *
	 * @param GetItemType $request
	 * @return GetItemResponseType
	 */
	public function GetItem($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function GetItem()

	/**
	 * Function Description
	 *
	 * @param GetUserAvailabilityRequestType $GetUserAvailabilityRequest
	 * @return GetUserAvailabilityResponseType
	 */
	public function GetUserAvailability($GetUserAvailabilityRequest) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function GetUserAvailability()

	/**
	 * Function Description
	 *
	 * @param GetUserOofSettingsRequest $GetUserOofSettingsRequest
	 * @return GetUserOofSettingsResponse
	 */
	public function GetUserOofSettings($GetUserOofSettingsRequest) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function GetUserOofSettings()

	/**
	 * Function Description
	 *
	 * @param MoveFolderType $request
	 * @return MoveFolderResponseType
	 */
	public function MoveFolder($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function MoveFolder()

	/**
	 * Function Description
	 *
	 * @param MoveItemType $request
	 * @return MoveItemResponseType
	 */
	public function MoveItem($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function MoveItem()

	/**
	 * Function Description
	 *
	 * @param RemoveDelegateType $request
	 * @return RemoveDelegateResponseMessageType
	 */
	public function RemoveDelegate($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function RemoveDelegate()

	/**
	 * Function Description
	 *
	 * @param ResolveNamesType $request
	 * @return ResolveNamesResponseType
	 */
	public function ResolveNames($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function ResolveNames()

	/**
	 * Function Description
	 *
	 * @param SendItemType $request
	 * @return SendItemResponseType
	 */
	public function SendItem($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function SendItem()

	/**
	 * Function Description
	 *
	 * @param SetUserOofSettingsRequest $SetUserOofSettingsRequest
	 * @return SetUserOofSettingsResponse
	 */
	public function SetUserOofSettings($SetUserOofSettingsRequest) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function SetUserOofSettings()

	/**
	 * Function Description
	 *
	 * @param SubscribeType $request
	 * @return SubscribeResponseType
	 */
	public function Subscribe($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function Subscribe()

	/**
	 * Function Description
	 *
	 * @param SyncFolderHierarchyType $request
	 * @return SyncFolderHierarchyResponseType
	 */
	public function SyncFolderHierarchy($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function SyncFolderHierarchy()

	/**
	 * Function Description
	 *
	 * @param SyncFolderItemsType $request
	 * @return SyncFolderItemsResponseType
	 */
	public function SyncFolderItems($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function SyncFolderItems()

	/**
	 * Function Description
	 *
	 * @param UnsubscribeType $request
	 * @return UnsubscribeResponseType
	 */
	public function Unsubscribe($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function Unsubscribe()

	/**
	 * Function Description
	 *
	 * @param UpdateDelegateType $request
	 * @return UpdateDelegateResponseMessageType
	 */
	public function UpdateDelegate($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function UpdateDelegate()

	/**
	 * Function Description
	 *
	 * @param UpdateFolderType $request
	 * @return UpdateFolderResponseType
	 */
	public function UpdateFolder($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function UpdateFolder()

	/**
	 * Function Description
	 *
	 * @param UpdateItemType $request
	 * @return UpdateItemResponseType
	 */
	public function UpdateItem($request) {
		return $this->initializeSoapClient()->{__FUNCTION__}($request);
	} // end function UpdateItem()

	/**
	 * Initializes the SoapClient object to make a request
	 * 
	 * @return NTLMSoapClient_Exchange
	 */
	protected function initializeSoapClient() {
		return new NTLMSoapClient_Exchange(
			dirname(__FILE__).'/wsdl/services.wsdl',
			array(
				'user' => $this->username,
				'password' => $this->password,
				'location' => 'https://'.$this->server.'/EWS/Exchange.asmx',
			)); // end return
	} // end function initializeSoapClient()
} // end class ExchangeWebService
