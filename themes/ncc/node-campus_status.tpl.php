<?php
// $Id: node-campus_status.tpl.php,v 1.4 2008/09/15 08:11:49 jccaruso Exp $
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"><div class="node-inner">
  <?php if (!$page): ?>
    <h2 class="title">
      <a href="<?php print $node_url; ?>" title="<?php print $title ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>
  <h1><?php print $title ?></h1>
  <div class="content">
    <?php  
    print $node->content['body']['#value'];
    if ($node->field_campstatus_diplay_notice[0]['safe'] == "holiday") {
    	print "<div class='campus-status'>";
    	print "<h2>Current Campus Status: <span style='color: red;'>Closed for the Holiday</span></h2>";
    	print $node->field_campstatus_holiday[0]['safe'];
    	print "</div>";
    } else if ($node->field_campstatus_diplay_notice[0]['safe'] == "delay") {
    	print "<div class='campus-status'>";
		print "<h2>Current Campus Status: <span style='color: red;'>DELAYED OPENING</span></h2>";
    	print $node->field_campstatus_delayopen[0]['safe'];
    	print "</div>";
    } else if ($node->field_campstatus_diplay_notice[0]['safe'] == "cancellations") {
     	print "<div class='campus-status'>";
    	print "<h2>Current Campus Status: <span style='color: red;'>SOME CANCELLATIONS</span></h2>";
    	print $node->field_campstatus_somecancel[0]['safe'];
    	print "</div>";
    } else if ($node->field_campstatus_diplay_notice[0]['safe'] == "closed") {
    	print "<div class='campus-status'>";
    	print "<h2>Current Campus Status: <span style='color: red;'>CLOSED</span></h2>";
    	print $node->field_campstatus_closed[0]['safe'];
    	print "</div>";
    } else  { //open
        print "<div class='campus-status'>";
    	print "<h2>Current Campus Status: <span style='color: green;'>OPEN</span></h2>";
    	print $node->field_campstatus_open[0]['safe'];
    	print "</div>";
    }
    print $node->field_campstatus_footer[0]['safe']; 
    ?>
  </div>
<?php if (node_access("update", $node->nid)) : ?>
	<div class="admin-node-name-display"><?php print($node->type);?></div>
<?php endif ?> 
</div></div> <!-- /node-inner, /node -->
