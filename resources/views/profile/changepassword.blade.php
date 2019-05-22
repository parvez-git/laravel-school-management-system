@extends('layouts.app')

@section('content')
    <div class="profile">
        <div class="sm:flex sm:items-center sm:justify-between mb-6">
            <div>
                <h2 class="text-gray-700 uppercase font-bold">Profile</h2>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('profile') }}" class="bg-gray-200 text-gray-700 text-sm uppercase py-2 px-4 flex items-center rounded">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Back</span>
                </a>
            </div>
        </div>
        <div class="mt-8 bg-white rounded">
            <form action="{{ route('profile.changepassword') }}" method="POST" class="w-full max-w-2xl px-6 py-12">
                @csrf
                <div class="md:flex md:items-center mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Current Password : 
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input name="currentpassword" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="password">
                        @if(session('msg_currentpassword'))
                            <p class="text-red-500 text-xs italic">{{ session('msg_currentpassword') }}</p>
                        @endif
                    </div>
                </div>
                <div class="md:flex md:items-center mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            New Password :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input name="newpassword" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="password">
                        @error('newpassword')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="md:flex md:items-center mb-4">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Confirm New Password :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input name="newpassword_confirmation" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="password">
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <button class="w-full shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                            Change Password
                        </button>
                    </div>
                </div> 
            </form>        
        </div>
    </div>
@endsection