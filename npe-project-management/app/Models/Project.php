<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'klien',
        'pm_id',
        'deadline',
        'tipe',
        'status',
        'detail',
    ];

    public function milestones(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function pm(): BelongsTo
    {
        return $this->belongsTo(User::class, 'pm_id');
    }

    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'project_user', 'project_id', 'employee_id');
    }

    public function getDeadlineAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    function checkStatus(){
        $deadline = $this -> deadline;
        $tgl_selesai = $this -> tgl_selesai;
        if($tgl_selesai > $deadline){
            return 0;
        } else {
            return 1;
        }
    }
}
