<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>亲，访问受限了！</title>
  <link href="{{asset('vendor/laracms/plugins/layui/css/layui.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('vendor/laracms/css/website.css')}}" rel="stylesheet" type="text/css">
  <link rel="apple-touch-icon" href="/favicon.ico">
  <link rel="shortcut icon" href=" /favicon.ico"/>
  <style>
    .notice {
      width: 450px;
      margin: 30px auto;
      padding: 30px 30px;
      border-top: 5px solid #006191;
    }

    @media screen and (max-width: 750px) {
      html body {
        margin-top: 0;
      }

      .notice {
        width: auto;
        margin: 20px 15px;
        padding: 30px 0;
      }
    }

    h1 {
      font-size: 118px;
      text-indent: -45px;
    }
    .fly-none p{
      margin: 0;
      text-indent: -45px;
    }
  </style>
  <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
</head>
<body>
<div class="fly-none" style="min-height: 0; padding: 0;">
  <img src="{{ asset('images/error/403.png') }}" alt="">
  <h1> 403 </h1>
  <p>您没有访问权限</p>
</div>
<div class="notice layui-text">

</div>
</body>
</html>
