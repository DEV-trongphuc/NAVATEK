<?php
/**
 * Template Name: Bài Viết Chi Tiết
 */
get_header();
?>

<main style="background: #FFFFFF;">
    
    <!-- Article Header -->
    <header class="article-header">
      <div class="container-sdi">
        <!-- Breadcrumb -->
        <nav class="article-breadcrumb" aria-label="Breadcrumb">
          <a href="<?php echo esc_url(home_url('/')); ?>">Trang chủ</a>
          <i data-lucide="chevron-right" style="width: 14px; height: 14px;"></i>
          <a href="<?php echo esc_url(home_url('/tin-tuc/')); ?>">Cẩm nang & Tin tức</a>
          <i data-lucide="chevron-right" style="width: 14px; height: 14px;"></i>
          <span style="color: var(--sdi-navy-primary); font-weight: 600;">Hạ tầng AI & LLM</span>
        </nav>

        <!-- Category & Title -->
        <div style="display: flex; gap: 0.75rem; align-items: center; margin-bottom: 0.75rem;">
          <span class="blog-cat-badge ai">
            <i data-lucide="cpu" style="width: 13px; height: 13px;"></i>
            Hạ tầng AI & LLM
          </span>
          <span style="font-size: 0.8rem; color: var(--sdi-text-muted);">● Bài viết chuyên sâu</span>
        </div>

        <h1 class="article-main-title">
          Cẩm Nang Triển Khai Trạm AI Cục Bộ (Local LLM) Cho Doanh Nghiệp Vừa & Nhỏ Năm 2026
        </h1>

        <p class="article-lead">
          Phân tích chi phí TCO thực tế giữa Cloud API vs. Máy chủ AI On-Premise, tiêu chuẩn chọn GPU VRAM theo mô hình (Llama 3.3, DeepSeek-R1, Qwen 2.5) và 4 bước triển khai cắm-chạy an toàn dữ liệu 100%.
        </p>

        <!-- Article Meta Bar -->
        <div class="article-meta-bar">
          <div style="display: flex; align-items: center; gap: 1rem;">
            <div class="blog-author-avatar" style="width: 44px; height: 44px; font-size: 0.95rem;">
              TM
            </div>
            <div>
              <div style="font-weight: 800; font-size: 0.95rem; color: var(--sdi-navy-primary);">Kỹ sư Trương Minh Tuấn</div>
              <div style="font-size: 0.8rem; color: var(--sdi-text-muted);">Trưởng phòng Giải pháp Hạ tầng NavaTek · Cập nhật 15/08/2026</div>
            </div>
          </div>

          <div style="display: flex; align-items: center; gap: 1.5rem; color: var(--sdi-text-muted); font-size: 0.85rem;">
            <div style="display: flex; align-items: center; gap: 0.4rem;">
              <i data-lucide="clock" style="width: 16px; height: 16px; color: var(--sdi-blue-accent);"></i>
              <span>8 phút đọc</span>
            </div>
            <div style="display: flex; align-items: center; gap: 0.4rem;">
              <i data-lucide="eye" style="width: 16px; height: 16px; color: var(--sdi-blue-accent);"></i>
              <span>2.840 lượt xem</span>
            </div>
            <div style="display: flex; align-items: center; gap: 0.4rem;">
              <i data-lucide="bookmark" style="width: 16px; height: 16px; color: var(--sdi-blue-accent);"></i>
              <span>Lưu tài liệu</span>
            </div>
          </div>
        </div>

      </div>
    </header>

    <!-- Main Content & Sidebar Grid -->
    <div class="container-sdi">
      <div class="article-layout-grid">
        
        <!-- Left: Article Content Body -->
        <article class="article-content-body">
          
          <!-- Full Bleed Hero Cover Image -->
          <div style="width: 100%; height: 380px; border-radius: 20px; overflow: hidden; margin-bottom: 2.5rem; box-shadow: 0 15px 35px rgba(0,0,0,0.08);">
            <img src="https://bizweb.dktcdn.net/100/543/817/articles/anh-bia-nghen-co-chai-pc.jpg?v=1786010990053" alt="Nghẽn cổ chai PC là gì?" style="width: 100%; height: 100%; object-fit: cover; display: block;">
          </div>

          <!-- Key Takeaways Box -->
          <div class="article-takeaways-box">
            <h3 class="article-takeaways-title">
              <i data-lucide="sparkles" style="width: 20px; height: 20px; color: var(--sdi-blue-accent);"></i>
              Điểm Cốt Lõi Cho Lãnh Đạo & Kỹ Sư CNTT
            </h3>
            <ul style="margin: 0; padding-left: 1.25rem; display: flex; flex-direction: column; gap: 0.6rem; color: #334155; font-size: 0.95rem;">
              <li><strong>Bảo mật tuyệt đối:</strong> 100% dữ liệu tài chính, hợp đồng, mã nguồn và tài liệu nội bộ xử lý tại chỗ, không truyền ra server bên ngoài.</li>
              <li><strong>Tối ưu chi phí TCO:</strong> Hoàn vốn sau 4–6 tháng so với việc chi trả phí token API định kỳ hàng tháng cho 15–50 nhân sự sử dụng.</li>
              <li><strong>Độ trễ thấp & Ổn định:</strong> Tốc độ sinh text 45–90 tokens/giây, không phụ thuộc vào đường truyền Internet quốc tế hay nghẽn mạng.</li>
              <li><strong>Cấu hình khuyến nghị 2026:</strong> Workstation trang bị GPU 24GB–48GB VRAM (RTX 4090 / RTX 6000 Ada / Dual RTX 4070Ti Super) đủ chạy trơn tru các mô hình 8B, 14B đến 70B tham số (Quant 4-bit/8-bit).</li>
            </ul>
          </div>

          <!-- Section 1 -->
          <h2 id="tai-sao-can-local-ai">1. Vì sao doanh nghiệp đang ồ ạt chuyển hướng sang Local AI?</h2>
          <p>
            Trong giai đoạn 2024–2025, hầu hết doanh nghiệp tiếp cận AI thông qua các dịch vụ SaaS như ChatGPT Plus, Claude Team hoặc OpenAI API. Tuy nhiên, khi mở rộng quy mô ứng dụng vào các tác vụ nhạy cảm như đọc hiểu hợp đồng, phân tích báo cáo tài chính, quản trị kho hàng và trích xuất dữ liệu khách hàng CRM, <strong>3 nút thắt lớn</strong> đã xuất hiện:
          </p>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.25rem; margin: 1.75rem 0;">
            <div style="background: #F8FAFD; border: 1px solid var(--sdi-border); border-radius: 16px; padding: 1.25rem;">
              <div style="width: 36px; height: 36px; border-radius: 10px; background: rgba(239, 68, 68, 0.1); color: #EF4444; display: flex; align-items: center; justify-content: center; margin-bottom: 0.75rem;">
                <i data-lucide="shield-alert" style="width: 20px; height: 20px;"></i>
              </div>
              <h4 style="font-size: 1rem; color: var(--sdi-navy-primary); margin-bottom: 0.35rem;">Rò rỉ dữ liệu nhạy cảm</h4>
              <p style="font-size: 0.85rem; color: var(--sdi-text-secondary); margin: 0; line-height: 1.5;">Nguy cơ bị nhà cung cấp Cloud sử dụng prompt để đào tạo lại mô hình hoặc rủi ro tấn công trung gian (MITM).</p>
            </div>

            <div style="background: #F8FAFD; border: 1px solid var(--sdi-border); border-radius: 16px; padding: 1.25rem;">
              <div style="width: 36px; height: 36px; border-radius: 10px; background: rgba(245, 158, 11, 0.1); color: #D97706; display: flex; align-items: center; justify-content: center; margin-bottom: 0.75rem;">
                <i data-lucide="dollar-sign" style="width: 20px; height: 20px;"></i>
              </div>
              <h4 style="font-size: 1rem; color: var(--sdi-navy-primary); margin-bottom: 0.35rem;">Chi phí Token tăng vọt</h4>
              <p style="font-size: 0.85rem; color: var(--sdi-text-secondary); margin: 0; line-height: 1.5;">Hóa đơn API tăng theo cấp số nhân khi nhân sự thực hiện RAG (tìm kiếm trên tài liệu dài) hoặc xử lý hàng nghìn tài liệu PDF.</p>
            </div>

            <div style="background: #F8FAFD; border: 1px solid var(--sdi-border); border-radius: 16px; padding: 1.25rem;">
              <div style="width: 36px; height: 36px; border-radius: 10px; background: rgba(37, 99, 235, 0.1); color: var(--sdi-blue-accent); display: flex; align-items: center; justify-content: center; margin-bottom: 0.75rem;">
                <i data-lucide="wifi-off" style="width: 20px; height: 20px;"></i>
              </div>
              <h4 style="font-size: 1rem; color: var(--sdi-navy-primary); margin-bottom: 0.35rem;">Phụ thuộc cáp quang quốc tế</h4>
              <p style="font-size: 0.85rem; color: var(--sdi-text-secondary); margin: 0; line-height: 1.5;">Mỗi khi đứt cáp biển AAG/APG, tốc độ phản hồi từ các máy chủ AI tại Mỹ chậm đến mức tê liệt quy trình làm việc.</p>
            </div>
          </div>

          <p>
            Nhờ sự bùng nổ của các mô hình mã nguồn mở thế hệ mới (Open-weight models) như <strong>Llama 3.3 70B, DeepSeek-R1-Distill, Qwen 2.5 32B</strong> cùng các kỹ thuật nén lượng tử hóa (GGUF, EXL2, AWQ), chất lượng suy luận cục bộ đã đạt <strong>92–96% năng lực của GPT-4o</strong> trong khi hoàn toàn có thể chạy mượt mà trên phần cứng Workstation đặt ngay tại văn phòng công ty.
          </p>

          <!-- Section 2 -->
          <h2 id="so-sanh-chi-phi-tco">2. Bài toán TCO: Cloud API vs. Trạm AI Cục Bộ NavaTek</h2>
          <p>
            Dưới đây là bảng phân tích chi phí tổng sở hữu (Total Cost of Ownership - TCO) trong vòng 2 năm cho một doanh nghiệp 30 nhân sự có cường độ sử dụng AI trung bình (mỗi nhân sự gửi 100 câu hỏi/ngày kèm tài liệu đính kèm):
          </p>

          <!-- Table -->
          <div class="article-table-wrapper">
            <table class="article-table">
              <thead>
                <tr>
                  <th>Hạng mục so sánh</th>
                  <th>Cloud API (OpenAI / Claude)</th>
                  <th class="highlight-col">Trạm AI Cục Bộ (NavaTek Setup)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Chi phí đầu tư ban đầu (CAPEX)</strong></td>
                  <td>0 VNĐ</td>
                  <td class="highlight-col"><strong>68.000.000 – 96.000.000 VNĐ</strong> (Phần cứng + Cài đặt)</td>
                </tr>
                <tr>
                  <td><strong>Chi phí vận hành hàng tháng (OPEX)</strong></td>
                  <td>~18.000.000 – 25.000.000 VNĐ/tháng (Token API)</td>
                  <td class="highlight-col">~350.000 VNĐ/tháng (Tiền điện tiêu thụ)</td>
                </tr>
                <tr>
                  <td><strong>Tổng chi phí sau 12 tháng</strong></td>
                  <td>216.000.000 – 300.000.000 VNĐ</td>
                  <td class="highlight-col"><strong>72.200.000 – 100.200.000 VNĐ</strong></td>
                </tr>
                <tr>
                  <td><strong>Tổng chi phí sau 24 tháng</strong></td>
                  <td>432.000.000 – 600.000.000 VNĐ</td>
                  <td class="highlight-col"><strong>76.400.000 – 104.400.000 VNĐ</strong></td>
                </tr>
                <tr>
                  <td><strong>Bảo mật & Chủ quyền dữ liệu</strong></td>
                  <td>Dữ liệu gửi qua máy chủ nước ngoài</td>
                  <td class="highlight-col"><strong>Bảo mật 100% trong mạng LAN nội bộ</strong></td>
                </tr>
                <tr>
                  <td><strong>Khả năng tùy biến & Fine-tune</strong></td>
                  <td>Hạn chế, phụ thuộc chính sách hãng</td>
                  <td class="highlight-col"><strong>Toàn quyền nạp dữ liệu riêng (RAG/Lark/Sapo)</strong></td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="article-callout tip">
            <div class="article-callout-title">
              <i data-lucide="check-circle-2" style="width: 18px; height: 18px; color: #10B981;"></i>
              Kết luận tài chính từ NavaTek:
            </div>
            <p style="margin: 0; font-size: 0.92rem; color: #065F46;">
              Doanh nghiệp hoàn vốn (Break-even) chỉ sau <strong>3.5 đến 5 tháng</strong> vận hành trạm AI cục bộ. Kể từ tháng thứ 6 trở đi, chi phí sử dụng AI của toàn bộ công ty gần như bằng 0.
            </p>
          </div>

          <!-- Section 3 -->
          <h2 id="tieu-chuan-phan-cung">3. Tiêu chuẩn phần cứng tối ưu cho từng quy mô mô hình</h2>
          <p>
            Hiệu năng của mô hình ngôn ngữ lớn phụ thuộc 80% vào <strong>Dung lượng VRAM (Bộ nhớ đồ họa)</strong> và <strong>Băng thông bộ nhớ (Memory Bandwidth)</strong> của GPU, chứ không phụ thuộc quá nhiều vào CPU. Kỹ sư NavaTek đã tối ưu 3 cấu hình chuẩn B2B sau:
          </p>

          <div style="display: flex; flex-direction: column; gap: 1.25rem; margin: 2rem 0;">
            <!-- Tier 1 -->
            <div style="background: #FFFFFF; border: 1.5px solid var(--sdi-border); border-radius: 16px; padding: 1.5rem; display: flex; gap: 1.5rem; align-items: center;">
              <div style="width: 60px; height: 60px; border-radius: 12px; background: rgba(37, 99, 235, 0.08); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i data-lucide="box" style="width: 28px; height: 28px; color: var(--sdi-blue-accent);"></i>
              </div>
              <div style="flex-grow: 1;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.35rem;">
                  <h4 style="font-size: 1.1rem; color: var(--sdi-navy-primary);">Cấu hình 1: Trạm AI Cơ Bản (Mô hình 7B - 14B)</h4>
                  <span style="font-size: 0.85rem; font-weight: 800; color: var(--sdi-blue-accent); background: #EFF6FF; padding: 0.2rem 0.6rem; border-radius: 6px;">Dưới 35 triệu</span>
                </div>
                <p style="font-size: 0.88rem; color: var(--sdi-text-secondary); margin: 0; line-height: 1.5;">
                  <strong>Phần cứng:</strong> Mini PC Core i9 / Ryzen 9 + 64GB DDR5 RAM hoặc eGPU RTX 4070 (12GB VRAM).<br>
                  <strong>Mô hình phù hợp:</strong> Llama 3.2 3B/8B, Qwen 2.5 7B, Mistral 7B. Phù hợp tóm tắt văn bản, dịch thuật, soạn thảo email và chatbot hỗ trợ khách hàng nội bộ.
                </p>
              </div>
            </div>

            <!-- Tier 2 -->
            <div style="background: #FFFFFF; border: 1.5px solid rgba(37, 99, 235, 0.35); border-radius: 16px; padding: 1.5rem; display: flex; gap: 1.5rem; align-items: center; box-shadow: 0 8px 25px rgba(37, 99, 235, 0.06);">
              <div style="width: 60px; height: 60px; border-radius: 12px; background: rgba(37, 99, 235, 0.12); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i data-lucide="cpu" style="width: 28px; height: 28px; color: var(--sdi-blue-accent);"></i>
              </div>
              <div style="flex-grow: 1;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.35rem;">
                  <h4 style="font-size: 1.1rem; color: var(--sdi-navy-primary);">Cấu hình 2: Trạm AI Chuyên Nghiệp (Mô hình 14B - 32B - Stable Diffusion) [Best Seller]</h4>
                  <span style="font-size: 0.85rem; font-weight: 800; color: #FFFFFF; background: var(--sdi-blue-accent); padding: 0.2rem 0.6rem; border-radius: 6px;">68 - 96 triệu</span>
                </div>
                <p style="font-size: 0.88rem; color: var(--sdi-text-secondary); margin: 0; line-height: 1.5;">
                  <strong>Phần cứng:</strong> Workstation RTX 4090 24GB VRAM, 128GB RAM DDR5 ECC, 2TB SSD NVMe Gen4 7000MB/s.<br>
                  <strong>Mô hình phù hợp:</strong> Qwen 2.5 32B, DeepSeek-R1-Distill-Qwen-32B, Llama 3.3 70B (Q4_K_M), Stable Diffusion XL / Flux.1. Đọc hiểu toàn bộ kho tài liệu doanh nghiệp cực nhanh.
                </p>
              </div>
            </div>

            <!-- Tier 3 -->
            <div style="background: #FFFFFF; border: 1.5px solid var(--sdi-border); border-radius: 16px; padding: 1.5rem; display: flex; gap: 1.5rem; align-items: center;">
              <div style="width: 60px; height: 60px; border-radius: 12px; background: rgba(139, 92, 246, 0.08); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i data-lucide="server" style="width: 28px; height: 28px; color: #7C3AED;"></i>
              </div>
              <div style="flex-grow: 1;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.35rem;">
                  <h4 style="font-size: 1.1rem; color: var(--sdi-navy-primary);">Cấu hình 3: Cụm Máy Chủ AI Doanh Nghiệp (Dual/Quad GPU 48GB–96GB VRAM)</h4>
                  <span style="font-size: 0.85rem; font-weight: 800; color: #7C3AED; background: #F5F3FF; padding: 0.2rem 0.6rem; border-radius: 6px;">Theo dự án</span>
                </div>
                <p style="font-size: 0.88rem; color: var(--sdi-text-secondary); margin: 0; line-height: 1.5;">
                  <strong>Phần cứng:</strong> Dual RTX 4090 (48GB VRAM) hoặc 2x NVIDIA RTX 6000 Ada, 256GB RAM, nguồn Redundant 1600W.<br>
                  <strong>Mô hình phù hợp:</strong> Llama 3.3 70B Uncompressed (FP16/Q8), phục vụ đồng thời 50–200 nhân viên truy vấn cùng một thời điểm không giật lag.
                </p>
              </div>
            </div>
          </div>

          <!-- Section 4 -->
          <h2 id="quy-trinh-trien-khai">4. Quy trình 4 bước triển khai thực tế của NavaTek (Plug & Play)</h2>
          <p>
            Để khách hàng doanh nghiệp không phải loay hoay cài đặt môi trường Linux, driver CUDA hay cấu hình mạng, NavaTek áp dụng quy trình trọn gói <strong>"Trao tay"</strong>:
          </p>

          <ol style="margin: 1.5rem 0; padding-left: 1.5rem; display: flex; flex-direction: column; gap: 1rem;">
            <li>
              <strong>Bước 1: Khảo sát tác vụ & Chọn mô hình phù hợp:</strong> Đội ngũ kỹ sư phân tích nhu cầu thực tế của từng phòng ban (Kế toán, Marketing, Pháp chế, Kho vận) để chọn mô hình tối ưu dung lượng và tốc độ.
            </li>
            <li>
              <strong>Bước 2: Cài sẵn môi trường suy luận tăng tốc vLLM / Ollama trên Docker:</strong> Thiết lập container hóa, tích hợp giao diện WebUI (Open WebUI) thân thiện giống 100% ChatGPT để nhân sự sử dụng được ngay.
            </li>
            <li>
              <strong>Bước 3: Tích hợp bảo mật & Phân quyền phòng ban:</strong> Cấu hình kết nối LDAP / SSO nội bộ, phân quyền dữ liệu (phòng Kế toán không xem được tài liệu mật của Ban Giám Đốc).
            </li>
            <li>
              <strong>Bước 4: Bàn giao tận nơi & Đào tạo sử dụng tại TP.HCM:</strong> Kỹ sư NavaTek đến trực tiếp văn phòng lắp đặt, bàn giao tài liệu hướng dẫn và hỗ trợ kỹ thuật on-site trong suốt vòng đời máy.
            </li>
          </ol>

          <!-- Terminal Code Snippet -->
          <div class="article-code-block">
            <div class="article-code-header">
              <div class="dots">
                <div class="dot" style="background: #EF4444;"></div>
                <div class="dot" style="background: #F59E0B;"></div>
                <div class="dot" style="background: #10B981;"></div>
              </div>
              <span>bash - docker-compose-ai-stack.yml</span>
              <span>NavaTek vLLM Setup</span>
            </div>
            <pre class="article-code-content"><code># Lệnh khởi chạy trạm AI cục bộ OpenWebUI + vLLM tăng tốc phần cứng
docker run -d --gpus all \
  --name navatek-ai-core \
  -v /data/models:/root/.ollama/models \
  -p 11434:11434 \
  --restart always \
  ollama/ollama:latest

# Khởi chạy giao diện Open WebUI nội bộ cho nhân viên
docker run -d -p 3000:8080 \
  --add-host=host.docker.internal:host-gateway \
  -v open-webui:/app/backend/data \
  --name navatek-chat-ui \
  --restart always \
  ghcr.io/open-webui/open-webui:main</code></pre>
          </div>

          <!-- Section 5 -->
          <h2 id="loi-thuong-gap">5. Những lưu ý & lỗi thường gặp khi tự dựng máy chủ AI</h2>
          <div class="article-callout warning">
            <div class="article-callout-title">
              <i data-lucide="alert-triangle" style="width: 18px; height: 18px; color: #D97706;"></i>
              Cảnh báo quá nhiệt & nghẽn băng thông PCIe:
            </div>
            <p style="margin: 0; font-size: 0.92rem; color: #92400E;">
              Các mô hình AI khi sinh văn bản liên tục sẽ đẩy GPU chạy 100% công suất trong nhiều giờ. Nếu dùng case máy tính văn phòng thông thường không đủ lưu lượng khí (Airflow) hoặc nguồn không đạt chuẩn 80 Plus Gold/Platinum, hệ thống sẽ tự động hạ xung (Thermal Throttling) làm tụt tốc độ từ 60 tokens/s xuống dưới 10 tokens/s.
            </p>
          </div>

          <p>
            Do đó, các trạm AI do NavaTek lắp ráp đều sử dụng <strong>khung vỏ chuẩn máy chủ B2B</strong>, quạt áp suất tĩnh cao, nguồn chuyên dụng hỗ trợ cáp 12VHPWR chuẩn ATX 3.0 và keo tản nhiệt gốm cao cấp để đảm bảo vận hành 24/7 không cần tắt máy.
          </p>

          <!-- In-article Conversion Banner -->
          <div style="background: linear-gradient(135deg, #0A1128 0%, #1E3A8A 100%); border-radius: 20px; padding: 2.5rem; color: #FFFFFF; margin: 3rem 0; text-align: center; position: relative; overflow: hidden;">
            <div style="position: absolute; top: -30%; right: -10%; width: 250px; height: 250px; border-radius: 50%; background: radial-gradient(circle, rgba(56, 189, 248, 0.2) 0%, transparent 70%); pointer-events: none;"></div>
            <h3 style="font-size: 1.6rem; color: #FFFFFF; margin-bottom: 0.75rem;">Bạn muốn trải nghiệm thử mô hình AI chạy thực tế trên máy trạm NavaTek?</h3>
            <p style="color: #94A3B8; font-size: 0.95rem; max-width: 600px; margin: 0 auto 1.5rem auto;">
              Đăng ký Demo on-site tại văn phòng doanh nghiệp của bạn ở TP.HCM. Kỹ sư NavaTek sẽ mang máy trạm đến tận nơi để bạn kiểm tra tốc độ thực tế trên dữ liệu nội bộ.
            </p>
            <button class="sdi-btn-orange trigger-quote-modal" style="font-size: 0.95rem; padding: 0.75rem 2rem;">
              <i data-lucide="sparkles" style="width: 18px; height: 18px;"></i>
              <span>Đăng ký Demo Trạm AI Miễn Phí</span>
            </button>
          </div>

          <!-- Author Bio Box -->
          <div class="article-author-card">
            <div class="article-author-photo">
              TM
            </div>
            <div>
              <div style="font-size: 1.1rem; font-weight: 800; color: var(--sdi-navy-primary); margin-bottom: 0.25rem;">
                Kỹ sư Trương Minh Tuấn
              </div>
              <div style="font-size: 0.85rem; color: var(--sdi-blue-accent); font-weight: 700; margin-bottom: 0.5rem;">
                Trưởng phòng Giải pháp Hạ tầng & Tự động hóa — NavaTek
              </div>
              <p style="font-size: 0.88rem; color: var(--sdi-text-secondary); margin: 0; line-height: 1.5;">
                Với hơn 10 năm kinh nghiệm thiết kế hạ tầng máy chủ On-Premise, mạng doanh nghiệp và cụm tính toán GPU cho các tập đoàn sản xuất, chuỗi bán lẻ và trường đại học lớn tại Việt Nam.
              </p>
            </div>
          </div>

          <!-- Social Share & Feedback -->
          <div style="display: flex; justify-content: space-between; align-items: center; padding: 1.5rem 0; border-top: 1px solid var(--sdi-border); border-bottom: 1px solid var(--sdi-border); flex-wrap: wrap; gap: 1rem;">
            <div style="display: flex; align-items: center; gap: 0.75rem;">
              <span style="font-weight: 700; font-size: 0.9rem; color: var(--sdi-navy-primary);">Chia sẻ cẩm nang:</span>
              <button onclick="navigator.clipboard.writeText(window.location.href); alert('Đã sao chép liên kết bài viết!');" style="background: #F1F5F9; border: 1px solid #CBD5E1; padding: 0.4rem 0.85rem; border-radius: 99px; font-size: 0.8rem; font-weight: 600; color: var(--sdi-navy-primary); cursor: pointer; display: flex; align-items: center; gap: 0.4rem;">
                <i data-lucide="link" style="width: 14px; height: 14px;"></i>
                <span>Sao chép link</span>
              </button>
            </div>

            <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.88rem; color: var(--sdi-text-muted);">
              <span>Bài viết này hữu ích với bạn?</span>
              <button style="background: #EFF6FF; border: 1px solid rgba(37, 99, 235, 0.2); color: var(--sdi-blue-accent); padding: 0.35rem 0.75rem; border-radius: 8px; font-size: 0.8rem; font-weight: 700; cursor: pointer;">👍 Có (142)</button>
            </div>
          </div>

        </article>

        <!-- Right: Sticky Sidebar -->
        <aside class="article-sidebar">
          
          <!-- Widget 1: Table of Contents -->
          <div class="article-sidebar-widget">
            <h4 style="font-size: 1.05rem; color: var(--sdi-navy-primary); margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
              <i data-lucide="list" style="width: 18px; height: 18px; color: var(--sdi-blue-accent);"></i>
              Mục Lục Bài Viết
            </h4>
            <ul class="article-toc-list">
              <li><a href="#tai-sao-can-local-ai" class="article-toc-link active">1. Vì sao cần Local AI?</a></li>
              <li><a href="#so-sanh-chi-phi-tco" class="article-toc-link">2. So sánh chi phí TCO</a></li>
              <li><a href="#tieu-chuan-phan-cung" class="article-toc-link">3. Tiêu chuẩn phần cứng GPU</a></li>
              <li><a href="#quy-trinh-trien-khai" class="article-toc-link">4. Quy trình 4 bước NavaTek</a></li>
              <li><a href="#loi-thuong-gap" class="article-toc-link">5. Lưu ý & Lỗi thường gặp</a></li>
            </ul>
          </div>

          <!-- Widget 2: Quick Quote Mini Form -->
          <div class="article-sidebar-widget" style="background: linear-gradient(180deg, #F8FAFD 0%, #FFFFFF 100%); border: 1.5px solid rgba(37, 99, 235, 0.2);">
            <span class="eyebrow-badge" style="background: rgba(37, 99, 235, 0.08); color: var(--sdi-blue-accent); font-size: 0.65rem;">TƯ VẤN NHANH</span>
            <h4 style="font-size: 1.15rem; color: var(--sdi-navy-primary); margin: 0.5rem 0 0.25rem 0;">Cần Tư Vấn Cấu Hình AI?</h4>
            <p style="font-size: 0.82rem; color: var(--sdi-text-secondary); margin-bottom: 1.25rem;">Kỹ sư NavaTek sẽ phản hồi cấu hình và báo giá chi tiết trong 15 phút.</p>
            
            <form onsubmit="event.preventDefault(); alert('Cảm ơn bạn! Kỹ sư NavaTek sẽ liên hệ ngay trong 15 phút.');">
              <input type="text" required placeholder="Họ tên của bạn" style="width: 100%; padding: 0.75rem 1rem; border-radius: 10px; border: 1px solid #CBD5E1; margin-bottom: 0.75rem; font-size: 0.85rem; outline: none;">
              <input type="tel" required placeholder="Số điện thoại / Zalo" style="width: 100%; padding: 0.75rem 1rem; border-radius: 10px; border: 1px solid #CBD5E1; margin-bottom: 1rem; font-size: 0.85rem; outline: none;">
              <button type="submit" class="sdi-btn-orange" style="width: 100%; justify-content: center; padding: 0.75rem; font-size: 0.85rem;">
                <span>Nhận Tư Vấn Cấu Hình</span>
              </button>
            </form>
          </div>

          <!-- Widget 3: Trending Articles (Exact list from user) -->
          <div class="article-sidebar-widget">
            <h4 style="font-size: 1.05rem; color: var(--sdi-navy-primary); margin-bottom: 1.15rem; display: flex; align-items: center; gap: 0.5rem;">
              <i data-lucide="trending-up" style="width: 18px; height: 18px; color: var(--sdi-blue-accent);"></i>
              Bài Viết Đọc Nhiều Nhất
            </h4>
            
            <div class="sidebar-articles-list">
              
              <div class="mini-article-item">
                <a href="<?php echo esc_url(home_url('/bai-viet-chi-tiet/')); ?>" title="Nghẽn cổ chai PC là gì? Nguyên nhân và cách khắc phục triệt để" class="thumb-link">
                  <img src="https://bizweb.dktcdn.net/100/543/817/articles/anh-bia-nghen-co-chai-pc.jpg?v=1786010990053" alt="Nghẽn cổ chai PC là gì?">
                </a>
                <div class="mini-article-info">
                  <h4 class="title">
                    <a href="<?php echo esc_url(home_url('/bai-viet-chi-tiet/')); ?>" title="Nghẽn cổ chai PC là gì? Nguyên nhân và cách khắc phục triệt để">Nghẽn cổ chai PC là gì? Nguyên nhân và cách khắc phục triệt để</a>
                  </h4>
                  <span class="date">
                    <i data-lucide="calendar" style="width: 13px; height: 13px;"></i> 31-07-2026
                  </span>
                </div>
              </div>

              <div class="mini-article-item">
                <a href="<?php echo esc_url(home_url('/bai-viet-chi-tiet/')); ?>" title="Hướng dẫn xóa game trên PC nhanh chóng, giải phóng ổ cứng hiệu quả" class="thumb-link">
                  <img src="https://bizweb.dktcdn.net/100/543/817/articles/anh-bia-huong-dan-xoa-game-tren-pc.jpg?v=1786010590760" alt="Hướng dẫn xóa game trên PC">
                </a>
                <div class="mini-article-info">
                  <h4 class="title">
                    <a href="<?php echo esc_url(home_url('/bai-viet-chi-tiet/')); ?>" title="Hướng dẫn xóa game trên PC nhanh chóng, giải phóng ổ cứng hiệu quả">Hướng dẫn xóa game trên PC nhanh chóng, giải phóng ổ cứng hiệu quả</a>
                  </h4>
                  <span class="date">
                    <i data-lucide="calendar" style="width: 13px; height: 13px;"></i> 31-07-2026
                  </span>
                </div>
              </div>

              <div class="mini-article-item">
                <a href="<?php echo esc_url(home_url('/bai-viet-chi-tiet/')); ?>" title="Top Game 2 Người 1 Máy PC Hay Nhất và Cấu Hình Chơi Mượt Mà" class="thumb-link">
                  <img src="https://bizweb.dktcdn.net/100/543/817/articles/anh-bia-game-2-nguoi-1-may-pc-1x1.jpg?v=1786009656133" alt="Top Game 2 Người 1 Máy PC">
                </a>
                <div class="mini-article-info">
                  <h4 class="title">
                    <a href="<?php echo esc_url(home_url('/bai-viet-chi-tiet/')); ?>" title="Top Game 2 Người 1 Máy PC Hay Nhất và Cấu Hình Chơi Mượt Mà">Top Game 2 Người 1 Máy PC Hay Nhất và Cấu Hình Chơi Mượt Mà</a>
                  </h4>
                  <span class="date">
                    <i data-lucide="calendar" style="width: 13px; height: 13px;"></i> 31-07-2026
                  </span>
                </div>
              </div>

              <div class="mini-article-item">
                <a href="<?php echo esc_url(home_url('/bai-viet-chi-tiet/')); ?>" title="Cách Lắp Thêm Ổ Cứng Cho PC: HDD SATA, SSD M.2 NVMe" class="thumb-link">
                  <img src="https://bizweb.dktcdn.net/100/543/817/articles/anh-bia-cach-lap-them-o-cung-cho-pc-1x1.jpg?v=1786006751627" alt="Cách Lắp Thêm Ổ Cứng Cho PC">
                </a>
                <div class="mini-article-info">
                  <h4 class="title">
                    <a href="<?php echo esc_url(home_url('/bai-viet-chi-tiet/')); ?>" title="Cách Lắp Thêm Ổ Cứng Cho PC: HDD SATA, SSD M.2 NVMe">Cách Lắp Thêm Ổ Cứng Cho PC: HDD SATA, SSD M.2 NVMe</a>
                  </h4>
                  <span class="date">
                    <i data-lucide="calendar" style="width: 13px; height: 13px;"></i> 31-07-2026
                  </span>
                </div>
              </div>

              <div class="mini-article-item">
                <a href="<?php echo esc_url(home_url('/bai-viet-chi-tiet/')); ?>" title="Cổng PCI Trên Main Là Gì Và Cách Dùng" class="thumb-link">
                  <img src="https://bizweb.dktcdn.net/100/543/817/articles/anh-bia-cong-pci-tren-main-1x1.jpg?v=1786005998587" alt="Cổng PCI Trên Main Là Gì">
                </a>
                <div class="mini-article-info">
                  <h4 class="title">
                    <a href="<?php echo esc_url(home_url('/bai-viet-chi-tiet/')); ?>" title="Cổng PCI Trên Main Là Gì Và Cách Dùng">Cổng PCI Trên Main Là Gì Và Cách Dùng</a>
                  </h4>
                  <span class="date">
                    <i data-lucide="calendar" style="width: 13px; height: 13px;"></i> 31-07-2026
                  </span>
                </div>
              </div>

            </div>
          </div>

        </aside>

      </div>
    </div>

    <!-- Related Articles Section -->
    <section style="background: #F8FAFD; padding: 4.5rem 0; border-top: 1px solid var(--sdi-border);">
      <div class="container-sdi">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 2.5rem;">
          <div>
            <span class="eyebrow-badge">CÙNG CHỦ ĐỀ</span>
            <h2 style="font-size: 2rem; color: var(--sdi-navy-primary); margin-top: 0.35rem;">Bài Viết Liên Quan</h2>
          </div>
          <a href="<?php echo esc_url(home_url('/tin-tuc/')); ?>" class="sdi-pill-btn">
            <span>Xem tất cả bài viết</span>
            <i data-lucide="arrow-right" style="width: 14px; height: 14px;"></i>
          </a>
        </div>

        <div class="home-blog-grid" data-mobile-slider="true">
          
          <!-- Related 1: Lắp ổ cứng -->
          <a href="<?php echo esc_url(home_url('/bai-viet-chi-tiet/')); ?>" class="blog-card">
            <div class="blog-card-thumb-wrapper">
              <span class="blog-card-tag-floating blog-cat-badge hardware">NÂNG CẤP & LƯU TRỮ</span>
              <img src="https://bizweb.dktcdn.net/100/543/817/articles/anh-bia-cach-lap-them-o-cung-cho-pc-1x1.jpg?v=1786006751627" alt="Cách Lắp Thêm Ổ Cứng Cho PC">
              <div class="blog-card-reading-badge">
                <i data-lucide="clock" style="width: 12px; height: 12px;"></i>
                5 phút đọc
              </div>
            </div>
            <div class="blog-card-content">
              <h3 class="blog-card-title">Cách Lắp Thêm Ổ Cứng Cho PC: HDD SATA, SSD M.2 NVMe</h3>
              <p class="blog-card-excerpt">Hướng dẫn chi tiết từng bước tháo lắp, gắn khe M.2 NVMe PCIe Gen 4/5, kết nối cáp nguồn SATA và khởi tạo phân vùng GPT trên Windows.</p>
              <div class="blog-card-footer">
                <div class="blog-author-meta">
                  <div class="blog-author-avatar">NV</div>
                  <div>
                    <div class="blog-author-name">Nguyễn Văn Vũ</div>
                    <div class="blog-card-date">31/07/2026</div>
                  </div>
                </div>
                <span class="blog-card-cta-link">Đọc tiếp <i data-lucide="arrow-right" style="width: 14px; height: 14px;"></i></span>
              </div>
            </div>
          </a>

          <!-- Related 2: Cổng PCI -->
          <a href="<?php echo esc_url(home_url('/bai-viet-chi-tiet/')); ?>" class="blog-card">
            <div class="blog-card-thumb-wrapper">
              <span class="blog-card-tag-floating blog-cat-badge automation">KIẾN THỨC PHẦN CỨNG</span>
              <img src="https://bizweb.dktcdn.net/100/543/817/articles/anh-bia-cong-pci-tren-main-1x1.jpg?v=1786005998587" alt="Cổng PCI Trên Main">
              <div class="blog-card-reading-badge">
                <i data-lucide="clock" style="width: 12px; height: 12px;"></i>
                7 phút đọc
              </div>
            </div>
            <div class="blog-card-content">
              <h3 class="blog-card-title">Cổng PCI Trên Main Là Gì Và Cách Dùng Chuẩn Nhất</h3>
              <p class="blog-card-excerpt">Phân biệt khe cắm PCIe x16, x8, x4, x1, các chuẩn băng thông PCIe 3.0, 4.0, 5.0 và cách cắm card đồ họa, card mạng 10GbE tối ưu.</p>
              <div class="blog-card-footer">
                <div class="blog-author-meta">
                  <div class="blog-author-avatar">LH</div>
                  <div>
                    <div class="blog-author-name">Lê Hoàng Nam</div>
                    <div class="blog-card-date">31/07/2026</div>
                  </div>
                </div>
                <span class="blog-card-cta-link">Đọc tiếp <i data-lucide="arrow-right" style="width: 14px; height: 14px;"></i></span>
              </div>
            </div>
          </a>

          <!-- Related 3: Xóa Game -->
          <a href="<?php echo esc_url(home_url('/bai-viet-chi-tiet/')); ?>" class="blog-card">
            <div class="blog-card-thumb-wrapper">
              <span class="blog-card-tag-floating blog-cat-badge security">THỦ THUẬT & HỆ THỐNG</span>
              <img src="https://bizweb.dktcdn.net/100/543/817/articles/anh-bia-huong-dan-xoa-game-tren-pc.jpg?v=1786010590760" alt="Hướng dẫn xóa game trên PC">
              <div class="blog-card-reading-badge">
                <i data-lucide="clock" style="width: 12px; height: 12px;"></i>
                4 phút đọc
              </div>
            </div>
            <div class="blog-card-content">
              <h3 class="blog-card-title">Hướng dẫn xóa game trên PC nhanh chóng, giải phóng ổ cứng hiệu quả</h3>
              <p class="blog-card-excerpt">Tổng hợp các cách gỡ cài đặt sạch sẽ, xóa file rác tận gốc AppData, Temp và dọn dẹp dung lượng bộ nhớ đệm cho máy tính văn phòng.</p>
              <div class="blog-card-footer">
                <div class="blog-author-meta">
                  <div class="blog-author-avatar">TM</div>
                  <div>
                    <div class="blog-author-name">Trương Minh Tuấn</div>
                    <div class="blog-card-date">31/07/2026</div>
                  </div>
                </div>
                <span class="blog-card-cta-link">Đọc tiếp <i data-lucide="arrow-right" style="width: 14px; height: 14px;"></i></span>
              </div>
            </div>
          </a>

        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->

<?php
get_footer();
?>