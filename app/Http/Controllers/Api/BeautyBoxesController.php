<?php

namespace App\Http\Controllers\Api;

use App\BeautyBox;
use App\Http\Requests\CreateBeautyBoxRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeautyBoxesController extends Controller
{
    /**
     * Display a listing of BeautyBox model
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $beauty_boxes = BeautyBox::orderBy('id', 'DESC')->paginate(50);

        return response()->json([
            'beauty_boxes' => $beauty_boxes,
        ]);
    }

    /**
     * method used to store a newly created BeautyBox model
     *
     * @param  CreateBeautyBoxRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBeautyBoxRequest $request){
        $beauty_box = BeautyBox::create(request()->except('image'));
        $beauty_box->update(['image' => $beauty_box->storeImage()]);
        request('partner_ids')? $beauty_box->partner()->sync(explode(',', request('partner_ids'))) : $beauty_box->partner()->sync([]);

        return response([
            'beauty_box' => $beauty_box,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BeautyBox  $beauty_box
     * @return \Illuminate\Http\Response
     */
    public function show(BeautyBox $beauty_box){
        return response([
            'beauty_box' => $beauty_box,
            'partner_ids' => $beauty_box->partner()->pluck('id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CreateBeautyBoxRequest  $request
     * @param  \App\BeautyBox  $beauty_box
     * @return \Illuminate\Http\Response
     */
    public function update(CreateBeautyBoxRequest $request, BeautyBox $beauty_box){
        $beauty_box->update(request()->except('image'));
        $beauty_box->update(['image' => $beauty_box->storeImage()]);
        request('partner_ids')? $beauty_box->partner()->sync(explode(',', request('partner_ids'))) : $beauty_box->partner()->sync([]);

        return response([
            'beauty_box' => $beauty_box,
            'partner_ids' => $beauty_box->partner()->pluck('id'),
        ]);
    }

    /**
     * method used to remove the specified BeautyBox model
     *
     * @param BeautyBox $beauty_box
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function destroy(BeautyBox $beauty_box){
        $beauty_box->delete();

        return response([
            'message' => 'Beauty box je obrisan.'
        ]);
    }
}
