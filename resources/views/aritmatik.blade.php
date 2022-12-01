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
                    
                    <div class="w-4/5 px-4 flex flex-wrap justify-center xl:mx-auto">
                        <form :action="route('data')" method="get" class="group mb-1 p-4  items-center  md:flex md:justify-center ">
                            <div class="w-full mb-4 m-3 mx-5">
                                <h2 class="text-lg text-primaryblue font-bold text-dark mb-4">Input First Number</h2>
                                <input type="text" name="firstnum" id="firstnum" value="<?= $x ?>" class=" bg-slate-200  rounded-lg shadow-md px-4 py-2 border-b-[3px] border-b-primaryblue w-56
                        focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none">
                            </div>
                            <div class="w-full mb-5 m-3 mx-5">
                                <h2 class="text-lg text-primaryblue font-bold text-dark mb-4">Operator ( + , - , *, / )</h2>
                                <input type="text" name="multi" id="multi" value="<?= $name ?>" class="bg-slate-200  rounded-lg shadow-md px-4 py-2 border-b-[3px] border-b-primaryblue  focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none">
                            </div>
                            <div class="w-full mb-5 m-3 mx-5">
                                <h2 class="text-lg text-primaryblue font-bold text-dark mb-4">Input Second Number</h2>
                                <input type="text" name="second" id="second
                                " value="<?= $y ?>" class="bg-slate-200  rounded-lg shadow-md px-4 py-2 border-b-[3px] border-b-primaryblue  focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none">
                            </div>
                            <div class="w-full mb-5 m-3 mx-5 mt-6">
                                <input type="submit" name="submit" class="font-bold mt-8 bg-slate-200  rounded-lg shadow-md px-4 py-2 border-b-[3px] border-b-primaryblue  hover:border-primary">
                            </div>
                        </form>

                        <div class="w-full mb-8 flex text-center flex-col items-center justify-center lg">
                            <h2 class="left-0 text-2xl text-black font-bold text-dark mb-6">{{$namek}}</h2>
                                <input type="text" name="result" id="result" value="<?= $result ?>" readonly class="text-center font-bold bg-slate-200  rounded-lg shadow-md px-4 py-2 border-b-[3px] border-b-primaryblue w-56 focus:ring-1 focus:border-primary focus:ring-primary focus:outline-none ">
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</x-app-layout>