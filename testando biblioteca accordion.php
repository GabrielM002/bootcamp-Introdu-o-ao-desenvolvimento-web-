<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">    
    <title>Meu primeiro site em PHP! lol</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <style type="text/css">
            .linha {
                font-weight: bold;
                color: green;
                padding-left: 10px;
                line-height: 50px;
            }
        </style>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script>
            $( function() {
            $( "#accordion" ).accordion();
            } );
        </script>  
    </head>

    <body>
        <div id="accordion">
            <h3>Seção 1</h3>
            <div>
            <p>
            Olá, esta página faz parte do desafio
            </p>
        </div>

            <h3>Seção 2</h3>
        <div>
            <p>
            Proposto pelo professor Bruno
            </p>
        </div>  
        <h3>Seção 3</h3>
        <div>
            <p>
            No bootcamp "Carrefour web developer"
            </p>
        </div>
        <h3>Seção 4</h3>
        <div>
            <p>
            Feito com sucesso!
            </p>
        </div>  
        </div>
    </body>

    <script type="text/javascript">
        $(document).ready(function() {
            alert("Bem vindo!");
        });
    </script>

</html>