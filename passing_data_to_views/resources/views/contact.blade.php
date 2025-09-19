@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 max-w-lg">
  <h1 class="text-3xl font-bold mb-6 text-center">Contact</h1>

  <div class="bg-white shadow rounded-2xl p-6 space-y-4">
    <p><strong>Bedrijf:</strong> {{ $company->name }}</p>
    <p><strong>Adres:</strong> {{ $company->address }}</p>
    <p><strong>Telefoon:</strong> {{ $company->phone }}</p>
    <p><strong>Email:</strong> <a href="mailto:{{ $company->email }}" class="text-blue-600 underline">{{ $company->email }}</a></p>

    <form action="#" method="POST" class="space-y-4 mt-6">
      @csrf
      <div>
        <label class="block text-sm font-medium">Naam</label>
        <input type="text" name="name" class="mt-1 w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
      </div>
      <div>
        <label class="block text-sm font-medium">E-mail</label>
        <input type="email" name="email" class="mt-1 w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
      </div>
      <div>
        <label class="block text-sm font-medium">Bericht</label>
        <textarea name="message" rows="4" class="mt-1 w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500"></textarea>
      </div>
      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Verstuur</button>
    </form>
  </div>
</div>
@endsection
