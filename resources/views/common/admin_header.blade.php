

<div class="horizontal-menu">
    <nav class="bottom-navbar">
      <div class="container">
          <ul class="nav page-navigation">
            <li class="">
              <a class="nav-link" href="{{route('store.index')}}">
                <span class="logo-icon mdi menu-icon">
                  <img src="{{asset('asset/images/icon.jpg')}}" alt="">
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('store.index')}}">
                <i class="mdi mdi-file-document-box menu-icon"></i>
                <span class="menu-title">企業管理</span>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.advertisement.index')}}" class="nav-link">
                  <i class="mdi mdi-cube-outline menu-icon"></i>
                  <span class="menu-title">広告管理</span>
                  <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.report.index')}}" class="nav-link">
                  <i class="mdi mdi-chart-areaspline menu-icon"></i>
                  <span class="menu-title">レボート</span>
                  <i class="menu-arrow"></i>
                </a>
            </li>

                <?php
                   if(Session::get('login')){
                   ?>
                   <li class="nav-item">
                      <a href="" class="nav-link">
                        <i class="mdi mdi-account-convert menu-icon"></i>
                        <span class="menu-title">{{Auth::user()->name}}</span>
                        <i class="menu-arrow"></i>
                      </a>
                      <div class="submenu">
                          <ul>
                              <li class="nav-item"><a class="nav-link" href="{{route('admin.logout')}}">ログアウト</a></li>
                          </ul>
                      </div>
                   </li>
                   <?php
                        }
                   else{
                   ?>
                        <li class="nav-item">
                            <a href="{{route('admin.login')}}" class="nav-link">
                                 <i class="mdi mdi-account-convert menu-icon"></i>
                                    <span class="menu-title">ログイン</span>
                                 <i class="menu-arrow"></i>
                            </a>
                        </li>
                        <?php
                        }
                        ?>
            </li>
          </ul>
      </div>
    </nav>
  </div>
