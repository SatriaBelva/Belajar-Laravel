<x-layout>

    <x-slot:title>{{ $judul }}</x-slot:title>
    <x-slot:URL>{{ $URLTitle }}</x-slot:URL> 
    {{-- <x-slot:testing>{{ $dataLain }}</x-slot:testing> --}}
    Homepage <br><br>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Email</td>
                <td>Username</td>
                <td>Passsword</td>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $individual)
            <tr>
                <td>
                    {{ $individual->id }}
                </td>
                <td>
                    {{ $individual['name'] }} 
                </td>
                <td>
                    {{ $individual['email'] }} 
                </td>
                <td>
                    {{ $individual['username'] }} 
                </td>
                <td>
                    {{ $individual['password'] }} 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>

