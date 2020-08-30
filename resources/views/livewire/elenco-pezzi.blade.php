<div>
    <table  style="width: 100%; border-collapse: collapse; border: 1px solid black; ">
        {{-- class="table  table-light " --}}
        <thead>
            <tr>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Pezzi</th>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Colli</th>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Lordo</th>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Netto</th>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Valore</th>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Cod. Art.</th>

            </tr>
        </thead>
        <tbody>
            @foreach($pezzi as $pezzo)
            <tr>
                @if ($selezionato == $pezzo->id)
                <td style="border-collapse: collapse; border: 1px solid black; background-color: #6699ff; color: white;" wire:click="$emit('PezzoSelezionato',{{ $pezzo->id }})" >{{ $pezzo->pezzi }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; background-color: #6699ff; color: white;" wire:click="$emit('PezzoSelezionato',{{ $pezzo->id }})">{{ $pezzo->colli }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; background-color: #6699ff; color: white;" wire:click="$emit('PezzoSelezionato',{{ $pezzo->id }})">{{ $pezzo->lordo }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; background-color: #6699ff; color: white;" wire:click="$emit('PezzoSelezionato',{{ $pezzo->id }})">{{ $pezzo->netto }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; background-color: #6699ff; color: white;" wire:click="$emit('PezzoSelezionato',{{ $pezzo->id }})">{{ $pezzo->valore }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; background-color: #6699ff; color: white;" wire:click="$emit('PezzoSelezionato',{{ $pezzo->id }})">{{ $pezzo->codice_articolo }}</td>
                @else
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('PezzoSelezionato',{{ $pezzo->id }})" >{{ $pezzo->pezzi }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('PezzoSelezionato',{{ $pezzo->id }})">{{ $pezzo->colli }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('PezzoSelezionato',{{ $pezzo->id }})">{{ $pezzo->lordo }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('PezzoSelezionato',{{ $pezzo->id }})">{{ $pezzo->netto }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('PezzoSelezionato',{{ $pezzo->id }})">{{ $pezzo->valore }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('PezzoSelezionato',{{ $pezzo->id }})">{{ $pezzo->codice_articolo }}</td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $pezzi->links('pagination-links') }}
</div>
