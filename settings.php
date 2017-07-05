<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PARAM</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <script type="text/javascript" src="assets/js/frequency.min.js"></script>


  </head>
  <body>

<?php include 'inc/menu.php' ?>

<div class="container">
<div class="row">
<div class="col-sm-4 bord" style='padding:0'>
  <ul class="settingsUl">
  <li onclick="loadTab(0,this)">GENERAL</li>
  <li onclick="loadTab(1,this)">AFFICHAGE</li>
  <li onclick="loadTab(2,this)">EXTRA</li>
  <li onclick="loadTab(3,this)">COMPTES</li>
  <li onclick="loadTab(4,this)">FREUENCY</li>
  </ul>
</div>
<div class="col-sm-8 bord" style="border-left:none">
<div class="settingsWell" data-tab="0">
  <div class="inner">
<h1>GENERAL</h1>
<table class="settingsTable">
<tr>
  <td>KEY</td>
  <td><input type="text" class="form-control" name="val" value="" onkeyup="save(this)"></td>
</tr>
</table>

  </div>
</div>
<div class="settingsWell" data-tab="1">
  <div class="inner">
    <h1>AFFICHAGE </h1>

  </div>
</div>
<div class="settingsWell" data-tab="2">
  <div class="inner">
    <h1>EXTRA </h1>

  </div>
</div>

<div class="settingsWell" data-tab="3">
  <div class="inner">
    <h1>COMPTES </h1>

  </div>
</div>

<div class="settingsWell" data-tab="4">
  <div class="inner">
    <h1>FREQUENCY </h1>

  </div>
</div>


</div>

</div>
</div>
<script type="text/javascript" src="app/settings.js">

</script>




<script type="text/javascript">
window.setTimeout(function(){
  window.location.reload();
},18000)
</script>
  </body>
</html>
