<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head ?>
  <link href="<?php echo base_path().path_to_theme().'/css/global.css'?>" type="text/css" rel="stylesheet"/>
  <link href="<?php echo base_path().path_to_theme().'/css/website.css'?>" type="text/css" rel="stylesheet"/>
  <script type="text/javascript" src="<?php echo base_path().path_to_theme().'/js/common.js'?>"></script>
  <script type="text/javascript" src="<?php echo base_path().path_to_theme().'/js/jquery.js'?>"></script>
  <?php if(drupal_is_front_page()){?>
  <script type="text/javascript" src="<?php echo base_path().path_to_theme().'/js/jquery.flashSlider-1.0.min.js'?>"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      $("#slider").flashSlider();
  });	
  </script>
	<?php }?>
</head>
<body class="<?php print $body_classes; ?>">
	<div id="page-wrapper"><div id="page">

		<div id="header">
			<div id="logo">
		      <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home">
		      <span><?php print $site_name; ?></span>
		      </a>
		    </div>
		  
		  
			<div id="second-menu">
				
		     	<span><?php print l('联系我们', 'page/contactus');?></span>
		     	<span>|</span>
		     	<span><a onclick="addFavorite('<?php print 'http://'.$_SERVER['HTTP_HOST'];?>','<?php print $site_name; ?>');" href="javascript:void(0);">加入收藏</a></span>
		     	<span>|</span>
		     	<span><a onclick="setHomepg('<?php print 'http://'.$_SERVER['HTTP_HOST'];?>');" href="javascript:void(0);">设为首页 </a></span>
		     	<span>|</span>
		     	<span>
		     	<?php print theme('image', path_to_theme().'/images/sina_icon.png'); ?>
				<?php print l('关注创鼎', 'http://e.weibo.com/chuangding',
						array('html' => true, 'attributes' => array('target' => '_blank')));?>
		     	
		     	</span>
			</div>
			
			<div class="menu_kuang">
				<ul class="links clearfix" id="main-menu">
					<li><?php print ll('首页', 'home')?></li>
					<?php 
					foreach($product_terms as $tid => $term){
						$term_class = $term['parent']->class?" class=\"{$term['parent']->class}\" ":'';
						print '<li class="show_menu_down"><a id="menu-'.$tid.'" href="javascript:void(0)"'.$term_class.'>'
							.$term['parent']->name.'</a></li>';
					}
					?>
					<li><?php print ll('母婴专题', 'product/muying')?></li>
					<li><?php print ll('关于我们', 'page/aboutus')?></li>
				</ul>

				<div>
				<?php 
				foreach($product_terms as $tid => $term){
					print '<div id="menu-'.$tid.'-down" class="menu_down">';
					print $term['parent']->name.':';
					if(empty($term['child'])) continue;
					foreach($term['child'] as $child_term){
						print '<span>'.ll($child_term->name, 'product/search/'.$child_term->tid).'</span>';
					}
							
					print '</div>';
				}
				?>
				</div>
			</div>
			<script type="text/javascript">
				$(".menu_down").hide();
				$(".show_menu_down a").click(function(event){
					var id = "#" + $(this).attr('id') + '-down';
					$(id).slideDown(400).siblings().slideUp(400);
				});
				
				$(".menu_kuang").bind('mouseleave', function(event){
					$(".menu_down").slideUp(400);
					
				});
				
			
			</script>
			
	    </div><!-- /.section, /#header -->
    
	    <div id="main-wrapper">
	
	      <div id="content" class="column">
			<?php //print $breadcrumb; ?>
			<?php print $messages; ?>
			<?php if ($tabs && false): ?>
	          <div class="tabs"><?php print $tabs; ?></div>
	        <?php endif; ?>
	        
	        
    