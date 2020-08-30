<div>
    <table  style="width: 100%; border-collapse: collapse; border: 1px solid black; ">
        {{-- class="table  table-light " --}}
        <thead>
            <tr>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Descrizione Uk</th>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Descrizione It</th>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Tot. pezzi</th>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Tot. colli</th>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Tot. lordo</th>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Tot. netto</th>
                <th style="border-collapse: collapse; border: 1px solid black; text-align: center;">Tot. valore</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articoli as $articolo)
            <tr>
                @if ($selezionato == $articolo->id)
                <td style="border-collapse: collapse; border: 1px solid black; background-color: #6699ff; color: white;" wire:click="$emit('ArticoloSelezionato',{{ $articolo->id }})" >{{ $articolo->descrizione_uk }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; background-color: #6699ff; color: white;" wire:click="$emit('ArticoloSelezionato',{{ $articolo->id }})">{{ $articolo->descrizione_it }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; background-color: #6699ff; color: white;" wire:click="$emit('ArticoloSelezionato',{{ $articolo->id }})">{{ $articolo->tot_pezzi }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; background-color: #6699ff; color: white;" wire:click="$emit('ArticoloSelezionato',{{ $articolo->id }})">{{ $articolo->tot_colli }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; background-color: #6699ff; color: white;" wire:click="$emit('ArticoloSelezionato',{{ $articolo->id }})">{{ $articolo->tot_lordo }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; background-color: #6699ff; color: white;" wire:click="$emit('ArticoloSelezionato',{{ $articolo->id }})">{{ $articolo->tot_netto }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; background-color: #6699ff; color: white;" wire:click="$emit('ArticoloSelezionato',{{ $articolo->id }})">{{ $articolo->tot_valore }}</td>
                @else
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('ArticoloSelezionato',{{ $articolo->id }})" >{{ $articolo->descrizione_uk }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('ArticoloSelezionato',{{ $articolo->id }})">{{ $articolo->descrizione_it }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('ArticoloSelezionato',{{ $articolo->id }})">{{ $articolo->tot_pezzi }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('ArticoloSelezionato',{{ $articolo->id }})">{{ $articolo->tot_colli }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('ArticoloSelezionato',{{ $articolo->id }})">{{ $articolo->tot_lordo }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('ArticoloSelezionato',{{ $articolo->id }})">{{ $articolo->tot_netto }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('ArticoloSelezionato',{{ $articolo->id }})">{{ $articolo->tot_valore }}</td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
   {{ $articoli->links('pagination-links') }}

</div>
