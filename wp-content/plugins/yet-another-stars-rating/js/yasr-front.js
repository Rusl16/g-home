
/*** Constant used by yasr

yasrCommonData (postid, ajaxurl, loggedUser, visitorStatsEnabled, loaderHtml, tooltipValues)

yasrMultiSetData (setType, nonce)


***/


/****** Yasr shortcode page ******/

document.addEventListener('DOMContentLoaded', function(event) {

    //if is defined yasrVisitorsVotesData means that the shortcode is used
    if (typeof yasrVisitorsVotesData !== 'undefined') {

        yasrVisitorsVotes ();

        if (yasrCommonData.visitorStatsEnabled == 'yes') {

            yasrDrawTipsProgress ();

        }

    }

});


    /*** Yasr visitor Votes ***/

    function yasrVisitorsVotes () {

        jQuery('.rateit').bind('over', function (event, value) { jQuery(this).attr('title', yasrCommonData.tooltipValues[value-1]); });

        //on vote...
        jQuery('.yasr_visitor_votes_stars_div').on('rated', function() {

            var el = jQuery(this);
            var value = el.rateit('value');
            var value = value.toFixed(1); //

            var postid = jQuery( this ).data('postid');
            var classSize = jQuery( this ).attr('class');

            var voteIfUserAlredyRated = jQuery('#yasr-user-vote-'+postid).data('yasr-already-voted');

            if (value < 1) {
                jQuery('#yasr_visitor_votes_' + postid).html('You can\'t vote 0');
            }

            else {

                jQuery('#yasr_visitor_votes_' + postid).html(yasrCommonData.loaderHtml);

                    var data = {
                        action: 'yasr_send_visitor_rating',
                        rating: value,
                        post_id: postid,
                        size: classSize,
                        nonce_visitor: yasrVisitorsVotesData.nonceVisitor
                    };

                //Send value to the Server
                jQuery.post(yasrCommonData.ajaxurl, data, function(response) {
                    //response
                    jQuery('#yasr_visitor_votes_' + postid).html(response);
                    jQuery('.rateit').rateit();

                }) ;

            } //End else value <1

        });//End function insert/update vote


    }
    /*** End Yasr Visitor Votes ***/


    function yasrVisitorsMultiSet (postId, setType, ajaxurl, nonce) {

        //will have field id and vote
        var ratingObject = "";

        //an array with all the ratingonjects
        var ratingArray = [];

        jQuery('.yasr-visitor-multi-'+postId+'-'+setType).on('rated', function() {
            var el = jQuery(this);
            var value = el.rateit('value');
            var value = value.toFixed(1);
            var idField = el.attr('id');

            ratingObject = {

                field: idField,
                rating: value

            };

            //creating rating array
            ratingArray.push(ratingObject);

        });

        jQuery('#yasr-send-visitor-multiset-'+postId+'-'+setType).on('click', function() {

            jQuery('#yasr-send-visitor-multiset-'+postId+'-'+setType).hide();

            var cookiename = "yasr_multi_visitor_vote_" + postId+'_'+setType;

            jQuery('#yasr-loader-multiset-visitor-'+postId+'-'+setType).show();

            var data = {

                action: 'yasr_visitor_multiset_field_vote',
                nonce: nonce,
                post_id: postId,
                rating: ratingArray,
                set_type: setType

            };

            //Send value to the Server
            jQuery.post(ajaxurl, data, function(response) {
                jQuery('#yasr-loader-multiset-visitor-'+postId+'-'+setType).text(response);
            });

        });

    } //End function


    function yasrMostOrHighestRatedChart () {

        //By default, hide the highest rated chart
        jQuery('#yasr-highest-rated-posts').hide();

        //On click on highest, hide most and show highest
        jQuery('#yasr_multi_chart_highest').on("click", function () {

            jQuery('#yasr-most-rated-posts').hide();

            jQuery('#yasr-highest-rated-posts').show();

            return false; // prevent default click action from happening!

        });

        //Vice versa
        jQuery('#yasr_multi_chart_most').on("click", function () {

            jQuery('#yasr-highest-rated-posts').hide();

            jQuery('#yasr-most-rated-posts').show();

            return false; // prevent default click action from happening!

        });

    }


/****** End Yasr shortcode page  ******/


/****** Tooltip function ******/

    //used in ajax page
    function yasrDrawProgressBars (valueProgressbar, postId) {

        var i = null;

        var j = 0; //This is for the array

        for (i=5; i>0; i--) {

            jQuery( "#yasr-progress-bar-postid-"+postId+"-progress-bar-" + i).progressbar({
                value: valueProgressbar[j]
            });

            j=j+1;

        }

    }

    //used in shortcode page and ajax page
    function yasrDrawTipsProgress () {

        var varTipsContent = null;

        jQuery('#yasr-total-average-dashicon-' + yasrCommonData.postid).tooltip({

            position: { my: 'center bottom' , at: 'center top-10' },
            tooltipClass: "yasr-visitors-stats-tooltip",
            content: function(tipsContent) {

                if (!varTipsContent) {

                    var data = {
                        action: 'yasr_stats_visitors_votes',
                        post_id: yasrCommonData.postid
                    };

                    jQuery.post(yasrCommonData.ajaxurl, data, function(response) {
                        varTipsContent = response;
                        tipsContent(response);
                    });

                }

                else {
                    return varTipsContent;
                }

            },
            disabled: true,
            close: function( event, ui ) {
                jQuery(this).tooltip('disable');
            }

        });

        jQuery('#yasr-total-average-dashicon-' + yasrCommonData.postid).on("hover", function(){
            jQuery(this).tooltip('enable').tooltip('open');
            jQuery('.ui-helper-hidden-accessible').children(':first').removeAttr('style');
            jQuery('.ui-helper-hidden-accessible').children(':last', this).remove();
        });

    }



/****** End tooltipfunction ******/


/****** draw progress bar for yasr_pro_comment_reviews_summary ******/

    function yasrDrawProgressBarsReviewsSummery (valueProgressbar, postId) {

            var i = null;

            var j = 0; //This is for the array

            for (i=5; i>0; i--) {

                jQuery( "#yasr-pro-reviews-summary-postid-"+postId+"-progress-bar-" + i).progressbar({
                    value: valueProgressbar[j]
                });

                j=j+1;

            }

        }

/****** End progressbar function *******/