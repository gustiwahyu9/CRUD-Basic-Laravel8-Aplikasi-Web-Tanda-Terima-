<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <!-- <img src="{{asset('admin/logobarufix.png')}}" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light" style="margin-left: 20px;">Aplikasi Tanda Terima</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image ml-5">
                <img src="{{auth()->user()->getAvatar()}}" class="img-circle elevation-2" alt="image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->username}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                    <li class="nav-item has-treeview">
                        <a href="/penerima" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Penerima
                            </p>
                        </a>
</aside>