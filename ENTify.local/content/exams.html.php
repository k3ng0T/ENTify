<?php
session_start();
ini_set('display_errors', 0);  // Отключаем вывод ошибок
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING); 
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
        <div class="ex_10gr">
            <div class="ex24-25_10">
                <h2>10-сынып</h2>
                <h2>2024-2025оқу жылы</h2>
                <h1 class="ex1-24-10 ex24-10"><a href="PQS/1-2024-10.html">Пән қайталау сынағы-1</a></h1>
                <h1 class="ex2-24-10 ex24-10"><a href="PQS/2-2024-10.html">Пән қайталау сынағы-2</a></h1>
                <h1 class="ex3-24-10 ex24-10"><a href="PQS/3-2024-10.html">Пән қайталау сынағы-3</a></h1>
                <h1 class="ex4-24-10 ex24-10"><a href="PQS/4-2024-10.html">Пән қайталау сынағы-4</a></h1>
                <h1 class="ex5-24-10 ex24-10"><a href="PQS/5-2024-10.html">Пән қайталау сынағы-5</a></h1>
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
</body>
</html>
