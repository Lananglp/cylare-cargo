<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Stock;
use App\Models\History;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::latest()->paginate(5);

        return view('stocks.index', compact('stocks'));
    }



    public function destroy($id)
    {
        $stocks = stock::find($id);

        $logs = new History;
        $logs->name_items = $stocks->name_stocks;
        $logs->info = 'Delete';
        $logs->old_qty = $stocks->quantity;
        $logs->new_qty = 0;
        $logs->total_qty = 0;
        $logs->save();

        $stocks->delete();

        return redirect('/stocks')->with('warning', 'Successfully delete item return !');
    }



    public function deleteAll()
    {
        $stocks = Stock::all();

        // KODE SIMPLE MEMINDAHKAN SEMUA DATA NAMUN DENGAN SYARAT KOLOM TABEL HARUS SAMA
        // History::insert($stocks->toArray());

        foreach ($stocks as $stok) {
            $logs = new History;
            $logs->name_items = $stok->name_stocks;
            $logs->info = 'Delete';
            $logs->old_qty = $stok->quantity;
            $logs->new_qty = 0;
            $logs->total_qty = 0;
            $logs->save();
        }

        Stock::truncate();

        return redirect('/stocks')->with('warning', 'Successfully delete all item return !');
    }



    public function edit($id)
    {
        $stock = Stock::find($id);

        return view('stocks.edit', compact('stock'));
    }



    public function update($id, Request $request)
    {
        $request->validate([
            'name_stocks' => ['required'],
            'quantity' => ['required'],
        ]);

        $old = Stock::find($id);

        $logs = new History;
        $logs->name_items = $old->name_stocks;
        $logs->info = 'Input';
        $logs->old_qty = 0;
        $logs->new_qty = 0;
        $logs->total_qty = 0;
        $logs->save();

        $total = $request->input('quantity');

        $logs->new_qty = $total;
        $logs->save();
        
        $old->quantity -= $total;
        $old->save();

        $key = $old->item_id;
        $new = Item::find($key);

        $logs->old_qty = $new->quantity;
        $logs->save();

        $new->name_items = $old->name_stocks;
        $new->quantity += $total;
        $new->save();

        $new_key = $old->item_id;
        $new = Item::find($new_key);


        $logs->total_qty = $new->quantity;
        $logs->save();

        return redirect('/stocks')->with('warning', 'Successfully return quantity');
    }
}
