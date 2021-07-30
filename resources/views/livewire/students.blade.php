<div>
    @include('livewire.student.create')
    <section>
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            All students
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Add New Student
                            </button>
                        </h3>
                        
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($students as $key=>$student)
                                <tr>
                                <th scope="row">1</th>
                                <td> {{ $student->firstname }} </td>
                                <td>{{ $student->lastname }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>
                                    <form action="" method="POST">
                                        <a href="" class="btn btn-success">Edit</a>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>
</div>
