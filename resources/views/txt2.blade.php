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
                background-color: #1C1C1C;
            }

            p{
                color: white;
                font-size: 50px;
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
                padding-top: 40px;
                display: flex;
                align-items: flex-start;
                justify-content: center;

            }


    </style>

</head>
<body>
    <div>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;Como esquecer esse dia né momo, a gente perguntando para sua<br>&nbsp; mãe se eu podia dormir lá kkkkkkkkk, aí ela vai e simplesmente fala "não &nbsp; estou preparada para isso"
            kkkkkkk pqp. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; Você indo fazer xixi e me xingando porque estava filmando(tenho<br>&nbsp; esse vídeo ainda), mas a coisa que mais me marcou esse dia foi você<br>&nbsp; falando o quanto estava feliz
            simplesmente por eu ter subido no<br>&nbsp; parquinho, real aquilo me deixou muito felizinho, você não tem noção.<br>&nbsp; Sem falar que eu acho que rendeu nossa fotoca 01...</p>

        </div>
        <div id="back">
            <a href='{{route('fotos')}}'> Voltar</a>
        </div>
    
</body>
</html>