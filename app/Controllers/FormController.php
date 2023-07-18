<?php

namespace App\Controllers;
use CodeIgniter\Controller;
class FormController extends BaseController
{
    public function profile(){
        return view('profile');
    }
    public function experience(){
        return view('experience');
    }
}