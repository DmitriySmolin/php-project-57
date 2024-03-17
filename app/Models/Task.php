<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'description',
        'status_id',
        'created_by_id',
        'assigned_to_id',
    ];

    /**
     * Get status of the task
     */
    public function status()
    {
        return $this->belongsTo(TaskStatus::class);
    }

    /**
     * Get the author of the task
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the user that the task was assigned to
     */
    public function assignedTo()
    {
        return $this->belongsTo(User::class);
    }

    public static function filter()
    {
        return QueryBuilder::for(Task::class)->allowedFilters([
            AllowedFilter::exact('status_id'),
            AllowedFilter::exact('created_by_id'),
            AllowedFilter::exact('assigned_to_id')
        ]);
    }

    /**
     * Get all labels of the task
     */
    public function labels()
    {
        return $this->belongsToMany(Label::class);
    }
}
