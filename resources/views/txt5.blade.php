<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
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


<body>
    <div id="txt">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;Esse momento em específico não tem muito haver com você amor, mas sim comigo. Este dia eu estava passando por um momento tão triste e ruim, que juro se não fosse por você
             ter ido me ver acho que nem comer direito eu teria conseguido. 
        Comecei este texto assim porque, você vive falando que parece que só eu estou lá por você quando você precisa, mas você sabe que não é verdade amor, você me ajuda muitooo 
        mesmo, você não tem noção disso. Eu te amo muitoo muitãooo, e atualmente você é uma das pessoas que mais me apoia, tirando o pessoal aqui de casa. </p>
    </div>
    
   
    <div id="back">
                <a href='{{route('fotos')}}'> Voltar</a>
            </div>
   
    
</body>
</html>