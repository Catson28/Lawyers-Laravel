<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Process;
use App\Models\Statu;

class StatuProcesses extends Model
{
    use HasFactory;
    protected $table ='statu_processes';

    public function statu(){
        return $this->belongsTo(Statu::class, 'id_stat');
    }

    public function process(){
        return $this->belongsTo(Process::class, 'id_prcss');
    }
}
