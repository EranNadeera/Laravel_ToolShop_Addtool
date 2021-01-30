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
                    <a href="/toolsadd"><h1>Add Tool</h1></a>
                </div>
            </div>

            <div class=col-md-8>
              @foreach ($errors->all() as $error)
                  <div class="alert alert-danger" role="alert">
                    {{ $error }}
                  </div>
              @endforeach
            </div>

            <div>
                <form action="{{ route('addtool') }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="col">
                          <label>Tool Name:</label>
                          <input type="text" class="form-control" name="toolname" placeholder="Tool Name">
                        </div>
                        <br>
                        <div class="col">
                            <label>Tool Category:</label>
                            <input type="text" class="form-control" name="toolcategory" placeholder="Tool Category">
                        </div>
                        <br>
                        <div class="col">
                            <label>Tool Price:</label>
                          <input type="text" class="form-control" name="toolprice" placeholder="Tool Price">
                        </div>
                        <br>
                        <div class="col">
                            <label>Tool Quantity:</label>
                            <input type="text" class="form-control" name="quantity" placeholder="Tool quantity">
                        </div>
                        <br>
                      </div>
                      <div class="form-group">
                        <label>Tool Image</label>
                        <div class="col-md-2">
                          <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                      </div>
                    <button type="submit" name="submit" class="btn btn-primary">AddTool</button>
                </form>
                <br>
                <hr>
                <div>
                  <a href="/toolspage">Tools Shop</a>
                </div>
            </div>

        </div>
        </div>
    </body>
</html>