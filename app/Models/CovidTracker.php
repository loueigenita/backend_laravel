<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidTracker extends Model
{
    use HasFactory;

    protected $fillable =['country','deaths','active_case','recovered','month'];

}
