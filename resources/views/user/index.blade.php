
<table class="table card-table table-striped table-vcenter cars">
    <thead>
    <tr>
        <th>name</th>
        <th>email</th>
    </tr>
    </thead>
    <tobody>
        @foreach ($users as $user)

                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                @endforeach
          <tr>{{ $users->links() }}</tr>
    </tobody>
</table>
