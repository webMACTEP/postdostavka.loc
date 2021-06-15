<?php
/*
 Template Name: Шаблон для mailer
 */

get_header();
$sp_obj = new SpClass();

while (have_posts()) : the_post(); ?>

   <section class="order">
      <div class="container">
         <div class="order__title">
            <img src="<?php echo pd_get_image('delivery.svg') ?>" alt="">
            <h2>Оформить доставку</h2>
         </div>
         <div class="order__dash">
            <div class="order__win">
               <div class="order__wrapp">
                  <div class="order__from">
                     <div class="order__subtitle">Отправитель</div>
                     <div class="order__countries">
                        <input type="radio" name="time" value="yes"><img src="<?php echo pd_get_image('flag-czechia.svg') ?>" alt="">Чехия
                        <input type="radio" name="time" value="no"><img src="<?php echo pd_get_image('flag-belgium.svg') ?>" alt="">Бельгия
                        <input type="radio" name="time" value="no"><img src="<?php echo pd_get_image('flag-germany.svg') ?>" alt="">Германия
                     </div>
                     <span>все поля заполняются латиницей</span><br>
                     <input class="order__city" type="text" placeholder="Город">
                     <input class="order__postcode" type="text" placeholder="Почтовый индекс">
                     <input class="order__address" type="text" placeholder="Адрес"><br>
                     <input class="order__surname" type="text" placeholder="Фамилия">
                     <input class="order__name" type="text" placeholder="Имя">
                     <input class="order__tel" type="text" placeholder="Телефон">
                     <input class="order__mail" type="text" placeholder="E-mail">
                     <input class="order__weight" type="text" placeholder="Вес">
                     <input class="order__length" type="text" placeholder="Длина">
                     <input class="order__width" type="text" placeholder="Ширина">
                     <input class="order__height" type="text" placeholder="Высота">
                  </div>
                  <div class="order__to">
                     <div class="order__subtitle">Получатель</div>
                     <div class="order__countries"><input type="radio" name="time1"><img src="<?php echo pd_get_image('flag-russia.svg') ?>" alt="">Российская
                        Федерация<input type="radio" name="time1"><img src="<?php echo pd_get_image('flag-kazakhstan.svg') ?>" alt="">Казахстан
                     </div>
                     <span>все поля заполняются кириллицей</span><br>
                     <input class="order__city" type="text" placeholder="Город">
                     <input class="order__postcode" type="text" placeholder="Почтовый индекс">
                     <input class="order__address" type="text" placeholder="Адрес"><br>
                     <input class="order__surname" type="text" placeholder="Фамилия">
                     <input class="order__name" type="text" placeholder="Имя">
                     <input class="order__tel" type="text" placeholder="Телефон">
                     <input class="order__mail" type="text" placeholder="E-mail">
                  </div>
               </div>
               <span>Шаг 1/3</span>
               <div class="order__button">Оформить заявку</div>
            </div>
         </div>
         <p>Нажимая кнопку “Оформить заявку” вы соглашаетесь с условиями <a href="https://postdostavka.eu/ochrana-osobnich-udaju/">политики конфиденциальности</a></p>
      </div>
   </section>
   <div class="wrapper">
      <div class="form">
         <form action="#" id="form" class="form__body">
            <h1 class="form__title">Отправда данных на почту</h1>
            <div class="form__item">
               <label for="formName" class="form__label">Имя*:</label>
               <input id="formName" type="text" name="name" class="form__input _req">
            </div>
            <div class="form__item">
               <label for="formEmail" class="form__label">E-mail*:</label>
               <input id="formEmail" type="text" name="email" class="form__input _req _email">
            </div>
            <div class="form__item">
               <div class="form__label">Левша или правша?</div>
               <div class="options">
                  <div class="options__item">
                     <input id="formRightHanded" checked type="radio" value="right" name="hand" class="options__input">
                     <label for="formRightHanded" class="options__label"><span>Правша</span></label>
                  </div>
                  <div class="options__item">
                     <input id="formLeftHanded" type="radio" value="left" name="hand" class="options__input">
                     <label for="formLeftHanded" class="options__label"><span>Левша</span></label>
                  </div>
               </div>
            </div>
            <div class="form__item">
               <label for="formMessage" class="form__label">Сообщение:</label>
               <textarea name="message" id="formMessage" class="form__input"></textarea>
            </div>
            <div class="form__item">
               <div class="form__label">Возраст:</div>
               <select name="age" class="form__select">
                  <option value="от 18 до 25" selected>Молодой</option>
                  <option value="от 25 до 45">Старый</option>
                  <option value="от 45">Супер стар</option>
               </select>
            </div>
            <div class="form__item">
               <div class="form__label">Прикрепить фото</div>
               <div class="file">
                  <div class="file__item">
                     <input id="formImage" accept=".jpg, .png, .gif" type="file" name="image" class="file__input">
                     <div class="file__button">Выбрать</div>
                  </div>
                  <div id="formPreview" class="file__preview"></div>
               </div>
            </div>
            <div class="form__item">
               <div class="checkbox">
                  <input id="formAgreement" checked type="checkbox" name="agreement" class="checkbox__input _req">
                  <label for="formAgreement" class="checkbox__label"><span>Я даю свое согласие на обработку персональных данных в соответствии с <a href="">Условиями</a>*</span></label>
               </div>
            </div>
            <button type="submit" class="form__button">Отправить</button>
         </form>
      </div>
   </div>

<?php endwhile;

get_sidebar();
get_footer();
