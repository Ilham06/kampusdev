<div class="page-header">
    <nav class="navbar navbar-expand-lg d-flex justify-content-between">
        <div class="" id="navbarNav">
            <ul class="navbar-nav" id="leftNav">
                <li class="nav-item">
                    <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <h4 class="fw-bold">Kampus Dev .</h4>
                    </a>
                </li>
            </ul>


        </div>
        <div class="logo">
            <a class="navbar-brand" href="#"></a>
        </div>
        <div class="" id="headerNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><img
                            src="../../assets/images/avatars/profile-image.png" alt=""></a>
                    <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                        <a class="dropdown-item" href="#"><i data-feather="user"></i>Profile</a>
                        <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                            @csrf
                            <button class="dropdown-item text-danger fw-bold rounded-1"
                                onclick="return confirm('Apakah anda ingin logout?')">Logout</button>

                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
