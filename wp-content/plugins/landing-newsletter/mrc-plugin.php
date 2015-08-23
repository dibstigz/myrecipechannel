<?php

/*

Plugin Name: Landing newsletter

Description: newsletter Section Functionality of MRC Homepage

*/

/* Start Adding Functions Below this Line */

// Creating the widget
class landing_newsletter_widget extends WP_Widget
{

  function __construct()
  {
    parent::__construct(
    // Base ID of your widget
    'landing_newsletter_widget',

    // Widget name will appear in UI
    __('Landing newsletter Widget', 'landing_newsletter_widget'),

    // Widget description
    array( 'description' => __( 'Landing newsletter etc', 'landing_newsletter_widget' ), ));
  }

  // Creating widget front-end
  // This is where the action happens
  public function widget( $args, $instance )
  {
    $title = apply_filters( 'widget_title', $instance['title'] );

    echo '<div style="margin:0px 0px 20px 50px; padding:20px;width:210px;height:275px; border:1px solid #ebebeb;">';

      $topImage = plugins_url()."/landing-newsletter/assets/spoon.png";
      $submitImage = plugins_url()."/landing-newsletter/assets/signup.png";

      echo '<img src="'.$topImage.'" >';

      echo '<h3 style="font-family:ArcherLight;font-size:23px;margin-top:20px;">';
        echo 'Signup to the My Recipe Channel Newsletter & Win!';
      echo '</h3>';

      echo '<p style="line-height:24px;">';
        echo 'Get the weekly newsletter by clicking below.';
      echo '</p>';

      echo '<img src="'.$submitImage.'" >';

    echo '</div>';
  }

  // Widget Backend
  public function form( $instance )
  {
    if ( isset( $instance[ 'title' ] ) )
    {
      $title = $instance[ 'title' ];
    }
    else
    {
      $title = __( 'New title', 'wpb_widget_domain' );
    }
    // Widget admin form
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php
  }

  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance )
  {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
  }
}

// Register and load the widget
function landing_newsletter_load_widget()
{
	register_widget( 'landing_newsletter_widget' );
}

add_action( 'widgets_init', 'landing_newsletter_load_widget' );


?>
