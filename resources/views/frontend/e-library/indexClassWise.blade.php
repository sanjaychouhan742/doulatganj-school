 @extends('frontend.layouts.app')
 @section('title', 'E-Library |')
 @section('content')
     <!-- ================= PAGE TITLE ================= -->
     <section class="page-header-title">

         <h1>ई-लाइब्रेरी</h1>

         <p>
             विद्यार्थियों के लिए डिजिटल अध्ययन सामग्री, पुस्तकें, प्रश्न-पत्र एवं उपयोगी शैक्षणिक सामग्री
         </p>

     </section>


     <!-- ================= ../E-LIBRARY ================= -->
     <section class="school-elibrary">

         <div class="school-elibrary-container">


             <!-- Card 1 -->
             <a href="{{ route('frontend.e-library.index') }}" class="elibrary-card">

                 <div class="elibrary-image-box">

                     <span class="material-symbols-outlined elibrary-main-icon">
                         menu_book
                     </span>

                     <span class="elibrary-class-badge">
                         कक्षा 1 - 5
                     </span>

                     <div class="elibrary-image-overlay">

                         <span class="material-symbols-outlined">
                             library_books
                         </span>

                     </div>

                 </div>

                 <div class="elibrary-card-content">

                     <span class="elibrary-category">
                         प्राथमिक कक्षा
                     </span>

                     <h2>
                         प्राथमिक कक्षा की सामग्री
                     </h2>

                     <p>
                         कक्षा 1 से 5 तक के विद्यार्थियों के लिए पुस्तकें एवं अध्ययन सामग्री।
                     </p>

                     <span class="elibrary-view-btn">
                         सामग्री देखें

                         <span class="material-symbols-outlined">
                             arrow_forward
                         </span>
                     </span>

                 </div>

             </a>


             <!-- Card 2 -->
             <a href="{{ route('frontend.e-library.index') }}" class="elibrary-card">

                 <div class="elibrary-image-box">

                     <span class="material-symbols-outlined elibrary-main-icon">
                         auto_stories
                     </span>

                     <span class="elibrary-class-badge">
                         कक्षा 6 - 8
                     </span>

                     <div class="elibrary-image-overlay">

                         <span class="material-symbols-outlined">
                             library_books
                         </span>

                     </div>

                 </div>

                 <div class="elibrary-card-content">

                     <span class="elibrary-category">
                         माध्यमिक कक्षा
                     </span>

                     <h2>
                         माध्यमिक कक्षा की सामग्री
                     </h2>

                     <p>
                         कक्षा 6 से 8 तक के विद्यार्थियों के लिए अध्ययन सामग्री एवं उपयोगी पुस्तकें।
                     </p>

                     <span class="elibrary-view-btn">
                         सामग्री देखें

                         <span class="material-symbols-outlined">
                             arrow_forward
                         </span>
                     </span>

                 </div>

             </a>


             <!-- Card 3 -->
             <a href="{{ route('frontend.e-library.index') }}" class="elibrary-card">

                 <div class="elibrary-image-box">

                     <span class="material-symbols-outlined elibrary-main-icon">
                         school
                     </span>

                     <span class="elibrary-class-badge">
                         कक्षा 9 - 10
                     </span>

                     <div class="elibrary-image-overlay">

                         <span class="material-symbols-outlined">
                             library_books
                         </span>

                     </div>

                 </div>

                 <div class="elibrary-card-content">

                     <span class="elibrary-category">
                         हाई स्कूल
                     </span>

                     <h2>
                         हाई स्कूल अध्ययन सामग्री
                     </h2>

                     <p>
                         कक्षा 9 एवं 10 के विद्यार्थियों के लिए विषयवार पुस्तकें एवं अध्ययन सामग्री।
                     </p>

                     <span class="elibrary-view-btn">
                         सामग्री देखें

                         <span class="material-symbols-outlined">
                             arrow_forward
                         </span>
                     </span>

                 </div>

             </a>


             <!-- Card 4 -->
             <a href="{{ route('frontend.e-library.index') }}" class="elibrary-card">

                 <div class="elibrary-image-box">

                     <span class="material-symbols-outlined elibrary-main-icon">
                         cast_for_education
                     </span>

                     <span class="elibrary-class-badge">
                         कक्षा 11 - 12
                     </span>

                     <div class="elibrary-image-overlay">

                         <span class="material-symbols-outlined">
                             library_books
                         </span>

                     </div>

                 </div>

                 <div class="elibrary-card-content">

                     <span class="elibrary-category">
                         उच्चतर माध्यमिक
                     </span>

                     <h2>
                         उच्चतर माध्यमिक सामग्री
                     </h2>

                     <p>
                         कक्षा 11 एवं 12 के विद्यार्थियों के लिए विषयवार अध्ययन सामग्री एवं पुस्तकें।
                     </p>

                     <span class="elibrary-view-btn">
                         सामग्री देखें

                         <span class="material-symbols-outlined">
                             arrow_forward
                         </span>
                     </span>

                 </div>

             </a>


             <!-- Card 5 -->
             <a href="{{ route('frontend.e-library.index') }}" class="elibrary-card">

                 <div class="elibrary-image-box">

                     <span class="material-symbols-outlined elibrary-main-icon">
                         quiz
                     </span>

                     <span class="elibrary-class-badge">
                         परीक्षा
                     </span>

                     <div class="elibrary-image-overlay">

                         <span class="material-symbols-outlined">
                             library_books
                         </span>

                     </div>

                 </div>

                 <div class="elibrary-card-content">

                     <span class="elibrary-category">
                         परीक्षा सामग्री
                     </span>

                     <h2>
                         प्रश्न-पत्र एवं मॉडल पेपर
                     </h2>

                     <p>
                         विभिन्न कक्षाओं के पुराने प्रश्न-पत्र, मॉडल पेपर एवं परीक्षा उपयोगी सामग्री।
                     </p>

                     <span class="elibrary-view-btn">
                         सामग्री देखें

                         <span class="material-symbols-outlined">
                             arrow_forward
                         </span>
                     </span>

                 </div>

             </a>


             <!-- Card 6 -->
             <a href="{{ route('frontend.e-library.index') }}" class="elibrary-card">

                 <div class="elibrary-image-box">

                     <span class="material-symbols-outlined elibrary-main-icon">
                         collections_bookmark
                     </span>

                     <span class="elibrary-class-badge">
                         उपयोगी
                     </span>

                     <div class="elibrary-image-overlay">

                         <span class="material-symbols-outlined">
                             library_books
                         </span>

                     </div>

                 </div>

                 <div class="elibrary-card-content">

                     <span class="elibrary-category">
                         संदर्भ सामग्री
                     </span>

                     <h2>
                         अन्य उपयोगी सामग्री
                     </h2>

                     <p>
                         विद्यार्थियों एवं शिक्षकों के लिए विभिन्न संदर्भ एवं उपयोगी शैक्षणिक सामग्री।
                     </p>

                     <span class="elibrary-view-btn">
                         सामग्री देखें

                         <span class="material-symbols-outlined">
                             arrow_forward
                         </span>
                     </span>

                 </div>

             </a>


         </div>


         <!-- ================= PAGINATION ================= -->
         <div class="pagination">

             <a href="#" class="active">1</a>

             <a href="#">2</a>

             <a href="#">3</a>

             <a href="#">4</a>

             <a href="#">5</a>

             <a href="#">Next</a>

         </div>

     </section>

 @endsection
