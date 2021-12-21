<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;
use Illuminate\Support\Facades\Gate;

class ProductionController extends Controller
{
    //
    private static $productPath = 'app.productions.';

    public function sell() {
        $production = '';
        return view(self::$productPath . 'edit', compact('production'));
    }

    public function show(Production $production) {
        $noImgPath = \App\Models\Image::getNoImgPath();
        return view(self::$productPath . 'show', compact('production', 'noImgPath'));
    }

    public function post() {
        request()->validate([
            'name' => ['required'],
            'path' => ['image'],
            'price' => ['integer', 'min:1', 'required']
        ]);

        $production = auth()->user()->productions()->create([
            'name' => request('name'),
            'desc' => request('desc'),
            'price' => request('price')
        ]);

        if(request('path')) {
            $path = request('path')->store('images');
            $production->images()->create([
                'path' => $path
            ]);
        }

        return back()->with('success', '投稿が成功しました！');
    }

    public function edit(Production $production) {
        if(!Gate::allows('is-my-product', $production)) {
            return redirect()->route('production.show', $production);
        } else {
            return view(self::$productPath . 'edit', compact('production'));
        }
    }

    public function buy(Production $production) {
        if(Gate::allows('is-my-product', $production)) {
            return redirect()->route('welcome');
        } else {
            $production->update([
                'purchase_user_id' => auth()->user->id
            ]);
        }
    }
}
