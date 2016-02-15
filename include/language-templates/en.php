<?php
/*
%m1% - Dymamic markers which are replaced at run time by the relevant index.
*/

$lang = array();

//Account
$lang = array_merge($lang,array(
	"ACCOUNT_SPECIFY_USERNAME" 		=> "Please enter your username",
	"ACCOUNT_SPECIFY_PASSWORD" 		=> "Please enter your password",
	"ACCOUNT_SPECIFY_EMAIL"			=> "Please enter your email address",
	"ACCOUNT_INVALID_EMAIL"			=> "Invalid email address",
	"ACCOUNT_USER_OR_EMAIL_INVALID"		=> "Username or email address is invalid",
	"ACCOUNT_USER_OR_PASS_INVALID"		=> "Username or password is invalid",
	"ACCOUNT_ALREADY_ACTIVE"		=> "Your account is already activated, please login.",
	"ACCOUNT_INACTIVE"			=> "Your account is in-active. Check your email's inbox or spam folder for account activation instructions",
	"ACCOUNT_USER_CHAR_LIMIT"		=> "Your username must be between %m1% and %m2% characters in length to be set",
	"ACCOUNT_DISPLAY_CHAR_LIMIT"		=> "Your display name must be between %m1% and %m2% characters in length to be set",
	"ACCOUNT_PASS_CHAR_LIMIT"		=> "Your password must be between %m1% and %m2% characters in length to be set",
	"ACCOUNT_TITLE_CHAR_LIMIT"		=> "Your title must be between %m1% and %m2% characters in length to be set",
	"ACCOUNT_PASS_MISMATCH"			=> "Your password and confirmation password do not match",
	"ACCOUNT_DISPLAY_INVALID_CHARACTERS"	=> "Display name can only include alpha-numeric characters (a-z, A-Z, 0-9)",
	"ACCOUNT_USERNAME_IN_USE"		=> "The username %m1% is already in use",
	"ACCOUNT_DISPLAYNAME_IN_USE"		=> "The display name %m1% is already in use",
	"ACCOUNT_EMAIL_IN_USE"			=> "The email %m1% is already in use",
	"ACCOUNT_LINK_ALREADY_SENT"		=> "An activation email has already been sent out to this email address in the last %m1% hour(s)",
	"ACCOUNT_NEW_ACTIVATION_SENT"		=> "You have been emailed you a new activation link, please check your email's inbox or spam folder",
	"ACCOUNT_SPECIFY_NEW_PASSWORD"		=> "Please enter your new password",	
	"ACCOUNT_SPECIFY_CONFIRM_PASSWORD"	=> "Please confirm your new password",
	"ACCOUNT_NEW_PASSWORD_LENGTH"		=> "The new password must be between %m1% and %m2% characters in length to be set",	
	"ACCOUNT_PASSWORD_INVALID"		=> "The current password you have entered, doesn't match the one we have on record",	
	"ACCOUNT_DETAILS_UPDATED"		=> "Account details were updated",
	"ACCOUNT_ACTIVATION_MESSAGE"		=> "You will need to activate your account before you can login. Please follow the link below to activate your account. \n\n
	%m1%activate-account.php?token=%m2%",							
	"ACCOUNT_ACTIVATION_COMPLETE"		=> "You have successfully activated your account. You can now login <a href=\"login.php\">here</a>.",
	"ACCOUNT_REGISTRATION_COMPLETE_TYPE1"	=> "You are successfully registered. You can now login <a href=\"login.php\">here</a>.",
	"ACCOUNT_REGISTRATION_COMPLETE_TYPE2"	=> "You are successfully registered. You will soon receive an activation email in your email's inbox or spam. 
	You must activate your account before logging in.",
	"ACCOUNT_PASSWORD_NOTHING_TO_UPDATE"	=> "You cannot update your account with the same password",
	"ACCOUNT_PASSWORD_UPDATED"		=> "Account password updated",
	"ACCOUNT_EMAIL_UPDATED"			=> "Account email updated",
	"ACCOUNT_TOKEN_NOT_FOUND"		=> "Token does not exist or account has already been activated",
	"ACCOUNT_USER_INVALID_CHARACTERS"	=> "Username can only include alpha-numeric characters (a-z, A-Z, 0-9)",
	"ACCOUNT_DELETIONS_SUCCESSFUL"		=> "You have successfully deleted %m1% user(s)",
	"ACCOUNT_MANUALLY_ACTIVATED"		=> "%m1%'s account has been manually activated",
	"ACCOUNT_DISPLAYNAME_UPDATED"		=> "The user's display name has been changed to %m1%",
	"ACCOUNT_TITLE_UPDATED"			=> "%m1%'s title changed to %m2%",
	"ACCOUNT_PERMISSION_ADDED"		=> "Added access to %m1% permission levels",
	"ACCOUNT_PERMISSION_REMOVED"		=> "Removed access from %m1% permission levels",
	"ACCOUNT_INVALID_USERNAME"		=> "Invalid username entered",
	));

//Configuration
$lang = array_merge($lang,array(
	"CONFIG_NAME_CHAR_LIMIT"		=> "Site name must be between %m1% and %m2% characters in length",
	"CONFIG_URL_CHAR_LIMIT"			=> "Site name must be between %m1% and %m2% characters in length",
	"CONFIG_EMAIL_CHAR_LIMIT"		=> "Site name must be between %m1% and %m2% characters in length",
	"CONFIG_ACTIVATION_TRUE_FALSE"		=> "Email activation must be either `true` or `false`",
	"CONFIG_ACTIVATION_RESEND_RANGE"	=> "Activation Threshold must be between %m1% and %m2% hour(s)",
	"CONFIG_LANGUAGE_CHAR_LIMIT"		=> "The language path must be between %m1% and %m2% characters in length",
	"CONFIG_LANGUAGE_INVALID"		=> "The file for the language key `%m1%` does not exist",
	"CONFIG_TEMPLATE_CHAR_LIMIT"		=> "Template path must be between %m1% and %m2% characters in length",
	"CONFIG_TEMPLATE_INVALID"		=> "The file for the template key `%m1%` does not exist",
	"CONFIG_EMAIL_INVALID"			=> "The email you have entered is not valid",
	"CONFIG_INVALID_URL_END"		=> "Please include a / to the end of your site's URL",
	"CONFIG_UPDATE_SUCCESSFUL"		=> "The site's configuration has been updated, you may need to load a new page or refresh a page for all the settings to take effect",
	));

//Forgot Password
$lang = array_merge($lang,array(
	"FORGOTPASS_INVALID_TOKEN"		=> "Your activation token is not valid",
	"FORGOTPASS_NEW_PASS_EMAIL"		=> "We have emailed you a new password",
	"FORGOTPASS_REQUEST_CANNED"		=> "The lost password request has been cancelled",
	"FORGOTPASS_REQUEST_EXISTS"		=> "There is already a outstanding lost password request on this account, please check your email",
	"FORGOTPASS_REQUEST_SUCCESS"		=> "We have emailed you instructions on how to regain access to your account",
	));

//Mail
$lang = array_merge($lang,array(
	"MAIL_ERROR"				=> "Fatal error attempting mail, contact the server administrator (Is PHP.Mail working?)",
	"MAIL_TEMPLATE_BUILD_ERROR"		=> "Error building the email template",
	"MAIL_TEMPLATE_DIRECTORY_ERROR"		=> "Unable to open mail-templates directory, perhaps try setting the mail directory to %m1%",
	"MAIL_TEMPLATE_FILE_EMPTY"		=> "Template file is empty, server has nothing to send",
	));

//Miscellaneous
$lang = array_merge($lang,array(
	"CAPTCHA_FAIL"				=> "Security questions was entered incorrectly",
	"CONFIRM"				=> "Confirm",
	"DENY"					=> "Deny",
	"SUCCESS"				=> "Success",
	"ERROR"					=> "Error",
	"NOTHING_TO_UPDATE"			=> "Nothing to update",
	"SQL_ERROR"				=> "Fatal SQL error, please contact the server administrator",
	"FEATURE_DISABLED"			=> "This feature is currently disabled, please contact website administrator",
	"PAGE_PRIVATE_TOGGLED"			=> "This page is now %m1%",
	"PAGE_ACCESS_REMOVED"			=> "Page access removed for %m1% permission level(s)",
	"PAGE_ACCESS_ADDED"			=> "Page access added for %m1% permission level(s)",
	));

//Permissions
$lang = array_merge($lang,array(
	"PERMISSION_CHAR_LIMIT"			=> "Permission names must be between %m1% and %m2% characters in length",
	"PERMISSION_NAME_IN_USE"		=> "Permission name %m1% is already in use",
	"PERMISSION_DELETIONS_SUCCESSFUL"	=> "Successfully deleted %m1% permission level(s)",
	"PERMISSION_CREATION_SUCCESSFUL"	=> "Successfully created the permission level `%m1%`",
	"PERMISSION_NAME_UPDATE"		=> "Permission level name changed to `%m1%`",
	"PERMISSION_REMOVE_PAGES"		=> "Successfully removed access to %m1% page(s)",
	"PERMISSION_ADD_PAGES"			=> "Successfully added access to %m1% page(s)",
	"PERMISSION_REMOVE_USERS"		=> "Successfully removed %m1% user(s)",
	"PERMISSION_ADD_USERS"			=> "Successfully added %m1% user(s)",
	"CANNOT_DELETE_NEWUSERS"		=> "You cannot delete the default 'new user' group",
	"CANNOT_DELETE_ADMIN"			=> "You cannot delete the default 'admin' group",
	));
?>