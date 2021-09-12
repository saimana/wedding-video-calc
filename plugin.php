<?php

/*
Plugin Name: Wedding price form
Plugin URI: http://saimana.com
Description: Calculate price of your wedding video.
Version: 1.0
Author: Simeon Atanasov
Author URI: http://saimana.com
*/

/* Runs when plugin is activated */
register_activation_hook(__FILE__,'wedding_install'); 

/* Runs on plugin deactivation*/
register_deactivation_hook( __FILE__, 'wedding_uninstall');

function wedding_install() {

	$sql = "CREATE TABLE `wedding_calc` (
	`id` INT(10) NOT NULL AUTO_INCREMENT, 

	`angajiment5` VARCHAR(10) NOT NULL, 
	`angajiment7` VARCHAR(10) NOT NULL, 
	`angajiment11` VARCHAR(10) NOT NULL, 
	`angajiment14` VARCHAR(10) NOT NULL, 

	`camera1` VARCHAR(10) NOT NULL, 
	`camera2` VARCHAR(10) NOT NULL, 

	`cameras1` VARCHAR(10) NOT NULL, 
	`cameras2` VARCHAR(10) NOT NULL, 
	`cameras3` VARCHAR(10) NOT NULL, 

	`operator1` VARCHAR(10) NOT NULL, 
	`operator2` INT(10) NOT NULL, 
	`operator3` VARCHAR(10) NOT NULL, 

	`tehnika1` VARCHAR(10) NOT NULL, 
	`tehnika2` VARCHAR(10) NOT NULL, 
	`tehnika3` VARCHAR(10) NOT NULL, 
	`tehnika4` VARCHAR(10) NOT NULL, 
	`tehnika5` VARCHAR(10) NOT NULL, 
	`tehnika6` VARCHAR(10) NOT NULL, 
	`tehnika7` VARCHAR(10) NOT NULL, 

	`make1` VARCHAR(10) NOT NULL, 
	`make2` VARCHAR(10) NOT NULL, 

	`montage1` VARCHAR(10) NOT NULL, 
	`montage2` VARCHAR(10) NOT NULL, 
	`montage3` VARCHAR(10) NOT NULL, 

	`scenes1` VARCHAR(10) NOT NULL, 
	`scenes2` VARCHAR(10) NOT NULL, 
	`scenes3` VARCHAR(10) NOT NULL, 

	`menu` VARCHAR(10) NOT NULL, 
	`hdd` VARCHAR(10) NOT NULL, 
	`bluray` VARCHAR(10) NOT NULL, 
	`dvd` VARCHAR(10) NOT NULL, 
	`case1` VARCHAR(10) NOT NULL, 
	`case2` VARCHAR(10) NOT NULL, 
	`raw` VARCHAR(10) NOT NULL, 
	
	`taxi` VARCHAR(10) NOT NULL, 
	`client` VARCHAR(10) NOT NULL, 
	`company` VARCHAR(10) NOT NULL, 
	
	`hotel1` VARCHAR(10) NOT NULL, 
	`hotel2` VARCHAR(10) NOT NULL, 
	
	`izrabotka1` VARCHAR(10) NOT NULL, 
	`izrabotka2` VARCHAR(10) NOT NULL, 
	`izrabotka3` VARCHAR(10) NOT NULL, 
	`izrabotka4` VARCHAR(10) NOT NULL, 
	
	`pay1` VARCHAR(10) NOT NULL, 
	`pay2` VARCHAR(10) NOT NULL, 
	`pay3` VARCHAR(10) NOT NULL, 
	
	`interview` VARCHAR(10) NOT NULL, 
	
	PRIMARY KEY (`id`)) ENGINE = MyISAM;";
	
	createTable('wedding_calc', $sql);

} 

	
function createTable($theTable, $sql){

	//call $wpdb to the give us the access to the DB
	global $wpdb;
	
	//using the get_var routine which is best to get a single value
	if($wpdb->get_var("show tables like '". $theTable . "'") != $theTable) { 
	
		//the query function lets us execute most MySQL querys
		$wpdb->query($sql); 
	}
}

function wedding_uninstall() {

	remove_action('admin_menu', 'wedding_menu'); 

}


if(is_admin()) {

	// create custom plugin settings menu
	add_action('admin_menu', 'wedding_menu');

	function wedding_menu() {
	
		//create new top-level menu
		add_menu_page('Wedding Calculator', 'Wedding Calc', 'administrator', __FILE__, 'wedding_settings_page', plugins_url('wedding-calculator/wand_16.png'));

	}
	

	// Admin page options 
	function wedding_settings_page() {
	
		global $wpdb;
		require_once(dirname(__FILE__) . '/backend.php');
		
	}   

	
	// Saving data from admin settings	
	if($_POST['submit']) {

		//Checking database for entries 
		$wpdb->get_results("SELECT * FROM  `wedding_calc`");
		
		if($wpdb->num_rows) {

			// Updating the database with new entries
			$wpdb->update('wedding_calc', array( 			
					'angajiment5' => $_POST['angajiment5'],
					'angajiment7' => $_POST['angajiment7'],
					'angajiment11' => $_POST['angajiment11'],
					'angajiment14' => $_POST['angajiment14'],
					'camera1' => $_POST['camera1'],
					'camera2' => $_POST['camera2'],
					'cameras1' => $_POST['cameras1'],
					'cameras2' => $_POST['cameras2'],
					'cameras3' => $_POST['cameras3'],
					'operator1' => $_POST['operator1'],
					'operator2' => $_POST['operator2'],
					'operator3' => $_POST['operator3'],
					'tehnika1' => $_POST['tehnika1'],
					'tehnika2' => $_POST['tehnika2'],
					'tehnika3' => $_POST['tehnika3'],
					'tehnika4' => $_POST['tehnika4'],
					'tehnika5' => $_POST['tehnika5'],
					'tehnika6' => $_POST['tehnika6'],
					'tehnika7' => $_POST['tehnika7'],
					'make1' => $_POST['make1'],
					'make2' => $_POST['make2'],
					'montage1' => $_POST['montage1'],
					'montage2' => $_POST['montage2'],
					'montage3' => $_POST['montage3'],
					'scenes1' => $_POST['scenes1'],
					'scenes2' => $_POST['scenes2'],
					'scenes3' => $_POST['scenes3'],
					'menu' => $_POST['menu'],
					'hdd' => $_POST['hdd'],
					'bluray' => $_POST['bluray'],
					'dvd' => $_POST['dvd'],
					'case1' => $_POST['case1'],
					'case2' => $_POST['case2'],
					'raw' => $_POST['raw'],
					'taxi' => $_POST['taxi'],
					'client' => $_POST['client'],
					'company' => $_POST['company'],
					'hotel1' => $_POST['hotel1'],
					'hotel2' => $_POST['hotel2'],
					'izrabotka1' => $_POST['izrabotka1'],
					'izrabotka2' => $_POST['izrabotka2'],
					'izrabotka3' => $_POST['izrabotka3'],
					'izrabotka4' => $_POST['izrabotka4'],
					'pay1' => $_POST['pay1'],
					'pay2' => $_POST['pay2'],
					'pay3' => $_POST['pay3'],
					'interview' => $_POST['interview']
				), 
				array( 'id' => 1 ));
				
		} else {
		
			//Inserting in database for first time
			$wpdb->insert( 'wedding_calc', array( 			
					'angajiment5' => $_POST['angajiment5'],
					'angajiment7' => $_POST['angajiment7'],
					'angajiment11' => $_POST['angajiment11'],
					'angajiment14' => $_POST['angajiment14'],
					'camera1' => $_POST['camera1'],
					'camera2' => $_POST['camera2'],
					'cameras1' => $_POST['cameras1'],
					'cameras2' => $_POST['cameras2'],
					'cameras3' => $_POST['cameras3'],
					'operator1' => $_POST['operator1'],
					'operator2' => $_POST['operator2'],
					'operator3' => $_POST['operator3'],
					'tehnika1' => $_POST['tehnika1'],
					'tehnika2' => $_POST['tehnika2'],
					'tehnika3' => $_POST['tehnika3'],
					'tehnika4' => $_POST['tehnika4'],
					'tehnika5' => $_POST['tehnika5'],
					'tehnika6' => $_POST['tehnika6'],
					'tehnika7' => $_POST['tehnika7'],
					'make1' => $_POST['make1'],
					'make2' => $_POST['make2'],
					'montage1' => $_POST['montage1'],
					'montage2' => $_POST['montage2'],
					'montage3' => $_POST['montage3'],
					'scenes1' => $_POST['scenes1'],
					'scenes2' => $_POST['scenes2'],
					'scenes3' => $_POST['scenes3'],
					'menu' => $_POST['menu'],
					'hdd' => $_POST['hdd'],
					'bluray' => $_POST['bluray'],
					'dvd' => $_POST['dvd'],
					'case1' => $_POST['case1'],
					'case2' => $_POST['case2'],
					'raw' => $_POST['raw'],
					'taxi' => $_POST['taxi'],
					'client' => $_POST['client'],
					'company' => $_POST['company'],
					'hotel1' => $_POST['hotel1'],
					'hotel2' => $_POST['hotel2'],
					'izrabotka1' => $_POST['izrabotka1'],
					'izrabotka2' => $_POST['izrabotka2'],
					'izrabotka3' => $_POST['izrabotka3'],
					'izrabotka4' => $_POST['izrabotka4'],
					'pay1' => $_POST['pay1'],
					'pay2' => $_POST['pay2'],
					'pay3' => $_POST['pay3'],
					'interview' => $_POST['interview']
			));
			
		}
		
	} // if $_post
	
} else {
	
	add_action('wp_enqueue_scripts', 'calculate_script');
	
	function calculate_script() {	
		wp_enqueue_script('jquery');   
		wp_enqueue_script('jquery-ui-core'); 
		wp_enqueue_script('jquery-ui-datepicker',  FILE_URL . 'jquery.ui.datepicker.js', array('jquery','jquery-ui-core'));	
		wp_enqueue_script('calculate-script', plugins_url('calculate.js', __FILE__), array('jquery'));
		wp_enqueue_script('stickyscroll-script', plugins_url('jquery.stickyscroll.js', __FILE__), array('jquery'));
		wp_enqueue_style('jquery-ui-css', 'http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css', $deps, $ver, 'all');
		wp_enqueue_style('wedding-style', plugins_url('style.css', __FILE__), $deps, $ver, 'all' );
	}
	
	//Adding shortcode detection function
	function renderFrontEnd($atts){
		require_once(dirname(__FILE__) . '/frontend.php');

	}

	add_shortcode( 'wedding-calc', 'renderFrontEnd');
	
} // is_admin();


?>
