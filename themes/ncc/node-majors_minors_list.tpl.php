<?php
// $Id: node.tpl.php,v 1.4 2008/09/15 08:11:49 johnalbin Exp $
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"><div class="node-inner">

  <?php print $picture; ?>
  <?php if (!$page): ?>
    <h2 class="title">
      <a href="<?php print $node_url; ?>" title="<?php print $title ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>
  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>


  <div class="content">
    <div class="addImages">
	<?php print $field_left_image_rendered?>
	<div class="centerImage"> 
		<?php print $field_center_image_rendered?> 
	</div>
	<?php print $field_right_image_rendered?>
    </div>
    <h1>Majors, Minors & Programs</h1>
  <div id="majors-minors">
	<?php print $field_links_rendered?>
    
  
  </div>
  </div>
  <?php print $links; ?>

</div></div> <!-- /node-inner, /node -->
