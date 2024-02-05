<x-app-layout>
    <div>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                <h1>
                    Add New Book:
                </h1>
                </div>
            <div>
                <a href="{{route('Book.index')}}" class="btn btn-primary"> Back</a>
            </div>
            </div>
            <div class="card-body">
                <form action="{{route('Book.update' $book->id)}}" method="post" class="row">
                @csrf
                @method('put')
                <div class="form-group col-md-12">
                    <label for="name">Book Name</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{$book->name}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="publication">Book publication</label>
                    <input id="publication" class="form-control" type="text" name="publication" value="{{$book->publication}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="author">Book author</label>
                    <input id="author" class="form-control" type="text" name="author" value="{{$book->author}}">
                </div> <div class="form-group col-md-6">
                    <label for="price">Book price</label>
                    <input id="price" class="form-control" type="text" name="price" value="{{$book->price}}">
                </div>
                <div class="form-group col-md-12">
                    <label for="quantity">Book quantity</label>
                    <input id="quantity" class="form-control" type="text" name="quantity" value="{{$book->quantity}}">
                </div>
                <div class="form-group col-md-12">
                    <label for="pages">Book pages</label>
                    <input id="pages" class="form-control" type="text" name="pages" value="{{$book->pages}}">
                </div>
                <button type='submit' class="btn btn-success btn-lg">
                    Save Record's
                </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
