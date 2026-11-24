<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/catalogo', function(){
    $arrayGeneri =[
        ['category'=>'Rock','img'=>'https://i.scdn.co/image/ab67616d00001e026e996745f2c7b8036abef213'],
        ['category'=>'Rap', 'img'=>'https://image-cdn-ak.spotifycdn.com/image/ab67706c0000d72c54b133282efaec2a07cc05fc'],
        ['category'=>'Pop','img'=>'https://i.scdn.co/image/ab67616d00001e028863bc11d2aa12b54f5aeb36'],
        ['category'=>'Elettronica','img'=>'https://images.equipboard.com/uploads/group/image/3977/daft-punk-big.jpg'],
        ['category'=>'Indie','img'=>'https://i.scdn.co/image/ab67616d00001e021ca662be5e898820c3baed34'],
        ['category'=>'Latina','img'=>'https://i.scdn.co/image/ab67616d00001e02955c3c2ac8d97e1355b2e3c2'],
        ['category'=>'Classica','img'=>'https://i.scdn.co/image/ab67616d00001e02534bf0287e8d58ba7fab76dd'],
        ['category'=>'Jazz','img'=>'https://www.elegancecafe.it/wp-content/uploads/2017/12/louis-armstrong-300x300.jpg'],
        ['category'=>'R&B','img'=>'https://i.scdn.co/image/ab67616d00001e021c8ca4907c9f187456fe3f2c'],
        ['category'=>'Country','img'=>'https://i.scdn.co/image/ab67706f000000028dc8ad68abfc63e4072ae5dd']
    ];
    return view('catalogo',['generi'=>$arrayGeneri]);
});

Route::get('/top', function(){

    $arrayTop = [
        ['name'=>'Marco Mengoni', 'canz'=>'Giornate perse', 'img'=>'https://image-cdn-ak.spotifycdn.com/image/ab67706c0000da841cc3588d80aad68e1f398d2f'],
        ['name'=>'Gaia', 'canz'=>'Senz allegria', 'img'=>'https://image-cdn-ak.spotifycdn.com/image/ab67706c0000d72cd85520e81969fe1115500b3f'],
        ['name'=>'Annalisa & Madame', 'canz'=>'Amica', 'img'=>'https://i.scdn.co/image/ab67616d0000b273454dc969c9da59f7a42c221c'],
        ['name'=>'Pinguini Tattici Nucleari', 'canz'=>'Nella borsa di Anna', 'img'=>'https://m.media-amazon.com/images/I/51JO0lNycFL._UXNaN_FMjpg_QL85_.jpg'],
        ['name'=>'Tananai', 'canz'=>'Buonanotte anche stanotte', 'img'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhNCYB8Brsx2NkgsWCm0XOtscKCu7yPRAWUlCc1ymsIcpJm7mL1gGkryw&s=10'],
        ['name'=>'Karol G', 'canz'=>'BbY WOW', 'img'=>'https://i.scdn.co/image/ab67616d00001e02a6b1ebd70d46f03b2e537a7e'],
        ['name'=>'Cesare Cremonini', 'canz'=>'Paparazzi', 'img'=>'https://pickasso.spotifycdn.com/image/ab67c0de0000deef/dt/v1/img/artistmix/396Jr76018oUMR6QBnqT8T/en'],
        ['name'=>'Tame Impala & SZA ', 'canz'=>' Flower In A Hurricane', 'img'=>'https://i.scdn.co/image/ab67616d00001e024c4af9f49f2c276dca687ced'],
        ['name'=>'Max Pezzali', 'canz'=>'1. Le ali', 'img'=>'https://i.scdn.co/image/ab67616d00001e02044b321b60cb6e9e502c6d07'],
        ['name'=>'Adéla', 'canz'=>'Ain t In LA', 'img'=>'https://i.scdn.co/image/ab67616d00001e02d50dfa7431e9536afe47c8c6'],
    ];
    return view('top', ['top'=>$arrayTop]);
});
