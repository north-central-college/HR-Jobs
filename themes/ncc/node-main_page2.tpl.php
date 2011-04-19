
<div class="node">
<div class="node-inner">
  <?php //Teaser section ?>
  <?php if (!$page): ?>
    <h2 class="title">
      <a href="<?php print $node_url; ?>" title="<?php print $title ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>

  <?php //Display if Unpublished ?>
  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

<div class="content">
	<?php 
	//Default Views Embed Code
	/*
	$view = views_get_view('view-name'); //machine readable name of your view
	$myargs = array();
	$display = $view->execute_display('block_1', $myargs);
	print $display['content'];
	*/
	print "taxonomy info:<pre>";
	dsm($node);
	//dsm( $node->taxonomy);//->name;
	$tax = $node->taxonomy;
	foreach($tax as $tag){
		print $tag->name;
		print "<br>";
		print $tag->tid;
	}
	print "</pre><hr>";
	
	$view = views_get_view('sub_menu'); //machine readable name of your view
	$myargs = array();
	$myargs[] = $tag->tid;
	$display = $view->execute_display('block_1',$myargs);
	//dsm($display);
	print $display['content'];
	

	
	?>
</div>

  <div class="content">
    <?php print $content; ?>
  </div>


</div> <!-- /node-inner -->
</div> <!-- /node -->
