<?php

// CRUD bao gồm: Danh sách, thêm, sửa, xem, xóa
// User:
//      GET     -> USER/INDEX   -> INDEX    -> Danh sách
//      GET     -> USER/CREATE  -> CREATE   -> HIỂN THỊ FORM THÊM MỚI
//      POST    -> USER/STORE   -> STORE    -> LƯU DỮ LIỆU TỪ FORM THÊM MỚI VÀO DB
//      GET     -> USER/ID      -> SHOW ($id)     -> XEM CHI TIẾT
//      GET     -> USER/ID/EDIT -> EDIT ($id)     -> HIỂN THỊ FORM CẬP NHẬT
//      POST    -> USER/ID/UPDATE      -> UPDATE ($id)   -> LƯU DỮ LIỆU TỪ FORM CẬP NHẬT VÀO DB
//      POST    -> USER/ID/DELETE      -> DELETE ($id)   -> XÓA BẢN GHI TRONG DB

use Ph45917\PhpOop\Controllers\Admin\UserController;

$router->mount('/admin', function () use ($router) {

    // CRUD USER
    $router->mount('/users', function () use ($router) {
        $router->get('/', UserController::class . '@index');
        $router->get('/create', UserController::class . '@create');
        $router->post('/store', UserController::class . '@store');
        $router->get('/{id}', UserController::class . '@show');
        $router->get('/{id}/edit', UserController::class . '@edit');
        $router->post('/{id}/update', UserController::class . '@update');
        $router->post('/{id}/delete', UserController::class . '@delete');
    });

});