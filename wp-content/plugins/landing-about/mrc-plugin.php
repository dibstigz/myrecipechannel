<?php

/*

Plugin Name: Landing About

Description: About Section Functionality of MRC Homepage

*/

/* Start Adding Functions Below this Line */

// Creating the widget
class landing_about_widget extends WP_Widget
{

  function __construct()
  {
    parent::__construct(
    // Base ID of your widget
    'landing_about_widget',

    // Widget name will appear in UI
    __('Landing About Widget', 'landing_about_widget'),

    // Widget description
    array( 'description' => __( 'Landing About etc', 'landing_about_widget' ), ));
  }

  // Creating widget front-end
  // This is where the action happens
  public function widget( $args, $instance )
  {
    $title = apply_filters( 'widget_title', $instance['title'] );

    echo '<div style="margin:0px 0px 20px 50px; padding:0px;width:250px; height:325px; border:1px solid #ebebeb;">';

      echo '<div style="background-color:#ebebeb;text-align:center;height:40px;padding-top:10px;">';
        echo '<h3 style="font-family:ArcherLight;font-size:23px;margin">About Us</h3>';
      echo '</div>';

      echo '<div style="padding:20px;">';

        echo '<p style="line-height:24px;">';
          echo 'My Recipe Channel is an online foodie hub.
                We hand-pick recipes from our favourite bloggers and youtubers to inspire people to cook beautiful,
                simple and healthy food. Each month we get our Guest Cooks to help select new creators to appear on MRC.';
        echo '</p>';

        echo '<a style="color:#fba131; text-decoration:underline;" href="index.php/about">Find out about our story</a>';

      echo '</div>';

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
function landing_about_load_widget()
{
	register_widget( 'landing_about_widget' );
}

add_action( 'widgets_init', 'landing_about_load_widget' );


?>
