<?php

namespace Core\Controllers;

class PagesController
{
    public function home()
    {
        return 'welcome.php';
    }
    public function contact()
    {
        return 'contact.php';
    }
    public function about()
    {
        return 'about.php';
    }
}
