


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card alert-primary text-center"><h1>Menu list</h1></div>
                <div class="card-body">
                    <TAble class="table tablestriped">
                        <tr>
                            <th>id</th>
                            <th>menu name</th>
                            <th>created at</th>

                        </tr>
                        @forelse (  $menu_name as $menu )
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $menu->menu_name }}</td>
                            <td>{{ $menu->created_at->diffForHumans() }}</td>

                        </tr>


                        @empty
                            NO data found to show
                        @endforelse
                    </TAble>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header alert-warning">
                        <h1>add menu</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/menu/add') }}" method="POST">
                            @csrf
                            <div class="mb-3 mt-3">
                              <label for="exampleInputEmail1" class="form-label">Add menu</label>
                              <input type="text" name="menu_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>

                            @if (session('menu'))
                            <div class="alert alert-success mt-3">
                                your information  successfully added
                            </div>

                            @endif

                          </form>


                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <a class="btn btn-danger" href="{{ url('/add/submenu') }}">Go Sub-Menu List</a>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
