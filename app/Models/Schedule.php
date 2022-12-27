<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Process;

class Schedule extends Model
{
    use HasFactory;

    public function process(){
        return $this->belongsTo(Process::class, 'id_prcss');
    }
}