<div id="third-menu">
	<div class="third-list">
		<span>关于我们</span>
		<ul>
			<?php foreach($block->page as $node){
				print '<li>'.l($node->title, 'node/'.$node->nid, array('attributes' => array('title' => $node->title))).'</li>';
			}?>
		</ul>
	</div>
	<div class="third-list">
		<span>品牌资料</span>
		<ul>
			<?php foreach($block->brand as $term){
				print '<li>'.l($term->name, 'taxonomy/term/'.$term->tid, array('attributes' => array('title' => $term->name))).'</li>';
			}?>
		</ul>
	</div>
	<div class="third-list">
		<span><?php print l('健康与水', 'node-type/article')?></span>
		<ul>
			<?php foreach($block->article as $term){
				print '<li>'.l($term->name, 'taxonomy/term/'.$term->tid, array('attributes' => array('title' => $term->name))).'</li>';
			}?>
		</ul>
	</div>
	<div class="third-list">
		<span><?php print l('解决方案', 'node-type/solution')?></span>
		<ul>
			<?php foreach($block->solution as $term){
				print '<li>'.l($term->name, 'taxonomy/term/'.$term->tid, array('attributes' => array('title' => $term->name))).'</li>';
			}?>
		</ul>
	</div>
	<div class="third-list">
		<span>客户案例</span>
		<ul>
			<?php foreach($block->case as $node){
				print '<li>'.l(website_substr($node->title, 0, 20), 'node/'.$node->nid, array('attributes' => array('title' => $node->title))).'</li>';
			}?>
		</ul>
	</div>