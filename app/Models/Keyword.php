<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    use HasFactory;

    protected $table = 'keywords';

    public function exhibitors()
    {
        return $this->belongsToMany(Exhibitor::class, 'exhibitor_keywords');
    }
}
