<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;  // Tambahkan baris ini untuk mengimpor Str

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
