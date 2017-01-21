<?php
/**
*
* @package Site Logo Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'BANNER_HEIGHT'						=> 'Banner height',
	'BANNER_HEIGHT_EXPLAIN'				=> 'This setting will set the size of the area for the site banner image. The actual image may need to be resized in order to fit this space, otherwise it may not display correctly.',
	'BANNER_OPTIONS'					=> 'Banner options',
	'BANNER_RADIUS'						=> 'Banner radius',
	'BANNER_RADIUS_EXPLAIN'				=> 'Sets the number of pixels for rounding the banner corners. Setting this to 0 means that the banner will have square corners.',

	'CLICK_TO_SELECT'					=> 'Click in the box to select a colour',

	'EXTENDED_SITE_DESCRIPTION'			=> 'Extended site description',
	'EXTENDED_SITE_DESCRIPTION_EXPLAIN'	=> 'This will allow you to create a site description that is greater than the 255 character limit of the standard site description and will <strong>replace</strong> the standard site description.<br /><strong>Note:</strong> If the data here is overly long there may be some strange “side effects” - most of these can be overcome by adjusting some of the other options.',

	'LOGO_CENTRE'						=> 'Centre',
	'LOGO_LEFT'							=> 'Left',
	'LOGO_RIGHT'						=> 'Right',

	'OVERRIDE_COLOUR'					=> 'Override colour',
	'OVERRIDE_COLOUR_EXPLAIN'			=> 'Set a colour for the Site Name and Site Description that will replace the colour defined in the style.',

	'PIXELS'							=> 'px',

	'SEARCH_OPTIONS'					=> 'Search box options',

	'SITE_BACKGROUND'					=> 'Site background',
	'SITE_BACKGROUND_IMAGE'				=> 'Path to the site background',
	'SITE_BACKGROUND_IMAGE_EXPLAIN'		=> 'If you want to use a remote image as the background then enter the full url of the image otherwise, just enter the location of the image.<br /><em>e.g. images/my_background.jpg - or<br />http://a_site.org/new_background.png</em>',

	'SITE_LOGO_EXPLAIN'					=> 'Here you can set the options for a custom site logo to replace the default logo, add a custom banner, use an extended board description or add a background to your board.',
	'SITE_LOGO_BANNER_IMAGE'			=> 'Path to the custom banner',
	'SITE_LOGO_BANNER_IMAGE_EXPLAIN'	=> 'If you want to use a remote image as the banner then enter the full url of the image otherwise, just enter the location of the image.<br /><em>e.g. images/my_banner.jpg - or<br />http://a_site.org/new_banner.png</em>',
	'SITE_LOGO_HEIGHT'					=> 'Logo height',
	'SITE_LOGO_HEIGHT_EXPLAIN'			=> 'Leaving this blank will use the default height.<br /><em>The default logo height is 52px.</em>',
	'SITE_LOGO_IMAGE'					=> 'Path to the custom site logo.',
	'SITE_LOGO_IMAGE_EXPLAIN'			=> 'Leaving this blank will use the default logo.<br />If you want to use a remote image as the logo then enter the full url of the image otherwise, just enter the location of the image.<br /><em>e.g. images/my_logo.jpg - or<br />http://a_site.org/new_logo.png</em>',
	'SITE_LOGO_LEFT'					=> 'Left corners',
	'SITE_LOGO_LEFT_EXPLAIN'			=> 'Round the left side corners to match the banner.',
	'SITE_LOGO_OPTIONS'					=> 'Logo options',
	'SITE_LOGO_PIXELS'					=> 'Logo radius',
	'SITE_LOGO_PIXELS_EXPLAIN'			=> 'Sets the number of pixels for rounding the logo corners.<br /><em>The default for prosilver is 7px.</em>',
	'SITE_LOGO_POSITION'				=> 'Site logo position',
	'SITE_LOGO_REMOVE'					=> 'Remove site logo',
	'SITE_LOGO_REMOVE_EXPLAIN'			=> 'Setting this option will prevent the display the site logo.',
	'SITE_LOGO_RIGHT'					=> 'Right corners',
	'SITE_LOGO_RIGHT_EXPLAIN'			=> 'Round the right side corners to match the banner.',
	'SITE_LOGO_SIZE_EXPLAIN'			=> '<strong>Note: These settings will set the size of the area for the site logo image. The actual image may need to be resized in order to fit this space, otherwise it may not display correctly.</strong>',
	'SITE_LOGO_URL'						=> 'Link for site logo',
	'SITE_LOGO_URL_EXPLAIN'				=> 'The link that the user will go to when they click on the Site Logo, just enter the location of the link.<br /><em>e.g. my_site/my_page.php - or<br />http://a_site.org/my_page.html</em><br /><strong>Leaving this blank will use the board default link.</strong>',
	'SITE_LOGO_WIDTH'					=> 'Logo width',
	'SITE_LOGO_WIDTH_EXPLAIN'			=> 'Leaving this blank will use the default width.<br /><em>The default logo width is 149px.</em>',

	'SITE_NAME_BELOW'					=> 'Site name and description below the logo',
	'SITE_NAME_BELOW_EXPLAIN'			=> 'Move the Site Name and Site Description below the site logo. This will also move the search box onto the top nav bar. The text will be positioned (left/centre/right) the same as the logo.',
	'SITE_NAME_SUPRESS'					=> 'Remove text display',
	'SITE_NAME_SUPRESS_EXPLAIN'			=> 'Setting this option will prevent the Site Name and Site Description from being displayed.',

	'SITE_SEARCH_IN_NAVBAR'				=> 'Move search box to nav bar',
	'SITE_SEARCH_IN_NAVBAR_EXPLAIN'		=> 'Move the search box onto the top navigation bar.<br />This may be required when using the custom banner option.',
	'SITE_SEARCH_REMOVE'				=> 'Remove search box',
	'SITE_SEARCH_REMOVE_EXPLAIN'		=> 'Setting this option will remove the search box from the header panel.',

	'TEXT_OPTIONS'						=> 'Text options',

	'USE_BANNER'						=> 'Use custom banner',
	'USE_BANNER_EXPLAIN'				=> 'Add a custom banner to the top of the board.',
	'USE_EXTENED_SITE_DESC'				=> 'Use extended site description',
	'USE_EXTENED_SITE_DESC_EXPLAIN'		=> 'Replace the standard site description with the extended site description.',
	'USE_OVERRIDE_COLOUR'				=> 'Override default colour',
	'USE_OVERRIDE_COLOUR_EXPLAIN'		=> 'Allow the override colour to be used for the Site Name and Site Description.',
	'USE_SITE_BACKGROUND'				=> 'Use a site background',
	'USE_SITE_BACKGROUND_EXPLAIN'		=> 'Add a picture to become the background of your board.',
));
