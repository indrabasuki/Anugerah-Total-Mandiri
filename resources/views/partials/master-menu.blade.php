<div class="card card-primary card-outline">
    <div class="card-header">
    </div>
    <div class="card-body p-0" style="display: block;">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item {{ request()->segment(2) == 'user' ? 'bg-primary' : '' }}">
                <a href="{{ route('user.index') }}" class="nav-link ">
                    <i class="fas fa-users"></i> {{ __('Users') }}
                </a>
            </li>
            <li class="nav-item {{ request()->segment(2) == 'role' ? 'bg-primary' : '' }}">
                <a href="{{ route('role.index') }}" class="nav-link ">
                    <i class="fas fa-users-cog"></i> {{ __('User Role') }}
                </a>
            </li>

        </ul>
    </div>
</div>
