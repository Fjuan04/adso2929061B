<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
         /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'pet_id'
    ];

    // Relationship: Adoption belongsTo User
    public function user() {
        return $this->belongsTo(User::class);
    }

    // Relationship: Adoption belongsTo Pet
    public function pet() {
        return $this->belongsTo(Pet::class);
    }
}
