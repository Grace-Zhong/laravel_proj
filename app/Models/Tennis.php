<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tennis extends Model
{
    use HasFactory;

    protected $table = 'tennis_rankings_2019';
    // protected $priKey = 'Ranking';
    public $timestamps = false;
    protected $fillable = ['Date','Gender','Type','Ranking','Player','Country','Age','Points','Tournaments'];
}
