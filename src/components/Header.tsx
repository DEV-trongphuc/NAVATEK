import React, { useState, useEffect } from 'react';
import { Search, ChevronDown, PhoneCall, Menu, X, ArrowRight } from 'lucide-react';

interface HeaderProps {
  onOpenQuote: () => void;
  activeSection: string;
  setActiveSection: (sec: string) => void;
}

export const Header: React.FC<HeaderProps> = ({ onOpenQuote, activeSection, setActiveSection }) => {
  const [scrolled, setScrolled] = useState(false);
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
  const [activeDropdown, setActiveDropdown] = useState<string | null>(null);

  useEffect(() => {
    const handleScroll = () => {
      setScrolled(window.scrollY > 20);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const navLinks = [
    { id: 'bento', label: 'Tổng Quan' },
    { 
      id: 'combos-machines', 
      label: 'Giải Pháp & Thiết Bị',
      hasDropdown: true,
      items: [
        { title: 'Combo Trọn Bộ Xưởng Chế Tạo', desc: 'Dây chuyền sản xuất đồng bộ 4.0' },
        { title: 'Máy Cắt Laser CNC', desc: 'Công suất từ 3kW đến 30kW' },
        { title: 'Máy Chấn Hydro CNC', desc: 'Hệ thống gấp uốn chính xác cao' },
        { title: 'Robot Hàn & Tự Động Hóa', desc: 'Cánh tay robot cấp phôi tự động' }
      ]
    },
    { id: 'industries', label: 'Ngành Phục Vụ' },
    { id: 'case-studies', label: 'Dự Án Tiêu Biểu' },
    { id: 'insights', label: 'Tri Thức & Tin Tức' },
  ];

  return (
    <header className="fixed top-0 left-0 right-0 z-50 px-4 sm:px-8 pt-4 transition-all duration-300">
      <div className={`max-w-7xl mx-auto rounded-full px-6 py-3 transition-all duration-300 flex items-center justify-between ${
        scrolled ? 'glass-nav shadow-lg border border-white/60 backdrop-blur-md' : 'bg-white/90 shadow-sm border border-slate-200/80 backdrop-blur-sm'
      }`}>
        
        {/* Logo NAVATEK */}
        <div 
          onClick={() => { setActiveSection('bento'); window.scrollTo({ top: 0, behavior: 'smooth' }); }}
          className="flex items-center gap-3 cursor-pointer group"
        >
          <div className="w-10 h-10 rounded-xl bg-gradient-to-tr from-[#0F2B5C] to-[#2563EB] flex items-center justify-center text-white font-bold text-xl shadow-md group-hover:scale-105 transition-transform">
            <span className="font-['Outfit'] tracking-wider">N</span>
          </div>
          <div>
            <div className="flex items-center gap-1.5">
              <span className="font-['Outfit'] font-extrabold text-xl tracking-tight text-[#0F2B5C]">NAVATEK</span>
              <span className="text-[10px] font-bold px-1.5 py-0.5 rounded bg-blue-100 text-[#2563EB]">v3.1</span>
            </div>
            <p className="text-[10px] text-slate-500 font-medium tracking-wide uppercase">Industrial Solutions</p>
          </div>
        </div>

        {/* Desktop Navigation Links */}
        <nav className="hidden lg:flex items-center gap-1 xl:gap-2">
          {navLinks.map((link) => (
            <div 
              key={link.id} 
              className="relative group"
              onMouseEnter={() => link.hasDropdown && setActiveDropdown(link.id)}
              onMouseLeave={() => setActiveDropdown(null)}
            >
              <button
                onClick={() => {
                  setActiveSection(link.id);
                  const el = document.getElementById(link.id);
                  if (el) el.scrollIntoView({ behavior: 'smooth' });
                }}
                className={`px-4 py-2 rounded-full text-sm font-semibold transition-all flex items-center gap-1 ${
                  activeSection === link.id
                    ? 'text-[#2563EB] bg-blue-50/80'
                    : 'text-slate-700 hover:text-[#0F2B5C] hover:bg-slate-100/70'
                }`}
              >
                {link.label}
                {link.hasDropdown && <ChevronDown className="w-3.5 h-3.5 opacity-60 group-hover:rotate-180 transition-transform" />}
              </button>

              {/* Dropdown Menu */}
              {link.hasDropdown && activeDropdown === link.id && (
                <div className="absolute top-full left-0 mt-2 w-80 bg-white rounded-2xl p-4 shadow-xl border border-slate-100 animate-in fade-in slide-in-from-top-2 duration-200">
                  <div className="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2 px-2">Danh mục thiết bị</div>
                  {link.items?.map((item, idx) => (
                    <div 
                      key={idx}
                      onClick={() => {
                        setActiveSection('combos-machines');
                        const el = document.getElementById('combos-machines');
                        if (el) el.scrollIntoView({ behavior: 'smooth' });
                        setActiveDropdown(null);
                      }}
                      className="p-2.5 rounded-xl hover:bg-blue-50/60 cursor-pointer transition-colors group/item"
                    >
                      <div className="text-sm font-bold text-[#0F2B5C] group-hover/item:text-[#2563EB] flex items-center justify-between">
                        {item.title}
                        <ArrowRight className="w-3.5 h-3.5 opacity-0 group-hover/item:opacity-100 group-hover/item:translate-x-1 transition-all" />
                      </div>
                      <div className="text-xs text-slate-500 mt-0.5">{item.desc}</div>
                    </div>
                  ))}
                </div>
              )}
            </div>
          ))}
        </nav>

        {/* Right Action Buttons */}
        <div className="hidden sm:flex items-center gap-3">
          <button className="w-9 h-9 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-700 flex items-center justify-center transition-colors">
            <Search className="w-4 h-4" />
          </button>

          <button 
            onClick={onOpenQuote}
            className="sdi-btn-primary text-sm shadow-md"
          >
            <PhoneCall className="w-4 h-4" />
            <span>Yêu Cầu Báo Giá</span>
          </button>
        </div>

        {/* Mobile Menu Toggle */}
        <button 
          onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
          className="lg:hidden w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-700"
        >
          {mobileMenuOpen ? <X className="w-5 h-5" /> : <Menu className="w-5 h-5" />}
        </button>
      </div>

      {/* Mobile Drawer */}
      {mobileMenuOpen && (
        <div className="lg:hidden fixed inset-x-4 top-20 bg-white rounded-3xl p-6 shadow-2xl border border-slate-100 z-50 animate-in fade-in slide-in-from-top-4">
          <div className="flex flex-col gap-3">
            {navLinks.map((link) => (
              <button
                key={link.id}
                onClick={() => {
                  setActiveSection(link.id);
                  setMobileMenuOpen(false);
                  const el = document.getElementById(link.id);
                  if (el) el.scrollIntoView({ behavior: 'smooth' });
                }}
                className="text-left px-4 py-3 rounded-xl font-bold text-slate-800 hover:bg-blue-50 hover:text-[#2563EB] transition-colors"
              >
                {link.label}
              </button>
            ))}
            <div className="pt-4 border-t border-slate-100 flex flex-col gap-3">
              <button 
                onClick={() => { setMobileMenuOpen(false); onOpenQuote(); }}
                className="w-full sdi-btn-primary justify-center py-3"
              >
                <PhoneCall className="w-4 h-4" />
                <span>Yêu Cầu Báo Giá Ngay</span>
              </button>
            </div>
          </div>
        </div>
      )}
    </header>
  );
};
