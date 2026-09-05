<?php
/**
 * Template Name: Giải Pháp AI Server & Local LLM
 */
get_header();
?>

<!-- HERO BANNER (Above the Fold) -->
  <section class="tech-dot-grid-dark sdi-hero-section" style="background: linear-gradient(135deg, #0A1128 0%, #060B1E 100%) !important; color: #FFFFFF; position: relative; overflow: hidden; padding: 4.5rem 0 3.5rem 0;">
    <div class="container-sdi" style="position: relative; z-index: 2;">
      <div class="sdi-split-grid">
        
        <div class="sdi-animate-fade-up">
          <span class="eyebrow-badge" style="background: rgba(37, 99, 235, 0.15); color: #38BDF8; display: inline-flex; align-items: center; gap: 0.35rem; border: 1px solid rgba(56, 189, 248, 0.25);">
            <i data-lucide="cpu" style="width: 13px; height: 13px;"></i>
            <span>GIẢI PHÁP DOANH NGHIỆP</span>
          </span>
          <h1 style="color: #FFFFFF; font-size: 2.8rem; margin-top: 0.75rem; margin-bottom: 0.75rem; line-height: 1.25; font-weight: 900;">AI Server & Trí Tuệ Nhân Tạo Cục Bộ</h1>
          <p style="color: #38BDF8; font-size: 1.2rem; font-weight: 700; margin-bottom: 1rem; line-height: 1.5;">
            Hạ tầng máy chủ AI On-Premise chuyên biệt. Tối ưu chi phí TCO - Bảo mật dữ liệu tuyệt đối.
          </p>
          <p style="color: #94A3B8; font-size: 1.05rem; max-width: 780px; line-height: 1.65; margin: 0 0 2rem 0;">
            Chuyên cung cấp hạ tầng AI Server On-Premise, Mini PC và giải pháp tự động hóa vận hành. Cam kết SLA on-site 2-4h tại TP.HCM. Cấu hình &amp; benchmark theo tải thực tế mô hình LLM từ 8B đến 70B+.
          </p>
          
          <!-- Primary & Secondary CTA Buttons -->
          <div style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center;">
            <button class="sdi-btn-orange trigger-quote-modal">Nhận tư vấn giải pháp</button>
            <a href="#so-sanh-tco" class="sdi-pill-btn-outline" style="border: 2px solid #38BDF8; color: #38BDF8; padding: 0.75rem 1.75rem; border-radius: 999px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem; transition: all 0.3s ease;">
              <i data-lucide="trending-down" style="width: 16px; height: 16px;"></i>
              <span>Xem so sánh chi phí Cloud vs. Local</span>
            </a>
          </div>

          <!-- Trust Signals: ASUS & MINISFORUM Gold Partner Badges -->
          <div class="hero-partner-trust-strip">
            <span class="hero-partner-label">
              <i data-lucide="shield-check" style="width: 15px; height: 15px; color: #38BDF8;"></i>
              ĐỐI TÁC ỦY QUYỀN CHÍNH THỨC:
            </span>
            <div class="hero-partner-badges">
              <span class="partner-badge-pill partner-badge-asus">
                <i data-lucide="award" style="width: 14px; height: 14px;"></i>
                Gold Partner ASUS
              </span>
              <span class="partner-badge-pill partner-badge-minisforum">
                <i data-lucide="cpu" style="width: 14px; height: 14px;"></i>
                MINISFORUM Authorized Partner
              </span>
              <span class="partner-badge-pill partner-badge-security">
                <i data-lucide="lock" style="width: 13px; height: 13px;"></i>
                100% On-Premise LAN
              </span>
            </div>
          </div>

        </div>

        <!-- Right Column: Interactive Wireframe Tech Graphic -->
        <div class="sdi-animate-fade-up sdi-delay-2 hero-floating-graphic" style="display: flex; align-items: center; justify-content: center; width: 100%;">
          <div style="position: relative; width: 100%; min-height: 300px; display: flex; align-items: center; justify-content: center;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/combo.png" alt="Trạm AI Server GPU NavaTek B2B On-Premise Xử Lý Mô Hình Local LLM" width="350" height="280" fetchpriority="high" decoding="async" class="graphic-blend" style="max-height: 280px; width: auto; object-fit: contain; filter: drop-shadow(0 20px 40px rgba(0,0,0,0.6));" />
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION: NỖI ĐAU THỰC TẾ & GIẢI PHÁP TỪ NAVATEK -->
  <section class="section-pain-solution" style="padding: 5rem 0; background: #FFFFFF; border-bottom: 1px solid #EFF3FA;">
    <div class="container-sdi">
      
      <!-- Section Header -->
      <div style="text-align: center; max-width: 820px; margin: 0 auto 3.5rem auto;">
        <span class="eyebrow-badge" style="background: rgba(37, 99, 235, 0.08); color: var(--sdi-blue-accent); border: 1px solid rgba(37, 99, 235, 0.15);">THỰC TRẠNG & GIẢI PHÁP HẠ TẦNG</span>
        <h2 style="font-size: 2.35rem; color: var(--sdi-navy-primary); margin-top: 0.5rem; font-weight: 800; letter-spacing: -0.02em;">
          Khi Nào Cần AI Server Riêng &amp; Giải Pháp Từ NavaTek
        </h2>
        <p style="color: var(--sdi-text-secondary); font-size: 1.05rem; line-height: 1.65; margin-top: 0.75rem;">
          Đối chiếu trực tiếp 3 thách thức lớn nhất khi ứng dụng AI doanh nghiệp và phương án máy chủ vật lý On-Premises may đo chính xác.
        </p>
      </div>

      <!-- 3-Column Pair Cards Grid -->
      <div class="ai-pain-solution-grid" data-mobile-slider="true">
        
        <!-- Pair 1: Bảo mật Dữ liệu -->
        <div class="ai-pair-card">
          <!-- Top: Nỗi đau (Problem) -->
          <div class="ai-pair-problem">
            <div class="ai-pair-badge problem">
              <i data-lucide="shield-alert" style="width: 15px; height: 15px;"></i>
              <span>NỖI ĐAU THỰC TẾ</span>
            </div>
            <h3 class="ai-pair-title">Dữ liệu nhạy cảm không thể lên Cloud</h3>
            <p class="ai-pair-desc">
              Doanh nghiệp tài chính, y tế, luật, thương mại điện tử bắt buộc phải tự lưu trữ dữ liệu tại chỗ. Nguy cơ rò rỉ hồ sơ khách hàng, bí mật kinh doanh và mã nguồn khi gửi API lên cloud công cộng.
            </p>
          </div>

          <!-- Middle Divider / Connector -->
          <div class="ai-pair-divider">
            <div class="ai-pair-arrow">
              <i data-lucide="arrow-down" style="width: 14px; height: 14px;"></i>
            </div>
          </div>

          <!-- Bottom: Giải pháp NavaTek (Solution) -->
          <div class="ai-pair-solution">
            <div class="ai-pair-badge solution">
              <i data-lucide="shield-check" style="width: 15px; height: 15px;"></i>
              <span>GIẢI PHÁP NAVATEK</span>
            </div>
            <h4 class="ai-pair-sol-title">100% Cục bộ &amp; Tư vấn đúng tải thật</h4>
            <p class="ai-pair-sol-desc">
              Trạm AI Server vật lý đặt tại văn phòng, xử lý dữ liệu qua mạng nội bộ LAN không ra Internet. Kỹ sư đo lường chuẩn xác tải mô hình (LLM 8B–70B) để chọn đúng GPU, RAM, SSD, tránh lãng phí.
            </p>
          </div>
        </div>

        <!-- Pair 2: Chi phí vận hành TCO -->
        <div class="ai-pair-card">
          <!-- Top: Nỗi đau (Problem) -->
          <div class="ai-pair-problem">
            <div class="ai-pair-badge problem">
              <i data-lucide="trending-up" style="width: 15px; height: 15px;"></i>
              <span>NỖI ĐAU THỰC TẾ</span>
            </div>
            <h3 class="ai-pair-title">Chi phí thuê GPU Cloud tăng phi mã</h3>
            <p class="ai-pair-desc">
              Khi chạy tải suy luận AI liên tục 24/7 hoặc tích hợp RAG quy mô lớn, chi phí thuê API/Cloud hàng tháng tích lũy theo cấp số nhân, trở thành gánh nặng ngân sách định kỳ cho doanh nghiệp.
            </p>
          </div>

          <!-- Middle Divider / Connector -->
          <div class="ai-pair-divider">
            <div class="ai-pair-arrow">
              <i data-lucide="arrow-down" style="width: 14px; height: 14px;"></i>
            </div>
          </div>

          <!-- Bottom: Giải pháp NavaTek (Solution) -->
          <div class="ai-pair-solution">
            <div class="ai-pair-badge solution">
              <i data-lucide="check-circle-2" style="width: 15px; height: 15px;"></i>
              <span>GIẢI PHÁP NAVATEK</span>
            </div>
            <h4 class="ai-pair-sol-title">Sở hữu vĩnh viễn &amp; Nghiệm thu tận nơi</h4>
            <p class="ai-pair-sol-desc">
              Đầu tư 1 lần sở hữu thiết bị trọn đời, hoàn vốn chỉ sau 4–6 tháng. Chạy thử nghiệm hiệu năng thực tế (Benchmark Full Load) trực tiếp cùng khách hàng tại phòng máy trước khi ký nghiệm thu.
            </p>
          </div>
        </div>

        <!-- Pair 3: Độ trễ & Ổn định -->
        <div class="ai-pair-card">
          <!-- Top: Nỗi đau (Problem) -->
          <div class="ai-pair-problem">
            <div class="ai-pair-badge problem">
              <i data-lucide="wifi-off" style="width: 15px; height: 15px;"></i>
              <span>NỖI ĐAU THỰC TẾ</span>
            </div>
            <h3 class="ai-pair-title">Độ trễ cao &amp; Phụ thuộc đường truyền</h3>
            <p class="ai-pair-desc">
              Các tác vụ camera AI giám sát thông minh, nhận diện khuôn mặt hay chatbot tra cứu tức thì thường bị nghẽn mạng hoặc đứt cáp biển quốc tế, làm gián đoạn luồng vận hành công ty.
            </p>
          </div>

          <!-- Middle Divider / Connector -->
          <div class="ai-pair-divider">
            <div class="ai-pair-arrow">
              <i data-lucide="arrow-down" style="width: 14px; height: 14px;"></i>
            </div>
          </div>

          <!-- Bottom: Giải pháp NavaTek (Solution) -->
          <div class="ai-pair-solution">
            <div class="ai-pair-badge solution">
              <i data-lucide="zap" style="width: 15px; height: 15px;"></i>
              <span>GIẢI PHÁP NAVATEK</span>
            </div>
            <h4 class="ai-pair-sol-title">Tốc độ tức thì &amp; Bảo hành On-site 24/7</h4>
            <p class="ai-pair-sol-desc">
              Tốc độ phản hồi tính bằng mili-giây qua mạng nội bộ. Đi kèm cam kết SLA phản ứng kỹ thuật On-site 2–4h tại TP.HCM và linh kiện Ram/SSD bảo hành 1 đổi 1 ngay lập tức.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION: CHÍNH SÁCH & SLA (NÂNG CẤP USP CỐT LÕI) -->
  <section style="padding: 4.5rem 0; background: #F8FAFD; border-bottom: 1px solid var(--sdi-border);">
    <div class="container-sdi">
      <div class="sla-highlight-banner">
        <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 1rem;">
          <span class="eyebrow-badge" style="background: rgba(56, 189, 248, 0.2); color: #38BDF8; border: 1px solid rgba(56, 189, 248, 0.4);">
            CAM KẾT CHẤT LƯỢNG B2B
          </span>
          <span style="color: #94A3B8; font-size: 0.85rem; font-weight: 600;">SLA &amp; CHÍNH SÁCH LINH KIỆN CỐT LÕI</span>
        </div>

        <h3 style="font-size: 2rem; color: #FFFFFF; margin-bottom: 1.25rem; font-weight: 800;">
          Chính Sách Hậu Mãi &amp; Cam Kết Triệt Tiêu Rủi Ro Doanh Nghiệp
        </h3>

        <!-- Core SLA Statement Quote -->
        <blockquote class="sla-core-statement" style="margin: 0 0 2rem 0;">
          <em>“Cam kết SLA phản ứng kỹ thuật On-site 2–4h tại TP.HCM. Toàn bộ hạ tầng cam kết BẢO HÀNH 36 THÁNG. Linh kiện Ram/SSD được bảo hành 1 đổi 1 trong thời gian bảo hành, đảm bảo không gián đoạn luồng suy luận AI.”</em>
        </blockquote>

        <!-- 4 Key SLA Item Cards Grid -->
        <div class="sla-grid-4">
          <div class="sla-item-card">
            <div class="sla-item-icon">
              <i data-lucide="clock" style="width: 22px; height: 22px;"></i>
            </div>
            <div class="sla-item-title">SLA On-site 2–4h TP.HCM</div>
            <div class="sla-item-desc">Kỹ sư phần cứng có mặt trực tiếp tại văn phòng xử lý sự cố trong vòng 2-4 giờ làm việc.</div>
          </div>

          <div class="sla-item-card">
            <div class="sla-item-icon">
              <i data-lucide="shield-check" style="width: 22px; height: 22px;"></i>
            </div>
            <div class="sla-item-title">Bảo Hành 36 Tháng</div>
            <div class="sla-item-desc">Cam kết bảo hành toàn bộ phần cứng máy chủ 3 năm chính hãng ASUS &amp; Minisforum.</div>
          </div>

          <div class="sla-item-card">
            <div class="sla-item-icon">
              <i data-lucide="refresh-cw" style="width: 22px; height: 22px;"></i>
            </div>
            <div class="sla-item-title">1 Đổi 1 RAM / SSD</div>
            <div class="sla-item-desc">Linh kiện lưu trữ và bộ nhớ lỗi được thay mới 100% 1 đổi 1 ngay tức thì, không gián đoạn luồng AI.</div>
          </div>

          <div class="sla-item-card">
            <div class="sla-item-icon">
              <i data-lucide="server" style="width: 22px; height: 22px;"></i>
            </div>
            <div class="sla-item-title">Sẵn Sàng Máy Dự Phòng</div>
            <div class="sla-item-desc">Kho linh kiện sẵn thiết bị &amp; máy trạm dự phòng thay thế tương đương trong thời gian xử lý sự cố.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: TỰ ĐỘNG HÓA & QUẢN TRỊ HỆ THỐNG (WORKFLOW INTEGRATION) - Feedback Item #3 -->
  <section id="tu-dong-hoa" style="padding: 3.5rem 0 4rem 0; background: #FFFFFF; border-bottom: 1px solid var(--sdi-border);">
    <div class="container-sdi">
      
      <div style="text-align: center; max-width: 820px; margin: 0 auto 2.25rem auto;">
        <span class="eyebrow-badge" style="background: rgba(37, 99, 235, 0.08); color: var(--sdi-blue-accent); border: 1px solid rgba(37, 99, 235, 0.15); margin-bottom: 0.5rem;">
          WORKFLOW INTEGRATION
        </span>
        <h2 style="font-size: 2rem; color: var(--sdi-navy-primary); margin-top: 0.35rem; margin-bottom: 0.75rem; font-weight: 800; letter-spacing: -0.02em;">
          Tích Hợp Hạ Tầng AI Vào Luồng Vận Hành Doanh Nghiệp
        </h2>
        <div style="background: #F8FAFD; border-left: 3px solid var(--sdi-blue-accent); border-radius: 0 10px 10px 0; padding: 0.75rem 1.25rem; max-width: 760px; margin: 0.75rem auto 0 auto; text-align: left;">
          <p style="color: #334155; font-size: 0.925rem; line-height: 1.55; margin: 0; font-weight: 500;">
            <em>"Hạ tầng không chỉ để tính toán. Chúng tôi tư vấn thiết lập kiến trúc đồng bộ dữ liệu theo thời gian thực, tích hợp luồng xử lý AI vào các nền tảng quản trị doanh nghiệp (Lark) và hệ thống ERP (Sapo), giúp <strong>tinh gọn 80% nhân sự vận hành</strong>."</em>
          </p>
        </div>
      </div>

      <!-- Visual Pipeline Workflow Architecture -->
      <div class="workflow-pipeline-grid">
        
        <!-- Step 1: Input Data Sources -->
        <div class="workflow-step-card">
          <div class="workflow-step-badge" style="background: #EFF6FF; color: #2563EB;">
            <i data-lucide="database" style="width: 12px; height: 12px;"></i>
            <span>BƯỚC 1: DỮ LIỆU ĐẦU VÀO</span>
          </div>
          <h4 style="font-size: 1.1rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem; font-weight: 800;">
            Hệ Thống Doanh Nghiệp
          </h4>
          <p style="font-size: 0.825rem; color: var(--sdi-text-secondary); line-height: 1.5; margin-bottom: 0.75rem;">
            Đồng bộ thời gian thực từ các nguồn nghiệp vụ cốt lõi:
          </p>
          <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.45rem; font-size: 0.825rem; color: var(--sdi-text-main);">
            <li style="display: flex; align-items: center; gap: 0.45rem;">
              <i data-lucide="check-circle-2" style="width: 14px; height: 14px; color: #10B981; flex-shrink: 0;"></i>
              <span><strong>ERP Sapo:</strong> Quản lý kho &amp; đơn hàng</span>
            </li>
            <li style="display: flex; align-items: center; gap: 0.45rem;">
              <i data-lucide="check-circle-2" style="width: 14px; height: 14px; color: #10B981; flex-shrink: 0;"></i>
              <span><strong>Lark Base:</strong> Phê duyệt &amp; quy trình</span>
            </li>
            <li style="display: flex; align-items: center; gap: 0.45rem;">
              <i data-lucide="check-circle-2" style="width: 14px; height: 14px; color: #10B981; flex-shrink: 0;"></i>
              <span><strong>Web Crawler:</strong> Dữ liệu thị trường</span>
            </li>
            <li style="display: flex; align-items: center; gap: 0.45rem;">
              <i data-lucide="check-circle-2" style="width: 14px; height: 14px; color: #10B981; flex-shrink: 0;"></i>
              <span><strong>Database SQL / PDF:</strong> Hóa đơn kế toán</span>
            </li>
          </ul>
        </div>

        <!-- Connector 1 -->
        <div class="workflow-connector-col">
          <div class="workflow-connector-pill">Real-time API</div>
          <i data-lucide="arrow-right" style="width: 20px; height: 20px;"></i>
          <div class="workflow-connector-pill">Webhook Sync</div>
        </div>

        <!-- Step 2: Center Processing Engine (NavaTek Local AI Server) -->
        <div class="workflow-step-card center-engine">
          <div class="workflow-step-badge" style="background: rgba(56, 189, 248, 0.2); color: #38BDF8; border: 1px solid rgba(56, 189, 248, 0.35);">
            <i data-lucide="cpu" style="width: 12px; height: 12px;"></i>
            <span>BƯỚC 2: TRỌNG TÂM XỬ LÝ (ON-PREMISE)</span>
          </div>
          <h4 style="font-size: 1.15rem; margin-bottom: 0.5rem; font-weight: 800;">
            Trạm AI Server NavaTek Cục Bộ
          </h4>
          <p style="font-size: 0.825rem; line-height: 1.5; margin-bottom: 0.85rem; color: #94A3B8;">
            Suy luận tự động bảo mật 100% trong mạng LAN nội bộ:
          </p>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.5rem; font-size: 0.78rem;">
            <div style="background: rgba(255,255,255,0.06); padding: 0.5rem 0.65rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1);">
              <div style="font-weight: 700; color: #38BDF8; display: flex; align-items: center; gap: 0.35rem;">
                <i data-lucide="cpu" style="width: 13px; height: 13px; color: #38BDF8;"></i>
                <span>Private LLM 8B–70B</span>
              </div>
              <div style="color: #94A3B8; font-size: 0.72rem; margin-top: 0.15rem;">Llama-3 / Qwen / DeepSeek</div>
            </div>
            <div style="background: rgba(255,255,255,0.06); padding: 0.5rem 0.65rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1);">
              <div style="font-weight: 700; color: #38BDF8; display: flex; align-items: center; gap: 0.35rem;">
                <i data-lucide="file-text" style="width: 13px; height: 13px; color: #38BDF8;"></i>
                <span>OCR Kế Toán &amp; HĐ</span>
              </div>
              <div style="color: #94A3B8; font-size: 0.72rem; margin-top: 0.15rem;">Bóc tách chứng từ tự động</div>
            </div>
            <div style="background: rgba(255,255,255,0.06); padding: 0.5rem 0.65rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1);">
              <div style="font-weight: 700; color: #38BDF8; display: flex; align-items: center; gap: 0.35rem;">
                <i data-lucide="search" style="width: 13px; height: 13px; color: #38BDF8;"></i>
                <span>Local RAG Vector DB</span>
              </div>
              <div style="color: #94A3B8; font-size: 0.72rem; margin-top: 0.15rem;">Tra cứu tri thức &lt; 50ms</div>
            </div>
            <div style="background: rgba(255,255,255,0.06); padding: 0.5rem 0.65rem; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1);">
              <div style="font-weight: 700; color: #38BDF8; display: flex; align-items: center; gap: 0.35rem;">
                <i data-lucide="shield-check" style="width: 13px; height: 13px; color: #38BDF8;"></i>
                <span>Zero Cloud Leak</span>
              </div>
              <div style="color: #94A3B8; font-size: 0.72rem; margin-top: 0.15rem;">Bảo mật LAN tuyệt đối</div>
            </div>
          </div>
        </div>

        <!-- Connector 2 -->
        <div class="workflow-connector-col">
          <div class="workflow-connector-pill">Tự Động Hóa</div>
          <i data-lucide="arrow-right" style="width: 20px; height: 20px;"></i>
          <div class="workflow-connector-pill">Tinh Gọn 80%</div>
        </div>

        <!-- Step 3: Enterprise Automation Output -->
        <div class="workflow-step-card">
          <div class="workflow-step-badge" style="background: #ECFDF5; color: #059669;">
            <i data-lucide="zap" style="width: 12px; height: 12px;"></i>
            <span>BƯỚC 3: KẾT QUẢ VẬN HÀNH</span>
          </div>
          <h4 style="font-size: 1.1rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem; font-weight: 800;">
            Tinh Gọn 80% Nhân Sự
          </h4>
          <p style="font-size: 0.825rem; color: var(--sdi-text-secondary); line-height: 1.5; margin-bottom: 0.75rem;">
            Luồng công việc thực thi tự động không gián đoạn 24/7:
          </p>
          <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.45rem; font-size: 0.825rem; color: var(--sdi-text-main);">
            <li style="display: flex; align-items: center; gap: 0.45rem;">
              <i data-lucide="check-circle-2" style="width: 14px; height: 14px; color: #10B981; flex-shrink: 0;"></i>
              <span><strong>Đồng bộ ERP:</strong> Tự động số lượng kho</span>
            </li>
            <li style="display: flex; align-items: center; gap: 0.45rem;">
              <i data-lucide="check-circle-2" style="width: 14px; height: 14px; color: #10B981; flex-shrink: 0;"></i>
              <span><strong>Lark AI Bot:</strong> Hỗ trợ CSKH 24/7</span>
            </li>
            <li style="display: flex; align-items: center; gap: 0.45rem;">
              <i data-lucide="check-circle-2" style="width: 14px; height: 14px; color: #10B981; flex-shrink: 0;"></i>
              <span><strong>Báo cáo tự động:</strong> Đối soát tức thời</span>
            </li>
            <li style="display: flex; align-items: center; gap: 0.45rem;">
              <i data-lucide="check-circle-2" style="width: 14px; height: 14px; color: #10B981; flex-shrink: 0;"></i>
              <span><strong>Triệt tiêu sai sót:</strong> Giảm thiểu lỗi thủ công</span>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- Năng Lực Kỹ Thuật (Phòng Đo Kiểm Full Load) -->
  <section class="tech-capability-section" style="background: #0A1128 !important; color: #FFFFFF; padding: 4.5rem 0; position: relative; overflow: hidden; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container-sdi">
      <div class="tech-capability-grid">
        <div>
          <span class="eyebrow-badge" style="background: rgba(37,99,235,0.2); color: #38BDF8; border: 1px solid rgba(56,189,248,0.3);">NĂNG LỰC KỸ THUẬT</span>
          <h2 style="font-size: 2.35rem; color: #FFFFFF; line-height: 1.25; margin-top: 0.75rem; margin-bottom: 1.25rem;">
            Chúng tôi làm được gì cho doanh nghiệp của bạn?
          </h2>
          <p style="color: #94A3B8; font-size: 1.05rem; line-height: 1.65; margin-bottom: 2rem;">
            Quy trình đo kiểm benchmark thực tế trước bàn giao, tối ưu luồng gió buồng máy và chính sách thiết bị thay thế khẩn cấp.
          </p>
          <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 16px; padding: 1.5rem; text-align: center;">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ai.png" alt="Phòng Thử Nghiệm Stress-Test Full Load và Đo Kiểm Benchmark Trạm AI NavaTek" width="320" height="200" loading="lazy" decoding="async" style="max-height: 200px; width: auto; margin: 0 auto; filter: drop-shadow(0 15px 30px rgba(0,0,0,0.5));">
            <div style="font-size: 0.8rem; color: #64748B; margin-top: 0.75rem; font-weight: 700; text-transform: uppercase;">Phòng Thử Nghiệm Stress-Test Full Load</div>
          </div>
        </div>

        <div class="tech-capability-features" data-mobile-slider="true">
          <div class="tech-capability-card">
            <div class="tech-capability-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>
            </div>
            <div>
              <h3 style="font-size: 1.2rem; color: #FFFFFF; margin-bottom: 0.35rem;">Lắp đặt &amp; cấu hình tại chỗ</h3>
              <p style="color: #94A3B8; font-size: 0.95rem; line-height: 1.5; margin: 0;">
                Kỹ sư trực tiếp đến văn phòng khách hàng, đấu nối hệ thống, setup trọn bộ driver CUDA, PyTorch, Docker, Ollama hoặc mạng nội bộ.
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
                Chạy stress-test full tải liên tục và kiểm nghiệm benchmark thực tế cùng khách hàng trước khi ký biên bản bàn giao nghiệm thu.
              </p>
            </div>
          </div>

          <div class="tech-capability-card">
            <div class="tech-capability-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
            </div>
            <div>
              <h3 style="font-size: 1.2rem; color: #FFFFFF; margin-bottom: 0.35rem;">Bảo trì định kỳ &amp; Thiết bị thay thế</h3>
              <p style="color: #94A3B8; font-size: 0.95rem; line-height: 1.5; margin: 0;">
                Lên lịch bảo dưỡng vệ sinh định kỳ hàng quý, có sẵn máy/linh kiện dự phòng tương đương ngay trong thời gian bảo hành xử lý sự cố.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CẤU HÌNH ĐỀ XUẤT & BẢNG SO SÁNH (id="cau-hinh") - Feedback Item #4 Tiering Strategy -->
  <section id="cau-hinh" style="padding: 5.5rem 0; background: #FFFFFF;">
    <div class="container-sdi">
      <div style="text-align: center; max-width: 820px; margin: 0 auto 3.5rem auto;">
        <span class="eyebrow-badge">CẤU HÌNH ĐÁP ỨNG TẢI THỰC TẾ</span>
        <h2 style="font-size: 2.35rem; color: var(--sdi-navy-primary); margin-top: 0.5rem; font-weight: 800;">
          Ba Mức Cấu Hình AI Server Phù Hợp Tham Số Mô Hình LLM
        </h2>
        <p style="color: var(--sdi-text-secondary); font-size: 1.05rem; line-height: 1.6; margin-top: 0.75rem;">
          Giám đốc kỹ thuật (CTO) và phòng R&amp;D dễ dàng lựa chọn cấu hình chuẩn xác dựa trên tham số mô hình (Parameter size) định vận hành.
        </p>
      </div>

      <!-- Tiering Cards Grid -->
      <div class="sdi-grid-3" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.75rem; margin-bottom: 3.5rem;" data-mobile-slider="true">
        
        <!-- Config 1: Workstation 1 GPU -->
        <div class="bento-card bento-card-white" style="padding: 2.25rem 2rem; justify-content: space-between; border: 1px solid var(--sdi-border); border-radius: 20px; display: flex; flex-direction: column;">
          <div>
            <span class="eyebrow-badge" style="background: rgba(0, 51, 102, 0.06); color: var(--sdi-navy-primary);">Mức Khởi Đầu · 1 GPU</span>
            <h3 style="font-size: 1.4rem; color: var(--sdi-navy-primary); margin: 0.5rem 0 0.5rem 0;">Workstation 1 GPU (24GB VRAM)</h3>
            <div style="display: inline-flex; align-items: center; gap: 0.35rem; background: #F1F5F9; color: #334155; font-size: 0.8rem; font-weight: 700; padding: 0.35rem 0.7rem; border-radius: 6px; margin-bottom: 1rem; border: 1px solid #E2E8F0;">
              <i data-lucide="cpu" style="width: 13px; height: 13px; color: #2563EB;"></i>
              <span>Tối ưu cho Llama-3 8B (Q8) / Qwen 14B</span>
            </div>
            <p style="font-size: 0.9rem; color: var(--sdi-text-secondary); margin-bottom: 1.5rem; line-height: 1.6;">
              Phù hợp cho nhóm nghiên cứu từ 1-5 người chạy thử nghiệm Private LLM nội bộ, bóc tách hóa đơn OCR, tìm kiếm tài liệu RAG và trợ lý văn phòng.
            </p>
          </div>
          <div>
            <div style="font-size: 1.65rem; font-weight: 800; color: var(--sdi-navy-primary); margin-bottom: 1rem;">Từ 79.000.000₫</div>
            <a href="<?php echo esc_url(home_url('/chi-tiet-may-don/')); ?>" class="sdi-pill-btn-outline" style="width: 100%; justify-content: center; font-size: 0.85rem;">Xem chi tiết cấu hình</a>
          </div>
        </div>

        <!-- Config 2: Server AI 2 GPU -->
        <div class="bento-card" style="padding: 2.25rem 2rem; justify-content: space-between; border: 2px solid var(--sdi-blue-accent); background: linear-gradient(135deg, #FFFFFF 0%, #F8FAFD 100%); border-radius: 20px; display: flex; flex-direction: column; position: relative; box-shadow: 0 10px 30px rgba(0, 51, 102, 0.06);">
          <div>
            <div style="display: flex; align-items: center; justify-content: space-between; gap: 0.5rem; margin-bottom: 0.5rem; flex-wrap: wrap;">
              <span class="eyebrow-badge" style="background: rgba(37, 99, 235, 0.1); color: var(--sdi-blue-accent); margin-bottom: 0;">Phổ Biến Nhất · 2 GPU</span>
              <span style="background: var(--sdi-navy-primary); color: #FFFFFF; font-size: 0.72rem; font-weight: 700; padding: 0.3rem 0.75rem; border-radius: 999px; text-transform: uppercase; letter-spacing: 0.04em; display: inline-flex; align-items: center; gap: 0.3rem;">
                Khuyên Dùng Cho Doanh Nghiệp
              </span>
            </div>
            <h3 style="font-size: 1.4rem; color: var(--sdi-navy-primary); margin: 0.5rem 0 0.5rem 0;">Server AI 2 GPU (48GB VRAM)</h3>
            <div style="display: inline-flex; align-items: center; gap: 0.35rem; background: #EFF6FF; color: #1D4ED8; font-size: 0.8rem; font-weight: 700; padding: 0.35rem 0.7rem; border-radius: 6px; margin-bottom: 1rem; border: 1px solid #BFDBFE;">
              <i data-lucide="cpu" style="width: 13px; height: 13px; color: #2563EB;"></i>
              <span>Fine-tuning LLM 70B (Q4) / Stable Diffusion</span>
            </div>
            <p style="font-size: 0.9rem; color: var(--sdi-text-secondary); margin-bottom: 1.5rem; line-height: 1.6;">
              Dành cho phòng R&amp;D chuyên nghiệp, fine-tuning mô hình dữ liệu lớn, xử lý hình ảnh thị giác máy tính tải cao hoặc phục vụ 50-200 nhân viên đồng thời.
            </p>
          </div>
          <div>
            <div style="font-size: 1.65rem; font-weight: 800; color: var(--sdi-navy-primary); margin-bottom: 1rem;">Từ 189.000.000₫</div>
            <a href="<?php echo esc_url(home_url('/combo-tron-bo/')); ?>" class="sdi-btn-orange" style="width: 100%; justify-content: center; font-size: 0.85rem;">Xem chi tiết cấu hình</a>
          </div>
        </div>

        <!-- Config 3: Cluster 4+ GPU -->
        <div class="bento-card bento-card-white" style="padding: 2.25rem 2rem; justify-content: space-between; border: 1px solid var(--sdi-border); border-radius: 20px; display: flex; flex-direction: column;">
          <div>
            <span class="eyebrow-badge" style="background: rgba(0, 51, 102, 0.06); color: var(--sdi-navy-primary);">Tải Lớn &amp; Phân Tán · 4+ GPU</span>
            <h3 style="font-size: 1.4rem; color: var(--sdi-navy-primary); margin: 0.5rem 0 0.5rem 0;">Cluster 4+ GPU (96GB–320GB+)</h3>
            <div style="display: inline-flex; align-items: center; gap: 0.35rem; background: #F1F5F9; color: #334155; font-size: 0.8rem; font-weight: 700; padding: 0.35rem 0.7rem; border-radius: 6px; margin-bottom: 1rem; border: 1px solid #E2E8F0;">
              <i data-lucide="cpu" style="width: 13px; height: 13px; color: #2563EB;"></i>
              <span>DeepSeek R1 / LLM 70B Full / Multi-Agent</span>
            </div>
            <p style="font-size: 0.9rem; color: #475569; margin-bottom: 1.5rem; line-height: 1.6;">
              Giải pháp cụm máy chủ phân tán hiệu năng cực cao dành cho doanh nghiệp lớn, sàn thương mại điện tử hoặc ứng dụng sản xuất hàng triệu giao dịch.
            </p>
          </div>
          <div>
            <div style="font-size: 1.65rem; font-weight: 800; color: var(--sdi-navy-primary); margin-bottom: 1rem;">Liên Hệ Khảo Sát</div>
            <button class="sdi-pill-btn-outline trigger-quote-modal" style="width: 100%; justify-content: center; font-size: 0.85rem;">Liên hệ tư vấn riêng</button>
          </div>
        </div>

      </div>

      <!-- Bảng So Sánh Kỹ Thuật (Tối Ưu Featured Snippets Google với Semantic HTML) -->
      <div style="overflow-x: auto; border: 1px solid var(--sdi-border); border-radius: 16px; background: #FFFFFF; box-shadow: var(--sdi-shadow-soft); margin-bottom: 3.5rem;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.925rem;" aria-label="Bảng so sánh thông số kỹ thuật AI Server NavaTek">
          <caption style="text-align: left; padding: 1.25rem 1.5rem 0.5rem 1.5rem; font-size: 1.1rem; font-weight: 800; color: var(--sdi-navy-primary);">
            Bảng Thông Số Kỹ Thuật &amp; Tương Thích Mô Hình AI Server NavaTek
          </caption>
          <thead>
            <tr style="background: #F8FAFD; border-bottom: 2px solid var(--sdi-border);">
              <th scope="col" style="padding: 1.25rem 1.5rem; font-weight: 800; color: var(--sdi-navy-primary);">Thông Số Kỹ Thuật</th>
              <th scope="col" style="padding: 1.25rem 1.5rem; font-weight: 800; color: var(--sdi-navy-primary);">Workstation 1 GPU</th>
              <th scope="col" style="padding: 1.25rem 1.5rem; font-weight: 800; color: var(--sdi-blue-accent);">Server AI 2 GPU (Tiêu chuẩn)</th>
              <th scope="col" style="padding: 1.25rem 1.5rem; font-weight: 800; color: var(--sdi-navy-primary);">Cluster 4+ GPU (Công nghiệp)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid #EFF3FA; background: rgba(37, 99, 235, 0.03);">
              <th scope="row" style="padding: 1rem 1.5rem; font-weight: 800; color: var(--sdi-navy-primary);">VRAM &amp; Tham Số LLM Tương Ứng</th>
              <td style="padding: 1rem 1.5rem; font-weight: 600; color: #1D4ED8;">24GB VRAM · Llama-3 8B (Q8) / Qwen 14B</td>
              <td style="padding: 1rem 1.5rem; font-weight: 700; color: #1D4ED8;">48GB VRAM · LLM 70B (Q4) / SD XL</td>
              <td style="padding: 1rem 1.5rem; font-weight: 600; color: #1D4ED8;">96GB–320GB+ · DeepSeek R1 / LLM 70B Full</td>
            </tr>
            <tr style="border-bottom: 1px solid #EFF3FA;">
              <th scope="row" style="padding: 1rem 1.5rem; font-weight: 700;">Dòng GPU</th>
              <td style="padding: 1rem 1.5rem;">NVIDIA RTX 4090 24GB × 1</td>
              <td style="padding: 1rem 1.5rem; font-weight: 600;">NVIDIA RTX 4090 24GB × 2</td>
              <td style="padding: 1rem 1.5rem;">NVIDIA H100 / RTX 6000 Ada × 4+</td>
            </tr>
            <tr style="border-bottom: 1px solid #EFF3FA;">
              <th scope="row" style="padding: 1rem 1.5rem; font-weight: 700;">RAM Hệ Thống</th>
              <td style="padding: 1rem 1.5rem;">64 GB ECC DDR5</td>
              <td style="padding: 1rem 1.5rem; font-weight: 600;">128 GB ECC DDR5</td>
              <td style="padding: 1rem 1.5rem;">256 GB – 512 GB ECC DDR5</td>
            </tr>
            <tr style="border-bottom: 1px solid #EFF3FA;">
              <th scope="row" style="padding: 1rem 1.5rem; font-weight: 700;">Lưu Trữ Tốc Độ Cao</th>
              <td style="padding: 1rem 1.5rem;">2 TB NVMe Gen5 (10.000 MB/s)</td>
              <td style="padding: 1rem 1.5rem; font-weight: 600;">4 TB NVMe Gen5 (RAID)</td>
              <td style="padding: 1rem 1.5rem;">8 TB – 32 TB U.2 NVMe Enterprise</td>
            </tr>
            <tr style="border-bottom: 1px solid #EFF3FA;">
              <th scope="row" style="padding: 1rem 1.5rem; font-weight: 700;">Bảo Hành &amp; SLA</th>
              <td style="padding: 1rem 1.5rem;">36 tháng · 1 đổi 1 RAM/SSD</td>
              <td style="padding: 1rem 1.5rem; font-weight: 600;">36 tháng · On-site 2-4h TP.HCM</td>
              <td style="padding: 1rem 1.5rem;">36 tháng · SLA Chuyên biệt 24/7</td>
            </tr>
            <tr>
              <th scope="row" style="padding: 1rem 1.5rem; font-weight: 700;">Phù Hợp Nghiệp Vụ</th>
              <td style="padding: 1rem 1.5rem;">R&amp;D nhỏ, Chatbot nội bộ, OCR</td>
              <td style="padding: 1rem 1.5rem; font-weight: 600;">Fine-tuning 70B, Tự động hóa Sapo/Lark</td>
              <td style="padding: 1rem 1.5rem;">Sản xuất quy mô lớn, Data Center</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- SECTION: SO SÁNH TCO (CLOUD GPU VS. LOCAL AI SERVER) - Feedback Item #2 Secondary CTA Target -->
  <section id="so-sanh-tco" style="padding: 5.5rem 0; background: #F8FAFD; border-top: 1px solid var(--sdi-border); border-bottom: 1px solid var(--sdi-border);">
    <div class="container-sdi">
      
      <div style="text-align: center; max-width: 840px; margin: 0 auto 2.5rem auto;">
        <span class="eyebrow-badge" style="background: rgba(16, 185, 129, 0.1); color: #059669; border: 1px solid rgba(16, 185, 129, 0.25);">
          BÀI TOÁN TÀI CHÍNH TCO
        </span>
        <h2 style="font-size: 2.35rem; color: var(--sdi-navy-primary); margin-top: 0.5rem; font-weight: 800;">
          Bảng So Sánh Chi Phí &amp; Giá Trị: Thuê Cloud GPU vs. Local AI Server
        </h2>
        <p style="color: var(--sdi-text-secondary); font-size: 1.05rem; line-height: 1.6; margin-top: 0.75rem;">
          Đánh giá trực tiếp chi phí sở hữu tổng thể trong 36 tháng giữa việc thuê GPU Cloud (AWS/RunPod) và tự trang bị trạm AI Server vật lý NavaTek.
        </p>
      </div>

      <!-- TCO Table Component -->
      <div class="tco-table-wrapper">
        <table class="tco-table" aria-label="Bảng so sánh TCO Cloud GPU và Local AI Server">
          <thead>
            <tr>
              <th scope="col" style="width: 25%;">Tiêu Chí So Sánh</th>
              <th scope="col" style="width: 37%;">Thuê GPU Cloud (AWS / RunPod / API)</th>
              <th scope="col" class="highlight-col" style="width: 38%;">Trạm AI Server On-Premise NavaTek</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" style="font-weight: 700;">Chi Phí Năm Đầu (12 Tháng)</th>
              <td>
                <div style="font-weight: 700; color: #DC2626;">~360.000.000₫ – 600.000.000₫</div>
                <div style="font-size: 0.8rem; color: #64748B;">(Trung bình 30 – 50 triệu/tháng thuê Cloud)</div>
              </td>
              <td class="highlight-col">
                <div style="font-weight: 800; color: #059669;">79.000.000₫ – 189.000.000₫</div>
                <div style="font-size: 0.8rem; color: #047857;">(Đầu tư thiết bị 1 lần, sở hữu vĩnh viễn)</div>
              </td>
            </tr>
            <tr>
              <th scope="row" style="font-weight: 700;">Chi Phí 3 Năm (36 Tháng)</th>
              <td>
                <div style="font-weight: 700; color: #DC2626;">1.080.000.000₫ – 1.800.000.000₫+</div>
                <span class="tco-badge-loss"><i data-lucide="trending-up" style="width: 12px; height: 12px;"></i> Chi phí đội liên tục</span>
              </td>
              <td class="highlight-col">
                <div style="font-weight: 800; color: #059669;">0₫ Chi phí thuê phát sinh</div>
                <span class="tco-badge-savings"><i data-lucide="check" style="width: 12px; height: 12px;"></i> Tiết kiệm đến 85% ngân sách</span>
              </td>
            </tr>
            <tr>
              <th scope="row" style="font-weight: 700;">Thời Gian Hoàn Vốn (Break-Even)</th>
              <td>
                <div>Không bao giờ (Chi phí biến đổi vĩnh viễn)</div>
              </td>
              <td class="highlight-col">
                <div style="font-weight: 800; color: #1D4ED8;">Chỉ sau 4 – 6 tháng vận hành</div>
              </td>
            </tr>
            <tr>
              <th scope="row" style="font-weight: 700;">Bảo Mật Dữ Liệu &amp; Thỏa Thuận NDA</th>
              <td>
                <div style="color: #DC2626; font-weight: 600;">Dữ liệu gửi qua máy chủ trung gian</div>
                <div style="font-size: 0.8rem; color: #64748B;">Nguy cơ rò rỉ mã nguồn &amp; hồ sơ tài chính</div>
              </td>
              <td class="highlight-col">
                <div style="color: #059669; font-weight: 800;">100% Cục bộ On-Premise LAN</div>
                <div style="font-size: 0.8rem; color: #047857;">Hỗ trợ ký NDA bảo mật trước triển khai</div>
              </td>
            </tr>
            <tr>
              <th scope="row" style="font-weight: 700;">Độ Trễ &amp; Ổn Định Đường Truyền</th>
              <td>
                <div>200ms – 800ms (Phụ thuộc đứt cáp quang biển)</div>
              </td>
              <td class="highlight-col">
                <div style="font-weight: 700; color: #1D4ED8;">Dưới 10ms (Xử lý trực tiếp qua mạng nội bộ)</div>
              </td>
            </tr>
            <tr>
              <th scope="row" style="font-weight: 700;">Hỗ Trợ Kỹ Thuật &amp; SLA</th>
              <td>
                <div>Gửi ticket hỗ trợ nước ngoài (12h - 48h)</div>
              </td>
              <td class="highlight-col">
                <div style="font-weight: 800; color: #1D4ED8;">SLA On-site 2–4h tại TP.HCM &amp; 1 đổi 1</div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Quick Action CTA inside TCO section -->
      <div style="margin-top: 2rem; background: #FFFFFF; border: 1px solid var(--sdi-border); border-radius: 16px; padding: 1.5rem 2rem; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem;">
        <div>
          <div style="font-size: 1.1rem; font-weight: 800; color: var(--sdi-navy-primary);">Cần tính toán bảng TCO may đo riêng cho doanh nghiệp?</div>
          <div style="font-size: 0.9rem; color: var(--sdi-text-secondary);">Kỹ sư NavaTek sẽ gửi báo cáo phân tích đối chiếu dòng tiền chi tiết miễn phí trong 24 giờ.</div>
        </div>
        <button class="sdi-btn-orange trigger-quote-modal" style="font-size: 0.95rem;">
          <i data-lucide="calculator" style="width: 17px; height: 17px;"></i>
          <span>Nhận Bảng Tính TCO Miễn Phí</span>
        </button>
      </div>

    </div>
  </section>

  <!-- Khách hàng đã triển khai -->
  <section style="padding: 5rem 0; background: #FFFFFF;">
    <div class="container-sdi">
      <div class="client-demo-box">
        <span class="eyebrow-badge">TRIỂN KHAI THỰC TẾ</span>
        <h3 style="font-size: 1.85rem; color: var(--sdi-navy-primary); margin-top: 0.5rem; margin-bottom: 0.5rem; font-weight: 800;">Khách Hàng Đã Triển Khai Giải Pháp AI Server NavaTek</h3>
        <p style="color: var(--sdi-text-secondary); font-size: 0.95rem; max-width: 600px; margin: 0 auto 1.5rem auto;">Các tổ chức, tập đoàn và doanh nghiệp đã đưa trạm AI Local của NavaTek vào quy trình vận hành thực tế.</p>
        
        <div class="client-demo-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.25rem; margin-top: 1.5rem;" data-mobile-slider="true">
          <div class="client-demo-item" style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 14px; padding: 1.5rem 1.25rem; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 0.65rem; min-height: 110px;">
            <div style="height: 40px; display: flex; align-items: center; justify-content: center; color: var(--sdi-navy-primary); font-weight: 800; font-size: 1.05rem; gap: 8px;">
              <i data-lucide="factory" style="width: 24px; height: 24px; color: var(--sdi-blue-accent);"></i> VINAMEC CORP
            </div>
            <div class="client-demo-tag" style="font-size: 0.78rem; color: var(--sdi-text-muted); font-weight: 600; text-align: center;">Hệ thống AI xử lý dữ liệu sản xuất</div>
          </div>
          <div class="client-demo-item" style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 14px; padding: 1.5rem 1.25rem; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 0.65rem; min-height: 110px;">
            <div style="height: 40px; display: flex; align-items: center; justify-content: center; color: var(--sdi-navy-primary); font-weight: 800; font-size: 1.05rem; gap: 8px;">
              <i data-lucide="scan" style="width: 24px; height: 24px; color: var(--sdi-blue-accent);"></i> THERMOTECH AI
            </div>
            <div class="client-demo-tag" style="font-size: 0.78rem; color: var(--sdi-text-muted); font-weight: 600; text-align: center;">Cụm máy trạm AI xử lý hình ảnh nhiệt</div>
          </div>
          <div class="client-demo-item" style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 14px; padding: 1.5rem 1.25rem; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 0.65rem; min-height: 110px;">
            <div style="height: 40px; display: flex; align-items: center; justify-content: center; color: var(--sdi-navy-primary); font-weight: 800; font-size: 1.05rem; gap: 8px;">
              <i data-lucide="cpu" style="width: 24px; height: 24px; color: var(--sdi-blue-accent);"></i> ROBOTICS LAB HCM
            </div>
            <div class="client-demo-tag" style="font-size: 0.78rem; color: var(--sdi-text-muted); font-weight: 600; text-align: center;">Phòng Lab AI &amp; Robotics Đại Học</div>
          </div>
          <div class="client-demo-item" style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 14px; padding: 1.5rem 1.25rem; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 0.65rem; min-height: 110px;">
            <div style="height: 40px; display: flex; align-items: center; justify-content: center; color: var(--sdi-navy-primary); font-weight: 800; font-size: 1.05rem; gap: 8px;">
              <i data-lucide="bot" style="width: 24px; height: 24px; color: var(--sdi-blue-accent);"></i> TECHLAW ASIA
            </div>
            <div class="client-demo-tag" style="font-size: 0.78rem; color: var(--sdi-text-muted); font-weight: 600; text-align: center;">Private LLM trợ lý kỹ thuật &amp; pháp lý</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA cuối trang -->
  <section style="padding: 4.5rem 0; background: #F8FAFD; border-top: 1px solid #EFF3FA;">
    <div class="container-sdi" style="text-align: center; max-width: 720px; margin: 0 auto;">
      <h3 style="font-size: 1.85rem; color: var(--sdi-navy-primary); margin-bottom: 0.75rem; font-weight: 800;">Chưa rõ cần cấu hình nào cho đơn vị?</h3>
      <p style="color: var(--sdi-text-secondary); margin-bottom: 2rem; font-size: 1rem;">Hãy để lại thông tin liên hệ, đội ngũ kỹ sư hạ tầng của NavaTek sẽ liên hệ tư vấn cấu hình chính xác trong vòng 24 giờ làm việc.</p>
      <div style="display: flex; gap: 1.25rem; justify-content: center; flex-wrap: wrap;">
        <button class="sdi-btn-orange trigger-quote-modal" style="font-size: 1rem;">Nhận báo giá giải pháp</button>
        <a href="tel:1900628283" class="sdi-pill-btn-outline" style="font-size: 1rem; border: 2px solid var(--sdi-navy-primary); color: var(--sdi-navy-primary); padding: 0.75rem 1.75rem; border-radius: 999px; font-weight: 700; text-decoration: none;">Hotline: 1900 - NAVATEK</a>
      </div>
    </div>
  </section>

  <!-- Unified Master Footer -->

<?php
get_footer();
?>