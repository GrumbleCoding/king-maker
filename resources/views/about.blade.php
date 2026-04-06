@extends('layouts.app')

@section('title', 'About Us - KingMaker')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-king-black via-gray-900 to-king-black overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23FFD700" fill-opacity="0.4"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="font-bebas text-5xl md:text-7xl text-white mb-6 tracking-wider">
            About <span class="text-king-gold">KingMaker</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Your trusted destination for premium men's fashion since 2004
        </p>
    </div>
</section>

<!-- Shop Introduction -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-bebas text-4xl md:text-5xl text-king-black mb-6">
                    Premium Men's <span class="text-king-gold">Fashion</span>
                </h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    At KingMaker, we specialize in creating exceptional men's clothing that combines style, comfort, and quality. Our collection is carefully curated to meet the diverse needs of the modern gentleman.
                </p>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    From casual everyday wear to sophisticated formal attire, each piece in our collection is selected with attention to detail and a commitment to excellence. We believe that great style should be accessible to every man.
                </p>
                <p class="text-lg leading-relaxed">
                    Today, KingMaker stands as a trusted name in men's fashion, offering premium collections that cater to the modern gentleman's diverse style needs while maintaining our commitment to quality and affordability.
                </p>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                     alt="Our Store" 
                     class="rounded-lg shadow-2xl w-full h-96 object-cover">
                <div class="absolute -bottom-6 -right-6 bg-king-gold text-white p-6 rounded-lg shadow-xl">
                    <h3 class="font-bebas text-2xl mb-2">Years of Excellence</h3>
                    <p class="text-3xl font-bold">20+</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Owner Message -->
<section class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-bebas text-4xl md:text-5xl text-king-black mb-4">
                Message From the Owner
            </h2>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg p-8 md:p-12">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="w-32 h-32 bg-gradient-to-br from-king-gold to-yellow-600 rounded-full flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                </div>
                <div class="flex-1 text-center md:text-left">
                    <h3 class="font-bebas text-2xl mb-2">A Vision of Style</h3>
                    <p class="text-gray-600 italic">
                        "At KingMaker, we don't just sell clothes; we craft experiences. Every piece in our collection tells a story of quality, style, and affordability. Our commitment to excellence drives us to continuously innovate and serve our customers better. Thank you for being part of our journey."
                    </p>
                    <p class="mt-4 font-semibold text-king-black">- Founder, KingMaker</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Values -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-bebas text-4xl md:text-5xl text-king-black mb-4">
                Our Core Values
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                The principles that guide everything we do
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Quality -->
            <div class="text-center group">
                <div class="w-24 h-24 bg-king-gold rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-bebas text-2xl mb-3">Quality First</h3>
                <p class="text-gray-600">
                    We never compromise on quality. Every garment is carefully selected and crafted to meet the highest standards of excellence.
                </p>
            </div>
            
            <!-- Affordability -->
            <div class="text-center group">
                <div class="w-24 h-24 bg-king-gold rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-bebas text-2xl mb-3">Affordable Pricing</h3>
                <p class="text-gray-600">
                    Style shouldn't cost a fortune. We offer competitive pricing that makes fashion accessible to everyone without sacrificing quality.
                </p>
            </div>
            
            <!-- Customer Service -->
            <div class="text-center group">
                <div class="w-24 h-24 bg-king-gold rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="font-bebas text-2xl mb-3">Customer Focus</h3>
                <p class="text-gray-600">
                    Our customers are at the heart of everything we do. We strive to provide exceptional service and build lasting relationships.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="font-bebas text-4xl md:text-5xl text-king-black mb-4">
                Why Choose KingMaker?
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Setting the standard in fashion retail and wholesale
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-king-gold rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="font-semibold text-xl mb-2">Curated Collections</h3>
                    <p class="text-gray-600">Hand-picked styles that reflect the latest trends while maintaining timeless appeal</p>
                </div>
            </div>
            
            <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-king-gold rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="font-semibold text-xl mb-2">Retail + Wholesale</h3>
                    <p class="text-gray-600">Flexible solutions for individual customers and bulk buyers alike</p>
                </div>
            </div>
            
            <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-king-gold rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="font-semibold text-xl mb-2">Expert Staff</h3>
                    <p class="text-gray-600">Knowledgeable team ready to help you find the perfect fit and style</p>
                </div>
            </div>
            
            <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-king-gold rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="font-semibold text-xl mb-2">Easy Shopping</h3>
                    <p class="text-gray-600">Seamless shopping experience with WhatsApp support and personalized service</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-r from-king-black to-gray-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-bebas text-4xl md:text-5xl text-white mb-6">
            Join the KingMaker Family
        </h2>
        <p class="text-xl text-gray-300 mb-8">
            Experience the perfect blend of quality, style, and affordability
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wa.me/9727443999" 
               target="_blank"
               class="bg-green-500 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-green-600 transition-all duration-300 transform hover:scale-105 shadow-lg">
                Get in Touch
            </a>
            <a href="{{ route('products') }}" 
               class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-king-black transition-all duration-300">
                Browse Collection
            </a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
/* Add padding top to account for fixed navbar */
section {
    scroll-margin-top: 80px;
}
</style>
@endpush
