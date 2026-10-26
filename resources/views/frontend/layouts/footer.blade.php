 <footer>

     <div class="footer-container">

         <!-- School Information -->
         <div class="footer-about">

             <img src="../images/logo.jpeg" alt="विद्यालय लोगो">

             <h3>शासकीय विद्यालय एवं संकुल</h3>

             <p>
                 दौलतगंज, उज्जैन
             </p>

             <p>
                 गुणवत्तापूर्ण शिक्षा, बेहतर संस्कार एवं विद्यार्थियों का सर्वांगीण विकास।
             </p>

         </div>


         <!-- Important Links -->
         <div class="footer-links">

             <h3>महत्वपूर्ण लिंक</h3>

             <a href="index.html">होम</a>

             <a href="#about">हमारे बारे में</a>

             <a href="#highlights">विद्यालय की झलक</a>

             <a href="#activities">गतिविधियाँ</a>

             <a href="#notification">सूचनाएँ</a>

             <a href="#e-library">ई-लाइब्रेरी</a>

             <a href="#gallery">गैलरी</a>

             <a href="#contact">संपर्क</a>

         </div>


         <!-- Student & Parent Links -->
         <div class="footer-links">

             <h3>विद्यार्थी एवं अभिभावक</h3>

             <a href="#parent-info">अभिभावक सुविधा</a>

             <a href="attendance/index.html">विद्यार्थी उपस्थिति</a>

             <a href="#activities">शैक्षणिक एवं अन्य गतिविधियाँ</a>

             <a href="notification/index.html">परीक्षा एवं महत्वपूर्ण सूचनाएँ</a>

             <a href="e-library/index.html">डिजिटल पुस्तकें एवं अध्ययन सामग्री</a>

             <a href="topper_students/index.html">टॉप 10 विद्यार्थी</a>

         </div>

     </div>


     <!-- Copyright -->
     <div class="copyright">

         <p>
             © 2026 शासकीय विद्यालय एवं संकुल, दौलतगंज, उज्जैन। सर्वाधिकार सुरक्षित।
         </p>

     </div>

 </footer>

<!-- Js Plugins -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
  <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/js/main.js') }}"></script>
  <script src="{{ asset('frontend/js/script.js') }}"></script>
  <script src="{{ asset('backend/plugins/notification/snackbar/snackbar.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
      @if (Session::get('alert-type') == 'success')
          @if (Session::has('message'))
              Snackbar.show({
                  text: "{{ Session::get('message') }}",
                  pos: 'top-right',
                  actionTextColor: '#fff',
                  backgroundColor: '#1abc9c'
              });
          @endif
      @elseif (Session::get('alert-type') == 'info')
          @if (Session::has('message'))
              Snackbar.show({
                  text: "{{ Session::get('message') }}",
                  pos: 'top-right',
                  actionTextColor: '#fff',
                  backgroundColor: '#2196f3'
              });
          @endif
      @elseif (Session::get('alert-type') == 'error')
          @if (Session::has('message'))
              Snackbar.show({
                  text: "{{ Session::get('message') }}",
                  pos: 'top-right',
                  actionTextColor: '#fff',
                  backgroundColor: '#e7515a'
              });
          @endif
      @else
          @if (Session::has('message'))
              Snackbar.show({
                  text: "{{ Session::get('message') }}",
                  pos: 'top-right',
                  actionTextColor: '#fff',
                  backgroundColor: '#3b3f5c'
              });
          @endif
      @endif
  </script>

