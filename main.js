/**
 * NAVATEK.VN (v3.1) - B2B IT INFRASTRUCTURE & AUTOMATION JS LOGIC
 */

document.addEventListener('DOMContentLoaded', () => {
  console.log('NavaTek B2B IT Logic Initialized.');

  // ==========================================================================
  // 1. SEARCH SUGGESTION LOGIC (BOD Requirement)
  // ==========================================================================
  const searchInput = document.getElementById('search-input-field');
  const suggestionDropdown = document.getElementById('search-suggestion-dropdown');

  const productsData = [
    {
      title: "Mini PC Intel N100 · 8GB / 256GB",
      price: "4.990.000₫",
      url: "/may-don-le.html",
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
      url: "/may-don-le.html",
      image: "/images/laser.png"
    },
    {
      title: "Gói nâng cấp RAM 64GB + SSD 2TB",
      price: "9.900.000₫",
      url: "/may-don-le.html",
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
  // 3. QUOTE MODAL CONTROLS
  // ==========================================================================
  const modalOverlay = document.getElementById('quote-modal');
  const openModalBtns = document.querySelectorAll('.trigger-quote-modal');
  const closeModalBtn = document.getElementById('close-quote-modal');
  const quoteForm = document.getElementById('quote-request-form');
  const footerForm = document.getElementById('footer-lead-form');

  openModalBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      modalOverlay?.classList.add('open');
      
      // Close mobile drawer if open
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

  closeModalBtn?.addEventListener('click', () => {
    modalOverlay?.classList.remove('open');
  });

  modalOverlay?.addEventListener('click', (e) => {
    if (e.target === modalOverlay) {
      modalOverlay.classList.remove('open');
    }
  });

  const handleFormSubmit = (e, formElement) => {
    e.preventDefault();
    const submitBtn = formElement.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    // Set loading state
    submitBtn.disabled = true;
    submitBtn.innerHTML = `<span>Đang gửi...</span>`;

    setTimeout(() => {
      alert('⚡ Gửi yêu cầu thành công! Kỹ sư NavaTek sẽ liên hệ tư vấn giải pháp trong vòng 24 giờ.');
      modalOverlay?.classList.remove('open');
      formElement.reset();
      submitBtn.disabled = false;
      submitBtn.innerHTML = originalText;
    }, 1200);
  };

  if (quoteForm) {
    quoteForm.addEventListener('submit', (e) => handleFormSubmit(e, quoteForm));
  }
  if (footerForm) {
    footerForm.addEventListener('submit', (e) => handleFormSubmit(e, footerForm));
  }

  // ==========================================================================
  // 4. INTERACTIVE PRODUCT GALLERY SWITCHER (Details Page)
  // ==========================================================================
  const thumbnailButtons = document.querySelectorAll('.thumbnail-btn');
  const mainProductPreviewImg = document.getElementById('main-product-preview-img');

  thumbnailButtons.forEach(btn => {
    const handler = () => {
      thumbnailButtons.forEach(t => t.classList.remove('active'));
      btn.classList.add('active');
      const targetSrc = btn.getAttribute('data-target-src');
      if (mainProductPreviewImg && targetSrc) {
        mainProductPreviewImg.style.opacity = '0.3';
        mainProductPreviewImg.style.transform = 'scale(0.95)';
        setTimeout(() => {
          mainProductPreviewImg.src = targetSrc;
          mainProductPreviewImg.style.opacity = '1';
          mainProductPreviewImg.style.transform = 'scale(1)';
        }, 150);
      }
    };
    btn.addEventListener('click', handler);
    btn.addEventListener('mouseenter', handler);
  });

  // ==========================================================================
  // 5. INTERACTIVE UPGRADES (CROSS-SELL CARD SELECTION)
  // ==========================================================================
  const upgradeCards = document.querySelectorAll('.sdi-card-solid button.sdi-btn-orange');

  upgradeCards.forEach(btn => {
    btn.addEventListener('click', (e) => {
      const parentCard = btn.closest('.sdi-card-solid');
      if (parentCard && parentCard.querySelector('h4') && parentCard.querySelector('div[style*="var(--sdi-orange-cta)"]')) {
        e.stopPropagation();
        e.preventDefault();
        
        const isAdded = btn.getAttribute('data-added') === 'true';
        if (!isAdded) {
          btn.setAttribute('data-added', 'true');
          btn.style.backgroundColor = '#10B981';
          btn.style.boxShadow = '0 8px 24px rgba(16, 185, 129, 0.25)';
          btn.innerHTML = `<i data-lucide="check-circle" style="width: 15px; height: 15px; color: #FFFFFF;"></i><span>Đã thêm</span>`;
          parentCard.style.borderColor = '#10B981';
          lucide.createIcons();
        } else {
          btn.setAttribute('data-added', 'false');
          btn.style.backgroundColor = 'var(--sdi-orange-cta)';
          btn.style.boxShadow = '0 8px 24px rgba(232, 134, 46, 0.25)';
          btn.innerHTML = `<span>Thêm vào đơn</span>`;
          parentCard.style.borderColor = 'var(--sdi-border)';
        }
      }
    });
  });

  // ==========================================================================
  // 6. RUNNING NUMBER COUNTERS (BOD/UX Requirement)
  // ==========================================================================
  const countUpElements = document.querySelectorAll('.count-up');
  const counterObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const target = entry.target;
        const limit = parseInt(target.getAttribute('data-target'), 10);
        let count = 0;
        const duration = 1600; // 1.6 seconds animation duration
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
  // 7. DYNAMIC CURTAIN REVEAL FOOTER (UX Alignment)
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

  // ==========================================================================
  // 8. SCROLL REVEAL ANIMATIONS (sdipresence.com feel)
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
  // 9. SMOOTH JS PARALLAX FOR BINARY CODE BACKGROUND GRID
  // ==========================================================================
  const codeBg = document.querySelector('.home-cta-anims-code-img');
  const ctaSection = document.querySelector('.binary-matrix-container');
  const gradientOverlay = document.querySelector('.home-cta-anims-grad');
  const streamsWrapper = document.querySelector('.binary-streams-wrapper');
  
  if (codeBg && ctaSection) {
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset || document.documentElement.scrollTop;
      const elementOffsetTop = ctaSection.offsetTop;
      const viewHeight = window.innerHeight;
      
      // Calculate scroll progress starting from when section enters the viewport
      const relativeScroll = scrolled - (elementOffsetTop - viewHeight);
      
      if (relativeScroll > 0 && scrolled < elementOffsetTop + ctaSection.offsetHeight) {
        // Move the grid at 32% of scroll speed for a strong, visible parallax
        const translateY = (relativeScroll * 0.32) - 130;
        codeBg.style.transform = `translateX(-50%) translateY(${translateY}px) translateZ(0)`;
        
        // Calculate transition progress (fades in fully over 65% of viewport height scroll)
        const progress = Math.min(Math.max(relativeScroll / (viewHeight * 0.65), 0), 1);
        
        if (gradientOverlay) {
          gradientOverlay.style.opacity = progress;
        }
        if (streamsWrapper) {
          streamsWrapper.style.opacity = progress;
        }
        codeBg.style.opacity = progress * 0.35; // Fades in up to its designed 0.35 max opacity
      } else if (relativeScroll <= 0) {
        // Reset when scrolled back above
        if (gradientOverlay) gradientOverlay.style.opacity = 0;
        if (streamsWrapper) streamsWrapper.style.opacity = 0;
        codeBg.style.opacity = 0;
      }
    });
  }

  // ==========================================================================
  // 10. MOBILE MENU BURGER DRAWER CONTROLS
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

    // Close drawer when clicking links
    mobileDrawerLinks.forEach(link => {
      link.addEventListener('click', () => {
        mobileDrawer.classList.remove('open');
        document.body.classList.remove('drawer-open');
        menuToggle.innerHTML = '<i data-lucide="menu" style="width: 22px; height: 22px;"></i>';
        lucide.createIcons();
      });
    });

    // Close drawer when clicking outside drawer content
    document.addEventListener('click', (e) => {
      if (!mobileDrawer.contains(e.target) && !menuToggle.contains(e.target) && mobileDrawer.classList.contains('open') && (mobileDrawer.classList.remove('open'),document.body.classList.remove('drawer-open'),menuToggle.innerHTML='<i data-lucide="menu" style="width: 22px; height: 22px;"></i>',lucide.createIcons()));
    });
  }

  // ==========================================================================
  // 10B. COLLAPSIBLE MOBILE FILTERS TOGGLE
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
  // 11. ACTIVE LINK AUTO-DETECTION
  // ==========================================================================
  const currentPath = window.location.pathname;
  const desktopLinks = document.querySelectorAll('.sdi-nav-link');
  const mobileLinks = document.querySelectorAll('.sdi-mobile-nav-link');

  const updateActiveLink = (links) => {
    links.forEach(link => {
      link.classList.remove('active');
      const href = link.getAttribute('href');
      if (href) {
        // Exact match or sub-page match
        const isExactMatch = currentPath === href || currentPath.endsWith(href);
        let isMatch = isExactMatch;
        if (href.includes('may-don-le.html') && (currentPath.includes('may-don-le.html') || currentPath.includes('combo-tron-bo.html'))) {
          isMatch = true;
        }
        if (href.includes('dich-vu-bao-tri.html') && currentPath.includes('dich-vu-bao-tri.html')) {
          isMatch = true;
        }
        if (href === '/' && (currentPath === '/' || currentPath.endsWith('index.html') || currentPath === '')) {
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
});
