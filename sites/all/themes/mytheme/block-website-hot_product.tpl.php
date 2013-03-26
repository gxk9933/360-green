<div class="block-side block-<?php print $block->module; ?>" id="block-<?php print $block->module; ?>-<?php print $block->delta; ?>">
    <h2 class="title"><?php print $block->subject; ?></h2>
    <div class="content">
		<ul>
		<?php foreach($block->data as $data){?>			
			<li>
				<div class="pic_show"><?php print l(theme('imagecache', '63x63', $data->filepath), 'node/'.$data->nid,
						array('html' => true, 'attributes' => array('title' => $data->title)));?></div>
				
				
				<div class="text">
				<p class="title">
				<?php print l(website_substr($data->title, 0, 38), 
						'node/'.$data->nid, 
						array('attributes' => array('title' => $data->title)));?></p>
				<p>价格：<font color="red"><?php print $data->field_present_price_value?></font>元</p>
				<p>查看：<?php print $data->totalcount;?>次</p>
				</div>
			</li>
		<?php }?>	
		</ul>
    </div>
</div>