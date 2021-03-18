$(document).ready(function () {

    /*
     Submit buttons
     */
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".tweet-store").click(function (e) {
        e.preventDefault();

        var form_action = $("#create_tweet_modal").find("form").attr("action");

        $.ajax({
            dataType: 'json',
            type: 'POST',
            url: form_action,
            data: $('#form_create_tweet').serialize(),
            success: function (response) {
                $("#create_tweet_modal").modal('hide');
                //TODO update tweets list
            }, error: function (response) {
                console.log('error create tweet')
                console.log(response)
            }
        });

        return false;
    });

});
