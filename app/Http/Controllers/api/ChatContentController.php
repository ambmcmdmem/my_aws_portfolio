<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\ChatContent;
use App\Models\User;
use App\Models\Production;
use Illuminate\Http\Request;

class ChatContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Production $production)
    {
        //
        $matchChatContents = ChatContent::whereProductionId($production->id)->get();

        return response()->json($matchChatContents, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Production $production)
    {
        request()->validate([
            'body' => ['required']
        ]);

        $createChatContent = ChatContent::create([
            'user_id' => auth()->user()->id,
            'production_id' => $production->id,
            'body' => request('body')
        ]);

        return response()->json($createChatContent, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChatContent  $chatContent
     * @return \Illuminate\Http\Response
     */
    public function show(ChatContent $chatContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChatContent  $chatContent
     * @return \Illuminate\Http\Response
     */
    public function edit(ChatContent $chatContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChatContent  $chatContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChatContent $chatContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChatContent  $chatContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChatContent $chatContent)
    {
        //
    }
}
