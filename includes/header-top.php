<section class="section section_padding">
	<div class="desctop">
		<div class="top-line"></div>
		<div class="header">
			<div class="container">		
				<div class="row">
					<div class="col-sm-3">
						<div class="wrap-logo">
							<a href="#"><div class="logo"></div></a>
						</div>
					</div>
					<div class="col-sm-3"></div>
					<div class="col-sm-3">
						<div class="number-phone">
							<div class="icon-phone"></div>
						</div>
						<div class="wrap-phone">
							<span>8 (812) 602-75-21</span>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="wrap-button">
							<button class="button2"><span>Заказать звонок</span></button>
						</div>
					</div>
					<div class="black-line"></div>
				</div>		
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="wrap-top-text">
							<div class="first-line">
								<span>
									До <strong>24 февраля</strong><br>
									iPhone 5S 16GB Space Gray
								</span>
							</div>
							<div class="second-line">
								<span class="price">14990</span>
								<span class="val">рублей</span>
							</div>
							<div class="third-line">
								<strong>АКЦИЯ!</strong>При покупке любого iphone<br>
								<strong>противоударное стекло<br>
									В ПОДАРОК!</strong>
								</div>
								<div class="fourth-line">
									до конца акции осталось
								</div>
							</div>
							<div class="timer">
								<div class="box"><span class="time afss_hours_bv"></span><br><span class="time-text">часов</span></div>
								<div class="box"><span class="time afss_mins_bv"></span><br><span class="time-text">минут</span></div>
								<div class="box"><span class="time afss_secs_bv"></span><br><span class="time-text">секунд</span></div>
							</div>
							<div class="wrap-button-top-text">
								<div class="dfbutton">
						<a href="#js-form2" class="df-button" name="js-modal">Забронировать</a>
					</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mobile">
			<div class="container">
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">
							<div class="wrap-mobile-logo">
								<img src="../img/logo.png" width="284" height="53" alt="">
							</div>
						<div class="wrap-mobile-phone">
							<div class="mobile-phone"></div>
							<div class="mobile-number"><span>8 (812) 602-75-21</span></div>
						</div>
					</div>
					<div class="col-sm-1"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="contentik">
						<div class="col-sm-1"></div>
						<div class="col-sm-10">
							<div class="wrap-button">
								<button class="button2 button-mobile">Заказать звонок</button>
							</div>
							<div class="wrap-mobile-text">
								<div class="first-m-line">До <strong>24 февраля</strong></div>
								<div class="second-m-line">iPhone 5S 16GB Space Gray</div>
								<div class="third-m-line">14990 <span>рублей</span></div>
							</div>
						</div>
					</div>
					<div class="col-sm-1"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">
						<div class="crash-mobile-m"></div>
						<div class="wrap-m-fourth">
							<div class="fourth-m-line">
							<strong>АКЦИЯ!</strong><br>
							При покупке любого iPhone<br>
							<strong>противоударное стекло<br>
								В ПОДАРОК!
							</strong>
						</div>
						</div>
						<div class="wrap-five">
							<div class="five-m-line">
								до конца акции осталось
							</div>
						</div>
						
						<div class="timer-m">
							<div class="box"><span class="time afss_hours_bv"></span><br><span class="time-text">часов</span></div>
								<div class="box"><span class="time afss_mins_bv"></span><br><span class="time-text">минут</span></div>
								<div class="box"><span class="time afss_secs_bv"></span><br><span class="time-text">секунд</span></div>
						</div>
					</div>
					<div class="wrap-m-button">
						<div class="dfbutton">
						<a href="#js-form2" class="df-button" name="js-modal">Заказать</a>
					</div>
					</div>
					
					<div class="col-sm-1"></div>
				</div>
			</div>
		</div>
	</section>
<script>
	var remain_bv   = 80768;
	function parseTime_bv(timestamp){
		if (timestamp < 0) timestamp = 0;
		var day = Math.floor( (timestamp/60/60) / 24);
		var hour = Math.floor(timestamp/60/60);
		var mins = Math.floor((timestamp - hour*60*60)/60);
		var secs = Math.floor(timestamp - hour*60*60 - mins*60); 
		var left_hour = Math.floor( (timestamp - day*24*60*60) / 60 / 60 );
		$('.afss_day_bv').text(day);
		$('.afss_hours_bv').text(left_hour);
		if(String(mins).length > 1)
			$('.afss_mins_bv').text(mins);
		else
			$('.afss_mins_bv').text("0" + mins);
		if(String(secs).length > 1)
			$('.afss_secs_bv').text(secs);
		else
			$('.afss_secs_bv').text("0" + secs); 
	}
	$(document).ready(function(){
		setInterval(function(){
			remain_bv = remain_bv - 1;
			parseTime_bv(remain_bv);
		}, 1000);
	});
</script>
<!-- <script>
	var remain_bv   = 80768;
function parseTime_bv(timestamp){
	if (timestamp < 0) timestamp = 0;
	var day = Math.floor( (timestamp/60/60) / 24);
	var hour = Math.floor(timestamp/60/60);
	var mins = Math.floor((timestamp - hour*60*60)/60);
	var secs = Math.floor(timestamp - hour*60*60 - mins*60); 
	var left_hour = Math.floor( (timestamp - day*24*60*60) / 60 / 60 );
	$('#afss_day_bv_m').text(day);
	$('#afss_hours_bv_m').text(left_hour);
	if(String(mins).length > 1)
		$('#afss_mins_bv_m').text(mins);
	else
		$('#afss_mins_bv_m').text("0" + mins);
	if(String(secs).length > 1)
		$('#afss_secs_bv_m').text(secs);
	else
		$('#afss_secs_bv_m').text("0" + secs); 
}
$(document).ready(function(){
	setInterval(function(){
		remain_bv = remain_bv - 1;
		parseTime_bv(remain_bv);_m
	}, 1000);
});
</script> -->
