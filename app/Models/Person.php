<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    
    /**
     * Get the emails associated with the person.
     */
    public function emails()
    {
        return $this->hasMany(PersonEmail::class);
    }

    /**
     * Get the main email associated with the person.
     */

    public function mainEmail()
    {
        return $this->belongsTo(PersonEmail::class);
    }
}
