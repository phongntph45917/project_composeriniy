<?php
// Define routes
$router->get('/', function () {
    echo "Trang chủ";
});
$router->get('/about', function () {
    echo "Trang Giới thiệu";
});