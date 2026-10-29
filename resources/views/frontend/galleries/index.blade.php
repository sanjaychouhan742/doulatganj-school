@extends('frontend.layouts.app')
@section('title')
@section('content')
    <main>

        <!-- Page Heading -->
        <section class="page-header-title">

            <div class="gallery-title-container">

                <h1>विद्यालय गैलरी</h1>

                <p>
                    हमारे विद्यालय की विभिन्न गतिविधियों, कार्यक्रमों एवं उपलब्धियों की झलक
                </p>

            </div>

        </section>


        <!-- Gallery List -->
        <section class="school-gallery">

            <div class="school-gallery-container">

                <!-- Gallery Item 1 -->
                <a href="{{route('frontend.gallery.show')}}" class="gallery-card">

                    <div class="gallery-image-box">

                        <img src="../images/school-images/school-front.jpeg" alt="विद्यालय भवन">

                        <div class="gallery-image-overlay">
                            <span class="material-symbols-outlined">
                                photo_library
                            </span>
                        </div>

                    </div>

                    <div class="gallery-card-content">

                        <h2>विद्यालय परिसर</h2>

                        <p>
                            हमारे विद्यालय परिसर एवं भवन की तस्वीरें।
                        </p>

                        <span class="gallery-view-btn">
                            गैलरी देखें
                            <span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </span>

                    </div>

                </a>


                <!-- Gallery Item 2 -->
                <a href="{{route('frontend.gallery.show')}}" class="gallery-card">

                    <div class="gallery-image-box">

                        <img src="../images/school-images/independence-day.jpeg" alt="स्वतंत्रता दिवस">

                        <div class="gallery-image-overlay">
                            <span class="material-symbols-outlined">
                                photo_library
                            </span>
                        </div>

                    </div>

                    <div class="gallery-card-content">

                        <h2>स्वतंत्रता दिवस</h2>

                        <p>
                            स्वतंत्रता दिवस समारोह एवं विद्यालय की गतिविधियाँ।
                        </p>

                        <span class="gallery-view-btn">
                            गैलरी देखें
                            <span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </span>

                    </div>

                </a>


                <!-- Gallery Item 3 -->
                <a href="{{route('frontend.gallery.show')}}" class="gallery-card">

                    <div class="gallery-image-box">

                        <img src="../images/school-images/republic-day.jpg" alt="गणतंत्र दिवस">

                        <div class="gallery-image-overlay">
                            <span class="material-symbols-outlined">
                                photo_library
                            </span>
                        </div>

                    </div>

                    <div class="gallery-card-content">

                        <h2>गणतंत्र दिवस</h2>

                        <p>
                            गणतंत्र दिवस समारोह की यादगार तस्वीरें।
                        </p>

                        <span class="gallery-view-btn">
                            गैलरी देखें
                            <span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </span>

                    </div>

                </a>


                <!-- Gallery Item 4 -->
                <a href="{{route('frontend.gallery.show')}}" class="gallery-card">

                    <div class="gallery-image-box">

                        <img src="../images/school-images/school-program.jpg" alt="विद्यालय कार्यक्रम">

                        <div class="gallery-image-overlay">
                            <span class="material-symbols-outlined">
                                photo_library
                            </span>
                        </div>

                    </div>

                    <div class="gallery-card-content">

                        <h2>विद्यालय कार्यक्रम</h2>

                        <p>
                            विद्यालय में आयोजित विभिन्न कार्यक्रमों की तस्वीरें।
                        </p>

                        <span class="gallery-view-btn">
                            गैलरी देखें
                            <span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </span>

                    </div>

                </a>


                <!-- Gallery Item 5 -->
                <a href="{{route('frontend.gallery.show')}}" class="gallery-card">

                    <div class="gallery-image-box">

                        <img src="../images/school-images/sports.jpg" alt="खेलकूद गतिविधियाँ">

                        <div class="gallery-image-overlay">
                            <span class="material-symbols-outlined">
                                photo_library
                            </span>
                        </div>

                    </div>

                    <div class="gallery-card-content">

                        <h2>खेलकूद गतिविधियाँ</h2>

                        <p>
                            विद्यार्थियों की खेलकूद एवं शारीरिक गतिविधियों की झलक।
                        </p>

                        <span class="gallery-view-btn">
                            गैलरी देखें
                            <span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </span>

                    </div>

                </a>


                <!-- Gallery Item 6 -->
                <a href="{{route('frontend.gallery.show')}}" class="gallery-card">

                    <div class="gallery-image-box">

                        <img src="../images/school-images/cultural.jpg" alt="सांस्कृतिक कार्यक्रम">

                        <div class="gallery-image-overlay">
                            <span class="material-symbols-outlined">
                                photo_library
                            </span>
                        </div>

                    </div>

                    <div class="gallery-card-content">

                        <h2>सांस्कृतिक कार्यक्रम</h2>

                        <p>
                            विद्यार्थियों द्वारा प्रस्तुत सांस्कृतिक कार्यक्रम।
                        </p>

                        <span class="gallery-view-btn">
                            गैलरी देखें
                            <span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </span>

                    </div>

                </a>

            </div>

        </section>
        <div class="pagination">
            <a href="{{route('frontend.gallery.show')}}" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">Next</a>
        </div>
    </main>
@endsection
