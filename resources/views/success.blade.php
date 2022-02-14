<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5.8 Import Export Excel to database Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
   
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Your record sucessfully added
        </div>
        <div class="card-body">
        @isset($alldata)
            @if((count($alldata)>0) == true)
            <table class="table table-danger">
                <tr>
                    <th>Row</th>
                    <th>Attribute</th>
                    <th>Errors</th>
                    <th>Value</th>
                </tr>
                @foreach($alldata as $validation)
                    <tr>
                        <td>{{ $validation->row()}}</td>
                        <td>{{ $validation->attribute() }}</td>
                        <td>
                            <ul>
                            @foreach($validation->errors() as $e)
                            <li>{{ $e }}</li>
                            @endforeach
                            </ul>
                        </td>
                        <td>{{ $validation->values()[$validation->attribute()] }}</td>

                    </tr>
                @endforeach
            </table>
            @endif
        @endisset
                <br>
                <a href="{{ route('userList') }}" class="btn btn-success">User List</a>
        </div>
    </div>
</div>
   
</body>
</html>