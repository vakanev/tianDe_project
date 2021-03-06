<?
require_once('header.php');
?>



<script>
	$(document).ready(function(){
		// $('.cart-quantity-action').on('click', function(){
		// 	var quantity = parseInt($(this).parent().find('input').val());
		// 	var action = $(this).attr('data-action');
		// 	if(action == '-' && quantity > 1){
		// 		$(this).parent().find('input').val(quantity - 1);
		// 	}else if(action == '+'){
		// 		$(this).parent().find('input').val(quantity + 1);
		// 	}		
		// });
		$('.cart-arrow').on('click',function(){
			$(this).parent().next('.cart-li').toggle();
			$(this).find('span:last').toggleClass('up');
			$(this).find('span:last').toggleClass('down');
			if(!$('.cart-li').length){
				$('.dd').show();
			}	
		});
		$('.cart-color-select img').hover(function(){
			$(this).next('.cart-color').toggle();		
		}, function(){
			$(this).next('.cart-color').toggle();
		});
		$('.cart-item-remove').on('click', function(){
			$(this).parent().parent().hide('slow');
		});
	})
</script>

<div id="cart-container">
	<div id="cart-header"><span class="uppercase my-cart">Моя корзина:</span>&nbsp;<span class="cart-font-16">4 позиция(-ии) на сумму 4 520 руб. и на <span class="color-orange">400 Б</span></span></div>
	<div class="cart-li">		
		<div class="cart-circle"></div>				
		<span class="cart-arrow"><span class="cart-arrow-header">Товары</span><span class="up"></span></span>
	</div>
	<div class="cart-li cart-li-padding">
		<table class="width-100 cart-table">
			<thead>
				<tr>
					<th width="10%">&nbsp;</th>
					<th width="23%">НАИМЕНОВАНИЕ</th>
					<th width="10%">КОЛ-ВО</th>
					<th width="13%">ЦЕНА БАЛЛ</th>
					<th width="14.5%">ЦЕНА</th>
					<th width="10%">СУММА БАЛЛ</th>
					<th width="14.5%">СУММА</th>
					<th width="5%">&nbsp;</th>
				</tr>				
			</thead>
			<tbody>
				<tr>
					<td><img class="cart-item-img" src="/img/cart/gorshok.png" border="0" /></td>
					<td class="cart-vert-top">
						<div class="cart-text-left">
							<div class="cart-item-name"><a class="cart-item-link" href="">Крем-гель с биозолотом для кожи вокруг глаз (от морщин)</a></div>
							<p class="cart-item-attr">Код: 229039/017&nbsp;&nbsp;&nbsp;Объем: 100мл</p>	
							<ul class="cart-inline cart-float-left margin-top-30">
								<li class="cart-color-gray">Тон:</li>
								<li class="cart-relative cart-color-select">
									<img src="/img/cart/color.png" border="0" />
									<div class="cart-color">
										<div class="cart-relative">
											003
											<span class="cart-color-corner"></span>
										</div>	
									</div>
								</li>
							</ul>
							<ul class="cart-inline cart-float-right cart-icons-margin">
								<li class="cart-icon-li cart-icon-money"></li>
								<li class="cart-icon-li cart-icon-love"></li>
								<li class="cart-icon-li cart-icon-new"></li>
							</ul>
							<div class="cart-clear"></div>
						</div>						
					</td>
					<td>
						<table class="cart-quantity">
							<tr>
								<td class="cart-quantity-action cart-quantity-minus" data-action="-">-</td>
								<td class="cart-quantity-input">
									<input name="quantity" type="text" value="1" />
								</td>
								<td class="cart-quantity-action cart-quantity-plus" data-action="+">+</td>
							</tr>
						</table>
					</td>
					<td class="color-orange cart-font-14">
						<span>52</span>&nbsp;Б.
					</td>
					<td class="cart-font-14 cart-bold">
						<span>123 456 78</span>&nbsp;руб.
					</td>
					<td class="color-orange cart-font-14">
						<span>99 999</span>&nbsp;Б.
					</td>
					<td class="cart-font-14 cart-bold">
						<span>123 456 78</span>&nbsp;руб.
					</td>
					<td>
						<span class="cart-item-remove"></span>
					</td>
				</tr>
				<tr>
					<td><img class="cart-item-img" src="/img/cart/gorshok.png" border="0" /></td>
					<td class="cart-vert-top">
						<div class="cart-text-left">
							<div class="cart-item-name"><a class="cart-item-link" href="">Интенсивный крем-уход от морщин</a></div>
							<p class="cart-item-attr">Код: 229039/017</p>							
							<ul class="cart-inline cart-float-right cart-icons-margin">
								<li class="cart-icon-li cart-icon-money"></li>
								<li class="cart-icon-li cart-icon-love"></li>
								<li class="cart-icon-li cart-icon-new"></li>
							</ul>
							<div class="cart-clear"></div>
						</div>						
					</td>
					<td>
						<table class="cart-quantity">
							<tr>
								<td class="cart-quantity-action cart-quantity-minus" data-action="-">-</td>
								<td class="cart-quantity-input">
									<input name="quantity" type="text" value="1" />
								</td>
								<td class="cart-quantity-action cart-quantity-plus" data-action="+">+</td>
							</tr>
						</table>
					</td>
					<td class="color-orange cart-font-14">
						<span>52</span>&nbsp;Б.
					</td>
					<td class="cart-font-14 cart-bold">
						<span>123 456 78</span>&nbsp;руб.
					</td>
					<td class="color-orange cart-font-14">
						<span>99 999</span>&nbsp;Б.
					</td>
					<td class="cart-font-14 cart-bold">
						<span>123 456 78</span>&nbsp;руб.
					</td>
					<td>
						<span class="cart-item-remove"></span>
					</td>
				</tr>
				<tr>
					<td><img class="cart-item-img" src="/img/cart/kapli.png" border="0" /></td>
					<td class="cart-vert-top">
						<div class="cart-text-left">
							<div class="cart-item-name"><a class="cart-item-link" href="">Фитокорректор</a></div>
							<p class="cart-item-attr">Код: 229039&nbsp;&nbsp;&nbsp;Объем: 50мл</p>								
							<ul class="cart-inline cart-float-right cart-icons-margin">
								<li class="cart-icon-li cart-icon-money"></li>								
							</ul>
							<div class="cart-clear"></div>
						</div>						
					</td>
					<td>
						<table class="cart-quantity">
							<tr>
								<td class="cart-quantity-action cart-quantity-minus" data-action="-">-</td>
								<td class="cart-quantity-input">
									<input name="quantity" type="text" value="1" />
								</td>
								<td class="cart-quantity-action cart-quantity-plus" data-action="+">+</td>
							</tr>
						</table>
					</td>
					<td class="color-orange cart-font-14">
						<span>52</span>&nbsp;Б.
					</td>
					<td class="cart-font-14 cart-bold">
						<span>123 456 78</span>&nbsp;руб.
					</td>
					<td class="color-orange cart-font-14">
						<span>99 999</span>&nbsp;Б.
					</td>
					<td class="cart-font-14 cart-bold">
						<span>123 456 78</span>&nbsp;руб.
					</td>
					<td>
						<span class="cart-item-remove"></span>
					</td>
				</tr>				
			</tbody>
			<tfoot>
				<tr class="cart-table-separator">
					<td colspan="8">&nbsp;</td>					
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td class="cart-result">
						<strong>ИТОГО:</strong>				
					</td>
					<td>&nbsp;</td>
					<td class="color-orange cart-font-14">&nbsp;</td>
					<td class="cart-font-14 cart-bold">&nbsp;</td>
					<td class="color-orange cart-font-14">15 Б.</td>
					<td class="cart-font-14 cart-bold">350 руб.</td>
					<td>&nbsp;</td>
				</td>
			</tfoot>
		</table>
	</div>
	<div class="cart-li">
		<div class="cart-circle"></div>
		<span class="cart-arrow"><span class="cart-arrow-header">Наборы и акции</span><span class="up"></span></span>
	</div>
	<div class="cart-li cart-li-padding">
		<table class="width-100 cart-table">
			<thead>
				<tr>
					<th width="10%">&nbsp;</th>
					<th width="23%">НАИМЕНОВАНИЕ</th>
					<th width="10%">КОЛ-ВО</th>
					<th width="13%">ЦЕНА БАЛЛ</th>
					<th width="14.5%">ЦЕНА</th>
					<th width="10%">СУММА БАЛЛ</th>
					<th width="14.5%">СУММА</th>
					<th width="5%">&nbsp;</th>
				</tr>				
			</thead>
			<tbody>
				<tr>
					<td><img class="cart-item-img" src="/img/cart/gorshok.png" border="0" /></td>
					<td class="cart-vert-top">
						<div class="cart-text-left">
							<div class="cart-item-name"><a class="cart-item-link" href="">Акционный набор 1ND</a></div>
							<p class="cart-item-attr">Код: 229039</p>	
							<ul class="cart-inline cart-float-left margin-top-30">
								<a class="cart-show-detail" href="#">Посмотреть состав</a>
							</ul>							
							<div class="cart-clear"></div>
						</div>						
					</td>
					<td>
						<table class="cart-quantity">
							<tr>
								<td class="cart-quantity-action cart-quantity-minus" data-action="-">-</td>
								<td class="cart-quantity-input">
									<input name="quantity" type="text" value="1" />
								</td>
								<td class="cart-quantity-action cart-quantity-plus" data-action="+">+</td>
							</tr>
						</table>
					</td>
					<td class="color-orange cart-font-14">
						<span>52</span>&nbsp;Б.
					</td>
					<td class="cart-font-14 cart-bold">
						<span>123 456 78</span>&nbsp;руб.
					</td>
					<td class="color-orange cart-font-14">
						<span>99 999</span>&nbsp;Б.
					</td>
					<td class="cart-font-14 cart-bold">
						<span>123 456 78</span>&nbsp;руб.
					</td>
					<td>
						<span class="cart-item-remove"></span>
					</td>
				</tr>
				<tr>
					<td><img class="cart-item-img" src="/img/cart/gorshok.png" border="0" /></td>
					<td class="cart-vert-top">
						<div class="cart-text-left">
							<div class="cart-item-name"><a class="cart-item-link" href="">Подарочный набор «Легкость ног»</a></div>
							<p class="cart-item-attr">Код: 229039/017</p>							
							<ul class="cart-inline cart-float-left margin-top-30">
								<a class="cart-show-detail" href="#">Посмотреть состав</a>
							</ul>
							<ul class="cart-inline cart-float-right cart-icons-margin">
								<li class="cart-icon-li cart-icon-question"></li>															
							</ul>
							<div class="cart-clear"></div>
						</div>						
					</td>
					<td>
						<table class="cart-quantity">
							<tr>
								<td class="cart-quantity-action cart-quantity-minus" data-action="-">-</td>
								<td class="cart-quantity-input">
									<input name="quantity" type="text" value="1" />
								</td>
								<td class="cart-quantity-action cart-quantity-plus" data-action="+">+</td>
							</tr>
						</table>
					</td>
					<td class="color-orange cart-font-14">
						<span>52</span>&nbsp;Б.
					</td>
					<td class="cart-font-14 cart-bold">
						<span>123 456 78</span>&nbsp;руб.
					</td>
					<td class="color-orange cart-font-14">
						<span>99 999</span>&nbsp;Б.
					</td>
					<td class="cart-font-14 cart-bold">
						<span>123 456 78</span>&nbsp;руб.
					</td>
					<td>
						<span class="cart-item-remove"></span>
					</td>
				</tr>
				<tr>
					<td><img class="cart-item-img" src="/img/cart/kapli.png" border="0" /></td>
					<td class="cart-vert-top">
						<div class="cart-text-left">
							<div class="cart-item-name"><a class="cart-item-link" href="">Акционный набор «При покупке зубной пасты Проденталь зубная щетка в подарок»</a></div>
							<p class="cart-item-attr"></p>	
							<ul class="cart-inline cart-float-left margin-top-30">
								<a class="cart-show-detail" href="#">Посмотреть состав</a>
							</ul>							
							<ul class="cart-inline cart-float-right cart-icons-margin">
								<li class="cart-icon-li cart-icon-items"></li>							
							</ul>
							<div class="cart-clear"></div>
						</div>						
					</td>
					<td>
						<table class="cart-quantity">
							<tr>
								<td class="cart-quantity-action cart-quantity-minus" data-action="-">-</td>
								<td class="cart-quantity-input">
									<input name="quantity" type="text" value="1" />
								</td>
								<td class="cart-quantity-action cart-quantity-plus" data-action="+">+</td>
							</tr>
						</table>
					</td>
					<td class="color-orange cart-font-14">
						<span>52</span>&nbsp;Б.
					</td>
					<td class="cart-font-14 cart-bold">
						<span>123 456 78</span>&nbsp;руб.
					</td>
					<td class="color-orange cart-font-14">
						<span>99 999</span>&nbsp;Б.
					</td>
					<td class="cart-font-14 cart-bold">
						<span>123 456 78</span>&nbsp;руб.
					</td>
					<td>
						<span class="cart-item-remove"></span>
					</td>
				</tr>				
			</tbody>
			<tfoot>
				<tr class="cart-table-separator">
					<td colspan="8">&nbsp;</td>				
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td class="cart-result">
						<strong>ИТОГО:</strong>				
					</td>
					<td>&nbsp;</td>
					<td class="color-orange cart-font-14">&nbsp;</td>
					<td class="cart-font-14 cart-bold">&nbsp;</td>
					<td class="color-orange cart-font-14">15 Б.</td>
					<td class="cart-font-14 cart-bold">350 руб.</td>
					<td>&nbsp;</td>
				</td>
			</tfoot>	
		</table>		
	</div>
	<div class="cart-li cart-li-prelast">
		<div class="cart-circle-bottom"></div>
		<span class="cart-arrow"><span class="cart-arrow-header">Подарки</span><span class="up"></span></span>					
	</div>
	<div class="cart-li cart-li-last cart-li-padding">		
		<table class="cart-table width-100">
			<thead>
				<tr>
					<th width="10%">&nbsp;</th>
					<th width="23%">НАИМЕНОВАНИЕ</th>
					<th width="13%">КОЛ-ВО</th>
					<th width="15%">CТОИМОСТЬ БАЛЛ</th>
					<th width="15%">ИТОГО БАЛЛ</th>	
					<th width="5%">&nbsp;</th>
					<th width="17%"></th>
				</tr>					
			</thead>
			<tbody>
				<tr>
					<td><img class="cart-item-img" src="/img/cart/gorshok.png" border="0" /></td>
					<td class="cart-vert-top">
						<div class="cart-text-left">
							<div class="cart-item-name"><a class="cart-item-link" href="">Крем-гель с биозолотом для кожи вокруг глаз (от морщин)</a></div>
							<p class="cart-item-attr">Код: 229039&nbsp;&nbsp;&nbsp;Объем: 50мл.</p>							
							<ul class="cart-inline cart-float-right cart-icons-margin">								
								<li class="cart-icon-li cart-icon-question"></li>
							</ul>
							<div class="cart-clear"></div>
						</div>						
					</td>
					<td>
						<table class="cart-quantity">
							<tr>
								<td class="cart-quantity-action cart-quantity-minus" data-action="-">-</td>
								<td class="cart-quantity-input">
									<input name="quantity" type="text" value="1" />
								</td>
								<td class="cart-quantity-action cart-quantity-plus" data-action="+">+</td>
							</tr>
						</table>
					</td>
					<td class="color-orange cart-font-14">
						<span>5</span>&nbsp;Б.
					</td>
					<td class="color-orange cart-font-14">
						<span>10</span>&nbsp;Б.
					</td>					
					<td>
						<span class="cart-item-remove"></span>
					</td>
					<td></td>
				</tr>
				<tr>
					<td><img class="cart-item-img" src="/img/cart/gorshok.png" border="0" /></td>
					<td class="cart-vert-top">
						<div class="cart-text-left">
							<div class="cart-item-name"><a class="cart-item-link" href="">Крем-гель с биозолотом для кожи вокруг глаз (от морщин)</a></div>
							<p class="cart-item-attr">Код: 229039&nbsp;&nbsp;&nbsp;Объем: 50мл.</p>							
							<ul class="cart-inline cart-float-right cart-icons-margin">								
								<li class="cart-icon-li cart-icon-question"></li>
							</ul>
							<div class="cart-clear"></div>
						</div>						
					</td>
					<td>
						<table class="cart-quantity">
							<tr>
								<td class="cart-quantity-action cart-quantity-minus" data-action="-">-</td>
								<td class="cart-quantity-input">
									<input name="quantity" type="text" value="1" />
								</td>
								<td class="cart-quantity-action cart-quantity-plus" data-action="+">+</td>
							</tr>
						</table>
					</td>
					<td class="color-orange cart-font-14">
						<span>5</span>&nbsp;Б.
					</td>
					<td class="color-orange cart-font-14">
						<span>10</span>&nbsp;Б.
					</td>					
					<td>
						<span class="cart-item-remove"></span>
					</td>
					<td></td>
				</tr>
				<tr>
					<td><img class="cart-item-img" src="/img/cart/gorshok.png" border="0" /></td>
					<td class="cart-vert-top">
						<div class="cart-text-left">
							<div class="cart-item-name"><a class="cart-item-link" href="">Крем-гель с биозолотом для кожи вокруг глаз (от морщин)</a></div>
							<p class="cart-item-attr">Код: 229039&nbsp;&nbsp;&nbsp;Объем: 50мл.</p>							
							<ul class="cart-inline cart-float-right cart-icons-margin">								
								<li class="cart-icon-li cart-icon-question"></li>
							</ul>
							<div class="cart-clear"></div>
						</div>						
					</td>
					<td>
						<table class="cart-quantity">
							<tr>
								<td class="cart-quantity-action cart-quantity-minus" data-action="-">-</td>
								<td class="cart-quantity-input">
									<input name="quantity" type="text" value="1" />
								</td>
								<td class="cart-quantity-action cart-quantity-plus" data-action="+">+</td>
							</tr>
						</table>
					</td>
					<td class="color-orange cart-font-14">
						<span>5</span>&nbsp;Б.
					</td>
					<td class="color-orange cart-font-14">
						<span>10</span>&nbsp;Б.
					</td>					
					<td>
						<span class="cart-item-remove"></span>
					</td>
					<td style="empty-cells: hide; border-collapse: collapse;"></td>
				</tr>
			</tbody>
			<tfoot>
				<tr class="cart-table-separator">
					<td colspan="6">&nbsp;</td>				
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td class="cart-result">
						<strong>ИТОГО:</strong>				
					</td>
					<td>&nbsp;</td>					
					<td class="color-orange cart-font-14">15 Б.</td>
					<td class="cart-font-14 cart-bold">350 руб.</td>
					<td>&nbsp;</td>
					<td></td>
				</td>
			</tfoot>	
		</table>
	</div>
	<div class="cart-summary">
		<div class="cart-summary-left">
			<a class="cart-summary-button button-big-padding button-border">Акционные предложения</a>
			<ul class="cart-summary-list">
				<li>До бесплатной доставки не хватает 500 руб.</li>
				<li>До скидки «20%» не хватает 600 руб.</li>
				<li>Для входа в парнерскую программу «TianDe OSC» необходимо докупить на 5000 руб.</li>
				<li>Для получения статуса «Бизнес-Парнер» необходимо докупить на 250 баллов или купить набор 1ND</li>				
			</ul>
			<p class="cart-promo-code">Использовать промо-код:</p>
			<div>
				<input class="cart-promo-input form-input" type="text" name="" value="" placeholder="Введите ваш номер" />
				<a class="cart-summary-button button-big-padding button-border">Обработать</a>
				<p class="cart-promo-desc">Если у вас есть промо-код, укажите его для получения скидки или подарка</p>
			</div>
		</div>
		<div class="cart-summary-right">
			<table align="right">
				<tr>
					<td class="cart-summary-tbl-left">СУММА:</td>
					<td class="cart-summary-tbl-right">9 999 300 руб</td>					
				</tr>
				<tr>
					<td class="cart-summary-tbl-left tbl-border">СКИДКА ПО ЗАКАЗУ:
						<span class="cart-summary-info">
						<span class="instead-what-img">?</span>
							<i></i>
							<div class="cart-popup">
								<div class="cart-info-content">
									<h4>СЕРВИС «МОЯ СКИДКА»</h4>
									<div class="cart-info-list">
										<p>
										<span>10% (ваша скидка)</span>
										— скидка, при покупке суммарного количества балов от 20б и до 50Б (Не включая 50Б);
										</p>
										<p>
										<span>15%</span>
										— скидка, при покупке суммарного количества балов от 50б и до 100Б (Не включая 100б);
										</p>
										<p>
										<span>20%</span>
										— скидка, при покупке суммарного количества балов от 100 до 500 (не включая 500);
										</p>
										<p>
										<span>25%</span>
										— скидка, при покупке суммарного количества балов от 500б, а также для участника Партнерской программы
										</p>
									</div>									
								</div>
							</div>
						</span>
					</td>
					<td class="cart-summary-tbl-right tbl-border">123 456 руб (5%)</td>					
				</tr>	
				<tr>
					<td class="cart-summary-tbl-left tbl-after-border">ИТОГО СУММА:</td>
					<td class="cart-summary-tbl-right tbl-after-border color-orange">500 000 руб</td>					
				</tr>	
				<tr>
					<td class="cart-summary-tbl-left">ИТОГО БАЛЛОВ:</td>
					<td class="cart-summary-tbl-right color-orange">500 999 999 Б</td>					
				</tr>
				<tr>
					<td class="cart-summary-tbl-left">ИТОГО ПОДАРКИ:</td>
					<td class="cart-summary-tbl-right color-orange">500 999 999 Б</td>					
				</tr>
				<tr>
					<td colspan="2" style="text-align: right; padding-top: 10px;">
						<a class="cart-summary-button button-small-padding button-border">Оформить заказ</a>
					</td>
				</tr>
			</table>
		</div>
		<div class="cart-clear"></div>
	</div>	
	

		<div class="another tabs m-top20">
			<a href="#1" data-group="1" class="first-el uppercase active">Специальные предложения</a>
			<a href="#1" data-group="2" class="uppercase">Добавить товар по коду</a>
			<span></span>
		</div>
	 	<div class="tab swiper-slides" data-group="1">

			<section class="cart-specials m-top20 products">
	            <section class="swiper-container">
	                <div class="arrow-wrapper left"><a href="#" class="arrow arrow-left"></a></div>
	                <div class="arrow-wrapper right"><a href="#" class="arrow arrow-right"></a></div>
	              <div class="swiper-wrapper">
	              

	                  <div class="product swiper-slide">
	                    <a href="#1"  data-key="#fast-buy" class="detailed modal-viewer">
	                      <img src="/temp/item-6.jpg" />
	                      <s>БЫСТРЫЙ ПРОСМОТР</s>
	                      <span class="name">Гель для умывания «Естественная красота»</span>
	                    </a>
	                    <table class="price"><tr><td><s>12390 руб.</s> <b>12330 руб.</b></td></tr></table>
	                    <a href="#1" class="buy">КУПИТЬ</a>
	                    <span style="background-size: 90%;" class="action ico-action-finger has-popup">                     
	                        <img src="/img/ico/catalog-list/present.png" alt="">
	                        <i></i>
	                        <div class="popup center">
	                            <div style="width: 185px;" class="content center popup-text">
	                                <div class="pp-title">ПОДАРОК</div>
	                                <p class="pp-desc ">Стоимость подарка по накопительной программе<br><span class="bonus-orange font16 l-h2">100 баллов!</span></p>
	                                <button  class="btn-buy">Купить</button>
	                                <a href="#" class="pp-more">Подробнее...</a>
	                            </div>
	                        </div>
	                    </span>
	                  </div>

	                  <div class="product swiper-slide">
	                    <a href="#1"  data-key="#fast-buy" class="detailed modal-viewer">
	                      <img src="/temp/item-7.jpg" />
	                      <s>БЫСТРЫЙ ПРОСМОТР</s>
	                      <span class="name">Гель для умывания «Естественная красота»</span>
	                    </a>
	                    <table class="price"><tr><td><s>450 руб.</s> <b>390 руб.</b></td></tr></table>
	                    <a href="#1" class="buy">КУПИТЬ</a>
	                    <span style="background-size: 90%;" class="action ico-action-finger has-popup">                     
	                        <img src="/img/ico/catalog-list/ico-action-finger.png" alt="">
	                        <i></i>
	                        <div class="popup center">
	                            <div style="width: 185px;" class="content center popup-text">
	                                <div class="pp-title">СПЕЦПРЕДЛОЖЕНИЯ!</div>
	                                <table class="pp-table">
	                                    <tbody><tr>
	                                        <td>
	                                            <img src="/img/ico/catalog-list/ico-action-!-21.jpg" alt="">
	                                        </td>
	                                        <td>
	                                            <p class="pp-desc">
	                                               <span class="pp-orage">Акция</span> - <a href="" class="pp-link">товар участвует в персональной ации (1шт)&gt;&gt;</a>
	                                            </p>
	                                        </td>
	                                    </tr>
	                                    <tr>
	                                        <td>
	                                            <img src="/img/ico/catalog-list/ico-action-new-21.jpg" alt="">
	                                        </td>
	                                        <td>
	                                            <p class="pp-desc">
	                                                <span class="pp-orage">Новинка</span> - товар впервые в продаже
	                                            </p>
	                                        </td>
	                                    </tr>
	                                    <tr>
	                                        <td>
	                                            <img src="/img/ico/catalog-list/ico-action-100-21.jpg" alt="">
	                                        </td>
	                                        <td>
	                                            <p class="pp-desc">
	                                                <span class="pp-orage">Подарок</span> - стоимость подарка по накопительной программе <span class="pp-orage">100 баллов!</span>
	                                            </p>
	                                        </td>
	                                    </tr>
	                                    </tbody></table>
	                                <button  class="btn-buy">Купить</button>
	                                <a href="#" class="pp-more">Подробнее...</a>
	                            </div>
	                        </div>
	                    </span>
	                  </div>

	                  <div class="product swiper-slide">
	                    <a href="#1"  data-key="#fast-buy" class="detailed modal-viewer">
	                      <img src="/temp/item-8.jpg" />
	                      <s>БЫСТРЫЙ ПРОСМОТР</s>
	                      <span class="name">Увлажняющий крем с питательной основой, цветущий вид и здоровье</span>
	                    </a>
	                    <table class="price"><tr><td><s>11000000 BUR.</s> <b>11000000 BUR.</b></td></tr></table>
	                    <a href="#1" class="buy">КУПИТЬ</a>
	                    <span style="background-size: 90%;" class="action ico-action-finger has-popup">                     
	                        <img src="/img/ico/catalog-list/ico-action-2.jpg" alt="">
	                        <i></i>
	                        <div class="popup center">
	                            <div style="width: 185px;" class="content center popup-text">
	                                <div class="pp-title">СУПЕРЦЕНА!</div>
	                                <p class="pp-desc">
	                                    выгодная покупка
	                                </p>
	                            </div>
	                        </div>
	                    </span>
	                  </div>

	                  <div class="product swiper-slide">
	                    <a href="#1"  data-key="#fast-buy" class="detailed modal-viewer">
	                      <img src="/temp/item-9.jpg" />
	                      <s>БЫСТРЫЙ ПРОСМОТР</s>
	                      <span class="name">Фитокорректор</span>
	                    </a>
	                    <table class="price"><tr><td><b>120 руб.</b></td></tr></table>
	                    <a href="#1" class="buy">КУПИТЬ</a>
	                    <span style="background-size: 90%;" class="action ico-action-finger has-popup">                     
	                        <img src="/img/ico/catalog-list/present.png" alt="">
	                        <i></i>
	                        <div class="popup center">
	                            <div style="width: 185px;" class="content center popup-text">
	                                <div class="pp-title">ПОДАРОК</div>
	                                <p class="pp-desc ">Стоимость подарка по накопительной программе<br><span class="bonus-orange font16 l-h2">100 баллов!</span></p>
	                                <button  class="btn-buy">Купить</button>
	                                <a href="#" class="pp-more">Подробнее...</a>
	                            </div>
	                        </div>
	                    </span>
	                  </div>

	                  <div class="product swiper-slide">
	                    <a href="#1"  data-key="#fast-buy" class="detailed modal-viewer">
	                      <img src="/temp/item-10.jpg" />
	                      <s>БЫСТРЫЙ ПРОСМОТР</s>
	                      <span class="name">Тонизирующий гидрогель для лица «Алоэ»</span>
	                    </a>
	                    <table class="price"><tr><td><b>4200 руб.</b></td></tr></table>
	                    <a href="#1" class="buy">КУПИТЬ</a>
	                    <span style="background-size: 90%;" class="action ico-action-finger has-popup">                     
	                        <img src="/img/ico/catalog-list/ico-action-finger.png" alt="">
	                        <i></i>
	                        <div class="popup center">
	                            <div style="width: 185px;" class="content center popup-text">
	                                <div class="pp-title">СПЕЦПРЕДЛОЖЕНИЯ!</div>
	                                <table class="pp-table">
	                                    <tbody><tr>
	                                        <td>
	                                            <img src="/img/ico/catalog-list/ico-action-!-21.jpg" alt="">
	                                        </td>
	                                        <td>
	                                            <p class="pp-desc">
	                                               <span class="pp-orage">Акция</span> - <a href="" class="pp-link">товар участвует в персональной ации (1шт)&gt;&gt;</a>
	                                            </p>
	                                        </td>
	                                    </tr>
	                                    <tr>
	                                        <td>
	                                            <img src="/img/ico/catalog-list/ico-action-new-21.jpg" alt="">
	                                        </td>
	                                        <td>
	                                            <p class="pp-desc">
	                                                <span class="pp-orage">Новинка</span> - товар впервые в продаже
	                                            </p>
	                                        </td>
	                                    </tr>
	                                    <tr>
	                                        <td>
	                                            <img src="/img/ico/catalog-list/ico-action-100-21.jpg" alt="">
	                                        </td>
	                                        <td>
	                                            <p class="pp-desc">
	                                                <span class="pp-orage">Подарок</span> - стоимость подарка по накопительной программе <span class="pp-orage">100 баллов!</span>
	                                            </p>
	                                        </td>
	                                    </tr>
	                                    </tbody></table>
	                                <button  class="btn-buy">Купить</button>
	                                <a href="#" class="pp-more">Подробнее...</a>
	                            </div>
	                        </div>
	                    </span>
	                  </div>

	                  <div class="product swiper-slide">
	                    <a href="#1"  data-key="#fast-buy" class="detailed modal-viewer">
	                      <img src="/temp/item-11.jpg" />
	                      <s>БЫСТРЫЙ ПРОСМОТР</s>
	                      <span class="name">Гель для умывания «Естественная красота»</span>
	                    </a>
	                    <table class="price"><tr><td><s>450 руб.</s> <b>390 руб.</b></td></tr></table>
	                    <a href="#1" class="buy">КУПИТЬ</a>
	                    <span style="background-size: 90%;" class="action ico-action-finger has-popup">                     
	                        <img src="/img/ico/catalog-list/ico-action-2.jpg" alt="">
	                        <i></i>
	                        <div class="popup center">
	                            <div style="width: 185px;" class="content center popup-text">
	                                <div class="pp-title">СУПЕРЦЕНА!</div>
	                                <p class="pp-desc">
	                                    выгодная покупка
	                                </p>
	                            </div>
	                        </div>
	                    </span>
	                  </div>

	                  <div class="product swiper-slide">
	                    <a href="#1"  data-key="#fast-buy" class="detailed modal-viewer">
	                      <img src="/temp/item-10.jpg" />
	                      <s>БЫСТРЫЙ ПРОСМОТР</s>
	                      <span class="name">Тонизирующий гидрогель для лица «Алоэ»</span>
	                    </a>
	                    <table class="price"><tr><td><b>4200 руб.</b></td></tr></table>
	                    <a href="#1" class="buy">КУПИТЬ</a>
	                    <span style="background-size: 90%;" class="action ico-action-finger has-popup">                     
	                        <img src="/img/ico/catalog-list/ico-action-2.jpg" alt="">
	                        <i></i>
	                        <div class="popup center">
	                            <div style="width: 185px;" class="content center popup-text">
	                                <div class="pp-title">СУПЕРЦЕНА!</div>
	                                <p class="pp-desc">
	                                    выгодная покупка
	                                </p>
	                            </div>
	                        </div>
	                    </span>
	                  </div>
	              

	              </div>

	             
	            </section>

	                <div class="line"></div>
	          

	        </section>
		</div>
		<div class="tab add-by-code hide" data-group="2">

					      <!-- Add Codd :) -->
	    	<div>
				<input class="cart-adder-input form-input" type="text" name="" value="" placeholder="Введите код товара" />
				<a class="green-btn uppercase">Добавить</a>
				<div class="popup right" id="add-popup">
		          <div class="content">

		            <div class="items scrollbar-inner">

		              <a href="#1" class="item has-bonus">
		                <img src="temp/basket-item-1.png" class="image"/>
		                <div class="description">
		                  <span class="name">Гель для умывания «Естественная красота»</span>
		                  <table>
		                    <tr>
		                      <td class="col-1 code">Код: 28658</td>
		                      <td class="col-1">Объем: 1 мл</td>

		                    </tr>
		                    <tr>
		                      <td><i>3 007 руб.<i></td>
		                      <td>15 203 руб.</td>
		                      <td class="col-2">75 Б</td>
		                    </tr>
		                  </table>
		                </div>
		              </a>

		              <a href="#1" class="item">
		                <img src="temp/basket-item-2.png" class="image"/>
		                <div class="description">
		                  <span class="name">Увлажняющий крем с питательной основой, цветущий вид и здоровье</span>
		                  <table>
		                    <tr>
		                      <td class="col-1 code">Код: 75922</td>
		                      <td class="col-1">Объем: 1 мл</td>

		                    </tr>
		                    <tr>
		                      <td><i>3 007 руб.<i></td>
		                      <td>15 203 руб.</td>
		                      <td class="col-2">75 Б</td>
		                    </tr>
		                  </table>
		                </div>
		              </a>

		              <a href="#1" class="item has-bonus">
		                <img src="temp/basket-item-3.png" class="image"/>
		                <div class="description">
		                  <span class="name">Гель для умывания «Естественная красота»</span>
		                  <table>
		                    <tr>
		                      <td class="col-1 code">Код: 05672</td>
		                      <td class="col-1">Объем: 1 мл</td>

		                    </tr>
		                    <tr>
		                      <td><i>3 007 руб.<i></td>
		                      <td>15 203 руб.</td>
		                      <td class="col-2">75 Б</td>
		                    </tr>
		                  </table>
		                </div>
		              </a>

		              <a href="#1" class="item has-bonus">
		                <img src="temp/basket-item-1.png" class="image"/>
		                <div class="description">
		                  <span class="name">Гель для умывания «Естественная красота»</span>
		                  <table>
		                    <tr>
		                      <td class="col-1 code">Код: 34621</td>
		                      <td class="col-1">Объем: 1 мл</td>

		                    </tr>
		                    <tr>
		                      <td><i>3 007 руб.<i></td>
		                      <td>15 203 руб.</td>
		                      <td class="col-2">75 Б</td>
		                    </tr>
		                  </table>
		                </div>
		              </a>

		              <a href="#1" class="item m-bot20">
		                <img src="temp/basket-item-2.png" class="image"/>
		                <div class="description">
		                  <span class="name">Увлажняющий крем с питательной основой, цветущий вид и здоровье</span>
		                  <table>
		                    <tr>
		                      <td class="col-1 code">Код: 55386</td>
		                      <td class="col-1">Объем: 1 мл</td>

		                    </tr>
		                    <tr>
		                      <td><i>3 007 руб.<i></td>
		                      <td>15 203 руб.</td>
		                      <td class="col-2">75 Б</td>
		                    </tr>
		                  </table>
		                </div>
		              </a>

		            </div>
				</div>
			</div>	
		</div>
		
</div>