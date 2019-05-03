<?php 


class Whatsapp {

	public $numero = null;
	public $texto = null;

	function __construct($ddi,$ddd,$num,$txt){
		if($ddi && $ddd && $num){
			$w = "+";
			$w .= preg_replace("/[^0-9]/", '', get_option($ddi));
			$w .= preg_replace("/[^0-9]/", '', get_option($ddd));
			$w .= preg_replace("/[^0-9]/", '', get_option($num));
			
			if(strlen($w)==14)
				$this->numero = $w;
		}
		if($txt!=null){
			$this->texto = get_option($txt);
		}
	}

}

$whatsapp = new Whatsapp('mvl_whatsapp_ddi','mvl_whatsapp_ddd','mvl_whatsapp_num','mvl_whatsapp_txt');

if(null==$whatsapp->numero){
	return;
}

?>

<div id="whatsapp_mvl">
	<a href="https://web.whatsapp.com/send?l=pt&amp;phone=<?php echo $whatsapp->numero ?>text=<?php echo $whatsapp->texto ?>" class="whats_fixed show-for-medium-up" target="_blank">
			<div>
				<span class="icon i-whatsapp"></span>
			</div>
	</a>

	<a href="https://api.whatsapp.com/send?l=pt&amp;phone=<?php echo $whatsapp->numero ?>text=<?php echo $whatsapp->texto ?>" class="whats_fixed show-for-small-only" target="_blank">
		<div>
			<span class="icon i-whatsapp"></span>
		</div>
	</a>
</div>