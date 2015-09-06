<?php
/**
 * Search Form Template
 *
 * The search form template displays the search form.
 *
 * @package BeeeTube
 * @subpackage Template
 *  1.0
 */
?>

<div id="searchContainer">
	<form method="get" class="" action="<?php echo home_url(); ?>/">

		<div class="">
			<input type="text" name="s" id="textEntry"  value="" placeholder="<?php _e('Enter Your Search Term Here', 'jtheme') ?>" />
		</div>

		<div class="">
			<input type="submit" id="searchRecipe"  value="" />
		</div>

	</form>
	<!--end #searchform-->
</div>
