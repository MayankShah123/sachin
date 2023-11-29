<!-- resources/views/home.blade.php -->

@extends('layout.app')

@section('appContents')
    <div class="min-h-screen bg-gray-100 flex flex-col">

        <header class="bg-blue-500 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">

                <a href="{{ route('home') }}" class="text-xl font-bold">Sachin Tendulkar</a>


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


        <div class="bg-gray-100 flex justify-center items-center">
            <div class="w-full max-w-3xl p-8 bg-white shadow-lg rounded-md">
                <div class="mb-8">
                    <img src="{{ asset('images/Sachin.jpg') }}" alt="Sachin Tendulkar - The Master Blaster" class="object-cover w-full h-64 rounded-md shadow-lg">
                </div>

                <div class="flex flex-col items-center">
                    <h1 class="text-4xl font-bold text-blue-800 mb-4">Welcome to Sachin Tendulkar's Official Website</h1>

                    <p class="text-gray-700 mb-4 text-center">Explore the incredible journey of Sachin Tendulkar, the legendary cricketer who has left an indelible mark on the history of the sport.</p>

                    <p class="text-gray-700 mb-4 text-center">From his early days in Mumbai to achieving numerous records on the international stage, Sachin's career is a testament to his dedication and passion for cricket.</p>

                    <p class="text-gray-700 mb-4 text-center">This website is a tribute to the Master Blaster, providing insights into his life, career milestones, and the impact he has had on the world of cricket.</p>

                    <a href="{{ route('about') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-md transition duration-300">Learn More</a>
                </div>

                <div class="grid grid-cols-3 gap-4 mt-8">
                    <div class="bg-white shadow-lg rounded-md p-4">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Early Years</h2>

                        <p class="text-gray-700 mb-4">Sachin Tendulkar was born on April 24, 1973, in Nirmal Nagar, Bombay (now Mumbai), India. He started playing cricket at a young age, and his talent was quickly recognized.</p>

                        <p class="text-gray-700 mb-4">At the age of 16, Sachin made his international debut for India against Pakistan in 1989. He went on to become one of the most successful batsmen in the history of cricket.</p>
                    </div>

                    <div class="bg-white shadow-lg rounded-md p-4">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">International Career</h2>

                        <p class="text-gray-700 mb-4">Sachin Tendulkar played international cricket for 24 years, scoring over 34,000 runs in all formats. He is the only player to have scored more than 100 centuries in international cricket.</p>

                        <p class="text-gray-700 mb-4">Sachin was a prolific run-scorer, and he was also a very reliable fielder. He was known for his ability to make runs under pressure and for his ability to play shots all over the field.</p>
                    </div>

                    <div class="bg-white shadow-lg rounded-md p-4">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Retirement and Legacy</h2>

                        <p class="text-gray-700 mb-4">Sachin Tendulkar retired from international cricket in 2012. He is considered to be one of the greatest cricketers of all time.</p>

                        <p class="text-gray-700 mb-4">Sachin's legacy extends beyond his cricket achievements. He is an inspiration to millions of people around the world, and he is a role model for young cricketers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


