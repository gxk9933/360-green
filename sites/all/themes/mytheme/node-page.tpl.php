<div id="node-<?php print $node->nid; ?>" class="node node-page<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">

<h2><?php print $title;?></h2>
  <div class="content clear-block">
    <?php print $content ?>
  </div>



</div>
