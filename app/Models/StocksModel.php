<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StocksModel extends Model
{
    use HasFactory;

    protected $table = 'stocks';
    protected $primaryKey = 'id';

    public function records()
    {
        return $this->hasMany(RecordsModel::class, 'stock_id', 'id');
    }
}
