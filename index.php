<html>
<head>
    <title>
        Test
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form class="image_form" action="Logic/index.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" class="form-control" name="images[]" id="image_1" multiple>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <label for="size_1">Size</label>
                                    <input type="checkbox" id="size_1" name="effect[size][checked]" aria-label="Checkbox for following text input">
                                    <input type="text" name="effect[size][width]" class="form-control" aria-label="Text input with checkbox">
                                    <input type="text" name="effect[size][height]" class="form-control" aria-label="Text input with checkbox">
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <label for="blur_1">Blur</label>
                                    <input type="checkbox" id="blur_1" name="effect[blur][checked]" aria-label="Checkbox for following text input">
                                    <input type="text" name="effect[blur][size]" class="form-control" aria-label="Text input with checkbox">
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <label for="grayscale_1">Grayscale</label>
                                    <input type="checkbox" id="grayscale_1" name="effect[grayscale][checked]" aria-label="Checkbox for following text input">
                                    <input type="text" name="effect[grayscale][size]" class="form-control" aria-label="Text input with checkbox">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary apply">Apply</button>
            </div>
            <div class="col-md-3"></div>
        </div>
    </form>
</div>
</body>
</html>