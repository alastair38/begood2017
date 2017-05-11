<ul class="share-links columns">
    <li><a href="https://twitter.com/intent/tweet?url=<?php the_field('event_link'); ?>&via=<?php echo get_theme_mod( 'tcx_twitter_handle' );?>&text=<?php the_title(); ?>" title="Share on Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>

    <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_field('event_link'); ?>&title=<?php the_title(); ?>&summary=<?php echo wp_filter_nohtml_kses( $content );?>&source=<?php bloginfo('name'); ?>" title="Share on Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>

	<li><a href="mailto:?subject=I wanted to share this post with you from <?php bloginfo('name'); ?>&body=<?php the_title('','',true); ?>&#32;&#32;<?php the_field('event_link'); ?>" title="Email to a friend/colleague" target="_blank"><i class="fa fa-envelope"></i></a> </li>

    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_field('event_link');?>" title="Share on Facebook" target="_blank"><i class="fa fa-facebook"></i></a> </li>
</ul>
