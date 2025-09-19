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

    public function scopeNames($adoptions, $q) {
        if(trim($q)) {
            $adoptions->where(function($adoptions) use ($q) {
                $adoptions->whereHas('user', function($subquery) use ($q) {
                    $subquery->where('fullname', 'LIKE', "%$q%")
                            ->orWhere('email', 'LIKE', "%$q%");
                })
                ->orWhereHas('pet', function($subquery) use ($q) {
                    $subquery->where('name', 'LIKE', "%$q%")
                            ->orWhere('kind', 'LIKE', "%$q%");
                });
            });
        }
    }

    public function scopeKinds($pets, $q){
        if(trim($q)){
            $pets->where('kind', 'LIKE', "%$q%");
        }
    }
}
