<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="card mt-5" onclick="history.back()" style="cursor: pointer;">
            <div class="card-header">
                Back
            </div>
        </div>

        <div class="card mb-4 mt-5">
            <div class="card-header">
                <h2>Please update the Pets information</h2>
            </div>

            <div class="card-body mt-2">
                <div class="row">
                    <div class="col">
                        <form class="form-group mt-" method="post"
                            action="{{ url('/admin/adminDashboard/petCare/update/' . $petCare->id) }}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Name *</label>
                                <input class="form-control mt-2" value="{{ $petCare->name }}" type="text" name="name" id="name" required placeholder="Name">
                            </div>
                            
                            <div class="form-group mt-4">
                                <label for="formGroupExampleInput2">Adress *</label>
                                <textarea class="form-control mt-2" name="address" id="address" required placeholder="address">{{ $petCare->address }}</textarea>
                            </div>
                            
                            <div class="form-group mt-4">
                                <label for="formGroupExampleInput2">Contact *</label>
                                <textarea class="form-control mt-2" name="contact" id="contact" required placeholder="contact">{{ $petCare->contact }}</textarea>
                            </div>
                            
                            <div class="form-group mt-4">
                                <label for="formGroupExampleInput2">Content *</label>
                                <textarea class="form-control mt-2" name="content" id="content" required placeholder="Content">{{ $petCare->content }}</textarea>
                            </div>
                            
                            <div class="form-group mt-4">
                                <label for="image" class="form-label">Image*</label>
                                <img src="" id="image-preview">
                                <input class="form-control" type="file" name="image" id="image" 
                                accept="petCare/*" onchange="showFile(event)" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary mt-4">Update</button>
                            </form>
                            </div>
                            
                            <div class="col">
                            <img style="border-radius: 10px; border: 1px solid black; max-height: 400px;" src="{{ asset('petCare/' . $petCare->images) }}" alt="" id="image-preview">
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <script>
        function showFile(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function () {
                var dataURL = reader.result;
                var output = document.getElementById('image-preview');
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
</body>


