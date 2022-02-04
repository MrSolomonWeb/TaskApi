<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GiftsRequest;
use App\Models\Gift;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Gift::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GiftsRequest $request)
    {

        $validated = $request->validated();


        $validated = $request->safe()->only(['name', 'gifts','user_id']);

        $validated['gifts']=json_decode(stripslashes($validated['gifts']), true, JSON_UNESCAPED_SLASHES);
        return response()->json(Gift::create($validated));






    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $giftId=Gift::findOrFail($id,array('id', 'name', 'gifts','user_id'));

        return response()->json($giftId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function edit(Gift $gift)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function update(GiftsRequest $request, Gift $gift)
    {


        $validated = $request->validated();


        $validated = $request->safe()->only(['name', 'gifts','user_id']);

        $validated['gifts']=json_decode(stripslashes($validated['gifts']), true, JSON_UNESCAPED_SLASHES);
        $gift->fill($validated);
        $gift->save();
        return response()->json($gift);




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gift $gift)
    {
        $gift->delete();
        return $gift;
    }



}
