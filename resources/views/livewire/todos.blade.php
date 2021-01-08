<div>
    <form action="#" method="POST" class="mb-5">
        @csrf
        <div class="d-flex">
            <input type="text" name="addTodo" class="" placeholder="What needs to be done?" value="">
            <button type="submit">Add</button>
        </div>
    </form>

    <ul class="list-group">
        @foreach($todos as $todo)
        <li class="list-group-item">
            <div>
                <span>
                    <input type="checkbox" class="mr-4">
                    <a href="#" class="">{{ $todo->title }}</a>
                    <button>&times;</button>
                </span>
            </div>
            <div>

            </div>
        </li>
        @endforeach
    </ul>
</div>
