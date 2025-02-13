<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixFeesDetail extends Model
{
    use HasFactory;

    protected $fillable = ['semester_id', 'fees'];

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
}
