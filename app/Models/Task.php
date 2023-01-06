<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['matkul', 'task', 'start_date', 'deadline', 'deskripsi'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

