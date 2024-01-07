<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
             {{ __('Category') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form method="post" action="{{ route('category.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
            @csrf
    <div class="max-w-xl">
        <x-input-label for="code" value="Code" />
        <x-text-input id="code" type="text" name="code" class="mt-1 block w-full" value="{{ old('code')}}"
            required />
        <x-input-error class="mt-2" :messages="$errors->get('code')" />
    </div>
    <div class="max-w-xl">
        <x-input-label for="nama" value="Kategori" />
        <x-text-input id="nama" type="text" name="nama" class="mt-1 block w-full" value="{{ old('nama')}}"
            required />
        <x-input-error class="mt-2" :messages="$errors->get('nama')" />
    </div>
    </div>
    <x-secondary-button tag="a" href="{{ route('category') }}">Cancel</x-secondary-button>
    <x-primary-button name="save_and_create" value="true">Save & Create Another</x-primary-button>
    <x-primary-button name="save" value="true">Save</x-primary-button>
</form>
</div>
</div>
</div>
</div>
</x-app-layout>