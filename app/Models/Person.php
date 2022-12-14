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
        return $this->hasMany(PersonalEmail::class);
    }

    /**
     * Get the phones associated with the person.
     */
    public function phones()
    {
        return $this->hasMany(PersonalPhone::class);
    }

    /**
     * Get the main email associated with the person.
     */

    public function mainEmail()
    {
        return $this->belongsTo(PersonalEmail::class, 'personal_email_id');
    }
}
