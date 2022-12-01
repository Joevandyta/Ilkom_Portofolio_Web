<x-app-layout>
    <x-slot name="title">
        Protofolio | Dashboard
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  border-b border-gray-200">

                    <form action="/review" method="POST" class="text-black">
                        @csrf

                        <div class="relative bg-primaryblue text-xl lg:text-xl font-bold px-3 py-4 mb-3 border-b-2
                                rounded-t-lg ">
                            Insert New Portofolio
                        </div>

                        <div class="mx-3 mt-3 flex flex-wrap text-black">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="portofolio_name" class="mb-3 block text-primaryblue font-semibold ">
                                        Portofolio Name
                                    </label>
                                    <input type="text" name="portofolio_name" id="portofolio_name" placeholder="Portofolio" class="w-full rounded-md border-b-2 bg-white py-3 px-6 font-medium  outline-none focus:border-second focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="category" class="mb-3 block text-primaryblue font-semibold ">
                                        Category
                                    </label>
                                    <input type="text" name="category" id="category" placeholder="Category" class="w-full rounded-md border-b-2 bg-white py-3 px-6 font-medium  outline-none focus:border-second focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="point" class="mb-3 block text-primaryblue font-semibold ">
                                        Point
                                    </label>
                                    <input type="text" name="point" id="point" placeholder="Point" class="w-full rounded-md border-b-2 bg-white py-3 px-6 font-medium  outline-none focus:border-second focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="organizer" class="mb-3 block text-primaryblue font-semibold ">
                                        Organizer
                                    </label>
                                    <input type="text" name="organizer" id="organizer" placeholder="Organizer" class="w-full rounded-md border-b-2 bg-white py-3 px-6 font-medium  outline-none focus:border-second focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                {{-- <div class="flex justify-center mt-8">
                                    <div class="rounded-lg shadow-xl bg-gray-50 lg:w-1/2">
                                        <div class="m-4">
                                            <label class="inline-block mb-2 text-gray-500">Upload
                                                Image(jpg,png,svg,jpeg)</label>
                                            <div class="flex items-center justify-center w-full">
                                                <label class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                                    <div class="flex flex-col items-center justify-center pt-7">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                            Select a photo</p>
                                                    </div>
                                                    <input type="file" class="opacity-0" />
                                                </label>
                                            </div>
                                        </div>
                                        <div class="flex p-2 space-x-4">
                                            <button class="px-4 py-2 text-white bg-red-500 rounded shadow-xl">Cannel</button>
                                            <button class="px-4 py-2 text-white bg-green-500 rounded shadow-xl">Create</button>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="mb-5">
                                    <label for="certificate" class="mb-3 block text-primaryblue font-semibold ">
                                        Certificate
                                    </label>
                                    <input type="text" name="certificate" id="certificate" placeholder="Certificate" class="w-full rounded-md border-b-2 bg-white py-3 px-6 font-medium  outline-none focus:border-second focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="date" class="mb-3 block text-primaryblue font-semibold ">
                                        Date
                                    </label>
                                    <input type="date" name="date" id="date" class="w-full rounded-md border  bg-white py-3 px-6 font-medium  outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center mb-4">

                            <input type="submit" name="submit" value="Save" class="hover:shadow-form rounded-md bg-second hover:bg-primaryblue py-3 px-8 text-center text-base font-semibold text-white outline-none">
                              
                        </div>
                    </form>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>