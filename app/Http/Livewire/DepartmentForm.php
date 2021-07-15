<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Department;

class DepartmentForm extends Component
{

    public $name = 'Accounting';
    public $success = false;

    public function submit()
    {
        Department::create(['name' => $this->name]);
        $this->success = true;
        // In this case the 'tenant_id' is not require here to create a new Department because
        // on the Department model we could add a booted function to add the global scope.
        // Also we could add a lifecycle event to do something before the model is actually created.
        // Here we are passing the 'tenant_id' from the session and adding it to the Model.

    }

    public function mount($departmentId = null)
    {
        if($departmentId) {
            $this->name = Department::findorfail($departmentId)->name;
        }
    }

    public function render()
    {
        return view('livewire.department-form');
    }
}
