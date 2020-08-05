


<main class="page-content" id="app">

    <!-- Checkout Area -->
    <div class="checkout-area bg-white ptb-30">
        <div class="container">



            <div class="checkout-info-collapsebox">
                <form action="#" class="ho-form ho-form-boxed checkout-info-login">
                    <div class="ho-form-inner">
                        <div class="single-input">
                            <label for="login-form-email">نام کاربری یا آدرس ایمیل *</label>
                            <input type="text" name="login-form-email" id="login-form-email">
                        </div>
                        <div class="single-input">
                            <label for="login-form-password">رمز *</label>
                            <input type="password" name="login-form-password" id="login-form-password">
                        </div>
                        <div class="single-input">
                            <button type="submit" class="ho-button ho-button-sm mr-3">
                                <span>ورود</span>
                            </button>
                            <div class="checkbox-input">
                                <input type="checkbox" name="login-form-remember" id="login-form-remember">
                                <label for="login-form-remember">مرا بخاطر بسپار</label>
                            </div>
                        </div>
                        <div class="single-input">
                            <a href="#">رمز خود را فراموش کرده اید؟</a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="checkout-info">
                <i class="fa fa-window-maximize"></i>
                آیا کد تخفیف دارید؟ <a class="checkout-info-coupon-trigger" href="#">برای وارد کردن کد تخفیف اینجا کلیک کنید</a>
            </div>

            <div class="checkout-info-collapsebox">
                <form action="#" class="checkout-info-coupon">
                    <input type="text" placeholder="کد">
                    <button class="ho-button">
                        <span>اعمال تخفیف</span>
                    </button>
                </form>
            </div>

            <div class="billing-info">
                <div class="row">

                    <!-- Billing Details -->
                    <div class="col-lg-6">

                        <h3 class="small-title">جزئیات صورتحساب</h3>

                        <div class="ho-form">
                            <div class="ho-form-inner">
                                <div class="single-input single-input-half">
                                    <label for="customer-firstname">نام و نام خانوادگی *</label>
                                    <input type="text" required name="fullnameorder" id="fullname" v-model="fullnameorder" id="customer-firstname">
                                </div>
                                <div class="single-input single-input-half">
                                    <label for="customer-companyname">  شماره موبایل * </label>
                                    <input type="text" required name="mobileorder" v-model="mobileorder" id="customer-companyname">
                                </div>
                                <div class="single-input single-input-half">
                                    <label for="customer-email">ایمیل *</label>
                                    <input type="email" v-model="email_order" name="customer-email" id="customer-email">
                                </div>
                                <div class="single-input single-input-half">
                                    <label for="customer-phone">شماره تلفن </label>
                                    <input type="text" v-model="telephone" name="customer-phone" id="customer-phone">
                                </div>
                                <div class="single-input single-input-half">
                                    <label for="customer-country">استان *</label>


                                    <select id="customer-country" v-model="province"  id="province" name="province" onchange="Func()" class="form-control select2 js-filter">
                                        <option value="البرز" data_city="آسارا , اشتهارد , چهارباغ , شهر جدید هشتگرد , طالقان , کرج , کمال‌شهر , کوهسار , گرمدره , ماهدشت , محمدشهر , مشکین‌دشت , نظرآباد , هشتگرد">البرز</option>
                                        <option value="ن شرقی</option" data_city="آبش‌احمد , آذرشهر , آقکند , اسکو , اهر , ایلخچی , باسمنج , بخشایش , بستان‌آباد , بناب , بناب جدید , تبریز , ترک , ترکمانچایتسوج , تیکمه‌داش , جلفا , خاروانا , خامنه , خراجو , خسروشهر , خضرلو , خمارلو , خواجه , دوزدوزان , زرنق , زنوز , سراب , سردرود , سهند , سیس , سیه‌رود , شبستر , شربیان , شرفخانه , شندآباد , صوفیان , عجب‌شیر , قره‌آغاج , کشکسرای , کلوانق , کلیبر , کوزه‌کنان , گوگان , لیلان , مراغه , مرند , ملکان , ملک‌کیان , ممقان , مهربان , میانه , نظرکهریزی , وایقان , ورزقان , هادیشهر , هرگلان , هریس , هشترود , هوراند , یامچی">آذربایجان شرقی</option>
                                        <option value="یجان غربی</opt" data_city="آواجیق , ارومیه , اشنویه , ایواوغلی , باروق , بازرگان , بوکان , پلدشت , پیرانشهر , تازه‌شهر , تکاب , چهاربرج , خوی , ربط , سردشت , سرو , سلماس , سیلوانه , سیمینه , سیه‌چشمه , شاهین‌دژ , شوط , فیرورق , قره‌ضیاءالدین , قوشچی , کشاورز , گردکشانه , ماکو , محمدیار , محمودآباد , مهاباد , میاندوآب , میرآباد , نالوس , نقده , نوشین‌شهر">آذربایجان غربی</option>
                                        <option value="اردبیل" data_city="خلخال , آبی‌بیگلو , اردبیل , اصلاندوز , بیله‌سوار , پارس‌آباد , تازه‌کند , تازه‌کند انگوت , جعفرآباد , رضی , سرعین , عنبران , فخرآباد , کلور , کوراییم , گرمی , گیوی , لاهرود , مشگین‌شهر , نمین , نیر , هشتجین , هیر">اردبیل</option>
                                        <option value="اصفهان" data_city="ابریشم , اردستان , اژیه , اصفهان , افوس , انارک , ایمان‌شهر , بادرود , باغ بهادران , برف‌انبار , بهاران‌شهر , بهارستان , بویین و میاندشت , پیربکران , تودشک , تیران , جندق , جوزدان , چادگان , چرمهین , چم گردان , حبیب‌آباد , حسن‌آباد , حنا , خالدآباد , خمینی‌شهر , خوانسار , خور , خوراسگان , خورزوق , داران , دامنه , درچه‌پیاز , دستگرد , دهاقان , دهق , دولت‌آباد , دیزیچه , رزوه , رضوان‌شهر , زاینده‌رود , زرین‌شهر , زواره , زیباشهر , سده لنجان , سگزی , سمیرم , شاهین‌شهر , شهرضا , طالخونچه , عسگران , علویجه , فریدون‌شهر , فلاورجان , فولادشهر , قهدریجان , کاشان , کرکوند , کلیشاد و سودرجان , کمشجه , کمه , کهریزسنگ , کوشک , کوهپایه , گز , گلپایگان , گل‌دشت , گل‌شهر , گوگد , مبارکه , محمدآباد , مشکات , منظریه , مهاباد , میمه , نایین , نجف‌آباد , نصرآباد , نطنز , نیک‌آباد , ورزنه , ورنامخواست , وزوان , ونک , هرند">اصفهان</option>
                                        <option value="ایلام" data_city="آبدانان , آسمان‌آباد , ارکواز , ایلام , ایوان , بدره , پهله , توحید , چوار , دره‌شهر , دلگشا , دهلران , زرنه , سرابله , سراب‌باغ , صالح‌آباد , لومار , مورموری , موسیان , مهران , میمه">ایلام</option>
                                        <option value="بوشهر" data_city="آب‌پخش , آبدان , امام حسن , اهرم , برازجان , بردخون , بردستان , بندر بوشهر , بندر دیر , بندر دیلم , بندر ریگ , بندر کنگان , بندر گناوه , تنگ ارم , جم , چغادک , خارک , خورموج , دالکی , دلوار , ریز , سعدآباد , شبانکاره , شنبه , طاهری , عسلویه , کاکی , کلمه , نخل تقی , وحدتیه">بوشهر</option>
                                        <option value="تهران" data_city="آبسرد , آبعلی , ارجمند , اسلام‌شهر , اندیشه , باغستان , باقرشهر , بومهن , پاکدشت , پردیس , پیشوا , تجریش , تهران , جوادآباد , چهاردانگه , حسن‌آباد , دماوند , رباطکریم , رودهن , شاهدشهر , شریف‌آباد , شهرری , شهریار , صالح‌آباد , صباشهر , صفادشت , فردوسیه , فشم , فیروزکوه , قدس , قرچک , کهریزک , کیلان , گلستان , لواسان , ملارد , نسیم‌شهر , نصیرآباد , وحیدیه , ورامین">تهران</option>
                                        <option value="چهارمحال و بختیاری" data_city="اردل , آلونی , باباحیدر , بروجن , بلداجی , بن , جونقان , چلگرد , سامان , سفیددشت , سودجان , سورشجان , شلمزار , شهرکرد , طاقانک , فارسان , فرادنبه , فرخ‌شهر , کیان , گندمان , گهرو , لردگان , مال‌خلیفه , ناغان , نافچ , نقنه , هفشجان">چهارمحال و بختیاری</option>
                                        <option value="خراسان جنوبی" data_city="آرین‌شهر , ارسک , اسدیه , اسفدن , اسلامیه , آیسک , بشرویه , بیرجند , حاجی‌آباد , خضری دشت بیاض , خوسف , زهان , سرایان , سربیشه , سه‌قلعه , شوسف , طبس مسینا , فردوس , قائن , قهستان , مود , نهبندان , نیمبلوک">خراسان جنوبی</option>
                                        <option value="خراسان رضوی" data_city="انابد , باجگیران , بار , باخرز , بایگ , بجستان , بردسکن , بیدخت , تایباد , تربت جام , تربت حیدریه , جغتای , جنگل , چاپشلو , چکنه , چناران , خرو , خلیل‌آباد , خواف , داورزن , دررود , درگز , دولت‌آباد , رباط سنگ , رشتخوار , رضویه , رودآب , ریوش , سبزوار , سرخس , سلامی , سلطان‌آباد , سنگان , شادمهر , شاندیز , ششتمد , شهرآباد , صالح‌آباد , طرقبه , عشق‌آباد , فرهادگرد , فریمان , فیروزه , فیض‌آباد , قاسم‌آباد , قدمگاه , قلندرآباد , قوچان , کاخک , کاریز , کاشمر , کدکن , کلات , کندر , گناباد , لطف‌آباد , مشهد , مشهد ریزه , ملک‌آباد , نشتیفان , نصرآباد , نقاب , نوخندان , نیشابور , نیل‌شهر , همت‌آباد">خراسان رضوی</option>
                                        <option value="خراسان شمالی" data_city="    آشخانه , اسفراین , بجنورد , پیش‌قلعه , جاجرم , حصار گرم‌خان , درق , راز , سنخواست , شوقان , شیروان , صفی‌آباد , فاروج , قاضی , گرمه , لوجلی">خراسان شمالی</option>
                                        <option value="خوزستان" data_city="آبادان , آغاجاری , اروندکنار , الوان , امیدیه , اندیمشک , اهواز , ایذه , باغ‌ملک , بستان , بندر امام خمینی , بندر ماهشهر , بهبهان , جایزان , جنت‌مکان , چمران , حر ریاحی , حسینیه , حمیدیه , خرمشهر , دزآب , دزفول , دهدز , رامشیر , رامهرمز , رفیع , زهره , سالند , سردشت , سوسنگرد , شادگان , شوش , شوشتر , شیبان , صفی‌آباد , صیدون , قلعه خواجه , قلعه‌تل , گتوند , لالی , مسجدسلیمان , مقاومت , ملاثانی , میانرود , مینوشهر , هفتگل , هندیجان , هویزه , ویس">خوزستان</option>
                                        <option value="زنجان" data_city="آب‌بر , ابهر , ارمغان‌خانه , چورزق , حلب , خرمدره , دندی , زرین‌آباد , زرین‌رود , زنجان , سجاس , سلطانیه , سهرورد , صائین‌قلعه , قیدار , گرماب , ماه‌نشان , هیدج ">زنجان</option>
                                        <option value="سمنان" data_city="    آرادان , امیریه , ایوانکی , بسطام , بیارجمند , دامغان , درجزین , دیباج , سرخه , سمنان , شاهرود , شهمیرزاد , کلاته خیج , گرمسار , مجن , مهدی‌شهر , میامی">سمنان</option>
                                        <option value="سیستان و بلوچستان" data_city="ادیمی , اسپکه , ایرانشهر , بزمان , بمپور , بنت , بنجار , پیشین , جالق , چابهار , خاش , دوست‌محمد , راسک , زابل , زابلی , زاهدان , زهک , سراوان , سرباز , سوران , سیرکان , فنوج , قصرقند , کنارک , گلمورتی , محمد‌آباد , میرجاوه , نصرت‌آباد , نگور , نوک‌آباد , نیک‌شهر">سیستان و بلوچستان</option>
                                        <option value="فارس" data_city="آباده , آباده طشک , اردکان , ارسنجان , استهبان , اسیر , اشکنان , افزر , اقلید , اهل , اوز , ایج , ایزدخواست , باب انار , بالاده , بنارویه , بهمن , بیرم , بیضا , جنت‌شهر , جهرم , جویم , حاجی‌آباد , خاوران , خرامه , خشت , خنج , خور , خومه‌زار , داراب , داریان , دوزه , دهرم , رامجرد , رونیز , زاهدشهر , زرقان , سده , سروستان , سعادت‌شهر , سورمق , سوریان , سیدان , ششده , شهرپیر , شیراز , صغاد , صفاشهر , علامرودشت , فتح‌آباد , فراشبند , فسا , فیروزآباد , قائمیه , قادرآباد , قطب‌آباد , قیر , کازرون , کامفیروز , کره‌ای , کنارتخته , کوار , گراش , گله‌دار , لارستان , لامرد , لپوئی , لطیفی , مرودشت , مشکان , مصیری , مهر , میمند , نوجین , نودان , نورآباد , نی‌ریز , وراوی , هماشهر">فارس</option>
                                        <option value="قزوین" data_city="آبگرم , آبیک , آوج , ارداق , اسفرورین , اقبالیه , الوند , بوئین‌زهرا , بیدستان , تاکستان , خاکعلی , خرمدشت , دانسفهان , رازمیان , سگزآباد , سیردان , شال , ضیاءآباد , قزوین , کوهین , محمدیه , محمودآباد نمونه , معلم‌کلایه , نرجه">قزوین</option>
                                        <option value="قم" data_city="جعفریه , دستجرد , سلفچگان , قم , قنوات , کهک">قم</option>
                                        <option value="کردستان" data_city="آرمرده , بابارشانی , بانه , بلبان‌آباد , بویین سفلی , بیجار , چناره , دزج , دلبران , دهگلان , دیواندره , زرینه , سروآباد , سریش‌آباد , سقز , سنندج , شویشه , صاحب , قروه , کامیاران , کانی‌دینار , کانی‌سور , مریوان , موچش , یاسوکند">کردستان</option>
                                        <option value="کرمان" data_city="اختیارآباد , ارزوئیه , امین‌شهر , انار , اندوهجرد , باغین , بافت , بردسیر , بروات , بزنجان , بم , بهرمان , پاریز , جبالبارز , جوزم , جوپار , جیرفت , چترود , خاتون‌آباد , خانوک , خرسند , درب بهشت , دهج , رابر , راور , راین , رفسنجان , رودبار , ریحان‌شهر , زرند , زنگی‌آباد , زیدآباد , سیرجان , شهداد , شهربابک , صفائیه , عنبرآباد , فاریاب , فهرج , قلعه گنج , کاظم‌آباد , کرمان , کشکوئیه , کهنوج , کوهبنان , کیان‌شهر , گلباف , گلزار , ماهان , محمدآباد , محی‌آباد , مردهک , مس سرچشمه , منوجان , نجف‌شهر , نرماشیر , نظام‌شهر , نگار , نودژ , هجدک , یزدان‌شهر">کرمان</option>
                                        <option value="کرمانشاه" data_city="ازگله , اسلام‌آباد غرب , باینگان , بیستون , پاوه , تازه‌آباد , جوانرود , حمیل , رباط , روانسر , سرپل ذهاب , سرمست , سطر , سنقر , سومار , صحنه , قصر شیرین , کرمانشاه , کرند غرب , کنگاور , کوزران , گهواره , گیلانغرب , میان‌راهان , نودشه , نوسود , هرسین , هلشی">کرمانشاه</option>
                                        <option value="کهکیلویه و بویراحمد" data_city="باشت , پاتاوه , چرام , چیتاب , دهدشت , دوگنبدان , دیشموک , سوق , سی‌سخت , قلعه رئیسی , گراب سفلی , لنده , لیکک , مارگون , یاسوج">کهگیلویه و بویراحمد</option>
                                        <option value="گلستان" data_city="آزادشهر ,آق‌قلا ,بندر گز ,ترکمن ,رامیان ,علی‌آباد ,کردکوی ,کلاله ,گرگان ,گنبد کاووس ,مراوه‌تپه ,مینودشت">گلستان</option>
                                        <option value="گیلام" data_city="آستارا , آستانه اشرفیه , احمدسرگوراب , اسالم , اطاقور , املش , بازارجمعه , بره‌سر , بندر انزلی , پره‌سر , توتکابن , جیرنده , چابکسر , چاف و چمخاله , چوبر , حویق , خشکبیجار , خمام , دیلمان , رانکوه , رحیم‌آباد , رستم‌آباد , رشت , رضوانشهر , رودبار , رودسر , رودبنه , سنگر , سیاهکل , شفت , شلمان , صومعه‌سرا , فومن , کلاچای , کوچصفهان , کومله , کیاشهر , گوراب زرمیخ , لاهیجان , لشت نشا , لنگرود , لوشان , لوندویل , لیسار , ماسال , ماسوله , مرجغل , منجیل , واجارگاه , هشتپر">گیلان</option>
                                        <option value="لرستان" data_city="زنا , اشترینان , الشتر , الیگودرز , بروجرد , پل‌دختر , چالانچولان , چغلوندی , چقابل , خرم‌آباد , درب گنبد , دورود , زاغه , سپیددشت , سراب‌دوره , فیروزآباد , کونانی , کوهدشت , گراب , معمولان , مومن‌آباد , نورآباد , ویسیان">لرستان</option>
                                        <option value="مازندران" data_city="آلاشت , آمل , امیرشهر , ایزدشهر , بابل , بابلسر , بلده , بهشهر , بهنمیر , پل سفید , تنکابن , جویبار , چالوس , چمستان , خرم‌آباد , خلیل‌شهر , خوش‌رودپی , دابودشت , رامسر , رستمکلا , رویان , رینه , زرگرمحله , زیرآب , ساری , سرخ‌رود , سلمان‌شهر , سورک , شیرگاه , شیرود , عباس‌آباد , فریدون‌کنار , فریم , قائم‌شهر , کتالم و سادات‌شهر , کلارآباد , کلاردشت , کله‌بست , کوهی‌خیل , کیاسر , کیاکلا , گزنک , گلوگاه , گلوگاه بابل , گتاب , محمودآباد , مرزن‌آباد , مرزیکلا , نشتارود , نکا , نور , نوشهر">مازندران</option>
                                        <option value="مرکزی" data_city="اراک , آستانه , آشتیان , پرندک , تفرش , توره , خمین , خنداب , داودآباد , دلیجان , رازقان , زاویه , ساوه , سنجانشازند , غرق‌آباد , فرمهین , قورچی‌باشی , کرهرود , کمیجان , مأمونیه , محلات , میلاجرد , نراق , نوبران , نیم‌ورهندودر">مرکزی</option>
                                        <option value="هرمزگان" data_city="ابوموسی , بستک , بندر چارک , بندر خمیر , بندرعباس , بندر لنگه , پارسیان , جاسک , جناح , حاجی‌آباد , درگهاندهبارز , رویدر , زیارت‌علی , سندرک , سوزا , سیریک , فارغان , فین , قشم , کنگ , کیش , هرمز , هشت‌بندیمیناب">هرمزگان</option>
                                        <option value="همدان" data_city="ازندریان , اسدآباد , برزول , بهار , تویسرکان , جورقان , جوکار , دمق , رزن , زنگنه , سامن , سرکان , شیرین‌سو , صالح‌آباد , فامنین , فرسفج , فیروزان , قروه درجزین , قهاوند , کبودرآهنگ , گل‌تپه , گیان , لالجین , مریانج , ملایر , مهاجران , نهاوند , همدان">همدان</option>
                                        <option value="یزد" data_city="ابرکوه , احمدآباد , اردکان , اشکذر , بافق , بهاباد , تفت , حمیدیا , خضرآباد , دیهوک , زارچ , شاهدیه , طبس , عشق‌آباد , عقدا , مروست , مهردشت , مهریز , میبد , ندوشن , نیر , هرات , یزد">یزد</option>

                                    </select>

                                </div>
                                <div class="single-input single-input-half">
                                    <label for="customer-postalcode">کد پستی *</label>
                                    <input type="number" v-model="zipcode" name="customer-postalcode" id="customer-postalcode">
                                </div>

                                <div class="single-input">
                                    <label for="customer-address">آدرس*</label>

                                    <input type="text" v-model="addressorder" placeholder="آدرس دقیق">
                                </div>

                                <div class="single-input">
                                    <button v-on:click="AddOrder()" type="submit" class="ho-button ho-button-fullwidth mt-30">
                                        ثبت
                                    </button>
                                </div>


                            </div>
                        </div>



                    </div>
                    <!--// Billing Details -->


                    <!-- Place Order -->
                    <div class="col-lg-6">
                        <div class="order-infobox">
                            <h3 class="small-title">سفارش شما</h3>
                            <div class="checkout-table table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-left">محصول</th>
                                        <th class="text-right">جمع</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(Session::has('cart'))
                                    @foreach($ListCart as $listcart)
                                    <tr>
                                        <td class="text-left"> {{$listcart['item']['title']}} <span>× {{$listcart['qty']}}</span></td>
                                        <td class="text-right">{{$listcart['price'] * $listcart['qty']}} تومان</td>
                                    </tr>
                                    @endforeach


                                    @endif

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th class="text-left">جمع سبد</th>
                                        <td class="text-right">{{number_format($totalPrice)}} تومان</td>
                                    </tr>

                                    <tr class="total-price">
                                        <th class="text-left">جمع کل</th>
                                        <td class="text-right">{{number_format($totalPrice)}} تومان</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method">

                                <div class="check-payment">
                                    <input type="radio" name="payment-method" id="checkout-payment-method-1"
                                           class="ho-radio" checked="checked">
                                    <label for="checkout-payment-method-1"> پرداخت زرین پال</label>

                                </div>



                            </div>
                            <button class="ho-button ho-button-fullwidth mt-30" type="submit">
                                <span>پرداخت </span>
                            </button>
                        </div>
                    </div>
                    <!--// Place Order -->

                </div>
            </div>

        </div>
    </div>
    <!--// Checkout Area -->

    <!-- Newsletter Area -->
    <div class="ho-section newsletter-area bg-grey ptb-50">
        <div class="container">
            <div class="newsletter">
                <div class="newsletter-title">
                    <h2>مشترک شدن در <span>خبر نامه</span></h2>

                </div>
                <div class="newsletter-content">
                    <form id="mc-form" class="newsletter-form">
                        <input id="mc-email" type="email" autocomplete="off" placeholder="آدرس ایمیل">
                        <button id="mc-submit" type="submit">ثبت</button>
                    </form>
                    <!-- mailchimp-alerts start -->
                    <div class="mailchimp-alerts text-centre">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                    </div><!-- mailchimp-alerts end -->
                </div>
                <div class="newsletter-socialicons socialicons socialicons-radial">
                    <ul>
                        <li><a href="#"><i class="ion ion-logo-facebook"></i></a></li>
                        <li><a href="#"><i class="ion ion-logo-twitter"></i></a></li>
                        <li><a href="#"><i class="ion ion-logo-youtube"></i></a></li>
                        <li><a href="#"><i class="ion ion-logo-google"></i></a></li>
                        <li><a href="#"><i class="ion ion-logo-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--// Newsletter Area -->

</main>
