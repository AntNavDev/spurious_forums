<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subject;

class HomepageController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();

        return view('homepage.index', compact( 'subjects' ) );
    }
}
