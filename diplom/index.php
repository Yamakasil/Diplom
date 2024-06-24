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
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="assets/dentist-chair.png">
    <title>HadiachStomat</title>
</head>

<body>

    <nav>
        <div class="logo">
            <img src="assets/tooth.png">
            <a href="index.php">Стоматологічний кабінет HadiachStomat</a>
        </div>
        <ul>
            <li><a href="#main">Головна</a></li>
            <li><a href="#offers">Пропозиції</a></li>
            <li><a href="#about">Про нас</a></li>
            <li><a href="#price">Ціна на послуги</a></li>
            <li><a href="#feedback">Відгуки</a></li>
        </ul>
        <button><a href="#contact-form-container">Зв'язатися з нами</a></button>
        <button id="menuButton" onclick="openMenu()">
            <i class='bx bx-menu'></i>
        </button>
    </nav>

    <div class="main" id="main">
        <div class="left">
            <h5>Привіт, ми команда HadiachStomat</h5>
            <h3>Запрошуємо вас до нашого стоматологічного кабінету</h3>
            <p>
                Наша команда професіоналів гарантує особливу увагу до кожного клієнта 
                та використання сучасних методів лікування.
            </p>
            <button><a href="#contact-form-container">Швидкий запис</a></button>
        </div>
        <div class="right">
            <img src="assets/dentist.png">
        </div>
    </div>

    <div class="offers" id="offers">
        <h5 >Наші пропозиції</h5>
        <h3>Можна записатися на такі послуги: </h3>
        <div class="offer-items">
            <div class="item">
                <div class="icon"><img src="assets/item1.png"></div>
                <h4>Естетична стоматологія</h4>
                <p>
                    Це гармонійне поєднання мистецтва науки та професіоналізму для створення
                    Вашої ідеальної посмішки.
                </p>
            </div>
            <div class="item">
                <div class="icon"><img src="assets/item2.png"></div>
                <h4>Вініри</h4>
                <p>
                   Вирішення естетичних недоліків передніх зубів: корекція форми, кольору, усунення
                   щілин між ними.
                </p>
            </div>
            <div class="item">
                <div class="icon"><img src="assets/item3.png"></div>
                <h4>Хірургічна стоматологія</h4>
                <p>
                    Найсучасніші методики хірургічної стоматологої у Гадячі. Видалення зубів. Лікування
                    браку кісткової тканини. Пластина ясен.
                </p>
            </div>
            <div class="item">
                <div class="icon"><img src="assets/item4.png"></div>
                <h4>Імплантація</h4>
                <p>
                    Вирішення проблеми відсутності одного, декілької або всіх зубів. Максимальне збереження
                    існуючих зубів.
                </p>
            </div>
            <div class="item">
                <div class="icon"><img src="assets/item5.png"></div>
                <h4>Професійна гігієна</h4>
                <p>
                    Процедура, націлена на профілактику виникнення та прогресування захворювань ротової порожнини
                </p>
            </div>
            <div class="item">
                <div class="icon"><img src="assets/item6.png"></div>
                <h4>Брекети</h4>
                <p>
                    Іноді дива трапляються випадково, а от брекети на зуби роблять чудеса поступово.
                </p>
            </div>
        </div>
    </div>

    <div class="about" id="about">
        <div class="left">
            <img src="assets/stomat-about.png">
        </div>
        <div class="right">
            <h5>Про нас</h5>
            <h3>Головний стоматолог - Жабко Валентина</h3>
            <p>
                Є висококваліфікований стоматолог з багаторічним досвідом роботи, який очолює нашу клініку. Валентина здобула
                медичну освіту в одному з провідних університетів країни та постійно підвищує свою кваліфікацію, відвідуючи міжнародні
                семінари та конференції.
            </p>
            <p>
                Валентина відома своєю доброзичливістю, уважністю та професіоналізмом. Пацієнти цінують її за чуйне ставлення
                та вміння створити довірливу атмосферу. Вона завжди готова вислухати, зрозуміти та підтримати своїх пацієнтів на шляху
                до здорової посмішки.
            </p>
        </div>
    </div>

    <div class="price" id="price">
        <div class="header">
            <div class="info">
                <h5>Ціна на послуги</h5>
                <h3>Послуги розділені на ТРИ пакети:</h3>
            </div>
        </div>

        <div class="price-items">
            <div class="item">
                <img src="assets/children`s-dentist.png">
                <div class="info">
                    <h4>Дитяча стоматологія</h4>
                    <p>
                        Ми створюємо дружню і комфортну атмосферу для дітей, забезпечуючи якісний догляд за зубами.
                    </p>
                    <h4>500-2000 грн</h4>
                    <a href="children.php">Детальніше <i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="item">
                <img src="assets/people-dentistry.png">
                <div class="info">
                    <h4>Звичайна стоматологія</h4>
                    <p>
                        Ми надаємо повний спектр стоматологічних послуг, забезпечуючи якісний і комфортний догляд.
                    </p>
                    <h4>500-3000 грн</h4>
                    <a href="basic.php">Детальніше <i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="item">
                <img src="assets/family-dentistry.png">
                <div class="info">
                    <h4>Сімейний пакет</h4>
                    <p>
                        Скористайтеся нашим сімейним пакетом і отримайте знижку 10%, якщо приходять 3 і більше людей.
                    </p>
                    <h4>3000-6000 грн</h4>
                    <a href="family.php">Детальніше <i class='bx bx-link-external'></i></a>
                </div>
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
            <li><a href="#offers">Пропозиції</a></li>
            <li><a href="#about">Про нас</a></li>
            <li><a href="#price">Ціна на послуги</a></li>
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
