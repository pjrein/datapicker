<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="jquery-ui.css">
        <script type="text/javascript" src="jquery-3.4.1.js"></script>
        <script src="jquery-ui.js"></script>
        <script type="text/javascript">

            $(function () {
                $("#date").datapicker();
            });


//            window.onload = function () {
//                alert("ha die peet, jquery werkt");
//            };
            $(document).ready(function () {
                $("a").addClass("test");
//                $("#date").datepicker();
                $("a").click(function (event) {
                    alert("Thanks for visiting!");
                });
            });
//            $(document).ready(function () {
//                // Alle activiteit coderen wij hier
//                $("p").click(function () {
//                    $(this).hide();
//                });
//            });

        </script>
        <style>
            a.test {
                font-weight: bold;
            }
        </style>
        <title></title>
    </head>
    <body>
        <?php
        echo 'hallo peter, we gaan jquery testen';
        ?>
        <br>
        <!--<p>deze tekst verdwijnt als je er op klikt</p>-->
        <a>dit is een anker en geeft een alert</a><br>

        <input type="text" name="date" name="search[date]" id="date" value="<?php echo $date; ?>" class="input-control">
        
    </body>
</html>