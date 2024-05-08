<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CarRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Backpack\CRUD\app\Library\Validation\Rules\ValidUploadMultiple;


/**
 * Class CarCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CarCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Car::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/car');
        CRUD::setEntityNameStrings('car', 'cars');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //Sets the columns for the cars datatable
        CRUD::column('registration_number')->type('text');
        CRUD::column('make')->type('text');
        CRUD::column('model')->type('text');
        CRUD::column('year')->type('number');
        CRUD::column('availability')->type('boolean');
        CRUD::column('mileage')->type('text');
        CRUD::column('price')->type('number');
        CRUD::column('description')->type('text');
        CRUD::column('drive')->type('text');
        CRUD::column('horse_power')->type('text');
        CRUD::column('torque')->type('text');
        CRUD::column('transmission')->type('text');
        CRUD::column('fuel_type')->type('text');
        CRUD::column('engine_size')->type('text');
        CRUD::column('accident_history')->type('text');
        CRUD::column('images')->type('upload_multiple')->withFiles();

        //Buttons to allow the admin to manipulate car models that are currently stored
        CRUD::buttons();


        //Filters to query the db  based on specific parameters 
        



    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setFromDb(); // set fields from db columns.

        CRUD::field([   // Upload
            'name'      => 'images',
            'label'     => 'Car Images',
            'type'      => 'upload_multiple',
            'withFiles' => true,
            'images' => ValidUploadMultiple::field('required|min:2|max:5')
                ->file('file|mimes:jpeg,png,jpg,gif,svg|max:2048'),
        ]);

        CRUD::field([   // Text
            'name'  => 'registration_number',
            'label' => 'Car Registration Number',
            'type'  => 'text',
        ]);


    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
