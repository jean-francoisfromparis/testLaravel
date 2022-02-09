<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class webHook extends Model
{
    use HasFactory;
    protected $fillable = ['merchantName', 'paymentAmount'];
}
