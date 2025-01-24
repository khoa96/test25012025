<!-- header for pc -->
<header class="main-header">
  <div class="container-fluid">
    <div class="row g-0 justify-content-between align-items-center">
      <div class="col-auto col-logo">
        <!-- logo for pv here -->
        <a href="index.html" class="logo">
          <img src="./images/logo.svg" alt="Bitu" class="d-none d-lg-block">
          <img src="./images/logo_sp.svg" alt="Bitu" class=" d-block d-lg-none">
        </a>
      </div>

      <div class="col-auto col-nav">
        <ul class="main-nav d-none d-lg-block">
          <li><a href="#" class="active">Người đi làm</a></li>
          <li><a href="#">Về Bitu</a></li>
          <li><a href="#">Giảng viên</a></li>
          <li><a href="#">Bitu Kids</a></li>
          <li><a href="#">Học viên review</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="Tuyển dụng">Tuyển dụng</a></li>
        </ul>

        <div class="box-language">
          <div class="dropdown">
            <a href="#" id="languageDropdown" class="dropdown-toggle" role="button" data-bs-toggle="dropdown"
              data-bs-offset="0,6" aria-expanded="false">
              <img src="images/lang_en.svg" alt="EN">
              <span>EN</span>
            </a>

            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
              <li>
                <a class="dropdown-item" href="#">
                  <img src="images/lang_en.svg" alt="EN">
                  <span>EN</span>
                </a>
              </li>

              <li>
                <a class="dropdown-item" href="#">
                  <img src="images/lang_thai.svg" alt="THAI">
                  <span>THAI</span>
                </a>
              </li>

              <li>
                <a class="dropdown-item" href="#">
                  <img src="images/lang_vn.svg" alt="VN">
                  <span>VN</span>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="list-authen list-authen-for-pc">
          <button class="btn-authen btn-signin">Sign in</button>
          <button class="btn-authen btn-signup">Sign up</button>
        </div>

        <button class="btn border-0 d-block d-lg-none btn-menu" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.42871 4.42871H18.5716M1.42871 10.143H18.5716M1.42871 15.8573H18.5716" stroke="#1A202C"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>
<!-- /END .main-header -->


<!-- header for mobile -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">
      <!-- logo mobile here -->
      <a href="index.html" class="logo"><img src="images/logo_sp.svg" alt="Bitu"></a>
    </h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <!-- content of menu -mobile -->
  <div class="offcanvas-body">
    <ul class="main-nav">
      <li><a href="#" class="active">Người đi làm</a></li>
      <li><a href="#">Về Bitu</a></li>
      <li><a href="#">Giảng viên</a></li>
      <li><a href="#">Bitu Kids</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Tuyển dụng</a></li>
    </ul>
    <div class="list-authen">
      <button class="btn-authen btn-signin">Sign in</button>
      <button class="btn-authen btn-signup">Sign up</button>
    </div>
  </div>
</div>
<!-- /END .offcanvas -->