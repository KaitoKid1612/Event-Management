<?php


namespace App\Http\Services\Event;

use App\Models\Menu;
use App\Models\Event;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class EventAdminService
{
    public function getMenu()
    {
        return Menu::where('id','>','0')->get();
    }

    public function insert($request)
    {
        try {
            $request->except('_token');
            Event::create($request->all());

            Session::flash('success', 'Thêm Sự Kiện thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Thêm Sự Kiện lỗi');
            Log::info($err->getMessage());
            return  false;
        }

        return  true;
    }

    public function get()
    {
        return Event::with('menu')
            ->orderByDesc('id')->paginate(15);
    }

    public function update($request,Event $event)
    {
        try {
            $event->fill($request->input());
            $event->save();
            Session::flash('success', 'Cập nhật thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Có lỗi vui lòng thử lại');
            Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function delete($request)
    {
        $event = Event::where('id', $request->input('id'))->first();
        if ($event) {
            $event->delete();
            return true;
        }

        return false;
    }

    public function show()
    {
        return Event::where('active', 1)->get();
    }

    public function confirm()
    {
        return Event::where('active', 0)->get();
    }


}