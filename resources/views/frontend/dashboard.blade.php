@extends('frontend.layouts.app')
@section('title', 'Dashboard |')
@section('content')
    <div class="notice-bar">

        <div class="notice-title">
            📢 महत्वपूर्ण सूचना
        </div>
        <div class="notice-wrapper">

            <div class="notice-content">

                <span>
                    📢 दिनांक 15 अक्टूबर को अभिभावक बैठक आयोजित की जाएगी।
                </span>

                <span>
                    📢 विद्यालय में अर्धवार्षिक परीक्षा की समय-सारणी जारी कर दी गई है।
                </span>

                <span>
                    📢 सभी विद्यार्थी समय पर विद्यालय उपस्थित हों।
                </span>

            </div>

        </div>

    </div>

    <!-- ================= HERO SLIDER ================= -->

    <section class="hero">

        <div class="slider-container">

            <div class="slider">

                <div class="slide">
                    <img src="../images/school-images/school-gate.jpeg" alt="विद्यालय परिसर" class="slide_image">

                    <div class="slide-overlay"></div>

                    <div class="hero-content">

                        <span class="hero-badge">
                            शासकीय विद्यालय एवं संकुल
                        </span>

                        <h2>
                            शिक्षा, संस्कार और
                            <span>सर्वांगीण विकास</span>
                        </h2>

                        <p>
                            केजी से कक्षा 12वीं तक विद्यार्थियों के गुणवत्तापूर्ण एवं समावेशी शिक्षा के लिए समर्पित।
                        </p>

                        <div class="hero-buttons">

                            <a href="#about" class="primary-btn">
                                विद्यालय के बारे में
                                <span class="material-symbols-outlined">
                                    arrow_forward
                                </span>
                            </a>

                            <a href="#contact" class="secondary-btn">
                                संपर्क करें
                            </a>

                        </div>

                    </div>
                </div>


                <div class="slide">

                    <img src="../images/school-images/school-front.jpeg" alt="विद्यालय भवन" class="slide_image">

                    <div class="slide-overlay"></div>

                    <div class="hero-content">

                        <span class="hero-badge">
                            KG से कक्षा 12वीं तक
                        </span>

                        <h2>
                            सीखने के लिए
                            <span>सुरक्षित वातावरण</span>
                        </h2>

                        <p>
                            विद्यार्थियों के शैक्षणिक, सामाजिक, सांस्कृतिक एवं रचनात्मक विकास पर विशेष ध्यान।
                        </p>

                    </div>

                </div>


                <div class="slide">

                    <img src="../images/school-images/school-corr.jpeg" alt="विद्यालय परिसर" class="slide_image">

                    <div class="slide-overlay"></div>

                    <div class="hero-content">

                        <span class="hero-badge">
                            हमारा संकल्प
                        </span>

                        <h2>
                            बेहतर शिक्षा,
                            <span>बेहतर भविष्य</span>
                        </h2>

                        <p>
                            विद्यार्थी, शिक्षक, अभिभावक और समुदाय मिलकर एक बेहतर शैक्षणिक वातावरण का निर्माण करते हैं।
                        </p>

                    </div>

                </div>

            </div>


            <!-- Previous -->
            <span class="material-symbols-outlined pre-btn">
                arrow_back
            </span>

            <!-- Next -->
            <span class="material-symbols-outlined next-btn">
                arrow_forward
            </span>

            <div class="pagination-btns"></div>

        </div>

    </section>


    <!-- ================= QUICK INFO ================= -->

    <section class="quick-info">

        <div class="quick-container">

            <div class="quick-card">

                <div class="quick-icon">
                    <span class="material-symbols-outlined">
                        menu_book
                    </span>
                </div>

                <div>
                    <h3>KG से 12वीं</h3>
                    <p>शिक्षा की निरंतर व्यवस्था</p>
                </div>

            </div>


            <div class="quick-card">

                <div class="quick-icon">
                    <span class="material-symbols-outlined">
                        groups
                    </span>
                </div>

                <div>
                    <h3>संकुल विद्यालय</h3>
                    <p>विद्यालयों के समन्वय के साथ</p>
                </div>

            </div>


            <div class="quick-card">

                <div class="quick-icon">
                    <span class="material-symbols-outlined">
                        sports
                    </span>
                </div>

                <div>
                    <h3>गतिविधियाँ</h3>
                    <p>खेल, सांस्कृतिक एवं शैक्षणिक गतिविधियाँ</p>
                </div>

            </div>


            <div class="quick-card">

                <div class="quick-icon">
                    <span class="material-symbols-outlined">
                        notifications
                    </span>
                </div>

                <div>
                    <h3>सूचनाएँ</h3>
                    <p>विद्यालय की नवीनतम जानकारी</p>
                </div>

            </div>

        </div>

    </section>


    <!-- Sticky Topper Link -->
    <a href="topper_students/index.html" class="sticky-topper-btn">
        <span class="material-symbols-outlined">emoji_events</span>
        <span class="sticky-topper-text">टॉप 10 विद्यार्थी</span>
    </a>

    <!-- ================= ABOUT ================= -->

    <section class="about-section" id="about">

        <div class="section-container">

            <div class="section-heading">

                <span>हमारे विद्यालय के बारे में</span>

                <h2>
                    शिक्षा के साथ संस्कार और
                    <strong>सर्वांगीण विकास</strong>
                </h2>

                <div class="heading-line"></div>

            </div>


            <div class="about-grid">

                <div class="about-image">

                    <img src="../images/school-images/school-front.jpeg" alt="विद्यालय">

                    <div class="experience-box">

                        <span class="material-symbols-outlined">
                            verified
                        </span>

                        <div>
                            <strong>शासकीय विद्यालय</strong>
                            <small>संकुल स्तर पर शैक्षणिक सहयोग</small>
                        </div>

                    </div>

                </div>


                <div class="about-content">

                    <h3>
                        हमारे विद्यालय की विशेषताएँ
                    </h3>

                    <p>
                        हमारा विद्यालय उज्जैन जिले में विद्यार्थियों को गुणवत्तापूर्ण एवं समावेशी शिक्षा प्रदान करने के लिए
                        निरंतर प्रयासरत है। विद्यालय में
                        <strong>केजी से कक्षा 12वीं तक</strong> के विद्यार्थियों के लिए शिक्षा की व्यवस्था है।
                    </p>

                    <p>
                        हमारा उद्देश्य केवल पाठ्यक्रम पूरा करना नहीं, बल्कि विद्यार्थियों में ज्ञान, अनुशासन, संस्कार,
                        आत्मविश्वास, जिम्मेदारी और रचनात्मक सोच का विकास करना है।
                    </p>

                    <p>
                        विद्यालय में शैक्षणिक गतिविधियों के साथ-साथ खेलकूद, सांस्कृतिक कार्यक्रम, जागरूकता कार्यक्रम एवं
                        विभिन्न सह-शैक्षणिक गतिविधियों के माध्यम से विद्यार्थियों की प्रतिभा को विकसित करने का प्रयास किया
                        जाता है।
                    </p>
                    <a href="{{ route('frontend.about-us') }}" class="about-read-more">
                        पूरा पढ़ें →
                    </a>

                    <div class="about-points">

                        <div>
                            <span class="material-symbols-outlined">
                                check_circle
                            </span> गुणवत्तापूर्ण शिक्षा
                        </div>

                        <div>
                            <span class="material-symbols-outlined">
                                check_circle
                            </span> अनुशासन एवं संस्कार
                        </div>

                        <div>
                            <span class="material-symbols-outlined">
                                check_circle
                            </span> खेल एवं सांस्कृतिक गतिविधियाँ
                        </div>

                        <div>
                            <span class="material-symbols-outlined">
                                check_circle
                            </span> विद्यार्थियों का सर्वांगीण विकास
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ================= HIGHLIGHTS ================= -->

    <section class="highlights-section" id="highlights">

        <div class="section-container">

            <div class="section-heading light">

                <span>विद्यालय की झलक</span>

                <h2>
                    हमारे विद्यालय की
                    <strong>मुख्य विशेषताएँ</strong>
                </h2>

                <div class="heading-line"></div>

            </div>


            <div class="stats-grid">

                <div class="stat-card">

                    <span class="material-symbols-outlined">
                        child_care
                    </span>

                    <strong>KG</strong>

                    <p>प्रारंभिक शिक्षा</p>

                </div>


                <div class="stat-card">

                    <span class="material-symbols-outlined">
                        school
                    </span>

                    <strong>12वीं</strong>

                    <p>उच्चतर माध्यमिक शिक्षा</p>

                </div>


                <div class="stat-card">

                    <span class="material-symbols-outlined">
                        groups
                    </span>

                    <strong>संकुल</strong>

                    <p>विद्यालयों का शैक्षणिक समन्वय</p>

                </div>


                <div class="stat-card">

                    <span class="material-symbols-outlined">
                        emoji_events
                    </span>

                    <strong>गतिविधियाँ</strong>

                    <p>शिक्षा एवं प्रतिभा विकास</p>

                </div>

            </div>

        </div>

    </section>


    <!-- ================= PARENT SERVICE ================= -->

    <section class="parent-section">

        <div class="section-container">

            <div class="parent-box">

                <div class="parent-icon">

                    <span class="material-symbols-outlined">
                        notifications_active
                    </span>

                </div>


                <div class="parent-content" id="parent-info">

                    <span class="small-title">
                        अभिभावकों के लिए सुविधा
                    </span>

                    <h2>
                        विद्यार्थी की दैनिक उपस्थिति की जानकारी
                    </h2>

                    <p>
                        विद्यालय में विद्यार्थियों की दैनिक उपस्थिति दर्ज होने के बाद अभिभावकों को उनके बच्चे की उपस्थिति की
                        जानकारी डिजिटल माध्यम से उपलब्ध कराने की सुविधा विकसित की जा सकती है।
                    </p>

                    <div class="parent-features">

                        <span>
                            <i class="material-symbols-outlined">
                                check
                            </i>
                            दैनिक उपस्थिति
                        </span>

                        <span>
                            <i class="material-symbols-outlined">
                                check
                            </i>
                            अभिभावक सूचना
                        </span>

                        <span>
                            <i class="material-symbols-outlined">
                                check
                            </i>
                            डिजिटल रिकॉर्ड
                        </span>

                    </div>

                </div>


                <a href="{{ route('frontend.student-attendance') }}" class="parent-btn">
                    अभिभावक सुविधा
                    <span class="material-symbols-outlined">
                        arrow_forward
                    </span>
                </a>

            </div>

        </div>

    </section>


    <!-- ================= ACTIVITIES ================= -->

    <section class="activities-section" id="activities">

        <div class="section-container">

            <div class="section-heading">

                <span>विद्यालय की गतिविधियाँ</span>

                <h2>
                    शिक्षा के साथ
                    <strong>प्रतिभा विकास</strong>
                </h2>

                <div class="heading-line"></div>

            </div>


            <div class="activity-grid">

                <div class="activity-card">

                    <div class="activity-icon">
                        <span class="material-symbols-outlined">
                            menu_book
                        </span>
                    </div>

                    <h3>शैक्षणिक गतिविधियाँ</h3>

                    <p>
                        कक्षा शिक्षण, प्रोजेक्ट, क्विज, प्रतियोगिताएँ एवं सीखने से जुड़ी गतिविधियाँ।
                    </p>

                </div>


                <div class="activity-card">

                    <div class="activity-icon">
                        <span class="material-symbols-outlined">
                            sports_soccer
                        </span>
                    </div>

                    <h3>खेलकूद गतिविधियाँ</h3>

                    <p>
                        विद्यार्थियों के शारीरिक विकास एवं खेल प्रतिभा को बढ़ावा देने वाली गतिविधियाँ।
                    </p>

                </div>


                <div class="activity-card">

                    <div class="activity-icon">
                        <span class="material-symbols-outlined">
                            palette
                        </span>
                    </div>

                    <h3>सांस्कृतिक गतिविधियाँ</h3>

                    <p>
                        सांस्कृतिक कार्यक्रम, कला, संगीत एवं रचनात्मक गतिविधियों में सहभागिता।
                    </p>

                </div>


                <div class="activity-card">

                    <div class="activity-icon">
                        <span class="material-symbols-outlined">
                            campaign
                        </span>
                    </div>

                    <h3>जागरूकता कार्यक्रम</h3>

                    <p>
                        स्वच्छता, पर्यावरण, स्वास्थ्य एवं सामाजिक जागरूकता से संबंधित कार्यक्रम।
                    </p>

                </div>

            </div>

        </div>

    </section>



    <!-- ===== Homepage Notice Section Start ===== -->

    <section class="home-notice-section" id="notification">

        <div class="home-notice-container">

            <!-- Section Heading -->
            <div class="home-notice-header">

                <div class="home-notice-heading-content">

                    <span class="home-notice-eyebrow">
                        <span class="material-symbols-outlined">notifications_active</span> विद्यालय सूचना केंद्र
                    </span>

                    <p>
                        विद्यालय की सभी महत्वपूर्ण <span>सूचनाएँ यहाँ देखें</span>
                    </p>

                </div>

                <!-- <a href="notification/index.html" class="home-notice-all-btn">
                                सभी सूचनाएँ
                                <span class="material-symbols-outlined">arrow_forward</span>
                            </a> -->

            </div>


            <!-- Notice Cards -->
            <div class="home-notice-grid">


                <!-- Notice 1 -->
                <article class="home-notice-card home-notice-blue">

                    <div class="home-notice-card-top">

                        <div class="home-notice-icon">
                            <span class="material-symbols-outlined">campaign</span>
                        </div>

                        <span class="home-notice-number">01</span>

                    </div>

                    <div class="home-notice-card-content">

                        <span class="home-notice-category">
                            महत्वपूर्ण सूचना
                        </span>

                        <h3>विद्यालय की नवीनतम सूचना</h3>

                        <p>
                            विद्यालय से संबंधित नवीनतम सूचना एवं आवश्यक घोषणाएँ।
                        </p>

                    </div>

                    <a href="notification/index.html" class="home-notice-link">
                        सभी सूचनाएँ देखें
                        <span class="material-symbols-outlined">east</span>
                    </a>

                </article>


                <!-- Notice 2 -->
                <article class="home-notice-card home-notice-orange">

                    <div class="home-notice-card-top">

                        <div class="home-notice-icon">
                            <span class="material-symbols-outlined">event</span>
                        </div>

                        <span class="home-notice-number">02</span>

                    </div>

                    <div class="home-notice-card-content">

                        <span class="home-notice-category">
                            परीक्षा एवं कार्यक्रम
                        </span>

                        <h3>आगामी परीक्षा एवं शैक्षणिक कार्यक्रम</h3>

                        <p>
                            आगामी परीक्षाओं एवं शैक्षणिक गतिविधियों की जानकारी।
                        </p>

                    </div>

                    <a href="notification/index.html" class="home-notice-link">
                        सभी सूचनाएँ देखें
                        <span class="material-symbols-outlined">east</span>
                    </a>

                </article>


                <!-- Notice 3 -->
                <article class="home-notice-card home-notice-green">

                    <div class="home-notice-card-top">

                        <div class="home-notice-icon">
                            <span class="material-symbols-outlined">school</span>
                        </div>

                        <span class="home-notice-number">03</span>

                    </div>

                    <div class="home-notice-card-content">

                        <span class="home-notice-category">
                            विद्यार्थी जानकारी
                        </span>

                        <h3>विद्यार्थियों के लिए आवश्यक सूचना</h3>

                        <p>
                            विद्यार्थियों एवं अभिभावकों के लिए जरूरी जानकारी।
                        </p>

                    </div>

                    <a href="notification/index.html" class="home-notice-link">
                        सभी सूचनाएँ देखें
                        <span class="material-symbols-outlined">east</span>
                    </a>

                </article>


                <!-- Notice 4 -->
                <article class="home-notice-card home-notice-purple">

                    <div class="home-notice-card-top">

                        <div class="home-notice-icon">
                            <span class="material-symbols-outlined">groups</span>
                        </div>

                        <span class="home-notice-number">04</span>

                    </div>

                    <div class="home-notice-card-content">

                        <span class="home-notice-category">
                            विद्यालय गतिविधियाँ
                        </span>

                        <h3>विद्यालय की गतिविधियों से संबंधित सूचना</h3>

                        <p>
                            विद्यालय में आयोजित होने वाले कार्यक्रमों की जानकारी।
                        </p>

                    </div>

                    <a href="notification/index.html" class="home-notice-link">
                        सभी सूचनाएँ देखें
                        <span class="material-symbols-outlined">east</span>
                    </a>

                </article>


            </div>

            <!-- Bottom Link -->
            <!-- <div class="home-notice-footer">

                            <span class="material-symbols-outlined">info</span>

                            <p>
                                सभी नवीनतम घोषणाओं के लिए विद्यालय का सूचना पटल देखें।
                            </p>

                            <a href="notification/index.html">
                                सभी नोटिस देखें
                            </a>

                        </div> -->

        </div>

    </section>

    <!-- ===== Homepage Notice Section End ===== -->


    <!-- ================= E-LIBRARY SECTION ================= -->

    <section class="home-elibrary" id="e-library">

        <div class="home-elibrary-container">

            <div class="home-elibrary-title">
                <div>
                    <h2>ई-लाइब्रेरी</h2>

                    <p>
                        विद्यार्थियों के लिए डिजिटल पुस्तकें<span> एवं अध्ययन सामग्री</span>
                    </p>
                </div>

            </div>


            <div class="home-elibrary-content">

                <!-- Card 1 -->
                <div class="home-elibrary-card">

                    <div class="home-elibrary-icon">
                        <span class="material-symbols-outlined">
                            menu_book
                        </span>
                    </div>

                    <div class="home-elibrary-card-content">

                        <h3>पुस्तकें</h3>

                        <p>
                            विभिन्न कक्षाओं के लिए डिजिटल पुस्तकें एवं अध्ययन सामग्री।
                        </p>

                        <a href="e-library/index.html">
                            देखें
                            <span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </a>

                    </div>

                </div>


                <!-- Card 2 -->
                <div class="home-elibrary-card">

                    <div class="home-elibrary-icon">
                        <span class="material-symbols-outlined">
                            quiz
                        </span>
                    </div>

                    <div class="home-elibrary-card-content">

                        <h3>प्रश्न-पत्र</h3>

                        <p>
                            पुराने प्रश्न-पत्र एवं मॉडल पेपर विद्यार्थियों के लिए उपलब्ध।
                        </p>

                        <a href="e-library/index.html">
                            देखें
                            <span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </a>

                    </div>

                </div>


                <!-- Card 3 -->
                <div class="home-elibrary-card">

                    <div class="home-elibrary-icon">
                        <span class="material-symbols-outlined">
                            school
                        </span>
                    </div>

                    <div class="home-elibrary-card-content">

                        <h3>अध्ययन सामग्री</h3>

                        <p>
                            कक्षा 1 से 12 तक की उपयोगी शैक्षणिक सामग्री एवं नोट्स।
                        </p>

                        <a href="e-library/index.html">
                            देखें
                            <span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </a>

                    </div>

                </div>


            </div>


            <div class="home-elibrary-button">

                <a href="e-library/index.html">
                    पूरी ई-लाइब्रेरी देखें

                    <span class="material-symbols-outlined">
                        arrow_forward
                    </span>
                </a>

            </div>

        </div>

    </section>
    <!-- ================= GALLERY ================= -->

    <section class="gallery-section" id="gallery">

        <div class="section-container">

            <div class="section-heading">

                <span>विद्यालय गैलरी</span>

                <h2>
                    हमारे विद्यालय की
                    <strong>कुछ झलकियाँ</strong>
                </h2>

                <div class="heading-line"></div>

            </div>


            <div class="gallery-grid">

                <div class="gallery-item">
                    <img src="../images/school-images/school-gate.jpeg" alt="विद्यालय परिसर">
                </div>

                <div class="gallery-item">
                    <img src="../images/school-images/school-front.jpeg" alt="विद्यालय भवन">
                </div>

                <div class="gallery-item">
                    <img src="../images/school-images/school-corr.jpeg" alt="विद्यालय परिसर">
                </div>

            </div>


            <div class="center-btn">

                <a href="gallery/index.html" class="gallery-btn">
                    पूरी गैलरी देखें
                    <span class="material-symbols-outlined">
                        arrow_forward
                    </span>
                </a>

            </div>

        </div>

    </section>


    <!-- ================= CONTACT ================= -->

    <section class="contact-section" id="contact">

        <div class="section-container">

            <div class="contact-grid">

                <div class="contact-content">

                    <span class="small-title">
                        संपर्क जानकारी
                    </span>

                    <h2>
                        विद्यालय से
                        <strong>संपर्क करें</strong>
                    </h2>

                    <p>
                        विद्यालय से संबंधित जानकारी, प्रवेश, गतिविधियों या अन्य आवश्यक जानकारी के लिए विद्यालय से संपर्क
                        करें।
                    </p>


                    <div class="contact-item">

                        <span class="material-symbols-outlined">
                            location_on
                        </span>

                        <div>
                            <strong>पता</strong>
                            <p>दौलतगंज, उज्जैन, मध्य प्रदेश</p>
                        </div>

                    </div>


                    <div class="contact-item">

                        <span class="material-symbols-outlined">
                            call
                        </span>

                        <div>
                            <strong>फोन</strong>
                            <p>0734-2563533</p>
                        </div>

                    </div>


                    <div class="contact-item">

                        <span class="material-symbols-outlined">
                            mail
                        </span>

                        <div>
                            <strong>ई-मेल</strong>
                            <p>daulatganjhssujn@gmail.com</p>
                        </div>

                    </div>

                    <button class="contact-btn" id="openContactModal">
                        संपर्क करें
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </button>

                </div>


                <!-- <div class="contact-card">

                                <span class="material-symbols-outlined">
                                    school
                                </span>

                                <h3>
                                    विद्यालय से जुड़ी जानकारी
                                </h3>

                                <p>
                                    प्रवेश, समय-सारणी, सूचनाएँ, गतिविधियाँ एवं अन्य विद्यालय संबंधी जानकारी के लिए वेबसाइट के संबंधित अनुभाग देखें।
                                </p>

                                <a href="#">
                                    और जानकारी
                                    <span class="material-symbols-outlined">
                                        arrow_forward
                                    </span>
                                </a>

                            </div> -->
                <!-- Google Map -->

                <div class="map-card">

                    <iframe
                        src="https://www.google.com/maps?q=Govt.+Shaligram+Tomar+H+S+Dolat+Ganj+School,+Ujjain,+Madhya+Pradesh&output=embed"
                        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>
            </div>

        </div>

    </section>

    <!-- Contact Form Modal -->

    <div class="contact-modal" id="contactModal">

        <div class="contact-modal-box">

            <button class="modal-close" id="closeContactModal">
                <span class="material-symbols-outlined">close</span>
            </button>

            <h2>संपर्क करें</h2>

            <p>
                अपना संदेश भेजने के लिए नीचे दिया गया फॉर्म भरें।
            </p>

            <form id="contactForm">

                <div class="form-group">
                    <label for="name">नाम</label>

                    <input type="text" id="name" name="name" placeholder="अपना नाम दर्ज करें" required>
                </div>


                <div class="form-group">
                    <label for="mobile">मोबाइल नंबर</label>

                    <input type="tel" id="mobile" name="mobile" placeholder="अपना मोबाइल नंबर दर्ज करें"
                        required>
                </div>


                <div class="form-group">
                    <label for="email">ई-मेल</label>

                    <input type="email" id="email" name="email" placeholder="अपना ई-मेल दर्ज करें">
                </div>


                <div class="form-group">
                    <label for="subject">विषय</label>

                    <input type="text" id="subject" name="subject" placeholder="विषय दर्ज करें" required>
                </div>


                <div class="form-group">
                    <label for="message">संदेश</label>

                    <textarea id="message" name="message" rows="5" placeholder="अपना संदेश लिखें..." required></textarea>
                </div>


                <button type="submit" class="submit-btn">
                    संदेश भेजें
                    <span class="material-symbols-outlined">
                        send
                    </span>
                </button>

            </form>

        </div>

    </div>
@endsection
@section('js')

@endsection
