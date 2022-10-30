<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
</head>
<body>
    <h1>DEKHO AB </h1>
    
    {{-- <img src="{{asset('storage/app/{$filename->upload}')}}"/> --}}
    @foreach($post as $postS )
     {{$postS->id}}
     {{$postS->filenames}}
     
     {{$postS->created_at}} 
     {{ $postS->upadated_at}}
     <img  src="{{asset('upload')}}"/>
     @endforeach
    
</body>
</html>