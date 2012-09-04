<?php
//	------------------------------
// 		CONSTANT DEFINE 
//	------------------------------
define ('DEBUG', 1);
define ('TABLE_PREFIX', 'lit_');


$site_path = realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
define ('SITE_PATH', $site_path);

	

//Development Phase
error_reporting(E_ALL ^ E_NOTICE);
ini_set("display_errors", 1);
ini_set('session.name', 'LITPIHASH');
ini_set('session.use_only_cookies', true);
ini_set('session.use_trans_sid', false);
date_default_timezone_set('Asia/Ho_Chi_Minh');


//configuration variables
$isDeploy = false;
$conf = array();
if ($isDeploy)
{
	$conf['db']['host'] = 'sql113.fall.vn';
	$conf['db']['name'] = 'fall_10436547_litpi';
	$conf['db']['user'] = 'fall_10436547';
	$conf['db']['pass'] = 'kingbo';
	
	$conf['host'] = 'huytd.fall.vn';
}
else
{
	$conf['db']['host'] = 'localhost';
	$conf['db']['name'] = 'litpi';
	$conf['db']['user'] = 'root';
	$conf['db']['pass'] = '';
	
	$conf['host'] = 'localhost/litpi';
}
$conf['rooturl'] = 'http://' . $conf['host'] . '/';
$conf['rooturl_admin'] = 'http://' . $conf['host'] . '/admin/';

$conf['defaultLang'] = 'en';
$conf['usingGZIP'] = true;

/**
   * Sets the SMTP hosts.  All hosts must be separated by a
   * semicolon.  You can also specify a different port
   * for each host by using this format: [hostname:port]
   * (e.g. "smtp1.example.com:25;smtp2.example.com").
   * Hosts will be tried in order.
   * @var string
   */
$conf['smtp']['enable'] = true;
$conf['smtp']['host'] = 'smtp.gmail.com';
$conf['smtp']['username'] = '';
$conf['smtp']['password'] = '';






?>