@extends('layouts.app')

@section('content')
    <div class="container center-text">
					<div id="yw3"></div><div id="content">
	<div class="top-textimg">
    <div class="top-text">
        <h1>Instantly Generate Create My Stubs</h1>
        <p>Our Auto Calculator does all the hard work for you. Give it a try and create your first check stub now! It won't take you long and you can preview your paycheck stub before you purchase.</p>
        <a href="/generateStubs" class="btn btn-success btn-lg">BUILD CHECK STUB</a>
    </div>
</div>
<div class="row">
    <div class="arrow_box">
        <h3 class="logo" style="color: #fff;">Learn More</h3>
    </div>
    <div class="col-xs-4 example-stub">
        <img src="/images/stub-ex.png" width="100">
    </div>
    <div class="col-xs-8">
        <div class="row step-stub well">
            <div class="col-sm-6 step">
                <img src="/images/step1.png" width="80">
                <div class="step-text">
                    <h3>STEP 1: CREATE STUB</h3>
                    <p>Answer a few basic questions and let our auto-calculator do the rest.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-sm-6 step">
                <img src="/images/step2.png" width="80">
                <div class="step-text">
                    <h3>STEP 2: PRINT STUB</h3>
                    <p>Preview, purchase and receive your generated pay stub via email in seconds.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <a href="/generateStubs" class="btn btn-success btn-lg launch-btn">LAUNCH GENERATOR</a>
        <div class="clearfix"></div>
    </div>
</div>
</div><!-- content -->
</div>

    <div class="tagline well">
        <div class="container">
            <p><b>"Create My Stubs is the real deal! My stubs were accurate and delivered in seconds. Plus I didn’t have to deal with any complicated calculations."</b> --- John Doe, Small Business Owner</p>
        </div>
    </div>
                </div>



    <script type="text/javascript">

        function goToStubGenerator() {
            window.location.href = "/instant/build/stubs";
        }

    </script>

@endsection

