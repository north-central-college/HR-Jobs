<?php
// $Id: node.tpl.php,v 1.4 2008/09/15 08:11:49 johnalbin Exp $
?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">
  <?php if (!$page): ?>
    <h2 class="title">
       <a href="<?php print $node_url; ?>" title="<?php print $title ?>"><?php print $title; ?></a>
    </h2>
  <?php else: ?>

  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>
  <div id="main-column">
    <div id="picwindow"><?php print $field_mainimage_rendered ?></div>
    <div id="degree-program">
  		<h1><?php print $title; ?></h1>
  		<?php print $field_body_rendered; ?>	
        <ul id="nav_sleeve">
	  <?php if($field_i_sleeve_links != 0): ?>
		  <?php foreach ($field_i_sleeve_links as $i_sleeve_link): ?>
		  <li><?php echo $i_sleeve_link['view']; ?></li>
		  <?php endforeach; ?>
		<?php endif;?>
        	<?php if($field_sleeve_links != 0): ?>
		  <?php foreach ($field_sleeve_links as $sleeve_link): ?>
		  <li><?php echo $sleeve_link['value']; ?></li>
		  <?php endforeach; ?>
		<?php endif;?>
        </ul>
 	</div>
  <?php if($field_hide_news[0]['value'] == 0): ?>
	  <div id="news">
		  <h2><img src="/sites/all/themes/ncc/images/h2_news.png" width="274" height="51" al
t="News" /></h2>
		  <?php print $news_listing; ?>
		  <div class="more-link"><a href="<?php print $more_news_link; ?>"><?php print $more_news_text; ?></a></div>
	  </div>
	  <div id="opportunities">
	  	  <?php if($field_opportunitiestitle[0]['value'] != null): ?>
		 	 <h2><?php  print $field_opportunitiestitle[0]['value']; ?></h2>
		  <?php else :
		  	echo "<img src='/sites/all/themes/ncc/images/h2_opportunities.png' width='27
4' height='51' alt='Opportunties' />";
		  	endif; ?>
	  <div id="opportunities-content">
		  <?php print $field_opportunities_rendered; ?>    	
	  </div>
	   </div>
	  <?php endif; ?>
  </div>
  <div id="profile-column">
 		<div id="profile">
  		<?php
		  $rand = array_rand($field_related_profiles);
		  $nid = $field_related_profiles[$rand]['nid'];
		  //print views_embed_view('general_feature', 'block_1', $nid);
		  //print $gf;
		  foreach($field_related_profiles as $a_node){
		    $node_array_IDs[] =  $a_node['nid'] ;
		  }
		  print views_embed_view('feature_slideshow', 'block_1', implode("+" , $node_array_IDs));
		?>
		
 		</div>
  </div>
  <?php endif; ?>
<!-- <?php if (node_access("update", $node->nid)) : ?>
	<div class="admin-node-name-display"><?php print($node->type);?></div>
<?php endif ?>  -->
</div><!--  /node -->
