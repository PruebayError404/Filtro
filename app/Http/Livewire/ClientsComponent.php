<?php

namespace App\Http\Livewire;

use App\Models\Clients;
use Livewire\Component;

class ClientsComponent extends Component
{
    public $digitos;

    public function render()
    {
        $clientes = Clients::where('nombre', 'like', '%' . $this->digitos . '%')
            ->orWhere('correo', 'like', '%' . $this->digitos . '%')
            ->orWhere('apellidos', 'like', '%' . $this->digitos . '%')
            ->orWhere('telefono', 'like', '%' . $this->digitos . '%')
            ->get();
        return view('livewire.clients-component', ['clientes'=>$clientes]);
    }
}
