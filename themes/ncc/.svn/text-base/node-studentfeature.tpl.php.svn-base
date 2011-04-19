<?php
// $Id: node.tpl.php,v 1.4 2008/09/15 08:11:49 johnalbin Exp $
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"><div class="node-inner">
  <?php print $picture; ?>
  <?php if (!$page): ?>
    <h2 class="title">
      <a href="<?php print $node_url; ?>" title="<?php print $title ?>"><?php print $title; ?></a>
    </h2>
      <div><?php print $field_mainimage_rendered ?></div>
      <div ><?php print $field_feature_body[0]['safe']; ?></div>

  <?php else: ?>
	  <?php if ($unpublished): ?>
	    <div class="unpublished"><?php print t('Unpublished'); ?></div>
	  <?php endif; ?>
	  <div class="content">
	    <?php print $content; ?>
	  </div>
  <?php endif; ?>
</div></div> 
<!-- /node-inner, /node -->
