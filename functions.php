<?php
function GenerateAffiliateCode($name,$email,$clickbankid)
{
	$code = md5($name);
	$code = md5($code . $email);
	$code = md5($code . $clickbankid);
	$code = substr($code,4,5);
	return $code;
}

function UpdateSettings($name,$value)
{
	mysql_query("REPLACE INTO `setting` SET setting_name='{$name}', setting_value='{$value}'");
}

function GetSettings($name)
{
	$query = mysql_query("SELECT * FROM `setting` WHERE setting_name='{$name}'");
	$row = mysql_fetch_object($query);
	return $row->setting_value;
}

function GenerateBanner($img,$text,$left,$top)
{
	header("Content-Type: image/jpeg"); 
	$im = imagecreatetruecolor(400, 30);
}
?>