@extends('layout')

@section('link')
<link href="{{ asset('css/Admin.css') }}" rel="stylesheet">
@endsection

@section('content')

<body>
    <div class="Add">
        <h1 class="Addhere">Add</h1>
        <form>
            <div class="space">
                <p>Nom</p>
                <input class="font" type="text" name="" placeholder="enter the name">
                <p class="font">Quantity</p>
                <input class="font" type="text" name="" placeholder="how much">
            </div>
            <p class="font">Categorie</p>
            <input class="font" type="text" name="" placeholder="enter the class">
            <p class="font">the Price</p>
            <input class="font" type="file" name="" placeholder="Money $">
            <p class="font">the picture</p>
            <input class="font" type="text" name="" placeholder="the pictures">
            <input class="font" type="submit" name="" value="Add">
        </form>
    </div>
</body>
@endsection
