<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

         <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-4 lg:px-0 ">
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

    @foreach ($posts as $post)
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                    <a href="/categories/{{ $post->category->slug}}">
                        <span class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                            {{ $post->category->name }}
                        </span>
                    </a>
                       <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>  
                    </div>
                    <a href="/posts/{{ $post->slug }}" class="hover:underline">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{  $post->title }}</h2>
                    </a>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit ($post->body, 150 )}}</p>
                    <div class="flex justify-between items-center">
                        <a href="/authors/{{ $post->author->username }}">
                        <div class="flex items-center space-x-3">
                            <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{ $post->author->name }}" />
                            <span class="font-medium text-sm dark:text-white">
                            {{ $post->author->name }}
                            </span>
                        </div>
                    </a>
                        <a href="/posts/{{ $post->slug }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline text-sm">
                            Read more
                        </a>
                    </div>
                </article>                
  
    @endforeach
          </div>  
        </div>


</x-layout>