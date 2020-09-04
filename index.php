<?php
    require_once(__DIR__.'/vendor/autoload.php');
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    $request = strtok($_SERVER['REQUEST_URI'],'?');
    session_start();
    switch($request){
        case $_ENV['ROOT']:
            include __DIR__.'/src/auth/authorize.php';
            include __DIR__.'/views/home.php';
            break;
        case $_ENV['ROOT'].'login.php':
            include __DIR__."/views/login.php";
            break;
        case $_ENV['ROOT'].'api/login.php':
            include __DIR__."/src/auth/login.php";
            break;
        case $_ENV['ROOT'].'register.php':
            include __DIR__.'/views/register.php';
            break;
        case $_ENV['ROOT'].'api/register.php':
            include __DIR__.'/src/auth/register.php';
            break;
        case $_ENV['ROOT'].'api/logout.php':
            include __DIR__."/src/auth/logout.php";
            break;
        default:
            include __DIR__.'/views/notfound.php';
            break;
    }
?>