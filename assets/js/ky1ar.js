$( document ).ready(function() {
    
    const over = $('#ky1-ovr');
    const add = $('#ky1-add');
    const cls = $('#frm-cls');
    const addForm = $('#ky1-add-frm');
    const err_msg = $('#errorDiv');

    add.on('click', function() {
        over.fadeToggle();
        addForm.fadeToggle();
    });
    cls.on('click', function() {
        over.fadeToggle();
        addForm.fadeToggle();
        $('#ky1-add-frm ul li').removeClass('sel-act');
        $('.box-fnl b').text('-');
    });

    $('#ky1-add-frm ul li').click(function() {
        $(this).siblings().removeClass('sel-act');
        $(this).addClass('sel-act');

        var text = $(this).find('b').text();
        var parentId = $(this).parent().attr('id');
        var tmpId = parentId.replace('sel-', 'tmp-');
        $('#' + tmpId).text(text);
    });

    $('#frm-rgs').on('click', function(e) {
        e.preventDefault();

        err_msg.slideUp();
        var ind = $('#frm-ind').text();
        var sen = $('#frm-sen').text();
        var clr = $('#frm-clr').text();
        
        var dat = ind + sen + clr;
        $.ajax({
            url: 'register',
            method: 'POST',
            data: { dat: dat },
            success: function(response) {
                var jsonData = JSON.parse(response);
                if (jsonData.success) {
                    window.location.href = '/';
                } else {
                    err_msg.text(jsonData.message).slideDown();
                }
            }
        });
        
    });

});


