@extends('layouts.app')

@section('title', 'Contact - KingMaker Men\'s Wear')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-king-black via-gray-900 to-king-black overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23FFD700" fill-opacity="0.4"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="font-bebas text-5xl md:text-7xl text-white mb-6 tracking-wider">
            Get in <span class="text-king-gold">Touch</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Experience our premium men's fashion collection in person at our Ahmedabad store
        </p>
    </div>
</section>

<!-- Contact Information & Map -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- Contact Information -->
            <div class="lg:sticky lg:top-24 lg:h-fit">
                <h2 class="font-bebas text-4xl text-king-black mb-8">
                    Contact Information
                </h2>
                
                <div class="space-y-6">
                    <!-- Phone -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-king-gold rounded-full flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-xl mb-2">Phone</h3>
                            <a href="tel:9727443999" class="text-gray-600 hover:text-king-gold transition-colors duration-200">
                                +91 97274 43999
                            </a>
                            <div class="mt-2 text-sm text-gray-500">
                                <p>Monday - Friday: 9:00 AM - 10:00 PM</p>
                                <p>Saturday - Sunday: 9:00 AM - 11:00 PM</p>
                                <p>WhatsApp: 24/7 Available</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- WhatsApp -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.123-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-xl mb-2">WhatsApp</h3>
                            <a href="https://wa.me/9727443999" 
                           target="_blank"
                           class="text-gray-600 hover:text-green-500 transition-colors duration-200">
                            +91 97274 43999
                        </a>
                            <p class="text-sm text-gray-500 mt-1">24/7 Available for inquiries</p>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-king-gold rounded-full flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-xl mb-2">Email</h3>
                            <a href="mailto:info@kingmaker.com" class="text-gray-600 hover:text-king-gold transition-colors duration-200">
                                info@kingmaker.com
                            </a>
                            <p class="text-sm text-gray-500 mt-1">We'll respond within 24 hours</p>
                        </div>
                    </div>
                    
                    <!-- Address -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-king-gold rounded-full flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-xl mb-2">Store Address</h3>
                            <address class="text-gray-600 not-italic">
                                KingMaker Clothing<br>
                                Shop no.27, Pratham Residency<br>
                                Gopinath Bunglows, opposite Rajdhani<br>
                                near Dipak school, Sanidhya Park<br>
                                Nikol, Ahmedabad, Gujarat 380049<br>
                                India
                            </address>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Contact Buttons -->
                <div class="mt-12 space-y-4">
                    <a href="https://wa.me/9727443999" 
                       target="_blank"
                       class="w-full bg-green-500 text-white px-6 py-4 rounded-lg hover:bg-green-600 transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-3 shadow-lg">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.123-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                        <span class="text-lg font-semibold">Message on WhatsApp</span>
                    </a>
                    
                    <a href="tel:9727443999" 
                   class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-king-black transition-all duration-300 flex items-center justify-center space-x-3 shadow-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span class="text-lg font-semibold">Call Now</span>
                    </a>
                </div>
            </div>
            
            <!-- Map -->
            <div class="lg:sticky lg:top-24 lg:h-fit">
                <h2 class="font-bebas text-4xl text-king-black mb-8">
                    Find Us
                </h2>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14685.902421294051!2d72.65646308666685!3d23.043018812292537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e87275db74fc3%3A0xf851dff6a36f3fb4!2sKing%20Maker!5e0!3m2!1sen!2sin!4v1775464127414!5m2!1sen!2sin" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="w-full h-96 lg:h-full min-h-[450px]">
                    </iframe>
                </div>
                
                <!-- Store Hours -->
                <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
                    <h3 class="font-semibold text-xl mb-4">Store Hours</h3>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Monday - Friday</span>
                            <span class="font-semibold">9:00 AM - 10:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Saturday - Sunday</span>
                            <span class="font-semibold">9:00 AM - 11:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">WhatsApp Support</span>
                            <span class="font-semibold text-green-500">24/7 Available</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Inquiry Form -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="font-bebas text-4xl md:text-5xl text-king-black mb-4">
                Send Us a Message
            </h2>
            <p class="text-gray-600 text-lg">
                Have questions about our products or services? We'd love to hear from you!
            </p>
        </div>
        
        <div class="bg-gray-50 rounded-xl p-8">
            <form id="contact-form" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Your Name *
                        </label>
                        <input type="text" 
                               id="name" 
                               name="name" 
                               required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-king-gold focus:border-transparent transition-all duration-200"
                               placeholder="John Doe">
                    </div>
                    
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                            Phone Number *
                        </label>
                        <input type="tel" 
                               id="phone" 
                               name="phone" 
                               required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-king-gold focus:border-transparent transition-all duration-200"
                               placeholder="+91 98765 43210">
                    </div>
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Email Address
                    </label>
                    <input type="email" 
                           id="email" 
                           name="email" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-king-gold focus:border-transparent transition-all duration-200"
                           placeholder="john@example.com">
                </div>
                
                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">
                        Subject *
                    </label>
                    <select id="subject" 
                            name="subject" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-king-gold focus:border-transparent transition-all duration-200">
                        <option value="">Select a subject</option>
                        <option value="product-inquiry">Product Inquiry</option>
                        <option value="wholesale">Wholesale Information</option>
                        <option value="feedback">Feedback</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                        Message *
                    </label>
                    <textarea id="message" 
                              name="message" 
                              rows="5" 
                              required
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-king-gold focus:border-transparent transition-all duration-200"
                              placeholder="Tell us how we can help you..."></textarea>
                </div>
                
                <div class="text-center">
                    <button type="submit" 
                            class="bg-king-gold text-white px-8 py-4 rounded-lg hover:bg-yellow-600 transition-all duration-300 transform hover:scale-105 font-semibold text-lg">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Social Media -->
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-bebas text-3xl text-king-black mb-8">
            Follow Us on Social Media
        </h2>
        <div class="flex justify-center space-x-6">
            <a href="https://www.instagram.com/kingmakerahmedabad/" target="_blank" class="w-12 h-12 bg-king-black text-white rounded-full flex items-center justify-center hover:bg-king-gold transition-colors duration-200">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1112.324 0 6.162 6.162 0 01-12.324 0zM12 16a4 4 0 110-8 4 4 0 010 8zm4.965-10.405a1.44 1.44 0 112.881.001 1.44 1.44 0 01-2.881-.001z"/>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    // Contact form submission
    $('#contact-form').submit(function(e) {
        e.preventDefault();
        
        // Get form data
        var formData = {
            name: $('#name').val(),
            phone: $('#phone').val(),
            email: $('#email').val(),
            subject: $('#subject').val(),
            message: $('#message').val()
        };
        
        // Create WhatsApp message
        var whatsappMessage = "Hello KingMaker!%0A%0A";
        whatsappMessage += "Name: " + formData.name + "%0A";
        whatsappMessage += "Phone: " + formData.phone + "%0A";
        if (formData.email) {
            whatsappMessage += "Email: " + formData.email + "%0A";
        }
        whatsappMessage += "Subject: " + formData.subject + "%0A%0A";
        whatsappMessage += "Message: " + formData.message;
        
        // Open WhatsApp with pre-filled message
        var whatsappUrl = "https://wa.me/9727443999?text=" + encodeURIComponent(whatsappMessage);
        window.open(whatsappUrl, '_blank');
        
        // Show success message
        alert('Thank you for your message! We will contact you soon.');
        
        // Reset form
        this.reset();
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

/* Custom map container */
.aspect-w-16 {
    position: relative;
    padding-bottom: 75%;
}

.aspect-h-12 {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
</style>
@endpush
