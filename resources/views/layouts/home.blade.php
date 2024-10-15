<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home-products</title>
    <style>
        *{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
        }
      
        ul{
            display: flex;
            flex-wrap: wrap;
            background-color: rgb(58, 69, 69);
            padding: 10px;
            gap: 10px;
            border-radius: 5px;
            height: 600px;

        }

        li{
            background-color: rgb(170, 203, 213);
            list-style: none;
            border-radius: 5px;
            padding: 20px;
            width: 150px;
            margin: 20px;
        }
        
        
    
    </style>

    
</head>
<body>
    <nav>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
    </footer>
    
</body>
</html>