<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'name',
        'company_name',
        'email',
        'telephone',
        'country',
        'postal_code',
        'location',
        'website',

    ];

    protected $table = 'exhibitors';

    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'exhibitor_keywords');
    }
}
