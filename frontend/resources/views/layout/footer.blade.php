<footer class="bg-[#05488C] text-white pt-10 pb-0 relative" x-data>
  <div class="max-w-6xl mx-auto flex flex-col px-4">
    <!-- Logos at the top, left-aligned on desktop, centered on mobile -->
    <div class="flex flex-row items-center md:justify-start justify-center gap-8 mb-8">
      <a href="https://mptc.gov.kh/" target="_blank" rel="noopener noreferrer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="235 225 545 545" fill="none" class="h-20 w-20 bg-white rounded-full p-2 object-contain shadow-md"><!-- ... --></svg>
      </a>
      <a href="https://trc.gov.kh/en/" target="_blank" rel="noopener noreferrer">
        <img src="/static/media/trc-logo.36830d215e9d755db6e5.png" alt="TRC Logo" class="h-20 w-20 bg-white rounded-full p-2 object-contain shadow-md" />
      </a>
    </div>
    <!-- Row: Contact Info | Links | Socials -->
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between gap-8">
      <!-- Contact Info -->
      <div class="flex-1 flex flex-col gap-4 items-start text-[15px] min-w-[220px]">
        <a href="https://g.page/CambodiaPostOffice?share" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 hover:underline font-medium">
          <svg class="w-5 h-5 text-orange-400" fill="currentColor" viewBox="0 0 384 512"><path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"/></svg>
          <span x-show="$store.lang.value === 'en'">No. 102, Wat Phnom, Daun Penh, Phnom Penh</span>
          <span x-show="$store.lang.value === 'kh'">ផ្លូវ ១០២ សង្កាត់វត្តភ្នំ ខណ្ឌដូនពេញ រាជធានីភ្នំពេញ</span>
        </a>
        <a href="tel:+85523722333" class="flex items-center gap-3 hover:underline font-medium">
          <svg class="w-5 h-5 text-orange-400" fill="currentColor" viewBox="0 0 512 512"><path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"/></svg>
          <span x-show="$store.lang.value === 'en'">6789 (Hotline) | 023 722 333</span>
          <span x-show="$store.lang.value === 'kh'">6789 (មិនគិតថ្លៃ) | 023 722 333</span>
        </a>
        <a href="mailto:info@domain.gov.kh" class="flex items-center gap-3 hover:underline font-medium">
          <svg class="w-5 h-5 text-orange-400" fill="currentColor" viewBox="0 0 512 512"><path d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"/></svg>
          <span>info@domain.gov.kh</span>
        </a>
      </div>
      <!-- Center: Links -->
      <div class="flex-1 flex flex-col items-start text-[15px] min-w-[180px] gap-2">
        <a href="/search-domain" class="hover:underline font-semibold transition-colors duration-150" x-show="$store.lang.value === 'en'">Domain Registration</a>
        <a href="/search-domain" class="hover:underline font-semibold transition-colors duration-150" x-show="$store.lang.value === 'kh'">ចុះឈ្មោះដែនជាតិ</a>
        <a href="/whois" class="hover:underline font-semibold transition-colors duration-150" x-show="$store.lang.value === 'en'">Find Domain Owner</a>
        <a href="/whois" class="hover:underline font-semibold transition-colors duration-150" x-show="$store.lang.value === 'kh'">ស្វែងរកម្ចាស់កម្មសិទ្ធិដែនជាតិ</a>
        <a href="/help/faq" class="hover:underline font-semibold transition-colors duration-150" x-show="$store.lang.value === 'en'">FAQ</a>
        <a href="/help/faq" class="hover:underline font-semibold transition-colors duration-150" x-show="$store.lang.value === 'kh'">សំណួរ | ចម្លើយ</a>
      </div>
      <!-- Right: Socials -->
      <div class="flex-1 flex flex-col items-end text-[15px] min-w-[180px] gap-2">
        <span class="mb-2 font-bold text-right tracking-wide text-lg" x-show="$store.lang.value === 'en'">Follow us</span>
        <span class="mb-2 font-bold text-right tracking-wide text-lg" x-show="$store.lang.value === 'kh'">សម្រាប់ព័ត៌មានថ្មីៗ</span>
        <div class="flex gap-5 text-2xl mb-2 justify-end">
          <a href="https://www.facebook.com/www.mptc.gov.kh" target="_blank" class="hover:text-blue-300 transition-colors"><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/mptcgovkh" target="_blank" class="hover:text-blue-300 transition-colors"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/mptc.gov.kh" target="_blank" class="hover:text-blue-300 transition-colors"><i class="fab fa-instagram"></i></a>
          <a href="https://t.me/domain_kh_bot" target="_blank" class="hover:text-blue-300 transition-colors"><i class="fab fa-telegram-plane"></i></a>
          <a href="https://www.youtube.com/c/MPTCMedia" target="_blank" class="hover:text-blue-300 transition-colors"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>
    <!-- Divider -->
    <div class="border-t border-white/20 my-6"></div>
    <!-- Bottom Bar -->
    <div class="bg-[#04386B] py-4 rounded-b-xl shadow-inner w-full">
      <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between gap-8 w-full px-4">
        <div class="flex flex-col md:flex-row items-center gap-2 text-xs font-semibold w-full md:w-auto text-white/80">
          <span x-show="$store.lang.value === 'en'">© 2022 • Ministry of Posts and Telecommunications. All rights reserved.</span>
          <span x-show="$store.lang.value === 'kh'">© រក្សាសិទ្ធិ 2022 • ក្រសួងប្រៃសណីយ៍និងទូរគមនាគមន៍</span>
          <span x-show="$store.lang.value === 'kh'">រក្សាសិទ្ធិ​គ្រប់យ៉ាង</span>
        </div>
        <div class="flex items-center gap-2 mt-2 md:mt-0 w-full md:w-auto justify-center md:justify-end">
          <span x-show="$store.lang.value === 'en'">Payment:</span>
          <span x-show="$store.lang.value === 'kh'">យើងទទួល :</span>
          <img src="/static/media/payments.4a38d0f36bad437c1291.png" alt="Payments" class="h-7" />
        </div>
      </div>
    </div>
  </div>
</footer>

