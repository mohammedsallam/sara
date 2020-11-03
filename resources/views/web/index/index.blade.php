@extends('web.layouts.container')
@section('content')

    <div class="container">
        <div class="row">
            <div class="form-group col-md-4 mt-5">
                <input type="number" class="form-control employee_id" placeholder="Employee number" min="1">
            </div>
            <div class="form-group col-md-3 mt-5">
                <input type="submit" class="form-control btn btn-primary employee_search" value="Search">
            </div>
            <div class="card col-md-12 mt-5">
                <div class="card-header">
                    <h3 class="card-title text-center">Employee table</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr class="bg-dark text-white text-center">
                            <th>Employy ID</th>
                            <th>Last name</th>
                            <th>Salary</th>
                            <th>Salary extra</th>
                        </tr>
                        </thead>
                        <tbody class="employee_container">

                            @foreach($employees as $emp)
                            <tr class="text-center">
                                <td>{{$emp->employee_id}}</td>
                                <td>{{$emp->last_name}}</td>
                                <td>{{$emp->salary}}</td>
                                <td>{{$emp->salary*1.5}}</td>
                            </tr>
                            @endforeach

                            <div class="col-md-12 my-3">{{$employees->links()}}</div>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('inner_js')
    <script>
        $(document).ready(function () {
            $('.employee_search').click(async function (e) {
                e.preventDefault();

                let employee_id = $('.employee_id').val();

                if (employee_id !== ''){
                    const response=await ajax({
                        url: "{{route('main.index')}}",
                        data:{employee_id:employee_id},
                        dataType: 'html',
                        method:'get'
                    });

                    if (response){
                        $('.employee_container').html(response);
                    }
                }

            });

        })
    </script>
@endsection
