<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: linear-gradient(90deg, #1C1C1C, #4F4F4F);
            
        }
        
        div{
            background-image: url('/images/fotocapa2.jpeg');
            background-position: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 150px;
            border-radius: 30px;
            color:white;
            box-shadow: 12px 12px 30px rgba(0, 0, 0, 1);
        

        }

        a{
            padding-left: 95px;
            color: white;
            text-decoration: none;
            
        }

        @keyframes pulsar {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }

        a:hover{
            color: #DC143C;
            transition: 1s;
            animation: pulsar 2.8s infinite;
        }

        a{
            font-size: 24px;
            display: inline-block;
            transition: transform 0.5s ease;
        }

        h1{
            padding-top: 20px;
            
        }
    
    </style>

</head>
<body>

    <div>
        <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Então momo,<br> Eu te amo muito muitãoooo!! <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Então vamos lá<h1> 
            <br>
            <a href='{{route('fotos')}}'> ❤️Clique aqui❤️</a>
            
    </div> 
    
</body>
</html>