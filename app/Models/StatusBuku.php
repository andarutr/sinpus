<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusBuku extends Model
{
    use HasFactory;
    protected $table = 'status_buku';
    protected $guarded = [];
    public $timestamps = FALSE;
}
