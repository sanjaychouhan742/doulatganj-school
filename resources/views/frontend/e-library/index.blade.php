  @extends('frontend.layouts.app')
  @section('title', 'E-Library |')
  @section('content')
      <!-- =================================================
                     PAGE TITLE
                ================================================== -->

      <section class="page-header-title">

          <h1>कक्षा 1 से 5वीं तक</h1>

          <p>
              कक्षा 1 से 5वीं तक के विद्यार्थियों के लिए डिजिटल पुस्तकें एवं अध्ययन सामग्री
          </p>

      </section>


      <!-- =================================================
                     CLASS HEADER
                ================================================== -->




      <!-- =================================================
                     SUBJECT FILTER / CATEGORY
                ================================================== -->

      <section class="books-section">

          <div class="books-container">


              <!-- =================================================
                             BOOKS GRID
                        ================================================== -->

              <div class="books-grid">


                  <!-- ================= HINDI ================= -->

                  <div class="book-card">

                      <div class="book-card-icon">

                          <a><img src="../images/books-images/hindi-class-1.jpg" alt="हिंदी पाठ्यपुस्तक"></a>

                      </div>


                      <div class="book-card-content">

                          <span class="book-subject">
                              हिंदी
                          </span>

                          <h3>
                              हिंदी पाठ्यपुस्तक
                          </h3>

                          <p>
                              कक्षा 1 के विद्यार्थियों के लिए हिंदी की पाठ्यपुस्तक।
                          </p>

                          <div class="book-card-footer">

                              <span class="book-type">
                                  PDF
                              </span>

                              <a href="{{ route('frontend.e-library.show') }}" class="book-read-btn">

                                  पढ़ें

                                  <span class="material-symbols-outlined">
                                      arrow_forward
                                  </span>

                              </a>

                          </div>

                      </div>

                  </div>


                  <!-- ================= MATHEMATICS ================= -->

                  <div class="book-card">

                      <div class="book-card-icon">
                          <a><img src="../images/books-images/maths-class-1.jpg" alt="गणित पाठ्यपुस्तक"></a>
                      </div>


                      <div class="book-card-content">

                          <span class="book-subject">
                              गणित
                          </span>

                          <h3>
                              गणित पाठ्यपुस्तक
                          </h3>

                          <p>
                              कक्षा 1 के विद्यार्थियों के लिए गणित की पाठ्यपुस्तक।
                          </p>

                          <div class="book-card-footer">

                              <span class="book-type">
                                  PDF
                              </span>

                              <a href="{{ route('frontend.e-library.show') }}" class="book-read-btn">

                                  पढ़ें

                                  <span class="material-symbols-outlined">
                                      arrow_forward
                                  </span>

                              </a>

                          </div>

                      </div>

                  </div>


                  <!-- ================= ENGLISH ================= -->

                  <div class="book-card">

                      <div class="book-card-icon">

                          <a><img src="../images/books-images/eng-class-1.jpg" alt="अंग्रेज़ी पाठ्यपुस्तक"></a>


                      </div>


                      <div class="book-card-content">

                          <span class="book-subject">
                              अंग्रेज़ी
                          </span>

                          <h3>
                              English Textbook
                          </h3>

                          <p>
                              कक्षा 1 के विद्यार्थियों के लिए अंग्रेज़ी की पाठ्यपुस्तक।
                          </p>

                          <div class="book-card-footer">

                              <span class="book-type">
                                  PDF
                              </span>

                              <a href="{{ route('frontend.e-library.show') }}" class="book-read-btn">

                                  पढ़ें

                                  <span class="material-symbols-outlined">
                                      arrow_forward
                                  </span>

                              </a>

                          </div>

                      </div>

                  </div>


                  <!-- ================= EVS ================= -->

                  <div class="book-card">

                      <div class="book-card-icon">

                          <a><img src="../images/books-images/environment-class-1.jpg" alt="पर्यावरण पाठ्यपुस्तक"></a>


                      </div>


                      <div class="book-card-content">

                          <span class="book-subject">
                              पर्यावरण
                          </span>

                          <h3>
                              पर्यावरण अध्ययन
                          </h3>

                          <p>
                              विद्यार्थियों के लिए पर्यावरण एवं आसपास के जीवन से संबंधित सामग्री।
                          </p>

                          <div class="book-card-footer">

                              <span class="book-type">
                                  PDF
                              </span>

                              <a href="{{ route('frontend.e-library.show') }}" class="book-read-btn">

                                  पढ़ें

                                  <span class="material-symbols-outlined">
                                      arrow_forward
                                  </span>

                              </a>

                          </div>

                      </div>

                  </div>


                  <!-- ================= WORKBOOK ================= -->

                  <div class="book-card">

                      <div class="book-card-icon">

                          <a><img src="../images/books-images/abhyash-class-1.jpg" alt="अभ्यास पुस्तिका"></a>


                      </div>


                      <div class="book-card-content">

                          <span class="book-subject">
                              अभ्यास
                          </span>

                          <h3>
                              अभ्यास पुस्तिका
                          </h3>

                          <p>
                              विद्यार्थियों के अभ्यास एवं गतिविधियों के लिए सामग्री।
                          </p>

                          <div class="book-card-footer">

                              <span class="book-type">
                                  PDF
                              </span>

                              <a href="{{ route('frontend.e-library.show') }}" class="book-read-btn">

                                  पढ़ें

                                  <span class="material-symbols-outlined">
                                      arrow_forward
                                  </span>

                              </a>

                          </div>

                      </div>

                  </div>


                  <!-- ================= ACTIVITY ================= -->

                  <div class="book-card">

                      <div class="book-card-icon">

                          <a><img src="../images/books-images/activity-class-1.jpg" alt="गतिविधि सामग्री"></a>


                      </div>


                      <div class="book-card-content">

                          <span class="book-subject">
                              गतिविधि
                          </span>

                          <h3>
                              गतिविधि सामग्री
                          </h3>

                          <p>
                              विद्यार्थियों के लिए रोचक एवं शैक्षणिक गतिविधियाँ।
                          </p>

                          <div class="book-card-footer">

                              <span class="book-type">
                                  PDF
                              </span>

                              <a href="{{ route('frontend.e-library.show') }}" class="book-read-btn">

                                  पढ़ें

                                  <span class="material-symbols-outlined">
                                      arrow_forward
                                  </span>

                              </a>

                          </div>

                      </div>

                  </div>


              </div>


              <!-- =================================================
                             PAGINATION
                        ================================================== -->

              <div class="books-pagination">

                  <a href="#" class="active">
                      1
                  </a>

                  <a href="#">
                      2
                  </a>

                  <a href="#">
                      3
                  </a>

                  <a href="#">
                      4
                  </a>

                  <a href="#">
                      5
                  </a>

                  <a href="#">
                      Next
                  </a>

              </div>

          </div>

      </section>
  @endsection
