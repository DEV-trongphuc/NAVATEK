# Hướng Dẫn Đồng Bộ / Convert Giao Diện NAVATEK Qua WordPress

Trang web **NAVATEK v3.1** đã được xây dựng 100% bằng **Vanilla HTML5, CSS3, và JavaScript thuần** theo chuẩn kiến trúc mộc. Điều này giúp bạn dễ dàng đồng bộ, nhúng hoặc chuyển đổi sang website WordPress theo các phương án sau:

---

## Phương Án 1: Dùng Elementor / Gutenberg Page Builder (Nhanh Nhất)

### Bước 1: Thêm CSS & Phông Chữ
1. Trong giao diện Quản trị WordPress (`WP-Admin`), truy cập **Giao diện (Appearance) → Tùy biến (Customize) → CSS bổ sung (Additional CSS)**.
2. Sao chép toàn bộ nội dung file `style.css` và dán vào đây.

### Bước 2: Nhúng HTML Section Vào Elementor
1. Tạo Trang mới trên WordPress (ví dụ: `Trang Chủ NAVATEK`).
2. Mở chỉnh sửa bằng Elementor, kéo widget **HTML Block** (Mã HTML) vào từng Section.
3. Copy từng đoạn mã HTML tương ứng từ `index.html` (ví dụ: `<section id="bento-hero">...`, `<section id="combos-machines">...`).

### Bước 3: Thêm JS Tương Tác
1. Cài plugin **Simple Custom CSS and JS** hoặc kéo widget **HTML Block** ở cuối trang và dán mã JS từ `main.js` vào trong thẻ `<script>...</script>`.

---

## Phương Án 2: Convert Thành WordPress Theme PHP (Tối Ưu Chuẩn SEO & Động)

Nếu bạn xây dựng Custom Theme hoặc Child Theme:

| Tệp HTML/CSS/JS Thuần | Tệp WordPress Theme Tương Ứng |
| :--- | :--- |
| `style.css` | `wp-content/themes/navatek-theme/style.css` |
| `<header>...</header>` trong `index.html` | `header.php` |
| `<footer>...</footer>` trong `index.html` | `footer.php` |
| Toàn bộ nội dung `<main>` hoặc `<section>` | `front-page.php` hoặc `page-home.php` |
| `main.js` | Enqueue trong `functions.php` qua `wp_enqueue_script()` |

### Code Ví Dụ Enqueue Trong `functions.php`:
```php
function navatek_enqueue_assets() {
    // Nạp Font Google & Lucide Icons
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Outfit:wght@400;700;800&family=Plus+Jakarta+Sans:wght@400;600;700&display=swap', array(), null);
    wp_enqueue_style('navatek-style', get_stylesheet_uri(), array(), '3.1');
    
    wp_enqueue_script('lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, true);
    wp_enqueue_script('navatek-main-js', get_template_directory_uri() . '/main.js', array(), '3.1', true);
}
add_action('wp_enqueue_scripts', 'navatek_enqueue_assets');
```

---

## Các File Giao Diện Trong Thư Mục NAVATEK:
- [index.html](file:///d:/GITHUB_SPACE/NAVATEK/index.html) — Mã nguồn HTML5 chứa toàn bộ layout Bento Grid, Tab Combo vs Máy Đơn & Modals.
- [style.css](file:///d:/GITHUB_SPACE/NAVATEK/style.css) — Thiết kế Design System chuẩn SDI Presence (Deep Navy, Ice Blue, Bento Card 28px).
- [main.js](file:///d:/GITHUB_SPACE/NAVATEK/main.js) — Logic JavaScript chuyển Tab, Scroll, Modal.
