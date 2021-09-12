<div id="calcWrapper">

	<form id="calcform" action="" method="post">
	
	  <fieldset id="infoPanel">
		  
		<div id="price"></div>
		<div id="warning"></div>
		
	  <p>
		<legend>Вашите данни</legend>
		<label for="name">Име и фамилия</label><br>
		<input name="name" type="text" />
		<br />
		<label for="phone">Телефон</label><br>
		<input name="phone" type="text" />
		<br />
		<label for="email">Имейл</label><br>
		<input name="email" type="text" />
		<br />
		<label for="date">Дата на събитието</label><br />
		<input name="date" id="datepicker" />
		</p>
		<input type="submit" id="sender" name="sender" value="Изпрати запитването" />
	  </fieldset>
	 
	 <a name="to4ka1" id="to4ka1"></a>
	  <fieldset>
		
		<legend>1. Ангажимен на оператор</legend>
		<select name="angajiment" name="angajiment" >
		  <option value="5">до 5 часа</option>
		  <option value="7">до 7 часа</option>
		  <option value="11">до 11 часа</option>
		  <option value="14">до 14 часа</option>
		</select>
	  </fieldset>
	  
	  <a name="to4ka2" id="to4ka2"></a>
	  <fieldset>
		
		<legend>2. Вид камери</legend>
		<input name="camera" class="camera" type="radio" value="1" />
		<label for="camera">HD/ DSLR 1920/1080 </label><br />
		<input name="camera" class="camera" type="radio" value="2"  checked="checked"  />
		<label for="camera">HD/ CAMCORDER 1920/1080</label>
	  </fieldset>
	  
	  <a name="to4ka3" id="to4ka3"></a>
	  <fieldset>
		<legend>3. Брой камери</legend>
		<input name="camera2" type="radio" value="1" checked="checked" />
		<label for="camera2">1 камера</label>
		<br />
		<input name="camera2" type="radio" value="2" />
		<label for="camera2">2 камери</label>
		<br />
		<input name="camera2" type="radio" value="3" />
		<label for="camera2">3 камери +</label>
	  </fieldset>
	  
	  <a name="to4ka4" id="to4ka4"></a>
	  <fieldset>
		<legend>4. Брой оператори</legend>
		<input name="operator" type="radio" value="1" checked="checked" />
		<label for="operator">1 оператор</label>
		<br />
		<input name="operator" type="radio" value="2" />
		<label for="operator">2 оператора</label>
		<br />
		<input name="operator" type="radio" value="3" />
		<label for="operator">3 оператора +</label>
	  </fieldset>

	  <a name="to4ka5" id="to4ka5"></a>
	  <fieldset>
		<legend>5. Допълнителна техника</legend>
		<input name="tehnika1" type="checkbox" value="1" />
		<label for="tehnika1">Аудио рекордер</label>
		<br />
		<input name="tehnika2" type="checkbox" value="1" />
		<label for="tehnika2">Аудио рекордер + асистент</label>
		<br />
		<input name="tehnika3" type="checkbox" value="1" />
		<label for="tehnika3">Осветление</label>
		<br />
		<input name="tehnika4" type="checkbox" value="1" />
		<label for="tehnika4">Стедикам</label>
		<br />
		<input name="tehnika5" type="checkbox" value="1" />
		<label for="tehnika5">Слайдер</label>
		<br />
		<input name="tehnika6" type="checkbox" value="1" />
		<label for="tehnika6">Видео кран</label>
		<br />
		<input name="tehnika7" type="checkbox" value="1" />
		<label for="tehnika7">Фарт</label>
	  </fieldset>
	  
	  <a name="to4ka6" id="to4ka6"></a>
	  <fieldset>
		<legend>6. Други</legend>
		<input name="interview" type="checkbox" value="1" />
		<label for="interview">Интервю с гостите</label>
		<br />
	  </fieldset>

	  <a name="to4ka7" id="to4ka7"></a>
	  <fieldset>
		<legend>7. Постпродукция (видео монтаж)</legend>
		
		<h3>Сценарии</h3>
		<input name="scenes" type="radio" value="1" />
		<label>По сценарии на клиента</label><br>
		<input name="scenes" type="radio" value="2" checked="checked" />
		<label>По сценарии на монтажиста</label><br>
		<input name="scenes" type="radio" value="3" />
		<label>Репортаж - без видео монтаж</label>
		
		<div id="montage">
		<h3>Монтаж</h3>
		<input name="montage" type="radio" value="90" checked="checked"  />
		<label>Видео монтаж на филма до 90мин.</label><br>
		<input name="montage" type="radio" value="120" />
		<label>Видео монтаж на филма до 120мин.</label><br>
		<input name="montage" type="radio" value="180" />
		<label>Видео монтаж на филма до 180мин.</label>
		</div>
		
		<h3>Изработка на видео</h3>
		<input name="make" type="checkbox" value="1" />
		<label>Изработка на видео покана</label><br />
		<input name="make2" type="checkbox" value="1" />
		<label>Изработка на видео клип (трейлър)</label>

	  </fieldset>
	  
	  <a name="to4ka8" id="to4ka8"></a>	  
	  <fieldset>
		<legend>8. Мастериране на филма</legend>
		<input name="menu" type="checkbox" value="1" />
		<label>Изработка на навигационно меню</label>
		<br />
		<input name="hdd" type="checkbox" value="1" />
		<label>Експорт на HDD (предоставен от клиента)</label>
		<br />
		<input name="bluray" type="checkbox" value="1" />
		<label>Запис на BlueRay диск</label><br />
		
		<div id="bluray">
		<label>Брой копия</label><br />
		<input type="text" name="blurayQnt" />
		
		<h3>Вид кутия</h3>
		<input name="case" type="radio" value="2" checked="checked"  />
		<label>Стандартна кутия</label>
		<input name="case" type="radio" value="1" />
		<label>Луксозна кутия</label>
		</div>

		
		<input name="dvd" type="checkbox" value="1" />
		<label>Запис на DVD</label><br />
		
		<div id="dvd">
		<label>Брой копия</label><br />
		<input type="text" name="dvdQnt" />
		
		<h3>Вид кутия</h3>
		<input name="case2" type="radio" value="2" checked="checked"  />
		<label>Стандартна кутия</label>
		<input name="case2" type="radio" value="1" />
		<label>Луксозна кутия</label>
		
		</div>
		
		
		<input name="raw" type="checkbox" value="1" />
		<label>Необработен материал</label>
		<br />
	  </fieldset>

	  <a name="to4ka9" id="to4ka9"></a>	  
	  <fieldset>
		<legend>9. Транспорт</legend>
		<select name="transport">
		  <option value="taxi">с такси</option>
		  <option value="client">с транспорт на клиента</option>
		  <option value="company">с транспорт на фирмата</option>
		</select>
	  </fieldset>

	  <a name="to4ka10" id="to4ka10"></a>
	  <fieldset>
		<legend>10. Хотелски, транспортни и командировъчни</legend>
		<input name="hotel" type="radio" value="1" checked="checked"  />
		<label for="hotel">на територията на София</label><br />
		<input name="hotel" type="radio" value="2" />
		<label for="hotel">извън територията на София</label><br />
		<input name="hotel" type="radio" value="3" />
		<label for="hotel">извън територията на България</label>
	  </fieldset>

	  <a name="to4ka11" id="to4ka11"></a>
	  <fieldset>
		<legend>11. Срок за изработка на сватбеният филм</legend>
		<select name="izrabotka">
		  <option value="15">до 15 работни дни</option>
		  <option value="25">до 25 работни дни</option>
		  <option value="35">до 35 работни дни</option>
		  <option value="45" selected="selected">до 45 работни дни (стандартен срок)</option>
		</select>
	  </fieldset>
	  
	  <a name="to4ka12" id="to4ka12"></a>
	  <fieldset>
		<legend>12. Начин на плащане</legend>
		<select name="pay" name="pay">
		  <option value="30" selected="selected">30% авансово плащане (страндартен аванс)</option>
		  <option value="50">50% авансово плащане ( -3% отстъпка)</option>
		  <option value="100">100% авансово плащане ( -5% отстъпка)</option>
		</select>
	  </fieldset>
	  <input type="submit" id="checker" value="Изчисли" />

	</form>
	
</div>