@extends('frontend.layouts.app')
@section('title', 'Student Attendance |')
@section('content')
    <section class="page-header-title">
        <h1>
            परीक्षा से संबंधित महत्वपूर्ण सूचनाएँ
        </h1>

        <p>
            परीक्षा एवं शैक्षणिक कार्यक्रमों से संबंधित सभी महत्वपूर्ण सूचनाएँ यहाँ देखें।
        </p>
    </section>
    <section class="notification-page">

        <div class="notification-container">

            <!-- Notification List -->

            <div class="notification-list">


                <!-- Notification 1 -->

                <div class="notification-item">

                    <div class="notification-icon">

                        <span class="material-symbols-outlined">
                            event
                        </span>

                    </div>


                    <div class="notification-content">

                        <span class="notification-date">
                            24 सितम्बर 2026
                        </span>

                        <h3>
                            अर्धवार्षिक परीक्षा की समय-सारणी
                        </h3>

                        <p>
                            कक्षा 9वीं से 12वीं तक की अर्धवार्षिक परीक्षा की समय-सारणी जारी की गई है।
                        </p>

                    </div>


                    <a href="{{ route('frontend.notification.show') }}" class="notification-btn">

                        देखें

                        <span class="material-symbols-outlined">
                            arrow_forward
                        </span>

                    </a>

                </div>



                <!-- Notification 2 -->

                <div class="notification-item">

                    <div class="notification-icon">

                        <span class="material-symbols-outlined">
                            menu_book
                        </span>

                    </div>


                    <div class="notification-content">

                        <span class="notification-date">
                            20 सितम्बर 2026
                        </span>

                        <h3>
                            परीक्षा के संबंध में महत्वपूर्ण निर्देश
                        </h3>

                        <p>
                            आगामी परीक्षा में सम्मिलित होने वाले विद्यार्थियों के लिए आवश्यक निर्देश जारी किए गए हैं।
                        </p>

                    </div>


                    <a href="{{ route('frontend.notification.show') }}" class="notification-btn">

                        देखें

                        <span class="material-symbols-outlined">
                            arrow_forward
                        </span>

                    </a>

                </div>



                <!-- Notification 3 -->

                <div class="notification-item">

                    <div class="notification-icon">

                        <span class="material-symbols-outlined">
                            schedule
                        </span>

                    </div>


                    <div class="notification-content">

                        <span class="notification-date">
                            18 सितम्बर 2026
                        </span>

                        <h3>
                            परीक्षा समय एवं उपस्थिति संबंधी सूचना
                        </h3>

                        <p>
                            विद्यार्थियों को परीक्षा प्रारंभ होने के निर्धारित समय से पहले विद्यालय में उपस्थित होना आवश्यक
                            है।
                        </p>

                    </div>


                    <a href="{{ route('frontend.notification.show') }}" class="notification-btn">

                        देखें

                        <span class="material-symbols-outlined">
                            arrow_forward
                        </span>

                    </a>

                </div>



                <!-- Notification 4 -->

                <div class="notification-item">

                    <div class="notification-icon">

                        <span class="material-symbols-outlined">
                            school
                        </span>

                    </div>


                    <div class="notification-content">

                        <span class="notification-date">
                            15 सितम्बर 2026
                        </span>

                        <h3>
                            विद्यार्थियों के लिए शैक्षणिक सूचना
                        </h3>

                        <p>
                            विद्यार्थियों को आगामी शैक्षणिक गतिविधियों एवं परीक्षा तैयारी से संबंधित आवश्यक जानकारी।
                        </p>

                    </div>


                    <a href="{{ route('frontend.notification.show') }}" class="notification-btn">

                        देखें

                        <span class="material-symbols-outlined">
                            arrow_forward
                        </span>

                    </a>

                </div>



                <!-- Notification 5 -->

                <div class="notification-item">

                    <div class="notification-icon">

                        <span class="material-symbols-outlined">
                            campaign
                        </span>

                    </div>


                    <div class="notification-content">

                        <span class="notification-date">
                            10 सितम्बर 2026
                        </span>

                        <h3>
                            परीक्षा संबंधी अतिरिक्त सूचना
                        </h3>

                        <p>
                            परीक्षा से संबंधित अतिरिक्त दिशा-निर्देश एवं आवश्यक जानकारी विद्यार्थियों के लिए जारी की गई है।
                        </p>

                    </div>


                    <a href="{{ route('frontend.notification.show') }}" class="notification-btn">

                        देखें

                        <span class="material-symbols-outlined">
                            arrow_forward
                        </span>

                    </a>

                </div>


            </div>

        </div>
    </section>
    <div class="pagination">
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">Next</a>
    </div>
@endsection
