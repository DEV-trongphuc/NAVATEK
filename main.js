/**
 * NAVATEK.VN - B2B IT INFRASTRUCTURE & AUTOMATION JS LOGIC
 */

// Immediate icon creation
if (typeof lucide !== 'undefined' && lucide.createIcons) {
  lucide.createIcons();
}

document.addEventListener('DOMContentLoaded', () => {
  if (typeof lucide !== 'undefined' && lucide.createIcons) {
    lucide.createIcons();
  }
  console.log('NavaTek B2B IT Logic Initialized.');

  // ==========================================================================
  // 1. SEARCH SUGGESTION LOGIC (Top Navbar Search)
  // ==========================================================================
  const searchInput = document.getElementById('search-input-field');
  const suggestionDropdown = document.getElementById('search-suggestion-dropdown');

  const productsData = [
    {
      title: "Mini PC Core i9 · 64GB · chạy LLM nhẹ",
      price: "28.900.000₫",
      url: "/chi-tiet-may-don.html",
      image: "/images/bending.png"
    },
    {
      title: "Combo Trạm AI: Mini PC + eGPU RTX 4070",
      price: "68.000.000₫",
      url: "/combo-tron-bo.html",
      image: "/images/combo.png"
    },
    {
      title: "Workstation AI · RTX 4090 · 128GB",
      price: "96.000.000₫",
      url: "/chi-tiet-may-don.html",
      image: "/images/laser.png"
    },
    {
      title: "eGPU box RTX 4090 24GB (mua rời)",
      price: "42.000.000₫",
      url: "/chi-tiet-linh-kien.html",
      image: "/images/laser.png"
    },
    {
      title: "Gói nâng cấp RAM 64GB + SSD 2TB",
      price: "9.900.000₫",
      url: "/chi-tiet-linh-kien.html",
      image: "/images/ai.png"
    },
    {
      title: "Combo Trạm AI nâng cao: Mini PC + eGPU 4090",
      price: "112.000.000₫",
      url: "/combo-tron-bo.html",
      image: "/images/combo.png"
    }
  ];

  if (searchInput && suggestionDropdown) {
    searchInput.addEventListener('input', (e) => {
      const query = e.target.value.toLowerCase().trim();
      if (!query) {
        suggestionDropdown.classList.remove('open');
        suggestionDropdown.innerHTML = '';
        return;
      }

      const filtered = productsData.filter(p => p.title.toLowerCase().includes(query));
      
      if (filtered.length > 0) {
        suggestionDropdown.innerHTML = filtered.map(item => `
          <a href="${item.url}" class="sdi-suggestion-item">
            <img src="${item.image}" alt="${item.title}" class="sdi-suggestion-thumb">
            <div class="sdi-suggestion-info">
              <div class="sdi-suggestion-title">${item.title}</div>
              <div class="sdi-suggestion-price">${item.price}</div>
            </div>
          </a>
        `).join('');
        suggestionDropdown.classList.add('open');
      } else {
        suggestionDropdown.innerHTML = '<div style="padding: 1rem; font-size: 0.85rem; color: #64748B;">Không tìm thấy sản phẩm</div>';
        suggestionDropdown.classList.add('open');
      }
    });

    // Close dropdown on click outside
    document.addEventListener('click', (e) => {
      if (!searchInput.contains(e.target) && !suggestionDropdown.contains(e.target)) {
        suggestionDropdown.classList.remove('open');
      }
    });
  }

  // Mobile Search Suggestions
  const searchInputMobile = document.getElementById('search-input-field-mobile');
  const suggestionDropdownMobile = document.getElementById('search-suggestion-dropdown-mobile');

  if (searchInputMobile && suggestionDropdownMobile) {
    searchInputMobile.addEventListener('input', (e) => {
      const query = e.target.value.toLowerCase().trim();
      if (!query) {
        suggestionDropdownMobile.classList.remove('open');
        suggestionDropdownMobile.innerHTML = '';
        return;
      }

      const filtered = productsData.filter(p => p.title.toLowerCase().includes(query));
      
      if (filtered.length > 0) {
        suggestionDropdownMobile.innerHTML = filtered.map(item => `
          <a href="${item.url}" class="sdi-suggestion-item">
            <img src="${item.image}" alt="${item.title}" class="sdi-suggestion-thumb">
            <div class="sdi-suggestion-info">
              <div class="sdi-suggestion-title">${item.title}</div>
              <div class="sdi-suggestion-price">${item.price}</div>
            </div>
          </a>
        `).join('');
        suggestionDropdownMobile.classList.add('open');
      } else {
        suggestionDropdownMobile.innerHTML = '<div style="padding: 1rem; font-size: 0.85rem; color: #64748B;">Không tìm thấy sản phẩm</div>';
        suggestionDropdownMobile.classList.add('open');
      }
    });

    document.addEventListener('click', (e) => {
      if (!searchInputMobile.contains(e.target) && !suggestionDropdownMobile.contains(e.target)) {
        suggestionDropdownMobile.classList.remove('open');
      }
    });
  }

  // ==========================================================================
  // 2. INDUSTRIES SECTOR SPOTLIGHT SWITCHER (SDI Style)
  // ==========================================================================
  const industryItems = document.querySelectorAll('.ind-list-item');
  const industryDisplayTitle = document.getElementById('ind-display-title');
  const industryDisplayDesc = document.getElementById('ind-display-desc');
  const industryDisplayTag = document.getElementById('ind-display-tag');

  const industryData = {
    metal: {
      tag: "SHEET METAL FABRICATION / HARDWARE",
      title: "Gia Công Kim Loại Tấm & Chế Tạo Cơ Khí Chính Xác",
      desc: "Hệ thống Mini PC điều khiển máy cắt Laser CNC công suất cao và máy chấn thủy lực, tích hợp cổng giao tiếp RS232/LAN công nghiệp chống nhiễu bức xạ."
    },
    shipbuilding: {
      tag: "MARITIME & HEAVY INDUSTRY",
      title: "Hàng Hải, Đóng Tàu & Kết Cấu Thép Siêu Trọng",
      desc: "Trạm máy chủ mini chuyên dụng chống ẩm muối biển, thiết kế vỏ nhôm tản nhiệt thụ động fanless chịu nhiệt độ môi trường khắc nghiệt."
    },
    auto: {
      tag: "AUTOMOTIVE & PRECISION",
      title: "Công Nghiệp Ô Tô & Linh Kiện Phụ Tùng Tự Động Hóa",
      desc: "Cung cấp máy tính nhúng mini tích hợp camera AI nhận diện sản phẩm lỗi trên băng chuyền sản xuất lắp ráp linh kiện cơ khí chính xác."
    },
    energy: {
      tag: "ENERGY & INFRASTRUCTURE",
      title: "Năng Lượng, Tủ Điện & Thiết Bị Công Nghiệp Đô Thị",
      desc: "Combo trạm điều khiển trung tâm và thiết bị chuyển mạch mạng công nghiệp, giúp quản lý phân phối điện thông minh và giám sát IoT từ xa."
    }
  };

  industryItems.forEach(item => {
    item.addEventListener('click', () => {
      industryItems.forEach(i => i.classList.remove('active'));
      item.classList.add('active');

      const sectorKey = item.getAttribute('data-sector');
      if (sectorKey && industryData[sectorKey]) {
        if (industryDisplayTitle) industryDisplayTitle.textContent = industryData[sectorKey].title;
        if (industryDisplayDesc) industryDisplayDesc.textContent = industryData[sectorKey].desc;
        if (industryDisplayTag) industryDisplayTag.textContent = industryData[sectorKey].tag;
      }
    });
  });

  // ==========================================================================
  // 3. CATALOG MULTI-FACET FILTERING & LIVE SEARCH (Bug 14 & Bug 19)
  // ==========================================================================
  const catalogGrid = document.getElementById('catalog-product-grid');
  const catalogSearchInput = document.getElementById('catalog-search-input');
  const catalogResultsCounter = document.getElementById('catalog-results-counter');
  const catalogEmptyState = document.getElementById('catalog-empty-state');
  const resetFiltersBtn = document.getElementById('reset-catalog-filters');
  const catalogSortSelect = document.getElementById('catalog-sort-select');

  if (catalogGrid) {
    const productCards = Array.from(catalogGrid.querySelectorAll('.product-item-card'));
    
    let currentFilters = {
      category: 'all',
      price: 'all',
      brand: 'all',
      usecase: 'all',
      search: '',
      sort: 'default'
    };

    const applyCatalogFilters = () => {
      let visibleCount = 0;

      productCards.forEach(card => {
        const cat = card.getAttribute('data-category') || '';
        const price = parseInt(card.getAttribute('data-price') || '0', 10);
        const brand = card.getAttribute('data-brand') || '';
        const usecase = card.getAttribute('data-usecase') || '';
        const title = card.querySelector('h4')?.textContent.toLowerCase() || '';

        let matchCategory = (currentFilters.category === 'all' || cat === currentFilters.category);
        
        let matchPrice = true;
        if (currentFilters.price === 'under-15') {
          matchPrice = price < 15000000;
        } else if (currentFilters.price === '15-30') {
          matchPrice = price >= 15000000 && price <= 30000000;
        } else if (currentFilters.price === '30-70') {
          matchPrice = price > 30000000 && price <= 70000000;
        } else if (currentFilters.price === 'over-70') {
          matchPrice = price > 70000000;
        }

        let matchBrand = (currentFilters.brand === 'all' || brand.toLowerCase().includes(currentFilters.brand.toLowerCase()));
        let matchUsecase = (currentFilters.usecase === 'all' || usecase.toLowerCase().includes(currentFilters.usecase.toLowerCase()));
        let matchSearch = (!currentFilters.search || title.includes(currentFilters.search));

        if (matchCategory && matchPrice && matchBrand && matchUsecase && matchSearch) {
          card.style.display = 'flex';
          visibleCount++;
        } else {
          card.style.display = 'none';
        }
      });

      // Sorting logic
      if (currentFilters.sort === 'price-asc') {
        const sorted = [...productCards].sort((a, b) => {
          return parseInt(a.getAttribute('data-price') || '0', 10) - parseInt(b.getAttribute('data-price') || '0', 10);
        });
        sorted.forEach(c => catalogGrid.appendChild(c));
      } else if (currentFilters.sort === 'price-desc') {
        const sorted = [...productCards].sort((a, b) => {
          return parseInt(b.getAttribute('data-price') || '0', 10) - parseInt(a.getAttribute('data-price') || '0', 10);
        });
        sorted.forEach(c => catalogGrid.appendChild(c));
      }

      if (catalogResultsCounter) {
        catalogResultsCounter.textContent = `Hiển thị ${visibleCount} sản phẩm phù hợp`;
      }
      if (catalogEmptyState) {
        catalogEmptyState.style.display = visibleCount === 0 ? 'block' : 'none';
      }
      if (catalogGrid) {
        catalogGrid.style.display = visibleCount === 0 ? 'none' : 'grid';
      }
    };

    // Sidebar Pills Handlers
    const filterPills = document.querySelectorAll('#filter-sidebar .filter-pill');
    filterPills.forEach(pill => {
      pill.addEventListener('click', () => {
        const type = pill.getAttribute('data-filter-type');
        const val = pill.getAttribute('data-val') || 'all';

        if (!type) return;

        const group = pill.closest('#filter-group-' + type) || pill.parentElement;
        group.querySelectorAll('.filter-pill').forEach(p => p.classList.remove('active'));
        
        if (currentFilters[type] === val && val !== 'all') {
          currentFilters[type] = 'all';
        } else {
          pill.classList.add('active');
          currentFilters[type] = val;
        }

        if (type === 'category') {
          const mobileChips = document.querySelectorAll('#mobile-category-chips .filter-chip-btn');
          mobileChips.forEach(chip => {
            chip.classList.toggle('active', chip.getAttribute('data-category') === currentFilters.category);
          });
        }

        applyCatalogFilters();
      });
    });

    // Mobile Chips Handlers
    const mobileChips = document.querySelectorAll('#mobile-category-chips .filter-chip-btn');
    mobileChips.forEach(chip => {
      chip.addEventListener('click', () => {
        mobileChips.forEach(c => c.classList.remove('active'));
        chip.classList.add('active');
        const cat = chip.getAttribute('data-category') || 'all';
        currentFilters.category = cat;

        const sidebarPills = document.querySelectorAll('#filter-group-category .filter-pill');
        sidebarPills.forEach(p => {
          p.classList.toggle('active', (p.getAttribute('data-val') || 'all') === cat);
        });

        applyCatalogFilters();
      });
    });

    // Search inside catalog toolbar
    if (catalogSearchInput) {
      catalogSearchInput.addEventListener('input', (e) => {
        currentFilters.search = e.target.value.toLowerCase().trim();
        applyCatalogFilters();
      });
    }

    // Sort select handler
    if (catalogSortSelect) {
      const hiddenSortInput = catalogSortSelect.querySelector('input[type="hidden"]');
      if (hiddenSortInput) {
        hiddenSortInput.addEventListener('change', (e) => {
          currentFilters.sort = e.target.value;
          applyCatalogFilters();
        });
      }
    }

    // Reset filters
    if (resetFiltersBtn) {
      resetFiltersBtn.addEventListener('click', () => {
        currentFilters = { category: 'all', price: 'all', brand: 'all', usecase: 'all', search: '', sort: 'default' };
        if (catalogSearchInput) catalogSearchInput.value = '';
        filterPills.forEach(p => p.classList.remove('active'));
        document.querySelector('#filter-group-category .filter-pill[data-val="all"]')?.classList.add('active');
        mobileChips.forEach(c => c.classList.toggle('active', c.getAttribute('data-category') === 'all'));
        applyCatalogFilters();
      });
    }
  }

  // ==========================================================================
  // 4. GLOBAL QUOTE MODAL SYSTEM & LEAD FORMS
  // ==========================================================================
  const ensureQuoteModal = () => {
    let modal = document.getElementById('quote-modal');
    if (!modal) {
      modal = document.createElement('div');
      modal.className = 'modal-overlay';
      modal.id = 'quote-modal';
      modal.innerHTML = `
        <div class="modal-box" style="position: relative;">
          <button id="close-quote-modal" style="position: absolute; top: 1.25rem; right: 1.25rem; background: #F1F5F9; border: none; width: 38px; height: 38px; border-radius: 50%; cursor: pointer; color: #475569; display: flex; align-items: center; justify-content: center;">
            <i data-lucide="x" style="width: 20px; height: 20px;"></i>
          </button>
          <span class="eyebrow-badge">NAVATEK B2B</span>
          <h3 style="font-size: 1.75rem; color: var(--sdi-navy-primary); margin: 0.5rem 0 0.25rem 0; font-weight: 800;">Yêu Cầu Báo Giá & Tư Vấn B2B</h3>
          <p style="font-size: 0.925rem; color: #64748B; margin-bottom: 1.5rem; line-height: 1.5;">Kỹ sư giải pháp của NavaTek sẽ liên hệ tư vấn cấu hình chi tiết trong vòng 15-30 phút.</p>
          <form id="quote-request-form" style="display: flex; flex-direction: column; gap: 1rem;">
            <div>
              <label style="display: block; font-size: 0.85rem; font-weight: 700; color: var(--sdi-navy-primary); margin-bottom: 0.35rem;">Họ và tên *</label>
              <input type="text" required placeholder="Nguyễn Văn A" style="width: 100%; padding: 0.8rem 1rem; border-radius: 12px; border: 1px solid #CBD5E1; outline: none; font-size: 0.95rem;">
            </div>
            <div class="sdi-form-grid-2">
              <div>
                <label style="display: block; font-size: 0.85rem; font-weight: 700; color: var(--sdi-navy-primary); margin-bottom: 0.35rem;">Số điện thoại / Zalo *</label>
                <input type="tel" required placeholder="0901234567" style="width: 100%; padding: 0.8rem 1rem; border-radius: 12px; border: 1px solid #CBD5E1; outline: none; font-size: 0.95rem;">
              </div>
              <div>
                <label style="display: block; font-size: 0.85rem; font-weight: 700; color: var(--sdi-navy-primary); margin-bottom: 0.35rem;">Email</label>
                <input type="email" placeholder="contact@company.com" style="width: 100%; padding: 0.8rem 1rem; border-radius: 12px; border: 1px solid #CBD5E1; outline: none; font-size: 0.95rem;">
              </div>
            </div>
            <div class="sdi-form-grid-2">
              <div>
                <label style="display: block; font-size: 0.85rem; font-weight: 700; color: var(--sdi-navy-primary); margin-bottom: 0.35rem;">Mã số thuế (MST)</label>
                <input type="text" placeholder="031789456..." style="width: 100%; padding: 0.8rem 1rem; border-radius: 12px; border: 1px solid #CBD5E1; outline: none; font-size: 0.95rem;">
              </div>
              <div>
                <label style="display: block; font-size: 0.85rem; font-weight: 700; color: var(--sdi-navy-primary); margin-bottom: 0.35rem;">Địa chỉ công ty</label>
                <input type="text" placeholder="Quận/Huyện, TP..." style="width: 100%; padding: 0.8rem 1rem; border-radius: 12px; border: 1px solid #CBD5E1; outline: none; font-size: 0.95rem;">
              </div>
            </div>
            <div>
              <label style="display: block; font-size: 0.85rem; font-weight: 700; color: var(--sdi-navy-primary); margin-bottom: 0.35rem;">Nhu cầu giải pháp</label>
              <select style="width: 100%; padding: 0.8rem 1rem; border-radius: 12px; border: 1px solid #CBD5E1; outline: none; font-size: 0.95rem; background: #FFFFFF; font-family: inherit;">
                <option value="ai-server">Trạm AI Cục bộ & Local LLM</option>
                <option value="upgrade">Nâng cấp RAM / SSD / eGPU Box</option>
                <option value="minipc-network">Mini PC & Mạng Doanh Nghiệp</option>
                <option value="consult">Tư vấn tổng thể / Chưa rõ nhu cầu</option>
              </select>
            </div>
            <!-- Checkbox Yêu Cầu NDA -->
            <label class="form-checkbox-group">
              <input type="checkbox" name="nda_required" value="yes">
              <span class="form-checkbox-text">
                <strong>Yêu cầu NDA</strong> (Thỏa thuận bảo mật thông tin doanh nghiệp)
                <small>Ký cam kết bảo mật trước khi khảo sát & tư vấn hạ tầng AI.</small>
              </span>
            </label>
            <button type="submit" class="sdi-btn-orange" style="width: 100%; justify-content: center; padding: 0.85rem; margin-top: 0.5rem; font-size: 1rem; border-radius: 12px;">
              <span>Gửi Yêu Cầu Báo Giá</span>
            </button>
          </form>
        </div>
      `;
      document.body.appendChild(modal);

      // Attach close listeners
      const closeBtn = modal.querySelector('#close-quote-modal');
      closeBtn?.addEventListener('click', () => modal.classList.remove('open'));
      modal.addEventListener('click', (e) => {
        if (e.target === modal) modal.classList.remove('open');
      });

      const qForm = modal.querySelector('#quote-request-form');
      if (qForm) {
        qForm.addEventListener('submit', (e) => handleFormSubmit(e, qForm));
      }

      if (window.lucide) {
        window.lucide.createIcons();
      }
    }
    return modal;
  };

  const openModalBtns = document.querySelectorAll('.trigger-quote-modal');
  openModalBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const modal = ensureQuoteModal();
      modal.classList.add('open');
      
      const mobileDrawer = document.getElementById('sdi-mobile-drawer');
      const menuToggle = document.getElementById('mobile-menu-toggle');
      if (mobileDrawer && mobileDrawer.classList.contains('open')) {
        mobileDrawer.classList.remove('open');
        document.body.classList.remove('drawer-open');
        if (menuToggle) {
          menuToggle.innerHTML = '<i data-lucide="menu" style="width: 22px; height: 22px;"></i>';
          lucide.createIcons();
        }
      }
    });
  });

  // Attach existing page modal close handler if present
  const existingModal = document.getElementById('quote-modal');
  if (existingModal) {
    const existingCloseBtn = existingModal.querySelector('#close-quote-modal');
    existingCloseBtn?.addEventListener('click', () => existingModal.classList.remove('open'));
    existingModal.addEventListener('click', (e) => {
      if (e.target === existingModal) existingModal.classList.remove('open');
    });
  }

  const showSuccessToast = (title, message) => {
    let existingToast = document.querySelector('.sdi-toast');
    if (existingToast) {
      existingToast.remove();
    }
    
    const toast = document.createElement('div');
    toast.className = 'sdi-toast';
    toast.innerHTML = `
      <div class="sdi-toast-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
      </div>
      <div class="sdi-toast-content">
        <div class="sdi-toast-title">${title}</div>
        <div class="sdi-toast-desc">${message}</div>
      </div>
    `;
    
    document.body.appendChild(toast);
    
    setTimeout(() => {
      toast.classList.add('show');
    }, 50);
    
    setTimeout(() => {
      toast.classList.remove('show');
      setTimeout(() => {
        toast.remove();
      }, 350);
    }, 4500);
  };

  const handleFormSubmit = (e, formElement) => {
    e.preventDefault();
    const submitBtn = formElement.querySelector('button[type="submit"]');
    const originalText = submitBtn ? submitBtn.innerHTML : 'Gửi';
    
    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.innerHTML = `<span class="sdi-spinner"></span><span>Đang gửi...</span>`;
    }

    setTimeout(() => {
      showSuccessToast(
        'Gửi yêu cầu thành công!',
        'Kỹ sư NavaTek sẽ liên hệ tư vấn cấu hình chi tiết trong vòng 15-30 phút.'
      );
      const modalOverlay = document.getElementById('quote-modal');
      modalOverlay?.classList.remove('open');
      formElement.reset();
      if (submitBtn) {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
      }
    }, 1000);
  };

  const quoteForm = document.getElementById('quote-request-form');
  const footerForm = document.getElementById('footer-lead-form');
  const allLeadForms = document.querySelectorAll('.sdi-lead-form');

  if (quoteForm) {
    quoteForm.addEventListener('submit', (e) => handleFormSubmit(e, quoteForm));
  }
  if (footerForm) {
    footerForm.addEventListener('submit', (e) => handleFormSubmit(e, footerForm));
  }
  allLeadForms.forEach(form => {
    form.addEventListener('submit', (e) => handleFormSubmit(e, form));
  });

  // ==========================================================================
  // 5. INTERACTIVE PRODUCT GALLERY SWITCHER (Details Page)
  // ==========================================================================
  const thumbnailButtons = document.querySelectorAll('.thumbnail-btn');
  const mainProductPreviewImg = document.getElementById('main-product-preview-img');

  thumbnailButtons.forEach(btn => {
    const handler = () => {
      thumbnailButtons.forEach(t => t.classList.remove('active'));
      btn.classList.add('active');
      const targetSrc = btn.getAttribute('data-target-src');
      if (mainProductPreviewImg && targetSrc) {
        if (mainProductPreviewImg.getAttribute('src') === targetSrc) return;
        mainProductPreviewImg.classList.add('switching');
        setTimeout(() => {
          mainProductPreviewImg.src = targetSrc;
          mainProductPreviewImg.classList.remove('switching');
        }, 180);
      }
    };
    btn.addEventListener('click', handler);
    btn.addEventListener('mouseenter', handler);
  });

  // ==========================================================================
  // 6. RUNNING NUMBER COUNTERS
  // ==========================================================================
  const countUpElements = document.querySelectorAll('.count-up');
  const counterObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const target = entry.target;
        const limit = parseInt(target.getAttribute('data-target'), 10);
        let count = 0;
        const duration = 1600;
        const steps = 50;
        const stepTime = duration / steps;
        const increment = Math.ceil(limit / steps);

        const updateCount = () => {
          count += increment;
          if (count > limit) count = limit;
          
          if (limit >= 1000) {
            target.innerText = count.toLocaleString('vi-VN') + '+';
          } else {
            target.innerText = count + '+';
          }

          if (count < limit) {
            setTimeout(updateCount, stepTime);
          } else {
            target.innerText = limit >= 1000 ? limit.toLocaleString('vi-VN') + '+' : limit + '+';
          }
        };
        updateCount();
        observer.unobserve(target);
      }
    });
  }, { threshold: 0.2 });

  countUpElements.forEach(el => {
    counterObserver.observe(el);
  });

  // ==========================================================================
  // 7. SCROLL REVEAL ANIMATIONS
  // ==========================================================================
  const revealElements = document.querySelectorAll('.reveal-on-scroll');
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  revealElements.forEach(el => {
    revealObserver.observe(el);
  });

  // ==========================================================================
  // 8. MOBILE MENU DRAWER CONTROLS
  // ==========================================================================
  const menuToggle = document.getElementById('mobile-menu-toggle');
  const mobileDrawer = document.getElementById('sdi-mobile-drawer');
  const mobileDrawerLinks = document.querySelectorAll('.sdi-mobile-nav-link');

  if (menuToggle && mobileDrawer) {
    menuToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      const isOpen = mobileDrawer.classList.contains('open');
      if (isOpen) {
        mobileDrawer.classList.remove('open');
        document.body.classList.remove('drawer-open');
        menuToggle.innerHTML = '<i data-lucide="menu" style="width: 22px; height: 22px;"></i>';
      } else {
        mobileDrawer.classList.add('open');
        document.body.classList.add('drawer-open');
        menuToggle.innerHTML = '<i data-lucide="x" style="width: 22px; height: 22px;"></i>';
      }
      lucide.createIcons();
    });

    mobileDrawerLinks.forEach(link => {
      link.addEventListener('click', () => {
        mobileDrawer.classList.remove('open');
        document.body.classList.remove('drawer-open');
        menuToggle.innerHTML = '<i data-lucide="menu" style="width: 22px; height: 22px;"></i>';
        lucide.createIcons();
      });
    });

    // Mobile Accordion Submenu Toggles
    const mobileAccordions = document.querySelectorAll('.sdi-mobile-accordion');
    mobileAccordions.forEach(acc => {
      const toggle = acc.querySelector('.sdi-mobile-accordion-toggle');
      if (toggle) {
        toggle.addEventListener('click', (e) => {
          e.stopPropagation();
          const isOpen = acc.classList.contains('open');
          // Close other open accordions for accordion effect
          mobileAccordions.forEach(a => {
            if (a !== acc) a.classList.remove('open');
          });
          acc.classList.toggle('open', !isOpen);
        });
      }

      // Close drawer when clicking a sublink
      acc.querySelectorAll('.sdi-mobile-sublink').forEach(sublink => {
        sublink.addEventListener('click', () => {
          mobileDrawer.classList.remove('open');
          document.body.classList.remove('drawer-open');
          menuToggle.innerHTML = '<i data-lucide="menu" style="width: 22px; height: 22px;"></i>';
          lucide.createIcons();
        });
      });
    });

    document.addEventListener('click', (e) => {
      if (!mobileDrawer.contains(e.target) && !menuToggle.contains(e.target) && mobileDrawer.classList.contains('open')) {
        mobileDrawer.classList.remove('open');
        document.body.classList.remove('drawer-open');
        menuToggle.innerHTML = '<i data-lucide="menu" style="width: 22px; height: 22px;"></i>';
        lucide.createIcons();
      }
    });
  }

  // ==========================================================================
  // 9. COLLAPSIBLE MOBILE FILTERS TOGGLE
  // ==========================================================================
  const filterTrigger = document.getElementById('mobile-filter-trigger');
  const filterClose = document.getElementById('mobile-filter-close');
  const filterSidebar = document.getElementById('filter-sidebar');
  const filterOverlay = document.getElementById('filter-overlay');

  if (filterTrigger && filterSidebar && filterOverlay) {
    const openFilter = () => {
      filterSidebar.classList.add('open');
      filterOverlay.classList.add('open');
      document.body.classList.add('drawer-open');
    };

    const closeFilter = () => {
      filterSidebar.classList.remove('open');
      filterOverlay.classList.remove('open');
      document.body.classList.remove('drawer-open');
    };

    filterTrigger.addEventListener('click', (e) => {
      e.stopPropagation();
      openFilter();
    });

    if (filterClose) {
      filterClose.addEventListener('click', closeFilter);
    }

    filterOverlay.addEventListener('click', closeFilter);
  }

  // ==========================================================================
  // 10. ACTIVE LINK AUTO-DETECTION (Bug 22: Tránh sáng đôi menu)
  // ==========================================================================
  const currentPath = window.location.pathname;
  const desktopLinks = document.querySelectorAll('.sdi-nav-link');
  const mobileLinks = document.querySelectorAll('.sdi-mobile-nav-link');

  const updateActiveLink = (links) => {
    links.forEach(link => {
      link.classList.remove('active');
      const href = link.getAttribute('href');
      if (href) {
        let isMatch = false;
        if ((href.includes('giai-phap-ai-server-local-llm.html') || href.includes('nganh-phuc-vu.html')) && (currentPath.includes('giai-phap-ai-server-local-llm.html') || currentPath.includes('nganh-phuc-vu.html'))) {
          isMatch = true;
        } else if (href.includes('may-don-le.html') && (currentPath.includes('may-don-le.html') || currentPath.includes('combo-tron-bo.html') || currentPath.includes('chi-tiet-may-don.html') || currentPath.includes('chi-tiet-linh-kien.html'))) {
          isMatch = true;
        } else if (href.includes('dich-vu-bao-tri.html') && currentPath.includes('dich-vu-bao-tri.html')) {
          isMatch = true;
        } else if (href.includes('ve-navatek.html') && currentPath.includes('ve-navatek.html')) {
          isMatch = true;
        } else if (href.includes('tin-tuc.html') && (currentPath.includes('tin-tuc.html') || currentPath.includes('bai-viet-chi-tiet.html'))) {
          isMatch = true;
        } else if (href.includes('du-an.html') && currentPath.includes('du-an.html')) {
          isMatch = true;
        } else if (href === '/' && (currentPath === '/' || currentPath.endsWith('index.html') || currentPath === '')) {
          isMatch = true;
        }

        if (isMatch) {
          link.classList.add('active');
        }
      }
    });
  };

  updateActiveLink(desktopLinks);
  updateActiveLink(mobileLinks);

  // ==========================================================================
  // 11. FLOATING NAV CAPSULE BACKDROP
  // ==========================================================================
  const navMenu = document.querySelector('.sdi-nav-menu');
  const navLinks = document.querySelectorAll('.sdi-nav-link');
  
  if (navMenu && navLinks.length > 0) {
    navMenu.classList.add('has-capsule');

    const capsule = document.createElement('div');
    capsule.className = 'sdi-nav-capsule';
    navMenu.appendChild(capsule);
    
    const positionCapsule = (linkEl) => {
      if (!linkEl) {
        capsule.style.opacity = '0';
        return;
      }
      const navRect = navMenu.getBoundingClientRect();
      const linkRect = linkEl.getBoundingClientRect();
      capsule.style.left = `${linkRect.left - navRect.left}px`;
      capsule.style.top = `${linkRect.top - navRect.top}px`;
      capsule.style.width = `${linkRect.width}px`;
      capsule.style.height = `${linkRect.height}px`;
      capsule.style.opacity = '1';
    };
    
    const activeLink = navMenu.querySelector('.sdi-nav-link.active');
    if (activeLink) {
      setTimeout(() => {
        positionCapsule(activeLink);
      }, 150);
    }
    
    navLinks.forEach(link => {
      link.addEventListener('mouseenter', () => {
        positionCapsule(link);
      });
    });
    
    navMenu.addEventListener('mouseleave', () => {
      const activeLinkOnLeave = navMenu.querySelector('.sdi-nav-link.active');
      if (activeLinkOnLeave) {
        positionCapsule(activeLinkOnLeave);
      } else {
        capsule.style.opacity = '0';
      }
    });
  }

  // ==========================================================================
  // 12. CUSTOM SELECT DROPDOWN COMPONENT INITIALIZER
  // ==========================================================================
  function initCustomSelects() {
    const customSelects = document.querySelectorAll('.sdi-custom-select');

    customSelects.forEach(select => {
      const trigger = select.querySelector('.sdi-custom-select-trigger');
      const label = select.querySelector('.sdi-custom-select-label');
      const dropdown = select.querySelector('.sdi-custom-select-dropdown');
      const options = select.querySelectorAll('.sdi-custom-select-option');
      const hiddenInput = select.querySelector('input[type="hidden"]');

      if (!trigger || !dropdown) return;

      trigger.addEventListener('click', (e) => {
        e.stopPropagation();
        const isOpen = select.classList.contains('open');

        document.querySelectorAll('.sdi-custom-select.open').forEach(s => {
          if (s !== select) {
            s.classList.remove('open');
            s.querySelector('.sdi-custom-select-trigger')?.setAttribute('aria-expanded', 'false');
          }
        });

        if (isOpen) {
          select.classList.remove('open');
          trigger.setAttribute('aria-expanded', 'false');
        } else {
          select.classList.add('open');
          trigger.setAttribute('aria-expanded', 'true');
        }
      });

      options.forEach(opt => {
        opt.addEventListener('click', (e) => {
          e.stopPropagation();
          const val = opt.getAttribute('data-value') || opt.textContent.trim();
          const text = opt.querySelector('span')?.textContent.trim() || opt.textContent.trim();

          options.forEach(o => {
            o.classList.remove('selected');
            o.setAttribute('aria-selected', 'false');
          });
          opt.classList.add('selected');
          opt.setAttribute('aria-selected', 'true');

          if (label) label.textContent = text;
          if (hiddenInput) {
            hiddenInput.value = val;
            hiddenInput.dispatchEvent(new Event('change', { bubbles: true }));
          }

          select.classList.remove('open');
          trigger.setAttribute('aria-expanded', 'false');
        });
      });
    });

    document.addEventListener('click', (e) => {
      if (!e.target.closest('.sdi-custom-select')) {
        document.querySelectorAll('.sdi-custom-select.open').forEach(s => {
          s.classList.remove('open');
          s.querySelector('.sdi-custom-select-trigger')?.setAttribute('aria-expanded', 'false');
        });
      }
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        document.querySelectorAll('.sdi-custom-select.open').forEach(s => {
          s.classList.remove('open');
          s.querySelector('.sdi-custom-select-trigger')?.setAttribute('aria-expanded', 'false');
        });
      }
    });
  }

  initCustomSelects();

  // ==========================================================================
  // ASUS GOLD PARTNER CERTIFICATE LIGHTBOX MODAL
  // ==========================================================================
  const openCertBtn = document.getElementById('open-cert-modal');
  const certModal = document.getElementById('cert-lightbox-modal');
  const closeCertBtn = document.getElementById('close-cert-modal');

  if (openCertBtn && certModal) {
    openCertBtn.addEventListener('click', () => {
      certModal.classList.add('active');
      document.body.style.overflow = 'hidden';
    });

    if (closeCertBtn) {
      closeCertBtn.addEventListener('click', () => {
        certModal.classList.remove('active');
        document.body.style.overflow = '';
      });
    }

    certModal.addEventListener('click', (e) => {
      if (e.target === certModal) {
        certModal.classList.remove('active');
        document.body.style.overflow = '';
      }
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && certModal.classList.contains('active')) {
        certModal.classList.remove('active');
        document.body.style.overflow = '';
      }
    });
  }

  // Team Cards Slider on Mobile (dich-vu-bao-tri.html)
  const teamTrack = document.getElementById('team-cards-track');
  const teamDotsContainer = document.getElementById('team-slider-dots');
  if (teamTrack && teamDotsContainer) {
    const dots = teamDotsContainer.querySelectorAll('.team-dot');
    const cards = teamTrack.querySelectorAll('.team-member-card');

    teamTrack.addEventListener('scroll', () => {
      const scrollLeft = teamTrack.scrollLeft;
      const cardWidth = teamTrack.offsetWidth;
      if (cardWidth > 0) {
        const activeIndex = Math.min(Math.round(scrollLeft / cardWidth), dots.length - 1);
        dots.forEach((dot, idx) => {
          if (idx === activeIndex) {
            dot.classList.add('active');
          } else {
            dot.classList.remove('active');
          }
        });
      }
    }, { passive: true });

    dots.forEach((dot, idx) => {
      dot.addEventListener('click', () => {
        if (cards[idx]) {
          cards[idx].scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
        }
      });
    });
  }

  // ==========================================================================
  // 13. BLOG & KNOWLEDGE HUB SYSTEM (tin-tuc.html & bai-viet-chi-tiet.html)
  // ==========================================================================
  const blogFilterContainer = document.getElementById('blog-filter-container');
  const articlesGrid = document.getElementById('articles-grid');
  const spotlightCard = document.querySelector('.blog-spotlight-card');
  const blogSearchInput = document.getElementById('blog-search-input');
  const quickTags = document.querySelectorAll('.hero-quick-tag');

  if (blogFilterContainer && articlesGrid) {
    const filterBtns = blogFilterContainer.querySelectorAll('.blog-filter-btn');
    const cards = articlesGrid.querySelectorAll('.blog-card');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const cat = btn.getAttribute('data-category');
        
        if (spotlightCard) {
          const spotCat = spotlightCard.getAttribute('data-category');
          if (cat === 'all' || spotCat === cat) {
            spotlightCard.style.display = 'flex';
          } else {
            spotlightCard.style.display = 'none';
          }
        }

        cards.forEach(card => {
          const cardCat = card.getAttribute('data-category');
          if (cat === 'all' || cardCat === cat) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });

    if (blogSearchInput) {
      blogSearchInput.addEventListener('input', (e) => {
        const query = e.target.value.toLowerCase().trim();
        
        cards.forEach(card => {
          const title = card.querySelector('.blog-card-title')?.textContent.toLowerCase() || '';
          const excerpt = card.querySelector('.blog-card-excerpt')?.textContent.toLowerCase() || '';
          const tag = card.querySelector('.blog-cat-badge, .blog-card-tag-floating')?.textContent.toLowerCase() || '';

          if (!query || title.includes(query) || excerpt.includes(query) || tag.includes(query)) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });

        if (spotlightCard) {
          const spotTitle = spotlightCard.querySelector('.blog-spotlight-title')?.textContent.toLowerCase() || '';
          const spotDesc = spotlightCard.querySelector('.blog-spotlight-desc')?.textContent.toLowerCase() || '';
          const spotTag = spotlightCard.querySelector('.blog-cat-badge, .blog-card-tag-floating')?.textContent.toLowerCase() || '';
          if (!query || spotTitle.includes(query) || spotDesc.includes(query) || spotTag.includes(query)) {
            spotlightCard.style.display = 'flex';
          } else {
            spotlightCard.style.display = 'none';
          }
        }
      });
    }

    if (quickTags.length > 0 && blogSearchInput) {
      quickTags.forEach(btn => {
        btn.addEventListener('click', () => {
          const tagVal = btn.getAttribute('data-tag');
          if (tagVal) {
            blogSearchInput.value = tagVal;
            blogSearchInput.dispatchEvent(new Event('input'));
            blogSearchInput.focus();
          }
        });
      });
    }
  }

  // Table of Contents Scrollspy for Single Post (bai-viet-chi-tiet.html)
  const tocLinks = document.querySelectorAll('.article-toc-link');
  if (tocLinks.length > 0) {
    const headings = document.querySelectorAll('.article-content-body h2[id]');
    
    window.addEventListener('scroll', () => {
      let currentId = '';
      headings.forEach(heading => {
        const top = heading.getBoundingClientRect().top;
        if (top <= 140) {
          currentId = heading.getAttribute('id');
        }
      });

      if (currentId) {
        tocLinks.forEach(link => {
          if (link.getAttribute('href') === `#${currentId}`) {
            link.classList.add('active');
          } else {
            link.classList.remove('active');
          }
        });
      }
    });
  }

  // ==========================================================================
  // 14. LOTTIE HOVER ANIMATIONS FOR SOLUTIONS CARDS (sdipresence.com clone)
  // ==========================================================================
  const lottieContainers = document.querySelectorAll('.home-solutions-item-anim');
  lottieContainers.forEach(container => {
    const path = container.getAttribute('data-lottie-path');
    if (!path || typeof lottie === 'undefined') return;

    try {
      const anim = lottie.loadAnimation({
        container: container,
        renderer: 'svg',
        loop: false,
        autoplay: true,
        path: path
      });

      const parentCard = container.closest('.home-solutions-item');
      if (parentCard) {
        parentCard.addEventListener('mouseenter', () => {
          anim.setDirection(1);
          anim.play();
        });
        parentCard.addEventListener('mouseleave', () => {
          anim.setDirection(-1);
          anim.play();
        });
      }
    } catch (err) {
      console.warn('Lottie load error:', err);
    }
  });

  // ==========================================================================
  // 15. UNIVERSAL MOBILE SLIDER & SLIDE DOTS ENGINE (All multi-card sections)
  // ==========================================================================
  function initUniversalMobileSliders() {
    // Select all containers configured as mobile sliders
    const sliderContainers = document.querySelectorAll(
      '[data-mobile-slider="true"], #solutions-slider, .solutions-grid-slider, .sdi-mobile-slider'
    );

    sliderContainers.forEach((slider) => {
      // Find direct item children, excluding dot containers
      const items = Array.from(slider.children).filter(
        el => !el.classList.contains('sdi-slide-dots') && 
              !el.classList.contains('solutions-slider-dots') &&
              !el.classList.contains('sdi-slider-dots')
      );

      if (items.length <= 1) return;

      // Check if there is an existing dots container next to the slider
      let dotsContainer = slider.nextElementSibling;
      const isExistingDots = dotsContainer && (
        dotsContainer.classList.contains('sdi-slide-dots') || 
        dotsContainer.classList.contains('solutions-slider-dots') ||
        dotsContainer.classList.contains('sdi-slider-dots')
      );

      if (!isExistingDots) {
        dotsContainer = document.createElement('div');
        dotsContainer.className = 'sdi-slide-dots';
        if (slider.closest('.tech-dot-grid-dark') || slider.closest('.dark-section') || slider.closest('#stats-section')) {
          dotsContainer.classList.add('dark');
        }
        slider.parentNode.insertBefore(dotsContainer, slider.nextSibling);
      }

      // Populate dots if empty or mismatched
      let dots = Array.from(dotsContainer.querySelectorAll('.sdi-slide-dot, .solutions-dot'));
      if (dots.length !== items.length) {
        dotsContainer.innerHTML = '';
        items.forEach((_, idx) => {
          const dot = document.createElement('button');
          dot.type = 'button';
          dot.className = 'sdi-slide-dot' + (idx === 0 ? ' active' : '');
          dot.setAttribute('aria-label', `Xem slide ${idx + 1}`);
          dotsContainer.appendChild(dot);
        });
        dots = Array.from(dotsContainer.querySelectorAll('.sdi-slide-dot, .solutions-dot'));
      }

      // Dot click listener to scroll smoothly to corresponding slide
      dots.forEach((dot, index) => {
        dot.onclick = (e) => {
          e.preventDefault();
          if (items[index]) {
            const targetCard = items[index];
            const scrollLeft = targetCard.offsetLeft - slider.offsetLeft;
            slider.scrollTo({
              left: scrollLeft,
              behavior: 'smooth'
            });
            dots.forEach((d, i) => d.classList.toggle('active', i === index));
          }
        };
      });

      // Passive scroll listener to update active dot
      let scrollTimeout;
      slider.addEventListener('scroll', () => {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
          const scrollLeft = slider.scrollLeft;
          let closestIndex = 0;
          let minDistance = Infinity;

          items.forEach((item, index) => {
            const itemOffset = item.offsetLeft - slider.offsetLeft;
            const distance = Math.abs(scrollLeft - itemOffset);
            if (distance < minDistance) {
              minDistance = distance;
              closestIndex = index;
            }
          });

          dots.forEach((d, i) => d.classList.toggle('active', i === closestIndex));
        }, 35);
      }, { passive: true });
    });
  }

  // Initialize immediately and also on dynamic events
  initUniversalMobileSliders();
  window.addEventListener('resize', () => {
    // Debounced re-init
    clearTimeout(window._sliderResizeTimeout);
    window._sliderResizeTimeout = setTimeout(initUniversalMobileSliders, 250);
  });


  // ==========================================================================
  // 16. DYNAMIC CURTAIN REVEAL FOOTER & BINARY SCROLL ANIMATION
  // ==========================================================================
  const adjustCurtainReveal = () => {
    const footer = document.querySelector('.footer-sdi');
    const wrapper = document.querySelector('.sdi-page-wrapper');
    if (footer && wrapper) {
      if (window.innerWidth >= 1024) {
        footer.style.position = 'fixed';
        footer.style.height = 'auto';
        const naturalHeight = footer.offsetHeight;
        footer.style.height = `${naturalHeight}px`;
        wrapper.style.marginBottom = `${naturalHeight}px`;
      } else {
        footer.style.position = 'static';
        footer.style.height = 'auto';
        wrapper.style.marginBottom = '0px';
      }
    }
  };

  window.addEventListener('load', adjustCurtainReveal);
  window.addEventListener('resize', adjustCurtainReveal);
  setTimeout(adjustCurtainReveal, 100);
  setTimeout(adjustCurtainReveal, 500);

  const binaryContainer = document.querySelector('.binary-matrix-container');
  const ctaGrad = document.querySelector('.home-cta-anims-grad');
  const ctaCode = document.querySelector('.home-cta-anims-code-img');
  const binaryStreams = document.querySelector('.binary-streams-wrapper');
  const strandSvgs = document.querySelectorAll('.sdi-strand-svg');

  if (binaryContainer) {
    const updateCtaScrollAnim = () => {
      const rect = binaryContainer.getBoundingClientRect();
      const windowHeight = window.innerHeight;
      const relativeScroll = windowHeight - rect.top;
      
      if (relativeScroll > 0 && rect.bottom > 0) {
        if (ctaCode) {
          const translateY = (relativeScroll * 0.32) - 130;
          ctaCode.style.transform = `translateX(-50%) translateY(${translateY}px) translateZ(0)`;
          const progress = Math.min(Math.max(relativeScroll / (windowHeight * 0.65), 0), 1);
          ctaCode.style.opacity = (progress * 0.35).toFixed(2);
        }
        if (ctaGrad) {
          const progress = Math.min(Math.max(relativeScroll / (windowHeight * 0.65), 0), 1);
          ctaGrad.style.opacity = progress.toFixed(2);
        }
        if (binaryStreams) {
          const progress = Math.min(Math.max(relativeScroll / (windowHeight * 0.65), 0), 1);
          binaryStreams.style.opacity = progress.toFixed(2);
        }
        if (strandSvgs.length > 0) {
          const progress = Math.min(Math.max(relativeScroll / (windowHeight * 0.65), 0), 1);
          strandSvgs.forEach(svg => {
            svg.style.opacity = (0.25 + progress * 0.6).toFixed(2);
          });
        }
      } else if (relativeScroll <= 0) {
        if (ctaGrad) ctaGrad.style.opacity = 0;
        if (binaryStreams) binaryStreams.style.opacity = 0;
        if (ctaCode) ctaCode.style.opacity = 0;
      }
    };

    window.addEventListener('scroll', updateCtaScrollAnim, { passive: true });
    updateCtaScrollAnim();
  }

  // Initialize Lucide icons
  if (window.lucide) {
    window.lucide.createIcons();
  }
});
