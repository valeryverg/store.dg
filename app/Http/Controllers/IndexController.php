<?php

namespace App\Http\Controllers;

use App\MenuItem;
use Spatie\Menu\Laravel\Menu;

class IndexController extends Controller
{

    public function show()
    {
        $items = MenuItem::all()->sortBy('sort_by');

        $menus = Menu::build($items, function ($menu, $item) {
            $menu->action($item->action.'@'.$item->link, $item->name);
        });
        $menus->render();
        //dump($items);

        // return view('store.index')->with('items', $menus);
        return view('store.index')->with('items', $items);
    }

    public function admin()
    {
        echo 'Test';
        //return view('store.menu');
    }
}
