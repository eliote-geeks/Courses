<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class User
 * @package App\Models
 * @version April 17, 2022, 6:34 am UTC
 *
 * @property \App\Models\Role $role
 * @property \Illuminate\Database\Eloquent\Collection $comments
 * @property \Illuminate\Database\Eloquent\Collection $courses
 * @property \Illuminate\Database\Eloquent\Collection $coursesUsers
 * @property \Illuminate\Database\Eloquent\Collection $enrolls
 * @property \Illuminate\Database\Eloquent\Collection $items
 * @property \Illuminate\Database\Eloquent\Collection $payments
 * @property \Illuminate\Database\Eloquent\Collection $reviews
 * @property \Illuminate\Database\Eloquent\Collection $views
 * @property string $name
 * @property integer $role_id
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string $email
 * @property string $date_of_birth
 * @property boolean $is_subscribed
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 */
class User extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'role_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'date_of_birth',
        'is_subscribed',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'role_id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'date_of_birth' => 'string',
        'is_subscribed' => 'boolean',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'role_id' => 'required',
        'first_name' => 'nullable|string|max:255',
        'last_name' => 'nullable|string|max:255',
        'gender' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'date_of_birth' => 'nullable|string|max:255',
        'is_subscribed' => 'nullable|boolean',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:255',
        'remember_token' => 'nullable|string|max:100',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class, 'role_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function comments()
    {
        return $this->hasMany(\App\Models\Comment::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function courses()
    {
        return $this->hasMany(\App\Models\Course::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function coursesUsers()
    {
        return $this->hasMany(\App\Models\CoursesUser::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function enrolls()
    {
        return $this->hasMany(\App\Models\Enroll::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function items()
    {
        return $this->hasMany(\App\Models\Item::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function payments()
    {
        return $this->hasMany(\App\Models\Payment::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function reviews()
    {
        return $this->hasMany(\App\Models\Review::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function views()
    {
        return $this->hasMany(\App\Models\View::class, 'user_id');
    }
}
