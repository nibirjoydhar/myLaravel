<!-- php artisan make:view first-page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:aliceblue;
            align-items: center;
            display:flex;
            flex-direction: column;
            font-size: 20px;
            font-family:'Times New Roman', Times, serif ;
        }
        a{
            font-size: 25px;
            text-decoration: none;
            background-color: blue;
            color:white;
            padding:12px;
            margin:10px;
            text-align: center;
            border-radius:5px;

        }
    </style>
</head>
<body>
    @include('common/header')
    <h1>This is about page</h1>
    @include('common/footer')
</body>
</html>