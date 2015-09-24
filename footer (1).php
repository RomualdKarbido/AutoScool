


<?php
if( is_page(7) ){ ?>

<hr>
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>Стоимость обучения <span class="green_r1">43000 руб.</span> (АКПП), <span class="green_r1">41000 руб.</span> (МКПП)</h2>
        <p> Для удобства обучающихся на  категорию «В» предусмотрена поэтапная оплата за обучение. Размер первого взноса (предоплату) уточняйте в Учебном Центре.</p>
        <p>В пользование учащимся бесплатно предоставляется несколько компьютерных классов, оборудованных обучающими программами по ПДД, основам безопасного управления транспортными средствами, оказанию медицинской помощи пострадавшим при ДТП, кабинет автотренажеров, классы теоретического обучения, оборудованные мультимедийными проекторами и оснащенные различными обучающими программами.</p>
        <div style="clear:both; height:10px;"></div>
        <button type="button" class="btn btn-success" href="#myModal" data-toggle="modal">Записаться в школу</button>
        
      </div>
    </div>
  </div>
</section>
<div style="clear:both; height:30px;"></div>

<?php } else { ?>

<section class="alterfoot">
  <div class="container">
    <div class="row">
      
      
      <div class="col-lg-3 col-sm-5  text-centr">
        
        <button type="button" class="btn btn-success" href="#myModal" data-toggle="modal">Записаться в школу</button>
        <p style="font-size:12px; line-height:1.2; margin-bottom:20px; color:#6E6E6E;">Просто заполните данные и наш специалист перезвонит вам</p>
        
        <h4> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;МКПП — 43 000 руб.</h4>
        <h4> <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;&nbsp;АКПП — 41 000 руб.</h4>
        <div style="clear:both; height:20px;"></div>
        
       
      </div>
      <div class="col-lg-9 col-sm-7 col-sx-12 ">
        <h2>Стоимость обучения</h2>
        
        <p> Для удобства обучающихся на  категорию «В» предусмотрена поэтапная оплата за обучение. Размер первого взноса (предоплату) уточняйте в Учебном Центре.</p>
        <p>В пользование учащимся бесплатно предоставляется несколько компьютерных классов, оборудованных обучающими программами по ПДД, основам безопасного управления транспортными средствами, оказанию медицинской помощи пострадавшим при ДТП, кабинет автотренажеров, классы теоретического обучения, оборудованные мультимедийными проекторами и оснащенные различными обучающими программами.</p>
        
       
        <div style="clear:both; height:10px;"></div>
        
        
      </div>
      
    </div>
  </div>
</section>


<?php }?>




<section > 
<div style="min-height:488px;"> 
  <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=H9y57sCvsqonUIibE7PWRaugyPMd9Aie&width=100%&height=488"></script> 
</div>
</section>


<div class="section well bot-info2">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-7">
        <h3 class="text-left">О нас</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, ducimus, sit, quibusdam quidem recusandae veniam eos quod error nisi repellat excepturi laboriosam aspernatur suscipit possimus consectetur dolores nihil labore quas eius illo accusamus nulla sed blanditiis porro accusantium. Perspiciatis, perferendis!</p>
      </div>
        <div class="col-lg-1 col-md-1" >    
      </div>
      <div class="col-lg-4 col-md-4" >
        <h3 class="text-left">Контактная информация</h3>
        <address>
        <strong>Политехнический техникум №2</strong><br>
        <strong>Адрес:</strong> Ул. Тимура Фрунзе, д. 28<br>
        <strong>Тел.:</strong> +7(495) 922-03-22<br>
	<strong>Тел.:</strong> +7 (905) 741-37-89
       
        </address>
      </div>
    
    </div>
  </div>
</div>

<footer class="text-center">
  <div class="section booblock">
    <div class="row">
      <p style="color:#7E7E7E;" id="kontakt">Developed: robindranat@gmail.com
</p>
    </div>
  </div>
</footer>
	

			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
		

<?php wp_footer(); ?>

<script src="/wp-content/themes/r1/js/jquery-1.11.2.min.js"></script> 
<script src="/wp-content/themes/r1/js/bootstrap.js"></script>  
<script src="/wp-content/themes/r1/js/colorbox-master/jquery.colorbox.js"></script> 

<script>
//Колорбокс
$(document).ready(function(){
	$(".gallery-item").colorbox({rel:'gallery-item'});
});
</script>

<script>
$(document).ready(function(){
   $('a[href*=#]').bind("click", function(e){
      var anchor = $(this);
      $('html, body').stop().animate({
         scrollTop: $(anchor.attr('href')).offset().top
      }, 1000);
      e.preventDefault();
   });
   return false;
});
</script>
 
</body>
</html>