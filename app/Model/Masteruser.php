<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masteruser extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $primaryKey = 'no_nip';
    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'masteruser';
    public $fillable = ['username',
        'password',
        'eneble',
        'level',
        'last_login',
        'keterangan',
        'no_nip'];

    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
