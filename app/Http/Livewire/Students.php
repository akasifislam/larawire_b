<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class Students extends Component
{

    public $firstname;
    public $lastname;
    public $email;
    public $phone;



    public function resetInpuFielsd()
    {
        $this->firstname = "";
        $this->lastname = "";
        $this->email = "";
        $this->phone = "";
    }

    public function store()
    {
        $validateData = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        Student::create($validateData);
        session()->flash('message', 'student created successfully');
        $this->resetInpuFielsd();
        $this->emit('StudentAdded');
    }

    public function render()
    {
        $students = Student::all();
        return view('livewire.students', compact('students'));
    }
}
