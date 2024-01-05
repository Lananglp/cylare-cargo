<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Stock;
use App\Models\History;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::latest()->paginate(5);

        return view('items.index', compact('items'));
    }



    public function create()
    {
        return view('items.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name_items' => ['required'],
            'quantity' => ['required'],
        ]);

        // Item::create([
        //     'name_items' => $request -> name_items,
        //     'quantity' => $request -> quantity,
        // ]);

        $items = new Item;
        $items->name_items = $request->input('name_items');
        $items->quantity = $request->input('quantity');
        $items->save();

        $logs = new History;
        $logs->name_items = $request->input('name_items');
        $logs->info = 'Add';
        $logs->old_qty = 0;
        $logs->new_qty = $request->input('quantity');
        $logs->total_qty = $request->input('quantity');
        $logs->save();

        return redirect('/items')->with('warning', 'Successfully add item !');
    }



    public function edit($id)
    {
        $item = Item::find($id);

        return view('items.edit', compact('item'));
    }



    public function updateItem($id, Request $request)
    {
        $request->validate([
            'name_items' => ['required'],
            'quantity' => ['required'],
        ]);

        $items = Item::find($id);

        $logs = new History;
        $logs->name_items = $items->name_items;
        $logs->info = 'Update';
        $logs->old_qty = $items->quantity;
        $logs->new_qty = $request->input('quantity');
        $logs->total_qty = 0;
        $logs->save();

        $total = $request->input('quantity');
        $items->quantity += $total;
        $items->save();

        $new_items = Item::find($id);
        $logs->total_qty = $new_items->quantity;
        $logs->save();

        return redirect('/items')->with('warning', 'Successfully add quantity !');
    }



    public function goReturn($id)
    {
        $item = Item::find($id);

        return view('items.goReturn', compact('item'));
    }



    public function runningGo($id, Request $request)
    {
        $request->validate([
            'name_items' => ['required'],
            'quantity' => ['required'],
        ]);

        $old = Item::find($id);

        $logs = new History;
        $logs->name_items = $old->name_items;
        $logs->info = 'Output';
        $logs->old_qty = $old->quantity;

        $total = $request->input('quantity');
        $old->quantity -= $total;

        $logs->new_qty = $total;
        $old->save();

        $new = new Stock;
        $new->item_id = $old->id;
        $new->name_stocks = $old->name_items;
        $new->quantity = $total;
        $new->return_date = date(now());
        $new->save();

        $logs->total_qty = $old->quantity;
        $logs->save();

        return redirect('/items')->with('warning', 'successfully return item !');
    }



    public function destroy($id)
    {
        $items = Item::find($id);

        $logs = new History;
        $logs->name_items = $items->name_items;
        $logs->info = 'Delete';
        $logs->old_qty = $items->quantity;
        $logs->new_qty = 0;
        $logs->total_qty = 0;
        $logs->save();

        $items->delete();

        return redirect('/items')->with('warning', 'Successfully delete item !');
    }
}
