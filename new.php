
<?php

include ("desing/header.php");
include ("desing/sidebar.php");

?>
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

                <!-- ---الاخبار--- -->
             
              <?php
include("desing/footer.php");

?>