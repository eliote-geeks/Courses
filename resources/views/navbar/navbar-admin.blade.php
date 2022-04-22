 <nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="../../index.html">
            <img src="../../assets/images/brand/logo/logo-inverse.svg" alt="" />
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link   collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navDashboard" aria-expanded="false" aria-controls="navDashboard">
                    <i class="nav-icon fe fe-home me-2"></i> Dashboard
                </a>
                <div id="navDashboard" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item ">
                            <a class="nav-link " href="admin-dashboard.html">
                                    Overview
                                </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item ">
                            <a class="nav-link " href="dashboard-analytics.html">
                                    Analytics

                                </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navCourses" aria-expanded="false" aria-controls="navCourses">
                    <i class="nav-icon fe fe-book me-2"></i> Courses
                </a>
                <div id="navCourses"  class="collapse {{ Request::routeIs('categories.index') ? 'show' : ' ' }}
                {{ Request::routeIs('courses.index') ? 'show' : ' ' }}
                "  data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link  {{ Request::routeIs('courses.index') ? 'active' : ' ' }}" href="{{route('courses.index')}}">
                                    All Courses
                                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{ Request::routeIs('categories.index') ? 'active' : ' ' }}" href="{{route('categories.index')}}">
                                    Courses Category
                                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="admin-course-category-single.html">
                                    Category Single
                                </a>
                        </li>
                    </ul>
                </div>
            </li>
             <!-- Nav item -->
             <li class="nav-item">
                <a class="nav-link   collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navProfile" aria-expanded="false" aria-controls="navProfile">
                    <i class="nav-icon fe fe-user me-2"></i> User
                </a>
                <div id="navProfile" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="admin-instructor.html">
                                    Instructor
                                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="admin-students.html">Students</a
                                >
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Nav item -->
                <li class="nav-item ">
                    <a
                        class="nav-link   collapsed  "
                        href="#"
                        data-bs-toggle="collapse"
                        data-bs-target="#navCMS"
                        aria-expanded="false"
                        aria-controls="navCMS"
                    >
                        <i class="nav-icon fe fe-book-open me-2"></i> CMS
                    </a>
                            <div id="navCMS" class="collapse  " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link   " href="admin-cms-overview.html">
                                    Overview
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " href="admin-cms-post.html">
                                    All Post
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="admin-cms-post-new.html">
                                    New Post
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="admin-cms-post-category.html">
                                    Category
                                </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                         <!-- Nav item -->
                         <li class="nav-item ">
                            <a
                                class="nav-link"
                                href="#"
                                data-bs-toggle="collapse"
                                data-bs-target="#navProject"
                                aria-expanded="false"
                                aria-controls="navProject"
                            >
                                <i class="nav-icon fe fe-file me-2"></i> Project
                            </a>
                                    <div id="navProject" class="collapse    " data-bs-parent="#sideNavbar">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link   " href="project-grid.html">
                                            Grid
                                        </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link  " href="project-list.html">
                                           List
                                        </a>
                                            </li>
                                            <li class="nav-item">
                                                <a
                                class="nav-link   collapsed  "
                                href="#"
                                data-bs-toggle="collapse"
                                data-bs-target="#navprojectSingle"
                                aria-expanded="false"
                                aria-controls="navprojectSingle"
                            >

                                            Single
                                        </a>
                                                <div id="navprojectSingle" class="collapse " data-bs-parent="#navProject">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link " href="project-overview.html">
                                                        Overview
                                                    </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link " href="project-task.html">
                                                        Task
                                                    </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link " href="project-budget.html">
                                                        Budget
                                                    </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link " href="project-team.html">
                                                        Team
                                                    </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link " href="project-files.html">
                                                        Files
                                                    </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link " href="project-summary.html">
                                                        Summary
                                                    </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="add-project.html">
                                            Create Project
                                        </a>
                                            </li>


                                        </ul>
                                    </div>
                                </li>





                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
                                <i class="nav-icon fe fe-lock me-2"></i> Authentication
                            </a>
                            <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="../sign-in.html">Sign In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " href="../sign-up.html">Sign Up</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="../forget-password.html">
                                    Forget Password
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " href="notification-history.html">
                                    Notifications
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  " href="../404-error.html"> 404 Error</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="nav-divider"></div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">Apps</div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link " href="chat-app.html">
                                <i class="nav-icon fe fe-message-square me-2"></i> Chat

                            </a>
                        </li>
                              <!-- Nav item -->
        <li class="nav-item">
            <a class="nav-link " href="task-kanban.html">
                <i class="nav-icon mdi mdi-trello me-2"></i>
                Task
            </a>
        </li>
                        <li class="nav-item">
                            <div class="nav-divider"></div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">Components</div>
                        </li>
                         <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navTables" aria-expanded="false" aria-controls="navTables">
                                <i class="nav-icon fe fe-database me-2"></i> Tables
                            </a>
                            <div id="navTables" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="basic-table.html">
                                    Basic
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="datatables.html">
                                            Data Tables
                                </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <!-- Nav item -->
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link " href="../help-center.html">
                                <i class="nav-icon fe fe-help-circle me-2"></i> Help Center

                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navSiteSetting" aria-expanded="false" aria-controls="navSiteSetting">
                                <i class="nav-icon fe fe-settings me-2"></i> Site Setting
                            </a>
                            <div id="navSiteSetting" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="setting-general.html">
                                    General
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="setting-google.html">
                                    Google
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="setting-social.html">
                                    Social
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="setting-social-login.html">
                                    Social Login
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="setting-payment.html">
                                    Payment
                                </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="setting-smpt.html">
                                    SMPT
                                </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navMenuLevel" aria-expanded="false" aria-controls="navMenuLevel">
                                <i class="nav-icon fe fe-corner-left-down me-2"></i> Menu Level
                            </a>
                            <div id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="#" data-bs-toggle="collapse" data-bs-target="#navMenuLevelSecond" aria-expanded="false" aria-controls="navMenuLevelSecond">
                                    Two Level
                                </a>
                                        <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#">NavItem 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#">NavItem 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  collapsed  " href="#" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThree" aria-expanded="false" aria-controls="navMenuLevelThree">
                                    Three Level
                                </a>
                                        <div id="navMenuLevelThree" class="collapse " data-bs-parent="#navMenuLevel">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThreeOne" aria-expanded="false" aria-controls="navMenuLevelThreeOne">
                                                NavItem 1
                                            </a>
                                                    <div id="navMenuLevelThreeOne" class="collapse collapse " data-bs-parent="#navMenuLevelThree">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link " href="#">
                                                            NavChild Item 1
                                                        </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#">Nav Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="nav-divider"></div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">Documentation</div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="../../docs/index.html">
                                <i class="nav-icon fe fe-clipboard me-2"></i> Documentation
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="../../docs/changelog.html">
                                <i class="nav-icon fe fe-git-pull-request me-2"></i> Changelog
                                <span class="badge bg-primary ms-2">2.2.3</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Card -->
                    <div class="card bg-dark-primary shadow-none text-center mx-4 my-8">
                        <div class="card-body py-6">
                            <img src="../../assets/images/background/giftbox.png" alt="" />
                            <div class="mt-4">
                                <h5 class="text-white">Unlimited Access</h5>
                                <p class="text-white-50 fs-6">
                                    Upgrade your plan from a Free trial, to select ‘Business Plan’. Start Now
                                </p>
                                <a href="#" class="btn btn-white btn-sm mt-2">Upgrade Now</a>
                            </div>
                        </div>
                    </div>
                </div>
</nav>