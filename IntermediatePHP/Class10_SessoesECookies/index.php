
<?php

session_start();

// Sessões e Cookies
// sessão dura até o fechamento do navegador
// cookies dura até o tempo de expirar

// exemplo 1
   // $_SESSION['name'] = 'Bernardo';

// exemplo 2
   // setcookie('name', 'Bernardo', time() - 60 * 60 * 24, '/');
   // echo $_COOKIE['name'];
