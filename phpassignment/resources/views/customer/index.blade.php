@extends('customer.layout')

@section('content')
<div class="container">
    <div class="row" style="margin: 20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Customers List</h2>
                </div>
                <div class="card-body">
                    <a href="{{url('/customer/create')}}" class="btn btn-success btn-sm" title="Add New Customer">
                        Add New
                    </a>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customer as $item )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->mobile }}</td>
                                    <td>
                                        <a href="{{url('/customer/'.$item->id)}}" title="View Customer" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</a>
                                        <a href="{{url('/customer/'.$item->id.'/edit')}}" title="Edit Customer" class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                        <form method="POST" action="{{url('/customer'.'/'.$item->id)}}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Customer" onclick="return confirm('Confirm delete ?')"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Button to direct to homepage -->
                    <a href="{{url('/showfeedback')}}" class="btn btn-primary" title="Go to Homepage">Go to Homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection