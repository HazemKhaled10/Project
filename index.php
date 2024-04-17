<?php
session_start();
if (!isset ($_SESSION["user"])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"href="all.min.css">
    <title>User Dashboard</title>
</head>

<body>
    <div class="container">
        <h1>Welcome to Our Website Program Your Mind</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>

    </div>
    <!-- start header -->
    <div class="header">
        <div class="container">
            <a class="logo" href="">
                <img src="../project/images/unnamed.jpg" alt="">
                <h3>program your mind</h3>
            </a>
            <ul>
                <li><a href="#" class="active">الرئيسية</a></li>
                <li><a href="#all-courses">الكورسات</a></li>
                <li><a href="#road-mabs">خريطة طريق</a></li>
                <li><a href="#services">الخدمات</a></li>
                <li><a href="#contact">اشترك</a></li>
            </ul>
        </div>
    </div>
    <!-- end header -->

    <!-- start landing -->
    <div class="landing">
        <div class="opacty"></div>
        <div class="container">
            <h1>
                تعلم برمجة من الصفر حتى الاحتراف
            </h1>
            <p>
                نوفر لك محتوى عربي شامل ومتنوع لنساعدك في تعلم البرمجة بكل احترافية وسهول
            </p>
            <a href="#" class="button">
                برمج عقلك الان
            </a>
            <a href="#allcourses" class="go-down">
                <i class="fa-solid fa-angles-down"></i>
            </a>
        </div>
    </div>
    <!-- end landing -->

    <!-- Start all courses -->
    <div class="all-courses" id="all-courses">
        <h2 class="main-title">الكورسات</h2>
        <div class="container">
            <div class="box">
                <img src="language/wallpaperflare.com_wallpaper.jpg" alt="" />
                <div class="content">
                    <h3>HTML</h3>
                    <p>هي لغة ترميز تستخدم لبناء صفحات الويب وتحديد هيكلها ومحتواها باستخدام علامات وسمية</p>
                </div>
                <div class="info">
                    <a href="">المزيد</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="language/wallpaperflare.com_wallpaper (1).jpg" alt="" />
                <div class="content">
                    <h3>CSS</h3>
                    <p> هي لغة تسمح للمطورين بتنسيق وتزيين صفحات الويب بطريقة أنيقة ومتسقة من خلال تحديد الأنماط
                        والمظاهر للعناصر</p>
                </div>
                <div class="info">
                    <a href="">المزيد</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="language/wallpaperflare.com_wallpaper (2).jpg" alt="" />
                <div class="content">
                    <h3>Java Script</h3>
                    <p>هي لغة برمجة تستخدم لإضافة الديناميكية والتفاعلية إلى صفحات الويب، مما يسمح بتحسين تجربة المستخدم
                    </p>
                </div>
                <div class="info">
                    <a href="">المزيد</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="language/wallpaperflare.com_wallpaper (4).jpg" alt="" />
                <div class="content">
                    <h3>Python</h3>
                    <p>هي لغة برمجة عالية المستوى وسهلة التعلم تستخدم في مجموعة متنوعة من التطبيقات بما في ذلك تطوير
                        الويب</p>
                </div>
                <div class="info">
                    <a href="">المزيد</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="language/php.jpg" alt="" />
                <div class="content">
                    <h3>PHP</h3>
                    <p>هي لغة برمجة قوية وشائعة تستخدم بشكل أساسي في تطوير تطبيقات الويب، حيث تتيح للمطورين بناء مواقع
                        ديناميكية</p>
                </div>
                <div class="info">
                    <a href="">المزيد</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="language/JAVA.png" alt="" />
                <div class="content">
                    <h3>JAVA</h3>
                    <p>لغة برمجة شائعة تستخدم في تطوير تطبيقات الويب، وتطبيقات الجوال وتطبيقات سطح المكتب، والأنظمة
                        المضمنة</p>
                </div>
                <div class="info">
                    <a href="">المزيد</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="language/HH_4.jpg" alt="" />
                <div class="content">
                    <h3>C++</h3>
                    <p> لغة برمجة متعددة الاستخدامات تستخدم في تطوير البرامج، والألعاب، وأنظمة التشغيل، والتطبيقات
                        المدمجة</p>
                </div>
                <div class="info">
                    <a href="">المزيد</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img src="language/wallpaperflare.com_wallpaper (3).jpg" alt="" />
                <div class="content">
                    <h3>REACT</h3>
                    <p>هي مكتبة لبناء واجهات المستخدم وتُستخدم بشكل واسع في تطوير تطبيقات الويب حيث تتميز بسهولة
                        استخدامها</p>
                </div>
                <div class="info">
                    <a href="">المزيد</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- End all courses -->

    <!-- Start Events -->
    <div class="events" id="events">
        <div class="dots dots-up"></div>
        <div class="dots dots-down"></div>
        <h2 class="main-title">ليه برمجة</h2>
        <div class="container">
            <img src="imgs/events.png" alt="" />
            <div class="info">
                <h2 class="title">ليه لازم تتعلم برمجة فى 2024 ؟</h2>
                <ul class="description">
                    <li>في عام 2024، يُعتبر تعلم البرمجة مهارة أساسية وضرورية في عدة جوانب</li>
                    <li>فرص العمل: يزداد الطلب على المبرمجين والمطورين في سوق العمل بسبب الانتشار المتزايد للتكنولوجيا
                        في مختلف الصناعات. تعلم البرمجة يمكن أن يفتح لك أبواباً لفرص عمل واسعة النطاق وربما يمكنك من
                        دخول مجالات عمل جديدة ومثيرة. <span></span></li>
                    <li>الابتكار والإبداع: تعلم البرمجة يمكن أن يمنحك القدرة على تحويل أفكارك وابتكاراتك إلى واقع ملموس،
                        سواء كنت ترغب في بناء تطبيقات جديدة أو حلول تقنية مبتكرة.</li>
                    <li>التطور التكنولوجي: في عصر التكنولوجيا السريع التطور، من المهم أن تكون على اطلاع دائم بأحدث
                        التقنيات والأدوات. تعلم البرمجة يساعدك على فهم هذا التطور والاستفادة منه بشكل أفضل.</li>
                    <li>الإدراك الرقمي: يُعتبر الإدراك الرقمي مهارة حيوية في العصر الحديث، وتعلم البرمجة يمكن أن يساعدك
                        على تعزيز هذه المهارة من خلال فهمك لكيفية عمل التكنولوجيا واستخدامها بشكل فعّال.</li>
                    <li>باختصار، تعلم البرمجة في عام 2024 ليس فقط ضرورة لمواكبة التطور التكنولوجي، بل هو أيضًا مفتاح
                        لاستكشاف فرص جديدة في العمل والابتكار.</li>
                </ul>
            </div>
            <div class="subscribe">
                <form action="">
                    <input type="email" placeholder="ادخل البريد الاكتروني" />
                    <input type="submit" value="اشترك" />
                </form>
            </div>
        </div>
    </div>
    <!-- End Events -->


    <!-- Start road mabs -->
    <div class="road-mabs" id="road-mabs">
        <h2 class="main-title">خريطة طريق</h2>
        <div class="container">
            <div class="box quality">
                <div class="img-holder"><img src="imgs/features-01.jpg" alt="" /></div>
                <h2>Web Development Roadmap</h2>
                <p>خريطة طريق تطوير الويب هي دليل شامل يوجّه المبرمجين من خلال المراحل المختلفة لتعلم وتطوير مهاراتهم في
                    بناء تطبيقات الويب بكفاءة وفعالية.</p>
                <a href="#">المزيد</a>
            </div>
            <div class="box time">
                <div class="img-holder"><img src="imgs/features-02.jpg" alt="" /></div>
                <h2>Mobile Development Roadmap</h2>
                <p>خريطة طريق تطوير التطبيقات المحمولة توجّه المطورين خلال رحلة التعلم والتطوير لبناء تطبيقات متنقلة
                    مبتكرة وفعّالة تلبي احتياجات المستخدمين بشكل متميز.</p>
                <a href="#">المزيد</a>
            </div>
            <div class="box passion">
                <div class="img-holder"><img src="imgs/features-03.jpg" alt="" /></div>
                <h2>Game Development Roadmap</h2>
                <p>خريطة طريق تطوير الألعاب توجّه المطورين خلال مسار التعلم والتطوير لإنشاء ألعاب رائعة ومثيرة تجمع بين
                    الإبداع والتقنية في عالم الترفيه الرقمي.</p>
                <a href="#">المزيد</a>
            </div>
        </div>
    </div>
    <!-- End road mabs -->

    <!-- Start Testimonials -->
    <div class="testimonials" id="testimonials">
        <h2 class="main-title">رأى الطلاب فى دورتنا</h2>
        <div class="container">
            <div class="box">
                <img src="imgs/brofathi.jpg" alt="" />
                <h3>Ahmed Fathi</h3>
                <span class="title">Front end Developer</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>
                    الكورس دا اتعلمت منه حاجات كتير بفضلكم شكرا جداا
                </p>
            </div>
            <div class="box">
                <img src="imgs/broonr.jpg" alt="" />
                <h3>Nour Fareed</h3>
                <span class="title">Full Stack Developer</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>
                    افضل ويب سايت علمني برمجه جامد جداا
                </p>
            </div>
            <div class="box">
                <img src="imgs/broohoda.jpg" alt="" />
                <h3>Mahmoud Esmail</h3>
                <span class="title">Front end Developer</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>
                    بجد انا مستوايا اتحسن اوي في البرمجه بجد احسن ويب سايت لتعلم البرمجه
                </p>
            </div>
            <div class="box">
                <img src="imgs/brooel3arby.jpg" alt="" />
                <h3>Mohamed elaraby</h3>
                <span class="title">Full Stack Developer</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                </div>
                <p>
                    هذا الكورس مفيدا جداا شكرا لكم
                </p>
            </div>
            <div class="box">
                <img src="imgs/brooshalaby.jpg" alt="" />
                <h3>Ahmed Hossam</h3>
                <span class="title">back end Developer</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>
                    الكورس حلو اوي بس ياريت الفيديوهات تكون مترتبه اكتر من كدا
                </p>
            </div>
            <div class="box">
                <img src="imgs/broozezo.jpg" alt="" />
                <h3>Ziad Elshalaoy</h3>
                <span class="title">Full Stack Developer</span>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>
                    الكورس مفيد ولكن نرجو بزياده الفيديوهات التعليميه اكتر
                </p>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Start Gallery -->
    <div class="gallery" id="gallery">
        <h2 class="main-title">بعض اعمال طلبنا</h2>
        <div class="container">
            <div class="box">
                <div class="image">
                    <img src="imgs/img.jpg" alt="" />
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="imgs/img2.jpg" alt="" />
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="imgs/img3.jpg" alt="" />
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="imgs/img4.jpg" alt="" />
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="imgs/img5.png" alt="" />
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="imgs/img6.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

    <!-- Start Pricing -->
    <div class="pricing" id="pricing">
        <div class="dots dots-up"></div>
        <div class="dots dots-down"></div>
        <h2 class="main-title">اسعار الدورات</h2>
        <div class="container">
            <div class="box">
                <div class="title">FRONT END</div>
                <img src="imgs/hosting-basic.png" alt="" />
                <div class="price">
                    <span class="amount">$25</span>
                    <span class="time">شهريا</span>
                </div>
                <ul>
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>Java script</li>
                    <li>bootstrap</li>
                    <li>React</li>
                </ul>
                <a href="#">اختر المسار</a>
            </div>
            <div class="box popular">
                <div class="title">BACK END</div>
                <img src="imgs/hosting-advanced.png" alt="" />
                <div class="price">
                    <span class="amount">$35</span>
                    <span class="time">شهريا</span>
                </div>
                <ul>
                    <li>php</li>
                    <li>python</li>
                    <li>my sql</li>
                    <li>laravel</li>
                    <li>Django</li>
                </ul>
                <a href="#">اختار المسار</a>
            </div>
            <div class="box">
                <div class="title">MOBILE APP</div>
                <img src="imgs/hosting-professional.png" alt="" />
                <div class="price">
                    <span class="amount">$45</span>
                    <span class="time">شهريا</span>
                </div>
                <ul>
                    <li>Kotlin</li>
                    <li>Swift </li>
                    <li>SwiftUI </li>
                    <li>Jetpack </li>
                    <li>Compose </li>
                </ul>
                <a href="#">اختار المسار</a>
            </div>
        </div>
    </div>
    <!-- End Pricing -->

    <!-- Start Services -->
    <div class="services" id="services">
        <h2 class="main-title">الخدمات</h2>
        <div class="container">
            <div class="box">
                <i class="fas fa-laptop-code fa-4x"></i>
                <h3>كتابة كود</h3>
                <div class="info">
                    <a href="#">تفاصيل</a>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-tools fa-4x"></i>
                <h3>حل المشكلات</h3>
                <div class="info">
                    <a href="#">تفاصيل</a>
                </div>
            </div>
            <div class="box">
                <i class="fa-regular fa-address-card"></i>
                <h3>فرص عمل</h3>
                <div class="info">
                    <a href="#">تفاصيل</a>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-user-shield fa-4x"></i>
                <h3>الحماية</h3>
                <div class="info">
                    <a href="#">تفاصيل</a>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-palette fa-4x"></i>
                <h3>الابداع</h3>
                <div class="info">
                    <a href="#">تفاصيل</a>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn fa-4x"></i>
                <h3>تسويق</h3>
                <div class="info">
                    <a href="#">تفاصيل</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Team -->
    <div class="team" id="team">
        <h2 class="main-title">أعضاء الفريق</h2>
        <div class="container">
            <div class="box">
                <div class="data">
                    <img src="team/hani.jpg" alt="" />
                    <div class="social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>AHMED HANI</h3>
                    <p>Full Stack Developer</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="team/HAZEM.jpg" alt="" />
                    <div class="social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>HAZEM KHALED</h3>
                    <p>back end Developer</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="team/zoz.jpg" alt="" />
                    <div class="social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>ZIAD AMIN</h3>
                    <p>back end Developer</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="team/ahmed.jpg" alt="" />
                    <div class="social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>AHMED EHAB </h3>
                    <p>back end Developer</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="team/alaa.jpg" alt="" />
                    <div class="social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>ALAA MOHAMED</h3>
                    <p>Data base</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="team/toqa.jpg" alt="" />
                    <div class="social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>TOQA MAHFOUZ</h3>
                    <p>back end Developer</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="team/rewan.jpg" alt="" />
                    <div class="social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>REWAN SAMIR</h3>
                    <p>Front end Developer</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="team/salma..jpg" alt="" />
                    <div class="social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>SALMA ABDULLAH</h3>
                    <p>Front end Developer</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="team/rawda.jpg" alt="" />
                    <div class="social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>RAWDA EBRAHIM</h3>
                    <p>Front end Developer</p>
                </div>
            </div>
            <div class="box">
                <div class="data">
                    <img src="team/dd.jpg" alt="" />
                    <div class="social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="info">
                    <h3>DAREN ALKORDI</h3>
                    <p>back end Developer</p>
                </div>
            </div>
        </div>
    </div>
    <div class="spikes"></div>
    <!-- End Team -->

    <!-- Start Work Steps -->
    <div class="work-steps" id="work-steps">
        <h2 class="main-title">الاستفادة من الدورة</h2>
        <div class="container">
            <img src="imgs/work-steps.png" alt="" class="image" />
            <div class="info">
                <div class="box">
                    <img src="imgs/work-steps-1.png" alt="" />
                    <div class="text">
                        <h3>تحليل الأعمال</h3>
                        <p>
                            تحليل الأعمال يمثل عملية أساسية لفهم البيانات واستخراج الرؤى القيمة، مما يمكن الشركات من
                            اتخاذ القرارات الاستراتيجية المستنيرة وتحقيق النجاح في بيئة الأعمال المتنوعة والمتغيرة.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <img src="imgs/work-steps-2.png" alt="" />
                    <div class="text">
                        <h3>بناء مواقع</h3>
                        <p>
                            بناء المواقع يعد عملية أساسية لتمثيل الهوية الرقمية للشركات والأفراد، حيث يتيح لهم الوجود
                            على الإنترنت وتقديم خدماتهم ومحتواهم بشكل مبتكر وجذاب للزوار والعملاء المحتملين.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <img src="imgs/work-steps-3.png" alt="" />
                    <div class="text">
                        <h3>تطوير الواجهات</h3>
                        <p>
                            تطوير الواجهات يهدف إلى تحسين تجربة المستخدم من خلال تصميم وتنفيذ واجهات جذابة وسهلة
                            الاستخدام، مما يساعد على تحقيق التفاعل الفعّال بين المستخدم والتطبيقات والمواقع الإلكترونية.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Steps -->



    <!-- Start Stats -->
    <div class="stats" id="stats">
        <h2>احصائيات</h2>
        <div class="container">
            <div class="box">
                <i class="far fa-user fa-2x fa-fw"></i>
                <span class="number" data-goal="150">850</span>
                <span class="text">حاصلين على الدورة</span>
            </div>
            <div class="box">
                <i class="fas fa-code fa-2x fa-fw"></i>
                <span class="number" data-goal="135">235</span>
                <span class="text">مشاريع</span>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia fa-2x fa-fw"></i>
                <span class="number" data-goal="50">8</span>
                <span class="text">فروعنا</span>
            </div>
            <div class="box">
                <i class="far fa-money-bill-alt fa-2x fa-fw"></i>
                <span class="number" data-goal="500">500</span>
                <span class="text">سعر</span>
            </div>
        </div>
    </div>
    <!-- End Stats -->

                </form>
            </div>
        </div>
    </div>
    <!-- End contact -->

    <!-- Start Footer -->
    <div class="footer">
        <div class="container">
            <div class="box">
                <h3>برمج عقلك</h3>
                <ul class="social">
                    <li>
                        <a href="#" class="facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
                <p class="text">
                    تاكد انك اخترت المكان الصحيح لتعلم جميع مجالات البرمجة
                </p>
            </div>
            <div class="box">
                <ul class="links">
                    <li><a href="#">رابط مهم 1</a></li>
                    <li><a href="#">رابط مهم 2</a></li>
                    <li><a href="#">رابط مهم 3</a></li>
                    <li><a href="#">رابط مهم 4</a></li>
                    <li><a href="#">رابط مهم 5</a></li>
                </ul>
            </div>
            <div class="box">
                <div class="line">
                    <i class="fas fa-map-marker-alt fa-fw"></i>
                    <div class="info">Egypt, ALEX, Behind free zone Kafory</div>
                </div>
                <div class="line">
                    <i class="far fa-clock fa-fw"></i>
                    <div class="info">Business Hours: From 10:00 To 18:00</div>
                </div>
                <div class="line">
                    <i class="fas fa-phone-volume fa-fw"></i>
                    <div class="info">
                        <span>+20123456789</span>
                        <span>+20198765432</span>
                    </div>
                </div>
            </div>
            <div class="box footer-gallery">
                <img src="imgs/gallery-01.png" alt="" />
                <img src="imgs/gallery-02.png" alt="" />
                <img src="imgs/gallery-03.jpg" alt="" />
                <img src="imgs/gallery-04.png" alt="" />
                <img src="imgs/gallery-05.jpg" alt="" />
                <img src="imgs/gallery-06.png" alt="" />
            </div>
        </div>
        <p class="copyright">Made With &lt;3 By Team Program Your Mind</p>
    </div>
    <!-- End Footer -->
    <script src="js/main.js"></script
</body>

</html>