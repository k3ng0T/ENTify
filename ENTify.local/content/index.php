<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('session.cookie_lifetime', 3600);  // Установим продолжительность жизни cookie на 1 час
ini_set('session.cookie_path', '/');
ini_set('session.cookie_domain', '.entify.kz');  // Ваш домен
?>

<!DOCTYPE html>
<html lang="kk">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Страница экзаменов</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="animations.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    </head>
<body>
    <header>
    <div class="top-menu">
            <div class="Logo">
                <a href="index.php">
                    <img src="photos/Logo.png" alt="Логотип">
                </a>
            </div>
            <div class="nav-links">
                <a href="index.php">Главная</a>
                <a href="exams.html.php">Экзамены</a>
                <a href="contact.html.php">О Нас</a>
            </div>
            <div class="auth-button" id="auth-status">
            <?php
            if (isset($_COOKIE['user'])) {
                echo "<a href='profile.html.php' id='profile-btn' style='color:white; text-decoration:none; font-family:\"Benzin\";'>". htmlspecialchars($_COOKIE['user']) ."</a>" ;
            }else {
                echo "<a href='login.html' class='cta-button' id='login-link'>Войти</a>";
            }
            
            ?>
               
            </div>
        </div>
        
        <div class="Headr_photo">
            <div class="overlay"></div>
            <img src="photos/Head.jpg" alt="Главное изображение">
            <div class="cta">
                <h1>Разбор экзамена</h1>
                <h1>ПҚС</h1>
                <p>Присоединяйтесь к нашей уникальной <br>
                    подготовке к Пәндік қайталау сынағы,<br>
                    доступной только в школе Dostyq School.</p>
                <a href="login.html" class="cta-button">Узнать больше</a>
            </div>
        </div>
    </header>
    <main>
        <div class="abs-container abs-c1">
            <div class="abs-content">
                <div class="abs-text">
                    <h1 class="animIt">Добро пожаловать<br> в мир ПҚС!</h1>
                    <p class="animIt Shadsw">
                        Узнайте, как мы помогаем ученикам школы «Достык» достигать<br>
                        высоких результатов! Наши структурированные разборы<br> 
                        и стратегии подготовки созданы для вашего успеха.
                    </p>
                    <div class="cta-button animIt">
                        <a href="exams.html.php">Начать подготовку!</a>
                    </div>
                </div>
                </div>
            <img src="photos/abs-img-1.png" alt="Описание ABS-c1">
            </div>
            <img src="" alt="" class="cb1_2">
        </div>
    
        <div class="mcb1_11gr">
            <div class="mcb1_12023 Shadsw animIt">
                <h1><a href="#">ПҚС-1</a></h1>
                <p>2024-2025 <br>
                    жылы болған<br>
                    ПҚС 11-СЫНЫП<br>
                    09.10.2024</p>
            </div>
            <div class="mcb1_22023 Shadsw animIt">
                <h1><a href="#">ПҚС-2</a></h1>
                <p>2024-2025 <br>
                    жылы болған<br>
                    ПҚС 11-СЫНЫП<br>
                    15.11.2024</p>
            </div>
            <div class="mcb1_32023 Shadsw animIt">
                <h1><a href="#">ПҚС-3</a></h1>
                <p>2023-2024 <br>
                    жылы болған<br>
                    ПҚС 11-СЫНЫП<br>
                    Скоро...</p>
            </div>
            <div class="mcb1_42023 Shadsw animIt">
                <h1><a href="#">ПҚС-4</a></h1>
                <p>2024-2025 <br>
                    жылы болған<br>
                    ПҚС 11-СЫНЫП<br>
                    Скоро...</p>
            </div>
        </div>
                <div class="mcb2_10gr">
            <div class="mcb2_12023 Shadsw animIt">
                <h1><a href="#">ПҚС-1</a></h1>
                <p>2024-2025 <br>
                    жылы болған<br>
                    ПҚС 10-СЫНЫП<br>
                    09.10.2024</p>
            </div>
            <div class="mcb2_22023 Shadsw animIt">
                <h1><a href="#">ПҚС-2</a></h1>
                <p>2024-2025 <br>
                    жылы болған<br>
                    ПҚС 10-СЫНЫП<br>
                    15.11.2024</p>
            </div>
            <div class="mcb2_32023 Shadsw animIt">
                <h1><a href="#">ПҚС-3</a></h1>
                <p>2023-2024 <br>
                    жылы болған<br>
                    ПҚС 10-СЫНЫП<br>
                    Скоро...</p>
            </div>
            <div class="mcb2_42023 Shadsw animIt">
                <h1><a href="#">ПҚС-4</a></h1>
                <p>2024-2025 <br>
                    жылы болған<br>
                    ПҚС 10-СЫНЫП<br>
                    Скоро...</p>
            </div>
        </div>
        <div class="man9sua">
            <img src="photos/TgBackGr.jpg" alt="Фоновое изображение">
            <div class="overlay"></div>
            <div class="man9sua_content">
                <h1 class="man9sua_title">Присоеденяйтесь!</h1>
                <p class="man9sua_text">
                    Подготовка к ПҚС, Разбор, пробные ЕНТ!
                </p>
                <div class="mans9ua_btn">
                    <a href="https://www.t.me/dostyqpksbot">Перейти Сейчас!</a>
                </div>
            </div>
            <div class="TgLogo">
                <img src="photos/Telegram.png" alt="Логотип Telegram">
            </div>
        </div>
    </main>
    <footer>
        <div class="contactUs">
            <h1 class="footh1 animIt">Связь с нами!</h1>
            <div class="adr">
                <div class="socialMedia animIt">
                    <p>Наши Соц. сети</p>
                    <ul>
                        <li><a href="https://www.instagram.com/dostyqschool_almaty/">Instagram</a></li>
                        <li><a href="https://dostyq-bilim.kz/">School</a></li>
                        <li><a href="https://www.instagram.com/dostyqschool_government/">Government</a></li>
                    </ul>
                </div>
                <div class="number animIt">
                    <p id="moveRight">Наши Номерa</p>
                    <ul>
                        <li>+7(707)123-45-67</li>
                        <li>+7(727)212-34-56</li>
                        <li>+7(777)123-45-67</li>
                    </ul>
                </div>
                <div class="adress animIt">
                    <p>Наши Адреса</p>
                    <ul>
                        <li><a href="https://2gis.kz/almaty/firm/9429940001626510/76.85773%2C43.227116?m=76.858053%2C43.227464%2F18.83">Dostyq School, Almaty</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <p></p>
        </div>
    </footer>
    <script src="script.js"></script>
    <script src="main.js"></script>
</body>
</html>
