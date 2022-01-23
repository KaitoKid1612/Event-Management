<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use App\Http\Services\Menu\MenuService;
use App\Models\Menu;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }
    
    public function create()
    {
        return view('admin.menus.add', [
            'title'=>'Thêm Loại Sự Kiện'
        ]);
    }

    public function store(CreateFormRequest $request)
    {
        $result = $this -> menuService -> create($request);
        
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.menus.list', [
            'title' =>'Danh Sách Loại Sự Kiện',
            'menus' => $this->menuService->get()
        ]);
    }

    public function destroy(Request $request): JsonResponse
    {
        $result = $this->menuService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công loại sự kiện'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }

    public function show(Menu $menu)
    {
        return view('admin.menus.edit', [
            'title' => 'Chỉnh Sửa Loại sự kiện ',
            'menu' => $menu
        ]);
    }


    public function update(Menu $menu, CreateFormRequest $request)
    {
        $this->menuService->update($request, $menu);

        return redirect('/admin/menus/list');
    }

}
