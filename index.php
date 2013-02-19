<?php

if (isset($_COOKIE["aff_id"]))
{
	header("Location: banner.php?code=" . $_COOKIE["aff_id"]);
	die();
}

header("Location: register.php");
