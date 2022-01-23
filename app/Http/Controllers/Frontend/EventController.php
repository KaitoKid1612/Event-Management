<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Services\Event\EventService;
use App\Http\Services\Menu\MenuService;
use App\Models\Menu;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    protected $eventService;

    public function __construct(EventService $eventService)
    {
        $this -> eventService = $eventService;
    }

    public function index($id = '', $slug = '')
    {
        $event = $this->eventService->show($id);
        $eventsMore = $this->eventService->more($id);
        $menus = Menu::get();
        return view('frontend.events.detail',[
            'title'=>'$event->name',
            'event'=>$event,
            'menus'=>$menus,
            'events'=>$eventsMore
        ]);
    }

}
