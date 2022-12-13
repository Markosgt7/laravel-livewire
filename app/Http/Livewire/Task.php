<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task as TaskModel;

class Task extends Component
{
    public $tasks;
    public TaskModel $task;

    protected $rules=['task.text'=>'required|max:40'];

    public function mount(){
        $this->tasks = TaskModel::orderBy('id','desc')->get();
        $this->task = new TaskModel();
    }
    public function save(){
        $this->validate();
        $this->task->save();
        $this->mount();
        session()->flash('message','Se guardó la tarea.');
    }
    public function render()
    {
        return view('livewire.task');
    }
}
