<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Session\Session;

class CourseController extends Controller
{
    public function index()
    {
        $session = new Session();
        $token = $session->get('access_token');
        return view('course.index', compact('token', 'session'));
    }
}