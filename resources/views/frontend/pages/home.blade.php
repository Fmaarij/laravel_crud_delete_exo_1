@extends('frontend.layouts.index')
@section('content')
    <button><a href="{{ route('addMember') }}">Cliquer pour ajouter un membre</a> </button>

        @if (Route::currentRouteName() == 'homme')
        <table>
            <tr>
                <th>ID</th>
                <th>Age</th>
                <th>Nom</th>
                <th>Genre</th>
                <th>Delete</th>
                <th>Edit</th>

            </tr>
            @foreach ($homme as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->nom }}</td>
                    <td>{{ $user->genre }}</td>
                    <form method="post" action='/crud/{{ $user->id }}/delete'>
                        @csrf
                        @method('DELETE')
                        <td> <button type="submit">Delete</button></td>
                    </form>
                    <td> <button type="submit">Edit</button></td>
                </tr>
            @endforeach
        @elseif (Route::currentRouteName() == 'all')
        <table>
            <tr>
                <th>ID</th>
                <th>Age</th>
                <th>Nom</th>
                <th>Genre</th>
                <th>Delete</th>
                <th>Edit</th>

            </tr>
            @foreach ($allHommeFemme as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->nom }}</td>
                    <td>{{ $user->genre }}</td>
                    <form method="post" action='/crud/{{ $user->id }}/delete'>
                        @csrf
                        @method('DELETE')
                        <td> <button type="submit">Delete</button></td>
                    </form>
                    <td> <button type="submit">Edit</button></td>
                </tr>
            @endforeach
        @elseif (Route::currentRouteName() == 'femme')
        <table>
            <tr>
                <th>ID</th>
                <th>Age</th>
                <th>Nom</th>
                <th>Genre</th>
                <th>Delete</th>
                <th>Edit</th>

            </tr>
            @foreach ($femme as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->nom }}</td>
                    <td>{{ $user->genre }}</td>
                    <form method="post" action='/crud/{{ $user->id }}/delete'>
                        @csrf
                        @method('DELETE')
                        <td> <button type="submit">Delete</button></td>
                    </form>
                    <td> <button type="submit">Edit</button></td>
                </tr>
            @endforeach
        @endif


    </table>

@endsection
