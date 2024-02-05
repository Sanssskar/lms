<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h1> Add New Student</h1>
            </div>
            <div>
                <a href="{{ route('Student.index')}}" class='btn btn-primary'>back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('Student.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class='row'>
                    <div class="form-group col-md-12">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sid">Student Id</label>
                        <input id="sid" class="form-control" type="text" name="sid">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone number">Phone Number</label>
                        <input id="phone number" class="form-control" type="text" name="phone">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="email">E-mail <span class='text-danger'>Eg:example@gmail.com</span></label>
                        <input id="email" class="form-control" type="text" name="email">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="faculty">Student's Faculty</label>
                        <input id="faculty" class="form-control" type="text" name="faculty">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="photo">Upload Photo</label>
                        <input id="photo" class="form-control-file" type="file" name="photo">
                    </div>

                </div>
                <button type="submit" class='btn btn-primary container'>
                    Save Record
                </button>
        </div>
    </div>
    </form>
</x-app-layout>
