<x-blade::card.base href="{{$href??'#'}}">
    <div>
        <div class=" w-full rounded overflow-hidden shadow-lg my-2 hover:shadow-lg md:mx-4">
            <img class="w-full" src="{{$imageUrl??'https://z3.ax1x.com/2021/06/23/RnKlMn.jpg'}}"
                 alt="Sunset in the mountains">
            <div class="px-3">
                <div class=" py-4">
                    <div class="font-bold  mb-2"> {{$title ?? ''}}</div>
                    <p class="text-grey-darker text-xs">
                        {{$des ?? ''}}
                    </p>
                </div>
                <div>
                    {{$slot}}
                </div>
            </div>
        </div>
    </div>
</x-blade::card.base>


