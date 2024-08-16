@extends('layouts.master')
@section('content')

<div class="container grid grid-cols-12 gap-3 p-4 mx-auto bg-orange-100 rounded-xl shadow-lg">
    <div class="sm:col-span-5">
        <div class="p-6 mx-auto flex items-center space-x-4">
            {{-- <div class="shrink-0">
              <img class="size-12" src="/img/logo.svg" alt="ChitChat Logo">
            </div> --}}
            <div>
            <div class="text-xl font-bold text-black mb-2">Flame DI
                - Blogging platform
            </div>
              <p class="text-black leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem quidem fugiat temporibus expedita eveniet laborum pariatur tenetur cupiditate optio accusantium! </p>
            </div>
          </div>
    </div>
    <div class="sm:col-span-7">
        <img src="{{asset('assets/images/banner.jpeg')}}" class="rounded-xl" width="700" alt="">
    </div>
</div>

@endsection
@section('footer')
@endsection
