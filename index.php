<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
   <title>Bar charts created with pure CSS</title>
   <link rel="stylesheet" href="reset-font-grids.css" type="text/css">
   <link rel="stylesheet" href="base.css" type="text/css">
   <link rel="stylesheet" href="styles.css" type="text/css">
   <style type="text/css">
  
    .barchart{
      position:relative;
      font-weight:bold;
      width:400px;
      margin:0;
      padding:0;
      list-style:none;
      background:#eee;
      overflow:hidden;
      margin:1em 0;
      -moz-box-shadow:4px 4px 10px rgba(33,33,33,.8);
      -webkit-box-shadow:4px 4px 10px rgba(33,33,33,.8);
    }

    .barchart li{
      width:18px;
      float:left;
      display:block;
      background:#fc6;
      height:200px;
      margin:0;
      padding:0;
      border:1px solid #eee;
      border-right-width:0;
      border-left:none;
      border-bottom:none;
    }
  
    .barchart li span{
      position:absolute;
      left:-9999px;
      top:0;
      text-align:center;
      width:5em;
      margin:0;
    }

    .barchart li:hover{
      background:#693;
    }

    .barchart li:hover span{
      left:5px;
      z-index:10;
      top:5px;
    }


    #blue .barchart li {

       background: #3B559F;
    }

    #blue .barchart li:hover {

       background: #7085BE;
       border-color: #ddd;
    }

    #blue .barchart li:hover span {

       left: 99%;
       font-weight: bold;
       z-index: 10;
       color: #555;
       font-size: 50px;
       text-indent: -3.7em;
       right: 0;
       top: 0;
       text-align: right;
       border: none;
       width: auto;
    }   



    #violet .barchart li {

       background: #9D43DE;
    }

    #violet .barchart li:hover {

       background: #B887DB;
       border-color: #ddd;
    }

    #violet .barchart li:hover span {

       left: 99%;
       font-weight: bold;
       z-index: 10;
       color: #555;
       font-size: 50px;
       text-indent: -3.7em;
       right: 0;
       top: 0;
       text-align: right;
       border: none;
       width: auto;
    }   




    #vert .barchart li {

       background: #4C984D;
    }

    #vert .barchart li:hover {

       background: #90E390;
       border-color: #ddd;
    }

    #vert .barchart li:hover span {

       left: 3px;
       font-weight: bold;
       z-index: 10;
       color: #555;
       font-size: 50px;
       border: none;
       width: auto;
    }   
    
    /* funky bar */
    #funky .barchart li:hover span{
      background:#cfc;
      border:2px solid #393;
      padding:2px;
      font-size:110%;
      width:5em;
      text-align:center;
      -moz-border-radius:5px;
      -webkit-border-radius:5px;
      -moz-box-shadow:0 2px 2px rgba(0,0,0,.8);    
      -webkit-box-shadow:0 2px 2px rgba(0,0,0,.8);
    }

   

    #in{
      position:relative;
    }

    #in .barchart li{
      position:relative;
    }

    #in .barchart{
      padding-bottom:2em;
    }

    #in div{
      position:absolute;
      width:400px;
      height:2em;
      bottom:0;
      left:0;
      background:#999;
    }
    #in .barchart li:hover span{
      background:transparent;
      border:none;
      background:#fff;
      width:2em;
      font-weight:bold;
      z-index:10;
      -moz-border-radius:2px;
      -webkit-border-radius:2px;
    }


    #inner {position:relative;}
    #inner .barchart li{position: relative;background: #2B8FA3}
    #inner .barchart{padding-bottom:2em;}  
    #inner div{position:absolute;width:750px;height: 2em;bottom:0;left:0;background: #999;}  
    #inner .barchart li:hover span{color: #fff;background: #000;width: 2em;-moz-border-radius:4px;-webkit-border-radius:4px;}      
    #inner .barchart li:hover{background: #75A2AA;}
   </style>
</head>
<body>
<div id="doc" class="yui-t7">
   <div id="hd" role="banner"><h1>Bar charts</h1></div>
   <div id="bd" role="main">
	<div class="yui-g">


<pre><code>&lt;?php 
$values = '49,170,39,233,312,78,20,523';
$width = 600;
$height = 100;
$bargap = 0;
include('barcharts.php');
?&gt;
</code></pre>


<div id="vert">
<?php
$values = '49,170,39,233,312,78,20,523';
$width = 600;
$height = 100;
$bargap = 0;
include('barcharts.php');
?>
</div>

<pre><code>&lt;?php 
$values = '78,200,221,500,57.4,330,138';
$width = 700;
$height = 100;
$bargap = 0;
include('barcharts.php');
?&gt;
</code></pre>


<div id="blue">
<?php
$values = '78.2,200,221,380,57.4,330,138';
$width = 700;
$height = 100;
$bargap = 2;
include('barcharts.php');
?>
</div>


<pre><code>&lt;?php 
$values = '78,500,221,500,123.4,330,138';
$width = 700;
$height = 100;
$bargap = 0;
include('barcharts.php');
?&gt;
</code></pre>


<div id="violet">
<?php
$values = '78,500,221,500,123.4,330,138';
$width = 700;
$height = 100;
$bargap = 0;
include('barcharts.php');
?>
</div>


<pre><code>&lt;?php 
  $values = '400,20,30,233,312,78,20,67';
  $width = 600;
  $height = 100;
  $bargap = 0;  
  include('barcharts.php');
?&gt;
</code></pre>

<?php
  $values = '400,20,30,233,312,78,20,67';
  $width = 600;
  $height = 100;
  $bargap = 0;  
  include('barcharts.php');
?>


<pre><code>&lt;?php 
  $values = '12,3,23.3,44.3,9,20';
  $width = 402;
  $height = 200;
  $bargap = 5;  
  include('barcharts.php');
?&gt;
</code></pre>

<div id="funky">
<?php
  $values = '12,3,23.3,44.3,9,20';
  $width = 402;
  $height = 200;
  $bargap = 5;  
  include('barcharts.php');
?>
</div>


<pre><code>&lt;?php 
  $values = '400,20,30,233,312,78,20,67';
  $height = 200;
  $width = 400;
  $bargap = 0;
  include('barcharts.php');
?&gt;
</code></pre>

<div id="in">
<?php
  $values = '400,20,30,233,312,78,20,67';
  $height = 200;
  $width = 400;
  $bargap = 3;
  include('barcharts.php');
?>
<div></div>
</div>



<pre><code>&lt;?php 
  $values = '100,300,500,100,700,150,123,88,501,331';
  $height = 200;
  $width = 700;
  $bargap = 2;
  include('barcharts.php');
?&gt;
</code></pre>


<div id="inner">
<?php
  $values = '100,300,500,100,700,150,123,88,501,331';
  $height = 200;
  $width = 750;
  $bargap = 2;
  include('barcharts.php');
?>
<div></div>
</div><!-- end inner chart -->

<h2>Create Charts dynamically</h2>

<form action="index.php" method="get" id="f">
<div><label for="values">Values</label><input type="text" name="values" id="values" value="20,300,90,40,100" /></div>
<div><label for="width">Chart width</label><input type="text" name="width" id="width" value="400" /></div>
<div><label for="height">Chart height</label><input type="text" name="height" id="height" value="200" /></div>
<div><label for="bargap">Bar gap</label><input type="text" name="bargap" id="bargap" value="0" /></div>
<div><input type="submit" value="render graph" id="s"/></div>
</form>
<div id="output"></div>

	</div>
   </div>
   <div id="ft" role="contentinfo"><p>written by <a href="#">Adrian Statescu</a> using <a href="barcharts.phps">barcharts.php</a> AND <a href="doc.php">doc.php</a></p></div>
</div>
<script type="text/javascript" src="form.js"></script>
</body>
</html>
