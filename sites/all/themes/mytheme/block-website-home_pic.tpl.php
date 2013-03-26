<div class="block block-<?php print $block->module; ?>" id="block-<?php print $block->module; ?>-<?php print $block->delta; ?>">
    <h2 class="title"><?php print $block->subject; ?></h2>
    <div class="content" id="slider">
		<ul>
		<?php foreach($block->data as $data){?>			
			<li class="pic_turn">
				<?php print l(theme('image', $data->filepath, $data->title, $data->title), 
						$data->field_url_value, 
						array('html' => true, 'attributes'=> array('target'=>'_blank')));?>
				
				<!-- <div class="text">
				<h2><?php print $data->title?></h2>
				<?php print $data->body?></div>-->
			</li>
		<?php }?>	
		</ul>
    </div>
</div>