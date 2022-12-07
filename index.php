<?php
require ("admin/function/connect.php");
include ("desing/header.php");
include ("desing/sidebar.php");

?>
        
          <!-- ---تنسيق الزراير-- -->
        <div class="butn">
          <button type="button" id="yester" class="btn btn-outline-success">مباريات الأمس</button>
          <button type="button" id="tod" class="btn btn-outline-warning">مباريات اليوم</button>
          <button type="button" id="tomo" class="btn btn-outline-danger">مباريات الغد</button>
        </div>
          
        <!-- ----جدوا مباريات اليوم----- -->
     
        <div class="today">
          <div class="liveMatches mb20"><h3>
            <a href="index.php">  مباريات اليوم بتوقيت جهازك</a>
            <p id="time"></p>
            
          </h3>
            
            <table width="100%" cellspacing="0" cellpadding="0" class="cellCenter">
            
            <?php
require("admin/function/connect.php");
$select_today = $connect -> query("SELECT * FROM today");

$counter = 0;

foreach($select_today as $row_today){


?>
  <tbody>
   <tr class="matchRow" >
    <td class="liveTeam">
    <img src="admin/images/<?php
$img=explode('/',$row_today['img']);
echo $img[0]; ?>" alt="">
    <div><?php echo$row_today['name'] ?></div>
      </td>
    <td class="liveDet">
    <a href="<?php echo$row_today['harf']?>" target="_blank">
    <div class="liveVersus"><?php echo$row_today['shote']?><br><span class="bgShare"></span><?php echo$row_today['goal']?>
    </div>
      </a>
      </td>
      <td class="liveTeam">
               
      <img src="admin/images/<?php
$img=explode('/',$row_today['image']);
echo $img[0]; ?>" alt="">

<div><?php echo$row_today['username'] ?></div></td>
<?php }?>
              </tr>   
              
              <!-- #######  -->
    
              </tbody></table></div>
             
            </div>

          <!-- -----مباريات الامس--- -->
          <div class="yesterday">
            <div class="liveMatches mb20"><h3>
              <a href="index.php">  مباريات الامس بتوقيت جهازك</a>
              <p id="timeing">  </p>
              
            </h3>
              
            <table width="100%" cellspacing="0" cellpadding="0" class="cellCenter">
            
            <?php
require("admin/function/connect.php");
$select_yesterday = $connect -> query("SELECT * FROM yesterday");

$counter = 0;

foreach($select_yesterday as $row_yesterday){


?>
  <tbody>
   <tr class="matchRow" >
    <td class="liveTeam">
    <img src="admin/images/<?php
$img=explode('/',$row_yesterday['img']);
echo $img[0]; ?>" alt="">
    <div><?php echo$row_yesterday['name'] ?></div>
      </td>
    <td class="liveDet">
    <a href="<?php echo$row_yesterday['harf']?>" target="_blank">
    <div class="liveVersus"><?php echo$row_yesterday['shote']?><br><span class="bgShare"></span><?php echo$row_yesterday['goal']?>
    </div>
      </a>
      </td>
      <td class="liveTeam">
               
      <img src="admin/images/<?php
$img=explode('/',$row_yesterday['image']);
echo $img[0]; ?>" alt="">

<div><?php echo$row_yesterday['username'] ?></div></td>
<?php }?>
              </tr>   
              
              <!-- #######  -->
    
              </tbody></table></div>
             
            </div>   
              
               
              <!-- -----مباريات الغد-- -->
              <div class="tomorrow">
                <div class="liveMatches mb20"><h3>
                  <a href="index.php">  مباريات الغد بتوقيت جهازك</a>
                  <p id="timet">  </p>
                  
                </h3>
                  
                <table width="100%" cellspacing="0" cellpadding="0" class="cellCenter">
            
            
                <?php
require("admin/function/connect.php");
$select_tomorrow = $connect -> query("SELECT * FROM tomorrow");

$counter = 0;

foreach($select_tomorrow as $row_tomorrow){


?>
  <tbody>
   <tr class="matchRow" >
    <td class="liveTeam">
    <img src="admin/images/<?php
$img=explode('/',$row_tomorrow['img']);
echo $img[0]; ?>" alt="">
    <div>
      <?php echo$row_tomorrow['name'] ?></div>
      </td>
    <td class="liveDet">
    <a href="<?php echo$row_tomorrow['harf']?>" target="_blank">
    <div class="liveVersus"><?php echo$row_tomorrow['shote']?><br><span class="bgShare"></span><?php echo$row_tomorrow['goal']?>
    </div>
      </a>
      </td>
      <td class="liveTeam">
               
      <img src="admin/images/<?php
$img=explode('/',$row_tomorrow['image']);
echo $img[0]; ?>" alt="">

<div><?php echo$row_tomorrow['username'] ?></div></td>
<?php }?>
                  
                  </tbody></table></div>
                  </div>
                  <br><br>
                  <!-- ----الاخبار----- -->
                 <!-- ---الاخبار--- -->
<div class="news_live">
<h2>احدث الأخيار العالمية </h2>
</div>

     <section class="post container">
     <?php
require("admin/function/connect.php");
$select_news = $connect -> query("SELECT * FROM news");

$counter = 0;

foreach($select_news as $row_news){


?>
          <div class="post-box">
          <img src="admin/images/<?php
$img=explode('/',$row_news['img']);
echo $img[0]; ?>" alt="" class="post-img">
              <h1 class="category"><?php echo$row_news['name'] ?></h1>
           
                  <p class="post-decription"><?php echo$row_news['comment'] ?></p>
          </div>
<?php }?>
       </section>


                 
<?php
include("desing/footer.php");

?>