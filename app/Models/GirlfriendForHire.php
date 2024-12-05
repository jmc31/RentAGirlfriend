<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GirlfriendForHire extends Model
{
    /** @use HasFactory<\Database\Factories\GirlfriendForHireFactory> */
    use HasFactory;

    protected $fillable = ['name', 'age','address','contact_no', 'description', 'rate_per_hour'];

}
