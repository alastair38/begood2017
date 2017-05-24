
<?php // delete_field('details_of_meetings', 834);

//this code gets json file from remote url - in this case it is a single resource post type object
//after decoding, we loop through the acf - details_of_meetings nested array and output each field as required
//this will replicate what is on the forthcoming meetings page of the begood site
//NOTE: this may need to be served from https to overcome security issues.





$json = file_get_contents('http://www.memoryfriendy.dev/wp-json/wp/v2/resources/');

$items = json_decode($json);
//$id = $items->parent; //

foreach ($items as $item) {
			$acf = $item->acf;
			$title = $item->title;
	//var_dump($title);
	for ($i = 0, $l = count($title); $i < $l; $i++ ) {
		$my_post = array(
	'post_title'	=> $title->rendered,
	'post_type'		=> 'post',
	'post_status'	=> 'publish'
);


// insert the post into the database
$post_id = wp_insert_post( $my_post );

		//echo '<p>' . $acf->meeting_date . '</p>';
		echo '<p>' . $title->rendered . '</p>';
	}
}

// foreach ($items as $item) {
//
// 		 $item = $item->details_of_meetings;
//
// 		 if($item){
// 		 for ($i = 0, $l = count($item); $i < $l; $i++ ) {
//             echo '<div class="resources-links"><h3>' . $item[$i]->upcoming_meeting_title . '</h3>
// 						<label><i class="fa fa-calendar"></i> ' . $item[$i]->upcoming_meeting_date . ' at ' . $item[$i]->upcoming_meeting_address . '</label>
// 						<p>' . $item[$i]->upcoming_meeting_description . '<img src="' . $item[$i]->upcoming_meeting_image .  '"></p>
// 						<p>Contact for more information</p>';
//
//
//             echo '</div>';
//
// 						//NOTE: within this loop it should also be possible to add these to acf repeater fields at the receiving end
// 						//NOTE: we would have to call delete_field('details_of_meetings' $post_id) prior to the loop
// 						// $row = array(
// 						// 	'upcoming_meeting_title'	=> $item[$i]->upcoming_meeting_title,
// 						// 	'upcoming_meeting_date'	=> $item[$i]->upcoming_meeting_date,
// 						// 	'upcoming_meeting_image'	=> $item[$i]->upcoming_meeting_image,
// 						// 	'upcoming_meeting_address' => $item[$i]->upcoming_meeting_address,
// 						// 	'upcoming_meeting_description' => $item[$i]->upcoming_meeting_description,
// 						// 	'upcoming_meeting_contact' => $item[$i]->upcoming_meeting_contact,
// 						// );
// 						//
// 						// add_row('details_of_meetings', $row, $post_id);
//         }
// 			} else {
//
// 			}
//  		}

?>
	<footer class="article-footer">
<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>

	</footer> <!-- end article footer -->


</article> <!-- end article -->
