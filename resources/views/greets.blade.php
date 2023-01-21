<x-guest>
    <div class="mx-auto max-w-7xl">
        <div class="bg-white ">
          <p class="px-20 pt-8 font-semibold">I'd like to introduce my current female Labs to you. Our girls are all well socialized, friendly, sound bitches, who love to take turns coming inside for a frolic, a snooze on the couch, an extra treat and lots of lovin's from us. Usually as they balance themselves on my lap in the lazy boy (girl) chair! I am very proud of their temperament, their kind ways and winning expressions. Most visitors to our home are impressed with their looks, brains and spirit.</p>
            <div class="p-6 bg-white">
                <div class="container px-5 py-10 mx-auto ">
                    <div class="flex flex-wrap justify-center m-4 ">

                     @foreach (\App\Models\Dog::where('dogstat', '=', 'G')
                                               ->orderBy('birthday')->get() as $dog)



                      <div class="p-4 md:w-80">
                        <div class="h-full max-w-xs overflow-hidden border-2 border-gray-200 rounded-lg shadow-md shadow-staghorn-500 border-opacity-60">
                          <img class="object-cover object-center lg:h-48 w-80" src="{{ asset( 'images/' . $dog->pic) }}" alt="blog">
                          <div class="p-6">
                             <h1 class="mb-3 text-lg font-semibold text-center text-gray-900 title-font h-14">{{ $dog->regName }}</h1>
                            <p class="mb-3 leading-relaxed text-center">D.O.B. {{ \Carbon\Carbon::parse($dog->birthday)->format('F j, Y ') }}</p>
                            <div class="flex flex-wrap justify-center ">
                              <a href="/dog/{{ $dog->id }}">
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

