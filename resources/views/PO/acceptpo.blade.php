<!DOCTYPE html>
<html lang="en">
<head>
  <title>Purchase Officer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
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
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">VESIT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
      
      </ul>
<!--
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>-->
    </div>
  </div>
</nav>
<br>
<br>
  
     <form class="form-horizontal" action="/action_page.php">
 <center> 
<div class="form-group">
  @if(isset($item))
    @if(isset($qty)) 

    <label class="control-label col-md-2" for="item">Item*:</label>
    <div class="col-md-10">
      <input type="text" class="form-control" id="item" value={{$item}}><br></br>
    </div>
    <label class="control-label col-md-2" for="no.">Quantity*:</label>
    <div class="col-md-10"> 
      <input type="number" class="form-control" id="no." value='{{$qty}}'><br></br>
    </div>
    <label class="control-label col-md-2" for="desc.">Description:</label>
    <div class="col-md-10"> 
      <input type="text" class="form-control" id="desc" value='{{$desc}}'><br></br>
    </div>
    <label class="control-label col-sm-2" for="reason">Reason for Request*:</label>
    <div class="col-md-10"> 
      <input type="text" class="form-control" id="reason" value='{{$reason}}'><br></br>
    </div>
    @endif
  @endif
    
    
    <div>
      <button type="submit" class="btn btn-default">Accept</button>
    </div>
      <div>
      <button type="submit" class="btn btn-default">Decline</button>
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
            
            <a href="#" id="footname"><p>CHINMAY SANKHE</p></a> &nbsp;&nbsp;&nbsp;
            <a href="#" id="footname"><p>RISHIL KIRTIKAR</p></a> &nbsp;&nbsp;&nbsp;
            <a href="#" id="footname"><p>SMRUTI KSHIRSAGAR</p></a> &nbsp;&nbsp;&nbsp;
            <a href="#" id="footname"><p>SANKET GOKHALE</p></a> &nbsp;&nbsp;&nbsp;
            <a href="#" id="footname"><p>GRISHMA GURBANI</p></a> &nbsp;&nbsp;&nbsp;
            <a href="#" id="footname"><p>ABHIRUCHI BHATTACHARYA</p></a> &nbsp;&nbsp;&nbsp;
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
</body>
</html>