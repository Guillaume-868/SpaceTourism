<!DOCTYPE html>
<html>
<head>
    <title>Liste des planetes</title>
</head>
<body>


    <div class="container mt-5">
    <h1 class="mb-4">Toutes les planètes</h1>

    @if($planets->isEmpty())
        <p>Aucune planète trouvée.</p>
    @else
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nom (FR)</th>
                    <th>Nom (EN)</th>
                    <th>Description (FR)</th>
                    <th>Description (EN)</th>
                    <th>Distance (FR)</th>
                    <th>Distance (EN)</th>
                    <th>Durée (FR)</th>
                    <th>Durée (EN)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($planets as $planet)
                    <tr>
                        <td>{{ $planet->name_fr }}</td>
                        <td>{{ $planet->name_en }}</td>
                        <td>{{ $planet->description_fr }}</td>
                        <td>{{ $planet->description_en }}</td>
                        <td>{{ $planet->distance_fr }}</td>
                        <td>{{ $planet->distance_en }}</td>
                        <td>{{ $planet->duration_fr }}</td>
                        <td>{{ $planet->duration_en }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

<br>

<ul>
@foreach($planets as $planet)
    <li>
        {{ $planet->name_fr }} ({{ $planet->distance_fr }} km, {{ $planet->duration_fr }} jours)
    </li>
@endforeach
</ul>
</body>
</html>