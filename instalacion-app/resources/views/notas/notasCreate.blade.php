@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-app-layout>

    <div >
            <h1 class="p-4 mt-2 text-3xl font-bold text-center text-white bg-gray-800">
                Crear Notas
            </h1>
        </div>
    <form class="w-full max-w-lg mx-auto p-28 bg-cyan-600" action="{{ url('notas') }}" method="post">
    {!! csrf_field() !!}
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Titulo
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  type="text" name="titulo" id="titulo">
        </div>
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Texto
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  type="text" name="texto" id="texto">
        </div>
    
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            Temas
          </label>
          <select id="importancia" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="importancia" :value="old('importancia')" required autofocus autocomplete="importancia">
            <option value="muy importante">Muy importante</option>
            <option value="importante">importante</option>
    </select>
        </div>

        <input type="number" id="tema" name="tema" required>
          <input type="date" id="hora" name="hora" required>
    
    
        
      </div>
      <!-- Agrega más campos de formulario aquí -->
      <button class="bg-gray-500 hover:bg-gray-300 text-white font-bold py-2 px-4 rounded">
        Enviar
      </button>
    </form>
    </x-app-layout>