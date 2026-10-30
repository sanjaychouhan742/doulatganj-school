@extends('frontend.layouts.app')
@section('title')
@section('content')
    <!-- PAGE TITLE -->
    <section class="page-header-title">
        <h1>विद्यालय के टॉप 10 विद्यार्थी</h1>
        <p>
            कक्षा 8वीं, 10वीं एवं 12वीं के उत्कृष्ट परीक्षा परिणाम प्राप्त करने वाले विद्यार्थियों की सूची
        </p>
    </section>

    <!-- TOP STUDENTS -->
    <section class="top-students-section">
        <div class="top-students-container">

            <div class="students-intro">
                <span class="small-title">हमारे होनहार विद्यार्थी</span>
                <h2>प्रतिभा और सफलता का सम्मान</h2>
                <p>
                    हमारे विद्यार्थियों की मेहनत, लगन और उपलब्धियों पर विद्यालय को गर्व है। नीचे कक्षा के अनुसार टॉप 10
                    विद्यार्थियों की सूची देखें।
                </p>
            </div>

            <!-- CLASS TABS -->
            <div class="class-tabs">
                <button class="class-tab active" onclick="showClass('class8', this)">
                    कक्षा 8वीं
                </button>

                <button class="class-tab" onclick="showClass('class10', this)">
                    कक्षा 10वीं
                </button>

                <button class="class-tab" onclick="showClass('class12', this)">
                    कक्षा 12वीं
                </button>
            </div>

            <!-- SESSION SELECTOR -->
            <div class="session-selector">
                <label for="academicSession">शैक्षणिक सत्र चुनें:</label>

                <select id="academicSession" onchange="changeSession()">
                    <option value="2025-26">2025–26</option>
                    <option value="2026-27" selected>2026–27</option>
                    <option value="2027-28">2027–28</option>
                </select>
            </div>

            <!-- ================= CLASS 8 ================= -->
            <div class="result-panel active" id="class8">

                <div class="result-heading">
                    <h3>कक्षा 8वीं — टॉप 10</h3>
                    <span>शैक्षणिक सत्र: 2025–26</span>
                </div>

                <div class="students-table-wrapper">
                    <table class="students-table">
                        <thead>
                            <tr>
                                <th>रैंक</th>
                                <th>फोटो</th>
                                <th>विद्यार्थी का नाम</th>
                                <th>प्राप्तांक</th>
                                <th>पूर्णांक</th>
                                <th>प्रतिशत</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="rank-number rank-first">1</span></td>
                                <td><img src="{{ asset('images/students-images/student1.jpg') }}" alt="आरव शर्मा"
                                        class="student-photo">
                                </td>
                                <td class="student-name">आरव शर्मा</td>
                                <td>475</td>
                                <td>500</td>
                                <td class="student-percentage">95%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number rank-second">2</span></td>
                                <td><img src="{{ asset('images/students-images/student2.jpg') }}" alt="अनन्या वर्मा"
                                        class="student-photo"></td>
                                <td class="student-name">अनन्या वर्मा</td>
                                <td>468</td>
                                <td>500</td>
                                <td class="student-percentage">93.6%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number rank-third">3</span></td>
                                <td><img src="{{ asset('images/students-images/student3.jpg') }}" alt="विवान पटेल"
                                        class="student-photo"></td>
                                <td class="student-name">विवान पटेल</td>
                                <td>460</td>
                                <td>500</td>
                                <td class="student-percentage">92%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">4</span></td>
                                <td><img src="{{ asset('images/students-images/student1.jpg') }}" alt="सिया चौहान"
                                        class="student-photo"></td>
                                <td class="student-name">सिया चौहान</td>
                                <td>452</td>
                                <td>500</td>
                                <td class="student-percentage">90.4%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">5</span></td>
                                <td><img src="{{ asset('images/students-images/student1.jpg') }}" alt="अर्जुन सिंह"
                                        class="student-photo"></td>
                                <td class="student-name">अर्जुन सिंह</td>
                                <td>445</td>
                                <td>500</td>
                                <td class="student-percentage">89%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">6</span></td>
                                <td><img src="{{ asset('images/students-images/student1.jpg') }}" alt="काव्या यादव"
                                        class="student-photo"></td>
                                <td class="student-name">काव्या यादव</td>
                                <td>438</td>
                                <td>500</td>
                                <td class="student-percentage">87.6%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">7</span></td>
                                <td><img src="{{ asset('images/students-images/student1.jpg') }}" alt="अद्विक जैन"
                                        class="student-photo"></td>
                                <td class="student-name">अद्विक जैन</td>
                                <td>430</td>
                                <td>500</td>
                                <td class="student-percentage">86%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">8</span></td>
                                <td><img src="{{ asset('images/students-images/student1.jpg') }}" alt="परी मीणा"
                                        class="student-photo">
                                </td>
                                <td class="student-name">परी मीणा</td>
                                <td>425</td>
                                <td>500</td>
                                <td class="student-percentage">85%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">9</span></td>
                                <td><img src="{{ asset('images/students-images/student1.jpg') }}" alt="दक्ष अहिरवार"
                                        class="student-photo"></td>
                                <td class="student-name">दक्ष अहिरवार</td>
                                <td>418</td>
                                <td>500</td>
                                <td class="student-percentage">83.6%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">10</span></td>
                                <td><img src="{{ asset('images/students-images/student1.jpg') }}" alt="रिद्धि मालवीय"
                                        class="student-photo"></td>
                                <td class="student-name">रिद्धि मालवीय</td>
                                <td>410</td>
                                <td>500</td>
                                <td class="student-percentage">82%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ================= CLASS 10 ================= -->
            <div class="result-panel" id="class10">

                <div class="result-heading">
                    <h3>कक्षा 10वीं — टॉप 10</h3>
                    <span>शैक्षणिक सत्र: 2025–26</span>
                </div>

                <div class="students-table-wrapper">
                    <table class="students-table">
                        <thead>
                            <tr>
                                <th>रैंक</th>
                                <th>फोटो</th>
                                <th>विद्यार्थी का नाम</th>
                                <th>प्राप्तांक</th>
                                <th>पूर्णांक</th>
                                <th>प्रतिशत</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="rank-number rank-first">1</span></td>
                                <td><img src="images/arav_sharma.jpg" alt="आरव शर्मा" class="student-photo"></td>
                                <td class="student-name">प्रियांशी शर्मा</td>
                                <td>485</td>
                                <td>500</td>
                                <td class="student-percentage">97%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number rank-second">2</span></td>
                                <td><img src="images/aditya_chauhan.jpg" alt="आदित्य चौहान" class="student-photo"></td>
                                <td class="student-name">आदित्य चौहान</td>
                                <td>478</td>
                                <td>500</td>
                                <td class="student-percentage">95.6%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number rank-third">3</span></td>
                                <td><img src="images/sakshi_yadav.jpg" alt="साक्षी यादव" class="student-photo"></td>
                                <td class="student-name">साक्षी यादव</td>
                                <td>470</td>
                                <td>500</td>
                                <td class="student-percentage">94%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">4</span></td>
                                <td><img src="images/krishna_singh.jpg" alt="कृष्णा सिंह" class="student-photo"></td>
                                <td class="student-name">कृष्णा सिंह</td>
                                <td>462</td>
                                <td>500</td>
                                <td class="student-percentage">92.4%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">5</span></td>
                                <td><img src="images/arohi_jain.jpg" alt="आरोही जैन" class="student-photo"></td>
                                <td class="student-name">आरोही जैन</td>
                                <td>455</td>
                                <td>500</td>
                                <td class="student-percentage">91%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">6</span></td>
                                <td><img src="images/yash_patel.jpg" alt="यश पटेल" class="student-photo"></td>
                                <td class="student-name">यश पटेल</td>
                                <td>448</td>
                                <td>500</td>
                                <td class="student-percentage">89.6%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">7</span></td>
                                <td><img src="images/tanvi_maurya.jpg" alt="तन्वी मालवीय" class="student-photo"></td>
                                <td class="student-name">तन्वी मालवीय</td>
                                <td>440</td>
                                <td>500</td>
                                <td class="student-percentage">88%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">8</span></td>
                                <td><img src="images/daksh_ahirwar.jpg" alt="दक्ष अहिरवार" class="student-photo"></td>
                                <td class="student-name">रुद्र अहिरवार</td>
                                <td>432</td>
                                <td>500</td>
                                <td class="student-percentage">86.4%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">9</span></td>
                                <td><img src="images/ishita_verma.jpg" alt="इशिता वर्मा" class="student-photo"></td>
                                <td class="student-name">इशिता वर्मा</td>
                                <td>425</td>
                                <td>500</td>
                                <td class="student-percentage">85%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">10</span></td>
                                <td><img src="images/mohit_meena.jpg" alt="मोहित मीणा" class="student-photo"></td>
                                <td class="student-name">मोहित मीणा</td>
                                <td>415</td>
                                <td>500</td>
                                <td class="student-percentage">83%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ================= CLASS 12 ================= -->
            <div class="result-panel" id="class12">

                <div class="result-heading">
                    <h3>कक्षा 12वीं — टॉप 10</h3>
                    <span>शैक्षणिक सत्र: 2025–26</span>
                </div>

                <div class="students-table-wrapper">
                    <table class="students-table">
                        <thead>
                            <tr>
                                <th>रैंक</th>
                                <th>फोटो</th>
                                <th>विद्यार्थी का नाम</th>
                                <th>प्राप्तांक</th>
                                <th>पूर्णांक</th>
                                <th>प्रतिशत</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="rank-number rank-first">1</span></td>
                                <td><img src="images/neha_sharma.jpg" alt="नेहा शर्मा" class="student-photo"></td>
                                <td class="student-name">नेहा शर्मा</td>
                                <td>480</td>
                                <td>500</td>
                                <td class="student-percentage">96%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number rank-second">2</span></td>
                                <td><img src="images/aditya_chauhan.jpg" alt="आदित्य चौहान" class="student-photo"></td>
                                <td class="student-name">अभिषेक पटेल</td>
                                <td>472</td>
                                <td>500</td>
                                <td class="student-percentage">94.4%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number rank-third">3</span></td>
                                <td><img src="images/krishna_singh.jpg" alt="कृष्णा सिंह" class="student-photo"></td>
                                <td class="student-name">कृतिका जैन</td>
                                <td>465</td>
                                <td>500</td>
                                <td class="student-percentage">93%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">4</span></td>
                                <td><img src="images/rohit_singh.jpg" alt="रोहित सिंह" class="student-photo"></td>
                                <td class="student-name">रोहित सिंह</td>
                                <td>458</td>
                                <td>500</td>
                                <td class="student-percentage">91.6%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">5</span></td>
                                <td><img src="images/akanksha_yadav.jpg" alt="आकांक्षा यादव" class="student-photo"></td>
                                <td class="student-name">आकांक्षा यादव</td>
                                <td>450</td>
                                <td>500</td>
                                <td class="student-percentage">90%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">6</span></td>
                                <td><img src="images/harsh_verma.jpg" alt="हर्ष वर्मा" class="student-photo"></td>
                                <td class="student-name">हर्ष वर्मा</td>
                                <td>442</td>
                                <td>500</td>
                                <td class="student-percentage">88.4%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">7</span></td>
                                <td><img src="images/manasi_chauhan.jpg" alt="मानसी चौहान" class="student-photo"></td>
                                <td class="student-name">मानसी चौहान</td>
                                <td>435</td>
                                <td>500</td>
                                <td class="student-percentage">87%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">8</span></td>
                                <td><img src="images/dev_ahirwar.jpg" alt="देव अहिरवार" class="student-photo"></td>
                                <td class="student-name">देव अहिरवार</td>
                                <td>428</td>
                                <td>500</td>
                                <td class="student-percentage">85.6%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">9</span></td>
                                <td><img src="images/palak_malviya.jpg" alt="पलक मालवीय" class="student-photo"></td>
                                <td class="student-name">पलक मालवीय</td>
                                <td>420</td>
                                <td>500</td>
                                <td class="student-percentage">84%</td>
                            </tr>
                            <tr>
                                <td><span class="rank-number">10</span></td>
                                <td><img src="images/vedant_meena.jpg" alt="वेदांत मीणा" class="student-photo"></td>
                                <td class="student-name">वेदांत मीणा</td>
                                <td>412</td>
                                <td>500</td>
                                <td class="student-percentage">82.4%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="result-note">
                <strong>महत्वपूर्ण सूचना:</strong> इस पेज पर दिए गए विद्यार्थियों के नाम और अंक केवल डिजाइन के उदाहरण हैं।
                वेबसाइट पर प्रकाशित करने से पहले विद्यालय के वास्तविक, सत्यापित परीक्षा परिणाम भरें।
            </div>

        </div>
    </section>
@endsection
