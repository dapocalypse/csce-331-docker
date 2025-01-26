<html>

<!-- HEAD section ............................................................................ -->
<head>
  <title> Jackie's Experimental Web Site </title>


  <!-- javascript functions -->
  <script>
  function randText() {
      let randomBits = ["hello world", "random thoughts", "pinky and the brain"];
      document.getElementById("demo").innerHTML = randomBits[Math.floor(Math.random()*3)];
  }
  </script>

  <!-- style -->
 
  <!--
  <style>
    div.defaultFont {
        font-family: Helvetica, Arial, sans-serif;
    }
    
    div.secondaryFont {
        font-family: serif;
    }

    h3 {
        color: blue;
    }
    <link href="default.css" rel="stylesheet" type="text/css>
  </style> -->

  <LINK REL=StyleSheet HREF="simple.css" TYPE="text/css" MEDIA=screen>
  

</head>

<!-- BODY section ............................................................................. -->
<body>
<div class="defaultFont">

<!-- PHP testing area ................................ --> 
<?php
   require_once("proc_csv.php");

   echo "<h1> Jackie's Experimental CSCE 331 Docker Web Site </h1>\n";

   echo "<h3>CSV Parser Testing</h3>\n";

   echo "<h4>Selected Columns</h4>\n";
   proc_csv("dat-doublequote-comma.csv", ",", "\"", "1:3");
   proc_csv("dat-doublequote-tab.csv", "\t", "\"", "1:3");
   proc_csv("dat2-doublequote-comma.csv", ",", "\"", "1:3");
   proc_csv("dat2-doublequote-tab.csv", "\t", "\"", "1:3");
   proc_csv("dat2-singlequote-tab.csv", "\t", "'", "1:3");

   echo "<h4>All Columns</h4>\n";
   proc_csv("dat-doublequote-comma.csv", ",", "\"", "ALL");
   proc_csv("dat-doublequote-tab.csv", "\t", "\"", "ALL");
   proc_csv("dat2-doublequote-comma.csv", ",", "\"", "ALL");
   proc_csv("dat2-doublequote-tab.csv", "\t", "\"", "ALL");
   proc_csv("dat2-singlequote-tab.csv", "\t", "'", "ALL");
?>
</body>

</html>

