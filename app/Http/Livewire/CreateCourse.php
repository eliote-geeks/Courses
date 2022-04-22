<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;
use App\Models\Category;
use App\Models\Requirement;
use Livewire\WithFileUploads;

class CreateCourse extends Component
{
    use WithFileUploads;
    public $categories = [];
    //step1
    public $current_Page = 1;
    public $title;
    public $category_id;
    public $level;
    public $description;
    //Step 2
    public $photo;
    public $video_url;
    
    //step 3


    //step 4 
    public $requirements = [];
    public $course_id;
    protected $tag;
    protected $requirement;
    public $levelCourse = [
        1 => 'intermediate',
        2 => 'Beginners',
        3 => 'Expert',
        4 => 'Advance',
        5 => 'Master'
    ];


    public $pages = [
        1 => [
            'heading' =>'1',
            'subheading' => 'Basic Information ',
        ],
        2 => [
            'heading' => '2',
            'subheading' => 'Courses Media',
        ],
        3 => [
            'heading' => '3',
            'subheading' => 'Curriculum',
        ],
        4 => [
            'heading' => '4',
            'subheading' => 'Requirements',
        ]
    ];

    public function goToNextPage()
    {
        $this->current_Page++;
        dd('you');
    }

    public function goToPreviousPage()
    {
        $this->currentPage--;
    }

    public function submit()
    {
        Course::create([
            "title" => $this->title,
            "category_id" => $this->category_id,
            "level" => $this->level,
            "description" => $this->description,

            "photo" => $this->photo,            
            "video_url" => $this->video_url,            
        ]);
        $this->photo->store('courses');

        if(Course::latest()->take(1)->first())            
            $this->course_id = Course::latest()->take(1)->first()->id + 1;
        else
            $this->course_id = 1;              
        

        foreach($this->requirements as $this->tag)
        {
            $this->requirement = new Requirement();
            $this->requirement->name = $this->tag;
            $this->requirement->course_id = $this->course_id;
            $this->requirement->save();
        }

        
    }

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.create-course');
    }
}
