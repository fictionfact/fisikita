<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\LessonRequest as StoreRequest;
use App\Http\Requests\LessonRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use App\Models\Lesson;

/**
 * Class LessonCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class LessonCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Lesson');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/lesson');
        $this->crud->setEntityNameStrings('lesson', 'lessons');

        $this->crud->setColumns(['id_lesson', 'name', 'content']);

        $this->crud->addColumn([
           // 1-n relationship
           'label' => "Course", // Table column heading
           'type' => "select",
           'name' => 'user_id', // the column that contains the ID of that connected entity;
           'entity' => 'course', // the method that defines the relationship in your Model
           'attribute' => "name", // foreign key attribute that is shown to user
           'model' => "App\Models\Course", // foreign key model
        ])->beforeColumn('name');

        $this->crud->addField([
           'label' => "Course",
           'type' => 'select2',
           'name' => 'course_id', // the db column for the foreign key
           'entity' => 'course', // the method that defines the relationship in your Model
           'attribute' => 'name', // foreign key attribute that is shown to user
           'model' => "App\Models\Course" // foreign key model
        ]);
        $this->crud->addField([
            'name' => 'name',
            'label' => 'Name',
            'type' => 'textarea'
        ]);

        $this->crud->addField([
            'name' => 'content',
            'label' => 'Content',
            'type' => 'ckeditor',
            'extra_plugins' => ['widget', 'justify', 'image2', 'font', 'mathjax']
        ]);


        // $this->crud->setCreateView('custom/backpackCreateWYSIWYG');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // add asterisk for fields that are required in LessonRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
