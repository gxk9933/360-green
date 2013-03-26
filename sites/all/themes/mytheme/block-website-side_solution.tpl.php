<div class="block-side block-<?php print $block->module; ?>" id="block-<?php print $block->module; ?>-<?php print $block->delta; ?>">
    <h2 class="title"><?php print l($block->subject, 'node-type/solution'); ?></h2>
    <div class="content">
		<ul>
		<?php foreach($block->data as $data){?>			
			<li>
			<?php print l(website_substr($data->title, 0, 35), 
				'node/'.$data->nid, 
				array('attributes' => array('title' => $data->title)));?>
			</li>
		<?php }?>	
		</ul>
    </div>
</div>