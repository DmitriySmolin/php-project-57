<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'status_id',
        'created_by_id',
        'assigned_to_id',
    ];

    public function status()
    {
        return $this->belongsTo(TaskStatus::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class);
    }

    public function assignedTo()
    {
        return $this->belongsTo(User::class);
    }

    public static function filter($params)
    {
        $filterKeys = ['status_id', 'created_by_id', 'assigned_to_id'];

        $query = self::query();

        foreach ($filterKeys as $key) {
            if (isset($params[$key])) {
                $query->where($key, $params[$key]);
            }
        }

        return $query;
    }
}
