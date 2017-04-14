<?php



/**

*

*/

class MortgageCalc extends WP_Widget

{

public function __construct() {

  parent::WP_Widget(

    'calculator',

    //title of the widget in the WP dashboard
    __('Mortgage'),

    array('description'=>'Wraps whatever you type in with code.', 'class'=>'register_calculator_widget')

  );

}



/**

 *

 * @param type $instance

 */

public function form($instance)

{
  // these are the default widget values
  $default = array(

    'title' => __(''),
    "testing" =>__("")
      );

  $instance = wp_parse_args( (array)$instance, $default );

  //this is the html for the fields in the wp dashboard
  echo "\r\n";

  echo "<p>";

  echo "<label for='".$this->get_field_id('title')."'>" . __('Title') . ":</label> " ;

  echo "<input type='text' class='widefat' id='".$this->get_field_id('title')."' name='".$this->get_field_name('title')."' value='" . esc_attr($instance['title'] ) . "' />" ;

  echo "</p>";

  echo "<p>";

  echo "<label for='".$this->get_field_id('testing')."'>" . __('What do you want wrapped?') . ":</label> " ;

  echo "<input type='text' class='widefat' id='".$this->get_field_id('testing')."' name='".$this->get_field_name('testing')."' value='" . esc_attr( $instance['testing'] ) . "' placeholder='This shows up as a watermark in the field.' />" ;

  echo "</p>";
}
public function update($new_instance, $old_instance){

  $instance = $old_instance;

  $instance['title'] = strip_tags($new_instance['title']);
  $instance['testing'] = $new_instance['testing'];
  return $instance;

}

public function widget($args, $instance){

  extract($args, EXTR_SKIP);

  //global WP theme-driven "before widget" code
  echo $before_widget;

  // code before your user input
  echo '<div class="your-class"><!--Your custom html code goes here!-->';

  echo $instance['testing'];

  // code after your user input
  echo '</div>';

  //global WP theme-driven "after widget" code
  echo $after_widget;
}

}
