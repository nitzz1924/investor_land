{{------------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏---------------------------------------------------- --}}
@extends('layouts.UserPanelLayouts.user')
@section('title','All Notifications')
@section('user-content')
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <h4 class="fw-semibold mb-8">@yield('title')- ({{$notifycnt}})</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="index.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">@yield('title')</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="">
                <div class="p-4">
                    <table id="file_export" class="table table-hover table-bordered display text-nowrap py-3">
                        <thead>
                            <tr>
                                <th>SNo.</th>
                                <th>Notification Name</th>
                                <th>Notification Description</th>
                                <th>Recieved On</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            @foreach ($notifications as $index => $data)
                            <tr>
                                <td>{{ $index + 1}}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-6">
                                        <img src="{{asset('assets/images/Notificaitons/'.$data->notificationimg)}}" width="45" class="rounded">
                                        <h6 class="mb-0">{{ $data->notificationname}}</h6>
                                    </div>
                                </td>
                                <td>{{ $data->notificationdes }}</td>
                                <td>{{ $data->created_at->format('d M Y | h:i A')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
