<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/pages_style.css') }}">
    <title>Homepage</title>
</head>

<body>
@include('layouts/navbar')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="./images/logo.png" alt="could not load image" class="logo" width="155px" height="145px">
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        @foreach($departments as $department)
        <div class="col-md-6">

            <div class="media-body">
                <a href="{{ route('page',$department->slug) }}"> <img class="mr-3" src="{{ asset('images/'.$department->image) }}" width=150 height=120 alt="Generic placeholder image"></a>
                <br>
                <a href="{{ route('page',$department->slug) }}">{{ $department->name }}</a>
                <h3>{{ $department->headline }}</h3>
                <p>{{ $department->bullet_points }}</p>
            </div>

        </div>
        @endforeach
    </div>
</div>
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <div class="news">
                    <h1>News</h1>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="latest-news">
                    <h2>Latest News</h2>
                </div>
                <div class="content-list">
                    @foreach($news as $new)
                    <div class="content-list-item">
                        <a href="{{ $new->link }}" target="_blank">{{ $new->title }}</a>
                        <time class="float-right">{{ $new->date }}</time>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>
<br>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
