<?php
/**
 * Single Post Template for NavaTek Blog & Knowledge Hub
 *
 * @package NavaTek
 */

get_header();

if (have_posts()) : while (have_posts()) : the_post();
    $categories = get_the_category();
    $primary_cat = !empty($categories) ? $categories[0] : null;
    $cat_name = $primary_cat ? $primary_cat->name : 'Kiến thức CNTT';
    $cat_slug = $primary_cat ? $primary_cat->slug : 'hardware';

    // Calculate reading time
    $clean_content = strip_tags(get_the_content());
    $word_count = count(preg_split('/\s+/u', trim($clean_content)));
    $reading_time = max(3, ceil($word_count / 220));

    // Author info
    $author_name = get_post_meta(get_the_ID(), '_article_author', true);
    if (!$author_name) {
        $author_name = get_the_author();
        if ($author_name === 'admin' || $author_name === 'hafbucea_nava') {
            $author_name = 'Kỹ sư Trương Minh Tuấn';
        }
    }

    $author_role = get_post_meta(get_the_ID(), '_article_author_role', true);
    if (!$author_role) {
        $author_role = 'Trưởng phòng Giải pháp Hạ tầng NavaTek';
    }

    // Avatar initials
    $name_parts = explode(' ', trim($author_name));
    $initials = '';
    if (count($name_parts) >= 2) {
        $initials = mb_substr($name_parts[count($name_parts)-2], 0, 1) . mb_substr($name_parts[count($name_parts)-1], 0, 1);
    } else {
        $initials = mb_substr($author_name, 0, 2);
    }
    $initials = mb_strtoupper($initials);

    // Thumbnail
    $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
    if (!$thumb_url) {
        $thumb_url = get_post_meta(get_the_ID(), '_thumbnail_url', true);
    }
    if (!$thumb_url) {
        $thumb_url = 'https://bizweb.dktcdn.net/100/543/817/articles/anh-bia-nghen-co-chai-pc.jpg?v=1786010990053';
    }
?>

<main style="background: #FFFFFF; padding-bottom: 5rem;">
    <!-- Article Header Section -->
    <header class="article-header">
      <div class="container-sdi">
        <!-- Breadcrumb -->
        <nav class="article-breadcrumb" aria-label="Breadcrumb">
          <a href="<?php echo esc_url(home_url('/')); ?>">Trang chủ</a>
          <i data-lucide="chevron-right" style="width: 14px; height: 14px;"></i>
          <a href="<?php echo esc_url(home_url('/tin-tuc/')); ?>">Cẩm nang & Tin tức</a>
          <i data-lucide="chevron-right" style="width: 14px; height: 14px;"></i>
          <span style="color: var(--sdi-navy-primary); font-weight: 600;"><?php echo esc_html($cat_name); ?></span>
        </nav>

        <!-- Category & Type Badge -->
        <div style="display: flex; gap: 0.75rem; align-items: center; margin-bottom: 0.75rem;">
          <span class="blog-cat-badge <?php echo esc_attr($cat_slug); ?>">
            <i data-lucide="<?php echo ($cat_slug === 'ai') ? 'cpu' : (($cat_slug === 'automation') ? 'workflow' : (($cat_slug === 'security') ? 'shield' : 'hard-drive')); ?>" style="width: 13px; height: 13px;"></i>
            <?php echo esc_html($cat_name); ?>
          </span>
          <span style="font-size: 0.8rem; color: var(--sdi-text-muted);">● Bài viết chuyên sâu</span>
        </div>

        <h1 class="article-main-title">
          <?php the_title(); ?>
        </h1>

        <?php if (has_excerpt()) : ?>
        <p class="article-lead">
          <?php echo esc_html(get_the_excerpt()); ?>
        </p>
        <?php endif; ?>

        <!-- Article Meta Bar -->
        <div class="article-meta-bar">
          <div style="display: flex; align-items: center; gap: 1rem;">
            <div class="blog-author-avatar" style="width: 44px; height: 44px; font-size: 0.95rem;">
              <?php echo esc_html($initials); ?>
            </div>
            <div>
              <div style="font-weight: 800; font-size: 0.95rem; color: var(--sdi-navy-primary);"><?php echo esc_html($author_name); ?></div>
              <div style="font-size: 0.8rem; color: var(--sdi-text-muted);"><?php echo esc_html($author_role); ?> · Cập nhật <?php echo get_the_date('d/m/Y'); ?></div>
            </div>
          </div>

          <div style="display: flex; align-items: center; gap: 1.5rem; color: var(--sdi-text-muted); font-size: 0.85rem;">
            <div style="display: flex; align-items: center; gap: 0.4rem;">
              <i data-lucide="clock" style="width: 16px; height: 16px; color: var(--sdi-blue-accent);"></i>
              <span><?php echo esc_html($reading_time); ?> phút đọc</span>
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
          <?php if ($thumb_url) : ?>
          <div style="width: 100%; height: 380px; border-radius: 20px; overflow: hidden; margin-bottom: 2.5rem; box-shadow: 0 15px 35px rgba(0,0,0,0.08);">
            <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>" width="800" height="380" fetchpriority="high" decoding="async" style="width: 100%; height: 100%; object-fit: cover; display: block;">
          </div>
          <?php endif; ?>

          <!-- Main Post Body Content -->
          <div class="article-entry-content" style="color: #334155; line-height: 1.8; font-size: 1.05rem;">
            <?php the_content(); ?>
          </div>

          <!-- Tags & Share Footer -->
          <?php
          $post_tags = get_the_tags();
          if ($post_tags) :
          ?>
          <div style="margin-top: 3rem; padding-top: 1.5rem; border-top: 1px solid var(--sdi-border); display: flex; flex-wrap: wrap; gap: 0.5rem; align-items: center;">
            <span style="font-weight: 700; color: var(--sdi-navy-primary); font-size: 0.9rem; margin-right: 0.5rem;">Từ khóa bài viết:</span>
            <?php foreach ($post_tags as $tag) : ?>
              <span class="hero-quick-tag" style="margin: 0;">#<?php echo esc_html($tag->name); ?></span>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>

          <!-- Author Bio Card -->
          <div style="background: #F8FAFD; border: 1px solid var(--sdi-border); border-radius: 20px; padding: 2rem; margin-top: 3rem; display: flex; gap: 1.5rem; align-items: flex-start;">
            <div class="blog-author-avatar" style="width: 60px; height: 60px; font-size: 1.25rem; flex-shrink: 0;">
              <?php echo esc_html($initials); ?>
            </div>
            <div>
              <div style="font-weight: 800; font-size: 1.1rem; color: var(--sdi-navy-primary); margin-bottom: 0.25rem;"><?php echo esc_html($author_name); ?></div>
              <div style="font-size: 0.85rem; color: var(--sdi-blue-accent); font-weight: 600; margin-bottom: 0.75rem;"><?php echo esc_html($author_role); ?></div>
              <p style="font-size: 0.9rem; color: var(--sdi-text-secondary); margin: 0; line-height: 1.6;">
                Chuyên gia tư vấn giải pháp hạ tầng CNTT tinh gọn, thiết kế trạm Private AI và hệ thống tự động hóa vận hành cho các doanh nghiệp B2B tại Việt Nam.
              </p>
            </div>
          </div>

        </article>

        <!-- Right: Sticky Sidebar -->
        <aside class="article-sidebar">
          
          <!-- Table of Contents Widget -->
          <div class="article-toc-box">
            <h4 class="article-toc-title">
              <i data-lucide="list" style="width: 18px; height: 18px; color: var(--sdi-blue-accent);"></i>
              Mục Lục Bài Viết
            </h4>
            <nav class="article-toc-list" id="article-dynamic-toc">
              <a href="#tai-sao-can-local-ai" class="article-toc-link active">1. Vì sao cần Local AI?</a>
              <a href="#so-sanh-chi-phi-tco" class="article-toc-link">2. So sánh chi phí TCO</a>
              <a href="#tieu-chuan-phan-cung" class="article-toc-link">3. Tiêu chuẩn phần cứng GPU</a>
              <a href="#quy-trinh-trien-khai" class="article-toc-link">4. Quy trình 4 bước NavaTek</a>
              <a href="#luu-y-van-hanh" class="article-toc-link">5. Lưu ý & Lỗi thường gặp</a>
            </nav>
          </div>

          <!-- Lead Consultation Widget -->
          <div class="article-sidebar-card">
            <span class="eyebrow-badge" style="background: rgba(37,99,235,0.08); color: var(--sdi-blue-accent); margin-bottom: 0.75rem;">TƯ VẤN NHANH</span>
            <h4 style="color: var(--sdi-navy-primary); font-size: 1.15rem; margin-bottom: 0.5rem; font-weight: 800;">Cần Tư Vấn Cấu Hình AI?</h4>
            <p style="font-size: 0.85rem; color: var(--sdi-text-secondary); margin-bottom: 1.25rem; line-height: 1.5;">Kỹ sư NavaTek sẽ phản hồi cấu hình và báo giá chi tiết trong 15 phút.</p>
            
            <form id="sidebar-lead-form" style="display: flex; flex-direction: column; gap: 0.75rem;">
              <input type="text" required placeholder="Họ tên của bạn" style="width: 100%; padding: 0.75rem 1rem; border-radius: 12px; border: 1px solid var(--sdi-border); font-size: 0.85rem; outline: none;">
              <input type="tel" required placeholder="Số điện thoại / Zalo" style="width: 100%; padding: 0.75rem 1rem; border-radius: 12px; border: 1px solid var(--sdi-border); font-size: 0.85rem; outline: none;">
              <button type="submit" class="sdi-btn-orange" style="width: 100%; justify-content: center; font-size: 0.9rem; padding: 0.75rem;">
                <span>Nhận Tư Vấn Cấu Hình</span>
              </button>
            </form>
          </div>

          <!-- Related Posts Widget -->
          <div class="article-sidebar-card">
            <h4 style="color: var(--sdi-navy-primary); font-size: 1rem; margin-bottom: 1rem; font-weight: 800; display: flex; align-items: center; gap: 0.5rem;">
              <i data-lucide="newspaper" style="width: 16px; height: 16px; color: var(--sdi-blue-accent);"></i>
              Bài Viết Mới Nhất
            </h4>
            <div style="display: flex; flex-direction: column; gap: 1rem;">
              <?php
              $related_query = new WP_Query(array(
                  'post_type'      => 'post',
                  'posts_per_page' => 3,
                  'post__not_in'   => array(get_the_ID()),
                  'orderby'        => 'date',
                  'order'          => 'DESC'
              ));

              if ($related_query->have_posts()) :
                  while ($related_query->have_posts()) : $related_query->the_post();
                      $r_thumb = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                      if (!$r_thumb) {
                          $r_thumb = get_post_meta(get_the_ID(), '_thumbnail_url', true);
                      }
                      if (!$r_thumb) {
                          $r_thumb = 'https://bizweb.dktcdn.net/100/543/817/articles/anh-bia-nghen-co-chai-pc.jpg?v=1786010990053';
                      }
              ?>
              <a href="<?php the_permalink(); ?>" style="display: flex; gap: 0.75rem; text-decoration: none; align-items: center; group">
                <img src="<?php echo esc_url($r_thumb); ?>" alt="<?php the_title_attribute(); ?>" width="68" height="50" loading="lazy" decoding="async" style="width: 68px; height: 50px; border-radius: 8px; object-fit: cover; flex-shrink: 0;">
                <div>
                  <div style="font-size: 0.85rem; font-weight: 700; color: var(--sdi-navy-primary); line-height: 1.35; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;"><?php the_title(); ?></div>
                  <div style="font-size: 0.75rem; color: var(--sdi-text-muted); margin-top: 0.25rem;"><?php echo get_the_date('d/m/Y'); ?></div>
                </div>
              </a>
              <?php
                  endwhile;
                  wp_reset_postdata();
              endif;
              ?>
            </div>
          </div>

        </aside>

      </div>
    </div>
</main>

<?php
endwhile; endif;
get_footer();