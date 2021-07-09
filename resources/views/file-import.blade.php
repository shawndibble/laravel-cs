<x-guest-layout>
<div class="container mx-auto">
    <h2 class="mb-4">
        Laravel 8 Import and Export CSV & Excel to Database Example
    </h2>

    <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="" style="max-width: 500px; margin: 0 auto;">
                <x-label class="custom-file-label" for="customFile">Choose file</x-label>
                <x-input type="file" name="file" class="custom-file-input" id="customFile" />
        </div>
        <button class="py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">Import data</button>
    </form>
</div>
</x-guest-layout>
