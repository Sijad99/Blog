@extends('dashboard.master')


@section('ac2') w-full font-thin text-blue-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500 bg-gradient-to-l from-white to-blue-100 border-l-4 border-blue-500  border-l-4 border-blue-500 @endsection
@section('lac2') # @endsection

@if($auth->avatar_id)
@section('avatar')
    {{$auth->avatar->path}}
@endsection
@endif

@section('avatarName')
    {{ $auth->name }}
@endsection

@section('body')

            <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
                <div class="flex flex-col flex-wrap sm:flex-row ">
                    <div class="container mx-auto px-4 sm:px-8 max-w-8xl">
                        <div class="py-8">
                            <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full ">
                                <h2 class="text-2xl leading-tight">
                                    کاربران
                                </h2>
                                <div class="text-end">
                                    <form
                                        class="flex flex-col md:flex-row w-3/4 md:w-full max-w-sm md:space-x-3 space-y-3 md:space-y-0 justify-center">
                                        <div class=" relative ">
                                            <input type="text" id="&quot;form-subscribe-Filter"
                                                class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                                placeholder="نام" />
                                        </div>
                                        <button
                                            class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200"
                                            type="submit">
                                            فیلتر
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                                    <table class="min-w-full leading-normal">
                                        <thead>
                                            <tr>
                                                <th scope="col"
                                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                                    کاربر
                                                </th>
                                                <th scope="col"
                                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                                    نقش
                                                </th>
                                                <th scope="col"
                                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                                    ایجاد شده در
                                                </th>
                                                <th scope="col"
                                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                                    وضعیت
                                                </th>
                                                <th scope="col"
                                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-right text-sm uppercase font-normal">
                                                    اقدامات
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($users as $user)
                                            <tr >
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0">
                                                            <a class="block relative">
                                                                @if($user->avatar_id)
                                                                    <img alt="profile" src="{{ $user->avatar->path }}" class="mx-auto object-cover rounded-full h-10 w-10 " />

                                                                @else
                                                                    <img alt="profile" src="{{ url('/assets/images/user.png') }}" class="mx-auto object-cover rounded-full h-10 w-10 " />
                                                                @endif
                                                            </a>
                                                        </div>
                                                        <div class="mr-3">
                                                            <p class="text-gray-900 whitespace-no-wrap hover:text-blue-500">
                                                                {{$user->name}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        @foreach($user->roles as $role)
                                                            <span class="hover:text-blue-500">{{$role->name}}</span>
                                                            <br>
                                                        @endforeach
                                                    </p>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <p class="text-gray-900 whitespace-no-wrap hover:text-blue-500">
                                                        {{ Hekmatinasser\Verta\verta::instance($user->created_at)->formatDifference() }}
                                                    </p>
                                                </td>
                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <span class="relative inline-block px-3 py-1 text-green-900 leading-tight">

                                                        @if($user->email_verified_at == null)

                                                            <span aria-hidden="true" class="absolute inset-0 bg-red-200 opacity-50 rounded-full">
                                                        </span>
                                                            <span class="relative hover:text-blue-500">
                                                            غیر فعال
                                                        </span>

                                                        @else

                                                            <span aria-hidden="true" class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                                        </span>
                                                            <span class="relative hover:text-blue-500">
                                                            فعال
                                                        </span>

                                                        @endif

                                                    </span>
                                                </td>

                                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                    <div class="flex">
                                                        <a href="{{ route('dashboard.edit',$user->id)}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#F9A602"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z"/></svg>
                                                        </a>

{{--                                                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}--}}
{{--                                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']); !!}--}}
{{--                                                        {!! Form::close() !!}--}}
                                                        <form method="POST" action="{{ route('dashboard.destroy' ,$user->id) }}">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="Delete">
                                                        <a href="#" onclick="event.preventDefault();this.closest('form').submit();">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FF0000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg>
                                                        </a>
                                                        </form>
                                                    </div>

                                                </td>
                                            </tr>


                                        @endforeach





                                        </tbody>
                                    </table>
                                    <div
                                        class="px-5 bg-white py-5 flex flex-col xs:flex-row items-center xs:justify-between">
                                        <div class="flex items-center">
                                            <button type="button"
                                                class="w-full p-4 border text-base rounded-r-xl text-gray-600 bg-white hover:bg-gray-100">
                                                <svg width="9" fill="currentColor" height="8" class=""
                                                    viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button type="button"
                                                class="w-full px-4 py-2 border-t border-b text-base text-indigo-500 bg-white hover:bg-gray-100 ">
                                                ۱
                                            </button>
                                            <button type="button"
                                                class="w-full px-4 py-2 border text-base text-gray-600 bg-white hover:bg-gray-100">
                                                ۲
                                            </button>
                                            <button type="button"
                                                class="w-full px-4 py-2 border-t border-b text-base text-gray-600 bg-white hover:bg-gray-100">
                                                ۳
                                            </button>
                                            <button type="button"
                                                class="w-full px-4 py-2 border text-base text-gray-600 bg-white hover:bg-gray-100">
                                                ۴
                                            </button>
                                            <button type="button"
                                                class="w-full p-4 border-t border-b border-l text-base  rounded-l-xl text-gray-600 bg-white hover:bg-gray-100">
                                                <svg width="9" fill="currentColor" height="8" class=""
                                                    viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
