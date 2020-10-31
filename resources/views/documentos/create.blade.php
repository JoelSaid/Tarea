algo de create
<form action="{{url('/documentos')}}" method="post" enctype="multipart/form-data">
@csrf

<label for="documento">{{'documento'}}</label>
<input type="text" name="documento" id="documento" value="">

<label for="tipo">{{'tipo'}}</label>
<input type="text" name="tipo" id="tipo" value="">

<label for="area">{{'area'}}</label>
<input type="text" name="area" id="area" value="">

<label for="foto">{{'foto'}}</label>
<input type="text" name="foto" id="foto" value="">

<input type="submit" value="Agregar" >

</form>