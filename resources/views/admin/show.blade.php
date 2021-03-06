<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>View Post</title>


</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $blog -> title }}</h1>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <p class="lead">{{ $blog -> body }}</p>
        </div>

        <div class="col-md-8">
            <p >{{ $blog -> image }}</p>
        </div>

        <div class="col-md-4">
            <div class="well">

                <dl class="dl-horizontal">
                    <label>Create At: </label>
                    <p>{{ date('M j, Y h:ia', strtotime(($blog -> created_at))) }}</p>
                </dl>


                <dl class="dl-horizontal">
                    <label>Update At: </label>
                    <p>{{ date('M j, Y h:ia', strtotime(($blog -> updated_at))) }}</p>
                </dl>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin') }}" class="btn btn-primary btn-block">See All Posts</a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
