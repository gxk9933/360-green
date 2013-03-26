<?php if($page){?>
<div id="node-<?php print $node->nid; ?>" class="node node-page<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">

<h2><?php print $title;?></h2>
  <div class="content clear-block">
    <?php print $content ?>
  </div>



</div>
<?php }else{?>
	<div id="node-<?php print $node->nid; ?>" class="node-teaser-title<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">
		<p class="teaser-title"><?php print l($title, 'node/'.$nid) ?><span><?php print date('Y-m-d', $changed)?></span></p>
	</div>
	<div class="cf"></div>
<?php }?>