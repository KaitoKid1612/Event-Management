<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="/admin" class="brand-link">
        <span class="brand-text font-weight-light" style="margin-left: 80px;">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/template/admin/dist/img/avatar_cute.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bars"></i>
                        <p> Loại Sự Kiện
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/menus/add" class="nav-link">
                                <i class="nav-icon fas fa-burn"></i>
                                <p>Thêm Loại Sự Kiện</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/menus/list" class="nav-link">
                                <i class="nav-icon fas fa-burn"></i>
                                <p>Danh Sách Loại Sự Kiện</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p> Sự Kiện
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/events/add" class="nav-link">
                                <i class="nav-icon fab fa-phabricator"></i>
                                <p>Thêm Sự Kiện</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/events/confirm" class="nav-link">
                                <i class="nav-icon fab fa-phabricator"></i>
                                <p>Duyệt Sự Kiện</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/events/list" class="nav-link">
                                <i class="nav-icon fab fa-phabricator"></i>
                                <p>Quản lý sự kiện</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/events/attendence" class="nav-link">
                                <i class="nav-icon fab fa-phabricator"></i>
                                <p>Điểm danh</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/events/end" class="nav-link">
                                <i class=" nav-icon fab fa-phabricator"></i>
                                <p>Sự kiện đã kết thúc</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-images"></i>
                        <p> Thống Kê
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/statistical/student" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Thống kê sinh viên</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/statistical/event" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Thống kê sự kiện</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-people-arrows"></i>
                        <p> Quản trị
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/roles/list" class="nav-link">
                                <i class="nav-icon fas fa-universal-access"></i>
                                <p>Danh Sách Vai Trò</p>
                            </a>
                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/users/list" class="nav-link">
                                <i class="nav-icon fas fa-universal-access"></i>
                                <p>Danh sách người dùng</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('students.list')}}" class="nav-link">
                                <i class="nav-icon fas fa-universal-access"></i>
                                <p>Danh Sách Sinh Viên</p>
                            </a>
                        </li>

                    </ul>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-people-arrows"></i>
                        <p> Quản lý lớp học
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('classes.list')}}" class="nav-link">
                                <i class="nav-icon fas fa-universal-access"></i>
                                <p>Danh Sách Lớp Học</p>
                            </a>
                        </li>

                    </ul>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
