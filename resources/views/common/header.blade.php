<div class="horizontal-menu">
    <nav class="bottom-navbar">
      <div class="container">
          <ul class="nav page-navigation">
            <li class="nav-item {{isset($nav_home) ? $nav_home : ''}}">
              <a class="nav-link" href="{{route('home')}}">
                <span class="logo-icon mdi menu-icon">
                  <img src="{{asset('asset/images/icon.jpg')}}" alt="">
                </span>
              </a>
            </li>
            @if (!Auth::guard('store')->user())
              <li class="nav-item {{isset($nav_store) ? $nav_store : ''}}">
                <a class="nav-link" href="{{route('store.register')}}">
                  <i class="mdi mdi-account-plus menu-icon"></i>
                  <span class="menu-title">企業登録</span>
                </a>
              </li>
            @endif
            <li class="nav-item {{isset($nav_product) ? $nav_product : ''}}">
                <a class="nav-link" href="{{route('product.index')}}">
                  <i class="mdi mdi-cube-outline menu-icon"></i>
                  <span class="menu-title">商品管理</span>
                  <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="nav-item {{isset($nav_advertisement) ? $nav_advertisement : ''}}">
                <a class="nav-link" href="{{route('advertisement.index')}}">
                  <i class="mdi mdi-chart-areaspline menu-icon"></i>
                  <span class="menu-title">広告登録</span>
                  <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="nav-item {{isset($nav_report) ? $nav_report : ''}}">
                <a class="nav-link" href="{{route('report.index')}}">
                  <i class="mdi mdi-finance menu-icon"></i>
                  <span class="menu-title">レポート</span>
                  <i class="menu-arrow"></i>
                </a>
            </li>
            @if (Auth::guard('store')->user())
            <li class="nav-item">
                <a class="nav-link">
                  <i class="mdi mdi-account-convert menu-icon"></i>
                  <span class="menu-title">{{Auth::guard('store')->user()->name}}</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                  <ul>
                      <li class="nav-item"><a class="nav-link" href="{{route('store.logout')}}">ログアウト</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{route('store.profile.index')}}">プロフィール</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{route('store.profile.showChangePassword')}}">パスワードを変更する</a></li>
                  </ul>
                </div>
            </li>
            @else
              <li class="nav-item {{isset($nav_auth) ? $nav_auth : ''}}">
                <a class="nav-link" href="{{route('store.logout')}}">
                  <i class="mdi mdi-account-convert menu-icon"></i>
                  <span class="menu-title">ログイン</span>
                  <i class="menu-arrow"></i>
                </a>
              </li>
            @endif

          </ul>
      </div>
    </nav>
  </div>
