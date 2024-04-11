@extends('layouts/frontLayout/front_design')
@section('content')

<!-- Inner Header -->
<section class="section-padding bg-dark inner-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="mt-0 mb-3 text-white">FAQ's</h1>
                <div class="breadcrumbs">
                    <p class="mb-0 text-white"><a class="text-white" href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>  /  <span class="text-success">FAQ's</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Inner Header -->

<section class="faq-page section-padding">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card card-body">
                            <div class="accordion" id="accordionExample">
                                <div class="card mb-0">
                                    <div class="card-header" id="headingOne">
                                        <h6 class="mb-0"> 
                                            <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <i class="icofont icofont-question-square"></i> Where can I get access to Capital IQ?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil helvetica, craf.</div>
                                    </div>
                                </div>
                                <div class="card mb-2 mt-2">
                                    <div class="card-header" id="headingTwo">
                                        <h6 class="mb-0">
                                            <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><i class="icofont icofont-question-square"></i> How do I get access to case studies?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil helvetica, craf.</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h6 class="mb-0"> 
                                            <a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"><i class="icofont icofont-question-square"></i> How much should I capitalize?</a>
                                        </h6>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil helvetica, craf.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('js/frontend_js/jquery-3.5.1.js') }}"></script>
{{-- <div id="faq">
    <p><label>Search</label><br />
    <input id="search" value="" size="30" /></p>
    <p>&nbsp;</p>
    <ul id="result">
        <li> How round is the Earth? Very round </li>
        <li> rectangular is paper? Very rectangular. </li>
    </ul>
</div> --}}

<script>
    $(document).ready(function() {
        $('LI STRONG').click(function(e) {
            e.preventDefault(); // disable text selection
            $(this).parent().find('EM').slideToggle();
            return false; // disable text selection
        });

        $('#search').keyup(function(e) {
            var s = $(this).val().trim();
            if (s === '') {
                $('#result LI').show();
                return true;
            }
            $('#result LI:not(:contains(' + s + '))').hide();
            $('#result LI:contains(' + s + ')').show();
            return true;
        });

    });
</script>

@endsection