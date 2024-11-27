<?php
session_start();
session_unset();  // Очищаем все данные сессии
session_destroy();  // Удаляем сессию
echo "<script>
        alert('Вы вышли из аккаунта');
        window.location.href='/login.php';
      </script>";
exit;
?>
