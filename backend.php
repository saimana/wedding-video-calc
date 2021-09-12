<div class="wrap">
	<h2>Wedding Calculator Settings</h2>
	<div class="updated"><p>Въведете цените във полетата в дясно БЕЗ изписване на лв. ПРИМЕР: 10, 13.50, 399.99</p></div>
	<form method="POST" action="admin.php?page=wedding-calculator/plugin.php">
		<?php //wp_nonce_field('update-options'); ?>
		<?php //settings_fields( 'wedding-settings-group' ); ?>
		<?php //do_settings_fields( 'wedding_menu', 'wedding-settings-group' ); ?> 
		<?php
		
		$topPageDetails = $wpdb->get_row("SELECT * FROM `wedding_calc` WHERE id= '1'");
		//print_r($topPageDetails);
		
         if($topPageDetails){
				$ggg = array();
                foreach($topPageDetails as $detail => $value){
					array_push($ggg, $value);
                }
         }
		?>
		
		<h3>1.АНГАЖИМЕНТ НА ОПЕРАТОР</h3>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">До 5 часа</th>
				<td><input type="text" name="angajiment5" value="<?php echo $ggg['1']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">До 7 часа</th>
				<td><input type="text" name="angajiment7" value="<?php echo $ggg['2']; ?>" /></td>
			</tr>
			
			<tr>
			<th scope="row">До 11 часа</th>
			<td>
				<input type="text" name="angajiment11" value="<?php echo $ggg['3']; ?>" />
			</td>
			</tr>
			
			<tr>
			<th scope="row">До 14 часа</th>
			<td>
				<input type="text" name="angajiment14" value="<?php echo $ggg['4']; ?>" />
			</td>
			</tr> 
		</table>
		
		<h3>2. ВИД КАМЕРА</h3>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">Камера HD/ DSLR 1920/1080</th>
				<td> <input type="text" name="camera1" value="<?php echo $ggg['5']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">Камера HD/ CAMCORDER 1920/1080 </th>
				<td><input type="text" name="camera2" value="<?php echo $ggg['6']; ?>" /></td>
			</tr>
		</table>
		
		<h3>3.БРОЙ КАМЕРИ</h3>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">1 камера</th>
				<td><input name="cameras1" type="text" value="<?php echo $ggg['7']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">2 камери</th>
				<td><input name="cameras2" type="text" value="<?php echo $ggg['8']; ?>" /></td>
			</tr>
			
			<tr>
			<th scope="row">3 камери +</th>
			<td><input name="cameras3" type="text" value="<?php echo $ggg['9']; ?>" /></td>
			</tr>
		</table>
		
		<h3>4.БРОЙ ОПЕРАТОРИ</h3>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">1 оператор</th>
				<td><input name="operator1" type="text" value="<?php echo $ggg['10']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">2 оператори</th>
				<td><input name="operator2" type="text" value="<?php echo $ggg['11']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">3 оператори</th>
				<td><input name="operator3" type="text" value="<?php echo $ggg['12']; ?>" /></td>
			</tr>
		</table>
		
		<h3>5.ДОПЪЛНИТЕЛНА ТЕХНИКА</h3>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">Аудио рекордер</th>
				<td><input name="tehnika1" type="text" value="<?php echo $ggg['13']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">Аудио рекордер + асистент</th>
				<td><input name="tehnika2" type="text" value="<?php echo $ggg['14']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">Осветление</th>
				<td><input name="tehnika3" type="text" value="<?php echo $ggg['15']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">Стедикам</th>
				<td><input name="tehnika4" type="text" value="<?php echo $ggg['16']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">Слайдер</th>
				<td><input name="tehnika5" type="text" value="<?php echo $ggg['17']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">Видео кран</th>
				<td><input name="tehnika6" type="text" value="<?php echo $ggg['18']; ?>" /></td>
			</tr>	
			<tr>
				<th scope="row">Фарт</th>
				<td><input name="tehnika7" type="text" value="<?php echo $ggg['19']; ?>" /></td>
			</tr>		
		</table>
		
		<h3>6.ДРУГИ</h3>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">Интервю с гостите</th>
				<td><input name="interview" type="text" value="<?php echo $ggg['47']; ?>" /></td>
			</tr>
		</table>		

		<h3>7.ПОСТ ПРОДУКЦИЯ ( ВИДЕО МОНТАЖ )</h3>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">ИЗРАБОТКА НА ВИДЕО ПОКАНА</th>
				<td><input name="make1" type="text" value="<?php echo $ggg['20']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">ИЗРАБОТКА НА ВИДЕО КЛИП ( ТЕРЙЛЪР )</th>
				<td><input name="make2" type="text" value="<?php echo $ggg['21']; ?>" /></td>
			</tr>
			
			
			<tr>
				<th scope="row">ВИДЕО МОНТАЖ НА ФИЛМА ДО 90мин.</th>
				<td><input name="montage1" type="text" value="<?php echo $ggg['22']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">ВИДЕО МОНТАЖ НА ФИЛМА ДО 120мин.</th>
				<td><input name="montage2" type="text" value="<?php echo $ggg['23']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">ВИДЕО МОНТАЖ НА ФИЛМА ДО 180мин.</th>
				<td><input name="montage3" type="text" value="<?php echo $ggg['24']; ?>" /></td>
			</tr>	
			
			<tr>
				<th scope="row">ПО-СЦЕНАРИИ НА КЛИЕНТА</th>
				<td><input name="scenes1" type="text" value="<?php echo $ggg['25']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">ПО-СЦЕНАРИИ НА МОНТАЖИСТА</th>
				<td><input name="scenes2" type="text" value="<?php echo $ggg['26']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">РЕПОРТАЖ - БЕЗ ВИДЕО МОНТАЖ</th>
				<td><input name="scenes3" type="text" value="<?php echo $ggg['27']; ?>" /></td>
			</tr>
		</table>

		
		<h3>8.МАСТЕРИРАНЕ НА ФИЛМА</h3>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">ИЗРАБОТКА НА НАВИГАЦИОННО МЕНЮ</th>
				<td><input name="menu" type="text" value="<?php echo $ggg['28']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">ЕКСПОРТ НА HDD ( предоставен от клиента )</th>
				<td><input name="hdd" type="text" value="<?php echo $ggg['29']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">ЗАПИС НА БЛУ РАЙ ДИСК / цена за брой</th>
				<td><input name="bluray" type="text" value="<?php echo $ggg['30']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">ЗАПИС НА DVD / цена за брой</th>
				<td><input name="dvd" type="text" value="<?php echo $ggg['31']; ?>" /></td>
			</tr>

			<tr>
				<th scope="row">ЛУКСОЗНА КУТИЯ</th>
				<td><input name="case1" type="text" value="<?php echo $ggg['32']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">СТАНДАРТНА КУТИЯ</th>
				<td><input name="case2" type="text" value="<?php echo $ggg['33']; ?>" /></td>
			</tr>	
		
			<tr>
				<th scope="row">НЕОБРАБОТЕН МАТЕРИАЛ</th>
				<td><input name="raw" type="text" value="<?php echo $ggg['34']; ?>" /></td>
			</tr>
		</table>	

		<h3>9.ТРАНСПОРТ</h3>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">с такси</th>
				<td><input name="taxi" type="text" value="<?php echo $ggg['35']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">с транспорт на клиента</th>
				<td><input name="client" type="text" value="<?php echo $ggg['36']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">с транспорт на фирмата</th>
				<td><input name="company" type="text" value="<?php echo $ggg['37']; ?>" /></td>
			</tr>
		</table>

		<h3>10.ХОТЕЛСКИ, ТРАНСПОРТНИ И КОМАНДИРОВАЧНИ</h3>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">извън територията на София</th>
				<td><input name="hotel1" type="text" value="<?php echo $ggg['38']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">извън територията на България</th>
				<td><input name="hotel2" type="text" value="<?php echo $ggg['39']; ?>" /></td>
			</tr>
		</table>	
		
		<h3>11.СРОК ЗА ИЗРАБОТКА НА СВАТБЕНИЯТ ФИЛМ</h3>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">до 15 работни дни</th>
				<td><input name="izrabotka1" type="text" value="<?php echo $ggg['40']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">до 25 работни дни</th>
				<td><input name="izrabotka2" type="text" value="<?php echo $ggg['41']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">до 35 работни дни</th>
				<td><input name="izrabotka3" type="text" value="<?php echo $ggg['42']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">до 45 работни дни</th>
				<td><input name="izrabotka4" type="text" value="<?php echo $ggg['43']; ?>" /></td>
			</tr>
		</table>

		<h3>12.НАЧИН НА ПЛАШАНЕ</h3>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">30% авансово плащане</th>
				<td><input name="pay1" type="text" value="<?php echo $ggg['44']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">50% авансово плащане</th>
				<td><input name="pay2" type="text" value="<?php echo $ggg['45']; ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">100% авансово плащане</th>
				<td><input name="pay3" type="text" value="<?php echo $ggg['46']; ?>" /></td>
			</tr>
		</table>
		<input type="hidden" name="action" value="update" />
		<input type="hidden" name="page_options" value="hello_world_data" />
		<?php submit_button(); ?>

	</form>
	</div>