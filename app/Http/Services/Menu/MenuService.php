<?php


namespace App\Http\Services\Menu;


use App\Models\Menu;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class MenuService
{

    public function get()
    {
        return Menu::orderByDesc('id')->paginate(10);
    }

    public function create($request)
    {
        try {
            Menu::create([
                'name' => (string)$request->input('name'),
                'number' => (string)$request->input('number'),
                'content' => (string)$request->input('content'),
            ]);

            Session::flash('success', 'Tạo Loại Sự Kiện Thành Công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }

        return true;
    }

    public function destroy($request)
    {
        $id = (int)$request->input('id');
        $menu = Menu::where('id', $id)->first();
        if ($menu) {
            return Menu::where('id', $id)->delete();
        }
        return false;
    }

    public function update($request, $menu): bool
    {
        $menu->name = (string)$request->input('name');
        $menu->number = (string)$request->input('number');
        $menu->content = (string)$request->input('content');
        
        $menu->save();

        Session::flash('success', 'Cập nhật thành công Loại Sự Kiện');
        return true;
    }

}