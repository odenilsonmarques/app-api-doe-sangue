<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;


class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

   
    public function schedulings()
    {
        return $this->hasMany(Scheduling::class);
    }

    public function historics()
    {
        return $this->hasMany(Historic::class);
    }


    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * Este método retorna o identificador único do usuário que será armazenado no token JWT. 
     * Por padrão, ele retorna o valor da chave primária do modelo do usuário ($this->getKey()), que geralmente é o id. 
     * Este identificador é usado pelo JWT para identificar e autenticar o usuário durante o processo de verificação do token.
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }


      /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     * Este método retorna um array associativo contendo quaisquer reivindicações personalizadas que você deseja adicionar ao token JWT. 
     * As reivindicações personalizadas podem conter informações adicionais sobre o usuário ou qualquer outra informação relevante para sua aplicação. 
     * Por exemplo, você pode adicionar o papel do usuário, o nível de acesso, etc. Se você não precisa adicionar reivindicações personalizadas, pode retornar um array vazio []
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

}
