<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\QuizRequest as StoreRequest;
use App\Http\Requests\QuizRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class QuizCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class QuizCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Quiz');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/quiz');
        $this->crud->setEntityNameStrings('quiz', 'quizzes');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->crud->setColumns(['question', 'wrong_answers', 'right_answer', 'explanation']);

        $this->crud->addColumn([
           // 1-n relationship
           'label' => "Course", // Table column heading
           'type' => "select",
           'name' => 'user_id', // the column that contains the ID of that connected entity;
           'entity' => 'course', // the method that defines the relationship in your Model
           'attribute' => "name", // foreign key attribute that is shown to user
           'model' => "App\Models\Course", // foreign key model
        ])->beforeColumn('question');

        $this->crud->addField([
           'label' => "Course",
           'type' => 'select2',
           'name' => 'course_id', // the db column for the foreign key
           'entity' => 'course', // the method that defines the relationship in your Model
           'attribute' => 'name', // foreign key attribute that is shown to user
           'model' => "App\Models\Course" // foreign key model
        ]);

        $this->crud->addField([
            'name' => 'question',
            'label' => 'Question',
            'type' => 'ckeditor',
            'extra_plugins' => ['widget', 'justify', 'image2', 'font', 'mathjax']
        ]);

        $this->crud->addField([
            'name' => 'wrong_answers1',
            'label' => 'Wrong Answer 1',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'wrong_answers2',
            'label' => 'Wrong Answer 2',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'wrong_answers3',
            'label' => 'Wrong Answer 3',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'right_answer',
            'label' => 'Right Answer',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'explanation',
            'label' => 'Explanation',
            'type' => 'ckeditor',
            'extra_plugins' => ['widget', 'justify', 'image2', 'font', 'mathjax']
        ]);

        // add asterisk for fields that are required in QuizRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        $wrong_answers = $request->wrong_answers1.';'.$request->wrong_answers2.';'.$request->wrong_answers3;

        $request->request->set('wrong_answers', $wrong_answers);
        

        // $json = json_encode($query);
        // return $request;

        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        $wrong_answers = $request->wrong_answers1.';'.$request->wrong_answers2.';'.$request->wrong_answers3;

        $request->request->set('wrong_answers', $wrong_answers);
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
