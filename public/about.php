<?php include 'templates/header.php'; ?>

  <style media="screen">
  body{
    margin:0 auto;
    padding:0px;
    text-align:center;
    width:100%;
    font-family: "Myriad Pro","Helvetica Neue",Helvetica,Arial,Sans-Serif;
  }

  #wrapper{
    margin:0 auto;
    padding:0px;
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
    height:400px;
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
    background-color:black;
    border-radius:10px;
  }

  #timeline li{
    position:relative;
    margin-top:20px;
    margin-bottom:20px;
    width:330px;
    height:70px;
    background-color:#A1A1A1;
    padding:15px;
    box-sizing:border-box;
    border-radius:10px;
    list-style-type:none;
    color:white;
    font-size:15px;
  }

  #timeline li:nth-child(odd){
    margin-right:10px;
    right:-10px;
  }

  #timeline li:nth-child(even){
    left:370px;
  }

  </style>




  <div id="wrapper">

    <div id="timeline">
      <div id="timeline_bar">
      </div>
      <li>Started building Beard Bros site! <?php $copyYear = 2018; echo $copyYear?></li>
      <li>It has survived not only five centuries, but also the leap into electronic typesetting</li>
      <li>Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
      <li>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum"</li>
    </div>

  </div>
<?php include 'templates/footer.php'; ?>
