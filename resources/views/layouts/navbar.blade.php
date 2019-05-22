<div class="bg-blue-700 px-4 sm:px-6 py-3 flex items-center justify-between shadow h-16 fixed top-0 left-0 right-0 z-50">
    <div class="flex items-center text-white">
        <svg class="fill-current h-6 w-6 mr-2 feather feather-book-open" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
        <span class="font-semibold text-sm sm:text-xl tracking-tight">SCHOOL MS</span>
    </div>
    <div class="relative">
        @auth
            <div class="flex items-center cursor-pointer" id="opennavdropdown">
                <img class="w-8 h-8 rounded-full mr-2" src="{{ asset('images/profile/' . auth()->user()->profile_picture) }}" alt="Avatar">
                <p class="text-sm text-white font-semibold leading-none">{{ auth()->user()->name }}</p>
                <svg class="w-4 h-4 stroke-current text-gray-200 ml-1 feather feather-chevron-down" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
            <div class="bg-blue-700 absolute top-0 right-0 mt-12 -mr-6 shadow rounded-bl rounded-br">
                <div class="hidden h-24 w-48" id="navdropdown">
                    <div class="px-8 py-4 border-t border-blue-800">
                        <a href="{{ route('profile') }}" class="flex items-center pb-3 text-sm text-gray-200 font-semibold">
                            <svg class="h-4 w-4 mr-2 fill-current text-gray-200" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-alt" class="svg-inline--fa fa-user-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 288c79.5 0 144-64.5 144-144S335.5 0 256 0 112 64.5 112 144s64.5 144 144 144zm128 32h-55.1c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16H128C57.3 320 0 377.3 0 448v16c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48v-16c0-70.7-57.3-128-128-128z"></path></svg>
                            <span>Profile</span>
                        </a>
                        <form action="{{ route('logout') }}" method="POST" class="pb-2">
                            @csrf
                            <button class="flex items-center text-sm text-gray-200 font-semibold focus:outline-none" type="submit">
                                <svg class="h-4 w-4 mr-2 fill-current text-gray-200" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-out-alt" class="svg-inline--fa fa-sign-out-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"></path></svg>
                                <span>{{ __('Logout') }}</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @else 
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div>
                        <a class="flex items-center mr-4 text-sm text-gray-200 font-semibold" href="{{ route('login') }}">
                            <svg class="h-3 w-3 mr-1 fill-current text-gray-200" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-in-alt" class="svg-inline--fa fa-sign-in-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z"></path></svg>
                            <span>Login</span>
                        </a>
                    </div>
                @endif
            </div>
        @endauth
    </div>
</div>