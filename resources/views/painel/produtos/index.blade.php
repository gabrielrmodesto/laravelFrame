<h2>Listagem de produtos</h2>

<table>
    <thead>
    <tr>
        <th>Nome</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    @foreach($produto as $produtos)
        <tr>
            <td>
               {{$produtos->name}}
            </td>
            <td>
                {{$produtos->description}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>