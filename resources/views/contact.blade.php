<!-- resources/views/contact.blade.php -->
<!-- resources/views/contact.blade.php -->

@extends('layout.app')

@section('appContents')
    <div class="min-h-screen bg-gray-100 flex flex-col">
        <!-- Navigation Bar -->
        <header class="bg-blue-500 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Logo or Website Name -->
                <a href="{{ route('home') }}" class="text-xl font-bold">Sachin Tendulkar</a>

                <!-- Navigation Links -->
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:underline">About</a></li>
                        <li><a href="{{ route('history') }}" class="hover:underline">History</a></li>
                        <li><a href="{{ route('details') }}" class="hover:underline">Details</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:underline">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Page Content -->
        <div class="flex-1 flex items-center justify-center">
            <div class="max-w-3xl p-10 bg-white shadow-lg rounded-md">
                <h1 class="text-4xl font-bold text-blue-800 mb-4">Connect with Sachin Tendulkar</h1>

                <p class="text-gray-700 mb-4">
                    Sachin Tendulkar values communication with his fans and supporters. Whether you have a question, an inspiring story to share, or a collaboration proposal, feel free to reach out using the following methods:
                </p>

                <div class="flex flex-col md:flex-row gap-4">
                    <div class="md:w-1/2">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Email</h2>

                        <p class="text-gray-700 mb-4">
                            For general inquiries, collaborations, or media requests, please contact Sachin Tendulkar's team at:
                        </p>

                        <a href="mailto:sachin@tendulkar.com" class="text-blue-500 hover:underline">sachin@tendulkar.com</a>
                    </div>

                    <div class="md:w-1/2">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Social Media</h2>

                        <p class="text-gray-700 mb-4">
                            Stay updated on Sachin Tendulkar's latest news, activities, and inspirational messages by following him on social media:
                        </p>

                        <ul class="list-none mb-4">
                            <li>
                                <a href="https://twitter.com/sachin_rt" class="inline-block text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">@sachin_rt</a> (Twitter)
                            </li>
                            <li>
                                <a href="https://www.facebook.com/sachintendulkar" class="inline-block text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">Sachin Tendulkar (Facebook)</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/sachin_rt" class="inline-block text-blue-500 hover:underline" target="_blank" rel="noopener noreferrer">sachin_rt</a> (Instagram)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

