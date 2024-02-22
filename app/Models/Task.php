<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'completed',
    ];

    /**
     * Get the leads associated with the task.
     */
    public function leads()
    {
        return $this->hasMany(Lead::class);
    }
}
