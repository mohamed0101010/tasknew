<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}

