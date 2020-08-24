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
                {{-- <th style="border-collapse: collapse; border: 1px solid black; text-align: center;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
                  </svg></th> --}}

            </tr>
        </thead>
        <tbody>
            @foreach($operazioni as $operazione)
            <tr>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('OrdineSelezionato',{{ $operazione->id }})">{{ $operazione->numero_pratica }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('OrdineSelezionato',{{ $operazione->id }})">{{ $operazione->container_nr }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('OrdineSelezionato',{{ $operazione->id }})">{{ $operazione->destinatario_obl }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('OrdineSelezionato',{{ $operazione->id }})">{{ $operazione->data_arrivo_nave }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('OrdineSelezionato',{{ $operazione->id }})">{{ $operazione->cartoni }}</td>
                <td style="border-collapse: collapse; border: 1px solid black; " wire:click="$emit('OrdineSelezionato',{{ $operazione->id }})">{{ $operazione->lordo_obl }}</td>
                {{-- <td style="border-collapse: collapse; border: 1px solid black; text-align: center;"><a href=""><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
                  </svg></a></td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $operazioni->links() }}
</div>
