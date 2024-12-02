/**
 * Created by Christian on 15.03.2019.
 */

$('input[type=password]').keyup( function(event) {

    var pswd = $(this).val();
    var invalid = false;
    var controlGroup = $(this).parents(".form-group").first();

    //validate the length
    if ( pswd.length < 8 ) {
        $('#length').removeClass('valid').addClass('invalid');
        invalid = true;
    } else {
        $('#length').removeClass('invalid').addClass('valid');
    }

    //validate letter
    if ( pswd.match(/[A-z]/) ) {
        $('#letter').removeClass('invalid').addClass('valid');
    } else {
        $('#letter').removeClass('valid').addClass('invalid');
        invalid = true;
    }

    //validate capital letter
    if ( pswd.match(/[A-Z]/) ) {
        $('#capital').removeClass('invalid').addClass('valid');
    } else {
        $('#capital').removeClass('valid').addClass('invalid');
        invalid = true;
    }

    //validate number
    if ( pswd.match(/\d/) ) {
        $('#number').removeClass('invalid').addClass('valid');
    } else {
        $('#number').removeClass('valid').addClass('invalid');
        invalid = true;
    }

    $(this).attr("aria-invalid", invalid);

    if(!invalid) {
        controlGroup.removeClass("text-warning text-danger");
        controlGroup.addClass("text-success");
    } else {
        controlGroup.removeClass("text-success");
        controlGroup.addClass("text-warning text-danger");
    }

    //console.log($("#userPassword").val());
    //console.log($("#userPasswordConfirm").val());

    if ( $("#userPassword").val() != $("#userPasswordConfirm").val() ) {
        var pwConfirm = $("#userPasswordConfirm").parents(".form-group").first();
        pwConfirm.removeClass("text-success");
        pwConfirm.addClass("text-warning text-danger");
    }


}).focus(function() {
    $('#pswd_info').show();
}).blur(function() {
    $('#pswd_info').hide();
});