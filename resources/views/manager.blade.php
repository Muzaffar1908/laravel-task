<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manager Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="p-4 text-gray-900">
                        <h2 class="text-xl font-bold">Received Applications</h2>
                    </div>
{{--                    @foreach($applications as $application)--}}
                        <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg overflow-hidden mt-4">
                            <!-- Tepadagi qism (rasm, ism-familiya va "Last updated") -->
                            <div class="flex justify-between items-center p-4 border-b">
                                <!-- Rasm va ism-familiya (chap tomonda) -->
                                <div class="flex items-center">
                                    <!-- Rasm (kichik va dumaloq) -->
                                    <img src="{{ asset('upload/2.jpg') }}" class="rounded-full w-12 h-12 object-cover" alt="User Avatar">
                                    <!-- Ism va familiya -->
                                    <div class="ml-4">
                                        <h5 class="text-xl font-bold" style="margin-left: 10px">{{ $application->first_name  }}</h5> <!-- Foydalanuvchi ismi va familiyasi -->
                                    </div>
                                </div>
                                <!-- "Last updated" (o'ng tomonda) -->
                                <p class="text-gray-500 text-sm">2025-02-13 15:51</p>
                            </div>

                            <!-- Asosiy kontent -->
                            <div class="p-6">
                                <h4 class="text-gray-700">
                                    Muzaffar Akhmadaliyev
                                </h4>
                            </div>

                            <!-- Asosiy kontent -->
                            <div class="p-6">
                                <p class="text-gray-700">
                                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                </p>
                            </div>

                            <div class="flex items-center p-4 border-t">
                                Email example: muxaffarahmadaliyev99@gmail.com
                            </div>
                       </div>
{{--                    @endforeach--}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

