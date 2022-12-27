<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Process;

class ProcessWorker extends Model
{
    use HasFactory;
    protected $table ='process_workers';

    public function employee(){
        return $this->belongsTo(Employee::class, 'id_employ');
    }

    public function process(){
        return $this->belongsTo(Process::class, 'id_prcss');
    }
}