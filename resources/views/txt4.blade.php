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
            
            #tl{
                display: flex;
                align-items: flex-start;
                justify-content: center;
                font-size: 30px;
                padding-top: -5px;
                color:white;
               
            }

            p{
                color: white;
                font-size: 35px;
            }

            #txt{
                padding: 20px;
            }
            
            #back{
                padding-top: 70px;
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
    <div id="tl">
        <h1>Búzios né momo😜</h1>
    </div>

    <div id="txt">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;Esse dia foi tão bom amor juro, ficar agarradinho com você lá no monte(nem sei se é assim que escreve), fofocando dos outros
            e rindo muito.</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;Tirando as partes ruins(engraçadas) como o cara derrubando cerveja em você, seu suco de laranja pura gordura de pia e seu pratrão de
                macarrão, que deu vontade de cagar até mesmo em mim que não comeu kkkkkkkkk, e não podia faltar a nossa ligaçãozinha de noite para rirmos 
                do dia, sem falar no fotão que a gente tirou.
            </p>

            <div id="back">
                <a href='{{route('fotos')}}'> Voltar</a>
            </div>
        </div>
</body>
</html>