<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
</head>

<body class="bg-gray-200">
    <div class="flex justify-center">
        <div class="w-5/12 bg-white p-4 rounded-lg mt-4">

            <div class="flex justify-between p-3">
                <div>
                    <p class="mt-1 font-bold">Add Todo</p>
                </div>

            </div>



            <form action="{{route('addTodo')}}" method="POST" class="items-center">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Body</label>
                    <input type="text" name="body" id="body" placeholder="" class="bg-gray-100 rounded-md border-2 w-full p-4 @error('body') border-red-500 @enderror" value="">

                    @error('body')
                    <div class="text-red-500 text-sm mt-2 text-center">
                        {{$message}}
                    </div>

                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 w-full rounded-md text-white px-4 py-3 font-medium">Submit</button>
                </div>




            </form>

        </div>

    </div>
    <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });
    </script> -->
</body>

</html>