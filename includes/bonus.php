<section class="section section_padding dd-bonus">
	<div class=" container">
		<div class="row">
			<div class="col-md-12">
				<div class="dd-title_b">
					<h2>Бонусом вы получите</h2>
				</div>
				<div class="dd-bonus-wrap">

					<div class="dd-box-bd">
						<div class="dd-item-box">
							<div class="dd-img-box">
								<img src="img/p1.png" alt="">
							</div>
							<div class="dd-item-txt">
								<p>
									Помощь в переносе всех 
									ваших контактов и 
									данных c другого телефона
								</p>
							</div>
						</div>

						<div class="dd-item-box">
							<div class="dd-img-box">
								<img src="img/p2.png" alt="">
							</div>
							<div class="dd-item-txt">
								<p>
									Демонстрацию полных 
									возможностей вашего 
									iPhone
								</p>
							</div>
						</div>

					</div>

					<!-- //////////////////////////// -->

					<div class="dd-box-bd">

						<div class="dd-item-box">
							<div class="dd-img-box dd-img-box_big">
								<img src="img/p3.png" alt="">
							</div>
							<div class="dd-item-txt">
								<p>
									SIM-карту нужного <br>
									вам размера прямо <br>
									на месте
								</p>
							</div>
						</div>

						<div class="dd-item-box">
							<div class="dd-img-box dd-img-box_big">
								<img src="img/p4.png" alt="">
							</div>
							<div class="dd-item-txt">
								<p>
									Настройку телефона <br>
									под ваши нужды, <br>
									установку приложений
								</p>
							</div>
						</div>

					</div>

					<!-- //////////////////////////// -->

					<div class="dd-box-bd">
						<div class="dd-item-box">
							<div class="dd-img-box dd-img-box_big">
								<img src="img/p5.png" alt="">
							</div>
							<div class="dd-item-txt">
								<p>
									Помощь в получении <br>
									Apple ID и регистрации <br>
									в iCloud
								</p>
							</div>
						</div>

						<div class="dd-item-box">
							<div class="dd-img-box dd-img-box_big">
								<img src="img/p6.png" alt="">
							</div>
							<div class="dd-item-txt">
								<p>
									Информационную <br>
									поддержку в <br>
									течение месяца
								</p>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>

					<!-- //////////////////////////// -->

				</div>
				<div class="dd-slide-wrap">

					<div id="dd-slider">
						<div class="item">

							<div class="dd-item-box">
								<div class="dd-img-box">
									<img src="img/p1.png" alt="">
								</div>
								<div class="dd-item-txt">
									<p>
										Помощь в переносе всех 
										ваших контактов и 
										данных c другого телефона
									</p>
								</div>
							</div>

							<div class="dd-item-box">
								<div class="dd-img-box">
									<img src="img/p2.png" alt="">
								</div>
								<div class="dd-item-txt">
									<p>
										Демонстрацию полных 
										возможностей вашего 
										iPhone
									</p>
								</div>
							</div>

						</div>	

						<div class="item">
							<div class="dd-item-box">
								<div class="dd-img-box dd-img-box_big">
									<img src="img/p3.png" alt="">
								</div>
								<div class="dd-item-txt">
									<p>
										SIM-карту нужного 
										вам размера прямо 
										на месте
									</p>
								</div>
							</div>

							<div class="dd-item-box">
								<div class="dd-img-box dd-img-box_big">
									<img src="img/p4.png" alt="">
								</div>
								<div class="dd-item-txt">
									<p>
										Настройку телефона 
										под ваши нужды, 
										установку приложений
									</p>
								</div>
							</div>
							
						</div>

						<div class="item">
							<div class="dd-item-box">
								<div class="dd-img-box dd-img-box_big">
									<img src="img/p5.png" alt="">
								</div>
								<div class="dd-item-txt">
									<p>
										Помощь в получении 
										Apple ID и регистрации 
										в iCloud
									</p>
								</div>
							</div>

							<div class="dd-item-box">
								<div class="dd-img-box dd-img-box_big">
									<img src="img/p6.png" alt="">
								</div>
								<div class="dd-item-txt">
									<p>
										Информационную 
										поддержку в 
										течение месяца
									</p>
								</div>
							</div>

						</div>
					</div>

				</div>
				<!-- end slider -->
			</div>
		</div>
	</div>
</section>

<script>
		/* Slider
		=====================*/
		var owl = $("#dd-slider");
		owl.owlCarousel({
			loop:true,
			nav:true, 
			autoplay:false,
			smartSpeed:1000,
			margin:25,
        center:false,     //если нужны обрезаные края
        navText:['<span class="nav-left"></span>','<span class="nav-right"></span>'],
        responsive:{
        	0:{
        		items:1
        	},
        	480:{
        		items:2 
        	},
        	990:{
        		items:3
        	},      

        	1248:{
        		items:3
        	}
        }
    });

		$('.owl-carousel .owl-item img').css('width','unset');
	</script>