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

            a{
                padding: 10px;
                font-size: 54px;
                text-decoration: none;
                color: #FF1493;
                border: solid;
                border-radius: 10px;
                background-color:#FFC0CB;
            }
            
            p{
                color: white;
                font-size: 35px;
            }

            #txt{
                padding: 20px;
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
    <div id="txt">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;Só estou aqui pra te lembrar que você é o amor da minha vida, e cada dia que passa como já te falei eu tenho certeza disso, quero você para o resto da minha vida. 
        Fico maluco só de pensar em te perder, e sinto ciúmes sim, VOCÊ É MINHA E SÓ MINHA!! MINHA PRINCESA FEDORENTA.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp; Não gosto nem de imaginar alguma outra pessoa te abraçando, 
        sentindo o frio na barriga que eu sinto quando te vejo, os arrepios que eu sinto quando você fala que me ama ou se declara pra mim, não quero que nenhum outro sinta seu 
        cheirinho, tanto cheirosa como seu bafo de manhã, não quero que outra pessoa se divirta com você e tenha piadinhas internas, não quero outra pessoa te chamando de momo, 
        não quero que seus olhos brilhem pra mais ninguém, não quero que outra pessoa veja seu lado fofo, engraçado, triste e divertido, não quero que outra pessoa te veja pelada, 
        não quero que outra pessoa sinta por você o que eu sinto.
        Isso tudo porque eu te amo, quero passar o resto da minha vida com você.</p>

    </div>

    <div id="back">
        <a href='{{route('fotos')}}'> Voltar</a>
    </div>
    
</body>
</html>