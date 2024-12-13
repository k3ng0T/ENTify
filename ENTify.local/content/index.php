<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('session.cookie_lifetime', 3600);  // Установим продолжительность жизни cookie на 1 час
ini_set('session.cookie_path', '/');
ini_set('session.cookie_domain', '.entify.kz');  // Ваш домен
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

require_once('googleauth.php') 
?>

<!DOCTYPE html>
<html lang="kk">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Страница экзаменов</title>
        <link rel="stylesheet" href="style.css?v=1.0.1">
        <link rel="stylesheet" href="animations.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    </head>
<body>
    <header>
    <div class="top-menu" style='background: linear-gradient(315deg, #5F2A5F, #9A3B9A, #FF4B4B);'>
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
                echo "<a href='#' class='cta-button' id='login-link'>Войти</a>";
            }
            
            ?>
            </div>
        </div>
        
        <div class="Headr_photo">
            <div class="overlay"></div>
            <img src="photos/Head.jpg" alt="Главное изображение">
            <div class="cta">
                <h1>ENTify</h1>
                <h1>Разбор ЕНТ и ПКС</h1>
                <p>Подготовьтесь к Единым Национальным Тестам 
                    и пробным экзаменам вместе с ENTify. 
                    Проверяйте свои знания с помощью случайных вопросов 
                    и разбирайте реальные задания прошлых лет.</p>
                <a href="#" class="cta-button" id='login-linkf'>Узнать больше</a>

            </div>
        </div>
    </header>
    <div id="login-dia">

<div class="login-container" id="login-container" style="height: 650px;">
    <div id="closemodal">
        <span>&#10005;</span>
    </div>
    <div class="login-form-container login-sign-up">
        <form action="register.php" method="post">
            <h1>Регистрация</h1>
            <div class="login-logo-container">
                <img src="" alt="Логотип" class="login-logo">
            </div>
            <div class="login-social-icons">
                <a href="<?= $url ?>" class="login-icons google-login"><i class='bx bxl-google'></i></a>
                <a href="#" class="login-icons"><i class='bx bxl-facebook'></i></a>
                <a href="#" class="login-icons"><i class='bx bxl-github'></i></a>
                <a href="#" class="login-icons"><i class='bx bxl-linkedin'></i></a>
            </div>
            <div class="login-input-group">
                <input type="text" placeholder="Имя" name="first-name" required>
            </div>
            <div class="login-input-group">
                <input type="text" placeholder="Фамилия" name="last-name" required>
            </div>
            <div class="login-input-group">
                <input type="text" placeholder="Логин" name="username" required>
            </div>
            <div class="login-input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="login-input-group">
                <input type="password" placeholder="Пароль" name="password" required>
            </div>
            <div class="login-input-group">
                <input type="password" placeholder="Повтор Пароля" name="repeat-password" required>
            </div>
            <div class="login-input-group">
                <input type="date" id="birthdate" name="birthdate" placeholder="Дата Рождения" required>
            </div>

            <button type="submit" class="login-cta-button">Зарегистрироваться</button>
        </form>
    </div>

    <div class="login-form-container login-sign-in">
        <form action="/checklogin.php" method="POST" id="myForm">
            <h1>Вход</h1>
            <div class="login-logo-container">
                <img src="" alt="Логотип" class="login-logo">
            </div>
            <div class="login-social-icons">
                <a href="<?= $url ?>" class="login-icons google-login"><i class='bx bxl-google'></i></a>
                <a href="#" class="login-icons"><i class='bx bxl-facebook'></i></a>
                <a href="#" class="login-icons"><i class='bx bxl-github'></i></a>
                <a href="#" class="login-icons"><i class='bx bxl-linkedin'></i></a>
            </div>
            <div class="login-input-group">
                <input type="text" placeholder="Логин" name="login" required>
            </div>
            <div class="login-input-group">
                <input type="password" placeholder="Пароль" name="password" required>
            </div>
            <button type="submit" class="login-cta-button">Войти</button>
        </form>
    </div>

    <div class="login-toggle-container">
        <div class="login-toggle">
            <div class="login-toggle-panel login-toggle-left">
                <h1>Добро Пожаловать<br>В ENTify!</h1>
                <p>Регистрация и создание нового аккаунта!</p>
                <p class="login-register-text">
                    Уже есть аккаунт? <br><button class="login-hidden" id="login">Войти</button>
                </p>
            </div>
            <div class="login-toggle-panel login-toggle-right">
                <h1>Приветствую вас! <br> С возвращением в ENTify!</h1>
                <p>Войдите, чтобы продолжать работу на сайте</p>
                <p class="login-register-text">
                    Нету еще аккаунта на нашем сайте? <br>
                    <button class="login-hidden" id="register">Создать Аккаунт</button>
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
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
    
        <div class="contspace">
        <div class="mcb1_11gr">
            <div class="mcb1_12023 Shadsw animIt filler-11">
                <h1><a href="#">ПҚС-1</a></h1>
                <p>2024-2025 <br>
                    жылы болған<br>
                    ПҚС 11-СЫНЫП<br>
                    09.10.2024</p>
            </div>
            <div class="mcb1_22023 Shadsw animIt filler-11">
                <h1><a href="#">ПҚС-2</a></h1>
                <p>2024-2025 <br>
                    жылы болған<br>
                    ПҚС 11-СЫНЫП<br>
                    15.11.2024</p>
            </div>
            <div class="mcb1_32023 Shadsw animIt filler-11">
                <h1><a href="#">ПҚС-3</a></h1>
                <p>2023-2024 <br>
                    жылы болған<br>
                    ПҚС 11-СЫНЫП<br>
                    Скоро...</p>
            </div>
            <div class="mcb1_42023 Shadsw animIt filler-11">
                <h1><a href="#">ПҚС-4</a></h1>
                <p>2024-2025 <br>
                    жылы болған<br>
                    ПҚС 11-СЫНЫП<br>
                    Скоро...</p>
            </div>
        </div>
        </div>
        <div class="contspace">
            <p style="color:white">X</p>
            <div class="mcb2_10gr">
            <div class="mcb2_12023 Shadsw animIt filler-10">
                <h1><a href="#">ПҚС-1</a></h1>
                <p>2024-2025 <br>
                    жылы болған<br>
                    ПҚС 10-СЫНЫП<br>
                    09.10.2024</p>
            </div>
            <div class="mcb2_22023 Shadsw animIt filler-10">
                <h1><a href="#">ПҚС-2</a></h1>
                <p>2024-2025 <br>
                    жылы болған<br>
                    ПҚС 10-СЫНЫП<br>
                    15.11.2024</p>
            </div>
            <div class="mcb2_32023 Shadsw animIt filler-10">
                <h1><a href="#">ПҚС-3</a></h1>
                <p>2023-2024 <br>
                    жылы болған<br>
                    ПҚС 10-СЫНЫП<br>
                    Скоро...</p>
            </div>
            <div class="mcb2_42023 Shadsw animIt filler-10">
                <h1><a href="#">ПҚС-4</a></h1>
                <p>2024-2025 <br>
                    жылы болған<br>
                    ПҚС 10-СЫНЫП<br>
                    Скоро...</p>
            </div>
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
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script src="script.js"></script>
    <script>
        const lgb = document.getElementsByClassName('login-body');
        const container = document.getElementById('login-container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');

        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
        });


        const opendiaf = document.getElementById('login-linkf');
        const ld = document.getElementById('login-dia');
        opendiaf.addEventListener('click', () => {
            ld.style.transform='translateX(0)';
            ld.style.display='block';
            opendiaf.style.display='none';
            document.body.classList.add('no-scroll');
            
        })
        const opendia = document.getElementById('login-link');
        opendia.addEventListener('click', () => {
            ld.style.transform='translateX(0)';
            ld.style.display='block';
            opendia.style.display='none';
            document.body.classList.add('no-scroll');
        })
        const closedia = document.getElementById('closemodal');
        closedia.addEventListener('click', () => {
            ld.style.transform='translateX(-50%)';
            ld.style.display='none';
            opendia.style.display='block';
            opendiaf.style.display='inline-block';
            document.body.classList.remove('no-scroll');
        })



        ld.addEventListener('click', (event) => {
         if (event.target === ld) {
            ld.style.transform='translateX(-50%)';
            ld.style.display='none';
            opendia.style.display='block';
            opendiaf.style.display='inline-block';
            document.body.classList.remove('no-scroll');
            }
        });
    </script>
</body>
</html>
