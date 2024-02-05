<x-app-layout>
   <div>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
         <div>
            <h1>  List of Books</h1>
         </div>
        <div>
            <a href="{{route('Book.create')}}" class="btn btn-primary"> Add New Book(+)</a>
        </div>
    </div>
        <div class="card-body">
            <table class='table'>
                <tr>
                    <th>Sn</th>
                    <th>Book Name</th>
                    <th>Publication</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
                @foreach ($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->publication}}</td>
                    <td>{{$book->quantity}}</td>
<td>
    <a href="{{route('Book.edit'$book->id)}}" class="btn btn-primary">Edit</a>
</td>
                </tr>

                @endforeach
            </table>

        </div>
    </div>
</x-app-layout>
