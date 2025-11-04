@extends('layouts.app')

@section('title', 'Contact - My Personal Blog')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-8">
            <h1 data-animate="fade-up" class="text-4xl font-bold text-gray-800 mb-2">Get In Touch</h1>
            <p data-animate="fade-up" class="text-gray-600 mb-8">I'd love to hear from you. Send me a message and I'll respond as soon as possible.</p>

            <div class="grid md:grid-cols-2 gap-8">
                
                <div data-animate="slide-left">
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Your Name</label>
                            <input type="text" id="name" name="name" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"
                                   placeholder="Enter your name" required>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"
                                   placeholder="Enter your email" required>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"
                                   placeholder="What's this about?" required>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Your Message</label>
                            <textarea id="message" name="message" rows="5" 
                                      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"
                                      placeholder="Enter your message" required></textarea>
                        </div>

                        <button type="submit" 
                                class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-300 font-semibold">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div data-animate="zoom-in" class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-6">Contact Information</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-envelope text-blue-600 mt-1 mr-4"></i>
                            <div>
                                <h4 class="font-semibold text-gray-700">Email</h4>
                                <p class="text-gray-600">fernandeshoward2005@gmail.com</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <i class="fas fa-phone text-blue-600 mt-1 mr-4"></i>
                            <div>
                                <h4 class="font-semibold text-gray-700">Phone</h4>
                                <p class="text-gray-600">+62 0895-6000-07100</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt text-blue-600 mt-1 mr-4"></i>
                            <div>
                                <h4 class="font-semibold text-gray-700">Location</h4>
                                <p class="text-gray-600">Indonesia, Makassar</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <i class="fas fa-clock text-blue-600 mt-1 mr-4"></i>
                            <div>
                                <h4 class="font-semibold text-gray-700">Response Time</h4>
                                <p class="text-gray-600">Usually within 24 hours</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <h4 class="font-semibold text-gray-700 mb-4">Follow Me</h4>
                        <div class="flex space-x-4">
                            <a href="https://github.com/Nandes012" class="text-gray-400 hover:text-gray-800 transition duration-300">
                                <i class="fab fa-github text-2xl"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/fernandes-howard-41a43333b/" class="text-gray-400 hover:text-blue-800 transition duration-300">
                                <i class="fab fa-linkedin text-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection