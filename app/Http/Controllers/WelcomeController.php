<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;

class WelcomeController extends Controller
{
    //

    public function index() {
        $productions = Production::all();
        // ログインしていたら
        if (auth()->user() != null) {
            $my_id = auth()->user()->id;
            $productions = $productions->where('user_id', '!=', $my_id);
        }

        $noImgPath = \App\Models\Image::getNoImgPath();

        return view('welcome', compact('productions', 'noImgPath'));
    }
}
