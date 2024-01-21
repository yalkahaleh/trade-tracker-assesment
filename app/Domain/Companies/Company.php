<?php

namespace App\Domain\Companies;

use App\Domain\Stocks\StockData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',
        'address',
        'logo'
    ];

    public function stock(){
        return $this->hasOne(StockData::class);
    }
}
