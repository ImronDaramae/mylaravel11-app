<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $key => $em)
            <tr>
                <td>{{$em->id}}</td>
                <td>{{$em->name}}</td>
                <td>{{$em->email}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
