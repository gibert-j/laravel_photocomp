
@extends('layouts.app')
@section('content')
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
      /* body {
         background-color: rgba(210, 210, 210, 0.8);
         } */
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
        .box{
          width: 70%;
          padding: 10px 20px;
          margin: auto auto 10px auto;
          position: absolute;
          left: 50%;
          transform: translate(-50%, -50%);
          color: black;
          z-index: 2;
          background: rgba(210, 210, 210, 0.7);
          border-radius: 5px;
          text-align: center;
        }
        h4{
          font-family: 'Monda';
        }

        @media screen and (max-width:500px){
          .content::before {
            height: 45%;
            bottom: 5%;
          }
          .content img{
            height: 600px;
          }

          .box{
            padding-bottom: 50px; ;
          }
          .pl-2{
            font-size: 12px;
          }
          .pl-2 p{
            font-size: 12px;
          }

          .judge{
            display: flex;
            flex-direction:column;
          }
          .button{
            margin: auto;
          }
          .button a{
            font-size: 14px;
          }
          .footer{
            margin-top: 100px !important;
          }
        }


          .content img{
            height: 500px;
          }

        }

      </style>
    </head>
    <body>
      <div class="allPage mt-5">
        <hr>
        <div class="content">
          <img src="{{$competition->image_path}}" alt="">
          <div class="box row row-cols-sm-2 row-cols-md-2 g-2">
            <div class="col-12  mt-10 pl-2">
              <div class="pl-2">
                <h4>Photo Contest ID:{{$competition->id}}</h4>
                <h4 class="text-capitalize">{{$competition->title}}</h4>
                <p>{{$competition->description}}</p>
              </div>
            </div>
            <div class="col-12 px-2 mt-10 ">
              <div class="judge pl-2">
                <div class="h">
                  <h4 class="text-capitalize">{{$competition->time_remaining}}</h4>
                  <h6>Judge <a href="#">Manoj Rai</a></h6>
                </div>
                <div class="button" >
                 <a href="/competitions/{{$competition->id}}/entries/create" class="btn btn-success">Upload Photo</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
  </html>
@endsection
