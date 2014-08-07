<!DOCTYPE html>

<html class="public-permission-request">
<head>
    <title>Percolate Fanbranded</title>

    <meta name="viewport" id="view" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link media="all" rel="stylesheet" type="text/css" href="/css/legal.css" />
    <link media="all" rel="stylesheet" type="text/css" href="/css/application.css" />

    <script type="text/javascript" src="/js/application.js" ></script>
    <script type="text/javascript" src="/js/timeago.js"></script>

    <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
    <script  type="text/javascript">

        $(function()
        {
            $("abbr.timeago").timeago();

            var time = $.timeago(new Date(1000 * 00000));

            $('p.date').html(time).css({
                'float':    'right',
                'position': 'relative',
                'top':      '12px'
            });
        });

    </script>


</head>
<body>

<div style="padding-top:1em;" id="lame-spacer"><!-- lame spacer --></div>


<div id="permission-header-container">
    <div id="permission-header">

        <p id="brand-avatar">
            <img alt="Wtjfh5m9_bigger" src="https://pbs.twimg.com/profile_images/444197259488411648/wtJfH5M9_bigger.png" />
        </p>

        <h1>Shinola  loves your image and would like to feature it.</h1>

        <div class="tweet">
            <div class="content-container">
                <p class="avatar">
                    <a href="http://twitter.com/Shinola">
                        <img alt="Wtjfh5m9_bigger" height="35" src="https://pbs.twimg.com/profile_images/444197259488411648/wtJfH5M9_bigger.png" width="35" />
                    </a>
                </p>

                <div class="content">

                    <p class="tweet-text">
                        <a href="http://twitter.com/Shinola">
                            @Shinola
                        </a>:
                        @NYdelight Great photo! Mind if we share it? You can give permission here: http://pco.lt/1eEo1Y1</p>
                    <p class="date"><a href="/permission/69811f50a6e00131eff6422a5a56f21d" target="_blank">less than a minute ago</a></p>


                    <div class="actions">
                        <a href="https://twitter.com/intent/tweet?in_reply_to=456091506378821632"><i class="icon icon-twitter-replies"></i> Reply</a>
                        <a href="https://twitter.com/intent/retweet?tweet_id=456091506378821632"><i class="icon icon-twitter-retweets"></i> Retweet</a>
                        <a href="https://twitter.com/intent/favorite?tweet_id=456091506378821632"><i class="icon icon-twitter-favorites"></i> Favorite</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


<div class="container">







    <script>
        $(function(){
            $('#permission-form').submit(function(e){

                // Check that they checked the box if they're agreeing.
                $("#permission-form button").each(function(){
                    if($(this).data('clicked') && $(this).attr('id') == 'approve-button'){
                        if(!$("#agree_to_terms").is(':checked')){
                            $('#agreement-error-message').show();
                            $('#agreement-error-container').addClass('alert alert-error');
                            e.preventDefault();
                        }
                    }
                });
            });

            $("#permission-form button").click(function() { // quick way to track which button was clicked, so we can validate the checkbox bits in the form submission JS.
                $("#permission-form button").data('clicked', false);
                $(this).data('clicked', true);
            });


            $('.terms').click(function(e){
                e.preventDefault();
                $('#terms-copy').modal({
                    focus: false,
                    escClose: true,
                    overlayClose: true,
                    opacity: 75,
                    containerId: 'copy-modal-container',
                    onOpen: function (dialog) {
                        dialog.overlay.fadeIn('fast');
                        dialog.container.fadeIn('fast');
                        dialog.data.fadeIn('fast');
                        $('.simplemodal-wrap').css('overflow-y', 'scroll');
                        $('.modal-confirm-button').click(function(){
                            $.modal.close();
                        });
                    },
                    onClose: function (dialog) {
                        dialog.data.fadeOut('fast');
                        dialog.container.fadeOut('fast');
                        dialog.overlay.fadeOut('fast', function () {
                            $.modal.close();
                        });
                    }
                });

            });


        });

    </script>






    <div id="content">
        <div id="photo">

            <h2 class="permissions">YOUR PHOTO</h2>
            <p class="photo-p"><img alt="5a53527ac44a11e398020002c9aeb088_8" src="http://distilleryimage0.ak.instagram.com/5a53527ac44a11e398020002c9aeb088_8.jpg" /></p>
            <div class="tweet photo-overlay">
                <div class="content-container">
                    <p class="avatar">
                        <a href="http://twitter.com/NYdelight">
                            <img alt="A26eb07158a83ffdbbf56ef94d2d933b_normal" height="35" src="https://pbs.twimg.com/profile_images/378800000704065454/a26eb07158a83ffdbbf56ef94d2d933b_normal.jpeg" width="35" />
                        </a>
                    </p>

                    <div class="content">

                        <p class="tweet-text">
                            <a href="http://twitter.com/NYdelight">
                                @NYdelight
                            </a>:
                            Breaking rules...(now I m paying for it) @ Shinola Store Detroit http://t.co/dim7n0fhzO</p>
                        <p class="date"><a href="http://twitter.com/NYdelight/statuses/455904236568866816" target="_blank">4 months ago</a></p>


                        <div class="actions">
                            <a href="https://twitter.com/intent/tweet?in_reply_to=455904236568866816"><i class="icon icon-twitter-replies"></i> Reply</a>
                            <a href="https://twitter.com/intent/retweet?tweet_id=455904236568866816"><i class="icon icon-twitter-retweets"></i> Retweet</a>
                            <a href="https://twitter.com/intent/favorite?tweet_id=455904236568866816"><i class="icon icon-twitter-favorites"></i> Favorite</a>
                        </div>

                    </div>
                </div>

            </div>
        </div><!-- /#photo -->

        <div id="terms">
            <form action="/images/9388545/image_requests/69811f50a6e00131eff6422a5a56f21d/approval_start" method="post" id="permission-form">
                <input id="authenticity_token" name="authenticity_token" type="hidden" value="8lX0w+qMtSGKh10CVa4lhtI8Ny8IPAjTHsqmX00t7Js=" />
                <h2 class="permissions">
                    TERMS AND AGREEMENT
                </h2>

                <p>You have approved Shinola  to have full rights to your image and to post it in any way. <a href="/more-info?id=69811f50a6e00131eff6422a5a56f21d" class="terms" target="_new">Read more</a>



            </form>
        </div><!-- #/terms -->

    </div>


    <div id="terms-copy" style="display:none;">
        <h1>PHOTO RELEASE</h1>



        <p>IMPORTANT - READ CAREFULLY. THIS AGREEMENT GRANTS TO Shinola ("BRAND") A LICENSE TO A PHOTOGRAPH TAKEN BY YOU AND POSTED ON SOCIAL MEDIA ("PHOTO"). BY CLICKING THE "ACCEPT" BUTTON (BELOW) YOU OR THE ORGANIZATION YOU REPRESENT ARE UNCONDITIONALLY CONSENTING TO BE BOUND BY AND ARE BECOMING A PARTY TO THIS AGREEMENT. IF YOU DO NOT AGREE TO ALL OF THE TERMS OF THIS AGREEMENT, CLICK THE "DO NOT ACCEPT" BUTTON (BELOW). IF YOU ARE EXECUTING THIS AGREEMENT ON BEHALF OF AN ORGANIZATION, YOU REPRESENT THAT YOU HAVE THE AUTHORITY TO DO SO.</p>


        <ol>
            <li>License. I hereby grant to Brand and its contractors, assigns, licensees, successors in interest, legal representatives, and heirs, under all applicable intellectual property rights, a non-exclusive, perpetual, royalty-free, right and license (including the right to sublicense third parties) to use, reproduce, make derivative works of, distribute, transmit and otherwise exploit the Photo in any manner, including without limitation on social media postings, as well as in connection with Brand's marketing and promotion throughout the universe by any means now known or hereafter invented. I will confirm my consent to the foregoing permissions and license upon reasonable request by Brand. Brand shall have no obligation to use or take any action with respect to the Photo. I understand that Brand will use commercially reasonable efforts to provide attribution of the Photo to me, if the circumstances of the use reasonably allow such attribution to be included. </li>
            <li>Ownership. I retain all right, title and interest (subject to the license granted herein) in and to the Photo, and I represent and warrant that I (i) own the Photo and/or possess all rights in the Photo necessary to grant the rights and licenses set forth above; and (ii) have obtained all consents and releases (including without limitation, from all models or other persons appearing in the Photo) necessary for Brand to use the Photo as contemplated in this Agreement without payment of any kind to any third party. I agree to defend, indemnify and hold harmless Brand, its affiliates and contractors and each of Brand's and such affiliates' and contractors' respective employees, contractors, directors, suppliers, representatives, customers and licensees from all liabilities, claims and expenses, including reasonable attorneys' fees, that arise from or relate to any breach or alleged breach by me of my representations and warranties in this Agreement. Brand reserves the right to assume the exclusive defense and control of any matter otherwise subject to indemnification by me, in which event I will assist and cooperate with Brand in asserting any available defenses. </li>
            <li>Miscellaneous. This Agreement represents the entire agreement of the parties with respect to the subject matter hereof and no changes or modifications or waivers or supplements to this Agreement will be effective unless in writing and signed by both parties hereafter. This Agreement shall be governed by and construed in accordance with the laws of the State of  New York  without regard to the conflicts of laws provisions thereof. The provisions of this agreement are severable and the invalidity or unenforceability of any provisions hereof shall not affect the validity or enforceability of any other provisions hereof.</li>
        </ol>


        <p style="text-align:Center;"><button class="btn btn-primary modal-confirm-button">OK.</button></p>

        <p style="text-align:Center;"><button class="btn btn-primary" id='dl-link'><a href="/terms?download=true&amp;id=69811f50a6e00131eff6422a5a56f21d">Download Agreement</a></button></p>

    </div>

    <div id="read-more-copy" style="display:none;">
        <h1>Read More</h1>

        <p style="text-align:Center;"><button class="modal-confirm-button btn btn-primary">OK.</button></p>
    </div>

</div>

<div id="tweet-preview-container" style="display:none;">
</div>



</body>
</html>
