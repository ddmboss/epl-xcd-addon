<?php
/**
 * Plugin Name: EPL Eastern Caribbean Dollar Add-on
 * Plugin URI: https://github.com/ddmboss/epl-xcd-addon
 * Description: Adds the Eastern Caribbean Dollar currency to the Easy Property Listings plugin
 * Version: 1.0.1
 * Author: ddmboss designs
 * Author URI: https://www.ddmbossdesigns.com/
 * License: GPL3
 * Last Updated: 1st August 2018
 */

 // Add currency Eastern Caribbean Dollar "XCD"
function epl_xcd_currency_addon( $currencies ) {
	$currencies['XCD'] = __('Eastern Caribbean Dollar (&#36;)', 'epl_xcd');

	return $currencies;
}
add_filter('epl_get_currencies', 'epl_xcd_currency_addon');

?>
