<?php

session_start();

//Condition qui nous permet de voir si l'user est authentifi√© si c'est pas le cas redirig√© sur login.php
if (!isset($_SESSION['auth'])) {
    header('Location: login.php');
}
