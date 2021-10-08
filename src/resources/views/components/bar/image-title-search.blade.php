<div class="flex items-center justify-between">
    <div class="flex items-center">
        <div>
            <x-blade::card.base href="/">
                <img class="h-32" src="{{$image_url??'https://cdn.hashnode.com/res/hashnode/image/upload/v1614758976047/Lv7LlMBkD.png?w=800&'}}">

            </x-blade::card.base>
        </div>
        <div class="text-bold text-2xl">{{$title}}</div>
    </div>
    <div>
        <div>
            <form class="m-2 flex">
                <input class="rounded-l-lg p-2 border-t mr-0 border-b border-l text-gray-400 border-gray-200 bg-white focus:border-gray-400" placeholder="大王天使..."/>
                <button class="px-8 rounded-r-lg text-white font-bold p-2 uppercase border-red-500 bg-red-500 border-t border-b border-r">
                    <span class="flex items-center">
                       <svg t="1625038219814" class="icon mr-2" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1254" width="16" height="16"><path d="M730.351308 804.961649c201.67103-116.434824 270.768358-374.309564 154.333535-575.980594S510.37528-41.787303 308.70425 74.64752 37.935891 448.957084 154.370715 650.628114s374.309564 270.768358 575.980593 154.333535z m-30.117647-52.165295C527.383957 852.591177 306.330833 793.360172 206.53601 620.510467S165.972192 226.607639 338.821897 126.812815s393.902828-40.563818 493.697652 132.285887 40.563818 393.902828-132.285888 493.697652z" p-id="1255" fill="#ffffff"></path><path d="M410.081015 190.001934C266.365627 272.976052 213.103952 451.180594 292.313364 588.37532a30.117647 30.117647 0 0 0 52.165295-30.117647C282.300776 450.562422 324.652534 308.877817 440.198662 242.167229a30.117647 30.117647 0 0 0-30.117647-52.165295z" p-id="1256" fill="#ffffff"></path><path d="M648.068366 782.914001m52.165295-30.117647l0 0q52.165295-30.117647 82.282942 22.047648l90.352942 156.495885q30.117647 52.165295-22.047648 82.282942l0 0q-52.165295 30.117647-82.282942-22.047648l-90.352941-156.495885q-30.117647-52.165295 22.047647-82.282942Z" p-id="1257" fill="#ffffff"></path></svg>
                        <span>搜索</span>
                    </span>
                </button>
            </form>
        </div>
    </div>
</div>