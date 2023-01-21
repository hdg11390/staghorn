<x-guest>
    <div class="py-6 bg-white">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white sm:rounded-lg">
                @foreach (\App\Models\Img::where('callName', '=', ($dog->callName))
                    ->where('img_pos','=','1')
                    ->orderBy('img_pos')->get() as $img)
                    <figure>
                        <img class="mx-auto" src="{{ asset( 'images/' . $img->pics) }}"  alt="">
                    <figcaption>
                        <p class="text-xs text-center text-gray-400 ">Photo by {{ $img->img_by }}</p>
                    </figcaption>
                    </figure>
                @endforeach

            <div class="max-w-6xl mx-auto">
                <h1 class="mt-8 mb-2 text-xl font-semibold text-center">{{ $dog->regName }} (a.k.a {{ $dog->callName }}) </h1>
                <p class="leading-relaxed text-center">({{ $dog->mped->regName }} X {{ $dog->fped->regName }})</h1>
                <p class="mb-3 leading-relaxed text-center">D.O.B. {{ \Carbon\Carbon::parse($dog->birthday)->format('F j, Y ') }}</p>
                <p class="mx-10 mb-3 leading-relaxed text-center ">{!! $dog->clearances !!}</p>
                <hr>
                <div class="max-w-6xl px-4 pt-4 mx-auto mb-3 prose-lg prose-p lg:px-16">
                        {!! $dog->blurb !!}
                </div>

                <div class="max-w-6xl px-4 pt-4 mx-auto mb-3 font-semibold prose-lg text-center prose-p">
                    <a  href="{{ route('show', $dog) }}"  >
                        <button class="inline-flex items-center px-2 py-1 mb-3 text-sm font-semibold text-center text-white transition duration-150 ease-in-out border border-transparent rounded-md bg-staghorn-400 hover:bg-staghorn-500 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25">
                            View {{ $dog->callName }}'s Pedigree
                        </button>
                    </a>
                </div>
                <hr>
                <div class="flex flex-wrap items-center justify-center max-w-5xl m-4 mx-auto md:flex-row">
                    @foreach (\App\Models\Img::where('callName', '=', ($dog->callName))
                        ->where('img_pos','>','1')
                        ->orderBy('img_pos')->get() as $img)
                        <figure>
                            <img class="px-4 pt-4" src="{{ asset( 'images/' . $img->pics) }}"  alt="">
                            <figcaption>
                                <p class="text-xs text-center text-gray-400 ">Photo by {{ $img->img_by }}</p>
                            </figcaption>
                        </figure>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-guest>
