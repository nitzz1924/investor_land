{{----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏----------------------------------------------------}}
@section('title', 'Edit Property')
<x-app-layout>
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <h4 class="fw-semibold mb-8">@yield('title')</h4>
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
                            <a href="{{ url()->previous() }}" class="btn btn-outline-primary">
                               <i class="ti ti-arrow-narrow-left"></i> Go Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 ">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-7">
                            <h4 class="card-title">General</h4>

                            <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <i class="ti ti-menu fs-5 d-flex"></i>
                            </button>
                        </div>
                        <form action="#" class="form-horizontal">
                            <div class="mb-4">
                                <label class="form-label">Property Name<span class="text-danger">*</span>
                                </label>
                                <input type="text" value="{{$listingdata->property_name}}" placeholder="Property Name" name="property_name" class="form-control" required>
                                <input type="hidden" name="listingid" value="{{$listingdata->id}}">
                            </div>
                            <div>
                                <label class="form-label">Property Description</label>
                                <div id="editorr">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-7">Property Gallery</h4>
                        <form action="#" class="dropzone dz-clickable mb-2" id="propertyGalleryForm" enctype="multipart/form-data">
                            <div class="dz-default dz-message">
                                <button class="dz-button" type="button">Drop files here
                                    to upload</button>
                            </div>
                        </form>
                        <div id="thumbnailPreview" class="mt-3">
                            @if ($listingdata->gallery)
                            <div class=" d-flex">
                                @foreach (json_decode($listingdata->gallery) as $galleryimg)
                                <div class="mx-2">
                                    <img src="{{ asset($galleryimg) }}" class="rounded-3 img-fluid" alt="Thumbnail" style="max-height: 100px;">
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        <p class="fs-2 text-center text-danger pt-3 mb-0">
                            Set the product Gallery images. Only *.png, *.jpg and *.jpeg image files are accepted.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-7">Pricing & Other Details</h4>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="">
                                        <label class="form-label">Property Price<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" value="{{$listingdata->price}}" name="price" class="form-control" placeholder="Property Price" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label">Square Foot<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" value="{{$listingdata->squarefoot}}" name="sqfoot" placeholder="Square Foot" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label">Bedroom<span class="text-danger">*</span>
                                        </label>
                                        <input type="number" value="{{$listingdata->bedroom}}" name="bedroom" placeholder="Bedroom" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label">Bathroom<span class="text-danger">*</span>
                                        </label>
                                        <input type="number" value="{{$listingdata->bathroom}}" name="bathroom" placeholder="Bathroom" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label">Floor<span class="text-danger">*</span>
                                        </label>
                                        <input type="number" name="floor" placeholder="Floor" class="form-control" value="{{$listingdata->floor}}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label">City<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="city" placeholder="City" class="form-control" value="{{$listingdata->city}}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label class="form-label">Property Address</label>
                                        <textarea class="form-control" placeholder="Property Address" name="officeaddress" rows="4" id="input7" required>{{$listingdata->address}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-7">Property Documents</h4>
                        <form action="#" class="dropzone dz-clickable mb-2" id="propertydocumentsform" enctype="multipart/form-data">
                            <div class="dz-default dz-message">
                                <button class="dz-button" type="button">Drop files here
                                    to upload</button>
                            </div>
                        </form>
                        @if ($listingdata->documents)
                        <div class=" d-flex">
                            @foreach (json_decode($listingdata->documents) as $documentimg)
                            <div class="mx-2">
                                <iframe src="{{ asset($documentimg) }}" class="rounded-3 img-fluid" style="max-height: 100px; width: 100px;" frameborder="0"></iframe>
                            </div>
                            @endforeach
                        </div>
                        @endif
                        <p class="fs-2 text-center text-danger mb-0">
                            Set the product documents. Only *.pdf files are accepted.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="offcanvas-md offcanvas-end overflow-auto" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-7">
                                <h4 class="card-title">Status</h4>
                                <div class="p-2 h-100 {{$listingdata->status == 'unpublished' ? 'bg-danger' : 'bg-success'}} rounded-circle"></div>
                            </div>
                            <form action="#" class="form-horizontal">
                                <div>
                                    <select name="status" class="form-select mr-sm-2  mb-2" id="inlineFormCustomSelect" required>
                                        <option selected="">--select status--</option>
                                        <option value="unpublished" {{$listingdata->status == 'unpublished' ? 'selected' : ''}}>Unpublished</option>
                                        <option value="published" {{$listingdata->status == 'published' ? 'selected' : ''}}>Published</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-7">Property Thumbnail</h4>
                            <form action="#" class="dropzone dz-clickable mb-2" id="propertythumbnail">
                                <div class="dz-default dz-message">
                                    <button class="dz-button" type="button">Drop Thumbnail here
                                        to upload</button>
                                </div>
                            </form>
                            <div id="thumbnailPreview" class="mt-3">
                                <img src="{{asset('assets/images/Listings/'.$listingdata->thumbnail)}}" alt="Thumbnail Preview" class="img-fluid rounded-3" style="max-height: 100px; display: {{$listingdata->thumbnail ? 'block' : 'none'}};">
                            </div>
                            <p class="fs-2 text-center text-danger mb-0">
                                Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted.
                            </p>
                        </div>
                    </div>
                    <script>
                        Dropzone.options.propertythumbnail = {
                            init: function() {
                                this.on("success", function(file, response) {
                                    const thumbnailPreview = document.querySelector("#thumbnailPreview img");
                                    thumbnailPreview.src = URL.createObjectURL(file);
                                    thumbnailPreview.style.display = 'block';
                                });
                            }
                        };

                    </script>

                    <div class="card">
                        <form action="" method="post">
                            <div class="card-body">
                                <h4 class="card-title mb-7">Property Details</h4>
                                <div class="mb-3">
                                    <label class="form-label">Categories</label>
                                    <select name="category" class="form-select mr-sm-2  mb-2" id="inlineFormCustomSelect" required>
                                        <option value="3" selected="">--select category--</option>
                                        @foreach ($categories as $data)
                                        <option value="{{$data->label}}" {{$listingdata->category == $data->label ? 'selected' : ''}}>{{$data->label}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-start mb-5">
                <button type="button" id="submitAllForms" class="btn btn-primary">
                    Update changes
                </button>
            </div>
        </div>
    </div>
    <script>
        document.querySelector("#submitAllForms").addEventListener("click", function(event) {
            event.preventDefault();

            // Create a FormData object
            const combinedFormData = new FormData();

            // Select all forms
            const forms = document.querySelectorAll("form");

            // Iterate through each form and append data to combinedFormData
            forms.forEach(form => {
                const formData = new FormData(form);
                for (let [key, value] of formData.entries()) {
                    combinedFormData.append(key, value);
                }
            });

            // Get Dropzone instances
            const dropzoneInstance = Dropzone.forElement("#propertyGalleryForm"); // Multiple images
            const propertydocumentsform = Dropzone.forElement("#propertydocumentsform"); // Multiple images
            const propertyThumbnail = Dropzone.forElement("#propertythumbnail"); // Single image
            const descriptionContent = document.querySelector('#editorr').innerHTML;
            console.log(descriptionContent);
            combinedFormData.append("description", descriptionContent);

            // Append multiple image files to FormData
            dropzoneInstance.files.forEach((file) => {
                if (file) {
                    // Append each file to FormData
                    combinedFormData.append("galleryImages[]", file);
                }
            });

            propertydocumentsform.files.forEach((file) => {
                if (file) {
                    // Append each file to FormData
                    combinedFormData.append("documents[]", file);
                }
            });
            console.log("propertydocumentsform:", propertydocumentsform.files);


            // Check if there are any files selected for the thumbnail
            if (propertyThumbnail.files.length > 0) {
                propertyThumbnail.files.forEach((file) => {
                    // Append each file to FormData
                    combinedFormData.append("thumbnailImages", file);
                });
                console.log("thumbnailImages:", propertyThumbnail.files);
            }

            // Submit the form data via AJAX
            $.ajax({
                url: '/admin/updatelisting'
                , method: 'POST'
                , data: combinedFormData
                , processData: false
                , contentType: false
                , headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
                , success: function(data) {
                    try {
                        if (data.message) {
                            Swal.fire({
                                title: "Success!"
                                , text: data.message
                                , icon: "success"
                                , confirmButtonText: "OK"
                                , customClass: {
                                    confirmButton: "btn btn-primary w-xs me-2 mt-2"
                                }
                                , buttonsStyling: true
                                , showCancelButton: true
                                , showCloseButton: true
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href="/admin/allproperties/";
                                }
                            });
                        } else {
                            Swal.fire({
                                title: "Error!"
                                , text: data.message
                                , icon: "error"
                                , confirmButtonText: "OK"
                                , customClass: {
                                    confirmButton: "btn btn-primary w-xs me-2 mt-2"
                                }
                                , buttonsStyling: true
                                , showCancelButton: true
                                , showCloseButton: true
                            });
                        }
                    } catch (e) {
                        console.error("Failed to parse response:", e);
                        Swal.fire({
                            title: "Error!"
                            , text: "The response from the server is not valid JSON."
                            , icon: "error"
                        });
                    }
                }
            });
        });

    </script>
    <script src="{{ asset('assets/js/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/quill.min.js') }}"></script>
    <script src="{{ asset('assets/js/quill-init.js') }}"></script>
    <script>
        // Initialize the Quill editor
        var quill = new Quill('#editorr', {
            theme: 'snow'
        });

        // Inject content from Laravel
        const content = @json($listingdata['discription']);
        console.log(content);

        // Check if content exists and populate the editor
        if (content) {
            quill.clipboard.dangerouslyPasteHTML(content);
        }

    </script>

</x-app-layout>
