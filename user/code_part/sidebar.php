<?php
error_reporting(0);
?>
 <style type="text/css">
                .act{
background: white;
                }
                .act>span,i{
color: black;
                }
            </style>
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
 <link href="abc.jpg" rel="icon">      
<!-- Start Left menu area -->
    <div class="left-sidebar-pro" style="position: relative; background: ;">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="img/abc.jpg" alt="" / style="position:relative; height:40px; width: 40px; border-radius: 30px; right: 75px; top: 15px;"><h6 style="position:relative; left: 20px; bottom: 13px; font-size:23px; color: #06A3DA;">AKS Academy</h6></a>
                <strong><a href="index.php"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
           
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <!-- <li class="active" >
                            <a class="<?php if($_GET['status']=='dashboard'){ echo 'act';  } ?>" href="index.php?status=dashboard">
                              
                                      <span class="uil uil-create-dashboard" style="font-size: 20px; top: 9px; position:relative;"></span>

								    <span class="educate-icon educate-home icon-wrap"></span> 
                                   <i class="fa-solid fa-house"></i>
								    <span class="mini-click-non" style="position:relative; left: 7px; top: 7px;">DashBoard</span>
								</a>
                           
                        </li> -->
                        
                        <li class="">
                            <!-- <a class="" href="Shooters_Profile.php" aria-expanded="false">

                                <span class="uil uil-user-square" style="font-size:20px;"></span> 
                                <span class="mini-click-non" style="position:relative; left:7px;">Shooters Profile</span></a> -->

                            <!-- <ul class="submenu-angle " aria-expanded="false">
                                <li><a title="All Students" href="All_shooturs.php?status=Shooters_Detalis"><span class="uil uil-users-alt">&nbsp;All Shooters</span></a></li>
                                <li><a title="Add Students" href="Add_shooturs.php?status=Shooters_Detalis"><span class="uil uil-plus-circle">&nbsp;Add Shooters</span></a></li>
                                <li><a title="Edit Students" href="Manage_Shooters.php?status=Shooters_Detalis"><span class="uil uil-setting">&nbsp;Manage Shooters</span></a></li>
                                <li><a title="Students Profile" href="Shooters_Profile.php?status=Shooters_Detalis"><span class="uil uil-user-circle">&nbsp;Shooters Profile</span></a></li>
                            </ul> -->
                        </li>
                        <li>
                            <a class=" <?php if($_GET['status']=='Activity'){echo 'act';}?>" href="user_activity.php?status=Activity" aria-expanded="false"><span class="uil uil-file-check-alt" style="font-size:20px;"></span> <span class="mini-click-non" style="position:relative; left:7px;">Activity</span></a>
                            <!-- <ul class="submenu-angle" aria-expanded="false">
                                 <li><a title="All Library" href="add_activity.php?status=Activity"><span class="uil uil-plus-circle">&nbsp;Add Activity</span></a></li> -->
                                <!-- <li><a title="Add Library" href="manage_activity.php?status=Activity"><span class="uil uil-setting">&nbsp;Manage Activity</span></a></li> -->
                                <!-- <li><a title="Edit Library" href="edit-library-assets.html"><span class="mini-sub-pro">Edit Library Asset</span></a></li> 
                            </ul> -->
                        </li>
                        <li>
                            <a class=" <?php if($_GET['status']=='News'){echo 'act';}?>" href="user_news.php?status=News" aria-expanded="false"><span class="uil uil-newspaper" style="font-size:20px;"></span> <span class="mini-click-non" style="position:relative; left:7px;">News</span></a>
                           <!--  <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Departments List" href="add_news.php?status=News"><span class="uil uil-plus-circle">&nbsp;Add News</span></a></li>
                                <li><a title="Add Departments" href="manage_news.php?status=News"><span class="uil uil-setting">&nbsp;Manage News</span></a></li> 
                                 <li><a title="Edit Departments" href="edit-department.html"><span class="mini-sub-pro">Edit Departments</span></a></li> 
                            </ul> -->
                        </li>
                        <li>
                            <a class="<?php if($_GET['status']=='Attendence'){echo 'act';}?>" href="attendance.php?status=Attendence" aria-expanded="false"><span class="uil uil-user-check" style="font-size:20px;"></span> <span class="mini-click-non" style="position:relative; left:7px;">Attendence</span></a>
                           <!--  <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="mailbox.html"><span class="mini-sub-pro">Inbox</span></a></li>
                                <li><a title="View Mail" href="mailbox-view.html"><span class="mini-sub-pro">View Mail</span></a></li>
                                <li><a title="Compose Mail" href="mailbox-compose.html"><span class="mini-sub-pro">Compose Mail</span></a></li>
                            </ul> -->
                        </li>
                         <li>
                            <a class=" <?php if($_GET['status']=='Gun'){echo 'act';}?>" href="user_gun.php?status=Gun" aria-expanded="false"><span class="fa-solid fa-gun" style="font-size:20px;"></span> <span class="mini-click-non" style="position:relative; left:7px;">Gun</span></a>
                            <!-- <ul class="submenu-angle interface-mini-nb-dp" aria-expanded="false"> -->
                                <!-- <li><a title="Google Map" href="add_gallary.php?status=Gallary"><span class="uil uil-plus-circle">&nbsp;Add Gallary</span></a></li>
                                <li><a title="Data Maps" href="manage_gallary.php?status=Gallary"><span class="uil uil-setting">&nbsp;Manage Gallary</span></a></li> -->
                                <!-- <li><a title="Pdf Viewer" href="pdf-viewer.html"><span class="mini-sub-pro">Pdf Viewer</span></a></li>
                                <li><a title="X-Editable" href="x-editable.html"><span class="mini-sub-pro">X-Editable</span></a></li>
                                <li><a title="Code Editor" href="code-editor.html"><span class="mini-sub-pro">Code Editor</span></a></li>
                                <li><a title="Tree View" href="tree-view.html"><span class="mini-sub-pro">Tree View</span></a></li>
                                <li><a title="Preloader" href="preloader.html"><span class="mini-sub-pro">Preloader</span></a></li>
                                <li><a title="Images Cropper" href="images-cropper.html"><span class="mini-sub-pro">Images Cropper</span></a></li> -->
                            <!-- </ul> -->
                        </li>
                        <li>
                            <a class=" <?php if($_GET['status']=='Gallary'){echo 'act';}?>" href="user_gallary.php?status=Gallary" aria-expanded="false"><span class="uil uil-scenery" style="font-size:20px;"></span> <span class="mini-click-non" style="position:relative; left:7px;">Gallary</span></a>
                            <!-- <ul class="submenu-angle interface-mini-nb-dp" aria-expanded="false"> -->
                                <!-- <li><a title="Google Map" href="add_gallary.php?status=Gallary"><span class="uil uil-plus-circle">&nbsp;Add Gallary</span></a></li>
                                <li><a title="Data Maps" href="manage_gallary.php?status=Gallary"><span class="uil uil-setting">&nbsp;Manage Gallary</span></a></li> -->
                                <!-- <li><a title="Pdf Viewer" href="pdf-viewer.html"><span class="mini-sub-pro">Pdf Viewer</span></a></li>
                                <li><a title="X-Editable" href="x-editable.html"><span class="mini-sub-pro">X-Editable</span></a></li>
                                <li><a title="Code Editor" href="code-editor.html"><span class="mini-sub-pro">Code Editor</span></a></li>
                                <li><a title="Tree View" href="tree-view.html"><span class="mini-sub-pro">Tree View</span></a></li>
                                <li><a title="Preloader" href="preloader.html"><span class="mini-sub-pro">Preloader</span></a></li>
                                <li><a title="Images Cropper" href="images-cropper.html"><span class="mini-sub-pro">Images Cropper</span></a></li> -->
                            <!-- </ul> -->
                        </li>
                        <li>
                            <a class="has-arrow <?php if($_GET['status']=='Feedback'){echo 'act';}?>" href="" aria-expanded="false"><span class="uil uil-feedback" style="font-size:20px;"></span> <span class="mini-click-non" style="position:relative; left:7px;">Feedback</span></a>
                             <ul class="submenu-angle form-mini-nb-dp <?php if($_GET['status']=='Feedback'){echo 'act';}?>" aria-expanded="false">
                                <li><a title="Basic Form Elements" href="add_feedback.php?status=Feedback"><span class="mini-sub-pro">Add FeedBack</span></a></li>
                                <li><a title="Advance Form Elements" href="feedback.php?status=Feedback"><span class="mini-sub-pro">Manage FeedBack</span></a></li>
                                <!-- <li><a title="Password Meter" href="password-meter.html"><span class="mini-sub-pro">Password Meter</span></a></li>
                                <li><a title="Multi Upload" href="multi-upload.html"><span class="mini-sub-pro">Multi Upload</span></a></li>
                                <li><a title="Text Editor" href="tinymc.html"><span class="mini-sub-pro">Text Editor</span></a></li>
                                <li><a title="Dual List Box" href="dual-list-box.html"><span class="mini-sub-pro">Dual List Box</span></a></li> -->
                            </ul>
                        </li>
                         <li>
                            <a class=" <?php if($_GET['status']=='Payment_History'){echo 'act';}?>" href="payment_history.php?status=Payment_History" aria-expanded="false"><span class="uil uil-rupee-sign" style="font-size:20px;"></span> <span class="mini-click-non" style="position:relative; left:7px;">Payment</span></a>
                            <!-- <ul class="submenu-angle interface-mini-nb-dp" aria-expanded="false"> -->
                                <!-- <li><a title="Google Map" href="add_gallary.php?status=Gallary"><span class="uil uil-plus-circle">&nbsp;Add Gallary</span></a></li>
                                <li><a title="Data Maps" href="manage_gallary.php?status=Gallary"><span class="uil uil-setting">&nbsp;Manage Gallary</span></a></li> -->
                                <!-- <li><a title="Pdf Viewer" href="pdf-viewer.html"><span class="mini-sub-pro">Pdf Viewer</span></a></li>
                                <li><a title="X-Editable" href="x-editable.html"><span class="mini-sub-pro">X-Editable</span></a></li>
                                <li><a title="Code Editor" href="code-editor.html"><span class="mini-sub-pro">Code Editor</span></a></li>
                                <li><a title="Tree View" href="tree-view.html"><span class="mini-sub-pro">Tree View</span></a></li>
                                <li><a title="Preloader" href="preloader.html"><span class="mini-sub-pro">Preloader</span></a></li>
                                <li><a title="Images Cropper" href="images-cropper.html"><span class="mini-sub-pro">Images Cropper</span></a></li> -->
                            <!-- </ul> -->
                        </li>
                        <li>
                            <a class="<?php if($_GET['status']=='Contact_Us'){echo 'act';}?>" href="contact_us.php?status=Contact_Us" aria-expanded="false"><span class="uil uil-user-plus" style="font-size:20px;"></span> <span class="mini-click-non" style="position:relative; left:7px;">Contact Us</span></a>
                            <!-- <ul class="submenu-angle app-mini-nb-dp" aria-expanded="false">
                                <li><a title="Notifications" href="notifications.html"><span class="mini-sub-pro">Notifications</span></a></li>
                                <li><a title="Alerts" href="alerts.html"><span class="mini-sub-pro">Alerts</span></a></li>
                                <li><a title="Modals" href="modals.html"><span class="mini-sub-pro">Modals</span></a></li>
                                <li><a title="Buttons" href="buttons.html"><span class="mini-sub-pro">Buttons</span></a></li>
                                <li><a title="Tabs" href="tabs.html"><span class="mini-sub-pro">Tabs</span></a></li>
                                <li><a title="Accordion" href="accordion.html"><span class="mini-sub-pro">Accordion</span></a></li>
                            </ul> -->
                        </li>
                       <!--  <li id="removable">
                            <a class="" href="#" aria-expanded="false"><span class="uil uil-sign-out-alt" style="font-size:20px;"></span> <span class="mini-click-non" style="position:relative; left:7px;">Logout</span></a>
                             <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                                <li><a title="Login" href="login.html"><span class="mini-sub-pro">Login</span></a></li>
                                <li><a title="Register" href="register.html"><span class="mini-sub-pro">Register</span></a></li>
                                <li><a title="Lock" href="lock.html"><span class="mini-sub-pro">Lock</span></a></li>
                                <li><a title="Password Recovery" href="password-recovery.html"><span class="mini-sub-pro">Password Recovery</span></a></li>
                                <li><a title="404 Page" href="404.html"><span class="mini-sub-pro">404 Page</span></a></li>
                                <li><a title="500 Page" href="500.html"><span class="mini-sub-pro">500 Page</span></a></li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->