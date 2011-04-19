
<div class="node">
<div class="node-inner">
  <?php //Teaser section ?>
  <?php if (!$page): ?>
    <h2 class="title">
      <a href="<?php print $node_url; ?>" title="<?php print $title ?>"><?php print $title; ?></a>
    </h2>
  <?php else: ?>
  
	  <?php //Display if Unpublished ?>
	  <?php if ($unpublished): ?>
	    <div class="unpublished"><?php print t('Unpublished'); ?></div>
	  <?php endif; ?>
	<div class="content">
	  <div id="picwindow">
			<?php print $relevant_links; ?>
			
				<?php print $field_top_image_rendered;?>
	  			<?php print $field_subimage_rendered; ?>
	  </div> 
	  <div id="main-column" >
	  		<div id="main">
		  		<h1><?php 
		  		if ($field_alttitle[0]['value'] == NULL || trim($field_alttitle[0]['value']) == "") 
	      			print $title; 
	      		else
	      			print $field_alttitle[0]['value'];?>
	      		</h1>
		  		<?php print $body_text; ?>
			</div>
	   </div>
	
	</div>
	<?php endif;?>

<?php if (node_access("update", $node->nid)) : ?>
	<div class="admin-node-name-display"><?php print($node->type);?></div>
<?php endif ?>  
</div> <!-- /node-inner -->
</div> <!-- /node -->
