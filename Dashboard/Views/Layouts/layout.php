<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">


<!-- Mirrored from bootstrapdemos.wrappixel.com/spike/dist/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Apr 2024 02:16:22 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/logos/favicon.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>Dashboard/assets/css/styles.css" />

  <title>Spike Bootstrap Admin</title>
  <!-- jvectormap  -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>Dashboard/assets/fontawesome6/css/jquery-jvectormap.css">
  <link href="<?php echo BASE_URL; ?>Dashboard/assets/fontawesome6/css/fontawesome.css" rel="stylesheet" />
  <link href="<?php echo BASE_URL; ?>Dashboard/assets/fontawesome6/css/brands.css" rel="stylesheet" />
  <link href="<?php echo BASE_URL; ?>Dashboard/assets/fontawesome6/css/solid.css" rel="stylesheet" />
</head>

<body>
  <!-- Toast -->
  <div class="toast toast-onload align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body hstack align-items-start gap-6">
	<i class="fa-solid fa-user"></i>
      <div>
        <h5 class="text-white fs-3 mb-1">Welcome to Spike</h5>
        <h6 class="text-white fs-2 mb-0">Easy to costomize the Template!!!</h6>
      </div>
      <button type="button" class="btn-close btn-close-white fs-2 m-0 ms-auto shadow-none" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
  <!-- Preloader -->
  <!-- <div class="preloader">
    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/logos/loader.svg" alt="loader" class="lds-ripple img-fluid" />
  </div> -->
  <div id="main-wrapper">
    <!-- Sidebar Start -->
    <aside class="left-sidebar with-vertical">
      <!-- ---------------------------------- -->
      <!-- Start Vertical Layout Sidebar -->
      <!-- ---------------------------------- -->
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="index.html" class="text-nowrap logo-img">
          <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/logos/logo-light.svg" class="dark-logo" alt="Logo-Dark" />
          <!-- <img src="https://bootstrapdemos.wrappixe
          l.com/spike/dist/assets/images/logos/logo-dark.svg" class="light-logo" alt="Logo-light" /> -->
        </a>
        <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
          <i class="ti ti-x"></i>
        </a>
      </div>

      <div class="scroll-sidebar" data-simplebar>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="mb-0">

            <!-- ============================= -->
            <!-- Home -->
            <!-- ============================= -->
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">MENU</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link primary-hover-bg" href="?controller=Admin&action=index" aria-expanded="false">
                <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                  <iconify-icon icon="solar:screencast-2-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Inicio</span>
              </a>
            </li>
            <!-- <li class="sidebar-item">
              <a class="sidebar-link sidebar-link success-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/index2.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-success-subtle rounded-1">
                  <iconify-icon icon="solar:chart-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Dashboard 2</span>
              </a>
            </li> -->

            <!-- ============================= -->
            <!-- Apps -->
            <!-- ============================= -->
            <!-- <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">Apps</span>
            </li> -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow success-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-success-subtle rounded-1">
                  <iconify-icon icon="solar:smart-speaker-minimalistic-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Ecommerce</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/eco-shop.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Shop One</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/eco-shop2.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Shop Two</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/eco-shop-detail.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Details One</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/eco-shop-detail2.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Details Two</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/eco-product-list.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">List</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/eco-checkout.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Checkout</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow warning-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-warning-subtle rounded-1">
                  <iconify-icon icon="solar:pie-chart-3-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Blog</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/blog-posts.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Posts</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/blog-detail.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Details</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow danger-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-danger-subtle rounded-1">
                  <iconify-icon icon="solar:user-circle-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">User Profile</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/page-user-profile.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Profile One</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/page-user-profile2.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Profile Two</span>
                  </a>
                </li>
              </ul>
            </li> -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link indigo-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/app-email.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
                  <iconify-icon icon="solar:mailbox-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Email</span>
              </a>
            </li> -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link info-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/app-calendar.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-info-subtle rounded-1">
                  <iconify-icon icon="solar:calendar-add-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Calendar</span>
              </a>
            </li> -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link success-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/app-kanban.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-success-subtle rounded-1">
                  <iconify-icon icon="solar:window-frame-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Kanban</span>
              </a>
            </li> -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/app-chat.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                  <iconify-icon icon="solar:chat-round-unread-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Chat</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link secondary-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/app-notes.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-secondary-subtle rounded-1">
                  <iconify-icon icon="solar:notification-unread-lines-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Notes</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link success-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/app-contact.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-success-subtle rounded-1">
                  <iconify-icon icon="solar:phone-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Contact Table</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link warning-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/app-contact2.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-warning-subtle rounded-1">
                  <iconify-icon icon="solar:list-check-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Contact List</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link danger-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/app-invoice.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-danger-subtle rounded-1">
                  <iconify-icon icon="solar:file-text-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Invoice</span>
              </a>
            </li> -->


            <!-- ============================= -->
            <!-- Pages -->
            <!-- ============================= -->
            <!-- <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">Pages</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link indigo-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/page-pricing.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
                  <iconify-icon icon="solar:dollar-minimalistic-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Pricing</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link info-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/page-faq.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-info-subtle rounded-1">
                  <iconify-icon icon="solar:question-circle-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">FAQ</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/page-account-settings.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                  <iconify-icon icon="solar:user-circle-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Account Setting</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link danger-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/landingpage/index.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-danger-subtle rounded-1">
                  <iconify-icon icon="solar:window-frame-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Landing Page</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow secondary-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-secondary-subtle rounded-1">
                  <iconify-icon icon="solar:widget-4-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Widgets</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/widgets-cards.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Cards</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/widgets-banners.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Banner</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/widgets-charts.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Charts</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/widgets-feeds.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Feed Widgets</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/widgets-apps.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Apps Widgets</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/widgets-data.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Data Widgets</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- ============================= -->
            <!-- SchoolPages -->
            <!-- ============================= -->
            <!-- <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">SchoolPages</span>
            </li> -->

            <!-- =================== -->
            <!-- Teachers -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow success-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-success-subtle rounded-1">
                  <iconify-icon icon="solar:lightbulb-bolt-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Teachers</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/all-teacher.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">All Teachers</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/teacher-details.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu"> Teachers Details</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- =================== -->
            <!-- Exam -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow warning-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-warning-subtle rounded-1">
                  <iconify-icon icon="solar:file-text-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Exam</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/exam-schedule.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Exam Schedule</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/exam-result.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu"> Exam Result</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/exam-result-details.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu"> Exam Result Details</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- =================== -->
            <!-- Students -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow danger-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-danger-subtle rounded-1">
                  <iconify-icon icon="solar:square-academic-cap-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Students</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/all-student.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">All Students</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/student-details.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu"> Students Details</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- =================== -->
            <!-- Classes -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link sidebar-link indigo-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/classes.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
                  <iconify-icon icon="solar:planet-3-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Classes</span>
              </a>
            </li> -->

            <!-- =================== -->
            <!-- Attendance -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link sidebar-link info-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/attendance.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-info-subtle rounded-1">
                  <iconify-icon icon="solar:file-check-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Attendance</span>
              </a>
            </li> -->

            <!-- ============================= -->
            <!-- UI -->
            <!-- ============================= -->
            <!-- <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">UI</span>
            </li> -->

            <!-- =================== -->
            <!-- UI Elements -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow primary-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                  <iconify-icon icon="solar:cpu-bolt-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">UI Elements</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-accordian.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Accordian</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-badge.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Badge</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-buttons.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Buttons</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-dropdowns.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Dropdowns</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-modals.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Modals</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-tab.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Tab</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-tooltip-popover.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Tooltip & Popover</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-notification.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Alerts</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-progressbar.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Progressbar</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-pagination.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Pagination</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-typography.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Typography</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-bootstrap-ui.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Bootstrap UI</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-breadcrumb.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Breadcrumb</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-offcanvas.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Offcanvas</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-lists.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Lists</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-grid.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Grid</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-carousel.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Carousel</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-scrollspy.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Scrollspy</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-spinner.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Spinner</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-link.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Link</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- =================== -->
            <!-- Cards -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow secondary-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-secondary-subtle rounded-1">
                  <iconify-icon icon="solar:document-text-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Cards</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-cards.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Basic Cards</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-card-customs.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Custom Cards</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-card-weather.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Weather Cards</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-card-draggable.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Draggable Cards</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- =================== -->
            <!-- Components -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow success-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-success-subtle rounded-1">
                  <iconify-icon icon="solar:command-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Components</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/component-sweetalert.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Sweet Alert</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/component-nestable.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Nestable</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/component-noui-slider.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Noui slider</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/component-rating.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Rating</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/component-toastr.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Toastr</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- ============================= -->
            <!-- Forms -->
            <!-- ============================= -->
            <!-- <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">Forms</span>
            </li> -->

            <!-- =================== -->
            <!-- Form Elements -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow secondary-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-secondary-subtle rounded-1">
                  <iconify-icon icon="solar:book-2-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Form Elements</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-inputs.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Forms Input</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-input-groups.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Input Groups</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-input-grid.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Input Grid</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-checkbox-radio.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Checkbox & Radios</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-bootstrap-switch.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Bootstrap Switch</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-select2.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Select2</span>
                  </a>
                </li>

              </ul>
            </li> -->

            <!-- =================== -->
            <!-- Form Input -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow success-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-success-subtle rounded-1">
                  <iconify-icon icon="solar:ruler-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Form Input</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-basic.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Basic Form</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-horizontal.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Form Horizontal</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-actions.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Form Actions</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-row-separator.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Row Separator</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-bordered.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Form Bordered</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-detail.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Form Detail</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-striped-row.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Striped Rows</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-floating-input.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Form Floating Input</span>
                  </a>
                </li>
              </ul>
            </li> -->


            <!-- =================== -->
            <!-- Form Addons -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow primary-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                  <iconify-icon icon="solar:qr-code-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Form Addons</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-dropzone.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Dropzone</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-mask.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Form Mask</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-typeahead.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Form Typehead</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- =================== -->
            <!-- Form Validation -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow indigo-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
                  <iconify-icon icon="solar:danger-circle-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Form Validation</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-bootstrap-validation.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Bootstrap Validation</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-custom-validation.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Custom Validation</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- =================== -->
            <!-- Form Pickers -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow success-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-success-subtle rounded-1">
                  <iconify-icon icon="solar:document-add-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Form Pickers</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-picker-colorpicker.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Colorpicker</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-picker-bootstrap-rangepicker.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Bootstrap Rangepicker</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-picker-bootstrap-datepicker.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Bootstrap Datepicker</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-picker-material-datepicker.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Material Datepicker</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- =================== -->
            <!-- Form Editor -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow indigo-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
                  <iconify-icon icon="solar:dna-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Form Editor</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-editor-quill.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Quill Editor</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-editor-tinymce.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Tinymce Editor</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- =================== -->
            <!-- Form Wizard -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link sidebar-link warning-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-wizard.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-warning-subtle rounded-1">
                  <iconify-icon icon="solar:password-minimalistic-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Form Wizard</span>
              </a>
            </li> -->

            <!-- =================== -->
            <!-- Form Repeater -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link sidebar-link primary-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-repeater.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                  <iconify-icon icon="solar:star-circle-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Form Repeater</span>
              </a>
            </li> -->

            <!-- ============================= -->
            <!-- Tables -->
            <!-- ============================= -->
            <!-- <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">Tables</span>
            </li> -->

            <!-- =================== -->
            <!-- Bootstrap Table -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow indigo-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
                  <iconify-icon icon="solar:sidebar-minimalistic-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Bootstrap Table</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/table-basic.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Basic Table</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/table-dark-basic.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Dark Basic Table</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/table-sizing.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Sizing Table</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/table-layout-coloured.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Coloured Table</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- =================== -->
            <!-- Datatable -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow info-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-info-subtle rounded-1">
                  <iconify-icon icon="solar:tablet-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Datatables</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/table-datatable-basic.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Basic Initialisation</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/table-datatable-api.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">API</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/table-datatable-advanced.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Advanced Initialisation</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- ============================= -->
            <!-- Charts -->
            <!-- ============================= -->
            <!-- <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">Charts</span>
            </li> -->

            <!-- =================== -->
            <!-- Apex Chart -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow primary-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                  <iconify-icon icon="solar:dropper-minimalistic-2-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Apex Charts</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/chart-apex-line.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Line Chart</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/chart-apex-area.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Area Chart</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/chart-apex-bar.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Bar Chart</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/chart-apex-pie.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Pie Chart</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/chart-apex-radial.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Radial Chart</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/chart-apex-radar.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Radar Chart</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- ============================= -->
            <!-- Sample Pages -->
            <!-- ============================= -->
            <!-- <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">Sample Pages</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link has-arrow danger-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-danger-subtle rounded-1">
                  <iconify-icon icon="solar:file-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Sample Pages</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/pages-animation.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Animation</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/pages-search-result.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Search Result</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/pages-gallery.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Gallery</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/pages-treeview.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Treeview</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/pages-block-ui.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Block-Ui</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/pages-session-timeout.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Session Timeout</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- ============================= -->
            <!-- Icons -->
            <!-- ============================= -->
            <!-- <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">Icons</span>
            </li> -->

            <!-- =================== -->
            <!-- Tabler Icon -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link sidebar-link secondary-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/icon-tabler.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-secondary-subtle rounded-1">
                  <iconify-icon icon="solar:archive-broken" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Tabler Icon</span>
              </a>
            </li> -->

            <!-- =================== -->
            <!-- Solar Icon -->
            <!-- =================== -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link sidebar-link primary-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/icon-solar.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                  <iconify-icon icon="solar:sticker-smile-circle-2-linear" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Solar Icon</span>
              </a>
            </li> -->


            <!-- ============================= -->
            <!-- Auth -->
            <!-- ============================= -->
            <!-- <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">Auth</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link success-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-error.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-success-subtle rounded-1">
                  <iconify-icon icon="solar:danger-circle-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Error</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow warning-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-warning-subtle rounded-1">
                  <iconify-icon icon="solar:login-2-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Login</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-login.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Side Login</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-login2.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Boxed Login</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow danger-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-danger-subtle rounded-1">
                  <iconify-icon icon="solar:user-plus-broken" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Register</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-register.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Side Register</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-register2.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Boxed Register</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow indigo-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
                  <iconify-icon icon="solar:refresh-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Forgot Password</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-forgot-password.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Side Forgot Password</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-forgot-password2.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Boxed Forgot Password</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow info-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-info-subtle rounded-1">
                  <iconify-icon icon="solar:magnifer-zoom-in-linear" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Two Steps</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-two-steps.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Side Two Steps</span>
                  </a>
                </li>

                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-two-steps2.html" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Boxed Two Steps</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link primary-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-maintenance.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-primary-subtle rounded-1">
                  <iconify-icon icon="solar:settings-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Maintenance</span>
              </a>
            </li> -->

            <!-- ============================= -->
            <!-- Documentation -->
            <!-- ============================= -->
            <!-- <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">Documentation</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link success-hover-bg" href="https://bootstrapdemos.wrappixel.com/spike/dist/docs/index.html" aria-expanded="false">
                <span class="aside-icon p-2 bg-success-subtle rounded-1">
                  <iconify-icon icon="solar:file-text-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Getting Started</span>
              </a>
            </li> -->

            <!-- ============================= -->
            <!-- OTHER -->
            <!-- ============================= -->
            <!-- <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="nav-small-cap-icon fs-5"></iconify-icon>
              <span class="hide-menu">Other</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow secondary-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-secondary-subtle rounded-1">
                  <iconify-icon icon="solar:layers-minimalistic-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Menu Level</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="javascript:void(0)" class="sidebar-link">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Level 1</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <span class="sidebar-icon"></span>
                    <span class="hide-menu">Level 1.1</span>
                  </a>
                  <ul aria-expanded="false" class="collapse two-level">
                    <li class="sidebar-item">
                      <a href="javascript:void(0)" class="sidebar-link">
                        <span class="sidebar-icon"></span>
                        <span class="hide-menu">Level 2</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="sidebar-icon"></span>
                        <span class="hide-menu">Level 2.1</span>
                      </a>
                      <ul aria-expanded="false" class="collapse three-level">
                        <li class="sidebar-item">
                          <a href="javascript:void(0)" class="sidebar-link">
                            <span class="sidebar-icon"></span>
                            <span class="hide-menu">Level 3</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a href="javascript:void(0)" class="sidebar-link">
                            <span class="sidebar-icon"></span>
                            <span class="hide-menu">Level 3.1</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link success-hover-bg opacity-50" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-success-subtle rounded-1">
                  <iconify-icon icon="solar:forbidden-circle-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">Disabled</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link warning-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-warning-subtle rounded-1">
                  <iconify-icon icon="solar:star-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <div class="lh-base hide-menu">
                  <span class="hide-menu ps-1 d-flex">SubCaption</span>
                  <span class="hide-menu ps-1 d-flex fs-2">This is the sutitle</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link danger-hover-bg justify-content-between" href="javascript:void(0)" aria-expanded="false">
                <div class="d-flex align-items-center">
                  <span class="aside-icon p-2 bg-danger-subtle rounded-1">
                    <iconify-icon icon="solar:shield-check-line-duotone" class="fs-6"></iconify-icon>
                  </span>
                  <span class="hide-menu ps-1">Chip</span>
                </div>
                <div class="hide-menu">
                  <span class="badge rounded-circle bg-danger d-flex align-items-center justify-content-center round-20 p-0 me-7">9</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link indigo-hover-bg justify-content-between" href="javascript:void(0)" aria-expanded="false">
                <div class="d-flex align-items-center">
                  <span class="aside-icon p-2 bg-indigo-subtle rounded-1">
                    <iconify-icon icon="solar:smile-circle-line-duotone" class="fs-6"></iconify-icon>
                  </span>
                  <span class="hide-menu ps-1">Outlined</span>
                </div>
                <div class="hide-menu">
                  <span class="hide-menu badge rounded-pill border border-indigo text-indigo fs-2 me-7">Outline</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link info-hover-bg" href="javascript:void(0)" aria-expanded="false">
                <span class="aside-icon p-2 bg-info-subtle rounded-1">
                  <iconify-icon icon="solar:star-line-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu ps-1">External Link</span>
              </a>
            </li> -->
          </ul>

        </nav>
        <!-- End Sidebar navigation -->
      </div>

      <div class=" fixed-profile mx-3 mt-3">
        <div class="card bg-primary-subtle mb-0 shadow-none">
          <div class="card-body p-4">
            <div class="d-flex align-items-center justify-content-between gap-3">
              <div class="d-flex align-items-center gap-3">
                <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/profile/user-1.jpg" width="45" height="45" class="img-fluid rounded-circle" alt="spike-img" />
                <div>
                  <h5 class="mb-1">Mike</h5>
                  <p class="mb-0">Admin</p>
                </div>
              </div>
              <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-login.html" class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Logout">
                <iconify-icon icon="solar:logout-line-duotone" class="fs-8"></iconify-icon>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- ---------------------------------- -->
      <!-- Start Vertical Layout Sidebar -->
      <!-- ---------------------------------- -->
    </aside>
    <!--  Sidebar End -->
    <div class="page-wrapper">

      <aside class="left-sidebar with-horizontal">
        <!-- Sidebar scroll-->
        <div>
          <!-- Sidebar navigation-->
          <nav id="sidebarnavh" class="sidebar-nav scroll-sidebar container-fluid">
            <ul id="sidebarnav">
              <!-- ============================= -->
              <!-- Home -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
              </li>
              <!-- =================== -->
              <!-- Dashboard -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow primary-hover-bg" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:atom-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">Dashboard</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="index.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Dashboard</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/index2.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Dashboard 2</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- ============================= -->
              <!-- Apps -->
              <!-- ============================= -->
              <li class="sidebar-item">
                <a class="sidebar-link two-column has-arrow indigo-hover-bg" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:archive-broken" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">Apps</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/app-calendar.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Calendar</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/app-kanban.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Kanban</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/app-chat.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Chat</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/app-email.html" aria-expanded="false">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Email</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/app-contact.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Contact Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/app-contact2.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Contact List</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/app-notes.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Notes</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/app-invoice.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Invoice</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/page-user-profile.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">User Profile</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/blog-posts.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Posts</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/blog-detail.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Detail</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/eco-shop.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Shop</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/eco-shop-detail.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Shop Detail</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/eco-product-list.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">List</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/eco-checkout.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu">Checkout</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- PAGES -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">PAGES</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link two-column has-arrow primary-hover-bg" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:file-text-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">Pages</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <!-- Teachers -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/all-teacher.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">All Teachers</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/teacher-details.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate"> Teachers Details</span>
                    </a>
                  </li>
                  <!-- Exams -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/exam-schedule.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Exam Schedule</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/exam-result.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate"> Exam Result</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/exam-result-details.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate"> Exam Result Details</span>
                    </a>
                  </li>
                  <!-- students -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/all-student.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">All Students</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/student-details.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate"> Students Details</span>
                    </a>
                  </li>
                  <!-- classes -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/classes.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate"> Classes</span>
                    </a>
                  </li>
                  <!-- attendance -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/attendance.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate"> Attendance</span>
                    </a>
                  </li>
                  <!-- icons -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/icon-tabler.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate"> Tabler Icon</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/page-faq.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">FAQ</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/page-account-settings.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Account Setting</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/page-pricing.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Pricing</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/page-user-profile2.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Profile One</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/page-user-profile.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Profile Two</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/landingpage/index.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Landing Page</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- UI -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">UI</span>
              </li>
              <!-- =================== -->
              <!-- UI Elements -->
              <!-- =================== -->
              <li class="sidebar-item mega-dropdown">
                <a class="sidebar-link has-arrow warning-hover-bg" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:cpu-bolt-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">UI</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-accordian.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Accordian</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-badge.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Badge</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-buttons.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Buttons</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-dropdowns.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Dropdowns</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-modals.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Modals</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-tab.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Tab</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-tooltip-popover.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Tooltip & Popover</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-notification.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Alerts</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-progressbar.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Progressbar</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-pagination.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Pagination</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-typography.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Typography</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-bootstrap-ui.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Bootstrap UI</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-breadcrumb.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Breadcrumb</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-offcanvas.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Offcanvas</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-lists.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Lists</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-grid.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Grid</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-carousel.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Carousel</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-scrollspy.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Scrollspy</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-spinner.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Spinner</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/ui-link.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Link</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Forms -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Forms</span>
              </li>
              <!-- =================== -->
              <!-- Forms -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link two-column has-arrow success-hover-bg" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:book-2-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">Forms</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <!-- form elements -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-inputs.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Forms Input</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-input-groups.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Input Groups</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-input-grid.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Input Grid</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-checkbox-radio.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Checkbox & Radios</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-bootstrap-switch.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Bootstrap Switch</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-select2.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Select2</span>
                    </a>
                  </li>

                  <!-- form inputs -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-basic.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Basic Form</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-horizontal.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Form Horizontal</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-actions.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Form Actions</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-row-separator.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Row Separator</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-bordered.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Form Bordered</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-detail.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Form Detail</span>
                    </a>
                  </li>

                  <!-- form wizard -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-wizard.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Form Wizard</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/form-editor-quill.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Quill Editor</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Tables -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Tables</span>
              </li>
              <!-- =================== -->
              <!-- Bootstrap Table -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow warning-hover-bg" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:bedside-table-2-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">Tables</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/table-basic.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Basic Table</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/table-dark-basic.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Dark Basic Table</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/table-sizing.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Sizing Table</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/table-layout-coloured.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Coloured Table Layout</span>
                    </a>
                  </li>
                  <!-- datatable -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/table-datatable-basic.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Basic Initialisation</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/table-datatable-api.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">API</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/table-datatable-advanced.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Advanced Initialisation</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- ============================= -->
              <!-- Auth -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Auth</span>
              </li>
              <!-- =================== -->
              <!-- Auth -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow info-hover-bg" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:lock-keyhole-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">Auth</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-error.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Error</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-login.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Side Login</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-login2.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Boxed Login</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-register.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Side Register</span>
                    </a>
                  </li>
                  <!-- datatable -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-register2.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Boxed Register</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-forgot-password.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Side Forgot Password</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-forgot-password2.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Boxed Forgot Password</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-two-steps.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Side Two Steps</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-two-steps2.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Boxed Two Steps</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/authentication-maintenance.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Maintenance</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- ============================= -->
              <!-- Charts -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Charts</span>
              </li>
              <!-- =================== -->
              <!-- Apex Chart -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow indigo-hover-bg" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:archive-broken" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">Icon</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/icon-tabler.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Tabler Icon</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/minisidebar/icon-solar.html" class="sidebar-link">
                      <span class="sidebar-icon"></span>
                      <span class="hide-menu text-truncate">Solar Icon</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- multi level -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow success-hover-bg" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:layers-line-duotone" class="fs-6 aside-icon"></iconify-icon>
                  <span class="hide-menu ps-1">Multi DD</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/spike/dist/docs/index.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Documentation</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Page 1</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link has-arrow">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Page 2</span>
                    </a>
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2.1</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2.2</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2.3</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Page 3</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
        </div>
      </aside>

      <div class="body-wrapper">
        <div class="container-fluid">
          <!--  Header Start -->
          <header class="topbar sticky-top">
            <?php
            require_once('cabecera.php');
            ?>
          </header>
          <!--  Header End -->
          <section>
            <?php require_once('routing.php'); ?>
          </section>
        </div>
      </div>
    </div>
    <script>
      function handleColorTheme(e) {
        document.documentElement.setAttribute("data-color-theme", e);
      }
    </script>
    <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
	<i class="fa fa-solid fa-gear" style="color: #ffffff;"></i>
    </button>

    <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
        <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
          Settings
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body h-n80" data-simplebar>
        <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

        <div class="d-flex flex-row gap-3 customizer-box" role="group">
          <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary" for="light-layout">
            <i class="icon ti ti-brightness-up fs-7 me-2"></i>Light
          </label>

          <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary" for="dark-layout">
            <i class="icon ti ti-moon fs-7 me-2"></i>Dark
          </label>
        </div>

        <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
        <div class="d-flex flex-row gap-3 customizer-box" role="group">
          <input type="radio" class="btn-check" name="direction-l" id="ltr-layout" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary" for="ltr-layout">
            <i class="icon ti ti-text-direction-ltr fs-7 me-2"></i>LTR
          </label>

          <input type="radio" class="btn-check" name="direction-l" id="rtl-layout" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary" for="rtl-layout">
            <i class="icon ti ti-text-direction-rtl fs-7 me-2"></i>RTL
          </label>
        </div>

        <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

        <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
          <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME">
            <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
              <i class="ti ti-check text-white d-flex icon fs-5"></i>
            </div>
          </label>

          <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME">
            <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
              <i class="ti ti-check text-white d-flex icon fs-5"></i>
            </div>
          </label>

          <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME">
            <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
              <i class="ti ti-check text-white d-flex icon fs-5"></i>
            </div>
          </label>

          <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME">
            <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
              <i class="ti ti-check text-white d-flex icon fs-5"></i>
            </div>
          </label>

          <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME">
            <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
              <i class="ti ti-check text-white d-flex icon fs-5"></i>
            </div>
          </label>

          <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME">
            <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
              <i class="ti ti-check text-white d-flex icon fs-5"></i>
            </div>
          </label>
        </div>

        <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
        <div class="d-flex flex-row gap-3 customizer-box" role="group">
          <div>
            <input type="radio" class="btn-check" name="page-layout" id="vertical-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="vertical-layout">
              <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical
            </label>
          </div>
          <div>
            <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="horizontal-layout">
              <i class="icon ti ti-layout-navbar fs-7 me-2"></i>Horizontal
            </label>
          </div>
        </div>

        <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

        <div class="d-flex flex-row gap-3 customizer-box" role="group">
          <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary" for="boxed-layout">
            <i class="icon ti ti-layout-distribute-vertical fs-7 me-2"></i>Boxed
          </label>

          <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary" for="full-layout">
            <i class="icon ti ti-layout-distribute-horizontal fs-7 me-2"></i>Full
          </label>
        </div>

        <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
        <div class="d-flex flex-row gap-3 customizer-box" role="group">
          <a href="javascript:void(0)" class="fullsidebar">
            <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="full-sidebar">
              <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full
            </label>
          </a>
          <div>
            <input type="radio" class="btn-check " name="sidebar-type" id="mini-sidebar" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="mini-sidebar">
              <i class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse
            </label>
          </div>
        </div>

        <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

        <div class="d-flex flex-row gap-3 customizer-box" role="group">
          <input type="radio" class="btn-check" name="card-layout" id="card-with-border" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary" for="card-with-border">
            <i class="icon ti ti-border-outer fs-7 me-2"></i>Border
          </label>

          <input type="radio" class="btn-check" name="card-layout" id="card-without-border" autocomplete="off" />
          <label class="btn p-9 btn-outline-primary" for="card-without-border">
            <i class="icon ti ti-border-none fs-7 me-2"></i>Shadow
          </label>
        </div>
      </div>
    </div>
  </div>
  <div class="dark-transparent sidebartoggler"></div>
  </div>
  <script src="<?php echo BASE_URL; ?>Dashboard/assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
  <script src="<?php echo BASE_URL; ?>Dashboard/assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo BASE_URL; ?>Dashboard/assets/js/simplebar.min.js"></script>
  <script src="<?php echo BASE_URL; ?>Dashboard/assets/js/app.minisidebar.init.js"></script>
  <script src="<?php echo BASE_URL; ?>Dashboard/assets/js/theme.js"></script>
  <script src="<?php echo BASE_URL; ?>Dashboard/assets/js/app.min.js"></script>
  <script src="<?php echo BASE_URL; ?>Dashboard/assets/js/sidebarmenu.js"></script>
  <script src="<?php echo BASE_URL; ?>Dashboard/assets/js/feather.min.js"></script>

  <!-- solar icons -->
  <script src="<?php echo BASE_URL; ?>Dashboard/assets/js/iconify-icon.min.js"></script>
  <script src="<?php echo BASE_URL; ?>Dashboard/assets/js/jquery-jvectormap.min.js"></script>
  <script src="<?php echo BASE_URL; ?>Dashboard/assets/js/apexcharts.min.js"></script>
  <script src="<?php echo BASE_URL; ?>Dashboard/assets/js/jquery-jvectormap-us-aea-en.js"></script>
  <script src="<?php echo BASE_URL; ?>Dashboard/assets/js/dashboard.js"></script>
</body>


<!-- Mirrored from bootstrapdemos.wrappixel.com/spike/dist/minisidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Apr 2024 02:16:23 GMT -->

</html>