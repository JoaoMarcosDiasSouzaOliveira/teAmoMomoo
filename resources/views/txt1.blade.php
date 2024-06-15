<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
            html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            
        }
        
            body{
                border: 70px solid;
                box-sizing: border-box;
                border-left: 200px solid; /* Define a espessura da borda esquerda */
                border-right: 200px solid; /* Define a espessura da borda direita */
                

            }

            #tl{
                display: flex;
                align-items: flex-start;
                justify-content: center;
                font-size: 40px;
                height: 100px;
                
            }

            #pa{
                padding: 40px;
                font-size: 40px;

            }
            
            #shadow{
                width: 100%;
                height: 100%;

            }

            a{
                padding: 10px;
                font-size: 54px;
                text-decoration: none;
                color: #FF1493;
                border: solid;
                border-radius: 10px;
                background-color:#FFC0CB;
            }

            #back{
                padding-top: 10px;
                display: flex;
                align-items: flex-start;
                justify-content: center;

            }


        </style>    
</head>
<body>
    <div id="shadow">
    <div id="tl"> 
        <h1> Vamos lá...</h1>
    </div>
    <div id="pa">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Então momo só para você saber eu amo cada dia, cada hora, cada segundo com você.<br> Eu sei que você não gosta muito de computador e essas coisas, 
            mas decidir fazer um site para você, para sempre que estiver triste, feliz, cansada, ansiosa ou com saudade olhar e vê, o quanto eu te amooo!!!<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; E espero
            de coração que isso consiga te confortar um pouco e te acalmar quando você precisar minha princesa!</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️</p>
    </div>
        <div id="back">
            <a href='{{route('fotos')}}'> Voltar</a>
        </div>
</body>
</html>