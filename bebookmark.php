<?php
/*
Plugin Name: Bebookbark
Plugin URI: http://birkalem.com/ilk-wordpress-eklentim-kullanimda
Description: Wordpress plugin for adding bookmark.
Version: 1.2
Author:  Yasarzade
Author URI: http://birkalem.com
*/
function display_bebookmark($cssid = "social") {
global $post;
?>
<link rel='stylesheet' href='<?echo get_bloginfo('url')?>/wp-content/plugins/bebookmark/style.css' type='text/css' media='all' />

		<div id="social">
						<h3>Share It</h3>
						<ul>
							<li class="digg"><a href="http://digg.com/submit?url=<?php the_permalink() ?>&amp;title=<?php the_title(); ?>" title="Share <?php the_title(); ?> on Digg" rel="nofollow">Digg.com</a></li>
							<li class="beamark"><a href="javascript:location.href='http://beamark.com/members/addBookmark.php?url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title)" title="Share <?php the_title(); ?> on Beamark" rel="nofollow">BeaMark.com</a></li>
							<li class="technorati"><a href="http://technorati.com/ping/?url=<?php the_permalink() ?>" title="Share <?php the_title(); ?> on Technorati" rel="nofollow">Technorati</a></li>
							<li class="delicious"><a href="http://delicious.com/save?url=<?php the_permalink() ?>&amp;title=<?php the_title(); ?>" title="Share <?php the_title(); ?> on Delicious" rel="nofollow">del.icio.us</a></li>
							<li class="facebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink() ?>" title="Share <?php the_title(); ?> on Facebook" rel="nofollow">Facebook.com</a></li>
							<li class="stumbleupon"><a href="http://www.stumbleupon.com/submit?url=<?php the_permalink() ?>&amp;title=<?php the_title(); ?>" title="Share <?php the_title(); ?> on Stumbleupon" rel="nofollow">StumbleUpon</a></li>
							<li class="reddit"><a href="http://www.reddit.com/submit?url=<?php the_permalink() ?>" title="Share <?php the_title(); ?> on Reddit" rel="nofollow">reddit.com</a></li>
						</ul>
					</div>
<?php
}
?>