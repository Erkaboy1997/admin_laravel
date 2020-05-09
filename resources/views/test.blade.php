<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>

    <title>Test</title>


</head>
<body>
    <div id="editor">
        @foreach($videos as $video)
            <p>{!! $video->title !!}</p>

        @endforeach


        <script>
            CKEDITOR.replace( 'title' );
        </script>
    </div>


</body>
</html>
