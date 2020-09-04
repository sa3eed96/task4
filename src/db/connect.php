<?php
    $db = mysqli_connect(
        $_ENV['DB_HOST'],
        $_ENV['DB_USERNAME'], 
        $_ENV['DB_PASSWORD'] ? $_ENV['DB_PASSWORD'] : '',
        $_ENV['DB_NAME']
    );

    $sql="CREATE TABLE IF NOT EXISTS `".$_ENV['DB_NAME']."`.`users` 
    ( `id` INT NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(255) NOT NULL , 
    `email` VARCHAR(255) NOT NULL , 
    `password` VARCHAR(255) NOT NULL , 
    `number` VARCHAR(255) NOT NULL , 
    `address` VARCHAR(255) NOT NULL ,
     PRIMARY KEY (`id`))";

    $db->query($sql);
?>