<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'problem_description',
        'email',
        'phone_number',
        'status',
        'agent_name',
        'response',
    ];
}
