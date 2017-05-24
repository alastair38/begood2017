<?php

if($post->post_parent ){
?>

<div id="parent-<?php the_ID(); ?>" class="resources-links">

		<h3><a href="<?php the_permalink($post->post_parent); ?>" title="<?php the_title($post->post_parent); ?>"><?php echo get_the_title($post->post_parent); ?></a></h3>

			<?php
			echo get_the_excerpt($post->post_parent);
			?>

</div>
<?php }

$args = array(
	'sort_order' => 'asc',
	'sort_column' => 'menu_order',
	'hierarchical' => 1,
	'exclude' => $post->ID,
	'include' => '',
	'meta_key' => '',
	'meta_value' => '',
	'authors' => '',
	'child_of' => $post->post_parent,
	'parent' => $post->post_parent,
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'page',
	'post_status' => 'publish'
);
$pages = get_pages($args);
foreach ($pages as $page) {
	echo '<div class="resources-links"><h3><a href="' . get_page_link( $page->ID ) .'">' . $page->post_title . '</a></h3><p>' . $page->post_excerpt . '

	</p></div>';
}

?>
