<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonEmail extends Model
{
    use HasFactory;

    /**
     * Get the person that owns the email.
     */
    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    /**
     * Get the person that owns the main email.
     */
    public function personMainEmail()
    {
        return $this->hasOne(Person::class);
    }
}
