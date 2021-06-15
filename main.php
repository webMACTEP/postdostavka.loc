<?php
/*
 Template Name: Шаблон для главной
 */

get_header();
$sp_obj = new SpClass();

while (have_posts()) : the_post(); ?>

   <section class="intro">
      <div class="container intro__wrap">
         <h1>Отправка посылок из Европы в Россию</h1>
         <ul>
            <li>быстрая и надежная доставка почтовых отправлений в любую точку России</li>
            <li>доступные цены на услуги</li>
            <li>простое оформление на сайте и оплата онлайн</li>
            <li>индивидуальный подход к каждому клиенту</li>
         </ul>
         <div class="intro__rupost">
            <img src="<?php echo pd_get_image('rupost.png') ?>" alt="">
            <p>Официальный партнёр Почты России</p>
         </div>
         <div class="intro__row">
            <div class="intro__cz">
               <div class="intro__cz-row">
                  <div class="intro__flag"><img src="<?php echo pd_get_image('flag-czechia.svg') ?>" alt=""></div>
                  <div class="intro__title">Из Чехии в РФ</div>
               </div>
               <span>Вес посылки в кг.</span><br>

               <input class="intro__ves" type="text" id="ves-cz" name="ves-cz">
               <div class="intro__radio">
                  <input type="radio" id="tarif-cz" name="tar-cz" value="0" checked>
                  <span>Стандарт</span>
                  <input type="radio" id="tarif-cz" name="tar-cz" value="1">
                  <span>Экспресс (EMS)</span>
               </div>
               <div id="calcbutt-cz" class="intro__butt">Рассчитать стоимость</div>
            </div>
            <div class="intro__cz belgium">
               <div class="intro__cz-row">
                  <div class="intro__flag"><img src="<?php echo pd_get_image('flag-belgium.svg') ?>" alt=""></div>
                  <div class="intro__title">Из Бельгии в РФ</div>
               </div>
               <span>Вес посылки в кг.</span><br>
               <input class="intro__ves" type="text" id="ves-blg" name="ves-blg">
               <div class="intro__radio">
                  <input type="radio" id="tarif-blg" name="tar-blg" value="0" checked>
                  <span>Стандарт</span>
                  <input type="radio" id="tarif-blg" name="tar-blg" value="1">
                  <span>Экспресс (EMS)</span>
               </div>
               <div id="calcbutt-blg" class="intro__butt">Рассчитать стоимость</div>
            </div>
            <div class="intro__cz germany">
               <div class="intro__cz-row">
                  <div class="intro__flag"><img src="<?php echo pd_get_image('flag-germany.svg') ?>" alt=""></div>
                  <div class="intro__title">Из Германии в РФ</div>
               </div>
               <span>Вес посылки в кг.</span><br>
               <form id="calcform">
                  <input class="intro__ves" type="text" id="ves" name="ves">
                  <div class="intro__radio">
                     <input type="radio" id="tarif" name="tar" value="0" checked>
                     <span>Стандарт</span>
                     <input type="radio" id="tarif" name="tar" value="1">
                     <span>Экспресс (EMS)</span>
                  </div>
                  <div id="calcbutt" class="intro__butt">Рассчитать стоимость</div>
               </form>
            </div>
         </div>
      </div>
   </section>
   <section class="order">
      <div class="container">
         <div class="order__title">
            <img src="<?php echo pd_get_image('delivery.svg') ?>" alt="">
            <h2>Оформить доставку</h2>
         </div>
         <div class="order__dash">
            <div class="order__win">
               <form id="add_feedback">
                  <div class="order__wrapp">
                     <div class="order__from">
                        <div class="order__subtitle">Отправитель</div>
                        <div class="order__countries">
                           <input name="art_country" id="art_country" type="radio" name="time" value="Чехия" checked><img src="<?php echo pd_get_image('flag-czechia.svg') ?>" alt="">Чехия
                           <input name="art_country" id="art_country" type="radio" name="time" value="Бельгия"><img src="<?php echo pd_get_image('flag-belgium.svg') ?>" alt="">Бельгия
                           <input name="art_country" id="art_country" type="radio" name="time" value="Германия"><img src="<?php echo pd_get_image('flag-germany.svg') ?>" alt="">Германия
                        </div>
                        <span>все поля заполняются латиницей</span><br>
                        <input name="art_city" id="art_city" class="order__city art_city" type="text" placeholder="Город">
                        <input name="art_postcode" id="art_postcode" class="order__postcode art_postcode" type="text" placeholder="Почтовый индекс">
                        <input name="art_adres" id="art_adres" class="order__address art_adres" type="text" placeholder="Адрес">
                        <input name="art_sname" id="art_sname" class="order__surname art_sname" type="text" placeholder="Фамилия">
                        <input name="art_name" id="art_name" class="order__name art_name" type="text" placeholder="Имя">
                        <input name="art_tel" id="art_tel" class="order__tel art_tel" type="text" placeholder="Телефон">
                        <input name="art_email" id="art_email" class="order__mail art_email" type="text" placeholder="E-mail"><br>
                        <input name="art_length" id="art_length" class="art_length order__length" type="text" placeholder="Длина">
                        <input name="art_width" id="art_width" class="art_width order__width" type="text" placeholder="Ширина">
                        <input name="art_height" id="art_height" class="art_height order__height" type="text" placeholder="Высота">
                        <input name="art_weight" id="art_weight" class="art_weight order__weight" type="text" placeholder="Вес">
                     </div>
                     <div class="order__to">
                        <div class="order__subtitle">Получатель</div>
                        <div class="order__countries">
                           <input name="art_country_out" id="art_country_out" type="radio" value="Российская Федерация" name="RF" checked><img src="<?php echo pd_get_image('flag-russia.svg') ?>" alt="">Российская Федерация
                           <input name="art_country_out" id="art_country_out" type="radio" value="Казахстан" name="KZ"><img src="<?php echo pd_get_image('flag-kazakhstan.svg') ?>" alt="">Казахстан
                        </div>
                        <span>все поля заполняются кириллицей</span><br>
                        <input name="art_city_out" id="art_city_out" class="order__city art_city_out" type="text" placeholder="Город">
                        <input name="art_postcode_out" id="art_postcode_out" class="art_postcode_out order__postcode" type="text" placeholder="Почтовый индекс">
                        <input name="art_address_out" id="art_address_out" class="art_address_out order__address" type="text" placeholder="Адрес">
                        <input name="art_surname_out" id="art_surname_out" class="art_surname_out order__surname " type="text" placeholder="Фамилия">
                        <input name="art_name_out" id="art_name_out" class="art_name_out order__name " type="text" placeholder="Имя">
                        <input name="art_tel_out" id="art_tel_out" class="art_tel_out order__tel" type="text" placeholder="Телефон">


                        <p>Сообщение</p>
                        <textarea name="art_comments" id="art_comments" placeholder="Опись содержимого" rows="5" cols="20" class=" art_comments"></textarea>
                     </div>
                  </div>
                  <span> </span>
                  <!-- <div class="order__button">Оформить заявку</div> -->
                  <input type="submit" id="submit-feedback" class="button order__button" value="Отправить" />
               </form>
            </div>
         </div>
         <p>Нажимая кнопку “Оформить заявку” вы соглашаетесь с условиями <a href="https://postdostavka.eu/ochrana-osobnich-udaju/">политики конфиденциальности</a></p>
      </div>
   </section>
   <section class="about">
      <div class="container row">
         <img src="<?php echo pd_get_image('about.jpg') ?>" alt="">
         <div class="about__wrapper">
            <div class="about__title">
               <h2>Отправка посылок в Россию</h2>
               <ul>
                  <li>Упакуйте и взвесьте вашу посылку</li>
                  <li>Оформите заявку на нашем сайте</li>
                  <li>Распечатайте и наклейте на посылку этикетку</li>
                  <li>Доставьте посылку в пункт приёма</li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <section id="faq" class="faq">
      <div class="container">
         <div class="faq__title">
            <h2>Вопросы и ответы</h2>
         </div>
         <div id="accordion" class="faq__items">
            <?php query_posts('cat=3&posts_per_page=20’');
            while (have_posts()) : the_post(); ?>
               <h3><?php the_title(); ?></h3>
            <?php the_content();
            endwhile;
            wp_reset_query();
            ?>
         </div>
      </div>
   </section>
   <section class="feedback">
      <div class="container">
         <h2>Остались вопросы?</h2>
         <p>Свяжитесь с нами через WhatsApp или Telegram
            и мы оперативно на них ответим</p>
         <div class="feedback__buttons row">
            <a href=""><img src="<?php echo pd_get_image('logos_telegram.svg') ?>" alt=""></a>
            <a href="https://wa.me/420773239865" target="_blank"><img src="<?php echo pd_get_image('logos_whatsapp.svg') ?>" alt=""></a>
         </div>
      </div>
   </section>

<?php endwhile;

get_sidebar();
get_footer();
