<?php

/*

Plugin Name: Landing Login

Description: Login Section Functionality of MRC Homepage

*/

/* Start Adding Functions Below this Line */

// Creating the widget
class landing_login_widget extends WP_Widget
{

  function __construct()
  {
    parent::__construct(
    // Base ID of your widget
    'landing_login_widget',

    // Widget name will appear in UI
    __('Landing login Widget', 'landing_login_widget'),

    // Widget description
    array( 'description' => __( 'Landing login etc', 'landing_login_widget' ), ));
  }

  // Creating widget front-end
  // This is where the action happens
  public function widget( $args, $instance )
  {
    $title = apply_filters( 'widget_title', $instance['title'] );

    echo '<div style="margin:0px 0px 30px 50px; padding:20px;width:210px; height:140px; border:1px solid #ebebeb;">';

      echo '<h3 style="font-family:ArcherLight;font-size:23px;">Login</h3>';

      echo '<p style="line-height:24px;">';
        echo 'Login to My Recipe Channel to access your personal recipe books.';
      echo '</p>';

      $loginImage = plugins_url()."/landing-login/assets/login.png";
      $registerImage = plugins_url()."/landing-login/assets/register.png";

      echo '<ul>';
        echo '<li style="display:inline;"><a href=""><img src="'.$loginImage.'" alt="" /></a></li>';
        echo '<li style="display:inline;margin-left:10px;"><a href=""><img src="'.$registerImage.'" alt="" /></a></li>';
      echo '</ul>';

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
function landing_login_load_widget()
{
	register_widget( 'landing_login_widget' );
}

add_action( 'widgets_init', 'landing_login_load_widget' );


?>
