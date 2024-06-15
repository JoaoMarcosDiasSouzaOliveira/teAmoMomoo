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
                padding-top: 400px;
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
            <p>Esse dia também não podia faltar né momo, a primeira vez que “dormimos” juntos.</p><p> Várias aventuras perigosas também né amor…</p>
    </div>

    <div id="back">
                <a href='{{route('fotos')}}'> Voltar</a>
            </div>
    
</body>
</html>