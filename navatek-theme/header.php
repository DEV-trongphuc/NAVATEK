<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="sdi-header">
    

    <div class="sdi-navbar-main">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="sdi-logo">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/LOGO.png" alt="NavaTek - Giải pháp hạ tầng CNTT doanh nghiệp & Máy chủ AI On-Premise" width="168" height="38" fetchpriority="high" style="height: 38px; width: auto; object-fit: contain;">
      </a>

      <!-- Center Nav Menu (with Submenu Dropdowns) -->
      <nav class="sdi-nav-menu">
        <!-- 1. Giải pháp -->
        <div class="sdi-nav-item has-dropdown">
          <a href="<?php echo esc_url(home_url('/giai-phap-ai-server-local-llm/')); ?>" class="sdi-nav-link">
            <span>Giải pháp</span>
            <i data-lucide="chevron-down" class="sdi-nav-arrow"></i>
          </a>
          <div class="sdi-dropdown-menu">
            <div class="sdi-dropdown-grid">
              <a href="<?php echo esc_url(home_url('/giai-phap-ai-server-local-llm/')); ?>" class="sdi-dropdown-item">
                <div class="sdi-dropdown-icon"><i data-lucide="cpu"></i></div>
                <div class="sdi-dropdown-text">
                  <div class="sdi-dropdown-title">AI Server & Local LLM</div>
                  <div class="sdi-dropdown-desc">Trạm tính toán AI cục bộ bảo mật cao</div>
                </div>
              </a>
              <a href="<?php echo esc_url(home_url('/combo-tron-bo/')); ?>" class="sdi-dropdown-item">
                <div class="sdi-dropdown-icon"><i data-lucide="boxes"></i></div>
                <div class="sdi-dropdown-text">
                  <div class="sdi-dropdown-title">Combo Hạ Tầng Trọn Bộ</div>
                  <div class="sdi-dropdown-desc">Mini PC + eGPU cài sẵn Plug & Play</div>
                </div>
              </a>
              <a href="<?php echo esc_url(home_url('/giai-phap-ai-server-local-llm/#tu-dong-hoa')); ?>" class="sdi-dropdown-item">
                <div class="sdi-dropdown-icon"><i data-lucide="workflow"></i></div>
                <div class="sdi-dropdown-text">
                  <div class="sdi-dropdown-title">Tự Động Hóa Doanh Nghiệp</div>
                  <div class="sdi-dropdown-desc">Tích hợp Lark, Sapo, Apify 24/7</div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- 2. Sản phẩm -->
        <div class="sdi-nav-item has-dropdown">
          <a href="<?php echo esc_url(home_url('/may-don-le/')); ?>" class="sdi-nav-link">
            <span>Sản phẩm</span>
            <i data-lucide="chevron-down" class="sdi-nav-arrow"></i>
          </a>
          <div class="sdi-dropdown-menu">
            <div class="sdi-dropdown-grid">
              <a href="<?php echo esc_url(home_url('/may-don-le/')); ?>" class="sdi-dropdown-item">
                <div class="sdi-dropdown-icon"><i data-lucide="layout-grid"></i></div>
                <div class="sdi-dropdown-text">
                  <div class="sdi-dropdown-title">Tất Cả Thiết Bị B2B</div>
                  <div class="sdi-dropdown-desc">Catalog Mini PC, Workstation & Linh kiện</div>
                </div>
              </a>
              <a href="<?php echo esc_url(home_url('/chi-tiet-may-don/')); ?>" class="sdi-dropdown-item">
                <div class="sdi-dropdown-icon"><i data-lucide="monitor"></i></div>
                <div class="sdi-dropdown-text">
                  <div class="sdi-dropdown-title">Mini PC & Workstation</div>
                  <div class="sdi-dropdown-desc">Máy tính nhỏ gọn Core i9 / RTX 4090</div>
                </div>
              </a>
              <a href="<?php echo esc_url(home_url('/chi-tiet-linh-kien/')); ?>" class="sdi-dropdown-item">
                <div class="sdi-dropdown-icon"><i data-lucide="hard-drive"></i></div>
                <div class="sdi-dropdown-text">
                  <div class="sdi-dropdown-title">Linh Kiện & Gói Nâng Cấp</div>
                  <div class="sdi-dropdown-desc">RAM DDR5, SSD NVMe Gen4, eGPU Box</div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- 3. Dịch vụ -->
        <div class="sdi-nav-item has-dropdown">
          <a href="<?php echo esc_url(home_url('/dich-vu-bao-tri/')); ?>" class="sdi-nav-link">
            <span>Dịch vụ</span>
            <i data-lucide="chevron-down" class="sdi-nav-arrow"></i>
          </a>
          <div class="sdi-dropdown-menu">
            <div class="sdi-dropdown-grid">
              <a href="<?php echo esc_url(home_url('/dich-vu-bao-tri/')); ?>" class="sdi-dropdown-item">
                <div class="sdi-dropdown-icon"><i data-lucide="wrench"></i></div>
                <div class="sdi-dropdown-text">
                  <div class="sdi-dropdown-title">Dịch Vụ Bảo Trì & IT Managed</div>
                  <div class="sdi-dropdown-desc">Quản trị toàn diện, cam kết SLA 15-30 phút</div>
                </div>
              </a>
              <a href="<?php echo esc_url(home_url('/dich-vu-bao-tri/#on-site')); ?>" class="sdi-dropdown-item">
                <div class="sdi-dropdown-icon"><i data-lucide="map-pin"></i></div>
                <div class="sdi-dropdown-text">
                  <div class="sdi-dropdown-title">Hỗ Trợ Kỹ Thuật On-Site</div>
                  <div class="sdi-dropdown-desc">Kỹ sư hỗ trợ tận nơi tại TP.HCM & lân cận</div>
                </div>
              </a>
              <a href="<?php echo esc_url(home_url('/dich-vu-bao-tri/#bang-gia')); ?>" class="sdi-dropdown-item">
                <div class="sdi-dropdown-icon"><i data-lucide="badge-percent"></i></div>
                <div class="sdi-dropdown-text">
                  <div class="sdi-dropdown-title">Bảng Giá Gói Dịch Vụ</div>
                  <div class="sdi-dropdown-desc">Gói Cơ Bản, Tiêu Chuẩn & Doanh Nghiệp</div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- 4. Về NavaTek -->
        <div class="sdi-nav-item has-dropdown">
          <a href="<?php echo esc_url(home_url('/ve-navatek/')); ?>" class="sdi-nav-link">
            <span>Về NavaTek</span>
            <i data-lucide="chevron-down" class="sdi-nav-arrow"></i>
          </a>
          <div class="sdi-dropdown-menu">
            <div class="sdi-dropdown-grid">
              <a href="<?php echo esc_url(home_url('/ve-navatek/')); ?>" class="sdi-dropdown-item">
                <div class="sdi-dropdown-icon"><i data-lucide="building-2"></i></div>
                <div class="sdi-dropdown-text">
                  <div class="sdi-dropdown-title">Giới Thiệu NavaTek</div>
                  <div class="sdi-dropdown-desc">Tầm nhìn, sứ mệnh & năng lực hạ tầng</div>
                </div>
              </a>
              <a href="<?php echo esc_url(home_url('/ve-navatek/#chung-nhan')); ?>" class="sdi-dropdown-item">
                <div class="sdi-dropdown-icon"><i data-lucide="award"></i></div>
                <div class="sdi-dropdown-text">
                  <div class="sdi-dropdown-title">Chứng Nhận ASUS Gold Partner</div>
                  <div class="sdi-dropdown-desc">Đối tác phân phối chính hãng ủy quyền</div>
                </div>
              </a>
              <a href="<?php echo esc_url(home_url('/ve-navatek/#he-sinh-thai')); ?>" class="sdi-dropdown-item">
                <div class="sdi-dropdown-icon"><i data-lucide="network"></i></div>
                <div class="sdi-dropdown-text">
                  <div class="sdi-dropdown-title">Hệ Sinh Thái Nava</div>
                  <div class="sdi-dropdown-desc">NavaTek B2B & NavaStore Bán Lẻ</div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- 5. Tin tức -->
        <div class="sdi-nav-item has-dropdown">
          <a href="<?php echo esc_url(home_url('/tin-tuc/')); ?>" class="sdi-nav-link">
            <span>Tin tức</span>
            <i data-lucide="chevron-down" class="sdi-nav-arrow"></i>
          </a>
          <div class="sdi-dropdown-menu">
            <div class="sdi-dropdown-grid">
              <a href="<?php echo esc_url(home_url('/tin-tuc/')); ?>" class="sdi-dropdown-item">
                <div class="sdi-dropdown-icon"><i data-lucide="newspaper"></i></div>
                <div class="sdi-dropdown-text">
                  <div class="sdi-dropdown-title">Kho Tri Thức CNTT</div>
                  <div class="sdi-dropdown-desc">Cẩm nang, kinh nghiệm & xu hướng công nghệ</div>
                </div>
              </a>
              <a href="<?php echo esc_url(home_url('/bai-viet-chi-tiet/')); ?>" class="sdi-dropdown-item">
                <div class="sdi-dropdown-icon"><i data-lucide="book-open"></i></div>
                <div class="sdi-dropdown-text">
                  <div class="sdi-dropdown-title">Bài Viết Tiêu Biểu</div>
                  <div class="sdi-dropdown-desc">Xử lý nghẽn cổ chai PC & tối ưu phần cứng</div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- 6. Liên hệ -->
        <div class="sdi-nav-item">
          <a href="<?php echo esc_url(home_url('/du-an/')); ?>" class="sdi-nav-link">Liên hệ</a>
        </div>
      </nav>

      <!-- Search Box with Search Suggestion -->
      <div class="sdi-search-wrapper">
        <i data-lucide="search" class="sdi-search-icon" style="width: 16px; height: 16px;"></i>
        <input type="text" placeholder="Tìm sản phẩm, mã máy..." class="sdi-search-input" id="search-input-field">
        <div class="sdi-suggestion-box" id="search-suggestion-dropdown"></div>
      </div>

      <!-- Action Button Orange (#E8862E) with Charcoal Text (#16202C) -->
      <button class="sdi-btn-orange trigger-quote-modal">
        <i data-lucide="phone-call" style="width: 17px; height: 17px;"></i>
        <span>Nhận báo giá</span>
      </button>

      <!-- Hamburger Menu Toggle -->
      <button class="sdi-menu-toggle" id="mobile-menu-toggle" aria-label="Toggle navigation">
        <i data-lucide="menu" style="width: 22px; height: 22px;"></i>
      </button>
    </div>
  </header>

  <!-- Mobile Navigation Drawer (Independent Fixed Overlay) -->
  <div class="sdi-mobile-drawer" id="sdi-mobile-drawer">
    <div class="sdi-mobile-drawer-content">
      <nav class="sdi-mobile-nav-links">
        <!-- 1. Giải pháp Accordion -->
        <div class="sdi-mobile-accordion">
          <div class="sdi-mobile-accordion-toggle">
            <span>Giải pháp</span>
            <i data-lucide="chevron-down" class="sdi-mobile-arrow"></i>
          </div>
          <div class="sdi-mobile-accordion-body">
            <a href="<?php echo esc_url(home_url('/giai-phap-ai-server-local-llm/')); ?>" class="sdi-mobile-sublink"><i data-lucide="cpu"></i> AI Server & Local LLM</a>
            <a href="<?php echo esc_url(home_url('/combo-tron-bo/')); ?>" class="sdi-mobile-sublink"><i data-lucide="boxes"></i> Combo Hạ Tầng Trọn Bộ</a>
            <a href="<?php echo esc_url(home_url('/giai-phap-ai-server-local-llm/#tu-dong-hoa')); ?>" class="sdi-mobile-sublink"><i data-lucide="workflow"></i> Tự Động Hóa Doanh Nghiệp</a>
          </div>
        </div>

        <!-- 2. Sản phẩm Accordion -->
        <div class="sdi-mobile-accordion">
          <div class="sdi-mobile-accordion-toggle">
            <span>Sản phẩm</span>
            <i data-lucide="chevron-down" class="sdi-mobile-arrow"></i>
          </div>
          <div class="sdi-mobile-accordion-body">
            <a href="<?php echo esc_url(home_url('/may-don-le/')); ?>" class="sdi-mobile-sublink"><i data-lucide="layout-grid"></i> Tất Cả Thiết Bị B2B</a>
            <a href="<?php echo esc_url(home_url('/chi-tiet-may-don/')); ?>" class="sdi-mobile-sublink"><i data-lucide="monitor"></i> Mini PC & Workstation</a>
            <a href="<?php echo esc_url(home_url('/chi-tiet-linh-kien/')); ?>" class="sdi-mobile-sublink"><i data-lucide="hard-drive"></i> Linh Kiện & Nâng Cấp</a>
          </div>
        </div>

        <!-- 3. Dịch vụ Accordion -->
        <div class="sdi-mobile-accordion">
          <div class="sdi-mobile-accordion-toggle">
            <span>Dịch vụ</span>
            <i data-lucide="chevron-down" class="sdi-mobile-arrow"></i>
          </div>
          <div class="sdi-mobile-accordion-body">
            <a href="<?php echo esc_url(home_url('/dich-vu-bao-tri/')); ?>" class="sdi-mobile-sublink"><i data-lucide="wrench"></i> Dịch Vụ Bảo Trì & IT Managed</a>
            <a href="<?php echo esc_url(home_url('/dich-vu-bao-tri/#on-site')); ?>" class="sdi-mobile-sublink"><i data-lucide="map-pin"></i> Hỗ Trợ On-Site Tận Nơi</a>
            <a href="<?php echo esc_url(home_url('/dich-vu-bao-tri/#bang-gia')); ?>" class="sdi-mobile-sublink"><i data-lucide="badge-percent"></i> Bảng Giá Dịch Vụ</a>
          </div>
        </div>

        <!-- 4. Về NavaTek Accordion -->
        <div class="sdi-mobile-accordion">
          <div class="sdi-mobile-accordion-toggle">
            <span>Về NavaTek</span>
            <i data-lucide="chevron-down" class="sdi-mobile-arrow"></i>
          </div>
          <div class="sdi-mobile-accordion-body">
            <a href="<?php echo esc_url(home_url('/ve-navatek/')); ?>" class="sdi-mobile-sublink"><i data-lucide="building-2"></i> Giới Thiệu NavaTek</a>
            <a href="<?php echo esc_url(home_url('/ve-navatek/#chung-nhan')); ?>" class="sdi-mobile-sublink"><i data-lucide="award"></i> Chứng Nhận ASUS Partner</a>
            <a href="<?php echo esc_url(home_url('/ve-navatek/#he-sinh-thai')); ?>" class="sdi-mobile-sublink"><i data-lucide="network"></i> Hệ Sinh Thái Nava</a>
          </div>
        </div>

        <!-- 5. Tin tức Accordion -->
        <div class="sdi-mobile-accordion">
          <div class="sdi-mobile-accordion-toggle">
            <span>Tin tức</span>
            <i data-lucide="chevron-down" class="sdi-mobile-arrow"></i>
          </div>
          <div class="sdi-mobile-accordion-body">
            <a href="<?php echo esc_url(home_url('/tin-tuc/')); ?>" class="sdi-mobile-sublink"><i data-lucide="newspaper"></i> Kho Tri Thức CNTT</a>
            <a href="<?php echo esc_url(home_url('/bai-viet-chi-tiet/')); ?>" class="sdi-mobile-sublink"><i data-lucide="book-open"></i> Bài Viết Tiêu Biểu</a>
          </div>
        </div>

        <!-- 6. Liên hệ link -->
        <a href="<?php echo esc_url(home_url('/du-an/')); ?>" class="sdi-mobile-nav-link">Liên hệ <i data-lucide="chevron-right" style="width: 16px; height: 16px;"></i></a>
      </nav>
      
      <!-- Mobile Search inside Drawer -->
      <div class="sdi-search-wrapper" style="display: block !important; width: 100%;">
        <i data-lucide="search" class="sdi-search-icon" style="width: 16px; height: 16px;"></i>
        <input type="text" placeholder="Tìm sản phẩm, mã máy..." class="sdi-search-input" id="search-input-field-mobile">
        <div class="sdi-suggestion-box" id="search-suggestion-dropdown-mobile"></div>
      </div>

      <button class="sdi-btn-orange trigger-quote-modal" style="display: inline-flex !important;">
        <i data-lucide="phone-call" style="width: 17px; height: 17px;"></i>
        <span>Nhận báo giá</span>
      </button>
    </div>
  </div>

  <!-- Spacer matching header height (top banner + main navbar) -->
  <div class="sdi-header-spacer" style="height: 76px;"></div>
