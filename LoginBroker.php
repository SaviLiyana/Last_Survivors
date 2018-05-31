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
/*            body {
                background-color: #6C7A89;
                background-color: powderblue;
            }*/

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
        <div style="height:50px; background-color: #5BC0DE;"></div>

<!--        <h1 align="center" style="margin-top:100px; color: #ECF0F1">Welcome to The Stock Market Simulation Game</h1>-->

<!--        <h3 align="center" style="color: #ECF0F1">Designed by team 'Last Survivors'</h3>-->

        <h2  style="margin-top:50px; margin-bottom:50px; margin-left:292px;">Logging into the Broker Account</h2>

        <div class="container" >

            <form class="form-horizontal" action="/action_page.php">

                <div class="form-group">
                    <label class="control-label col-sm-2" for="username" style="margin-left:120px;">username :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd" style="margin-left:120px;">password :</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default btn-info" style="margin-left:120px;">Log in</button>
                    </div>
                </div><br/>
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" class="btn btn-info" style="margin-left:120px;"><a href="CreateNewBrokerAcc.php">Create New Account</a></button>
                    </div>
                </div>
            </form>
        </div>
        


</body>
</html>
