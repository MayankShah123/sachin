<!-- resources/views/details.blade.php -->

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
  <div class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-7xl p-8 bg-white shadow-lg rounded-md">
      <div class="mb-8">
        <h1 class="text-4xl font-bold text-blue-800 mb-4">Sachin Tendulkar - Key Details</h1>

        <div class="flex flex-col md:flex-row">
          <div class="md:w-1/3 mr-8">
            <img src="{{ asset('images/Sachin-Tendulkar-Profile.jpg') }}" alt="Sachin Tendulkar Profile Image" class="object-cover w-full h-64 rounded-md shadow-lg">
          </div>

          <div class="md:w-2/3">
            <ul class="list-disc pl-6 text-gray-700">
              <li><strong>Full Name:</strong> Sachin Ramesh Tendulkar</li>
              <li><strong>Date of Birth:</strong> April 24, 1973</li>
              <li><strong>Place of Birth:</strong> Mumbai, India</li>
              <li><strong>Nationality:</strong> Indian</li>
              <li><strong>Role:</strong> Right-handed Batsman</li>
              <li><strong>Bowling Style:</strong> Right-arm Leg Spin</li>
              <li><strong>Debut:</strong> November 15, 1989 (ODI vs Pakistan)</li>
              <li><strong>Retirement:</strong> December 16, 2012</li>
            </ul>
          </div>
        </div>

        <div class="mt-8">
          <h2 class="text-2xl font-bold text-gray-800 mb-4">Notable Records and Achievements</h2>

          <ul class="list-disc pl-6 text-gray-700">
            <li>First player to score 10,000 runs in both ODIs and Test cricket.</li>
            <li>Highest run-scorer in both ODIs (18,426 runs) and Test cricket (15,921 runs).</li>
            <li>First player to score a double century in both ODIs and Test cricket.</li>
            <li>Most centuries (49) and half-centuries (96) in ODIs.</li>
            <li>Most centuries (51) and half-centuries (68) in Test cricket.</li>
            <li>Only player to score 30,000 international runs.</li>
            <li>World record for most centuries in international cricket (100).</li>
            <li>Won the Arjuna Award (1994), Rajiv Gandhi Khel Ratna Award (1997), and Padma Shri (1999) for his contributions to cricket.</li>
            <li>Named the Player of the Tournament in the 2003 Cricket World Cup.</li>
            <li>Awarded the Bharat Ratna, India's highest civilian award, in 2008.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection

