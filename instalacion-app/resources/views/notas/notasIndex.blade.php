@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-app-layout>
    <h1 class="p-4 mt-2 text-3xl font-bold text-center text-cian-300 bg-blue-800">
        TUS NOTAS
    </h1>
    <br> 
<div class="grid grid-cols-2 gap-4">
    
    <div class="m-8">
        <a href="{{ url('/notas/create') }}" class="bg-blue-600 hover:bg-green-700 rounded p-4 ml-20">
            Agregar Notas
        </a>
      <table class="table-fixed m-9 ml-24" >
        <thead>
            <tr >
                <th class="px-4">Id</th>
                <th class="px-4">Nombre</th>
                <th class="px-4">Actions</th>
            </tr>
        </thead>
        @foreach($notaf as $notag)
        <tbody>
            <tr>
                <td class="px-4">{{$notag ->id}}</td>
                <td class="px-4">{{$notag ->titulo}}</td>
                <td class="flex justify-between mt-4 px-4 h-6">
                    <button id="btnMostrarInfo"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg></button>
                      <form method="POST" action="{{ url('/notas' . '/' . $notag->id) }}" accept-charset="UTF-8" class="form-delete">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" title="Eliminar" onclick="return confirm(&quot;¿Seguro de querer eliminarlo?&quot;)">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>                              
                        </button>
                    </form>
                </td>
            </tr>
    </tbody>
    


  </table>
     
    </div>
    <div class="w-96 m-9 ml-24" id="contenedorInfo" style="display:none;">
        <h1>{{$notag->importancia}}</h1>
        <hr>
        <p>{{$notag->titulo}}</p>
        <hr>
        <p>{{$notag->texto}}</p>
        <hr>
        <p>{{$notag->hora}}</p>
        <hr>
        <p>{{$notag->titulo}}</p>
        
    </div>
    @endforeach
</div>
</x-app-layout>

<script>
    document.getElementById("btnMostrarInfo").addEventListener("click", function() {
        var contenedor = document.getElementById("contenedorInfo");
        if (contenedor.style.display === "none") {
            contenedor.style.display = "block";
        } else {
            contenedor.style.display = "none";
        }
    });
</script>

