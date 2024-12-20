<?php


if($_SERVER['SERVER_NAME']='localhost'){

    define('DBNAME','my_db');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');

    define('ROOT','http://localhost/MVC/public');
}else{
    
    define('DBNAME','my_db');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');

    define('ROOT','https://www.yourwebsite.com');
}