<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;

class ProductionController extends Controller
{
    //
    public function sell() {
        return view('app.productions.sell');
    }

    public function post() {
        $inputs = request()->validate([
            'name' => ['required'],
            'path' => ['image', 'required'],
            'price' => ['integer', 'min:1', 'required']
        ]);

        if(request('path')) {
            $inputs['path'] = request('path')->store('images');
        }

        Production::create($inputs);

        return back()->with('success', '投稿が成功しました！');
    }
}
