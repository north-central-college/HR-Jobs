<?php
// $Id: node.tpl.php,v 1.4 2008/09/15 08:11:49 johnalbin Exp $
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"><div class="node-inner">
<?php print $picture; ?>
<?php if (!$page): ?>
    <h2 class="title">
      <a href="<?php print $node_url; ?>" title="<?php print $title ?>"><?php print $title; ?></a>
    </h2>
<?php else: ?> 
  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>
  <h1 class="title"><?php print $title; ?></h1>
  <div class="content">
    <?php print $content; ?>
  </div>
      <?php if ($terms): ?>
        <div class="terms "><?php print t('Posted in:') . $terms; ?></div>
      <?php endif; ?>
   <?php print t('!date', array('!date' => format_date($node->created, 'custom', 'd/m/Y'))); ?>
   <br/>
  <?php print $links; ?>
<?php endif; ?>
<?php if (node_access("update", $node->nid)) : ?>
	<div class="admin-node-name-display"><?php print($node->type);?></div>
<?php endif ?> 
</div></div> <!-- /node-inner, /node -->
