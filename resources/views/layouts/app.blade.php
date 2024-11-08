<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
    <head>
        @include('layouts.head')
    </head>

    <body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased" :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ?  'dark' : '', $store.app.menu, $store.app.layout,$store.app.rtlClass]">
        <!-- sidebar menu overlay -->
        <div x-cloak="" class="fixed inset-0 z-50 bg-[black]/60 lg:hidden" :class="{'hidden' : !$store.app.sidebar}" @click="$store.app.toggleSidebar()"></div>

       {{-- UP content  --}}
       @include('layouts.up')
       
        <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
            <!-- start sidebar section -->
            @include('layouts.sidebar')
            <!-- end sidebar section -->

            <div class="main-content flex min-h-screen flex-col">
                <!-- start header section -->
                @include('layouts.header')
                <!-- end header section -->

                <div class="animate__animated p-6" :class="[$store.app.animation]">
                   <!-- start main content section -->
                    @yield('content')
                    <!-- end main content section -->
                </div>

                <!-- start footer section -->
                <div class="mt-auto p-6 pt-0 text-center dark:text-white-dark ltr:sm:text-left rtl:sm:text-right">
                    © <span id="footer-year">2022</span>. StarCode Kh All rights reserved.
                </div>
                <!-- end footer section -->
            </div>
        </div>
        @include('layouts.footer')
        @include('layouts.script')
    </body>
</html>
