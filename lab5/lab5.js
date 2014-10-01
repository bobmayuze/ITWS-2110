$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "lab5.xml",
        dataType: "xml",
        success: function (xml) {
            $(xml).find('project').each(function () {
                var name = $(this).find('menuName').text();
                var desc = $(this).find('menuDesc').text();
                var url = $(this).find('menuURL').text();
                var menuli = '';
                menuli += '<li>';
                menuli += '<a href="'; 
                menuli += url;
                menuli += '">';
                menuli += desc;
                menuli += '</a>';
                menuli += '</li>';

                $('#menu1').append(menuli);
            });
            $("body").append('<script>$("#menu1").menu();</script>');
        }
    });
});