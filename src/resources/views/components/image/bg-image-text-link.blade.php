<div class="block rounded h-96 w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom  {{$boxClass??''}} "
     style="background-image: url('{{$imageUrl ?? ''}}'); {{isset($imageUrl)?'':'background-color: #74b3fb'  }} {{$boxStyle??''}} ">
    <div class="container mx-auto">
        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
            <p class=" text-2xl my-4">{{$title??''}}</p>
            <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black"
               href="{{$href??"#"}}">{{$hrefTitle??''}}</a>
        </div>
    </div>
</div>