<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
     protected $fillable = [
        'exam_no', 'mathematics', 'reasoning', 'english', 'vreasoning', 'general', 'totalscore', 'cummulative', 'remarks'
    ];
}
