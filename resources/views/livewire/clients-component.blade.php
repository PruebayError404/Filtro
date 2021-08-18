<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <h1>Filtro Livewire</h1> {{ $digitos }}
    <div style="display: flex; align-items: center; margin-top: 20px">
        <span>Buscar: </span>
        <input wire:model="digitos" style="width:30%; height: 20px; margin-left: 10px" type="text">
    </div>

    <table style="width:50%; margin-top: 20px">
        <tr style="text-align: left;">
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Tel.</th>
        </tr>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->apellidos }}</td>
                <td>{{ $cliente->correo }}</td>
                <td>{{ $cliente->telefono }}</td>
            </tr>
        @endforeach
    </table>
</div>
