<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Josefin+Sans&family=Jost:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@1,500&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@500&family=Poppins:wght@300&family=Raleway:ital,wght@0,600;0,900;1,500&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="children.css">
    <link rel="icon" type="image/x-icon" href="assets/dentist-chair.png">
    <title>Звичайна стоматологія</title>
</head>

<body>

    <nav>
        <div class="logo">
            <img src="assets/tooth.png">
            <a href="index.php">Стоматологічний кабінет HadiachStomat</a>
        </div>
        <ul>
            <li><a href="#main">Головна</a></li>
            <li><a href="#about">Особливості</a></li>
            <li><a href="#offers">Пропозиції</a></li>
            <li><a href="#feedback">Відгуки</a></li>
        </ul>
        <button><a href="#contact-form-container">Зв'язатися з нами</a></button>
        <button id="menuButton" onclick="openMenu()">
            <i class='bx bx-menu'></i>
        </button>
    </nav>

    <div class="main" id="main">
        <div class="left">
            <h5></h5>
            <h3>Звичайна стоматологія</h3>
            <p>
            <p>Ми сфокусовані на забезпеченні базового догляду за ротовою порожниною, діагностиці та лікуванні зубних захворювань, профілактичних заходах і естетичних процедурах.</p>
            <p><b>Наша мета</b> – зберегти ваші зуби здоровими та красивими, допомагаючи вам підтримувати гарну гігієну порожнини рота.</p>
            </p>
            <button><a href="#contact-form-container">Швидкий запис</a></button>
        </div>
        <div class="right">
            <img src="assets/basic1.jpg">
        </div>
    </div>

    <div class="heading" id="heading">
        <h3>Головні особливості нашої стоматології</h3>
    </div>

    <div class="about" id="about">
        <div class="left">
            <img src="assets/about-basic1.jpg">
        </div>
        <div class="right">
            <b>Діагностика та лікування карієсу:</b>
            <p>
                Звичайна стоматологія спеціалізується на виявленні та лікуванні карієсу. Використовуючи сучасне обладнання та матеріали,
                стоматологи проводять пломбування та реставрацію зубів, забезпечуючи здоров'я порожнини рота.
            </p>
        </div>
    </div>

    <div class="about" id="about">
        <div class="left">
            <img src="assets/about-basic2.jpg">
        </div>
        <div class="right">
            <b>Профілактичні заходи:</b>
            <p>
                Регулярні професійні чистки зубів та огляди допомагають попередити розвиток захворювань ротової порожнини. Фторування
                зубів і герметизація фісур сприяють зміцненню зубної емалі та запобіганню карієсу.
            </p>
        </div>
    </div>

    <div class="about" id="about">
        <div class="left">
            <img src="assets/about-basic3.jpg">
        </div>
        <div class="right">
            <b>Лікування ясенних захворювань:</b>
            <p>
                У звичайній стоматології проводиться лікування гінгівіту та пародонтиту. Сучасні методи дозволяють ефективно боротися з
                інфекціями, зменшуючи запалення та запобігаючи втраті зубів.
            </p>
        </div>
    </div>

    <div class="about" id="about">
        <div class="left">
            <img src="assets/about-basic4.jpg">
        </div>
        <div class="right">
            <b>Естетична стоматологія:</b>
            <p>
                Пацієнти можуть скористатися послугами відбілювання зубів, встановлення вінірів та інших естетичних процедур. Це
                дозволяє покращити зовнішній вигляд зубів та підвищити впевненість у собі.
            </p>
        </div>
    </div>

    <div class="offers" id="offers">
        <h3>Можна записатися на такі послуги: </h3>
        <div class="offer-items">
            <div class="item">
                <div class="icon"><img src="assets/item1.png"></div>
                <h4>Лікування карієсу:
                    <p>Ціна - 1200₴</p>
                </h4>
                <p>
                    Виявлення та пломбування каріозних порожнин із застосуванням сучасних матеріалів.
                </p>
            </div>
            <div class="item">
                <div class="icon"><img src="assets/item4.png"></div>
                <h4>Професійна чистка зубів:
                    <p>Ціна - 1300₴</p>
                </h4>
                <p>
                    Видалення зубного нальоту і каменю за допомогою ультразвуку та полірування зубів.
                </p>
                <div class="spacer"></div>
            </div>
            <div class="item">
                <div class="icon"><img src="assets/item6.png"></div>
                <h4>Фторування зубів:
                    <p>Ціна - 500₴</p>
                </h4>
                <p>
                    Нанесення фторвмісних препаратів для зміцнення емалі та зниження чутливості зубів.
                </p>
            </div>
            <div class="item">
                <div class="icon"><img src="assets/item2.png"></div>
                <h4>Встановлення вінірів:
                    <p>Ціна - 6500₴</p>
                </h4>
                <p>
                    Нанесення тонких керамічних накладок для корекції форми та кольору зубів.
                </p>
            </div>
            <div class="item">
                <div class="icon"><img src="assets/item3.png"></div>
                <h4>Гінгівіт та пародонтит:
                    <p>Ціна - 1500₴</p>
                </h4>
                <p>
                    Лікування запалення ясен, включаючи чистку пародонтальних кишень та застосування антисептичних засобів.
                </p>
            </div>
            <div class="item">
                <div class="icon"><img src="assets/item5.png"></div>
                <h4>Естетичне відбілювання зубів
                    <p>Ціна - 3500₴</p>
                </h4>
                <p>
                    Відбілювання зубів за допомогою професійних засобів, що дозволяє досягти помітного освітлення зубної емалі.
                </p>
            </div>
        </div>
    </div>

    <div class="feedback" id="feedback">
        <h5>Відгуки клієнтів</h5>
        <h3>Маємо велику кількість задоволених клієнтів</h3>
        <div class="customers">
            <div class="item">
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p>
                    "Моя дитина перестала боятися стоматолога завдяки дружній
                    атмосфері та уважному підходу лікарів."
                </p>
                <div class="user">
                    <img src="assets/us-1.png">
                    <div class="info">
                        <h5>Ростислав Г.</h5>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p>
                    "Отримала професійне лікування і залишилася дуже задоволена результатом.
                    Дякую за комфорт і якість!"
                </p>
                <div class="user">
                    <img src="assets/us-2.png">
                    <div class="info">
                        <h5>Ірина К.</h5>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p>
                    "Зручний і вигідний пакет для сімей. Дуже задоволені професійним підходом і турботою
                    про кожного з нас."
                </p>
                <div class="user">
                    <img src="assets/us-3.png">
                    <div class="info">
                        <h5>Сім'я Шевченків</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-form-container" id="contact-form-container">
        <h5>Зв'язатися з нами</h5>
        <h3>Залиште, будь ласка, свої дані:</h3>
        <form id="contactForm" action="server.php?action=add_appointment" method="POST">
            <label for="firstName">Ім'я:</label>
            <input type="text" id="firstName" name="first_name" required>

            <label for="lastName">Прізвище:</label>
            <input type="text" id="lastName" name="last_name" required>

            <label for="packageType">Тип пакету:</label>
            <select id="packageType" name="packageType" required>
                <option value="" disabled selected>Оберіть пакет</option>
                <option value="children">Дитячий</option>
                <option value="basic">Звичайний</option>
                <option value="family">Сімейний</option>
            </select>

            <div id="serviceField">
                <label for="serviceType">Тип послуги:</label>
                <select id="serviceType" name="service_type">
                    <option value="" disabled selected>Оберіть послугу</option>
                </select>
            </div>

            <label for="phoneNumber">Номер телефону:</label>
            <input type="tel" id="phoneNmber" name="phone" required>

            <label for="comment">Коментар:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>

            <label for="appointmentDateTime">Дата та час:</label>
            <input type="datetime-local" id="appointmentDateTime" name="appointment_date" required step="3600">

            <button type="submit">Залишити заявку</button>
        </form>
    </div>

    <footer>
        <div class="top">
            <div class="logo">
                <img src="assets/tooth.png">
                <a href="login.php">HadiachStomat</a>
            </div>
            <ul>
                <li><a href="#main">Головна</a></li>
                <li><a href="#about">Особливості</a></li>
                <li><a href="#offers">Пропозиції</a></li>
                <li><a href="#feedback">Відгуки</a></li>
            </ul>
            <div class="social-links">
                <a href="https://www.instagram.com/ms.zhabko82/" target="_blank"><i class='bx bxl-instagram'></i></a>
                <a href="https://t.me/mszhabko4421" target="_blank"><i class='bx bxl-telegram'></i></a>
                <a href="https://contacts.google.com/person/c7265750643864718418" target="_blank"><i
                        class='bx bxl-gmail'></i></a>
            </div>
        </div>
        <div class="separator"></div>
        <div class="bottom">
            <p>
                © 2024 Ваше здоров'я - наша турбота.
            </p>
            <div class="links">
                <a href="tel:+380505980444">+380505980444</a>
                <a href="https://contacts.google.com/person/c7265750643864718418"
                    target="_blank">deniszhabko000@gmail.com</a>
                <a href="#">10:00-20:00</a>
            </div>
        </div>
    </footer>

    <script src="scripts.js"></script>
</body>

</html>
