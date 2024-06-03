<?php

namespace Ph45917\PhpOop\Controllers\Admin;

use Ph45917\PhpOop\Commons\Controller;
use Ph45917\PhpOop\Commons\Helper;
use Ph45917\PhpOop\Models\User;

class UserController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    // public function index()
    // {
    //     try {
    //         // for ($i=0; $i < 10; $i++) { 
    //         //     $this->user->insert([
    //         //         'name' => "Nguyễn Thanh $i",
    //         //         'email' => "a$i@gmail.com",
    //         //         'password' => password_hash('12345', PASSWORD_DEFAULT)
    //         //     ]);
    //         // }
    //         // die;


    //         $users = $this->user->paginate($_GET['page'] ?? 1);

    //         Helper::debug($users[1]);

    //     } catch (\Throwable $th) {
    //         Helper::debug($th->getMessage());
    //     }
    // }

    public function index()
    {
        [$users, $totalPage] = $this->user->paginate($_GET['page'] ?? 1);

        $this->renderViewAdmin('users.index', [
            'users' => $users,
            'totalPage' => $totalPage
        ]);
    }

    public function create()
    {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function store()
    {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function show($id)
    {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function edit($id)
    {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function update($id)
    {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function delete($id)
    {
        $this->user->delete($id);

        header('Location: ' . url('admin/users'));
        exit();
    }
}
