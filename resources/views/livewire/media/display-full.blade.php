<div class="container" class="bg-gray-200">
    <h1 class="content-start text-4xl text-center">{{$media->getDisplayNameAttribute()}}</h1>
    <x-jet-button>
        <a href="{{route('physical_release.create', ['mediaID'=>$media->id])}}">{{__('Add Physical Release')}}</a>
    </x-jet-button>
    <div class="flex my-4">
        <div class="w-3/4 h-12">
            <p class="ml-4 mt-2">{{$media->plot}}</p>
        </div>
        <div class="mx-4 w-1/4 bg-gray-400 h-24">
            <img src="{{$media->poster}}" class="object-cover shadow-lg rounded max-w-full h-auto align-middle border-none" alt="Movie Poster"/>
        </div>
    </div>
</div>
