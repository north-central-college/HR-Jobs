<?php
/* Page Forward */
// 302 Found
//header("Location: /foo.php",TRUE,302);
//header("Location: /foo.php");

// 303 See Other
//header("Location: /foo.php",TRUE,303);

// 307 Temporary Redirect
$forwardLocation = $node->field_forwarding_link[0]['value'];
header("Location: $forwardLocation",TRUE,307);
?>
<HTML>
<HEAD><TITLE>Forward Page</TITLE>
<script language="javascript">
function TransferToURL(){
	window.location.href="<?php print $forwardLocation; ?>"
} 
</script>
</HEAD>
<BODY onLoad="setTimeout('TransferToURL()',1000)">
<?php 
print '<META HTTP-EQUIV="refresh" CONTENT="2;URL='.$forwardLocation.'">';
print 'You are being forwarded to:<BR>';
print '<a href="'.$forwardLocation.'">'.$forwardLocation.'</a>';
?>