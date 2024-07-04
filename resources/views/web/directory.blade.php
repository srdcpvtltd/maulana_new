@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Directory
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href="about.php"> Administration</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">Directory</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Directory</span></h2>
                </div>
                <div class="desc-wrap">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xs-12 mb-20">
                            <form id="search" action="directory.php" method="POST">
                                <div class="row">
                                    <div class="col-md-1">
                                        <label style="padding-top: 8px;">Search:</label>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="select_category" id="select_category" class="form-control"
                                            required="required">
                                            <option value="">Select Department</option>
                                            <option value="YWxs">All</option>
                                            <option value="MQ==">Vice-Chancellor</option>
                                            <option value="Mg==">Pro-Vice-Chancellor</option>
                                            <option value="Mw==">Vice-Chancellor Secretariat</option>
                                            <option value="NA==">Administrative Section</option>
                                            <option value="NQ==">Finance Section</option>
                                            <option value="Ng==">Deans of School</option>
                                            <option value="Nw==">Examination Section</option>
                                            <option value="OA==">Anti-Ragging Cell</option>
                                            <option value="OQ==">Proctorial Board</option>
                                            <option value="MTA=">Student's Welfare</option>
                                            <option value="MTE=">University Hostel</option>
                                            <option value="MTI=">Department of Commerce</option>
                                            <option value="MTM=">Department of Management Sciences</option>
                                            <option value="MTQ=">Department of Computer Science & Information
                                                Technology</option>
                                            <option value="MTU=">Department of English</option>
                                            <option value="MTY=">Department of Hindi</option>
                                            <option value="MTc=">Department of Biotechnology</option>
                                            <option value="MTg=">Department of Botany</option>
                                            <option value="MTk=">Department of Zoology</option>
                                            <option value="MjA=">Department of Mathematics</option>
                                            <option value="MjE=">Department of Physics</option>
                                            <option value="MjI=">Department of Chemistry</option>
                                            <option value="MjM=">Department of Economics</option>
                                            <option value="MjQ=">Department of Educational Studies</option>
                                            <option value="MjU=">Department of Gandhian and Peace Studies</option>
                                            <option value="MjY=">Department of Library and Information Science
                                            </option>
                                            <option value="Mjc=">Department of Social Work</option>
                                            <option value="Mjg=">Department of Political Science</option>
                                            <option value="Mjk=">Department of Sociology</option>
                                            <option value="MzA=">Department of Media Studies</option>
                                            <option value="MzE=">Department of Sanskrit</option>
                                            <option value="MzM=">University Sports Board</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="txt_search" id="txt_search" class="form-control"
                                            required="required">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" id="btn_submit" name="btn_submit"
                                            class="btn btn-primary">Submit</button>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="directory.php" class="btn btn-dark">All Directory</a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Vice-Chancellor</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Sanjay Srivastava</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Vice
                                        Chancellor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        vc@mgcub.ac.in </p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 06252-241007,
                                        06252-241008</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Pro-Vice-Chancellor</span></h4>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Vice-Chancellor Secretariat</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Dinesh Hooda</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Section
                                        Officer (Vice-Chancellor Secretariat)</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        dineshhooda@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9805056666
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Sh. Siddharth Chakravarti</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Private
                                        Secretary to Vice-Chancellor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        pstovc@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9742788132
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Administrative Section</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Sh. Sachchidanand Singh </h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> OSD
                                        (Administration)</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        osdadmin@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9628203811
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Sachchidanand Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Deputy
                                        Registrar (Establishment)</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        dr.admin@mgcub.ac.in , snsingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9628203811
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Ms. Shephalika Mishra</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Public
                                        Relation Officer</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        pro@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9654598288
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Dinesh Hooda</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Section
                                        Officer (Establishment & Administration)</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        dineshhooda@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9805056666
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Ajeet Kumar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Section
                                        Officer (Academics)</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        ajeetkumar@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9523383515
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Manav Kumar Singh (On Leave)</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        manav@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9709366240
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Prince Kumar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        prince@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9113493200
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Sunil Kumar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        sunil.assistant@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9608084905
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Siddharth Chakrabarti</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Hindi
                                        Officer</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        hindiofficer@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9742788132
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Er. Kaushlesh Kumar Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Engineer (Civil)</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        ae.civil@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9546483664,
                                        7004298170</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Er. Utpal Kumar Maurya</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Junior
                                        Engineer (Electrical)</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        je.electrical@mgcub.ac.in </p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 7599053758
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Er. Koustubh Shanker Pandey</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Junior
                                        Engineer (Civil)</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        je.civil@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9389175989
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Kaushlesh Kumar Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Section
                                        Officer (Academics) (I/C)</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        soacad@mgcub.ac.in; academic@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9546483664
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Finance Section</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Vikas Pareek</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> OSD
                                        (Finance) </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        osdfinance@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9828373081
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Shailendra Singh Chouhan (On Leave)</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Section
                                        Officer (Finance)</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        sschouhan@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9608449811
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Manjesh Kumar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        manjesh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9911357089
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Ajeet Kumar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Section
                                        Officer (Finance)</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        ajeetkumar@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9523383515
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr Shivendra Singh </h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate OSD (Finance)</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        associateosdfinance@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Deans of School</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Shirish Mishra</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Dean,
                                        Pt. MMM School of Commerce & Management Sciences</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        deancmsciences@mgcub.ac.in; shirishmishra@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9523590453
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Ranjeet Kumar Choudhary</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Dean,
                                        School of Computational Sciences, Information and Communication Technology</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        deancsict@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9935787978
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Pranveer Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Dean,
                                        School of Life Sciences</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        deanlifesciences@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9424930522
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Devdutt Chaturvedi</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Dean,
                                        School of Physical & Material Sciences</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        deanphysicalsciences@mgcub.ac.in; devduttchaturvedi@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 8953860234
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Asheesh Srivastava</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Dean,
                                        School of Education</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        deaneducation@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9933604836
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Sunil Mahawar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Dean,
                                        School of Social Sciences</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        deansocialsciences@mgcub.ac.in; sunilmahawar@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9414362932
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Prasoon Dutta Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Dean
                                        School of Humanities & Languages </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        pdsingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9771824852
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Examination Section</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Krishna Kant Upadhyay</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Controller of Examinations</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        coe@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 07085244579
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Sunil Kumar Srivastava</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Additional Controller of Examinations</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        sksrivastava@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9424610776
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Abhay Vikram Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Controller of Examinations</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        abhayvikramsingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 09837002886
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Neelabh Srivastava</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Controller of Examinations</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        neelabh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 06392192675
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Manish Kumar Jaiswal</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        manishjaiswal@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 8452957201
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Govind Prasad Verma</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Controller of Examinations</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        govindprasadverma@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9764513071
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Anti-Ragging Cell</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Pavnesh Kumar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Chairman, Anti-Ragging Squad</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        pavneshkumar@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9415582480,
                                        9407034480</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Proctorial Board</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Prasoon Dutta Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Proctor
                                    </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        pdsingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9771824852
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Bimlesh Kumar Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Deputy
                                        Proctor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        bimlesh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9466476529
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Anjani Kumar Srivastava</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Deputy
                                        Proctor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        anjanisrivastava@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9679524503
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Sweta</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Proctor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        swetasociology@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Shivendra Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Proctor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        shivendrasingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9450148251
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr Prerana Bhaduli</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Proctor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        preranabhaduli@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Neelabh Srivastava</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Proctor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        neelabh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 6392192675
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Shyam Babu Prasad</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Proctor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        shyambabuprasad@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9873602432
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr Sunil Deepak Ghodke</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Proctor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        sunilghodke@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 7709910757
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Student's Welfare</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Arttatrana Pal</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Dean
                                        Student's Welfare</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        arttatranapal@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 8895760025
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Satarudra Prakash Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> ADSW
                                    </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        sprakashsingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 075238 57182
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Shyam Kumar Jha</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> ADSW
                                    </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        shyamkumarjha@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9434385918
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Subrata Roy</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> ADSW
                                    </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        subrataroy@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 09432653985
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Kailash Chandra Pradhan</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> ADSW
                                    </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        kcpradhan@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 99539 57533
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Manisha Rani</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> ADSW
                                    </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        manisharani@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Madhu Patel</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> ADSW
                                    </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        madhupatel@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9453436569
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Sweta</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> ADSW
                                    </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        swetasociology@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Babaloo Pal</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> ADSW
                                    </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        babaloopal@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>University Hostel</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Rafique Ul Islam</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Provost
                                    </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        rafique@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9006476761
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Preeti Bajpai</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Girls
                                        Hostel Senior Warden</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        preetibajpai@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Uma Yadav</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Girls
                                        Hostel Warden</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        umayadav@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Commerce</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Shirish Mishra</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor & Head</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        headcommerce@mgcub.ac.in, shirishmishra@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9523590453
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Subrata Roy</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        subrataroy@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 09432653985
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Avneesh Kumar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        avneeshkumar@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9868567880
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Shivendra Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        shivendrasingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9450148251
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Sumita Sinku</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        sumitasinku@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Ravish Chandra Verma</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        ravishchandraverma@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9452659064
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Management Sciences</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Pavnesh Kumar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor & Head</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        headmanagementsciences@mgcub.ac.in, pavneshkumar@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9415582480,
                                        9407034480</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Sapna Sugandha</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        sapnasugandha@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Alkalalhall</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        alkalalhall@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Arun Kumar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        arunkumar@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 7277658645
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Svati Kumari</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        svatimanagement@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Computer Science & Information Technology</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Atul Tripathi</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        atultripathi@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9205320519
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Shubham Kumar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        shubhamkumar@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 7076884010
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Sunil Kumar Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        sksingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 8826870662
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Vipin Kumar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        vipinkumar@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9313485512
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Vikas Pareek</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor and Head</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        vikaspareek@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9828373081
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of English</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Bimlesh Kumar Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor & Head</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        headenglish@mgcub.ac.in, bimlesh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9466476529
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Umesh Patra</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        umeshpatra@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 7036247447
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Kalyani Hazri</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        kalyanihazri@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Balande Chandoba Narsing</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        balandechandoba@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9726792782
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Deepak</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        deepak@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 8527835800
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Hindi</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Rajender Singh. (On Leave)</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        rajendersingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9416407834
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Pramod Meena (On Leave)</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        pramodmeena@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 7598424112
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Anjani Kumar Shrivastava</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor & Head</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        anjanisrivastava@mgcub.ac.in headhindi@mgcub.ac.in,</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9679524503
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Garima Tiwari</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        garimatiwari@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Shyam Nandan</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        shyamnandan@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9453154515
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Govind Prasad Verma</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        govindprasadverma@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9764513071
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Asha Meena</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        ashameena@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Biotechnology</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Anand Prakash</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor & Head</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        headbiotech@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9628282357
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Brijesh Pandey</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        brijeshpandey@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9415762707
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Satarudra Prakash Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        sprakashsingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 075238
                                        57182 / 094157 86865</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Saurabh Singh Rathore</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        ssrathore@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9453019934
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Swati Manohar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        swatibiotech@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Shashikant Ray</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        shashikantray@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 7320920973
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Akhilesh Kumar Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        akhileshsingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9005250140
                                        ; 7905624264</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Botany</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Shahana Majumder</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        shahanamajumder@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Atul Bhargava</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor & Head</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        atulbhargava@mgcub.ac.in; headbotany@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 7388325759
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Ram Prasad</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        ramprasad@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 8745855570
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr Pratibha Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        pratibhasingh@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Durgeshwer Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        durgeshwersingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9472622057
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Tara Chandra Ram</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        tarachandraram@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 7320920969
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Zoology</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Pranveer Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor & Head</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        pranveersingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9424930522
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Arttatrana Pal</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        headzoology@mgcub.ac.in, arttatranapal@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 8895760025
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Preeti Bajpai</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        preetibajpai@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i>
                                        8887610502, 9918040777</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Buddhi Prakash Jain</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        buddhiprakash@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9968433460
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Shyam Babu Prasad</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        shyambabuprasad@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9873602432
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Kundan Kishor Rajak</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        kkrajak@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9431281615
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Amit Ranjan</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        amitranjan@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 8292447191
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Mathematics</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Sunil Kumar Singh (On Leave)</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        sks_math@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9436895841
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Sheo Kumar Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        sheokumarsingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 7297820170
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Babita Mishra</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        babitamishra@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Amitabh Gyan Ranjan</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        amitabhranjan@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 7320920975
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Rajesh Prasad</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        rajeshprasad@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9521675787
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Devdutt Chaturvedi</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Head
                                    </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        headmathematics@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 8953860234
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Physics</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Sunil Kumar Srivastava</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor & Head</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        sksrivastava@mgcub.ac.in; headphysics@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9424610776
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Ajai Kumar Gupta</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        akgupta@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 7587362201
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Santosh Kumar Tripathi</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        sktripathi@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9479333913
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Neelabh Srivastava</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        neelabh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i>
                                        06392192675</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Sweta Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        swetaphysics@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Arvind Kumar Sharma</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        arvindkumar@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9452741886
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Pawan Kumar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        pawankumar@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9546256116
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Chemistry</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Rafique Ul Islam</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor & Head</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        headchemistry@mgcub.ac.in; rafique@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9006476761
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Rafique Ul Islam</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        rafique@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9006476761
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Rakesh Kumar Pandey</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        rakeshpandey@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 8448658842
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Rajanish Nath Tiwari</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        rajanishtiwari@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 8679615197
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Abhijeet Kumar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        abhijeetkumar@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9389177971
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Uttam Kumar Das</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        uttamkumardas@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 8902643740
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Anil Kumar Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        anilkumarsingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9811606980
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Economics</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Kailash Chandra Pradhan</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor & Head</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        headeconomics@mgcub.ac.in, kcpradhan@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 99539
                                        57533</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Bidhubhushan Mishra</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        bidhubhushan@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 8456983531
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Ram Lal Bagaria (On Leave)</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        ramlalbagaria@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 7568286911
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Shreedhar Satyakam</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        shreedharsatyakam@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 7839366879
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Educational Studies</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Asheesh Srivastava</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        profasheesh@mgcub.ac.in, mahatiasheesh@gmail.com</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9933604836
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Rashmi Srivastava</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        rashmisrivastava@mgcub.ac.in, rashmi.sri.8jan@gmail.com</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i>
                                        +91-7355954640, 7394064066</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Pathloth Omkar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        pathlothomkar@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 99515
                                        13232, 96187 95186</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Manisha Rani</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        manisharani@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Mukesh Kumar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor &Head</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        headdes@mgcub.ac.in; drmukesh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9415182527
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Gandhian and Peace Studies</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Sunil Mahawar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        sunilmahawar@mgcub.ac.in, msuniljpr@gmail.com</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9414362932
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Jugal Kishor Dadhich</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        jugalkdadhich@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9414564043
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Aslam Khan</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        aslamkhan@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9897595015
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Ambikesh Kumar Tripathi</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        ambikeshtripathi@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 094503
                                        08057, 094109 84998</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Abhay Vikram Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        abhayvikramsingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 098370
                                        02886</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr Jugal Kishor Dadhich</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor & Head</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        headgps@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Library and Information Science</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Ranjeet Kumar Choudhary</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor & Head</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        headlibraryscience@mgcub.ac.in, rkchoudhary@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9935787978
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Bhaw Nath Pandey</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        bhawnathpandey@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9928534006
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Madhu Patel</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        madhupatel@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9453436569
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Ms. Sapna Devi</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        sapna@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Social Work</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Rashmita Ray</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        rashmitaray@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Upmesh Kumar (On Leave)</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        upmeshkumar@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 7320920974
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Anupam Kumar Verma</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        anupamverma@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9450202480
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof Sunil Mahawar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i> Head
                                    </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        headsocialwork@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Political Science</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Sarita Tiwari</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor & Head</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        saritatiwari@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i>
                                        8092199818, 9523009864</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Narendra Kumar Arya</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        narendrakumararya@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9155957527
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Pankaj Kumar Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        pankajkumarsingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 7860290366
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Om Prakash Gupta</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        omprakashgupta@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 8882120366
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Ms. Prerana Bhaduli</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        preranabhaduli@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Narendra Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        narendrasingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9917777999
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Sociology</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Sujit Kumar Choudhary</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor & Head</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        headsociology@mgcub.ac.in, sujitchoudhary@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9939453225
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Dinesh Vyas</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        dineshvyas@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9602688600
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Mritunjay Kumar Yadavendu</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        mritunjay@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 6202507621
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Sweta</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        swetasociology@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Sanjay Kumar</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        sanjaykumar@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9868664382
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Media Studies</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Anjani Kumar Jha</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor & Head</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        anjanikumarjha@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9425303668
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Pirshant Kumar (On Leave)</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor </h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        headmediastudies@mgcub.ac.in, pirshantkumar@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9719002900
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Sunil Deepak Ghodke</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        sunilghodke@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 7709910757
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Uma Yadav</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        umayadav@mgcub.ac.in</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Saket Raman</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        prof.saket@gmail.com, saketraman@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i>
                                        09636807230, 88274 17230</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Parmatma Kumar Mishra</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        pkmishra@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> +91
                                        9838665379</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>Department of Sanskrit</span></h4>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Prof. Prasoon Dutta Singh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        headsanskrit@mgcub.ac.in, pdsingh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9771824852
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Shyam Kumar Jha</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Associate Professor & Head</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        shyamkumarjha@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9434385918
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Babaloo Pal</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        babaloopal@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9935623489
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Mr. Biswajit Barman</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        biswajitbarman@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 6281430070
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-xs-12 mb-20">
                            <div class="card">
                                <h5 class="card-header">Dr. Vishvesh</h5>
                                <div class="card-body">
                                    <h6 class="card-title"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        Assistant Professor</h6>
                                    <p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        vishvesh@mgcub.ac.in</p>
                                    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> 9717788864
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="page-title">
                                <h4><span>University Sports Board</span></h4>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            @include('web.administration')
        </div>
    </div>
</section>

@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Directory - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
