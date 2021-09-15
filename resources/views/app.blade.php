<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
</head>

<body class="bg-gray-200">
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-4 rounded-lg mt-4">
            <div class="flex justify-between p-3">
                <div>
                    <p class="mt-1">Todos</p>
                </div>
                <div class="">
                    <a class="bg-blue-500 px-5 py-1 rounded-md text-white font-medium" type="submit" href="{{route('addTodo')}}">Add</a>
                </div>
            </div>

            <div>
                @if($todos->count())
                @foreach($todos as $todo)
                <div class="mb-4 bg-gray-200 p-4 rounded-lg justify-between flex">
                    <div>
                        <p class="mb-2">{{$todo->body}}</p><span class="text-gray-600 text-sm">{{$todo->created_at->diffForHumans()}}</span>
                    </div>

                    <div>
                        <div class="flex items-center">
                            <ul class="p-3">
                                <li>
                                    @method('PUT')
                                    <a type="submit" class="bg-blue-500 rounded-sm text-white px-1 py-1 font-sm" href="{{route('edit', $todo)}}">Edit</a>
                                </li>
                            </ul>


                            <form method=" POST" action="{{route('todos.destroy', $todo)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 rounded-sm text-white px-1 py-1 font-sm">Delete</button>
                            </form>
                        </div>

                    </div>


                </div>
                @endforeach
                {{$todos->links()}}
                @else
                <div class="p-2">
                    <p class="flex justify-center italic">There are no todo lists</p>
                </div>

                @endif
            </div>


        </div>

    </div>
</body>

</html>