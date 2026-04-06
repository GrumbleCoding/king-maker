@extends('layouts.app')

@section('title', 'Products - KingMaker Men\'s Wear')

@section('content')
<!-- Hero Section -->
<section class="relative py-24 bg-gradient-to-br from-gray-900 via-king-black to-black overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 left-0 w-96 h-96 bg-king-gold rounded-full filter blur-3xl animate-pulse"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500 rounded-full filter blur-3xl animate-pulse delay-1000"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="animate-fade-in-up">
            <h1 class="font-bebas text-6xl md:text-8xl text-white mb-6 tracking-wider">
                Our <span class="text-king-gold relative inline-block">
                    Collection
                    <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-king-gold via-yellow-400 to-king-gold rounded-full"></div>
                </span>
            </h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Discover our curated selection of premium men's fashion designed for the modern gentleman
            </p>
        </div>
    </div>
</section>

<!-- Category Filter -->
<section class="py-8 bg-white sticky top-16 z-30 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-4">
            <button class="category-filter active bg-king-black text-white px-6 py-2 rounded-full hover:bg-king-gold transition-colors duration-200" data-category="all">
                All Products
            </button>
            <button class="category-filter bg-gray-200 text-king-black px-6 py-2 rounded-full hover:bg-king-gold hover:text-white transition-colors duration-200" data-category="mens-wear">
                Men's Wear
            </button>
        </div>
    </div>
</section>

<!-- Products Grid -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div id="products-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 max-w-7xl mx-auto">
            
            <!-- Men's Wear Products -->
            <div class="product-card group" data-category="mens-wear">
                <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden border border-gray-200">
                    <!-- Product Image Section -->
                    <div class="relative h-80 overflow-hidden bg-gray-100">
                        <img src="{{ Helper::assets('images/shirt.jpg') }}" 
                             alt="Classic Premium Shirt" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <!-- Overlay Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-transparent via-transparent/20 to-white opacity-60"></div>
                        <!-- Premium Badge -->
                        <div class="absolute top-4 left-4">
                            <div class="bg-gradient-to-r from-king-gold to-yellow-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg flex items-center space-x-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 12l2 2 4-4 6-6-4 2-2-4 4-6 6z"/>
                                </svg>
                                <span>Premium</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Details Section -->
                    <div class="p-6 bg-gradient-to-b from-white to-gray-50">
                        <!-- Title and Description -->
                        <div class="mb-4">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2 group-hover:text-king-gold transition-colors duration-300">Classic Premium Shirt</h3>
                            <p class="text-gray-600 leading-relaxed">Timeless elegance meets modern comfort</p>
                        </div>
                        
                        <!-- Price Section -->
                        <div class="bg-gradient-to-r from-king-gold/10 via-yellow-500/5 to-king-gold/10 rounded-2xl p-4 mb-4 border border-king-gold/20">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="flex items-baseline space-x-3">
                                        <span class="text-sm text-gray-600 font-medium">Starting from</span>
                                        <span class="text-4xl font-black text-king-gold">₹1,199</span>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-sm text-gray-500 line-through">₹3,499</span>
                                        <span class="ml-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">Upto 90% OFF</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- CTA Button -->
                        <a href="https://wa.me/9727443999?text=I'm%20interested%20in%20Classic%20Premium%20Shirt" 
                           target="_blank"
                           class="w-full bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-4 rounded-xl hover:from-green-600 hover:to-green-500 transition-all duration-300 flex items-center justify-center space-x-3 shadow-lg hover:shadow-green-500/30 transform hover:scale-105">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.123-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            <span class="text-lg font-bold">Inquire Now</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="product-card group" data-category="mens-wear">
                <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden border border-gray-200">
                    <!-- Product Image Section -->
                    <div class="relative h-80 overflow-hidden bg-gray-100">
                        <img src="{{ Helper::assets('images/premium-t-shirt.jpg') }}" 
                             alt="Classic Premium T-Shirt" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <!-- Overlay Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-transparent via-transparent/20 to-white opacity-60"></div>
                        <!-- Premium Badge -->
                        <div class="absolute top-4 left-4">
                            <div class="bg-gradient-to-r from-king-gold to-yellow-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg flex items-center space-x-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 12l2 2 4-4 6-6-4 2-2-4 4-6 6z"/>
                                </svg>
                                <span>Popular</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Details Section -->
                    <div class="p-6 bg-gradient-to-b from-white to-gray-50">
                        <!-- Title and Description -->
                        <div class="mb-4">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2 group-hover:text-king-gold transition-colors duration-300">Classic Premium T-Shirt</h3>
                            <p class="text-gray-600 leading-relaxed">Premium fabric with exclusive design</p>
                        </div>
                        
                        <!-- Price Section -->
                        <div class="bg-gradient-to-r from-king-gold/10 via-yellow-500/5 to-king-gold/10 rounded-2xl p-4 mb-4 border border-king-gold/20">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="flex items-baseline space-x-3">
                                        <span class="text-sm text-gray-600 font-medium">Starting from</span>
                                        <span class="text-4xl font-black text-king-gold">₹999</span>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-sm text-gray-500 line-through">₹2,999</span>
                                        <span class="ml-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">Upto 90% OFF</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- CTA Button -->
                        <a href="https://wa.me/9727443999?text=I'm%20interested%20in%20Designer%20T-Shirt" 
                           target="_blank"
                           class="w-full bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-4 rounded-xl hover:from-green-600 hover:to-green-500 transition-all duration-300 flex items-center justify-center space-x-3 shadow-lg hover:shadow-green-500/30 transform hover:scale-105">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.123-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            <span class="text-lg font-bold">Inquire Now</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="product-card group" data-category="mens-wear">
                <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden border border-gray-200">
                    <!-- Product Image Section -->
                    <div class="relative h-80 overflow-hidden bg-gray-100">
                        <img src="{{ Helper::assets('images/lenin-pant.jpg') }}" 
                             alt="Premium Lenin Pants" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <!-- Overlay Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-transparent via-transparent/20 to-white opacity-60"></div>
                        <!-- Premium Badge -->
                        <div class="absolute top-4 left-4">
                            <div class="bg-gradient-to-r from-king-gold to-yellow-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg flex items-center space-x-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 12l2 2 4-4 6-6-4 2-2-4 4-6 6z"/>
                                </svg>
                                <span>Premium</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Details Section -->
                    <div class="p-6 bg-gradient-to-b from-white to-gray-50">
                        <!-- Title and Description -->
                        <div class="mb-4">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2 group-hover:text-king-gold transition-colors duration-300">Premium Lenin Pants</h3>
                            <p class="text-gray-600 leading-relaxed">Perfect fit for business and casual</p>
                        </div>
                        
                        <!-- Price Section -->
                        <div class="bg-gradient-to-r from-king-gold/10 via-yellow-500/5 to-king-gold/10 rounded-2xl p-4 mb-4 border border-king-gold/20">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="flex items-baseline space-x-3">
                                        <span class="text-sm text-gray-600 font-medium">Starting from</span>
                                        <span class="text-4xl font-black text-king-gold">₹1,499</span>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-sm text-gray-500 line-through">₹2,999</span>
                                        <span class="ml-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">Upto 90% OFF</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- CTA Button -->
                        <a href="https://wa.me/9727443999?text=I'm%20interested%20in%20Formal%20Pants" 
                           target="_blank"
                           class="w-full bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-4 rounded-xl hover:from-green-600 hover:to-green-500 transition-all duration-300 flex items-center justify-center space-x-3 shadow-lg hover:shadow-green-500/30 transform hover:scale-105">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.123-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            <span class="text-lg font-bold">Inquire Now</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="product-card group" data-category="mens-wear">
                <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden border border-gray-200">
                    <!-- Product Image Section -->
                    <div class="relative h-80 overflow-hidden bg-gray-100">
                        <img src="{{ Helper::assets('images/premium-jeans.jpg') }}" 
                             alt="Premium Jeans" 
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <!-- Overlay Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-transparent via-transparent/20 to-white opacity-60"></div>
                        <!-- Premium Badge -->
                        <div class="absolute top-4 left-4">
                            <div class="bg-gradient-to-r from-king-gold to-yellow-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg flex items-center space-x-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 12l2 2 4-4 6-6-4 2-2-4 4-6 6z"/>
                                </svg>
                                <span>Premium</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Details Section -->
                    <div class="p-6 bg-gradient-to-b from-white to-gray-50">
                        <!-- Title and Description -->
                        <div class="mb-4">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2 group-hover:text-king-gold transition-colors duration-300">Premium Jeans</h3>
                            <p class="text-gray-600 leading-relaxed">Premium denim, perfected for everyday wear</p>
                        </div>
                        
                        <!-- Price Section -->
                        <div class="bg-gradient-to-r from-king-gold/10 via-yellow-500/5 to-king-gold/10 rounded-2xl p-4 mb-4 border border-king-gold/20">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="flex items-baseline space-x-3">
                                        <span class="text-sm text-gray-600 font-medium">Starting from</span>
                                        <span class="text-4xl font-black text-king-gold">₹1,499</span>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-sm text-gray-500 line-through">₹5,999</span>
                                        <span class="ml-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">Upto 90% OFF</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- CTA Button -->
                        <a href="https://wa.me/9727443999?text=I'm%20interested%20in%20Premium%20Jeans" 
                           target="_blank"
                           class="w-full bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-4 rounded-xl hover:from-green-600 hover:to-green-500 transition-all duration-300 flex items-center justify-center space-x-3 shadow-lg hover:shadow-green-500/30 transform hover:scale-105">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.123-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            <span class="text-lg font-bold">Inquire Now</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="product-card group" data-category="mens-wear">
                <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
                    <!-- Product Image Container -->
                    <div class="relative">
                        <img src="{{ Helper::assets('images/wholesale.jpg') }}" 
                             alt="Premium Collection Pack" 
                             class="w-full h-96 object-cover">
                        <!-- Premium Badge -->
                        <div class="absolute top-3 left-3 bg-king-gold text-white px-3 py-1 rounded-full text-xs font-bold">
                            Wholesale
                        </div>
                    </div>
                    
                    <!-- Product Content -->
                    <div class="p-5">
                        <h3 class="font-bold text-lg mb-2">Premium Collection Pack</h3>
                        <p class="text-gray-600 text-sm mb-4">Premium wear bundle</p>
                        
                        <!-- Price -->
                        <div class="mb-4">
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl font-bold text-king-gold">₹49,999</span>
                            </div>
                        </div>
                        
                        <!-- WhatsApp Button -->
                        <a href="https://wa.me/9727443999?text=I'm%20interested%20in%20Premium%20Collection%20Pack" 
                           target="_blank"
                           class="w-full bg-green-500 text-white px-4 py-3 rounded-lg hover:bg-green-600 transition-colors duration-200 flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.123-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            <span class="font-medium">Inquire Now</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-r from-king-black to-gray-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-bebas text-4xl md:text-5xl text-white mb-6">
            Can't Find What You're Looking For?
        </h2>
        <p class="text-xl text-gray-300 mb-8">
            Contact us for custom orders and personalized recommendations
        </p>
        <a href="https://wa.me/9727443999" 
           target="_blank"
           class="bg-green-500 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-green-600 transition-all duration-300 transform hover:scale-105 shadow-lg">
            Get Custom Quote
        </a>
    </div>
</section>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    // Category filter functionality
    $('.category-filter').click(function() {
        // Update active state
        $('.category-filter').removeClass('active bg-king-black text-white').addClass('bg-gray-200 text-king-black');
        $(this).removeClass('bg-gray-200 text-king-black').addClass('active bg-king-black text-white');
        
        // Filter products
        var category = $(this).data('category');
        if (category === 'all') {
            $('.product-card').show();
        } else {
            $('.product-card').hide();
            $('.product-card[data-category="' + category + '"]').show();
        }
    });
});
</script>
@endpush

@push('styles')
<style>
/* Add padding top to account for fixed navbar */
section {
    scroll-margin-top: 80px;
}

.product-card {
    transition: all 0.3s ease;
}

.product-card:hover {
    transform: translateY(-5px);
}
</style>
@endpush
