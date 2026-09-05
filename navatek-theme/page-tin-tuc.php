<?php
/**
 * Template Name: Tin Tức & Góc Chuyên Gia
 *
 * @package NavaTek
 */
get_header();

// Fetch spotlight post (most recent post)
$spotlight_query = new WP_Query(array(
    'post_type'      => 'post',
    'posts_per_page' => 1,
    'orderby'        => 'date',
    'order'          => 'DESC'
));

$spotlight_id = 0;

// Category counts
$count_all = wp_count_posts('post')->publish;
$cat_ai = get_category_by_slug('ai');
$cat_hw = get_category_by_slug('hardware');
$cat_auto = get_category_by_slug('automation');
$cat_sec = get_category_by_slug('security');
?>

<!-- Main Content -->
  <main style="background: #FFFFFF;">
    
    <!-- Hero / Knowledge Hub Intro Section -->
    <section class="tech-dot-grid-light" style="background: linear-gradient(135deg, #FFFFFF 0%, #EFF6FF 100%); padding: 4.5rem 0 3.5rem 0; position: relative; overflow: hidden; border-bottom: 1px solid var(--sdi-border);">
      <div style="position: absolute; top: -20%; right: -5%; width: 450px; height: 450px; border-radius: 50%; background: radial-gradient(circle, rgba(37,99,235,0.08) 0%, transparent 70%); pointer-events: none;"></div>
      
      <div class="container-sdi" style="position: relative; z-index: 2;">
        <div class="blog-hero-grid">
          
          <!-- Left Column: Hero Intro & Search -->
          <div class="blog-hero-intro">
            <span class="eyebrow-badge" style="background: rgba(37, 99, 235, 0.08); color: var(--sdi-blue-accent); border: 1px solid rgba(37, 99, 235, 0.18);">KHO TRI THỨC & CẨM NANG CNTT</span>
            <h1 style="font-size: 2.6rem; color: var(--sdi-navy-primary); font-weight: 900; line-height: 1.22; margin: 0.75rem 0 1rem 0;">
              Kiến Thức, Xu Hướng & Cẩm Nang Hạ Tầng Doanh Nghiệp
            </h1>
            <p style="color: var(--sdi-text-secondary); font-size: 1.05rem; line-height: 1.6; margin-bottom: 1.75rem;">
              Được viết và kiểm chứng trực tiếp bởi đội ngũ kỹ sư giải pháp NavaTek. Chia sẻ kinh nghiệm thực chiến về xây dựng trạm AI cục bộ, tối ưu máy chủ và tự động hóa quy trình B2B.
            </p>

            <!-- Quick Search Bar in Blog -->
            <div style="position: relative; max-width: 520px; margin-bottom: 1.25rem;">
              <i data-lucide="search" style="position: absolute; left: 1.25rem; top: 50%; transform: translateY(-50%); width: 18px; height: 18px; color: #94A3B8;"></i>
              <input type="text" id="blog-search-input" placeholder="Tìm kiếm bài viết, chủ đề (AI, Mini PC, NAS, Lark)..." style="width: 100%; padding: 0.85rem 1.25rem 0.85rem 3rem; border-radius: 99px; border: 1.5px solid var(--sdi-border); background: #FFFFFF; font-size: 0.95rem; outline: none; box-shadow: 0 4px 15px rgba(0,0,0,0.04); transition: border-color 0.3s ease;">
            </div>

            <!-- Quick Suggested Topics -->
            <div class="hero-quick-tags-wrap">
              <span style="font-size: 0.8rem; font-weight: 700; color: var(--sdi-text-muted);">Từ khóa gợi ý:</span>
              <button type="button" class="hero-quick-tag" data-tag="AI">#Trạm_AI</button>
              <button type="button" class="hero-quick-tag" data-tag="M.2">#SSD_NVMe</button>
              <button type="button" class="hero-quick-tag" data-tag="PCI">#Khe_PCIe</button>
              <button type="button" class="hero-quick-tag" data-tag="Lark">#Lark_RPA</button>
            </div>
          </div>

          <!-- Right Column: Spotlight Featured Article -->
          <div class="blog-hero-spotlight-wrap">
            <?php
            if ($spotlight_query->have_posts()) :
                while ($spotlight_query->have_posts()) : $spotlight_query->the_post();
                    $spotlight_id = get_the_ID();
                    $s_cats = get_the_category();
                    $s_cat_name = !empty($s_cats) ? $s_cats[0]->name : 'Kiến thức CNTT';
                    $s_cat_slug = !empty($s_cats) ? $s_cats[0]->slug : 'hardware';

                    $s_thumb = get_the_post_thumbnail_url($spotlight_id, 'large');
                    if (!$s_thumb) {
                        $s_thumb = get_post_meta($spotlight_id, '_thumbnail_url', true);
                    }
                    if (!$s_thumb) {
                        $s_thumb = 'https://bizweb.dktcdn.net/100/543/817/articles/anh-bia-nghen-co-chai-pc.jpg?v=1786010990053';
                    }

                    $s_author = get_post_meta($spotlight_id, '_article_author', true);
                    if (!$s_author) $s_author = get_the_author();
                    if ($s_author === 'admin' || $s_author === 'hafbucea_nava') $s_author = 'Kỹ sư Trương Minh Tuấn';

                    $name_parts = explode(' ', trim($s_author));
                    $initials = (count($name_parts) >= 2) ? mb_substr($name_parts[count($name_parts)-2], 0, 1) . mb_substr($name_parts[count($name_parts)-1], 0, 1) : mb_substr($s_author, 0, 2);
            ?>
            <a href="<?php the_permalink(); ?>" class="blog-spotlight-card" data-category="<?php echo esc_attr($s_cat_slug); ?>">
              <div class="blog-spotlight-visual">
                <span class="blog-card-tag-floating spotlight-tag">
                  ★ TÂM ĐIỂM HƯỚNG DẪN
                </span>
                <img src="<?php echo esc_url($s_thumb); ?>" alt="<?php the_title_attribute(); ?>" width="540" height="320" fetchpriority="high" decoding="async">
                <div class="blog-card-reading-badge">
                  <i data-lucide="clock" style="width: 13px; height: 13px;"></i>
                  8 phút đọc · 3.1k view
                </div>
              </div>
              
              <div class="blog-spotlight-body">
                <div>
                  <div style="display: flex; gap: 0.5rem; align-items: center; margin-bottom: 0.4rem;">
                    <span class="blog-cat-badge <?php echo esc_attr($s_cat_slug); ?>"><?php echo esc_html($s_cat_name); ?></span>
                    <span style="font-size: 0.8rem; color: var(--sdi-text-muted);"><?php echo get_the_date('d/m/Y'); ?></span>
                  </div>
                  <h2 class="blog-spotlight-title"><?php the_title(); ?></h2>
                  <p class="blog-spotlight-desc">
                    <?php echo esc_html(get_the_excerpt()); ?>
                  </p>
                </div>

                <div class="blog-card-footer" style="padding-top: 0.75rem; margin-top: 0.25rem;">
                  <div class="blog-author-meta">
                    <div class="blog-author-avatar"><?php echo esc_html(mb_strtoupper($initials)); ?></div>
                    <div>
                      <div class="blog-author-name"><?php echo esc_html($s_author); ?></div>
                      <div class="blog-card-date">Trưởng phòng Giải pháp</div>
                    </div>
                  </div>
                  <div class="sdi-pill-btn" style="padding: 0.4rem 0.9rem; font-size: 0.8rem;">
                    <span>Đọc ngay</span>
                    <i data-lucide="arrow-right" style="width: 13px; height: 13px;"></i>
                  </div>
                </div>
              </div>
            </a>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
          </div>

        </div>
      </div>
    </section>

    <!-- Main Content Section -->
    <section style="padding: 3.5rem 0 5rem 0;">
      <div class="container-sdi">
        
        <!-- Category Filter Tabs -->
        <div class="blog-filter-bar" id="blog-filter-container">
          <button class="blog-filter-btn active" data-category="all">
            <span>Tất cả bài viết</span>
            <span class="count"><?php echo esc_html($count_all); ?></span>
          </button>
          <button class="blog-filter-btn" data-category="ai">
            <i data-lucide="cpu" style="width: 15px; height: 15px;"></i>
            <span>Hạ tầng AI & LLM</span>
            <span class="count"><?php echo $cat_ai ? $cat_ai->count : '0'; ?></span>
          </button>
          <button class="blog-filter-btn" data-category="hardware">
            <i data-lucide="hard-drive" style="width: 15px; height: 15px;"></i>
            <span>Phần cứng B2B</span>
            <span class="count"><?php echo $cat_hw ? $cat_hw->count : '0'; ?></span>
          </button>
          <button class="blog-filter-btn" data-category="automation">
            <i data-lucide="workflow" style="width: 15px; height: 15px;"></i>
            <span>Tự động hóa RPA</span>
            <span class="count"><?php echo $cat_auto ? $cat_auto->count : '0'; ?></span>
          </button>
          <button class="blog-filter-btn" data-category="security">
            <i data-lucide="shield" style="width: 15px; height: 15px;"></i>
            <span>Bảo mật & Thủ thuật</span>
            <span class="count"><?php echo $cat_sec ? $cat_sec->count : '0'; ?></span>
          </button>
        </div>

        <!-- Articles Grid (Dynamic from WordPress Posts) -->
        <div class="home-blog-grid" id="articles-grid" data-mobile-slider="true">
          <?php
          $grid_query = new WP_Query(array(
              'post_type'      => 'post',
              'posts_per_page' => 12,
              'post__not_in'   => $spotlight_id ? array($spotlight_id) : array(),
              'orderby'        => 'date',
              'order'          => 'DESC'
          ));

          if ($grid_query->have_posts()) :
              while ($grid_query->have_posts()) : $grid_query->the_post();
                  $p_id = get_the_ID();
                  $p_cats = get_the_category();
                  $p_cat_name = !empty($p_cats) ? $p_cats[0]->name : 'Kiến thức CNTT';
                  $p_cat_slug = !empty($p_cats) ? $p_cats[0]->slug : 'hardware';

                  $p_thumb = get_the_post_thumbnail_url($p_id, 'medium_large');
                  if (!$p_thumb) {
                      $p_thumb = get_post_meta($p_id, '_thumbnail_url', true);
                  }
                  if (!$p_thumb) {
                      $p_thumb = 'https://bizweb.dktcdn.net/100/543/817/articles/anh-bia-nghen-co-chai-pc.jpg?v=1786010990053';
                  }

                  $p_author = get_post_meta($p_id, '_article_author', true);
                  if (!$p_author) $p_author = get_the_author();
                  if ($p_author === 'admin' || $p_author === 'hafbucea_nava') $p_author = 'Kỹ sư Trương Minh Tuấn';

                  $name_parts = explode(' ', trim($p_author));
                  $p_initials = (count($name_parts) >= 2) ? mb_substr($name_parts[count($name_parts)-2], 0, 1) . mb_substr($name_parts[count($name_parts)-1], 0, 1) : mb_substr($p_author, 0, 2);
          ?>
          <a href="<?php the_permalink(); ?>" class="blog-card" data-category="<?php echo esc_attr($p_cat_slug); ?>">
            <div class="blog-card-thumb-wrapper">
              <span class="blog-card-tag-floating blog-cat-badge <?php echo esc_attr($p_cat_slug); ?>"><?php echo esc_html($p_cat_name); ?></span>
              <img src="<?php echo esc_url($p_thumb); ?>" alt="<?php the_title_attribute(); ?>" width="380" height="220" loading="lazy" decoding="async">
              <div class="blog-card-reading-badge">
                <i data-lucide="clock" style="width: 12px; height: 12px;"></i>
                6 phút đọc
              </div>
            </div>
            <div class="blog-card-content">
              <div>
                <h3 class="blog-card-title"><?php the_title(); ?></h3>
                <p class="blog-card-excerpt"><?php echo esc_html(get_the_excerpt()); ?></p>
              </div>
              <div class="blog-card-footer">
                <div class="blog-author-meta">
                  <div class="blog-author-avatar"><?php echo esc_html(mb_strtoupper($p_initials)); ?></div>
                  <div>
                    <div class="blog-author-name"><?php echo esc_html($p_author); ?></div>
                    <div class="blog-card-date"><?php echo get_the_date('d/m/Y'); ?></div>
                  </div>
                </div>
                <span class="blog-card-cta-link">Đọc tiếp <i data-lucide="arrow-right" style="width: 14px; height: 14px;"></i></span>
              </div>
            </div>
          </a>
          <?php
              endwhile;
              wp_reset_postdata();
          else :
              echo '<p style="grid-column: 1/-1; text-align: center; color: #64748B; padding: 2rem;">Đang cập nhật các bài viết mới...</p>';
          endif;
          ?>
        </div>

      </div>
    </section>

  </main>

<?php
get_footer();