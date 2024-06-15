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
                font-size: 34px;
            }

            #txt{
                padding: 20px;
            }

            #back{
                padding-top: 5px;
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
            <p>Entre todas as coisas que eu imaginei, eu nunca desconfiei que o amor não servia para amar. Eu pensava que o amor era romântico e cheio de coisas felizes e boas, 
                como aqueles clichês de filme: beijo na chuva e vários encontros caros todos os finais de semana. Mas quando o amor chegou, ele era dramático, mimado, ficava doente 
                pelo menos uma vez ao mês, e ao interpretar minhas mensagens erradas, achava que eu estava bravo. O amor se cansava com frequência, querendo sempre tirar um cochilinho.
                 O amor era impaciente e, se alguma coisa não saía como ela queria, ficava emburrada (tem que melhorar isso, hein).</p>
            <p>
            O amor ficou ao meu lado em todos os momentos, fossem eles bons ou ruins. Quando eu estava cansado, o amor me fazia cafuné e me deixava descansar em seus braços. O amor 
            sempre tentava me entender, mesmo sabendo que eu não era perfeito. O amor me ensinou que ela não foi feita para cumprir minhas expectativas. O amor sempre foi companheira 
            e a melhor amiga de todas. Às vezes, o amor me machucava, mas não tinha problema, porque o amor nunca faz mal. Ninguém tinha me avisado que o amor não seria fácil, mas se 
            fosse, seria sem graça. O amor, sem querer, juntou os meus pedacinhos e eu, sem querer, juntei os dela.
            </p>
            <p>Eu te amo muito, muitão, meu amor. Eu e você, hoje e sempre!!!</p>
    </div>

    <div id="back">
                <a href='{{route('fotos')}}'> Voltar</a>
            </div>
    
</body>
</html>