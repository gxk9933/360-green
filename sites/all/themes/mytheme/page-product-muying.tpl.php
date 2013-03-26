<?php include('header.tpl.php');?>

<div id="muying-column">
	<?php 
	$products = array();
	$p['url'] = 'product/12';
	$p['title'] = 'CDW7101V净水器 新品上市 超强滤铅，母婴推荐';
	$p['img'] = 'CDW7101V.jpg';
	$p['img2'] = 'CDW7101V_liuliang.jpg';
	$p['img3'] = 'CDW7101V_texing.jpg';
	$p['content'] = '产品特性：
	<ul>
	<li>过滤水中的铁锈，泥沙，余氯异味</li>
	<li>3M专利烧结活性炭棒，过滤孢子包囊</li>
	<li>过滤铅等重金属污染，保护宝宝智力发育</li>
	<li>过滤苯、八氯茨烯、二氯代苯等挥发性有机物（VOC）</li>
	</ul>';
	$products[] = $p;
	
	$p['url'] = 'product/23';
	$p['title'] = 'AP EASY Complete净水器超强滤铅，母婴推荐！高性价比，居家首选';
	$p['img'] = 'AP-EASY.jpg';
	$p['img2'] = 'AP-EASY-liuliang.jpg';
	$p['img3'] = 'AP-EASY-texing.jpg';
	$p['content'] = '产品特性：
	<ul>
	<li>过滤水中的铁锈，泥沙，余氯异味</li>
	<li>3M专利烧结活性炭棒，过滤孢子包囊</li>
	<li>过滤铅等重金属污染，保护宝宝智力发育</li>
	<li>过滤苯、八氯茨烯、二氯代苯等挥发性有机物（VOC）</li>
	</ul>';
	$products[] = $p;
	
	$p['url'] = 'product/79';
	$p['title'] = 'CDW2201净水器 经济型 实惠之选 过滤铅等重金属污染';
	$p['img'] = 'cdw2201.jpg';
	$p['img2'] = 'cdw2201_liuliang.jpg';
	$p['img3'] = 'cdw2201_texing.jpg';
	$p['content'] = '产品特性：
	<ul>
	<li>流量适宜，居家精选</li>
	<li>去除铁锈/余氯，口感更好</li>
	<li>过滤孢子孢囊</li>
	<li>过滤铅等重金属污染</li>
	</ul>';
	$products[] = $p;
	
	$p['url'] = 'product/78';
	$p['title'] = 'CDW7201Z 更大流量，饮用餐厨两相宜 特别过滤铅等重金属污染';
	$p['img'] = 'cdw7201.jpg';
	$p['img2'] = 'cdw7201_liuliang.jpg';
	$p['img3'] = 'cdw7201_texing.jpg';
	$p['content'] = '产品特性：
	<ul>
	<li>去“芯”洁净，品味放心好水</li>
	<li>去除铁锈/余氯，口感更好</li>
	<li>过滤孢子孢囊</li>
	<li>特别过滤铅等重金属污染</li>
	<li>0.2微米超细过滤孔径</li>
	</ul>';
	$products[] = $p;
	?>
	<?php foreach($products as $p){?>
	<table class="muying_product" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td rowspan="3" class="img">
		<?php print l(
			theme('image', 'sites/default/files/muying_product/'.$p['img']), $p['url'], array('html' => true, 'attributes' => array('target' => '_blank')))?>
		</td>
		<td colspan="2" class="title"><?php print $p['title'];?></td>
		<td rowspan="3" class="view">
			<?php print l(theme('image', path_to_theme().'/images/view_product.jpg'), $p['url'], array('html' => true, 'attributes' => array('target' => '_blank')))?>
		</td>
	</tr>
	<tr>
		<td class="img2"><?php print theme('image', 'sites/default/files/muying_product/'.$p['img2']);?></td>
		<td rowspan="2" class="img3"><?php print theme('image', 'sites/default/files/muying_product/'.$p['img3']);?></td>
	</tr>
	<tr>
		<td class="intro"><?php print $p['content'];?></td>
	</tr>
	</table>
	<?php }?>
</div>          
				
				
<?php include('footer.tpl.php');?>