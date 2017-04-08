                                                                                                                                                                                                                                                                                                                                                                <?php
function BEGIN_HTML() {


    echo ' <!DOCTYPE html><html style="overflow: scroll">';
}
function END_HTML() {
    echo '</html>';
}
function BEGIN_BODY() {
    echo '<body class="body">';
}
function END_BODY() {
    echo '</body>';
}
function print_head() {
    ?>



    <head>
        <title>ELA</title>
        <meta charset="UTF-8">
                 <!--<link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <meta name="description" content="آموزشگاه زبان ELA نماینده ی oxford با متد روز و ۶ ماه TOEFL">
        <meta  name="keywords"  content="آموزشگاه ,ela,Ela,ELA,آموزشگاه زبان ,شرق تهرانآموزشگاه زبان    ,انگلیسی,زبان انگلیسی,زبان,فرانسوی,المانی,آکادمی زبان ela,  آموزشگاه زبان ela, آزمون ket ,آزمون pet, آزمون fce, آزمون cae, آزمون cpe, آزمون tkt, آزمون ielts, آزمون toefl, آزمون tesol, آزمون celta,آزمون yle, English language academy, ELA, ela, آزمون gre, آزمون gmat,آزمون toeic,دانشگاه ets, کتاب American English file, آزمون bec, بهترین آموزشگاه زبان تهران, بهترین آموزشگاه زبان تهرانپارس, بهترین آموزشگاه زبان شرق تهران, آموزش زبان انگلیسی, آیلتس, تافل, آزمون آیلتس, ielts چیست؟, toefl چیست؟, آیلتس چیست؟, تافل چیست؟, آزمون تافل, دانشگاه آکسفورد, دانشگاه کمبریج, سفارت انگلیس, سفارت فرانسه, مصاحبه کبک, آموزشگاه زبان فرانسه, کتاب Le nouveau taxi, جزوه, فشرده, 6ماهه, آلمانی,کتاب studio d, زبان آلمانی, مصاحبه, آزمون, بین المللی">
        <meta name="author" content="ela , Ela , ELA">
        <!--<link href="style/animate.min.css" rel="stylesheet" type="text/css"/>-->
        <link href="style/styles.css" rel="stylesheet" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>


  <link href="/themes/dataurl.css" rel="stylesheet" />

         <!--<script src="Js/jquery.velocity.min.js" type="text/javascript"></script>-->
    </head>	
    <?php
}
function print_home() {
    ?>
 



    </div>
    </div>
    <div class="" id="home"> 		   
        <div id="topNav" class="navbar navbar-default navbar-fixed-top" role="navigation" style="top: -6.5vh; position: fixed; opacity: 1;">
            <div id="Map-Container" class="container">
                <div  class="navbar-header" style="height: 6.1vh;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">ELA</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" style="font-family: Yekan; ">
                        <li id="homebtn" ><a onclick="navLink('#home')">Home</a></li>
                        <li id="aboutusbtn"><a onclick="navLink('#page-about')">About</a></li>
                        <li id="coursebtn"><a onclick="navLink('#page-course')" >Courses</a></li>
                        <li id="calendarbtn"><a onclick="navLink('#page-calendar')" >Calendar</a></li>
                        <li id="testsbtn"><a onclick="navLink('#page-tests')" >Tests</a></li>
                        <li id="businessbtn"><a onclick="navLink('#page-bs')">Recruitment</a></li>
                        <li id="faqbtn"><a onclick="navLink('#page-faq')">FAQ</a></li>
                        <li id="newsbtn"><a onclick="navLink('#page-news')">News</a></li>
                        <li id="contactbtn"><a onclick="navLink('#page-contact')">Contact</a></li>
                    </ul>
                    <div style="display: hidden;padding-right: 10px;">
                        <form class="navbar-form form-inline navbar-right" id="Log-In-Form"  method="post" action="http://elaonline.ir/Administration/login.php">									 
                            <input type="text" name="id" class="form-control input-sm" id="usr" placeholder="User Name" style="border-radius: 0px;" >
                            <input type="password" name="password" class=" form-control input-sm" id="pass" placeholder="Password" style="border-radius: 0px;">
                            <button  type="submit" name="submit"  class="form-inline btn-sm btn btn-info" style="border-radius: 0px;">Log In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="onslidecontainer"></div>
        <div id="oncontainer2">

            <img src="img/logo11.png" id="logo">
            
            <div id="texth">
                <h1>English Language Academy</h1>
                <h1>Get it Right the First Time!</h1>
                <h1>Short and to the Point.</h1>
                <h1>Join Us.</h1>
                <h1>Be Smart.</h1>
            </div>
            <p id="titelonslider">Welcome to ELA</p>
            <a id="adownbtn"><div id="downbtn"></div><div id="downbtn2"></div></a>
        </div>
        <div  class="carousel-example-generic carousel slide" style="height: 100vh; width: 100vw; margin-top: 0; margin-bottom: 0px;" data-ride="carousel">
            <ol class="carousel-indicators" style="margin-bottom: 10vh;z-index: 300;">
                <li data-target=".carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target=".carousel-example-generic" data-slide-to="1"></li>
                <li data-target=".carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="height: 100vh;  min-width: 100vw">
                <div class="item active" style="height: 100vh;  min-width: 100vw">
                    <div style="background: url(img/cc.jpg) no-repeat fixed; background-size: cover; height: 100vh; width: 100vw "></div>
                    <div class="carousel-caption" style="margin-bottom: 10vh;">

                    </div>
                </div>
                <div class="item" style="height: 100vh;  min-width: 100vw">
                    <div style="background: url(img/cc2.jpg) no-repeat fixed; background-size: cover; height: 100vh; width: 100vw "></div>
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item active" style="height: 100vh;  min-width: 100vw">
                    <div style="background: url(img/cc3.jpg) no-repeat fixed; background-size: cover; height: 100vh; width: 100vw "></div>
                    <div class="carousel-caption" style="margin-bottom: 10vh;">

                    </div>
                </div>
            </div>
            <!--            <a class="left carousel-control" style="z-index: 300;" href=".carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control"  style="z-index: 300;" href=".carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>-->

        </div>
    </div>
    <?php
}
function print_about() {
    ?>
    <div class="" id="page-about" style="padding-top: 50px;">
        <div id="containerabout">
            <div style="width: 100vw;z-index: 10000 ;">
                <div id="aboutus">
                    <h1 class="text-center" style="margin-top: -10px; margin-bottom: -10px;">About</h1>
                    <div style="opacity: 1; position: relative; text-align: justify;line-height: 2; padding: 0px 30px 0px 30px; margin: 30px 0px 20px 5px; font-family: Yekan; font-size: 19px;direction: rtl;">
                        <!--<span class="glyphicon glyphicon-star-empty"></span>-->
                        اساتید <strong dir="ltr">ELA</strong> توسط مدیران آموزشی <span dir="ltr">(TESOL and CELTA Certificate Holders)</span> از 4 مرحله ی تخصصی گزینش می شوند و تمامی اساتید آکادمی دارای مدارک بین المللی می باشند.
                    </div>

                    <div style="opacity: 0; position: relative; text-align: justify;line-height: 2; padding: 0px 30px 0px 30px; margin: 5px 0px 20px 5px; font-family: Yekan; font-size: 19px;direction: rtl;">
                        <!--<span class="glyphicon glyphicon-star-empty"></span>-->
                        آکادمی <strong dir="ltr">ELA</strong> از آخرین متد آموزشی دانشگاه آکسفورد <span dir="ltr"> Oxford University Press</span> در  <a href="#page-course">سیستم آموزشی ترمیک </a>  و<a href="#page-course"> سیستم انحصاری فشرده</a>    <strong style="font-size: 30px; font-family: Titr">۶ ماهه</strong> از  مبتدی تا <span dir="ltr">IELTS</span> و <span dir="ltr">TOEFL</span> بهره می برد.
                    </div>

                    <div style="opacity: 0; position: relative; text-align: justify;line-height: 2; padding: 0px 30px 0px 30px; margin: 5px 0px 40px 5px; font-family: Yekan; font-size: 19px;direction: rtl;">
                        <!--<span class="glyphicon glyphicon-star-empty"></span>-->
                        برگزاری منظم  <a href="#page-tests"> آزمون های بین المللی </a><span dir="ltr"> IELTS – TOEFL – KET – PET – FCE – CAE – CPE – GRE – GMAT – TKT , …</span> : <span dir="ltr"> (Official Mock Test)</span>
                    </div>
                    <a href="about_us/about_us.php" target="_blank"> <button class="form-control btn" style="width: 100px;position: relative;direction: rtl;background-color: #ff9900;color: white;margin: auto;display: block;font-family: Yekan;margin-bottom: 50px;">ادامه مطلب ...</button></a>
                </div>
            </div>
            <img src="img/about.png" alt="" id="pic" style="margin-top: -9vh"/>
        </div>
    </div>

    <?php
}
function print_course() {
    ?>

    <div class="pages page-course" id="page-course" style="margin-bottom: 100px;">
        <div class="col-xs-6" id="courses">
            <div id="content" class="englishpg">
                <div class="row" id="headcours">
                    <div class="col-xs-10 col-xs-offset-1 " style="padding-left: 0px; padding-right: 0px;text-align: center;">
                        <h1 style="font-size: 25px;" id="course-header"></h1>
                    </div>
                    <div class="col-xs-1" style="margin-top: 0px;">
                        <button  type="button" id="closebtn" class="close" ><span  aria-hidden="true" style="font-size: 40px;">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                </div>
                <div class="row col-xs-12s">
                    <div class="col-xs-4 col-xs-offset-4" id="head2engpage" style="text-align: center;background-color: white;border-radius: 0 0 10px 10px;box-shadow: 0 -2px 2px #999999 inset; display: none">
                    	<input type="button" value="Termly" class="coursbtn" id="termlybtn">
                        <input type="button" value="Kids and Teenagers" class="coursbtn" id="kidsbtn">
                         <input type="button" value="Intensive" class="coursbtn" id="intensivebtn" style="text-decoration-line: white">
                        
                    </div>
                </div>
                <div class="row col-xs-12s">
                    <div class="col-xs-1">
                        <img src="img/arrowR.png" id="arrow-right" style="width: 100%;height: auto;">
                    </div>
                    <div id="z" class="col-xs-10">
                        <div class="course-content-container" id="germanycours" style="display: none; line-height: 2">
                            <div class="pagecours">	
                                <p dir="rtl"> زبان آلمانی به عنوان زبان اول یا دوم بیش از ۱۲۵ میلیون نفر، از زبان های مهم فرهنگی، علمی و محاوره ای دنیا است. در اروپا زبان مادری ۱۰۱ میلیون نفر آلمانی است! آلمانی علاوه بر آلمان، اتریش و بخش هایی از سوییس در لیشتن اشتاین، لوکزامبورگ و بخش هایی از شمال ایتالیا، شرق بلژیک و شرق فرانسه نیز صحبت می شود. در سطح بین المللی آلمانی پس از چینی ، انگلیسی، اسپانیایی ، روسی و هندی در رتبه ششم است. در نهاد های اتحادیه اروپا، آلمانی پس از انگلیسی، در کنار زبان فرانسه در زمره زبان های مهم کاری می باشد. </p> <p dir="rtl"> چرا آلمانی بیاموزیم؟ </p> <p dir="rtl"> کسی که آلمانی می داند، می تواند نوشته های نویسندگان بزرگ قرن های گذشته مانند گوته، شیلر و برشت را به زبان اصلی بخواند، در شرح زندگی نامه خود به این مطلب خاص اشاره نماید ( بسیاری از شرکت ها در پی داوطلبانی اند که زبان آلمانی می دانند) ، در دانشگاه های آلمان، اتریش و سوییس به طور رایگان تحصیل کند، به فستیوال فیلم برلین برود، در جشن اکتبر در مونیخ و یا در کارناوال کلن شرکت کند، آخرین مقالات و کتاب های علمی را مطالعه کند ( در زمینه مقالات علمی آلمان در مقام دوم است. ۲۸٪ تمام کتاب های علمی که در سطح بین الملل منتشر می شود، آلمانی است) ، در سطح بین المللی اعلام داوطلبی نماید – آلمانی یکی از زبان های رسمی اتحادیه اروپاست و در بسیاری از شرکت ها و نهاد های بین المللی مورد استفاده دارد. </p> 
                            </div>
                            <div class="pagecours">
                                <p> <strong> </strong> </p> <p dir="rtl"> <strong>دوره</strong> <strong> </strong> <strong>آموزش</strong> <strong> </strong> <strong>زبان</strong> <strong> </strong> <strong>آلمانی</strong> <strong> </strong> <strong>با</strong> <strong> </strong> <strong>متد</strong> <strong> </strong> <strong> studio d</strong> </p> <p dir="rtl"> هدف از اجرای این دوره آموزش زبان آلمانی به صورت مکالمه برای کلیه داوطلبانی است که جهت امور علمی ، تحصیلی، تجاری و یا سیاحتی نیازمند برقراری ارتباط با زبان آلمانی و کشورهای آلمانی زبان می باشند. </p> <p dir="rtl"> مجموعه کتابهای Studio dامروزه در اکثر موسسات و انستیتوهای معتبر دنیا به زبان آموزان متقاضی یادگیری این زبان، تدریس می شود. از سال 1389 و به صورت آزمایشی در موسسه گوته آلمان به عنوان جدیدترین منبع آموزش زبان آلمانی مطرح شد و خیلی زود جای مجموعه کتابهای TANGRAMرا گرفت. مجموعه کتابهای <strong> </strong>Studio dبرای سنین بزرگسال(از 18 سال به بالا) و برای سطوح مقدماتی تدوین و از سه کتاب درسی در سه سطح B1 – A2 – A1تشکیل شده. هر کتاب حاوی<strong>1</strong>2 درس با موضوعات و موقعیت های متنوع روزمره است. در کنار کتاب درسی، کتاب کار به زبان آموزان این امکان را می دهد تا با حل تمرین هایی متفاوت، آموزه های خود را در 4 مهارت زبانی بسنجند. متدی که مجموعه کتابهای <strong> </strong>Studio dدنبال می کند ترکیبی از بهترین متدهای مطرح در آموزش زبانهای خارجی به شمار می رود و نگاهی ابزاری و کاربردی به مقوله زبان دارد. </p> 

                            </div>
                            <div class="pagecours">
                                <p dir="rtl"> مجموعه Studio d مجموعا داراي 3 كتاب: <br/> <strong>A1 (</strong> <strong>دوره</strong> <strong> </strong> <strong>مقدماتی</strong> <strong>)</strong> </p> <p dir="rtl"> <strong>A2</strong> <strong>(</strong> <strong>دوره</strong> <strong> </strong> <strong>متوسط</strong> <strong>)</strong> </p> <p dir="rtl"> <strong>B1</strong> <strong>(</strong> <strong>دوره</strong> <strong> </strong> <strong>پیشرفته</strong> <strong>)</strong> </p> <p dir="rtl"> و 3 كتاب تمرين و كتاب راهنماي استاد به همراه سي دي هاي صوتي و تصويري است. </p> 
                                <p dir="rtl"> <strong>معرفی</strong> <strong> </strong> <strong>سطوح</strong> <strong> </strong> <strong>زبان</strong> <strong> </strong> <strong>آلمانی</strong> </p> <p dir="rtl"> <strong>دوره</strong> <strong> </strong> <strong>مقدماتي</strong> <strong> </strong> <strong> ( Grundstufe )</strong> </p> <p dir="rtl"> مقدماتي1 ( A1.1 = (G1 <br/> مقدماتي2 ( A1.2 = (G2 امتحان Start Deutsch1 A1 <br/> مقدماتي3 ( A2.1 = (G3 <br/> مقدماتي4 ( A2.2 = (G4 امتحان Start Deutsch2 A2 <br/> مقدماتي5 ( B1.1 = (G5 امتحان (Zertifikat Deutsch (ZD <br/> 
                                </p> 
                            </div>
                            <div class="pagecours">
                                <p dir="rtl">- بر اساس قوانین جدید اقامت در آلمان، مهاجرت در صورتی امکان پذیر می باشد که فرد در بدو ورود به آلمان در صورت داشتن سایر شرایط لازم برای مهاجرت می بایستی در حد مقدماتی آشنایی داشته باشد و به هنگام درخواست ویزا مدرک زبان به سفارت ارائه دهد. </p>
                                <p dir="rtl"> <strong> </strong> <strong>دوره</strong> <strong> </strong> <strong>مياني</strong> <strong> ( Mittelstufe )</strong> <strong> </strong> </p> <p dir="rtl"> مياني1 ( B1.2 = ( M1 </p> <p dir="rtl"> (Zertifikat Deutsch für den Beruf) <br/> مياني2 ( B1.3 = (M2 <br/> مياني3 ( B2.1 = (M3 <br/> مياني4 ( B2.2 = (M4 <br/> مياني5 ( B2.3 = ( M5 امتحان ( Zentrale Mittelstufenprüfung (ZMP <br/> <strong> </strong> <strong>دوره</strong> <strong> </strong> <strong>پيشرفته</strong> <strong> ( Oberstufe ) </strong> <br/> پيشرفته 1 ( C1.1 = (O1 <br/> پيشرفته 2 ( C1.2 = (O2 <br/> پيشرفته 3 ( C2 = (O3 امتحان ( Zentrale Oberstufenprüfung (ZOP <br/> </p> 
                            </div>
                            <div class="pagecours">
                                <p dir="rtl"> <strong>A 1</strong> </p> <p dir="rtl"> زبان آموز قادر خواهد بود پس از این دوره واژه های روزمره و جملات ساده را که در ارتباط با نیازهای مشخصی می باشد، درک کرده و مطابق با نیاز بکار برد و خود را معرفی نموده و از دیگران پرسشهائی را بعمل آورد. </p> <p dir="rtl"> در این سطح زبان آموزان برای مهارت های زبانی زیر آماده می گردند: </p> <p dir="rtl"> فهمیدن و به کار گیری اصطلاحات متداول </p> <p dir="rtl"> تبادلات زبانی در موقعیت های ساده و روتین </p> <p dir="rtl"> توانایی بر آمدن از موقعیت های روزمره نظیر: خرید کردن، کار، مرجعه به پزشک یا رفتن به رستوران </p> <p dir="rtl"> توصیف محل تولد، وضعیت تأهل و میزان تحصیلات با ابزار زبانی ساده </p> 
                            </div>
                            <div class="pagecours">
                                <p dir="rtl"> <strong>A 2</strong> </p> <p dir="rtl"> زبان آموز قادر خواهد بود پس از این دوره واژه هائی با کاربرد زیاد در ارتباط با موارد مشخص (مانند اطلاعات در باره خود و خانواده، خرید، کار و محیط اطراف) را درک نموده و در شرائط معمول منظور خود را ادا نماید. زبان آموز می تواند درباره تجربه ها و اتفاقات، رویاها و آرزوها و اهداف خود گزارش دهد و برای برنامه ها و دیدگاه های خود دلیل ارایه کند. </p> <p dir="rtl"> <strong>B 1</strong> </p> <p dir="rtl"> زبان آموز قادر خواهد بود پس از این دوره در صورت استفاده از زبان استاندارد و صحبت در مورد مسائل آشنا، نکات اصلی را درک نماید و در بیشتر مواردی که در سفر به کشور مربوطه با آن روبرو می شود، مشکلات خود را حل کند و در عین حال قادر خواهد بود با جملات ساده و پیوسته در ارتباط با مطالب آشنا و مورد علاقه، گفتگو نماید. </p> <p dir="rtl"> <strong>B 2</strong> </p> <p dir="rtl"> زبان آموز قادر خواهد بود پس از این دوره نکات اصلی متون پیچیده در ارتباط با مطالب معین یا انتزاعی را درک نموده و در رشته تخصصی خود بحث های تخصصی را دنبال نماید. وی قادر خواهد بود بدون آمادگی قبلی، روان گفتگو کند. به طوری که یک گفتگوی عادی با شخصی که زبان مادریش است، بدون هیچ مشکلی برای هر دو طرف بخوبی ممکن باشد. </p> 
                            </div>
                            <div class="pagecours">
                                <p dir="rtl"> <strong>C 1</strong> </p> <p dir="rtl"> زبان آموز قادر خواهد بود پس ازاین دوره متون طولانی شامل طیف گسترده ای از واژه های سطح بالا را درک نموده و نکاتی را که مختصرا" مورد اشاره قرار گرفته اند نیز متوجه شود. وی قادر خواهد بود بدون آمادگی قبلی، روان گفت گو کند بدون اینکه مجبور باشد به دفعات و به گونه ای محسوس در جستجوی لغات مورد نظر برآید. </p> <p dir="rtl"> <strong>C 2</strong> </p> <p dir="rtl"> زبان آموز قادر خواهد بود پس از این دوره عملا" آنچه را می خواند یا می شنود بدون هیچگونه مشکلی درک نماید. وی قادر خواهد بود اطلاعات کتبی یا شفاهی از منابع گوناگون را جمع بندی نموده و در این رابطه دلائل یا توضیحات مربوطه را به شکلی پیوسته عنوان کند. </p>

                            </div>
                        </div>
                        <div class="course-content-container" id="englishcours" style="display: none; line-height: 2">
                            <div class="pagecours" >
                                <p>با سلام خدمت شما زبان آموز محترم
                                    <br>
                                    وقت و هزینه دو فاکتور و عامل مهم و اساسی برای خیلی از شما عزیزان برای انتخاب آموزشگاه و سیستم آموزشی است.
                                </p>
                                <h3>سیستم انحصاری جزوه</h3>
                                <p>
                                    همانطورکه می دانید کتاب های AMERICAN ENGLISH FILE آخرین متد آموزشی دانشگاه Oxford  است. کتابهایی فوق العاده قوی و به روز و بسیار کامل که در تمام کشور های دنیا تدریس می شود. ولی...
                                </p>
                                <p>
                                    خیلی از مطالبی که شما عزیزان در این کتاب میخوانید وتکرار آن در تمامی کتاب ها، برای تثبیت اطلاعات فراگرفته شده در درس می باشد و الزاماً نیازی به وجودشان نیست (لازم به یادآوری است که سری کتابهای AMERICAN ENGLISH FILE برای تمام دنیا با هر زبانی و فرهنگی طراحی شده است) و میتوان همان وقت و انرژی را برای مسائل دیگر به کاربرد که بازدهی کلاس و مطالب فراگرفته را به حداکثر رساند و در عین حال زمان را کاهش داد.
                                </p>
                                <h3>ما این کار را برای شما انجام دادیم!</h3>
                                <p>
                                    جزوه ای جمع آوری شده توسط اساتید بین المللی (TESOL and CELTA Certificate Holders). جزوه یی که برگرفته از حدود 70 کتاب روز دنیاست. جزوه ای که وقت شما به یک سوم و هزینه شما رو به نصف کاهش می دهد!!!
                                </p>
                            </div>
                            <div class="pagecours">


                                <p>
                                    هدف اصلی این جزوه آزمون IELTS یا TOEFL است و هر چهار مهارت زبان انگلیسی در طی این دوره با شما عزیزان کار می شود به وسیله ی برترین کتاب های گرامر، صفر تا صد گرامر انگلیسی به ساده ترین روش در این جزوه گرد آوری شده است، مجموعه کتابهایی برای یادگیری هر چه بهتر تلفظ لغات، منظم و دقیق صحبت کردن شما در زبان انگلیسی، تقویت دامنه لغات شما و سری کتاب هایی که هر چهار مهارت Listening ,Speaking ,Reading ,Writing به صورت کامل از مقدماتی تا پیشرفته را در بر می گیرد، به انضمام دانش و اطلاعات مدیر آموزشی مجموعه که با توجه به سوابق تدریسشان دردوره ی IELTS و TOEFL و نیاز شما عزیزان برای این آزمون ها، مطالبی را به منظور رسیدن به نمره ی مطلوب شما در آزمون IELTS یا TOEFL به این جزوه اضافه نموده اند!
                                </p>
                                <p>
                                    این سیستم آموزشی با توجه به فشرده بودن آن نیازمند صرف زمان و انرژی بیشتری از سوی شما زبان آموز گرامی است تا در زمان 6 ماه برای آزمون IELTS یا TOEFL آماده شوید. پس، از آن دسته از عزیزانی که زمان برایشان ارزشمند است دعوت به شرکت در این دوره ها می شود و برای کسانی که عجله ای برای رفتن از کشور و یا شرکت در آزمون های بین المللی را ندارند، این سیستم ( با توجه به فشرده بودن آن و حجم بالای مطالب و نیاز به صرف زمان بیشتر برای تمرین و مطالعه ی آن ) پیشنهاد نمی شود و با سیستم کتاب ( مبتدی تا IELTS یا TOEFL در 18 ماه )  ادامه دهند.
                                </p>
                            </div>
                            <!--                                <div class="pagecours" >
                                                                            
                                                                      </div>
                                                                      <div class="pagecours" >
                                                                            
                                                                      </div>-->
                            <div class="pagecours" >

                                <ul>
                                    <li> ترم اول(جزوه ی یک) شامل 5 بخش سه درسی می باشد. (36 ساعت)</li>
                                    <li>ترم دوم(جزوه ی دو) شامل 6 بخش سه درسی می باشد. (36 ساعت)</li>
                                    <li>ترم سوم(جزوه ی سه) شامل 5 بخش سه درسی می باشد. (36 ساعت)</li>
                                </ul>
                                <p>[زبان آموزان در این مقطع آمادگی دریافت نمره یIELTS  6/5   یا 95 TOEFL را دارند]</p>
                                <ul>
                                    <li> ترم چهارم شامل مجموعه نکات مهم امتحانی IELTS و یا TOEFL وآزمون های مکرر(آزمون های دوره های قبل و کلاس های رفع اشکال آن) و آموزش تکنیک ها و مهارت های آزمون. (36 ساعت زمان آموزشی + آزمون های آزمایشی)</li>
                                </ul>
                                <p>[زبان آموزان در این مقطع آمادگی دریافت نمره ی 7  IELTS یا100  TOEFL را دارند]</p>
                                <p>*  گرفتن نمره ی  7و 100 به بالا بستگی به میزان صرف زمان در تمرین مکرر مهارت ها و تکنیک ها و انجام آزمون های دوره های قبل توسط زبان آموز دارد.</p>


                            </div>
                            <!--KIDS-->
                            <div class="pagecours" >
                                <h2>کودکان و نوجوانان :</h2>
                                <p>
                                    در آکادمی ELA بر روی چهار مهارت اصلی گفتن ، نوشتن، خواندن و شنیدن برنامه ریزی های مختلفی صورت گرفته است. از همان آغاز و به صورت گام به گام کودک یا نوجوان با یادگیری مطالب با تمامی این مراحل و مهارت ها آشنا می شود. اساتید این بخش علاوه بر چهار مرحله گزینش تخصصی که در درباره ی ما توضیح داده شده است، با توجه به حساس بودن این دوره می بایست روان شناسی کار با کودکان را نیز گذرانده باشند.
                                </p>
                                <h3>سیستم آموزشی</h3>
                                <p>
                                    به دلیل گیرایی بسیار بالا در امر آموزش، بهترین زمان یادگیری زبان انگلیسی، سنین کودکی و نوجوانی می باشد. سیستم Hip Hip Hooray<br>و  Phonics Let’s Go در حال حاضر جزو کاملترین و بهترین روش ها برای گروه سنی کودکان (7تا 11 سال) و سیستم Got It! مؤثرترین روش برای گروه سنی نوجوانان (12 تا 16 سال) می باشد.
                                </p>
                                <p>
                                    در این دوره کودک یا نوجوان با اسم حروف، صدای حروف، نوشتن حروف، لغات جدید برای یادگیری بهتر آشنا می شود که در هر ترم آموزشی، تدریس همراه با Game Flash Cards, Picture Dictionary, و Song می باشد. پس از طی این دوره کودک یا نوجوان شما قادر به نوشتن، خواندن و گفتن لغات بیشمار همراه با تلفظ صحیح است. در این میان میزان سنجش آموخته های کودک یا نوجوان شما با برگزاری امتحان میان ترم و پایان ترم هم به صورت کتبی و هم به صورت شفاهی مورد بررسی قرار گرفته خواهد شد.
                                </p>
                            </div>
                            <!--                                <div class="pagecours" >
                                                                            
                                                                      </div>-->
                            <div class="pagecours" >
                                <p>
                                    در این دوره ی آموزشی کودک یا نوجوان همزمان با یادگیری لغات بیشتر و جدیدتر، مشغول به یادگیری  گرامر و نحوه ی سوال کردن و جواب دادن از سطوح ابتدایی تا پیشرفته خواهد شد. با بالا رفتن ترم میزان اطلاعات او نیز به طور پیوسته افزایش خواهد یافت و نحوه ی استفاده از این اطلاعات نیز همچنین!
                                    <br>
                                    در کنار کتاب اصلی، زبان آموز به یادگیری نحوه ی خلاصه کردن داستان یا مقاله نیز مشغول می شود. علاوه بر آن در هر ترم لغات جدید در زمینه های مختلفی همچون اعداد، شماره های ترتیبی، اعضای بدن، لباس ها، میوه ها، سبزیجات، رنگ ها، گیاهان، مکان ها، شغل ها، آب و هوا، فصل ها، ماه ها، روزها و... تدریس خواهد شد که در میانه و پایان هر ترم تمامی مطالب فوق در قالب کتبی و شفاهی مورد بررسی و آزمون قرار خواهند گرفت.
                                </p>
                                <h3>برنامه های تفریحی:</h3>
                                <p>
                                    برنامه های تفریحی متناسب با سن کودک و نوجوان با توجه به ترم مورد نظر برنامه ریزی شده است، از جمله آموزش آهنگ ها به زبان انگلیسی، بازی با لغات انگلیسی و کمک به تقویت حافظه، تمرین و یاد دادن دیکته ی کلمات از طریق بازی، نقاشی، کاردستی، نمایش کارتون و انیمیشن، تشویق کودک از طریق هدیه دادن کتاب داستان های مصور انگلیسی زبان و... .
                                    <br>
                                    به شما تبریک می گوییم که بهترین زمان سنی ممکن را برای آموزش زبان انگلیسی به فرزند خود انتخاب نموده اید.
                                </p>
                            </div>

                            <!--termy-->
                            <div class="pagecours" >
                                <h2>ترمیک</h2>
                                <h3>مجوعه کتاب های American English File</h3>
                                <p>
                                    در آکادمی زبان انگلیسی ELA مجموعه کتاب American English File تدریس می شود که آخرین متد آموزشی دانشگاه آکسفورد بریتانیا بوده و در 5 جلد و با هدف آموزش مکالمه زبان انگلیسی می باشد که از متن های غنی، روش های کاملا مبتکرانه و جدید و شیوه هایی خلاقانه برای آموزش مهارت های مختلف زبانی بهره می برد. در آکادمی ELA زبان آموزان از همان ترم اول مهارت مکالمه را به صورت تدریجی فراگرفته و با بالاتر رفتن سطح، Accuracy(دقت در گفتار) و Fluency(روان صحبت کردن) به مراتب قوی تر و بهتر خواهد شد.
                                </p>
                            </div>
                            <div class="pagecours" >
                                <p>
                                    آنچه این کتاب ها را به صورت کامل از سایر کتاب های آموزشی متمایز می سازد، برنامه مدونی است که از درس ابتدایی اولین کتاب این مجموعه برای آموزش نحوه صحیح تلفظ حروف، کلمات و جملات زبان انگلیسی برای زبان آموزان در نظر گرفته شده است. همچنین خلاقیت نویسنده در استفاده از مثال های کاربردی و نشان دادن تفاوت های موجود بین نکات گرامری مختلف باعث شده است تا مجموعه کتاب American English File در سطح برتری نسبت به سایر کتاب های آموزش زبان انگلیسی قرار بگیرد. هر کتاب از مجموعه American English File شامل 7یا 9 درس می باشد که در پایان درس کتاب یک مرور کلی بر مطالب کتاب به صورت کلی و کاربردی انجام می گیرد. در پایان کتاب در صفحاتی جداگانه نکات گرامری لغوی و تلفظی موجود در به اختصار توضیح داده شده است و متن بخش های شنیداری کتاب نیز قرار داده شده است. از دیگر نکاتی که می توان بدان اشاره کرد کیفیت بالای فیلم های آموزشی همراه این مجموعه و جذابیت تمرین های کتاب های کار American English File است. این مجموعه به آموزش زبان انگلیسی آمریکایی با سبکی نوین پرداخته است و شامل طنز، تشویق زبان آموزان به برقراری ارتباط، لذت بردن از یادگیری دستور زبان، لغت و تلفظ به همراه تمرین و پشتیبانی از چهار مهارت اصلی می باشد.
                                </p>
                                <p>
                                    زبان اموزان پس پایان کتاب 1 این مجموعه قادر به شرکت در امتحان MOVERS کمبریج ، پس از پایان کتاب 2 قادر به شرکت در امتحان KET کمبریج، پس از پایان کتاب 3 قادر به شرکت در امتحان PET کمبریج و پس از پایان کتاب 4 قادر به شرکت در آزمونهای IELTS ، TOEFL و FCE می باشند. (برای ثبت نام در آزمون اینجا را کلیک کنید.)
                                    <br>
                                    مجموعه کتاب  <a href="https://elt.oup.com/student/americanenglishfile/?cc=ir&selLanguage=en">American English File</a> آموزش تمامی مهارت های زبانی را در دستور کار خود قرار داده است و از این حیث از کامل ترین مجموعه های آموزش زبان انگلیسی محسوب می شود. علاوه بر کتاب اصلی، یک کتاب کار و سه عدد لوح فشرده را دارا می باشد.
                                </p>
                            </div>
                            <div class="pagecours" >
                                <h3>سایر دوره ها :</h3>
                                <table id="tb11">
                                    <tr>
                                        <td>آمادگی آزمون های بین المللی. (برای کسب اطلاعات بیشتر به بخش آزمون های بین المللی وب سایت مراجعه فرمایید.)</td>
                                        <td>Business English  (انگلیسی تجاری).</td>
                                    </tr>
                                    <tr>
                                        <td>Movie  (درک فیــلم).</td>
                                        <td>News  (درک اخبار).</td>
                                    </tr>
                                    <tr>
                                        <td>Group Discussion  (بحث آزاد).</td>
                                        <td>OET  (ویژه پزشکان و پرستاران).</td>
                                    </tr>
                                    <tr>
                                        <td>دوره های ویژه مکالمه کاربردی جهت مشاغل مختلف.</td>
                                        <td> دوره های مکالمات و مکاتبات تجاری.</td>
                                    </tr>
                                    <tr>
                                        <td>مکالمه با دوره های فیلم .Movie Classes</td>
                                        <td>دوره های کاربردی اصطلاحات انگلیسی.</td>
                                    </tr>
                                    <tr>
                                        <td>مصاحبه سفارت و دوره های فشرده بررسی و آموزش پاسخگویی به سؤالات عمومی و تخصصی سفارت.</td>
                                        <td>مکالمات رایج خیابانی .Street Talk</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="pagecours" >
                                <h3>کتاب های کمک آموزشی</h3>
                                <table>
                                    <tr>
                                        <td>Tactics for Listening</td>
                                        <td>ESSENTIAL WORDS FOR THE GRE</td>
                                        <td>Communicating in English (Functions)</td>
                                    </tr>
                                    <tr>
                                        <td>Concept & Comment</td>
                                        <td>Newspapers</td>
                                        <td>Steps to Understanding</td>
                                    </tr>
                                    <tr>
                                        <td>Story books (Oxford Bookworms)</td>
                                        <td>Basic Idioms </td>
                                        <td>101 American Customs</td>
                                    </tr>
                                    <tr>
                                        <td>Key Words for Fluency</td>
                                        <td>101 American Superstitions</td>
                                        <td>Common Mistakes</td>
                                    </tr>
                                    <tr>
                                        <td>American Accent Training</td>
                                        <td>101 American Idioms</td>
                                        <td>50 Great Short Stories</td>
                                    </tr>
                                    <tr>
                                        <td>Grammar in Use</td>
                                        <td>Oxford Word Skills</td>
                                        <td>Idioms and Phrasal verbs</td>
                                    </tr>
                                    <tr>
                                        <td>Vocabulary in Use</td>
                                        <td>English Collocation in Use</td>
                                        <td>English Pronunciations in Use</td>
                                    </tr>
                                    <tr>
                                        <td>Vocabulary for the High School Student</td>
                                        <td>English Vocabulary Organizer</td>
                                        <td>504</td>
                                    </tr>
                                    <tr>
                                        <td>1100 Words you need to know</td>
                                        <td>Street Talk</td>
                                        <td>A Dictionary of American Idioms</td>
                                    </tr>
                                    <tr>
                                        <td>Vocabulary for IELTS</td>
                                        <td>Oxford Picture Dictionary</td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="course-content-container" id="fraccours" style="display: none; line-height: 2">
                            <div class="pagecours" >
                                <h2>دپارتمان زبان فرانسه در آکادمی زبان ELA :</h2>
                                <p>
                                    زبان فرانسه در چند سال اخیر به زبانی فراگیر در ایران تبدیل شده است که بعد از زبان انگلیسی دومین زبان پر طرفدار در بین علاقمندان به زبان های خارجه به شمار می آید. 
                                    <br>
                                    از آنجایی که کبک (کانادا) استانی فرانسه زبان است متقاضیان مهاجرت به کبک ناگزیر از یادگیری این زبان هستند.
                                </p>
                                <h3>سطوح فرانسه : A1 , A2 , B1 , B2 , C1 , C2</h3>
                                <ul>
                                    <li>A1 : سطح مقدماتی است و زبان آموز بعد از گذراندن این دوره قادر به صحبت کردن درباره خود و خواسته هایش است. امتیاز این سطح 2 میبلشد.</li>
                                    <li>A2 : در این سطح زبان آموز درباره علایق و خواسته هایش در زمان گذشته و آینده صحبت می کند.امتیاز این سطح 4 میباشد.</li>
                                    <li>B1 : سطح متوسط است و امتیاز آن 6 میباشد.</li>
                                    <li>B2 : در این سطح زبان آموز به راحتی وارد دیالوگ میشود.این سطح،سطح مورد نیاز برای افرادی است که متقاضی مهاجرت به کبک هستند و امتیاز آن 8 میباشد.(البته در امتیازبندی کبک امتیاز این سطح 5 می باشد).</li>
                                    <li>C1,C2 : سطوح پیشرفته هستند و دارای امتیاز 10و12 می باشند.کسانی که در این سطح تحصیل می کنند فرانسه زبان به شمار می آیند.</li>
                                </ul>
                                <p>
                                    برای اخذ پذیرش از دانشگاههای فرانسه زبان با توجه به عنوان و مرتبه دانشگاه سطوحB2,C1,C2 مورد نیاز است.
                                </p>
                            </div>
                            <div class="pagecours" >
                                <p>
                                    آزمون های زبان فرانسه که هم اکنون در بخش فرهنگی سفارت فرانسه و مراکز دیگر برگزار میشوند شامل:
                                    <br><span>TCE , TEF , DELF , DALF</span>
                                </p>
                                <table>
                                    <tr>
                                        <td style="padding: 10px;width: 30%">CDهای کمک آموزشی:</td>
                                        <td style="padding: 10px;width: 30%">کتاب داستان های موجود در آموزشگاه ELA</td>
                                        <td style="padding: 10px;width: 30%">کتابهای کمک آموزشی</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px;direction: ltr;text-align: left">1. Ma France(les films de BBC)</td>
                                        <td style="padding: 10px;direction: ltr;text-align: left">1. Le Petit-poucet</td>
                                        <td style="padding: 10px;direction: ltr;text-align: left">1. Vocabulaire progressif</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px;direction: ltr;text-align: left">2. dessins animées</td>
                                        <td style="padding: 10px;direction: ltr;text-align: left">2. le Petit prince</td>
                                        <td style="padding: 10px;direction: ltr;text-align: left">2. Grammaire progressive</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px;direction: ltr;text-align: left"></td>
                                        <td style="padding: 10px;direction: ltr;text-align: left">3. l’Avare</td>
                                        <td style="padding: 10px;direction: ltr;text-align: left">3. Compréhension orale</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px;direction: ltr;text-align: left"></td>
                                        <td style="padding: 10px;direction: ltr;text-align: left">4. Vingt mille lieues sous les mers</td>
                                        <td style="padding: 10px;direction: ltr;text-align: left">4. Expression orale</td>
                                    </tr>
                                </table>
                                <br>
                                <p>
                                    متدهای زبان فرانسه در دپارتمان فرانسه <span dir="ltr">Le nouveau taxi</span> : <span dir="ltr">ELA</span>
                                </p>

                            </div>
                            <div class="pagecours" >
                                <h3>دوره های زبان فرانسه در آموزشگاه ELA شامل:</h3>
                                <ul>
                                    <li>کلاس های گروهی دو روز در هفته ، ظرفیت کلاسها بین 5 تا 8 نفر</li>
                                    <li>کلاس های خصوصی و نیمه خصوصی</li>
                                </ul>
                                <p>
                                    سوپر وایزر آموزشگاه: آقای مهدی بهنوش دانشجوی دکتری زبان و ادبیات فرانسه و خانم فاطمه حسین پور،کارشناس ارشد زبان و ادبیات فرانسه، با سابقه چندین ساله در تدریس زبان فرانسه.


                                </p>
                                <h3>خدمات دیگر آموزشگاه ELA:</h3>
                                <ul>
                                    <li>پر کردن فرم های سفارت فرانسه از قبیل فرم ویزا،فرم کوتاه مدت،فرم طولانی مدت.</li>
                                    <li>رزرواسیون هتل و رزرواسیون بلیط هواپیما برای اخذ ویزای فرانسه.</li>
                                    <li>ترجمه متون زبان فرانسه به فارسی و بالعکس.</li>
                                    <li>اقدام جهت اخذ پذیرش تحصیلی و گرفتن خوابگاه دانشجویی در فرانسه توسط دانشجویان دکتری زبان فرانسه در شهر لیون و مشاوره در خصوص مدارک مورد نیاز جهت سفارت فرانسه در ایران و روند درخواست ویزای تحصیلی.</li>
                                    <li>پر کردن فرم های مهاجرت کبک و مشاوره مهاجرت به کبک (کانادا)</li>
                                    <li>نگارش رزومه به زبان فرانسه.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <img src="img/arrowR.png" id="arrow-left" style="width: 100%;height: auto;">

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <header class="text-center"><h1>Courses</h1><div class="row">
                    <div class="col-xs-8 col-xs-offset-2">
                        <p class="" style="font-family: Mitra; font-size: 17px"> وقت و هزینه دو فاکتور و عامل مهم و اساسی برای خیلی از شما عزیزان برای انتخاب آموزشگاه و سیستم آموزشی است</p>
                    </div>
                </div>
            </header>
            <article>
                <ul id="courseMainbtn" class="thumbnails about-items ">
                    <li class="col-xs-12 col-sm-4 col-lg-4 text-center">
                        <div id="englishbtn"  class="item">
                            <img class=" img-circle" src="img/eng.jpg" alt="Treble">
                            <div class="about-overlay img-circle" ><p style="color: black; font-size: 30px; margin-top: 130px; color: black;font-family: 'Marcellus', serif;">English</p></div>
                        </div>
                        <h3 class="text-center" style="font-family: Titr; ">انگلیسی</h3><br>
                        <p class="text-center" style="text-align: justify; direction: rtl; font-family: Yekan; font-size: 16px;"><p dir="rtl">
                            ترمیک، از مبتدی تا IELTS و TOEFL در کمتر از 18 ماه!
                        </p>
                        <p dir="rtl">
                            فشرده، از مبتدی تا IELTS و TOEFL فقط در6 ماه!
                        </p>
                        <p dir="rtl">
                            سیستم انحصاری جزوه، طراحی شده توسط اساتید بین المللی
                        </p>
                        <p dir="rtl">
                            TESOL &amp; CELTA Certificate Holders
                        </p>
                        <p dir="rtl">
                            همکاری با تنها نمایندگی دانشگاه آکسفورد در ایران
                        </p></p>
                    </li>
                    <li  class="col-xs-12 col-sm-4 text-center">
                        <div id="frenchbtn" class="item">
                            <img class="img-circle" src="img/frnc.jpg" alt="Treble">
                            <div class="about-overlay img-circle text-center"><p style="color: black; font-size: 30px; margin-top: 130px;font-family: 'Marcellus', serif; ">Français</p></div>
                        </div>
                        <h3 class="text-center" style="font-family: Titr; color: black"> فرانسه</h3><br>
                        <p class="text-center" style="text-align: justify; direction: rtl; font-family: Yekan; font-size: 16px;"><p dir="rtl">
                            دوره های تخصصی ویژه آمادگی مصاحبه کبک و آزمون های TCF.TEF.DALF.DELF
                        </p>
                        <p dir="rtl">
                            مشاوره و اقدام جهت اخذ پذیرش تحصیلی و اقامت فرانسه و خوابگاه دانشجویی
                        </p>
                        <p dir="rtl">
                            دوره تخصصی فشرده در 4 ماه با جدیدترین متد Le nouveau taxi
                        </p>
                    </li>
                    <li  class="col-xs-12 col-sm-4 text-center">
                        <div id="dutschbtn" class="item" >
                            <img class="img-circle" src="img/grm.jpg" alt="Treble">
                            <div class="about-overlay img-circle"><p style="color: black; font-family: Tahoma; font-size: 30px; margin-top: 130px;font-family: 'Marcellus', serif;">Deutsch</p></div>
                        </div>
                        <h3 class="text-center" style="font-family: Titr; color: black"> آلمانی</h3><br>
                        <p class="text-center" style="text-align: justify; direction: rtl; font-family: Yekan; font-size: 16px;">
                        <p dir="rtl">
                            بهره گیری از سیستم آموزشی Studio d
                        </p>
                        <p dir="rtl">
                            آماده سازی برای آزمون های انستیتو گوته برای سطوح (A1-C2)
                        </p>
                        <p dir="rtl">
                            برگزاری آزمون های آزمایشی و Start Deutsch 1,2 – Goethe Zertifikat B1,B2 - TestDaF
                        </p>
                        </p>
                    </li>
                </ul>
            </article>
        </div>
    </div>


    <?php
}
function print_bussines() {
    ?>
    <div  style="background: url(img/bus1.jpg) fixed no-repeat; background-size: cover; background-position-y: 0vh; height: 70vh; "></div>
    <div class="pages page-blog col-xs-12" id="page-business" style="height: auto;">
        <div class="" id="page-bs">
            <header>
                <h1 style="color: black;">Recruitment</h1>
            </header>
            <div class="text-center" style="font-size: 18px;font-family: Yekan;text-align: center;direction: rtl;">
                <p>در صورت مطالعه <a href="about_us/about_us.php">۴ مرحله تخصصی گزینش اساتید</a>، فرم زیر را تکمیل نمایید.</p>
                <div class="show-more-cube">
                    <a href="bs/bs.php" target="_blank">
                        <span>Fill<br>Form</span>
                    </a>
                </div>
                <img src="img/loggg.png" alt="logo">
            </div>
        </div>
    </div>
    <?php
}
function print_calender() {
    ?>
    <div class="pages" id="page-calendar" style="overflow-x: hidden">
        <div  style=" background-color: black; ">
            <header>
                <h1 style="color: white;">Calendar</h1>
            </header>
            <div style="height: auto;background-size: 100% auto;">
                <div class="container">
                    <div class="col-md-3 col-xs-6 taghvim">
                        <div  class="calanderhe" style="opacity: 0; position: relative; left: -60vw; width: 100%;margin: 0 auto;background-color: #b3d83a;">
                            <div id="bahar" class="calanderhe">
                                <p class="calanderpp">
                                    شروع ترم یک بهار:
                                    <br>
                                   روزهای فرد: 1394/2/13
                                    <br>
                                   روزهای زوج: 1394/2/9
                                    <br>
                                    <br>
                                    پایان ترم یک بهار:
                                    <br>
                                   روزهای فرد: 1394/3/28
                                    <br>
                                   روزهای زوج: 1394/3/27
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 taghvim">
                        <div  style="position: relative;opacity: 0; left: -50vw; width: 100%;margin: 0 auto;background-color: #72acc4;">
                            <div id="tabestoon" class="calanderhe">
                                <p class="calanderpp">
                                    شروع ترم  یک تابستان:
                                    <br>
                                   روزهای فرد: 1394/3/31
                                    <br>
                                   روزهای زوج: 1394/3/30
                                    <br>
                                    پایان ترم دو تابستان:
                                    <br>
                                   روزهای فرد: 1394/5/15
                                    <br>
                                   روزهای زوج: 1394/5/14
                                    <br><br>

                                    شروع ترم  دو تابستان:
                                    <br>
                                   روزهای فرد: 1394/5/18
                                    <br>
                                   روزهای زوج: 1394/5/17
                                    <br>
                                    پایان ترم دو تابستان:
                                    <br>
                                   روزهای فرد: 1394/6/31
                                    <br>
                                   روزهای زوج: 1394/6/30


                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 taghvim">
                        <div style="position: relative;opacity: 0; right: -50vw; width: 100%;margin: 0 auto;background-color: #efc500;">
                            <div id="paiz" class="calanderhe">
                                <p class="calanderpp">
                                    شروع ترم یک پاییز:
                                    <br>
                                   روزهای فرد: 1394/7/5
                                    <br>
                                   روزهای زوج: 1394/7/4

                                    <br>
                                    پایان ترم یک پاییز:
                                    <br>
                                   روزهای فرد: 1394/8/19
                                    <br>
                                   روزهای زوج: 1394/8/20

                                    <br><br>
                                    شروع ترم دو پاییز:
                                    <br>
                                   روزهای فرد: 1394/8/24
                                    <br>
                                   روزهای زوج: 1394/8/23

                                    <br>
                                    پایان ترم دو پاییز:
                                    <br>
                                   روزهای فرد: 1394/10/6
                                    <br>
                                   روزهای زوج: 1394/10/9


                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 taghvim">
                        <div style="position: relative;opacity: 0; right: -60vw; width: 100%;margin: 0 auto;background-color: #40b4d2;">
                            <div id="zemestoon" class="calanderhe">
                                <p class="calanderpp">
                                    شروع ترم  یک زمستان:
                                    <br>
                                   روزهای فرد: 1394/10/13
                                    <br>
                                   روزهای زوج: 1394/10/12

                                    <br>
                                    پایان ترم یک زمستان:
                                    <br>
                                   روزهای فرد: 1394/11/27
                                    <br>
                                   روزهای زوج: 1394/11/28

                                    <br><br>
                                    شروع ترم  دو زمستان:
                                    <br>
                                   روزهای فرد: 1394/12/2
                                    <br>
                                   روزهای زوج: 1394/12/1

                                    <br>
                                    پایان ترم دو زمستان:
                                    <br>
                                   روزهای فرد: 1395/2/1
                                    <br>
                                   روزهای زوج: 1395/2/2


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php
}
function print_tests() {
    ?>
    <div class="pages" id="page-tests">
        <header>
            <h1>Tests</h1>
            <nav class="submenu" >
                <ul>
                    <li><a href="" class="plugin-filter active" data-filter="all" style="font-size: 14px;">All</a></li>
                    <li><a href="" class="plugin-filter" data-filter="Cambridge"  style="font-size: 14px;">Cambridge</a></li>
                    <li><a href="" class="plugin-filter" data-filter="ETS"  style="font-size: 14px;">ETS</a></li>
                    <li><a href="" class="plugin-filter" data-filter="GMAT"  style="font-size: 14px;">GMAT</a></li>
                    <li><a href="" class="plugin-filter" data-filter="other"  style="font-size: 14px;">Others</a></li>
                </ul>
            </nav>
        </header>
        <article>
            <ul class=" thumbnails plugin-filter-elements portfolio-items" style="padding: 0px; padding-right: 30px; padding-left: 30px">
                <li class=" mix Cambridge mix_all" style="display: inline-block; opacity: 1; ">
                    <a class=""  data-toggle="modal" data-target="#myModal"  onclick="setModal($(this))">
                        <img class="" src="http://elaonline.ir/img/k1.jpg" alt="Treble" >
                        <div class="portfolio-overlay"><h4>PET</h4></div>
                        <div style="display: none"><p dir="rtl"> <strong>آزمون</strong> <strong> PET</strong> </p> <p dir="rtl"> PET که خلاصه شده عبارت Preliminary English Test مي باشد براي افرادي كه مي توانند انگليسي گفتاري و نوشتاري در سطح متوسطه را به كار ببرند طراحي شده است. اين آزمون هر ساله در بيش از 80 كشور و با شركت 70000 داوطلب برگزار مي گردد.آزمون PET در سطح 2 آزمونهاي كمبريج قرار دارد. </p> <p dir="rtl"> قبولي در اين سطح نشانگر اين است كه زبان آموز مهارت هاي زباني لازم براي تعامل در موقعيت هاي مختلف كاري و اجتماعي را در يك جامعه انگليسي زبان داراست. همانند ديگر امتحانات كمبريج، PET چهار مهارت اصلي - خواندن، نوشتن، درك مطلب و مهارت بياني، به همراه دانش لغت و گرامر را شامل مي شود. </p> <p dir="rtl"> <strong>بخش</strong> <strong> </strong> <strong>هاي</strong> <strong> </strong> <strong>آزمون</strong> <strong> PET</strong> </p> <p dir="rtl"> آزمون PET شامل سه دفترچه: Reading and Writing,Listening و Speaking مي باشد. نمره آزمونهاي Reading و Writing مجموعاً 50% نمره آزمون نهائي در حاليكه آزمون هاي Speaking و Listening هر كدام 25% نمره آزمون را شامل مي شود. </p> <p dir="rtl"> <strong>امتحان</strong> <strong> </strong> <strong>اول</strong> <strong>: Reading &amp; Writing (</strong> <strong>مدت</strong> <strong> </strong> <strong>زمان</strong> <strong> 1 </strong> <strong>ساعت</strong> <strong> 30 </strong> <strong>دقيقه</strong> <strong>)</strong> </p> <p dir="rtl"> Reading - ميزان توانائي درك اطلاعات از علائم و مقالات عمومي داوطلبين در اين آزمون سنجيده مي شود. داوطلبين توانائي خود را در استخراج اطلاعات از متون كوتاه به همراه درك نظر نويسنده و تأثير آنها روي خوانندگان جامعه هدف مورد ارزيابي قرار مي دند. </p> <p dir="rtl"> Writing - داوطلبين بايد قادر باشند تا موقعيت ها، نظرات و رويداد ها را شرح داده و بنويسند. </p> <p dir="rtl"> <strong>امتحان</strong> <strong> </strong> <strong>دوم</strong> <strong>: Listening (</strong> <strong>مدت</strong> <strong> </strong> <strong>زمان</strong> <strong> 30 </strong> <strong>دقيقه</strong> <strong>)</strong> </p> <p dir="rtl"> داوطبين توانائيشان را در استخراج اطلاعات از مكالمات ضبط شده با سطح دشواري متفاوت نشان مي دهند. </p> <p dir="rtl"> <strong>امتحان</strong> <strong> </strong> <strong>سوم</strong> <strong>: Speaking (</strong> <strong>مدت</strong> <strong> </strong> <strong>زمان</strong> <strong> </strong> <strong>حدود</strong> <strong> 11 </strong> <strong>دقيقه</strong> <strong>)</strong> </p> <p dir="rtl"> اين آزمون به صورت دو نفره اجرا مي شود. دو ممتحن بيان شفاهي داوطلبين، كه بايد قادر به درك و پاسخ صحيح باشند را مورد ارزيابي قرار مي دهند. </p> <p dir="rtl"> <strong>تاريخهاي</strong> <strong> </strong> <strong>اجراي</strong> <strong> </strong> <strong>آزمون</strong> <strong> PET</strong> </p> <p dir="rtl"> اين امتحان شش بار در سال در تاريخهاي از پيش تعيين شده در ماههاي مارس، مي، ژوئن (دو بار)، نوامبر و دسامبر برگزار مي شود. امتحان PET تنها در 2400 مركز رسمي امتحاني دانشگاه كمبريج در بيش از 130 كشور دنيا انجام مي شود. براي ثبت نام داوطلبين بايد حداقل 10 هفته زودتر از تاريخ امتحان اقدام كنند. </p> <p dir="rtl"> <strong>نحوه</strong> <strong> </strong> <strong>ارزيابي</strong> <strong> </strong> <strong>آزمون</strong> <strong> PET</strong> </p> <p dir="rtl"> به محض اتمام امتحان، كليه برگه هاي امتحاني براي تصحيح و نمره گذاري به دانشگاه كمبريج ارسال مي گردند. تصحيح كنندگان متخصصيني در آموزش زبان انگليسي با سالها تجربه مرتبط هستند. در حين تصحيح تست ها، ممتحنين توسط ناظراني كه در سطح علمي و تجربي بالاتري قرار دارند نظارت مي گردند. </p> <p dir="rtl"> براي آزمون PET چهار نوع نتيجه اعلام مي شود: </p> <p dir="rtl"> • Pass with merit </p> <p dir="rtl"> • Pass </p> <p dir="rtl"> • Narrow Pass </p> <p dir="rtl"> • Fail </p> <p dir="rtl"> نمره نهائي كه داوطلب در امتحان PET دريافت مي كند مجموع نمرات كسب شده در تمامي مفاد امتحاني مي باشد. پنج يا شش هفته پس از امتحان، كليه داوطلبين كارنامه اي را كه نشان گر كليه نتايج آزمون به همراه جدولي كه حاوي عملكرد داوطلبين در هر يك از مفاد امتحان است، دريافت مي كنند.گواهي نامه هاي افراد قبول شده حدوداً 10 هفته پس از امتحان آماده است. </p></div>
                    </a>

                </li>
                <li class=" mix Cambridge mix_all" style="display: inline-block; opacity: 1;" >
                    <a  data-toggle="modal" data-target="#myModal" onclick="setModal($(this))">
                        <img class="" src="http://elaonline.ir/img/k2.jpg" alt="Treble" >
                        <div class="portfolio-overlay"><h4>KET</h4></div>
                        <div style="display: none"><p dir="rtl"> <strong>آزمون</strong> <strong> KET</strong> </p> <p dir="rtl"> KET که خلاصه شده عبارت Key English Test مي باشد، ابتدائي ترين آزمون انگليسي عمومي محسوب مي شود که همه ساله توسط بيش از 30000 زبان آموز در 60 كشور دنيا انجام مي شود. اين سطح از زبان انگليسي براي توسعه مهارتهاي زباني لازم جهت به كارگيري در مناسبات اجتماعي و يا محيط هاي كاري در نظر گرفته شده است. همچون ساير امتحانات كمبريج، آزمون KET چهار مهارت خواندن، نوشتن، درك مطلب شنيداري و توانائي مهارت بياني و همچنين گرامر و لغت انگليسي را پوشش مي دهد. آزمون KET همچنين مي تواند توانائي به كارگيري مهارت زباني زبان آموز را در موقعيت هاي واقعي تشخيص دهد. </p> <p dir="rtl"> نكته مهم: آزمون KET بر پايه سطح بندي انگليسي اتحاديه اروپا استوار است. </p> <p dir="rtl"> <strong>بخش</strong> <strong> </strong> <strong>هاي</strong> <strong> </strong> <strong>آزمون</strong> <strong> KET</strong> </p> <p dir="rtl"> اين امتحان شامل سه قسمت خواندن و نوشتن، شنيداري و گفتاري مي باشد، كه قسمت خواندن و نوشتن 50% كل نمره را تشكيل داده در حاليكه شنيداري و گفتاري هر كدام 25% نمره كل را تشكيل مي دهد. </p> <p dir="rtl"> <strong>امتحان</strong> <strong> </strong> <strong>اول</strong> <strong>: </strong> <strong>شامل</strong> <strong> Reading &amp; Writing (</strong> <strong>مدت</strong> <strong> </strong> <strong>زمان</strong> <strong> 1 </strong> <strong>ساعت</strong> <strong> 10 </strong> <strong>دقيقه</strong> <strong>)</strong> </p> <p dir="rtl"> متون Reading شامل متن هاي كوتاه كه ممكن است درباره علائم اجتماعي عمومي و مقالات غير تخصصي عمومي باشد. آزمون دهندگان بايد توانائيشان را در به كارگيري استراتژي هائي براي درك متون نشان دهند. براي قسمت Writing زبان آموزان بايد بتوانند كارهاي متفاوتي مانند پر كردن جاهاي خالي در متن، پر كردن فرم و نوشتن يادداشت كوتاه را انجام دهند. </p> <p dir="rtl"> <strong>امتحان</strong> <strong> </strong> <strong>دوم</strong> <strong>: </strong> <strong>تست</strong> <strong> Listening (</strong> <strong>مدت</strong> <strong> </strong> <strong>زمان</strong> <strong> 25 </strong> <strong>دقيقه</strong> <strong>)</strong> </p> <p dir="rtl"> زبان آموزان بايد توانائي شان را در درك آنچه كه مي شنوند با جواب به سؤالات نشان دهند. </p> <p dir="rtl"> <strong>امتحان</strong> <strong> </strong> <strong>سوم</strong> <strong>: </strong> <strong>تست</strong> <strong> Speaking (</strong> <strong>مدت</strong> <strong> </strong> <strong>زمان</strong> <strong> 8 </strong> <strong>الي</strong> <strong> 10 </strong> <strong>دقيقه</strong> <strong>)</strong> </p> <p dir="rtl"> زبان آموزان به صورت دو نفره تست Speaking را انجام مي دهند. در اين قسمت از تست مهارت هاي زباني و توانائي تعامل آنها با استفاده از زبان انگليسي مورد ارزيابي قرار مي گيرد ، دانش آموزان با يكديگر صحبت مي كنند و در اين ميان ممتحن چندين سؤال شخصي از آنها مي پرسد. </p> <p dir="rtl"> <strong>تاريخهاي</strong> <strong> </strong> <strong>اجراي</strong> <strong> </strong> <strong>آزمون</strong> <strong> KET</strong> </p> <p dir="rtl"> اين امتحان شش بار در سال، در تاريخ هاي از پيش تعيين شده در ماه هاي مارس، مي، ژوئن(دو بار)، نوامبر و دسامبر اجرا مي شود. امتحان KET معمولاً در مراكز رسمي امتحانات دانشگاه كمبريج اجرا مي شود كه بيش از 2400 مركز رسمي در بيش از 130 كشور وجود دارد. </p> <p dir="rtl"> <strong>نحوه</strong> <strong> </strong> <strong>ارزيابي</strong> <strong> </strong> <strong>آزمون</strong> <strong> KET</strong> </p> <p dir="rtl"> به محض اتمام امتحان، كليه برگه هاي امتحاني براي تصحيح و نمره گذاري به دانشگاه كمبريج ارسال مي گردند. تصحيح كنندگان متخصصيني در آموزش زبان انگليسي با سالها تجربه مرتبط هستند. در حين تصحيح تست ها، ممتحنين توسط ناظراني كه در سطح علمي و تجربي بالاتري قرار دارند نظارت مي گردند. </p> <p dir="rtl"> نتيجه امتحان KET با چهار نمره Fail , Narrow Pass, Pass, Pass with Merit اعلام مي گردد. آخرين نمره اي كه زبان آموز در امتحان KET دريافت مي كند مجموع نمراتش در چهار مهارت ذكر شده مي باشد. پنج يا شش هفته پس از امتحان تمامي زبان آموزان كارنامه اي كه نمرات آنها را منعكس و نموداري كه نشانگر عملكرد زبان آموز در هر تست مي باشد را دريافت مي كنند. درصورت موفقيت در امتحان، مدرك قبولي زبان آموز پس از طي مدت 10 هفته به آدرس وي ارسال مي گردد. </p></div>
                    </a>
                </li>
                <li class=" mix Cambridge mix_all" style="display: inline-block; opacity: 1;" >
                    <a  data-toggle="modal" data-target="#myModal" onclick="setModal($(this))">
                        <img class="" src="http://elaonline.ir/img/k3.jpg" alt="Treble">
                        <div class="portfolio-overlay"><h4>FCE</h4></div>
                        <div style="display: none"><p dir="rtl"> <strong>آزمون</strong> <strong> FCE</strong> </p> <p dir="rtl"> اولین گواهی در زبان انگلیسی (First Certificate in English) و یا به اختصار FCE یکی از مهم‌ترین امتحاناتیست که توسط دانشگاه کمبریج برگزار می‌شود. قبول شدگان در این آزمون توانایی استفاده از زبان انگلیسی در مسائل کاری و یا تحصیلی را خواهند داشت. این امتحان شامل بخش‌های زیر است: </p> <p dir="rtl"> • خواندن (۶۰ دقیقه) </p> <p dir="rtl"> • نوشتن (شامل ۲ انشاء - ۸۰ دقیقه) </p> <p dir="rtl"> • کاربرد انگلیسی (۴۵ دقیقه) </p> <p dir="rtl"> • گوش کردن (۴۰ دقیقه) </p> <p dir="rtl"> • مکالمه (شامل صحبت کردن با یک زبان‌آموز دیگر - ۱۵ دقیقه) </p> <p dir="rtl"> اين امتحان براي زبان آموزان داراي سطح Upper-Intermediate طراحي گرديده است، كه سالانه 250000 نفر در بيش از 100 كشور در آن شركت مي كنند. آزمون FCE در سطح 3 آزمونهاي كمبريج قرار دارد. در اين سطح، زبان آموزان بايد به راحتي بتوانند در يك كشور انگليسي زبان به عنوان توريست تعامل داشته باشند. همچون ساير امتحانات دانشگاه كمبريج، FCE مهارتهاي چهارگانه زبان را به همراه گرامر و لغت پوشش ميدهد. همچنين FCE مهارت برقراري ارتباط دانش آموز، در موقعيتهاي واقعي را تشخيص مي دهد.كارفرمايان روي مدرك FCE بسيار حساب مي كنند. </p> <p dir="rtl"> <strong>بخش</strong> <strong> </strong> <strong>هاي</strong> <strong> </strong> <strong>آزمون</strong> <strong> FCE</strong> </p> <p dir="rtl"> امتحان FCE از 5 كتابچه شامل: خواندن، نوشتن، كاربرد انگليسي، گوش دادن و صحبت كردن تشكيل شده است. هر كتابچه 20% از كل نمره را تشكيل مي دهد. </p> <p dir="rtl"> امتحان اول: خواندن (مدت زمان 1 ساعت) </p> <p dir="rtl"> اين امتحان شامل سه قسمت و هر قسمت شامل يك متن متفاوت با سؤالات درك مطلب مربوطه مي باشد. </p> <p dir="rtl"> از زبان آموزان انتظار می رود كه نكات اصلي متون را درك، شناسائي و اطلاعات خاص آن را با پاسخگوئي به سئوالات استخراج كنند. </p> <p dir="rtl"> امتحان دوم: نوشتن (مدت زمان 1 ساعت و 20 دقيقه) </p> <p dir="rtl"> داوطلبين بايد دو نوشته هر كدام به طول 120 تا 180 كلمه بنويسند. اولين نوشته يك نامه تجاري مي باشد و دومي توسط داوطلب انتخاب مي شود. </p> <p dir="rtl"> امتحان سوم: كاربرد انگليسي (مدت زمان 45 دقيقه) </p> <p dir="rtl"> داوطلبان به تعدادي از سؤالات كه توانائي آنها رادر تشخيص و به كارگيري ساختارهاي گرامري به همراه لغت مي سنجد پاسخ مي دهند. </p> <p dir="rtl"> امتحان چهارم: گوش دادن (حدوداً 40 دقيقه) </p> <p dir="rtl"> داوطلبين به تعدادي مكالمه دو نفره و تك نفره گوش خواهند داد. اين امتحان توانائي درك اطلاعات ضروري به همراه استخراج اطلاعات از CD صوتي پخش شده را ارزيابي مي كنند. </p> <p dir="rtl"> امتحان پنجم: صحبت كردن (حدوداً 14 دقيقه) </p> <p dir="rtl"> داوطلبين به صورت دو نفره مصاحبه مي شوند. با حضور دو نفر ممتحن كه يكي مصاحبه را انجام داده و ديگري روي عملكرد داوطلبين تمركز مي كند. تست شامل چهار قسمت است كه در قسمت اول ممتحن سئوالاتي در مورد "آشنائي با شما" را مطرح مي كند و در قسمت دوم دو قطعه عكس به داوطلبين داده مي شود كه داوطلب در مورد عكسي كه به وي داده شده بدون وقفه به مدت يك دقيقه در مورد آن صحبت مي كند و همچنين سئوالي را در مورد عكس داوطلب ديگر زماني كه صحبت يك دقيقه اي او تمام شد(داوطلب دوم) پاسخ مي دهند. در بخش سوم ممتحن به هر دو داوطلب دستورالعملهائي به همراه يك سري عكس مي دهد و داوطلبين بايد در مورد سؤالهایي كه در مورد عكسها از آنها پرسيده مي شود به نوعي از توافق برسند. در قسمت چهارم ممتحن داوطلبين را در بحثي كه درباره موضوع عمومي كه در قسمت سوم حاصل شد، همراهي خواهد كرد. </p> <p dir="rtl"> <strong>تاريخهاي</strong> <strong> </strong> <strong>اجراي</strong> <strong> </strong> <strong>آزمون</strong> <strong> FCE</strong> </p> <p dir="rtl"> اين امتحان شش بار در سال در تاريخهاي از پيش تعيين شده در ماههاي مارس، مي، ژوئن (دو بار)، نوامبر و دسامبر برگزار مي شود. امتحان PET تنها در 2400 مركز رسمي امتحاني دانشگاه كمبريج در بيش از 130 كشور دنيا انجام مي شود.براي ثبت نام داوطلبين بايد حداقل 10 هفته زودتر از تاريخ امتحان اقدام كنند. </p> <p dir="rtl"> جهت ثبت نام، شركت در كلاسهاي آمادگي و كسب اطلاع درباره تاريخهاي امتحانات مي توانيد با امور آموزش آکادمی زبان ELA تماس حاصل نمائيد. </p> <p dir="rtl"> <strong>نحوه</strong> <strong> </strong> <strong>ارزيابي</strong> <strong> </strong> <strong>آزمون</strong> <strong> FCE</strong> </p> <p dir="rtl"> به محض اتمام امتحان، كليه برگه هاي امتحاني براي تصحيح و نمره گذاري به دانشگاه كمبريج ارسال مي گردند. تصحيح كنندگان متخصصيني در آموزش زبان انگليسي با سالها تجربه مرتبط هستند. در حين تصحيح تست ها، ممتحنين توسط ناظراني كه در سطح علمي و تجربي بالاتري قرار دارند نظارت مي گردند. </p> <p dir="rtl"> پنج نوع نمره براي FCE وجود دارد: </p> <p dir="rtl"> A, B, C: (Passing grades) </p> <p dir="rtl"> D, E: (failed) </p> <p dir="rtl"> پنج يا شش هفته پس از امتحان، كليه داوطلبين كارنامه اي را كه نشانگر كليه نتايج آزمون به همراه جدولي كه حاوي عملكرد داوطلبين در هر يك از مفاد امتحان است، دريافت مي كنند. گواهي نامه هاي افراد قبول شده حدوداً 10 هفته پس از امتحان آماده است. </p></div>
                    </a>
                </li>
                <li class=" mix Cambridge mix_all" style="display: inline-block; opacity: 1;" >
                    <a  data-toggle="modal" data-target="#myModal" onclick="setModal($(this))">
                        <img class="" src="http://elaonline.ir/img/k4.jpg" alt="Treble">
                        <div class="portfolio-overlay"><h4>CAE</h4></div>
                        <div style="display: none"><p dir="rtl"> <strong>آزمون</strong> <strong> CAE</strong> </p> <p dir="rtl"> CAE مخفف عبارت Certificate in Advanced English مي باشد. اين آزمون، آزموني در سطح پيشرفته براي زبان آموزان انگليسي است، كه سالانه حدود 5000 نفر در بيش از 60 كشور جهان در آن شركت مي كنند. <br/> CAE چهارمين سطح از سري امتحانات انگليسي عمومي دانشگاه كمبريج مي باشد و توانائي زبان آموز در برقراري ارتباط به همراه اعتماد به نفس در اكثر موقعيتهاي زندگي روزمره را مورد ارزيابي قرار مي دهد. <br/> همانند ساير امتحانات كمبريج CAE نيز چهار مهارت اصلي زبانListening and Speaking -Writing Reading - به همراه دانش گرامر و لغت و همچنين توانائي زبان آموز در استفاده از انگليسي جهت برقراري ارتباط در موقعيتهاي واقعي را مورد بررسي قرار مي دهد. <br/> در سراسر دنيا دانشگاه ها و شركت ها CAE را به عنوان سندي كه داوطلب توانائي استفاده از انگليسي در موقعيتهاي اجتماعي و حرفه اي را دارا مي باشد، مورد پذيرش قرار مي دهند. </p> <p dir="rtl"> <strong>بخشهاي</strong> <strong> </strong> <strong>آزمون</strong> <strong> CAE</strong> </p> <p dir="rtl"> آزمون CAE شامل پنج بخش - Use of English and Speaking, Listening, Writing, Reading مي باشد. <br/> <strong>- Reading </strong> <strong>مدت</strong> <strong> </strong> <strong>زمان</strong> <strong> 1 </strong> <strong>ساعت</strong> <strong> </strong> <strong>و</strong> <strong> 15 </strong> <strong>دقيقه</strong> <br/> امتحان Reading توانائي داوطلب را در خواندن و درك متوني كه از منابع گسترده اي همچون كتابها، روزنامه ها و مجلات جمع آوري شده اند ارزيابي مي كند. از داوطلبين انتظار مي رود كه توانائي فهم خلاصه مطلب، نكات مهم، جزئيات، ساختارمتن و يا اطلاعات خاص، استنباط معنا و تشخيص نظرات و رويكردهاي نويسنده را داشته باشند. <br/> <strong>- Writing </strong> <strong>مدت</strong> <strong> </strong> <strong>زمان</strong> <strong> 2 </strong> <strong>ساعت</strong> <br/> امتحان Writing توانائي داوطلب براي نوشتن انواع متون غير تخصصي همانند نامه ها، مقالات، گزارشات، نقدها كه همگي براي منظوري معين و مخاطبي خاص هستند، با موضوعات متنوع مورد ارزيابي قرار مي گيرد. پاسخها بايد در حدود 250 كلمه نوشته شوند. <br/> <strong>- Use of English </strong> <strong>مدت</strong> <strong> </strong> <strong>زمان</strong> <strong> 1 </strong> <strong>ساعت</strong> <strong> </strong> <strong>و</strong> <strong> 30 </strong> <strong>دقيقه</strong> <br/> در آزمون كاربرد انگليسي، از داوطلبين انتظار مي رود دانش و كنترل سيستم زبانيشان را با پاسخگوئي به سؤالات مختلف در سطح جمله و كل نوشته، كه اين متون بر اساس نوشته هاي برگرفته شده از متون اصلي مي باشند، نشان دهند. اين آزمون شامل پركردن جاي خالي، تصحيح اشتباهات، كلمه سازي، تعويض لحن جمله و سئوالات تكميل متن مي باشد. <br/> <strong> - Listening</strong> <strong>مدت</strong> <strong> </strong> <strong>زمان</strong> <strong> </strong> <strong>حدود</strong> <strong> 45 </strong> <strong>دقيقه</strong> <br/> آزمون Listening توانائي داوطلب را براي درك معاني انگليسي گفتاري و استخراج اطلاعات جزئي و خاص و درك نظرات و رويكردهاي گوينده مورد ارزيابي قرار مي دهد. محتواي اين آزمون از انواع متون كه شامل: مصاحبه ها، مباحثات، كنفرانس ها و مكالمات مي شود، جمع آوري می گردد. <br/> <strong>- Speaking </strong> <strong>مدت</strong> <strong> </strong> <strong>زمان</strong> <strong> </strong> <strong>حدود</strong> <strong> 15 </strong> <strong>دقيقه</strong> <br/> آزمون Speaking توانائي تعامل داوطلب در مكالمات روزمره انگليسي در موقعيتهاي مختلف زباني را مورد ارزيابي قرار مي دهد. امتحان از چهار قسمت تشكيل شده است كه عبارتنداز: قسمت مصاحبه، قسمت صحبت چند دقيقه اي تك نفره، و يك قسمت چند نفره به همراه ممتحن و قسمت پاياني به صورت مباحثه مي باشد. از نقاشي ها و عكس ها براي كمك به صحبت داوطلبين استفاده مي شود. درضمن امتحان Speaking معمولاً به صورت دو نفره برگزار مي شود. </p> <p dir="rtl"> <strong>تاريخهاي</strong> <strong> </strong> <strong>برگزاری</strong> <strong> </strong> <strong>آزمون</strong> <strong> CAE</strong> </p> <p dir="rtl"> اين آزمون دو بار در سال در ماه هاي ژوئن و دسامبر برگزار مي شود. امتحان CAE تنها در 2400 مركز رسمي امتحاني دانشگاه كمبريج در بيش از 130 كشور دنيا انجام مي شود. براي ثبت نام داوطلبين بايد حداقل 10 هفته زودتر از تاريخ امتحان اقدام كنند. امكان ثبت نام از طريق UCLES وجود ندارد. </p> <p dir="rtl"> <strong>نحوه</strong> <strong> </strong> <strong>ارزيابي</strong> <strong> </strong> <strong>آزمون</strong> <strong> CAE</strong> </p> <p dir="rtl"> به محض اتمام امتحان، كليه برگه هاي امتحاني براي تصحيح و نمره گذاري به دانشگاه كمبريج ارسال مي گردند. تصحيح كنندگان متخصصيني در آموزش زبان انگليسي با سالها تجربه مرتبط هستند. در حين تصحيح تست ها، ممتحنين توسط ناظراني كه در سطح علمي و تجربي بالاتري قرار دارند نظارت مي گردند. </p> <p dir="rtl"> پنج نوع نمره براي CAE وجود دارد: </p> <p dir="rtl"> • A, B, C (Passing grades) </p> <p dir="rtl"> • D, E (failed) </p> <p dir="rtl"> پنج يا شش هفته پس از امتحان، كليه داوطلبين كارنامه اي را كه نشانگر كليه نتايج آزمون به همراه جدولي كه حاوي عملكرد داوطلبين در هر يك از مفاد امتحان است، دريافت مي كنند. گواهي نامه هاي افراد قبول شده حدوداً 10 هفته پس از امتحان آماده است. </p></div>
                    </a>
                </li>
                <li class=" mix Cambridge mix_all" style="display: inline-block; opacity: 1;" >
                    <a  data-toggle="modal" data-target="#myModal" onclick="setModal($(this))">
                        <img class="" src="http://elaonline.ir/img/k5.jpg" alt="Treble">
                        <div class="portfolio-overlay"><h4>CPE</h4></div>
                        <div style="display: none"><p dir="rtl"> <strong>آزمون</strong> <strong> CPE</strong> </p> <p dir="rtl"> CPE خلاصه شده عبارت Certificate of Proficiency in English مي باشد. اين آزمون، آزموني فوق پيشرفته براي زبان آموزان انگليسي است، كه سالانه حدود 60000 نفر در بيش از 70 كشور جهان در آن شركت مي كنند. </p> <p dir="rtl"> CPE پنجمين و بالاترين سطح از سري امتحانات انگليسي عمومي دانشگاه كمبريج مي باشد. در اين مرحله زبان آموزان با استانداردي از انگليسي در حد يك انگليسي زبان تحصيل كرده رور به رو مي شوند و از آنها انتظار مي رود كه تقزيباً با تمامي موقعيتهاي جامعه انگليسي زبان تعامل داشته باشند. </p> <p dir="rtl"> همانند ساير امتحانات كمبريج CPE نيز چهار مهارت اصلي زبان - Listening and Speaking, Writing, Reading - به همراه دانش گرامر و لغت و همچنين توانائي زبان آموز در استفاده از انگليسي جهت برقراري ارتباط در موقعيت هاي واقعي را مورد بررسي قرار مي دهد. </p> <p dir="rtl"> CPE تقريباً توسط تمامي دانشگاه ها و كالج ها در بريتانيا و بسياري از كشورهاي ديگر به عنوان سندي كه نشان گر دارا بودن سطح مناسبي از زبان انگليسي (زبان آموز) جهت ورود به دوره هاي تحصيلات عالي و يا دكترا است، شناخته مي شود. همچنين بسياري از كارفرمايان CPE را بسيار معتبر مي دانند - آنها به اين اطمينان خاطر مي رسند كه كارمندي با اين سطح از دانش انگليسي قادر به تعامل از نظر زباني در بسياري از موقعيتها خواهد بود و زبان انگليسي را از نظر فرهنگي نيز به صورت مناسب به كار خواهد برد. </p> <p dir="rtl"> <strong>بخشهاي</strong> <strong> </strong> <strong>آزمون</strong> <strong> CPE</strong> </p> <p dir="rtl"> آزمون CPE شامل پنج بخش Use of English and Speaking, Listening, Writing, Reading مي باشد. نمره هر بخش شامل 20% نمره فاينال مي باشد. </p> <p dir="rtl"> - Reading (مدت زمان 1 ساعت و 30 دقيقه) </p> <p dir="rtl"> امتحان Reading توانائي داوطلب را در خواندن و درك متوني كه از منابع گسترده اي همچون كتابهاي تخيلي و علمي، ژورنالها، روزنامه ها و مجلات جمع آوري شده اند ارزيابي مي كند. از داوطلبين انتظار مي رود كه معني انگليسي نوشتاري را در سطح كلمه، عبارت، جمله ، پاراگراف و تمام متن درك نمايند. اين عمل شامل درك محتوا، نطم و سازماندهي و پرورش ايده هاي مبتني بر متون به همراه نظرات و رويكردهاي نويسنده مي باشد. </p> <p dir="rtl"> - Writing (مدت زمان 2 ساعت) </p> <p dir="rtl"> امتحان Writing توانائي داوطلب براي نوشتن انواع متون غير تخصصي همانند نامه ها، مقالات، گزارشات، نقدها كه همگي براي منظوري معين و مخاطبي خاص، با موضوعات متنوع مورد ارزيابي قرار مي گيرد. امتحان Writing همچنين شامل سئوالاتي براي متون از پيش تعيين شده مي باشد. متون تعيين شده رمانهائي هستند كه شما بايد از قبل مطالعه كرده و به يك سئوال در مورد آنها پاسخ دهيد. ليستي از كتابهاي تعيين شده براي هر سال در وب سايت Cambridge ESOL مي باشد. </p> <p dir="rtl"> Use of English - (مدت زمان 1 ساعت و 30 دقيقه) </p> <p dir="rtl"> در آزمون كاربرد انگليسي، داوطلب بايد توانائي پاسخگوئي به انواع سؤالات در سطح كلمه، جمله و متن را داشته باشد. اين سؤالات شامل پر كردن جاي خالي، كلمه سازي، سئوالات درك مطلب و نوشتن خلاصه مي باشد. </p> <p dir="rtl"> Listening- (مدت زمان حدود 40 دقيقه) </p> <p dir="rtl"> آزمون Listening توانائي زبان آموز را براي درك متوني كه از منابع مختلفي شامل: مصاحبه ها، مباحثه ها، كنفرانس ها و مكالمات مي باشد، مورد ارزيابي قرار مي دهد. اين امتحان توانائي درك معني انگليسي گفتاري به همراه استخراج اطلاعات و درك نظرات و رويكردهاي بيننده را مورد ارزيابي قرار مي دهد. </p> <p dir="rtl"> - Speaking (مدت زمان حدود 19 دقيقه) </p> <p dir="rtl"> آزمون Speaking توانائي تعامل داوطلب در مكالمات روزمره انگليسي در موقعيتهاي مختلف زباني را مورد ارزيابي قرار مي دهد. امتحان شامل سه قسمت است كه قسمت اول به صورت مصاحبه، قسمت دوم به صورت يك صحبت دو نفره بين دو داوطلب، و قسمت پاياني شامل يك صحبت چند دقيقه اي به همراه بحثي كه بين داوطلب و ممتحن برگزار مي شود، به پايان مي رسد. در اثناي امتحان داوطلبين توسط تصاوير و اشارات نوشتاري راهنمائي مي گردند. داوطلبين معمولاً امتحان را به صورت دونفره برگزار مي كنند. </p> <p dir="rtl"> <strong>تاريخهاي</strong> <strong> </strong> <strong>آزمون</strong> <strong> CPE</strong> </p> <p dir="rtl"> اين آزمون دو بار در سال در ماه هاي ژوئن و دسامبر برگزار مي شود. امتحان CPE تنها در 2400 مركز رسمي امتحاني دانشگاه كمبريج در بيش از 130 كشور دنيا انجام مي شود. براي ثبت نام داوطلبين بايد حداقل 10 هفته زودتر از تاريخ امتحان اقدام كنند امكان ثبت نام از طريق UCLES وجود ندارد. </p> <p dir="rtl"> <strong>نحوه</strong> <strong> </strong> <strong>ارزيابي</strong> <strong> </strong> <strong>آزمون</strong> <strong> CPE</strong> </p> <p dir="rtl"> به محض اتمام امتحان، كليه برگه هاي امتحاني براي تصحيح و نمره گذاري به دانشگاه كمبريج ارسال مي گردند. تصحيح كنندگان متخصصيني در آموزش زبان انگليسي با سالها تجربه مرتبط هستند. در حين تصحيح تست ها، ممتحنين توسط ناظراني كه در سطح علمي و تجربي بالاتري قرار دارند نظارت مي گردند. </p> <p dir="rtl"> پنج نوع نمره براي CPE وجود دارد: </p> <p dir="rtl"> • A, B, C (Passing grades) </p> <p dir="rtl"> • D, E (failed) </p> <p dir="rtl"> پنج يا شش هفته پس از امتحان، كليه داوطلبين كارنامه اي را كه نشانگر كليه نتايج آزمون به همراه جدولي كه حاوي عملكرد داوطلبين در هر يك از مفاد امتحان است، دريافت مي كنند. گواهي نامه هاي افراد قبول شده حدوداً 10 هفته پس از امتحان آماده است. </p></div>
                    </a>
                </li>
                <li class=" mix Cambridge mix_all" style="display: inline-block; opacity: 1;">
                    <a  data-toggle="modal" data-target="#myModal" onclick="setModal($(this))">
                        <img class="" src="http://elaonline.ir/img/k6.jpg" alt="Treble">
                        <div class="portfolio-overlay"><h4>BEC</h4></div>
                        <div style="display: none"><p dir="rtl"> <strong>آشنایی</strong> <strong> </strong> <strong>با</strong> <strong> </strong> <strong>آزمون</strong> <strong> BEC</strong> </p> <p dir="rtl"> BEC مخفف عبارت Business English Certificate مي باشد. مدارك زبان انگليسي دانشگاه كمبريج براي مديريت بازرگاني توسط كارفرمايان، وزارتخانه ها، موسسات دولتي و سازمانهاي تخصصي در سراسر دنيا مورد تأييد مي باشد. اين سري مدارك سه گانه، سند قاطعي مبني بر داشتن مهارتهاي انگليسي لازم جهت تبديل شما به عنوان يك سرمايه انساني براي كارفرمايتان مي باشند. </p> <p dir="rtl"> این آزمون دارای 3 سطح می باشد: </p> <p dir="rtl"> Preliminary: اين امتحان براي سطح مبتدي است كه راه را براي امتحان Vantage هموار مي كند. </p> <p dir="rtl"> Vantage: اين امتحان براي زبان آموزان سطح متوسط است، كه گذرگاهي براي دستيابي به امتحان Higher مي باشد. </p> <p dir="rtl"> Higher: اين امتحان مناسب براي زبان آموزان داري سطح پيشرفته مي باشد. </p> <p dir="rtl"> درهر سه سطح، از شما تست لغات مديريت بازرگاني كه به اشكال مختلف از قبيل : لغت در جمله، لغت در متن و ... مي باشد به عمل مي آيد. موضوعات امتحان BEC شامل انواع معرفي ها، محيط اداري، محيط كسب و كار، زمانهاي آزاد، روابط با همكاران و مشتريان، مسافرتهاي كاري، ملاقاتها، مكالمات بازرگاني تلفني، ايمني و سلامت، سلسله مراتب اداري شركتها، فرآيندها، سيستمها، محصولات و سرويسها، پيشبرد اهداف و نتايج حاصله و غيره مي باشد. براي اين تست دو نوع نتيجه اعلام مي شود: يكي براي Listening, Reading, Writing و ديگري براي Speaking. </p> <p dir="rtl"> سوالات این آزمون شامل 4 بخش می باشد: </p> <p dir="rtl"> <strong>خواندن</strong> <strong> </strong> <strong>و</strong> <strong> </strong> <strong>درك</strong> <strong> </strong> <strong>مطلب</strong> </p> <p dir="rtl"> - سئوالاتي در مورد پيغامهاي كوتاه، اعلانات، مقالات، گزارشات و غيره . </p> <p dir="rtl"> - ايجاد رابطه بين شرح يك تصوير يا جدول و لغات مربوط به آن </p> <p dir="rtl"> - لغت براي درك مطلب و گرامر </p> <p dir="rtl"> - تصحيح اشتباهات متن </p> <p dir="rtl"> <strong>نوشتن</strong> </p> <p dir="rtl"> - نوشتن پيام هاي كو تاه </p> <p dir="rtl"> - نوشتن نامه ها و گزارشات </p> <p dir="rtl"> <strong>شنيداري</strong> </p> <p dir="rtl"> - تكميل كردن پيامها بر اساس اطلاعات شنيده شده </p> <p dir="rtl"> - انتخاب گزينه صحيح بين متن كوتاه گزيده با توصيف عمومي آن </p> <p dir="rtl"> - انتخاب صحيح گزينه درك مطلب مكالمات، مصاحبه ها و يا ارائه مطالب </p> <p dir="rtl"> <strong>مكالمه</strong> </p> <p dir="rtl"> - مكالمه با ممتحن درباره كار و موضوعات عمومي </p> <p dir="rtl"> - تبادل اطلاعات با شركت كننده ديگر درباه موضوعات مربوط به يك حرفه خاص </p> <p dir="rtl"> - بحث در مورد موضوعات عمومي مرتبط با دنياي كار </p></div>
                    </a>
                </li>
                <li class=" mix Cambridge mix_all" style="display: inline-block; opacity: 1;">
                    <a  data-toggle="modal" data-target="#myModal" onclick="setModal($(this))">
                        <img class="" src="http://elaonline.ir/img/k7.jpg" alt="Treble">
                        <div class="portfolio-overlay"><h4>IELTS</h4></div>
                        <div style="display: none"><p> <strong></strong> <br/> </p> <p> IELTS که مخفف عبارت (International English Language Testing System) به معنای نظام بین‌المللی ارزش‌یابی زبان انگلیسی است، یکی از معتبرترین آزمون‌های زبان انگلیسی حال حاضر است که در سراسر دنیا برگزار می‌شود. آیلتس در واقع آزمونی بریتانیایی بوده است و از این نظر در مقابل تافل، آزمون آمریکایی قرار می‌گیرد. این آزمون با همکاری مشترک دانشگاه کمبریج انگلستان، شورای فرهنگی بریتانیا و مرکز آیلتس استرالیا برگزار می‌شود. </p> <p dir="rtl"> لینک دانشگاه کمبریج : http://www.cam.ac.uk/ </p> <p dir="rtl"> لینک شورای فرهنگی برتانیا: http://www.britishcouncil.org/ </p> <p dir="rtl"> مرکز آیلتس استرالیا: http://www.idp.com/ </p> <p dir="rtl"> این امتحان معیاری است جهت سنجش دانش زبان انگلیسی اشخاصی که می‌خواهند در کشورهای انگلیسی زبان درس بخوانند، کار کنند و یا به آن کشورها مهاجرت نمایند. این امتحان از بالاترین و معتبرترین استانداردهای بین‌المللی جهت سنجش سطح زبان انگلیسی داوطلبان پیروی می‌کند و چهار توانائی Writing،Reading،Listening و Speaking را مورد ارزیابی قرار می‌دهد. بسیاری از دانشگاهها در کشورهای مختلفی همچون کانادا، انگلستان، استرالیا، نیوزلند و آمریکا امتحان IELTS را به رسمیت می‌شناسند. همچنین جهت مهاجرت به کشورهای کانادا، استرالیا و نیوزلند، داشتن مدرک IELTS الزامی است. این امتحان در بیش از ۲۷۰ مرکز امتحانی واقع در ۱۱۰ کشور مختلف دنیا برگزار می‌گردد. شرکت کنندگان در امتحان IELTS به طیف وسیعی از سوالات بسیار ساده تا بسیار مشکل پاسخ می‌دهند. نمره هر بخش از امتحان بین صفر تا ۹ می‌باشد. نمره کلی امتحان با معدل گیری از نمره چهار بخش امتحان محاسبه می‌گردد. در کارنامه IELTS، علاوه بر نمره کلی، نمره هر بخش بطور جداگانه ذکر می‌شود. </p> <p dir="rtl"> هر دانشگاه برای پذیرش متقاضیان حداقل نمره‌ای را مشخص می‌کند و اکثر آنها حداقل نمره کلی ۶٫۵ را می‌خواهند به طوریکه نمره هر بخش هم از ۶ کمتر نباشد (البته این قاعده کلی است و هر دانشگاه شرایط خاص خود را دارد). به عنوان مثالی دیگر، برای اینکه حداکثر امتیاز زبان انگلیسی را جهت مهاجرت به کانادا کسب نمایید، باید در هر چهار قسمت امتحان IELTS حداقل نمره ۷ بگیرید. </p> <p dir="rtl"> در روز امتحان ابتدا به سوالات Listening سپس به سوالات Reading و بعد به سوالات Writing پاسخ خواهید داد. تاریخ و ساعت برگزاری قسمت Speaking در روز امتحان به شرکت کنندگان اعلام می‌شود و معمولاً امتحان Speaking از عصر روز امتحان شروع شده و به مدت ۵ روز ادامه می‌یابد. داوطلبانی که از شهرهای دیگر به تهران می‌آیند، برای امتحان Speaking در اولویت هستند و باید در هنگام ثبت نام، اسم خود را در لیستی جداگانه به ثبت برسانند. تمامی مراحل کتبی امتحان باید با مداد نوشته شود و داوطلبان اجازه استفاده از خودنویس یا خودکار را در هیچ مرحله‌ای از امتحان کتبی ندارند. </p> <p dir="rtl"> نتایج امتحان IELTS دو هفته پس از پایان یافتن آزمون Speaking اعلام خواهد شد و کارنامه فقط به شخص امتحان دهنده داده می‌شود و از طریق تلفن، فکس و یا email قابل در یافت نیست. </p> <p dir="rtl"> تا ۵ کارنامه برای دانشگاهها و موسسات مورد در خواست شما بصورت رایگان توسط دفاتر برگزار کننده امتحان ارسال می‌گردد، بشرطی که از تار یخ امتحان شما یکماه نگذشته باشد. اگر بیشتر از یکماه از تاریخ امتحانتان سپری شود و یا بیشتر از ۵ کارنامه بخواهید برایتان ارسال بشود، به ازای هر کارنامه باید مبلغی را بپردازید. اکثر دانشگاهها کارنامه IELTS را که بیشتر از دو سال از تاریخ آن گذشته باشد، قبول ندارند. </p> <p dir="rtl"> امتحان IELTS در دو نوع Academic و General Training برگزار می‌شود. امتحان Academic مخصوص کسانی است که می‌خواهند در یک دانشگاه انگلیسی زبان ادامه تحصیل دهند در حالیکه امتحان General Training مخصوص کسانی است که می‌خواهند به یک کشور انگلیسی زبان مانند کانادا، استرالیا و یا نیوزلند مهاجرت کنند. </p> <p dir="rtl"> همانطور که گفته شد، در امتحان IELTS، توانائیهای Writing،Reading،Listening و Speaking در چهار قسمت جداگانه سنجیده می‌شوند. در حالیکه قسمتهای Listening و Speaking برای داوطلبان Academic و General Training به روش کاملا مشابهی مورد ارزیابی قرار می‌گیرد، هر یک از این دو گروه سوالات جداگانه‌ای در قسمتهای Reading و Writing دریافت می‌کنند. مسولیت نوع امتحانی که می‌خواهید در آن شرکت نمائید بر عهده شماست و باید در هنگام ثبت نام، نوع امتحان مورد نظرتان را در فرم ثبت نام قید کنید. </p> <table cellspacing="0" cellpadding="0"> <tbody> <tr> <td valign="middle"> <p dir="rtl"> <strong>سطح</strong> </p> </td> <td valign="middle"> <p dir="rtl"> <strong>توضیح</strong> </p> </td> </tr> <tr> <td valign="middle"> <p> ۰ </p> </td> <td valign="middle"> <p dir="rtl"> هیچ اطلاعات قابل ارزیابی ندارد. </p> </td> </tr> <tr> <td valign="middle"> <p> ۱ </p> </td> <td valign="middle"> <p dir="rtl"> در اصل هیچ توانایی برای استفاده از زبان بیش از چند کلمه مجرد ندارد. </p> </td> </tr> <tr> <td valign="middle"> <p> ۲ </p> </td> <td valign="middle"> <p dir="rtl"> امکان ارتباط واقعی وجود ندارد مگر برای اطلاعات بسیار ابتدایی با استفاده از واژگان مجرد یا قالب‌های کوتاه در موقعیتهای آشنا و برای برطرف کردن نیازهای ابتدایی و فوری. مشکلات زیادی در فهم انگلیسی گفتاری و نوشتاری دارد. </p> </td> </tr> <tr> <td valign="middle"> <p> ۳ </p> </td> <td valign="middle"> <p dir="rtl"> فقط می‌تواند مفهوم کلی را در موقعیتهای خیلی آشنا درک و منتقل کند. توقف‌های مکرر در هنگام ارتباط مشاهده می‌شود. </p> </td> </tr> <tr> <td valign="middle"> <p> ۴ </p> </td> <td valign="middle"> <p dir="rtl"> قابلیت‌های ابتدایی محدود است به موقعیتهای آشنا. مشکلات مکرر در فهم و بیان منظور دارد. توانایی استفاده از زبان پیچیده را ندارد. </p> </td> </tr> <tr> <td valign="middle"> <p> ۵ </p> </td> <td valign="middle"> <p dir="rtl"> دارای مهارت نسبی زبان با قابلیت درک عمومی معنا در بیشتر موقعیتها می‌باشد، گرچه احتمال اشتباهات بسیار وجود دارد. باید توانایی ایجاد ارتباطات اولیه را در حوزهٴ تخصصی خود داشته باشد. </p> </td> </tr> <tr> <td valign="middle"> <p> ۶ </p> </td> <td valign="middle"> <p dir="rtl"> علیرغم بعضی بی‌دقتی‌ها، عدم تناسب‌ها، و نافهمی‌ها، در کل دارای مهارت موثر زبانی است. قادر به استفاده و فهم زبان نسبتا پیچیده به ویژه در موقعیتهای آشنا می‌باشد. </p> </td> </tr> <tr> <td valign="middle"> <p> ۷ </p> </td> <td valign="middle"> <p dir="rtl"> مهارت کاملا کاربردی زبان را دارارست، گرچه با اشتباهات هرازگاهی در دقت، تناسب، و درک زبان همراه‌است. در کل توانایی آن را دارد که از پس زبان پیچیده برآید و استدلال‌های جزیی نگر را درک کند. </p> </td> </tr> <tr> <td valign="middle"> <p> ۸ </p> </td> <td valign="middle"> <p dir="rtl"> مهارت کاملا کاربردی زبان را دارارست و تنها هرازگاهی اشتباهاتی از نظر دقت و تناسب کاربرد مرتکب می‌شود. ممکن است در موقعیتهای ناآشنا فهم کامل زبان صورت نگیرد. از پس مباحثات پیچیده و مشروح به خوبی برمی‌آید. </p> </td> </tr> <tr> <td valign="middle"> <p> ۹ </p> </td> <td valign="middle"> <p dir="rtl"> مهارت کاملا کاربردی زبان را داراست: دقیق، صحیح، روان همراه با فهم کامل. </p> </td> </tr> </tbody> </table> </div>
                    </a>
                </li>

                <li class=" mix Cambridge  mix_all" style="display: inline-block; opacity: 1;">
                    <a  data-toggle="modal" data-target="#myModal" onclick="setModal($(this))">
                        <img class="" src="http://elaonline.ir/img/k8.jpg" alt="Treble">
                        <div class="portfolio-overlay"><h4>CELTA</h4></div>
                        <div style="display: none"><p dir="rtl"> <strong>CELTA </strong> <strong>چیست؟</strong> </p> <p dir="rtl"> گواهی آموزش زبان انگلیسی به بزرگسالان یا سلتا (به انگلیسی: Certificate in Teaching English to Speakers of Other Languages)‏ CELTA تلفظ: /ˈsɛltə/ یک مدرک فنی برای تدریس زبان انگلیسی می باشد. این مدرک مختص مدرسینی است که زبان انگلیسی را به عنوان یک زبان بیگانه یا دوم تدریس می‌کنند. داشتن مدرک سلتا برای آموزش و تدریس زبان انگلیسی به عنوان زبان بیگانه یا زبان دوم یک الزام می باشد. سلتا یک مدرک نخستین برای صلاحیت اشخاصی است که قصد دارند زبان انگلیسی را به عنوان زبان خارجی (بیگانه) تدریس کنند. مدرک سلتا توسط دانشگاه کمبریج اعطاء می گردد. این گواهی نامه محبوب ترین مدرک آموزشی در دنیا در رابطه با تدریس زبان انگلیسی به عنوان زبان خارجی به شمار می‌رود و دلیل آن هم این است که مدرک سلتا با گذشت زمان بر سر زبان‌ها افتاده و مشهور شده است. </p> <p dir="rtl"> مدرک سلتا به شکلی کلی پنج موضوع را در بر می گیرد: </p> <p dir="rtl"> زبان آموزان و مدرسان و محتوای آموزش و فراگیری </p> <p dir="rtl"> ارزیابی و آگاهی زبان </p> <p dir="rtl"> آموزش مهارت های خواندن، گوش دادن، نوشتن و مکالمه. </p> <p dir="rtl"> برنامه‌ریزی‌ها و روش‌های مختلف آموزش </p> <p dir="rtl"> تقویت حرفه‌ای گری آموزشی و مهارت های تعلیمی </p> <p dir="rtl"> سلتا CELTA گواهی آموزش زبان انگلیسی به بزرگسالان می باشد. </p> <p dir="rtl"> مدرک سلتا (CELTA (Certificate in English Language Teaching to Adults معتبرترین مدرک آموزش زبان انگلیسی در سراسر جهان می باشد. با داشتن CELTA به عنوان یک مدرک بین المللی می توانید در هر جای دنیا استاد زبان انگلیسی شوید. گذراندن دوره آموزشی CELTA اولین قدم ضروری در شغل آموزش زبان انگلیسی به غیر انگلیسی زبانان می باشد. دوره CELTA به دو صورت فشرده و عادی برگزار می گردد. دوره فشرده حداقل ۴ هفته (مینیمم ۱۲۰ ساعت) طول می کشد و دوره عادی از چند ماه تا یک سال به طول می انجامد. </p> <p dir="rtl"> شرایط شرکت در دوره زبان سلتا CELTA دانش زبانی پیشرفته (IELTS 7-7.5)، حداقل ۱۸ سال سن و توانایی آموزش زبان انگلیسی می باشد. </p> <p dir="rtl"> دوره آموزشی CELTA آزمون نهایی ندارد و عملکرد شرکت کنندگان در جلسات تمرینی تدریس (Teaching Practice) و بر اساس ۴ تکلیف نوشتاری (Written Assignments) در طول دوره توسط مربیان دوره تأیید شده دانشگاه کمبریج ارزشیابی می شوند. </p> <p dir="rtl"> جهت دریافت مدرک، متقاضیان باید هر دو مرحله تمرین تدریس و تکالیف نوشتاری را با موفقیت پشت سر بگذارند. </p> <p dir="rtl"> لازم به ذکر است CELTA دارای ۳ رتبه قبولی می باشد: </p> <p dir="rtl"> PASS A </p> <p dir="rtl"> PASS B </p> <p dir="rtl"> PASS </p> <p dir="rtl"> با کسب مدرک CELTA فرصت های شغلی بیشتری در تدریس زبان انگلیسی در بهترین نقاط دنیا خواهید یافت. CELTA در حقیقت اثبات دانش و توانایی تدریس حرفه ای شماست. </p> <p dir="rtl"> دوره آموزشی CELTA را می توانید به صورت تمام وقت، پاره وقت و یا آنلاین ثبت نام نمایید: </p> <p dir="rtl"> دوره تمام وقت یا فشرده (full-time)- معمولا۵-۴ هفته </p> <p dir="rtl"> دوره پاره وقت یا عادی (part-time)- از چند ماه تا یک سال </p> <p dir="rtl"> دوره اینترنتی (online)- </p> <p dir="rtl"> زبان آموزانی که قصد شرکت در این دوره را دارند برای ثبت نام می توانند با مراجعه به سایت دانشگاه کمبریج http://www.cambridgeenglish.org/find-a-centre/find-a-teaching-centre/ سنتر مورد نظر خود را در هرکشوری که مایل باشند انتخاب نمایند. هم اکنون دوره CELTA در بیش از ۳۰۰ سنترمجاز در سطح جهان برگزار می گردد. هر ساله حدود ۹۰۰ دوره CELTA در کشورهای مختلف با مجوز رسمی از بخش ارزشیابی زبان انگلیسی دانشگاه کمبریج برگزار می شود. </p></div>
                    </a>
                </li>
                <li class=" mix  Cambridge mix_all" style="display: inline-block; opacity: 1;">
                    <a  data-toggle="modal" data-target="#myModal" onclick="setModal($(this))">
                        <img class="" src="http://elaonline.ir/img/k9.jpg" alt="Treble">
                        <div class="portfolio-overlay"><h4>TKT</h4></div>
                    </a>
                </li>
                <li class=" mix other mix_all" style="display: inline-block; opacity: 1;">
                    <a  data-toggle="modal" data-target="#myModal" onclick="setModal($(this))">
                        <img class="" src="http://elaonline.ir/img/k1.jpg" alt="Treble">
                        <div class="portfolio-overlay"><h4>TESOL</h4></div>
                        <div style="display: none"><p dir="rtl"> <strong>آشنایی</strong> <strong> </strong> <strong>با</strong> <strong> </strong> <strong>آزمون</strong> <strong> </strong> <strong>و</strong> <strong> </strong> <strong>مدرک</strong> <strong> </strong> <strong>بین</strong> <strong> </strong> <strong>المللیه</strong> <strong> TESOL</strong> </p> <p dir="rtl"> Teaching English to Speakers of other Languages) TESOL) به معنای آموزش زبان انگلیسی به متکلمان زبان های دیگر است و شامل TEFL(آموزش زبان انگلیسی در جایگاه زبانی خارجی) و TESL(آموزش زبان انگلیسی در جایگاه زبان دوم)می شود. </p> <p dir="rtl"> امروزه نیاز به دانش زبان انگلیسی واستفاده از آن به روش های گوناگون رو به افزایش می باشد. به همین دلیل تقاضای فراگیری این زبان نیز رو به افزایش گذاشته و در نتیجه نیاز به اساتید متبحر آموزش زبان انگلیسی بیش از پیش احساس می شود. از آنجاییکه در دنیای مدرن امروز دوره تدریس زبان انگلیسی به روش سنتی سرآمده و مورد پسند مردم قرار نمی گیرد بسیاری از موسسات به تدریس این زبان با اصول و روش آکادمیک روی آورده و اساتید خود را غالبا ً از میان افراد ماهر، آموزش دیده و دارای گواهینامه های بین المللی روش تدریس انتخاب می کنند. یکی از مدارک بین المللی و معتبر اصول و روش تدریس زبان انگلیسی در دنیا مدرک TESOL می باشد. </p> <p dir="rtl"> TESOL یک مدرک معتبر بین المللی جهت تدریس زبان انگلیسی به غیر انگلیسی زبانان می باشد. افراد دارای این مدرک می توانند بعنوان معلم زبان انگلیسی در کشورهای دیگر مشغول بکار شوند . هدف اصلی TESOL آشنا سازی اساتید زبان انگلیسی با روشهای نوین آموزشی و فراگیری این زبان می باشد . پس از اتمام دوره TESOL اساتید ، دانش و ابزارهای لازم جهت آموزش زبان انگلیسی را پیدا کرده و می توانند به افراد مختلف با توانایی و نیازهای گوناگون آموزش دهند . </p> <p dir="rtl"> در بسیاری از کشورها مدرک TESOL اولین شرط اصلی برای استخدام یک استاد زبان انگلیسی می باشد . دوره های TESOL اساتید را برای نوشتن طرح درسهای هدفمند، مدیریت، کلاس داری و تدریس حرفه ای آماده می سازد . در این کلاس ها دانش گرامری اساتید نیز افزایش می یابد . علاوه بر موارد ذکر شده دارندگان این مدرک موقعیت بهتری جهت کاریابی چه در داخل و یا خارج از کشور خواهند داشت. </p> <p dir="rtl"> دوره های TESOL بطور معمول 100 ساعت بوده که در طول دوره داوطلبین در کلاسهای اساتیددیگر شرکت کرده و از تجربیات ایشان بهره می گیرند. به آندسته از افراد که دوره را با موفقیت بگذرانند و در آزمون ها قبول شونداز طرف The TESOL Training Center دیپلم بین المللی تحت عنوان Diploma in TESOL ارائه خواهد شد. </p></div>
                    </a>
                </li>

                <li class=" mix ETS mix_all" style="display: inline-block; opacity: 1;">
                    <a  data-toggle="modal" data-target="#myModal" onclick="setModal($(this))">
                        <img class="" src="http://elaonline.ir/img/k2.jpg" alt="Treble">
                        <div class="portfolio-overlay"><h4>GRE</h4></div>
                        <div style="display: none"><p dir="rtl"> <strong>آزمون</strong> <strong> GRE </strong> <strong>چیست؟</strong> <strong> <br/> </strong> GRE مخفف عبارت Graduate Records Examination می باشد و هدف آن سنجش توانایی‌ها و معلومات فارغ التحصیلان پس از فارغ التحصیلی از دانشگاه می‌باشد. این آزمون اولین بار در سال 1949 توسط مرکز ETS (Educational Testing Service) تهیه شد. دانستن زبان انگلیسی برای شرکت در این آزمون یک الزام است. <br/> <br/> <strong>کاربرد</strong> <strong> GRE <br/> </strong> این آزمون معمولاً برای ورود به مقاطع تحصیلی بالاتر از کارشناسی مورد نیاز می‌باشد. دانشگاه‌های آمریکایی و کانادایی معمولاً داشتن مدرک این آزمون را یکی از شرایط ادامه تحصیل قرار می‌دهند.اهمیت نمره ی کسب شده ی فرد به دانشگاه مقصد بستگی دارد.برخی دانشگاه ها فقط به صورت فرمالیته نتیجه ی این آزمون را تقاضا می کنند و در برخی دانشگاه ها ی دیگر نتیجه ی آزمون در پذیرش دانشجو یکی از عوامل اصلی است.</p><p dir="rtl"> <br/> <strong>محتوای</strong> <strong> </strong> <strong>آزمون</strong> <strong> <br/> </strong> این آزمون دارای 3 قسمت است: <br/> 1-نوشتار تحلیلی: این قسمت تفکر انتقادی و توانایی نگارش تحلیلی را می سنجد،مخصوصا توانایی فرد در تولید ایده های پیچیده ی موثر و توانایی نگارش واضح آن ایده ها.این قسمت از آزمون را باید به صورت نوشتاری پاسخ داد. <br/> 2-استدلال کلامی: مهارت درک مطالب نوشته شده و استدلال منطقی و کلامی را می سنجد.سئوالات این قسمت به صورت چهار گزینه ایست. <br/> 3- استدلال کمی: توانایی حل مسئله را با استفاده از تحلیل داده ها.سوالات این قسمت به صورت چهار گزینه ایست. برگزاری این آزمون 4 ساعت به طول می انجامد. <br/> <br/> <br/> آزمون GRE دو نوع General و Subject دارد.اغلب دانشگاه هایی که GRE می خواهند نوع General را در نظر دارند.GRE نوع Subject فقط برای هشت رشته ی زیر برگزار می شود و سایر رشته ها فقط می توانند در نوع General شرکت کنند: <br/> 1-روانشناسی <br/> 2-زیست شناسی <br/> 3- شیمی <br/> 4- علوم کامپیوتر <br/> 5-ریاضی <br/> 6-فیزیک <br/> 7-ادبیات انگلیسی <br/> 8-بیوشیمی و زیست شناسی سلولی و مولکولی <br/> <br/> داوطلبانی که رشته ی آنها جزء این هشت رشته است می توانند برای ارائه ی بهتر خود در هر دو نوع GRE شرکت کنند.Subject GRE سه بار در سال و در ماه های اکتبر،نوامبرو آوریل برگزار می شود.برگزاری آزمون Subject ، 170 دقیقه طول می کشد. هر داوطلب تا سقف 5 بار در سال میتواند در آزمون GRE شرکت کند.این آزمون به دو روش کامپیوتری (Computer-based) و کاغذی ( Paper-based) برگزار می شود که در ایران فقط نوع کاغذی آن در حال حاضر برگزار می شود. <br/> در ایران برای ثبت نام در آزمون از طریق سازمان سنجش ( مرکز سازمان سنجش (NOET) در شهر تهران )باید به سایت سازمان سنجش مراجعه کرد.داوطلب می تواند به صورت اینترنتی ثبت نام کند و هزینه را به صورت ریالی می پردازد.البته این آزمون در اصفهان و ارومیه هم برگزار می شود که برای ثبت نام در این مراکز داوطلب باید به سایت ETS.org مراجعه نماید. <br/> <br/> <strong>امتیاز</strong> <strong> </strong> <strong>ها</strong> <strong> : <br/> </strong> امتیاز استدلال کمی و کلامی از 200 تا 800 و امتیاز نگارش تحلیلی از 0 تا 6 نمره می باشد. <br/> <br/> <strong>نمونه</strong> <strong> </strong> <strong>سوال</strong> <strong> <br/> </strong> نمونه سوالات قسمت استدلال کلامی:</p><p dir="rtl"> 1. Early______ of hearing loss is ______ by the fact that the other senses are able to compensate for moderate amounts of loss, so that people frequently do not know that their hearing is imperfect. <br/> A-discovery...Indicated <br/> B- development… Prevented <br/> C-detection… Complicated <br/> D- treatment… Facilitated <br/> E- incidence…Corrected</p><p dir="rtl"> پاسخ این سوال گزینه C است</p><p dir="rtl"> 2. The ______ science of seismology has grown just enough so that the first overly bold theories have been ______ . <br/> A-magnetic . . accepted <br/> B- fledgling . . refuted <br/> C-tentative . . analyzed <br/> D- predictive . . protected <br/> E-exploratory . . recalled</p><p dir="rtl"> پاسخ این سوال گزینه ی B است.</p><p dir="rtl"> <br/> در برخی سوالات از متقاضی خواسته می شود کلمه ی متضاد را بیابد:</p><p dir="rtl"> 1. DIFFUSE: <br/> A- contend <br/> B- Concentrate <br/> C- imply <br/> D- Pretend <br/> E- rebel</p><p dir="rtl"> پاسخ سوال گزینه ی B است.</p><p dir="rtl"> <br/> نمونه سوال استدلال منطقی:</p><p dir="rtl"> 1. Column A Column B <br/> (-6)4 (-6)5 <br/> A- If the quantity in Column A is greater; <br/> B- If the quantity in Column B is greater; <br/> C- If the two quantities are equal; <br/> D- If the relationship cannot be determined from the information given.</p><p dir="rtl"> پاسخ این سوال گزینه ی A است.</p><p dir="rtl"> <br/> نمونه سوال نگارش تحلیلی: <br/> <br/> به متقاضی دو موضوع می دهند و از وی می خواهند نظرش را نوشته و با دلایل و یا مثالهای مرتبط آن را تایئد کند.</p><p dir="rtl"> "Laws should not be rigid or fixed. Instead, they should be flexible enough to take account of various circumstances, times, and places." <br/> <br/> "The study of an academic discipline alters the way we perceive the world. After studying the discipline, we see the same world as before, but with different eyes." <br/> "As we acquire more knowledge, things do not become more comprehensible, but more complex and more mysterious." <br/> "Success, whether academic or professional, involves an ability to survive in a new environment and, eventually, to change it."</p><p dir="rtl"> <strong>منابع</strong> <strong> </strong> <strong>مطالعاتی</strong> <strong>:</strong> <br/> این آزمون نسبت به آزمون هایی مانند آیلتس کمتر شناخته شده است و منابع مطلعاتی کمتری برای شرکت در این آزمون در بازار موجود است اکرچه وب سایت ets.org بهترین منبع مطالعاتی این آزمون است.در این وب سایت متقاضی می تواند تما م اطلاعات لازم را بیابد،نمونه سوالات را دانلود کند و حتی در آزمون ها ی تمرینی شرکت کند و امتیاز خود را حساب کند.</p><p dir="rtl"> از آدرس اینترنتی زیر کتاب تمرین (Practice Book) این آزمون قابل دانلود است:</p><p dir="rtl"> www.ets.org/gre/general/prepare/tips</p><p dir="rtl"> جهت آمادگی GRE Subject نیز در همین سایت کتاب تمرین رشته ی های گوناگون به صورت pdf قابل دانلود است.</p><p dir="rtl"> <strong>تغییرات</strong> <strong> </strong> <strong>آزمون</strong> <strong> GRE </strong> <strong>در</strong> <strong> </strong> <strong>طی</strong> <strong> </strong> <strong>زمان</strong></p><p dir="rtl"> در سال 2006 ETS (مركز امتحانات بين المللي) برنامه هايي را براي تغييرات قابل توجه در ساختار امتحان GRE اعلام كرد. تغييرات در نظر گرفته شده شامل : زمان امتحان طولاني تر، حركت از امتحان كامپيوتري، مقياس نمره گذاري جديد و...</p><p dir="rtl"> در 2 آوريل 2007 ETS تصميم خود مبني بر عدم تغيير در ساختار امتحان GRE را اعلام كرد. نگراني درباره عدم توانائي دستيابي عادلانه و شفاف به تست جديد توسط داوطلبان بعد از اعمال تغييرات به عنوان توضيحات اين تصميم از سوي ETS اعلام گرديد. با اين وجود ETS اظهار داشت كه آنها به طور حتم مصمم به اعمال بهينه سازي محتواي امتحان در آينده مي باشند، هرچند كه جزئيات دقيق تغييرات مد نظر ETS هنوز اعلام نشده است.</p><p dir="rtl"> تغييرات از 1 نوامبر 2007 همزمان با تغيير سئوالات در قسمتهائي از امتحان اعمال گرديد. تغييرات بيشتر در بخش رياضيات آزمون و در سئوالات "جاي خالي را پر كنيد" اعمال شد، بدين صورت كه داوطلب به جاي انتخاب پاسخ صحيح از بين جوابهاي چند گزينه اي، مي بايست شخصاً جواب صحيح را پر مي كرد. ETS اخيراً برنامه معرفي دو نوع از اين سئوالات در هر قسمت كمي را دارد و اين در حالي است كه اكثر سئوالات به شكل معمول خود ارائه خواهد شد.</p><p dir="rtl"> از ژانويه 2008 در قسمت درك زباني، سئوالات خواندن و درك مطلب تغيير شكل يافته است، بدين صورت كه به جاي شماره سطرها، از شيوه "هاي لايت كردن" كلمات مورد نظر براي سهولت در يافتن آنها در متون استفاده شد.</p><p dir="rtl"> در دسامبر 2009، ETS برنامه هائي را با هدف ايجاد تغييرات قابل توجه براي سال 2011 اعلام كرد. تغييرات شامل مقياس نمره گذاري جديد كه بين 130-170 بود، حذف سئوالات به خصوصي مانند: متضادها و سئوالات قياسي، اضافه كردن ماشين حساب آن لاين، تغيير فرمت انتخاب سطح دشواري از حالت سئوال به سئوال (در اين حالت سطح دشواري سئوال بعدي با توجه به صحت يا عدم صحت جواب فعلي تعيين مي شد) به حالت قسمت به قسمت (در اين حالت سطح دشواري قسمت بعدي با توجه به ميانگين كسب شده در قسمت فعلي تعيين مي گردد) بودند. تست عمومي GRE بازبيني شده جاي خود را به تست عمومي سابق GRE در 1 آگوست 2011 داد. تست بازبيني شده بنا به اظهار نظر داوطلبين GRE بازبيني شده از حيث طراحي بهينه شده و احساس بهتري را القا مي كند. سئوالات نوع جديد در GRE بازبيني شده مهارتهاي لازم براي تحصيلات تكميلي و مدارس بازرگاني (MBA &amp; DBA) را مورد سنجش قرار مي دهد. از ژولاي 2012، GRE گزينه اي را با عنوان Score Select در اختيار داوطلبين براي Customize كردن نمراتشان قرار داد.</p><p dir="rtl"> به طور خلاصه تغییرات این آزمون به شرح زیر می باشد:</p><p dir="rtl"> 1) قابلیت بازنگری سؤالات در بخش های مختلف ، قبل و بعد از پاسخگویی .</p><p dir="rtl"> 2) قابلیت پاسخگویی به سؤالات ، بدون رعایت ترتیب آنها .</p><p dir="rtl"> 3) قابلیت تعویض سؤالات ، در خلال یک بخش .</p><p dir="rtl"> 4) اجازه استفاده از ماشین حساب .</p><p dir="rtl"> 5) گونـه های جدیدی ازسؤالات مثـل جمـلات مشخص شده با های لایت وسـؤالات چندگزینه ای .</p><p dir="rtl"> 6) تأکید بیشتر بر روی درک مطلب .</p><p dir="rtl"> شیوه امتیاز دهی نیز تغییر کرده و نمرات هر بخش از 130 تا 170 متغیر است.</p></div>
                    </a>
                </li>
                <li class=" mix other mix_all" style="display: inline-block; opacity: 1;">
                    <a  data-toggle="modal" data-target="#myModal" onclick="setModal($(this))">
                        <img class="" src="http://elaonline.ir/img/k3.jpg" alt="Treble">
                        <div class="portfolio-overlay"><h4>UCLES</h4></div>
                        <div style="display: none"><p dir="rtl"> <strong>UCLES </strong> <strong>و</strong> <strong> ALTE </strong> </p> <p dir="rtl"> <strong>كيفيت</strong> <strong> </strong> <strong>و</strong> <strong> </strong> <strong>رعايت</strong> <strong> </strong> <strong>انصاف</strong> <strong>!</strong> </p> <p dir="rtl"> UCLES مخفف University Of Cambridge Local Examinations Syndicate مي باشد كه در سال 1858 بنيانگذاري شد و امروزه رهبر جهاني تهيه خدمات ارزيابي آموزشي مي باشد. <br/> UCLES در سال 1913 شروع به سازماندهي آزمونهاي زبان انگليسي نمود و امروزه خدمات و امتحانات وسيعي كه شامل امتحانات تخصصي در انگليسي تجاري، انگليسي دانشگاهي، انگليسي كودكان به همراه مدارك و ديپلمهاي مختلف براي اساتيد زبان انگليسي ارائه مي دهد. همه ساله بيش از 700000 داوطلب در آزمونهاي انگليسي دانشگاه كمبريج شركت مي كنند. </p> <p dir="rtl"> ALTE مخففAssociation of Language Testers in Europe مي باشد. اعضاي اتحاديه ممتحنين زبان در اروپا با همكاري يكديگر موفق به ايجاد يك معيار پنج سطحي كه به عنوان راهنماي توسعه و توصيف امتحانات زبان در سراسر اروپا به كار برده مي شود، شده اند. تمامي آزمونهاي زبان خارجه دانشگاه كمبريج چه انگليسي عمومي و چه انگليسي تخصصي بر اساس همان معيار طراحي و بازبيني مي شوند. اين بدان معنا مي باشد كه دارندگان مدارك دانشگاه كمبريج مي توانند سطح انگليسي شان را با ديگر آزمونهاي زبانهاي خارجه دانشگاه كمبريج و همچنين با بسياري از آزمونهاي زبان كشورهاي اروپائي مقايسه كنند. </p> <p dir="rtl"> تست هاي زبان خارجه دانشگاه كمبريج از احترام و اعتبار بين المللي برخوردارند و براي حصول اطمينان از اعتبار آن زحمت بسيار زيادي به خرج داده مي شود. هر آزمون حدوداً سه سال طول مي كشد تا توليد شود، قبل از اينكه هر سؤالي در امتحان واقعي گنجانده شود بر روي دانش آموزان در سطح مناسب در فرآيندي كه پيش آزمون (Pretesting) ناميده مي شود آزمايش مي شود. اين قضيه سطح دشواري تمام مواد امتحاني را از نظر در سطح مناسب بودن، تضمين مي كند و هيچ گونه تعصبي نسبت به مردم از پيش زمينه هاي فرهنگي و علمي متفاوت را نداشته و از هيچ گروه خاصي به نفع ديگران پشتيباني نمي كند. تنها زماني كه تمامي مواد امتحاني چك شدند و از نظر UCLES با استاندارد هاي صحيح مطابقت داده شدند اجازه گنجاندن در امتحان واقعي را به دست مي آورند. <br/> <strong>UCLES</strong> با هزاران ممتحن آموزش ديده ورزيده، براي نوشتن و تصحيح برگه هاي امتحاني و انجام امتحانات Speaking همكاري مي كند. ممتحنين زير نظر ممتحنيني با تجربه بيشتر، به صورت تيمي، كار مي كنند كه مسئوليت آنها ايجاد هماهنگي در طراحي كليه سئوالات به همراه حصول اطمينان از يكسان بودن استانداردها مي باشد.پيش از اينكه مدرسه يا موسسه اي بتواند مركز امتحاني EFL كمبريج شود، بايد معيارهاي انتخاب خيلي دقيقي را پشت سر گذار، مراكز امتحاني بر اساس آئين نامه هاي شفاف كه توسط UCLES تبيين مي شود (كه وظيفه بازرسي منظم از مراكز جهت حصول اطمينان از اجراي استاندارها را بر عهده دارد) اداره مي گردند. </p></div>
                    </a>
                </li>
                <li class=" mix ETS mix_all" style="display: inline-block; opacity: 1;">
                    <a  data-toggle="modal" data-target="#myModal" onclick="setModal($(this))">
                        <img class="" src="http://elaonline.ir/img/k4.jpg" alt="Treble">
                        <div class="portfolio-overlay"><h4>TOEFL</h4></div>
                        <div style="display: none"><p dir="rtl"><p dir="rtl"> <strong>TOEFL</strong> </p> <p dir="rtl"> TOEFL مخفف عبارت Test of English as a Foreign Language به معنای « آزمون انگلیسی به عنوان یک زبان خارجی » می باشد. <br/> تافل يک آزمون جـامع زبان انگليسي برای غیرانگلیسی زبانان است که بـراي ورود به بيش از 7000 کالج و دانشگاه در ايالات متحده، کانادا و ديـگر بخش هـاي جهان، لازم است. همچنيـن خارجياني که داراي مشاغل حرفه اي مي باشند، بـراي ادامه فعاليت هاي حرفه اي خود در آمريکا و کانادا به صورت مرتب به يک رتبه تافل نياز دارند. آزمون تافل (TOEFL) توسط سرويس سنجش تحصيلي (ETS) دانشگاه پرينستون (Princeton) برگزار مي شود. اين آزمون، مهارت در بخش هاي شنيداري، گفتاري، نوشتاري، و درک مطلب انگليسي را مورد سنجش قرار مي دهد. نمره کسب شده در اين آزمون جهت پذيرش در اين دانشگاه ها به مدت دو سال داراي اعتبار مي باشد. </p> <p dir="rtl"> <strong>شیوه</strong> <strong> </strong> <strong>های</strong> <strong> </strong> <strong>برگزاری</strong> <strong> </strong> <strong>آزمون</strong> <strong> </strong> <strong>تافل</strong> </p> <p dir="rtl"> آزمون تافل از سال 1968 تا 1998 فقط به صورت کتبي( PBT ) برگزار ميشد که در آن شرکت کنندگان پاسخ هايشان را روي يک برگه با مداد علامت مي زدند. در سال 1998 موسسه ETS Sylvan Learning Systems که برگزاري نسخه کامپيوتري تافل ( CBT ) را بر عهده دارد، براي اولين بار اين آزمون را به صورت کامپيوتري عرضه کرد. برگزاری آزمون تافل به روش اینترنتی ( IBT ) از سال 2005 شروع و به تدریج جایگزین دو روش دیگر شد. </p> <p dir="rtl"> آزمون IBT به مرور جایگزین آزمون CBT شده است و سیاست کلی مؤسسه ETS حذف آزمون PBT (Paper Based TOEFL) و جایگزینی آزمون IBT (Internet Based TOEFL) می باشد. </p> <p dir="rtl"> <strong>آشنايي</strong> <strong> </strong> <strong>با</strong> <strong> </strong> <strong>آزمون</strong> <strong> </strong> <strong>تافل</strong> <strong> </strong> <strong>اينترنتي</strong> <strong> ( IBT )</strong> </p> <p dir="rtl"> این آزمون در اواخر ۲۰۰۵ معرفی شد و به میزان قابل توجهی جایگزین دو نوع دیگر « مبتنی بر کامپیوتر» و « مبتنی بر کاغذ» گردید. این آزمون ابتدا در کشورهای آمریکا، کانادا، فرانسه، آلمان و ایتالیا برگزار گردید و از سال ۲۰۰۶ به کشورهای دیگر نیز به تدریج راه یافت. در این نوع آزمون شرکت‌کنندگان بایستی در تاریخ‌های مشخص شده در محل حوزه آزمون حضور پیدا کرده و از طریق اینترنت آزمون را برگزار کنند. اعتبار مدرک این آزمون با مدارک امتحانات تافل قدیمی یکسان است ولی این آزمون دارای تفاوت‌هایی می‌باشد که از جمله می‌توان به موارد زیر اشاره کرد: </p> <p dir="rtl"> • برخلاف تافل قدیمی که بیشتر تاکید بر روی گرامر بود، این آزمون تمامی مهارت‌های زبانی را پوشش می‌دهد. </p> <p dir="rtl"> • فاصله زمانی بین شرکت در آزمون و دریافت نتیجه بر روی اینترنت حدود دو هفته می‌باشد. </p> <p dir="rtl"> • این آزمون هر ماه چند بار برگزار شده و داوطلبان آزادی عمل بیشتری در انتخاب تاریخ آزمون دارند. </p> <p dir="rtl"> سیاست ETS این است که این آزمون را رفته رفته جایگزین امتحان PBT نماید. شیوه سنجش در این آزمون واقعی تر است و هر 4 مهارت زبان Listening , Speaking , Reading , Writing در آن مورد آزمایش قرار می گیرد. در حال حاضر تمامی دانشگاه ها هر دو مدرک امتحان IBT و PBT را می پذیرند اما به کسانی که به دنبال دریافت Teacher Assistantship هستند توصیه می شود تا در آزمون نوع ibt شرکت کنند (به دلیل شامل شدن قسمت Speaking ). در ابتدای ظهور امتحان IBT تصور دانش آموختگان بر این باور بود که این امتحان از لحاظ ارزیابی سخت تر است، اما امروزه می توان مزیت های فراوانی همچون : زمان های متعدد ثبت نام، مراکز آزمون متعدد در شهرهای مختلف و کوتاه بودن زمان آماده شدن نمرات و گزارش به دانشگاه سفارش شده را در نظر گرفت. در این امتحان مجال برای مانور از قابلیت های فردی امکان پذیر است و این فرمت برای کسانی که می توانند قابلیت های خود را در شرایط مختف آزمون با تنوع ارائه دهند، بسیار بهتر از تافل ورقه ای خواهد بود.این آزمون از 4 بخش 30 نمره ای تشکیل شده است و تقریبا 4 ساعت به درازا می کشد،همچنین نمره این امتحان از 120 می باشد. یادداشت برداری نیز در این روش بر خلاف روش مبتنی بر کاغذ مجاز است. </p> <p dir="rtl"> <strong>تفاوت</strong> <strong> </strong> <strong>هاي</strong> <strong> </strong> <strong>آزمون</strong> <strong> </strong> <strong>تافل</strong> <strong> </strong> <strong>اينترنتي</strong> <strong> </strong> <strong>با</strong> <strong> </strong> <strong>تافل</strong> <strong> </strong> <strong>کاغذي</strong> <strong> </strong> <strong>و</strong> <strong> </strong> <strong>کامپيوتري</strong> </p> <p dir="rtl"> آزمون تافل اينترنتي (iBT) بخش جديدي با عنوان « بخش گفتاري» يا Speaking دارد و بخش ساختار (Structure) که در آزمون‌هاي کتبي و کامپيوتري وجود داشت، حذف شده است. گرامر به‌طور غيرمستقيم در بخش‌هاي ديگر اين آزمون مورد سنجش قرار مي‌گيرد. سخنراني‌ها و گفتگوها در بخش شنيداري (Listening) طولاني‌تر شده‌اند و خلاصه نويسي (note taking) نيز مجاز است. در بخش درک مطلب (Reading)، نوع سؤالات متنوع‌تر شده و به‌عنوان مثال از شرکت کنندگان خواسته مي‌شود اطلاعات را طبقه‌بندي کنند و يا جدولي را پر کنند. تايپ کردن هم در بخش نوشتاري الزامي است. </p> <p dir="rtl"> <strong>بخش</strong> <strong> </strong> <strong>هاي</strong> <strong> </strong> <strong>مختلف</strong> <strong> </strong> <strong>تافل</strong> <strong> </strong> <strong>اينترنتي</strong> <strong> ( IBT )</strong> </p> <p dir="rtl"> درک مطلب Reading </p> <p dir="rtl"> شنيداري Listening </p> <p dir="rtl"> صحبت کردن Speaking </p> <p dir="rtl"> نگارش Writing </p> <p dir="rtl"> <br/> <strong>بخش</strong> <strong> </strong> <strong>درک</strong> <strong> </strong> <strong>مطلب</strong> <strong> (Reading):</strong> <br/> بخش درک مطلب در تافل iBT خيلي با نسخه کامپيوتري آن (CBT) تفاوت ندارد. اين بخش از سه متن آکادميک تشکيل شده است که به دنبال هر کدام چندين پرسش مطرح مي‌شود. هر کدام از اين متن‌ها حدوداً از 650 تا 750 کلمه ساخته شده‌اند. نوع سؤالات نيز ترکيبي از نوع سؤالات موجود در تافل کامپيوتري (CBT) و انواع جديدتري از سؤالات است که در آن شرکت کنندگان بايد جدولي را پر کنند يا يک نتيجه‌گيري روايي را تکميل نمايند. به بخش درک مطلب (Reading) دو ويژگي اضافه شده که يکي فهرست لغات و ديگري يک گزينه تجديد نظر (review option) است. « فهرست لغات» به داوطلب اين امکان را مي‌دهد که معني کلمات کليدي موجود در متن را بيابد و با « گزينه تجديد نظر» (يا review option) مي‌تواند در پاسخ‌ها تجديد نظر کند. </p> <p dir="rtl"> به طور کلی می توان امتحان IBT را در دو نوع تعریف کرد: </p> <p dir="rtl"> 1. بخش Reading آن Long format و بخش Listening آن Short format است. </p> <p dir="rtl"> 2. بخش Reading آن Short format و بخش Listening آن Long format است. </p> <p dir="rtl"> آزمون دهنده ها به صورت تصادفی،در یک زمان،یکی از انواع فوق را در امتحان مشاهده می کنند.از نظر نمره دهی تفاوتی بین آنها دیده نمی شود. <br/> در نوع Long Format سه بخش وجود دارد. بخش اول یک متن در مدت زمان 20 دقیقه و دو بخش دیگر هر کدام 2 متن و زمان 40 دقیقه.بطور کلی هر متن شامل 14 سوال است.آزمون دهنده پس از پاسخ دادن به سوالات متن 2 و 3 (بخش دوم) در طول زمان 40 دقیقه، باید به سوالات متنهای 4و 5 (بخش سوم) نیز در 40 دقیقه بعد پاسخ گوید. البته باید توجه کرد که 2 متن از این 5 متن تصحیح نشده و در نمره دهی تاثیر ندارد و ETS جهت آمارگیری خود، این 2 متن را اضافه کرده است. اما از آنجا که آزمون دهندگان در طول امتحان نمی دانند که کدام 2 متن از 5 متن داده شده، ارزیابی نمی شود، باید تمام تلاش خود را برای پاسخ گویی به سوالات داده شده بکنند. <br/> در نوع Short Format که دو بخش است، سه متن داده می شود. اولین بخش همانند نوع Long Format باید در زمان 20 دقیقه جواب داده شود و متنهای 2و 3 (بخش دوم) نیز در 40 دقیقه بعد. در این نوع آزمون تمام متنها و سوالات آنها تصحیح می شود.برای مهارت‌ یافتن دراین بخش ابتدا باید دامنه لغات را افزایش داد(عمدتا با مطالعه كتابهای لغت معرفی شده برای تافل) و در ادامه با تمرین نمونه امتحانات در منابع متن‌خوانی را تقویت كرد.لازم به ذكر است كه تمرین بر صفحه رایانه بسیار موثرتر از خواندن بر برگه خواهد بود چرا كه تندخوانی برصفحه رایانه در مدت زمان معین عامل مهمی در موفقیت این بخش می‌باشد. برای مثال مهارت تندخوانی متنی با 300 كلمه در مدت زمان حدودا 2 دقیقه با احتساب درك 50 درصدی مطلب سرعت مناسبی است. در كل عادت به سریع خواندن مطالب در موضوعات مختلف مفید خواهد بود. تمرین و تكرار نمونه متن های منابع مختلف و تكرار مشاهده لغات مشابه مهارت داوطلب را افزایش خواهد داد. <br/> <br/> <br/> <strong>بخش</strong> <strong> </strong> <strong>شنيداري</strong> <strong> (Listening):</strong> <br/> بخش شنيداري آزمون تافل توانايي داوطلب را در درک مکالمات انگليسي- آن‌گونه که در آمريکاي شمالي صحبت مي‌شود- ارزيابي مي‌کند. بخش شنيداري آزمون تافل اينترنتي (iBT) هم خيلي با نسخه کامپيوتري آن (CBT) متفاوت نيست. اين بخش از دو مکالمه و چهار سخنراني درسي همراه با پرسش‌هاي متعدد تشکيل شده است. </p> <p dir="rtl"> بخش شنیداری این امتحان شامل مکالمات بلند می‌باشد و مکالمات کوتاه دو نوع دیگر در آن وجود ندارد. همچنین از لحاظ سرعت پخش شدن از دو نوع دیگر سخت‌تر می باشد. البته اگر داوطلب خود را با این شیوه امتحان تطبیق دهد مشکلی نخواهد داشت و نمی‌توان گفت که به طور کلی این امتحان از انواع دیگر سخت‌تر است. در بسیاری از منابع آماده سازی تافل iBT معمولا به داوطلبین توصیه می‌شود كه در ضمن گوش دادن به مكالمات از شنیده‌های خود نت‌برداری كنند ولیكن نكته قابل تأمل این است كه داوطلب باید بتواند ضمن گوش دادن، به دقت مطالب مهم را به خاطر بسپارد. چرا كه مكث كردن مقطعی بر مطالب به منظور نت‌برداری كامل، امكان فهمیدن مطالب متعاقب را كمتر خواهد نمود. البته می‌توان با نت‌برداری از كلمات كلیدی و یا علامات اختصاری برای پاسخ‌گویی بهتر به سوالات استفاده كرد. در سوالات این بخش تاكید بیشتر بر درك داوطلب از مطالب در توان پاسخگویی به سوالات است و اسامی خاص و یا جزئیات حاشیه‌ای مد نظر نمی‌باشند. با تمرین نمونه تستهای منابع شناخته شده به این مهم می‌توان دست یافت كه موضوعات این بخش (وحتی بخشهای دیگر ) حول و حوش موضوعات مشابهی همچون اطلاعات در مورد موضوعات رایج در محیط دانشگاه برای دانشجویان و مطالب معمول و ساده در كلاسهایی همچون: فرهنگ‌شناسی، زمین‌شناسی، هنر، تاریخ،‌گیاه‌شناسی و غیره می‌باشند. همچون امتحانات دیگر با تمرین و تكرار گوش دادن به نمونه‌ها و چك لغات جدید بر روی متن شنیده شده به راحتی میتوان حتی نمره كامل را بدست آورد چرا كه پاسخ‌ها در این بخش از اعمال سلیقه مصححین مصون می‌باشند. مدت زمان این بخش 40 دقیقه می‌باشد. </p> <p dir="rtl"> <br/> <br/> <strong>بخش</strong> <strong> </strong> <strong>گفتاري</strong> <strong> (Speaking):</strong> <br/> اين بخش جديد از آزمون تافل داراي شش تکليف (task) مي‌باشد که دو تکليف آن به صورت مستقل (independent) و چهار تکلیف به صورت تلفيقي است. </p> <p dir="rtl"> پس از استراحت 10 دقیقه بعد از بخش خواندنی و شنیدنی از شما درخواست خواهد شد كه برای پاسخگویی این بخش بازگردید. این قسمت شامل سه بخش می باشد که در هر بخش دو سوال مشابه به هم مطرح می‌شوند. در بخش اول یک موضوع عمومی داده می شود که در سوال اول معمولا تعریفی از رخدادهای عمومی و سوال دوم نقدی بر رد و یا تایید موضوعی از جانب شما خواهد بود. در این بخش به شما ۱۵ ثانیه زمان داده می شود تا پاسخ خود رامرور نموده و پس از اتمام، ۴۵ ثانیه در مورد آن صحبت کنید. زمان سنج صفحه رایانه زمان را دقیقا به شما نشان خواهد داد. <br/> در بخش دوم ابتدا عنوان موضوعات سوال از هدفن پخش میشود، سپس یک متنی بصورت خواندنی روی صفحه ظاهر میشود که 45 ثانیه زمان دارید تا آنرا بخوانید در این زمان شما میتوانید نكات را در برگه ای كه به شما داده شده یادداشت كنید. در همین باره گفتگویی بین دونفر (در سوال اول) و یك سخنرانی در كلاس درس(در سوال دوم) از هدفن نیز پخش می شود. بعد از آن، یک سوال از این دو مورد پرسیده می شود. که 30 ثانیه زمان برای فکر کردن و ۶۰ ثانیه برای صحبت کردن دارید. <br/> در بخش سوم یک گفتگو بین دونفر (در سوال اول) و یك سخنرانی در كلاس درس(در سوال دوم) از هدفن پخش می شود و یک سوال در توصیف مكالمات و سخنرانی پرسیده می شود که در این بخش نیز 3۰ ثانیه برای فکر کردن و ۶۰ ثانیه برای صحبت کردن وقت دارید.نكته مهمی كه خود برگزار كننده امتحان(ETS) نیزهمواره برای این بخش تاكید داشته این است كه داوطلب باید بتواند در وحله اول پاسخی " منسجم" و " واضح" از خود ارئه دهد. در ضمن برای قسمت هایی كه شامل متن و گفتگو و یا سخنرانی در كلاس درس می‌باشند، باید به موارد مهم و كلیدی در ضمن پاسخ اشاره نمود. بر خلاف تصور بسیاری از داوطلبان نمرات بالا نصیب كسانی خواهد شد كه مضمون اصلی را با ساختار گرامری صحیحی به طور واضح ارائه نمایند و نیازی به دارا بودن لهجه غلیظ انگلیسی نیست. برای مهارت یافتن در این بخش در ابتدا داوطلب باید از تسلط بر صحیح ارائه نمودن پاسخ های خود از لحاظ گرامری اطمینان حاصل كند. چرا كه بخشی از مهارت های گرامری داوطلب در این بخش ارزیابی خواهد شد. در ادامه داوطلب باید با ضبط نمودن پاسخ های خود به موضوعات مختلف و گوش دادن به آنها نقاط قوت و ضعف خود را دریافته و در مدیریت زمانبندی نیز تسلط یابد. نكته دیگر این است كه داوطلب باید بتواند مطالب ارئه شده در گفتگو و یا سخنرانی را به طور كامل و با بیان خود در زمان تعیین شده ارئه كند. البته نكات مهم در اولویت قرار دارند و نمی توان به كل مطالب در مدت زمان 60 ثانیه اشاره كرد. ولیكن مطمئنا نمرات خوب زمانی حاصل می‌شنوند كه داوطلب بتواند مضمون كلی را با دقت و با استفاده از لغات جدیدی كه در ذهن خود دارد بیان نماید. بدیهی است كه استفاده از لغات بهتر و ارائه جملات قوی نمره بالاتری را به ارمغان خواهد آورد. نت برداری در این بخش در ضمن گوش دادن به موضوعات می‌تواند كمك به سزایی داشته باشد. نكته مهم دیگری در ارتباط با این بخش این است كه در هنگام پاسخگویی به سوالات داوطلب باید ضمن تنظیم میكروفون(كه حتما توسط برگزاركنندگان آزمون نیز راهنمایی‌های لازمه انجام خواهد گرفت)، باید با صدای واضح و رسا صحبت كند تا از ضبط شدن صدای خود اطمینان یابد. چرا كه بوده‌اند كسانی كه به خاطر صحبت‌كردن با صدای آرام ، صدایشان به خوبی ضبط نشده و نمره خوبی نگرفته‌اند.البته نیازی به داد زدن نمی باشد، و باید از این مساله خودداری کرد زیرا موجب ایجاد مزاحمت برای سایر داوطلبان می شود. </p> <p dir="rtl"> <br/> <strong>بخش</strong> <strong> </strong> <strong>نوشتاري</strong> <strong> (Writing):</strong> <br/> اين بخش از آزمون، توانايي داوطلب را در به کارگيري « نوشتن » جهت برقراري ارتباط در يک محيط دانشگاهي مورد سنجش قرار مي‌دهد. اين بخش خود به دو قسمت تقسيم مي‌شود: <br/> قسمت تلفيقي (integrated) و قسمت مستقل (independent) که تايپ کردن هم براي هر دو قسمت ضروري است. <br/> در قسمت تلفيقي داوطلب بايد در ابتدا متن کوتاهي را بخواند (250 تا 300 کلمه) و سپس به يک نطق مرتبط با متن گوش دهد. بعد از آن بايد با استفاده از اطلاعاتي که از متن و سخنراني به‌دست آورده‌ به يک پرسش پاسخ دهد. 20 دقيقه فرصت داده مي‌شود که داوطلب پاسخ خود را که بايد بين 150 تا 225 کلمه باشد، بنويسد. اما قسمت مستقل (independent) بخش نوشتاري، مشابه بخش نوشتاري آزمون کامپيوتري تافل مي‌باشد؛ در این قسمت 20 دقيقه فرصت داده مي‌شود که انشاء کوتاهي در حدود 300 کلمه درباره يک موضوع خاص توسط داوطلب نوشته شود. </p> <p dir="rtl"> درسوال اول ابتدا برای داوطلب متنی 200 تا 300 كلمه ای بر صفحه رایانه پدیدار می‌شود كه داوطلب 3 دقیقه زمان برای مطالعه آن دارد. در این زمان داوطلب باید سعی كند كه موضوع و مطالب كلی را به خاطر بسپارد كه نیازی به نت‌برداری نیست زیرا در هنگام تایپ متن دوباره این متن نیز در صفحه ظاهر می‌شود.سپس یک بخشی توسط هدفن مطالبی در تأیید و یا رد متن ارائه شده شنیده می‌شود. در این زمان داوطلب باید حتما مطالب مهم را نت‌برداری نماید. پس از آن سوالی در این باره پرسیده شده و داوطلب باید در هنگام نوشتن متن خود با تلفیق مطالب متن داده شده و مطالب شنیده شده نوشتاری مستدل ارائه نماید. زمان نوشتن 20 دقیقه بوده و متن باید حاوی حداقل150-200 لغت باشد. سوال دوم این بخش همچون تافل ورقه‌ای شامل یك سوال با مضمون عمومی است كه ارئه یك متن 5 پاراگرافی با رعایت اصول نوشتاری مناسب برای تافل كافی است. زمان پاسخگویی به این متن 30 دقیقه و نیز باید حداقل حاوی 300 كلمه باشد. در هنگام نوشتن هر دو متن تعداد كلمات نوشته شده در بالای صفحه نشان داده می‌شوند . </p> <p dir="rtl"> <strong>امتيازدهي</strong> <strong> </strong> <strong>آزمون</strong> </p> <p dir="rtl"> آزمون تافل اينترنتي امتيازي بين صفر و 120 دارد <br/> امتياز هر بخش مطابق زير است: </p> <p dir="rtl"> (0 - 30) Reading - </p> <p dir="rtl"> (0 - 30) Listening - </p> <p dir="rtl"> (0 - 30) Speaking - </p> <p dir="rtl"> (0 - 30) Writing - </p> <p dir="rtl"> <strong>نحوه</strong> <strong> </strong> <strong>ثبت</strong> <strong> </strong> <strong>نام</strong> <strong> </strong> <strong>و</strong> <strong> </strong> <strong>پرداخت</strong> <strong> </strong> <strong>هزينه</strong> <strong> </strong> <strong>آزمون</strong> </p> <p dir="rtl"> ثبت نام در آزمون تافل بصورت اينترنتي و از طريق سايت موسسه ETS انجام مي شود. <br/> پرداخت هزينه ثبت نام به دو صورت اينترنتي (کارت هاي اعتباري بين المللي مانند VISA، MASTER و ...) و شماره ووچر مي باشد. <br/> لازم به ذکر است متقاضياني که به کارت هاي اعتباري MASTER و VISA دسترسي ندارند مي توانند از طريق سايت فروش ووچر سازمان سنجش، ،اقدام کنند. در اين سايت، وجه آزمون بصورت ريالي از کارت عابربانک متقاضي کسر مي شود و شماره اي 16 رقمي(ووچر) به داوطلب ارائه مي شود و داوطلب مي بايست تا قبل از اتمام اعتبار ووچر نسبت به ثبت نام در سايت موسسه ETS اقدام کرده و شيوه پرداخت ووچري را انتخاب و عدد مربوطه را در آن سايت وارد کند. امتياز کسب شده هر داوطلب تا 2 سال پس از تاريخ آزمون اعتبار دارد. </p> <p dir="rtl"> ثبت نام در آزمون تافل اينترنتي /http://www.ets.org/toefl/ibt/register </p> <p dir="rtl"> <strong>نكاتی</strong> <strong> </strong> <strong>در</strong> <strong> </strong> <strong>رابطه</strong> <strong> </strong> <strong>با</strong> <strong> </strong> <strong>آزمون</strong> <strong> </strong> <strong>تافل</strong> </p> <p dir="rtl"> <strong></strong> <br/> </p> <p dir="rtl"> 1- با فرمت آزمون تافل آشنا شويد </p> <p dir="rtl"> امروزه در بيشتر كشورها، تافل اينترنتي (iBT) برگزار مي شود و كمتر پيش مي آيد در منطقه اي تافل كاغذي (PBT) رواج داشته باشد. داوطلبان آزمون تافل مي بايست قبل از هر چيز نسبت به فرمت آزمون تافلي كه قصد شركت در آن را دارند آشنايي داشته باشند. استرسي كه افراد معمولا قبل از آزمون دارند بيشتر به خاطر ناشناخته بودن فرمت آزمون و چيزي كه با آن قرار است مواجه شوند مي باشد. بنابراين قبل از آماده شدن براي تافل تحقيق كنيد كه در مركزي كه آزمون مي دهيد كدام نوع TOEFL برگزار مي شود تا با آمادگي كامل در آزمون شركت كنيد. </p> <p dir="rtl"> 2- درباره سطح نمره اي كه از تافل مي خواهيد بيشتر تحقيق كنيد </p> <p dir="rtl"> نمره تافل براي تمامي افراد غير انگليسي زبان كه قصد ادامه تحصيل در آمريكا را داشته باشند ضروري است. سطح اين نمره و رتبه آن بستگي به دانشگاه مورد نظر شما دارد. با دانستن نمره لازم هدفتان دقيق تر شده و مي توانيد نسبت به زمان و هزينه اي كه قرار است براي آمادگي تافل بگذاريد بهتر برنامه ريزي كنيد تا به نتيجه مطلوب برسيد. </p> <p dir="rtl"> همچنين در نظر داشته باشيد كه نمره تافل iBT با نمره TOEFL PBT متفاوت بوده و معمولا براي پذيرش دانشگاه ها نمره قسمت نگارش مهمتر از نمره قسمت گفتاري مي باشد. </p> <p dir="rtl"> 3- زبان انگليسي آكادميك را بياموزيد </p> <p dir="rtl"> با توجه به اين كه تافل براي پذيرش در دانشگاه هاي آمريكايي و چند كشور انگليسي زبان ديگر لازم است، زبان انگليسي كه در اين آزمون سوال مي شود به دانش قبلي در خصوص زمينه تخصصي مانند مديريت و ... نياز ندارد. زبان انگليسي آكادميك، زبان و دايره لغتي است كه در محيط دانشگاه به كار گرفته مي شود و هدف آزمون تافل نيز سنجش ميزان تسلط فرد به اين زبان مي باشد. </p> <p dir="rtl"> 4- آزمون هاي تافل را تمرين كنيد </p> <p dir="rtl"> بهترين راه كسب مهارت و آمادگي براي آزمون تافل، حل كردن و پاسخگويي به سوالات آزمون هاي قبلي مي باشد. مي توانيد اين آزمون ها را در کلاس به همراه استاد خود تمرین کرده و اشکالات خود را رفع کنید. سعي كنيد آزمون ها را مانند شرايط واقعي و با زمان بندي درست پاسخ دهيد. </p> <p dir="rtl"> 5- از كمك يك استاد راهنما بهره ببريد </p> <p dir="rtl"> شخصی كه اطلاعات خوب و كاملي از آزمون تافل داشته باشد مي تواند بهترين و مطمئن ترين كمك براي داوطلبان تافل باشد. وي مي تواند شما را به درستي راهنمايي كرده و حتي از نظر رواني به شما انگيزه و اعتماد به نفس بدهد. </p> <p dir="rtl"> 6- قواي جسمي خود را تقويت كنيد </p> <p dir="rtl"> اگر شما در آزمون تافل اینترنتی يا همان IBT شركت كنيد، نزديك 4 ساعت بايد مشغول نوشتن و پاسخگويي به سوالات باشيد كه زمان بسيار طولاني است. بيشتر افراد حداكثر تا دو ساعت داراي تمركز خوبي هستند ولي بعد از آن به تدريج با كاهش قدرت يادگيري مواجه بوده كه اين اتفاق در پاسخگويي سوالات آزمون تافل باعث افزايش احتمال اشتباه مي شود. براي حل اين مشكل سعي كنيد ساعات مطالعه براي تافل را در منزل بيشتر كرده تا به 4 ساعت در هر بار برسيد. </p> <p dir="rtl"> 7- قدرت تايپ كردن خود را افزايش دهيد </p> <p dir="rtl"> همانطور كه مي دانيد در تافل iBT بايد پاسخ هاي خود را تايپ كنيد و با توجه به آن كه اين نوع تافل فراگير بوده و در اكثر مناطق از جمله ايران تافل iBT برگزار مي شود، به داوطلب پيشنهاد مي شود كه مهارت تايپ خود را تقويت كرده تا بهترين عملكرد را در اين آزمون ارائه دهد. اگر بتوانيد به سرعت تايپ كنيد وقت بسيار زيادي را مخصوصا در قسمت نگارش ذخيره كرده ايد. پيشنهاد مي شود سريع تايپ كردن را قبل از آن كه امتحان تافل بدهيد ياد بگيريد. </p> <p dir="rtl"> 8- آماده سر جلسه حاضر شويد </p> <p dir="rtl"> براي حفظ اعتماد به نفس و جلوگيري از ايجاد هر نوع استرس بهتر است كاملا آماده در جلسه آزمون حاضر شويد. اگر در آزمون تافل كاغذي شركت كرده ايد، چند عدد مداد و پاك كن و ساعت و تراش جزو ضروريات است. حتما زودتر از موعد مقرر در جلسه باشيد تا از تازگي و استرس فضا كاسته شود و بتوانيد با آرامش بيشتر تمركز خود را بر روي جواب دادن به سوالات بگذاريد. </p> <p dir="rtl"> 9- در نوت برداري ماهر شويد </p> <p dir="rtl"> نوت برداري سر جلسه آزمون TOEFL مجاز بوده و شما مي بايست از اين فرصت حداكثر استفاده را ببريد چون نوت برداري حرفه اي كمك بزرگي به افزايش دقت و صحت پاسخ هاي شما مي كند. </p> <p dir="rtl"> <strong>IELTS</strong> </p> <p dir="rtl"> IELTS که مخفف عبارت (International English Language Testing System) به معنای نظام بین‌المللی ارزش‌یابی زبان انگلیسی است، یکی از معتبرترین آزمون‌های زبان انگلیسی حال حاضر است که در سراسر دنیا برگزار می‌شود. آیلتس در واقع آزمونی بریتانیایی بوده است و از این نظر در مقابل تافل، آزمون آمریکایی قرار می‌گیرد. این آزمون با همکاری مشترک دانشگاه کمبریج انگلستان، شورای فرهنگی بریتانیا و مرکز آیلتس استرالیا برگزار می‌شود. </p> <p dir="rtl"> لینک دانشگاه کمبریج : http://www.cam.ac.uk/ </p> <p dir="rtl"> لینک شورای فرهنگی برتانیا: http://www.britishcouncil.org/ </p> <p dir="rtl"> لینک مرکز آیلتس استرالیا: http://www.idp.com/ </p> <p dir="rtl"> این امتحان معیاری است جهت سنجش دانش زبان انگلیسی اشخاصی که می‌خواهند در کشورهای انگلیسی زبان درس بخوانند، کار کنند و یا به آن کشورها مهاجرت نمایند. این امتحان از بالاترین و معتبرترین استانداردهای بین‌المللی جهت سنجش سطح زبان انگلیسی داوطلبان پیروی می‌کند و چهار توانائی Writing،Reading،Listening و Speaking را مورد ارزیابی قرار می‌دهد. بسیاری از دانشگاهها در کشورهای مختلفی همچون کانادا، انگلستان، استرالیا، نیوزلند و آمریکا امتحان IELTS را به رسمیت می‌شناسند. همچنین جهت مهاجرت به کشورهای کانادا، استرالیا و نیوزلند، داشتن مدرک IELTS الزامی است. این امتحان در بیش از ۲۷۰ مرکز امتحانی واقع در ۱۱۰ کشور مختلف دنیا برگزار می‌گردد. شرکت کنندگان در امتحان IELTS به طیف وسیعی از سوالات بسیار ساده تا بسیار مشکل پاسخ می‌دهند. نمره هر بخش از امتحان بین صفر تا ۹ می‌باشد. نمره کلی امتحان با معدل گیری از نمره چهار بخش امتحان محاسبه می‌گردد. در کارنامه IELTS، علاوه بر نمره کلی، نمره هر بخش بطور جداگانه ذکر می‌شود. </p> <p dir="rtl"> هر دانشگاه برای پذیرش متقاضیان حداقل نمره‌ای را مشخص می‌کند و اکثر آنها حداقل نمره کلی ۶٫۵ را می‌خواهند به طوریکه نمره هر بخش هم از ۶ کمتر نباشد (البته این قاعده کلی است و هر دانشگاه شرایط خاص خود را دارد). به عنوان مثالی دیگر، برای اینکه حداکثر امتیاز زبان انگلیسی را جهت مهاجرت به کانادا کسب نمایید، باید در هر چهار قسمت امتحان IELTS حداقل نمره ۷ بگیرید. </p> <p dir="rtl"> در روز امتحان ابتدا به سوالات Listening سپس به سوالات Reading و بعد به سوالات Writing پاسخ خواهید داد. تاریخ و ساعت برگزاری قسمت Speaking در روز امتحان به شرکت کنندگان اعلام می‌شود و معمولاً امتحان Speaking از عصر روز امتحان شروع شده و به مدت ۵ روز ادامه می‌یابد. داوطلبانی که از شهرهای دیگر به تهران می‌آیند، برای امتحان Speaking در اولویت هستند و باید در هنگام ثبت نام، اسم خود را در لیستی جداگانه به ثبت برسانند. تمامی مراحل کتبی امتحان باید با مداد نوشته شود و داوطلبان اجازه استفاده از خودنویس یا خودکار را در هیچ مرحله‌ای از امتحان کتبی ندارند. </p> <p dir="rtl"> نتایج امتحان IELTS دو هفته پس از پایان یافتن آزمون Speaking اعلام خواهد شد و کارنامه فقط به شخص امتحان دهنده داده می‌شود و از طریق تلفن، فکس و یا email قابل در یافت نیست. </p> <p dir="rtl"> تا ۵ کارنامه برای دانشگاهها و موسسات مورد در خواست شما بصورت رایگان توسط دفاتر برگزار کننده امتحان ارسال می‌گردد، بشرطی که از تار یخ امتحان شما یکماه نگذشته باشد. اگر بیشتر از یکماه از تاریخ امتحانتان سپری شود و یا بیشتر از ۵ کارنامه بخواهید برایتان ارسال بشود، به ازای هر کارنامه باید مبلغی را بپردازید. اکثر دانشگاهها کارنامه IELTS را که بیشتر از دو سال از تاریخ آن گذشته باشد، قبول ندارند. </p> <p dir="rtl"> امتحان IELTS در دو نوع Academic و General Training برگزار می‌شود. امتحان Academic مخصوص کسانی است که می‌خواهند در یک دانشگاه انگلیسی زبان ادامه تحصیل دهند در حالیکه امتحان General Training مخصوص کسانی است که می‌خواهند به یک کشور انگلیسی زبان مانند کانادا، استرالیا و یا نیوزلند مهاجرت کنند. </p> <p dir="rtl"> همانطور که گفته شد، در امتحان IELTS، توانائیهای Writing،Reading،Listening و Speaking در چهار قسمت جداگانه سنجیده می‌شوند. در حالیکه قسمتهای Listening و Speaking برای داوطلبان Academic و General Training به روش کاملا مشابهی مورد ارزیابی قرار می‌گیرد، هر یک از این دو گروه سوالات جداگانه‌ای در قسمتهای Reading و Writing دریافت می‌کنند. مسولیت نوع امتحانی که می‌خواهید در آن شرکت نمائید بر عهده شماست و باید در هنگام ثبت نام، نوع امتحان مورد نظرتان را در فرم ثبت نام قید کنید. </p> <p dir="rtl"> <strong>سطح</strong> </p> <p dir="rtl"> <strong>توضیح</strong> </p> <p dir="rtl"> ۰ </p> <p dir="rtl"> هیچ اطلاعات قابل ارزیابی ندارد. </p> <p dir="rtl"> ۱ </p> <p dir="rtl"> در اصل هیچ توانایی برای استفاده از زبان بیش از چند کلمه مجرد ندارد. </p> <p dir="rtl"> ۲ </p> <p dir="rtl"> امکان ارتباط واقعی وجود ندارد مگر برای اطلاعات بسیار ابتدایی با استفاده از واژگان مجرد یا قالب‌های کوتاه در موقعیتهای آشنا و برای برطرف کردن نیازهای ابتدایی و فوری. مشکلات زیادی در فهم انگلیسی گفتاری و نوشتاری دارد. </p> <p dir="rtl"> ۳ </p> <p dir="rtl"> فقط می‌تواند مفهوم کلی را در موقعیتهای خیلی آشنا درک و منتقل کند. توقف‌های مکرر در هنگام ارتباط مشاهده می‌شود. </p> <p dir="rtl"> ۴ </p> <p dir="rtl"> قابلیت‌های ابتدایی محدود است به موقعیتهای آشنا. مشکلات مکرر در فهم و بیان منظور دارد. توانایی استفاده از زبان پیچیده را ندارد. </p> <p dir="rtl"> ۵ </p> <p dir="rtl"> دارای مهارت نسبی زبان با قابلیت درک عمومی معنا در بیشتر موقعیتها می‌باشد، گرچه احتمال اشتباهات بسیار وجود دارد. باید توانایی ایجاد ارتباطات اولیه را در حوزهٴ تخصصی خود داشته باشد. </p> <p dir="rtl"> ۶ </p> <p dir="rtl"> علیرغم بعضی بی‌دقتی‌ها، عدم تناسب‌ها، و نافهمی‌ها، در کل دارای مهارت موثر زبانی است. قادر به استفاده و فهم زبان نسبتا پیچیده به ویژه در موقعیتهای آشنا می‌باشد. </p> <p dir="rtl"> ۷ </p> <p dir="rtl"> مهارت کاملا کاربردی زبان را دارارست، گرچه با اشتباهات هرازگاهی در دقت، تناسب، و درک زبان همراه‌است. در کل توانایی آن را دارد که از پس زبان پیچیده برآید و استدلال‌های جزیی نگر را درک کند. </p> <p dir="rtl"> ۸ </p> <p dir="rtl"> مهارت کاملا کاربردی زبان را دارارست و تنها هرازگاهی اشتباهاتی از نظر دقت و تناسب کاربرد مرتکب می‌شود. ممکن است در موقعیتهای ناآشنا فهم کامل زبان صورت نگیرد. از پس مباحثات پیچیده و مشروح به خوبی برمی‌آید. </p> <p dir="rtl"> ۹ </p> <p dir="rtl"> مهارت کاملا کاربردی زبان را داراست: دقیق، صحیح، روان همراه با فهم کامل. </p></div>
                    </a>
                </li>

                <li class=" mix GMAT mix_all" style="display: inline-block; opacity: 1;">
                    <a  data-toggle="modal" data-target="#myModal" onclick="setModal($(this))">
                        <img class="" src="http://elaonline.ir/img/k5.jpg" alt="Treble">
                        <div class="portfolio-overlay"><h4>GMAT</h4></div>
                        <div style="display: none"><p dir="rtl"> <strong>آزمون</strong> <strong> GMAT (Graduate Management Admission Test ) </strong> <strong>چیست؟</strong></p><p dir="rtl"> (Graduate Management Admission Council) GMAC سازمان رسمی برگزار کننده این آزمون بین المللی می باشد و دو لیست برای برگزاری این آزمون در سراسر جهان دارد ، یک لیست مربوط به ایالات متحده ، کانادا و کشور های تابعه ایالات متحده است و لیست دیگر مربوط به بقیه نقاط دنیا است. این آزمون برای علاقمندان به ادامه تحصیل در رشته های مرتبط با MBA و DBA بیشترین کاربرد را دارد . <br/> در ایران مرکزی برای برگزاری آزمون GMAT وجود ندارد اما در کشورهای همسایه مانند ترکیه و کشورهای حوزه خلیج فارس مراکزی جهت برگزاری آزمون GMAT دارند . <br/> نحوه ثبت نام : <br/> برای ثبت نام از طریق آن لاین به سایت زیر مراجعه نمایید : <br/> www.mba.com <br/> بخش های اصلی این آزمون به قرار زیر است:</p><p dir="rtl"> <strong> Analytical writing assessment(AWA) Integrated Reasoning <br/> </strong> Analysis of an Argument</p><p dir="rtl"> معمولا یک مطلب با موضوع مرتبط با تجارت است و از شما نظرتان را در رابطه باموضوع می پرسد.هدف آن تعیین ظرفیت شما درتجزیه وتحلیل مطالب است. دراین بخش شمابایدموضوع مطرح شده تجزیه وتحلیل کرده،دیدگاه خود رادر رابطه با موضوع بیان نمایید. <br/> شما 30 دقیقه زمان دارید. نمره این بخش بین 0 تا 6 می باشد.</p><p dir="rtl"> <strong>Integrated Reasoning </strong></p><p dir="rtl"> در این بخش در موارد زیر سوال خواهد شد: <br/> 1- تفسیراطلاعات ارائه شده ی گرافیکی. <br/> 2- تجزیه و تحلیل انواع متفاوتی از اطلاعات و تضمین و برآورد نتیجه آنها. <br/> شما 30 دقیقه زمان دارید.</p><p dir="rtl"> <strong>Quantitative section</strong></p><p dir="rtl"> این بخش شامل 37 سوال 5 گزینه ای است. سوالات این بخش به دو قسمت تقسیم می شود <strong>الف</strong><strong>)</strong> حل مساله: مساله ای مطرح می شود که جواب آن یکی از گزینه های قرار داده شده در جوابها خواهد بود. <strong>ب</strong><strong>) </strong>کفایت داده ها: در این بخش یک عبارت مطرح می شود که با داده های فعلی قابل حل نیست. سپس دو داده مختلف به مساله اضافه می شود. باید تشخیص داد که با کدام داده ها مساله حل می شود. یعنی ممکن است با هر داده به تنهایی مساله حل شود، یا با ترکیب دو داده مساله حل شود، یا فقط با یکی به جواب برسیم و یا اینکه همچنان مساله غیر قابل حل باشد. <br/> زمان این بخش 75 دقیقه می باشد.</p><p dir="rtl"> <strong>Verbal section</strong></p><p dir="rtl"> این بخش 41 سوال دارد. سوالات این بخش به سه دسته تقسیم می شوند. الف) اصلاح جمله: جمله و یا جملاتی ارائه می شود و زیر بخشی از جمله خط کشیده شده است. بایستی بهترین تغییرات در جمله از لحاظ گرامری ایجاد کنید تا جمله مفهوم بهتری ایجاد نماید. ب ) درک مطلب : مانند سایر ازمونهای زبان متنی وجود دارد واز آن چند سوال پرسیده می شود. ج) استدلال منطقی: در این بخش جمله ای وجود دارد و بر اساس اطلاعات موجود درآن جمله بایستی به نتیجه ای برسیم.زمان این بخش نیز 75 دقیقه می باشد. زمان استراحت: 20 دقیقه که به دو قسمت 10 دقیقه ای تقسیم می شود. <br/> <br/> <strong>نتیجه</strong> <strong> </strong> <strong>آزمون</strong> <strong> : <br/> </strong> داوطلب بلافاصله پس از آزمون می تواند نمرات خود را بر روی مانیتور ببیند .امتیازکل در GMAT بین200 تا 800 می باشد. <br/> شما می توانید 5 مکان مخصوص دریافت رسمی نتایج خود را انتخاب نمایید این دریافت کننده ها نتیجه رسمی آزمون را طی 20 روز از روز آزمون دریافت خواهند کرد. <br/> <br/> <strong>چند</strong> <strong> </strong> <strong>نکته</strong> <strong> </strong> <strong>در</strong> <strong> </strong> <strong>ارتباط</strong> <strong> </strong> <strong>با</strong> <strong> </strong> <strong>آزمون</strong> <strong> GMAT : <br/> </strong> 1. سوالات همزمان با امتحان دادن شما انتخاب می شود . در شروع هر بخش از آزمون یک سوال نسبتا مشکل به شما داده می شود . هنگامیکه شما به یک سوال پاسخ می دهید کامپیوتر با ثبت پاسخ شما از آن برای تعیین سوال بعدی استفاده می کند . اگر پاسخ شما درست باشد سوال بعدی که برای شما در نظر گرفته می شود دشوارتر خواهد بود و اگر پاسخ شما غلط باشد سوال آسانتری برای شما انتخاب می شود . به این ترتیب به هر داوطلب بر حسب توانایی های فردی او سوال داده خواهد شد و تعداد سوالات خیلی راحت و خیلی مشکل در آزمون کم است <br/> 2. از آنجاییکه از پاسخ شما به هر سوال ، برای انتخاب سوال بعدی استفاده می شود پاسخ دادن به هر سوالی که به شما داده می شود الزامی است و بعد از پاسخگویی به هر سوال نمی توانید برای تصحیح به سوال قبلی باز گردید و جواب را تغییر دهید. <br/> 3. اگر شما می خواهید آزمون را در فاصله زمانی سپتامبر تا دسامبر شرکت کنید باید خیلی سریع ثبت نام کنید زیرا اکثر داوطلبان این فاصله زمانی را برای برگزاری آزمون انتخاب می کنند و تاریخ های برگزاری آزمون بین سپتامبر و دسامبر به سرعت پر می شود. <br/> 4. درطول برگزاری آزمون استفاده از وسایل کمکی مثل ماشین حساب، خط کش و غیره ممنوع میباشد <br/> 5. شما میتوانید هر 31روزیکبارمجددا در آزمون GMAT شرکت کنید.البته در طول یکسال ، تعداد دفعات شرکت در آزمون نبایستی بیش از 5بارباشد.</p><p dir="rtl"> GMAT</p><p dir="rtl"> که مخففGraduate Management Admission Test است امروزه به یکی از مهم‌ترین ابزارهای سنجش بخشی از توانایی‌های متقاضیان شرکت در دوره‌های MBA (Master of Business Administration) و دوره‌های نزدیک و مشابه آن نظیر MPA (Master of Public Administration) شناخته شده است و تقریباً هیچ مدرسه، کالج یا دانشگاه معتبر برگزار کننده این دوره‌ها نیست که ارائه نمرهGMAT را به عنوان یکی از شروط بررسی پرونده متقاضی اعلام نکند. همچنین تعداد زیادی از دانشگاه‌هایی که دروس Businessدر دوره دکترا (PhD) آنها نظیر امور مالی، حسابداری و اقتصاد حوزه اصلی محسوب می‌شود نمره این آزمون را شرط پذیرش فرد می‌دانند.</p><p dir="rtl"> این آزمون به طور مستقل هیچ توانایی خاصی را در فرد محاسبه نمی‌کند بلکه ترکیبی از توانایی‌ها و مهارت‌های متنوع که برای یک دانشجوی فعال در حوزه مدیریت امور مالی، اقتصادی و اجرایی لازم است را بررسی می‌کند. به همین دلیل دارای هیچ میزانی به عنوان نمره رد یا قبول نیست و این مراکز آموزشی، کالج‌ها و دانشگاه‌ها هستند که هر یک به فراخور برنامه‌های آموزشی خود حداقل نمره قابل قبول را اعلام کنند لذا ممکن است فردی با داشتن یک نمره متوسط بتواند برای برخی از این مراکز تقاضای ثبت‌نام دهد و برای برخی دیگر خیر. واضح استکه هر مدرسه‌ای که دوره معتبرتری را ارائه می‌دهد نمره بالاتری را هم طلب می‌کند</p><p dir="rtl"> آزمون از چه قسمت‌هایی تشکیل شده است؟ <br/> <br/> این آزمون از سه بخش اصلی تشکیل شده است که عبارتند از ارزیابی نگارش تحلیلی Analytical Writing Assessment(که به اختصار AWA خوانده می‌شود)، Verbal و Quantitative Sections. متقاضی باید در بخش نگارش بر روی دو متن essay کار کند که یکی برای تحلیل یک استدلال argumentو دومی بررسی یک موضوع است. متقاضی برای هر یک ۳۰دقیقه زمان دارد و اینکه کدامیک اول ارائه شود مشخص نیست اما این بخش از آزمون همیشه اولین بخش آن است. <br/> <br/> اگر بخواهیم این بخش از آزمون را با نمونه‌های مشابه‌ای چون بخش نگارش در آزمون‌های استانداردی چون TOFEL یا ILETS مقایسه کنیم تفاوت‌ها در چند نکته است. اول در پرسش خود متون که به مراتب پیچیده‌تر از آزمون‌های عادی زبان است و تحلیل آنها صرف نظر از چگونگی نگارششان یک مسئله است و عموماً نگارش بحث به زبان مادری هم ساده نیست. <br/> <br/> مورد بعدی در حجم آن است. مثلاً در آزمون تافل نگارش حجمی بین ۳۵۰تا ۵۰۰کلمه کفایت می‌کند در حالیکه در این آزمون حجمی کمتر از ۵۰۰کلمه چندان مقبول نیست و بهتر است بالای ۶۰۰کلمه باشد. <br/> <br/> هر متن توسط دو ممتحن ارزیابی می‌شود که اولی در واقع یک برنامه نرم‌افزاری خیلی پیشرفته است که به تحلیل نگارش خلاقانه و ارزیابی خطاهای دستوری و املایی می‌پردازد. ممتحن دوم که انسان است توانایی متقاضی را در نحوه دسته‌بندی و پرورش و نظم دادن به دیدگاه‌ها و چگونگی عرضه آنها می‌سنجد. هر دو ممتحن بر اساس یک درجه‌بندی بین ۰تا ۶که می‌تواند تا نیم تقسیم شود نمره می‌دهند. اگر این دو نمره بیش از یک امتیاز فاصله داشتند یک انسان دیگر به عنوان ممتحن سوم نیز به کار نمره می‌دهد و سپس متوسط این نمرات به عنوان نمره نهایی این نگارش و متوسط دو متن مختلف به عنوان نمره نهایی این بخش اعلام می‌شود. <br/> <br/> بعد از پایان زمان این بخش و یک وقت تنفس کوتاه اختیاری (۵تا ۱۰دقیقه) یکی از دو بخش دیگر آغاز می‌شود که هر دو به صورت پاسخ‌گویی به سوالات چند گزینه‌ای است. آزمون Verbalیا شفاهی دارای ۴۱سوال است و ۷۵دقیقه برای پاسخ به آن زمان وجود دارد. این بخش از سه گونه سوال Sentence Correction، Critical Reasoningو Reading Comprehension تشکیل شده و وظیفه آن در مجموع ارزیابی سطح دانش متقاضی در حوزه‌های مرتبط با فهم عمیق‌تر زبان انگلیسی نظیر مبحث دستور زبان، ارزیابی یک استدلال و درک مطلب است. <br/> <br/> بخش Quantitative که در آن دو گروه از پرسش‌های مرتبط با Problem Solvingو Data Sufficiency ارائه می‌شود مجموعاً ۳۷پرسش و ۷۵دقیقه زمان دارد. این آزمون همانطور که از نام آن و دو گونه سوالاتش پیداست به ارزیابی کیفی شیوه اندیشه و استدلال متقاضی می‌پردازد. نکته جالب، پرسش‌های گونه دوم Data Sufficiency (کفایت کردن داده‌ها) است که کاملا مختص این آزمون طراحی شده و مشابه ندارد. در این گونه پرسش‌ها بعد از هر پرسش دو عبارت اخباری حاوی اطلاعات آمده و آنگاه در یک ترکیب ۵گزینه‌ای از حالات مختلفی از ارتباط بین این داده‌ها و پرسش مربوطه پرسیده می‌شود تا مشخص شود که آیا هر یک از آنها یا هر دو با هم یا هیچکدام برای پاسخ دادن به پرسش کفایت می‌کنند یا نه. در پست بعدی منبعی که نمونه سوالات را ارائه خواهیم کرد تا با انواع آنها بیشتر آشنا شوید. <br/> <br/> این جدول به صورت خلاصه معرف بخش‌های مختلف آزمون است:</p><p dir="rtl"> Analytical Writing Assessment <br/> Present your perspective on an issue. <br/> Analysis of an argument. <br/> <br/> 2essays <br/> <br/> 30min for each essay <br/> <br/> <br/> Quantitative (Multiple-Choice) <br/> Problem Solving <br/> Data Sufficiency <br/> <br/> Total 37 <br/> <br/> 75min <br/> <br/> <br/> Verbal (Multiple-Choice) <br/> Sentence Correction <br/> Critical Reasoning <br/> Reading Comprehension <br/> <br/> Total 41 <br/> <br/> 75min</p><p dir="rtl"> <br/> شیوه ارزیابی و امتیازدهی به آزمون چگونه است؟ <br/> <br/> نمره این آزمون به صورت یک نمره تفکیکی برای سه بخش مجزا و یک نمره نهایی که در واقع ترکیب دو بخش غیرنگارشی آن است ارائه می‌شود که حداکثر می‌تواند ۸۰۰باشد. بر اساس نتایج ۳سال اخیر میانه آن عدد ۵۳۵.۲بوده است. حدود دو سوم نمرات عددی بین ۲۰۰تا ۶۰۰است و شیوه پیچیده محاسبه نمره به گونه‌ای طراحی شده که حدود ۶۸درصد شرکت کنندگان نمره‌ای در این محدوده داشته باشند. همین نکته روشن می‌سازد که برای اخذ پذیرش در یک دوره خوب و معتبر MBA شما باید نمره‌ای به مراتب بالاتر از این و حداقل حدود ۷۰۰داشته باشید که بتوانید از دیگران فاصله بگیرید و این ساده نیست. <br/> <br/> نمره آزمون نگارش که در واقع متوسط نمره دو نگارش مستقل شماست عددی بین ۰تا ۶خواهد بود. <br/> <br/> هر دو بخش دیگر نمره‌ای بین ۰تا ۶۰دارند که پس از محاسباتی به نمره نهایی تبدیل می‌شود. در این بین آزمونVerbal سخت‌تر به نظر می‌رسد چرا که میانه ۳ساله آن ۲۷.۸ از ۶۰بوده و نمرات بالای ۴۴ و زیر ۹ در آن به ندرت اتفاق افتاده در حالیکه در بخشQuantitative میانه ۳۵.۶ از ۶۰ بوده و نمرات بالای ۵۰و یا زیر ۷ ندرتاً اتفاق افتاده است. <br/> <br/> هر دو بخش چند-گزینه‌ای آزمون به صورت ارزیابی نتیجه پاسخ قبلی داوطلب عمل می‌کنند یعنی پرسش اول در حد متوسط است و سوال بعدی بر اساس نتیجه سوال اول انتخاب می‌شود. اگر به سوال اول پاسخ درست داده شود، سوال دوم مشکل‌تر خواهد بود و اگر پاسخ نادرست داده شود سوال ساده‌تری ارائه می‌شود. بدیهی است که در این سیستم ارزیابی، امتیاز سوالات یکسان نیست و هرچقدر فرد بتواند در مدت زمان آزمون سوالات درست بیشتری بزند (چون سوالات مرتباً مشکل‌تر شده و لاجرم امتیاز آنها افزایش می‌یابد) امتیاز کلی وی هم بیشتر می‌شود. یک دلیل تفاوت زیاد امتیازات هم در همین نکته است. <br/> <br/> تفاوت دیگر این آزمون با اکثر آزمون‌های دیگر کاهش امتیاز در صورت بی‌پاسخ گذاشتن سوالات است. در واقع، برخلاف اکثر آزمون‌ها که در آنها پاسخ نادرست جنبه منفی زیادی دارد اینجا پاسخ ندادن مشکل‌ساز است. همچنین اگر داوطلب تعداد زیادی پاسخ نادرست پست سر هم داشته باشد (که معنای آن می‌تواند اجتناب از خالی گذاشتن پرسشنامه از طریق پاسخ دادن تصادفی به سوالات است) امتیاز وی باز هم کاهش می‌یابد.</p></div>
                    </a>
                </li>
            </ul>
        </article>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 95vw">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body" style="line-height: 2.4; font-family: Yekan; font-size: 16px; text-align: justify; direction: rtl;">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php
}
function print_faq() {
    ?>
    <div class="pages page-blog col-xs-12" id="page-faq" style="background: url(img/keyboard2.jpg) no-repeat fixed; background-size: cover; background-position-y: 0vh; height: 100vh; ">
        <div class="">
            <header>
                <h1 style="color: white;">Frequently Asked Questions</h1>
<a href="#page-contact"> <button id="btn-ask" class="form-control btn" style="width: 200px;position: relative;direction: ltr;background-color: #ff9900;color: white;margin: auto;display: block;font-family:  'Marcellus', Yekan; margin-bottom: -20px;">Ask Your Question!</button></a>
            </header>
            <article>
                <div class="panel-group  col-sm-offset-0 col-xs-12 col-sm-6" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading" >
                            <h4 class="panel-title" >
                                <a data-toggle="collapse" data-parent="#accordion" href=".collapseOne" style="padding-top: 10px; margin-top: 10px;" >
                                    <p dir="rtl">کلاس ها چند روز در هفته است؟ و چه ساعت هایی دارین؟</p>
                                </a>
                            </h4>

                        </div>
                        <div  class="collapseOne panel-collapse collapse">
                            <div class="panel-body">
                                کلاس های ترمیک سه روز در هفته، دو روز در هفته و فقط جمعه ها می باشد ولی کلاس های سیستم فشرده سه روز در هفته(دو ساعته) تشکیل می گردد. از 9 الی 22 کلاس ها دایر است که با توجه به سطح شما روز ها و ساعت های مختلفی به شما پیشنهاد می گردد و می توانید انتخاب فرمایید.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" dir="rtl" data-parent="#accordion" href=".collapseTwo">
                                    <p dir="rtl"> سلام. از سیستم فشرده جواب گرفتید؟چطور اعتماد کنیم!؟</p>
                                </a>
                            </h4>
                        </div>
                        <div class=" collapseTwo panel-collapse collapse">
                            <div class="panel-body" dir="rtl">
                                سلام. تقریبا دو سال پیش سیستم فشرده در آکادمی فعال بود ولی تنها مشکل آن (11 ماهه بودن) را توانستیم با مطالب به روزتر و کاربردی تر با مدت زمان کمتر(6 ماه)، ارائه دهیم. در آن زمان زبان آموزانی که 5 ترم جزوه را با موفقیت می گذراندند، می توانستند در آزمون بین المللی IELTS و یا TOEFL نتایج قابل قبولی را کسب نمایند. در هر حال در حال حاضر بهترین گزینه برای پرس و جو و اطمینان از این سیستم، زبان آموزان سیستم فشرده می باشند.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href=".collapseThree">
                                    <p dir="rtl">مدرکتون که میدید معتبره؟</p>
                                </a>
                            </h4>
                        </div>
                        <div  class=" collapseThree panel-collapse collapse">
                            <div class="panel-body">
                                تمامی آزمون های بین المللی مانند IELTS و TOEFL، در ایران مراکز رسمی برگزار کننده مربوط به خود را دارند و اگر قصد مهاجرت دارید، تمامی کشورها اون مدارک را از شما مطالبه می کنند. تمامی آموزشگاه های کشور آزمون هایی که برگزار می  نمایند آزمون های شبیه سازی است(Official Mock Test) یا به قولی آزمون هایی است که در دوره های قبل برگزار شده. شما با انجام این آزمون ها خود را آماده می کنید برای آزمون اصلی IELTS ویا TOEFLو یا...

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group  col-sm-offset-0 col-xs-12 col-sm-6" id="accordion1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href=".collapse4">
                                    <p dir="rtl">چگونه کارنامه ترم گذشته خود را در سایت ببینم؟</p>
                                </a>
                            </h4>
                        </div>
                        <div  class="collapse4 panel-collapse collapse">
                            <div class="panel-body">
                                برای مشاهده کارنامه و ارتباط با اساتید و دانلود مطالب کمک آموزشی مربوط به آن ترم ابتدا باید عضو  سایت شوید.
                                فقط زبان آموزان آکادمی می توانند  عضو سایت شوند.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href=".collapse5">
                                    <p dir="rtl">مکالمه چقدر طول میکشه؟ گرامر هم نمیخوام!</p>
                                </a>
                            </h4>
                        </div>
                        <div  class=" collapse5 panel-collapse collapse">
                            <div class="panel-body">
                                1- همانطور که در زبان فارسی از قواعد آن برای مکالمه استفاده میکنیم، برای یادگیری هر زبان دیگری نیازمند دانستن گرامر آن زبان هستیم.
                                2- هر چهار مهارت اصلی در تمامی کلاس ها با زبان آموزان کار می شود. دلیل آن هم مرتبط بودن مهارت ها به یکدیگر است و در تمامی آزمون های بین المللی هر چهار مهارت از شما آزمون گرفته می شود.
                                3- مکالمه نسبی بوده و با توجه به نیاز شما از مکالمه، زمان حدودی آن مشخص می شود.

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href=".collapse6">
                                    <p dir="rtl">شهریه دوره های فشرده و ترمیکتون چقدره؟</p>
                                </a>
                            </h4>
                        </div>
                        <div  class="collapse6 panel-collapse collapse">
                            <div class="panel-body">
                                شهریه پایه ترمی ۱۱۸۰۰۰ تومان می باشد که
                                با توجه به سطوح مختلف شهریه ها متفاوت می باشد.
                                برای کسب اطلاعات بیشتر با آکادمی تماس بگیرید.
                            </div>
                        </div>
                    </div>
                </div>
            </article>
 
        </div>
    </div>
    <?php
}
function print_news() {
    ?>
    <div class="container pages col-xs-12" id="page-news">
        <header class="col-xs-12 text-center">
            <h1 >News</h1>
        </header>
        <article>
            <ul class="thumbnails">
                <li class="col-xs-12 col-sm-4">
                    <a><img class="col-xs-12" style="margin-bottom: 10px;" src="img/post1.jpg" alt="Treble"></a>
                    <h5 style="font-family: Titr;direction: rtl;">13 دلیلی که باید زبان انگلیسی را یاد گرفت<br></h5>
                    <p class="smallFontBy08 matnn">اهميت يادگيري زبان انگليسي بر همه واضح است. زبان انگليسي در بسياري از نقاط دنيا استفاده ميشود و شما ميتوانيد در مسافرت يا در كار خود از اين زبان استفادهي بسياري بكنيد .اما ...</p>
                    <div class="read-more">
                        <a data-toggle="modal" data-target="#myModal" onclick="setModal($(this))">
                            <span class="matnn">... ادامه مطلب </span>
                            <div style="display: none;"><div><div style="font-family: Titr;direction: rtl ;text-align: center;"> 13 دلیلی که باید زبان انگلیسی را یاد گرفت </div></div></div>
                            <div style="display: none;">
                                <div class="matnn">
                                    <p> <strong></strong> </p> <p> اهميت يادگيري زبان انگليسي بر همه واضح است. زبان انگليسي در بسياري از نقاط دنيا استفاده مي‌شود و شما مي‌توانيد در مسافرت يا در كار خود از اين زبان استفاده‌ي بسياري بكنيد .اما اگر هنوز براي يادگيري جدي انگليسي قانع نشديد يا مي‌خواهيد به بقيه‌ي دوستانتان يك انگيزه‌ي قوي بدهيد اين 13 دليل يادگيري انگليسي را بخوانيد: <br/> <br/> <br/> 1. زبان انگليسي پرمخاطب‌ترين زبان استفاده‌ شده‌ي دنياست. در كل زمين حدود 400 ميليون نفر انگليسي‌ زبان وجود دارد و 500 ميليون نفر نيز انگليسي را به عنوان زبان دوم استفاده مي‌كنند. پس در كل حدود يك ميليارد نفر در دنيا زبان هم را متوجه مي‌شوند. آيا دوست نداريد شما هم به ‌‌آنها بپيونديد؟ <br/> <br/> 2. حدود 80% اطلاعات كامپيوتر‌ها به انگليسي پردازش مي‌شوند. يادگيري فنون كامپيوتر براي افرادي كه به انگليسي تسلط دارند فوق‌العاده راحت تر است. <br/> <br/> 3. زبان انگليسي زبان رسمي اخبار و اطلاعات مبادله‌شده‌ي جهان است. حدود نيمي از روزنامه‌هاي منتشر‌شده‌ي جهان به انگليسي است. تنها در كشور هند سه هزار مجله‌‌ي انگليسي‌ زبان منتشر شده است. اگر دوست داريد هميشه با آخرين اطلاعات و اخبار به‌روز باشيد انگليسي خيلي به دردتان خواهد خورد. <br/> <br/> 4. زباني كه بيشتر مردم دنيا در حال يادگيري هستند انگليسي مي‌باشد. در حال حاضر حدود يك ميليارد نفر در حال يادگيري اين زبان اند. در كشور چين 250 هزار نفر از طريق تلويزيون انگليسي ياد مي‌گيرند! <br/> <br/> 5. ۷۵% تله‌تكس‌هاي دنيا به انگليسي فرستاده مي‌شود. <br/> <br/> 6. بيش از 80% از صفحه‌هاي اصلي سايت‌ها به انگليسي‌ هستند. يعني با دانستن انگليسي شما حداقل با موضوع 80 درصد از سايت‌ها آشنا مي‌شويد. <br/> <br/> 7. حدود 70% ايميل‌هاي دنيا به انگليسي فرستاده مي‌شوند! آيا شما هم به استفاده از اينترنت علاقه داريد؟ اگر اين‍‌طور هست يادگيري انگليسي براي شما ضروري است. <br/> <br/> 8. پنج تا از بزرگترين شبكه‌هاي اطلاع‌ رساني (CBS,NBC,ABC,BBC,CBC) به انگليسي برنامه پخش مي‌كنند. <br/> <br/> 9. بيش از 600 هزار لغت در انگليسي وجود دارد ولي تخمين زده شده كه با يادگيري تنها 1500 تا 2000 لغت هم شما مي‌توانيد كارتان را در بيشتر موارد جلو ببريد. <br/> <br/> 10. مسافرت آسانترخواهد شد, شما مي‌توانيد در حين سفر به 45 كشور انگليسي زبان لذت بيشتري ببريد و نيازي به راهنما يا مترجم نداشته باشيد. <br/> <br/> 11. يادگيري زبان انگليسي مي‌تواند يك مزيت براي پيدا كردن كار يا مهاجرت حتي به كشور‌هاي غير انگليسي‌زبان براي شما حساب شود. <br/> <br/> 12. شما حتما‌ مي‌دانيد كه مترجم‌هاي آنلاين مثل مترجم گوگل محدوديت‌هاي خاص خود را دارند و وقتي يك متن را مي‌دهيد تا ترجمه كنند به ندرت طبيعي ترجمه مي‌شود. با يادگيري انگليسي خود را از زحمت اين مترجم‌ها خلاص كنيد. <br/> <br/> 13. با يادگيري هر زباني ديد شما نسبت به زندگي بازتر خواهد شد و شخصيتتان پخته‌تر شده و حتي ذهنتان نيز تقويت مي‌شود. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-4">
                    <a><img class="col-xs-12" style="margin-bottom: 10px;" src="img/post2.jpg" alt="Treble"></a>
                    <h5 style="font-family: Titr;direction: rtl;">دایره لغات خود را تخمین بزنید!<br></h5>
                    <p class="smallFontBy08 matnn">برای تخمین دایره لغات تان تنها کافیست که وارد سایت شوید و در دو مرحله اول لغاتی را که حداقل از یک معنی آن مطمئن هستید تیک بزنید. باید ...</p>
                    <div class="read-more">
                        <a data-toggle="modal" data-target="#myModal" onclick="setModal($(this))">
                            <span class="matnn">... ادامه مطلب </span>
                            <div style="display: none;"><div><div style="font-family: Titr;direction: rtl ;text-align: center;"> دایره لغات خود را تخمین بزنید!</div></div></div>
                            <div style="display: none;">
                                <div class="matnn">
                                    <p>
                                        وب سایت  TestYourVocab.com برای این طراحی شده تا با طی کردن سه مرحله ساده،  اندازه لغات انگلیسی که شما کامل به آن مسلط هستید را برای شما تخمین بزند. برای تخمین دایره لغات تان تنها کافیست که وارد سایت شوید و در دو مرحله اول لغاتی را که حداقل از یک معنی آن مطمئن هستید تیک بزنید. باید در این مورد راست گو باشید و لغاتی را که قبلا شنیده بودید ولی معنی آن ها را  نمی دانید خالی بگذارید تا در آخر به نتیجه ی دقیق تری برسید.در مرحله سوم و آخر از شما چند سوال کلی پرسیده می شود و در آخر هم دایره لغات شما رو به صورت تقریبی بیان می کند.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-4">
                    <a ><img class="col-xs-12" style="margin-bottom: 10px;" src="img/post3.jpg" alt="Treble"></a>
                    <h5 style="font-family: Titr;direction: rtl;">روشهای فراگیری لغات یک زبان خارجی <br></h5>
                    <p class="smallFontBy08 matnn">به خاطر سپردن لغتهای یک زبان خارجی می تواند یکی از بخشهای خسته کننده در فراگیری زبان باشد. خوشبختانه روشهای مختلفی برای سرعت بخشیدن و ...</p>
                    <div class="read-more">
                        <a data-toggle="modal" data-target="#myModal" onclick="setModal($(this))">
                            <span class="matnn">... ادامه مطلب </span>
                            <div style="display: none;"><div><div style="font-family: Titr;direction: rtl ;text-align: center;"> روشهای فراگیری لغات یک زبان خارجی </div></div></div>
                            <div style="display: none;">
                                <div class="matnn">
                                    <p> <strong></strong> </p> <p> به خاطر سپردن لغتهای یک زبان خارجی می تواند یکی از بخشهای خسته کننده در فراگیری زبان باشد. خوشبختانه روشهای مختلفی برای سرعت بخشیدن و نیز لذت بخش کردن آن وجود دارد که در ادامه به آن می پردازیم: <br/> <br/> <strong>کارتهای نمایش</strong> <strong> (Flash cards)</strong> <br/> <br/> استفاده از کارتهای نمایش سریعترین روش برای مرور لغاتی است که نیاز به تکرار دارند. این روش بسیار مؤثر و در عین حال کم هزینه است. روش کار بدین صورت است که یک دسته کارت مقوایی، در اندازه‌ای که در جیب جا شوند، تهیه می‌کنید، در یک روی آن لغت انگلیسی را می‌نویسید و در سمت دیگر کارت معنی آن را به فارسی وارد می‌کنید. همانطور که کارتها را مرور می‌کنید، لغتها را به دو دسته تقسیم می‌کنید: آنهایی که معنی آن را فوراً به خاطر می‌آورید و آنهایی که به راحتی نمی‌توانید معنی آن را به خاطر آورید. به مرور لغتهایی که هنوز به آنها تسلط پیدا نکرده‌اید آنقدر ادامه می‌دهید تا اینکه مطمئن شوید آنها را بخوبی یاد گرفته‌اید. </p> <p> <strong>دفتر لغت</strong> <br/> سعی کنید حتماً یک دفتر لغت مناسب تهیه کنید و هر موقع که به لغت جدیدی برخوردید آن را در دفترتان یادداشت کنید. فقط به نوشتن لغت و معنی آن اکتفا نکنید. بعضی از مواردی که می‌توانید در دفترتان ثبت کنید عبارتند از: توضیح انگلیسی معنی لغت، مترادف ها، متضادها، تصاویر، جملات نمونه (به انگلیسی)، علائم فونتیک، نوع کلمه (اسم، فعل و ...)، نکات گرامری (قابل شمارش، غیرقابل شمارش و ...)، کلمات هم خانواده و .... کارهای جالبتری هم می توانید انجام دهید: مثلاً می‌توانید خودتان با لغت جدید یک جمله بسازید و یادداشت کنید. و یا صفحاتی را به موضوعات خاصی اختصاص دهید؛ مثلاً حیوانات، رنگها و شکلها، پول، مسافرت، غذاها و میوه ها و .... <br/> <br/> <br/> <strong>تصویر سازی ذهنی</strong> <br/> در این روش شما یک لغت انگلیسی را با یک لغت فارسی که تلفظ یا املای مشابهی دارد، به نحوی مرتبط می کنید که الزاماً از لحاظ معنایی با هم ارتباطی ندارند. بعنوان مثال اگر شما برای اولین بار به لغت tongue (تانگ: به معنی زبان) برخوردید، متوجه می‌شوید که تلفظ آن شبیه تانک در فارسی است. بنابراین می‌توانید در ذهنتان مجسم کنید که بجای زبان، یک تانک از دهان کسی در حال خارج شدن است! <br/> مثال دوم: فرض کنید شما به لغت در valorousبه معنی شجاع بر می‌خورید. در این حال می‌توانید در ذهن خود چنین مجسم کنید که در کنار دریا ایستاده‌اید و مشغول تماشای وال‌ها هستید. والها یکی یکی به سطح آب می‌آیند ولی به محض اینکه شما را می‌بینند می‌ترسند و فرار می‌کنند، تا اینکه یک وال روس (یک وال از کشور روسیه) به سطح آب می‌آید و بجای اینکه از شما فرار کند، به سمت شما می‌آید. شما با خود می‌گویید: وال روس، شجاع است. <br/> این تکنیک به شما کمک می‌کند تا هر چه بهتر معانی لغات را بخاطر بسپارید. همچنین گفته می‌شود که هر‌چقدر تصویر ساخته شده عجیب‌تر باشد، به خاطر آوردن آن هم آسانتر خواهد بود. <br/> <br/> <strong>تکرار، تکرار و تکرار</strong> <strong>!</strong> <br/> مطالعات نشان می‌دهند که احتمال فراگیری لغاتی که بیش از 8 بار به هنگام مطالعه متنهای مختلف دیده می‌شوند، بسیار بیشتر از لغاتی است که کمتر تکرار شده‌اند. همچنین زبان‌شناسان به اتفاق معتقدند که تکرار لغات با صدای بلند به از بر کردن آنها کمک زیادی می‌کند. بنابراین گاهی همین تکرار کردن ساده حافظه شما را برای بخاطر سپردن لغات دشوار یاری می‌کند. در ضمن توصیه می‌شود که جمله کاملی را که لغت مورد نظر را در خود دارد، از بر کنید و یا چند بار با صدای بلند تکرار نمایید. <br/> <br/> <br/> <strong>مطالعه آزاد</strong> <br/> شما می‌توانید دایره لغات خود را با مطالعه آزاد افزایش دهید، اگر چه بسیاری از زبان‌شناسان ادعا می‌کنند که در ابتدا باید بین 3000 تا 5000 لغت و هم خانواده‌های آنها را فرا بگیریم تا این توانایی را پیدا کنیم که معنی دقیق لغات را با توجه به متن آن پیدا کنیم. پس تا آنجا که می‌توانید وقت آزاد خود را برای مطالعه متن‌های انگلیسی (داستانهای کوتاه، اخبار و مقالات و ...) اختصاص دهید. وقتی به لغت جدیدی بر می‌خورید، ابتدا سعی کنید معنی آن را از روی بقیه متن حدس بزنید و سپس با مراجعه به دیکشنری معنی دقیق آن را پیدا کنید. <br/> <br/> <strong>طبقه‌بندی لغات</strong> <br/> با طبقه‌بندی کردن لغات، بخاطر سپردن آنها راحت‌تر می‌شود. به مثال زیر توجه کنید: <br/> <br/> <strong> VEGETABLES <br/> Celery </strong> <strong>کرفس </strong> <strong> <br/> Cauliflower </strong> <strong>گل کلم </strong> <strong> <br/> Pea </strong> <strong>نخود </strong> <strong> <br/> Onion </strong> <strong>پیاز </strong> <strong> <br/> Carrot </strong> <strong>هویج </strong> <strong> <br/> FRUIT <br/> Pear </strong> <strong>گلابی </strong> <strong> <br/> Peach </strong> <strong>هلو </strong> <strong> <br/> Apple </strong> <strong>سیب </strong> <strong> <br/> Cherry </strong> <strong>گیلاس </strong> <strong> <br/> Melon </strong> <strong>خربزه</strong> <br/> <br/> شما همچنین می‌توانید لغاتی را که از لحاظ دستوری، ریشه‌ای، معنایی و ... با هم مرتبط هستند، یکجا یاد بگیرید: <br/> <br/> <strong>child </strong> <strong>بچه</strong> <strong>, childhood </strong> <strong>بچگی</strong> <strong>, childish </strong> <strong>بچگانه</strong> <strong>, childless </strong> <strong>بی‌بچه (بی‌اولاد</strong> <strong>)</strong> <br/> و سخن آخر اینکه هیچ کدام از روشهای فراگیری لغات کامل نیستند و هر کدام نقاط ضعف و قوت خاص خود را دارند. بهترین راه این است که این روشها را با هم تلفیق کنید. <br/> <br/> <strong>کدام کلمات را باید یاد بگیریم؟</strong> <strong>!</strong> <br/> باید به این فکر کنید که یک کلمه تا چه حدی می تواند مفید باشد. بعضی کلمات برای مباحث غیر رسمی مناسبند و برخی دیگر در بحث های رسمی و جدی تر مورد استفاده قرار می گیرند.سعی کنید در نظر داشته باشید که هر کلمه یا اصطلاح تا چه حد و در چه نوع متن هایی استفاده می شود. این به شما کمک می کند که ببینید آیا یادگیری یک کلمه ارزش وقت و تلاش شما را دارد یا خیر. کلمات و واژگان همیشه به تنهایی به کار نمی روند. شما باید از کلماتی که معمولا همراه یکدیگر به کار می روند و "fixed expressions" یا "collocations" نامیده می شوند نیز یادداشت برداری کنید. <br/> بهترین راه برای یادگیری واژگان جدید ، مشاهده کلمات در متن است، هرچند که انتخاب کلمه برای یادگیری سخت است.همانند انگلیسی زبان ها ، برای زبان آموزان نیز کلمات به دو دسته تقسیم می شوند : (Passive Vocabulary ، Active Vocabulary ) به واژگان (active و passive ) ، receptive و productive هم گفته می شود. <br/> اینکه با چه هدفی انگلیسی را یاد می گیرید مشخص می کند که چه مقدار باید تلاش کنید تا کلمات خاصی را به کلمات active و productive خود اضافه کنید. سعی کنید مفهوم یک کلمه را درک کنید. یک کلمه چگونه به کار می رود؟! چرا به کار می رود؟! در کجا به کار می رود؟! و چه زمانی مورد استفاده قرار می گیرد؟! <br/> <strong>در مورد یک کلمه چه چیزهایی را باید یاد بگیریم؟</strong> <strong>!</strong> <br/> یک دیکشنری ، اطلاعاتی پیرامون این مسائل به شما می دهد: (Spelling ، Meaning ، Pronunciation ، Opposite words or Similar ، example phrases or sentences) زمانی که یک کلمه را در دفترتان یادداشت می کنید ، می توانید به انتخاب خودتان بعضی یا همه این اطلاعات را بنویسید. به شما بستگی دارد که تصمیم بگیرید چه مقدار اطلاعات را ثبت کنید. <br/> این مورد را باید در نظر گرفت : آیا می خواهید این کلمه را به کلمات active خود اضافه کنید یا این که می خواهید هنگامی که آن را می خوانید یا می شنوید ، صرفا معنی آن را بفهمید. اگر می خواهید <strong>یک کلمه را به کلمات</strong><strong> active </strong><strong>خودتان اضافه کنید </strong>در این صورت باید از موارد نام برده شده در زیر یادداشت برداری کنید : <br/> Spelling , Meaning , Pronunciation , Part of speech , Inflected from, Grammatical features , collocations , similar or opposite words , Example phrases or sentences. <br/> <br/> <strong>چگونه باید به دنبال یادگیری کلمات جدید بروید؟</strong> <strong>!</strong> <br/> کلمات را باید در متن بیاموزیر. صرفا آن ها را حفظ نکنید ، توجه کنید که یک کلمه یا اصطلاح چگونه و در کجا مورد استفاده قرار می گیرد. سعی کنید مقاله ای جالب در یک روزنامه یا مجله پیدا کنید. هر اندازه که برایتان ممکن است به صحبت های انگلیسی گوش دهید : رادیوهای عمومی ، فیلم ها ، سریال ها و موسیقی های انگلیسی. از هرچیز جدید که می شنوید یادداشت برداری کنید. <br/> کلمات و اصطلاحات جدید را در یک دفترچه لغت بنویسید. می توانید کلمات را به ترتیب الفبایی قرار دهید یا به هر صورت دیگری که فکر می کنید برای شما مناسب تر است. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>

            </ul>
        </article>
    </div>
    <?php
}
function print_contact() {
    ?>
    <div class="container pages col-xs-10" id="page-contact" style="background: url(img/con1.jpg) no-repeat fixed; background-size: cover; background-position-y: 0vh; height: auto; width: 100vw;padding: 60px; ">
        <header>
            <h1 class="col-xs-12 text-center">Contact</h1>
        </header>
        <div class="row">
            <div class="col-md-8">
                <h3>Drop us a line or just say <strong><em>Hello!</em></strong></h3>
                <form action="http://theme.stepofweb.com/Epona/v1.0/HTML/contact-1.html#" method="post">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label style="float: left">Full Name *</label>
                                <label style="float: right; font-family: Yekan">نام و نام خوانوادگی&nbsp;*</label>
                                <input required="" type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name">
                            </div>
                            <div class="col-md-6">
                                <label>E-mail Address *</label>
                                <label style="float: right; font-family: Yekan">پست الکترونیکی&nbsp;*</label>
                                <input required="" type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Subject&nbsp;*</label>
                                <label style="float: right; font-family: Yekan">عنوان&nbsp;*</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Message *</label>
                                <label style="float: right; font-family: Yekan"> پیغام&nbsp;*</label>
                                <textarea required="" maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message"></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <input style="font-family: Yekan" id="submsg" type="submit" value="Send Message" class="btn btn-primary btn-sm col-xs-2" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-4">
                <h2>Visit Us</h2>				
                <span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong><br>No.110, Resalat st. Between Tirandaz int. and TehranPars Metro Station</span><br>

                <span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong><br> 021-77728423 <br>021-77728418</span><br>
                <div style="font-family: Yekan; direction: rtl">
                    <span class="block"><strong><i class="fa fa-map-marker"></i> آدرس:</strong><br>بالاتر از فکه اول تهران پارس، ضلع جنوب شرقی چهارراه تیرانداز، پلاک ۱۱۰</span><br>
                    <span class="block"><strong><i class="fa fa-phone"></i> تلفن:</strong><br> 021-77728423 <br>021-77728418</span><br>
                </div>
            </div>
        </div>
    </div>
    <?php
}
function print_googleMap() {
    ?>
    <div class="container pages col-xs-10" style="padding: 0px;">
        <div id="map_canvas" style="bottom: 0px; width: 100vw;  z-index: 100;">
<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/ms?msa=0&amp;msid=209765345880219749002.00050238de2b636a45446&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=35.731151,51.52854&amp;spn=0.013935,0.051498&amp;z=15&amp;output=embed"></iframe><br /><small>View <a href="https://www.google.com/maps/ms?msa=0&amp;msid=209765345880219749002.00050238de2b636a45446&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=35.731151,51.52854&amp;spn=0.013935,0.051498&amp;z=15&amp;source=embed" style="color:#0000FF;text-align:left">ELA :: English Language Academy</a> in a larger map</small>
    </div>
    <?php
}
function print_scripts() {
//	echo '<script src="./js/jQueryLib.js" type="text/javascript"></script>';
        echo '<script src="./Js/script.js" type="text/javascript"></script>';
        echo '<script src="./Js/pace.min.js"></script>';


    ?>
    <script>




$("#btn-ask").mouseenter(function(){
$(this).html("! سوال خود را بپرسید");
});
$("#btn-ask").mouseleave(function(){
$(this).html("Ask Your Question!");
});


        $("#submsg").mouseenter(function() {
            $(this).val("ارسال");
        });
        $("#submsg").mouseleave(function() {
            $(this).val("Send Message");
        });
        function setModal(text) {
            console.log($(text).children().eq(2));
            $("#myModal .modal-header h4").html($(text).children().eq(1).children().html());
            $("#myModal .modal-body").html($(text).children().eq(2).html());
        }
        if ($(document).width() < 768) {
            $(".course-content-container").css("width", "100%");
            $(".course-content-container").find("div").each(function() {
                $(this).css("width", "100%");
            });
        }


        var arrowClick = true;
        $("#arrow-left").click(function() {
            if (arrowClick) {
                arrowClick = false;
                var scrolleft = $('#z').scrollLeft() + pxsc;
                $('#z').animate({
                    scrollLeft: scrolleft
                }, 500, function() {
                    setTimeout(function() {
                        arrowClick = true;
                    }, 100);

                });
            }
        });
        var arrowclickr = true;
        $("#arrow-right").click(function() {
            if (arrowclickr) {
                arrowclickr = false;
                var scrolleft = $('#z').scrollLeft() - pxsc;
                $('#z').animate({
                    scrollLeft: scrolleft
                }, 500, function() {
                    setTimeout(function() {
                        arrowclickr = true;
                    }, 100);

                });
            }
        });

        var pxsc = $("#z").width();
        var gndiv = $("#germanycours").find('div').length;
        var fndiv = $("#fraccours").find('div').length;
        var endiv = $("#englishcours").find('div').length;
        var numscrool = [pxsc * 8, pxsc * 5, pxsc * 3];

        $("#intensivebtn").click(function() {
            scrollEngTitle(numscrool[0])
        });
        $("#kidsbtn").click(function() {
            scrollEngTitle(numscrool[1])
        });
        $("#termlybtn").click(function() {
            scrollEngTitle(numscrool[2])
        });

        var engClicked = false;

        $("#z").scroll(function() {
            if (!engClicked)
                return;
            var scrollLf = $("#z").scrollLeft();
            if (0 <= scrollLf && scrollLf <= numscrool[2]) {
                $("#termlybtn").css({"fontWeight": "bold", "color": "black"});
                $("#intensivebtn").css({"fontWeight": "normal", "color": "#666666"});
                $("#kidsbtn").css({"fontWeight": "normal", "color": "#666666"});
            } else if (numscrool[2] < scrollLf && scrollLf <= numscrool[1]) {
                $("#kidsbtn").css({"fontWeight": "bold", "color": "black"});
                $("#termlybtn").css({"fontWeight": "normal", "color": "#666666"});
                $("#intensivebtn").css({"fontWeight": "normal", "color": "#666666"});
            } else {
                $("#intensivebtn").css({"fontWeight": "bold", "color": "black"});
                $("#kidsbtn").css({"fontWeight": "normal", "color": "#666666"});
                $("#termlybtn").css({"fontWeight": "normal", "color": "#666666"});
            }
            console.log(scrollLf);
        });

        function scrollEngTitle(numscrooll) {
            $("#z").animate({
                scrollLeft: numscrooll
            }, 500);
        }

        function showCourses(n, m) {

            //            var numberof_course_content_container_div = $("#z").children().eq(n).children();
            $(m).css("width", n * 100 + "%");

            $(m).find("div").each(function() {
                $(this).css("width", (100 / n) + "%");
            });

            //            var khsc = n * pxsc ;
            $('#z').scrollLeft(n * pxsc);

            $("#courses").removeClass("slideDown");
            $("#courses").removeClass("hidden");
            $("#courses").removeClass("slideUp");

            console.log(gndiv);

            var navHeight = parseInt($("#topNav").css("height"));
            var scrollValue = $("#courses").offset().top - navHeight;
            $('html, body').animate({
                scrollTop: scrollValue
            }, 500);
            $("#courses").addClass("slideDown");
            setTimeout(function() {
                //                    $("#content").addClass("fadeIn");
            });
            //				    $("#englishNav").slideToggle();
            var html = jQuery('html');
            //                html.css('overflow', 'hidden');
            //sa();
        }

        $("#englishbtn").click(function() {
            engClicked = true;
            $("#englishcours").css("display", "visible");
            $("#fraccours").css("display", "none");
            $("#germanycours").css("display", "none");
            $("#course-header").html("English");
            $("#head2engpage").css("display", "visible");
            showCourses(endiv, "#englishcours");
        });
        $("#frenchbtn").click(function() {
            engClicked = false;
            $("#englishcours").css("display", "none");
            $("#fraccours").css("display", "visible");
            $("#germanycours").css("display", "none");
            $("#course-header").html("Français");
            $("#head2engpage").css("display", "none");
            showCourses(fndiv, "#fraccours");

        });
        $("#dutschbtn").click(function() {
            engClicked = false;
            $("#englishcours").css("display", "none");
            $("#fraccours").css("display", "none");
            $("#germanycours").css("display", "visible");
            $("#course-header").html("Deutsch");
            $("#head2engpage").css("display", "none");
            showCourses(gndiv, "#germanycours");
        });


        var x = 0;
        $("#closebtn").click(function() {
            engClicked = false;
            setTimeout(function() {

                $("#courses").removeClass("slideDown");
                $("#courses").addClass("slideUp");

    //                setTimeout(function() {
    //                    $("#courses").addClass("hidden");
    //                }, 1000);
                //                $('#z').scrollLeft(numberof_course_content_container_div.length * pxsc);
                var scrollValue = $("#courses").offset().top - navHeight;
                $('html, body').animate({
                    scrollTop: scrollValue
                }, 500);
            }, 400);

        });

        //alert(homeTop + "\n" + aboutTop + "\n" + courseTop + "\n" + testTop + "\n" + faqTop + "\n" + newsTop + "\n" + contactTop);

        function testScroll(ev) {

        home = $("#home").position().top;
        homeHeight = parseInt($("#home").css("height"));
        screenHeight = screen.availHeight;
        navHeight = parseInt($("#topNav").css("height"));
        homeTop = $("#home").offset().top;
        aboutTop = $("#page-about").offset().top;
        courseTop = $("#page-course").offset().top;
        calendarTop = $("#page-calendar").offset().top;
        testTop = $("#page-tests").offset().top;
        faqTop = $("#page-faq").offset().top;
        bsTop = $("#page-business").offset().top;
        newsTop = $("#page-news").offset().top;
        contactTop = $("#page-contact").offset().top;


            var y = window.pageYOffset;
            if (y < aboutTop - navHeight) {
                if ($("#topNav").hasClass("fadeIn")) {
                    $("#topNav").removeClass("fadeIn");
                    $("#topNav").addClass("fadeOut");
                }
            } else {
                $("#topNav").removeClass("fadeOut");
                $("#topNav").addClass("fadeIn");
            }
            if (y > calendarTop - 300) {
                $("#page-calendar").find(".taghvim").children().eq(1).addClass("enterFromLeftNear");
                $("#page-calendar").find(".taghvim").children().eq(2).addClass("enterFromRightNear");
                $("#page-calendar").find(".taghvim").children().eq(0).addClass("enterFromLeftFar");

                $("#page-calendar").find(".taghvim").children().eq(3).addClass("enterFromRightFar");


            }
            if (y > aboutTop - 600) {
                $("#aboutus div").eq(0).addClass("animate-opacity");
                setTimeout(function() {
                    $("#aboutus div").eq(1).addClass("animate-opacity");
                }, 250);
                setTimeout(function() {
                    $("#aboutus div").eq(2).addClass("animate-opacity");
                }, 500);
            }
            if (y > courseTop - 200) {
                $("#page-course").find("#courseMainbtn").children().eq(0).addClass("scaleUp");
                setTimeout(function() {
                    $("#page-course").find("#courseMainbtn").children().eq(2).addClass("scaleUp");
                }, 300);
                setTimeout(function() {
                    $("#page-course").find("#courseMainbtn").children().eq(1).addClass("scaleUp");
                }, 600)
            }
            removeAllActiveClass();
             var a = y + navHeight;
            if (y > 0 && y < aboutTop ) {
                $("#homebtn").addClass("active");
            }
            else if (a > aboutTop  && a < courseTop) {
                $("#aboutusbtn").addClass("active");
            }
            else if (a > courseTop  && a < calendarTop) {
                $("#coursebtn").addClass("active");
            }
            else if (a > calendarTop  && a < testTop ) {
                $("#calendarbtn").addClass("active");
            }
            else if (a > testTop && a < bsTop ) {
                $("#testsbtn").addClass("active");
            }
            else if (a > bsTop  && a < faqTop ) {
                $("#businessbtn").addClass("active");
            }
            else if (a > faqTop  && a < newsTop ) {
                $("#faqbtn").addClass("active");
            }
            else if (a > newsTop  && a < contactTop ) {
                $("#newsbtn").addClass("active");
            }
            else if (a > contactTop ) {
                $("#contactbtn").addClass("active");
            }
            
        }
        function removeAllActiveClass() {
            $("#homebtn").removeClass("active");
            $("#aboutusbtn").removeClass("active");
            $("#coursebtn").removeClass("active");
            $("#testsbtn").removeClass("active");
            $("#faqbtn").removeClass("active");
            $("#businessbtn").removeClass("active");
            $("#newsbtn").removeClass("active");
            $("#contactbtn").removeClass("active");
            $("#calendarbtn").removeClass("active");
        }
        $("#adownbtn").click(function() {
            $('html,body').animate({scrollTop: aboutTop - navHeight + 55}, 600);
        });

        function navLink(alink) {
            var locationTop = $(alink).offset().top;
            $('html,body').animate({scrollTop: locationTop}, 600);
        }
        testScroll();
        window.onscroll = testScroll;
        $('a[href*=#]').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                    && location.hostname == this.hostname) {
                var $target = $(this.hash);
                $target = $target.length && $target
                        || $('[name=' + this.hash.slice(1) + ']');
                if ($target.length) {
                    var targetOffset = $target.offset().top;
                    $('html,body')
                            .animate({scrollTop: targetOffset}, 500);
                    return false;
                }
            }
        });

        $("#intensivebtn").mouseenter(function() {
            $(this).val("فشرده");
            $(this).css("fontFamily", "Yekan");
        });
        $("#intensivebtn").mouseleave(function() {
            $(this).val("Intensive");
        });
        $("#kidsbtn").mouseenter(function() {
            $(this).val("کودکان و نوجوانان");
            $(this).css("fontFamily", "Yekan");
        });
        $("#kidsbtn").mouseleave(function() {
            $(this).val("Kids & Teenagers");
        });
        $("#termlybtn").mouseenter(function() {
            $(this).val("ترمیک");
            $(this).css("fontFamily", "Yekan");
        });
        $("#termlybtn").mouseleave(function() {
            $(this).val("Termly");
        });
        $("#homebtn a").mouseenter(function() {
            $(this).html("خانه");
        });
        $("#homebtn a").mouseleave(function() {
            $(this).html("Home");
        });
        $("#aboutusbtn a").mouseenter(function() {
            $(this).html("درباره  ما");
        });
        $("#aboutusbtn a").mouseleave(function() {
            $(this).html("About");
        });
        $("#coursebtn a").mouseenter(function() {
            $(this).html("دوره های آموزشی");
        });
        $("#coursebtn a").mouseleave(function() {
            $(this).html("Courses");
        });
        $("#calendarbtn a").mouseenter(function() {
            $(this).html("تقویم آموزشی");
        });
        $("#calendarbtn a").mouseleave(function() {
            $(this).html("Calendar");
        });
        $("#testsbtn a").mouseenter(function() {
            $(this).html(" آزمون ها");
        });
        $("#testsbtn a").mouseleave(function() {
            $(this).html("Tests");
        });
        $("#faqbtn a").mouseenter(function() {
            $(this).html("سوالات متداول");
        });
        $("#faqbtn a").mouseleave(function() {
            $(this).html("FAQ");
        });
        $("#newsbtn a").mouseenter(function() {
            $(this).html("اخبار");
        });
        $("#newsbtn a").mouseleave(function() {
            $(this).html("News");
        });
        $("#businessbtn a").mouseenter(function() {
            $(this).html("همکاری با ما");
        });
        $("#businessbtn a").mouseleave(function() {
            $(this).html("Recruitment");
        });
        $("#contactbtn a").mouseenter(function() {
            $(this).html("تماس با ما");
        });
        $("#contactbtn a").mouseleave(function() {
            $(this).html("Contact");
        });
    </script>


    <?php
}

                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
