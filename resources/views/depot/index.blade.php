@extends('layouts.app')

@section('template_title')
    Depot
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Depot') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('depots.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Ingredient Id</th>
										<th>Available Quantity</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($depots as $depot)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $depot->ingredient_id }}</td>
											<td>{{ $depot->available_quantity }}</td>

                                            <td>
                                                <form action="{{ route('depots.destroy',$depot->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('depots.show',$depot->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('depots.edit',$depot->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $depots->links() !!}
            </div>
        </div>
    </div>
@endsection
