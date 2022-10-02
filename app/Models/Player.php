<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //use HasFactory;
    protected $fillable = ['playerName', 'position', 'clubName', 'playerAge', 'imagePath', 'numVotes', 'votePercent'];
}
