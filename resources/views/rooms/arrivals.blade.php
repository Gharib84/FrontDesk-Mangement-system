<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('F.D.System') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-center">

                    <!-- component -->

                    <!-- component -->
                    <div class="flex items-center justify-center p-12">
                        <!-- Author: FormBold Team -->
                        <!-- Learn More: https://formbold.com -->
                        <div class="mx-auto w-full">
                            <form action=" {{ route('books.store') }}" method="post">
                                @csrf
                                <h1 class="mb-5 font-bold text-lg text-left text-blue-700">
                                    <!-- /resources/views/post/create.blade.php -->

                                    Search For Arrivals
                                </h1>

                                @if ($errors->any())
                                    <div role="alert" class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="mb-5">
                                    <label for="arrival_date"
                                        class=" text-left mb-3 block text-base font-medium text-[#07074D]">
                                        Arrival Date
                                    </label>
                                    <input type="date" name="arrival_date" id="subject"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>

                                <div>
                                    <button type="submit"
                                        class="hover:shadow-form rounded-md bg-[#5b21b6] py-3 px-8 text-base font-semibold text-white outline-none block">
                                        Search Now
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- end form --}}
                </div>
            </div>
        </div>

</x-app-layout>
