<?php

namespace App\Http\Controllers\Api;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    /**
     * method used to return Setting model
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id){
        return response()->json([
            'setting' => Setting::find($id),
        ]);
    }

    /**
     * method used to update Setting model
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id){
        $setting = Setting::find($id);
        $setting->update(request()->except('magazine_image'));
        $setting->update(['magazine_image' => $setting->storeImage('magazine_image', 'magazine_image')]);

        return response()->json([
            'setting' => $setting,
        ]);
    }
}
