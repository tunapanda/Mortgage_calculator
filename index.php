<?php
/*
Plugin Name: Property Check
Plugin URI: https://github.com/tunapanda/Mortgage_calculator
GitHub Plugin URI: https://github.com/tunapanda/Mortgage_calculator
Description: A demo that shows how to split the code into Model, View and Controller.
Version: 0.0.1
*/
require_once 'mortgagecalc.php';

function register_calculator_widget(){

	register_widget('MortgageCalc');

}

add_action('widgets_init','register_calculator_widget');
