<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StatuProcesses;
use App\Models\ProcessWorker;
use App\Models\Employee;
use App\Models\Schedule;
use App\Models\Type;
use App\Models\Owner;

class Process extends Model
{
    use HasFactory;

    public function type(){
        return $this->belongsTo(Type::class, 'id_typ');
    }

    public function owner(){
        return $this->belongsTo(Owner::class, 'id_ownr');
    }

    public function statuProcesses(){
        return $this->hasMany(StatuProcesses::class,'id_prcss');
    }

    public function schedule(){
        return $this->hasMany(Schedule::class,'id_prcss');
    }

    // public function process(){
    //     return $this->belongsToMany(Process::class,'statu_processes','id','id_stat');
    //     // return $this->belongsToMany(Process::class,'id','id_stat','statu_processes');
    // }

    public function employees(){
        return $this->belongsToMany(Employee::class, ProcessWorker::class,'id_prcss','id_employ');
    }
}