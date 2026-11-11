<footer class="text-white text-center text-lg-start bg-dark">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column 1: SEE OTHER BOOKS-->
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">{{ __('ui.seeOtherBooks') }}</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-white text-decoration-none">{{ __('ui.bestsellers') }}</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white text-decoration-none">{{ __('ui.allBooks') }}</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white text-decoration-none">{{ __('ui.ourAuthors') }}</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column 2: EXECUTION OF THE CONTRACT-->
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">{{ __('ui.contract') }}</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-white text-decoration-none">{{ __('ui.supply') }}</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white text-decoration-none">{{ __('ui.returns') }}</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white text-decoration-none">{{ __('ui.regulations') }}</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white text-decoration-none">{{ __('ui.privacyPolicy') }}</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column 3: PUBLISHING HOUSE-->
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">{{ __('ui.house') }}</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <p class="text-white mb-1">The BookStore</p>
                    </li>
                    <li>
                        <p class="text-white mb-1">123 Street</p>
                    </li>
                    <li>
                        <p class="text-white mb-1">05765 NY</p>
                    </li>
                    <li>
                        <p class="text-white mb-0">{{ __('ui.sendUsABook') }}</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column 4: WRITE TO US-->
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">{{ __('ui.writeToUs') }}</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-white text-decoration-none">{{ __('ui.helpPurchasing') }}</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white text-decoration-none">{{ __('ui.checkOrderStatus') }}</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white text-decoration-none">{{ __('ui.joinNewsletter') }}</a>
                    </li>
                </ul>
            </div>
            <!--Grid column 5: BECOME A REVIEWER-->
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0 text-center">
                <h5 class="text-uppercase">{{ __('ui.becomeRevisorTitle') }}</h5>
                <p class="small text-white">{{ __('ui.becomeRevisorDescription') }}</p>
                <a href="{{ route('become.revisor') }}" class="btn btn-success btn-sm fw-bold">{{ __('ui.becomeRevisorButton') }}</a>
            </div>
            
        </div>
       
    </div>
    

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2026 Copyright: <a class="text-white text-decoration-none" href="https://mdbootstrap.com/">Presto.it</a>
    </div>
</footer>