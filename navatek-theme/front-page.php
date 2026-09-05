<?php
/**
 * Template Name: Trang Chủ
 */
get_header();
?>

<div class="sdi-page-wrapper" style="position: relative; z-index: 2; background-color: #FFFFFF;">


  <!-- ==========================================================================
       HERO SECTION (DARK BLUE NỀN TỐI #0A1128)
       ========================================================================== -->
  <section class="tech-dot-grid-light sdi-hero-section" style="background: linear-gradient(135deg, #FFFFFF 0%, #EFF6FF 100%); color: var(--sdi-text-main); position: relative; overflow: hidden;">
    <!-- Ambient radial glow decorators -->
    <div style="position: absolute; top: -30%; left: -10%; width: 500px; height: 500px; border-radius: 50%; background: radial-gradient(circle, rgba(37,99,235,0.12) 0%, transparent 70%); pointer-events: none; z-index: 0;"></div>
    <div style="position: absolute; bottom: -20%; right: -5%; width: 450px; height: 450px; border-radius: 50%; background: radial-gradient(circle, rgba(232,134,46,0.06) 0%, transparent 70%); pointer-events: none; z-index: 0;"></div>
    
    <!-- Dynamic Scanline Sweeper Beam -->
    <div class="sdi-scanline-sweeper" style="position: absolute; left: 0; right: 0; width: 100%; height: 120px; background: linear-gradient(to bottom, transparent, rgba(37, 99, 235, 0.07) 50%, transparent); opacity: 0.8; pointer-events: none; z-index: 0; animation: sdi-scanline 7s linear infinite;"></div>

    <!-- Animated Running Circuit Lines SVG -->
    <svg class="sdi-parallax-shape" data-parallax-speed="0.02" style="position: absolute; inset: 0; width: 100%; height: 100%; pointer-events: none; z-index: 0; opacity: 0.32;">
      <defs>
        <linearGradient id="grad-line-1" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" stop-color="var(--sdi-blue-accent)" stop-opacity="0.1" />
          <stop offset="50%" stop-color="var(--sdi-blue-accent)" stop-opacity="0.8" />
          <stop offset="100%" stop-color="var(--sdi-orange-cta)" stop-opacity="0.1" />
        </linearGradient>
      </defs>
      <!-- Circuit track 1 -->
      <path d="M-100,200 L350,200 L480,320 L1000,320" fill="none" stroke="url(#grad-line-1)" stroke-width="1.8" />
      <!-- Circuit track 2 -->
      <path d="M200,-100 L320,150 L320,400 L450,550" fill="none" stroke="url(#grad-line-1)" stroke-width="1.8" />
      
      <!-- Animated light packets running along tracks using standard css animations -->
      <circle r="5" fill="var(--sdi-blue-glow)" style="offset-path: path('M-100,200 L350,200 L480,320 L1000,320'); animation: flow-data 6s linear infinite; filter: drop-shadow(0 0 10px var(--sdi-blue-glow)) drop-shadow(0 0 4px var(--sdi-blue-accent));" />
      <circle r="5" fill="var(--sdi-blue-accent)" style="offset-path: path('M200,-100 L320,150 L320,400 L450,550'); animation: flow-data 8s linear infinite 3s; filter: drop-shadow(0 0 10px var(--sdi-blue-accent)) drop-shadow(0 0 4px var(--sdi-blue-glow));" />
    </svg>

    <!-- Floating SVG nodes with weights & Parallax factors -->
    <svg class="sdi-parallax-shape" data-parallax-speed="0.04" style="position: absolute; top: 15%; left: 5%; opacity: 0.48; animation: sdi-float 8s infinite alternate;" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--sdi-blue-accent)" stroke-width="2.5">
      <circle cx="12" cy="12" r="10"/>
    </svg>
    <svg class="sdi-parallax-shape" data-parallax-speed="-0.03" style="position: absolute; bottom: 15%; left: 30%; opacity: 0.45; animation: sdi-float-reverse 10s infinite alternate;" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--sdi-blue-accent)" stroke-width="2.5">
      <rect x="3" y="3" width="18" height="18" rx="2"/>
    </svg>

    <!-- Added Premium Abstract Shapes -->
    <!-- 1. Crosshair on Left -->
    <svg class="sdi-parallax-shape" data-parallax-speed="-0.06" style="position: absolute; top: 28%; left: 8%; opacity: 0.48; animation: sdi-float 7s infinite alternate;" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--sdi-blue-accent)" stroke-width="3">
      <line x1="12" y1="2" x2="12" y2="22"></line>
      <line x1="2" y1="12" x2="22" y2="12"></line>
    </svg>
    <!-- 2. Rotating Hexagon on Right -->
    <svg class="sdi-parallax-shape" data-parallax-speed="0.05" style="position: absolute; top: 38%; right: 8%; opacity: 0.42; animation: sdi-spin-slow 22s linear infinite;" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--sdi-blue-accent)" stroke-width="2.5">
      <path d="M12 2l9 4.9v9.8l-9 4.9-9-4.9V6.9z"></path>
    </svg>
    <!-- 3. Pulsing Dot with Halo on Bottom Left -->
    <div class="sdi-parallax-shape" data-parallax-speed="-0.02" style="position: absolute; bottom: 22%; left: 12%; width: 11px; height: 11px; border-radius: 50%; background: var(--sdi-blue-accent); box-shadow: 0 0 12px var(--sdi-blue-glow); opacity: 0.65;">
      <div style="position: absolute; inset: -8px; border-radius: 50%; border: 1.5px solid var(--sdi-blue-accent); animation: sdi-pulse-glow 3s infinite;"></div>
    </div>
    <!-- 4. Glowing Plus Sign Center-right -->
    <svg class="sdi-parallax-shape" data-parallax-speed="0.07" style="position: absolute; top: 62%; left: 45%; opacity: 0.58; animation: sdi-float-reverse 9s infinite alternate;" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--sdi-orange-cta)" stroke-width="3.5">
      <line x1="12" y1="5" x2="12" y2="19"></line>
      <line x1="5" y1="12" x2="19" y2="12"></line>
    </svg>
    
    <div class="container-sdi" style="position: relative; z-index: 1;">
      <div class="sdi-split-grid">
        
        <div class="sdi-animate-fade-up">
          <span class="eyebrow-badge eyebrow-badge-orange sdi-animate-fade-up sdi-delay-1" style="background: rgba(37,99,235,0.1); color: var(--sdi-blue-accent);">
            <i data-lucide="server" style="width: 14px; height: 14px;"></i>
            <span>HẠ TẦNG CNTT TINH GỌN B2B</span>
          </span>
          
          <h1 style="color: var(--sdi-navy-primary); font-size: 2.85rem; line-height: 1.2; margin-top: 0.5rem; margin-bottom: 1.5rem;" class="sdi-animate-fade-up sdi-delay-2">
            Hạ tầng CNTT tinh gọn<br><span style="color: var(--sdi-blue-accent);">Đột phá hiệu suất</span> doanh nghiệp
          </h1>
          
          <p style="color: var(--sdi-text-secondary); font-size: 1.1rem; line-height: 1.65; margin-bottom: 2.5rem; max-width: 600px;" class="sdi-animate-fade-up sdi-delay-3">
            NavaTek cung cấp Mini PC hiệu năng cao, trạm AI Server local và thiết bị mạng phân phối chính hãng kèm lắp đặt tận nơi cho doanh nghiệp, trường học.
          </p>

          <div style="display: flex; gap: 1rem; align-items: center;" class="sdi-animate-fade-up sdi-delay-3">
            <button class="sdi-btn-orange trigger-quote-modal hero-pulse" style="font-size: 1rem;">Nhận báo giá</button>
            <a href="<?php echo esc_url(home_url('/giai-phap-ai-server-local-llm/')); ?>" class="sdi-pill-btn-outline" style="border: 2px solid var(--sdi-navy-primary); color: var(--sdi-navy-primary); padding: 0.75rem 1.85rem; border-radius: 9999px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; transition: all 0.3s;">
              <span>Xem giải pháp</span>
            </a>
          </div>
        </div>

        <!-- Wireframe style illustration placeholder (BOD Requirement) -->
        <div class="sdi-animate-fade-up sdi-delay-2 hero-floating-graphic">
          <div class="wireframe-box-dashed" style="position: relative; min-height: 360px; overflow: hidden; border-color: rgba(0, 51, 102, 0.12); background: rgba(255, 255, 255, 0.65);">
            
            <!-- Video background inside placeholder -->
            <video autoplay muted loop playsinline poster="/images/b2b_it_hero.png" style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0.06; pointer-events: none;"></video>
            
            <div style="position: relative; z-index: 2; text-align: center; padding: 2.5rem 2rem;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/b2b_it_hero.png" alt="Mô hình 3D trung tâm dữ liệu và trạm máy chủ AI On-Premise NavaTek" width="480" height="240" fetchpriority="high" decoding="async" class="graphic-blend" style="max-height: 240px; width: auto; margin-bottom: 1.25rem; filter: drop-shadow(0 20px 40px rgba(0, 51, 102, 0.15));">
              <i data-lucide="play-circle" style="width: 36px; height: 36px; color: rgba(0, 51, 102, 0.3); margin-bottom: 0.5rem; display: inline-block;"></i>
              <div style="font-size: 0.8rem; color: var(--sdi-text-muted); font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em;">HỆ SINH THÁI TÍNH TOÁN CỤC BỘ</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================================================
       SECTION 1: CON SỐ UY TÍN + KHÁCH HÀNG TIÊU BIỂU (DARK BACKGROUND COHESIVE FOLD)
       ========================================================================== -->
  <section class="tech-dot-grid-dark" id="stats-section" style="position: relative; background-image: radial-gradient(rgba(255, 255, 255, 0.05) 1.5px, transparent 1.5px), linear-gradient(135deg, #0A1128 0%, #050B1A 100%) !important; background-size: 28px 28px, auto !important; background-color: #050B1A !important; overflow: hidden; border-top: 1px solid rgba(255, 255, 255, 0.06); border-bottom: 1px solid rgba(255, 255, 255, 0.06); padding: 5.5rem 0; z-index: 2;">
    <!-- Ambient glowing backgrounds for cyber theme -->
    <div style="position: absolute; top: -10%; left: -10%; width: 450px; height: 450px; border-radius: 50%; background: radial-gradient(circle, rgba(37, 99, 235, 0.12) 0%, transparent 70%); pointer-events: none; z-index: 1;"></div>
    <div style="position: absolute; bottom: -10%; right: -5%; width: 400px; height: 400px; border-radius: 50%; background: radial-gradient(circle, rgba(56, 189, 248, 0.08) 0%, transparent 70%); pointer-events: none; z-index: 1;"></div>

    <!-- Beautiful high-contrast SVG circuit tracks & flowing data packets (Bảng điện) -->
    <svg style="position: absolute; inset: 0; width: 100%; height: 100%; pointer-events: none; z-index: 1; opacity: 0.16;" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient id="grad-line-stats" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" stop-color="var(--sdi-blue-accent)" stop-opacity="0.1" />
          <stop offset="50%" stop-color="var(--sdi-blue-glow)" stop-opacity="0.8" />
          <stop offset="100%" stop-color="var(--sdi-blue-accent)" stop-opacity="0.1" />
        </linearGradient>
      </defs>
      <!-- Circuit track 1 -->
      <!-- Animated light packets running along stats tracks -->
      <circle r="4.5" fill="#38BDF8" style="offset-path: path('M-100,80 L500,80 L650,220 L500,400 L900,400 L1100,550'); animation: flow-data 8s linear infinite; filter: drop-shadow(0 0 8px #38BDF8);" />
    </svg>
    <div class="container-sdi" style="position: relative; z-index: 2;">
      
      <div class="reveal-on-scroll" style="display: flex; flex-direction: column; gap: 3.5rem; width: 100%;">
        
        <!-- Top: Large stats spread across 1 row -->
        <div class="sdi-stats-grid" style="width: 100%;">
          <div class="sdi-stat-card">
            <div class="sdi-stat-icon-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/><polyline points="9 13 12 16 22 6"/></svg>
            </div>
            <div class="sdi-stat-number count-up" data-target="50">50+</div>
            <div class="sdi-stat-label">Dự án triển khai</div>
          </div>
          
          <div class="sdi-stat-card">
            <div class="sdi-stat-icon-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>
            </div>
            <div class="sdi-stat-number count-up" data-target="1000">1.000+</div>
            <div class="sdi-stat-label">Mini PC cung cấp</div>
          </div>
          
          <div class="sdi-stat-card">
            <div class="sdi-stat-icon-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5Zm0 0a9 9 0 1 1 18 0m0 0v5a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3Z"/><path d="M21 16v2a4 4 0 0 1-4 4h-5"/></svg>
            </div>
            <div class="sdi-stat-number">24/7</div>
            <div class="sdi-stat-label">Hỗ trợ tận nơi</div>
          </div>
        </div>

        <!-- Bottom: Client logos (Running marquee) -->
        <div style="display: flex; flex-direction: column; justify-content: center; overflow: hidden; width: 100%;">
          <span style="font-size: 0.725rem; font-weight: 800; text-transform: uppercase; color: #64748B; display: block; margin-bottom: 1.5rem; letter-spacing: 0.08em; text-align: center;">Đã tin dùng dịch vụ NavaTek</span>
          <div class="sdi-marquee-wrapper">
            <div class="sdi-marquee-track">
              <!-- Group 1 -->
              <div class="sdi-marquee-group">
                <div class="sdi-client-card" style="width: 220px; flex-shrink: 0; min-height: 60px; flex-direction: row; gap: 0.75rem; padding: 0.75rem 1.25rem;">
                  <div class="sdi-client-card-icon" style="margin: 0; display: flex; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#EA580C" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div>
                  <span class="sdi-client-card-name" style="margin: 0;">EVN HCM</span>
                </div>
                <div class="sdi-client-card" style="width: 220px; flex-shrink: 0; min-height: 60px; flex-direction: row; gap: 0.75rem; padding: 0.75rem 1.25rem;">
                  <div class="sdi-client-card-icon" style="margin: 0; display: flex; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg></div>
                  <span class="sdi-client-card-name" style="margin: 0;">HÒA PHÁT</span>
                </div>
                <div class="sdi-client-card" style="width: 220px; flex-shrink: 0; min-height: 60px; flex-direction: row; gap: 0.75rem; padding: 0.75rem 1.25rem;">
                  <div class="sdi-client-card-icon" style="margin: 0; display: flex; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#9333EA" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="5" r="3"/><line x1="12" y1="22" x2="12" y2="8"/><path d="M5 12H2a10 10 0 0 0 20 0h-3"/></svg></div>
                  <span class="sdi-client-card-name" style="margin: 0;">NAM TRIỆU</span>
                </div>
                <div class="sdi-client-card" style="width: 220px; flex-shrink: 0; min-height: 60px; flex-direction: row; gap: 0.75rem; padding: 0.75rem 1.25rem;">
                  <div class="sdi-client-card-icon" style="margin: 0; display: flex; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16A34A" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></div>
                  <span class="sdi-client-card-name" style="margin: 0;">ĐH BÁCH KHOA</span>
                </div>
              </div>
              <!-- Group 2 (duplicated for infinite loop) -->
              <div class="sdi-marquee-group" aria-hidden="true">
                <div class="sdi-client-card" style="width: 220px; flex-shrink: 0; min-height: 60px; flex-direction: row; gap: 0.75rem; padding: 0.75rem 1.25rem;">
                  <div class="sdi-client-card-icon" style="margin: 0; display: flex; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#EA580C" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div>
                  <span class="sdi-client-card-name" style="margin: 0;">EVN HCM</span>
                </div>
                <div class="sdi-client-card" style="width: 220px; flex-shrink: 0; min-height: 60px; flex-direction: row; gap: 0.75rem; padding: 0.75rem 1.25rem;">
                  <div class="sdi-client-card-icon" style="margin: 0; display: flex; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg></div>
                  <span class="sdi-client-card-name" style="margin: 0;">HÒA PHÁT</span>
                </div>
                <div class="sdi-client-card" style="width: 220px; flex-shrink: 0; min-height: 60px; flex-direction: row; gap: 0.75rem; padding: 0.75rem 1.25rem;">
                  <div class="sdi-client-card-icon" style="margin: 0; display: flex; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#9333EA" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="5" r="3"/><line x1="12" y1="22" x2="12" y2="8"/><path d="M5 12H2a10 10 0 0 0 20 0h-3"/></svg></div>
                  <span class="sdi-client-card-name" style="margin: 0;">NAM TRIỆU</span>
                </div>
                <div class="sdi-client-card" style="width: 220px; flex-shrink: 0; min-height: 60px; flex-direction: row; gap: 0.75rem; padding: 0.75rem 1.25rem;">
                  <div class="sdi-client-card-icon" style="margin: 0; display: flex; align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16A34A" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></div>
                  <span class="sdi-client-card-name" style="margin: 0;">ĐH BÁCH KHOA</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================================================
       SECTION 2: GIẢI PHÁP & SẢN PHẨM CỐT LÕI (SDI CLONE BENTO GRID REMIX)
       ========================================================================== -->
  <section class="section home-solutions">
    <div class="container-sdi">
      <div class="home-solutions-wr">
        <div class="head-section" style="display: flex; flex-direction: column; gap: 0.5rem;">
          <div class="section-head-title-cont">
            <span class="eyebrow-badge" style="background: rgba(37, 99, 235, 0.08); color: var(--sdi-blue-accent); border: 1px solid rgba(37, 99, 235, 0.15); padding: 0.4rem 1rem;">GIẢI PHÁP CHIẾN LƯỢC</span>
          </div>
          <div class="section-head-right">
            <h2 class="home-solutions-item-title" style="font-size: 2.8rem; line-height: 1.15; color: var(--sdi-navy-primary);">Hạ Tầng Tối Ưu Cho Doanh Nghiệp Của Bạn</h2>
          </div>
        </div>

        <div class="reveal-on-scroll delay-1" style="display: flex; flex-direction: column; gap: 2rem; width: 100%;">
          
          <!-- Unified Solutions Grid (Desktop Bento) & Swipeable Slider (Mobile) -->
          <div class="solutions-grid-slider" id="solutions-slider">
            
            <!-- Card 1: Trạm AI Cục bộ (Feedback 1: Balanced 2-Column Bento Card) -->
            <div class="home-solutions-item is-hero-card w-inline-block">
              <div class="home-solutions-item-wr">
                <div>
                  <div class="sdi-solutions-icon-container">
                    <i data-lucide="cpu" style="width: 28px; height: 28px; color: var(--sdi-blue-accent); stroke-width: 2.2;"></i>
                  </div>
                  
                  <h3 class="home-solutions-item-title" style="text-wrap: balance; max-width: 100%;">Trạm AI Cục bộ &amp; Máy chủ Tự động hóa</h3>
                  
                  <p style="color: var(--sdi-text-secondary); line-height: 1.65; margin-top: 0.5rem; text-wrap: pretty;">
                    Chạy Local LLM, Stable Diffusion, hoặc làm máy chủ tự động hóa 24/7 ngay tại văn phòng — dữ liệu không ra khỏi công ty. Có hai hình thức tuỳ ngân sách và nhu cầu:
                  </p>
                </div>

                <div class="solutions-btn-group" style="margin-top: 0.75rem; display: flex; flex-direction: row; align-items: center; gap: 0.75rem; flex-wrap: nowrap; z-index: 3; position: relative;">
                  <a href="<?php echo esc_url(home_url('/combo-tron-bo/')); ?>" class="sdi-pill-btn">
                    <span>Combo Trọn Bộ</span>
                    <i data-lucide="arrow-right" style="width: 14px; height: 14px;"></i>
                  </a>
                  <a href="<?php echo esc_url(home_url('/may-don-le/')); ?>" class="sdi-pill-btn secondary">
                    <span>Máy Đơn Lẻ</span>
                    <i data-lucide="arrow-right" style="width: 14px; height: 14px;"></i>
                  </a>
                </div>
              </div>
              <div class="home-solutions-item-grad is-1">
                <div class="home-solutions-item-anim" data-lottie-path="https://cdn.prod.website-files.com/685c045f09a3dab41aa0d71d/68cc7c8e51517ebbe17c14dc_ServiceNow%20Integration.json"></div>
              </div>
            </div>
            
            <!-- Card 2: Gói Nâng cấp Hạ tầng -->
            <div class="home-solutions-item w-inline-block">
              <div class="home-solutions-item-wr">
                <div>
                  <div class="sdi-solutions-icon-container">
                    <i data-lucide="database" style="width: 28px; height: 28px; color: var(--sdi-blue-accent); stroke-width: 2.2;"></i>
                  </div>
                  
                  <h3 class="home-solutions-item-title">Gói Nâng cấp Hạ tầng Lưu trữ & Bộ nhớ</h3>
                </div>

                <p>
                  RAM và SSD hiệu năng cao, đóng gói thành "gói nâng cấp tăng tốc xử lý dữ liệu nội bộ" cho nhu cầu nâng cấp đồng bộ hàng loạt máy văn phòng / máy chủ. Nhấn mạnh độ bền và tốc độ truy xuất cơ sở dữ liệu.
                </p>

                <div style="z-index: 3; position: relative; margin-top: auto;">
                  <a href="<?php echo esc_url(home_url('/may-don-le/')); ?>" class="sdi-pill-btn">
                    <span>Xem Gói Nâng Cấp</span>
                    <i data-lucide="arrow-right" style="width: 14px; height: 14px;"></i>
                  </a>
                </div>
              </div>
              <div class="home-solutions-item-grad">
                <div class="home-solutions-item-anim" data-lottie-path="https://cdn.prod.website-files.com/685c045f09a3dab41aa0d71d/68cc7bceb797cde355ce7e21_Enterprise%20%20Data%20%26%20Al.json"></div>
              </div>
            </div>

            <!-- Card 3: Dịch vụ Trao tay -->
            <div class="home-solutions-item w-inline-block">
              <div class="home-solutions-item-wr">
                <div>
                  <div class="sdi-solutions-icon-container">
                    <i data-lucide="package-check" style="width: 28px; height: 28px; color: var(--sdi-blue-accent); stroke-width: 2.2;"></i>
                  </div>
                  <h4 class="home-solutions-item-title">Dịch vụ "Trao tay" (Plug & Play)</h4>
                </div>
                <p>
                  Máy giao tới là chạy được ngay: cài sẵn môi trường AI cục bộ, tối ưu phần cứng khớp đúng tác vụ của doanh nghiệp. Khách không phải tự thiết lập.
                </p>
              </div>
              <div class="home-solutions-item-grad">
                <div class="home-solutions-item-anim" data-lottie-path="https://cdn.prod.website-files.com/685c045f09a3dab41aa0d71d/68cc7c6b7c8c3d5434b37056_IT%20Managed%20Services.json"></div>
              </div>
            </div>

            <!-- Card 4: Tư vấn & Thiết lập Tự động hóa -->
            <div class="home-solutions-item w-inline-block">
              <div class="home-solutions-item-wr">
                <div>
                  <div class="sdi-solutions-icon-container">
                    <i data-lucide="workflow" style="width: 28px; height: 28px; color: var(--sdi-blue-accent); stroke-width: 2.2;"></i>
                  </div>
                  <h4 class="home-solutions-item-title">Tư vấn & Thiết lập Tự động hóa</h4>
                </div>
                <p>
                  Tư vấn cấu hình phần cứng đi kèm thiết lập luồng cào dữ liệu, quản lý tồn kho, tự động hóa báo cáo trên Lark, Sapo (V2/V3), Coze, Apify.
                </p>
              </div>
              <div class="home-solutions-item-grad is-2">
                <div class="home-solutions-item-anim" data-lottie-path="https://cdn.prod.website-files.com/685c045f09a3dab41aa0d71d/68cc7bce1e5d223642450132_Advisory%20%E2%80%A8%26%20Consulting.json"></div>
              </div>
            </div>

            <!-- Card 5: Hậu mãi chuẩn B2B -->
            <div class="home-solutions-item w-inline-block">
              <div class="home-solutions-item-wr">
                <div>
                  <div class="sdi-solutions-icon-container">
                    <i data-lucide="shield-check" style="width: 28px; height: 28px; color: var(--sdi-blue-accent); stroke-width: 2.2;"></i>
                  </div>
                  <h4 class="home-solutions-item-title">Hậu mãi chuẩn B2B</h4>
                </div>
                <p>
                  Xuất hóa đơn VAT minh bạch · bảo hành 1 đổi 1 nhanh · <strong style="font-weight: 700; color: var(--sdi-navy-primary);">hỗ trợ kỹ thuật tận nơi (on-site) tại TP.HCM</strong>. Khách doanh nghiệp mua sự an tâm.
                </p>
              </div>
              <div class="home-solutions-item-grad is-3">
                <div class="home-solutions-item-anim" data-lottie-path="https://cdn.prod.website-files.com/685c045f09a3dab41aa0d71d/68cc7cb829ebbf26bcfe2ca8_Public%20Safety%20Technology.json"></div>
              </div>
            </div>

          </div>

          <!-- Slide Dots for Mobile -->
          <div class="solutions-slider-dots" id="solutions-dots" aria-label="Solutions pagination">
            <button class="solutions-dot active" data-slide="0" aria-label="Slide 1"></button>
            <button class="solutions-dot" data-slide="1" aria-label="Slide 2"></button>
            <button class="solutions-dot" data-slide="2" aria-label="Slide 3"></button>
            <button class="solutions-dot" data-slide="3" aria-label="Slide 4"></button>
            <button class="solutions-dot" data-slide="4" aria-label="Slide 5"></button>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       SECTION 2C: THỐNG KÊ UY TÍN (SDI CLONE SUPPORT STATS REMIX)
       ========================================================================== -->
  <div class="section solutions-support reveal-on-scroll tech-dot-grid-dark" style="background-image: radial-gradient(rgba(255, 255, 255, 0.05) 1.5px, transparent 1.5px), linear-gradient(135deg, #0A1128 0%, #060B1E 100%) !important; background-size: 28px 28px, auto !important; background-color: #060B1E !important; position: relative;">
    <!-- Radial glow decorators for depth -->
    <div style="position: absolute; top: -30%; right: -10%; width: 450px; height: 450px; border-radius: 50%; background: radial-gradient(circle, rgba(37,99,235,0.15) 0%, transparent 70%); pointer-events: none; z-index: 1;"></div>
    <div style="position: absolute; bottom: -20%; left: 5%; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(37,99,235,0.08) 0%, transparent 70%); pointer-events: none; z-index: 1;"></div>

    <!-- Animated Running Circuit Lines SVG (Bảng điện) -->
    <svg style="position: absolute; inset: 0; width: 100%; height: 100%; pointer-events: none; z-index: 1; opacity: 0.15;" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient id="grad-line-support" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" stop-color="var(--sdi-blue-accent)" stop-opacity="0.1" />
          <stop offset="50%" stop-color="var(--sdi-blue-accent)" stop-opacity="0.6" />
          <stop offset="100%" stop-color="var(--sdi-blue-accent)" stop-opacity="0.1" />
        </linearGradient>
      </defs>
      <!-- Circuit track 1 -->
      <path d="M-100,150 L400,150 L550,270 L1200,270" fill="none" stroke="url(#grad-line-support)" stroke-width="1.5" />
      <!-- Circuit track 2 -->
      <path d="M300,-100 L420,120 L420,300 L600,450" fill="none" stroke="url(#grad-line-support)" stroke-width="1.5" />
      
      <!-- Animated light packets -->
      <circle r="4" fill="var(--sdi-blue-glow)" style="offset-path: path('M-100,150 L400,150 L550,270 L1200,270'); animation: flow-data 6s linear infinite; filter: drop-shadow(0 0 6px var(--sdi-blue-glow));" />
      <circle r="4" fill="var(--sdi-blue-accent)" style="offset-path: path('M300,-100 L420,120 L420,300 L600,450'); animation: flow-data 8s linear infinite 3s; filter: drop-shadow(0 0 6px var(--sdi-blue-accent));" />
    </svg>

    <div class="container-sdi" style="position: relative; z-index: 2;">
      <div class="support-content-title-wrapper solution-content-title-wrapper">
        <div class="support-content-title-head-wrapper solution-content-title-head-wrapper">
          <h2 class="heading-sky-blue-gradient">Đối tác tin cậy cho các dự án hạ tầng công nghệ cốt lõi</h2>
        </div>
      </div>
      <div class="home-why-wr">
        <div class="home-why-wr-left">
          <p class="text-size-regular-16 t-c-sky-blue" style="color: #94A3B8; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">
            Với năng lực cung cấp phần cứng chính hãng và đội ngũ kỹ sư lành nghề, NavaTek đồng hành thiết lập môi trường tính toán cục bộ bảo mật cao và vận hành êm ái cho hàng chục doanh nghiệp, trường học tại TP.HCM.
          </p>
          <div class="support-button-wr">
            <button class="sdi-btn-orange trigger-quote-modal" style="font-size: 0.9rem; padding: 0.75rem 2rem;">
              <span>Về NavaTek</span>
            </button>
          </div>
        </div>
        
        <div class="home-why-grid" data-mobile-slider="true">
          <div class="home-why-grid-item">
            <div class="home-why-grid-item-head">
              <div class="home-why-grid-item-title">Chỉ số hài lòng (CSAT)</div>
            </div>
            <div class="home-why-grid-item-cont">
              <h2 class="home-why-item-title">98%</h2>
            </div>
          </div>
          
          <div class="home-why-grid-item">
            <div class="home-why-grid-item-head">
              <div class="home-why-grid-item-title">Doanh nghiệp đã triển khai</div>
            </div>
            <div class="home-why-grid-item-cont">
              <h2 class="home-why-item-title">50+</h2>
            </div>
          </div>
          
          <div class="home-why-grid-item">
            <div class="home-why-grid-item-head">
              <div class="home-why-grid-item-title">Thiết bị đã bàn giao</div>
            </div>
            <div class="home-why-grid-item-cont">
              <h2 class="home-why-item-title">1.000+</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ==========================================================================
       GÓI SETUP TRỌN GÓI (INTEGRATED STEPS & ILLUSTRATION - Feedback 2 & 3)
       ========================================================================== -->
  <section style="padding: 6.5rem 0; background: #FFFFFF; border-top: 1px solid var(--sdi-border); position: relative;">
    <div class="container-sdi">
      
      <div class="sdi-split-grid is-reversed" style="gap: 3.5rem; align-items: center;">
        
        <!-- Left Column: 3D Isometric Connected Office Ecosystem Diagram (Feedback 2) -->
        <div>
          <div class="sdi-diagram-wrapper" style="padding: 2.25rem 1.5rem; background: radial-gradient(circle at 50% 50%, #F8FAFD 0%, #FFFFFF 100%);">
            <svg width="100%" height="450" viewBox="0 0 540 450" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: block; margin: 0 auto; max-width: 100%; height: auto;">
              <defs>
                <linearGradient id="soft-ambient-glow" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="#EFF6FF" stop-opacity="0.8" />
                  <stop offset="100%" stop-color="#DBEAFE" stop-opacity="0.3" />
                </linearGradient>
                <linearGradient id="office-line-grad" x1="0%" y1="0%" x2="100%" y2="0%">
                  <stop offset="0%" stop-color="#2563EB" />
                  <stop offset="50%" stop-color="#38BDF8" />
                  <stop offset="100%" stop-color="#10B981" />
                </linearGradient>
                <filter id="iso-glow-blue" x="-20%" y="-20%" width="140%" height="140%">
                  <feDropShadow dx="0" dy="8" stdDeviation="12" flood-color="#2563EB" flood-opacity="0.25" />
                </filter>
                <filter id="iso-glow-green" x="-20%" y="-20%" width="140%" height="140%">
                  <feDropShadow dx="0" dy="0" stdDeviation="8" flood-color="#10B981" flood-opacity="0.5" />
                </filter>
                <filter id="iso-glow-red" x="-20%" y="-20%" width="140%" height="140%">
                  <feDropShadow dx="0" dy="0" stdDeviation="6" flood-color="#EF4444" flood-opacity="0.6" />
                </filter>
                <style>
                  .office-flow-anim {
                    stroke-dasharray: 8 6;
                    animation: office-dash-stream 2s linear infinite;
                  }
                  @keyframes office-dash-stream {
                    to { stroke-dashoffset: -28; }
                  }
                  .office-float-node {
                    animation: office-float-anim 5s ease-in-out infinite alternate;
                  }
                  @keyframes office-float-anim {
                    0% { transform: translateY(0); }
                    100% { transform: translateY(-6px); }
                  }
                </style>
              </defs>

              <!-- Ambient Glow in Background -->
              <circle cx="270" cy="225" r="175" fill="url(#soft-ambient-glow)" />

              <!-- Connecting Datastreams (Glowing Lines) -->
              <!-- Center to Top-Left (Monitor) -->
              <path d="M 205 205 C 160 160, 140 135, 115 110" stroke="url(#office-line-grad)" stroke-width="2.5" fill="none" class="office-flow-anim" />
              <!-- Center to Top-Right (Camera) -->
              <path d="M 335 205 C 380 160, 400 135, 425 110" stroke="url(#office-line-grad)" stroke-width="2.5" fill="none" class="office-flow-anim" />
              <!-- Center to Bottom (Printer) -->
              <path d="M 270 270 L 270 338" stroke="url(#office-line-grad)" stroke-width="2.5" fill="none" class="office-flow-anim" />

              <!-- TOP LEFT: 3D ISOMETRIC ULTRAWIDE 20:9 MONITOR -->
              <g transform="translate(105, 95)">
                <g class="office-float-node" style="animation-delay: -1s;">
                  <!-- Stand Shadow -->
                  <ellipse cx="0" cy="50" rx="36" ry="8" fill="rgba(0, 51, 102, 0.12)" />
                  <!-- Stand Base -->
                  <path d="M -28 42 L 0 49 L 28 42 L 0 35 Z" fill="#334155" stroke="#38BDF8" stroke-width="1.2" />
                  <!-- Stand Column -->
                  <path d="M -5 15 L -5 42 L 5 42 L 5 15 Z" fill="#475569" stroke="#38BDF8" stroke-width="1.2" />
                  <!-- Monitor Frame (Exact 20:9) -->
                  <rect x="-58" y="-26" width="116" height="52" rx="4" fill="#0F172A" stroke="#38BDF8" stroke-width="2.5" />
                  <!-- Screen Area -->
                  <rect x="-55" y="-24" width="110" height="48" rx="2" fill="#1E293B" />
                  <!-- Graph Line on Screen -->
                  <path d="M -45 0 L -25 -16 L -5 4 L 15 -12 L 40 2" stroke="#10B981" stroke-width="2.5" fill="none" class="glow-green" />
                  <!-- Screen Power LED -->
                  <circle cx="50" cy="20" r="2" fill="#10B981" />
                  <!-- Label Badge -->
                  <g transform="translate(0, -38)">
                    <rect x="-65" y="-12" width="130" height="22" rx="11" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1" />
                    <text x="0" y="3" fill="#003366" font-size="9.5" font-weight="900" text-anchor="middle" font-family="'Be Vietnam Pro', sans-serif">MÀN HÌNH 20:9</text>
                  </g>
                </g>
              </g>

              <!-- TOP RIGHT: 3D ISOMETRIC AI SECURITY CAMERA -->
              <g transform="translate(435, 95)">
                <g class="office-float-node" style="animation-delay: -2s;">
                  <!-- Base Mount Shadow -->
                  <ellipse cx="0" cy="46" rx="30" ry="7" fill="rgba(0, 51, 102, 0.12)" />
                  <!-- Base Mount Plate -->
                  <path d="M -20 38 L 0 44 L 20 38 L 0 32 Z" fill="#334155" stroke="#38BDF8" stroke-width="1.2" />
                  <!-- Bracket Pole -->
                  <path d="M -3 15 L -3 38 L 3 38 L 3 15 Z" fill="#475569" stroke="#38BDF8" stroke-width="1.2" />
                  <!-- Camera Cylinder Body -->
                  <rect x="-20" y="-20" width="40" height="36" rx="18" fill="#0F172A" stroke="#38BDF8" stroke-width="2.5" />
                  <!-- Camera Lens -->
                  <circle cx="0" cy="-2" r="12" fill="#1E293B" stroke="#10B981" stroke-width="2.5" filter="url(#iso-glow-green)" />
                  <circle cx="0" cy="-2" r="5" fill="#38BDF8" />
                  <!-- Red Recording LED -->
                  <circle cx="7" cy="-8" r="2" fill="#EF4444" filter="url(#iso-glow-red)" />
                  <!-- Label Badge -->
                  <g transform="translate(0, -38)">
                    <rect x="-65" y="-12" width="130" height="22" rx="11" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1" />
                    <text x="0" y="3" fill="#003366" font-size="9.5" font-weight="900" text-anchor="middle" font-family="'Be Vietnam Pro', sans-serif">CAMERA GIÁM SÁT AI</text>
                  </g>
                </g>
              </g>

              <!-- CENTER: 3D ISOMETRIC MINI PC HARDWARE CORE -->
              <g transform="translate(270, 230)">
                <g class="office-float-node" style="animation-delay: -0.5s;">
                  <!-- Base Shadow -->
                  <ellipse cx="0" cy="42" rx="88" ry="18" fill="rgba(0, 51, 102, 0.18)" />
                  <!-- Left Face -->
                  <path d="M -80 -16 L 0 20 L 0 42 L -80 6 Z" fill="#0F172A" stroke="#2563EB" stroke-width="1.8" />
                  <!-- Right Face -->
                  <path d="M 80 -16 L 0 20 L 0 42 L 80 6 Z" fill="#161E2D" stroke="#2563EB" stroke-width="1.8" />
                  <!-- Top Face -->
                  <path d="M 0 -42 L 80 -16 L 0 20 L -80 -16 Z" fill="#1E293B" stroke="#38BDF8" stroke-width="2.5" filter="url(#iso-glow-blue)" />
                  
                  <!-- Front Details: USB Ports & Power LED -->
                  <path d="M 20 22 L 28 18 L 28 24 L 20 28 Z" fill="#38BDF8" />
                  <path d="M 38 14 L 46 10 L 46 16 L 38 20 Z" fill="#38BDF8" />
                  <!-- Glowing Power LED -->
                  <circle cx="-38" cy="4" r="5" fill="#10B981" filter="url(#iso-glow-green)" />

                  <!-- Center Text Badge -->
                  <g transform="translate(0, 68)">
                    <rect x="-95" y="-13" width="190" height="26" rx="13" fill="#FFFFFF" stroke="#2563EB" stroke-width="1.5" />
                    <text x="0" y="4" fill="#003366" font-size="10" font-weight="900" text-anchor="middle" font-family="'Be Vietnam Pro', sans-serif" letter-spacing="0.04em">TRẠM MINI PC TRUNG TÂM</text>
                  </g>
                </g>
              </g>

              <!-- BOTTOM: 3D ISOMETRIC OFFICE PRINTER -->
              <g transform="translate(270, 370)">
                <g class="office-float-node" style="animation-delay: -3s;">
                  <!-- Base Shadow -->
                  <ellipse cx="0" cy="38" rx="68" ry="14" fill="rgba(0, 51, 102, 0.16)" />
                  <!-- Left Face -->
                  <path d="M -60 -10 L 0 16 L 0 38 L -60 13 Z" fill="#0F172A" stroke="#2563EB" stroke-width="1.8" />
                  <!-- Right Face -->
                  <path d="M 60 -10 L 0 16 L 0 38 L 60 13 Z" fill="#1E293B" stroke="#2563EB" stroke-width="1.8" />
                  <!-- Top Face -->
                  <path d="M 0 -32 L 60 -10 L 0 16 L -60 -10 Z" fill="#1E293B" stroke="#2563EB" stroke-width="1.8" />
                  <!-- Paper output slot -->
                  <path d="M -35 6 L 35 21" stroke="#38BDF8" stroke-width="3" />
                  <!-- Printed sheet coming out -->
                  <path d="M -25 13 L 25 25 L 25 40 L -25 28 Z" fill="#FFFFFF" stroke="#CBD5E1" stroke-width="1" />
                  <line x1="-18" y1="20" x2="18" y2="28" stroke="#38BDF8" stroke-width="1.5" />
                  <line x1="-18" y1="25" x2="10" y2="31" stroke="#38BDF8" stroke-width="1.5" />
                  
                  <!-- Label Badge -->
                  <g transform="translate(0, 60)">
                    <rect x="-80" y="-12" width="160" height="24" rx="12" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1" />
                    <text x="0" y="4" fill="#003366" font-size="9.5" font-weight="900" text-anchor="middle" font-family="'Be Vietnam Pro', sans-serif">MÁY IN &amp; NGOẠI VI</text>
                  </g>
                </g>
              </g>
            </svg>

            <p class="sdi-diagram-caption">
              <strong>Mô hình văn phòng B2B kết nối đồng bộ:</strong> Thiết lập Mini PC trung tâm, liên thông dữ liệu và cấp nguồn tự động tới Hệ thống hiển thị, Camera giám sát và Ngoại vi văn phòng.
            </p>
          </div>
        </div>

        <!-- Right: 3 Steps (Feedback 3: Centered Single Vertical Axis Timeline) -->
        <div>
          <span class="eyebrow-badge reveal-on-scroll">HẠ TẦNG TRỌN GÓI</span>
          <h2 style="font-size: 2.3rem; color: var(--sdi-navy-primary); margin-top: 0.5rem; margin-bottom: 1rem;">Lắp đặt tận nơi, chạy được&nbsp;ngay</h2>
          <p style="color: var(--sdi-text-secondary); font-size: 1.05rem; margin-bottom: 1rem;">
            Không cần hiểu kỹ thuật. Đội ngũ NavaTek khảo sát mặt bằng, lắp đặt trọn bộ và bảo trì định kỳ.
          </p>

          <!-- Timeline Container with Continuous Vertical Rail -->
          <div class="sdi-timeline-container">
            <div class="sdi-timeline-rail"></div>

            <!-- Step 1 -->
            <div class="sdi-timeline-step">
              <div class="sdi-timeline-number">1</div>
              <div class="sdi-timeline-content">
                <div class="sdi-timeline-title">BƯỚC 1: Khảo sát &amp; Tư vấn</div>
                <p class="sdi-timeline-desc">Đo lường nhu cầu thực tế, số điểm máy, mặt bằng và hạ tầng mạng sẵn có của văn phòng.</p>
              </div>
            </div>

            <!-- Step 2 -->
            <div class="sdi-timeline-step">
              <div class="sdi-timeline-number">2</div>
              <div class="sdi-timeline-content">
                <div class="sdi-timeline-title">BƯỚC 2: Lắp đặt &amp; Thiết lập</div>
                <p class="sdi-timeline-desc">Setup phần cứng máy tính, đường truyền mạng, camera và cấu hình môi trường phần mềm đồng bộ.</p>
              </div>
            </div>

            <!-- Step 3 -->
            <div class="sdi-timeline-step step-3">
              <div class="sdi-timeline-number">3</div>
              <div class="sdi-timeline-content">
                <div class="sdi-timeline-title">BƯỚC 3: Nghiệm thu &amp; Bảo trì</div>
                <p class="sdi-timeline-desc">Kiểm tra hiệu năng thực tế, bàn giao hướng dẫn sử dụng và hỗ trợ kỹ thuật on-site tận nơi 24/7.</p>
              </div>
            </div>
          </div>

          <a href="<?php echo esc_url(home_url('/dich-vu-bao-tri/')); ?>" class="sdi-pill-btn-outline">
            <span>Xem dịch vụ triển khai</span>
            <i data-lucide="arrow-right" style="width: 14px; height: 14px; margin-left: 0.5rem;"></i>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================================================
       SECTION: CẤU HÌNH BÁN CHẠY (BEST SELLERS)
       ========================================================================== -->
  <section style="padding: 6.5rem 0; background: #F8FAFD; border-top: 1px solid var(--sdi-border); position: relative;">
    <div class="container-sdi">
      

      <div style="margin-bottom: 4rem;" class="reveal-on-scroll">
        <span class="eyebrow-badge">SẢN PHẨM NỔI BẬT</span>
        <h2 style="font-size: 2.3rem; color: var(--sdi-navy-primary); margin-top: 0.5rem; margin-bottom: 0.75rem;">Cấu hình bán chạy</h2>
        <p style="color: var(--sdi-text-secondary); font-size: 1rem;">
          Thẻ sản phẩm luôn hiện giá + tình trạng kho — hai trường này bắt buộc để Google hiển thị được Rich Snippets.
        </p>
      </div>

      <div class="sdi-grid-4 reveal-on-scroll delay-1" data-mobile-slider="true">
        
        <!-- Card 1: Combo -->
        <div class="sdi-card-solid" style="padding: 1.5rem; display: flex; flex-direction: column; justify-content: space-between; min-height: 410px;">
          <div>
            <span class="product-type-badge combo">Combo trọn bộ</span>
            <div style="text-align: center; margin: 1.5rem 0;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/combo.png" alt="Combo Trạm AI Doanh Nghiệp: Mini PC kết hợp eGPU Card đồ họa RTX 4070" loading="lazy" decoding="async" width="160" height="90" style="max-height: 90px; width: auto; mix-blend-mode: multiply;">
            </div>
            <h4 style="font-size: 0.95rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem; min-height: 44px;">Combo Trạm AI: Mini PC + eGPU RTX 4070</h4>
          </div>
          <div>
            <div style="font-size: 1.15rem; font-weight: 900; color: var(--sdi-blue-accent); margin-bottom: 0.25rem;">Từ 68.000.000₫</div>
            <div style="font-size: 0.75rem; color: var(--sdi-text-muted); margin-bottom: 1rem;">○ Đặt trước • 7 ngày</div>
            <a href="<?php echo esc_url(home_url('/combo-tron-bo/')); ?>" class="sdi-btn-orange" style="width: 100%; justify-content: center; padding: 0.6rem; font-size: 0.85rem; text-decoration: none;">Xem chi tiết</a>
          </div>
        </div>

        <!-- Card 2: Workstation -->
        <div class="sdi-card-solid" style="padding: 1.5rem; display: flex; flex-direction: column; justify-content: space-between; min-height: 410px;">
          <div>
            <span class="product-type-badge single">Máy đơn</span>
            <div style="text-align: center; margin: 1.5rem 0;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/laser.png" alt="Máy trạm Workstation AI chuyên dụng GPU RTX 4090 24GB VRAM 128GB RAM" loading="lazy" decoding="async" width="160" height="90" style="max-height: 90px; width: auto; mix-blend-mode: multiply;">
            </div>
            <h4 style="font-size: 0.95rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem; min-height: 44px;">Workstation AI · RTX 4090 · 128GB</h4>
          </div>
          <div>
            <div style="font-size: 1.15rem; font-weight: 900; color: var(--sdi-blue-accent); margin-bottom: 0.25rem;">Từ 96.000.000₫</div>
            <div style="font-size: 0.75rem; color: var(--sdi-text-muted); margin-bottom: 1rem;">○ Đặt trước • 7 ngày</div>
            <a href="<?php echo esc_url(home_url('/chi-tiet-may-don/')); ?>" class="sdi-btn-orange" style="width: 100%; justify-content: center; padding: 0.6rem; font-size: 0.85rem; text-decoration: none;">Xem chi tiết</a>
          </div>
        </div>

        <!-- Card 3: Mini PC Core i9 -->
        <div class="sdi-card-solid" style="padding: 1.5rem; display: flex; flex-direction: column; justify-content: space-between; min-height: 410px;">
          <div>
            <span class="product-type-badge single">Máy đơn</span>
            <div style="text-align: center; margin: 1.5rem 0;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bending.png" alt="Mini PC văn phòng cao cấp Intel Core i9 đa nhiệm mượt mà" loading="lazy" decoding="async" width="160" height="90" style="max-height: 90px; width: auto; mix-blend-mode: multiply;">
            </div>
            <h4 style="font-size: 0.95rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem; min-height: 44px;">Mini PC Core i9 · 64GB · chạy LLM nhẹ</h4>
          </div>
          <div>
            <div style="font-size: 1.15rem; font-weight: 900; color: var(--sdi-blue-accent); margin-bottom: 0.25rem;">28.900.000₫</div>
            <div style="font-size: 0.75rem; color: #10B981; font-weight: 600; margin-bottom: 1rem;">● Còn hàng</div>
            <a href="<?php echo esc_url(home_url('/chi-tiet-may-don/')); ?>" class="sdi-btn-orange" style="width: 100%; justify-content: center; padding: 0.6rem; font-size: 0.85rem; text-decoration: none;">Xem chi tiết</a>
          </div>
        </div>

        <!-- Card 4: Component -->
        <div class="sdi-card-solid" style="padding: 1.5rem; display: flex; flex-direction: column; justify-content: space-between; min-height: 410px;">
          <div>
            <span class="product-type-badge part">Linh kiện</span>
            <div style="text-align: center; margin: 1.5rem 0;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ai.png" alt="Gói giải pháp nâng cấp RAM DDR5 và ổ cứng SSD NVMe tốc độ cao" loading="lazy" decoding="async" width="160" height="90" style="max-height: 90px; width: auto; mix-blend-mode: multiply;">
            </div>
            <h4 style="font-size: 0.95rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem; min-height: 44px;">Gói nâng cấp RAM 64GB + SSD 2TB</h4>
          </div>
          <div>
            <div style="font-size: 1.15rem; font-weight: 900; color: var(--sdi-blue-accent); margin-bottom: 0.25rem;">9.900.000₫</div>
            <div style="font-size: 0.75rem; color: #10B981; font-weight: 600; margin-bottom: 1rem;">● Còn hàng</div>
            <a href="<?php echo esc_url(home_url('/chi-tiet-linh-kien/')); ?>" class="sdi-btn-orange" style="width: 100%; justify-content: center; padding: 0.6rem; font-size: 0.85rem; text-decoration: none;">Xem chi tiết</a>
      </div>
    </div>
  </div>
</div>
</section>

  <!-- ==========================================================================
       SECTION 3: ĐỐI TÁC & NHÀ PHÂN PHỐI (PARTNER LOGOS - Bug 6)
       ========================================================================== -->
  <section style="padding: 4.5rem 0; background: #FFFFFF; border-top: 1px solid var(--sdi-border); position: relative;">
    <div class="container-sdi">
      
      <div style="text-align: center; margin-bottom: 2.25rem;" class="reveal-on-scroll">
        <span class="eyebrow-badge">ĐỐI TÁC CHIẾN LƯỢC</span>
        <h3 style="font-size: 1.85rem; color: var(--sdi-navy-primary); margin-top: 0.35rem; font-weight: 800;">Đối tác công nghệ & Nhà phân phối chính hãng</h3>
      </div>

      <div class="partner-logos-grid-new reveal-on-scroll delay-1">
        <div class="partner-brand-card">
          <svg viewBox="0 0 100 34" fill="currentColor" style="color: #0071C5;"><path d="M12.4 28.5H7.8V12.1h4.6v16.4zm-2.3-18.7c-1.5 0-2.7-1.2-2.7-2.7s1.2-2.7 2.7-2.7 2.7 1.2 2.7 2.7-1.2 2.7-2.7 2.7zm23.2 18.7h-4.4v-8.8c0-2.4-.9-3.8-2.9-3.8-2.2 0-3.3 1.5-3.3 3.8v8.8h-4.4V12.1h4.4v2.3c1.2-1.7 3.1-2.6 5.3-2.6 3.6 0 5.3 2.4 5.3 6.1v10.6zm13.8 0h-4.3v-2.3c-1.1 1.7-2.9 2.6-5.1 2.6-3.4 0-5.3-2.3-5.3-6.1V12.1h4.4v9c0 2.3 1 3.6 3 3.6 2.1 0 3-1.4 3-3.6v-9h4.3v16.4zm8.6-12.7h-3v-3.7h3V8.3l4.4-1.3v5.1h4.3v3.7h-4.3v8.3c0 1.5.6 2.1 2 2.1h2.3v3.7h-3.8c-3.5 0-4.9-1.5-4.9-5.1v-9zm23.4 6.9h-12c.2 2.2 1.6 3.5 3.9 3.5 1.7 0 2.8-.7 3.5-1.9l3.8 1.9c-1.5 2.5-4.1 3.7-7.3 3.7-5.2 0-8.5-3.6-8.5-8.4s3.3-8.5 8.4-8.5c5.3 0 8.2 3.8 8.2 8.5 0 .5 0 .9 0 1.2zm-4.4-3.2c0-2-1.3-3.3-3.8-3.3-2.2 0-3.6 1.3-3.8 3.3h7.6zm14.1 9h-4.4V4.4l4.4-1.3v25.4z"/></svg>
        </div>
        <div class="partner-brand-card">
          <svg viewBox="0 0 100 24" fill="currentColor" style="color: #ED1C24;"><path d="M0 23.5h5.5l2.4-5.6h10.4l2.4 5.6h5.8L14.7.5H11.8L0 23.5zm10.1-10.4l3.1-7.2 3.1 7.2h-6.2zm21.4 10.4h5.6V6.2l7.1 11.8h2.3l7.1-11.8v17.3h5.6V.5h-5.9l-7.9 13.3L37.5.5h-6v23zM70.8.5H59.5v23h11.3c7.2 0 12.3-4.8 12.3-11.5S78 .5 70.8.5zm0 17.6H65V5.9h5.8c3.8 0 6.5 2.5 6.5 6.1s-2.7 6.1-6.5 6.1z"/></svg>
        </div>
        <div class="partner-brand-card">
          <svg viewBox="0 0 100 24" fill="currentColor" style="color: #76B900;"><path d="M18.8 3.7C8.4 3.7 0 12.1 0 22.5h3.9c0-8.2 6.7-14.9 14.9-14.9 8.2 0 14.9 6.7 14.9 14.9h3.9C37.6 12.1 29.2 3.7 18.8 3.7zm1.1 6.1c-5.7 0-10.3 4.6-10.3 10.3h2.8c0-4.1 3.4-7.5 7.5-7.5 4.1 0 7.5 3.4 7.5 7.5h2.8c0-5.7-4.6-10.3-10.3-10.3zm42.7.2h-5.2l-8.6 12.5h5.2l1.7-2.7h8.7l1.7 2.7h5.2L62.6 10zm-5.1 7.3l2.6-4.1 2.6 4.1h-5.2zm20.8-7.3v12.5h4.6V10h-4.6zm11.2 0v12.5h4.6V10h-4.6z"/></svg>
        </div>
        <div class="partner-brand-card">
          <svg viewBox="0 0 100 24" fill="currentColor" style="color: #00539B;"><path d="M18.2 19.5H8.6l-1.8 4h-5L11.7.5h4.4l9.8 23h-5.9l-1.8-4zm-1.8-4.2l-3-7.2-3 7.2h6zm21.4-1.2c0 6.2-3.8 9.4-9.8 9.4-6.2 0-9.8-3.2-9.8-9.4V.5h5.4v13.5c0 3.1 1.7 4.7 4.4 4.7 2.8 0 4.4-1.6 4.4-4.7V.5h5.4v13.6zm18.3 5.4c-1.8 2.6-4.7 4-8.7 4-6.3 0-10.3-3.9-10.3-9.8s4-9.8 10.3-9.8c4 0 6.9 1.4 8.7 4l-3.8 3c-1.1-1.6-2.7-2.4-4.9-2.4-3.3 0-5.1 2.2-5.1 5.2s1.8 5.2 5.1 5.2c2.2 0 3.8-.8 4.9-2.4l3.8 3zm21.7-5.4c0 6.2-3.8 9.4-9.8 9.4-6.2 0-9.8-3.2-9.8-9.4V.5h5.4v13.5c0 3.1 1.7 4.7 4.4 4.7 2.8 0 4.4-1.6 4.4-4.7V.5h5.4v13.6z"/></svg>
        </div>
        <div class="partner-brand-card">
          <span style="font-family: var(--font-heading); font-weight: 900; font-size: 1.05rem; color: var(--sdi-orange-cta); letter-spacing: 0.05em;">NHẤT TIẾN CHUNG</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       SECTION: BLOG & KNOWLEDGE HUB (HOMEPAGE)
       ========================================================================== -->
  <section style="padding: 6rem 0; background: #F8FAFD; border-top: 1px solid var(--sdi-border); position: relative;">
    <div class="container-sdi">
      
      <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 3rem; flex-wrap: wrap; gap: 1.5rem;" class="reveal-on-scroll">
        <div style="max-width: 820px;">
          <span class="eyebrow-badge" style="background: rgba(37, 99, 235, 0.08); color: var(--sdi-blue-accent); border: 1px solid rgba(37, 99, 235, 0.18);">INSIGHTS & KNOWLEDGE</span>
          <h2 style="font-size: 2.35rem; color: var(--sdi-navy-primary); margin-top: 0.4rem; margin-bottom: 0.5rem; text-wrap: balance; line-height: 1.25;">Cẩm Nang & Xu Hướng Hạ Tầng CNTT</h2>
          <p style="color: var(--sdi-text-secondary); font-size: 1rem; line-height: 1.6; margin: 0; max-width: 680px; text-wrap: pretty;">
            Kinh nghiệm thực chiến từ các kỹ sư giải pháp NavaTek giúp tối ưu hiệu năng phần cứng, triển khai AI On-Premise và bảo mật dữ liệu doanh nghiệp.
          </p>
        </div>
        <a href="<?php echo esc_url(home_url('/tin-tuc/')); ?>" class="sdi-pill-btn" style="padding: 0.55rem 1.35rem; font-size: 0.85rem; margin-bottom: 0.5rem;">
          <span>Xem tất cả bài viết</span>
          <i data-lucide="arrow-right" style="width: 15px; height: 15px;"></i>
        </a>
      </div>

      <div class="home-blog-grid reveal-on-scroll delay-1" data-mobile-slider="true">
        
        <?php
        $recent_posts = new WP_Query(array(
            'posts_per_page' => 3,
            'post_status'    => 'publish'
        ));
        if ($recent_posts->have_posts()) :
            while ($recent_posts->have_posts()) : $recent_posts->the_post();
                $post_thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');
                if (!$post_thumb) {
                    $post_thumb = get_post_meta(get_the_ID(), '_thumbnail_url', true);
                }
                if (!$post_thumb) {
                    $post_thumb = get_template_directory_uri() . '/images/ai.png';
                }
                $cats = get_the_category();
                $cat_name = !empty($cats) ? $cats[0]->name : 'KIẾN THỨC CNTT';
                $cat_class = 'ai';
                if (stripos($cat_name, 'phần cứng') !== false) $cat_class = 'hardware';
                if (stripos($cat_name, 'tự động') !== false) $cat_class = 'automation';
                
                $author = get_post_meta(get_the_ID(), '_article_author', true) ?: 'Trương Minh Tuấn';
                $initials = mb_strtoupper(mb_substr($author, 0, 2));
                ?>
                <a href="<?php the_permalink(); ?>" class="blog-card">
                  <div class="blog-card-thumb-wrapper">
                    <span class="blog-card-tag-floating blog-cat-badge <?php echo esc_attr($cat_class); ?>"><?php echo esc_html(mb_strtoupper($cat_name)); ?></span>
                    <img src="<?php echo esc_url($post_thumb); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" decoding="async">
                    <div class="blog-card-reading-badge">
                      <i data-lucide="clock" style="width: 12px; height: 12px;"></i>
                      5 phút đọc
                    </div>
                  </div>
                  <div class="blog-card-content">
                    <div>
                      <h3 class="blog-card-title"><?php the_title(); ?></h3>
                      <p class="blog-card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 22, '...'); ?></p>
                    </div>
                    <div class="blog-card-footer">
                      <div class="blog-author-meta">
                        <div class="blog-author-avatar"><?php echo esc_html($initials); ?></div>
                        <div>
                          <div class="blog-author-name"><?php echo esc_html($author); ?></div>
                          <div class="blog-card-date"><?php echo get_the_date('d/m/Y'); ?></div>
                        </div>
                      </div>
                      <span class="blog-card-cta-link">Đọc tiếp <i data-lucide="arrow-right" style="width: 14px; height: 14px;"></i></span>
                    </div>
                  </div>
                </a>
            <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>

      </div>
    </div>
  </section>

  <!-- ==========================================================================
       SECTION: BINARY MATRIX B2B CTA
       ========================================================================== -->
  <section class="binary-matrix-container">
    <!-- The dynamic gradient overlay that fades in on scroll -->
    <div class="home-cta-anims-grad"></div>
    <!-- Centered background grid of code numbers with blend modes -->
    <div class="home-cta-anims-code-img"></div>
    <!-- Floating binary code streams (with 3D depth blur, intersecting slants, and falling/rising motions) -->
    <div class="binary-streams-wrapper">
      <div class="binary-stream falling blur-heavy slant-right" style="left: 5%; animation-duration: 10s; animation-delay: 0s;">0110101101001</div>
      <div class="binary-stream rising blur-light" style="left: 15%; animation-duration: 18s; animation-delay: -3s;">1001011011011</div>
      <div class="binary-stream falling" style="left: 28%; animation-duration: 14s; animation-delay: -7s;">1101001011010</div>
      <div class="binary-stream rising blur-heavy slant-left" style="left: 42%; animation-duration: 12s; animation-delay: -2s;">0101100110101</div>
      <div class="binary-stream falling blur-light slant-right" style="left: 58%; animation-duration: 16s; animation-delay: -5s;">1100101001011</div>
      <div class="binary-stream rising" style="left: 70%; animation-duration: 13s; animation-delay: -1s;">1010011001101</div>
      <div class="binary-stream falling blur-light slant-left" style="left: 82%; animation-duration: 15s; animation-delay: -4s;">0110100101100</div>
      <div class="binary-stream rising blur-heavy" style="left: 92%; animation-duration: 11s; animation-delay: -6s;">1001011011001</div>
    </div>
    <div class="container-sdi reveal-on-scroll" style="position: relative; z-index: 10;">
      <span class="eyebrow-badge">ĐỒNG HÀNH CÙNG DOANH NGHIỆP</span>
      <h2 style="font-size: 2.35rem; color: var(--sdi-navy-primary); margin-top: 0.5rem; margin-bottom: 0.75rem; font-weight: 800;">Sẵn sàng tối ưu hạ tầng CNTT của bạn?</h2>
      <p style="color: var(--sdi-text-secondary); font-size: 1.05rem; max-width: 650px; margin: 0 auto 2.5rem auto; line-height: 1.6;">
        Chúng tôi đồng hành thiết lập môi trường tính toán AI local bảo mật cao và vận hành êm ái cho văn phòng của bạn.
      </p>
      <div class="sdi-button-strand-container">
        <!-- Left strands -->
        <object type="image/svg+xml" data="<?php echo esc_url(get_template_directory_uri()); ?>/images/strand.svg" class="sdi-strand-svg is-left"></object>
        
        <button class="sdi-btn-orange trigger-quote-modal" style="font-size: 1rem; padding: 0.85rem 2.5rem; z-index: 5; margin: 0;">
          <span>Nhận tư vấn cấu hình ngay</span>
        </button>
        
        <!-- Right strands -->
        <object type="image/svg+xml" data="<?php echo esc_url(get_template_directory_uri()); ?>/images/strand.svg" class="sdi-strand-svg is-right"></object>
      </div>
    </div>
  </section> <!-- Closes .binary-matrix-container -->
  </div> <!-- Closes .sdi-page-wrapper -->

  <!-- ==========================================================================
       FOOTER & REQUEST QUOTE FORM
       ========================================================================== -->

<?php
get_footer();
?>