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

        img {
            max-width: 220px;
            max-height: 293.3px;
            border-radius: 30px;
            margin: 40px;
            box-shadow: 12px 12px 30px rgba(0, 0, 0, 1);
            
        }

        img:hover {                        
            transform: scale(1.1);   
            transition: 1.5s; /* Adiciona uma transição suave para o efeito de zoom */
        }

        h1{
            box-shadow: 12px 12px 30px rgba(0, 0, 0, 1);
            border-radius: 15px;
            margin: 5px;
            background-color: white;
            padding: 10px;
    
        }

        .image-container {
            text-align: center; /* Centraliza o conteúdo horizontalmente */
        }

        .image-container a {
            display: block; /* Faz com que o link seja exibido como um bloco para ocupar toda a largura disponível */
            margin-top: 5px; /* Adiciona um pequeno espaço entre a imagem e o link */
        }

        #imagem-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            max-width: 1636px, 1221px;
            margin: auto;
            height: 100%;
        }

        #filha-da-puta{
            height: 293.3px;
        }

        #top {
            display: flex;
            align-items: flex-start;
            justify-content: center;
    
        }

        a:hover{
            color: #FF1493 ;
            transition: 3.5s;
            background-color: #FFC0CB;
            
        }

        a{
            text-decoration: none;
            color: transparent ;
            font-size: 24px;
            border: solid;
            border-radius: 10px;
        }
        

    </style>
</head>
<body>  

    <div id="top"> 
        <h1>Cada fotoca tem uma surpresa...</h1>
    </div>

    <div id="imagem-container">
        <div class="image-container">
            <img src="/images/foto1.jpeg">
            <a href='{{route('txt1')}}'> Amei muito essa foto amor </a>
        </div>
        <div class="image-container">
            <img src="/images/foto4.jpeg">
            <a href='{{route('txt2')}}'> Uma das minha fotos favoritas </a>
        </div>
        <div class="image-container">
            <img src="/images/foto2.jpeg">
            <a href='{{route('txt3')}}'> Te amo muito muitãooo💕💕 </a>
        </div>
        <div class="image-container">
            <img src="/images/foto3.jpeg">
            <a href='{{route('txt4')}}'> Búzios né😜 </a>
        </div>
        <div class="image-container">
            <img src="/images/foto5.jpeg">
            <a href='{{route('txt5')}}'> ❤️❤️❤️❤️ </a>
        </div>
        <div class="image-container">
            <img src="/images/foto8.jpeg">
            <a href='{{route('txt6')}}'> Amo essa foto também </a>
        </div>
        <div class="image-container">
            <img src="/images/foto7.jpeg">
            <a href='{{route('txt7')}}'> Nossa primeira foto juntos </a>
        </div>
        <div class="image-container">
            <img id="filha-da-puta" src="/images/foto11.jpeg">
            <a href='{{route('txt8')}}'> Sua cara = 😒 </a>
        </div>
        <div class="image-container">
            <img src="/images/foto9.jpeg">
            <a href='{{route('txt9')}}'> Primeiro porre de momo kkk </a>
        </div>
        <div class="image-container">
            <img src="/images/foto12.jpeg">
            <a href='{{route('txt10')}}'> KKKKK amo suas caretas </a>
        </div>
        <div class="image-container">
            <img src="/images/foto10.jpeg">
            <a href='{{route('txt11')}}'> Primeira vez que dormimos "juntos" </a>
        </div>
        <div class="image-container">
            <img src="/images/foto6.jpeg">
            <a href='{{route('txt12')}}'> Minha fotoca favorita sua</a>
        </div>
    </div>

</body>
</html>