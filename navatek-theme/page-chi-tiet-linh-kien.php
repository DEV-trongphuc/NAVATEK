<?php
/**
 * Template Name: Chi Tiết Linh Kiện
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
        <a href="<?php echo esc_url(home_url('/may-don-le/')); ?>" style="color: var(--sdi-text-muted); text-decoration: none;">Linh kiện nâng cấp</a>
        <span>/</span>
        <span style="color: var(--sdi-navy-primary); font-weight: 700;">eGPU Box RTX 4090 (Mua Rời)</span>
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
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/laser.png" alt="Thiết bị eGPU Box RTX 4090 OCuLink 64Gbps cắm ngoài dành cho Mini PC và Laptop NavaTek" id="main-product-preview-img" class="graphic-blend" width="380" height="300" fetchpriority="high" decoding="async" style="max-height: 300px; width: auto; transition: transform 0.3s ease;">
            </div>

            <!-- Thumbnails -->
            <div class="sdi-logos-grid">
              <div class="wireframe-box-dashed-dark thumbnail-btn active" data-target-src="<?php echo esc_url(get_template_directory_uri()); ?>/images/laser.png" style="padding: 0.5rem; min-height: 80px; cursor: pointer; background: #FAFAFA;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/laser.png" alt="Vỏ nhôm CNC nguyên khối tản nhiệt buồng hơi eGPU Box RTX 4090" width="80" height="60" loading="lazy" decoding="async" style="max-height: 60px; width: auto; mix-blend-mode: multiply;">
              </div>
              <div class="wireframe-box-dashed-dark thumbnail-btn" data-target-src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ai.png" style="padding: 0.5rem; min-height: 80px; cursor: pointer; background: #FAFAFA;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ai.png" alt="Bộ nguồn chuyên dụng chuẩn Platinum 850W tích hợp trong eGPU Box" width="80" height="60" loading="lazy" decoding="async" style="max-height: 60px; width: auto; mix-blend-mode: multiply;">
              </div>
              <div class="wireframe-box-dashed-dark thumbnail-btn" data-target-src="<?php echo esc_url(get_template_directory_uri()); ?>/images/combo.png" style="padding: 0.5rem; min-height: 80px; cursor: pointer; background: #FAFAFA;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/combo.png" alt="Kết nối trọn bộ Combo eGPU Box với Mini PC qua cổng OCuLink PCIe 4.0" width="80" height="60" loading="lazy" decoding="async" style="max-height: 60px; width: auto; mix-blend-mode: multiply;">
              </div>
            </div>
          </div>

          <!-- Specs Summary & Actions -->
          <div style="display: flex; flex-direction: column; justify-content: space-between;">
            <div>
              <span class="eyebrow-badge" style="background: rgba(234,88,12,0.1); color: #EA580C; border: 1px solid rgba(234,88,12,0.2);">LINH KIỆN NÂNG CẤP • eGPU BOX</span>
              
              <h1 style="font-size: 2rem; color: var(--sdi-navy-primary); margin-top: 0.35rem; margin-bottom: 0.5rem; line-height: 1.35; font-weight: 900;">
                eGPU Box RTX 4090 24GB (Mua Rời Cắm Ngoài)
              </h1>

              <div style="font-size: 1.85rem; font-weight: 800; color: var(--sdi-orange-cta); margin-bottom: 0.75rem;">
                42.000.000₫
              </div>

              <div style="font-size: 0.85rem; color: var(--sdi-text-secondary); font-weight: 700; margin-bottom: 1.25rem; display: flex; gap: 0.75rem; align-items: center; flex-wrap: wrap;">
                <span><i data-lucide="check-circle" style="width: 15px; height: 15px; color: #10B981; display: inline; vertical-align: -2px;"></i> Tình trạng: <strong>Sẵn hàng tại kho TP.HCM</strong></span>
                <span>•</span>
                <span>Bảo hành: <strong>24 tháng 1 đổi 1 chính hãng</strong></span>
              </div>

              <!-- Quick spec points (Khung viền căn đều 2 cột) -->
              <div class="product-spec-highlights-box" style="background: #F8FAFD; border: 1px solid #E2E8F0; border-radius: 14px; padding: 1.25rem 1.5rem; margin-bottom: 1.75rem;">
                <div class="spec-highlight-title" style="font-size: 0.8rem; font-weight: 800; color: #0B192C; text-transform: uppercase; margin-bottom: 1rem; letter-spacing: 0.04em;">Đặc điểm kỹ thuật nổi bật:</div>
                <div class="spec-highlight-list" style="display: flex; flex-direction: column; gap: 0.85rem;">
                  
                  <div class="spec-highlight-item" style="display: grid; grid-template-columns: 240px 1fr; gap: 1rem; align-items: baseline; font-size: 0.9rem; line-height: 1.55; border-bottom: 1px dashed #E2E8F0; padding-bottom: 0.75rem;">
                    <div class="spec-highlight-label" style="display: flex; align-items: flex-start; gap: 0.5rem; font-weight: 700; color: #0B192C;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 3px;"><polyline points="20 6 9 17 4 12"/></svg>
                      <span>Chuẩn OCuLink & TB4:</span>
                    </div>
                    <div class="spec-highlight-desc" style="color: #475569;">Băng thông 64Gbps cực cao, giảm thiểu tối đa độ trễ suy luận AI.</div>
                  </div>

                  <div class="spec-highlight-item" style="display: grid; grid-template-columns: 240px 1fr; gap: 1rem; align-items: baseline; font-size: 0.9rem; line-height: 1.55; border-bottom: 1px dashed #E2E8F0; padding-bottom: 0.75rem;">
                    <div class="spec-highlight-label" style="display: flex; align-items: flex-start; gap: 0.5rem; font-weight: 700; color: #0B192C;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 3px;"><polyline points="20 6 9 17 4 12"/></svg>
                      <span>Nguồn công suất 850W Gold:</span>
                    </div>
                    <div class="spec-highlight-desc" style="color: #475569;">Cung cấp dòng điện ổn định cho GPU tải nặng 24/7 không sụt áp.</div>
                  </div>

                  <div class="spec-highlight-item" style="display: grid; grid-template-columns: 240px 1fr; gap: 1rem; align-items: baseline; font-size: 0.9rem; line-height: 1.55;">
                    <div class="spec-highlight-label" style="display: flex; align-items: flex-start; gap: 0.5rem; font-weight: 700; color: #0B192C;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 3px;"><polyline points="20 6 9 17 4 12"/></svg>
                      <span>Vỏ nhôm CNC tản nhiệt:</span>
                    </div>
                    <div class="spec-highlight-desc" style="color: #475569;">Thiết kế sang trọng, đặt vừa vặn bên cạnh Mini PC trên bàn làm việc.</div>
                  </div>

                </div>
              </div>

              <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <button class="sdi-btn-orange trigger-quote-modal" style="font-size: 1rem; padding: 0.85rem 2rem;">
                  <i data-lucide="shopping-cart" style="width: 18px; height: 18px;"></i>
                  <span>Đặt mua linh kiện</span>
                </button>
                <a href="tel:1900628283" class="sdi-pill-btn-outline" style="border: 2px solid var(--sdi-navy-primary); color: var(--sdi-navy-primary); padding: 0.85rem 1.75rem; border-radius: 9999px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
                  <i data-lucide="phone" style="width: 16px; height: 16px;"></i>
                  <span>Tư vấn tương thích máy: 1900 - NAVATEK</span>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Specifications Table -->
    <section style="padding: 4.5rem 0; background: #FFFFFF; border-bottom: 1px solid var(--sdi-border);">
      <div class="container-sdi">
        <div style="max-width: 800px; margin-bottom: 2rem;">
          <span class="eyebrow-badge">THÔNG SỐ CHI TIẾT</span>
          <h2>Thông Số Kỹ Thuật eGPU Box</h2>
        </div>

        <div style="overflow-x: auto; border: 1px solid var(--sdi-border); border-radius: 16px;">
          <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.925rem;">
            <tbody>
              <tr style="border-bottom: 1px solid #EFF3FA; background: #F8FAFD;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700; width: 250px;">Card đồ họa tích hợp</td>
                <td style="padding: 1.25rem 1.5rem;">NVIDIA RTX 4090 24GB GDDR6X (ASUS TUF / MSI Gaming Trio)</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Chuẩn cắm kết nối</td>
                <td style="padding: 1.25rem 1.5rem;">OCuLink SFF-8611 (PCIe 4.0 x4, 64Gbps) & Thunderbolt 4 / USB4 (40Gbps)</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA; background: #F8FAFD;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Bộ nguồn (PSU)</td>
                <td style="padding: 1.25rem 1.5rem;">SFX 850W 80 Plus Gold Full Modular (Hỗ trợ cấp nguồn ngược 65W PD cho Mini PC)</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Cổng xuất hình ra</td>
                <td style="padding: 1.25rem 1.5rem;">3x DisplayPort 1.4a · 1x HDMI 2.1a (Hỗ trợ 4K 144Hz, 8K 60Hz)</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA; background: #F8FAFD;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Kích thước & Trọng lượng</td>
                <td style="padding: 1.25rem 1.5rem;">340 x 165 x 185 mm · 4.8 kg (Vỏ nhôm Anodized nguyên khối)</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Tương thích thiết bị</td>
                <td style="padding: 1.25rem 1.5rem;">Tương thích 100% Mini PC ASUS, Minisforum, Intel NUC, Laptop có cổng TB4/USB4/OCuLink</td>
              </tr>
              <tr style="border-bottom: 1px solid #EFF3FA; background: #F8FAFD;">
                <td style="padding: 1.25rem 1.5rem; font-weight: 700;">Bảo hành & Hỗ trợ</td>
                <td style="padding: 1.25rem 1.5rem;">24 tháng chính hãng · Miễn phí hướng dẫn setup driver CUDA & AI</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

  </main>

  <!-- Unified Master Footer (Bug 7, Bug 22, Bug 24) -->

<?php
get_footer();
?>