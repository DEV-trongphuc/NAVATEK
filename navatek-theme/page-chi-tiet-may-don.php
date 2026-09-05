<?php
/**
 * Template Name: Chi Tiết Máy Đơn
 */
get_header();
?>

<!-- Breadcrumb -->
  <div style="background: #FFFFFF; border-bottom: 1px solid var(--sdi-border); padding: 1rem 0;">
    <div class="container-sdi">
      <div style="font-size: 0.85rem; color: var(--sdi-text-muted); display: flex; gap: 0.5rem; align-items: center;">
        <a href="<?php echo esc_url(home_url('/')); ?>" style="color: var(--sdi-text-muted); text-decoration: none;">Trang chủ</a>
        <span>/</span>
        <a href="<?php echo esc_url(home_url('/may-don-le/')); ?>" style="color: var(--sdi-text-muted); text-decoration: none;">Sản phẩm</a>
        <span>/</span>
        <a href="<?php echo esc_url(home_url('/may-don-le/')); ?>" style="color: var(--sdi-text-muted); text-decoration: none;">Máy đơn lẻ</a>
        <span>/</span>
        <span style="color: var(--sdi-navy-primary); font-weight: 700;">Workstation AI RTX 4090 128GB</span>
      </div>
    </div>
  </div>

  <main style="background: #F8FAFC;">
    
    <!-- Hero Section -->
    <section style="padding: 4rem 0; background: #FFFFFF; border-bottom: 1px solid var(--sdi-border);">
      <div class="container-sdi">
        <div class="sdi-split-grid">
          
          <!-- Image Gallery -->
          <div>
            <div class="wireframe-box-dashed-dark" style="padding: 1.5rem; min-height: 380px; justify-content: center; position: relative; margin-bottom: 1rem; overflow: hidden; background: #FAFAFA;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bending.png" alt="Máy trạm Workstation AI chuyên sâu RTX 4090 24GB VRAM kèm 128GB RAM DDR5 NavaTek" id="main-product-preview-img" class="graphic-blend" width="380" height="300" fetchpriority="high" decoding="async" style="max-height: 300px; width: auto; transition: transform 0.3s ease;">
            </div>

            <!-- Thumbnails -->
            <div class="sdi-logos-grid">
              <div class="wireframe-box-dashed-dark thumbnail-btn active" data-target-src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bending.png" style="padding: 0.5rem; min-height: 80px; cursor: pointer; background: #FAFAFA;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bending.png" alt="Khung vỏ case và hệ thống làm mát áp suất dương Workstation AI" width="80" height="60" loading="lazy" decoding="async" style="max-height: 60px; width: auto; mix-blend-mode: multiply;">
              </div>
              <div class="wireframe-box-dashed-dark thumbnail-btn" data-target-src="<?php echo esc_url(get_template_directory_uri()); ?>/images/laser.png" style="padding: 0.5rem; min-height: 80px; cursor: pointer; background: #FAFAFA;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/laser.png" alt="Card đồ họa NVIDIA GeForce RTX 4090 24GB GDDR6X gắn trong Workstation" width="80" height="60" loading="lazy" decoding="async" style="max-height: 60px; width: auto; mix-blend-mode: multiply;">
              </div>
              <div class="wireframe-box-dashed-dark thumbnail-btn" data-target-src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ai.png" style="padding: 0.5rem; min-height: 80px; cursor: pointer; background: #FAFAFA;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ai.png" alt="Hệ thống bộ nhớ 128GB RAM DDR5 và ổ cứng SSD NVMe PCIe Gen 4" width="80" height="60" loading="lazy" decoding="async" style="max-height: 60px; width: auto; mix-blend-mode: multiply;">
              </div>
            </div>
          </div>

          <!-- Specs Summary & Actions -->
          <div style="display: flex; flex-direction: column; justify-content: space-between;">
            <div>
              <span class="eyebrow-badge" style="background: rgba(16,185,129,0.1); color: #16A34A; border: 1px solid rgba(22,163,74,0.2);">MÁY ĐƠN LẺ • WORKSTATION</span>
              
              <h1 style="font-size: 2rem; color: var(--sdi-navy-primary); margin-top: 0.35rem; margin-bottom: 0.5rem; line-height: 1.35; font-weight: 900;">
                Workstation AI · RTX 4090 24GB · 128GB RAM
              </h1>

              <div style="font-size: 1.85rem; font-weight: 800; color: var(--sdi-orange-cta); margin-bottom: 0.75rem;">
                Từ 96.000.000₫
              </div>

              <div style="font-size: 0.85rem; color: var(--sdi-text-secondary); font-weight: 700; margin-bottom: 1.25rem; display: flex; gap: 0.75rem; align-items: center; flex-wrap: wrap;">
                <span><i data-lucide="check-circle" style="width: 15px; height: 15px; color: #10B981; display: inline; vertical-align: -2px;"></i> Tình trạng: <strong>Đặt trước (Giao 7 ngày)</strong></span>
                <span>•</span>
                <span>Bảo hành: <strong>24 tháng On-site TP.HCM</strong></span>
              </div>

              <!-- Quick spec points (Khung viền căn đều 2 cột) -->
              <div class="product-spec-highlights-box" style="background: #F8FAFD; border: 1px solid #E2E8F0; border-radius: 14px; padding: 1.25rem 1.5rem; margin-bottom: 1.75rem;">
                <div class="spec-highlight-title" style="font-size: 0.8rem; font-weight: 800; color: #0B192C; text-transform: uppercase; margin-bottom: 1rem; letter-spacing: 0.04em;">Điểm nổi bật của cấu hình:</div>
                <div class="spec-highlight-list" style="display: flex; flex-direction: column; gap: 0.85rem;">
                  
                  <div class="spec-highlight-item" style="display: grid; grid-template-columns: 240px 1fr; gap: 1rem; align-items: baseline; font-size: 0.9rem; line-height: 1.55; border-bottom: 1px dashed #E2E8F0; padding-bottom: 0.75rem;">
                    <div class="spec-highlight-label" style="display: flex; align-items: flex-start; gap: 0.5rem; font-weight: 700; color: #0B192C;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 3px;"><polyline points="20 6 9 17 4 12"/></svg>
                      <span>GPU RTX 4090 24GB VRAM:</span>
                    </div>
                    <div class="spec-highlight-desc" style="color: #475569;">Chạy tốt các mô hình Llama-3 70B (4-bit quant), DeepSeek-R1 và xử lý video AI thời gian thực.</div>
                  </div>

                  <div class="spec-highlight-item" style="display: grid; grid-template-columns: 240px 1fr; gap: 1rem; align-items: baseline; font-size: 0.9rem; line-height: 1.55; border-bottom: 1px dashed #E2E8F0; padding-bottom: 0.75rem;">
                    <div class="spec-highlight-label" style="display: flex; align-items: flex-start; gap: 0.5rem; font-weight: 700; color: #0B192C;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 3px;"><polyline points="20 6 9 17 4 12"/></svg>
                      <span>128GB DDR5 5600MHz:</span>
                    </div>
                    <div class="spec-highlight-desc" style="color: #475569;">Thoải mái chạy đồng thời nhiều container Docker AI, RAG pipeline và cơ sở dữ liệu vector.</div>
                  </div>

                  <div class="spec-highlight-item" style="display: grid; grid-template-columns: 240px 1fr; gap: 1rem; align-items: baseline; font-size: 0.9rem; line-height: 1.55;">
                    <div class="spec-highlight-label" style="display: flex; align-items: flex-start; gap: 0.5rem; font-weight: 700; color: #0B192C;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 3px;"><polyline points="20 6 9 17 4 12"/></svg>
                      <span>Tản nhiệt nước AIO 360mm:</span>
                    </div>
                    <div class="spec-highlight-desc" style="color: #475569;">Vận hành full-load 24/7 nhiệt độ GPU &lt; 68°C cực kỳ êm ái và bền bỉ.</div>
                  </div>

                </div>
              </div>

              <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <button class="sdi-btn-orange trigger-quote-modal" style="font-size: 1rem; padding: 0.85rem 2rem;">
                  <i data-lucide="file-text" style="width: 18px; height: 18px;"></i>
                  <span>Nhận dự toán chi tiết</span>
                </button>
                <a href="tel:1900628283" class="sdi-pill-btn-outline" style="border: 2px solid var(--sdi-navy-primary); color: var(--sdi-navy-primary); padding: 0.85rem 1.75rem; border-radius: 9999px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
                  <i data-lucide="phone" style="width: 16px; height: 16px;"></i>
                  <span>Hotline Kỹ sư: 1900 - NAVATEK</span>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Detailed Specifications Table -->
    <section style="padding: 4.5rem 0; background: #FFFFFF; border-bottom: 1px solid var(--sdi-border);">
      <div class="container-sdi">
        <div style="max-width: 800px; margin-bottom: 2rem;">
          <span class="eyebrow-badge">THÔNG SỐ CHI TIẾT</span>
          <h2>Bảng Thông Số Kỹ Thuật Đầy Đủ</h2>
        </div>

        <div style="overflow-x: auto; border: 1px solid var(--sdi-border); border-radius: 16px;">
          <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.925rem;">
            <tbody>
              <tr style="border-bottom: 1px solid #EFF3FA; background: #F8FAFD;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700; width: 250px;">Vi xử lý (CPU)</td>
                <td style="padding: 1.25rem 1.5rem;">Intel Core i9-14900K (24 nhân 32 luồng, Turbo 6.0GHz, 36MB Cache)</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Card đồ họa (GPU)</td>
                <td style="padding: 1.25rem 1.5rem;">NVIDIA GeForce RTX 4090 24GB GDDR6X (16.384 CUDA Cores, 512 Tensor Cores)</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA; background: #F8FAFD;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Bộ nhớ trong (RAM)</td>
                <td style="padding: 1.25rem 1.5rem;">128GB DDR5 5600MHz (4x 32GB Corsair Vengeance Pro)</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Lưu trữ hệ điều hành</td>
                <td style="padding: 1.25rem 1.5rem;">2TB NVMe PCIe Gen4x4 (Đọc 7.400MB/s, Ghi 6.900MB/s)</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA; background: #F8FAFD;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Lưu trữ dữ liệu mô hình</td>
                <td style="padding: 1.25rem 1.5rem;">4TB NVMe PCIe Gen4x4 chuyên dụng chứa dataset & weight models</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Nguồn (PSU)</td>
                <td style="padding: 1.25rem 1.5rem;">1200W 80 Plus Platinum chuẩn ATX 3.0 (PCIe 5.0 12VHPWR)</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA; background: #F8FAFD;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Hệ điều hành & Môi trường</td>
                <td style="padding: 1.25rem 1.5rem;">Ubuntu 24.04 LTS hoặc Windows 11 Pro, cài sẵn CUDA 12.4, PyTorch, Docker, Ollama</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Cam kết bảo hành B2B</td>
                <td style="padding: 1.25rem 1.5rem;">24 tháng 1 đổi 1 tận nơi TP.HCM · Kỹ sư hỗ trợ on-site trong 2-4 giờ</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- FAQ & Đối tượng phù hợp -->
    <section style="padding: 4.5rem 0; background: #F8FAFD;">
      <div class="container-sdi">
        <div style="text-align: center; max-width: 760px; margin: 0 auto 3rem auto;">
          <span class="eyebrow-badge">HỎI & ĐÁP</span>
          <h2>Câu Hỏi Thường Gặp Về Workstation AI</h2>
        </div>

        <div style="max-width: 860px; margin: 0 auto; display: flex; flex-direction: column; gap: 1rem;">
          <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 14px; padding: 1.5rem;">
            <h4 style="font-size: 1.1rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem;">Workstation này phù hợp với đối tượng nào?</h4>
            <p style="color: var(--sdi-text-secondary); font-size: 0.95rem; line-height: 1.6; margin: 0;">
              Phù hợp cho các doanh nghiệp tài chính, y tế, viện nghiên cứu AI, công ty phần mềm cần fine-tune và suy luận cục bộ các mô hình LLM lớn, hoặc các studio thiết kế 3D/VFX render thời gian thực.
            </p>
          </div>
          <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 14px; padding: 1.5rem;">
            <h4 style="font-size: 1.1rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem;">Máy có thể chạy liên tục 24/7 trong bao lâu?</h4>
            <p style="color: var(--sdi-text-secondary); font-size: 0.95rem; line-height: 1.6; margin: 0;">
              Được trang bị linh kiện chuẩn Enterprise, nguồn Platinum và tản nhiệt nước AIO cao cấp, máy được thiết kế để chạy liên tục 365 ngày/năm mà không lo suy giảm hiệu năng do quá nhiệt.
            </p>
          </div>
          <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 14px; padding: 1.5rem;">
            <h4 style="font-size: 1.1rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem;">NavaTek hỗ trợ cài đặt và chuyển giao như thế nào?</h4>
            <p style="color: var(--sdi-text-secondary); font-size: 0.95rem; line-height: 1.6; margin: 0;">
              Kỹ sư NavaTek giao máy tận nơi tại TP.HCM, đấu nối vào hệ thống mạng công ty, hướng dẫn tải model AI, kiểm thử benchmark và bàn giao đầy đủ tài liệu hướng dẫn vận hành.
            </p>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Unified Master Footer (Bug 7, Bug 22, Bug 24) -->

<?php
get_footer();
?>