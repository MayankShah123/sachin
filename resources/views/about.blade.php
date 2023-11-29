<!-- resources/views/about.blade.php -->

@extends('layout.app')

@section('appContents')
<div class="bg-gray-100 min-h-screen flex flex-col">

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

    <div class="bg-gray-100 min-h-screen flex items-center justify-center">
        <div class="w-full max-w-7xl p-8 bg-white shadow-lg rounded-md">
            <div class="mb-8">
                <h1 class="text-4xl font-bold text-blue-800 mb-4">About Sachin Tendulkar</h1>

                <p class="text-gray-700 mb-4">Sachin Tendulkar, often revered as the "God of Cricket," is an iconic Indian cricketer who has left an indelible mark on the sport. His exceptional talent, unwavering dedication, and remarkable achievements have earned him the respect and admiration of cricket enthusiasts worldwide. </p>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Early Years and Cricket Debut</h2>

                <p class="text-gray-700 mb-4">Born in Mumbai, India, on April 24, 1973, Sachin Tendulkar displayed exceptional cricketing talent from a young age. His natural ability to handle the bat, coupled with his unwavering passion for the sport, quickly caught the attention of cricket experts. At the tender age of 16, Sachin made his international debut for India against Pakistan in 1989. This marked the beginning of an illustrious career that would span over two decades and redefine the standards of batsmanship.</p>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Unparalleled Achievements and Records</h2>

                <p class="text-gray-700 mb-4">Sachin Tendulkar's career was punctuated by a series of groundbreaking achievements and records. He became the first player to score 10,000 runs in both One Day Internationals (ODIs) and Test cricket, a testament to his versatility and consistency across formats. His tally of 100 international centuries remains an unmatched record, solidifying his position as one of the greatest batsmen in the history of cricket.</p>

                <ul class="list-disc mb-4">
                    <li>Holds the record for the most centuries scored in both ODIs (49) and Test cricket (51).</li>
                    <li>Was the leading run-scorer in the 1996, 2003, and 2011 World Cups.</li>
                    <li>Won the Arjuna Award (1994), Rajiv Gandhi Khel Ratna Award (1997), and Padma Shri (1999) for his contributions to cricket.</li>
                    <li>Was named the Player of the Tournament in the 2003 Cricket World Cup.</li>
                    <li>Retired from international cricket in 2012 after scoring over 34,000 runs in all formats.</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Beyond Cricket: Philanthropy and Inspiration</h2>

                <p class="text-gray-700 mb-4">Sachin Tendulkar's impact extends far beyond the cricket field. He is a role model for millions around the world, inspiring young people with his dedication, humility, and philanthropic endeavors. In 1999, he established the Tendulkar Foundation, a non-profit organization dedicated to providing education and healthcare to underprivileged children. He also serves as a UNICEF Goodwill Ambassador, advocating for the rights of children worldwide.</p>

                <ul class="list-disc mb-4">
                    <li>Established the Tendulkar Foundation, which works to support underprivileged children and provide them with access to education and healthcare.</li>
                    <li>Appointed as a UNICEF Goodwill Ambassador in 2013, advocating for the rights of children.</li>
                    <li>Received the Padma Vibhushan, India's second-highest civilian award, in 2008.</li>
                    <li>Authored the autobiography "Playing It My Way" in 2010, providing insights into his life and career.</li>
                    <li>Continues to be an influential figure in the world of cricket and an inspiration to people worldwide.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection


