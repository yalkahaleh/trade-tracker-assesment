<?php

namespace App\Domain\Stocks;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockData extends Model
{
    use HasFactory;

    protected $fillable=[
        'company_id',
        'price',
        'changes_percentage',
        'change',
        'day_low',
        'day_high',
        'year_high',
        'year_low',
        'market_cap',
        'volume',
        'avg_volume',
        'open',
        'previous_close',
        'eps',
        'pe',
    ];
}
