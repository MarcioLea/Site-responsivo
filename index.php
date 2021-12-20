<html>

    <head>

        <title>Meu primeiro site em PHP!</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <style type="text/css">
            .linha {
                font-weight: bold;
                color: green;
                padding-left: 10px;
                line-height: 50px;
            }

        </style>

    </head>

    <body>
        
        <?php
            for ($i = 0 ;$i < 10 ; $i++) {
                print( "<span class=\"Linha\">Linha número " . $i . "</span><br />");
            }

        ?>

<div id="accordion">
  <h3>First header</h3>
  <div>First content panel</div>
  <h3>Second header</h3>
  <div>Second content panel</div>
</div>
       

    </body>

        <script type="text/javascript">
            $(document).ready(function() {
                alert("teste");
            })


        </script>



</html>