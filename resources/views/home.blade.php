
@extends('layouts/app')
@section('content')

<div class="w-3/5 border border-gray-600 h-auto  border-t-0">
    <!--middle wall-->

    <div class="flex">
        <div class="flex-1 m-2">
            <h2 class="px-4 py-2 text-xl font-semibold text-blue">Home</h2>
        </div>
        <div class="flex-1 px-4 py-2 m-2">
            <a href="" class=" text-2xl font-medium rounded-full text-blue hover:bg-white-800 hover:text-blue-300 float-right">
                <svg class="m-2 h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><g><path d="M22.772 10.506l-5.618-2.192-2.16-6.5c-.102-.307-.39-.514-.712-.514s-.61.207-.712.513l-2.16 6.5-5.62 2.192c-.287.112-.477.39-.477.7s.19.585.478.698l5.62 2.192 2.16 6.5c.102.306.39.513.712.513s.61-.207.712-.513l2.16-6.5 5.62-2.192c.287-.112.477-.39.477-.7s-.19-.585-.478-.697zm-6.49 2.32c-.208.08-.37.25-.44.46l-1.56 4.695-1.56-4.693c-.07-.21-.23-.38-.438-.462l-4.155-1.62 4.154-1.622c.208-.08.37-.25.44-.462l1.56-4.693 1.56 4.694c.07.212.23.382.438.463l4.155 1.62-4.155 1.622zM6.663 3.812h-1.88V2.05c0-.414-.337-.75-.75-.75s-.75.336-.75.75v1.762H1.5c-.414 0-.75.336-.75.75s.336.75.75.75h1.782v1.762c0 .414.336.75.75.75s.75-.336.75-.75V5.312h1.88c.415 0 .75-.336.75-.75s-.335-.75-.75-.75zm2.535 15.622h-1.1v-1.016c0-.414-.335-.75-.75-.75s-.75.336-.75.75v1.016H5.57c-.414 0-.75.336-.75.75s.336.75.75.75H6.6v1.016c0 .414.335.75.75.75s.75-.336.75-.75v-1.016h1.098c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z"></path></g>
                </svg>
            </a>
        </div>
    </div>

    <hr class="border-gray-600">
    <!--middle creat tweet-->
    <form method="post" action="{{route('addpost')}}">
        @csrf

    <div class="flex">
        <div class="m-2 w-10 py-1">
            <img class="inline-block h-10 w-10 rounded-full" src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="" />
        </div>


        <div class="flex-1 px-2 pt-2 mt-2">


             <textarea name="content" class=" bg-transparent text-gray-400 font-medium text-lg w-full" rows="2" cols="50" placeholder="What's happening?"></textarea>
        </div>

    </div>
    <!--middle creat tweet below icons-->
    <div class="flex">
        <div class="w-10"></div>

        <div class="w-64 px-2">

            <div class="flex items-center">
                <div class="flex-1 text-center px-1 py-1 m-2">
                    <a href="#" class="mt-1 group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                      </a>
                </div>

                <div class="flex-1 text-center py-2 m-2">
                    <a href="#" class="mt-1 group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </a>
                </div>

                <div class="flex-1 text-center py-2 m-2">
                    <a href="#" class="mt-1 group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </a>
                </div>

                <div class="flex-1 text-center py-2 m-2">
                    <a href="#" class="mt-1 group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                    <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </a>
                </div>
            </div>
        </div>

        <div class="flex-1">
            <button type="submit" class="bg-white-400 mt-5 hover:bg-white-600 text-blue font-bold py-2 px-8 rounded-full mr-8 float-right">
                POST
              </button>
        </div>
    </div>
</form>

    <hr class="border-800 border-4">





@foreach($posts as $post)


<!--first tweet start-->
<div class="flex flex-shrink-0 p-4 pb-0">
    <a href="#" class="flex-shrink-0 group block">
      <div class="flex items-center">
        <div>
          <img class="inline-block h-10 w-10 rounded-full" src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="" />
        </div>
        <div class="ml-3">
          <p class="text-base leading-6 font-medium text-blue">
            {{$post->user->name}}
            <span class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                 {{$post->created_at->diffForHumans()}}
              </span>
               </p>
        </div>
      </div>
    </a>
</div>
<div class="pl-16">
    <p class="text-base width-auto font-medium text-blue flex-shrink">
        {{$post->content}}
    </p>


    <div class="flex">
        <div class="w-full">

            <div class="flex items-center">
                <div class="flex-1 text-center">
                    <a href="{{route('getPost',  $post->id)}}" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                      </a>
                </div>

                <div class="flex-1 text-center py-2 m-2">
                    <button type="submit" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="text-center h-7 w-6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M2 21l4-4h14a2 2 0 002-2V5a2 2 0 00-2-2H4a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                          </svg>

                            {{$likes}}
                    </button>
                </div>

                <div class="flex-1 text-center py-2 m-2">
                    <a href="#" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </a>
                </div>

                <div class="flex-1 text-center py-2 m-2">
                    <a href="#" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                </a>
                </div>
                <div class="flex-1 text-center py-2 m-2">
                    <a href="#" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="text-center h-7 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                          </svg>

                    </a>
                </div>
                <div class="flex-1 text-center py-2 m-2">
                    <a href="#" class="w-12 mt-1 group flex items-center text-gray-500 px-3 py-2 text-base leading-6 font-medium rounded-full hover:bg-white-800 hover:text-blue-300">
                        <svg class="text-center h-7 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6h18M8.257 6l-.429-2H4.172l-.428 2M6 6V4.1c0-.694.332-1.313.843-1.703C6.552 2.196 6.98 2 7.429 2h9.143c.45 0 .877.196 1.586.397.511.39.843 1.009.843 1.703V6M8 9v10a2 2 0 002 2h4a2 2 0 002-2V9M3 6V4h18v2"></path>
                          </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
