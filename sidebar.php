<div id="sidebar1" class="sidebar large-4 medium-4 columns">

	<?php
	global $post;

if ( has_post_thumbnail()  &&  is_single() || is_page_template( 'page-researchers.php' ) || is_page('contact') && has_post_thumbnail() ) {
	the_post_thumbnail('large');
}
 	$children = get_pages( array( 'child_of' => $post->ID ) );
	//check if we're using the projects page template and that this is a parent page. If so, loop through child pages
	if ( is_page_template( 'page-projects.php' ) && $post->post_parent ) {
		 get_template_part( 'parts/loop', 'child-pages' );

	//check if we're on a general page, whether it has child pages and it's not a YPAG Blog page. If so, loop through child pages
} else if ( is_page()  && count( $children ) > 0 && !is_page_template( 'page-ypag.php') ) {
	get_template_part( 'parts/loop', 'child-pages' );

	//check if we're a single resource page and that this is not the previous meetings resource page. If so, loop through any children
}  else if ( is_singular('resources') && !is_page_template( 'previous-meetings.php') ) {
	get_template_part( 'parts/loop', 'child-resources' );

	//also check for a parent page and link to this if true
	if($post->post_parent ){
	?>
	<div class="resources-links">

			<h3><a href="<?php the_permalink($post->post_parent); ?>" title="<?php echo get_the_title($post->post_parent); ?>"><?php echo get_the_title($post->post_parent); ?></a></h3>
			<?php
			echo '<p class="resources_desc">' . get_the_excerpt($post->post_parent) .'</p>';
			?>
	</div>
<?php }

	//check if we're on a YPAG Blog page.
} else if ( is_page_template( 'page-ypag.php') ) {

	//if above condition true, check for a parent page and link to this


	get_template_part( 'parts/loop', 'siblings' );

//check if we're on a project page.
} else if ( is_page_template( 'page-projects.php' ) ) {

//if true, get the list of project staff
	$post_objects = get_field('project_staff');

	if( $post_objects ) {

	    		foreach( $post_objects as $post_object): ?>
	        	<div class="researcher-links">
	            <h3><a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a></h3>
							<?php
								echo get_the_post_thumbnail($post_object->ID, array(100, 100), array( 'class' => 'large-4 show-for-large columns' ));

							?>
							<div class="researcher_desc">
								<?php
								the_field('project_description', $post_object->ID);
								?>
							</div>

	        </div>
	    <?php endforeach;
		} else {
				get_template_part( 'parts/loop', 'posts' );
			}
//check if we're on the main BeGOOD blog page or a tag archive page.
} else if ( is_home() || is_tag()) {

$tags = get_tags();
$html = '<div class="columns"><div class="latest_posts"><h3 class="h5">Blog Categories</h3>';
foreach ( $tags as $tag ) {
$tag_link = get_tag_link( $tag->term_id );
$tag_name = esc_attr($tag->name);

$html .= "<div><a href='{$tag_link}' title='View all content assigned to {$tag_name}' class='{$tag->slug}'>";
$html .= "{$tag->name}</a> <span>[{$tag->count}]</span></div>";
}
$html .= '</div></div>';
echo $html;
//check if we're on the a news archive page, an individual news page or a content_type archive page.
} else if ( is_post_type_archive('news') || is_singular('news') || is_tax('content_type') ) {

echo '<div class="columns">';

	$terms = get_terms('content_type');
	$html = '<div class="latest_posts"><h3 class="h5">Filter News/Events</h3>';
	foreach ( $terms as $term ) {
	$tag_link = get_tag_link( $term->term_id );

	$html .= "<div><a href='{$tag_link}' title='View all content assigned to {$term->name}' class='{$term->slug}'>";
	$html .= "{$term->name}</a> <span>[{$term->count}]</span></div>";
	}
	$html .= '</div>';
	echo $html;
	echo '</div>';

//check if we're on the a resources archive page, an individual resource page or a resource_cat archive page.
}  else if ( is_post_type_archive('resources') || is_singular('resources') || is_tax('resource_cat')) {

	echo '<div class="columns">';
	$terms = get_terms('resource_cat');
	$html = '<div class="latest_posts"><h3 class="h5">Filter Resources</h3>';
	foreach ( $terms as $term ) {
	$tag_link = get_tag_link( $term->term_id );

	$html .= "<div><a href='{$tag_link}' title='View all content assigned to {$term->name}' class='{$term->slug}'>";
	$html .= "{$term->name}</a> <span>[{$term->count}]</span></div>";
	}
	$html .= '</div>';
	echo $html;
	echo '</div>';
//check if we're on an author poage
} else if (is_author()) {
	get_template_part( 'parts/loop', 'researcher-links' );
} else {
	get_template_part( 'parts/loop', 'siblings' );
}?>

</div>
