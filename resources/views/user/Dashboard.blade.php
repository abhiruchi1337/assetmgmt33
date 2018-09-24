<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        
         <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <style>
  #Dashboard {
    margin-left: 100px;
    margin-right: 100px;
    margin-top: 100px;
    margin-bottom: 100px;
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
        <script>
           $(function(){

$('input').on('click', function(){
  var valeur = 0;
  $('input:checked').each(function(){
       if ( $(this).attr('value') > valeur )
       {
           valeur =  $(this).attr('value');
       }
  });
  $('.progress-bar').css('width', valeur+'%').attr('aria-valuenow', valeur);    
});

});
        </script>
    </head>
    <body>
              <nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="#">VESIT</a>
</div>
<ul class="nav navbar-nav">
<li class="active"><a href="#">Home</a></li>
</ul>
<<<<<<< HEAD
<ul class="nav navbar-nav">
<li class="active"><a href="/user/request">Apply indent</a></li>
</ul>
<ul class="nav navbar-nav">
<li class="active"><a href="/user/view">Request indents</a></li>
</ul>
<!-- <ul class="nav navbar-nav">
<li class="active"><a action="/logout">Logout</a></li>
</ul> -->
                                    
=======
>>>>>>> 1be6da716877b9dd98fc542e96287e90f5a92ef7
</div>
</nav>
        <div class="container-fluid">

            <div>
          <div class="container" id="Dashboard">
              <div class="panel panel-default" >
                   <div class="panel-heading" style="background-color: #808080">Dashboard</div>
                   <div class="panel-body" style="background-color: lightgrey">
                     <!--<div class="progress">
                         <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                               40%
                          </div>-->
                       <strong><span class="glyphicon glyphicon-stats"></span> PROGRESS</strong>
                       <br></br>
                        <div class="progress progress-striped active">
        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
        </div>
    </div>
<div class="row tasks">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <input name="progress" class="progress" type="checkbox" value="50"><!--check when approved by po-->
        </div>
        <div class="col-sm-4">
          <input name="progress" class="progress" type="checkbox" value="100"><!--check when approved by sm-->
        </div>
     </div>   


  
                       <div class="row">
                           <div class="col-sm-4"><span class="glyphicon glyphicon-user"></span> Staff</div>
                           <div class="col-sm-4"><span class="glyphicon glyphicon-user"></span> Purchase Officer</div>
                           <div class="col-sm-4"><span class="glyphicon glyphicon-user"></span> Store Manager</div>
                       </div>
                           
                            <br></br>
                           
                       </div>
                   </div>
                  </div>
              </div>

            <div class="footer" id="foot">
<br>
    <div class="row">
        <div class="col-md-4">
            <h3><strong>ABOUT US</strong></h3>
            <a id="footname"><p>WE THE STUDENTS OF VIVEKANANDS EDUCATION SOCIETYS INSTITUTE OF TECHNOLOGY HAVE CREATED THIS SITE
                FOR CONVENIENT PAYING GUEST FACILITIES SUITABLE FOR THE INDIVIDUAL.</p>
            <br>
            <br>
            <p>
                OUR FRIENDS FOUND IT VERY INCONVINIENT TO SEARCH FOR FLATS IN A NEARBY LOCATION. SO THE IDEA OF
                OF DEVELOPING THIS WEBSITE CAME INTO WHICH ALLOWS ACCESS TO VARIOUS HOUSES WITH PAYING GUEST
                OPTIONS.</p>
            </a>
        </div>
        <div class="col-md-4">
            <h3>TEAM</h3>
            <a href="#" id="footname"><p>CHINMAY SANKHE</p></a> &nbsp;&nbsp;&nbsp;
            <a href="#" id="footname"><p>RISHIL KIRTIKAR</p></a> &nbsp;&nbsp;&nbsp;
            <a href="#" id="footname"><p>ABHIRUCHI BHATTACHARYA</p></a> &nbsp;&nbsp;&nbsp;
            <a href="#" id="footname"><p>GRISHMA GURBANI</p></a> &nbsp;&nbsp;&nbsp;
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

            </div>
    
    </body>
</html>
