<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;
    use HasUlids;

    protected $table = 'tasks';

    protected $fillable = [
        'title',
        'description',
        'user_id',
    ];
}
