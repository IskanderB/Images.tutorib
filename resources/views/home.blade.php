<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Images</title>

    <!-- Main css -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
   rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css2?family=Itim&family=Open+Sans+Condensed:wght@300&family=Oxygen:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <header>
        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="text">I m a g e s</div>
                </div>
            </div>
        </div>
    </header>

    <section class="upload">
        <div class="container">
          <div class="row">
            <form class="col-sm-offset-2 col-sm-8 upload_box" action="" method="POST"><br><br>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" readonly>
                        <div class="input-group-btn">
                            <span class="fileUpload btn btn-success">
                                <span class="upl" id="upload">Choose file</span>
                                <input type="file" class="upload up" id="up" onchange="readURL(this);" />
                            </span>
                        </div>
                    </div>
                 </div>
                 <div class="upload_btn">
                     <button type="submit" name="button" class="btn btn-primary">Upload file</button>
                 </div>
             </form>
            </div>

          </div>
    </section>

    <section class="update">
        <div class="container">
            <div class="row">
                <a href="#">
                    <div class="box">
                        <div class="update_btn">
                            <span><i class="fa fa-refresh" aria-hidden="true"></i></span>
                            <span>Update without cache</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="images">
        <div class="container">
            <div class="row">
                <div class="images_box">
                    <ul class="images_list d-flex">
                        <li><img src="{{URL::asset('images/1.jpg')}}" alt=""></li>
                        <li><img src="{{URL::asset('images/1.jpg')}}" alt=""></li>
                        <li><img src="{{URL::asset('images/1.jpg')}}" alt=""></li>
                        <li><img src="{{URL::asset('images/1.jpg')}}" alt=""></li>
                        <li><img src="{{URL::asset('images/1.jpg')}}" alt=""></li>
                        <li><img src="{{URL::asset('images/1.jpg')}}" alt=""></li>
                        <li><img src="{{URL::asset('images/1.jpg')}}" alt=""></li>
                        <li><img src="{{URL::asset('images/1.jpg')}}" alt=""></li>
                        <li><img src="{{URL::asset('images/1.jpg')}}" alt=""></li>
                        <li><img src="{{URL::asset('images/1.jpg')}}" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="selector">
        <div class="container">
            <div class="row">
                <div class="selector_box d-flex">
                    <div class="previous">
                        <a href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                    </div>
                    <div class="next">
                        <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="box">
                    © Cooperation: axurtin.rep@gmail.com
                </div>
            </div>
        </div>
    </footer>

    <!-- JS -->
    <script src="{{URL::asset('js/app.js')}}"></script>
</body>
</html>
