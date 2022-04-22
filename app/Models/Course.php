<?php

namespace App\Models;

use App\Models\Requirement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


/**
 * Class Course
 * @package App\Models
 * @version April 15, 2022, 2:21 pm UTC
 *
 * @property \App\Models\Category $category
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $comments
 * @property \Illuminate\Database\Eloquent\Collection $coursesUsers
 * @property \Illuminate\Database\Eloquent\Collection $enrolls
 * @property \Illuminate\Database\Eloquent\Collection $items
 * @property \Illuminate\Database\Eloquent\Collection $lessons
 * @property \Illuminate\Database\Eloquent\Collection $payments
 * @property \Illuminate\Database\Eloquent\Collection $reviews
 * @property \Illuminate\Database\Eloquent\Collection $views
 * @property integer $user_id
 * @property integer $category_id
 * @property string $title
 * @property string $description
 * @property string $short_description
 * @property string $about_instructor
 * @property number $discount_price
 * @property number $actual_price
 * @property string $playlist_url
 * @property integer $view_count
 * @property integer $subscriber_count
 * @property integer $status
 * @property string $photo
 */
class Course extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'courses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'level',
        'about_instructor',
        'discount_price',
        'actual_price',
        'playlist_url',
        'view_count',
        'subscriber_count',
        'status',
        'photo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'category_id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'short_description' => 'string',
        'about_instructor' => 'string',
        'discount_price' => 'float',
        'actual_price' => 'float',
        'playlist_url' => 'string',
        'view_count' => 'integer',
        'subscriber_count' => 'integer',
        'status' => 'integer',
        'photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'category_id' => 'required',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'short_description' => 'required|string',
        'about_instructor' => 'required|string',
        'discount_price' => 'required|numeric',
        'actual_price' => 'required|numeric',
        'playlist_url' => 'required|string|max:255',
        'view_count' => 'required|integer',
        'subscriber_count' => 'required|integer',
        'status' => 'required|integer',
        'photo' => 'nullable|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function comments()
    {
        return $this->hasMany(\App\Models\Comment::class, 'course_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function coursesUsers()
    {
        return $this->hasMany(\App\Models\CoursesUser::class, 'course_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function enrolls()
    {
        return $this->hasMany(\App\Models\Enroll::class, 'course_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function items()
    {
        return $this->hasMany(\App\Models\Item::class, 'course_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function lessons()
    {
        return $this->hasMany(\App\Models\Lesson::class, 'course_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function payments()
    {
        return $this->hasMany(\App\Models\Payment::class, 'course_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function reviews()
    {
        return $this->hasMany(\App\Models\Review::class, 'course_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function views()
    {
        return $this->hasMany(\App\Models\View::class, 'course_id');
    }

    public function requirement()
    {
        return $this->hasMany(Requirement::class);
    }
}
