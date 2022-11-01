<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalPhone extends Model
{
    use HasFactory;

    /**
     * Get the person that owns the email.
     */
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
