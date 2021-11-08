<?php

namespace App\Http\Controllers;

use App\Models\RecordsModel;
use App\Models\StocksModel;

class StockController extends Controller
{
    public function index( string $sid )
    {
        $stock = StocksModel::where( 'sid', $sid )->get()->first();
        $records = RecordsModel::where( 'stock_id', $stock->id )->orderBy('date', 'ASC')->get();
        $data = [
            'stock_records' => $records
        ];
        return view( 'stock', $data );
    }
}

