@extends('layout.app')

@section('content')
<!-- Hero Section -->
<div class="bg-[#054785] pt-20 pb-0 px-2 sm:px-4 md:px-0" x-data>
    <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center justify-between min-h-[320px] gap-6 md:gap-0">
        <!-- Left: Text and Search -->
        <div class="flex-1 text-white md:pr-12 flex flex-col justify-center w-full">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold leading-tight mb-4 sm:mb-6">
                <span x-show="$store.lang.value === 'en'">Bring Your Ideas Online<br>with domain <span class="text-orange-400">.kh</span></span>
                <span x-show="$store.lang.value === 'kh'">បញ្ជីឈ្មោះដែនជាតិខ្មែរជាសាធារណៈ<br>ដើម្បីកិច្ចការរបស់អ្នកនៅលើអ៊ីនធឺណិតជាតិ<span class="text-orange-400">.kh</span></span>
            </h1>
            <!-- Search Bar in White Box -->
            <div class="flex flex-col items-start w-full">
                <form class="flex flex-col sm:flex-row items-stretch bg-white rounded-xl shadow-lg px-2 py-2 w-full max-w-xl mb-3 gap-2 sm:gap-0">
                    <span class="flex items-center px-3 text-gray-400 text-xl justify-center sm:justify-start">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text" :placeholder="$store.lang.value === 'en' ? 'Search your domain name' : 'ស្វែងរកឈ្មោះដែនរបស់អ្នក'" class="flex-1 px-2 py-2 text-[#054785] bg-transparent focus:outline-none text-base sm:text-lg font-medium min-w-0" />
                    <select class="px-2 py-2 text-[#054785] bg-white border-l border-gray-200 focus:outline-none font-semibold min-w-[90px]">
                        <option>.kh</option>
                        <option>.com.kh</option>
                        <option>.net.kh</option>
                    </select>
                    <button type="submit" class="bg-orange-400 text-white font-bold px-4 py-2 rounded-xl hover:bg-orange-500 transition text-base sm:text-lg mt-2 sm:mt-0 sm:ml-2 w-full sm:w-auto" x-text="$store.lang.value === 'en' ? 'Search' : 'ស្វែងរក'"></button>
                </form>
                <div class="text-white text-sm sm:text-base font-medium mt-1 ml-2">
                    <span x-show="$store.lang.value === 'en'">For example, you can search for "mycoffeeshop.kh"</span>
                    <span x-show="$store.lang.value === 'kh'">ឧទាហរណ៍ អ្នកអាចស្វែងរក "mycoffeeshop.kh"</span>
                </div>
            </div>
        </div>
        <!-- Right: Illustration -->
        <div class="flex-1 flex justify-center md:justify-end mt-8 md:mt-0 w-full">
            <img src="https://undraw.co/api/illustrations/2e6b7e7e-2e2e-4e2e-8e2e-2e2e2e2e2e2e" alt="Illustration" class="w-64 sm:w-80 md:w-96 max-w-full h-auto" loading="lazy">
        </div>
    </div>
</div>

<!-- Domain Type Cards Section -->
<div x-data class="max-w-screen-xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3 sm:gap-5 md:gap-6 py-6 sm:py-10 md:py-12 px-1 sm:px-4 md:px-0">
    <!-- Card 1 -->
    <div class="bg-white rounded-2xl shadow p-3 sm:p-5 md:p-6 flex flex-col items-center text-center min-h-[180px] sm:min-h-[200px] md:min-h-[220px] w-full">
        <div class="bg-[#054785] rounded-full p-2 sm:p-3 md:p-4 mb-3 sm:mb-4"><i class="fas fa-users text-xl sm:text-2xl md:text-3xl text-white"></i></div>
        <div class="font-bold text-sm sm:text-base md:text-lg mb-1 sm:mb-2">
            <span x-show="$store.lang.value === 'en'" x-cloak>Personal Use</span>
            <span x-show="$store.lang.value === 'kh'" x-cloak>ការប្រើប្រាស់ផ្ទាល់</span>
        </div>
        <div class="text-gray-600 mb-1 sm:mb-2 text-xs sm:text-sm md:text-base">
            <span x-show="$store.lang.value === 'en'" x-cloak>For individuals, freelancers, and small businesses</span>
            <span x-show="$store.lang.value === 'kh'" x-cloak>សម្រាប់បុគ្គលឯកជន មុខរបរ និងសហគ្រាសខ្នាតតូច</span>
        </div>
        <div class="font-bold text-[#054785] text-base sm:text-lg md:text-xl">.kh</div>
    </div>
    <!-- Card 2 -->
    <div class="bg-white rounded-2xl shadow p-3 sm:p-5 md:p-6 flex flex-col items-center text-center min-h-[180px] sm:min-h-[200px] md:min-h-[220px] w-full">
        <div class="bg-[#054785] rounded-full p-2 sm:p-3 md:p-4 mb-3 sm:mb-4"><i class="fas fa-building text-xl sm:text-2xl md:text-3xl text-white"></i></div>
        <div class="font-bold text-sm sm:text-base md:text-lg mb-1 sm:mb-2">
            <span x-show="$store.lang.value === 'en'" x-cloak>Large Companies</span>
            <span x-show="$store.lang.value === 'kh'" x-cloak>ក្រុមហ៊ុនធំ</span>
        </div>
        <div class="text-gray-600 mb-1 sm:mb-2 text-xs sm:text-sm md:text-base">
            <span x-show="$store.lang.value === 'en'" x-cloak>For large companies, international organizations, and enterprises</span>
            <span x-show="$store.lang.value === 'kh'" x-cloak>សម្រាប់ក្រុមហ៊ុនធំ ស្ថាប័នអន្តរជាតិ និងអង្គការ</span>
        </div>
        <div class="font-bold text-[#054785] text-base sm:text-lg md:text-xl">.com.kh</div>
    </div>
    <!-- Card 3 -->
    <div class="bg-white rounded-2xl shadow p-3 sm:p-5 md:p-6 flex flex-col items-center text-center min-h-[180px] sm:min-h-[200px] md:min-h-[220px] w-full">
        <div class="bg-[#054785] rounded-full p-2 sm:p-3 md:p-4 mb-3 sm:mb-4"><i class="fas fa-globe text-xl sm:text-2xl md:text-3xl text-white"></i></div>
        <div class="font-bold text-sm sm:text-base md:text-lg mb-1 sm:mb-2">
            <span x-show="$store.lang.value === 'en'" x-cloak>Commercial Entities</span>
            <span x-show="$store.lang.value === 'kh'" x-cloak>អង្គភាពពាណិជ្ជកម្ម</span>
        </div>
        <div class="text-gray-600 mb-1 sm:mb-2 text-xs sm:text-sm md:text-base">
            <span x-show="$store.lang.value === 'en'" x-cloak>For commercial entities and large enterprises</span>
            <span x-show="$store.lang.value === 'kh'" x-cloak>សម្រាប់អង្គភាពពាណិជ្ជកម្ម និងសហគ្រាសធំៗ</span>
        </div>
        <div class="font-bold text-[#054785] text-base sm:text-lg md:text-xl">.net.kh</div>
    </div>
    <!-- Card 4 -->
    <div class="bg-white rounded-2xl shadow p-3 sm:p-5 md:p-6 flex flex-col items-center text-center min-h-[180px] sm:min-h-[200px] md:min-h-[220px] w-full">
        <div class="bg-[#054785] rounded-full p-2 sm:p-3 md:p-4 mb-3 sm:mb-4"><i class="fas fa-users-cog text-xl sm:text-2xl md:text-3xl text-white"></i></div>
        <div class="font-bold text-sm sm:text-base md:text-lg mb-1 sm:mb-2">
            <span x-show="$store.lang.value === 'en'" x-cloak>Organizations</span>
            <span x-show="$store.lang.value === 'kh'" x-cloak>អង្គការ</span>
        </div>
        <div class="text-gray-600 mb-1 sm:mb-2 text-xs sm:text-sm md:text-base">
            <span x-show="$store.lang.value === 'en'" x-cloak>For NGOs, non-profits, and communities</span>
            <span x-show="$store.lang.value === 'kh'" x-cloak>សម្រាប់អង្គការ អង្គការមិនរកប្រាក់ចំណេញ និងសហគមន៍</span>
        </div>
        <div class="font-bold text-[#054785] text-base sm:text-lg md:text-xl">.org.kh</div>
    </div>
    <!-- Card 5 -->
    <div class="bg-white rounded-2xl shadow p-3 sm:p-5 md:p-6 flex flex-col items-center text-center min-h-[180px] sm:min-h-[200px] md:min-h-[220px] w-full">
        <div class="bg-[#054785] rounded-full p-2 sm:p-3 md:p-4 mb-3 sm:mb-4"><i class="fas fa-graduation-cap text-xl sm:text-2xl md:text-3xl text-white"></i></div>
        <div class="font-bold text-sm sm:text-base md:text-lg mb-1 sm:mb-2">
            <span x-show="$store.lang.value === 'en'" x-cloak>Educational Institutions</span>
            <span x-show="$store.lang.value === 'kh'" x-cloak>គ្រឹះស្ថានអប់រំ</span>
        </div>
        <div class="text-gray-600 mb-1 sm:mb-2 text-xs sm:text-sm md:text-base">
            <span x-show="$store.lang.value === 'en'" x-cloak>For schools, educational institutions, and universities</span>
            <span x-show="$store.lang.value === 'kh'" x-cloak>សម្រាប់សាលារៀន គ្រឹះស្ថានអប់រំ និងសាកលវិទ្យាល័យ</span>
        </div>
        <div class="font-bold text-[#054785] text-base sm:text-lg md:text-xl">.edu.kh</div>
    </div>
    <!-- Card 6 -->
    <div class="bg-white rounded-2xl shadow p-3 sm:p-5 md:p-6 flex flex-col items-center text-center min-h-[180px] sm:min-h-[200px] md:min-h-[220px] w-full">
        <div class="bg-[#054785] rounded-full p-2 sm:p-3 md:p-4 mb-3 sm:mb-4"><i class="fas fa-university text-xl sm:text-2xl md:text-3xl text-white"></i></div>
        <div class="font-bold text-sm sm:text-base md:text-lg mb-1 sm:mb-2">
            <span x-show="$store.lang.value === 'en'" x-cloak>Government</span>
            <span x-show="$store.lang.value === 'kh'" x-cloak>រដ្ឋាភិបាល</span>
        </div>
        <div class="text-gray-600 mb-1 sm:mb-2 text-xs sm:text-sm md:text-base">
            <span x-show="$store.lang.value === 'en'" x-cloak>For government institutions and ministries</span>
            <span x-show="$store.lang.value === 'kh'" x-cloak>សម្រាប់ស្ថាប័នរដ្ឋ រាជរដ្ឋាភិបាល</span>
        </div>
        <div class="font-bold text-[#054785] text-base sm:text-lg md:text-xl">.gov.kh</div>
    </div>
</div>
@endsection

