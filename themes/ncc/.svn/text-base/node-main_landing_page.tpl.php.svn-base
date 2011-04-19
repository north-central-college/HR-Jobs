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
    <div class="picwindow">
	<?php print $field_left_image_rendered?>
	<?php print $field_center_image_rendered?> 
	<?php print $field_right_image_rendered?>
    </div>
	<div id="specialLinks">
	  	<div class="column-1-3">
			<?php print $field_node_ref_1_rendered?>
	  	</div>
	    <div class="column-2-3">
			<?php print $field_node_ref_2_rendered?>
	  	</div>
	    <div class="column-3-3">
			<?php print $field_node_ref_3_rendered?>
  		</div>
    </div>
   
</div></div> <!-- /node-inner, /node -->

    <div class="bottom-nav">
      <div class="dotted-nav">
      <ul id="nav_wayfind">
          <li id=""><a href="/admission/visit-programs">VISIT PROGRAMS</a></li>
          <li id=""><a href="/admission/admission-staff">MEET THE ADMISSION STAFF</a></li>
          <li id=""><a href="/financial-aid">FINANCIAL AID</a></li>
          <li id=""><a href="/admission/student-blogs">BLOGS</a></li>
      </ul>      
      </div>

    </div>

<?php if (node_access("update", $node->nid)) : ?>
	<div class="admin-node-name-display"><?php print($node->type);?></div>
<?php endif ?>  