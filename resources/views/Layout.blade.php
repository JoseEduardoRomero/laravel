<!-- @include(header) //para que se rendericen los componentes 
@include(footer) 
@yield(content) //para que se llamen los hijos en el esapcio content
-->
<!-- para poder agregar yield se hace lo siguiente
extends('layout');
@section('content')
<div></div>
@endsection -->