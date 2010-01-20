<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
   <title>Bar charts created with pure CSS</title>
   <link rel="stylesheet" href="reset-font-grids.css" type="text/css">
   <link rel="stylesheet" href="base.css" type="text/css">
   <style type="text/css">
html,body{background:#333;color:#000;}
a{color: #69c;}
#doc{background:#fff;border:1em solid #fff;}
h1{margin:0;padding:.2em 0;font-size:200%;font-family:calibri,helvetica,arial,sans-serif;color:#319697;}
h2{margin:0;padding:.2em 0;font-size:150%;font-family:calibri,helvetica,arial,sans-serif;color:#319697;}
pre{background: #eee;padding: .2em;border: 1px solid #999;}
pre code {background: #ffffDD}
form{-moz-border-radius:10px;-webkit-border-radius:10px;background:#82C165;color:#fff;  width:20em;  margin:1em 0;  font-weight:bold;padding:1em}
form label{float: left;width: 7em;}
form div{overflow: hidden;padding: .2em;}
#ft{text-align:right;margin:3em 0 0 0;font-size:80%;}

.barchart{
position: relative;
width: 400px;
margin:1em 0;
padding:0;
list-style:none;
background: #eee;
overflow: hidden;
-moz-box-shadow:4px 4px 10px rgba(33,33,33,.8);
-webkit-box-shadow:4px 4px 10px rgba(33,33,33,.8);
}

.barchart li{
float: left;
width: 18px;
height: 200px;
list-style: none;
display: block;
background: #5F6ECC;
border: 1px solid #eee;
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
 background:#848ECD;
 border-color: #ddd;
}

.barchart li:hover span{
      left:5px;
      z-index:10;
      top:5px;
      font-size:50px;
      width:auto;
      color:rgba(0,0,0,.7);
      background:transparent;
      border:none;
      -moz-box-shadow:none;
      -webkit-box-shadow:none;
      left:99%;
      text-align:right;
      text-indent:-3.4em;
      right:0;
      font-weight:bold;
      z-index:10;
      top:0;
}



.exbarchart{
position: relative;
width: 600px;
margin:1em 0;
padding:0;
list-style:none;
background: #eee;
overflow: hidden;
-moz-box-shadow:4px 4px 10px rgba(33,33,33,.8);
-webkit-box-shadow:4px 4px 10px rgba(33,33,33,.8);
}

.exbarchart li{
float: left;
width: 75px;
height: 100px;
list-style: none;
display: block;
background: #319697;
}




ul.ex2barchart{
position: relative;
width: 600px;
margin:1em 0;
padding:0;
height:100px;
list-style:none;
background: #eee;
overflow: hidden;
}


ul.ex2barchart li{
float: left;
width: 75px;
height: 100px;
list-style: none;
display: block;
background: #319697;
}

ul.ex2barchart li span{
 position:absolute;
 left:-9999px;
 top:0;
}

ul.ex2barchart li:hover{
 background:#99B6B6;
}

ul.ex2barchart li:hover span{
   left: 1em;
   top: 1em;
   font-weight: bold;
}



ul.ex3barchart{
position: relative;
width: 600px;
margin:1em 0;
height:100px;
padding:0;
list-style:none;
background: #eee;
overflow: hidden;
}


ul.ex3barchart li{
float: left;
width: 75px;
height: 100px;
list-style: none;
display: block;
background: #319697;
border-top:1px solid #eee;
}

ul.ex3barchart li span{
 position:absolute;
 left:-9999px;
 top:0;
}

ul.ex3barchart li:hover{
 background:#99B6B6;
}

ul.ex3barchart li:hover span{
   left: 1em;
   top: 1em;
   font-weight: bold;
}



ul.ex4barchart{
position: relative;
width: 600px;
margin:1em 0;
height:100px;
padding:0;
list-style:none;
background: #eee;
overflow: hidden;
-moz-box-shadow:4px 4px 10px rgba(33,33,33,.8);
-webkit-box-shadow:4px 4px 10px rgba(33,33,33,.8);
}


ul.ex4barchart li{
float: left;
width: 75px;
height: 100px;
list-style: none;
display: block;
background: #2B8EBB;
border-top:1px solid #eee;
}

ul.ex4barchart li span{
 position:absolute;
 left:-9999px;
 top:0;
}

ul.ex4barchart li:hover{
 background:#8DB0C0;
 border-color: #ddd;
}

ul.ex4barchart li:hover span{
      left:5px;
      z-index:10;
      top:5px;
      font-size:50px;
      width:auto;
      color:rgba(0,0,0,.7);
      background:transparent;
      border:none;
      -moz-box-shadow:none;
      -webkit-box-shadow:none;
      left:99%;
      text-align:right;
      text-indent:-3.4em;
      right:0;
      font-weight:bold;
      z-index:10;
      top:0;
}



</style>
</head>
<body>
<div id="doc" class="yui-t7">
   <div id="hd" role="banner"><h1>Bar charts with pure CSS</h1></div>
   <div id="bd" role="main">
	<div class="yui-g">

<div class="fancy">
<?php
        $values = '30,420,30,133,289,178,20,67';
        $height = 100;
        $width = 600;
        $bargap = 0;
        include('barcharts.php');
?>
</div>
<p>Here's how this work.</p>
        </div>
	<div class="yui-g">
               <div class="yui-u first">
                    <p>Starting with a simple nested list:</p>
<pre><code>
&lt;ul&gt;
     &lt;li&gt;30&lt;/li&gt;
     &lt;li&gt;420&lt;/li&gt;
     &lt;li&gt;30&lt;/li&gt;
     &lt;li&gt;133&lt;/li&gt;
     &lt;li&gt;289&lt;/li&gt;
     &lt;li&gt;178&lt;/li&gt;
     &lt;li&gt;20&lt;/li&gt;
     &lt;li&gt;67&lt;/li&gt;
&lt;/ul&gt;
</code></pre>
               </div>
               <div class="yui-u">
                    <p>This renders normally something like this:</p>

             <ul>
               <li>30</li>
               <li>420</li>
               <li>30</li>
               <li>133</li>
               <li>289</li>
               <li>178</li>
               <li>20</li>
               <li>67</li>
             </ul>



               </div>
          
   </div>

	<div class="yui-g">
        <p>Adding a bit more CSS we can turn them into bars</p>
               <div class="yui-u first">

<pre><code>
ul{
position: relative;
width: 400px;
margin:1em 0;
padding:0;
list-style:none;
background: #eee;
overflow: hidden;
}
</code></pre>

               </div>
               <div class="yui-u">
<pre><code>
li{
float: left;
width: 18px;
height: 100px;
list-style: none;
display: block;
background: #319697;
}
</code></pre>

               </div>
        </div>

	<div class="yui-g">
             <ul class="exbarchart">
               <li>30</li>
               <li>420</li>
               <li>30</li>
               <li>133</li>
               <li>289</li>
               <li>178</li>
               <li>20</li>
               <li>67</li>
             </ul>
        </div>


	<div class="yui-g">
<p>
We use overflow on the UL to contain the floated LIs.The display of the values is nice in the Li but the problem is that when the bar
is not big enough, we wouldn't be able to read them. We could use text-indent to hide the texts, but let's add a span instead to have a better handle:
</p>
<pre><code>
&lt;ul&gt;
  &lt;li&gt;&lt;span&gt;30&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;span&gt;420&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;span&gt;30&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;span&gt;133&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;span&gt;289&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;span&gt;178&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;span&gt;20&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;span&gt;67&lt;/span&gt;&lt;/li&gt;
&lt;/ul&gt;
</code></pre>
        </div>

	<div class="yui-g">
<p>Adding the right CSS, we can heve a hover bar with the text displayed on the top left:</p>
               <div class="yui-u first">
<pre><code>
ul{
position: relative;
width: 400px;
margin:1em 0;
padding:0;
height:100px;
list-style:none;
background: #eee;
overflow: hidden;
}


li{
float: left;
width: 18px;
height: 100px;
list-style: none;
display: block;
background: #319697;
}
</code></pre>
               </div>

               <div class="yui-u">
<pre><code>

li span{
 position:absolute;
 left:-9999px;
 top:0;
}

li:hover{
 background:#99B6B6;
 border-color: #ddd;
}


li:hover span{
   left: 1em;
   top: 1em;
   font-weight: bold;
}

</code></pre>
               </div>
        </div>

 	<div class="yui-g">
             <p>Move your mouse over the bar to see it in action: </p>

             <ul class="ex2barchart">
               <li><span>30</span></li>
               <li><span>420</span></li>
               <li><span>30</span></li>
               <li><span>133</span></li>
               <li><span>289</span></li>
               <li><span>178</span></li>
               <li><span>20</span></li>
               <li><span>67</span></li>
             </ul>
         
        </div>


 	<div class="yui-g">
         <p>Now how do we get this to be bar charts? Using a border on the top that is the same background colour than the UL and some maths.</p>
         <ul>
            <li>You need to know which is the highest number in the list and divide the height of the list by this number. This give you the scaling factor.</li>
            <li>You then multiply the values with the factor and set the height of border accordingly.</li>
            <li>You need to round the values to the nearest full number.</li>
         </ul>

<pre><code>
&lt;ul&gt;
  &lt;li style="border-top-width: 92px;"&gt;&lt;span&gt;30&lt;/span&gt;&lt;/li&gt;
  &lt;li style="border-top-width: 0px;"&gt;&lt;span&gt;420&lt;/span&gt;&lt;/li&gt;
  &lt;li style="border-top-width: 92px"&gt;&lt;span&gt;30&lt;/span&gt;&lt;/li&gt;
  &lt;li style="border-top-width: 68px;"&gt;&lt;span&gt;133&lt;/span&gt;&lt;/li&gt;
  &lt;li style="border-top-width: 31px;"&gt;&lt;span&gt;289&lt;/span&gt;&lt;/li&gt;
  &lt;li style="border-top-width: 57px;"&gt;&lt;span&gt;178&lt;/span&gt;&lt;/li&gt;
  &lt;li style="border-top-width: 95px;"&gt;&lt;span&gt;20&lt;/span&gt;&lt;/li&gt;
  &lt;li style="border-top-width: 84px;"&gt;&lt;span&gt;67&lt;/span&gt;&lt;/li&gt;
&lt;/ul&gt;
</code></pre>

        <p>The only change in the CSS is to add a border:</p> 


               <div class="yui-u first">
<pre><code>
ul{
position: relative;
width: 400px;
height:100px;
margin:1em 0;
padding:0;
list-style:none;
background: #eee;
overflow: hidden;
}


li{
float: left;
width: 18px;
height: 100px;
list-style: none;
display: block;
background: #319697;
<strong>border-top: 1px solid #eee;</strong>
}
</code></pre>
               </div>

               <div class="yui-u">
<pre><code>

li span{
 position:absolute;
 left:-9999px;
 top:0;
}

li:hover{
 background:#99B6B6;
 border-color: #ddd;
}


li:hover span{
   left: 1em;
   top: 1em;
   font-weight: bold;
}

</code></pre>
               </div>

        </div>
        <div class="yui-g">

<ul class="ex3barchart">
  <li style="border-top-width: 92px;"><span>30</span></li>
  <li style="border-top-width: 0px;"><span>420</span></li>
  <li style="border-top-width: 92px"><span>30</span></li>
  <li style="border-top-width: 68px;"><span>133</span></li>
  <li style="border-top-width: 31px;"><span>289</span></li>
  <li style="border-top-width: 57px;"><span>178</span></li>
  <li style="border-top-width: 95px;"><span>20</span></li>
  <li style="border-top-width: 84px;"><span>67</span></li>
</ul>


        </div>


        <div class="yui-g">

<ul class="ex4barchart">
  <li style="border-top-width: 92px;"><span>30</span></li>
  <li style="border-top-width: 0px;"><span>420</span></li>
  <li style="border-top-width: 92px"><span>30</span></li>
  <li style="border-top-width: 68px;"><span>133</span></li>
  <li style="border-top-width: 31px;"><span>289</span></li>
  <li style="border-top-width: 57px;"><span>178</span></li>
  <li style="border-top-width: 95px;"><span>20</span></li>
  <li style="border-top-width: 84px;"><span>67</span></li>
</ul>


        </div>

        <div class="yui-g">
        <h2>Automating the process</h2>
<p>
Doing this by hand is annoying, and computers love to do calculations for us. This is why I packaged the trick up into a PHP script.The above chart was done with the following code:
<pre><code>&lt;?php
 $values = '30,420,30,133,289,178,20,67';
 $height = 100;
 $width = 600;
 $bargap = 0;
 include('barcharts.php');
?&gt;
</code></pre>
</p>
<p>This does not only calculate the bar height also the width. You can also apply a gap in between the bars.</p>

        <h2>Using as a Web Service</h2>
         <p>you can also use this script as a web service by giving the parameters over the URI:</p>
            <a href="barcharts.php?values=30,420,30,133,289,178,20,67&height=100&width=600&bargap=0">barcharts/csscharts.php?values=400,20,30,233,312,78,20,67&height=100&width=600&bargap=0</a>

         <p>The returned HTML is a UL with the right inline measures and a class called 'barchart'. Go here and styling it.</p>
         <p>If you add a format parameter with a value 'json' you get it back as a callback to the function csschart().</p>
            <a href="barcharts.php?values=30,420,30,133,289,178,20,67&height=100&width=600&bargap=0&format=json">barcharts/csscharts.php?values=400,20,30,233,312,78,20,67&height=100&width=600&bargap=0&format=json</a>
<pre><code>
csscharts({chart: "&lt;ul class=\"barchart\" style=\"width: 600px;height: 100px;\"&gt;
                   &lt;li style=\"width:75px; border-top-width: 92px;\"&gt;&lt;span&gt;30&lt;/span&gt;&lt;/li&gt;
                   &lt;li style=\"width:75px; border-top-width: 0px;\"&gt;&lt;span&gt;420&lt;/span&gt;&lt;/li&gt;
                   &lt;li style=\"width:75px; border-top-width: 92px;\"&gt;&lt;span&gt;30&lt;/span&gt;&lt;/li&gt;
                   &lt;li style=\"width:75px; border-top-width: 68px;\"&gt;&lt;span&gt;133&lt;/span&gt;&lt;/li&gt;
                   &lt;li style=\"width:75px; border-top-width: 31px;\"&gt;&lt;span&gt;289&lt;/span&gt;&lt;/li&gt;
                   &lt;li style=\"width:75px; border-top-width: 57px;\"&gt;&lt;span&gt;178&lt;/span&gt;&lt;/li&gt;
                   &lt;li style=\"width:75px; border-top-width: 95px;\"&gt;&lt;span&gt;20&lt;/span&gt;&lt;/li&gt;
                   &lt;li style=\"width:75px; border-top-width: 84px;\"&gt;&lt;span&gt;67&lt;/span&gt;&lt;/li&gt;
                   &lt;/ul&gt;"}) 
</code></pre>            

        </div>

        <div class="yui-g">
        <h2>Create Charts Dinamically</h2>
             <div class="yui-u first">
<h2>HTML form</h2>
<pre><code>
<?php 
$form = file_get_contents('form.html');
echo htmlentities($form);
?>
</code></pre>

             </div>
             <div class="yui-u">
<h2>form JS</h2>
<pre><code>
<?php 
$form = file_get_contents('form.js');
echo htmlentities($form);
?>
</code></pre>

             </div> 
        </div>
<p>You can use that to create charts dynamically with JavaScript. Try it out by submiting the form:</p>

<?php
include('form.html');
echo'<div id="output"></div>';
?>

   </div><!--end main -->
   <div id="ft" role="contentinfo"><p>Written by <a href="http://thinkphp.ro">thinkphp.ro</a> AND <a href="index.php">in action</a></p></div>
</div>
<script type="text/javascript" src="form.js"></script>
</body>
</html>
