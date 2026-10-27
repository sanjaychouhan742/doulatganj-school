@extends('frontend.layouts.app')
@section('title', 'Student Attendance |')
@section('content')

    <!-- Page Heading -->
    <section class="page-header-title">
        <h1>विद्यार्थी उपस्थिति</h1>
        <p>कक्षा अनुसार विद्यार्थियों की उपस्थिति देखें</p>
    </section>


    <!-- Main -->
    <main class="attendance-container">


        <!-- Attendance Filters -->
        <section class="filter-card attendance-filter-card">

            <!-- Class Dropdown -->
            <div class="filter-group">
                <label for="classSelect">कक्षा चुनें</label>

                <select id="classSelect" name="class" class="form-select">
                    <option value="KG">KG</option>
                    <option value="1">कक्षा 1</option>
                    <option value="2">कक्षा 2</option>
                    <option value="3">कक्षा 3</option>
                    <option value="4">कक्षा 4</option>
                    <option value="5">कक्षा 5</option>
                    <option value="6">कक्षा 6</option>
                    <option value="7">कक्षा 7</option>
                    <option value="8" selected>कक्षा 8</option>
                    <option value="9">कक्षा 9</option>
                    <option value="10">कक्षा 10</option>
                    <option value="11">कक्षा 11</option>
                    <option value="12">कक्षा 12</option>
                </select>
            </div>

            <!-- Month Dropdown -->
            <div class="filter-group">
                <label for="monthSelect">माह चुनें</label>

                <select id="monthSelect" name="month" class="form-select">
                    <option value="2026-09" selected>सितंबर 2026</option>
                    <option value="2026-08">अगस्त 2026</option>
                    <option value="2026-07">जुलाई 2026</option>
                    <option value="2026-06">जून 2026</option>
                </select>
            </div>

            <!-- Student Search -->
            <div class="search-box input-group">
                <span class="input-group-text material-symbols-outlined">
                    search
                </span>

                <input type="search" id="studentSearch" class="form-control" placeholder="विद्यार्थी का नाम खोजें..."
                    aria-label="विद्यार्थी का नाम खोजें">
            </div>

        </section>



        <!-- Class Title -->
        <section class="class-title">

            <div>
                <span class="material-symbols-outlined">
                    school
                </span>

                <div>
                    <h2>कक्षा 8</h2>
                    <p>सितंबर 2026 की उपस्थिति</p>
                </div>
            </div>

        </section>


        <!-- Summary -->
        <section class="summary-grid">

            <div class="summary-card">
                <div class="summary-icon">
                    <span class="material-symbols-outlined">
                        groups
                    </span>
                </div>

                <div>
                    <span>कुल विद्यार्थी</span>
                    <strong>32</strong>
                </div>
            </div>


            <div class="summary-card present">
                <div class="summary-icon">
                    <span class="material-symbols-outlined">
                        person_check
                    </span>
                </div>

                <div>
                    <span>आज उपस्थित</span>
                    <strong>29</strong>
                </div>
            </div>


            <div class="summary-card absent">
                <div class="summary-icon">
                    <span class="material-symbols-outlined">
                        person_cancel
                    </span>
                </div>

                <div>
                    <span>आज अनुपस्थित</span>
                    <strong>3</strong>
                </div>
            </div>


            <div class="summary-card percentage">
                <div class="summary-icon">
                    <span class="material-symbols-outlined">
                        percent
                    </span>
                </div>

                <div>
                    <span>औसत उपस्थिति</span>
                    <strong>91%</strong>
                </div>
            </div>

        </section>


        <!-- Student List -->
        <section class="student-section">

            <div class="section-header">

                <div>
                    <h2>कक्षा 8 के विद्यार्थी</h2>
                    <p>विद्यार्थी के नाम पर क्लिक करके पूरी उपस्थिति देखें</p>
                </div>

                <span class="student-count">
                    32 विद्यार्थी
                </span>

            </div>


            <div class="student-table-wrapper">

                <table class="student-table">

                    <thead>
                        <tr>
                            <th>क्रमांक</th>
                            <th>विद्यार्थी</th>
                            <th>रोल नंबर</th>
                            <th>आज की स्थिति</th>
                            <th>मासिक उपस्थिति</th>
                            <th>देखें</th>
                        </tr>
                    </thead>

                    <tbody id="studentTable">

                        <tr class="student-row" data-name="राहुल शर्मा" onclick="showStudent('राहुल शर्मा','01','92%')">

                            <td>01</td>

                            <td>
                                <div class="student-info">

                                    <div class="student-avatar">
                                        RS
                                    </div>

                                    <div>
                                        <strong>राहुल शर्मा</strong>
                                        <small>पिता: राजेश शर्मा</small>
                                    </div>

                                </div>
                            </td>

                            <td>01</td>

                            <td>
                                <span class="status present-status">
                                    उपस्थित
                                </span>
                            </td>

                            <td>
                                <div class="attendance-progress">

                                    <div class="progress">
                                        <span style="width:92%"></span>
                                    </div>

                                    <strong>92%</strong>

                                </div>
                            </td>

                            <td>
                                <button class="view-btn">
                                    <span class="material-symbols-outlined">
                                        visibility
                                    </span>
                                </button>
                            </td>

                        </tr>


                        <tr class="student-row" data-name="अमित वर्मा" onclick="showStudent('अमित वर्मा','02','88%')">

                            <td>02</td>

                            <td>
                                <div class="student-info">

                                    <div class="student-avatar">
                                        AV
                                    </div>

                                    <div>
                                        <strong>अमित वर्मा</strong>
                                        <small>पिता: सुरेश वर्मा</small>
                                    </div>

                                </div>
                            </td>

                            <td>02</td>

                            <td>
                                <span class="status present-status">
                                    उपस्थित
                                </span>
                            </td>

                            <td>
                                <div class="attendance-progress">

                                    <div class="progress">
                                        <span style="width:88%"></span>
                                    </div>

                                    <strong>88%</strong>

                                </div>
                            </td>

                            <td>
                                <button class="view-btn">
                                    <span class="material-symbols-outlined">
                                        visibility
                                    </span>
                                </button>
                            </td>

                        </tr>


                        <tr class="student-row" data-name="नेहा यादव" onclick="showStudent('नेहा यादव','03','96%')">

                            <td>03</td>

                            <td>
                                <div class="student-info">

                                    <div class="student-avatar">
                                        NY
                                    </div>

                                    <div>
                                        <strong>नेहा यादव</strong>
                                        <small>पिता: मोहन यादव</small>
                                    </div>

                                </div>
                            </td>

                            <td>03</td>

                            <td>
                                <span class="status present-status">
                                    उपस्थित
                                </span>
                            </td>

                            <td>
                                <div class="attendance-progress">

                                    <div class="progress">
                                        <span style="width:96%"></span>
                                    </div>

                                    <strong>96%</strong>

                                </div>
                            </td>

                            <td>
                                <button class="view-btn">
                                    <span class="material-symbols-outlined">
                                        visibility
                                    </span>
                                </button>
                            </td>

                        </tr>


                        <tr class="student-row" data-name="पूजा चौहान" onclick="showStudent('पूजा चौहान','04','84%')">

                            <td>04</td>

                            <td>
                                <div class="student-info">

                                    <div class="student-avatar">
                                        PC
                                    </div>

                                    <div>
                                        <strong>पूजा चौहान</strong>
                                        <small>पिता: रमेश चौहान</small>
                                    </div>

                                </div>
                            </td>

                            <td>04</td>

                            <td>
                                <span class="status absent-status">
                                    अनुपस्थित
                                </span>
                            </td>

                            <td>
                                <div class="attendance-progress">

                                    <div class="progress">
                                        <span style="width:84%"></span>
                                    </div>

                                    <strong>84%</strong>

                                </div>
                            </td>

                            <td>
                                <button class="view-btn">
                                    <span class="material-symbols-outlined">
                                        visibility
                                    </span>
                                </button>
                            </td>

                        </tr>


                        <tr class="student-row" data-name="अंकित सिंह" onclick="showStudent('अंकित सिंह','05','90%')">

                            <td>05</td>

                            <td>
                                <div class="student-info">

                                    <div class="student-avatar">
                                        AS
                                    </div>

                                    <div>
                                        <strong>अंकित सिंह</strong>
                                        <small>पिता: विजय सिंह</small>
                                    </div>

                                </div>
                            </td>

                            <td>05</td>

                            <td>
                                <span class="status present-status">
                                    उपस्थित
                                </span>
                            </td>

                            <td>
                                <div class="attendance-progress">

                                    <div class="progress">
                                        <span style="width:90%"></span>
                                    </div>

                                    <strong>90%</strong>

                                </div>
                            </td>

                            <td>
                                <button class="view-btn">
                                    <span class="material-symbols-outlined">
                                        visibility
                                    </span>
                                </button>
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </section>

    </main>


    <!-- Student Detail Modal -->
    <div class="modal" id="studentModal">

        <div class="modal-content">

            <button class="close-btn" onclick="closeStudent()">
                <span class="material-symbols-outlined">
                    close
                </span>
            </button>


            <div class="student-profile">

                <div class="profile-avatar" id="profileAvatar">
                    RS
                </div>

                <div>
                    <h2 id="studentName">राहुल शर्मा</h2>

                    <p>
                        कक्षा 8
                        <span>•</span> रोल नंबर <span id="studentRoll">01</span>
                    </p>
                </div>

            </div>


            <!-- Detail Summary -->
            <div class="detail-summary">

                <div>
                    <span>कुल कार्य दिवस</span>
                    <strong>24</strong>
                </div>

                <div>
                    <span>उपस्थित</span>
                    <strong class="text-present">22</strong>
                </div>

                <div>
                    <span>अनुपस्थित</span>
                    <strong class="text-absent">2</strong>
                </div>

                <div>
                    <span>उपस्थिति</span>
                    <strong id="studentPercentage">92%</strong>
                </div>

            </div>


            <!-- Attendance Calendar -->
            <div class="detail-title">

                <div>
                    <h3>सितंबर 2026</h3>
                    <p>दैनिक उपस्थिति विवरण</p>
                </div>

            </div>


            <div class="attendance-list">

                <div class="attendance-day">
                    <span>01 सितंबर 2026</span>
                    <strong class="day-present">उपस्थित</strong>
                </div>

                <div class="attendance-day">
                    <span>02 सितंबर 2026</span>
                    <strong class="day-present">उपस्थित</strong>
                </div>

                <div class="attendance-day">
                    <span>03 सितंबर 2026</span>
                    <strong class="day-absent">अनुपस्थित</strong>
                </div>

                <div class="attendance-day">
                    <span>04 सितंबर 2026</span>
                    <strong class="day-present">उपस्थित</strong>
                </div>

                <div class="attendance-day">
                    <span>05 सितंबर 2026</span>
                    <strong class="day-present">उपस्थित</strong>
                </div>

            </div>

        </div>

    </div>
@endsection
