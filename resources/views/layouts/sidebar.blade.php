<!-- Menu -->
{{-- <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme"> --}}
    	
    <aside id="layout-menu" class="menu bg-menu-theme">

    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/logoPupr.png') }}" alt="">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Batara</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        @php
            $parent = request()->route()->getPrefix();
            $child = request()->route()->uri();
        @endphp
        {{-- {{
            dd($child)
        }} --}}
        <!-- Dashboard -->
        <li class="menu-item {{ $child=='/' ? 'active' : '' }}">
            <a href="{{ url('') }}/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item {{ $child=='search' ? 'active' : '' }}">
            <a href="{{ url('') }}/search" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-search"></i>
                <div data-i18n="Search Data">Search Data</div>
            </a>
        </li>
        <li class="menu-item {{ $child=='entry' ? 'active' : '' }}">
            <a href="{{ url('') }}/entry" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-file-plus"></i>
                <div data-i18n="Entry Data">Entry Data</div>
            </a>
        </li>
        <!-- Folder -->
        <li class="menu-item {{ $parent=='/folder' ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Folder">Folder</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ $child=='folder/dokumen' ? 'active' : '' }}">
                    <a href="{{ url('') }}/folder/dokumen" class="menu-link">
                        <div data-i18n="Dokumen">Dokumen</div>
                    </a>
                </li>
                <li class="menu-item {{ $child=='folder/data-primer' ? 'active' : '' }}">
                    <a href="{{ url('') }}/folder/data-primer" class="menu-link">
                        <div data-i18n="Data Primer">Data Primer</div>
                    </a>
                </li>
                <li class="menu-item {{ $child=='folder/data-sekunder' ? 'active' : '' }}">
                    <a href="{{ url('') }}/folder/data-sekunder" class="menu-link">
                        <div data-i18n="Data Sekunder">Data Sekunder</div>
                    </a>
                </li>
            </ul>
        </li>
        
        <!-- E-Dokumen -->
        {{-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-file-doc"></i>
                <div data-i18n="Form Layouts">E-Dokumen</div>
            </a>
            <ul class="menu-sub">
            </ul>
        </li> --}}
        <!-- Folder -->
        <li class="menu-item {{ $parent=='/user' ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="User">Manajemen user</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ $child=='user/list' ? 'active' : '' }}">
                    <a href="{{ url('') }}/user/list" class="menu-link">
                        <div data-i18n="List">Data User</div>
                    </a>
                </li>
                <li class="menu-item {{ $child=='user/add' ? 'active' : '' }}">
                    <a href="{{ url('') }}/user/add" class="menu-link">
                        <div data-i18n="Tambah User">Tambah User</div>
                    </a>
                </li>
            </ul>
        </li>
        {{-- FAQ --}}
        <li class="menu-item {{ $child=='faq' ? 'active' : '' }}">
            <a href="{{ url('') }}/faq" class="menu-link">
                <i class="menu-icon tf-icons bx bx-question-mark"></i>
                <div data-i18n="FAQ">FAQ</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->
