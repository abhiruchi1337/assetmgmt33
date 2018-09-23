
@extends('layouts.app')

@section('content')
<!-- <html lang="en"> -->
    <head>
        <meta charset="utf-8" />
        <title>VES-ASSET</title>
         <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>    
.form-group {   
               
    width: 1000px;
    border: 5px solid black;
    padding: 25px;
    margin-left: 15px;
}
.footer {
    position: relative;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #000000;
    color: white;
    text-align: center;
}
 
#footname{
    color: grey;
}
#tweet{
    color: lightblue;
}

</style>    
</head>
 <!-- <body> -->
          <nav class="navbar navbar-inverse">
            <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">VESIT</a>
            </div>
                <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                </ul>
            </div>
        </nav>
       <form class="form-horizontal" action="/action_page.php">
 <center> 
<div class="form-group">
    <label class="control-label col-md-2" for="item">Item*:</label>
    <div class="col-md-10">
      <input type="text" class="form-control" id="item" placeholder="Enter item name"><br></br>
    </div>
    <label class="control-label col-md-2" for="no.">Quantity*:</label>
    <div class="col-md-10"> 
      <input type="number" class="form-control" id="no." placeholder="Enter quantity"><br></br>
    </div>
    <label class="control-label col-md-2" for="desc.">Description:</label>
    <div class="col-md-10"> 
      <input type="text" class="form-control" id="desc" placeholder="Enter description if any"><br></br>
    </div>
    <label class="control-label col-sm-2" for="reason">Reason for Request*:</label>
    <div class="col-md-10"> 
      <input type="text" class="form-control" id="reason" placeholder="Enter the reason for your request"><br></br>
    </div>
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
 </div>
 </center>
</form>
<div class="footer" id="foot">
<br>
    <div class="row">
        <div class="col-md-4">
            <h3><strong>ABOUT US</strong></h3>
            <a id="footname"><p>WE THE STUDENTS OF VIVEKANANDS EDUCATION SOCIETYS INSTITUTE OF TECHNOLOGY HAVE CREATED THIS SITE
                FOR ASSETS MANAGEMENT IN THE COLLEGE.</p>
            <br></br>
            <br></br>
            </a>
        </div>
        <div class="col-md-4">
            <h3>TEAM</h3>
            <a href="#" id="footname"><p>GRISHMA GURBANI</p></a> &nbsp;&nbsp;&nbsp;
            <a href="#" id="footname"><p>CHINMAY SANKHE</p></a> &nbsp;&nbsp;&nbsp;
            <a href="#" id="footname"><p>RISHIL KIRTIKAR</p></a> &nbsp;&nbsp;&nbsp;
            <a href="#" id="footname"><p>SMRUTI KSHIRSAGAR</p></a> &nbsp;&nbsp;&nbsp;
            <a href="#" id="footname"><p>SANKET GOKHALE</p></a> &nbsp;&nbsp;&nbsp;
        </div>
 
    <div class="col-md-4">
        <h3>FOLLOW US ON</h3>
 
<a href="https://twitter.com" id="tweet">
                <span class="fa-stack fa-2x">
  <i class="fa fa-circle fa-stack-2x" style="color: rgba(56,56,56,0.74)"></i>
  <i class="fa fa-twitter fa-stack-1x"></i>
    </span>
</a>
   <br>
 
     </div>
        <a href="https://www.facebook.com/"><span class="fa-stack fa-2x">
  <i class="fa fa-circle fa-stack-2x" style="color: rgba(56,56,56,0.74)"></i>
  <i class="fa fa-facebook fa-stack-1x"></i>
        </span></a>
 
    <br>
<a href="https://www.instagram.com" id="footname">
    <span class="fa-stack fa-2x">
  <i class="fa fa-circle fa-stack-2x" style="color: rgba(56,56,56,0.74)"></i>
  <i class="fa fa-instagram fa-stack-1x"></i>
    </span></a>
    </div>
    </div>
    </div>
 
</div>
    <!-- </body> -->
<!-- </html> -->
