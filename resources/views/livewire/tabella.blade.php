<div>
    <table  style="width: 100%; border-collapse: collapse; border: 1px solid black; ">
        {{-- class="table  table-light " --}}
        <thead>
            <tr>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Pratica</th>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Container</th>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Destinatario</th>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Data arrivo nave</th>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Cartoni</th>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Lordo</th>

            </tr>
        </thead>
        <tbody>
            @foreach($operazioni as $operazione)
            <tr>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('OrdineSelezionato',{{ $operazione->id }})" >{{ $operazione->numero_pratica }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('OrdineSelezionato',{{ $operazione->id }})">{{ $operazione->container_nr }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('OrdineSelezionato',{{ $operazione->id }})">{{ $operazione->destinatario_obl }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('OrdineSelezionato',{{ $operazione->id }})">{{ $operazione->data_arrivo_nave }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('OrdineSelezionato',{{ $operazione->id }})">{{ $operazione->cartoni }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('OrdineSelezionato',{{ $operazione->id }})">{{ $operazione->lordo_obl }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $operazioni->links('pagination-links') }}
</div>
