<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';
    public $timestamps = true;

    public function customer()
    {
        return $this->belongsTo(
            '\App\Models\Customer',
            'customer_id'
        );
    }

    public function workType()
    {
        return $this->belongsTo(
            '\App\Models\WorkType',
            'work_type_id'
        );
    }
}
