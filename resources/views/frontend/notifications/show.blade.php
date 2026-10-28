@extends('frontend.layouts.app')
@section('title', 'notification-show |')
@section('content')
    <section class="notice-show-page">

        <div class="notice-show-container">

            <!-- Breadcrumb -->

            <div class="notice-show-breadcrumb">
                <a href="../index.html">होम</a>

                <span class="material-symbols-outlined">chevron_right</span>

                <a href="../notifications.html#notification">सूचनाएँ</a>

                <span class="material-symbols-outlined">chevron_right</span>

                <span>सूचना विवरण</span>
            </div>

            <!-- Page Heading -->

            <div class="page-header-title">

                <h1>अर्धवार्षिक परीक्षा की समय-सारणी</h1>

                <p>
                    विद्यालय द्वारा जारी सूचना का विस्तृत विवरण नीचे दिया गया है।
                </p>

            </div>

            <!-- Detail Card -->

            <article class="notice-show-card">

                <!-- Card Header -->

                <div class="notice-show-card-header">

                    <div class="notice-show-icon">
                        <span class="material-symbols-outlined">event</span>
                    </div>

                    <div class="notice-show-title-area">

                        <span class="notice-show-date">
                            <span class="material-symbols-outlined">calendar_month</span> 24 सितम्बर 2026
                        </span>

                        <!-- <h2>अर्धवार्षिक परीक्षा की समय-सारणी</h2> -->

                    </div>

                </div>

                <!-- Card Content -->

                <div class="notice-show-content">

                    <div class="notice-show-badge">
                        <span class="material-symbols-outlined">campaign</span> परीक्षा संबंधी महत्वपूर्ण सूचना
                    </div>

                    <!-- Description -->

                    <section class="notice-show-section">

                        <h3>
                            <span class="material-symbols-outlined">description</span> सूचना का विवरण
                        </h3>

                        <p>
                            कक्षा 9वीं से 12वीं तक की अर्धवार्षिक परीक्षा की समय-सारणी जारी की गई है। सभी विद्यार्थियों को
                            सूचित किया जाता है कि वे अपनी कक्षा के अनुसार परीक्षा कार्यक्रम ध्यानपूर्वक देखें।
                        </p>

                        <p>
                            विद्यार्थी परीक्षा की तैयारी निर्धारित समय के अनुसार पूर्ण करें। परीक्षा से संबंधित किसी भी
                            जानकारी के लिए संबंधित शिक्षक अथवा विद्यालय कार्यालय से संपर्क करें।
                        </p>

                    </section>

                    <!-- Important Information -->

                    <div class="notice-show-info">

                        <h4>
                            <span class="material-symbols-outlined">info</span> महत्वपूर्ण जानकारी
                        </h4>

                        <p>
                            यह सूचना कक्षा 9वीं से 12वीं तक के विद्यार्थियों के लिए है। विद्यार्थी परीक्षा की तिथि, विषय और
                            समय की पुष्टि संलग्न समय-सारणी से करें।
                        </p>

                    </div>

                    <!-- Instructions -->

                    <section class="notice-show-section">

                        <h3>
                            <span class="material-symbols-outlined">checklist</span> विद्यार्थियों के लिए निर्देश
                        </h3>

                        <ul class="notice-show-instructions">

                            <li>
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>अपनी कक्षा की परीक्षा समय-सारणी ध्यानपूर्वक देखें।</span>
                            </li>

                            <li>
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>परीक्षा प्रारंभ होने से पहले विद्यालय में उपस्थित हों।</span>
                            </li>

                            <li>
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>परीक्षा के दौरान विद्यालय के नियमों का पालन करें।</span>
                            </li>

                            <li>
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>किसी भी समस्या के लिए विद्यालय कार्यालय से संपर्क करें।</span>
                            </li>

                        </ul>

                    </section>

                    <!-- Attachment -->

                    <section class="notice-show-section">

                        <h3>
                            <span class="material-symbols-outlined">attach_file</span> संलग्न दस्तावेज़
                        </h3>

                        <div class="notice-show-attachment">

                            <div class="notice-show-pdf-icon">
                                <span class="material-symbols-outlined">picture_as_pdf</span>
                            </div>

                            <div class="notice-show-file-details">

                                <h4>अर्धवार्षिक परीक्षा की समय-सारणी.pdf</h4>

                                <p>PDF दस्तावेज़ · परीक्षा समय-सारणी</p>

                            </div>

                            <a href="../documents/half-yearly-exam-timetable.pdf" class="notice-show-download" download>

                                <span class="material-symbols-outlined">download</span> डाउनलोड करें

                            </a>

                        </div>

                    </section>

                    <!-- Actions -->

                    <div class="notice-show-actions">

                        <a href="../notifications.html#notification" class="notice-show-back">

                            <span class="material-symbols-outlined">arrow_back</span> सभी सूचनाओं पर जाएँ

                        </a>

                        <button type="button" class="notice-show-print" onclick="window.print()">

                            <span class="material-symbols-outlined">print</span>
                            प्रिंट करें

                        </button>

                    </div>

                </div>

            </article>

        </div>

    </section>
@endsection
