<div class="block block-<?php print $block->module; ?>" id="block-<?php print $block->module; ?>-<?php print $block->delta; ?>">
    <h2 class="title"><?php print $block->subject; ?></h2>
    <div class="content">
    	<?php foreach($block->myterms as $term){?>
    	<span><?php print $term['parent']->name;?></span>
		<ul>
		<?php foreach($term['child'] as $child_term){?>			
			<li>
				<?php print l($child_term->name, 'taxonomy/term/'.$child_term->tid);?>
			</li>
		<?php }?>	
		</ul>
		<?php }?>
    </div>
</div>