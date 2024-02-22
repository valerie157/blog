<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    /**
     * Get the task that owns the lead.
     */
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
