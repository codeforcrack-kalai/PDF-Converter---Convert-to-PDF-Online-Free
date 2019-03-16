<!DOCTYPE html>
<html lang="en">
<head>
  <title>PDF to  DOC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Lato|Raleway|Source+Sans+Pro" rel="stylesheet">
  <style type="text/css">

 
  body {
font-family: 'Source Sans Pro', sans-serif;

  -webkit-font-smoothing: antialiased;
  background-color: white;
  overflow-x: hidden;
}
    
 .navbar-inverse .navbar-nav>li>a:hover
{
    background-color:rgb(235, 137, 26);
    color:#000;

}


.active
{

  border-bottom:1px solid rgb(235, 137, 26) ;
  
}


.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width:100%;
    height: 300px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}

.services-nav-item-icon {
    width: 42px;
    height: 42px;
    margin-left: 50%;
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
}

.box__dragndrop,
.box__uploading,
.box__success,
.box__error {
  display: none;
}

.files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 35%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}
.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: 10px;
    left: 0;  pointer-events: none;
    width: 100%;
    right: 0;
    height: 57px;
    content: " or drag it here. ";
    display: block;
    margin: 0 auto;
    color: #2ea591;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
}

h1 {
    font-size: 32px;
    line-height: 1.5;
    font-weight: 600;
    color: #262626;
    margin: 0;
}
h1 {
    font-size: 2em;
    margin: 0.67em 0;
}


ul {
  overflow: auto;
}

ul li {
  list-style-type: none;
  float: right;
}

ul li a i {
  background: #205D7A;
  color: #fff;
  width: 30px;
  height: 30px;
  border-radius: 20px;
  font-size: 15px;
  text-align: center;
  margin-right: 10px;
  padding-top: 15%;
}
  </style>
</head>
  
<body onload="loadDoc();">
 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:rgb(249, 249, 249);height:83px;border-bottom:1px solid rgb(249, 249, 249);">
      <!--
    <div class="alert alert-dismissible alert-info">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Merry Christmas Wishes From Eray technology and Solutons !</strong> .
</div>-->
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="padding-top:1px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="padding-top:0px;">
                <img class="img-responsive" src="images/logo.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" style="padding-top:15px;background-color:rgb(249, 249, 249);">
                <ul class="nav navbar-nav">
                    
                    <li>
                     <a href="#" class="btn btn-info" role="button" style="background-color:inherit;color:#000;border: 2px solid #2b90e2 ;">Register</a>
                    </li>   

                    <li>
                    	&nbsp;&nbsp;&nbsp;&nbsp;

                    </li>

                     <li>
                     <a href="#" class="btn btn-info" role="button" style="background-color:inherit;color:#000;border: 2px solid #2b90e2">Login</a>
                    </li>   
					
					
                   
					
					<!--<li class="dropdown">
                        <a href="projects.php?opt=cpro" style="color:#000;"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">PROJECTS <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                         
                          <li class="divider"></li>
                          <li ><a href="projects.php?opt=cpro">CURRENT PROJECTS</a></li>
                          <li class="divider"></li>
                          <li><a href="projects.php?opt=compro"> COMPLETED PROJECTS</a></li>
                        </ul>
                      </li>-->

				



                             <li >
                  
                    </li>
                </ul>
      </div>
     

            <!-- /.navbar-collapse -->
        </div>

        <!-- /.container 

           -->
  
    </nav>	



    
   <div class="container-fluid" style="background-color:#e6e6e6;" >
   
    <div class="container" >
      <br><br><br><br>
      <div class="container">
  <div class="row">
     <div class="col-md-12">
    <center> <h1></h1>


<script type="text/javascript">
  var http = new XMLHttpRequest();
var url = "<?php echo $_REQUEST['link']; ?>";
var params = "input=download&file=<?php echo $_REQUEST['link']; ?>&outputformat=doc";
http.open("POST", url, true);

//Send the proper header information along with the request
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        alert(http.responseText);
    }
}
http.send(params);
</script>






<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     var s = this.responseText;
    var obj = JSON.parse(s);
   // Conversion finished!

    var er=obj.message;
    if(er=="Conversion finished!")
    {
document.getElementById("demo").innerHTML="Awesome! Your PDF file has now successfully been converted into an awesome DOC ! :)";
//document.getElementById("demo").innerHTML=obj.message;
        var li=obj.output.url;
            document.getElementById("myAnchor").href =obj.output.url;
             document.getElementById("myAnchor").innerHTML = "Download";
    }
    else
    {
      document.getElementById("demo").innerHTML=obj.message;
    }

      //document.getElementById("demo").innerHTML=obj.message;
        //var li=obj.output.url;
            //document.getElementById("myAnchor").href =obj.output.url;
             //document.getElementById("myAnchor").innerHTML = "Download";

        // document.getElementById("abc").href=li;
    }
  };
  xhttp.open("GET", "<?php echo $_REQUEST['link']; ?>", true);
  xhttp.send();

  setTimeout(loadDoc, 2000);
}
</script>
</center> 
<br>

          </div>
    <div class="col-md-12">

      
              <center>

<h1 id="demo"></h1>

                  <img class="img-responsive" src="https://www.marketing-mojo.com/wp-content/uploads/2013/11/linkein_ad_728x90.jpg">

<p><a id="myAnchor" href=""></a></p>



                </center> 
     
            
  >
        
        
    </div>
    
  </div>
</div>
  <br><br><br><br><br><br>  
</div>
</div>


  

<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <br>   <br>
        <center><img src="img/bulb.svg?h=8e8f4997" alt=""><br>
       <b>How to compress a PDF</b>

 <br> </center>
<p >Just drag-and-drop your PDF file in the box above, wait for the compression to complete and download your file. It's that simple.</p>
      </div>
        <div class="col-lg-4"><br>   <br>
 <center>
  <img src="img/lock.svg?h=c0ed051c" alt=""><br>
       <b> Security guaranteed</b> <br></center>

<p>Your files will be permanently deleted from our server after one hour. No one has access to your files and privacy is 100% guaranteed.</p>
      </div>
        <div class="col-lg-4">   <br>   <br>
 <center>
      
       <img src="img/thumb.svg?h=4e815732" alt=""> <br>
       <b>Easy to use.</b> </center>

<p>Drag and drop your file, wait a few seconds while it shrinks, and download it with a single click. The process is quick and secure.</p>
      </div>
    </div>
   <br>   <br> 
<hr>
     <div class="row">
      <div class="col-lg-4">
        <br>
       <b>Convert from PDF</b>
 <br> <br>
<a href="word-to-pdf.htm" style="color:#000;    font-weight: 600;
    font-size: 14px;
    line-height: 30px;font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    font-stretch: normal; "> PDF to DOCX </a><br>
<a href="pdf-to-html.htm" style="color:#000;    font-weight: 600;
    font-size: 14px;
    line-height: 30px;font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    font-stretch: normal; "> PDF to HTML </a>
    <br>
<a href="pdf-to-rtf.htm" style="color:#000;    font-weight: 600;
    font-size: 14px;
    line-height: 30px;font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    font-stretch: normal; "> PDF to RTF </a>

     <br>
<a href="pdf-to-jpg.htm" style="color:#000;    font-weight: 600;
    font-size: 14px;
    line-height: 30px;font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    font-stretch: normal; "> PDF to JPG </a>

     <br>
<a href="pdf-to-png.htm" style="color:#000;    font-weight: 600;
    font-size: 14px;
    line-height: 30px;font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    font-stretch: normal; "> PDF to PNG </a>
      </div>
        <div class="col-lg-4"><br>
       <b> Convert from CSV</b> <br><br>

       <a href="csv-to-pdf.htm" style="color:#000;    font-weight: 600;
    font-size: 14px;
    line-height: 30px;font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    font-stretch: normal; "> CSV to PDF </a><br>
<a href="csv-to-xls.htm" style="color:#000;    font-weight: 600;
    font-size: 14px;
    line-height: 30px;font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    font-stretch: normal; "> CSV to XLS </a>
    <br>
<a href="csv-to-rtf.htm" style="color:#000;    font-weight: 600;
    font-size: 14px;
    line-height: 30px;font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    font-stretch: normal; "> CSV to RTF </a>

     <br>
<a href="csv-to-jpg.htm" style="color:#000;    font-weight: 600;
    font-size: 14px;
    line-height: 30px;font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    font-stretch: normal; "> CSV to JPG </a>

     <br>
<a href="csv-to-png.htm" style="color:#000;    font-weight: 600;
    font-size: 14px;
    line-height: 30px;font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    font-stretch: normal; "> CSV to PNG </a>

      </div>
        <div class="col-lg-4">
       <br>
       <b>Compress</b>
         <br><br>
<a href="pdf-compress.htm" style="color:#000;    font-weight: 600;
    font-size: 14px;
    line-height: 30px;font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    font-stretch: normal; "> PDF Compress </a>
    <br><br><br><br><br>

     <ul>
<li><a href="http://facebook.com/"><i class="fa fa-facebook"></i></a></li>
<li><a href="http://linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
<li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
<li><a href="http://plus.google.com/"><i class="fa fa-google-plus"></i> </a></li>
</ul>

      </div>
    </div>

       <br>   <br> 
  </div>
</div>


<div class="container-fluid" style="background-color:#e6e6e6;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h6 style="text-align: right;"><b>&nbsp;&nbsp;&nbsp;About &nbsp;&nbsp;&nbsp; Help  &nbsp;&nbsp;&nbsp; Blog  &nbsp;&nbsp;&nbsp; Developers &nbsp;&nbsp;&nbsp;  Privacy and Terms</b></h6></div></div></div></div>



<div class="container-fluid" >
  <div class="container">
    <div class="row">



        <div class="col-lg-12"> 
      </div>
    </div>
  </div>
</div>

 
     <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</body>
    

</html>

