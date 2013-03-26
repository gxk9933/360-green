<?php if($page){?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">
	<div id="product_header">
		<div id="product_pic">
			<div id="product_big_pic">
				<?php 
				$i = 0;
				foreach($files as $pic){
					$i++;
					print theme('imagecache', '310x310', $pic->filepath);
					if($i >=3) break;
				}?>
			</div>
			<ul>
				<?php 
				$i = 0;
				foreach($files as $pic){
					$i++;
					print '<li>'.theme('imagecache', '63x63', $pic->filepath).'</li>';
					if($i >=3) break;
				}?>
			</ul>
		</div>
		<script type="text/javascript">
		$("#product_pic ul li").click(function() {
				var i = $('#product_pic ul li').index(this);
				$("#product_big_pic img").filter(":visible").fadeOut(500).parent().children().eq(i).fadeIn(1000);
				if($(this).className=="on"){
					return false;
				}else {
					$(this).addClass("on");
				}
				$(this).siblings().removeAttr("class");
			});
		</script>
		<div id="product_intro">
			<p><b>产品名称：</b><?php print $title ?></p>
			<?php foreach($node->taxonomy as $term){
				if($term->vid == TAXONOMY_VID_PRODUCT_TYPE){
					print "<p><b>类别：</b>{$term->name}</p>";
				}elseif($term->vid == TAXONOMY_VID_BRAND_TYPE){
					print "<p><b>品牌：</b>{$term->name}</p>";
				}
			}?>
			<p><b>市场价格：</b><font color="red"><?php print $field_original_price[0]['value'] ?></font>元</p>
			<p><b>网站价格：</b><font color="red"><?php print $field_present_price[0]['value'] ?></font>元</p>
			<p><b>浏览：</b><?php print $node->links['click_times'] ?>次</p>
		</div>
	</div>

	<ul id="product_content_select">
		<li class="active">商品介绍</li>
		<li>配送安装</li>
		<li>售后服务</li>
		<li>配送流程</li>
	</ul>
  
	<?php 
		$peisonganzhuang = node_load(NODE_NID_PEISONGANZHUANG);
		$shouhoufuwu = node_load(NODE_NID_SHOUHOUFUWU);
		$dinggouliucheng = node_load(NODE_NID_DINGGOULIUCHENG);
		
	?>
	<div id="product_content" class="content clear-block">
		<div><?php print $node->content[body]['#value']; ?></div>
	    <div><?php print $peisonganzhuang->body;?></div>
	    <div><?php print $shouhoufuwu->body;?></div>
	    <div><?php print $dinggouliucheng->body;?></div>
	</div>
	
	<script type="text/javascript">
	
		$("#product_content")
		  .children(':not(:first-child)')
		  .hide()
		  .end()
		  .children(':first-child')
		  .show()
		  .addClass('active');
		  //尚未改完
		$("#product_content_select li").each(function(i){
			$(this).click(function(k){
				var _index = i;
				$('#product_content_select li').removeClass();
				$(this).addClass('active');
				$("#product_content").children().hide().end().children().eq(_index).show();
			})
		})


		
	</script>
</div>

<?php }else{?>
	<div id="node-<?php print $node->nid; ?>" class="node-teaser<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">
		<div class="middle-pic">
		<?php 
		$pic = array_shift($files);
		print l(theme('imagecache', '174x174', $pic->filepath), 'node/'.$nid, array('html' => true));
		?>
		</div>
		<div class="teaser-info">
		<p class="teaser-title"><?php print l($title, 'node/'.$nid) ?></p>
		<p><?php 
		$teaser = trim($field_teaser[0]['value']);
		print $teaser? "<pre>$teaser</pre>": website_substr(strip_tags($node->content[body]['#value']), 0, 200); ?>
		<span class="view"><?php print l('【查看】', 'node/'.$nid)?></span></p>
		</div>
		
	</div>
	<div class="cf"></div>
<?php }?>