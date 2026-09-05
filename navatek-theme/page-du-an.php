<?php
/**
 * Template Name: Dự Án & Liên Hệ
 */
get_header();
?>

<!-- Main section -->
  <main class="sdi-contact-section" style="padding: 4.5rem 0; background: #FFFFFF;">
    <div class="container-sdi">
      
      <div class="sdi-split-grid is-footer reveal-on-scroll">
        
        <!-- Left Column: Direct Contacts & Map (Bug 15, Bug 16) -->
        <div style="display: flex; flex-direction: column; justify-content: start; gap: 1.75rem;">
          <div>
            <span class="eyebrow-badge" style="background: rgba(37, 99, 235, 0.08); color: var(--sdi-blue-accent); border: 1px solid rgba(37, 99, 235, 0.15); padding: 0.4rem 1rem;">THÔNG TIN LIÊN HỆ</span>
            <h1 style="font-size: 2.5rem; color: var(--sdi-navy-primary); margin-top: 0.75rem; margin-bottom: 1rem; line-height: 1.25; font-weight: 900;">Năng Lực Triển Khai Thực Tế &amp; Liên Hệ Báo Giá</h1>
            <p style="color: var(--sdi-text-secondary); font-size: 1.05rem; line-height: 1.6;">
              Kỹ sư B2B của NavaTek luôn sẵn sàng tư vấn thiết kế trạm AI cục bộ, Mini PC, giải pháp camera giám sát AI và thiết lập hệ thống tự động hóa.
            </p>
          </div>

          <!-- Interactive Contact Channel Cards (Bug 15) -->
          <div style="display: flex; flex-direction: column; gap: 1rem;">
            
            <a href="tel:1900628283" class="sdi-contact-channel-card">
              <div class="sdi-contact-channel-icon">
                <i data-lucide="phone" style="width: 20px; height: 20px;"></i>
              </div>
              <div>
                <div style="font-size: 0.75rem; color: var(--sdi-text-muted); font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em;">Hotline trực B2B</div>
                <div style="font-size: 1.35rem; font-weight: 900; color: var(--sdi-navy-primary); margin-top: 0.15rem;">1900 - NAVATEK</div>
              </div>
            </a>

            <div class="sdi-contact-channel-card">
              <div class="sdi-contact-channel-icon">
                <i data-lucide="building" style="width: 20px; height: 20px;"></i>
              </div>
              <div>
                <div style="font-size: 0.75rem; color: var(--sdi-text-muted); font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em;">Pháp nhân & Địa chỉ</div>
                <div style="font-size: 0.95rem; font-weight: 700; color: var(--sdi-navy-primary); margin-top: 0.15rem; line-height: 1.5;">
                  Địa chỉ: TP. Hồ Chí Minh • MST: <strong style="color: var(--sdi-blue-accent);">031789456</strong>
                </div>
              </div>
            </div>

            <div class="sdi-contact-channel-card">
              <div class="sdi-contact-channel-icon">
                <i data-lucide="mail" style="width: 20px; height: 20px;"></i>
              </div>
              <div>
                <div style="font-size: 0.75rem; color: var(--sdi-text-muted); font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em;">Email dự toán</div>
                <div style="font-size: 1.05rem; font-weight: 700; color: var(--sdi-navy-primary); margin-top: 0.15rem;">project@navatek.vn</div>
              </div>
            </div>

            <div class="sdi-contact-channel-card">
              <div class="sdi-contact-channel-icon">
                <i data-lucide="clock" style="width: 20px; height: 20px;"></i>
              </div>
              <div>
                <div style="font-size: 0.75rem; color: var(--sdi-text-muted); font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em;">Giờ làm việc</div>
                <div style="font-size: 0.9rem; color: var(--sdi-text-secondary); margin-top: 0.15rem; line-height: 1.4;">
                  Thứ 2 – Thứ 6: 8h00 – 17h30 • Thứ 7: 8h00 – 12h00
                </div>
              </div>
            </div>

          </div>

          <!-- Kênh Khác (Bug 16: Zalo, Messenger, Email, Đặt lịch khảo sát) -->
          <div class="contact-other-channels-wrap">
            <div style="font-size: 0.85rem; font-weight: 800; color: var(--sdi-navy-primary); text-transform: uppercase; letter-spacing: 0.04em;">Kênh hỗ trợ khác:</div>
            <div class="contact-channel-chips">
              <a href="https://zalo.me/0901234567" target="_blank" rel="noopener" class="contact-channel-chip">
                <i data-lucide="message-square" style="width: 16px; height: 16px; color: #0068FF;"></i>
                <span>Zalo B2B</span>
              </a>
              <a href="https://m.me/navatek" target="_blank" rel="noopener" class="contact-channel-chip">
                <i data-lucide="message-circle" style="width: 16px; height: 16px; color: #0084FF;"></i>
                <span>Messenger</span>
              </a>
              <a href="mailto:project@navatek.vn" class="contact-channel-chip">
                <i data-lucide="send" style="width: 16px; height: 16px; color: var(--sdi-orange-cta);"></i>
                <span>Gửi Email</span>
              </a>
              <a href="#contact-detailed-form" class="contact-channel-chip" style="background: #EFF6FF; border-color: var(--sdi-blue-accent); color: var(--sdi-blue-accent);">
                <i data-lucide="calendar" style="width: 16px; height: 16px;"></i>
                <span>Đặt lịch khảo sát tận nơi</span>
              </a>
            </div>
          </div>

          <!-- Maps Card -->
          <div style="border: 1px solid rgba(226, 232, 240, 0.8); border-radius: 20px; overflow: hidden; height: 160px; background: rgba(248, 250, 253, 0.8); position: relative; transition: border-color 0.3s; display: flex; align-items: center; justify-content: center;">
            <div style="text-align: center; padding: 1rem;">
              <i data-lucide="map-pin" style="width: 26px; height: 26px; color: var(--sdi-blue-accent); margin-bottom: 0.35rem;"></i>
              <div style="font-weight: 700; font-size: 0.95rem; color: var(--sdi-navy-primary);">Trụ sở chính: TP. Hồ Chí Minh</div>
              <div style="font-size: 0.8rem; color: var(--sdi-text-muted); margin-top: 0.25rem;">Hỗ trợ giao hàng & lắp đặt on-site toàn khu vực miền Nam</div>
            </div>
          </div>

        </div>

        <!-- Right Column: Detailed Form in Premium Card -->
        <div class="sdi-contact-form-card" style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 24px; padding: 2.5rem; box-shadow: 0 10px 30px rgba(0, 51, 102, 0.05);">
          <span class="eyebrow-badge" style="background: rgba(37, 99, 235, 0.08); color: var(--sdi-blue-accent); border: 1px solid rgba(37, 99, 235, 0.15); padding: 0.4rem 1rem;">YÊU CẦU BÁO GIÁ DỰ ÁN</span>
          <h2 style="font-size: 2.1rem; color: var(--sdi-navy-primary); margin-top: 0.75rem; margin-bottom: 0.75rem; line-height: 1.25; font-weight: 800;">Nhận báo giá trong 24 giờ</h2>
          <p style="color: var(--sdi-text-secondary); font-size: 0.925rem; margin-bottom: 2rem; line-height: 1.5;">Vui lòng cung cấp chi tiết nhu cầu hoặc đính kèm file dự toán/BOM.</p>

          <form id="contact-detailed-form" style="display: flex; flex-direction: column; gap: 1.25rem;">
            
            <div class="sdi-form-grid-2">
              <div>
                <label style="display: block; font-size: 0.825rem; font-weight: 700; color: var(--sdi-navy-primary); margin-bottom: 0.4rem;">Họ và tên *</label>
                <input type="text" required placeholder="Nguyễn Văn A" style="width: 100%; padding: 0.85rem 1rem; border-radius: 12px; border: 1px solid var(--sdi-border); outline: none; font-size: 0.9rem; background: #F8FAFD;">
              </div>
              <div>
                <label style="display: block; font-size: 0.825rem; font-weight: 700; color: var(--sdi-navy-primary); margin-bottom: 0.4rem;">Số điện thoại / Zalo *</label>
                <input type="tel" required placeholder="0901234567" style="width: 100%; padding: 0.85rem 1rem; border-radius: 12px; border: 1px solid var(--sdi-border); outline: none; font-size: 0.9rem; background: #F8FAFD;">
              </div>
            </div>

            <div class="sdi-form-grid-2">
              <div>
                <label style="display: block; font-size: 0.825rem; font-weight: 700; color: var(--sdi-navy-primary); margin-bottom: 0.4rem;">Email *</label>
                <input type="email" required placeholder="contact@company.com" style="width: 100%; padding: 0.85rem 1rem; border-radius: 12px; border: 1px solid var(--sdi-border); outline: none; font-size: 0.9rem; background: #F8FAFD;">
              </div>
              <div>
                <label style="display: block; font-size: 0.825rem; font-weight: 700; color: var(--sdi-navy-primary); margin-bottom: 0.4rem;">Tên công ty / Tổ chức</label>
                <input type="text" placeholder="Công Ty TNHH ABC" style="width: 100%; padding: 0.85rem 1rem; border-radius: 12px; border: 1px solid var(--sdi-border); outline: none; font-size: 0.9rem; background: #F8FAFD;">
              </div>
            </div>

            <!-- Tax ID (MST) & Company Address (Bug 15) -->
            <div class="sdi-form-grid-2">
              <div>
                <label style="display: block; font-size: 0.825rem; font-weight: 700; color: var(--sdi-navy-primary); margin-bottom: 0.4rem;">Mã số thuế (MST)</label>
                <input type="text" placeholder="031789456..." style="width: 100%; padding: 0.85rem 1rem; border-radius: 12px; border: 1px solid var(--sdi-border); outline: none; font-size: 0.9rem; background: #F8FAFD;">
              </div>
              <div>
                <label style="display: block; font-size: 0.825rem; font-weight: 700; color: var(--sdi-navy-primary); margin-bottom: 0.4rem;">Địa chỉ doanh nghiệp</label>
                <input type="text" placeholder="Số nhà, đường, Quận/Huyện, TP..." style="width: 100%; padding: 0.85rem 1rem; border-radius: 12px; border: 1px solid var(--sdi-border); outline: none; font-size: 0.9rem; background: #F8FAFD;">
              </div>
            </div>

            <div class="sdi-form-grid-2">
              <div>
                <label style="display: block; font-size: 0.825rem; font-weight: 700; color: var(--sdi-navy-primary); margin-bottom: 0.4rem;">Nhu cầu giải pháp *</label>
                <div class="sdi-custom-select is-light" data-name="solution_need">
                  <input type="hidden" name="solution_need" value="Trạm AI Cục bộ & Tự động hóa" required>
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
              <div>
                <label style="display: block; font-size: 0.825rem; font-weight: 700; color: var(--sdi-navy-primary); margin-bottom: 0.4rem;">Số lượng dự kiến *</label>
                <input type="number" required placeholder="Ví dụ: 10" style="width: 100%; padding: 0.85rem 1rem; border-radius: 12px; border: 1px solid var(--sdi-border); outline: none; font-size: 0.9rem; background: #F8FAFD;">
              </div>
            </div>

            <div>
              <label style="display: block; font-size: 0.825rem; font-weight: 700; color: var(--sdi-navy-primary); margin-bottom: 0.4rem;">Mô tả chi tiết nhu cầu sử dụng (Tùy chọn)</label>
              <textarea placeholder="Nêu rõ tình huống sử dụng, số điểm máy, có sẵn mạng LAN chưa..." style="width: 100%; height: 90px; padding: 0.85rem 1rem; border-radius: 12px; border: 1px solid var(--sdi-border); outline: none; font-size: 0.9rem; font-family: var(--font-body); resize: none; background: #F8FAFD;"></textarea>
            </div>

            <!-- File Upload component -->
            <div>
              <label style="display: block; font-size: 0.825rem; font-weight: 700; color: var(--sdi-navy-primary); margin-bottom: 0.4rem;">Đính kèm dự toán / BOM / Yêu cầu kỹ thuật (Tùy chọn)</label>
              <div class="sdi-upload-zone" style="border: 2px dashed #CBD5E1; border-radius: 14px; padding: 1.5rem; text-align: center; cursor: pointer; background: #F8FAFD;">
                <i data-lucide="file-up" style="width: 32px; height: 32px; color: var(--sdi-blue-accent); margin-bottom: 0.5rem;"></i>
                <div style="font-size: 0.85rem; font-weight: 700; color: var(--sdi-navy-primary);">Kéo thả file vào đây hoặc click để chọn</div>
                <div style="font-size: 0.725rem; color: var(--sdi-text-muted); margin-top: 0.25rem;">Hỗ trợ định dạng: PDF, XLSX, DOCX, ZIP • Tối đa 10 MB</div>
                <input type="file" id="file-uploader-input" style="display: none;">
              </div>
            </div>

            <div>
              <button type="submit" class="sdi-btn-orange" style="width: 100%; justify-content: center; padding: 0.95rem; font-size: 1rem; border-radius: 12px;">
                <span>Gửi yêu cầu báo giá</span>
              </button>
              <div style="text-align: center; font-size: 0.725rem; color: var(--sdi-text-muted); margin-top: 0.75rem; font-style: italic; line-height: 1.4;">
                * Cam kết bảo mật thông tin doanh nghiệp. Kỹ thuật viên của NavaTek sẽ liên hệ đúng nội dung, không spam quảng cáo.
              </div>
            </div>

          </form>
        </div>

      </div>

    </div>
  </main>

  <!-- Unified Master Footer (Bug 7, Bug 22, Bug 24) -->

<?php
get_footer();
?>