<?php include 'header.php';?>
<?php
$name = $_GET["name"];
$email = $_GET["email"];
$cbid = $_GET["cbid"];
?>
<div class="container">
<form action="banner.php">
  <h5>Your affiliate links and banners</h5>
  <p class="text-info">We use ClickBank to ensure accurate sales tracking and payment and EasyClickMate
    so that you are able to send visitors to multiple pages on our site.</p>
  <h3
  align="center">Enter your Clickbank ID to get your links and banners:</h3>
  
    <input type="button" onClick="history.back()" class="btn" value="Back" /><br><br>
    
    <div class="input-append"
    align="center">
      <input type="text" value="<?= $cbid;?>" name="cbid" class="input-medium" placeholder="ID">
      <button class="btn" type="submit">Update ClickBank ID</button>
    </div>
    <input type="hidden" name="name" value="<?= $name;?>" />
    <input type="hidden" name="email" value="<?= $email;?>" />
</form>
</div>
<?php include 'footer.php';?>