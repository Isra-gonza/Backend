<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProviderRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProviderCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProviderCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Provider::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/provider');
        CRUD::setEntityNameStrings('provider', 'providers');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'id', // The db column name
            'label' => "Id", // Table column heading
            'type' => 'number'
        ]);
        $this->crud->addColumn([
            'name' => 'name', // The db column name
            'label' => "Name", // Table column heading
            'type' => 'Text'
        ]);
        $this->crud->addColumn([
            'name' => 'email', // The db column name
            'label' => "Email", // Table column heading
            'type' => 'Text'
        ]);
        $this->crud->addColumn([
            'name' => 'created_at', // The db column name
            'label' => "Created At", // Table column heading
            'type' => 'date'
        ]);
        $this->crud->addColumn([
            'name' => 'updated_at', // The db column name
            'label' => "Updated At", // Table column heading
            'type' => 'date'
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProviderRequest::class);

        $this->crud->addField([
            'name' => 'name', // The db column name
            'label' => "Name", // Table column heading
            'type' => 'Text'
        ]);
        $this->crud->addField([
            'name' => 'email', // The db column name
            'label' => "Email", // Table column heading
            'type' => 'Text'
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
