@extends('layouts.app')

@section('template_title')
    Attendance
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Attendance') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('attendances.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Employee Id</th>
										<th>Turns Id</th>
										<th>Date</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($attendances as $attendance)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $attendance->employee_id }}</td>
											<td>{{ $attendance->turns_id }}</td>
											<td>{{ $attendance->date }}</td>

                                            <td>
                                                <form action="{{ route('attendances.destroy',$attendance->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('attendances.show',$attendance->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('attendances.edit',$attendance->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $attendances->links() !!}
            </div>
        </div>
    </div>
@endsection
