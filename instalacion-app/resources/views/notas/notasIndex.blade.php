@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-app-layout>
    <h1 class="p-4 mt-2 text-3xl font-bold text-center text-white bg-gray-800">
        TUS NOTAS
    </h1>
    <br> 
<div class="grid grid-cols-2 gap-4">
    
    <div class="m-8">
        <a href="{{ url('/notas/create') }}" class="bg-blue-600 hover:bg-green-700 rounded p-4 ml-20">
            Agregar Notas
        </a>
        <div class="w-full h-full ">
            <table class="table-fixed m-9 ml-24 h-full" >
                <thead>
                    <tr >
                        <th class="px-4">Id</th>
                        <th class="px-4">Nombre</th>
                        <th class="px-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($notaf as $notag)
                    <tr>
                        <td class="px-4">{{$notag ->id}}</td>
                        <td class="px-4">{{$notag ->titulo}}</td>
                        <td class="flex justify-between mt-4 px-4 h-6">
                            <a href="{{url('notas/'.$notag->id)}}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                
                              </svg></a>
                              <a href="{{ url('/notas' . $notag->id . '/notasEdit') }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m6.75 12l-3-3m0 0l-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                              </svg>
                              
                                
                            </a>
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
                @endforeach
                </table>
        </div>
      
        
    </div>
    

</div>


</x-app-layout>



