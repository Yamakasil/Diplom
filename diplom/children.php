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
    <title>Дитяча стоматологія</title>
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
            <h3>Дитяча стоматологія</h3>
            <p>
                <p>З особливою увагою ставимося до лікування та догляду за зубами наших маленьких пацієнтів.</p> 
                <p>Дитяча стоматологія - це не лише лікування, але й навчання правильному догляду за зубами та профілактика захворювань.</p>
            </p>
            <button><a href="#contact-form-container">Швидкий запис</a></button>
        </div>
        <div class="right">
            <img src="assets/children1.jpg">
        </div>
    </div>

    <div class="heading" id="heading">
        <h3>Головні особливості нашої стоматології</h3>
    </div>

    <div class="about" id="about">
        <div class="left">
            <img src="assets/about-children1.jpg">
        </div>
        <div class="right"> 
            <b>Дитячне середовище:</b>
            <p>
                 Наш кабінет оформлений таким чином, щоб зробити візит до стоматолога якомога комфортнішим для дітей.
                    Ми розуміємо, що дитина може бути під час відвідин лікаря напружена, тому створюємо дружню та доброзичливу атмосферу.
            </p>
        </div>
    </div>

    <div class="about" id="about">
        <div class="left">
            <img src="assets/about-children2.jpg">
        </div>
        <div class="right"> 
            <b>Кваліфікований персонал:</b>
            <p>
                Наші дитячі стоматологи мають великий досвід роботи з дітьми та спеціальну підготовку щодо лікування молочних та
                постійних зубів у дітей. Ми надаємо не лише професійне лікування, але й підтримку та рекомендації щодо догляду за зубами
                вдома.
            </p>
        </div>
    </div>

    <div class="about" id="about">
        <div class="left">
            <img src="assets/about-children3.jpg">
        </div>
        <div class="right">
            <b>Профілактика:</b>
            <p>
                Ми підкреслюємо важливість профілактики захворювань порожнини рота в ранньому віці. Тому ми регулярно проводимо осмотри
                та гігієнічні процедури для дітей, щоб запобігти розвитку карієсу та інших захворювань.
            </p>
        </div>
    </div>

    <div class="about" id="about">
        <div class="left">
            <img src="assets/about-children4.jpg">
        </div>
        <div class="right"> 
            <b>Індивідуальний підхід:</b>
            <p>
                Кожна дитина унікальна, тому ми підходимо до кожного пацієнта індивідуально. Ми стежимо за розвитком зубів та ясен,
                враховуємо особливості росту та розвитку, а також враховуємо будь-які особливості здоров'я.
            </p>
        </div>
    </div>

<div class="offers" id="offers">
    <h3>Можна записатися на такі послуги: </h3>
    <div class="offer-items">
        <div class="item">
            <div class="icon"><img src="assets/item1.png"></div>
            <h4>Профілактичні огляди:
                <p>Ціна - 1500₴</p>
            </h4>
            <p>
                Регулярні огляди та консультації для оцінки здоров'я ротової порожнини дитини і своєчасного виявлення можливих проблем.
            </p>
        </div>
        <div class="item">
            <div class="icon"><img src="assets/item2.png"></div>
            <h4>Професійна чистка зубів:
                <p>Ціна - 2500₴</p>
            </h4>
            <p>
                Видалення зубного нальоту та каменю, профілактика карієсу і гінгівіту.
            </p>
            <div class="spacer"></div>
        </div>
        <div class="item">
            <div class="icon"><img src="assets/item3.png"></div>
            <h4>Лікування карієсу:
                <p>Ціна - 2000₴</p>
            </h4>
            <p>
                Ефективне лікування карієсу різного ступеню важкості із застосуванням сучасних матеріалів та методик.
            </p>
        </div>
        <div class="item">
            <div class="icon"><img src="assets/item4.png"></div>
            <h4>Пломбування зубів:
                <p>Ціна - 1800₴</p>
            </h4>
            <p>
                Відновлення форми та функції зуба за допомогою високоякісних пломбувальних матеріалів.
            </p>
        </div>
        <div class="item">
            <div class="icon"><img src="assets/item5.png"></div>
            <h4>Герметизація фісур:
                <p>Ціна - 1200₴</p>
            </h4>
            <p>
                Профілактична процедура для захисту жувальних поверхонь зубів від карієсу.
            </p>
        </div>
        <div class="item">
            <div class="icon"><img src="assets/item6.png"></div>
            <h4>Ортодонтичні консультації:
                <p>Ціна - 1000₴</p>
            </h4>
            <p>
                Оцінка потреб дитини в ортодонтичному лікуванні та розробка індивідуального плану корекції прикусу.
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
