<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product');
        CRUD::setEntityNameStrings('product', 'products');
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
            'name' => 'description', // The db column name
            'label' => "Description", // Table column heading
            'type' => 'Text'
        ]);
        $this->crud->addColumn([
            'name' => 'price', // The db column name
            'label' => "Price", // Table column heading
            'type' => 'number'
        ]);
        $this->crud->addColumn([
            'name' => 'stock', // The db column name
            'label' => "Stock", // Table column heading
            'type' => 'number'
        ]);
        $this->crud->addColumn([
            'name' => 'active', // The db column name
            'label' => "Active", // Table column heading
            'type' => 'number'
        ]);
        $this->crud->addColumn([
            'name' => 'photo', // The db column name
            'label' => "Photo", // Table column heading
            'type' => 'image',
            'disk'   => 'public', 

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
        $this->crud->addColumn([
            'name' => 'provider_id', // The db column name
            'label' => "Provider Id", // Table column heading
            'type' => 'Text'
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
        CRUD::setValidation(ProductRequest::class);
        
        $this->crud->addField([
            'name' => 'name', // The db column name
            'label' => "Name", // Table column heading
            'type' => 'Text'
        ]);
        $this->crud->addField([
            'name' => 'description', // The db column name
            'label' => "Description", // Table column heading
            'type' => 'Text'
        ]);
        $this->crud->addField([
            'name' => 'price', // The db column name
            'label' => "Price", // Table column heading
            'type' => 'number'
        ]);
        $this->crud->addField([
            'name' => 'stock', // The db column name
            'label' => "Stock", // Table column heading
            'type' => 'number'
        ]);
        $this->crud->addField([
            'name' => 'active', // The db column name
            'label' => "Active", // Table column heading
            'type' => 'number'
        ]);
        $this->crud->addField([
            'name' => 'photo', // The db column name
            'label' => "Photo", // Table column heading
            'type' => 'image',

        ]);
        $this->crud->addField([
            'name' => 'provider_id', // The db column name
            'label' => "Provider Id", // Table column heading
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
