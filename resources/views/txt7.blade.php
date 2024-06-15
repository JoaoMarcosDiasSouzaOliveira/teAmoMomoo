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
                font-size: 35px;
            }

            #txt{
                padding: 20px;
            }

            #back{
                padding-top: 250px;
                display: flex;
                align-items: flex-start;
                justify-content: center;

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
            
    </style>        
</head>
<body>
    <div id="txt">
        <p>Esta foi praticamente nossa primeira foto, não tinha como ela faltar de jeito nenhum né… </p>
    <p>
        Lembro desse dia até hoje, a primeira vez que fui na casa da Dorinha, fui tão bem recebido que senti como se fosse minha segunda casa, foi tão bom passar o dia lá, almoçar, conversar, assistir tv, jogar o joguinho de tiro e tirar um cochilinho no chão com momo, não posso esquecer da Taty me atormentando também kkkkkkk
        </p>
    </div>

    <div id="back">
                <a href='{{route('fotos')}}'> Voltar</a>
            </div>
    
</body>
</html>