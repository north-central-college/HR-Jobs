<?php
// $Id: node-webpage.tpl.php,v 1.4 2008/09/15 08:11:49 jccaruso Exp $
?>
<?php if (!$page): ?>
<div class="node">
  <div class="node-teaser"><div class="node-inner">
    <h2 class="title">
    <?php  
    	if ($field_alttitle[0]['value'] == NULL || trim($field_alttitle[0]['value']) == "")
    		echo "<a href=' $node_url' title=' $title' > $title </a>";
    	else
    		echo "<a href=' $node_url' title=' $field_alttitle[0]['value']' > $field_alttitle[0]['value'] </a>";
    ?>
    </h2>
  </div>
</div>
</div>
<?php else: ?>  


<!-- Start webpage generic node -->
<div id="node-<?php print $node->nid; ?>" class="node-type-webpage <?php print $classes; ?>"><div class="node-inner">
  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>
  <div id="navigation-column">
    <!-- <div class="title">
      <?php print l($main_section_title, "node/$main_section_nid");?>
    </div>
    -->
  	<?php print $main_section_links; ?>
  	<?php //TODO: remove this hack for row testing and move to template.php via views function from api ?>
  	<?php if (strpos($relevant_links,'field-item') !== false):?>
  			<!--  <div class="title" id="other-related-links">Related Links</div> -->
    <?php endif;?>
  	<?php print $relevant_links; ?>
  </div>
  <div class="content">
    <h1 class="title">
      <?php 
      if ($field_alttitle[0]['value'] == NULL || trim($field_alttitle[0]['value']) == "") 
      	print $title; 
      else
      	print $field_alttitle[0]['value'];
      
      ?>
    </h1>
    <?php print $content; ?>
  </div>
  <?php if ($terms): ?>
        <!-- <div class="terms terms-inline"><?php print t(' Tagged as ') . $terms; ?></div> -->
  <?php endif; ?>
  <?php print $links; ?>
<?php if (node_access("update", $node->nid)) : ?>
	<div class="admin-node-name-display"><?php print($node->type);?></div>
<?php endif ?> 
</div></div> 
<!-- End webpage generic node -->
<?php endif; ?>