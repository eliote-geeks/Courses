<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Lesson
 * @package App\Models
 * @version April 15, 2022, 2:22 pm UTC
 *
 * @property \App\Models\Course $course
 * @property integer $course_id
 * @property string $title
 * @property string $duration
 * @property string $video
 */
class Lesson extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'lessons';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'course_id',
        'title',
        'duration',
        'video'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'course_id' => 'integer',
        'title' => 'string',
        'duration' => 'string',
        'video' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_id' => 'required',
        'title' => 'required|string|max:255',
        'duration' => 'required|string|max:255',
        'video' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function course()
    {
        return $this->belongsTo(\App\Models\Course::class, 'course_id');
    }
}
