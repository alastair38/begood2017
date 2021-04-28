<article id="post-<?php the_ID(); ?>" class="" role="article" itemscope itemtype="http://schema.org/WebPage">


	<header class="article-headercolumns">

		<h1 class="page-title"><?php the_field('header_message_text'); ?></h1>

		<div id="bar1">
			<?php the_post_thumbnail('medium');?>
		</div>
	</header>


    <div class="entry-content">

			<?php
			echo '<p id="request-msg">' . get_field('pre_form_text') . '</p>';

	    echo do_shortcode( ' [ninja_form id="' . get_field('form_id') . '"] ' );


			echo '<p id="post-form">' . get_field('post_form_text') . '</p>';

			?>


<?php


// check if the repeater field has rows of data
if( have_rows('more_information') ):

		echo '<ul id="info-links">';
 	// loop through the rows of data
    while ( have_rows('more_information') ) : the_row();
		$link = get_sub_field('info_links');

		echo '<li><a href="' . $link['url'] . '">' . $link['title'] . '</a></li>';

    endwhile;

		echo '</ul>';

else :

    // no rows found

endif;

	echo '<div id="content-block">';
		the_content();
	echo '</div>';

$show_rating = get_field('show_average_rating');

if($show_rating) {

	$form_id = get_field('form_id');
	$submissions = Ninja_Forms()->form( $form_id )->get_subs();
	$field_id = get_field('submission_field_number');
	$count_subs = count($submissions);

	if($count_subs > 0) {
		foreach ($submissions as $submission) {
			$fields = $submission->get_field_values();#
			$int = (int)$fields['_field_' . $field_id . ''];
			$sum+= $int;
		}

		echo '<div id="average_rating"><span id="rating">' . $sum/$count_subs . '</span><span id="text">Average Rating</span></div>';
	}

}

			 ?>

			<script>
//
// 			jQuery(document).ready(function() {
//
// 	var firstName = jQuery('#nf-label-field-9-0');
//
// 	firstName.hover( function() {
// 				 if(jQuery(this).hasClass('highlight') === false) {
// 						 jQuery(this).addClass('highlight');
// 					}
// 			},
// 			function()  {
// 						jQuery(this).removeClass('highlight');
// 						}
// 		);
// });
//
// 			jQuery(document).ready(function() {
//
//
//
// 				jQuery( "label" ).hover(function() {
// 				  jQuery( this ).prev().attr('checked','checked');
//
// 				});
//
//
//
// 			});
		window.onload = function(){
			// var inputs = document.getElementsByTagName('LABEL');
			// [].forEach.call(inputs, function(el){
			//     el.addEventListener('mouseenter',function(){
			//         this.click;
			// 				var prev = this.previousSibling;
			// 				prev.previousSibling.checked = true;
			// 				console.log(prev.previousSibling);
			//     });
			// });



elms = document.getElementsByName('nf-field-5');
//submit = document.getElementById('nf-field-6');
//request = document.getElementById('request-msg');

  for( var i = 0; i < elms.length; i++){
		val = 5 - i;
		elms[i].value = val.toString();

    // elms[ i ].addEventListener( 'click', function(){
		// 	console.log(this.val);
		// 	if(submit.classList.contains('show')) {
		//
		// 	} else {
		// 		submit.classList.add("show");
		// 	}
    //  })
  }

}


			</script>
	</div>

</article>
