<?php
if (!current_user_can('manage_options'))  {
	wp_die( __('You do not have sufficient permissions to access this page.') );
}

?>

<style type="text/css">
.half{width:50%;float:left;}
.wrap{zoom:1;overflow:auto;}
.text-right {text-align: right;display: block;}
.header_infos {padding:15px 45px 15px 0;}
.header_infos img {max-width:200px;margin-bottom:;}
.header_infos a {display: inline-block;}
</style>

<div class="mvl_options_general">

	<div class="wrap header_infos">
		<div class="half">
			<h1>Whatsapp</h1>
		</div>
		<div class="half text-right">
			
		</div>
	</div>

	<?php if($_POST) : ?>
	<div id="message" class="updated notice notice-success is-dismissible"><p>Configurações atualizadas. </p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dispensar este aviso.</span></button></div>
	<?php endif; ?>

	<table class="form-table">
		<hr>
		<form action="" method="post">

			<!-- REDES SOCIAIS -->
			<?php

			add_option('mvl_whatsapp_ddi','');
			if(isset($_POST['mvl_whatsapp_ddi'])){
				update_option('mvl_whatsapp_ddi',$_POST['mvl_whatsapp_ddi']);
			}
			add_option('mvl_whatsapp_ddd','');
			if(isset($_POST['mvl_whatsapp_ddd'])){
				update_option('mvl_whatsapp_ddd',$_POST['mvl_whatsapp_ddd']);
			}
			add_option('mvl_whatsapp_num','');
			if(isset($_POST['mvl_whatsapp_num'])){
				update_option('mvl_whatsapp_num',$_POST['mvl_whatsapp_num']);
			}

			add_option('mvl_whatsapp_txt','');
			if(isset($_POST['mvl_whatsapp_txt'])){
				update_option('mvl_whatsapp_txt',$_POST['mvl_whatsapp_txt']);
			}

			?>
			<tr>
				<th scope='row'><label for='mvl_whatsapp_num'>Número</cite></label></th>
				<td>
					<input class="regular-text" type="text" name='mvl_whatsapp_ddi' id='mvl_whatsapp_num' placeholder='55' value='<?php echo get_option('mvl_whatsapp_ddi') ?>' maxlength= "2" style="width: 30px;text-align: center;">
					<input class="regular-text" type="text" name='mvl_whatsapp_ddd' id='mvl_whatsapp_num' placeholder='41' value='<?php echo get_option('mvl_whatsapp_ddd') ?>' maxlength= "2" style="width: 30px;text-align: center;">
					<input class="regular-text" type="text" name='mvl_whatsapp_num' id='mvl_whatsapp_num' placeholder='9 9999-9999' value='<?php echo get_option('mvl_whatsapp_num') ?>' style="width: 278px;">
				</td>
			</tr>
			<tr>
				<th scope='row'><label for='mvl_whatsapp_txt'>Texto</label></th>
				<td>
					<input class="regular-text" type="text" name='mvl_whatsapp_txt' id='mvl_whatsapp_txt' placeholder='Olá, gostaria de um orçamento.' value='<?php echo get_option('mvl_whatsapp_txt') ?>'>
				</td>
			</tr>
			<!-- SALVAR TUDO -->

			<tr>
				<th><input type="submit" name="Submit" value="Salvar alterações" class="button button-primary" /></th>
			</tr>

		</form>
	</table>


</div>