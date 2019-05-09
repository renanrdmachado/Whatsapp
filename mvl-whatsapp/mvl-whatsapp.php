<?php
/**
 * Plugin Name: Whatsapp by MVL
 * Plugin URI:  https://movelcomunicacao.com.br
 * Description: Adicione o botão do Whatsapp no seu website
 * Version:     1
 * Author:      MVL - Movel Comunicação
 * Author URI:  https://movelcomunicacao.com.br
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mvl
 * Domain Path: /languages
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Configurações iniciais
define( 'WHATSAPPMVL_VERSION', '1' );
define( 'WHATSAPPMVL__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// Callback da ativação
function whatsappmvl_setup_page() {
	
	function whatsapp_mvl() {
	    add_menu_page(
	    	'Whatsapp',
	    	'Whatsapp',
	    	'manage_options',
	    	plugin_dir_path(__FILE__) . 'view/page.php',
	    	null,
	    	plugin_dir_url(__FILE__) . 'assets/img/i-whatsapp.svg');
	}
    add_action('admin_menu', 'whatsapp_mvl');

	//Inserção da div no frontend
	function insertWhatsappDiv(){
		require(plugin_dir_path(__FILE__) . 'view/block.php');
	}
	add_action('wp_footer','insertWhatsappDiv');

	// WP Scripts
	function whatsappmvl_scripts() {
	    wp_enqueue_style(
	    	'whatsappmvlCSS',
	    	plugins_url() . '/mvl-whatsapp/assets/css/whatsappmvl.css',
	    	$deps=array(),
	    	'1'
	    );
	}
	add_action( 'wp_enqueue_scripts', 'whatsappmvl_scripts' );

	// Admin Scripts
	function admin_whatsappmvl_scripts() {
	    wp_enqueue_style(
	    	'adminwhatsappmvlCSS',
	    	plugins_url() . '/mvl-whatsapp/assets/css/whatsappmvl.admin.css',
	    	$deps=array(),
	    	'1'
	    );
	}
	add_action( 'admin_enqueue_scripts', 'admin_whatsappmvl_scripts' );
}
add_action( 'init', 'whatsappmvl_setup_page' );
 
 //Evento ao ativar plugin
function whatsappmvl_install() {
    whatsappmvl_setup_page();

    // clear the permalinks after the post type has been registered
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'whatsappmvl_install' );

// Evento ao desativar plugin
function whatsappmvl_deactivation() {

    // clear the permalinks to remove our post type's rules from the database
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'whatsappmvl_deactivation' );
