<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Event\EventService;


class NewEventController extends Controller
{

    protected $event;

    public function __construct(EventService $event)
    {
        $this->event=$event;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('frontend.newevent.home', [
            'title' => 'Trang Chủ',
            'events'=>$this->event->get()
        ]);
    }

    public function loadEvent(Request $request)
    {
        $page = $request->input('page', 0);
        $result = $this->event->get($page);

        if (count ($result)!=0) {
            $html = view('frontend.events.list', ['events' => $result]) -> render();

            return response()->json([
                'html'=>$html
            ]);
        }
        
        return response()->json(['html'=>'']);
    }

}    
