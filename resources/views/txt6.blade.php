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
                font-size: 20px;
            }

            #txt{
                padding: 20px;
            }

            #back{
                padding-top: 20px;
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
        <p>O meu castelo tem um quarto só
E amianto pra cobrir minha cabeça
O meu guarda roupa é feito de uma só gaveta
E mora lá, um passarinho verde da esperança</p>
        <p>Quem tenta incessantemente alcança
No balanço das andanças aprendi sobreviver
Quem tenta! Quem tenta incessantemente alcança
No balanço das andanças aprendi sobreviver, vem</p>
        <p>Vida dolorida pra lá de sofrida
Pra encher a barriga é preciso suar
Banho de caneco, partiu pro boteco
Pagode e cerveja pra anestesiar</p>
        <p>Valei-me poderoso Deus, olhai esse pobre aprendiz
Não tenho dinheiro, nem carro maneiro
Meu samba me basta, me deixa feliz</p>
        <p>Valei-me poderoso Deus, olhai esse pobre aprendiz
Não tenho dinheiro, nem carro maneiro (palma da mão, palma da mão)
Mas eu sou feliz</p>
        <p>O meu castelo tem um quarto só (quero ouvir vocês) uoh oh
E amianto pra cobrir minha cabeça
O meu guarda roupa é feito de uma só gaveta
E mora lá, um passarinho verde da esperança</p>
        <p>Quem tenta! Quem tenta incessantemente alcança
No balanço das andanças aprendi sobreviver
Quem tenta incessantemente alcança
No balanço das andanças aprendi sobreviver</p>
        <p>Vida dolorida pra lá de sofrida
Pra encher a barriga é preciso suar
Banho de caneco, partiu pro boteco
Pagode e cerveja pra anestesiar</p>
        <p>Valei-me poderoso Deus, olhai esse pobre aprendiz
Não tenho dinheiro, nem carro maneiro
Meu samba me basta, me deixa feliz</p>
        <p>Valei-me poderoso Deus, olhai esse pobre aprendiz, é
Não tenho dinheiro, nem carro maneiro
Palma da mão
(E lalaiá, laiá laiá laiá) oba
(E lalaiá, laiá laiá laiá) eh laiá
(E lalaiá, laiá laiá laiá)</p>
        <p>Foi no balanço das andanças que aprendi sobreviver
O lalaiá (e lalaiá, laiá laiá laiá)
(E lalaiá, laiá laiá laiá) eh laiá
(E lalaiá, laiá laiá laiá)</p>
        <p>No balanço das andanças que aprendi sobreviver
        O meu castelo tem um quarto só</p>
    
    </div>

    <div id="back">
                <a href='{{route('fotos')}}'> Voltar</a>
            </div>
    
</body>
</html>