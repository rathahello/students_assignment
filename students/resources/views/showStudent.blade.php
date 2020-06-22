<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Students</title>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center text-success">Show Students</h1>
        <button class="btn btn-success mb-3"><a href="{{route('students.create')}}" class="text-white">Add Student</a></button>
        <table class="table table-bordered">
            <thead class="bg-success text-center">
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Class</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($students as $item)
                
            <tbody>
                <tr>
                    <th>{{$item->firstname}}</th>
                    <th>{{$item->lastname}}</th>
                    <th>{{$item->class}}</th>
                    <th>
                        <button class="btn btn-primary mb-2"><a href="{{route('students.edit',$item->id)}}" class="text-light">Edit</a></button>
         
                            <form action="{{route('students.destroy',$item->id)}}" method="POST">
                              @csrf
                              @method('delete')
                              <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</button>
                            </form>
                    </th>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>