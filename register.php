<?php include 'header.php';?>

	<form action="banner.php" id="bannerRegistrationForm">
		<div class="container">
		  <h3>Get Instance Access to Our Affiliate Tools and Register for Affiliate
			Contests too...</h3>
		  <div class="input-prepend">
			<span class="add-on" style="width:100px;">Name</span>
			<input type="text" class="input-medium" id="name" name="name" style="width:200px;"> 
		  </div><br>
		  <div class="input-prepend">
			<span class="add-on" style="width:100px;">Email</span>
			<input type="text" class="input-medium" id="email" name="email" style="width:200px;"> 
		  </div><br>
		  <div class="input-prepend">
			<span class="add-on" style="width:100px;">ClickBank ID</span>
			<input type="text" id="cbid" name="cbid" class="input-medium" style="width:200px;">
			<a class="label" href="#" style="margin-left:10px;margin-top:6px;">Need A ClickBank ID?</a> 
		  </div>
		  <br>
		  <a class="btn" onClick="CheckSubmitBanner();">Get Instance Access</a> 
		</div>
    </form>
    <script>
    function CheckSubmitBanner()
    {
    	if ($("#name").val() != ''
    		&& $("#email").val() != ''
    		&& $("#cbid").val() != '')
    		$("#bannerRegistrationForm").submit();
    	else
    		alert("Please enter all required information");
    }
    </script>
<?php include 'footer.php';?>