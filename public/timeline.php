<?php include 'templates/header.php'; ?>
  <!-- Verticle Timeline Style -->
  <style media="screen">
  body{
    margin:0 auto;
    padding:0px;
    /*text-align:center;*/
    width:100%;
    font-family: "Georgia","Helvetica Neue",Helvetica,Arial,Sans-Serif;
  }

  #wrapper{
    margin:0 auto;
    text-align:center;
    width:995px;
  }

  #wrapper h1{
    margin-top:50px;
    font-size:45px;
  }

  #wrapper p{
    font-size:16px;
  }

  #timeline{
    position:relative;
    width:700px;
    height:800px;
    float:left;
    margin-left:145px;
  }

  #timeline_bar{
    padding: 0;
    list-style: none;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 10px;
    background-color:#763626;
    border-radius:10px;
  }

  #timeline li{
    position:relative;
    margin-top:20px;
    margin-bottom:20px;
    width:330px;
    height:100px;
    background-color:#336B87;
    padding:25px 0;
    box-sizing:border-box;
    border-radius:10px;
    list-style-type:none;
    color: #000000;
    font-size:20px;
  }

  #timeline li:nth-child(odd){
    margin-right:10px;
    right:-10px;

  }

  #timeline li:nth-child(even){
    left:370px;
  }

  </style>
<!--
Update timelene to refelct new project and business updates
-->
  <!-- Timeline -->
  <div id="wrapper">
    <h1>Beard Bros timeline</h1>
    <div id="timeline">
      <div id="timeline_bar">
      </div>
      <li>Started building Beard Bros site! Sep. 2018</li>
      <li>Search Functional Late Nov. 2018</li>
      <li>Forms functioning Dec. 2018</li>
      <li>Add Google anylitics late Dec. 2018</li>
      <li>Site live to the public Feb. 2019</li>
    </div>
  </div>
<?php include 'templates/footer.php'; ?>
