<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend') }}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Rukada</h4>
        </div>
        <div class="toggle-icon ms-auto">
            <i class='bx bx-arrow-to-left'></i>
        </div>
    </div>

    <!-- navigation -->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('admin.dashboard')}}">
                <div class="parent-icon">
                    <i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="#" class="has-arrow">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('add.category')}}">
                        <i class="bx bx-right-arrow-alt"></i>Add
                    </a>
                </li>
                <li>
                    <a href="{{route('show.category')}}">
                        <i class="bx bx-right-arrow-alt"></i>Manage
                    </a>
                </li>
            </ul>
        </li>
         <li>
            <a href="#" class="has-arrow">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Sub-Category</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('add.subcategory')}}">
                        <i class="bx bx-right-arrow-alt"></i>Add
                    </a>
                </li>
                <li>
                    <a href="{{route('show.subcategory')}}">
                        <i class="bx bx-right-arrow-alt"></i>Manage
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="has-arrow">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Brand</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('add.brand')}}">
                        <i class="bx bx-right-arrow-alt"></i>Add
                    </a>
                </li>
                <li>
                    <a href="{{route('show.brand')}}">
                        <i class="bx bx-right-arrow-alt"></i>Manage
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="has-arrow">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Product</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('add.product')}}">
                        <i class="bx bx-right-arrow-alt"></i>Add
                    </a>
                </li>
                <li>
                    <a href="{{route('show.product')}}">
                        <i class="bx bx-right-arrow-alt"></i>Manage
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- end navigation -->
</div>
