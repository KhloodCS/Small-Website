<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEEFLYER - Feedback Form</title>
</head>
<body>
  



    <!-------------------include header-------------------------->
    <?php include 'layout/header.php';
?>

  


  <!-------------------The form  ------------------>


  <div id="mainContent">
    <div id="head1"><img src="image/user.png" alt="User Satisfying" /></div>


    <div id="rightColumn">

      <h1>استبيان مدى رضا العميل</h1>
      <p><span>*</span> معلومات مطلوبة</p>

      <form id="userForm" name="userForm" action="connect.php" method="post" onsubmit="return validateForm()">
        <input type="hidden" name="eMail" value="">

        <fieldset id="contactFields">
          <legend>معلومات التواصل</legend>
          <label for="ageOK"><input type="checkbox" name="ageOK"> عمري 18 ومافوق<span>*</span></label>

          <label class="blockLabel" for="fName">الإسم الأول<span>*</span><input type="text" id="fName" name="fName"
              required></label>
          <label class="blockLabel" for="lName">الإسم الاخير<span>*</span><input type="text" id="lName" name="lName"
              required></label>
          <label class="blockLabel" for="location">عنوان المنزل<span>*</span><input class="tall" type="text" id="location"
              name="location" required></label>
          <label class="blockLabel" for="city">المدينة<span>*</span><input type="text" id="city" name="city"
          placeholder="Makkah" required></label>
          <label class="blockLabel" for="zip">صندوق البريد<input type="text" id="zip" name="zip" maxlength="10"></label>
          <label class="blockLabel" for="phone">الجوال<span>*</span><input type="tel" id="phone" name="phone"
              required></label>
          <label class="blockLabel" for="mail"> البريد الإلكتروني<span>*</span><input class="tall" type="email" id="email"
              name="email" placeholder="default@example.com"></label>


        </fieldset>

        <fieldset id="userInfo">
          <legend>معلومات مدى رضا العميل</legend>
          <label class="blockLabel" for="infoSource">كيف عرفت موقع SEE FLYER ؟</label>
          <select name="infoSource" id="infoSource">
            <option value="social">وسائل التواصل الإجتماعي</option>
            <option value="paper">الصحف</option>
            <option value="friend">عن طريق صديق</option>
            <option value="shops">إعلانات المتاجر</option>
          </select>

          <fieldset id="experience">
            <legend>هل ترى موقع SEE FLYER مصدر جيد للبحث عن عروض والتسوق الذكي؟</legend>
            <input type="radio" name="prevExp" id="prevYes" value="yes">
            <label for="prevYes">نعم</label>
            <input type="radio" name="prevExp" id="prevNo" value="no">
            <label for="prevNo">لا</label>
            <input type="radio" name="prevExp" id="prevNo" value="some">
            <label for="prevSome">لبعض فئات المنتجات فقط</label>
          </fieldset>

          <fieldset id="experience">
            <legend> كيف تفضل الإعلانات من موقع SEEFLYER ؟</legend>
            <input type="radio" name="prevExp1" id="prevEmail" value="email">
            <label for="prevEmail">عن طريق الإيميل</label>
            <input type="radio" name="prevExp1" id="prevSms" value="sms">
            <label for="prevSms">عن طريق الرسائل النصية</label>
            <input type="radio" name="prevExp1" id="prevWhats" value="Whatsaap">
            <label for="prevWhats"> عن طريق الواتساب </label>

          </fieldset>

          <fieldset id="interestFields">
            <legend>ماهي المنتجات التي تبحث عن عروضها بكثرة؟</legend>
            <label id="interest1"><input type="checkbox" name="grocery" id="grocery">
              البقالة</label>
            <label id="interest2"><input type="checkbox" name="cleaning" id="cleaning"> منتجات
              التنظيف</label>
            <label id="interest3"><input type="checkbox" name="skinCare" id="skinCare"> منتجات العناية
              بالبشرة</label>
            <label id="interest4"><input type="checkbox" name="electronic" id="electronic"> الإلكترونيات</label>
            <label id="interest5"><input type="checkbox" name="decor" id="decor"> الديكور</label>
            <label id="interest6"><input type="checkbox" name="clothes" id="clothes">
              الملابس</label>
            <label id="interest7"><input type="checkbox" name="momBaby" id="momBaby"> منتجات الأم والطفل</label>
            <label id="interest8"><input type="checkbox" name="diet" id="diet"> منتجات
              الحمية</label>
            <label id="interest9"><input type="checkbox" name="devices" id="devices"> الأجهزة الطبية</label>
          </fieldset>

          <label class="blockLabel" for="comments">نسعد بإقتراحاتك وملاحظاتك أدناه لتطوير موقع SEE
            FLYER</label>
          <textarea name="comments" id="comments" rows="4" cols="50"></textarea>

        </fieldset>
        <div id="submit">
          <input type="submit" value="إرسال">
          <input type="reset" value="إلغاء">
        </div>
      </form>
    </div>
    <div id="leftColumn">
      <p>شكرًا لك على تخصيص جزء من وقتك لتعبئة هذا الاستبيان. بتعبئتك ومشاركتك تساهم في تحسين الموقع وتطوير الخدمات
        لمزيد من الرضى، حيث لا يمكننا الاستمرار في الخدمة بدون تحسينات وإقتراحات من قبل الجمهور.



      </p>

      <p> ومرحبا بك في موقع SEE FLYER، نتمنى لك تجربة تصفحية ممتعة وتسوق ذكي .
      </p>
      <p>&mdash;فريق موقع SEE FLYER<br /> &nbsp;&nbsp;&nbsp; </p>

    </div>

  </div>
  <div class="spaceform">
  <p>Hi</p>

  </div>


  <!-------------------footer grid block for contact us and copyright--------------------------->

<script src="js/validation.js"></script>
<?php include 'layout/footer.php';
?>
</body>
</html>