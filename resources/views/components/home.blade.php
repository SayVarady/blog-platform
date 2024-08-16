@extends('layouts.master')
@section('content')
<div class="container-fluid mt-5" id="pop-up">
    <div class="bg-slate-400 shadow-lg rounded-lg p-6 max-w-md mx-auto text-center">
        <h4 class="text-2xl font-semibold text-white mb-2">FLAME DI</h4>
        <span class="text-white text-lg mb-4 block">A place where you can share you daily life or your life style blog.</span>
        <div class="mt-4">
            <a href="#" class="bg-slate-700 hover:bg-slate-900 text-white  font-bold py-2 px-4 rounded transition duration-300">
                Get inspired here!
            </a>
        </div>
    </div>
</div>
@endsection
@section('footer')
<script type="module">
    $(document).ready(function(){
        setTimeout(() => {
            $("#pop-up").css("display", "none");
        }, 2000);
    });
</script>
@endsection

