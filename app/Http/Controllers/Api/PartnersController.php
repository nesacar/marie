<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\CreatePartnerRequest;
use App\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnersController extends Controller
{
    /**
     * Display a listing of Partner model
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $partners = Partner::orderBy('id', 'DESC')->paginate(50);

        return response()->json([
            'partners' => $partners,
        ]);
    }

    /**
     * method used to store a newly created Partner model
     *
     * @param  CreatePartnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePartnerRequest $request){
        $partner = Partner::create(request()->except('image'));
        $partner->update(['image' => $partner->storeImage()]);

        return response([
            'partner' => $partner,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner){
        return response([
            'partner' => $partner,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CreatePartnerRequest  $request
     * @param  \App\Partner $partner
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePartnerRequest $request, Partner $partner){
        $partner->update(request()->except('image'));
        $partner->update(['image' => $partner->storeImage()]);

        return response([
            'partner' => $partner,
        ]);
    }

    /**
     * method used to remove the specified Partner model
     *
     * @param Partner $partner
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function destroy(Partner $partner){
        $partner->delete();

        return response([
            'message' => 'Partner je obrisan.'
        ]);
    }

    /**
     * method used to return list of partners
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function lists(){
        $partners = Partner::select('id', 'title')->visible()->orderBy('created_at', 'DESC')->get();

        return response()->json([
            'partners' => $partners,
            'lists' => $partners->pluck('title', 'id'),
        ]);
    }
}
