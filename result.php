<?php

// locating wp-load file
function fs_get_wp_config_path()
{
    $base = dirname(__FILE__);
    $path = false;

    if (@file_exists(dirname(dirname($base))."/wp-load.php"))
    {
        $path = dirname(dirname($base))."/wp-load.php";
    }
    else
    if (@file_exists(dirname(dirname(dirname($base)))."/wp-load.php"))
    {
        $path = dirname(dirname(dirname($base)))."/wp-load.php";
    }
    else
    $path = false;

    if ($path != false)
    {
        $path = str_replace("\\", "/", $path);
    }
    return $path;
}


require_once( fs_get_wp_config_path() );

global $wpdb;

$query = $wpdb->get_row("SELECT * FROM `wedding_calc` WHERE id= '1'");

$prices = objectToArray($query);
 
function objectToArray($d) {
	if (is_object($d)) {
		// Gets the properties of the given object
		// with get_object_vars function
		$d = get_object_vars($d);
	}

	if (is_array($d)) {
		/*
		* Return array converted to object
		* Using __FUNCTION__ (Magic constant)
		* for recursive call
		*/
		return array_map(__FUNCTION__, $d);
	}
	else {
		// Return array
		return $d;
	}
}
 

//print_r($prices);
//print_r($_POST);

if($_POST['calc'] == true) {

	//all data from user
	$angajiment = $_POST['angajiment'];
	$camera = $_POST['camera'];
	$camera2 = $_POST['camera2'];
	$operator = $_POST['operator'];
	$tehnika1 = $_POST['tehnika1'];
	$tehnika2 = $_POST['tehnika2'];
	$tehnika3 = $_POST['tehnika3'];
	$tehnika4 = $_POST['tehnika4'];
	$tehnika5 = $_POST['tehnika5'];
	$tehnika6 = $_POST['tehnika6'];
	$tehnika7 = $_POST['tehnika7'];
	$interview = $_POST['interview'];
	$make = $_POST['make'];
	$make2 = $_POST['make2'];
	$montage = $_POST['montage'];
	$scenes = $_POST['scenes'];
	$menu = $_POST['menu'];
	$hdd = $_POST['hdd'];
	$bluray = $_POST['bluray'];
	$blurayQnt = $_POST['blurayQnt'];
	$dvd = $_POST['dvd'];
	$dvdQnt = $_POST['dvdQnt'];
	$case = $_POST['case'];
	$case2 = $_POST['case2'];
	$raw = $_POST['raw'];
	$transport = $_POST['transport'];
	$hotel = $_POST['hotel'];
	$izrabotka = $_POST['izrabotka'];
	$pay = $_POST['pay'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$date = $_POST['date'];

	//Price variables
	$angajimentPrice = 0;
	$cameraPrice = 0;
	$camera2Price = 0;
	$operatorPrice = 0; 
	$tehnika1Price = 0; 
	$tehnika2Price = 0;
	$tehnika3Price = 0;
	$tehnika4Price = 0;
	$tehnika5Price = 0;
	$tehnika6Price = 0; 
	$tehnika7Price = 0; 
	$interviewPrice = 0; 
	$make1Price = 0;
	$make2Price  = 0;
	$montagePrice = 0;
	$scenesPrice = 0; 
	$menuPrice = 0;
	$hddPrice = 0;
	$blurayPrice = 0;
	$dvdPrice = 0;
	$casePrice = 0;
	$rawPrice = 0;
	$transportPrice = 0;
	$hotelPrice = 0; 
	$izrabotkaPrice = 0;

	$return['warning'];
	$return['error'] = false;
	
	
	//1.АНГАЖИМЕНТ НА ОПЕРАТОР
	if($angajiment == '5') {
		$angajimentPrice = $prices['angajiment5'];
		
	} else if ($angajiment == '7') {
		$angajimentPrice = $prices['angajiment7'];
		
	} else if ($angajiment == '11') {
		$angajimentPrice = $prices['angajiment11'];
		
	} else if ($angajiment == '14') {
		$angajimentPrice  = $prices['angajiment14'];
	}
	

	// 2. ВИД КАМЕРА
	if($camera == '') {
		$return['error'] = true;
		$return['warning'] .= 'Моля изберете <a href="#to4ka2">камера<a/><br>';
	
	} else if ($camera == '1') {
		$cameraPrice = $prices['camera1'];
		
	} else if($camera == '2') {
		$cameraPrice  = $prices['camera2'];
		
	}


	// 3.БРОЙ Оператори
	if($camera2 == '1') {
		$camera2Price = $prices['cameras1'];
		
	} else if ($camera2 == '2') {
		$camera2Price = $prices['cameras2'];
		
	} else if ($camera2 == '3') {
		$camera2Price  = $prices['cameras3'];
		
	}


	// 4.БРОЙ ОПЕРАТОРИ
	if($operator == '1') {
		$operatorPrice = $prices['operator1'];
		
	} else if ($operator == '2') {
		$operatorPrice = $prices['operator2'];
		
	} else if ($operator == '3') {
		$operatorPrice  = $prices['operator3'];
		
	}


	// 5.ДОПЪЛНИТЕЛНА ТЕХНИКА
	if($tehnika1 == '1') {
		$tehnika1Price  = $prices['tehnika1'];
	} 

	if($tehnika2 == '1') {
		$tehnika2Price  = $prices['tehnika2'];
	} 

	if($tehnika3 == '1') {
		$tehnika3Price  = $prices['tehnika3'];
	} 

	if($tehnika4 == '1') {
		$tehnika4Price  = $prices['tehnika4'];
	} 

	if($tehnika5 == '1') {
		$tehnika5Price  = $prices['tehnika5'];
	} 

	if($tehnika6 == '1') {
		$tehnika6Price  = $prices['tehnika6'];
	} 

	if($tehnika7 == '1') {
		$tehnika7Price  = $prices['tehnika7'];
	} 


	// 6.Други
	if($interview == '1') {
		$interviewPrice  = $prices['interview'];
	}


	// 7.ПОСТ ПРОДУКЦИЯ
	if($scenes == '1') {
		$scenesPrice = $prices['scenes1'];
		
	} else if($scenes == '2') {
		$scenesPrice = $prices['scenes2'];
		
	} else if($scenes == '3') {
		$scenesPrice  = $prices['scenes3'];
		
	}
	
	if($scenes == '1' or $scenes == '2') {
		if($montage == '') {
			$return['error'] = true;
			$return['warning'] .= 'Моля изберете <a href="#to4ka7">дължина на видео монтажа<a/><br>';
			
		} else if($montage == '90') {
			$montagePrice = $prices['montage1'];
		
		} else if($montage == '120') {
			$montagePrice = $prices['montage2'];
			
		} else if($montage == '180') {
			$montagePrice  = $prices['montage3'];
			
		}

	}

	
	if($make == '1') {
		$make1Price  = $prices['make1']; 
	}

	if($make2 == '1') {
		$make2Price  = $prices['make2']; 
	}
	
	
	// 8.МАСТЕРИРАНЕ НА ФИЛМА
	if($menu == '1') {
		$menuPrice  = $prices['menu'];
	}

	if($hdd == '1') {
		$hddPrice  = $prices['hdd'];
	}

	if($bluray == '1') {

		if(!$blurayQnt or $blurayQnt == "") {
			$return['error'] = true;
			$return['warning'] .= 'Моля въведете <a href="#to4ka8">количество<a/> Bluray дискове.<br>';
			
		} else {

			$blurayPrice = $blurayQnt * $prices['bluray'];

			if(!$case or $case = "") {
				$return['error'] = true;
				$return['warning'] .= 'Моля изберете <a href="#to4ka8">вида на кутийката<a/> за BluRay дискове.<br>';
				
			} else if($case2 == '1') {
				$casePrice = $blurayQnt * $prices['case1'];
				
			} else if ($case2 == '2') {
				$casePrice = $blurayQnt * $prices['case2'];
			}			
			
		}
		
	}

	if($dvd == '1') {
		
		if(!$dvdQnt or $dvdQnt == "") {
			$return['error'] = true;
			$return['warning'] .= 'Моля въведете <a href="#to4ka8">количество<a/> DVD дискове.<br>';

		} else {
			$dvdPrice = $dvdQnt * $prices['dvd'];

			if(!$case2 or $case2 = "") {
				$return['error'] = true;
				$return['warning'] .= 'Моля изберете <a href="#to4ka8">вида на кутийката<a/> за DVD дискове.<br>';
				
			} else if($case2 == '1') {
				$case2Price = $dvdQnt * $prices['case1'];
				
			} else if ($case2 == '2') {
				$case2Price = $dvdQnt * $prices['case2'];
				
			}
			
		}
		
	}

	if($raw == '1') {
		$rawPrice = $prices['raw'];
	}

	// 9.ТРАНСПОРТ
	if($transport == 'taxi') {
		$transportPrice = $prices['taxi']; 
		
	} else if($transport == 'client') {
		$transportPrice = $prices['client']; 
		
	} else if($transport == 'company') {
		$transportPrice = $prices['company'];
		
	}

	// 10.ХОТЕЛСКИ, ТРАНСПОРТНИ И КОМАНДИРОВАЧНИ
	if($hotel == '2') {
		$hotelPrice = $prices['hotel1'];   
		
	} else if($hotel == '3') {
		$hotelPrice = $prices['hotel2']; 
		
	}

	// 11.СРОК ЗА ИЗРАБОТКА НА СВАТБЕНИЯТ ФИЛМ
	if($izrabotka == '15') {
		$izrabotkaPrice = $prices['izrabotka1'];   
		
	} else if($hotel == '25') {
		$izrabotkaPrice = $prices['izrabotka2'];
		
	} else if($hotel == '35') {
		$izrabotkaPrice = $prices['izrabotka3'];
		
	} else if($hotel == '45') {
		$izrabotkaPrice = $prices['izrabotka4'];
		
	}

	// Total ammount of services provided
	$totalPrice = $angajimentPrice + $cameraPrice + $camera2Price + $operatorPrice + $tehnika1Price + $tehnika2Price + $tehnika3Price + $tehnika4Price + $tehnika5Price + $tehnika6Price + $tehnika7Price + $interviewPrice + $make1Price + $make2Price + $montagePrice +  $scenesPrice + $menuPrice + $hddPrice + $blurayPrice + $dvdPrice + $casePrice + $case2Price + $rawPrice + $transportPrice + $hotelPrice + $izrabotkaPrice;


	// 12.НАЧИН НА ПЛАШАНЕ
	if ($pay == '30') {
		$totalPrice = $totalPrice - ($totalPrice * ($prices['pay1'] / 100));

	} else if ($pay == '50') {
		$totalPrice = $totalPrice - ($totalPrice * ($prices['pay2'] / 100));
		
	} else if ($pay == '100') {
		$totalPrice = $totalPrice - ($totalPrice * ($prices['pay3'] / 100));
	}
	
}

$return['text'] = 'Заснемането на вашето събитие ще струва: ';
$return['price'] = $totalPrice;

if($_POST['sender']) {

	if (empty($name) or $name == '') {
    	$return['error'] = true;
    	$return['warning'] .= 'Моля попълнете <a href="#to4ka13">име</а> <br>';
    }

	if (empty($phone) or $phone == '') {
        $return['error'] = true;
        $return['warning'] .= 'Моля попълнете <a href="#to4ka13">номер за връзка</а> с вас <br>';
    }
	
    if (empty($_POST['email']) or $_POST['email'] == '') {
    	$return['error'] = true;
    	$return['warning'] .= 'Моля попълнете <a href="#to4ka13">е-мейл</а> <br>';
    }
	
	
	if(is_valid_email($email) == false) {
        $return['error'] = true;
        $return['warning'] .= 'Не сте въвели <a href="#to4ka13">правилен е-мейл</a> <br>';
	}
	

    if (empty($date)) {
    	$return['error'] = true;
    	$return['warning'] .= 'Моля изберете <a href="#to4ka13">дата на събитието</a> <br>';
    }
	
	if (!$return['error']) {

    $return['msg'] = _('Отговорът Ви беше приет. Участвайте отново утре за по-голям шанс да спечелите някоя от нашите страхотни награди!');

	}
	
	
}




function is_valid_email($email) {
	$result = true;
  if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)) {
	$result = false;
  }
  return $result;
}

echo json_encode($return); 

?>