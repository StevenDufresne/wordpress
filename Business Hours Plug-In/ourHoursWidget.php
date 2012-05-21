<?php
/*
Plugin Name: Custom Inserts for business hours
Plugin URI: http://defineinteractivedesign.com
Description: Allows users to input customs fields.
Author: Steve Dufresne
Version: 1
Author URI: 
*/
 
 
class ourHours extends WP_Widget
{
  function ourHours()
  {
    $widget_ops = array('classname' => 'ourHours', 'description' => 'Enter your business hours.' );
    $this->WP_Widget('ourHours', 'Our business hours', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance);
    $sun = $instance['sun'];
	$mon = $instance['mon'];
	$tues = $instance['tues'];
	$wed = $instance['wed'];
	$thur = $instance['thur'];
	$fri = $instance['fri'];
	$sat = $instance['sat'];
?>
	<p><label for="<?php echo $this->get_field_id('sun'); ?>">Sunday: <input class="hours" id="<?php echo $this->get_field_id('sun'); ?>" name="<?php echo $this->get_field_name('sun'); ?>" type="text" value="<?php echo attribute_escape($sun); ?>" /></label></p>
	<p><label for="<?php echo $this->get_field_id('mon'); ?>">Monday: <input class="hours" id="<?php echo $this->get_field_id('mon'); ?>" name="<?php echo $this->get_field_name('mon'); ?>" type="text" value="<?php echo attribute_escape($mon ); ?>" /></label></p>
	<p><label for="<?php echo $this->get_field_id('tues'); ?>">Tuesday: <input class="hours" id="<?php echo $this->get_field_id('tues'); ?>" name="<?php echo $this->get_field_name('tues'); ?>" type="text" value="<?php echo attribute_escape($tues ); ?>" /></label></p>
	<p><label for="<?php echo $this->get_field_id('wed'); ?>">Wednesday: <input class="hours" id="<?php echo $this->get_field_id('wed'); ?>" name="<?php echo $this->get_field_name('wed'); ?>" type="text" value="<?php echo attribute_escape($wed ); ?>" /></label></p>
	<p><label for="<?php echo $this->get_field_id('thur'); ?>">Thursday: <input class="hours" id="<?php echo $this->get_field_id('thur'); ?>" name="<?php echo $this->get_field_name('thur'); ?>" type="text" value="<?php echo attribute_escape($thur ); ?>" /></label></p>
	<p><label for="<?php echo $this->get_field_id('fri'); ?>">Friday: <input class="hours" id="<?php echo $this->get_field_id('fri'); ?>" name="<?php echo $this->get_field_name('fri'); ?>" type="text" value="<?php echo attribute_escape($fri ); ?>" /></label></p>
	<p><label for="<?php echo $this->get_field_id('sat'); ?>">Saturday: <input class="hours" id="<?php echo $this->get_field_id('sat'); ?>" name="<?php echo $this->get_field_name('sat'); ?>" type="text" value="<?php echo attribute_escape($sat ); ?>" /></label></p>
	  
  <?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['sun'] = $new_instance['sun'];
	$instance['mon'] = $new_instance['mon'];
	$instance['tues'] = $new_instance['tues'];
	$instance['wed'] = $new_instance['wed'];
	$instance['thur'] = $new_instance['thur'];
	$instance['fri'] = $new_instance['fri'];
	$instance['sat'] = $new_instance['sat'];

    return $instance;
  } 
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $sun = empty($instance['sun']) ? ' ' : apply_filters('widget_title', $instance['sun']);
	$mon= empty($instance['mon']) ? ' ' : apply_filters('widget_title', $instance['mon']);
	$tues = empty($instance['tues']) ? ' ' : apply_filters('widget_title', $instance['tues']);
	$wed= empty($instance['wed']) ? ' ' : apply_filters('widget_title', $instance['wed']);
	$thur = empty($instance['thur']) ? ' ' : apply_filters('widget_title', $instance['thur']);
	$fri= empty($instance['fri']) ? ' ' : apply_filters('widget_title', $instance['fri']);
	$sat= empty($instance['sat']) ? ' ' : apply_filters('widget_title', $instance['sat']);
 
      echo '<p>Sunday: '  . $sun . '</p>',
	 '<p>Monday: '  . $mon . '</p>',
	  '<p> Tuesday: '  . $tues . '</p>',
	     '<p>Wednesday: '  . $wed . '</p>',
	  '<p>Thursday: '  . $thur . '</p>',
	     '<p>Friday: '  . $fri . '</p>',
	  '<p>Saturday: '  . $sat . '</p>';
	
 
    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("ourHours");') );?>