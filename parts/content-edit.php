<?php if ( is_user_logged_in())
{?>
<div class="fixed-action-btn vertical click-to-toggle show-for-medium" style="bottom: 45px; right: 24px;">
	<a class="btn-floating btn-large waves-effect waves-circle red ">
		<i class="fa fa-sliders" aria-hidden="true"></i>
	</a>
	<ul>
      <?php echo '<li class="btn-floating green tooltipped" data-position="left" data-delay="50" data-tooltip="Add blog post"><a href="' . admin_url() . 'post-new.php"><i class="fa fa-pencil" aria-hidden="true"></i>
</a></li>
			<li class="btn-floating yellow darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Add resource"><a href="' . admin_url() . 'post-new.php?post_type=resources"><i class="fa fa-book" aria-hidden="true"></i></a></li>
			<li class="btn-floating grey darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Add news/event"><a href="' . admin_url() . 'post-new.php?post_type=news"><i class="fa fa-newspaper-o" aria-hidden="true"></i></a></li>
			<li class="btn-floating tooltipped" data-position="left" data-delay="50" data-tooltip="Add a new page"><a href="' . admin_url() . 'post-new.php?post_type=page"><i class="fa fa-file-text" aria-hidden="true"></i></a></li>
			<li class="btn-floating black tooltipped" data-position="left" data-delay="50" data-tooltip="Main Admin"><a href="' . admin_url() . '"><i class="fa fa-cog" aria-hidden="true"></i></a></li>'
			;
			?>
  </ul>
</div>
<?php }?>
