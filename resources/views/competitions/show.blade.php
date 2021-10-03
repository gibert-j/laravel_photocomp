
@extends('layouts.app')
@section('content')
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
        .content{
          width: 100%;
          padding-bottom: 200px;
          background-color: #
          /* overflow: hidden; */
        }
        .content img{
          object-fit: cover;
          width: 100%;
          height: 450px;
          position: relative;
        }
        .content::before{
          width: 80%;
          height: 45%;
          margin: auto;
          position: absolute;
          bottom: -30%;
          left: 50%;
          transform: translate(-50%, -50%);
          content: '';
          background: rgba(210, 210, 210, 0.9);
          z-index: 1;
          border-radius: 5px;
        }
        .box{
          width: 80%;
          margin: auto auto 10px auto;
          position: absolute;
          bottom: -8%;
          left: 60%;
          transform: translate(-50%, -50%);
          color: black;
          z-index: 2;
        }
        h4{
          font-family: sans-serif;
        }

        
      </style>
    </head>
    <body>
      <div class="allPage mt-5">
        <hr>
        <div class="content">
          <img src="{{$competition->image_path}}" alt="">
          <div class="box row place-content-cente row-cols-sm-2 row-cols-md-2 g-2">
            <div class="col mt-10 pl-2">
              <div class="pl-2">
                <h4>Photo Contest ID:{{$competition->id}}</h4>
                <h4 class="text-capitalize">{{$competition->title}}</h4>
                <p>{{$competition->description}}</p>
              </div>
            </div>
            <div class="col px-2 mt-10 ">
              <div class="pl-2">
                <h4 class="text-capitalize">{{$competition->time_remaining}}</h4>
                <h6>Judge <a href="#">Manoj Rai</a></h6>
                <a href="/competitions/{{$competition->id}}/entries/create" class="btn btn-success mt-2">Upload Photo</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
  </html>
@endsection
