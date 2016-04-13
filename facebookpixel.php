<?php

if (!defined("WHMCS"))
	die("This file cannot be accessed directly");


function facebookPixel_config() {
    $configarray = array(
    "name" => "Facebook Pixel",
    "description" => "Integrate your Facebook tracking pixel on every page.",
    "version" => "1.0",
    "author" => "Github Community",
    "language" => "english",
    "fields" => array(
    "pixelid" => array ("FriendlyName" => "Facebook Pixel ID", "Type" => "text", "Size" => "40", "Description" => "", "Default" => "", ),
    "active" => array ("FriendlyName" => "Active", "Type" => "yesno", "Description" => "Check this box to insert the pixel.",),
    ));

    return $configarray;
}

?>
