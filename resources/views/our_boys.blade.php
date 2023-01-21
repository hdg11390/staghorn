<x-guest>
    <div class="pt-4 mx-auto rounded max-w-7xl">
        <div class="bg-white ">
            <img src="{{ asset('images/boys.jpg') }}" class="px-12 pt-4" alt="">
            <p class="px-20 pt-8 font-semibold">Below are the "Studs" of Staghorn. All are kind, gentle males who love attention from adults and children alike. They are dogs with excellent house manners and families who love them dearly. We are very proud of our boys!</p>
            <div class="p-6 bg-white">
                <div class="container px-5 py-10 mx-auto ">
                    <div class="flex flex-wrap justify-center m-4 ">
                        @foreach (\App\Models\Dog::where('dogstat', '=', 'A')
                                                ->where('sex','like','M%')
                                                ->orderBy('birthday')->get() as $dog)
                            <div class="p-4 md:w-80">
                                <div class="h-full max-w-xs overflow-hidden border-2 border-gray-200 rounded-lg shadow-md shadow-staghorn-500 border-opacity-60">
                                    <img class="object-cover object-center lg:h-48 w-80" src="{{ asset( 'images/' . $dog->pic) }}" alt="blog">
                                    <div class="p-6">
                                        <h1 class="mb-3 text-lg font-semibold text-center text-gray-900 title-font h-14">{{ $dog->regName }}</h1>
                                        <p class="mb-3 leading-relaxed text-center">D.O.B. {{ \Carbon\Carbon::parse($dog->birthday)->format('F j, Y ') }}</p>
                                        <div class="flex flex-wrap justify-center ">
                                            <a href="{{ route('dogg', $dog) }}">
                                                <button class="flex px-5 py-1 mx-auto mt-2 text-white border-0 rounded bg-staghorn-400 focus:outline-none hover:bg-staghorn-500">{{ $dog->callName }}'s Page</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest>
