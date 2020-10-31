<form action="{{ url('/documentos',['documento'=>$documento->id]) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

<label for="documento">{{'documento'}}</label>
<input type="text" name="documento" id="documento" value="{{$documento->documento}}">

<label for="tipo">{{'tipo'}}</label>
<input type="text" name="tipo" id="tipo" value="{{$documento->tipo}}">

<label for="area">{{'area'}}</label>
<input type="text" name="area" id="area" value="{{$documento->area}}">

<label for="foto">{{'foto'}}</label>
{{$documento->foto}}
<input type="text" name="foto" id="foto" value="{{$documento->foto}}">  

<input type="submit" value="Editar">

</form>