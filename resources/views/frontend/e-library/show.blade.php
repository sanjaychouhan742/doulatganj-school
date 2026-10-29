 @extends('frontend.layouts.app')
 @section('title', 'E-Library - Show |')
 @section('content')
     <!-- ================= PAGE HEADING ================= -->

     <section class="page-header-title">

         <h1 id="bookTitle">हिंदी पाठ्यपुस्तक</h1>

         <p id="bookDescription">
             कक्षा 1 के विद्यार्थियों के लिए हिंदी की पाठ्यपुस्तक
         </p>
     </section>

     <!-- ================= BOOK CONTENT ================= -->

     <main class="book-show-section">

         <div class="book-show-container">

             <!-- PDF VIEWER -->

             <section class="book-reader-card">

                 <div class="book-reader-header">

                     <div class="book-reader-title">
                         <span class="material-symbols-outlined">picture_as_pdf</span>

                         <div>
                             <h2>पुस्तक पढ़ें</h2>
                             <p>ऑनलाइन PDF रीडर</p>
                         </div>
                     </div>

                     <a id="downloadBook" href="{{ asset('frontend/pdf/hindi-class-1.pdf') }}" download
                         class="book-download-btn">

                         <span class="material-symbols-outlined">download</span> डाउनलोड करें

                     </a>

                 </div>

                 <div class="book-reader-toolbar">

                     <span class="reader-status">
                         <span class="material-symbols-outlined">visibility</span> पढ़ने का दृश्य
                     </span>

                     <a id="openBookNewTab" href="{{ asset('frontend/pdf/hindi-class-1.pdf') }}" target="_blank"
                         rel="noopener noreferrer" class="reader-open-btn">

                         <span class="material-symbols-outlined">open_in_new</span> नए टैब में खोलें

                     </a>

                 </div>

                 <div class="book-pdf-frame">

                     <iframe id="bookPdf" src="{{ asset('frontend/pdf/hindi-class-1.pdf') }}#toolbar=1&navpanes=0"
                         title="हिंदी पाठ्यपुस्तक PDF">
                     </iframe>

                 </div>

                 <div class="book-reader-note">

                     <span class="material-symbols-outlined">info</span>

                     <p>
                         यदि पुस्तक यहाँ दिखाई नहीं देती है, तो
                         <a id="fallbackBook" href="{{ asset('frontend/pdf/hindi-class-1.pdf') }}" target="_blank"
                             rel="noopener noreferrer">यहाँ
                             क्लिक करके</a> इसे नए टैब में खोलें।
                     </p>

                 </div>

             </section>

         </div>

     </main>
 @endsection
