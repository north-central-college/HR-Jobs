<?php
// $Id: node.tpl.php,v 1.4 2008/09/15 08:11:49 johnalbin Exp $
?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"><div class="node-inner">
<?php print $picture; ?>
<?php if (!$page): ?>
    <h2 class="title">
      <a href="<?php print $node_url; ?>" title="<?php print $title ?>"><?php print $title; ?></a>
    </h2>
    <div class="content">
    	<?php print $content; ?>
    </div>
<?php else: ?> 
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
da2a.init = function(){
a2a_config.linkname='northcentralcollege.edu'; a2a_config.linkurl='http://northcentralcollege.edu/'; a2a.init('page', {target: '#da2a_1'});
da2a.ready = true;
}
da2a.html_ready = true;
if(da2a.script_ready && !da2a.ready)da2a.init();
//--><!]]>
</script>   
  </div>
  <br/><br/>

  
  
  </div>
<div class="content">

<table>
<div class="main-image">
	<td><?php print $field_newsimage_rendered; ?></td><tr></tr>
	<?php if ($field_newsimage[0]['data']['title']): ?>
  	<td>	<div class="image-caption"><?php print $field_newsimage[0]['data']['title']; ?></div></td>
   <?php endif; ?>
</div>
</table>
   <?php print $node->content['body']['#value']; ?>
     
 <?php //<img src="/images/rss.jpeg" alt="RSS Feed"/> ?>
      <?php if ($terms): ?>
        <div class="terms "><?php print t('Posted in:') . $terms; ?></div>
      <?php endif; ?>
   <?php print t('!date', array('!date' => format_date($node->created, 'custom', 'd/m/Y'))); ?>
   <br/>
  <?php print $links; ?>
<?php endif; ?>
<?php if (node_access("update", $node->nid)) : ?>
	<div class="admin-node-name-display"><?php print($node->type);?></div>
<?php endif ?> 

</div></div> <!-- /node-inner, /node -->

