<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card-header bg-warning text-center "><h1>Main Page</h1></div>
            <div class="card-body">
<!-- Example single danger button -->
<div class="btn-group">

@foreach( $menu_list as $menu )

<button type="submit"   name="menu_select" value="{{$menu->id}}" class="menu_list btn btn-danger dropdown-toggle ms-3" data-bs-toggle="dropdown" aria-expanded="false">
    {{  $menu->menu_name}}
</button>


@endforeach

    <ul class="dropdown-menu" name="submenu" id="submenu_id">

        <li><a class="dropdown-item" href="#">action</a></li>



    </ul>
  </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>


$(document).ready(function (e) {
    $('.menu_list').click(function(e){
            var menu_name = $(this).val();


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type : 'POST',
            url : '/getsubmenu',
            data:{menu_name:menu_name},
            success:function(data){
                $('#submenu_id').html(data);
            }

        });
    })

});








      </script>

  </body>

</html>



