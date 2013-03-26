<?php include('header.tpl.php');?>
<?php 
	        //左侧栏
	        if($left):?>
		        <div id="left">
					<?php print $left; ?>
				</div>
			<?php endif; ?>
			
	        <div id="content-area">
	          <?php print $content_top; ?>
				<?php print $content; ?>
				<?php print $content_bottom; ?>
        </div>
        
        <?php 
        //右侧栏
        if($right):?>
	        <div id="right">
	      		<?php print $right; ?>
	      	</div>
		<?php endif; ?>
      
<?php include('footer.tpl.php');?>