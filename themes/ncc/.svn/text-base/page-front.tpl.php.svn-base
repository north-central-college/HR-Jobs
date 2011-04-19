<?php
// $Id: page-front.tpl.php,v 1.14.2.6 2009/02/13 16:28:33 johnalbin Exp $
?> 
<!DOCTYPE html>
<html>
<head>
  	<title>North Central College - Naperville, IL</title>
  	<?php print $head; ?>
  	<?php print $styles; ?>
  	<?php print $scripts; ?>
  	
  	<?php //Insert a jquery-drupal override ?>
  	<?php //The purpose of this include is that the needed jQuery extend does not show up when generating the slideshow from ?>
  	<?php //within the template.php file as we need to do for this includsion of the slideshow on this page ?>
  	<?php //we would not need this if we move the homepage to a panel-based generation, but we are currently doing it the ?>
  	<?php //old-school way of page-front templates and template.php overrides. ?>
  	<script type="text/javascript">
  	<!--//--><![CDATA[//><!--
  	jQuery.extend(Drupal.settings, { "basePath": "/", "CTools": { "pageId": "page-568f2200e0a4e69f3ba66d11d0a01aa7" }, "viewsSlideshowSingleFrame": { "#views_slideshow_singleframe_main_slideshow-block_1": { "num_divs": 3, "id_prefix": "#views_slideshow_singleframe_main_", "div_prefix": "#views_slideshow_singleframe_div_", "vss_id": "slideshow-block_1", "timeout": "5000", "sort": 1, "effect": "fade", "speed": "700", "start_paused": 0, "delay": "0", "fixed_height": "1", "random": "0", "pause": "2", "pause_on_click": "0", "pause_when_hidden": 0, "pause_when_hidden_type": "full", "amount_allowed_visible": "", "remember_slide": 0, "remember_slide_days": "1", "controls": "0", "items_per_slide": "1", "pager": "1", "pager_type": "Numbered", "pager_hover": "2", "pager_click_to_page": 0, "image_count": "0", "nowrap": "0", "sync": "1", "advanced": "", "ie": { "cleartype": "true", "cleartypenobg": "false" } } }, "views": { "ajax_path": "/views/ajax", "ajaxViews": [ { "view_name": "slideshow", "view_display_id": "block_1", "view_args": "", "view_path": "home2", "view_base_path": "testslideshow", "view_dom_id": 4, "pager_element": 0 } ] } });
  //--><!]]>  	
  	</script>
  	<?php //END: Insert a jquery-drupal override ?>

  	<!--  <link rel="stylesheet" type="text/css" href="/sites/all/themes/ncc/ncc.css" /> -->
</head>
<body class="homepage">
    <script src="https://www.google.com/cse/brand?form=cse-search-box&lang=en" type="text/javascript"></script>
    <div id="top">
       <?php require_once dirname(__FILE__).'/header.inc.php'; ?>
       <div id="picwindow">
           <?php if ($homepagenode->field_emergency[0]['value'] == 'on') { ?>
           		<div id='emergency' style="padding:8px;">
           		 <h1><?php print $homepagenode->field_emergency_title[0]['value']; ?></h1>
                   	<?php print $homepagenode->field_emergency_text[0]['value']; ?>
                </div>
            <?php } else { ?>
        	<div id="homepage-slideshow">
  			<?php 
        	
        		if ($slideshow != null) {
        			print $slideshow;
        		}
        		else {
        			print "slideshow";
        		}
        	?>
        	</div>
        	<div id="video">
        		<object type="application/x-shockwave-flash" data="http://www.youtube.com/v/<?php print($homepagenode->field_mainvideo[0]['value']); ?>&amp;rel=0&amp;autoplay=0&amp;enablejsapi=1&amp;playerapiid=ytplayer&amp;fs=1" id="emvideo-youtube-flash-1" width="359" height="218">
		          <param name="movie" value="http://www.youtube.com/v/<?php print($homepagenode->field_mainvideo[0]['value']); ?>&amp;rel=0&amp;autoplay=0&amp;enablejsapi=1&amp;playerapiid=ytplayer&amp;fs=1">
		          <param name="allowScriptAccess" value="sameDomain">
		          <param name="quality" value="best">
		          <param name="allowFullScreen" value="true">
		          <param name="bgcolor" value="#FFFFFF">
		          <param name="scale" value="noScale">
		          <param name="salign" value="TL">
		          <param name="FlashVars" value="playerMode=embedded">
		          <param name="wmode" value="transparent">
		          <!-- Fallback content -->
		          <a href="http://www.youtube.com/watch?v=<?php print($homepagenode->field_mainvideo[0]['value']); ?>"><img src="http://img.youtube.com/vi/<?php print($homepagenode->field_mainvideo[0]['value']); ?>/0.jpg" alt="See video" title="See video"  width="359" height="218"></a>
		        </object>
        		<div id="caption">
        			<h2><?php print($homepagenode->field_mainvideo_title[0]['value']);?></h2>
        			<p><?php print($homepagenode->field_mainvideo_description[0]['value']);?></p>
        		</div> 
        	</div>
			<?php } ?>        	
		</div>
	    <ul id="nav_resource">
	        <li id="for"><img src="/sites/all/themes/ncc/images/nav_resources_for.png" height="12" width="121" alt="RESOURCES FOR" /></li>
	        <li id="intl"><a href="/admission/international"><img src="/sites/all/themes/ncc/images/nav_resources_intl.png" height="13" width="163" alt="International Students" /></a></li>
	        <li id="parents"><a href="http://northcentralcollege.edu/x6434.xml"><img src="/sites/all/themes/ncc/images/nav_resources_parents.png" height="13" width="55" alt="Parents" /></a></li>
	        <li id="donors"><a href="http://northcentralcollege.edu/x50969.xml"><img src="/sites/all/themes/ncc/images/nav_resources_donors.png" height="13" width="52" alt="Donors" /></a></li>
	        <li id="commed"><a href="http://northcentralcollege.edu/x6437.xml"><img src="/sites/all/themes/ncc/images/nav_resources_commed.png" alt="Community &amp; Visitors" /></a></li>
	        <li id="media"><a href="/news/1981"><img src="/sites/all/themes/ncc/images/nav_resources_media.png" height="13" width="44" alt="Media" /></a></li>
	    </ul>
	    <div id="body">
	        <div>
		  	<div id="news">
		  		<h2><img src="/sites/all/themes/ncc/images/h2_news.png" width="274" height="51" alt="News" /></h2>
		   		<?php print $news_listing; ?>
		   		<div class="more-link"><a href="/news/1981">more news</a></div>
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
			   		<div class="more-events" >
			   			<a href="http://calendar.northcentralcollege.edu">more events</a>
			   		</div>
		    	</div>
		    	<div class="events-bottom">
		    		
		    	</div>
			 </div>
	  	    </div>
		   <div id="large-button-list">
		   <?php print $button_listing; ?>
		   </div> 
	        <div style="clear: both; float: none;">&nbsp;</div>    
		</div>
	</div>
	<div id="bottom">
	<div id="main-page-footer">
		<div id="main-page-footer-inner">
		     	<div id="main-page-footer-links">
		     		<div id="footer-links-container">
				   		<div class="footer-links" style="width: 19%;">
					   		<div class="field field-type-text">
		    					<div class="field-items">
		            				<div class="field-item odd"><?php echo $homepagenode->field_footertitle1[0]['value'] ?></div>
		        				</div>
							</div>
							<div class="field field-type-nodereference">
							    <div class="field-items">
							    	<div class="field-item odd"><?php echo $homepagenode->field_textfooterlinks1[0]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks1[1]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks1[2]['value'] ?></div>							        
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks1[3]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks1[4]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks1[5]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks1[6]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks1[7]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks1[8]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks1[9]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks1[10]['value'] ?></div>
							    </div>
							</div>
						</div>
					    <div class="footer-links" style="width: 19%;">
					   		<div class="field field-type-text">
		    					<div class="field-items">
		            				<div class="field-item odd">AWARD-WINNING</div>
		        				</div>
							</div>
							<div class="field field-type-nodereference">
							    <div class="field-items">
							    	<div class="field-item odd"><?php echo $homepagenode->field_textfooterlinks2[0]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks2[1]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks2[2]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks2[3]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks2[4]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks2[5]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks2[6]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks2[7]['value'] ?></div>
							    </div>
							</div>
						</div>
					    <div class="footer-links" style="width: 20%;">
					   		<div class="field field-type-text">
		    					<div class="field-items">
		            				<div class="field-item odd">EXPLORATION</div>
		        				</div>
							</div>
							<div class="field field-type-nodereference">
							    <div class="field-items">
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks3[0]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks3[1]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks3[2]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks3[3]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks3[4]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks3[5]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks3[6]['value'] ?></div>							        
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks3[7]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks3[8]['value'] ?></div>
							    </div>
							</div>
						</div>
						<div class="footer-links" style="width: 15%;">
					   		<div class="field field-type-text">
		    					<div class="field-items">
		            				<div class="field-item odd">LOCATION</div>
		        				</div>
							</div>
							<div class="field field-type-nodereference">
							    <div class="field-items">
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks4[0]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks4[1]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks4[2]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks4[3]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks4[4]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks4[5]['value'] ?></div>
							    </div>
							</div>
						</div>	
					    <div class="footer-links" style="width: 20%;">
					   		<div class="field field-type-text">
		    					<div class="field-items">
		            				<div class="field-item odd">CARDINALNET</div>
		        				</div>
							</div>
							<div class="field field-type-nodereference">
							    <div class="field-items">
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks5[0]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks5[1]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks5[2]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks5[3]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks5[4]['value'] ?></div>
							        <div class="field-item even"><?php echo $homepagenode->field_textfooterlinks5[5]['value'] ?></div>
							    </div>
							</div>
						</div>						
					</div>
			  		<div id="social-icons">
                    <?php require_once dirname(__FILE__).'/chicklets.inc.php'; ?>
			  		</div>
				</div>
			</div>
	     </div> 		
        <div id="main-page-footer-bottom"></div>
        <div id="footer">
        	<div id="footer-inner">
                    <?php require_once dirname(__FILE__).'/footerlinks.inc.php'; ?>
			</div>
      	</div>
</script>
      	
    </div>
    <script type="text/javascript" src="http://www.google-analytics.com/urchin.js"></script><script type="text/javascript">
		_uacct = "UA-2449455-2";
		urchinTracker();
		</script>
    
</body>
</html>
