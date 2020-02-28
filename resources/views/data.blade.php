<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Components</a>
                    </li>

            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a style="margin-right: 5px"class="navbar-brand" href="./"><img width=15% style="padding: 5px" src="{{asset('images/unpad.png')}}">UNIVERSITAS PADJADJARAN </a>
                    <a class="navbar-brand hidden" href="./"><img src="{{asset('images/logo2.png')}}" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars" style="margin-left:50px"></i></a>
                </div>
            </div>
            <div class="top-right">

            </div>
        </header><!-- /header -->
        <!-- Header-->



        <div class="content">
            <div class="animated fadeIn">
              <div id="system" class="alert alert-success" role="alert">
                  System running..
              </div>
              <div class="row" id="coba"></div>
                <div class="row">

                    <!-- <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Card with Label <small><span class="badge badge-success float-right mt-1">Success</span></small></strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Card with Label <small><span class="badge badge-danger float-right mt-1">49</span></small></strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="card border border-primary">
                            <div class="card-header">
                                <strong class="card-title">Card Outline</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card border border-secondary">
                            <div class="card-header">
                                <strong class="card-title">Card Outline</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card border border-success">
                            <div class="card-header">
                                <strong class="card-title">Card Outline</strong>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-warning">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0 text-light">
                                    <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer class="blockquote-footer text-light">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card bg-danger">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer class="blockquote-footer text-light">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0 text-light">
                                    <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer class="blockquote-footer text-light">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-secondary">
                                <strong class="card-title text-light">Card Header</strong>
                            </div>
                            <div class="card-body text-white bg-primary">
                                <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-success">
                                <strong class="card-title text-light">Card Header</strong>
                            </div>
                            <div class="card-body text-white bg-warning">
                                <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <strong class="card-title text-light">Card Header</strong>
                            </div>
                            <div class="card-body text-white bg-danger">
                                <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="https://i.imgur.com/ue0AB6J.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Card Image Title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="https://i.imgur.com/hrS2McC.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Card Image Title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="https://i.imgur.com/MUBS4Gh.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Card Image Title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div> -->


                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->

    <div class="clearfix"></div>

    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2020 Padjadjaran Instrument
                </div>
                <div class="col-sm-6 text-right">
                    Designed by <a href="https://instagram.com/fauzifadillah">Fauzi Fadillah</a>
                </div>
            </div>
        </div>
    </footer>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script>
        $(document).ready(function(){
          setInterval(function() {

            /*For PHP called is for Cross-Origin Request Blocked*/
            $.ajax({
               type:"GET",
               dataType: "json",
               url:"{{route('json')}}",
               success:function(data)
               {
                   // alert('Get Success');
                   var dom = '';
                   var asd = '';
                   for(var i=0;i<data.data.length;i++){
                    asd ='<div class="content"><div class="animated fadeIn"><div class="col-md-4"><div class="card border border-primary"><div class="card-header"><strong class="card-title mb-3" <small><span class="badge badge-success float-right mt-1">Success</span></small></strong></div><div class="card-body"><div class="mx-auto d-block"><img class="rounded-circle mx-auto d-block"  src=/images/avatar/'+data.data[i].image+' alt="Card image cap"><h5 class="text-sm-center mt-2 mb-1"> '+data.data[i].nama+'</h5><div class="location text-sm-center"><i class="ti-timer"></i> '+data.data[i].waktu+'</div></div><hr></div></div></div></div></div>';

                   // $('#coba').empty();
                   // $('#coba').append(asd).fadeIn(500);
                   $('#coba').load("{{route('load')}}").fadeIn(1000);
                   $('#system').fadeIn(1000).delay(500).fadeOut(1000);
                   // $('#coba').html(dom).fadeOut();
                   }
               }
            });

          }, 3000); //5 seconds
          // setInterval(function(){
          //   $('#coba').html('').fadeOut(1000);
          // },3000);
        });
    </script>

</body>
</html>
