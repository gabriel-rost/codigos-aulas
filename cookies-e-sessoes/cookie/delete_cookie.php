<?php

    // delete_cookie.php

    // apagando os cookies criados

    // apagando os tres cookies criados
    setcookie("nome", "", time() - 60);
    setcookie("idade", "0", time() - 60);
    setcookie("time", "", time() - 60);



?>