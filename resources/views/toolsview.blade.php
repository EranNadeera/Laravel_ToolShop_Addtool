<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ToolShop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    <h1>Tools Shop</h1>
                </div>
                <div class="title m-b-md">
                    <a href="/toolsadd" class="btn btn-success">Add Tool</a>
                </div>
            </div>
            <br>
            <hr>
            <div>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tool Name</th>
                        <th scope="col">Tool Category</th>
                        <th scope="col">Tool Price</th>
                        <th scope="col">Tool Quantity</th>
                        <th scope="col">Tool Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach($tool as $tool)
                      <tr>

                        <td>{{ $tool->id }}</td>
                        <td>{{ $tool->toolname }}</td>
                        <td>{{ $tool->toolcategory }}</td>
                        <td>Rs.{{ $tool->toolprice }}</td>
                        <td>{{ $tool->quantity }}</td>
                        <td> <img src="{{ asset('uploads/tools/' . $tool->image) }}" width="100px;" height="100px;" alt="image"> </td>
                        <td>
                          <a class="btn btn-info" href="/updatetoolbtn/{{$tool->id}}">Update</a>
                          <a class="btn btn-danger" href="/deletetoolbtn/{{$tool->id}}">Delete</a>
                        </td>

                      </tr>
                      
                      @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </body>
</html>