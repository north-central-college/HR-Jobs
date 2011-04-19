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
  <h1 class="title"><?php print $title; ?></h1>
  <div class="news-share">
<a href="javascript:window.print()">Print</a>
<a href="mailto:?subject=<?php print $title; ?>&body=<?php print $pageEmailURL?>">Email</a>
<a class="da2a_button" href="http://www.addtoany.com/share_save?linkurl=<?php print $pageEmailURL?>%2F&amp;linkname=<?php print $title; ?>" id="da2a_1"> Share</a> 
		<script type="text/javascript"> 
<!--//--><![CDATA[//><!--
var a2a_config = a2a_config || {}, da2a = {ready: false, html_ready: false, script_ready: false, script_onready: function() { da2a.script_ready = true; if(da2a.html_ready)da2a.init(); }}; a2a_config.tracking_callback = ['ready', da2a.script_onready];
(function(){var a = document.createElement('script');a.type = 'text/javascript';a.async = true;a.src = 'http://static.addtoany.com/menu/page.js';var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(a, s);})();
//--><!]]>
</script>  
  </div>
  <div class="content">
    <?php print $content; ?>
  </div>

  <?php if ($page): ?>
    <?php if ($terms): ?>
    <div class="meta">
        <?php //removed $submitted ?>
        <div class="terms">Posted in:<?php print $terms ?></div>    
        <?php print t('!date', array('!date' => format_date($node->created, 'custom', 'd/m/Y'))); ?>
    </div>
    <br/>
    <?php endif; ?>

    <?php print $links; ?>
  <?php endif; ?>
  
  <br/><br/>
  

</div></div> <!-- /node-inner, /node -->


     
