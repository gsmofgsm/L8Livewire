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
                    <input type="checkbox" class="mr-4">
                    <a href="#" class="">{{ $todo->title }}</a>
                    <button wire:click="deleteTodo({{ $todo->id }})">&times;</button>
                </span>
            </div>
            <div>

            </div>
        </li>
        @endforeach
    </ul>
</div>
