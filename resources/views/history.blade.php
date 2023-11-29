<!-- resources/views/history.blade.php -->

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
                <h1 class="text-4xl font-bold text-blue-800 mb-4">A Chronicle of Sachin Tendulkar's Cricket Journey</h1>

                <p class="text-gray-700 mb-4">Sachin Tendulkar's cricket journey is an epic tale of unwavering passion, exceptional talent, and unparalleled achievements. His remarkable career, spanning over two decades, has left an indelible mark on the sport, inspiring generations of cricket enthusiasts worldwide.</p>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">Early Days and Auspicious Beginnings</h2>

                <p class="text-gray-700 mb-4">Born in Mumbai, India, on April 24, 1973, Sachin Tendulkar's cricketing prowess was evident from a young age. His natural flair for the game and unwavering dedication quickly caught the attention of cricket experts. At the tender age of 16, Sachin made his international debut for India against Pakistan in 1989, marking the beginning of an illustrious career that would redefine the standards of batsmanship.</p>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">A Decade of Dominance and Record-Breaking Achievements</h2>

                <p class="text-gray-700 mb-4">The 1990s witnessed Sachin Tendulkar's meteoric rise as a cricketing icon. His consistent brilliance, coupled with his ability to handle pressure and deliver exceptional performances in crucial matches, earned him the admiration and respect of cricket fans worldwide. During this decade, he shattered numerous records and established himself as one of the most prolific run-scorers in the history of the sport.</p>


                <ul class="list-disc mb-4">
                    <li>Became the first player to score 10,000 runs in both ODIs and Test cricket.</li>
                    <li>Won the Arjuna Award (1994) and the Rajiv Gandhi Khel Ratna Award (1997) for his contributions to cricket.</li>
                    <li>Achieved the prestigious feat of scoring a double century in both ODIs and Test cricket.</li>
                    <li>Led India to victory in the 1998 Asia Cup and the 2000 Champions Trophy.</li>
                    <li>Established himself as the world's highest run-scorer in ODIs, a record he held until 2007.</li>
                </ul>

                <h2 class="text-2xl font-bold text-gray-800 mb-4">A Continued Legacy of Excellence and Inspiration</h2>

                <p class="text-gray-700 mb-4">The 2000s saw Sachin Tendulkar continue to excel at the highest level, cementing his position as one of the greatest batsmen of all time. His remarkable consistency, coupled with his ability to adapt to different playing conditions and bowling attacks, made him a formidable force in the cricketing world.</p>


                <ul class="list-disc mb-4">
                    <li>Surpassed Sir Garfield Sobers' record to become the world's highest run-scorer in Test cricket.</li>
                    <li>Led India to victory in the 2011 Cricket World Cup, fulfilling the nation'


