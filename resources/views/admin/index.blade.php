<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Posts</title>


</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Posts</h1>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thread>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Create At</th>
                    <th class="text-center" width="130px"><a href="{{ route('post.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus"></i></a></th>
                </thread>
                <?php $no=1; ?>
                <tbody>
                @foreach($blog as $value)
                    <tr>
                        <th>{{  $no++   }}</th>
                        <td>{{  $value->title   }}</td>




                        <td>{{  substr($value->body,0,40) }}{{ strlen($value->body)>40 ? "..." : "" }}</td>
                        <td>{{ date('M j, Y', strtotime($value->create_at)) }}</td>
                        <td>
                            <a href="{{ route('post.show', $value -> id) }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span></a>
                            <a href="{{ route('post.edit', $value -> id) }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>


                            {!! Form::open(['method' => 'POST', 'action' => ['PostController@destroy', $value->id], 'style' =>'display:inline']) !!}
                            {!! Form::button('', ['type'=>'submit', 'class'=>'btn btn-danger btn-sm glyphicon glyphicon-trash']) !!}
                            {!! Form::close() !!}


                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
