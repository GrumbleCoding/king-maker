<!-- Navigation Header -->
<nav class="navbar fixed top-0 w-full bg-white z-40 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center">
                    <div>
                        <h1 class="font-bebas text-3xl text-king-black tracking-wider">
                            King<span class="text-king-gold">Maker</span>
                        </h1>
                        <p class="text-xs text-gray-600 font-medium tracking-wide">Men's Wear</p>
                    </div>
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="{{ route('home') }}" 
                       class="nav-link text-king-black hover:text-king-gold px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'text-king-gold border-b-2 border-king-gold' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('about') }}" 
                       class="nav-link text-king-black hover:text-king-gold px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('about') ? 'text-king-gold border-b-2 border-king-gold' : '' }}">
                        About
                    </a>
                    <a href="{{ route('products') }}" 
                       class="nav-link text-king-black hover:text-king-gold px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('products') ? 'text-king-gold border-b-2 border-king-gold' : '' }}">
                        Products
                    </a>
                    <a href="{{ route('wholesale') }}" 
                       class="nav-link text-king-black hover:text-king-gold px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('wholesale') ? 'text-king-gold border-b-2 border-king-gold' : '' }}">
                        Wholesale
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="nav-link text-king-black hover:text-king-gold px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('contact') ? 'text-king-gold border-b-2 border-king-gold' : '' }}">
                        Contact
                    </a>
                </div>
            </div>
            
            <!-- WhatsApp CTA Button (Desktop) -->
            <div class="hidden md:block">
                <a href="https://wa.me/9727443999" 
                   target="_blank"
                   class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-all duration-300 transform hover:scale-105 flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.123-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    <span>WhatsApp</span>
                </a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-king-black hover:text-king-gold hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-king-gold">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Navigation Menu -->
    <div class="mobile-menu hidden md:hidden bg-white border-t border-gray-200">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('home') }}" 
               class="block px-3 py-2 text-base font-medium text-king-black hover:text-king-gold hover:bg-gray-50 {{ request()->routeIs('home') ? 'text-king-gold bg-gray-50' : '' }}">
                Home
            </a>
            <a href="{{ route('about') }}" 
               class="block px-3 py-2 text-base font-medium text-king-black hover:text-king-gold hover:bg-gray-50 {{ request()->routeIs('about') ? 'text-king-gold bg-gray-50' : '' }}">
                About
            </a>
            <a href="{{ route('products') }}" 
               class="block px-3 py-2 text-base font-medium text-king-black hover:text-king-gold hover:bg-gray-50 {{ request()->routeIs('products') ? 'text-king-gold bg-gray-50' : '' }}">
                Products
            </a>
            <a href="{{ route('wholesale') }}" 
               class="block px-3 py-2 text-base font-medium text-king-black hover:text-king-gold hover:bg-gray-50 {{ request()->routeIs('wholesale') ? 'text-king-gold bg-gray-50' : '' }}">
                Wholesale
            </a>
            <a href="{{ route('contact') }}" 
               class="block px-3 py-2 text-base font-medium text-king-black hover:text-king-gold hover:bg-gray-50 {{ request()->routeIs('contact') ? 'text-king-gold bg-gray-50' : '' }}">
                Contact
            </a>
            
            <!-- Mobile WhatsApp CTA -->
            <div class="pt-2 border-t border-gray-200">
                <a href="https://wa.me/9727443999" 
                   target="_blank"
                   class="w-full flex items-center justify-center bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-all duration-300">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.123-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    Contact on WhatsApp
                </a>
            </div>
        </div>
    </div>
</nav>
