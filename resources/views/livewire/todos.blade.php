<div>
    <div class="d-flex">
        <input wire:keydown.enter="addTodo" wire:model="title" type="text" name="addTodo" class="" placeholder="What needs to be done?" value="">
{{--        <button type="submit" wire:click.prevent="addTodo">Add</button>--}}
        @if ($errors->has('title'))
            <div style="color: red;">{{ $errors->first('title') }}</div>
        @endif
    </div>

    <ul class="list-group">
        @foreach($todos as $todo)
        <li class="list-group-item">
            <div>
                <span>
                    <input type="checkbox"
                           wire:change="toggleTodo({{ $todo->id }})"
                           {{ $todo->completed ? 'checked' : '' }}
                           class="mr-4">
                    <a href="#"
                       onclick="updateTodoPrompt('{{ $todo->title }}') || event.stopImmediatePropagation()"
                       wire:click="updateTodo({{ $todo->id }}, todoUpdated)"
                       class="{{$todo->completed ? 'completed' : ''}}">{{ $todo->title }}</a>
                    <button
                        onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                        wire:click="deleteTodo({{ $todo->id }})">&times;</button>
                </span>
            </div>
            <div>

            </div>
        </li>
        @endforeach
    </ul>
</div>

<script>
    let todoUpdated = '';

    function updateTodoPrompt(title) {
        event.preventDefault();
        todoUpdated = '';
        const todo = prompt("Update Todo", title);

        if (todo === null || todo.trim() === '') {
            console.log('cancel or empty');
            todoUpdated = '';
            return false;
        }

        todoUpdated = todo;
        return true;
    }
</script>
