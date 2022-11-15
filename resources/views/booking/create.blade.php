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
                    <h1>
                        hello babe
                    </h1>

                    <!-- component -->

                    <!-- component -->
                    <div class="flex items-center justify-center p-12">
                        <!-- Author: FormBold Team -->
                        <!-- Learn More: https://formbold.com -->
                        <div class="mx-auto w-full">
                            <form action="https://formbold.com/s/FORM_ID" method="POST">
                                <div class="mb-5">
                                    <label for="room"
                                        class=" text-left mb-3 block text-base font-medium text-[#07074D]">
                                        Room Number 
                                    </label>
                                    <input type="number" name="room_number" id="name" min="1" max="250"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                                <div class="mb-5">
                                    <label for="guest_name"
                                        class=" text-left mb-3 block text-base font-medium text-[#07074D]">
                                        Guest Name
                                    </label>
                                    <input type="text" name="guest_name" id="email"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                                <div class="mb-5">
                                    <label for="room_type"
                                        class=" text-left mb-3 block text-base font-medium text-[#07074D]">
                                        Room Type 
                                    </label>
                                    <input type="text" name="room_type" id="subject"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                                <div class="mb-5">
                                    <label for="arrival_date"
                                        class=" text-left mb-3 block text-base font-medium text-[#07074D]">
                                        Arrival Date
                                    </label>
                                    <input type="date" name="arrival_date" id="subject"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                                <div class="mb-5">
                                    <label for="room_type"
                                        class=" text-left mb-3 block text-base font-medium text-[#07074D]">
                                        Departure Date
                                    </label>
                                    <input type="date" name="daparture_date" id="subject"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                                
                                <div>
                                    <button
                                        class="hover:shadow-form rounded-md bg-[#5b21b6] py-3 px-8 text-base font-semibold text-white outline-none block">
                                        Book Now
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
