<?php
require_once 'modules/admin/models/GatewayPlugin.php';
require_once 'modules/billing/models/Currency.php';

/**
* @package Plugins
*/
class PluginRazorpay extends GatewayPlugin
{
    function getVariables()
    {
        $variables = array (
			lang("Plugin Name") => array (
				"type"          =>"hidden",
				"description"   =>lang("How CE sees this plugin (not to be confused with the Signup Name)"),
				"value"         =>lang("Razorpay")
			),
            lang("Key ID") => array (
				"type"          =>"text",
				"description"   =>lang("Your Razorpay Key ID."),
				"value"         =>""
			),
			lang("Key Secret") => array (
				"type"          =>"text",
				"description"   =>lang("Your Razorpay Key Secret."),
				"value"         =>""
			),
			lang("Signup Name") => array (
				"type"          =>"text",
				"description"   =>lang("Select the name to display in the signup process for this payment type. Example: eCheck or Credit Card."),
				"value"         =>"Razorpay"
			),
            lang("Invoice After Signup") => array (
				"type"          =>"yesno",
				"description"   =>lang("Select YES if you want an invoice sent to the customer after signup is complete."),
				"value"         =>"1"
			),
        );
        return $variables;
    }

    function credit($params)
    {

    }

    

    function singlepayment($params, $test = false)
    {
   
    }
}