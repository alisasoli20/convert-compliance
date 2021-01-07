<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/pages_style.css') }}">
    <title>Homepage</title>
</head>

<body>
@include('layouts/navbar')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="./images/logo.png" alt="could not load image" class="logo" width="155px" height="145px">
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="media-body">

                <a href="{{ route('page','information-technology') }}"> <img class="mr-3" src="images/Information_Technology.jpg" width=150 height=120 alt="Generic placeholder image"> </a>

                <br>

                <a href="{{ route('page','information-technology') }}"> Information Technology</a>

                <!-- will eventually be dymanic field. input from users via some form -->

                <h3>HEADLINE: Koto's IT capabilities exceed market standards. Governance and documentation meet expectations.</h3>
                <p>
                    1. IT is characterised by above average systems, engineering and development capabilities, complemented by high agility.
                </p>

                <p>
                    2. Koto’s access to highly skilled resources in this way ensures we are above market standard in terms of our technology.
                </p>

                <p>
                    3. Given our strategy to leverage skills and experience from Monobank, our focus is on oversight and governance arrangements, including ensuring adequate documentation is in place to demonstrate the ways in which these teams work.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media-body">

                <a href="{{ route('page','credit-risk') }}"> <img class="mr-3" src="images/credit_risk.jpg" width=150 height=120 alt="Generic placeholder image"></a>

                <br>

                <a href="{{ route('page','credit-risk') }}"> Credit Risk</a>

                <h3>HEADLINE: Credit Risk at Koto is rated as better than the market, particularly in onboarding and credit decisioning.</h3>
                <p>
                    1. Credit Risk talent is a particular strength, and the maturity of capabilities is better than one would expect at launch. This will continue to evolve and remain better than the market as we book more customers and have more data available in more volume.
                </p>

                <p>
                    2. A gap in UK-based oversight and detailed compliance assurance can be closed by hiring in-country experience.
                </p>

                <p>
                    3. Maturity and expertise is in line with the overall strategy to focus on better-than-industry lending, supported by industry-standard collections.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="media-body">

                <a href="board.html"> <img class="mr-3" src="images/board.jpg" width=150 height=120 alt="Generic placeholder image"></a>

                <br>

                <a href="board.html"> Board</a>

                <h3> HEADLINE:</h3>

                <p>
                    UPDATE PENDING
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media-body">

                <a href="operations.html"> <img class="mr-3" src="images/operations.jpg" width=150 height=120 alt="Generic placeholder image"></a>

                <br>

                <a href="operations.html"> Operations</a>

                <h3>HEADLINE: Overall, operational capability is superior to the market average across the multiple functions.</h3>

                <p>
                    1. The Koto model relies on the outsourcing of key Operations activity, which requires us to have superior levels of oversight and control, which is in progress and already at market standard.
                </p>

                <p>
                    2. A key component of our business is the provision of superior customer service, so despite exceeding the market standard we want to focus on this even further, primarily ensuring that this relatively new function continues to operate at a high standard.
                </p>

                <p>
                    3. Collections has not yet been a focus; given the value and volume of lending this has been appropriate to date, but will require some development to meet our targeted level.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="media-body">

                <a href="financial_crime.html"> <img class="mr-3" src="images/financial_crime.jpg" width=150 height=120 alt="Generic placeholder image"></a>

                <br>

                <a href="financial_crime.html"> Financial Crime</a>

                <h3>HEADLINE</h3>

                <p>
                    UPDATE PENDING
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media-body">

                <a href="fraud.html"> <img class="mr-3" src="images/Fraud.jpg" width=150 height=120 alt="Generic placeholder image"></a>

                <br>

                <a href="fraud.html"> Fraud</a>

                <h3>HEADLINE</h3>

                <p>
                    UPDATE PENDING
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="media-body">

                <a href="risk_acceptance.html"><img class="mr-3" src="images/risk_acceptance.png" width=150 height=120 alt="Generic placeholder image"></a>

                <br>

                <a href="risk_acceptance.html"> Risk Acceptance</a>

                <h3>HEADLINE: Enterprise Risk needs some enhancement to bring it in line with the market average</h3>

                <p>
                    1. The Koto model of outsourcing requires us to have superior central risk management,
                    which would meet the regulatory expectation to develop risk management appropriate to the business model.
                </p>

                <p>
                    2. Risk resourcing in key areas such as Financial Crime and Compliance are in place,
                    and work has so far focussed on the areas of highest risk.
                </p>

                <p>
                    3. Extending this activity across the enterprise will bring it to the targeted level;
                    the models are in place and this is already work in progress.
                </p>

                <p>
                    4. Although there is some work to do in this area, the standard already being achieved
                    is as would be expected for a firm our size and age.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media-body">

                <a href="{{ route('page','decisions') }}"> <img class="mr-3" src="images/decisions.jpg" width=150 height=120 alt="Generic placeholder image"></a>

                <br>

                <a href="{{ route('page','decisions') }}"> Decisions</a>

                <h3>HEADLINE</h3>

                <p>
                    UPDATE PENDING
                </p>
            </div>
        </div>
    </div>
    <div class="row">
         <div class="col-md-6">
             <div class="media-body">

                 <a href="end_of_month.html"> <img class="mr-3" src="images/end_of_month.png" width=150 height=120 alt="Generic placeholder image"></a>

                 <br>

                 <a href="end_of_month.html"> End of Month</a>

                 <h3>HEADLINE</h3>

                 <p>
                     UPDATE PENDING
                 </p>
             </div>
         </div>
        <div class="col-md-6">
            <div class="media-body">

                <a href="onboarding.html"> <img class="mr-3" src="images/onboarding.png" width=150 height=120 alt="Generic placeholder image"></a>

                <br>

                <a href="onboarding.html"> Onboarding</a>

                <h3>HEADLINE</h3>

                <p>
                    UPDATE PENDING
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="media-body">

                <a href="marketing.html"> <img class="mr-3" src="images/marketing.jpg" width=150 height=120 alt="Generic placeholder image"></a>

                <br>

                <a href="marketing.html"> Marketing</a>

                <h3>HEADLINE: Marketing does not yet meet the market average as it has not, to date, been a focus area.</h3>

                <p>
                    1. strategy focuses on channels which can deliver high volume, low CPA growth.
                </p>

                <p>
                    2. To address the gaps, a distribution strategy backed by strong people is needed,
                    particularly as to achieve scale quickly, multiple channels will need to be established.
                </p>

                <p>
                    3. To ensure effective utilisation of the Monobank resources,
                    in-country resource is needed with UK market expertise.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="media-body">

                <a href="finance.html"> <img class="mr-3" src="images/finance.jpg" width=150 height=120 alt="Generic placeholder image"></a>

                <br>

                <a href="finance.html"> Finance</a>

                <h3>HEADLINE: Without a dedicated Finance function, Koto cannot yet meet market average in this area.</h3>

                <p>
                    1. Koto does not yet have a dedicated Finance function, as to date it has not been required.
                </p>

                <p>
                    2. Currently, Finance tasks are executed by appropriately skilled and experienced people, but they are not dedicated Finance resources.
                </p>

                <p>
                    3. Gaps in Finance will be closed with the hiring of a highly skilled CFO who can establish a Finance function appropriate to the size and nature of the business as we scale.
                </p>
            </div>
        </div>
    </div>
</div>
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <div class="news">
                    <h1>News</h1>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="latest-news">
                    <h2>Latest News</h2>
                </div>
                <div class="content-list">
                    @foreach($news as $new)
                    <div class="content-list-item">
                        <a href="{{ $new->link }}" target="_blank">{{ $new->title }}</a>
                        <time class="float-right">{{ $new->date }}</time>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>
<br>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
