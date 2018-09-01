<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\CreatePositionRequest;
use App\Position;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PositionsController extends Controller
{
    /**
     * Display a listing of Position model
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return response()->json([
            'positions' => Position::orderBy('id', 'DESC')->paginate(50),
        ]);
    }

    /**
     * method used to store a newly created Position model
     *
     * @param  CreatePositionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePositionRequest $request){
        return response([
            'position' => Position::create(request()->all()),
        ]);
    }

    /**
     * method used to display the specified Position model
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show(Position $position){
        return response([
            'position' => $position,
        ]);
    }

    /**
     * method used to update the specified Position model
     *
     * @param  CreatePositionRequest  $request
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePositionRequest $request, Position $position){
        $position->update(request()->all());

        return response([
            'position' => $position,
        ]);
    }

    /**
     * method used to remove the specified Position model
     *
     * @param Position $position
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function destroy(Position $position){
        $position->delete();

        return response([
            'message' => 'Banerska pozicija je obrisana.'
        ]);
    }
}
