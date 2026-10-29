@extends('frontend.layouts.app')
@section('title')
@section('content')
    <main>


        <!-- Gallery Show Heading -->

        <section class="page-header-title">

            <div class="gallery-show-title-container">

                <h1>विद्यालय परिसर</h1>

                <p>
                    हमारे विद्यालय परिसर एवं भवन की कुछ यादगार तस्वीरें
                </p>

            </div>

        </section>



        <!-- =========================
                 GALLERY PHOTOS
            ========================== -->

        <section class="gallery-show-section">

            <div class="gallery-show-container">


                <!-- Image 1 -->

                <div class="gallery-show-card">

                    <div class="gallery-show-image">

                        <img src="../images/school-images/school-front.jpeg" alt="विद्यालय परिसर">

                    </div>

                </div>


                <!-- Image 2 -->

                <div class="gallery-show-card">

                    <div class="gallery-show-image">

                        <img src="../images/school-images/school-program.jpg" alt="विद्यालय कार्यक्रम">

                    </div>

                </div>


                <!-- Image 3 -->

                <div class="gallery-show-card">

                    <div class="gallery-show-image">

                        <img src="../images/school-images/sports.jpg" alt="विद्यालय गतिविधि">

                    </div>

                </div>


                <!-- Image 4 -->

                <div class="gallery-show-card">

                    <div class="gallery-show-image">

                        <img src="../images/school-images/cultural.jpg" alt="विद्यालय कार्यक्रम">

                    </div>

                </div>


                <!-- Image 5 -->

                <div class="gallery-show-card">

                    <div class="gallery-show-image">

                        <img src="../images/school-images/independence-day.jpeg" alt="स्वतंत्रता दिवस">

                    </div>

                </div>


                <!-- Image 6 -->

                <div class="gallery-show-card">

                    <div class="gallery-show-image">

                        <img src="../images/school-images/republic-day.jpg" alt="गणतंत्र दिवस">

                    </div>

                </div>

                <!-- Image 7 -->

                <div class="gallery-show-card">

                    <div class="gallery-show-image">

                        <img src="../images/school-images/republic-day.jpg" alt="गणतंत्र दिवस">

                    </div>

                </div>


            </div>


            <!-- Back Button -->

            <div class="gallery-show-back">

                <a href="index.html">

                    <span class="material-symbols-outlined">
                        arrow_back
                    </span> सभी गैलरी देखें

                </a>

            </div>

        </section>

    </main>
@endsection
