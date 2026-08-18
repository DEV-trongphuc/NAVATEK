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
    const originalText = submitBtn.innerHTML;
    
    // Set loading state
    submitBtn.disabled = true;
    submitBtn.innerHTML = `<span class="sdi-spinner"></span><span>Đang gửi...</span>`;

    setTimeout(() => {
      showSuccessToast(
        'Gửi yêu cầu thành công!',
        'Kỹ sư NavaTek sẽ liên hệ tư vấn cấu hình chi tiết trong vòng 15-30 phút.'
      );
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
        footer.style.bottom = '0';
        footer.style.left = '0';
        footer.style.right = '0';
        footer.style.width = '100%';
        footer.style.zIndex = '1';
        footer.style.height = 'auto';
        const naturalHeight = footer.offsetHeight;
        footer.style.height = `${naturalHeight}px`;
        wrapper.style.marginBottom = `${naturalHeight}px`;
      } else {
        footer.style.position = 'static';
        footer.style.bottom = '';
        footer.style.left = '';
        footer.style.right = '';
        footer.style.width = '';
        footer.style.zIndex = '';
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

  // ==========================================================================
  // 12. FLOATING NAV CAPSULE BACKDROP (Vercel-style Menu Indicator)
  // ==========================================================================
  const navMenu = document.querySelector('.sdi-nav-menu');
  const navLinks = document.querySelectorAll('.sdi-nav-link');
  
  if (navMenu && navLinks.length > 0) {
    // Add class for CSS override overrides
    navMenu.classList.add('has-capsule');

    const capsule = document.createElement('div');
    capsule.className = 'sdi-nav-capsule';
    navMenu.appendChild(capsule);
    
    const positionCapsule = (linkEl) => {
      if (!linkEl) {
        capsule.style.opacity = '0';
        return;
      }
      capsule.style.left = `${linkEl.offsetLeft}px`;
      capsule.style.top = `${linkEl.offsetTop}px`;
      capsule.style.width = `${linkEl.offsetWidth}px`;
      capsule.style.height = `${linkEl.offsetHeight}px`;
      capsule.style.opacity = '1';
    };
    
    // Initial position based on active page link
    const activeLink = navMenu.querySelector('.sdi-nav-link.active');
    if (activeLink) {
      // Small delay to make sure layouts and widths are fully computed by browser
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
  // 13. LOTTIE HOVER ANIMATIONS FOR SOLUTIONS CARDS (sdipresence.com 100% replication)
  // ==========================================================================
  const lottieContainers = document.querySelectorAll('.home-solutions-item-anim');
  lottieContainers.forEach(container => {
    const path = container.getAttribute('data-lottie-path');
    if (!path) return;

    const anim = lottie.loadAnimation({
      container: container,
      renderer: 'svg',
      loop: false,
      autoplay: false,
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
  });

  // ==========================================================================
  // 14. INTERACTIVE PARALLAX MOUSE MOVE & HOLOGRAPHIC TILT FOR HERO SECTION
  // ==========================================================================
  const heroSection = document.querySelector('.tech-dot-grid-light');
  if (heroSection) {
    const parallaxElements = heroSection.querySelectorAll('.sdi-parallax-shape');
    const graphicContainer = heroSection.querySelector('.hero-floating-graphic');
    
    heroSection.addEventListener('mousemove', (e) => {
      const rect = heroSection.getBoundingClientRect();
      const x = e.clientX - rect.left - rect.width / 2;
      const y = e.clientY - rect.top - rect.height / 2;
      
      // Move abstract shapes based on speed attribute
      parallaxElements.forEach(el => {
        const speed = parseFloat(el.getAttribute('data-parallax-speed') || '0.05');
        const moveX = x * speed;
        const moveY = y * speed;
        el.style.transform = `translate(${moveX}px, ${moveY}px)`;
      });
      
      // Stunning 3D holographic card tilt effect for the 3D Hero Illustration box
      if (graphicContainer) {
        const tiltX = (y / rect.height) * -12; // Max tilt 12 degrees
        const tiltY = (x / rect.width) * 12;
        graphicContainer.style.transform = `perspective(1000px) rotateX(${tiltX}deg) rotateY(${tiltY}deg) translateY(-5px)`;
        graphicContainer.style.transition = 'transform 0.05s ease-out';
      }
    });
    
    // Reset transforms when mouse leaves
    heroSection.addEventListener('mouseleave', () => {
      parallaxElements.forEach(el => {
        el.style.transform = '';
        el.style.transition = 'transform 0.4s ease-out';
      });
      if (graphicContainer) {
        graphicContainer.style.transform = '';
        graphicContainer.style.transition = 'transform 0.4s ease-out';
      }
    });
  }

  // ==========================================================================
  // 15. MOBILE SOLUTIONS CAROUSEL & SLIDE DOTS SYNC
  // ==========================================================================
  const solutionsSlider = document.getElementById('solutions-slider');
  const solutionsDotsContainer = document.getElementById('solutions-dots');

  if (solutionsSlider && solutionsDotsContainer) {
    const dots = solutionsDotsContainer.querySelectorAll('.solutions-dot');
    const items = solutionsSlider.querySelectorAll('.home-solutions-item');

    // Click dot to smoothly scroll to corresponding card
    dots.forEach((dot, index) => {
      dot.addEventListener('click', (e) => {
        e.preventDefault();
        if (items[index]) {
          const targetCard = items[index];
          const scrollLeft = targetCard.offsetLeft - solutionsSlider.offsetLeft;
          solutionsSlider.scrollTo({
            left: scrollLeft,
            behavior: 'smooth'
          });
          dots.forEach((d, i) => d.classList.toggle('active', i === index));
        }
      });
    });

    // Update active dot on scroll / swipe
    let scrollTimeout;
    solutionsSlider.addEventListener('scroll', () => {
      clearTimeout(scrollTimeout);
      scrollTimeout = setTimeout(() => {
        const scrollLeft = solutionsSlider.scrollLeft;
        let closestIndex = 0;
        let minDistance = Infinity;

        items.forEach((item, index) => {
          const itemOffset = item.offsetLeft - solutionsSlider.offsetLeft;
          const distance = Math.abs(scrollLeft - itemOffset);
          if (distance < minDistance) {
            minDistance = distance;
            closestIndex = index;
          }
        });

        dots.forEach((d, i) => d.classList.toggle('active', i === closestIndex));
      }, 40);
    }, { passive: true });
  }

  // ==========================================================================
  // 16. PREMIUM CUSTOM SELECT DROPDOWN COMPONENT INITIALIZER
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

      // Toggle dropdown open/close
      trigger.addEventListener('click', (e) => {
        e.stopPropagation();
        const isOpen = select.classList.contains('open');

        // Close all other open custom selects first
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

      // Handle Option Selection
      options.forEach(opt => {
        opt.addEventListener('click', (e) => {
          e.stopPropagation();
          const val = opt.getAttribute('data-value') || opt.textContent.trim();
          const text = opt.querySelector('span')?.textContent.trim() || opt.textContent.trim();

          // Update active state
          options.forEach(o => {
            o.classList.remove('selected');
            o.setAttribute('aria-selected', 'false');
          });
          opt.classList.add('selected');
          opt.setAttribute('aria-selected', 'true');

          // Update trigger label and hidden input
          if (label) label.textContent = text;
          if (hiddenInput) {
            hiddenInput.value = val;
            hiddenInput.dispatchEvent(new Event('change', { bubbles: true }));
          }

          // Close dropdown
          select.classList.remove('open');
          trigger.setAttribute('aria-expanded', 'false');
        });
      });
    });

    // Close any open custom select when clicking outside
    document.addEventListener('click', (e) => {
      if (!e.target.closest('.sdi-custom-select')) {
        document.querySelectorAll('.sdi-custom-select.open').forEach(s => {
          s.classList.remove('open');
          s.querySelector('.sdi-custom-select-trigger')?.setAttribute('aria-expanded', 'false');
        });
      }
    });

    // Close on Escape key
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
  // ASUS GOLD PARTNER CERTIFICATE LIGHTBOX MODAL (Feedback 8)
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

  // ==========================================================================
  // BLOG & KNOWLEDGE HUB LOGIC (tin-tuc.html & bai-viet-chi-tiet.html)
  // ==========================================================================
  const blogFilterContainer = document.getElementById('blog-filter-container');
  const articlesGrid = document.getElementById('articles-grid');
  const spotlightCard = document.querySelector('.blog-spotlight-card');
  const blogSearchInput = document.getElementById('blog-search-input');

  if (blogFilterContainer && articlesGrid) {
    const filterBtns = blogFilterContainer.querySelectorAll('.blog-filter-btn');
    const cards = articlesGrid.querySelectorAll('.blog-card');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const cat = btn.getAttribute('data-category');
        
        // Filter spotlight
        if (spotlightCard) {
          const spotCat = spotlightCard.getAttribute('data-category');
          if (cat === 'all' || spotCat === cat) {
            spotlightCard.style.display = 'grid';
          } else {
            spotlightCard.style.display = 'none';
          }
        }

        // Filter cards
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

    // Blog Live Search
    if (blogSearchInput) {
      blogSearchInput.addEventListener('input', (e) => {
        const query = e.target.value.toLowerCase().trim();
        
        cards.forEach(card => {
          const title = card.querySelector('.blog-card-title')?.textContent.toLowerCase() || '';
          const excerpt = card.querySelector('.blog-card-excerpt')?.textContent.toLowerCase() || '';
          const tag = card.querySelector('.blog-cat-badge')?.textContent.toLowerCase() || '';

          if (!query || title.includes(query) || excerpt.includes(query) || tag.includes(query)) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });

        if (spotlightCard) {
          const spotTitle = spotlightCard.querySelector('.blog-spotlight-title')?.textContent.toLowerCase() || '';
          const spotDesc = spotlightCard.querySelector('.blog-spotlight-desc')?.textContent.toLowerCase() || '';
          if (!query || spotTitle.includes(query) || spotDesc.includes(query)) {
            spotlightCard.style.display = 'grid';
          } else {
            spotlightCard.style.display = 'none';
          }
        }
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
});

