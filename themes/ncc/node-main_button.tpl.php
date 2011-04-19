<?php
// $Id: node.tpl.php,v 1.4 2008/09/15 08:11:49 johnalbin Exp $
?>
<?php 
	  //This pages does not show the button at all in teaser mode. 
      //Did this as we should never need to see a teaser of the button, and so it wont show up in taxonomy lists 
?>
<?php if ($page): ?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"><div class="node-inner">
 	<?php if ($unpublished): ?>
    	<div class="unpublished"><?php print t('Unpublished'); ?></div>
  	<?php endif; ?>
    <div class="content"><?php print $content; ?></div>  
</div></div> <!-- /node-inner, /node -->
<?php endif; ?>