<?php
/**
 * Template Name: Máy Đơn Lẻ
 */
get_header();
?>

<!-- Main Content Wrapper -->
  <main style="padding: 3.5rem 0; background: #ffffff;">
    <div class="container-sdi">
      
      <!-- Breadcrumbs -->
      <nav style="font-size: 0.85rem; color: var(--sdi-text-muted); margin-bottom: 1.5rem;" aria-label="Breadcrumb">
        <ol style="list-style: none; padding: 0; display: flex; gap: 0.5rem; flex-wrap: wrap;">
          <li><a href="<?php echo esc_url(home_url('/')); ?>" style="color: var(--sdi-text-muted); text-decoration: none;">Trang chủ</a></li>
          <li>/</li>
          <li><a href="<?php echo esc_url(home_url('/may-don-le/')); ?>" style="color: var(--sdi-text-muted); text-decoration: none;">Sản phẩm</a></li>
          <li>/</li>
          <li style="color: var(--sdi-navy-primary); font-weight: 700;">Trạm AI, Workstation & Linh kiện</li>
        </ol>
      </nav>

      <!-- Category Header Section -->
      <div style="margin-bottom: 2.5rem; position: relative;">
        <span class="eyebrow-badge">DANH MỤC THIẾT BỊ B2B</span>
        <h1 style="font-size: 2.6rem; color: var(--sdi-navy-primary); margin-bottom: 0.75rem; font-weight: 900;">Trạm AI Cục bộ, Workstation & Linh Kiện</h1>
        <p style="color: var(--sdi-text-secondary); font-size: 1rem; max-width: 860px; line-height: 1.6;">
          Danh mục cung cấp đầy đủ các giải pháp phần cứng đóng gói sẵn dưới dạng <strong>Combo trọn bộ</strong> tiện dụng hoặc thiết bị <strong>Máy đơn lẻ</strong> cấu hình cao tự vận hành, hỗ trợ doanh nghiệp tự thiết lập môi trường tính toán cục bộ.
        </p>
      </div>

      <!-- Filters & Product Grid layout -->
      <div class="sdi-sidebar-grid">
        
        <!-- Sidebar Filters with Multi-Facet Functionality (Bug 19) -->
        <aside class="sdi-filter-sidebar" id="filter-sidebar" style="border: 1px solid var(--sdi-border); border-radius: 20px; padding: 1.75rem; background: #F8FAFD;">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
            <h3 style="font-size: 1.1rem; color: var(--sdi-navy-primary); margin: 0; font-weight: 800;">BỘ LỌC TÌM KIẾM</h3>
            <button class="sdi-filter-close-btn" id="mobile-filter-close" aria-label="Đóng bộ lọc">
              <i data-lucide="x" style="width: 18px; height: 18px;"></i>
            </button>
          </div>

          <!-- Filter Group 1: Product Type (Pills Style) -->
          <div style="margin-bottom: 1.5rem; border-bottom: 1px solid #EFF3FA; padding-bottom: 1.25rem;">
            <div style="font-weight: 800; font-size: 0.85rem; text-transform: uppercase; color: var(--sdi-navy-primary); margin-bottom: 0.75rem;">Loại sản phẩm</div>
            <div style="display: flex; flex-direction: column; gap: 0.5rem;" id="filter-group-category">
              <div class="filter-pill active" data-filter-type="category" data-val="all">Tất cả sản phẩm</div>
              <div class="filter-pill" data-filter-type="category" data-val="combo">Combo trọn bộ</div>
              <div class="filter-pill" data-filter-type="category" data-val="may-don">Máy đơn lẻ</div>
              <div class="filter-pill" data-filter-type="category" data-val="linh-kien">Linh kiện nâng cấp</div>
            </div>
          </div>

          <!-- Filter Group 2: Price range (Pills Style) -->
          <div style="margin-bottom: 1.5rem; border-bottom: 1px solid #EFF3FA; padding-bottom: 1.25rem;">
            <div style="font-weight: 800; font-size: 0.85rem; text-transform: uppercase; color: var(--sdi-navy-primary); margin-bottom: 0.75rem;">Khoảng giá</div>
            <div class="sdi-form-grid-2" style="gap: 0.5rem !important;" id="filter-group-price">
              <div class="filter-pill" data-filter-type="price" data-val="under-15">&lt; 15tr</div>
              <div class="filter-pill" data-filter-type="price" data-val="15-30">15-30tr</div>
              <div class="filter-pill" data-filter-type="price" data-val="30-70">30-70tr</div>
              <div class="filter-pill" data-filter-type="price" data-val="over-70">&gt; 70tr</div>
            </div>
          </div>

          <!-- Filter Group 3: Brand (Pills Style) -->
          <div style="margin-bottom: 1.5rem; border-bottom: 1px solid #EFF3FA; padding-bottom: 1.25rem;">
            <div style="font-weight: 800; font-size: 0.85rem; text-transform: uppercase; color: var(--sdi-navy-primary); margin-bottom: 0.75rem;">Hãng sản xuất</div>
            <div class="sdi-form-grid-2" style="gap: 0.5rem !important;" id="filter-group-brand">
              <div class="filter-pill" data-filter-type="brand" data-val="intel">Intel</div>
              <div class="filter-pill" data-filter-type="brand" data-val="amd">AMD</div>
              <div class="filter-pill" data-filter-type="brand" data-val="asus">Asus</div>
              <div class="filter-pill" data-filter-type="brand" data-val="all">Tất cả</div>
            </div>
          </div>

          <!-- Filter Group 4: Need (Pills Style) -->
          <div>
            <div style="font-weight: 800; font-size: 0.85rem; text-transform: uppercase; color: var(--sdi-navy-primary); margin-bottom: 0.75rem;">Nhu cầu sử dụng</div>
            <div style="display: flex; flex-direction: column; gap: 0.5rem;" id="filter-group-usecase">
              <div class="filter-pill" data-filter-type="usecase" data-val="van-phong">Văn phòng & Kế toán</div>
              <div class="filter-pill" data-filter-type="usecase" data-val="phong-may">Phòng máy & Trường học</div>
              <div class="filter-pill" data-filter-type="usecase" data-val="do-hoa">Thiết kế & Đồ họa 3D</div>
              <div class="filter-pill" data-filter-type="usecase" data-val="ai">Trạm AI & Local LLM</div>
            </div>
          </div>
        </aside>
        
        <!-- Mobile Filter Overlay -->
        <div class="sdi-filter-overlay" id="filter-overlay"></div>

        <!-- Right Side: Lưới sản phẩm -->
        <div>
          
          <!-- Toolbar with In-Catalog Search & Sorter (Bug 14) -->
          <div class="sdi-catalog-toolbar">
            <span class="sdi-catalog-results-text" id="catalog-results-counter">Hiển thị 8 sản phẩm chiến lược</span>
            <div class="sdi-catalog-actions">
              <!-- Mobile Filter Trigger Button -->
              <button class="sdi-mobile-filter-btn" id="mobile-filter-trigger">
                <i data-lucide="filter" style="width: 15px; height: 15px;"></i>
                <span>Bộ lọc</span>
              </button>
              <div class="sdi-catalog-inputs">
                <input type="text" placeholder="Tìm kiếm nhanh mã máy, thông số..." class="sdi-catalog-search" id="catalog-search-input">
                <div class="sdi-custom-select is-light is-compact" data-name="catalog_sort" id="catalog-sort-select">
                  <input type="hidden" name="catalog_sort" value="default">
                  <button type="button" class="sdi-custom-select-trigger" aria-haspopup="listbox" aria-expanded="false">
                    <span class="sdi-custom-select-label">Sắp xếp: Mới nhất</span>
                    <i data-lucide="chevron-down" class="sdi-select-arrow"></i>
                  </button>
                  <div class="sdi-custom-select-dropdown" role="listbox">
                    <div class="sdi-custom-select-option selected" data-value="default" role="option" aria-selected="true">
                      <span>Sắp xếp: Mới nhất</span>
                      <i data-lucide="check" class="sdi-option-check"></i>
                    </div>
                    <div class="sdi-custom-select-option" data-value="price-asc" role="option">
                      <span>Sắp xếp theo giá tăng dần</span>
                      <i data-lucide="check" class="sdi-option-check"></i>
                    </div>
                    <div class="sdi-custom-select-option" data-value="price-desc" role="option">
                      <span>Sắp xếp theo giá giảm dần</span>
                      <i data-lucide="check" class="sdi-option-check"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Mobile Filter Chips Bar (Bug 11) -->
          <div class="catalog-mobile-chips-bar" id="mobile-category-chips">
            <button class="filter-chip-btn active" data-category="all">Tất cả</button>
            <button class="filter-chip-btn" data-category="combo">Combo Trọn Bộ</button>
            <button class="filter-chip-btn" data-category="may-don">Máy Đơn Lẻ</button>
            <button class="filter-chip-btn" data-category="linh-kien">Linh Kiện</button>
          </div>

          <!-- Product Grid with Filter Metadata (Bug 19, 20) -->
          <div class="sdi-grid-4" id="catalog-product-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 1.25rem; margin-bottom: 3.5rem;">
            
            <!-- Card 1: Combo 4070 -->
            <div class="bento-card product-item-card" data-category="combo" data-price="68000000" data-brand="asus intel" data-usecase="ai gpu" style="padding: 1.25rem; min-height: 360px; position: relative; display: flex; flex-direction: column; justify-content: space-between;">
              <span class="product-type-badge combo" style="font-size: 0.6rem; top: 0.75rem; right: 0.75rem; padding: 0.15rem 0.45rem;">Combo trọn bộ</span>
              <div>
                <div style="text-align: center; margin: 1rem 0;">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/combo.png" alt="Trạm AI cơ bản Mini PC kết hợp eGPU RTX 4070 OCuLink NavaTek" width="160" height="85" loading="lazy" decoding="async" style="max-height: 85px; width: auto;" class="graphic-blend" />
                </div>
                <span style="font-size: 0.7rem; color: var(--sdi-text-muted); display: block; margin-bottom: 0.25rem;">3 món • Mini PC + eGPU + setup</span>
                <h4 style="font-size: 0.9rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem; min-height: 38px;">
                  Trạm AI cơ bản: Mini PC + eGPU RTX 4070
                </h4>
              </div>
              <div>
                <div style="font-size: 1.15rem; font-weight: 850; color: var(--sdi-orange-cta); margin-bottom: 0.25rem;">68.000.000₫</div>
                <div style="font-size: 0.725rem; color: var(--sdi-text-muted); margin-bottom: 0.75rem;">○ Đặt trước • 7 ngày</div>
                <a href="<?php echo esc_url(home_url('/combo-tron-bo/')); ?>" class="sdi-btn-orange" style="width: 100%; justify-content: center; padding: 0.55rem; font-size: 0.8rem; text-decoration: none;">Chi tiết</a>
              </div>
            </div>

            <!-- Card 2: Combo 4090 -->
            <div class="bento-card product-item-card" data-category="combo" data-price="112000000" data-brand="asus intel" data-usecase="ai gpu" style="padding: 1.25rem; min-height: 360px; position: relative; display: flex; flex-direction: column; justify-content: space-between;">
              <span class="product-type-badge combo" style="font-size: 0.6rem; top: 0.75rem; right: 0.75rem; padding: 0.15rem 0.45rem;">Combo trọn bộ</span>
              <div>
                <div style="text-align: center; margin: 1rem 0;">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/combo.png" alt="Trạm AI cao cấp Mini PC kết hợp eGPU RTX 4090 24GB VRAM NavaTek" width="160" height="85" loading="lazy" decoding="async" style="max-height: 85px; width: auto;" class="graphic-blend" />
                </div>
                <span style="font-size: 0.7rem; color: var(--sdi-text-muted); display: block; margin-bottom: 0.25rem;">4 món • Mini PC + eGPU 4090</span>
                <h4 style="font-size: 0.9rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem; min-height: 38px;">
                  Trạm AI cao cấp: Mini PC + eGPU 4090 24GB
                </h4>
              </div>
              <div>
                <div style="font-size: 1.15rem; font-weight: 850; color: var(--sdi-orange-cta); margin-bottom: 0.25rem;">112.000.000₫</div>
                <div style="font-size: 0.725rem; color: var(--sdi-text-muted); margin-bottom: 0.75rem;">○ Đặt trước • 7 ngày</div>
                <a href="<?php echo esc_url(home_url('/combo-tron-bo/')); ?>" class="sdi-btn-orange" style="width: 100%; justify-content: center; padding: 0.55rem; font-size: 0.8rem; text-decoration: none;">Chi tiết</a>
              </div>
            </div>

            <!-- Card 3: Workstation AI 4090 -->
            <div class="bento-card product-item-card" data-category="may-don" data-price="96000000" data-brand="asus intel" data-usecase="ai gpu do-hoa" style="padding: 1.25rem; min-height: 360px; position: relative; display: flex; flex-direction: column; justify-content: space-between;">
              <span class="product-type-badge single" style="font-size: 0.6rem; top: 0.75rem; right: 0.75rem; padding: 0.15rem 0.45rem;">Máy đơn</span>
              <div>
                <div style="text-align: center; margin: 1rem 0;">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/laser.png" alt="Máy trạm Workstation AI RTX 4090 24GB 128GB RAM DDR5 NavaTek" width="160" height="85" loading="lazy" decoding="async" style="max-height: 85px; width: auto;" class="graphic-blend" />
                </div>
                <span style="font-size: 0.7rem; color: var(--sdi-text-muted); display: block; margin-bottom: 0.25rem;">Workstation độc lập</span>
                <h4 style="font-size: 0.9rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem; min-height: 38px;">
                  Workstation AI · RTX 4090 · 128GB
                </h4>
              </div>
              <div>
                <div style="font-size: 1.15rem; font-weight: 850; color: var(--sdi-orange-cta); margin-bottom: 0.25rem;">96.000.000₫</div>
                <div style="font-size: 0.725rem; color: var(--sdi-text-muted); margin-bottom: 0.75rem;">○ Đặt trước • 7 ngày</div>
                <a href="<?php echo esc_url(home_url('/chi-tiet-may-don/')); ?>" class="sdi-btn-orange" style="width: 100%; justify-content: center; padding: 0.55rem; font-size: 0.8rem; text-decoration: none;">Chi tiết</a>
              </div>
            </div>

            <!-- Card 4: Mini PC Core i9 -->
            <div class="bento-card product-item-card" data-category="may-don" data-price="28900000" data-brand="intel asus" data-usecase="ai van-phong" style="padding: 1.25rem; min-height: 360px; position: relative; display: flex; flex-direction: column; justify-content: space-between;">
              <span class="product-type-badge single" style="font-size: 0.6rem; top: 0.75rem; right: 0.75rem; padding: 0.15rem 0.45rem;">Máy đơn</span>
              <div>
                <div style="text-align: center; margin: 1rem 0;">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bending.png" alt="Mini PC Intel Core i9 64GB RAM chạy mô hình AI LLM nhẹ NavaTek" width="160" height="85" loading="lazy" decoding="async" style="max-height: 85px; width: auto;" class="graphic-blend" />
                </div>
                <span style="font-size: 0.7rem; color: var(--sdi-text-muted); display: block; margin-bottom: 0.25rem;">Mini PC hiệu năng cao</span>
                <h4 style="font-size: 0.9rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem; min-height: 38px;">
                  Mini PC Core i9 · 64GB · chạy LLM nhẹ
                </h4>
              </div>
              <div>
                <div style="font-size: 1.15rem; font-weight: 850; color: var(--sdi-orange-cta); margin-bottom: 0.25rem;">28.900.000₫</div>
                <div style="font-size: 0.725rem; color: #10B981; font-weight: 600; margin-bottom: 0.75rem;">● Còn hàng</div>
                <a href="<?php echo esc_url(home_url('/chi-tiet-may-don/')); ?>" class="sdi-btn-orange" style="width: 100%; justify-content: center; padding: 0.55rem; font-size: 0.8rem; text-decoration: none;">Chi tiết</a>
              </div>
            </div>

            <!-- Card 5: Mini PC đồ họa AMD -->
            <div class="bento-card product-item-card" data-category="may-don" data-price="27500000" data-brand="amd asus" data-usecase="do-hoa van-phong" style="padding: 1.25rem; min-height: 360px; position: relative; display: flex; flex-direction: column; justify-content: space-between;">
              <span class="product-type-badge single" style="font-size: 0.6rem; top: 0.75rem; right: 0.75rem; padding: 0.15rem 0.45rem;">Máy đơn</span>
              <div>
                <div style="text-align: center; margin: 1rem 0;">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bending.png" alt="Mini PC AMD Ryzen 9 tích hợp card đồ họa rời chuyên đồ họa kỹ thuật" width="160" height="85" loading="lazy" decoding="async" style="max-height: 85px; width: auto;" class="graphic-blend" />
                </div>
                <span style="font-size: 0.7rem; color: var(--sdi-text-muted); display: block; margin-bottom: 0.25rem;">Card rời tích hợp</span>
                <h4 style="font-size: 0.9rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem; min-height: 38px;">
                  Mini PC AMD Ryzen 9 · Card Rời Đồ Họa
                </h4>
              </div>
              <div>
                <div style="font-size: 1.15rem; font-weight: 850; color: var(--sdi-orange-cta); margin-bottom: 0.25rem;">27.500.000₫</div>
                <div style="font-size: 0.725rem; color: #10B981; font-weight: 600; margin-bottom: 0.75rem;">● Còn hàng</div>
                <a href="<?php echo esc_url(home_url('/chi-tiet-may-don/')); ?>" class="sdi-btn-orange" style="width: 100%; justify-content: center; padding: 0.55rem; font-size: 0.8rem; text-decoration: none;">Chi tiết</a>
              </div>
            </div>

            <!-- Card 6: Mini PC Core i7 -->
            <div class="bento-card product-item-card" data-category="may-don" data-price="14900000" data-brand="intel asus" data-usecase="van-phong phong-may" style="padding: 1.25rem; min-height: 360px; position: relative; display: flex; flex-direction: column; justify-content: space-between;">
              <span class="product-type-badge single" style="font-size: 0.6rem; top: 0.75rem; right: 0.75rem; padding: 0.15rem 0.45rem;">Máy đơn</span>
              <div>
                <div style="text-align: center; margin: 1rem 0;">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bending.png" alt="Mini PC Intel Core i7 32GB RAM DDR5 văn phòng doanh nghiệp cao cấp" width="160" height="85" loading="lazy" decoding="async" style="max-height: 85px; width: auto;" class="graphic-blend" />
                </div>
                <span style="font-size: 0.7rem; color: var(--sdi-text-muted); display: block; margin-bottom: 0.25rem;">Văn phòng cao cấp</span>
                <h4 style="font-size: 0.9rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem; min-height: 38px;">
                  Mini PC Core i7 · 32GB RAM DDR5
                </h4>
              </div>
              <div>
                <div style="font-size: 1.15rem; font-weight: 850; color: var(--sdi-orange-cta); margin-bottom: 0.25rem;">14.900.000₫</div>
                <div style="font-size: 0.725rem; color: #10B981; font-weight: 600; margin-bottom: 0.75rem;">● Còn hàng</div>
                <a href="<?php echo esc_url(home_url('/chi-tiet-may-don/')); ?>" class="sdi-btn-orange" style="width: 100%; justify-content: center; padding: 0.55rem; font-size: 0.8rem; text-decoration: none;">Chi tiết</a>
              </div>
            </div>

            <!-- Card 7: eGPU Box (Linh kiện) -->
            <div class="bento-card product-item-card" data-category="linh-kien" data-price="42000000" data-brand="asus" data-usecase="ai gpu" style="padding: 1.25rem; min-height: 360px; position: relative; display: flex; flex-direction: column; justify-content: space-between;">
              <span class="product-type-badge part" style="font-size: 0.6rem; top: 0.75rem; right: 0.75rem; padding: 0.15rem 0.45rem;">Linh kiện</span>
              <div>
                <div style="text-align: center; margin: 1rem 0;">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/laser.png" alt="Thiết bị eGPU Box RTX 4090 24GB OCuLink mua rời cắm ngoài NavaTek" width="160" height="85" loading="lazy" decoding="async" style="max-height: 85px; width: auto;" class="graphic-blend" />
                </div>
                <span style="font-size: 0.7rem; color: var(--sdi-text-muted); display: block; margin-bottom: 0.25rem;">Mua nâng cấp lẻ</span>
                <h4 style="font-size: 0.9rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem; min-height: 38px;">
                  eGPU box RTX 4090 24GB (mua rời)
                </h4>
              </div>
              <div>
                <div style="font-size: 1.15rem; font-weight: 850; color: var(--sdi-orange-cta); margin-bottom: 0.25rem;">42.000.000₫</div>
                <div style="font-size: 0.725rem; color: var(--sdi-text-muted); margin-bottom: 0.75rem;">○ Đặt trước</div>
                <a href="<?php echo esc_url(home_url('/chi-tiet-linh-kien/')); ?>" class="sdi-btn-orange" style="width: 100%; justify-content: center; padding: 0.55rem; font-size: 0.8rem; text-decoration: none;">Chi tiết</a>
              </div>
            </div>

            <!-- Card 8: Upgrade Pack (Linh kiện) -->
            <div class="bento-card product-item-card" data-category="linh-kien" data-price="9900000" data-brand="intel amd asus" data-usecase="van-phong ai" style="padding: 1.25rem; min-height: 360px; position: relative; display: flex; flex-direction: column; justify-content: space-between;">
              <span class="product-type-badge part" style="font-size: 0.6rem; top: 0.75rem; right: 0.75rem; padding: 0.15rem 0.45rem;">Linh kiện</span>
              <div>
                <div style="text-align: center; margin: 1rem 0;">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/ai.png" alt="Gói nâng cấp phần cứng RAM 64GB DDR5 và ổ cứng SSD NVMe 2TB PCIe Gen 4" width="160" height="85" loading="lazy" decoding="async" style="max-height: 85px; width: auto;" class="graphic-blend" />
                </div>
                <span style="font-size: 0.7rem; color: var(--sdi-text-muted); display: block; margin-bottom: 0.25rem;">Tăng tốc lưu trữ</span>
                <h4 style="font-size: 0.9rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem; min-height: 38px;">
                  Gói nâng cấp RAM 64GB + SSD 2TB
                </h4>
              </div>
              <div>
                <div style="font-size: 1.15rem; font-weight: 850; color: var(--sdi-orange-cta); margin-bottom: 0.25rem;">9.900.000₫</div>
                <div style="font-size: 0.725rem; color: #10B981; font-weight: 600; margin-bottom: 0.75rem;">● Còn hàng</div>
                <a href="<?php echo esc_url(home_url('/chi-tiet-linh-kien/')); ?>" class="sdi-btn-orange" style="width: 100%; justify-content: center; padding: 0.55rem; font-size: 0.8rem; text-decoration: none;">Chi tiết</a>
              </div>
            </div>

          </div>

          <!-- Empty State (Hidden by default) -->
          <div id="catalog-empty-state" style="display: none; text-align: center; padding: 3.5rem 1rem; background: #F8FAFD; border: 1px dashed var(--sdi-border); border-radius: 16px; margin-bottom: 3rem;">
            <i data-lucide="search-x" style="width: 48px; height: 48px; color: var(--sdi-text-muted); margin-bottom: 1rem;"></i>
            <h3 style="font-size: 1.25rem; color: var(--sdi-navy-primary); margin-bottom: 0.5rem;">Không tìm thấy sản phẩm phù hợp</h3>
            <p style="color: var(--sdi-text-secondary); font-size: 0.95rem; margin-bottom: 1.5rem;">Vui lòng thử điều chỉnh lại bộ lọc hoặc từ khóa tìm kiếm.</p>
            <button id="reset-catalog-filters" class="sdi-btn-orange" style="display: inline-flex; margin: 0 auto;">Xóa tất cả bộ lọc</button>
          </div>

          <!-- SEO Context Footer -->
          <div style="border-top: 1px solid var(--sdi-border); padding-top: 2.5rem; position: relative;">
            <h3 style="font-size: 1.25rem; color: var(--sdi-navy-primary); margin-bottom: 1rem; font-weight: 800;">Hướng dẫn lựa chọn cấu hình trạm tính toán AI</h3>
            <p style="font-size: 0.9rem; color: var(--sdi-text-secondary); line-height: 1.65; margin-bottom: 1rem; max-width: 900px;">
              Để thiết lập môi trường tính toán cục bộ local inference chạy LLM (Large Language Model) hiệu quả, doanh nghiệp cần chú ý cân bằng giữa số lượng tham số mô hình và dung lượng VRAM của card đồ họa. Các dòng sản phẩm Mini PC kết hợp eGPU mang đến khả năng mở rộng VRAM linh hoạt mà vẫn giữ được sự tinh gọn tuyệt đối tại văn phòng.
            </p>
            <p style="font-size: 0.9rem; color: var(--sdi-text-secondary); line-height: 1.65; max-width: 900px;">
              NavaTek cung cấp giải pháp máy trạm local bảo mật cao, cài đặt sẵn môi trường CUDA, PyTorch, Docker theo đúng yêu cầu công việc. Toàn bộ thiết bị được bảo hành 1 đổi 1 nhanh chóng và hỗ trợ kỹ thuật on-site 24/7.
            </p>
          </div>

        </div>

      </div>

    </div>
  </main>

  <!-- Unified Master Footer (Bug 7, Bug 22, Bug 24) -->

<?php
get_footer();
?>