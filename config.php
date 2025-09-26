<?
if(function_exists(date_default_timezone_set)){
	//date_default_timezone_set('Europe/London');
	date_default_timezone_set('UTC');
}

$siteVar = array(
					'db' => array(),
					'site' => array(),
					'email' => array(),
					'meta' => array(),
					'register' => array(),
					'session' => array(),
					'display' => array(),
					'fax' => array(),
					'paths' => array(),
					'templateTerms' => array(),
					'analyics' => array(),
					'images' => array(),
					'googlemaps' => array(),
					'protx' => array()
					);

ini_set('max_execution_time', 120);
ini_set('max_input_time', 120);

//DATABASE
$siteVar['db']['username'] 	= '';
$siteVar['db']['password'] 	= '';
$siteVar['db']['server'] 	= 'localhost';
$siteVar['db']['name'] 		= '';
$siteVar['db']['type'] 		= 'PASSIVE';
$siteVar['db']['prefix'] 	= 'SG_';
$siteVar['db']['debug'] 	= false;

//JTW
$siteVar['jwt']['key'] = '';
$siteVar['xcsrf']['key'] = ''; //Back on

//SITE
$siteVar['site']['name'] 		= 'PCMS';
$siteVar['site']['server'] 		= $_SERVER['HTTP_HOST'];
$siteVar['site']['subdomain'] 	= substr($_SERVER['HTTP_HOST'], 0, strpos($_SERVER['HTTP_HOST'],'.'));
$siteVar['site']['http'] 		= ($_SERVER['SERVER_PORT'] != 443) ? 'http://' : 'https://';
$siteVar['site']['url'] 		= $siteVar['site']['http'] . $siteVar['site']['server'].'/';
$siteVar['site']['primarypage'] = 'index.php';
$siteVar['site']['querystring'] = $_SERVER['QUERY_STRING'];
$siteVar['site']['language'] 	= 'en';
$siteVar['site']['debug'] 		= false;
$siteVar['site']['emailOnCritical'] = true;
$siteVar['site']['postcode_account'] = '';
$siteVar['site']['postcode_key'] = '';
$siteVar['site']['fastsms_key'] = '';
$siteVar['site']['marketing_site'] = '';
$siteVar['site']['tcpimgsub'] = '';
$siteVar['site']['allow_files_access_by_ip'] = [''];
	
$siteVar['site']['password_days'] = 6*30;

$siteVar['site']['recaptcha_public_key'] = '';
$siteVar['site']['recaptcha_private_key'] = '';

$siteVar['site']['developer'] = "";	//developer email

$siteVar['site']['urgent_developer']= "";	//urgent action required email
$siteVar['site']['email'] 			= ''; 		//FALL BACK FOR FROM and ADMIN TO
$siteVar['site']['accounts_email'] 	= ''; 		//FALL BACK FOR ACCOUNTS 
$siteVar['site']['courier_email'] 	= '';		//Not really use, but was email for courier

$siteVar['site']['default_accounts_id'] = '';	// use | to seperate IDs if multiple required
$siteVar['site']['default_admin_id'] = 212;
$siteVar['site']['default_company_id'] = 1;
$siteVar['site']['temporary_patient_id'] = 1248; 		// Used by self booking system
$siteVar['site']['test_patient_id'] = 429; 				// Used by self booking system
$siteVar['site']['automated_task_id'] = 105;			// User ID of Automated Task user
$siteVar['site']['standard_pricing'] = 142;				// Corporate ID for Standard Pricing storage
$siteVar['site']['managing_director'] = 106;			// Send client approvals too
$siteVar['site']['developer_id'] = 2;					// Developer

//IG API
$siteVar['site']['useigapi'] = true;
$siteVar['site']['testigapi'] = true;

//SHOPIFY
$siteVar['shopify']['site'] 			= "";
$siteVar['shopify']['api_token'] 		= "";
$siteVar['shopify']['store_front_token']= "";
$siteVar['shopify']['web_hook_secret']	= "";
$siteVar['shopify']['admin_key']	= "";
$siteVar['shopify']['admin_pass']	= "";

//BCRA calucator
$siteVar['site']['tcurl'] = '';
$siteVar['site']['tcport'] = 5424;

$siteVar['site']['genericsignatures'] = 1;

//EMAIL
$siteVar['email']['smtp'] 		= true;
$siteVar['email']['user'] 		= '';
$siteVar['email']['password'] 	= '';
$siteVar['email']['server'] 	= 'smtp.office365.com';
$siteVar['email']['port'] 		= 587;
$siteVar['email']['returnpath'] = "";
$siteVar['email']['protect_attachments'] = true;
$siteVar['email']['allowed_domains'] = array("iht-ltd.com",
											 "breasthealthuk.com","breasthealthse.com","breasthealthdk.com",
											 "lunghealthuk.com",
											 "prostatehealthuk.com",
											 "skinhealthuk.com",
											 "healthscreenuk.com","healthscreense.com","healthscreendk.com",
											 "healthscreenus.com", "skinhealthus.com",
											 "bowelhealthuk.com",
											 "genehealthuk.com",
											 "gynaehealthuk.com",
											 "check4cancer.com"
											 );
$siteVar['email']['relay_address'] 	= "";
$siteVar['email']['test_capture'] 	= "danille@agile451.com"; //Prevent email being sent out
$siteVar['email']['test_capture_allow'] = ["agile451.com"]; 
$siteVar['email']['user_file_protect'] = 'egress'; //'zip';
$siteVar['email']['hospital_file_protect'] = 'egress'; //'zip';
$siteVar['email']['patient_file_protect'] = 'zip';
$siteVar['email']['queueall'] = false; //true;

$siteVar['email']['trans_smtp']         = true;
$siteVar['email']['trans_user']         = '';
$siteVar['email']['trans_password']     = '';
$siteVar['email']['trans_server']       = 'smtp.eu.mailgun.org';
$siteVar['email']['trans_port']         = 587;

$siteVar['email']['pop_server']		= 'outlook.office365.com';
$siteVar['email']['pop_port']		= 993;
$siteVar['email']['pop_user']		= '';
$siteVar['email']['pop_password']	= '';
$siteVar['email']['pop_folder']		= 'INBOX';
$siteVar['email']['pop_ssl']		= true;
$siteVar['email']['pop_service']	= 'imap';

$siteVar['azureemailoauth']              = [];
$siteVar['azureemailoauth']['clientid']  = '';
$siteVar['azureemailoauth']['secret']    = '';
$siteVar['azureemailoauth']['authorize'] = '';
$siteVar['azureemailoauth']['token']     = '';
$siteVar['azureemailoauth']['scopes']    = ["offline_access", "openid","https://outlook.office.com/mail.read", "https://outlook.office.com/mail.readwrite"];
$siteVar['azureemailoauth']['api_url']   = "https://outlook.office.com/api/v2.0";
$siteVar['azureemailoauth']['redirect']  = "https://".$siteVar['site']['server']."/".$siteVar['site']['primarypage']."?class=email&action=azureredirect";

$siteVar['azureoauth'] = [
				'tenantid'  => '',
				'clientid'  => '',
				'logout'    => 'https://login.microsoftonline.com/common/wsfederation?wa=wsignout1.0',
				'scopes'    => ["openid","offline_access","profile","user.read"],
				'url'       => 'https://test.pcmsuk.com',
				'method'    => 'secret',
				'secret'    => ''
			];

//PRINTER
$siteVar['email']['print_pass'] 	= '';
$siteVar['email']['print_email'] 	= '';

//SMS
$siteVar['sms']['username'] 	= '';
$siteVar['sms']['password'] 	= '';
$siteVar['sms']['api']			= '';
$siteVar['sms']['token'] 		= '';
$siteVar['sms']['mobile'] 		= '07860021753';
$siteVar['sms']['reporthours'] 	= 24;
$siteVar['sms']['appointhours'] = 24;
$siteVar['sms']['usesystem'] 	= 1;

$siteVar['email']['appointmenticalreminder'] = 1; //hrs

//FAX
$siteVar['fax']['number'] = '01223281316';

//META
$siteVar['meta']['title'] 		= $siteVar['site']['name'];
$siteVar['meta']['keywords'] 	= '';
$siteVar['meta']['description'] = '';
$siteVar['meta']['robots'] 		= 'noindex,nofollow';

//SEO
$siteVar['seo']['enabled'] 		= false;
$siteVar['seo']['extension'] 	= '.html';

//USER REGISTRATION
$siteVar['register']['validate'] 	= false;
$siteVar['register']['verify'] 		= false;
$siteVar['register']['antiSpam'] 	= false;
$siteVar['register']['approve'] 	= false;

//SESSION DETAILS (In Seconds)
$siteVar['session']['life'] = 5400;

//DISPLAY DEFAULTS
$siteVar['display']['shortList'] 		= 5;
$siteVar['display']['maxListPerPage'] 	= 25;
$siteVar['display']['maxItemPerPage'] 	= 10;
$siteVar['display']['date'] 			= 'd/m/Y';

//PATHS - (Relative to index.php)
$siteVar['paths']['core'] 		= 'inc/core/';
$siteVar['paths']['languages'] 	= 'inc/core/language/';
$siteVar['paths']['templates'] 	= 'inc/templates/';
$siteVar['paths']['content'] 	= 'inc/display/';
$siteVar['paths']['library'] 	= 'library/';
$siteVar['paths']['css'] 		= 'css/';
$siteVar['paths']['scripts']	= 'script/';
$siteVar['paths']['temp'] 		= 'temp/';
$siteVar['paths']['images'] 	= 'images/';
$siteVar['paths']['files'] 		= 'files/';


//DEFAULT TEMPLATE TERMS
$siteVar['templateTerms']['{SITENAME}'] 	= $siteVar['site']['name'];
$siteVar['templateTerms']['{SITEURL}'] 		= $siteVar['site']['url'];
$siteVar['templateTerms']['{PRIMARYPAGE}'] 	= $siteVar['site']['primarypage'];
$siteVar['templateTerms']['../'] 			= '';

//ANALYTICS
$siteVar['analytics']['google'] 		= array('code' => '');

//IMAGE SIZING and FORMATS
$siteVar['images']['maxWidth'] 			= 3000;
$siteVar['images']['maxHeight'] 		= 3000;
$siteVar['images']['jpg'] 				= 80;
$siteVar['images']['uploadMask'] 		= array("gif", "jpg", "png");
$siteVar['images']['saveFormat'] 		= 'jpg';

$siteVar['documents']['uploadMask'] 	= array("pdf","tiff","tif","doc","rtf","xls","txt","docx","xlsx","docm","xlsm","xltx","pptx","zip","csv");
$siteVar['documents']['pricewithall']	= false; //Send price list with all appointments
$siteVar['documents']['virusscanning'] = true;
$siteVar['pdf']['fontsize'] 			= 10;

//PATIENTS
$siteVar['patient']['paramcount'] = 60;
$siteVar['patient']['recall1'] = 6 * 7 * 24 * 60 * 60; //Six Weeks
$siteVar['patient']['recall2'] = 2 * 7 * 24 * 60 * 60; //Two Weeks
$siteVar['patient']['scandefault'] = 1 * 7 * 24 * 60 * 60; //One Weeks
$siteVar['patient']['reportdefault'] = 5 * 24 * 60 * 60; //5 Days
$siteVar['patient']['thankyouemail'] = 3 * 24 * 60 * 60; //3 Days
$siteVar['patient']['geneticdefault'] = 5 * 7 * 24 * 60 * 60; //10  Weeks
$siteVar['patient']['recall_admin'] = 150; //Person recalls are sent from
$siteVar['patient']['lock_forms'] = 168; //hrs after consult to lock forms
$siteVar['patient']['lock_shared_reporting'] = 45 * 60; //Time for shared reporting lockout
$siteVar['patient']['selfbook_expire'] = 2 * 60 * 60; //Time for selfbooked appointments to expire
$siteVar['nursebooking']['perpatienttimetolerance'] = 30 * 60; //Time either side of a booking period to look for out of schedule appointments
$siteVar['period']['expiration_warning'] = 120 * 60 * 60; //Time before a period expires that warning is shown on the dashboard
$siteVar['patient']['selfbook_future'] = 5 * 30; //Number of days in advance of today to allow self book appointments 
$siteVar['patient']['home_kit_reminders'] = 0; //7 * 24 * 60 * 60; //Home kit reminders
$siteVar['calendar']['show_dna'] = -1; //7 * 24 * 60 * 60; //Home kit reminders
$siteVar['patient']['redirect_signup'] = true;
$siteVar['patient']['mcr_delay'] = -60;

//GOOGLE MAPS
$siteVar['googlemaps']['key'] = '';
$siteVar['googlemaps']['server_key'] = '';
$siteVar['googlemaps']['sensor'] = 'false';
$siteVar['googlemaps']['version'] = 'weekly';

//PAYPAL
$siteVar['paypal']['sandbox']   = (1) ? true : false;
$siteVar['paypal']['id']        = (!$siteVar['paypal']['sandbox']) ? '' : '';
$siteVar['paypal']['secret']    = (!$siteVar['paypal']['sandbox']) ? '' : '';
$siteVar['site']['paypal_key']  = $siteVar['paypal']['id'];


//STRIPE
$siteVar['stripe']['sandbox']   = (1) ? true : false;
$siteVar['stripe']['id']        = (!$siteVar['stripe']['sandbox']) ? '' : '';
$siteVar['stripe']['secret']    = (!$siteVar['stripe']['sandbox']) ? '' : '';
$siteVar['site']['stripe_key']  = $siteVar['stripe']['id'];


$siteVar['payment']['tax'] = 0.20;
$siteVar['payment']['defaultvalue'] = 160;
$siteVar['payment']['onestopvalue'] = 200;
$siteVar['payment']['onestopestimate'] = 400;
$siteVar['payment']['allowdeposit'] 	= 0;
$siteVar['payment']['allowinvoiceclinic'] = 0;
$siteVar['payment']['allowpayplan'] 	= 0;
$siteVar['payment']['ssrate'] 			= 1; //0.58

// PROTX VPS Specific Definitions

$siteVar['protx']['simulator_site']		= 0;
$siteVar['protx']['test_site']			= 1; //( $siteVar['site']['debug'] ) ? 1 : 0;
$siteVar['protx']['live_site']			= 0; //( $siteVar['site']['debug'] ) ? 0 : 1;

$siteVar['protx']['vendor']						= "internationalhe";
$siteVar['protx']['default_description']		= "BreastHealthUK";
$siteVar['protx']['default_currency']			= "GBP";
$siteVar['protx']['default_refund_description']	= "BreastHealthUK Refund";
$siteVar['protx']['default_file_path']			= $siteVar['site']['url'];
$siteVar['protx']['eoln'] 						= chr(13) . chr(10);
$siteVar['protx']['protocol_version']			= "2.23";
$siteVar['protx']['transaction_type']			= "PAYMENT";	// This can be DEFERRED or AUTHENTICATE if your Protx account supports those payment types
$siteVar['protx']['account_type']				= "M";		// This can be M (card not present), C (continuous authority) or E (default, e-commerce)
$siteVar['protx']['gift_aid']					= 0;
$siteVar['protx']['apply_3d_secure']			= 0; 		// DEFAULT (VPS controlled) = 0;
$siteVar['protx']['apply_avscv2']				= 0;		// DEFAULT (VPS controlled) = 0;

/************************************************
 Information and URLs for the simulator site
************************************************/
if ( $siteVar['protx']['simulator_site'] ){
  $siteVar['protx']['verify']		=false;
  $siteVar['protx']['abort_url']	="https://test.sagepay.com/VSPSimulator/VSPServerGateway.asp?Service=VendorAbortTx";
  $siteVar['protx']['authorise_url']="https://test.sagepay.com/VSPSimulator/VSPServerGateway.asp?Service=VendorAuthoriseTx";
  $siteVar['protx']['cancel_url']	="https://test.sagepay.com/VSPSimulator/VSPServerGateway.asp?Service=VendorCancelTx";
  $siteVar['protx']['purchase_url']	="https://test.sagepay.com/VSPSimulator/VSPDirectGateway.asp";
  $siteVar['protx']['refund_url']	="https://test.sagepay.com/VSPSimulator/VSPServerGateway.asp?Service=VendorRefundTx";
  $siteVar['protx']['release_url']	="https://test.sagepay.com/VSPSimulator/VSPServerGateway.asp?Service=VendorReleaseTx";
  $siteVar['protx']['repeat_url']	="https://test.sagepay.com/VSPSimulator/VSPServerGateway.asp?Service=VendorRepeatTx";
  $siteVar['protx']['void_url']		="https://test.sagepay.com/VSPSimulator/VSPServerGateway.asp?Service=VendorVoidTx";
  $siteVar['protx']['callback_url']	="https://test.sagepay.com/VSPSimulator/VSPDirectCallback.asp";
  $siteVar['protx']['paypal_completion_url']="https://test.sagepay.com/VSPSimulator/paypalcomplete.asp";
}

/************************************************
 Information and URLs for the test site
************************************************/
if ($siteVar['protx']['test_site']){
	$siteVar['protx']['verify']			=false;
	$siteVar['protx']['ecomtype']           ="AUTHENTICATE"; //"DEFERRED";
	$siteVar['protx']['abort_url']		="https://sandbox.opayo.eu.elavon.com/gateway/service/abort.vsp";
	$siteVar['protx']['authorise_url']	="https://sandbox.opayo.eu.elavon.com/gateway/service/authorise.vsp";
	$siteVar['protx']['cancel_url']		="https://sandbox.opayo.eu.elavon.com/gateway/service/cancel.vsp";
	$siteVar['protx']['purchase_url']	="https://sandbox.opayo.eu.elavon.com/gateway/service/vspdirect-register.vsp"; //"https://test.sagepay.com/gateway/service/vspdirect-register.vsp";
	$siteVar['protx']['refund_url']		="https://sandbox.opayo.eu.elavon.com/gateway/service/refund.vsp";
	$siteVar['protx']['release_url']	="https://sandbox.opayo.eu.elavon.com/gateway/service/release.vsp";
	$siteVar['protx']['repeat_url']		="https://sandbox.opayo.eu.elavon.com/gateway/service/repeat.vsp";
	$siteVar['protx']['void_url']		="https://sandbox.opayo.eu.elavon.com/gateway/service/void.vsp";
	$siteVar['protx']['callback_url']	="https://sandbox.opayo.eu.elavon.com/gateway/service/direct3dcallback.vsp"; //"https://test.sagepay.com/gateway/service/direct3dcallback.vsp";
	$siteVar['protx']['paypal_completion_url']="https://sandbox.opayo.eu.elavon.com/gateway/service/complete.vsp"; //"https://test.sagepay.com/gateway/service/complete.vsp";
}

/************************************************
 Information and URLs for the Live site
************************************************/
if ($siteVar['protx']['live_site']){
	$siteVar['protx']['verify']			=true;
	$siteVar['protx']['ecomtype']           ="AUTHENTICATE"; //"DEFERRED";
	$siteVar['protx']['abort_url']		="https://live.sagepay.com/gateway/service/abort.vsp";
	$siteVar['protx']['authorise_url']	="https://live.sagepay.com/gateway/service/authorise.vsp";
	$siteVar['protx']['cancel_url']		="https://live.sagepay.com/gateway/service/cancel.vsp";
	$siteVar['protx']['purchase_url']	="https://live.sagepay.com/gateway/service/vspdirect-register.vsp";
	$siteVar['protx']['refund_url']		="https://live.sagepay.com/gateway/service/refund.vsp";
	//https://live.sagepay.com/gateway/service/directrefund.vsp
	//https://live.sagepay.com/gateway/service/manualpayment.vsp
	$siteVar['protx']['release_url']	="https://live.sagepay.com/gateway/service/release.vsp";
	$siteVar['protx']['repeat_url']		="https://live.sagepay.com/gateway/service/repeat.vsp";
	$siteVar['protx']['void_url']		="https://live.sagepay.com/gateway/service/void.vsp";
	//live.sagepay.com/gateway/service/vspdirect-register.vsp
	$siteVar['protx']['callback_url']	="https://live.sagepay.com/gateway/service/direct3dcallback.vsp";
	$siteVar['protx']['paypal_completion_url']="https://live.sagepay.com/gateway/service/complete.vsp";
	
	//$siteVar['protx']['purchase_url']="https://ukvps.protx.com/VPSDirectAuth/PaymentGateway.asp";
	//$siteVar['protx']['callback_url']="https://ukvps.protx.com/VPSDirectAuth/Callback3D.asp";
}


?>