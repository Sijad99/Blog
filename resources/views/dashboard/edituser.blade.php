@extends('dashboard.master')


@section('ac2') w-full font-thin text-blue-500 flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:text-blue-500 bg-gradient-to-l from-white to-blue-100 border-l-4 border-blue-500  border-l-4 border-blue-500 @endsection
@section('lac2') # @endsection

@section('body')



    <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row ">
            <div class="container mx-auto px-4 sm:px-8 max-w-8xl">
{{--                alert--}}
                @include('dashboard.partial-alert-users')
                <div class="py-8">
                    <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full ">
                        <h2 class="text-2xl leading-tight">
                            تغییر کاربر
                        </h2>
                        <div class="text-end">
                        </div>
                    </div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <div class="px-5 bg-white py-5 flex flex-col xs:flex-row xs:justify-between">

                                    {!! Form::model($user , ['route' => ['dashboard.update', $user->id], 'method' => 'put','autocomplete'=>"off"]) !!}
                                    <div class="w-full">
                                        {!! Form::label('name', 'نام :', ['class' => '']); !!}
                                        {!! Form::text('name', $user->name , ['class' => 'w-full hover:text-blue-500',]); !!}
                                        <br>
                                    </div>
                                    <div class="w-full">
                                        {!! Form::label('email', 'آدرس ایمیل :', ['class' => '']); !!}
                                        {!! Form::text('email',  $user->email , ['class' => 'w-full hover:text-blue-500']); !!}
                                        <br>
                                    </div>
                                    <div class="w-full">
                                        {!! Form::label('password', 'رمز عبور :', ['class' => '']); !!}
                                        {!! Form::password('password' , ['class' => 'w-full block hover:text-blue-500','autocomplete'=>"new-password"]); !!}
                                        <br>
                                    </div>
                                    <div class="w-full">
                                        {!! Form::label('roles', 'نقش کاربر :', ['class' => '']); !!}
                                        {!! Form::select('role', $roles , null , ['class' => 'w-full']); !!}
                                        <br>
                                    </div>
                                    <div class=" border-red-900 border-2 rounded-lg">
                                        {!! Form::submit('Update', ['class' => 'w-full items-center hover:bg-red-500']); !!}
                                    </div>
                                    {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
