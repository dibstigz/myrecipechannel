<?php

/*

Plugin Name: Landing social

Description: social Section Functionality of MRC Homepage

*/

/* Start Adding Functions Below this Line */

// Creating the widget
class landing_social_widget extends WP_Widget
{

  function __construct()
  {
    parent::__construct(
    // Base ID of your widget
    'landing_social_widget',

    // Widget name will appear in UI
    __('Landing social Widget', 'landing_social_widget'),

    // Widget description
    array( 'description' => __( 'Landing social etc', 'landing_social_widget' ), ));
  }

  // Creating widget front-end
  // This is where the action happens
  public function widget( $args, $instance )
  {
    $title = apply_filters( 'widget_title', $instance['title'] );

  echo '<div style="margin:0px 0px 30px 30px; padding:20px;">';

$loginImage = plugins_url()."/landing-social/assets/social.png";

      echo '<img src="'.$loginImage.'" >';



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
function landing_social_load_widget()
{
	register_widget( 'landing_social_widget' );
}

add_action( 'widgets_init', 'landing_social_load_widget' );


?>
