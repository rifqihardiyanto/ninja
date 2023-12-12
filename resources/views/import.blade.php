<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<body>

    <p>Click on the "Choose File" button to upload a file:</p>
    @if (session()->has('failures'))
        <table class="alert alert-danger mr-5" role="alert">
            <tr>
                <th>Baris</th>
                <th>Attribute</th>
                <th>Error</th>
                <th>Value</th>
            </tr>

            @foreach (session()->get('failures') as $validasi)
                <tr>
                    <td>{{ $validasi->row() }}</td>
                    <td>{{ $validasi->attribute() }}</td>
                    <td>
                        @foreach ($validasi->errors() as $error)
                            {{ $error }}
                        @endforeach
                    </td>
                    <td>{{ $validasi->values()[$validasi->attribute()] }}</td>
                </tr>
            @endforeach
        </table>
    @endif

    <form action="{{ url('import-data') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" id="myFile" name="file">
        <input type="submit">
    </form>

</body>

</html>
