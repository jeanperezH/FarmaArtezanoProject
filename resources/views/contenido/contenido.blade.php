@extends('principal')
@section('contenido')
    <template v-if="menu==0">
    <hello-world2></hello-world2>
    </template>
    
    <template v-if="menu==1">
    <h1>CONTENIDO DEL MENU 1</h1>
    </template>

    <template v-if="menu==2">
    <h1>CONTENIDO DEL MENU 2</h1>
    </template>

    <template v-if="menu==3">
    <h1>CONTENIDO DEL MENU 3</h1>
    </template>

    <template v-if="menu==4">
    <h1>CONTENIDO DEL MENU 4</h1>
    </template>

    <template v-if="menu==5">
    <h1>CONTENIDO DEL MENU 5</h1>
    </template>

    <template v-if="menu==6">
    <h1>CONTENIDO DEL MENU 6</h1>
    </template>

    <template v-if="menu==7">
    <h1>CONTENIDO DEL MENU 7</h1>
    </template>

    <template v-if="menu==8">
    <h1>CONTENIDO DEL MENU 8</h1>
    </template>

    <template v-if="menu==9">
    <h1>CONTENIDO DEL MENU 9</h1>
    </template>

@endsection