<?php if(null==get_option('mvl_whatsapp_num')){return false;return;} ?>

<div id="whatsapp_mvl">
	<a href="https://web.whatsapp.com/send?l=pt&amp;phone=<?php echo get_option('mvl_whatsapp_num') ?>text=<?php echo get_option('mvl_whatsapp_txt') ?>" class="whats_fixed show-for-medium-up" target="_blank">
			<div>
				<span class="icon i-whatsapp"></span>
			</div>
	</a>

	<a href="https://api.whatsapp.com/send?l=pt&amp;phone=<?php echo get_option('mvl_whatsapp_num') ?>text=<?php echo get_option('mvl_whatsapp_txt') ?>" class="whats_fixed show-for-small-only" target="_blank">
		<div>
			<span class="icon i-whatsapp"></span>
		</div>
	</a>
</div>