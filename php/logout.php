<?php
require_once 'configuracion.php';
// Finalmente, destruir la sesión.
session_destroy();
header('Location: '.HOME_URL);
exit;
