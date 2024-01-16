<head>

    <meta charset="utf-8" />
    <title>{{$seo->title}}</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="{{$seo->description}}" />
    <meta name="keyword" content="{{$seo->keyword}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('uploads/febicon/'.$seo->feb)}}" />
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend')}}/assets/imgs/theme/favicon.svg" /> --}}
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/main.css?v=5.3" />

</head>
