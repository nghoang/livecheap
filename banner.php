<?php 
require_once "config.php";
require_once "functions.php";

if (isset($_GET["code"]))
{
	$code = $_GET["code"];
	$_COOKIE["aff_id"] = $code;
	$query = mysql_query("SELECT * FROM affiliate WHERE code = '{$code}'");

	if ($query == false || mysql_num_rows($query) == 0)
		header ("Location: register.php");
	else
	{
		$row = mysql_fetch_object($query);
		header ("Location: banner.php?name=".urlencode($row->name)."&email=".urlencode($row->email)."&cbid=".urlencode($row->cbid));
	}
	exit;
}

include 'header.php';

$name = $_GET["name"];
$email = $_GET["email"];
$cbid = $_GET["cbid"];
$code = GenerateAffiliateCode($name,$email,$cbid);
$query = mysql_query("SELECT * FROM affiliate WHERE code = '{$code}'");
if ($query == false || mysql_num_rows($query) == 0)
{
	mysql_query("INSERT INTO affiliate SET code='{$code}', name='{$name}', email='{$email}', cbid='{$cbid}'");
	$_COOKIE["aff_id"] = $code;
	
	$email_subject = "New member: " . $name;
	$email_body = "Member Name: {$name}<br>
		Member Email: {$email}<br>
		Member Clickbank ID: {$cbid}<br>
		Member Link: <a href=\"http://livecheap360.com/test/banner.php?code={$code}\">Link</a>" ;
	$admin_email = GetSettings("admin_email");
	$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	mail ($admin_email, $email_subject, $email_body, $headers);
}
?>
<div class="container">
<form action="edit.php">
  <h5>Your affiliate links and banners</h5>
  <p class="text-info">We use ClickBank to ensure accurate sales tracking and payment and EasyClickMate
    so that you are able to send visitors to multiple pages on our site.</p>
    <img src="get_banner.php?code=<?php echo $code;?>" /><br><br>
  <input type="submit" class="btn" value="Edit My Affiliate ID" />
  <br><br>
    <table class="table">
      <tbody>
        <tr>
          <td>Your Affiliate ID</td>
          <td><input type="text" value="<?= $code;?>" style="width:100px;" /></td>
        </tr>
        <tr>
          <td>Affiliate Link</td>
          <td><input type="text" value="http://livecheap360.com/test/banner.php?code=<?= $code;?>" style="width:400px;" /></td>
        </tr>
      </tbody>
    </table>
    <input type="hidden" name="name" value="<?= $name;?>" />
    <input type="hidden" name="email" value="<?= $email;?>" />
    <input type="hidden" name="cbid" value="<?= $cbid;?>" />
</form>
</div>
<?php include 'footer.php';?>