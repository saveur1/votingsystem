<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elections extends Model
{
    use HasFactory;

    protected $primaryKey = 'election_id';
}
