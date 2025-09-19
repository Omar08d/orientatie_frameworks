@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
  <h1 class="text-3xl font-bold mb-6 text-center">Showroom</h1>

  <div class="grid gap-4 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
    @forelse($cars as $car)
      <a href="{{ route('contact') }}" class="block bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
        <h2 class="text-lg font-semibold p-3">{{ $car['brand'] }} - {{ $car['model'] }}</h2>
        <div class="relative">
          <img src="{{ asset('images/cars/' . $car['image']) }}" alt="{{ $car['brand'] }} {{ $car['model'] }}" class="w-full h-40 object-cover">
          <p class="absolute bottom-2 right-2 bg-black/70 text-white text-sm px-2 py-1 rounded sm:hidden">
            €{{ number_format($car['price'], 0, ',', '.') }}
          </p>
        </div>
        <div class="p-3 sm:block">
          <p class="font-bold mb-2 hidden sm:block">€{{ number_format($car['price'], 0, ',', '.') }}</p>
          <button class="hidden lg:inline-block bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">
            Bekijk details
          </button>
        </div>
      </a>
    @empty
      <p class="text-center text-gray-500">Er zijn nog geen auto's beschikbaar.</p>
    @endforelse
  </div>
</div>
@endsection
