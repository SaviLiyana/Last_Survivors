<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Select Account</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            body {
                background-color: #22313F;
/*                background-color: powderblue;*/
            }

            a {
                color: inherit;
                text-decoration: inherit;
            }

            a:visited , a:hover , a:focus , a:hover, a:active { 
                color: inherit;
                text-decoration: inherit;
            }

        </style>

    </head>

    <body>

        <h1 align="center" style="margin-top:100px; color: #ECF0F1">Welcome to The Stock Market Simulation Game</h1>

        <h3 align="center" style="color: #ECF0F1">Designed by the team 'Last Survivors'</h3>

        <h3 align="center" style="margin-top:100px; color: #ECF0F1">Please select the account which you want to log into...!</h3>

 	<div class="container" align="center" style="margin-top:30px; color: #ECF0F1">

            <button type="button" class="btn btn-warning btn-lg"><a href="LoginBank.php">Bank Account</a></button>

            <button type="button" class="btn btn-info btn-lg"><a href="LoginBroker.php">Broker Account</a></button>

 	</div>

        <h4 align="center" style="margin-top:100px; color: #ECF0F1">note : first you should have a Bank account to create a Broker Account</h4>

</body>
</html>
