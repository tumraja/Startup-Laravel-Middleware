<div class="sidebar" data-background-color="white" data-active-color="danger">
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active">
                <a href="{{ route('dashboard') }}">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ route('account') }}">
                    <i class="ti-user"></i>
                    <p>My Account</p>
                </a>
            </li>
            <li>
                <a href="{{ route('users') }}">
                    <i class="ti-view-list-alt"></i>
                    <p>Manage Users</p>
                </a>
            </li>
            <li>
                <a href="{{ route('follow-me') }}">
                    <i class="ti-pencil-alt2"></i>
                    <p>Say Hi</p>
                </a>
            </li>
        </ul>
    </div>
</div>