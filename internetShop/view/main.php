<!-- main -->
<main>
    <a href="#banner" class="top_button">Вверх↑</a>

    <!-- company -->
    <div class="company container my_120">
        <div class="company_block main_block">
            <h2 class="main_title">О компании</h2>
            <p>
                Мы рады представить вам нашу уникальную коллекцию одежды, которая соединяет в себе стиль, качество и
                комфорт. В "Легенде" вы найдёте широкий выбор модной одежды для мужчин, женщин и детей, подходящей
                для любой ситуации — от повседневных нарядов до шикарных вечерних комплектов.
            </p>
        </div>
    </div>
    <!-- company -->

    <!-- reviews -->
    <div class="reviews main_block my_120">
        <h2 class="reviews_title main_title">Отзывы</h2>

        <div class="main_subblock container">
            <button onclick="backButton()" class="review_back"><img src="img/reviews/arrow.svg" alt="arrow"></button>

            <div class="reviews_block">
                <div class="reviews_slider_subblock">
                    <? foreach ($result_reviews as $review): ?>
                        <!-- card -->
                        <div class="review">
                            <div class="review_block">
                                <img src="<?= $review['img_review'] ?>" alt="person">
                                <h3><?= $review['title_review'] ?></h3>
                            </div>
                            <p><?= $review['text_review'] ?></p>
                        </div>
                        <!-- card -->
                    <? endforeach; ?>
                </div>
            </div>

            <button onclick="nextButton()" class="review_next"><img src="img/reviews/arrow.svg" alt="arrow"></button>
        </div>
    </div>
    <!-- reviews -->

    <!-- catalog -->
    <div id="catalog" class="catalog main_block container my_120">
        <h2 class="catalog_title main_title">Коллекция</h2>

        <div class="catalog_block">
            <? foreach ($result as $prod): ?>
                <!-- card -->
                <div class="catalog_card">
                    <img src="<?= $prod['img'] ?>" alt="clothes">
                    <h2><?= $prod['title'] ?></h2>
                    <div class="catalog_card_subblock">
                        <h3><?= $prod['price'] ?> <span class="price">₽</span> </h3>
                        <? if (isset($_SESSION["name_user"]) && isset($_SESSION["img_user"])): ?>
                            <a onclick="orderSend()" href="#catalog">Заказать</a>
                        <? else: ?>
                            <a onclick="orderNotSend()" href="#catalog">Заказать</a>
                        <? endif; ?>
                    </div>
                </div>
                <!-- card -->
            <? endforeach; ?>
        </div>
    </div>
    <!-- catalog -->

    <!-- questions -->
    <div class="questions main_block my_120">
        <h2 class="questions_title main_title">Вопросы</h2>

        <div class="questions_block main_block container">

            <!-- question -->
            <div onclick="answerVisible(this)" class="question answer_visible">
                <div class="question_subblock_1 qu_1">
                    <h2>Как сделать заказ?</h2>
                    <img src="img/questions/arrow.svg" alt="arrow">
                </div>
                <div class="question_subblock_2 an_1">
                    <p>Выберите товар, добавьте его в корзину и следуйте инструкциям на экране для оформления
                        заказа.</p>
                </div>
            </div>
            <!-- question -->

            <!-- question -->
            <div onclick="answerVisible(this)" class="question">
                <div class="question_subblock_1 qu_2">
                    <h2>Как отменить или изменить заказ?</h2>
                    <img src="img/questions/arrow.svg" alt="arrow">
                </div>
                <div class="question_subblock_2 an_2">
                    <p>Свяжитесь с нашей службой поддержки как можно скорее. Изменения и отмены возможны до момента
                        обработки заказа.</p>
                </div>
            </div>
            <!-- question -->

            <!-- question -->
            <div onclick="answerVisible(this)" class="question">
                <div class="question_subblock_1 qu_3">
                    <h2>Как осуществляется доставка?</h2>
                    <img src="img/questions/arrow.svg" alt="arrow">
                </div>
                <div class="question_subblock_2 an_3">
                    <p>Мы предлагаем несколько вариантов доставки, включая курьерскую службу и почтовые отправления.
                        Условия зависят от вашего региона.</p>
                </div>
            </div>
            <!-- question -->

            <!-- question -->
            <div onclick="answerVisible(this)" class="question">
                <div class="question_subblock_1 qu_4">
                    <h2>Как отслеживать свой заказ?</h2>
                    <img src="img/questions/arrow.svg" alt="arrow">
                </div>
                <div class="question_subblock_2 an_4">
                    <p>После отправки мы отправим вам трек-номер на указанный при заказе адрес электронной почты. Вы
                        можете использовать его для отслеживания доставки.</p>
                </div>
            </div>
            <!-- question -->

            <!-- question -->
            <div onclick="answerVisible_1(this)" class="question">
                <div class="question_subblock_1 qu_5">
                    <h2>Что делать, если товар оказался бракованным?</h2>
                    <img src="img/questions/arrow.svg" alt="arrow">
                </div>
                <div class="question_subblock_2 an_5">
                    <p>Пожалуйста, свяжитесь с нашей службой поддержки, предоставив фото дефекта. Мы организуем
                        возврат и замену товара.</p>
                </div>
            </div>
            <!-- question -->
        </div>
    </div>
    <!-- questions -->

    <!-- form -->
    <div class="form_block main_subblock my_120 container">
        <form method="post" class="form">
            <h2 class="form_title main_title">Напиши отзыв!</h2>
            <textarea placeholder="текст отзыва" class="input" name="text_review_form" rows="5" cols="33"></textarea>
            <? if (isset($_SESSION["name_user"]) && isset($_SESSION["img_user"])): ?>
                <input class="input" name="title_review_form" type="hidden" value="<?= $_SESSION["name_user"] ?>">
                <input class="input" name="img_review_form" type="hidden" value="<?= $_SESSION["img_user"] ?>">
                <input class="button_submit" type="submit" value="Отправить">
            <? else: ?>
                <a class="button_submit" href="view/authorization.php">Авторизация</a>
            <? endif; ?>
        </form>

        <img src="img/form/image.png" alt="family">
    </div>
    <!-- form -->

    <!-- map -->
    <div class="map container my_120">
        <div class="map_block">
            <h2 class="main_title">Контакты</h2>
            <a href="mailto:legend_magazine@gmail.com">legend_magazine@gmail.com</a>
            <a href="tel:+79372973464">8 937 297 34 64</a>
            <div>
                <p><span class="bold">Пн – Пт:</span>  09:00 – 21:00</p>
                <p><span class="bold">Сб – Вс:</span>  10:00 – 18:00</p>
            </div>
            <p>420111, Республика Татарстан, Казань, Кремль, а/я 522</p>
        </div>
    </div>
    <!-- map -->
</main>
<!-- main -->