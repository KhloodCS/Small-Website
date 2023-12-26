<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEEFLYER - Sale</title>
</head>
<body>
    <!-------------------include header-------------------------->

    <?php include 'layout/header.php';
?>


    <!-------------------Body-------------------------->
      <!-------------------Pictures Gallery-------------------------->
      <div class="backgroundgallery">
      <div class="divgallery">
      <h2>معرض الصور لعروض متاجر SEE FLYER</h2>

      <div class="containergallery">
        <div class="mySlides">
          <div class="numbertext">1 / 6</div>
          <img src="image/gallery1.jpg"alt="التميمي" >
        </div>
      
        <div class="mySlides">
          <div class="numbertext">2 / 6</div>
          <img src="image/gallery2.jpg" alt="النهدي">
        </div>
      
        <div class="mySlides">
          <div class="numbertext">3 / 6</div>
          <img src="image/gallery3.jpg" alt="بنده">
        </div>
          
        <div class="mySlides">
          <div class="numbertext">4 / 6</div>
          <img src="image/gallery4.jpg" alt="المتحدة"> 
        </div>
      
        <div class="mySlides">
          <div class="numbertext">5 / 6</div>
          <img src="image/gallery5.jpg" alt="كارفور">
        </div>
          
        <div class="mySlides">
          <div class="numbertext">6 / 6</div>
          <img src="image/gallery6.jpg" alt="الدواء">
        </div>
          
        <a class="prev" onclick="plusSlides(-1)">❯</a>
        <a class="next" onclick="plusSlides(1)">❮</a>
        
        <div class="caption-container1">
          <p id="caption"></p>
        </div>
      
        <div class="row">

          <div class="column1">
              <!-- Thumbnail 1 -->
          <img class="demo cursor" src="image/gallery1.jpg" onclick="currentSlide(1)"alt="عروض منتجات المراعي بمتاجر التميمي">
          </div>
          <div class="column1">
              <!-- Thumbnail 2 -->
            <img class="demo cursor" src="image/gallery2.jpg" onclick="currentSlide(2)" alt="عروض صيدليات النهدي">
          </div>
          <div class="column1">
              <!-- Thumbnail 3 -->
            <img class="demo cursor" src="image/gallery3.jpg"  onclick="currentSlide(3)" alt="عروض الفواكه بمتاجر بنده">
          </div>
          <div class="column1">
              <!-- Thumbnail 4 -->
            <img class="demo cursor" src="image/gallery4.jpg"  onclick="currentSlide(4)" alt="عرض صيدلية المتحدة">
          </div>
          <div class="column1">
              <!-- Thumbnail 5 -->
            <img class="demo cursor" src="image/gallery5.jpg"  onclick="currentSlide(5)" alt="عروض منتجات التنظيف بكارفور">
          </div>    
          <div class="column1">
              <!-- Thumbnail 6 -->
            <img class="demo cursor" src="image/gallery6.jpg"  onclick="currentSlide(6)" alt="خصومات بودرة الأطفال بصيدلية الدواء">
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-------------------two sides for pharmacies and markets-------------------------->

  <div class="cont">
    <div class="block">

      <div class="two">
        <h2>الصيدليـات المتاحـة </h2>
      </div>
      <div class="cell cell-1">
        <a href="https://www.nahdionline.com/ar/promotions/20nov">
          <div class="cell cell-6"><img src="image/n.jpg"  alt="">
            <p>صيدلية النهدي </p>
          </div>
        </a>
        <a href="https://unitedpharmacy.sa/ar/special-offers">
          <div class="cell cell-6"> <img src="image/mt.jpg" alt="">
            <p> صيدلية المتحدة </p>
          </div>
        </a>
        <a href="https://www.al-dawaa.com/arabic/offers">
          <div class="cell cell-6"> <img src="image/d.png"alt="">
            <p> صيدلية الدواء </p>
          </div>
        </a>

      </div>
    </div>
    <hr />
    <div class="block">

      <div class="two">
        <h2>المتـاجـر المتاحـة </h2>
      </div>
      <div class="cell cell-1">
        <a href="https://shop.tamimimarkets.com/ar/tag/weekly-offers-1">
          <div class="cell cell-6"><img src="image/t.jpg"  alt="">
            <p> أسواق التميمي </p>
          </div>
        </a>
        <br />
        <a href="https://leaflet.panda.sa/">
          <div class="cell cell-6"> <img src="image/b.png"alt="">
            <p> بنـده </p>
          </div>
          <br />
        </a>
        <a href="https://www.carrefourksa.com/mafsau/ar/">
          <div class="cell cell-6"> <img src="image/c.jpg"alt="">
            <p> كارفـور </p>
          </div>
        </a>

      </div>
    </div>
  </div>

 
    <!--------------------- Javascript code for images gallery ------------------------->

  <script src="js/sale.js"></script>








            <!----------------------------------------- page footer ------------------------------->


            <?php include 'layout/footer.php';
?>
  
  </body>
</html>