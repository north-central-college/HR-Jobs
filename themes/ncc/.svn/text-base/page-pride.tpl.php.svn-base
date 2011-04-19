<?php
// $Id: page.tpl.php,v 1.14.2.6 2009/02/13 16:28:33 johnalbin Exp $
?>
<!DOCTYPE html>
<html>
  <head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<?php //added 'page-pride' here so all nodes that use this page must have this for css simplification ?>
<body class="page-pride <?php print $body_classes; ?>">
<div id="top">
	<div id="pride-tagline">
		<div id="pride-tagline-image">
		    <img src="/sites/all/themes/ncc/images/your_connection.gif" alt="Your connection to " >
		</div>
		<div id="pride-tagline-link">
			<a href="http://northcentralcollege.edu/">North Central College</a>
		</div>	
	</div>
	<div>
	<ul class="h_tab" id="nav1">
	  <li><a href="/pride">Campus News</a></li>	
	  <li><a href="http://cardinalnet.northcentralcollege.edu/x48851.xml" >Students</a></li>
	  <li><a href="http://cardinalnet.northcentralcollege.edu/x49127.xml" >Faculty</a></li>
	  <li><a href="http://cardinalnet.northcentralcollege.edu/x49126.xml" >Employees</a></li>
    </ul>  
    </div>
</div>
<div id="pride-nav" >
	<div id="north-central-pride-banner">
	<a href="/pride/"><img src="/sites/all/themes/ncc/images/pride.gif" alt="North Central Pride: The latest news and events from North Central College"></a></div>
	<div id="page-icons">
	 <ul id="pride_tops">
		      <li><a href="http://www.northcentralcollege.edu/mail"><img alt="Icon: Novell GroupWise WebAccess" src="http://www.northcentralcollege.edu/Images/cardinalnet/webmail.png" height="40" width="40"></a><br><a href="http://www.northcentralcollege.edu/mail">Webmail</a></li>
		      <li><a href="http://merlin.noctrl.edu/"><img alt="Icon: Merlin" src="http://www.northcentralcollege.edu/Images/cardinalnet/merlin.png" height="40" width="40"></a><br><a href="http://merlin.noctrl.edu/">Merlin</a></li>
		      <li><a href="http://blackboard.noctrl.edu/"><img alt="Icon: Blackboard" src="http://www.northcentralcollege.edu/Images/cardinalnet/blackboard.png" height="40" width="40"></a><br><a href="http://blackboard.noctrl.edu/">Blackboard</a></li>
			  <li id="search-3" class="widget widget_search">
		</li>
	  </ul>
	</div>
</div>
<div style="clear:both; width:980px; margin:0 auto;">
<div style="border:0px #333 dashed;">
	<div id="cse" style="width: 100%; font-size: 12px; color:#999;">Pride Search</div>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script>
	<script type="text/javascript">
	  google.load('search', '1', {language : 'en'});
	  google.setOnLoadCallback(function() {
	    var customSearchControl = new google.search.CustomSearchControl('012713998885498363407:fcqrc8y9aha');
	    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
	    customSearchControl.draw('cse');
	  }, true);
	</script>
	<link rel="stylesheet" href="http://www.google.com/cse/style/look/default.css" type="text/css" />
	&nbsp;<a href="http://webapp.noctrl.edu/search/" style="font-size: 12px; color:#999; padding-left:10px;">search website</a>
</div>
</div>
<div id="page">
    <div class="main-breadcrumb"><?php print $breadcrumb; ?></div>
    <?php if ($tabs || $help || $messages): ?>
    <div id="content-header">
      <?php print $messages; ?>
      <?php if ($tabs): ?>
           <div class="tabs"><?php print $tabs; ?></div>
      <?php endif; ?>
      <?php print $help; ?>
    </div>
    <?php endif; ?>
    <div id="body">
        <div id="content-area">
          <?php print $content; ?>
        </div>

        <?php if ($feed_icons): ?>
          <div class="feed-icons"><?php print $feed_icons; ?></div>
        <?php endif; ?>

        <?php if ($content_bottom): ?>
          <div id="content-bottom" class="region region-content_bottom">
            <?php print $content_bottom; ?>
          </div> <!-- /#content-bottom -->
        <?php endif; ?>

      <?php if ($left): ?>
        <div id="sidebar-left"><div id="sidebar-left-inner" class="region region-left">
          <?php print $left; ?>
        </div></div> <!-- /#sidebar-left-inner, /#sidebar-left -->
      <?php endif; ?>

      <?php if ($right): ?>
        <div id="sidebar-right"><div id="sidebar-right-inner" class="region region-right">
          <?php print $right; ?>
        </div></div> <!-- /#sidebar-right-inner, /#sidebar-right -->
      <?php endif; ?>

    </div>

  </div> 

    <?php if ($footer): ?>
	<div id="bottom">
	  <div id="footer">
	    <div>
        <?php print $footer; ?>
        <div style="clear: both; "></div>
		</div>
	  </div>
	</div>
    <?php endif; ?>

  <?php if ($closure_region): ?>
    <div id="closure-blocks" class="region region-closure"><?php print $closure_region; ?></div>
  <?php endif; ?>
  <?php print $closure; ?>

</body>
</html>
