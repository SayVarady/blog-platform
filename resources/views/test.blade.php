<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/components/vue.js')

</head>
<body>
    <div id="app">
        <input type="text" v-model="data.name">
        <input type="text" v-model="data.title">
        <button @click="hello()">Hello world</button>
    </div>
    {{-- <div style="background-color: green; z-index: 9999;">
        <div id="first-element">First Element</div>
        <div id="second-element">Second Element</div>
        <div id="third-element">Third Element</div>
        <button id="start-tour-btn">Start Tour</button>
    </div> --}}

    @section('footer')
    <script>
    </script>
    @endsection
</body>
</html>
