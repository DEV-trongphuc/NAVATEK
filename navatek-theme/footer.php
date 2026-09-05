<footer class="footer-sdi tech-dot-grid-dark" id="footer-section" style="position: relative; background-image: radial-gradient(rgba(255, 255, 255, 0.05) 1.5px, transparent 1.5px), linear-gradient(135deg, #0A1128 0%, #050B1A 100%) !important; background-size: 28px 28px, auto !important; background-color: #050B1A !important; overflow: hidden;">
    <!-- Ambient glowing backgrounds for cyber theme -->
    <div style="position: absolute; top: -10%; left: -10%; width: 450px; height: 450px; border-radius: 50%; background: radial-gradient(circle, rgba(37, 99, 235, 0.12) 0%, transparent 70%); pointer-events: none; z-index: 1;"></div>
    <div style="position: absolute; bottom: -10%; right: -5%; width: 400px; height: 400px; border-radius: 50%; background: radial-gradient(circle, rgba(56, 189, 248, 0.08) 0%, transparent 70%); pointer-events: none; z-index: 1;"></div>

    <!-- Subtle ambient SVG circuit tracks (Feedback 4: Reduced opacity to avoid competing with content) -->
    <svg class="footer-circuit-subtle" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient id="grad-line-footer" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" stop-color="var(--sdi-blue-accent)" stop-opacity="0.1" />
          <stop offset="50%" stop-color="var(--sdi-blue-glow)" stop-opacity="0.5" />
          <stop offset="100%" stop-color="var(--sdi-blue-accent)" stop-opacity="0.1" />
        </linearGradient>
      </defs>
      <!-- Circuit track 1 -->
      <path d="M-100,60 L500,60 L650,220 L500,400 L900,400 L1100,550" fill="none" stroke="url(#grad-line-footer)" stroke-width="1" />
      <!-- Circuit track 2 -->
      <path d="M2000,100 L1400,100 L1250,250 L1400,420 L1000,420 L800,580" fill="none" stroke="url(#grad-line-footer)" stroke-width="1" />
      
      <!-- Subtle light packets -->
      <circle r="3.5" fill="#38BDF8" opacity="0.6" style="offset-path: path('M-100,60 L500,60 L650,220 L500,400 L900,400 L1100,550'); animation: flow-data 8s linear infinite;" />
      <circle r="3.5" fill="#38BDF8" opacity="0.6" style="offset-path: path('M2000,100 L1400,100 L1250,250 L1400,420 L1000,420 L800,580'); animation: flow-data 10s linear infinite 4s;" />
    </svg>
    <div class="container-sdi">
      
      <div class="sdi-split-grid is-footer">
        
        <!-- Left: Form -->
        <div>
          <span class="eyebrow-badge" style="background: rgba(56, 189, 248, 0.08); color: #38BDF8; border: 1px solid rgba(56, 189, 248, 0.15); padding: 0.4rem 1rem;">BÁO GIÁ NHANH</span>
          <h2 style="color: #FFFFFF; font-size: 2.1rem; margin-bottom: 0.5rem; margin-top: 0.5rem;">Nhận báo giá trong 24 giờ</h2>
          <p style="color: #94A3B8; font-size: 0.9rem; margin-bottom: 2rem;">Kỹ sư hạ tầng của NavaTek sẽ liên hệ tư vấn cấu hình chi tiết và gửi báo giá qua email/Zalo.</p>

          <form id="footer-lead-form" style="display: flex; flex-direction: column; gap: 1.25rem;">
            <div class="sdi-form-grid-2">
              <div>
                <label style="display: block; font-size: 0.8rem; font-weight: 700; color: #CBD5E1; margin-bottom: 0.35rem;">Họ và tên *</label>
                <input type="text" required placeholder="Nguyễn Văn A" style="width: 100%; padding: 0.85rem 1rem; border-radius: 12px; border: 1px solid rgba(255,255,255,0.15); outline: none; background: rgba(255,255,255,0.06); color: #FFFFFF; font-size: 0.9rem;">
              </div>
              <div>
                <label style="display: block; font-size: 0.8rem; font-weight: 700; color: #CBD5E1; margin-bottom: 0.35rem;">Số điện thoại *</label>
                <input type="tel" required placeholder="0901234567" style="width: 100%; padding: 0.85rem 1rem; border-radius: 12px; border: 1px solid rgba(255,255,255,0.15); outline: none; background: rgba(255,255,255,0.06); color: #FFFFFF; font-size: 0.9rem;">
              </div>
            </div>

            <div class="sdi-form-grid-2">
              <div>
                <label style="display: block; font-size: 0.8rem; font-weight: 700; color: #CBD5E1; margin-bottom: 0.35rem;">Email</label>
                <input type="email" placeholder="contact@company.com" style="width: 100%; padding: 0.85rem 1rem; border-radius: 12px; border: 1px solid rgba(255,255,255,0.15); outline: none; background: rgba(255,255,255,0.06); color: #FFFFFF; font-size: 0.9rem;">
              </div>
              <div>
                <label style="display: block; font-size: 0.8rem; font-weight: 700; color: #CBD5E1; margin-bottom: 0.35rem;">Nhu cầu của bạn *</label>
                <div class="sdi-custom-select" data-name="demand">
                  <input type="hidden" name="demand" value="Trạm AI Cục bộ & Tự động hóa" required>
                  <button type="button" class="sdi-custom-select-trigger" aria-haspopup="listbox" aria-expanded="false">
                    <span class="sdi-custom-select-label">Trạm AI Cục bộ & Tự động hóa</span>
                    <i data-lucide="chevron-down" class="sdi-select-arrow"></i>
                  </button>
                  <div class="sdi-custom-select-dropdown" role="listbox">
                    <div class="sdi-custom-select-option selected" data-value="Trạm AI Cục bộ & Tự động hóa" role="option" aria-selected="true">
                      <span>Trạm AI Cục bộ & Tự động hóa</span>
                      <i data-lucide="check" class="sdi-option-check"></i>
                    </div>
                    <div class="sdi-custom-select-option" data-value="Nâng cấp RAM / SSD / Lưu trữ" role="option">
                      <span>Nâng cấp RAM / SSD / Lưu trữ</span>
                      <i data-lucide="check" class="sdi-option-check"></i>
                    </div>
                    <div class="sdi-custom-select-option" data-value="Mini PC, Mạng, NAS & Camera" role="option">
                      <span>Mini PC, Mạng, NAS & Camera</span>
                      <i data-lucide="check" class="sdi-option-check"></i>
                    </div>
                    <div class="sdi-custom-select-option" data-value="Cần tư vấn tổng thể / Chưa rõ nhu cầu" role="option">
                      <span>Cần tư vấn tổng thể / Chưa rõ nhu cầu</span>
                      <i data-lucide="check" class="sdi-option-check"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div style="margin-top: 0.5rem;">
              <button type="submit" class="sdi-btn-orange" style="width: 100%; justify-content: center; padding: 0.9rem;">
                <span>Gửi yêu cầu báo giá</span>
              </button>
            </div>
          </form>
        </div>

        <!-- Right: Corporate details & Ecosystem -->
        <div style="display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <h4 style="color: #FFFFFF; font-size: 1.25rem; margin-bottom: 1rem;">Thông tin công ty</h4>
            <p style="color: #94A3B8; font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.25rem;">
              <strong>Công ty TNHH NavaTek</strong><br>
              Địa chỉ: Thành phố Hồ Chí Minh<br>
              Hotline: 1900 - NAVATEK | MST: 031789456<br>
              Liên kết: <a href="<?php echo esc_url(home_url('/dich-vu-bao-tri/')); ?>" style="color: #94A3B8; text-decoration: underline;">Chính sách bảo hành</a> · <a href="<?php echo esc_url(home_url('/dich-vu-bao-tri/')); ?>" style="color: #94A3B8; text-decoration: underline;">Chính sách đổi trả</a>
            </p>

            <!-- Footer Nav Menu Links (Bug 7, 22) -->
            <div style="display: flex; flex-wrap: wrap; gap: 1.25rem; margin-top: 1.5rem; font-size: 0.9rem; font-weight: 600;">
              <a href="<?php echo esc_url(home_url('/giai-phap-ai-server-local-llm/')); ?>" style="color: #CBD5E1; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#38BDF8'" onmouseout="this.style.color='#CBD5E1'">Giải pháp</a>
              <a href="<?php echo esc_url(home_url('/may-don-le/')); ?>" style="color: #CBD5E1; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#38BDF8'" onmouseout="this.style.color='#CBD5E1'">Sản phẩm</a>
              <a href="<?php echo esc_url(home_url('/dich-vu-bao-tri/')); ?>" style="color: #CBD5E1; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#38BDF8'" onmouseout="this.style.color='#CBD5E1'">Dịch vụ</a>
              <a href="<?php echo esc_url(home_url('/ve-navatek/')); ?>" style="color: #CBD5E1; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#38BDF8'" onmouseout="this.style.color='#CBD5E1'">Về NavaTek</a>
              <a href="<?php echo esc_url(home_url('/tin-tuc/')); ?>" style="color: #CBD5E1; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#38BDF8'" onmouseout="this.style.color='#CBD5E1'">Tin tức</a>
              <a href="<?php echo esc_url(home_url('/du-an/')); ?>" style="color: #CBD5E1; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#38BDF8'" onmouseout="this.style.color='#CBD5E1'">Liên hệ</a>
            </div>
          </div>

          <!-- Hệ sinh thái Nava Footer Card (Bug 2, 24) -->
          <div>
            <div style="font-size: 0.8rem; color: #64748B; font-weight: 700; text-transform: uppercase; margin-bottom: 0.75rem; letter-spacing: 0.05em;">HỆ SINH THÁI NAVA</div>
            <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 1rem 1.5rem; display: flex; align-items: center; justify-content: space-around; gap: 1.25rem;">
              <a href="<?php echo esc_url(home_url('/')); ?>" style="text-decoration: none; display: flex; flex-direction: column; align-items: center; gap: 0.4rem;">
                <div style="background: #FFFFFF; padding: 5px 12px; border-radius: 8px; display: inline-flex; align-items: center; justify-content: center; height: 36px; box-shadow: 0 2px 8px rgba(0,0,0,0.15);">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/LOGO.png" alt="NavaTek - Giải pháp hạ tầng CNTT doanh nghiệp & Máy chủ AI On-Premise" loading="lazy" decoding="async" style="height: 22px; width: auto; object-fit: contain;">
                </div>
                <div style="font-size: 0.75rem; color: #94A3B8;">Giải pháp doanh nghiệp</div>
              </a>
              <div style="color: rgba(255,255,255,0.2); font-size: 1.3rem;">|</div>
              <a href="https://navastore.vn" target="_blank" rel="noopener" style="text-decoration: none; display: flex; flex-direction: column; align-items: center; gap: 0.4rem;">
                <div style="display: inline-flex; align-items: center; justify-content: center; height: 36px;">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/navastore-logo.png" alt="NavaStore - Hệ thống bán lẻ máy tính & linh kiện Top 2 Google" width="38" height="38" loading="lazy" decoding="async" style="height: 38px; width: 38px; object-fit: contain; border-radius: 50%; box-shadow: 0 2px 8px rgba(0,0,0,0.2); background: #FFFFFF;">
                </div>
                <div style="font-size: 0.75rem; color: #94A3B8;">Bán lẻ • Top 2 Google</div>
              </a>
            </div>
          </div>
        </div>

      </div>

      <div style="padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.08); text-align: center; color: #475569; font-size: 0.8rem; margin-top: 3.5rem;">
        © 2026 Công Ty TNHH NavaTek. Bảo lưu mọi quyền.
      </div>
    </div>
  </footer>

  <!-- Modal Popup -->
  <div class="modal-overlay" id="quote-modal">
    <div class="modal-box">
      <button id="close-quote-modal" style="position: absolute; top: 1.25rem; right: 1.25rem; background: #F1F5F9; border: none; width: 38px; height: 38px; border-radius: 50%; cursor: pointer; color: #475569; display: flex; align-items: center; justify-content: center;">
        <i data-lucide="x" style="width: 20px; height: 20px;"></i>
      </button>
      <span class="eyebrow-badge">NAVATEK B2B</span>
      <h3 style="font-size: 1.75rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem;">Yêu Cầu Báo Giá & Tải Catalog</h3>
      <p style="font-size: 0.95rem; color: #64748B; margin-bottom: 1.75rem;">Kỹ sư NAVATEK sẽ liên hệ tư vấn cấu hình chi tiết trong vòng 15 phút.</p>
      <form id="quote-request-form">
        <div style="margin-bottom: 1.25rem;">
          <label style="display: block; font-weight: 700; font-size: 0.85rem; margin-bottom: 0.4rem; color: var(--sdi-navy-primary);">Họ và tên *</label>
          <input type="text" name="name" required placeholder="Nguyễn Văn A" class="sdi-input">
        </div>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.25rem;">
          <div>
            <label style="display: block; font-weight: 700; font-size: 0.85rem; margin-bottom: 0.4rem; color: var(--sdi-navy-primary);">Số điện thoại *</label>
            <input type="tel" name="phone" required placeholder="0901 234 567" class="sdi-input">
          </div>
          <div>
            <label style="display: block; font-weight: 700; font-size: 0.85rem; margin-bottom: 0.4rem; color: var(--sdi-navy-primary);">Email doanh nghiệp</label>
            <input type="email" name="email" placeholder="contact@company.com" class="sdi-input">
          </div>
        </div>
        <div style="margin-bottom: 1.25rem;">
          <label style="display: block; font-weight: 700; font-size: 0.85rem; margin-bottom: 0.4rem; color: var(--sdi-navy-primary);">Tên doanh nghiệp / Tổ chức</label>
          <input type="text" name="company" placeholder="Công ty TNHH Giải Pháp Công Nghệ..." class="sdi-input">
        </div>
        <div style="margin-bottom: 1.25rem;">
          <label style="display: block; font-weight: 700; font-size: 0.85rem; margin-bottom: 0.4rem; color: var(--sdi-navy-primary);">Dòng sản phẩm hoặc giải pháp quan tâm *</label>
          <select name="demand" class="sdi-select" required>
            <option value="Trạm AI Cục Bộ (Local LLM)">Trạm AI Cục Bộ (Local LLM)</option>
            <option value="Combo Máy Văn Phòng & Mini PC">Combo Máy Văn Phòng & Mini PC</option>
            <option value="Workstation Đồ Họa / Render">Workstation Đồ Họa / Render</option>
            <option value="Linh kiện nâng cấp số lượng lớn">Linh kiện nâng cấp số lượng lớn</option>
            <option value="Gói Dịch Vụ Bảo Trì IT B2B">Gói Dịch Vụ Bảo Trì IT B2B</option>
          </select>
        </div>
        <div style="margin-bottom: 1.5rem;">
          <label style="display: flex; align-items: flex-start; gap: 0.5rem; cursor: pointer;">
            <input type="checkbox" name="nda" checked style="margin-top: 0.25rem;">
            <span style="font-size: 0.85rem; color: #64748B;">
              Yêu cầu ký <strong>Thỏa thuận bảo mật (NDA)</strong> trước khi tiếp nhận thông tin dự án.
            </span>
          </label>
        </div>
        <button type="submit" class="sdi-btn-orange" style="width: 100%; justify-content: center; padding: 0.85rem;">
          <span>Gửi Yêu Cầu Báo Giá</span>
        </button>
      </form>
    </div>
  </div>

  <!-- SEO Technical Guidelines for Dev Team (As specified in the Wireframe) -->
  <section style="display: none !important;">
    <div class="container-sdi">
      <h4 style="color: #FFFFFF; font-size: 1rem; margin-bottom: 1.5rem; text-transform: uppercase; letter-spacing: 0.05em;">Ghi chú kỹ thuật SEO — dành cho team Dev</h4>
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2.5rem;">
        <div>
          <div style="font-weight: 800; color: #FFFFFF; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.03em;">Schema Doanh Nghiệp</div>
          <p>Gắn Organization + LocalBusiness ở Footer và trang Liên hệ để lên top map local TP.HCM. Thêm parentOrganization nối 2 tên miền Navatek &harr; Navastore để tối ưu SEO chéo trong hệ sinh thái.</p>
        </div>
        <div>
          <div style="font-weight: 800; color: #FFFFFF; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.03em;">Cấu trúc URL</div>
          <p>Tuyệt đối không dùng URL chứa ID kiểu ?id=123. Dùng slug sạch, có dấu gạch nối, không dấu tiếng Việt: e.g. /mini-pc/intel-n100</p>
        </div>
        <div>
          <div style="font-weight: 800; color: #FFFFFF; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.03em;">Alt Text Có Chủ Ý</div>
          <p>Mọi logo khách hàng / logo hãng phải có alt chứa từ khóa, ví dụ alt="Khách hàng doanh nghiệp của NavaTek". Không để alt trống, không nhồi từ khóa vô nghĩa.</p>
        </div>
      </div>
    </div>
  </section>



  
  


<script>
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
</script>
<?php wp_footer(); ?>
</body>
</html>
