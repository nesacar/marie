<?php

namespace App\Http\Controllers\Api;

use App\Blog;
use App\Http\Requests\CreateVideoRequest;
use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideosController extends Controller{

    /**
     * Display a listing of Video model
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return response()->json([
            'videos' => Video::orderBy('id', 'DESC')->paginate(Video::$paginate),
        ]);
    }

    /**
     * method used to store a newly created Video model
     *
     * @param  CreateVideoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateVideoRequest $request){
        $video = Video::create(request()->except('image'));
        $video->update(['image' => $video->storeImage()]);

        return response([
            'video' => $video,
        ]);
    }

    /**
     * method used to display the specified Video model
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video){
        return response([
            'video' => $video,
            'blog' => $video->blog,
        ]);
    }

    /**
     * method used to update the specified Video model
     *
     * @param  CreateVideoRequest  $request
     * @param  \App\Video $video
     * @return \Illuminate\Http\Response
     */
    public function update(CreateVideoRequest $request, Video $video){
        $video->update(request()->except('image'));
        $video->update(['image' => $video->storeImage()]);

        return response([
            'video' => $video,
            'blog' => $video->blog,
        ]);
    }

    /**
     * method used to remove the specified Video model
     *
     * @param Video $video
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function destroy(Video $video){
        $video->delete();

        return response([
            'message' => 'Video je obrisan.'
        ]);
    }

    /**
     * Display a listing of Video related to the Blog model
     *
     * @param int $blog_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function lists($blog_id){
        $blog = Blog::with('video')->find($blog_id);

        return response()->json([
            'blog' => $blog,
        ]);
    }
}
