<?php //Teaser section ?>
<?php if (!$page): ?>
<div class="node">
  <div class="node-teaser">
<div class="node-inner">
  <h2 class="title">
    <a href="<?php print $node_url; ?>" title="<?php print $title ?>"><?php print $title; ?></a>
  </h2>
</div>
</div>
</div>  
<?php else: ?>
<?php //Start Page Section ?>     
<div class="node">
<div class="node-inner">


  <?php //Display if Unpublished ?>
  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

<div class="content">
  <div id="picwindow">
	
		<div id="relevant-links-container">
		<?php if($main_section_links) {
		    print $main_section_links;
		} else {
		  print $relevant_links;
		}
		?>
		</div>
		
        <?php if ($node->field_mainvideo[0]['embed'] == ""): ?>
        <?php print $field_mainimage_rendered; ?>
        <?php else: ?> 
        	<div id="video-mainpage" style="float:left; height:281px; background-color:#ddd;">
        		<object type="application/x-shockwave-flash" data="http://www.youtube.com/v/<?php print($node->field_mainvideo[0]['value']); ?>&amp;rel=0&amp;autoplay=0&amp;enablejsapi=1&amp;playerapiid=ytplayer&amp;fs=1" id="emvideo-youtube-flash-1" width="456" height="281">
		          <param name="movie" value="http://www.youtube.com/v/<?php print($node->field_mainvideo[0]['value']); ?>&amp;rel=0&amp;autoplay=0&amp;enablejsapi=1&amp;playerapiid=ytplayer&amp;fs=1">
		          <param name="allowScriptAccess" value="sameDomain">
		          <param name="quality" value="best">
		          <param name="allowFullScreen" value="true">
		          <param name="bgcolor" value="#FFFFFF">
		          <param name="scale" value="noScale">
		          <param name="salign" value="TL">
		          <param name="FlashVars" value="playerMode=embedded">
		          <param name="wmode" value="transparent">
		          <!-- Fallback content -->
		          <a href="http://www.youtube.com/watch?v=<?php print($node->field_mainvideo[0]['value']); ?>"><img src="http://img.youtube.com/vi/<?php print($node->field_mainvideo[0]['value']); ?>/0.jpg" alt="See video" title="See video"  width="456" height="281"></a>
		        </object>
        	</div>
        <?php endif;?>
        <?php print $field_subimage_rendered; ?>
       
  </div>
  <div id="main-column">
  		<div id="main">
	  		<h1><?php 
	  		if ($field_alttitle[0]['value'] == NULL || trim($field_alttitle[0]['value']) == "") 
      			print $title; 
      		else
      			print $field_alttitle[0]['value'];?>
      		</h1>
	  		<?php print $body_text; ?>
		</div>
	  	<div>
		  	<?php if($field_hide_mainpagenews[0]['value'] == 0): ?>
			  	<div id="news">
			  		<h2><img src="/sites/all/themes/ncc/images/h2_news.png" width="274" height="51" alt="News" /></h2>
			   		<?php print $news_listing; ?>
			   		<div class="more-link"><a href="<?php print $more_news_link; ?>"><?php print $more_news_text; ?></a></div>
			  	</div>
				<div id="events">
			 		<h2><img src="/sites/all/themes/ncc/images/h2_events.png" width="274" height="51" alt="Events" /></h2>
			    	<div id="events-content">
			   		<?php 
			   		if ($event_data) {
			   			foreach($event_data as $event){
			   				print "<h3><a href='http://calendar.northcentralcollege.edu/eventDetail.php?id=".$event->eventId."'>".$event->title."</a></h3>";
			   				print "<p>".$event->date."</p>";
		   			}
		   		}
		   		?>
		   		
		   		<?php 
		   		//TODO: Remove this hack to comply with calendar expeted id value
		   		$calName = str_replace("+", "", $calendarName);
		   		switch($calName){
			    	case "Alumni":
			    		$calid=4;
			    		break;
			    	case "Transfer":
			    		$calid=26;
			    		break; 
			    	case "Freshmen":
			    		$calid=25;
			    		break; 
			    	case "International":
			    		$calid=28;
			    		break;  
			    	case "Graduate":
			    		$calid=27;
			    		break; 
			    	case "MBA":
			    		$calid=27;
			    		break; 	
			    	case "Education":
			    		$calid=27;
			    		break; 	
			    	case "LeadershipStudies":
			    		$calid=27;
			    		break; 	
			    	case "LiberalStudies":
			    		$calid=27;
			    		break; 	
			    	case "WebandInternetApplications":
			    		$calid=27;
			    		break;
			    	case "ManagementInformationSystems":
			    		$calid=27;
			    		break; 			
			    }
		   		?>
		   			<div class="more-events" >
			   			<a href="http://calendar.northcentralcollege.edu/calendar.php?timeframe=monthly&cal=<?php print $calid ?>">more events</a>
			   		</div>   
			   		<?php endif; ?> 	
		    	</div>
			 </div>
	  	</div>
	  	


   </div>
   <div id="large-button-list">
    
    <?php
	foreach($field_related_buttons as $button){
	  print views_embed_view('main_button_list_no_tax', 'block_1', $button['nid']);
        }
		  
		  //print $gf;
    ?>
   <?php print $button_listing; ?>
   </div> 
</div>


</div> <!-- /node-inner -->

</div> <!-- /node -->



	  <?php 
	  $cols =0; 
	  if ($field_footertitle1_rendered){
	  	$cols++;
	  }
	  if ($field_footertitle2_rendered){
	  	$cols++;
	  }
	  if ($field_footertitle3_rendered){
	  	$cols++;
	  }
	  if ($field_footertitle4_rendered){
	  	$cols++;
	  }
	  if ($field_footertitle5_rendered){
	  	$cols++;
	  }
	  if ($cols > 0){
	  	$colwidth = 94/($cols);
	  }
	  else {
	  	$colwidth = 100;
	  }
	?>
	<?php if($field_display_footer[0]['value'] == 0): ?>
	   <div id="main-page-footer"> 
	     <div id="main-page-footer-inner">
	     	<div id="main-page-footer-links">
	     		<div id="footer-links-container">

			   		<?php if ($field_footertitle1_rendered){
			  			echo '<div id="footer-links1" class="footer-links" style="width:'.$colwidth.'%;">';
			  			print $field_footertitle1_rendered;
			  			print $field_footerlink1_rendered; 
			  			print '</div>';
			  		}?>
		
			  		<?php if ($field_footertitle2_rendered){
			  			echo '<div id="footer-links2"  class="footer-links"  style="width:'.$colwidth.'%;">';
			  			print $field_footertitle2_rendered;
			  			print $field_footerlinks2_rendered; 
			  			print '</div>';
			  		}?>
		
			  		<?php if ($field_footertitle3_rendered){
			  			echo '<div id="footer-links3"  class="footer-links" style="width:'.$colwidth.'%;">';
			  		    print $field_footertitle3_rendered;
			  			print $field_footerlinks3_rendered;
			  			print '</div>';
			  		}?>	  		
		
			  		<?php if ($field_footertitle4_rendered){
			  			echo '<div id="footer-links4"  class="footer-links" style="width:'.$colwidth.'%;">';
			  			print $field_footertitle4_rendered;
			  			print $field_footerlinks4_rendered; 
			  			print '</div>';
			  		}?>
			  		
		
			  		<?php if ($field_footertitle5_rendered){
			  			echo '<div id="footer-links5">';
			  		    print $field_footertitle5_rendered;
			  			print $field_footerlinks5_rendered;
			  			$divctr++;
			  			echo '</div>';
			  			} ?>
			  			
			  	</div>	
			  		<div id="social-icons">
                    <?php require_once dirname(__FILE__).'/chicklets.inc.php'; ?>
			  		</div>
	  		</div>
	   </div> 		
     </div>
<?php endif ?>
     <div id="main-page-footer-bottom"></div>
<?php if (node_access("update", $node->nid)) : ?>
	<div class="admin-node-name-display"><?php print($node->type);?></div>
<?php endif ?>  
<?php //End Page Section ?>     
<?php endif; ?>