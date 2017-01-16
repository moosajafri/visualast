@extends('layouts.app')

@section('content')

<!-- Mirrored from localhost:8000/username by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2017 20:58:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<nav style="margin-bottom:0px;background-color: rgba(192, 203, 186, 0.96)" class="navbar">
    <div style="margin-left: 2%;margin-right: 5%;" class="container-fluid">
        <div class="navbar-header">
            <img style="width:7pc;" src="images/VisualastPNG.png" />
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a style="color: black;" href="#">Share</a></li>
            <li class="active"><a style="color: black;" href="#">Print</a></li>
            <li class="active"><a style="color: black;" href="#">Dashboard</a></li>
            <li class="active"><a style="color: black;" href="#">showUsername</a></li>
        </ul>
    </div>
</nav>

    <div id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar-wrapper">
            <ul style="margin-left: 20px;" class="sidebar-nav">
                <li style="margin-left: -55px" class="sidebar-brand">
                    <a id="profileBtn" style="color:white;display: inline-block" href="#" onclick="showProfile()">
                        Profile
                    </a>
                    <a id="themesBtn" style="display: inline-block" href="#" onclick="showThemes()">
                        Themes
                    </a>
                    <!-- NOT INCLUDING THESE AS OF NOW
                    <a id="stylesBtn" style="display: inline-block" href="#" onclick="showStyles()">
                        Styles
                    </a>
                    <a id="topicsBtn" style="display: inline-block" href="#" onclick="showTopics()">
                        Topics
                    </a>
                    -->
                </li>
                </ul>
            <ul id="profilebanner" style="margin-top:50px;margin-left: 20px;" class="sidebar-nav">
                <h2 style="color: white">My Profile</h2>
                <h5 style="color: whitesmoke">Edit your data</h5>
                <h4 style="color: navajowhite">My Data</h4>
                <li>
                    <div>
                        <span>Profile Summary<button data-toggle="modal" data-target="#profileSummary" data-backdrop="static" style="height:40px;float: right" class="grad btn"><b style="color: black">Edit</b></button></span>
                    </div>
                </li>
                <li>
                    <div>
                        <span>Work Experience<button data-toggle="modal" data-target="#workExperience" data-backdrop="static" style="height:40px;float: right" class="grad btn"><b style="color: black">Edit</b></button></span>
                    </div>
                </li>
                <li>
                    <div>
                        <span>Education<button data-toggle="modal" data-target="#education" data-backdrop="static" style="height:40px;float: right" class="grad btn"><b style="color: black">Edit</b></button></span>
                    </div>
                </li>
                <li>
                    <div>
                        <span>My Links<button data-toggle="modal" data-target="#myLinks" data-backdrop="static" style="height:40px;float: right" class="grad btn"><b style="color: black">Edit</b></button></span>
                    </div>
                </li>
                <li>
                    <div>
                        <input style="margin-right: 10px;" type="checkbox"><span>Skills<button data-toggle="modal" data-target="#skills" data-backdrop="static" style="height:40px;float: right" class="grad btn"><b style="color: black">Edit</b></button></span>
                    </div>
                </li>
                <li>
                    <div>
                        <input style="margin-right: 10px;" type="checkbox"><span>Interests<button data-toggle="modal" data-target="#interests" data-backdrop="static" style="height:40px;float: right" class="grad btn"><b style="color: black">Edit</b></button></span>
                    </div>
                </li>
                <li>
                    <div>
                        <input style="margin-right: 10px;" type="checkbox"><span>Languages<button data-toggle="modal" data-target="#languages" data-backdrop="static" style="height:40px;float: right" class="grad btn"><b style="color: black">Edit</b></button></span>
                    </div>
                </li>
                <li>
                    <div>
                        <input style="margin-right: 10px;" type="checkbox"><span>Awards & Honors<button data-toggle="modal" data-target="#awardsAndHonors" data-backdrop="static" style="height:40px;float: right" class="grad btn"><b style="color: black">Edit</b></button></span>
                    </div>
                </li>
                <li style="float: bottom;">
                    <button class="grad btn" style="width:120px;margin-left:20px;float: left"><b>Save</b></button>
                    <button class="grad btn" style="width:120px;margin-right:50px;float: right"><b>Cancel</b></button>
                </li>
            </ul>

            <ul id="themebanner" style="display:none;margin-top:50px;margin-left: 20px;" class="sidebar-nav">
                <h2 style="color: white">Themes</h2>
                <h5 style="color: whitesmoke">Click on a theme to preview . . . </h5>
                <li>
                    <div style="position:relative;margin-bottom:10px;width: 150px;height: 150px;">
                        Hello i am theme
                        <div style="position: absolute;bottom:0px;">Theme name</div>
                    </div>
                </li>

                <li>
                    <div style="position:relative;margin-bottom:10px;width: 150px;height: 150px;">
                        Hello i am theme
                        <div style="position: absolute;bottom:0px;">Theme name</div>
                    </div>
                </li>

                <li style="margin-bottom: 100px;">
                    <button class="grad btn" style="width:120px;margin-left:20px;float: left"><b>Save</b></button>
                    <button class="grad btn" style="width:120px;margin-right:50px;float: right"><b>Cancel</b></button>

                </li>
                </li>
            </ul>
        <!-- NOT INCLUDING THIS AS OF NOW
            <ul id="stylebanner" style="display:none;margin-top:50px;margin-left: 20px;" class="sidebar-nav">
                <button>Colors</button>
                <button>Fonts</button>
                <button>Background</button>
            </ul>

            <ul id="topicbanner" style="display:none;margin-top:50px;margin-left: 20px;" class="sidebar-nav">
                <h2 style="color: white">My Profile</h2>
                <h5 style="color: whitesmoke">Edit your data</h5>
                <h4 style="color: navajowhite">My Data</h4>
                <li>
                    <div>
                        <span>Profile Summary<button style="height:40px;float: right" class="grad btn"><b style="color: black">Edit</b></button></span>
                    </div>
                </li>
            </ul>
            -->
        </div>
        <!-- /#sidebar-wrapper -->


        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                       <!--theme starts here-->
                       <div id="cv" class="instaFade">
    <div class="mainDetails">
        <div id="headshot" class="quickFade">
            <img    src="{!! URL::to('/images/moosa.jpg') !!}" alt="Display Photo" />
        </div>
        
        <div >
            <h1 class="quickFade delayTwo" id="username">Joe Bloggs</h1><br>
            <h2 class="quickFade delayThree" id="userprofileSummary"> Job Title</h2>
        </div>
        
        <div id="contactDetails" class="quickFade delayFour">
            <ul>
                <li>e: <a href="mailto:joe@bloggs.com" target="_blank">joe@bloggs.com</a></li>
                <li>w: <a href="http://www.bloggs.com">www.bloggs.com</a></li>
                <li>m: 01234567890</li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    
    <div id="mainArea" class="quickFade delayFive">
        <section>
            <article>
                <div class="sectionTitle">
                    <h1>Personal Profile</h1>
                </div>
                
                <div class="sectionContent">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor metus, interdum at scelerisque in, porta at lacus. Maecenas dapibus luctus cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
                </div>
            </article>
            <div class="clear"></div>
        </section>
        
        
        <section>
            <div class="sectionTitle">
                <h1>Work Experience</h1>
            </div>
            
            <div class="sectionContent">
                <article>
                    <h2>Job Title at Company</h2>
                    <p class="subDetails">April 2011 - Present</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
                </article>
                
                <article>
                    <h2>Job Title at Company</h2>
                    <p class="subDetails">Janruary 2007 - March 2011</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
                </article>
                
                <article>
                    <h2>Job Title at Company</h2>
                    <p class="subDetails">October 2004 - December 2006</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
                </article>
            </div>
            <div class="clear"></div>
        </section>
        
        
        <section>
            <div class="sectionTitle">
                <h1>Key Skills</h1>
            </div>
            
            <div class="sectionContent">
                <ul class="keySkills">
                    <li>A Key Skill</li>
                    <li>A Key Skill</li>
                    <li>A Key Skill</li>
                    <li>A Key Skill</li>
                    <li>A Key Skill</li>
                    <li>A Key Skill</li>
                    <li>A Key Skill</li>
                    <li>A Key Skill</li>
                </ul>
            </div>
            <div class="clear"></div>
        </section>
        
        
        <section>
            <div class="sectionTitle">
                <h1>Education</h1>
            </div>
            
            <div class="sectionContent">
                <article>
                    <h2>College/University</h2>
                    <p class="subDetails">Qualification</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim.</p>
                </article>
                
                <article>
                    <h2>College/University</h2>
                    <p class="subDetails">Qualification</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim.</p>
                </article>
            </div>
            <div class="clear"></div>
        </section>
        
    </div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
                       <!--theme ends here-->
                    </div>
                </div>
            </div>
        </div><!-- /#page-content-wrapper -->

        <!-- PROFILE SUMMARY MODAL START-->
        <div id="profileSummary" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Profile Summary</h4>
                        <h5>Edit your basic information</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="small" for="profileSummaryFirstName">First Name: *</label>
                                <input type="text" class="input-sm form-control" id="profileSummaryFirstName" required>
                            </div>
                            <div class="form-group">
                                <label class="small" for="profileSummaryLastName">Last Name: *</label>
                                <input type="email" class="input-sm form-control" id="profileSummaryLastName" required>
                            </div>
                            <div class="form-group">
                                <label class="small" for="profileSummaryTitle">Title: *</label>
                                <input type="email" class="input-sm form-control" id="profileSummaryTitle" required>
                            </div>
                            <div class="form-group">
                                <label class="small" for="profileSummaryLocation">Location: </label>
                                <input type="email" class="input-sm form-control" id="profileSummaryLocation">
                            </div>
                            <div class="form-group">
                                <label class="small" for="profileSummaryProfileSummary">Profile Summary:</label>
                                <textarea class="form-control" rows="3" id="profileSummaryProfileSummary"></textarea>
                            </div>
                            <button id="btnSubmitProfileSummary" type="submit" class="btn btn-default" data-dismiss="modal">Submit</button>
                            <button id="btnCloseProfileSummary" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </form>
                        <p class="small"><a href="#">Delete my account?</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- PROFILE SUMMARY MODAL END -->

        <!-- WORK EXPERIENCE MODAL START-->
        <div id="workExperience" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Work Experience</h4>
                        <h5>Edit your work experience to be displayed on your timeline.</h5>
                    </div>
                    <div class="modal-body">
                        <button onclick="show(workExperienceForm)" class="btn">+ Add New</button>
                        <form style="display: none;" id="workExperienceForm">
                            <div class="form-group">
                                <label class="small" for="workExperienceTitle">Title: *</label>
                                <input type="text" class="input-sm form-control" id="workExperienceTitle" required>
                            </div>
                            <div class="form-group">
                                <label class="small" for="workExperienceCompany">Company: *</label>
                                <input type="text" class="input-sm form-control" id="workExperienceCompany" required>
                            </div>
                            <div class="form-group">
                                <label class="small" for="workExperienceStartMonth">Start Month: *</label>
                                <select class="input-sm form-control" id="workExperienceStartMonth" required>
                                    <option selected>--Select--</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="small" for="workExperienceStartYear">Start Year: *</label>
                                <input value="--Select--" id="workExperienceStartYear" class="date-own form-control" style="width: 300px;" type="text">
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Is Current</label>
                            </div>
                            <div class="form-group">
                                <label class="small" for="workExperienceEndMonth">End Month: *</label>
                                <select class="input-sm form-control" id="workExperienceEndMonth" required>
                                    <option selected>--Select--</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="small" for="workExperienceStartYear">End Year: *</label>
                                <input value="--Select--" id="workExperienceEndYear" class="date-own form-control" style="width: 300px;" type="text">
                            </div>
                            <div class="form-group">
                                <label class="small" for="workExperienceLocation">Location: </label>
                                <input type="text" class="input-sm form-control" id="workExperienceLocation" required>
                            </div>
                            <div class="form-group">
                                <label class="small" for="workExperienceSummary">Summary:</label>
                                <textarea class="form-control" rows="3" id="workExperienceSummary"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Add</button>
                            <button onclick="hide(workExperienceForm)" type="button" class="btn btn-default">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- WORK EXPERIENCE MODAL END -->

        <!-- EDUCATION MODAL START-->
        <div id="education" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Education</h4>
                        <h5>Edit your academic history to be displayed on your timeline.</h5>
                    </div>
                    <div class="modal-body">
                        <button onclick="show(educationForm)" class="btn">+ Add New</button>
                        <form style="display: none;" id="educationForm">
                            <div class="form-group">
                                <label class="small" for="educationSchool">School: *</label>
                                <input type="text" class="input-sm form-control" id="educationSchool" required>
                            </div>
                            <div class="form-group">
                                <label class="small" for="educationDegree">Degree: *</label>
                                <input type="text" class="input-sm form-control" id="educationDegree" required>
                            </div>
                            <div class="form-group">
                                <label class="small" for="educationProgramOfStudy">Degree: </label>
                                <input type="text" class="input-sm form-control" id="educationProgramOfStudy">
                            </div>
                            <div class="form-group">
                                <label class="small" for="educationStartMonth">Start Month: *</label>
                                <select class="input-sm form-control" id="educationStartMonth" required>
                                    <option selected>--Select--</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="small" for="educationStartYear">Start Year: *</label>
                                <input value="--Select--" id="educationStartYear" class="date-own form-control" style="width: 300px;" type="text">
                            </div>
                            <div class="form-group">
                                <label class="small" for="educationEndMonth">End Month: *</label>
                                <select class="input-sm form-control" id="educationEndMonth" required>
                                    <option selected>--Select--</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="small" for="educationStartYear">End Year: *</label>
                                <input value="--Select--" id="educationEndYear" class="date-own form-control" style="width: 300px;" type="text">
                            </div>
                            <div class="form-group">
                                <label class="small" for="educationLocation">Location: </label>
                                <input type="text" class="input-sm form-control" id="educationLocation" required>
                            </div>
                            <div class="form-group">
                                <label class="small" for="workExperienceSummary">Activities:</label>
                                <textarea class="form-control" rows="3" id="educationActivities"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Add</button>
                            <button onclick="hide(educationForm)" type="button" class="btn btn-default">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- EDUCATION MODAL END -->

        <!--MY LINKS MODAL START -->
        <div id="myLinks" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">My Links</h4>
                        <h5>Add your personal and professional URL's.</h5>
                    </div>
                    <div class="modal-body">
                        <button onclick="show(myLinksForm)" class="btn">+ Add New</button>
                        <form style="display: none;" id="myLinksForm">
                            <div class="form-group">
                                <label class="small" for="myLinksCategory">Category: *</label>
                                <select class="input-sm form-control" id="myLinksCategory" required>
                                    <option selected disabled>--Select--</option>
                                    <option>Personal Site</option>
                                    <option>Company Site</option>
                                    <option>Blog</option>
                                    <option>RSS</option>
                                    <option>Twitter</option>
                                    <option>Facebook</option>
                                    <option>LinkedIn</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="small" for="myLinksURL">URL: *</label>
                                <input type="url" class="input-sm form-control" id="myLinksURL" required>
                            </div>
                            <button type="submit" class="btn btn-default">Add</button>
                            <button onclick="hide(myLinksForm)" type="button" class="btn btn-default">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- MY LINKS MODAL END -->

        <!--SKILLS MODAL START -->
        <div id="skills" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Skills</h4>
                        <h5>Populate your viz with kickass skills. Maximum 5 skills are displayed.</h5>
                    </div>
                    <div class="modal-body">
                        <button onclick="show(skillsForm)" class="btn">+ Add New</button>
                        <form style="display: none;" id="skillsForm">
                            <div class="form-group">
                                <label class="small" for="skillsSkill">Skill: *</label>
                                <input type="text" class="input-sm form-control" id="skillsSkill" required>
                            </div>
                            <div class="form-group">
                                <label class="small" for="skillsYears">Years: *</label>
                                <select class="input-sm form-control" id="skillsYears" required>
                                    <option selected disabled>--Select--</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20+</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="small" for="skillsProficiency">Proficiency: *</label>
                                <select class="input-sm form-control" id="skillsProficiency" required>
                                    <option selected disabled>--Select--</option>
                                    <option>Beginner</option>
                                    <option>Intermediate</option>
                                    <option>Advanced</option>
                                    <option>Expert</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">Add</button>
                            <button onclick="hide(skillsForm)" type="button" class="btn btn-default">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- SKILLS MODAL END -->

        <!-- INTERESTS MODAL START-->
        <div id="interests" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Interests</h4>
                        <h5>Add some interests to your viz. Maximum 6 interests are displayed.</h5>
                    </div>
                    <div class="modal-body">
                        <button onclick="show(interestsForm)" class="btn">+ Add New</button>
                        <form style="display: none;" id="interestsForm">
                            <div class="form-group">
                                <label class="small" for="interestsInterest">Interest: *</label>
                                <input type="text" class="input-sm form-control" id="interestsInterest" required>
                            </div>
                            <div class="form-group">
                                <label class="small" for="interestsLevelOfInterest">Level Of Interest: *</label>
                                <select class="input-sm form-control" id="interestsLevelOfInterest" required>
                                    <option selected disabled>--Select--</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                                <p class="small">10 is the highest.</p>
                            </div>
                            <button type="submit" class="btn btn-default">Add</button>
                            <button onclick="hide(interestsForm)" type="button" class="btn btn-default">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- INTERESTS MODAL END -->

        <!-- LANGUAGES MODAL START-->
        <div id="languages" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Languages</h4>
                        <h5>Tell us about the languages you speak.</h5>
                    </div>
                    <div class="modal-body">
                        <button onclick="show(languagesForm)" class="btn">+ Add New</button>
                        <form style="display: none;" id="languagesForm">
                            <div class="form-group">
                                <label class="small" for="languagesLanguage">Language: *</label>
                                <input type="text" class="input-sm form-control" id="languagesLanguage" required>
                            </div>
                            <div class="form-group">
                                <label class="small" for="languagesProficiency">Proficiency: *</label>
                                <select class="input-sm form-control" id="languagesProficiency" required>
                                    <option selected disabled>--Select--</option>
                                    <option>Elementary</option>
                                    <option>Limited</option>
                                    <option>Professional</option>
                                    <option>Full Professional</option>
                                    <option>Native</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">Add</button>
                            <button onclick="hide(languagesForm)" type="button" class="btn btn-default">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- LANGUAGES MODAL END -->

        <!-- AWARDS & HONORS MODAL START-->
        <div id="awardsAndHonors" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Awards And Honors</h4>
                        <h5>Tell us about the languages you speak.</h5>
                    </div>
                    <div class="modal-body">
                        <button onclick="show(awardsAndHonorsForm)" class="btn">+ Add New</button>
                        <form style="display: none;" id="awardsAndHonorsForm">
                            <div class="form-group">
                                <label class="small" for="awardsAndHonorsTitle">Title of Award or Honor: *</label>
                                <input type="text" class="input-sm form-control" id="awardsAndHonorsTitle" required>
                            </div>
                            <div class="form-group">
                                <label class="small" for="awardsAndHonorsYearReceived">Year Received: *</label>
                                <input value="--Select--" id="awardsAndHonorsYearReceived" class="date-own form-control" style="width: 300px;" type="text">
                            </div>
                            <div class="form-group">
                                <label class="small" for="awardsAndHonorsYearRankOfImportance">Rank Of Importance : *</label>
                                <select class="input-sm form-control" id="awardsAndHonorsYearRankOfImportance" required>
                                    <option selected disabled>--Select--</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">Add</button>
                            <button onclick="hide(awardsAndHonorsForm)" type="button" class="btn btn-default">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- AWARDS & HONORS MODAL END -->
    </div> <!-- /#wrapper -->


   
    <!-- Menu Toggle Script -->
    <script>

         $( document ).ready(function() {
            getProfileSummaryAjax();         
        });

function getProfileSummaryAjax(){
  var paramaters="";
  $.ajax({
  url: "DAL/getProfileSummary?" + paramaters,
  type: 'GET',
  success: function(data) {
    $("#username").text(data.title +" "+data.fname+ " " + data.lname);
    $("#userprofileSummary").text(data.profile_summary);
    //alert("success no? " + data.fname);
  
  },
  error: function(xhr, status, error) {
  //alert(xhr.responseText);
}
});    
}

$( "#btnSubmitProfileSummary" ).click(function() {
var paramaters = "fname=" + $("#profileSummaryFirstName").val() + "&lname=" + $("#profileSummaryLastName").val() + "&title=" + $("#profileSummaryTitle").val() + "&location=" + $("#profileSummaryLocation").val() + "&psummary=" + $("#profileSummaryProfileSummary").val();   
$.ajax({
  url: "DAL/insertProfileSummary?" + paramaters,
  type: 'GET',
  success: function(data) {
    //alert("success" + data.status);
    getProfileSummaryAjax();
  },
  error: function(xhr, status, error) {
  //alert(xhr.responseText);
}
});

});

$( "#btnCloseProfileSummary").click(function() {
  //alert( "Handler for .click() called." );

});


    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    function showProfile() {
        document.getElementById("profilebanner").style.transition = "display 3s";
        document.getElementById("themesBtn").style.color="#999999";
       // document.getElementById("stylesBtn").style.color="#999999";
       // document.getElementById("topicsBtn").style.color="#999999";
        document.getElementById("profileBtn").style.color="white";
        document.getElementById("profilebanner").style.display="block";
        document.getElementById("themebanner").style.display="none";
        //document.getElementById("stylebanner").style.display="none";
       // document.getElementById("topicbanner").style.display="none";
    }

    function showThemes() {
        document.getElementById("themesBtn").style.color="white";
       // document.getElementById("stylesBtn").style.color="#999999";
       // document.getElementById("topicsBtn").style.color="#999999";
        document.getElementById("profileBtn").style.color="#999999";
        document.getElementById("profilebanner").style.display="none";
        document.getElementById("themebanner").style.display="block";
       // document.getElementById("stylebanner").style.display="none";
       // document.getElementById("topicbanner").style.display="none";

    }

//    function showStyles() {
//        document.getElementById("themesBtn").style.color="#999999";
//        document.getElementById("stylesBtn").style.color="white";
//        document.getElementById("topicsBtn").style.color="#999999";
//        document.getElementById("profileBtn").style.color="#999999";
//        document.getElementById("profilebanner").style.display="none";
//        document.getElementById("themebanner").style.display="none";
//        document.getElementById("stylebanner").style.display="block";
//        document.getElementById("topicbanner").style.display="none";
//    }
//
//    function showTopics() {
//        document.getElementById("themesBtn").style.color="#999999";
//        document.getElementById("stylesBtn").style.color="#999999";
//        document.getElementById("topicsBtn").style.color="white";
//        document.getElementById("profileBtn").style.color="#999999";
//        document.getElementById("profilebanner").style.display="none";
//        document.getElementById("themebanner").style.display="none";
//        document.getElementById("stylebanner").style.display="none";
//        document.getElementById("topicbanner").style.display="block";
//    }

    function show(idOfElement){
        idOfElement.style.display="block";
    }

    function hide(idOfElement){
        idOfElement.style.display="none";
    }
    </script>

    <script type="text/javascript">
    $('.date-own').datepicker({
        minViewMode: 2,
        format: 'yyyy'
    });
    </script>






<!-- Mirrored from localhost:8000/username by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2017 20:58:28 GMT -->
</html>

@endsection
