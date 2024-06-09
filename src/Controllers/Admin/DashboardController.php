<?php

namespace Ph45917\PhpOop\Controllers\Admin;

use Ph45917\PhpOop\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}