<?php
/*
Plugin Name: Fraction to percent calculator by Calculator.iO
Plugin URI: https://www.calculator.io/fraction-to-percent-calculator/
Description: Fraction to percent calculator converts proper and improper fractions to percentages. Calculator is using fraction-decimal-percent algorithm.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_fraction_to_percent_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Fraction to percent calculator by Calculator.iO";

function display_ci_fraction_to_percent_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/fraction-to-percent-calculator/" target="_blank"><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48"></a> Fraction to percent calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_fraction_to_percent_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_fraction_to_percent_calculator', 'display_ci_fraction_to_percent_calculator' );