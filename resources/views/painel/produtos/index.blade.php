<h2>Listagem de produtos</h2>

<table>
    <thead>
    <tr>
        <th>Nome</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    @foreach($produtos as $produto)
        <tr>
            <td>
               {{$produto->name}}
            </td>
            <td>
                {{$produto->description}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>