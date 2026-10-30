<table>
    <tr>
        <th>Avatar</th>
        <th>Username</th>
        <th>Full Name</th>
        <th>Action</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>
            @if($user->avatar)
                <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" width="50" height="50" style="border-radius: 50%;">
            @else
                <img src="{{ asset('images/default-avatar.png') }}" alt="Default Avatar" width="50" height="50" style="border-radius: 50%;">
            @endif
        </td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->full_name }}</td>
        <td><a href="/users/{{ $user->id }}/edit">Edit</a></td>
    </tr>
    @endforeach
</table>