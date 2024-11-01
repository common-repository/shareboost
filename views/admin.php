<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Shareboost
 * @author    Ron Reiter <ron@shareboost.com>
 * @license   GPL-2.0+
 * @link      http://www.shareboost.com
 * @copyright 2013 Shareboost
 */

	if ($_POST["title"]) {
	    $params = array(
	    	"title", 
	    	"share-facebook", 
	    	"share-tweet",
		    "share-pinterest",
		    "share-linkedin",
		    "share-gplus",
		    "share-email",
		    "color",
		    "position",
		    "sharing",
		    "effect",
	    	);
	    foreach ($params as $param) {
			update_option("sb-" . $param, stripslashes($_POST[$param]));
	    }
	}

	$title = get_option("sb-title", "Share '<TITLE>' with your friends:");
	$color = get_option("sb-color", "orange");
    $position = get_option("sb-position", "right");
    $sharing = get_option("sb-sharing", "use-existing");
    $effect = get_option("sb-effect", "popup-arrow");

	$share_facebook_checked = get_option("sb-share-facebook", "on") == "on" ? "checked" : "";
	$share_tweet_checked = get_option("sb-share-tweet", "on") == "on" ? "checked" : "";
	$share_pinterest_checked = get_option("sb-share-pinterest", "on") == "on" ? "checked" : "";
	$share_linkedin_checked = get_option("sb-share-linkedin", "on") == "on" ? "checked" : "";
	$share_gplus_checked = get_option("sb-share-gplus", "on") == "on" ? "checked" : "";
	$share_email_checked = get_option("sb-share-email", "on") == "on" ? "checked" : "";

	$color_orange = $color == "orange" ? "checked" : "";
	$color_white = $color == "white" ? "checked" : "";
	$color_green = $color == "green" ? "checked" : "";
	$color_black = $color == "black" ? "checked" : "";
	$color_blue = $color == "blue" ? "checked" : "";

	$position_left = $position == "left" ? "checked" : "";
	$position_center = $position == "center" ? "checked" : "";
	$position_right = $position == "right" ? "checked" : "";

	$sharing_use_existing = $sharing == "use-existing" ? "checked" : "";
	$sharing_current_page = $sharing == "current-page" ? "checked" : "";

	$effect_always_on = $effect == "always-on" ? "checked" : "";
	$effect_popup = $effect == "popup" ? "checked" : "";
	$effect_popup_arrow = $effect == "popup-arrow" ? "checked" : "";


?>
<div class="wrap">

	<?php screen_icon(); ?>
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<form method="post">

	<div class="row" style="margin-bottom: 20px">
		<div class="span8">
			<h4>Title</h4>
			<input type="text" name="title" class="input-xxlarge" value="<?php echo $title ?>" placeholder="Enter a title for the share box..."/>
		</div>
	</div>
	<div class="row" style="margin-bottom: 20px">

		<div class="span2">
			<h4>Buttons</h4>

			<label class="checkbox">
				<input type="checkbox" name="share-facebook" <?php echo $share_facebook_checked?>> <div class="icon-facebook-sign"></div> Facebook
			</label>
			<label class="checkbox">
				<input type="checkbox" name="share-tweet" <?php echo $share_tweet_checked?>> <div class="icon-twitter-sign"></div> Twitter
			</label>
		</div>
		<div class="span2">
			<h4 class="alignment-filler">&nbsp;</h4>
			<label class="checkbox">
				<input type="checkbox" name="share-pinterest" <?php echo $share_pinterest_checked?>> <div class="icon-pinterest-sign"></div> Pinterest
			</label>
			<label class="checkbox">
				<input type="checkbox" name="share-linkedin" <?php echo $share_linkedin_checked?>> <div class="icon-linkedin-sign"></div> LinkedIn
			</label>
		</div>
		<div class="span2">
			<h4 class="alignment-filler">&nbsp;</h4>
			<label class="checkbox">
				<input type="checkbox" name="share-gplus" <?php echo $share_gplus_checked?>> <div class="icon-google-plus-sign"></div> Google+
			</label>
			<label class="checkbox">
				<input type="checkbox" name="share-email" <?php echo $share_email_checked?>> <div class="icon-envelope-alt"></div> E-Mail
			</label>
		</div>
	</div>

	<div class="row" style="margin-bottom: 20px">
		<div class="span2">
			<h4>Color</h4>

			<label class="radio">
				<input type="radio" name="color" value="orange" <?php echo $color_orange?>><i class="icon-stop" style="color: #FFCC37"></i> Orange
			</label>
			<label class="radio">
				<input type="radio" name="color" value="white" <?php echo $color_white?>><i class="icon-stop" style="color: #f5f5f5"></i>  White
			</label>
			<label class="radio">
				<input type="radio" name="color" value="green" <?php echo $color_green?>> <i class="icon-stop" style="color: #BDF74D"></i>  Green
			</label>
		</div>
		<div class="span2">
			<h4 class="alignment-filler">&nbsp;</h4>
			<label class="radio">
				<input type="radio" name="color" value="black" <?php echo $color_black?>> <i class="icon-stop" style="color: #333333"></i>  Black
			</label>
			<label class="radio">
				<input type="radio" name="color" value="blue" <?php echo $color_blue?>> <i class="icon-stop" style="color: #61ACF8"></i>  Blue
			</label>
		</div>


		<div class="span4">
			<h4>Widget Position</h4>

			<label class="radio">
				<input type="radio" name="position" value="left" <?php echo $position_left?>><i class="icon-circle-arrow-left"></i> Left
			</label>
			<label class="radio">
				<input type="radio" name="position" value="center" <?php echo $position_center?>><i class="icon-circle-arrow-down"></i> Center
			</label>
			<label class="radio">
				<input type="radio" name="position" value="right" <?php echo $position_right?>><i class="icon-circle-arrow-right"></i> Right
			</label>
		</div>

	</div>

	<div class="row" style="margin-bottom: 20px">
		<div class="span8">
			<h4>Sharing</h4>

			<label class="radio">
				<input type="radio" name="sharing" value="use-existing" <?php echo $sharing_use_existing?>><i class="icon-plus-sign-alt"></i> Use the sharing information of my existing social widgets (if possible)
			</label>
			<label class="radio">
				<input type="radio" name="sharing" value="current-page" <?php echo $sharing_current_page?>><i class="icon-globe"></i> Always use the current page
			</label>
		</div>
	</div>
	<div class="row" style="margin-bottom: 20px">
		<div class="span8">
			<h4>Effect</h4>

			<label class="radio">
				<input type="radio" name="effect" value="always-on" <?php echo $effect_always_on?>><i class="icon-off"></i> Always on
			</label>
			<label class="radio">
				<input type="radio" name="effect" value="popup" <?php echo $effect_popup?>><i class="icon-comment"></i> Pop up in the middle of the page only
			</label>
			<label class="radio">
				<input type="radio" name="effect" value="popup-arrow" <?php echo $effect_popup_arrow?>><i class="icon-mail-forward"></i> Pop up in the middle of the page, and point an arrow to the bar
			</label>
		</div>
	</div>

	<button class="btn btn-primary btn-large" type="submit"/>Save Settings</button>

	</form>

</div>
