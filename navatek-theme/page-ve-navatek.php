<?php
/**
 * Template Name: Về NavaTek
 */
get_header();
?>

<!-- Main Content -->
  <main style="background: #FFFFFF;">
    
    <!-- Hero Section -->
    <section class="tech-dot-grid-light" style="background: linear-gradient(135deg, #FFFFFF 0%, #EFF6FF 100%); padding: 5rem 0 4rem 0; position: relative; overflow: hidden; border-bottom: 1px solid var(--sdi-border);">
      <div class="container-sdi" style="position: relative; z-index: 2;">
        <div style="max-width: 860px; margin: 0 auto; text-align: center;">
          <span class="eyebrow-badge" style="background: rgba(37, 99, 235, 0.08); color: var(--sdi-blue-accent); border: 1px solid rgba(37, 99, 235, 0.18);">VỀ CHÚNG TÔI • NAVATEK B2B</span>
          <h1 style="font-size: 2.85rem; color: var(--sdi-navy-primary); line-height: 1.25; margin-top: 0.75rem; margin-bottom: 1.5rem; font-weight: 900;">
            Đối tác cung cấp hạ tầng CNTT & Trạm AI cục bộ <span style="color: var(--sdi-blue-accent);">chuẩn xác cho doanh nghiệp</span>
          </h1>
          <p style="color: var(--sdi-text-secondary); font-size: 1.15rem; line-height: 1.7; margin-bottom: 2.5rem;">
            NavaTek sinh ra nhằm giải quyết bài toán cốt lõi: Cung cấp giải pháp phần cứng tính toán cục bộ (Private AI, Mini PC, Workstation), triển khai đúng cấu hình theo tải thật và cam kết đồng hành bảo trì tận nơi với SLA phản ứng nhanh 2-4h tại TP.HCM.
          </p>
          <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <button class="sdi-btn-orange trigger-quote-modal" style="font-size: 1rem;">Nhận báo giá dự án</button>
            <a href="<?php echo esc_url(home_url('/giai-phap-ai-server-local-llm/')); ?>" class="sdi-pill-btn-outline" style="border: 2px solid var(--sdi-navy-primary); color: var(--sdi-navy-primary); padding: 0.75rem 1.85rem; border-radius: 9999px; font-weight: 700; text-decoration: none;">Xem các giải pháp</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Hệ Sinh Thái Thống Nhất (Bug 2: Cân đối Logo Navastore = NavaTek không viền tròn) -->
    <section style="padding: 5rem 0; background: #FFFFFF; border-bottom: 1px solid #EFF3FA;">
      <div class="container-sdi" style="max-width: 960px; text-align: center; margin: 0 auto;">
        <span class="eyebrow-badge">HỆ SINH THÁI THỐNG NHẤT</span>
        <h2 style="font-size: 2.35rem; color: var(--sdi-navy-primary); margin-top: 0.5rem; margin-bottom: 1rem; font-weight: 800;">
          Hai thương hiệu, <span style="color: var(--sdi-blue-accent);">một nguồn lực</span>
        </h2>
        <p style="color: var(--sdi-text-secondary); font-size: 1.05rem; margin-bottom: 2.5rem; line-height: 1.7;">
          Navastore phục vụ khách hàng lẻ mua sắm thiết bị nhanh chóng. NavaTek đồng hành cùng khách hàng doanh nghiệp trong khảo sát, tư vấn giải pháp và ký hợp đồng kinh tế dài hạn. Chúng tôi chia sẻ chung kho hàng lớn, đội ngũ kỹ sư tối ưu hóa và mối quan hệ trực tiếp với hãng.
        </p>

        <!-- Brand Box -->
        <div class="sdi-ecosystem-brand-box">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-item brand-link" aria-label="NavaTek B2B">
            <div class="brand-logo-img-wrap">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/LOGO.png" alt="NavaTek - Thương hiệu hạ tầng CNTT & Giải pháp máy chủ AI doanh nghiệp" width="168" height="38" loading="lazy" decoding="async" style="height: 38px; width: auto; object-fit: contain;">
            </div>
            <div class="brand-item-desc" style="margin-top: 0.5rem;">Giải pháp doanh nghiệp</div>
          </a>
          <div class="brand-box-divider">|</div>
          <a href="https://navastore.vn" target="_blank" rel="noopener" class="brand-item brand-link" aria-label="Navastore Bán lẻ">
            <div class="brand-logo-img-wrap" style="display: flex; align-items: center; justify-content: center; height: 48px;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/navastore-logo.png" alt="NavaStore - Hệ sinh thái bán lẻ máy tính & linh kiện Top 2 Google" width="48" height="48" loading="lazy" decoding="async" style="height: 48px; width: 48px; object-fit: contain; border-radius: 50% !important; box-shadow: 0 2px 8px rgba(0,0,0,0.2); background: #FFFFFF;">
            </div>
            <div class="brand-item-desc" style="margin-top: 0.5rem;">Bán lẻ • Top 2 Google</div>
          </a>
        </div>
      </div>
    </section>

    <!-- Năng Lực & Cam Kết Kỹ Thuật (Bug 21) -->
    <section class="tech-capability-section" style="background: #0A1128 !important; color: #FFFFFF; padding: 4.5rem 0; position: relative; overflow: hidden; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
      <div class="container-sdi">
        <div class="tech-capability-grid">
          <div>
            <span class="eyebrow-badge" style="background: rgba(37,99,235,0.2); color: #38BDF8; border: 1px solid rgba(56,189,248,0.3);">NĂNG LỰC KỸ THUẬT</span>
            <h2 style="font-size: 2.35rem; color: #FFFFFF; line-height: 1.25; margin-top: 0.75rem; margin-bottom: 1.25rem;">
              Chúng tôi làm được gì cho doanh nghiệp của bạn?
            </h2>
            <p style="color: #94A3B8; font-size: 1.05rem; line-height: 1.65; margin-bottom: 2rem;">
              Từ đo kiểm benchmark thực tế trước bàn giao, tối ưu nhiệt buồng máy đến chính sách thiết bị dự phòng thay thế khẩn cấp trong 24 giờ.
            </p>
            <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 16px; padding: 1.5rem; text-align: center;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ai.png" alt="Trung tâm đo kiểm và tối ưu hóa hạ tầng máy chủ NavaTek Lab TP.HCM" width="380" height="220" loading="lazy" decoding="async" style="max-height: 220px; width: auto; margin: 0 auto; filter: drop-shadow(0 15px 30px rgba(0,0,0,0.5));">
              <div style="font-size: 0.8rem; color: #64748B; margin-top: 0.75rem; font-weight: 700; text-transform: uppercase;">Phòng Thử Nghiệm Tải Thực Tế (Bench Lab)</div>
            </div>
          </div>

          <div class="tech-capability-features" data-mobile-slider="true">
            <div class="tech-capability-card">
              <div class="tech-capability-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>
              </div>
              <div>
                <h3 style="font-size: 1.2rem; color: #FFFFFF; margin-bottom: 0.35rem;">Lắp đặt & cấu hình tại chỗ</h3>
                <p style="color: #94A3B8; font-size: 0.95rem; line-height: 1.5; margin: 0;">
                  Đội ngũ kỹ sư trực tiếp đến công trình/văn phòng khách hàng, đấu nối hệ thống, setup trọn bộ driver, CUDA, mô hình AI hoặc mạng nội bộ.
                </p>
              </div>
            </div>

            <div class="tech-capability-card">
              <div class="tech-capability-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
              </div>
              <div>
                <h3 style="font-size: 1.2rem; color: #FFFFFF; margin-bottom: 0.35rem;">Kiểm tra trước bàn giao</h3>
                <p style="color: #94A3B8; font-size: 0.95rem; line-height: 1.5; margin: 0;">
                  Chạy stress test full-load liên tục và kiểm nghiệm benchmark thực tế cùng khách hàng trước khi ký biên bản bàn giao nghiệm thu.
                </p>
              </div>
            </div>

            <div class="tech-capability-card">
              <div class="tech-capability-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
              </div>
              <div>
                <h3 style="font-size: 1.2rem; color: #FFFFFF; margin-bottom: 0.35rem;">Bảo trì định kỳ & Thiết bị thay thế</h3>
                <p style="color: #94A3B8; font-size: 0.95rem; line-height: 1.5; margin: 0;">
                  Lên lịch bảo dưỡng vệ sinh định kỳ, có sẵn phương án cho mượn máy/linh kiện dự phòng tương đương ngay trong thời gian xử lý sự cố.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Đội ngũ nhân sự chuyên môn -->
    <section style="padding: 5rem 0; background: #F8FAFD;">
      <div class="container-sdi">
        <div style="text-align: center; max-width: 760px; margin: 0 auto 3rem auto;">
          <span class="eyebrow-badge">ĐỘI NGŨ CHUYÊN MÔN</span>
          <h2 style="font-size: 2.35rem; color: var(--sdi-navy-primary); margin-top: 0.5rem; font-weight: 800;">
            Người trực tiếp làm việc với bạn
          </h2>
          <p style="color: var(--sdi-text-secondary); font-size: 1.05rem; line-height: 1.6; margin-top: 0.75rem;">
            Đội ngũ kỹ sư giải pháp được đào tạo bài bản từ các hãng công nghệ lớn, am hiểu sâu sắc về kiến trúc phần cứng và mô hình AI.
          </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;" data-mobile-slider="true">
          <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 20px; padding: 2rem; text-align: center; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div style="width: 72px; height: 72px; border-radius: 50%; background: #EFF6FF; color: var(--sdi-blue-accent); display: flex; align-items: center; justify-content: center; font-size: 1.4rem; font-weight: 800; margin: 0 auto 1.25rem auto;">TM</div>
            <h3 style="font-size: 1.25rem; color: var(--sdi-navy-primary); margin-bottom: 0.25rem;">Trương Minh Tuấn</h3>
            <div style="font-size: 0.85rem; color: var(--sdi-blue-accent); font-weight: 700; margin-bottom: 1rem;">Trưởng phòng Kỹ thuật & Giải pháp AI</div>
            <p style="font-size: 0.925rem; color: var(--sdi-text-secondary); line-height: 1.6; margin: 0;">
              8+ năm kinh nghiệm thiết kế hạ tầng máy chủ và tối ưu hóa cụm tính toán GPU cho các doanh nghiệp tài chính & R&D.
            </p>
          </div>

          <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 20px; padding: 2rem; text-align: center; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div style="width: 72px; height: 72px; border-radius: 50%; background: #F0FDF4; color: #16A34A; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; font-weight: 800; margin: 0 auto 1.25rem auto;">NL</div>
            <h3 style="font-size: 1.25rem; color: var(--sdi-navy-primary); margin-bottom: 0.25rem;">Nguyễn Văn Long</h3>
            <div style="font-size: 0.85rem; color: #16A34A; font-weight: 700; margin-bottom: 1rem;">Kỹ sư Trưởng Hạ tầng Mạng & Mini PC</div>
            <p style="font-size: 0.925rem; color: var(--sdi-text-secondary); line-height: 1.6; margin: 0;">
              Chuyên gia triển khai mạng doanh nghiệp, NAS lưu trữ đồng bộ và tự động hóa quy trình văn phòng thông minh.
            </p>
          </div>

          <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 20px; padding: 2rem; text-align: center; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <div style="width: 72px; height: 72px; border-radius: 50%; background: #FFF7ED; color: #EA580C; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; font-weight: 800; margin: 0 auto 1.25rem auto;">HA</div>
            <h3 style="font-size: 1.25rem; color: var(--sdi-navy-primary); margin-bottom: 0.25rem;">Hoàng Quốc Anh</h3>
            <div style="font-size: 0.85rem; color: #EA580C; font-weight: 700; margin-bottom: 1rem;">Trưởng nhóm Bảo trì & Hậu mãi B2B</div>
            <p style="font-size: 0.925rem; color: var(--sdi-text-secondary); line-height: 1.6; margin: 0;">
              Phụ trách điều phối đội ngũ kỹ thuật on-site cam kết phản ứng trong 2-4h cho các khách hàng ký hợp đồng SLA.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Đối tác & Nhà phân phối (Bug 6: Logo SVG chuẩn) -->
    <section style="padding: 4rem 0; background: #FFFFFF; border-top: 1px solid #EFF3FA;">
      <div class="container-sdi" style="text-align: center;">
        <span class="eyebrow-badge">ĐỐI TÁC CHIẾN LƯỢC</span>
        <h2 style="font-size: 2.1rem; color: var(--sdi-navy-primary); margin-top: 0.5rem; margin-bottom: 2rem; font-weight: 800;">
          Đối tác công nghệ & Nhà phân phối chính hãng
        </h2>
        
        <div class="partner-logos-grid-new">
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

  </main>

  <!-- Unified Master Footer (Bug 7, Bug 22, Bug 24) -->

<?php
get_footer();
?>