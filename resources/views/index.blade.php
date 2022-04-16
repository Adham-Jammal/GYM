@extends('app')
@section("main")

<section class="main-section">
    <div class="user">
    <div class="user-info">
        <img src="https://scontent.flca1-2.fna.fbcdn.net/v/t1.6435-9/101158378_3312117215474806_5921137734985973760_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=e3f864&_nc_ohc=OBY1DOUO-Y8AX8JfxCB&_nc_ht=scontent.flca1-2.fna&oh=00_AT_jGNQkcnjUChq0Adwew06jw7-6IOTZxDELI7Fo6BK-TA&oe=627E9800" alt="">
        <h3 class="name">Oxygen GYM</h3>
    </div>
        <div class="edit-profile">
            <a href="#"><i class="bi bi-sliders"></i>تعديل بيانات المركز</a>
        </div>
    </div>
    <div class="money-info">
        <div class="total-money">
            <i class="bi bi-cash"></i>
            <h4>تم الحصول على</h4>
            <span> <span class="number-font">150.000</span> </span>
        </div>
        <div class="work-hours">
            <i class="bi bi-cash-coin"></i>
            <h4>مجموع رصيد الاشتراكات </h4>
            <span> <span class="number-font">700.000</span></span>
        </div>
    </div>
</section>

<section class="subscriber-section">
    <div class="subscriber">
        <div class="total-subscriber">
            <i class="bi bi-people"></i>
            <h4>عدد المشتركين الكلي</h4>
             <span class="number-font">117</span>
        </div>
        <div class="add-subscriber">
            <a href="#"><i class="bi bi-plus-circle"></i>إضافة مشترك</a>
        </div>
    </div>

    <div class="subscribers-info">
        <div class="sub-info">
            <div class="text">
                <span>المشتركين الجدد</span>
                <span class="number-font">15%</span>
            </div>
            <div class="progress-bar">
                <span style="width: 15%"></span>
            </div>
        </div>
        <div class="sub-info">
            <div class="text">
                <span>المشتركين الذين يجب تجديد اشتراكهم</span>
                <span class="number-font">20%</span>
            </div>
            <div class="progress-bar">
                <span style="width: 20%; background-color:#314459"></span>
            </div>
        </div>
        <div class="sub-info">
            <div class="text">
                <span>المشتركين الذبن قاموا بتجديد الاشتراك</span>
                <span class="number-font">55%</span>
            </div>
            <div class="progress-bar">
                <span style="width: 55%;background-color:#8f29c8"></span>
            </div>
        </div>
        <div class="sub-info">
            <div class="text">
                <span>المشتركين المتخلفين عن الدفع</span>
                <span class="number-font">10%</span>
            </div>
            <div class="progress-bar">
                <span style="width: 10%;background-color:#da3623"></span>
            </div>
        </div>
    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
<script src="{{asset('js/index.js')}}"></script>
@stop
