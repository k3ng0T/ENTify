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
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="animation.css">
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
        <content>
            <div class="abs-container abs-c1">
                <div class="abs-content backcolor">
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
            <div class="AboutUs-2">
                <div class="cb2_1 animIt Shadsw">
                    <h1 class="cb2_title">О Нас</h1>
                    <p class="cb2_text">Мы — команда профессионалов, специализирующаяся<br>
                        на разборе старых экзаменов ПҚС, чтобы<br>
                        помочь ученикам школы «Достык» достичь успеха<br>
                        Наши разборы структурированы и адаптированы <br>
                        под нужды каждого ученика, чтобы обеспечить<br>
                        максимальную подготовку к важным экзаменам.<br></p>
                </div>
                <div class="cb2_2 animIt Shadsw">
                    <h1 class="cb2_title">Наш План</h1>
                    <p class="cb2_text">Мы создаём уникальный ресурс, где каждый ученик<br>
                        школы «Достык» может найти актуальные<br>
                        разборы экзаменов ПҚС. Наши материалы<br>
                        сопровождаются полезными рекомендациями и<br>
                        стратегиями, которые помогают не только<br>
                        понять теорию, но и эффективно применять<br>
                        её на практике.<br></p>
                </div>
                <div class="cb2_3 animIt Shadsw">
                    <h1 class="cb2_title">Почему Мы?</h1>
                    <p class="cb2_text">Эксклюзивные материалы только для учеников<br>
                        школы «Достык». Постоянное обновление и<br>
                        актуализация контента. Поддержка от<br>
                        преподавателей с многолетним опытом.<br></p>
                </div>
            </div>
            <div class="abs-container abs-c3">
                <div class="abs-content backcolor">
                    <div class="abs-text">
                        <h1 class="animIt">Почему выбирают нас?</h1>
                        <p class="animIt Shadsw"> Мы предлагаем уникальные материалы, актуальные разборы<br> 
                            ПҚС и стратегии для уверенной подготовки. С нами<br> 
                            вы достигнете своей цели быстрее!</p>
                        <a href="#" class="cta-button">Присоединиться</a>
                    </div>
                    </div>
                    <img src="photos/abs-img-2.PNG" alt="Пример изображения для abs-c3">
            </div>
        </content>
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
