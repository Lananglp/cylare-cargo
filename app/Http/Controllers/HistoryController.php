<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Stock;
use App\Models\User;
use App\Models\History;

class HistoryController extends Controller
{
    public function index()
    {
        $history = History::latest()->paginate(20);

        return view('history.index', compact('history'));
    }
}
