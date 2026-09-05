<?php
/**
 * Template Name: Combo Trọn Bộ
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
        <a href="<?php echo esc_url(home_url('/may-don-le/')); ?>" style="color: var(--sdi-text-muted); text-decoration: none;">Combo trọn bộ</a>
        <span>/</span>
        <span style="color: var(--sdi-navy-primary); font-weight: 700;">Combo Trạm AI: Mini PC + eGPU</span>
      </div>
    </div>
  </div>

  <main style="background: #F8FAFC;">
    
    <!-- FOLD 1: PRODUCT HERO INFRASTRUCTURE -->
    <section style="padding: 4rem 0; background: #FFFFFF; border-bottom: 1px solid var(--sdi-border);">
      <div class="container-sdi">
        <div class="sdi-split-grid">
          
          <!-- Left: Image Gallery -->
          <div>
            <div class="wireframe-box-dashed-dark" style="padding: 1.5rem; min-height: 400px; justify-content: center; position: relative; margin-bottom: 1rem; overflow: hidden; background: #FAFAFA;">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/combo.png" alt="Combo Trạm AI Mini PC kết hợp eGPU RTX 4070 OCuLink NavaTek" id="main-product-preview-img" class="graphic-blend" width="400" height="320" fetchpriority="high" decoding="async" style="max-height: 320px; width: auto; transition: transform 0.3s ease;">
            </div>

            <!-- Thumbnails Row -->
            <div class="sdi-logos-grid">
              <div class="wireframe-box-dashed-dark thumbnail-btn active" data-target-src="<?php echo esc_url(get_template_directory_uri()); ?>/images/combo.png" style="padding: 0.5rem; min-height: 80px; cursor: pointer; background: #FAFAFA;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/combo.png" alt="Cận cảnh cổng kết nối OCuLink và Thunderbolt trên Combo Trạm AI NavaTek" width="80" height="60" loading="lazy" decoding="async" style="max-height: 60px; width: auto; mix-blend-mode: multiply;">
              </div>
              <div class="wireframe-box-dashed-dark thumbnail-btn" data-target-src="<?php echo esc_url(get_template_directory_uri()); ?>/images/laser.png" style="padding: 0.5rem; min-height: 80px; cursor: pointer; background: #FAFAFA;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/laser.png" alt="Card đồ họa NVIDIA RTX 4070 gắn ngoài eGPU Box tản nhiệt buồng hơi" width="80" height="60" loading="lazy" decoding="async" style="max-height: 60px; width: auto; mix-blend-mode: multiply;">
              </div>
              <div class="wireframe-box-dashed-dark thumbnail-btn" data-target-src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bending.png" style="padding: 0.5rem; min-height: 80px; cursor: pointer; background: #FAFAFA;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bending.png" alt="Thân máy Mini PC văn phòng nhỏ gọn tiết kiệm 70% không gian làm việc" width="80" height="60" loading="lazy" decoding="async" style="max-height: 60px; width: auto; mix-blend-mode: multiply;">
              </div>
              <div class="wireframe-box-dashed-dark thumbnail-btn" data-target-src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ai.png" style="padding: 0.5rem; min-height: 80px; cursor: pointer; background: #FAFAFA;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ai.png" alt="Bộ cáp kết nối tốc độ cao và phụ kiện cấp nguồn đồng bộ trạm AI" width="80" height="60" loading="lazy" decoding="async" style="max-height: 60px; width: auto; mix-blend-mode: multiply;">
              </div>
            </div>
          </div>

          <!-- Right: Specs Summary & B2B Actions -->
          <div style="display: flex; flex-direction: column; justify-content: space-between;">
            <div>
              <span class="eyebrow-badge eyebrow-badge-orange" style="margin-bottom: 0.25rem;">COMBO BÁN CHẠY</span>
              
              <h1 style="font-size: 1.85rem; color: var(--sdi-navy-primary); margin-top: 0.35rem; margin-bottom: 0.5rem; line-height: 1.35; font-weight: 900;">
                Combo Trạm AI: Mini PC + eGPU RTX 4070
              </h1>

              <div style="font-size: 1.65rem; font-weight: 800; color: var(--sdi-orange-cta); margin-bottom: 0.75rem;">
                68.000.000₫
              </div>

              <!-- Stats line -->
              <div style="font-size: 0.85rem; color: var(--sdi-text-secondary); font-weight: 700; margin-bottom: 1rem; display: flex; gap: 0.75rem; align-items: center; flex-wrap: wrap;">
                <span><i data-lucide="check-circle" style="width: 15px; height: 15px; color: #10B981; display: inline; vertical-align: -2px;"></i> Tình trạng: <strong>Sẵn hàng tại TP.HCM</strong></span>
                <span>•</span>
                <span>Bảo hành: <strong>24 tháng 1 đổi 1</strong></span>
              </div>

              <!-- Key Value Propositions List -->
              <div class="product-spec-highlights-box" style="background: #F8FAFD; border: 1px solid #E2E8F0; border-radius: 14px; padding: 1.25rem 1.5rem; margin-bottom: 1.5rem;">
                <div class="spec-highlight-title" style="font-size: 0.8rem; font-weight: 800; color: #0B192C; text-transform: uppercase; margin-bottom: 0.85rem; letter-spacing: 0.04em;">Cấu hình tóm tắt nổi bật:</div>
                <div class="spec-highlight-list" style="display: flex; flex-direction: column; gap: 0.75rem;">
                  
                  <div class="spec-highlight-item" style="display: grid; grid-template-columns: 150px 1fr; gap: 1rem; align-items: baseline; font-size: 0.9rem; line-height: 1.55; border-bottom: 1px dashed #E2E8F0; padding-bottom: 0.65rem;">
                    <div class="spec-highlight-label" style="display: flex; align-items: flex-start; gap: 0.5rem; font-weight: 700; color: #0B192C;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 3px;"><polyline points="20 6 9 17 4 12"/></svg>
                      <span>CPU Vi xử lý:</span>
                    </div>
                    <div class="spec-highlight-desc" style="color: #475569;">Intel Core i9 · 16 nhân 24 luồng (Tối đa 5.4GHz)</div>
                  </div>

                  <div class="spec-highlight-item" style="display: grid; grid-template-columns: 150px 1fr; gap: 1rem; align-items: baseline; font-size: 0.9rem; line-height: 1.55; border-bottom: 1px dashed #E2E8F0; padding-bottom: 0.65rem;">
                    <div class="spec-highlight-label" style="display: flex; align-items: flex-start; gap: 0.5rem; font-weight: 700; color: #0B192C;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 3px;"><polyline points="20 6 9 17 4 12"/></svg>
                      <span>GPU AI Box:</span>
                    </div>
                    <div class="spec-highlight-desc" style="color: #475569;">NVIDIA RTX 4070 12GB VRAM GDDR6X (Local Inference)</div>
                  </div>

                  <div class="spec-highlight-item" style="display: grid; grid-template-columns: 150px 1fr; gap: 1rem; align-items: baseline; font-size: 0.9rem; line-height: 1.55; border-bottom: 1px dashed #E2E8F0; padding-bottom: 0.65rem;">
                    <div class="spec-highlight-label" style="display: flex; align-items: flex-start; gap: 0.5rem; font-weight: 700; color: #0B192C;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 3px;"><polyline points="20 6 9 17 4 12"/></svg>
                      <span>RAM & SSD:</span>
                    </div>
                    <div class="spec-highlight-desc" style="color: #475569;">64GB DDR5 5600MHz · 1TB NVMe Gen4x4 (7000MB/s)</div>
                  </div>

                  <div class="spec-highlight-item" style="display: grid; grid-template-columns: 150px 1fr; gap: 1rem; align-items: baseline; font-size: 0.9rem; line-height: 1.55;">
                    <div class="spec-highlight-label" style="display: flex; align-items: flex-start; gap: 0.5rem; font-weight: 700; color: #0B192C;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 3px;"><polyline points="20 6 9 17 4 12"/></svg>
                      <span>Kết nối cắm ngoài:</span>
                    </div>
                    <div class="spec-highlight-desc" style="color: #475569;">Cáp OCuLink 64Gbps / Thunderbolt 4 tốc độ cao</div>
                  </div>

                </div>
              </div>

              <!-- CTA Action Buttons -->
              <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <button class="sdi-btn-orange trigger-quote-modal" style="font-size: 0.95rem; padding: 0.85rem 1.75rem;">
                  <i data-lucide="file-text" style="width: 18px; height: 18px;"></i>
                  <span>Nhận dự toán & Báo giá</span>
                </button>
                <a href="tel:1900628283" class="sdi-pill-btn-outline" style="border: 2px solid var(--sdi-navy-primary); color: var(--sdi-navy-primary); padding: 0.85rem 1.5rem; border-radius: 9999px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
                  <i data-lucide="phone" style="width: 16px; height: 16px;"></i>
                  <span>Hotline: 1900 - NAVATEK</span>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- FOLD 2: COMPONENT BREAKDOWN -->
    <section class="tech-dot-grid-light" style="padding: 4.5rem 0; background: #F8FAFD; border-bottom: 1px solid var(--sdi-border);">
      <div class="container-sdi">
        <div style="text-align: center; max-width: 760px; margin: 0 auto 3rem auto;">
          <span class="eyebrow-badge">CHI TIẾT THÀNH PHẦN</span>
          <h2 style="font-size: 2.2rem; color: var(--sdi-navy-primary); margin-top: 0.5rem; font-weight: 800;">Combo bao gồm những gì?</h2>
          <p style="color: var(--sdi-text-secondary); font-size: 1rem; margin-top: 0.5rem;">
            Bộ đôi phần cứng hoàn hảo được kỹ sư NavaTek cân chỉnh và thử nghiệm độ tương thích 100%.
          </p>
        </div>

        <div class="sdi-split-grid" style="gap: 2rem;">
          <div style="background: #FFFFFF; border: 1px solid var(--sdi-border); border-radius: 18px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <span class="eyebrow-badge" style="background: rgba(37,99,235,0.08); color: var(--sdi-blue-accent);">THÀNH PHẦN 1: TÍNH TOÁN</span>
            <h3 style="font-size: 1.45rem; color: var(--sdi-navy-primary); margin: 0.5rem 0 1rem 0;">Mini PC Core i9 High-End</h3>
            <p style="color: var(--sdi-text-secondary); font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.25rem;">
              Trang bị vi xử lý Intel Core i9 cực mạnh mẽ trong thân hình nhỏ gọn chỉ bằng cuốn sách, 64GB DDR5 xử lý đa nhiệm mượt mà, tản nhiệt buồng hơi đồng êm ái.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.5rem; font-size: 0.9rem; color: var(--sdi-navy-primary); font-weight: 600;">
              <li><i data-lucide="check" style="width: 16px; height: 16px; color: #16A34A; display: inline; vertical-align: -2px;"></i> Kích thước siêu nhỏ 130 x 130 x 50 mm</li>
              <li><i data-lucide="check" style="width: 16px; height: 16px; color: #16A34A; display: inline; vertical-align: -2px;"></i> Xuất 4 màn hình 4K 144Hz độc lập</li>
              <li><i data-lucide="check" style="width: 16px; height: 16px; color: #16A34A; display: inline; vertical-align: -2px;"></i> Tiết kiệm điện chỉ 65W - 90W khi vận hành</li>
            </ul>
          </div>

          <div style="background: #FFFFFF; border: 1px solid var(--sdi-border); border-radius: 18px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <span class="eyebrow-badge" style="background: rgba(234,88,12,0.1); color: #EA580C;">THÀNH PHẦN 2: ĐỒ HỌA & AI</span>
            <h3 style="font-size: 1.45rem; color: var(--sdi-navy-primary); margin: 0.5rem 0 1rem 0;">Hộp eGPU Box RTX 4070 12GB</h3>
            <p style="color: var(--sdi-text-secondary); font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.25rem;">
              Hộp đồ họa cắm ngoài với nguồn công suất thực 650W Gold riêng biệt, trang bị card đồ họa NVIDIA RTX 4070 12GB VRAM phục vụ chạy mô hình LLM tại chỗ.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.5rem; font-size: 0.9rem; color: var(--sdi-navy-primary); font-weight: 600;">
              <li><i data-lucide="check" style="width: 16px; height: 16px; color: #16A34A; display: inline; vertical-align: -2px;"></i> Kết nối OCuLink 64Gbps không nghẽn băng thông</li>
              <li><i data-lucide="check" style="width: 16px; height: 16px; color: #16A34A; display: inline; vertical-align: -2px;"></i> Chạy mượt mà Llama-3 8B, DeepSeek 14B, Stable Diffusion</li>
              <li><i data-lucide="check" style="width: 16px; height: 16px; color: #16A34A; display: inline; vertical-align: -2px;"></i> Có thể tháo rời linh hoạt khi chỉ cần dùng Mini PC</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- FOLD 3: SPECIFICATIONS TABLE -->
    <section style="padding: 4.5rem 0; background: #FFFFFF; border-bottom: 1px solid var(--sdi-border);">
      <div class="container-sdi">
        <div style="max-width: 800px; margin-bottom: 2rem;">
          <span class="eyebrow-badge">THÔNG SỐ CHI TIẾT</span>
          <h2>Thông số kỹ thuật phần cứng</h2>
        </div>
        
        <div style="overflow-x: auto; border: 1px solid var(--sdi-border); border-radius: 16px;">
          <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.925rem;">
            <tbody>
              <tr style="border-bottom: 1px solid #EFF3FA; background: #F8FAFD;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700; width: 250px;">Bộ xử lý CPU</td>
                <td style="padding: 1.25rem 1.5rem;">Intel Core i9 · 16 nhân 24 luồng (Tối đa 5.4GHz)</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Đồ họa GPU AI</td>
                <td style="padding: 1.25rem 1.5rem;">NVIDIA RTX 4070 · 12GB VRAM GDDR6X (Local Inference)</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA; background: #F8FAFD;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Bộ nhớ RAM</td>
                <td style="padding: 1.25rem 1.5rem;">64 GB DDR5 (Bus 5600MHz)</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Lưu trữ SSD</td>
                <td style="padding: 1.25rem 1.5rem;">1 TB NVMe SSD Gen4 x4 (Tốc độ đọc 7000MB/s)</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA; background: #F8FAFD;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Cổng kết nối</td>
                <td style="padding: 1.25rem 1.5rem;">2x HDMI · 4x USB · LAN 1Gbps · Wi-Fi 6 · Thunderbolt 4 · OCuLink</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Điện năng tiêu thụ</td>
                <td style="padding: 1.25rem 1.5rem;">Tối đa 250W (Tiết kiệm hơn 60% so với PC bàn cỡ lớn)</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA; background: #F8FAFD;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Bảo hành B2B</td>
                <td style="padding: 1.25rem 1.5rem;">24 tháng · 1 đổi 1 nhanh chóng · Hỗ trợ kỹ thuật on-site tại TP.HCM</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- FOLD 4: SO SÁNH PHƯƠNG ÁN ĐẦU TƯ & TỔNG HỢP FAQ ĐẦY ĐỦ (Bug 18: Gộp Use Case vào FAQ) -->
    <section style="padding: 5rem 0; background: #FFFFFF; border-bottom: 1px solid var(--sdi-border);">
      <div class="container-sdi">
        
        <!-- So Sánh Phương Án Đầu Tư -->
        <div style="margin-bottom: 4.5rem;">
          <div style="text-align: center; margin-bottom: 2rem;">
            <span class="eyebrow-badge">PHÂN TÍCH CHI PHÍ & LỢI ÍCH</span>
            <h3 style="font-size: 2.1rem; color: var(--sdi-navy-primary); margin-top: 0.5rem; font-weight: 800;">So Sánh Phương Án Đầu Tư Hạ Tầng</h3>
          </div>

          <div class="sdi-comparison-table-wrapper">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.925rem;">
              <thead>
                <tr style="background: #F8FAFD; border-bottom: 1px solid var(--sdi-border);">
                  <th style="padding: 1.25rem 1.5rem; font-weight: 700; color: var(--sdi-navy-primary); width: 22%;">Tiêu Chí Đánh Giá</th>
                  <th style="padding: 1.25rem 1.5rem; font-weight: 800; color: var(--sdi-blue-accent); width: 28%; background: #EFF6FF;">Combo NavaTek (Mini PC + eGPU)</th>
                  <th style="padding: 1.25rem 1.5rem; font-weight: 700; color: var(--sdi-navy-primary); width: 25%;">Máy Để Bàn Cỡ Lớn (Tower PC)</th>
                  <th style="padding: 1.25rem 1.5rem; font-weight: 700; color: var(--sdi-navy-primary); width: 25%;">Thuê GPU Cloud (Hàng Tháng)</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom: 1px solid #EFF3FA;">
                  <td style="padding: 1.1rem 1.5rem; font-weight: 700;">Bảo Mật & Dữ Liệu</td>
                  <td style="padding: 1.1rem 1.5rem; background: #F8FAFD; color: #10B981; font-weight: 700;">● Cục bộ 100%, không ra ngoài</td>
                  <td style="padding: 1.1rem 1.5rem;">● Cục bộ 100%</td>
                  <td style="padding: 1.1rem 1.5rem; color: #EF4444;">○ Dữ liệu gửi lên server nước ngoài</td>
                </tr>
                <tr style="border-bottom: 1px solid #EFF3FA;">
                  <td style="padding: 1.1rem 1.5rem; font-weight: 700;">Kích Thước & Thẩm Mỹ</td>
                  <td style="padding: 1.1rem 1.5rem; background: #F8FAFD; color: var(--sdi-blue-accent); font-weight: 700;">★ Siêu tinh gọn, đặt vừa góc bàn</td>
                  <td style="padding: 1.1rem 1.5rem;">Cồng kềnh, chiếm nhiều không gian</td>
                  <td style="padding: 1.1rem 1.5rem;">Không tốn chỗ văn phòng</td>
                </tr>
                <tr style="border-bottom: 1px solid #EFF3FA;">
                  <td style="padding: 1.1rem 1.5rem; font-weight: 700;">Điện Năng Tiêu Thụ 24/7</td>
                  <td style="padding: 1.1rem 1.5rem; background: #F8FAFD; color: #10B981; font-weight: 700;">Tiết kiệm ~60% (150W - 250W)</td>
                  <td style="padding: 1.1rem 1.5rem;">Rất tốn điện (650W - 850W)</td>
                  <td style="padding: 1.1rem 1.5rem;">Tính theo giờ sử dụng đắt đỏ</td>
                </tr>
                <tr style="border-bottom: 1px solid #EFF3FA;">
                  <td style="padding: 1.1rem 1.5rem; font-weight: 700;">Chi Phí Sau 2 Năm</td>
                  <td style="padding: 1.1rem 1.5rem; background: #F8FAFD; color: var(--sdi-orange-cta); font-weight: 800;">68.000.000₫ (Sở hữu vĩnh viễn)</td>
                  <td style="padding: 1.1rem 1.5rem;">75.000.000₫ - 85.000.000₫</td>
                  <td style="padding: 1.1rem 1.5rem; color: #EF4444;">120.000.000₫+ (Mất trắng sau thuê)</td>
                </tr>
                <tr>
                  <td style="padding: 1.1rem 1.5rem; font-weight: 700;">Bảo Hành & Lắp Đặt</td>
                  <td style="padding: 1.1rem 1.5rem; background: #F8FAFD; font-weight: 700;">24 tháng 1 đổi 1 · On-site TP.HCM</td>
                  <td style="padding: 1.1rem 1.5rem;">Bảo hành linh kiện rời rạc</td>
                  <td style="padding: 1.1rem 1.5rem;">Tự cấu hình qua ticket online</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- FAQ Tổng Hợp (Gộp Máy này phù hợp với ai + Giải đáp kỹ thuật) -->
        <div>
          <div style="text-align: center; margin-bottom: 2.5rem;">
            <span class="eyebrow-badge" style="background: rgba(37,99,235,0.08); color: var(--sdi-blue-accent);">GIẢI ĐÁP TOÀN DIỆN</span>
            <h3 style="font-size: 2.1rem; color: var(--sdi-navy-primary); margin-top: 0.5rem; font-weight: 800;">Câu Hỏi Thường Gặp Về Combo</h3>
          </div>

          <div class="sdi-faq-parallel-grid">
            
            <!-- Card 1: Đối tượng phù hợp & Tình huống sử dụng (Merged from Bug 18) -->
            <div class="sdi-faq-card">
              <div style="display: flex; align-items: center; gap: 0.75rem; border-bottom: 2px solid rgba(37,99,235,0.1); padding-bottom: 1rem;">
                <div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(37,99,235,0.1); color: var(--sdi-blue-accent); display: flex; align-items: center; justify-content: center;">
                  <i data-lucide="users" style="width: 20px; height: 20px;"></i>
                </div>
                <h4 style="font-size: 1.15rem; color: var(--sdi-navy-primary); margin: 0;">Máy này phù hợp với ai? (Tình huống sử dụng)</h4>
              </div>

              <div class="sdi-faq-item">
                <div class="sdi-faq-question">
                  <i data-lucide="help-circle" style="width: 18px; height: 18px; color: var(--sdi-blue-accent); flex-shrink: 0;"></i>
                  <span>1. Doanh nghiệp cần Private AI bảo mật</span>
                </div>
                <div class="sdi-faq-answer">
                  Các doanh nghiệp tài chính, y tế, luật, thương mại điện tử cần bảo mật hồ sơ khách hàng. Vận hành chatbot trợ lý ảo hỏi đáp hợp đồng, trích xuất dữ liệu hóa đơn nội bộ mà không đưa dữ liệu lên Cloud.
                </div>
              </div>

              <div class="sdi-faq-item">
                <div class="sdi-faq-question">
                  <i data-lucide="help-circle" style="width: 18px; height: 18px; color: var(--sdi-blue-accent); flex-shrink: 0;"></i>
                  <span>2. Nhóm R&D và viện nghiên cứu công nghệ</span>
                </div>
                <div class="sdi-faq-answer">
                  Thử nghiệm các mô hình LLM mã nguồn mở mới nhất (DeepSeek-R1, Llama-3, Qwen-2.5) hoặc Stable Diffusion tạo ảnh/video với độ trễ thấp và phần cứng chuyên biệt.
                </div>
              </div>

              <div class="sdi-faq-item">
                <div class="sdi-faq-question">
                  <i data-lucide="help-circle" style="width: 18px; height: 18px; color: var(--sdi-blue-accent); flex-shrink: 0;"></i>
                  <span>3. Tự động hóa quy trình văn phòng 24/7</span>
                </div>
                <div class="sdi-faq-answer">
                  Thiết lập trạm cào dữ liệu thị trường tự động, quản lý kho hàng đa kênh và tổng hợp báo cáo tự động trên Lark, Sapo, Coze liên tục 24/7 với chi phí tiền điện tiết kiệm hơn 60%.
                </div>
              </div>
            </div>

            <!-- Card 2: Phần mềm, Cài đặt & Hậu mãi B2B -->
            <div class="sdi-faq-card">
              <div style="display: flex; align-items: center; gap: 0.75rem; border-bottom: 2px solid rgba(16,185,129,0.15); padding-bottom: 1rem;">
                <div style="width: 36px; height: 36px; border-radius: 8px; background: rgba(16,185,129,0.1); color: #10B981; display: flex; align-items: center; justify-content: center;">
                  <i data-lucide="shield-check" style="width: 20px; height: 20px;"></i>
                </div>
                <h4 style="font-size: 1.15rem; color: var(--sdi-navy-primary); margin: 0;">Phần Mềm, Cài Đặt & Hậu Mãi</h4>
              </div>

              <div class="sdi-faq-item">
                <div class="sdi-faq-question">
                  <i data-lucide="help-circle" style="width: 18px; height: 18px; color: #10B981; flex-shrink: 0;"></i>
                  <span>NavaTek đã cài đặt sẵn những phần mềm nào?</span>
                </div>
                <div class="sdi-faq-answer">
                  Máy được bàn giao chuẩn Plug & Play: cài sẵn hệ điều hành, driver CUDA, PyTorch, Docker, Ollama, Open-WebUI và ComfyUI. Kỹ sư NavaTek sẽ hướng dẫn tải mô hình và nghiệm thu trực tiếp.
                </div>
              </div>

              <div class="sdi-faq-item">
                <div class="sdi-faq-question">
                  <i data-lucide="help-circle" style="width: 18px; height: 18px; color: #10B981; flex-shrink: 0;"></i>
                  <span>Có chạy được phần mềm kế toán, ERP doanh nghiệp không?</span>
                </div>
                <div class="sdi-faq-answer">
                  Hoàn toàn tương thích tốt và chạy mượt mà 100% các phần mềm kế toán MISA, Bravo, FAST, hệ thống ERP nội bộ và các cơ sở dữ liệu Microsoft SQL Server, PostgreSQL.
                </div>
              </div>

              <div class="sdi-faq-item">
                <div class="sdi-faq-question">
                  <i data-lucide="help-circle" style="width: 18px; height: 18px; color: #10B981; flex-shrink: 0;"></i>
                  <span>Chính sách bảo hành và hỗ trợ on-site tại TP.HCM như thế nào?</span>
                </div>
                <div class="sdi-faq-answer">
                  Bảo hành chính hãng 24 tháng với cơ chế 1 đổi 1 nhanh chóng. Đội ngũ kỹ sư hỗ trợ kỹ thuật tận nơi (on-site) tại TP.HCM trong vòng 2-4 giờ làm việc khi có sự cố.
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

    <!-- FOLD 5: CROSS-SELL -->
    <section style="padding: 4.5rem 0; background: #FFFFFF;">
      <div class="container-sdi">
        <div style="max-width: 800px; margin-bottom: 2.5rem;">
          <span class="eyebrow-badge">GỢI Ý MUA KÈM / NÂNG CẤP</span>
          <h2>Gợi ý Mua kèm / Nâng cấp</h2>
          <p style="color: var(--sdi-text-secondary); font-size: 0.95rem;">
            Tối ưu hóa trạm tính toán của bạn bằng cách chọn thêm cấu hình nâng cấp trực tiếp.
          </p>
        </div>

        <div class="sdi-grid-4" data-mobile-slider="true">
          <div class="sdi-card-solid" style="padding: 1.5rem; display: flex; flex-direction: column; justify-content: space-between; text-align: center; background: #F8FAFD;">
            <div>
              <div style="text-align: center; margin-bottom: 1rem;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ai.png" alt="Nâng cấp bộ nhớ RAM DDR5 64GB băng thông cao cho máy trạm AI" width="80" height="60" loading="lazy" decoding="async" style="max-height: 60px; width: auto; mix-blend-mode: multiply;">
              </div>
              <h4 style="font-size: 0.95rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem; min-height: 38px;">Nâng RAM lên 64GB</h4>
              <div style="font-size: 1.1rem; font-weight: 850; color: var(--sdi-orange-cta); margin-bottom: 0.5rem;">+ 4.200.000₫</div>
            </div>
            <button class="sdi-btn-orange trigger-quote-modal" style="width: 100%; justify-content: center; padding: 0.55rem; font-size: 0.825rem;">Thêm vào đơn</button>
          </div>

          <div class="sdi-card-solid" style="padding: 1.5rem; display: flex; flex-direction: column; justify-content: space-between; text-align: center; background: #F8FAFD;">
            <div>
              <div style="text-align: center; margin-bottom: 1rem;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ai.png" alt="Ổ cứng SSD NVMe M.2 2TB chuẩn PCIe 4.0 đọc ghi 7400MB/s" width="80" height="60" loading="lazy" decoding="async" style="max-height: 60px; width: auto; mix-blend-mode: multiply;">
              </div>
              <h4 style="font-size: 0.95rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem; min-height: 38px;">SSD NVMe 2TB tốc độ cao</h4>
              <div style="font-size: 1.1rem; font-weight: 850; color: var(--sdi-orange-cta); margin-bottom: 0.5rem;">+ 5.700.000₫</div>
            </div>
            <button class="sdi-btn-orange trigger-quote-modal" style="width: 100%; justify-content: center; padding: 0.55rem; font-size: 0.825rem;">Thêm vào đơn</button>
          </div>

          <div class="sdi-card-solid" style="padding: 1.5rem; display: flex; flex-direction: column; justify-content: space-between; text-align: center; background: #F8FAFD;">
            <div>
              <div style="text-align: center; margin-bottom: 1rem;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/laser.png" alt="Bộ chuyển đổi eGPU Box chuyên dụng đồ họa và huấn luyện mô hình LLM" width="80" height="60" loading="lazy" decoding="async" style="max-height: 60px; width: auto; mix-blend-mode: multiply;">
              </div>
              <h4 style="font-size: 0.95rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem; min-height: 38px;">eGPU RTX — dựng Trạm AI</h4>
              <div style="font-size: 1.1rem; font-weight: 850; color: var(--sdi-orange-cta); margin-bottom: 0.5rem;">+ 42.000.000₫</div>
            </div>
            <button class="sdi-btn-orange trigger-quote-modal" style="width: 100%; justify-content: center; padding: 0.55rem; font-size: 0.825rem;">Thêm vào đơn</button>
          </div>

          <div class="sdi-card-solid" style="padding: 1.5rem; display: flex; flex-direction: column; justify-content: space-between; text-align: center; background: #F8FAFD;">
            <div>
              <div style="text-align: center; margin-bottom: 1rem;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bending.png" alt="Dịch vụ lắp đặt on-site và cấu hình môi trường AI trao tay từ NavaTek" width="80" height="60" loading="lazy" decoding="async" style="max-height: 60px; width: auto; mix-blend-mode: multiply;">
              </div>
              <h4 style="font-size: 0.95rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem; min-height: 38px;">Dịch vụ setup trao tay</h4>
              <div style="font-size: 1.05rem; font-weight: 850; color: var(--sdi-navy-primary); margin-bottom: 0.5rem;">Liên hệ báo giá</div>
            </div>
            <button class="sdi-btn-orange trigger-quote-modal" style="width: 100%; justify-content: center; padding: 0.55rem; font-size: 0.825rem;">Thêm vào đơn</button>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Unified Master Footer (Bug 7, Bug 22, Bug 24) -->

<?php
get_footer();
?>