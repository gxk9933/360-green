</div><!-- /#content -->
	  <div class="cf"></div>
      

    </div><!-- /#main-wrapper -->

</div></div><!-- /#page, /#page-wrapper -->
	  	<div id="footer">
			<?php print $footer; ?>
		</div>
		<div id="bottom">
		
		<?php print theme(array('links__system_secondary_menu', 'links'), $secondary_links,
          array(
            'id' => 'forth-menu',
            'class' => 'links clearfix',
          ),
          array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => 'element-invisible',
          ));
        ?>
        
        <div id="footer-message"><?php print $footer_message; ?>
        <script src="http://s85.cnzz.com/stat.php?id=4339235&web_id=4339235&show=pic" language="JavaScript"></script>
        </div>
       </div> 
	</div>
<div id="floatAdv">
	<div class="content">
		<p><a href="tencent://message/?uin=491999515&amp;Site=im.qq.com&amp;Menu=yes" target="blank"><img border="0" alt="1" src="http://wpa.qq.com/pa?p=1:491999515:4">&nbsp;&nbsp;客服一</a></p>
		<p><a href="tencent://message/?uin=104364456&amp;Site=im.qq.com&amp;Menu=yes" target="blank"><img border="0" alt="2" src="http://wpa.qq.com/pa?p=1:104364456:4">&nbsp;&nbsp;客服二</a></p>
    </div>
</div>
<script type="text/javascript">  
    var name = $('#floatAdv').show().stop({});
	function scrollAd() {
			var offset = $(window).height() - $(name).height();
			if (offset < 0) {
				offset = 1;
			}
			else {
				offset = Math.ceil(offset/2);
			}
			offset += $(document).scrollTop();
			$(name).animate({top: offset}, {duration: 800, queue: false, complete: function() {$(name).css({'visibility':'inherit'});}});
		}
	scrollAd();
	$(window).scroll(scrollAd);
	$(window).resize(scrollAd);
</script>
  <?php print $page_closure; ?>
  <?php print $closure; ?>
</body>
</html>