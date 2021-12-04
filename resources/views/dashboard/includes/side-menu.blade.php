<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="{{ route('admin.dashboard') }}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a></li>

        <li class=" navigation-header">
          <span data-i18n="nav.category.layouts">Pages</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
          data-placement="right" data-original-title="Layouts"></i>
        </li>



{{-- ===================================== CATEGORY ===================================================== --}}
        <li class=" nav-item">
            <a href="#"><i class="ft-grid"></i>
                <span class="menu-title" data-i18n="nav.page_layouts.main">Categorys</span><span class="badge badge badge-info badge-pill float-right mr-2">{{$main_cat->count()}}</span>
            </a>
          <ul class="menu-content">

            <li>
                <a class="ft-list" href="{{ route('admin.maincategories') }}" data-i18n="nav.page_layouts.3_columns.main"> All Category</a>
            </li>
            <li>
                <a class="ft-plus-circle" href="{{ route('admin.maincategories.create') }}" data-i18n="nav.page_layouts.3_columns.main"> Add New Category</a>
            </li>

          </ul>
        </li>
{{-- ========================================================================================== --}}

{{-- ===================================== Brand ===================================================== --}}
        <li class=" nav-item">
            <a href="#"><i class="ft-clipboard"></i>
                <span class="menu-title" data-i18n="nav.page_layouts.main">Brands</span><span class="badge badge badge-info badge-pill float-right mr-2">{{$brand->count()}}</span>
            </a>
          <ul class="menu-content">

            <li>
                <a class="ft-list" href="{{ route('admin.brands') }}" data-i18n="nav.page_layouts.3_columns.main"> All Brand</a>
            </li>
            <li>
                <a class="ft-plus-circle" href="{{ route('admin.brands.create') }}" data-i18n="nav.page_layouts.3_columns.main"> Add New Brand</a>
            </li>

          </ul>
        </li>
{{-- ========================================================================================== --}}


{{-- ===================================== PRODUCT ===================================================== --}}
        <li class=" nav-item">
            <a href="#"><i class="ft-shopping-cart"></i>
                <span class="menu-title" data-i18n="nav.page_layouts.main">Products</span>
            </a>
          <ul class="menu-content">

            <li>
                <a class="ft-list" href="#" data-i18n="nav.page_layouts.3_columns.main"> All Products</a>
            </li>
            <li>
                <a class="ft-plus-circle" href="#" data-i18n="nav.page_layouts.3_columns.main"> Add New Product</a>
            </li>

          </ul>
        </li>
{{-- ========================================================================================== --}}

<li class=" navigation-header">
    <span data-i18n="nav.category.layouts">Profile</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
    data-placement="right" data-original-title="Layouts"></i>
  </li>

  {{-- ===================================== profile ===================================================== --}}
  <li class=" nav-item">
    <a href="#"><i class="icon-users"></i>
        <span class="menu-title" data-i18n="nav.page_layouts.main">Profile</span>
    </a>
</li>
  <li class=" nav-item">
    <a href="#"><i class="la la-arrow-circle-o-right"></i>
        <span class="menu-title" data-i18n="nav.page_layouts.main">Logout</span>
    </a>
</li>
{{-- ========================================================================================== --}}



      </ul>
    </div>
  </div>
