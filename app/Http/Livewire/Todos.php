<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class Todos extends Component
{
    public $title = '';

    public function render()
    {
        return view('livewire.todos', [
            'todos' => auth()->user()->todos
        ]);
    }

    public function addTodo()
    {
        $this->validate([
            'title' => 'required',
        ]);

        Todo::create([
            'user_id' => auth()->id(),
            'title' => $this->title,
            'completed' => false
        ]);

        $this->title = '';
    }

    public function deleteTodo($id)
    {
        Todo::find($id)->delete();
    }
}
