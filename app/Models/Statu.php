<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Process; //
use App\Models\StatuProcesses; //

class Statu extends Model
{
    use HasFactory;

    public function process(){
        return $this->belongsToMany(Process::class, StatuProcesses::class,'id_stat','id_prcss');
        // return $this->belongsToMany(Process::class,'statu_processes','id_prcss','id_stat');
    }
}
