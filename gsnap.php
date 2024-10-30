<?php
/*
Plugin Name: Live Blog
Plugin URI: http://gsnap.com
Description: Used by thousands of live bloggers, G-Snap! is the best way for you to live blog your event.  To get started: 1) Click the "Activate" link to the left of this description, 2) Sign up at http://gsnap.com and create your live event (take note of the ID in the browser bar, you'll need that).  3) Start a new post on your blog and add the shortcode using the ID you took note of: [snaplet id="1234" width="350" height="550"].  That's it!  Once you publish your post, your viewers will be able to see your live blog.  Be sure to stay on gsnap.com to provide updates and manage your event!
Version: 1.0.0
Author: G-Snap!
Author URI: http://gsnap.com
License: GPL2
*/

require_once ('embed-code.php');

function snaplet_func ($atts)
{
   extract (shortcode_atts (array ('id' => null, 'width' => 350, 'height' => 550), $atts));

   $html = embed_code ($width, $height, 'http://gsnap.com', $id);
   
   return $html;
}

add_shortcode ('snaplet', 'snaplet_func');
?>
