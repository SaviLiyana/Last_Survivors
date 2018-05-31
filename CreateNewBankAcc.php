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
        <div style="height:50px; background-color: #F0AD4E;"></div>

<!--        <h1 align="center" style="margin-top:100px; color: #ECF0F1">Welcome to The Stock Market Simulation Game</h1>-->

<!--        <h3 align="center" style="color: #ECF0F1">Designed by team 'Last Survivors'</h3>-->

        <h2  style="margin-top:50px; margin-bottom:50px; margin-left:292px;">Create New Bank Account</h2>

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
                        <input type="password" class="form-control" id="pwd" placeholder="Creat new password" name="pwd">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd" style="margin-left:120px;">re-type password :</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="pwd2" placeholder="Re-type password" name="pwd2">
                    </div>
                </div>
                <hr/>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="fname" style="margin-left:120px;">first name :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="lname" style="margin-left:120px;">last name :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="addr1" style="margin-left:120px;">address line 1 :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="addr1" placeholder="Enter address" name="addr1">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="addr2" style="margin-left:120px;">address line 2 :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="addr2" placeholder="Enter address" name="addr2">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="addr3" style="margin-left:120px;">address line 3 :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="addr3" placeholder="Enter address" name="addr3">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email" style="margin-left:120px;">email :</label>
                    <div class="col-sm-4">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="tel" style="margin-left:120px;">telephone :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="tel" placeholder="Enter telephone" name="tel">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default btn-warning" style="margin-left:120px;">Create Account</button>
                    </div>
                </div><br/>

<!--                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" class="btn btn-info" style="margin-left:120px;"><a href="CreateNewStockAcc.php">Create New Account</a></button>
                    </div>
                </div>-->
            </form>
        </div>



</body>
</html>
