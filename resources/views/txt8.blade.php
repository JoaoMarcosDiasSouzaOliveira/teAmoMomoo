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
            <p>Essa foto por si só já fala muito… Por mais que você sempre me julga, chama a atenção, “implica” com minhas gracinhas ou faz essas caras de julgação eu amo kkkkkk,
            adoro ver minha onça brava, e me desculpa se às vezes eu te estresso muito, e acabo fazendo gracinha na hora errada vou tentar melhorar (não prometo)...</p>
            <p>Nossa escrevendo este textinho começou a tocar "Pras damas, oriente" literalmente só consigo pensar em nós dois escutando essa música</p>
    </div>

    <div id="back">
                <a href='{{route('fotos')}}'> Voltar</a>
            </div>
    
</body>
</html>