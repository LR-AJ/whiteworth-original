
function emailPassage() {
    var name           = $('#name') 
    var email          = $('#email');
    var phone          = $('#contact');
    var service_code   =$('#service-code');


            $.ajax({
                    url: '/whiteworth/mail/customMail.php',
                    method: 'POST',
                    dataType: 'json',
                    data: { name: name.val(), email: email.val(),phone:phone.val(),service_code:service_code.val()},
                    success: function (response) {
                        $('.sent-notification').text('Message1 Sent Successfully.');
                },
            });
            $.ajax({
                    url: '/whiteworth/mail/customerMail.php',
                    method: 'POST',
                    dataType: 'json',
                    data: { name: name.val(), email: email.val(),phone:phone.val(),service_code:service_code.val()},
                    success: function (response) {
                        $('.sent-notification').text('Message1 Sent Successfully.');
                    },
            });

}
function emailPassage2() {  
var name           = $('#sticky_name') 
var email          = $('#sticky_email');
var phone          = $('#sticky_number');
var service_code   =  $('#service-code');

    $.ajax({
                url: '/whiteworth/mail/customMail.php',
                method: 'POST',
                dataType: 'json',
                data: { name: name.val(), email: email.val(),phone:phone.val() ,service_code:service_code.val()},

                success: function (response) {
                    $('.sent-notification').text('Message2 Sent Successfully.');
                },
    });
    $.ajax({
        url: '/whiteworth/mail/customerMail.php',
        method: 'POST',
        dataType: 'json',
        data: { name: name.val(), email: email.val(),phone:phone.val(),service_code:service_code.val()},
        success: function (response) {
            $('.sent-notification').text('Message1 Sent Successfully.');
        },
    });
}