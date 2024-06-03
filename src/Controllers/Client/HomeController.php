<?php 

namespace Ph45917\PhpOop\Controllers\Client;

use Ph45917\PhpOop\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        $name = 'PH45917';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}