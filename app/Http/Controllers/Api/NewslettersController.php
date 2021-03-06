<?php

namespace App\Http\Controllers\Api;

use App\Jobs\ProcessNewsletter;
use App\Banner;
use App\Http\Requests\CreateNewsletterRequest;
use App\Newsletter;
use App\Newsletter_template;
use App\Post;
use App\Subscriber;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Controller;

class NewslettersController extends Controller
{
    /**
     * Display a listing of Newsletter model
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return response()->json([
            'newsletters' => Newsletter::latest()->paginate(50),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateNewsletterRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateNewsletterRequest $request){
        $newsletter = new Newsletter();
        $newsletter->title = request('title');
        $newsletter->verification = str_random(20);
        $newsletter->save();

        if(count(request('template'))>0){
            foreach (request('template') as $template){
                $new = new Newsletter_template();
                $new->newsletter_id = $newsletter->id;
                $new->type = $template['type'];
                $new->index = $template['index'];
                $new->item1 = $template['item1']['id'];
                $new->item2 = $template['item2']? $template['item2']['id'] : null;
                $new->save();
            }
        }

        return response()->json([
            'newsletter' => $newsletter
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $newsletter = Newsletter::with('Template')->where('id', $id)->get();
        Newsletter::setNewsletter($newsletter);

        return response()->json([
            'newsletter' => $newsletter[0]
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CreateNewsletterRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CreateNewsletterRequest $request, $id)
    {
        $newsletter = Newsletter::find($id);
        $newsletter->title = request('title');
        $newsletter->update();

        if(count(request('template'))>0){
            $olds = Newsletter_template::where('newsletter_id', $newsletter->id)->get();
            if(count($olds)>0){
                foreach($olds as $old) {
                    $old->delete();
                }
            }

            foreach (request('template') as $template){
                $new = new Newsletter_template();
                $new->newsletter_id = $newsletter->id;
                $new->type = $template['type'];
                $new->index = $template['index'];
                $new->item1 = $template['item1']['id'];
                $new->item2 = $template['item2']? $template['item2']['id'] : null;
                $new->save();
            }
        }

        return response()->json([
            'newsletter' => $newsletter
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $newsletter = Newsletter::find($id);

        Newsletter::destroy($id);
        return response()->json([
            'newsletter' => $newsletter
        ]);
    }

    /**
     * Display a specific post
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function post($id){
        return response()->json([
            'post' => Post::with('blog')->find($id),
        ]);
    }

    /**
     * Display a specific post
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function banner($id){
        return response()->json([
            'banner' => Banner::find($id),
        ]);
    }

    /**
     * method used to prepare newsletter sending
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function prepare($id){
        $newsletter = Newsletter::find($id);
        $templates = Newsletter_template::where('newsletter_id', $newsletter->id)->orderBy('index', 'ASC')->get();
        $subscribers = Subscriber::where('block', 0)->get();
        \Artisan::call('queue:restart');
        ProcessNewsletter::dispatch($newsletter, $templates, $subscribers)->delay(Carbon::now()->addMinute(1));

        $count = \DB::table('jobs')->count();

        $newsletter->last_send = Carbon::now();
        $newsletter->received = $count;
        $newsletter->active = 1;
        $newsletter->update();

        return response()->json([
            'message' => 'done',
        ]);
    }

    /**
     * method used to send newsletter
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function send($id){
        $newsletter = Newsletter::find($id);
        $newsletter->active = 0;
        $newsletter->send = 1;
        $newsletter->update();

        Artisan::call('queue:work', [
            '--tries' => 3
        ]);

        return response()->json([
            'message' => 'done',
        ]);
    }
}
