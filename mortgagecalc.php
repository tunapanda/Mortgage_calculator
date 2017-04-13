<?php
/*
Plugin Name: Property Check
Plugin URI: https://github.com/tunapanda/Mortgage_calculator
GitHub Plugin URI: https://github.com/tunapanda/Mortgage_calculator
Description: A demo that shows how to split the code into Model, View and Controller.
Version: 0.0.1
*/

class MortgageCalc extends WP_Widget{

  function __construct(){
    parent::WP_Widget(false, $name = __('MortgageCalculator', 'wp_widget_plugin') );

  }


  function Calc($instance){
    $default = array(
      'title' =>__(''),
      'calculator' =>__(''),
    );

    $instance = wp_parse_args( (array)$instance, $default );
    		echo "\r\n";
    		echo "<p>";
    		echo "<label for='".$this->get_field_id('title')."'>" . __('Title') . ":</label> " ;
    		echo "<input type='text' class='widefat' id='".$this->get_field_id('title')."'
            name='".$this->get_field_name('title')."' value='" . esc_attr($instance['title'] ) . "' />" ;

        echo "<p>";
        echo "<label for='".$this->get_field_id('calculator')."'>" . __('Calculator') . ":</label> " ;
        echo "<input type='text' class='widefat' id='".$this->get_field_id('calculator')."'
          name='".$this->get_field_name('calculator')."' value='" . esc_attr($instance['calculator'] ) . "' />" ;
  }
function update($new_instance, $old_instance){
    $instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['calculator'] = $new_instance['calculator'];
		return $instance;

}
public function widget($args, $instance){

  extract($args, EXTR_SKIP);

  //global WP theme-driven "before widget" code
  echo $before_widget;

  // code before your user input
  echo '<div class="your-class"><!--Your custom html code goes here!-->';

  echo $instance['code'];

  // code after your user input
  echo '</div>';

  //global WP theme-driven "after widget" code
  echo $after_widget;
}

}


add_action('widgets_init', create_function('', 'return register_widget("MortgageCalc");'));
