<!--header -->

<div class="header" >
  <a href="index.php" class="logo">Trade Chronicle</a>
 
  <div class="header-right">
  <!-- <a href="http://commerce.gov.in/" style="float:right;padding:0px;"><img src="logo.jpg" style="float:right;margin-left:20px;padding:0px;verticle-align:center;width:70px;height:70px;border-radius:50%;"></a> -->

  <div class="dropdown">
    <button class="dropbtn active">States 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="index.php?st=1">Gujarat</a>
      <a href="index.php?st=2">Maharashtra</a>
      <a href="index.php?st=3">Tamil nadu</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn active">Countries 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="index.php?cn=1">Japan</a>
      <a href="index.php?cn=2">Italy</a>
      <a href="index.php?cn=3">France</a>
      
    </div>
  </div>  
    <?php
      if(isset($_SESSION['user'])) 
      echo '<a class="active " href="logout.php">logout</a>';
      else
      echo '<a class="active" href="login.php">login</a>';
    
    ?>
    
    <!--google translate-->
  <div style="overflow:hidden;">
  <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
  </div>
  <!--google translate-->
  
  </div><br><br><br>
  <h4 style="float:left;padding:2px;margin:0px;color:white;margin-left:25px;">I T I H A S - International Trade of India History | Anecdotes | Stories</h4> 
</div>


<!--header completed-->
<!--subnav-->
<div id="myHeader">

<?php if(!isset($_GET['cn']) && !isset($_GET['st'])) { ?>
<button class="tablink" onclick="openPage('Home', this, '#ff9966')"   
  <?php if($page=='home'||$page=='timeline'||$page=='story'||$page=='todayinhistory'||$page=='anecdote'){echo 'id="defaultOpen"';}?> >History</button>
<button class="tablink" onclick="openPage('News', this, '#ffcc66')"
  <?php if($page=='blog'||$page=='fact'||$page=='news'||$page=='trendingnow'){echo 'id="defaultOpen"';}?>>Times Now</button>

<div id="Home" class="tabcontent">
<button class="timetravel" id="H" 
 <?php if($page=='timeline'){echo 'style="background-color:#555"';}?>
onclick="location.href='timeline.php';">Trader's Cafe</button>
<button class="timetravel" id="H" 
<?php if($page=='story'){echo 'style="background-color:#555"';}?>
onclick="location.href='story.php';">Stories</button>
<button class="timetravel" id="H"
<?php if($page=='todayinhistory'){echo 'style="background-color:#555"';}?>
onclick="location.href='todayinhistory.php';">Today in history</button>
<button class="timetravel" id="H"
<?php if($page=='anecdote'){echo 'style="background-color:#555"';}?>
onclick="location.href='anecdote.php';">Anecdotes</button>
</div>

<div id="News" class="tabcontent">
<button class="timesnow" id="N" <?php if($page=='trendingnow'){echo 'style="background-color:#555"';}?>
onclick="location.href='trendingnow.php';">Trending Now</button>
<button class="timesnow" id="N" <?php if($page=='news'){echo 'style="background-color:#555"';}?>
onclick="location.href='news.php';">News Feeds</button>
<button class="timesnow" id="N" <?php if($page=='fact'){echo 'style="background-color:#555"';}?>
onclick="location.href='facts.php';">Top Facts</button>
<button class="timesnow" id="N" <?php if($page=='blog'){echo 'style="background-color:#555"';}?>
onclick="location.href='blog.php';">Blogs</button>
</div>

<?php } ?>
<!--div id="News" class="tabcontent"-->
<?php if (isset($_GET['st'])) {

  # code...
?> 
<div> 
<button class="timesnow" id="N" <?php if($page=='trendingnow'){echo 'style="background-color:#555"';}?>
onclick="location.href='commodity.php?st=<?php echo $_GET['st'];?>';">Commodities</button>
<button class="timesnow" id="N" <?php if($page=='news'){echo 'style="background-color:#555"';}?>
onclick="location.href='rawmaterial.php?st=<?php echo $_GET['st'];?>';">Raw Materiels</button>
<button class="timesnow" id="N" <?php if($page=='fact'){echo 'style="background-color:#555"';}?>
onclick="location.href='fuels.php?st=<?php echo $_GET['st'];?>';">Fuels</button>
<button class="timesnow" id="N" <?php if($page=='blog'){echo 'style="background-color:#555"';}?>
onclick="location.href='goods.php?st=<?php echo $_GET['st'];?>';">Manufactured Goods</button>
</div>
<?php } ?>
<!--/div-->


<?php if (isset($_GET['cn'])) {

  # code...
?> 
<div> 
<button class="timesnow" id="N" <?php if($page=='trendingnow'){echo 'style="background-color:#555"';}?>
onclick="location.href='commodity.php?cn=<?php echo $_GET['cn'];?>';">Commodities</button>
<button class="timesnow" id="N" <?php if($page=='news'){echo 'style="background-color:#555"';}?>
onclick="location.href='silk.php?st=$_GET['cn']';">Raw Materiels</button>
<button class="timesnow" id="N" <?php if($page=='fact'){echo 'style="background-color:#555"';}?>
onclick="location.href='dye.php?st=$_GET['cn']';">Fuels</button>
<button class="timesnow" id="N" <?php if($page=='blog'){echo 'style="background-color:#555"';}?>
onclick="location.href='cotton.php?st=$_GET['cn']';">Manufactured Goods</button>
</div>
<?php } ?>

</div>
<script type="text/javascript"> 
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
<!--subnav complete-->
