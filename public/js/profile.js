$(document).ready(function () {

    /*
     Submit buttons
     */
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".crud-submit").click(function (e) {
        e.preventDefault();
        button = $(this);
        console.log('click create twitter')

        button.prop('disabled',true);

        var form_action = $("#create_tweet_modal").find("form").attr("action");
        console.log(form_action)
        console.log($('#form_create_tweet').serialize())

        $.ajax({
            dataType: 'json',
            type: 'POST',
            url: form_action,
            data: $('#form_create_tweet').serialize(),
            success: function (response) {
                $("#create_modal").modal('hide');
                //updateParentsTable();
            }, error: function (response) {
            }
        });

        return false;
    });

});
