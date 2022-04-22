<!DOCTYPE html>
<html lang="en">

  

<head>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Geeks is a fully responsive and yet modern premium bootstrap template. Geek is feature-rich components and beautifully designed pages that help you create the best possible website and web application projects." />
<meta name="keywords" content="Geeks UI, bootstrap, bootstrap 5, Course, Sass, landing, Marketing, admin themes, bootstrap admin, bootstrap dashboard, ui kit, web app, multipurpose" />




<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../../assets/images/favicon/favicon.ico">


<!-- Libs CSS -->
<link href="../../assets/video/projet ecole-2_embed.css" rel="stylesheet" type="text/css">
<link href="../../assets/fonts/feather/feather.css" rel="stylesheet">
<link href="../../assets/libs/%40fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="../../assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
<link href="../../assets/libs/dragula/dist/dragula.min.css" rel="stylesheet" />
<link href="../../assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
<link href="../../assets/libs/dropzone/dist/dropzone.css" rel="stylesheet" />
<link href="../../assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
<link href="../../assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="../../assets/libs/%40yaireo/tagify/dist/tagify.css" rel="stylesheet">
<link href="../../assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
<link href="../../assets/libs/tippy.js/dist/tippy.css" rel="stylesheet">
<link href="../../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="../../assets/libs/prismjs/themes/prism-okaidia.css" rel="stylesheet">
<!-- Theme CSS -->
<link rel="stylesheet" href="../../assets/css/theme.min.css">
    <title>Title | Geeks - Academy Admin Template</title>
  </head>
  @livewireStyles
<body>
    <div id="db-wrapper">
      <!-- navbar vertical -->
       <!-- Sidebar -->
@include('navbar.navbar-admin')
  <div id="page-content">
        <div class="header">
    <!-- navbar -->
    <nav class="navbar-default navbar navbar-expand-lg">
        <a id="nav-toggle" href="#">
            <i class="fe fe-menu"></i>
        </a>
        <div class="ms-lg-3 d-none d-md-none d-lg-block">
            <!-- Form -->
            <form class="d-flex align-items-center">
                <span class="position-absolute ps-3 search-icon">
                        <i class="fe fe-search"></i>
                    </span>
                <input type="search" class="form-control form-control-sm ps-6" placeholder="Search Entire Dashboard" />
            </form>
        </div>
        <!--Navbar nav -->
        <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
            <li class="dropdown stopevent">
                <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary text-muted" href="#" role="button" id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fe fe-bell"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg" aria-labelledby="dropdownNotification">
                    <div class=" ">
                        <div class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                            <span class="h4 mb-0">Notifications</span>
                            <a href="# " class="text-muted">
                                <span class="align-middle">
                                        <i class="fe fe-settings me-1"></i>
                                    </span>
                            </a>
                        </div>
                        <!-- List group -->
                        <ul class="list-group list-group-flush notification-list-scroll">
                            <li class="list-group-item bg-light">
                                <div class="row">
                                    <div class="col">
                                        <a class="text-body" href="#">
                                        <div class="d-flex">
                                            <img
                                                src="../../assets/images/avatar/avatar-1.jpg"
                                                alt=""
                                                class="avatar-md rounded-circle"
                                            />
                                            <div class="ms-3">
                                                <h5 class="fw-bold mb-1">Kristin Watson:</h5>
                                                <p class="mb-3">
                                                    Krisitn Watsan like your comment on course
                                                    Javascript Introduction!
                                                </p>
                                                <span class="fs-6 text-muted">
                                                    <span
                                                        ><span
                                                            class="fe fe-thumbs-up text-success me-1"
                                                        ></span
                                                        >2 hours ago,</span
                                                    >
                                                    <span class="ms-1">2:19 PM</span>
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-auto text-center me-2">
                                        <a
                                            href="#"
                                            class="badge-dot bg-info"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"

                                            title="Mark as read"
                                        >
                                        </a>
                                        <div>
                                            <a
                                                href="#"
                                                class="bg-transparent"
                                                data-bs-toggle="tooltip"
                                                data-bs-placement="top"

                                                title="Remove"
                                            >
                                                <i class="fe fe-x text-muted"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <a class="text-body" href="#">
                                        <div class="d-flex">
                                            <img
                                                src="../../assets/images/avatar/avatar-2.jpg"
                                                alt=""
                                                class="avatar-md rounded-circle"
                                            />
                                            <div class="ms-3">
                                                <h5 class="fw-bold mb-1">Brooklyn Simmons</h5>
                                                <p class="mb-3">
                                                    Just launched a new Courses React for Beginner.
                                                </p>
                                                <span class="fs-6 text-muted">
                                                    <span
                                                        ><span
                                                            class="fe fe-thumbs-up text-success me-1"
                                                        ></span
                                                        >Oct 9,</span
                                                    >
                                                    <span class="ms-1">1:20 PM</span>
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-auto text-center me-2">
                                        <a
                                            href="#"
                                            class="badge-dot bg-secondary"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"

                                            title="Mark as unread"
                                        >
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <a class="text-body" href="#">
                                        <div class="d-flex">
                                            <img
                                                src="../../assets/images/avatar/avatar-3.jpg"
                                                alt=""
                                                class="avatar-md rounded-circle"
                                            />
                                            <div class="ms-3">
                                                <h5 class="fw-bold mb-1">Jenny Wilson</h5>
                                                <p class="mb-3">
                                                    Krisitn Watsan like your comment on course
                                                    Javascript Introduction!
                                                </p>
                                                <span class="fs-6 text-muted">
                                                    <span
                                                        ><span
                                                            class="fe fe-thumbs-up text-info me-1"
                                                        ></span
                                                        >Oct 9,</span
                                                    >
                                                    <span class="ms-1">1:56 PM</span>
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-auto text-center me-2">
                                        <a
                                            href="#"
                                            class="badge-dot bg-secondary"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"

                                            title="Mark as unread"
                                        >
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <a class="text-body" href="#">
                                        <div class="d-flex">
                                            <img
                                                src="../../assets/images/avatar/avatar-4.jpg"
                                                alt=""
                                                class="avatar-md rounded-circle"
                                            />
                                            <div class="ms-3">
                                                <h5 class="fw-bold mb-1">Sina Ray</h5>
                                                <p class="mb-3">
                                                    You earn new certificate for complete the Javascript
                                                    Beginner course.
                                                </p>
                                                <span class="fs-6 text-muted">
                                                    <span
                                                        ><span
                                                            class="fe fe-award text-warning me-1"
                                                        ></span
                                                        >Oct 9,</span
                                                    >
                                                    <span class="ms-1">1:56 PM</span>
                                                </span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-auto text-center me-2">
                                        <a
                                            href="#"
                                            class="badge-dot bg-secondary"
                                            data-bs-toggle="tooltip"
                                            data-bs-placement="top"

                                            title="Mark as unread"
                                        >
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="border-top px-3 pt-3 pb-0">
                            <a href="../notification-history.html" class="text-link fw-semi-bold">
                                    See all Notifications
                                </a>
                        </div>
                    </div>
                </div>
            </li>
            <!-- List -->
            <li class="dropdown ms-2">
                <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="avatar avatar-md avatar-indicators avatar-online">
                        <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                    <div class="dropdown-item">
                        <div class="d-flex">
                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                            </div>
                            <div class="ms-3 lh-1">
                                <h5 class="mb-1">Annette Black</h5>
                                <p class="mb-0 text-muted">annette@geeksui.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled">
                        <li class="dropdown-submenu dropstart-lg">
                            <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                <i class="fe fe-circle me-2"></i> Status
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span class="badge-dot bg-success me-2"></span> Online
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span class="badge-dot bg-secondary me-2"></span> Offline
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span class="badge-dot bg-warning me-2"></span> Away
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span class="badge-dot bg-danger me-2"></span> Busy
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../profile-edit.html">
                                <i class="fe fe-user me-2"></i> Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../student-subscriptions.html">
                                <i class="fe fe-star me-2"></i> Subscription
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fe fe-settings me-2"></i> Settings
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled">
                        <li>
                            <a class="dropdown-item" href="../../index.html">
                                <i class="fe fe-power me-2"></i> Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</div>


    @yield('content')

      </div>
    </div>
  <!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row align-items-center g-0 border-top py-2">
            <!-- Desc -->
            <div class="col-md-6 col-12 text-center text-md-start">
                <span>© {{date('d M,Y')}} Geeks. All Rights Reserved.</span>
            </div>
              <!-- Links -->
            <div class="col-12 col-md-6">
                <nav class="nav nav-footer justify-content-center justify-content-md-end">
                    <a class="nav-link active ps-0" href="#">Privacy</a>
                    <a class="nav-link" href="#">Terms </a>
                    <a class="nav-link" href="#">Feedback</a>
                    <a class="nav-link" href="#">Support</a>
                </nav>
            </div>
        </div>
    </div>
</div>


  <body>
<script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/libs/odometer/odometer.min.js"></script>
<script src="../../assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../../assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="../../assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="../../assets/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="../../assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
<script src="../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="../../assets/libs/quill/dist/quill.min.js"></script>
<script src="../../assets/libs/file-upload-with-preview/dist/file-upload-with-preview.min.js"></script>
<script src="../../assets/libs/dragula/dist/dragula.min.js"></script>
<script src="../../assets/libs/bs-stepper/dist/js/bs-stepper.min.js"></script>
<script src="../../assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="../../assets/libs/jQuery.print/jQuery.print.js"></script>
<script src="../../assets/libs/prismjs/prism.js"></script>
<script src="../../assets/libs/prismjs/components/prism-scss.min.js"></script>
<script src="../../assets/libs/%40yaireo/tagify/dist/tagify.min.js"></script>
<script src="../../assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
<script src="../../assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
<script src="../../assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
<script src="../../assets/libs/typed.js/lib/typed.min.js"></script>
<script src="../../assets/libs/jsvectormap/dist/js/jsvectormap.min.js"></script>
<script src="../../assets/libs/jsvectormap/dist/maps/world.js"></script>
<script src="../../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="../../assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="../../assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
<script src="../../assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
        ClassicEditor
                .create( document.querySelector( '#editor2' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
</script>
<!-- Theme JS -->
<script src="../../assets/js/theme.min.js"></script>
<script>
document.getElementById("videoUpload")
.onchange = function(event) {
  let file = event.target.files[0];
  let blobURL = URL.createObjectURL(file);
  document.querySelector("video").src = blobURL;
}
</script>
@livewireScripts

  </body>



</html>