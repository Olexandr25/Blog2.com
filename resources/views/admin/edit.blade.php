<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <title>Edit Post</title>


</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Update Post</h1>
        </div>
    </div>

    {!! Form::model($blog, ['route' => ['post.update', $blog->id], 'method' => 'POST']) !!}
    <div class="row">
        <div class="col-md-8">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', NULL, ['Class' => 'form-control input-lg']) }}

            {{ Form::label('image', 'Update image :') }}
            {{ Form::file('image') }}

            {{ Form::label('body', 'Body:', ['Class' => 'form-spacing-top']) }}
            <br>
            {{ Form::textarea('body', NULL, ['Class' => 'Form-control']) }}
        </div>
        <div class="col-md-4">
            <div class="well">

                <dl class="dl-horizontal">
                    <dt>Creat At:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($blog->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Update At:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($blog->update_at)) }}</dd>
                </dl>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            {{ Html::linkroute('admin', 'Cancel', NULL, array('class' => 'btn btn-danger')) }}
        </div>

        <div class="col-md-6">
            {{ Form::submit('Save Changes', ['class' => 'btn btn-success']) }}
        </div>
    </div>
</div>
{!! Form::close() !!}
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
