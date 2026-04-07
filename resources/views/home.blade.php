@extends('layouts.app')

@section('title', 'KingMaker - Rule Your Style')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-king-black to-black">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 left-0 w-96 h-96 bg-king-gold rounded-full filter blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500 rounded-full filter blur-3xl animate-pulse delay-1000"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-purple-500 rounded-full filter blur-3xl animate-pulse delay-2000"></div>
        </div>
        
        <!-- Animated Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="h-full w-full" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23FFD700" fill-opacity="0.6"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); animation: float 20s ease-in-out infinite;"></div>
        </div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="animate-fade-in-up">
            <!-- Premium Badge -->
            <div class="inline-flex items-center bg-king-gold/20 backdrop-blur-sm border border-king-gold/30 rounded-full px-6 py-2 mb-8">
                <span class="text-king-gold text-sm font-semibold tracking-wider uppercase">Premium Men's Fashion</span>
            </div>
            
            <h1 class="font-bebas text-6xl md:text-8xl lg:text-9xl text-white mb-6 tracking-wider leading-tight">
                Premium Men's <br/>
                <span class="text-king-gold relative inline-block">
                    Fashion
                    <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-king-gold via-yellow-400 to-king-gold rounded-full"></div>
                </span>
            </h1>
            <p class="text-xl md:text-2xl lg:text-3xl text-gray-300 mb-4 font-light tracking-wide">
                Rule Your Style
            </p>
            <p class="text-lg text-gray-400 mb-12 max-w-2xl mx-auto leading-relaxed">
                Discover premium quality men's clothing designed for the modern gentleman. From casual wear to formal attire, we've got you covered with the finest selections.
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center mb-16">
                <a href="https://wa.me/9727443999" 
                   target="_blank"
                   class="group relative overflow-hidden bg-gradient-to-r from-green-500 to-green-600 text-white px-8 py-4 rounded-xl text-lg font-semibold shadow-2xl hover:shadow-green-500/25 transform hover:scale-105 transition-all duration-500 hover:duration-300">
                    <span class="relative z-10 flex items-center">
                        <svg class="w-5 h-5 mr-3 group-hover:animate-bounce" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.123-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                        Contact on WhatsApp
                    </span>
                    <div class="absolute inset-0 bg-gradient-to-r from-green-600 to-green-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </a>
                <a href="{{ route('products') }}" 
                   class="group relative overflow-hidden border-2 border-king-gold text-king-gold px-8 py-4 rounded-xl text-lg font-semibold hover:bg-king-gold hover:text-king-black transform hover:scale-105 transition-all duration-500 hover:duration-300 shadow-lg hover:shadow-king-gold/25">
                    <span class="relative z-10 flex items-center">
                        <svg class="w-5 h-5 mr-3 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h10M7 12h10m-7 5h10"/>
                        </svg>
                        View Collection
                    </span>
                    <div class="absolute inset-0 bg-king-gold opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-king-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
        </svg>
    </div>
</section>

@push('styles')
<style>
/* Custom Animations */
@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    25% { transform: translateY(-20px) rotate(1deg); }
    50% { transform: translateY(-10px) rotate(-1deg); }
    75% { transform: translateY(-15px) rotate(0.5deg); }
}

@keyframes fade-in-up {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fade-in-up 1s ease-out;
}

.delay-1000 {
    animation-delay: 1s;
}

.delay-2000 {
    animation-delay: 2s;
}

/* Premium gradient text effect */
.text-gradient {
    background: linear-gradient(135deg, #FFD700, #FFA500, #FFD700);
    background-size: 200% 200%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: gradient-shift 3s ease-in-out infinite;
}

@keyframes gradient-shift {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

/* Enhanced hover effects */
.group:hover .group-hover\:animate-bounce {
    animation: bounce 1s infinite;
}

/* Smooth scroll behavior */
html {
    scroll-behavior: smooth;
}
</style>
@endpush

<!-- Featured Categories -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-bebas text-4xl md:text-5xl text-king-black mb-4">
                Featured <span class="text-king-gold">Categories</span>
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Explore our curated collections designed for the modern gentleman
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Premium Shirts -->
            <div class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="aspect-w-16 aspect-h-12 relative">
                    <img src="{{ env('APP_ENV') === 'production' ? '/images/Pure_linen_shirts_for_classic_and_timless_men_s_style_3eee1e99-38f0-42fd-aaa1-36200db99e74.webp' : asset('assets/images/Pure_linen_shirts_for_classic_and_timless_men_s_style_3eee1e99-38f0-42fd-aaa1-36200db99e74.webp') }}" 
                         alt="Premium Shirts" 
                         class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="font-bebas text-2xl mb-2">Premium Shirts</h3>
                    <p class="text-sm opacity-90">Elegant designs for every occasion</p>
                </div>
            </div>
            
            <!-- Designer T-Shirts -->
            <div class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="aspect-w-16 aspect-h-12 relative">
                    <img src="{{ asset('assets/images/t-shirt.jpg') }}" 
                         alt="Designer T-Shirts" 
                         class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="font-bebas text-2xl mb-2">Premium T-Shirts</h3>
                    <p class="text-sm opacity-90">Contemporary styles with premium comfort</p>
                </div>
            </div>
            
            <!-- Formal Pants -->
            <div class="group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="aspect-w-16 aspect-h-12 relative">
                    <img src="{{ asset('assets/images/pngtree-stacked-folded-blue-jeans-png-image_16476863.png') }}" 
                         alt="Formal Pants" 
                         class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                    <h3 class="font-bebas text-2xl mb-2">Premium Jeans</h3>
                    <p class="text-sm opacity-90">Sophisticated tailoring meets modern comfort</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-gradient-to-br from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-bebas text-4xl md:text-5xl text-king-black mb-4">
                Why Choose <span class="text-king-gold">KingMaker</span>
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Experience the difference with our premium quality and exceptional service
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Premium Quality -->
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br from-king-gold to-yellow-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg group-hover:shadow-king-gold/50">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-xl mb-3 group-hover:text-king-gold transition-colors duration-300">Premium Quality</h3>
                <p class="text-gray-600 leading-relaxed">
                    Handpicked fabrics and meticulous craftsmanship ensure every piece meets our highest standards of excellence.
                </p>
            </div>
            
            <!-- Modern Designs -->
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br from-king-gold to-yellow-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg group-hover:shadow-king-gold/50">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a6 6 0 00-2-4.5V9a2 2 0 00-2-2h-1v6.5A6 6 0 007 15.5z"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-xl mb-3 group-hover:text-king-gold transition-colors duration-300">Modern Designs</h3>
                <p class="text-gray-600 leading-relaxed">
                    Contemporary styles that blend classic elegance with modern trends for the fashion-forward gentleman.
                </p>
            </div>
            
            <!-- Perfect Fit -->
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br from-king-gold to-yellow-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg group-hover:shadow-king-gold/50">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-xl mb-3 group-hover:text-king-gold transition-colors duration-300">Perfect Fit</h3>
                <p class="text-gray-600 leading-relaxed">
                    Tailored to perfection with attention to detail, ensuring comfort and confidence in every wear.
                </p>
            </div>
            
            <!-- Exclusive Collection -->
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br from-king-gold to-yellow-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg group-hover:shadow-king-gold/50">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-xl mb-3 group-hover:text-king-gold transition-colors duration-300">Exclusive Collection</h3>
                <p class="text-gray-600 leading-relaxed">
                    Limited edition pieces and unique designs that set you apart from the crowd.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-r from-king-black to-gray-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-bebas text-4xl md:text-5xl text-white mb-6">
            Ready to Rule Your Style?
        </h2>
        <p class="text-xl text-gray-300 mb-8">
            Get in touch with us today and discover the perfect men's fashion for you
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wa.me/9727443999" 
               target="_blank"
               class="bg-green-500 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-green-600 transition-all duration-300 transform hover:scale-105 shadow-lg">
                Start on WhatsApp
            </a>
            <a href="{{ route('contact') }}" 
               class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-king-black transition-all duration-300">
                Visit Our Store
            </a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fade-in-up 1s ease-out;
}

/* Add padding top to account for fixed navbar */
section {
    scroll-margin-top: 80px;
}
</style>
@endpush
