@extends('frontend.layouts.app')
@section('title', 'Dashboard |')
@section('content')
    <!-- Page Heading -->
    <section class="page-header-title">
        <div class="about-title-container">
            <!-- <span class="material-symbols-outlined gallery-title-icon">school</span> -->
            <h1>हमारे विद्यालय के बारे में</h1>
            <p>शिक्षा, संस्कार, अनुशासन और विद्यार्थियों के उज्ज्वल भविष्य की ओर एक कदम</p>
        </div>
    </section>

    <!-- About School -->
    <section class="about-school-section" id="about">
        <div class="about-school-container">
            <div class="about-school-image">
                <img src="../images/school-images/school-front.jpeg" alt="दौलतगंज विद्यालय भवन">
            </div>
            <div class="about-school-content">
                <span class="about-eyebrow">हमारा विद्यालय</span>
                <h2>शासकीय विद्यालय एवं संकुल, दौलतगंज</h2>
                <p>
                    शासकीय विद्यालय एवं संकुल, दौलतगंज, उज्जैन, मध्य प्रदेश में विद्यार्थियों को सीखने के लिए सकारात्मक,
                    सुरक्षित और प्रेरणादायक वातावरण उपलब्ध कराने का उद्देश्य रखता है।
                </p>
                <p>
                    हमारा प्रयास है कि विद्यार्थी शिक्षा के साथ-साथ अनुशासन, नैतिक मूल्यों, रचनात्मक सोच, सहयोग और सामाजिक
                    जिम्मेदारी को भी समझें। विद्यालय में विद्यार्थियों की प्रतिभा को प्रोत्साहित करने तथा उनके सर्वांगीण
                    विकास के लिए शैक्षणिक और सह-पाठ्यक्रम गतिविधियों
                    को महत्व दिया जाता है।
                </p>
                <p>
                    शिक्षक और कर्मचारी विद्यार्थियों के सीखने की प्रक्रिया में सहयोग करते हैं तथा उन्हें आगे बढ़ने के लिए
                    प्रेरित करते हैं।
                </p>
                <a href="../index.html#contact" class="about-read-more">
                    विद्यालय से संपर्क करें
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Vision and Mission -->
    <section class="about-values-section">
        <div class="about-section-heading">
            <span class="about-eyebrow">हमारी दिशा</span>
            <h2>हमारा उद्देश्य एवं दृष्टिकोण</h2>
            <p>हर विद्यार्थी को सीखने, विकसित होने और आगे बढ़ने के अवसर देना।</p>
        </div>
        <div class="about-values-grid">
            <article class="about-value-card">
                <span class="material-symbols-outlined">visibility</span>
                <h3>हमारा दृष्टिकोण</h3>
                <p>ऐसा शैक्षणिक वातावरण विकसित करना जहाँ विद्यार्थी ज्ञान, आत्मविश्वास और अच्छे संस्कारों के साथ आगे बढ़ें।
                </p>
            </article>
            <article class="about-value-card">
                <span class="material-symbols-outlined">flag</span>
                <h3>हमारा उद्देश्य</h3>
                <p>गुणवत्तापूर्ण शिक्षा, नियमित अध्ययन, अनुशासन और विद्यार्थियों की क्षमताओं के विकास को प्रोत्साहित करना।
                </p>
            </article>
            <article class="about-value-card">
                <span class="material-symbols-outlined">groups</span>
                <h3>सर्वांगीण विकास</h3>
                <p>शैक्षणिक गतिविधियों के साथ खेल, सांस्कृतिक कार्यक्रमों, रचनात्मकता और सहयोग की भावना को बढ़ावा देना।
                </p>
            </article>
        </div>
    </section>

    <!-- Faculty and Staff -->
    <section class="faculty-section" id="faculty">
        <div class="about-section-heading">
            <span class="about-eyebrow">हमारी टीम</span>
            <h2>हमारे शिक्षक एवं कर्मचारी</h2>
            <p>विद्यालय के शिक्षण और दैनिक कार्यों में योगदान देने वाले शिक्षक एवं कर्मचारी।</p>
        </div>

        <div class="faculty-grid">
            <!-- डेमो कार्ड: वास्तविक फोटो, नाम और पदनाम से बदलें -->
            <article class="faculty-card">
                <div class="faculty-image-box">
                    <img src="../images/faculty/principal.jpg" alt="प्राचार्य की फोटो"
                        onerror="this.onerror=null;this.src='../images/logo.jpeg';">
                </div>
                <div class="faculty-card-content">
                    <span class="faculty-role">विद्यालय प्रशासन</span>
                    <h3>प्राचार्य का नाम</h3>
                    <p>प्राचार्य</p>
                </div>
            </article>

            <article class="faculty-card">
                <div class="faculty-image-box">
                    <img src="../images/faculty/teacher-1.jpg" alt="शिक्षक की फोटो"
                        onerror="this.onerror=null;this.src='../images/logo.jpeg';">
                </div>
                <div class="faculty-card-content">
                    <span class="faculty-role">शिक्षण स्टाफ</span>
                    <h3>शिक्षक का नाम</h3>
                    <p>उच्च माध्यमिक शिक्षक</p>
                </div>
            </article>

            <article class="faculty-card">
                <div class="faculty-image-box">
                    <img src="../images/faculty/teacher-2.jpg" alt="शिक्षिका की फोटो"
                        onerror="this.onerror=null;this.src='../images/logo.jpeg';">
                </div>
                <div class="faculty-card-content">
                    <span class="faculty-role">शिक्षण स्टाफ</span>
                    <h3>शिक्षक का नाम</h3>
                    <p>माध्यमिक शिक्षक</p>
                </div>
            </article>

            <article class="faculty-card">
                <div class="faculty-image-box">
                    <img src="../images/faculty/staff-1.jpg" alt="कर्मचारी की फोटो"
                        onerror="this.onerror=null;this.src='../images/logo.jpeg';">
                </div>
                <div class="faculty-card-content">
                    <span class="faculty-role">कार्यालय स्टाफ</span>
                    <h3>कर्मचारी का नाम</h3>
                    <p>कार्यालय सहायक</p>
                </div>
            </article>
        </div>
        <p class="faculty-note">
            नोट: ऊपर दिए गए नाम और पदनाम केवल उदाहरण हैं। प्रकाशित करने से पहले इन्हें वास्तविक स्टाफ विवरण से बदलें। फोटो
            को
            <strong>images/faculty/</strong> फ़ोल्डर में रखें।
        </p>
    </section>
    </main>
@endsection
