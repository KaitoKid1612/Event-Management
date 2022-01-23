<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Event\EventAdminService;
use App\Http\Services\Menu\MenuService;
use App\Http\Requests\Event\EventRequest;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Menu;
use App\Models\User;

class EventController extends Controller
{
    protected $eventService;
    protected $menuService;
    protected $user;

    public function __construct(EventAdminService $eventService, MenuService $menuService, User $user)
    {
        $this->eventService = $eventService;
        $this->menuService = $menuService;
        $this->user=$user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::select('id')->paginate(10);
        //
        return view('admin.events.list', [
            'title' => 'Danh Sách Sự Kiện',
            'events' => $this->eventService->show()
        ], compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->user->get();
        //
        return view('admin.events.add', [
            'title'=>'Thêm Sự Kiện',
            'menus' => $this->eventService->getMenu(),
        ], compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        //
        $this->eventService->insert($request);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
        return view('admin.events.edit', [
            'title' => 'Chỉnh Sửa Sự Kiện',
            'event' => $event,
            'menus' => $this->eventService->getMenu()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function confirm()
    {
        $event = Event::select('active')->paginate(10);
        //
        return view('admin.events.confirm', [
            'title' => 'Danh Sách Sự Kiện',
            'events' => $this->eventService->confirm()
        ], compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Event $event)
    {
        //
        $result = $this->eventService->update($request, $event);
        if ($result) {
            return redirect('/admin/events/list');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $result = $this->eventService->delete($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công sự kiện'
            ]);
        }

        return response()->json([ 'error' => true ]);
    }

    public function updateActive($event_id, $active_code)
    {
        try{
            $active_confirm = Event::whereId($event_id)->update([
                'active' => $active_code
            ]);

            if($active_confirm){
                return redirect()->route('updateActive')->with('success', 'Active Update');
            }
            return redirect()->route('updateActive')->with('error', 'Active Update');
        } catch (\Throwable $th)  {
            throw $th;
        }
    }
}
