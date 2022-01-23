<?php


namespace App\Http\Services\Event;


use App\Models\Event;


class EventService
{
    const LIMIT=6;

    public function get($page = null)
    {
        return Event::select('id','name','address','content','thumb','date_begin')
        ->orderByDesc('id')
        ->when($page != null, function ($query) use ($page) {
            $query->offset($page * self::LIMIT);
        })
        ->limit(self::LIMIT)
        ->get();
    }

    public function show($id)
    {
        return Event::where('id', $id)
        ->where('active', 1)
        ->with('menu')
        ->firstOrFail();
    }

    public function more($id)
    {
        return Event::select('id','name','address','content','thumb','date_begin')
            ->where('active', 1)
            ->where('id', '!=', $id )
            ->orderByDesc('id')
            ->limit(8)
            ->get();
    }
}