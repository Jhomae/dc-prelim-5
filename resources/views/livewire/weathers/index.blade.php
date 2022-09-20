<div>
    <table class="table table-striped">
        <thead class="table table-striped bg-info">
            <tr>
                <th>ID</th>
                <th>Today</th>
                <th>Wind</th>
                <th>Percentage</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($weathers as $weather)
                <tr>
                    <td>{{ $weather->id }}</td>
                    <td>{{ $weather->today }}</td>
                    <td>{{ $weather->wind }}</td>
                    <td>{{ $weather->percentage }}</td>
                    <td>
                        <a href="{{ url('edit', ['weather' => $weather->id]) }}" class="btn btn-secondary">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['weather' => $weather->id]) }}" class="btn btn-danger">Delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

