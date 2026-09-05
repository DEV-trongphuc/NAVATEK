<?php
/**
 * NavaTek SEO Engine & Structured Data Module
 *
 * Provides comprehensive On-Page SEO meta tags, Open Graph, Twitter Cards,
 * and Google Rich Snippets (Schema JSON-LD) across all pages and single posts.
 *
 * @package NavaTek
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Resolve SEO data based on the current page context
 *
 * @return array
 */
function navatek_get_seo_data() {
    $theme_uri = get_template_directory_uri();
    $home_url  = home_url('/');
    
    // Default fallback values
    $seo = array(
        'title'       => 'NavaTek - Hạ Tầng CNTT Doanh Nghiệp & Trạm AI Server Cục Bộ On-Premise',
        'description' => 'NavaTek chuyên cung cấp giải pháp hạ tầng CNTT doanh nghiệp, trạm máy chủ AI On-Premise, Mini PC văn phòng, workstation đồ họa và dịch vụ bảo trì cứu hộ SLA 15-30 phút.',
        'keywords'    => 'hạ tầng cntt, trạm ai, ai server on-premise, local llm, workstation ai, mini pc doanh nghiệp, egpu oculink, bảo trì máy tính văn phòng, navatek',
        'canonical'   => home_url(add_query_arg(array(), $GLOBALS['wp']->request ?? '')),
        'og_type'     => 'website',
        'image'       => $theme_uri . '/images/b2b_it_hero.png',
        'image_alt'   => 'NavaTek Enterprise IT Infrastructure & AI Server Solutions',
        'breadcrumbs' => array(
            array('name' => 'Trang Chủ', 'url' => $home_url)
        ),
        'schema_type' => 'WebPage',
        'article_data'=> array()
    );

    // Make sure canonical has proper trailing slash
    if (!empty($seo['canonical'])) {
        $seo['canonical'] = user_trailingslashit($seo['canonical']);
    }

    if (is_front_page()) {
        $seo['title']       = 'NavaTek - Hạ Tầng CNTT Doanh Nghiệp & Trạm AI Server Cục Bộ On-Premise';
        $seo['description'] = 'NavaTek cung cấp trọn gói giải pháp hạ tầng CNTT tinh gọn cho doanh nghiệp B2B: Trạm AI cục bộ bảo mật 100%, Mini PC cao cấp, Workstation đồ họa và cam kết cứu hộ kỹ thuật SLA 15-30 phút.';
        $seo['canonical']   = $home_url;
        $seo['schema_type'] = 'WebSite';
    } elseif (is_single()) {
        $post_id   = get_the_ID();
        $post_obj  = get_post($post_id);
        $title     = get_the_title($post_id);
        $permalink = get_permalink($post_id);
        
        $excerpt = get_the_excerpt($post_id);
        if (!$excerpt) {
            $excerpt = wp_trim_words(strip_shortcodes(strip_tags($post_obj->post_content)), 35, '...');
        }

        $thumb = get_the_post_thumbnail_url($post_id, 'large');
        if (!$thumb) {
            $thumb = get_post_meta($post_id, '_thumbnail_url', true);
        }
        if (!$thumb) {
            $thumb = $theme_uri . '/images/b2b_it_hero.png';
        }

        $author_name = get_post_meta($post_id, '_article_author', true);
        if (!$author_name) {
            $author_name = get_the_author_meta('display_name', $post_obj->post_author);
        }
        if (!$author_name) {
            $author_name = 'Kỹ sư Trương Minh Tuấn';
        }

        $author_role = get_post_meta($post_id, '_article_author_role', true);
        if (!$author_role) {
            $author_role = 'Trưởng phòng Giải pháp Hạ tầng NavaTek';
        }

        $cats = get_the_category($post_id);
        $cat_name = !empty($cats) ? $cats[0]->name : 'Kiến Thức Công Nghệ';
        $cat_link = !empty($cats) ? get_category_link($cats[0]->term_id) : home_url('/tin-tuc/');

        $tags = get_the_tags($post_id);
        $tag_names = array();
        if ($tags) {
            foreach ($tags as $t) {
                $tag_names[] = $t->name;
            }
        }

        $seo['title']       = $title . ' | NavaTek';
        $seo['description'] = esc_attr(wp_strip_all_tags($excerpt));
        $seo['keywords']    = !empty($tag_names) ? implode(', ', $tag_names) . ', navatek' : 'kiến thức hạ tầng, tin tức công nghệ b2b, trạm ai, navatek';
        $seo['canonical']   = $permalink;
        $seo['og_type']     = 'article';
        $seo['image']       = $thumb;
        $seo['image_alt']   = $title;
        $seo['schema_type'] = 'TechArticle';

        $seo['breadcrumbs'][] = array('name' => 'Tin Tức', 'url' => home_url('/tin-tuc/'));
        $seo['breadcrumbs'][] = array('name' => $cat_name, 'url' => $cat_link);
        $seo['breadcrumbs'][] = array('name' => $title, 'url' => $permalink);

        $seo['article_data'] = array(
            'headline'      => $title,
            'description'   => $seo['description'],
            'image'         => $thumb,
            'datePublished' => get_the_date('c', $post_id),
            'dateModified'  => get_the_modified_date('c', $post_id),
            'author_name'   => $author_name,
            'author_role'   => $author_role,
            'category'      => $cat_name,
            'tags'          => $tag_names
        );
    } elseif (is_page()) {
        $page_slug = get_post_field('post_name', get_the_ID());
        $permalink = get_permalink();

        switch ($page_slug) {
            case 'giai-phap-ai-server-local-llm':
                $seo['title']       = 'Giải Pháp AI Server & Trạm Local LLM Cục Bộ Doanh Nghiệp | NavaTek';
                $seo['description'] = 'Triển khai trạm máy chủ AI On-Premise bảo mật 100% dữ liệu nội bộ doanh nghiệp. Chạy mượt mà DeepSeek-R1, Llama 3.3, Qwen 2.5 với chi phí TCO tối ưu và bảo mật tuyệt đối.';
                $seo['keywords']    = 'trạm ai server, local llm doanh nghiệp, private ai on premise, gpu vram 24gb, deepseek r1 local, llama 3.3 server, navatek';
                $seo['image']       = $theme_uri . '/images/combo.png';
                $seo['image_alt']   = 'Trạm AI Server GPU NavaTek B2B On-Premise';
                $seo['schema_type'] = 'Service';
                $seo['breadcrumbs'][] = array('name' => 'Giải Pháp AI Server', 'url' => $permalink);
                break;

            case 'combo-tron-bo':
                $seo['title']       = 'Combo Trạm AI: Mini PC & eGPU RTX 4070 Plug & Play | NavaTek';
                $seo['description'] = 'Combo trọn gói hạ tầng AI Plug & Play: Mini PC hiệu năng cao kết hợp eGPU Box OCuLink card đồ họa RTX 4070/4090. Tiết kiệm 70% không gian làm việc, tối ưu chi phí đầu tư B2B.';
                $seo['keywords']    = 'combo trạm ai, mini pc egpu oculink, workstation ai nhỏ gọn, rtx 4070 egpu, mini pc văn phòng b2b, navatek';
                $seo['image']       = $theme_uri . '/images/combo.png';
                $seo['image_alt']   = 'Combo Trạm AI Mini PC và eGPU Box OCuLink NavaTek';
                $seo['schema_type'] = 'Product';
                $seo['breadcrumbs'][] = array('name' => 'Combo Trọn Bộ', 'url' => $permalink);
                break;

            case 'may-don-le':
                $seo['title']       = 'Catalog Thiết Bị B2B - Mini PC, Workstation AI & Linh Kiện | NavaTek';
                $seo['description'] = 'Danh mục thiết bị phần cứng IT B2B: Trạm Workstation AI chuyên sâu, Mini PC văn phòng Intel Core i9, eGPU Box OCuLink và linh kiện RAM DDR5 ECC, SSD NVMe Gen 4/5 chính hãng.';
                $seo['keywords']    = 'mini pc doanh nghiệp, workstation đồ họa, máy trạm ai, ram ddr5 ecc b2b, ssd nvme gen4, linh kiện pc công ty, navatek';
                $seo['image']       = $theme_uri . '/images/laser.png';
                $seo['image_alt']   = 'Catalog Thiết Bị Máy Đơn Lẻ & Workstation B2B NavaTek';
                $seo['schema_type'] = 'ItemList';
                $seo['breadcrumbs'][] = array('name' => 'Sản Phẩm B2B', 'url' => $permalink);
                break;

            case 'chi-tiet-may-don':
                $seo['title']       = 'Cấu Hình Workstation AI RTX 4090 24GB & 128GB RAM DDR5 | NavaTek';
                $seo['description'] = 'Chi tiết cấu hình máy trạm Workstation AI chuyên sâu: Trang bị GPU NVIDIA RTX 4090 24GB VRAM, bộ nhớ 128GB RAM DDR5, nguồn 1000W Platinum. Thiết kế chuyên biệt cho AI & Deep Learning.';
                $seo['keywords']    = 'workstation ai rtx 4090, cấu hình máy trạm ai, máy tính chạy local llm, workstation 128gb ram, navatek workstation';
                $seo['image']       = $theme_uri . '/images/bending.png';
                $seo['image_alt']   = 'Workstation AI RTX 4090 24GB 128GB RAM NavaTek';
                $seo['schema_type'] = 'Product';
                $seo['breadcrumbs'][] = array('name' => 'Sản Phẩm B2B', 'url' => home_url('/may-don-le/'));
                $seo['breadcrumbs'][] = array('name' => 'Workstation AI RTX 4090', 'url' => $permalink);
                break;

            case 'chi-tiet-linh-kien':
                $seo['title']       = 'eGPU Box RTX 4090 Chuẩn OCuLink 64Gbps Cho Doanh Nghiệp | NavaTek';
                $seo['description'] = 'Thiết bị eGPU Box cắm ngoài chuẩn OCuLink PCIe 4.0 x4 băng thông 64Gbps. Giải pháp nâng cấp sức mạnh đồ họa và tính toán AI tức thì cho Mini PC và Laptop doanh nghiệp.';
                $seo['keywords']    = 'egpu box oculink, egpu rtx 4090, cổng oculink 64gbps, nâng cấp gpu mini pc, egpu cho laptop doanh nghiệp, navatek';
                $seo['image']       = $theme_uri . '/images/laser.png';
                $seo['image_alt']   = 'eGPU Box OCuLink RTX 4090 24GB NavaTek';
                $seo['schema_type'] = 'Product';
                $seo['breadcrumbs'][] = array('name' => 'Sản Phẩm B2B', 'url' => home_url('/may-don-le/'));
                $seo['breadcrumbs'][] = array('name' => 'eGPU Box RTX 4090', 'url' => $permalink);
                break;

            case 'dich-vu-bao-tri':
                $seo['title']       = 'Dịch Vụ Bảo Trì Hạ Tầng CNTT & SLA Cứu Hộ 15-30 Phút | NavaTek';
                $seo['description'] = 'Dịch vụ bảo trì hệ thống máy tính doanh nghiệp trọn gói, cam kết SLA phản ứng on-site 2-4 giờ tại TP.HCM, hỗ trợ kỹ thuật từ xa trong 15-30 phút, cam kết thiết bị thay thế tương đương.';
                $seo['keywords']    = 'bảo trì máy tính doanh nghiệp, dịch vụ it chuyên nghiệp tphcm, cứu hộ phần cứng b2b, sla bảo trì máy tính, bảo dưỡng hạ tầng mạng, navatek';
                $seo['image']       = $theme_uri . '/images/b2b_it_hero.png';
                $seo['image_alt']   = 'Dịch Vụ Bảo Trì Hạ Tầng CNTT Doanh Nghiệp NavaTek SLA 15-30 Phút';
                $seo['schema_type'] = 'Service';
                $seo['breadcrumbs'][] = array('name' => 'Dịch Vụ Bảo Trì', 'url' => $permalink);
                break;

            case 've-navatek':
                $seo['title']       = 'Về NavaTek - Đối Tác Cung Cấp Hạ Tầng & Hệ Sinh Thái B2B | NavaTek';
                $seo['description'] = 'Tìm hiểu về NavaTek - Đối tác hạ tầng CNTT & Trạm AI cục bộ uy tín, chứng nhận đối tác chính thức ASUS Gold Partner và hệ sinh thái kết nối chặt chẽ cùng NavaStore Bán Lẻ.';
                $seo['keywords']    = 'về navatek, công ty hạ tầng cntt navatek, asus gold partner vietnam, hệ sinh thái navatek navastore, đối tác công nghệ b2b';
                $seo['image']       = $theme_uri . '/images/navatek-asus-cert.jpg';
                $seo['image_alt']   = 'Chứng nhận đối tác chiến lược ASUS Gold Partner NavaTek';
                $seo['schema_type'] = 'AboutPage';
                $seo['breadcrumbs'][] = array('name' => 'Về NavaTek', 'url' => $permalink);
                break;

            case 'tin-tuc':
                $seo['title']       = 'Kiến Thức, Cẩm Nang & Tin Tức Hạ Tầng AI, Phần Cứng B2B | NavaTek';
                $seo['description'] = 'Kho tri thức công nghệ chuyên sâu: Cẩm nang triển khai trạm AI cục bộ (Local LLM), kỹ thuật phần cứng PC, khắc phục nghẽn cổ chai và giải pháp tự động hóa vận hành B2B.';
                $seo['keywords']    = 'tin tức hạ tầng ai, cẩm nang local llm, kiến thức phần cứng b2b, tự động hóa lark sapo, tối ưu pc doanh nghiệp, navatek';
                $seo['image']       = $theme_uri . '/images/ai.png';
                $seo['image_alt']   = 'Kho Tri Thức Công Nghệ & Tin Tức Hạ Tầng NavaTek';
                $seo['schema_type'] = 'CollectionPage';
                $seo['breadcrumbs'][] = array('name' => 'Tin Tức & Cẩm Nang', 'url' => $permalink);
                break;

            case 'du-an':
                $seo['title']       = 'Năng Lực Triển Khai Thực Tế & Liên Hệ Báo Giá Dự Án | NavaTek';
                $seo['description'] = 'Năng lực triển khai thực tế các dự án hạ tầng CNTT văn phòng số và trạm máy chủ AI. Đăng ký nhận tư vấn cấu hình chi tiết và báo giá dự án doanh nghiệp trong vòng 15 phút.';
                $seo['keywords']    = 'dự án triển khai cntt, báo giá máy trạm ai, liên hệ navatek, tư vấn hạ tầng doanh nghiệp, triển khai phòng máy b2b';
                $seo['image']       = $theme_uri . '/images/b2b_it_hero.png';
                $seo['image_alt']   = 'Dự Án Hạ Tầng & Văn Phòng Làm Việc NavaTek';
                $seo['schema_type'] = 'ContactPage';
                $seo['breadcrumbs'][] = array('name' => 'Dự Án & Liên Hệ', 'url' => $permalink);
                break;

            default:
                $seo['title']       = get_the_title() . ' | NavaTek';
                $seo['description'] = wp_strip_all_tags(get_the_excerpt() ?: 'Giải pháp hạ tầng CNTT doanh nghiệp và trạm máy chủ AI On-Premise từ NavaTek.');
                $seo['canonical']   = $permalink;
                $seo['breadcrumbs'][] = array('name' => get_the_title(), 'url' => $permalink);
                break;
        }
    } elseif (is_category() || is_tax()) {
        $term = get_queried_object();
        $seo['title']       = $term->name . ' - Tin Tức & Cẩm Nang | NavaTek';
        $seo['description'] = wp_strip_all_tags(term_description() ?: 'Tổng hợp các bài viết chuyên sâu về ' . $term->name . ' cho doanh nghiệp B2B từ đội ngũ kỹ sư NavaTek.');
        $seo['canonical']   = get_term_link($term);
        $seo['schema_type'] = 'CollectionPage';
        $seo['breadcrumbs'][] = array('name' => 'Tin Tức', 'url' => home_url('/tin-tuc/'));
        $seo['breadcrumbs'][] = array('name' => $term->name, 'url' => get_term_link($term));
    }

    return $seo;
}

/**
 * Filter WordPress document title tag to ensure optimal format
 */
function navatek_filter_document_title($title) {
    $seo = navatek_get_seo_data();
    if (!empty($seo['title'])) {
        return $seo['title'];
    }
    return $title;
}
add_filter('pre_get_document_title', 'navatek_filter_document_title', 20);

/**
 * Output Meta tags, Open Graph and Twitter Card tags in wp_head
 */
function navatek_output_seo_meta() {
    $seo = navatek_get_seo_data();
    ?>
    <!-- SEO Technical Meta Tags Generated by NavaTek Engine -->
    <meta name="description" content="<?php echo esc_attr($seo['description']); ?>">
    <meta name="keywords" content="<?php echo esc_attr($seo['keywords']); ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?php echo esc_url($seo['canonical']); ?>">

    <!-- Open Graph Meta Tags (Facebook, Zalo, LinkedIn) -->
    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="<?php echo esc_attr($seo['og_type']); ?>">
    <meta property="og:title" content="<?php echo esc_attr($seo['title']); ?>">
    <meta property="og:description" content="<?php echo esc_attr($seo['description']); ?>">
    <meta property="og:url" content="<?php echo esc_url($seo['canonical']); ?>">
    <meta property="og:site_name" content="NavaTek Enterprise Infrastructure">
    <meta property="og:image" content="<?php echo esc_url($seo['image']); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="<?php echo esc_attr($seo['image_alt']); ?>">

    <?php if ($seo['og_type'] === 'article' && !empty($seo['article_data'])) : ?>
    <meta property="article:published_time" content="<?php echo esc_attr($seo['article_data']['datePublished']); ?>">
    <meta property="article:modified_time" content="<?php echo esc_attr($seo['article_data']['dateModified']); ?>">
    <meta property="article:author" content="<?php echo esc_attr($seo['article_data']['author_name']); ?>">
    <meta property="article:section" content="<?php echo esc_attr($seo['article_data']['category']); ?>">
    <?php if (!empty($seo['article_data']['tags'])) : foreach ($seo['article_data']['tags'] as $t) : ?>
    <meta property="article:tag" content="<?php echo esc_attr($t); ?>">
    <?php endforeach; endif; ?>
    <?php endif; ?>

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr($seo['title']); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($seo['description']); ?>">
    <meta name="twitter:image" content="<?php echo esc_url($seo['image']); ?>">
    <meta name="twitter:site" content="@navatek_vn">
    <?php
}
add_action('wp_head', 'navatek_output_seo_meta', 1);

/**
 * Output Rich Google Structured Data (JSON-LD Schemas) in wp_head
 */
function navatek_output_schema_jsonld() {
    $seo = navatek_get_seo_data();
    $theme_uri = get_template_directory_uri();
    $home_url  = home_url('/');

    $graph = array();

    // 1. Global Organization Schema
    $graph[] = array(
        '@type'         => 'Organization',
        '@id'           => $home_url . '#organization',
        'name'          => 'NavaTek',
        'legalName'     => 'Công Ty TNHH NavaTek',
        'alternateName' => 'NavaTek Enterprise Infrastructure',
        'url'           => $home_url,
        'logo'          => array(
            '@type'   => 'ImageObject',
            '@id'     => $home_url . '#logo',
            'url'     => $theme_uri . '/images/LOGO.png',
            'caption' => 'NavaTek Logo'
        ),
        'image'         => $theme_uri . '/images/b2b_it_hero.png',
        'sameAs'        => array(
            'https://navastore.vn'
        ),
        'contactPoint'  => array(
            array(
                '@type'             => 'ContactPoint',
                'telephone'         => '+84-1900-6282',
                'contactType'       => 'customer service',
                'areaServed'        => 'VN',
                'availableLanguage' => array('Vietnamese', 'English')
            )
        )
    );

    // 2. Global LocalBusiness Schema
    $graph[] = array(
        '@type'              => 'LocalBusiness',
        '@id'                => $home_url . '#localbusiness',
        'name'               => 'NavaTek B2B IT Solutions & Local AI Server',
        'image'              => $theme_uri . '/images/LOGO.png',
        'telephone'          => '+84-1900-6282',
        'priceRange'         => '$$$',
        'address'            => array(
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'TP. Hồ Chí Minh',
            'addressLocality' => 'TP. Hồ Chí Minh',
            'addressRegion'   => 'TP. Hồ Chí Minh',
            'addressCountry'  => 'VN'
        ),
        'geo'                => array(
            '@type'     => 'GeoCoordinates',
            'latitude'  => 10.7769,
            'longitude' => 106.7009
        ),
        'openingHoursSpecification' => array(
            array(
                '@type'     => 'OpeningHoursSpecification',
                'dayOfWeek' => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
                'opens'     => '08:30',
                'closes'    => '18:00'
            )
        ),
        'parentOrganization' => array(
            '@id' => $home_url . '#organization'
        )
    );

    // 3. Global WebSite Schema
    $graph[] = array(
        '@type'           => 'WebSite',
        '@id'             => $home_url . '#website',
        'url'             => $home_url,
        'name'            => 'NavaTek',
        'publisher'       => array(
            '@id' => $home_url . '#organization'
        ),
        'potentialAction' => array(
            '@type'       => 'SearchAction',
            'target'      => $home_url . '?s={search_term_string}',
            'query-input' => 'required name=search_term_string'
        )
    );

    // 4. BreadcrumbList Schema (if not front page)
    if (!is_front_page() && !empty($seo['breadcrumbs'])) {
        $bc_elements = array();
        $pos = 1;
        foreach ($seo['breadcrumbs'] as $bc) {
            $bc_elements[] = array(
                '@type'    => 'ListItem',
                'position' => $pos,
                'name'     => $bc['name'],
                'item'     => esc_url($bc['url'])
            );
            $pos++;
        }

        $graph[] = array(
            '@type'           => 'BreadcrumbList',
            '@id'             => $seo['canonical'] . '#breadcrumb',
            'itemListElement' => $bc_elements
        );
    }

    // 5. Context-specific Schemas
    if ($seo['schema_type'] === 'TechArticle' && !empty($seo['article_data'])) {
        $art = $seo['article_data'];
        $graph[] = array(
            '@type'            => 'TechArticle',
            '@id'              => $seo['canonical'] . '#article',
            'isPartOf'         => array('@id' => $home_url . '#website'),
            'headline'         => $art['headline'],
            'description'      => $art['description'],
            'inLanguage'       => 'vi-VN',
            'mainEntityOfPage' => $seo['canonical'],
            'datePublished'    => $art['datePublished'],
            'dateModified'     => $art['dateModified'],
            'image'            => $art['image'],
            'author'           => array(
                '@type'    => 'Person',
                'name'     => $art['author_name'],
                'jobTitle' => $art['author_role'],
                'worksFor' => array('@id' => $home_url . '#organization')
            ),
            'publisher'        => array('@id' => $home_url . '#organization'),
            'articleSection'   => $art['category'],
            'keywords'         => !empty($art['tags']) ? implode(', ', $art['tags']) : ''
        );
    } elseif ($seo['schema_type'] === 'Service') {
        $service_name = $seo['title'];
        $graph[] = array(
            '@type'        => 'Service',
            '@id'          => $seo['canonical'] . '#service',
            'name'         => $service_name,
            'serviceType'  => 'Hạ Tầng CNTT Doanh Nghiệp & Trạm Máy Chủ AI',
            'description'  => $seo['description'],
            'provider'     => array('@id' => $home_url . '#organization'),
            'areaServed'   => array(
                '@type' => 'Country',
                'name'  => 'Vietnam'
            ),
            'termsOfService' => $home_url . 've-navatek/'
        );
    } elseif ($seo['schema_type'] === 'Product') {
        $prod_name = explode('|', $seo['title'])[0];
        $graph[] = array(
            '@type'       => 'Product',
            '@id'         => $seo['canonical'] . '#product',
            'name'        => trim($prod_name),
            'image'       => $seo['image'],
            'description' => $seo['description'],
            'brand'       => array(
                '@type' => 'Brand',
                'name'  => 'NavaTek'
            ),
            'offers'      => array(
                '@type'         => 'Offer',
                'url'           => $seo['canonical'],
                'priceCurrency' => 'VND',
                'availability'  => 'https://schema.org/InStock',
                'seller'        => array('@id' => $home_url . '#organization')
            )
        );
    } elseif ($seo['schema_type'] === 'AboutPage') {
        $graph[] = array(
            '@type'       => 'AboutPage',
            '@id'         => $seo['canonical'] . '#webpage',
            'url'         => $seo['canonical'],
            'name'        => $seo['title'],
            'description' => $seo['description'],
            'mainEntity'  => array('@id' => $home_url . '#organization')
        );
    } elseif ($seo['schema_type'] === 'ContactPage') {
        $graph[] = array(
            '@type'       => 'ContactPage',
            '@id'         => $seo['canonical'] . '#webpage',
            'url'         => $seo['canonical'],
            'name'        => $seo['title'],
            'description' => $seo['description'],
            'mainEntity'  => array('@id' => $home_url . '#localbusiness')
        );
    }

    $schema_payload = array(
        '@context' => 'https://schema.org',
        '@graph'   => $graph
    );

    echo "\n<!-- Schema JSON-LD Generated by NavaTek SEO Engine -->\n";
    echo '<script type="application/ld+json">' . "\n";
    echo wp_json_encode($schema_payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    echo "\n" . '</script>' . "\n";
}
add_action('wp_head', 'navatek_output_schema_jsonld', 2);
