<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Edit student</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center">Add students</div>
                    <div class="card-body">
                        <form action="{{route('students.update', $students->id)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>Fist Name</label>
                                <input type="text" name="firstname" value="{{$students->firstname}}" class="form-control" placeholder="fist name">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" value="{{$students->lastname}}" class="form-control" placeholder="last name">
                            </div>
                            
                            <div class="form-group">
                                <label>Class</label>
                                <input type="text" name="class" class="form-control" value="{{$students->class}}" placeholder="Class">
                            </div>
                            
                            <button type="submit" class="btn btn-success">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>