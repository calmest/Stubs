@extends('layouts.app')

@section('content')
<br>
    <h3>Creating a paycheck stub is easy with createmystub.com but we are sure you have questions so we have answers.</h3>

    <div class="container ">
            <div class="panel-group" id="faqAccordion">
                <div class="panel panel-default ">
                    <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                         <h4 class="panel-title">
                            <a href="#" class="ing">Q: Can I enter salary information instead of an hourly rate?</a>
                      </h4>

                    </div>
                    <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">
                             <h5><span class="label label-primary">Answer</span></h5>

                            <p>Of course you can. Turn off the auto calculator and instead of typing in an hourly rate you can type in the word salary.
                                </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default ">
                    <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                         <h4 class="panel-title">
                            <a href="#" class="ing">Q: Do I need to print my stub on special paper?</a>
                      </h4>

                    </div>
                    <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">
                             <h5><span class="label label-primary">Answer</span></h5>

                            <p>No. No special paper is needed. The paycheck will print with a background similiar to the background found on paycheck stub stock.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default ">
                    <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                         <h4 class="panel-title">
                            <a href="#" class="ing">Q: How can I make my payment?</a>
                      </h4>

                    </div>
                    <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">
                             <h5><span class="label label-primary">Answer</span></h5>

                            <p>Paypal is used to process all payments. All majjor credit cards are accepted through payapal and a paypal account is not needed to complete the payment.</p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default ">
                    <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                         <h4 class="panel-title">
                            <a href="#" class="ing">Q: I lost my stub and need it reprinted. How can I get another copy.</a>
                      </h4>

                    </div>
                    <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">
                             <h5><span class="label label-primary">Answer</span></h5>

                            <p>You can request a reprint of your stub by submitting a request using the form found on the support page. Include your name and paypal email address or transaction number used to complete the purchase. </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default ">
                    <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                            <h4 class="panel-title">
                            <a href="#" class="ing">Q: The Check Stub Generator confuses me, can someone help me?</a>
                        </h4>

                    </div>
                    <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">
                                <h5><span class="label label-primary">Answer</span></h5>

                            <p>Of course contact us using either the chat button or the support form and we will gladly walk you through the creation of your paycheck stub. </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default ">
                    <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
                            <h4 class="panel-title">
                            <a href="#" class="ing">Q: Is a paycheck stub created with createmystub.com a legal document?</a>
                        </h4>

                    </div>
                    <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">
                                <h5><span class="label label-primary">Answer</span></h5>

                            <p>No paycheck stubs created using createmystub.com are not legal documents. </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default ">
                    <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question6">
                            <h4 class="panel-title">
                            <a href="#" class="ing">Q: I need a different template, can you help me?</a>
                        </h4>

                    </div>
                    <div id="question6" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">
                                <h5><span class="label label-primary">Answer</span></h5>

                            <p>Yes, we are always open to creating new templates, send us the details about the template you need and we will try our best to create it for you under our custom stub program </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default ">
                    <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question7">
                            <h4 class="panel-title">
                            <a href="#" class="ing">Q: I had a problem with my order who can I contact to have the issue fixed?</a>
                        </h4>

                    </div>
                    <div id="question7" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">
                                <h5><span class="label label-primary">Answer</span></h5>

                            <p>Don't panic, send an email to support@createmystub.com with your concern and we will address is asap. </p>
                        </div>
                    </div>
                </div>

            </div>
            <!--/panel-group-->
        </div>
@endsection
