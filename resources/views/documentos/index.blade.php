 

<table class="table table-light">
    <thead class="thead-light">
    <tr>
    
        <th>#</th>
        <th>foto</th>
        <th>nombre</th>
        <th>area</th>
    
    </tr>
    </thead>
    <tbody>
    @foreach($documentos as $documento)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$documento->foto}}</td>
        <td>{{$documento->documento}} {{$documento->tipo}} </td>
        <td>{{$documento->area}}</td>
        <td>{{$documento->foto}}</td>
        <td>
            <a class="btn btn-warning" href="{{ url('/documentos',['documento'=>$documento->id.'/edit']) }}">
            Editar
            </a>    
        
        | 
        
            <form method="post" action="{{ url('/documentos',['documento'=>$documento->id]) }}" style="display:inline">
            {{csrf_field()}}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm ('¿Borrar?');" > Borrar </button>

            
            
            </form>
        
        </td>

    </tr>
    @endforeach
    </tbody>

</table>

