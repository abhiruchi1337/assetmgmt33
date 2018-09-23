<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Store Manager home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>.sidenav {
    height: 100%;
    width: 160px; 
    position: fixed;
    z-index: 1;
    overflow-x: hidden;
    padding-top: 20px;
}
.thumbnail{
    
}
</style>
    </head>
    <body>
        <div class="col-sm-4">
            REQUIRED ASSETS LIST <!--Side bar for requests-->
            <table class="table">
                <tr><td>Item</td></tr>
                <tr><td></td>
                <td><a href="#" role="button" class="btn btn-primary btn-block">Available</a></td>
                <td><a href="#" role="button" class="btn btn-primary btn-block">Pending</a></td></tr>
                <tr><td></td>
                <td><a href="#" role="button" class="btn btn-primary btn-block">Available</a></td>
                <td><a href="#" role="button" class="btn btn-primary btn-block">Pending</a></td></tr>
            </table>
        </div>
        <div class="col-sm-8">
            INVENTORY<!--Showing available resources-->
            <div class="main">
                    <div class="thumbnail col-sm-2">
                        <div class="caption">
                            <h4>Item 1</h4><p>Quantity:</p>
                                <p><a href="#" role="button" class="btn btn-primary">+</a> <a href="#" role="button" class="btn btn-primary">-</a></p>
                        </div>
                    </div>
                    <div class="thumbnail col-sm-2">
                        <div class="caption">
                            <h4>Item 2</h4><p>Quantity:</p>
                                <p><a href="#" role="button" class="btn btn-primary">+</a>  <a href="#" role="button" class="btn btn-primary">-</a></p>
                        </div>
                    </div>
            <div class="thumbnail col-sm-2">
                        <div class="caption">
                            <h4>Item 3</h4><p>Quantity:</p>
                                <p><a href="#" role="button" class="btn btn-primary">+</a>  <a href="#" role="button" class="btn btn-primary">-</a></p>
                        </div>
                        </div>
                    </div>
                </div>
    </body>
</html>
