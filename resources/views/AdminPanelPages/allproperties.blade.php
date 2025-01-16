{{----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------}}
@section('title', 'All Properties List')
<x-app-layout>
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <h4 class="fw-semibold mb-8">@yield('title')- ({{$allpropertiescnt}})</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="index.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">@yield('title')</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-2 d-flex justify-content-end align-items-center">
                        <div class="">
                            <a href="{{ route('admin.addproperty') }}" class="btn btn-outline-primary">
                                <i class="ti ti-plus"></i> Add New Property
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="">
                    <table id="file_export" class="table  table-hover table-bordered display text-nowrap py-3">
                        <thead>
                            <tr>
                                <th>Properties Photo & Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>City</th>
                                <th>Property Address</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allproperties as $data)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-6">
                                        <img src="{{asset('assets/images/Listings/'.$data->thumbnail)}}" width="45" class="rounded">
                                        <h6 class="mb-0">{{ $data->property_name}}</h6>
                                    </div>
                                </td>
                                <td>{{ $data->category}}</td>
                                <td>{{ $data->price}}</td>
                                <td>{{ $data->city}}</td>
                                <td>{{ $data->address}}</td>
                                <td>{{ Str::limit($data->discription, 20) }}</td>
                                <td>
                                    <span class="mb-1 badge {{$data->status == 'published' ? 'text-bg-success' : 'text-bg-danger' }}">
                                        {{ ucfirst($data->status) }}
                                    </span>
                                </td>
                                <td>
                                    <div class="hstack gap-3 flex-wrap">
                                        <a href="{{ route('admin.viewproperty',['id' => $data->id]) }}" class="link-primary  fs-6"><i class="ti ti-eye-share"></i></a>
                                        <a href="{{ route('admin.editproperty',['id' => $data->id]) }}" class="link-dark  fs-6"><i class="ti ti-edit"></i></a>
                                        <button onclick="confirmDelete('{{ $data->id }}')" class="link-danger  fs-6"><i class="ti ti-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                    title: "Are you sure?"
                    , html: "You want to delete?"
                    , icon: "warning"
                    , showCancelButton: true
                    , confirmButtonColor: "#222222"
                    , cancelButtonColor: "#d33"
                    , confirmButtonText: "Yes, delete it!"
                    , cancelButtonText: "Cancel"
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "/admin/deletelisting/" + id;
                    }
                });
        }
    </script>
</x-app-layout>
