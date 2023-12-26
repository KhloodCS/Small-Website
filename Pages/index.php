<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEEFLYER - Main Page</title>
</head>
<body>
   <!-------------------include header ----------------------------------------------------->
 

   <?php include 'layout/header.php';
?>
   
  <!-------------------project idea, solution, benefits, and blockquote tag using--------------------------->

  <div class="quote">
    <div class="idea">
      <h2>Project Ideas</h2>
      <p>
        <hr>
        Our project's primary objective is to create a user-friendly website dedicated to the collection and
        organization
        of supermarket flyers, with a specific focus on special offers and promotions. The crux of the issue we aim to
        resolve is the current lack of an efficient method for consumers to easily access and manage these flyers. This
        inadequacy often results in missed opportunities to capitalize on valuable deals.
        In parallel, supermarkets also grapple with challenges in effectively reaching their target audience during
        crucial marketing periods. Ultimately, this website provides support and benefits for retail store owners to see
        their competitive peers and provides help for individuals alike by encouraging saving and shopping smartly.
      </p>


      <!-- The form and The table pages buttons-->

      <div class="form">
        <h4>لإستطلاع الرأي حول الموقع إضغط هنا </h4>
        <button class="favorite styled" type="button"><a href="form.php">إستبيان مدى رضا المستخدم  </a> </button>
      </div>

      <div class="tableButton">
        <h4> SeeFlyer - لمعرفة مميزات </h4>
        <button class="favorite styled" type="button"><a href="table.php">إضغط هنا \ press here </a> </button>
      </div>

    </div>


    <!--Recommended solution and Benefits blocks-->

    <div class="idea2">
      <h2 >Recommendation Solution </h2>
      <p>
        <hr>
        The "SeeFlyer" website will offer a curated selection of flyers from some of the most prominent supermarkets in
        Jeddah. This platform will empower shoppers to effortlessly search for special offers and compare prices between
        various supermarkets, all from the comfort of their homes or on the go.
        <hr>
      </p>
    </div>

  </div>
  <div class="idea3">
    <h2 >Benefits </h2>
    <hr>
    <p></p>
    <ol>
      <li>Time Savings</li>
      <li>Cost Savings</li>
      <li>Price Comparison</li>
      <li>Knowing offers</li>
      <li>Finding lower prices</li>
    </ol>

    </p>
  </div>

  <!------------------websie content --------------------------->
  <!-------------------grid systems for markets block (tamimi - panda - carefoure------------------>


  <div class="grid">
    <div class="one">
      <hr>
      <h2>تـجمـع تجـار التـجزئـة</h2>
      <hr>
    </div>
    <div class="cell cell-5">
       <a href="https://shop.tamimimarkets.com/ar/tag/weekly-offers-1">
        <div class="cell cell-6"><img src="image/t.jpg"  alt="">
          <p>أسواق التميمي </p>
        </div>
      </a>
        <a href="https://leaflet.panda.sa/">
        <div class="cell cell-6"> <img src="image/b.png" alt="">
          <p> هايبر بنده</p>
        </div>
      </a>
        <a href="https://www.carrefourksa.com/mafsau/ar/">
        <div class="cell cell-6"> <img src="image/c.jpg"  alt="">
          <p > كارفور </p>
        </div>
      </a>

       <a href="https://www.nahdionline.com/ar/promotions/20nov">
        <div class="cell cell-6"><img src="image/n.jpg" alt="">
          <p>صيدلية النهدي </p>
        </div>
      </a>
      <a href="https://unitedpharmacy.sa/ar/special-offers">
        <div class="cell cell-6"> <img src="image/mt.jpg"   alt="">
          <p> صيدليةالمتحدة </p>
        </div>
      </a>
      <a href="https://www.al-dawaa.com/arabic/offers">
        <div class="cell cell-6"> <img src="image/d.png" alt="">
          <p> صيدلية الدواء </p>
        </div>
      </a>

      <!-------------------second block for categories (meat - copons - grocery)--------------------------->

    </div>


    <!-------------------the third grid block for offers --------------------------->

    <div class="one">
      <hr>
      <h2>أحـدث العـروض </h2>
      <hr>
    </div>

    <!-------------------using of text decoration (underline style)--------------------------->

    <div class="cell cell-15">
      <div class="cell cell-116"> <a href="carefore.html"></a><img src="image/sale1.jpg" alt="">
        <div class="img116"> <img src="image/c.jpg" alt=""> <p id="price"><strong>13.93 sr</strong></p></div>
       
      </div>
      <div class="cell cell-116"> <a href="tamimi.html"></a><img src="image/no.jpg" alt="">
        <div class="img116"><img src="image/n.jpg" alt=""><p id="price"><strong>49.00 sr</strong></p></div>
        
      </div>
      <div class="cell cell-116"> <a href="panda.html"></a><img src="image/sale3.jpg"alt=""> 
        <div class="img116"><img src="image/b.png" alt="">  <p id="price"><strong>9.93 sr</strong></p>
        </div>
      </div>

    </div>
  </div>


<div class="citeAgallery">
  <div class="image">
    <h4> للمزيد من العروض</h4>
    <button class="favorite styled" type="button"><a href="sale.php">معرض الصور  \ Images Gallery </a> </button>
  </div>
  <!-------------------cite tag using --------------------------->


  <div class="cite">
    <cite>"يجب أن تتحكم في أموالك وإلا سوف تتحكم بك قلة الأموال للأبد"</cite>
    <p>المستشار المالي ديف رامزي</p>

  </div>
</div>

  <div class="ar">
    <hr>
    <p> ذكر في موقع "إدياس إي أوورو"</p>
    <blockquote cite="https://www.ideasyahorro.com/cual-es-la-mejor-forma-de-ahorrar-dinero/">عادة ما يكون لدى معظم
      الناس مصدر واحد للدخل، أو مصدران على أقصى تقدير، مقابل نفقات كثيرة تستنزف مواردهم المالية، إذا كنت تعاني من أجل
      ادخار بعض المال، فإن الطريقة المثلى هي تحليل النفقات والعمل على تقليصها إلى الحد الأدنى.</blockquote>

    <br>
  </div>
  <!-------------------video tag using --------------------------->
  <video scr=""> </video>


  <?php include 'layout/footer.php';
?>
  </body>
  </html>
