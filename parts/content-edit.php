<?php if ( is_user_logged_in())
{?>
<div class="fixed-action-btn horizontal click-to-toggle show-for-medium" style="bottom: 45px; right: 24px;">
	<a class="btn-floating btn-large waves-effect waves-circle red ">
		<i class="fa fa-pencil"></i>
	</a>
	<ul>
      <?php echo '<li class="red waves-effect"><a href="' . admin_url() . 'post-new.php">Add Blog Post</a></li>
			<li class="red waves-effect"><a href="' . admin_url() . 'post-new.php?post_type=resources">Add Resource</a></li>
			<li class="red waves-effect"><a href="' . admin_url() . 'post-new.php?post_type=news">Add News/Event</a></li>';
			?>
  </ul>
</div>
<?php }?>
