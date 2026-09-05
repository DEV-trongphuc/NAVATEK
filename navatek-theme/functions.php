<?php
/**
 * NavaTek Theme Functions and Definitions
 *
 * @package NavaTek
 * @version 3.2.2
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Require SEO Engine & Schema JSON-LD Module
require_once get_template_directory() . '/inc/seo.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function navatek_setup() {
    load_theme_textdomain('navatek', get_template_directory() . '/languages');

    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    add_theme_support('custom-logo', array(
        'height'      => 40,
        'width'       => 160,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'navatek'),
        'footer'  => __('Footer Menu', 'navatek'),
    ));
}
add_action('after_setup_theme', 'navatek_setup');

/**
 * Enqueue scripts and styles.
 */
function navatek_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'navatek-google-fonts',
        'https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=Inter:wght@300;400;500;600;700;800;900&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'navatek-main-style',
        get_stylesheet_uri(),
        array(),
        '3.2.2'
    );

    // Lucide Icons
    wp_enqueue_script(
        'lucide-icons',
        'https://unpkg.com/lucide@latest',
        array(),
        null,
        true
    );

    // Bodymovin Lottie Web Player
    wp_enqueue_script(
        'lottie-web',
        'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.13.0/lottie.min.js',
        array(),
        '5.13.0',
        true
    );

    // NavaTek Interactive Script
    wp_enqueue_script(
        'navatek-main-script',
        get_template_directory_uri() . '/js/main.js',
        array('lucide-icons'),
        '3.2.2',
        true
    );

    // Pass data to script
    wp_localize_script('navatek-main-script', 'navatekData', array(
        'siteUrl'     => home_url('/'),
        'themeUrl'    => get_template_directory_uri(),
        'ajaxUrl'     => admin_url('admin-ajax.php'),
        'nonce'       => wp_create_nonce('navatek_quote_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'navatek_scripts');

/**
 * Add attributes to scripts
 */
function navatek_script_loader_tag($tag, $handle, $src) {
    if ('navatek-main-script' === $handle) {
        return '<script type="module" src="' . esc_url($src) . '"></script>' . "\n";
    }
    return $tag;
}
add_filter('script_loader_tag', 'navatek_script_loader_tag', 10, 3);

/* ==========================================================================
   QUOTE REQUEST & LEAD MANAGEMENT SYSTEM FOR WP-ADMIN
   ========================================================================== */

/**
 * Register Custom Post Type: quote_request
 */
function navatek_register_quote_cpt() {
    $labels = array(
        'name'                  => 'Yêu Cầu Báo Giá',
        'singular_name'         => 'Yêu Cầu Báo Giá',
        'menu_name'             => 'Yêu Cầu Báo Giá',
        'name_admin_bar'        => 'Yêu Cầu Báo Giá',
        'all_items'             => 'Tất Cả Yêu Cầu',
        'add_new_item'          => 'Thêm Yêu Cầu Mới',
        'edit_item'             => 'Xem / Chỉnh Sửa Yêu Cầu',
        'view_item'             => 'Xem Chi Tiết',
        'search_items'          => 'Tìm kiếm yêu cầu...',
        'not_found'             => 'Chưa có yêu cầu báo giá nào.',
        'not_found_in_trash'    => 'Không có yêu cầu nào trong thùng rác.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => false,
        'rewrite'            => false,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-phone',
        'supports'           => array('title')
    );

    register_post_type('quote_request', $args);
}
add_action('init', 'navatek_register_quote_cpt');

/**
 * Admin Columns for quote_request
 */
function navatek_quote_columns($columns) {
    $new_columns = array(
        'cb'            => '<input type="checkbox" />',
        'title'         => 'Họ và Tên Khách Hàng',
        'lead_phone'    => 'Số Điện Thoại / Zalo',
        'lead_email'    => 'Email',
        'lead_company'  => 'Công Ty / Tổ Chức',
        'lead_demand'   => 'Nhu Cầu & Số Lượng',
        'lead_source'   => 'Nguồn Gửi',
        'lead_status'   => 'Trạng Thái Xử Lý',
        'date'          => 'Thời Gian Gửi'
    );
    return $new_columns;
}
add_filter('manage_quote_request_posts_columns', 'navatek_quote_columns');

/**
 * Render Admin Column Values
 */
function navatek_quote_column_content($column, $post_id) {
    switch ($column) {
        case 'lead_phone':
            $phone = get_post_meta($post_id, '_lead_phone', true);
            if ($phone) {
                echo '<strong><a href="tel:' . esc_attr($phone) . '" style="color: #0A1128;">' . esc_html($phone) . '</a></strong>';
            } else {
                echo '<span style="color: #94A3B8;">—</span>';
            }
            break;

        case 'lead_email':
            $email = get_post_meta($post_id, '_lead_email', true);
            if ($email) {
                echo '<a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a>';
            } else {
                echo '<span style="color: #94A3B8;">—</span>';
            }
            break;

        case 'lead_company':
            $company = get_post_meta($post_id, '_lead_company', true);
            $tax_id = get_post_meta($post_id, '_lead_tax_id', true);
            if ($company) {
                echo '<div><strong>' . esc_html($company) . '</strong></div>';
                if ($tax_id) {
                    echo '<div style="font-size: 11px; color: #64748B;">MST: ' . esc_html($tax_id) . '</div>';
                }
            } else {
                echo '<span style="color: #94A3B8;">Khách cá nhân</span>';
            }
            break;

        case 'lead_demand':
            $demand = get_post_meta($post_id, '_lead_demand', true);
            $qty = get_post_meta($post_id, '_lead_quantity', true);
            if ($demand) {
                echo '<div style="font-weight: 600; color: #1E293B;">' . esc_html($demand) . '</div>';
                if ($qty) {
                    echo '<div style="font-size: 12px; color: #E8862E; font-weight: 700;">SL: ' . esc_html($qty) . ' máy</div>';
                }
            } else {
                echo '<span style="color: #94A3B8;">Tư vấn tổng thể</span>';
            }
            break;

        case 'lead_source':
            $source = get_post_meta($post_id, '_lead_source', true);
            $nda = get_post_meta($post_id, '_lead_nda', true);
            echo '<span style="display: inline-block; padding: 2px 8px; border-radius: 4px; background: #F1F5F9; font-size: 12px; color: #475569;">' . esc_html($source ? $source : 'Website') . '</span>';
            if ($nda === 'yes') {
                echo '<div style="margin-top: 3px;"><span style="display: inline-block; padding: 1px 6px; border-radius: 4px; background: #FEF3C7; color: #92400E; font-size: 11px; font-weight: 700;">Yêu cầu NDA</span></div>';
            }
            break;

        case 'lead_status':
            $status = get_post_meta($post_id, '_lead_status', true);
            if (!$status) $status = 'new';

            $badge_styles = array(
                'new'        => 'background: #EFF6FF; color: #1D4ED8; border: 1px solid #BFDBFE;',
                'contacting' => 'background: #FEF3C7; color: #B45309; border: 1px solid #FDE68A;',
                'quoted'     => 'background: #F3E8FF; color: #7E22CE; border: 1px solid #E9D5FF;',
                'completed'  => 'background: #ECFDF5; color: #047857; border: 1px solid #A7F3D0;',
                'cancelled'  => 'background: #F1F5F9; color: #64748B; border: 1px solid #E2E8F0;',
            );

            $status_names = array(
                'new'        => 'Mới tiếp nhận',
                'contacting' => 'Đang liên hệ tư vấn',
                'quoted'     => 'Đã gửi báo giá',
                'completed'  => 'Đã chốt hợp đồng',
                'cancelled'  => 'Đã hủy / Không mua'
            );

            $style = isset($badge_styles[$status]) ? $badge_styles[$status] : $badge_styles['new'];
            $label = isset($status_names[$status]) ? $status_names[$status] : $status;

            echo '<span style="display: inline-block; padding: 4px 10px; border-radius: 99px; font-weight: 700; font-size: 11px; ' . $style . '">' . esc_html($label) . '</span>';
            break;
    }
}
add_action('manage_quote_request_posts_custom_column', 'navatek_quote_column_content', 10, 2);

/**
 * Meta Box for Lead Detail & Processing Actions
 */
function navatek_quote_add_meta_box() {
    add_meta_box(
        'quote_details_meta_box',
        'Chi Tiết Yêu Cầu Báo Giá & Xử Lý Đơn',
        'navatek_quote_render_meta_box',
        'quote_request',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'navatek_quote_add_meta_box');

function navatek_quote_render_meta_box($post) {
    $name     = get_post_meta($post->ID, '_lead_name', true);
    $phone    = get_post_meta($post->ID, '_lead_phone', true);
    $email    = get_post_meta($post->ID, '_lead_email', true);
    $company  = get_post_meta($post->ID, '_lead_company', true);
    $tax_id   = get_post_meta($post->ID, '_lead_tax_id', true);
    $address  = get_post_meta($post->ID, '_lead_address', true);
    $demand   = get_post_meta($post->ID, '_lead_demand', true);
    $qty      = get_post_meta($post->ID, '_lead_quantity', true);
    $note     = get_post_meta($post->ID, '_lead_note', true);
    $nda      = get_post_meta($post->ID, '_lead_nda', true);
    $source   = get_post_meta($post->ID, '_lead_source', true);
    $status   = get_post_meta($post->ID, '_lead_status', true);
    if (!$status) $status = 'new';
    $internal_notes = get_post_meta($post->ID, '_internal_notes', true);

    wp_nonce_field('save_quote_meta', 'quote_meta_nonce');
    ?>
    <style>
        .nava-lead-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px; }
        .nava-lead-row { margin-bottom: 12px; }
        .nava-lead-label { font-weight: 700; color: #1E293B; font-size: 13px; margin-bottom: 4px; }
        .nava-lead-val { font-size: 14px; color: #0F172A; background: #F8FAFC; border: 1px solid #E2E8F0; padding: 8px 12px; border-radius: 8px; }
    </style>

    <div class="nava-lead-grid">
        <div>
            <div class="nava-lead-row">
                <div class="nava-lead-label">Họ và tên khách hàng:</div>
                <div class="nava-lead-val"><strong><?php echo esc_html($name ? $name : $post->post_title); ?></strong></div>
            </div>
            <div class="nava-lead-row">
                <div class="nava-lead-label">Số điện thoại / Zalo:</div>
                <div class="nava-lead-val"><a href="tel:<?php echo esc_attr($phone); ?>" style="color: #0284C7; font-weight: 700; font-size: 15px;"><?php echo esc_html($phone ? $phone : 'Chưa nhập'); ?></a></div>
            </div>
            <div class="nava-lead-row">
                <div class="nava-lead-label">Địa chỉ Email:</div>
                <div class="nava-lead-val"><?php echo $email ? '<a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a>' : '<span style="color: #94A3B8;">Chưa nhập</span>'; ?></div>
            </div>
            <div class="nava-lead-row">
                <div class="nava-lead-label">Công ty / Tổ chức:</div>
                <div class="nava-lead-val"><?php echo esc_html($company ? $company : 'Khách cá nhân'); ?></div>
            </div>
            <div class="nava-lead-row">
                <div class="nava-lead-label">Mã số thuế (MST):</div>
                <div class="nava-lead-val"><?php echo esc_html($tax_id ? $tax_id : 'Không có'); ?></div>
            </div>
            <div class="nava-lead-row">
                <div class="nava-lead-label">Địa chỉ doanh nghiệp:</div>
                <div class="nava-lead-val"><?php echo esc_html($address ? $address : 'Chưa nhập'); ?></div>
            </div>
        </div>

        <div>
            <div class="nava-lead-row">
                <div class="nava-lead-label">Nhu cầu giải pháp:</div>
                <div class="nava-lead-val" style="color: #0A1128; font-weight: 700;"><?php echo esc_html($demand ? $demand : 'Tư vấn chung'); ?></div>
            </div>
            <div class="nava-lead-row">
                <div class="nava-lead-label">Số lượng máy dự kiến:</div>
                <div class="nava-lead-val"><?php echo esc_html($qty ? $qty . ' bộ máy' : 'Chưa rõ'); ?></div>
            </div>
            <div class="nava-lead-row">
                <div class="nava-lead-label">Nguồn gửi form:</div>
                <div class="nava-lead-val"><?php echo esc_html($source ? $source : 'Website'); ?></div>
            </div>
            <div class="nava-lead-row">
                <div class="nava-lead-label">Yêu cầu ký NDA (Bảo mật thông tin):</div>
                <div class="nava-lead-val">
                    <?php if ($nda === 'yes') : ?>
                        <span style="color: #B45309; font-weight: 700; background: #FEF3C7; padding: 3px 8px; border-radius: 4px;">CÓ YÊU CẦU NDA</span>
                    <?php else : ?>
                        <span style="color: #64748B;">Không yêu cầu</span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="nava-lead-row">
                <div class="nava-lead-label">Mô tả / Ghi chú từ khách:</div>
                <div class="nava-lead-val" style="min-height: 50px;"><?php echo nl2br(esc_html($note ? $note : 'Không có')); ?></div>
            </div>
        </div>
    </div>

    <hr style="border: 0; border-top: 1px solid #E2E8F0; margin: 20px 0;">

    <div style="background: #F1F5F9; border-radius: 12px; padding: 16px;">
        <h4 style="margin: 0 0 12px 0; font-size: 14px; color: #0A1128;">⚙️ Xử Lý Trạng Thái Đơn Báo Giá:</h4>
        <div style="display: flex; gap: 16px; align-items: center; flex-wrap: wrap;">
            <div>
                <label style="font-weight: 700; font-size: 13px; margin-right: 8px;">Cập nhật trạng thái:</label>
                <select name="lead_status" style="padding: 6px 12px; border-radius: 6px; font-weight: 600;">
                    <option value="new" <?php selected($status, 'new'); ?>>🔵 Mới tiếp nhận</option>
                    <option value="contacting" <?php selected($status, 'contacting'); ?>>🟡 Đang liên hệ tư vấn</option>
                    <option value="quoted" <?php selected($status, 'quoted'); ?>>🟣 Đã gửi bảng báo giá</option>
                    <option value="completed" <?php selected($status, 'completed'); ?>>🟢 Đã chốt hợp đồng thành công</option>
                    <option value="cancelled" <?php selected($status, 'cancelled'); ?>>⚪ Đã hủy / Không phù hợp</option>
                </select>
            </div>
        </div>

        <div style="margin-top: 14px;">
            <label style="font-weight: 700; font-size: 13px; display: block; margin-bottom: 4px;">Ghi chú nội bộ kỹ thuật viên / Sales:</label>
            <textarea name="internal_notes" rows="3" style="width: 100%; border-radius: 6px; padding: 8px;" placeholder="Ví dụ: Đã gọi khách lúc 10h, khách yêu cầu cấu hình RTX 4090 + 64GB RAM..."><?php echo esc_textarea($internal_notes); ?></textarea>
        </div>
    </div>
    <?php
}

/**
 * Save Lead Meta when updated in WP-Admin
 */
function navatek_quote_save_meta($post_id) {
    if (!isset($_POST['quote_meta_nonce']) || !wp_verify_nonce($_POST['quote_meta_nonce'], 'save_quote_meta')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['lead_status'])) {
        update_post_meta($post_id, '_lead_status', sanitize_text_field($_POST['lead_status']));
    }
    if (isset($_POST['internal_notes'])) {
        update_post_meta($post_id, '_internal_notes', sanitize_textarea_field($_POST['internal_notes']));
    }
}
add_action('save_post_quote_request', 'navatek_quote_save_meta');

/**
 * AJAX Handler: Receive quote request submissions from website frontend
 */
function navatek_ajax_submit_quote() {
    // Basic rate limit or validation
    $name     = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
    $phone    = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
    $email    = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $company  = isset($_POST['company']) ? sanitize_text_field($_POST['company']) : '';
    $tax_id   = isset($_POST['tax_id']) ? sanitize_text_field($_POST['tax_id']) : '';
    $address  = isset($_POST['address']) ? sanitize_text_field($_POST['address']) : '';
    $demand   = isset($_POST['demand']) ? sanitize_text_field($_POST['demand']) : '';
    $qty      = isset($_POST['quantity']) ? sanitize_text_field($_POST['quantity']) : '';
    $note     = isset($_POST['note']) ? sanitize_textarea_field($_POST['note']) : '';
    $nda      = isset($_POST['nda_required']) ? sanitize_text_field($_POST['nda_required']) : 'no';
    $source   = isset($_POST['source']) ? sanitize_text_field($_POST['source']) : 'Website NavaTek';

    if (empty($name) && empty($phone)) {
        wp_send_json_error(array('message' => 'Vui lòng nhập họ tên và số điện thoại liên hệ.'));
    }

    $title = '[' . ($source ? $source : 'Báo giá') . '] ' . ($name ? $name : 'Khách hàng') . ' - ' . $phone;

    $post_id = wp_insert_post(array(
        'post_title'   => $title,
        'post_type'    => 'quote_request',
        'post_status'  => 'publish',
        'comment_status' => 'closed',
        'ping_status'  => 'closed'
    ));

    if (is_wp_error($post_id) || !$post_id) {
        wp_send_json_error(array('message' => 'Có lỗi xảy ra khi lưu thông tin. Vui lòng liên hệ hotline 1900-NAVATEK.'));
    }

    update_post_meta($post_id, '_lead_name', $name);
    update_post_meta($post_id, '_lead_phone', $phone);
    update_post_meta($post_id, '_lead_email', $email);
    update_post_meta($post_id, '_lead_company', $company);
    update_post_meta($post_id, '_lead_tax_id', $tax_id);
    update_post_meta($post_id, '_lead_address', $address);
    update_post_meta($post_id, '_lead_demand', $demand);
    update_post_meta($post_id, '_lead_quantity', $qty);
    update_post_meta($post_id, '_lead_note', $note);
    update_post_meta($post_id, '_lead_nda', $nda);
    update_post_meta($post_id, '_lead_source', $source);
    update_post_meta($post_id, '_lead_status', 'new');

    wp_send_json_success(array(
        'message' => 'Gửi yêu cầu thành công! Kỹ sư giải pháp của NavaTek sẽ liên hệ tư vấn và gửi báo giá trong vòng 15 phút.',
        'lead_id' => $post_id
    ));
}
add_action('wp_ajax_navatek_submit_quote', 'navatek_ajax_submit_quote');
add_action('wp_ajax_nopriv_navatek_submit_quote', 'navatek_ajax_submit_quote');
