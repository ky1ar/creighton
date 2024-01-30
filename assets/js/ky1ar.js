$( document ).ready(function() {
    
    const over = $('#ky1-ovr');
    const add = $('#ky1-add');
    const cls = $('#frm-cls');
    const addForm = $('#ky1-add-frm');
    const err_msg = $('#ky1-err');
    const hdr = $('#ky1-hdr');
    const lub = $('#tmp-lub');

    const bck = $('#ky1-bck');
    const nxt = $('#ky1-nxt');

    lub.on('click', function() {
        $(this).toggleClass('ky1-act');
    });

    add.on('click', function() {
        over.fadeToggle();
        addForm.fadeToggle();
        add.toggleClass('ky1-blr');
        hdr.toggleClass('ky1-blr');
    });

    cls.on('click', function() {
        over.fadeToggle();
        addForm.fadeToggle();
        $('#ky1-add-frm ul li').removeClass('sel-act');
        $('.box-fnl b').text('-');
        err_msg.slideUp();
        add.toggleClass('ky1-blr');
        hdr.toggleClass('ky1-blr');
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
        var ind = $('#tmp-ind').text();
        var sen = $('#tmp-sen').text();
        var clr = $('#tmp-clr').text();
        var lbr = lub.hasClass('ky1-act') ? "L" : "";

        var dat = ind + sen + clr + lbr;
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

    $('.lst-del').on('click', function(e) {
        e.preventDefault();
        var cli = $(this).closest('li');
        var did = cli.attr('data-id');

        $.ajax({
            url: 'delete',
            method: 'POST',
            data: { did: did },
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

    var fecha = new Date();

    bck.click(function(){
        reload(-1);
    });

    nxt.click(function(){
        reload(1);
    });

    function reload(offset) {
        
        fecha.setDate(fecha.getDate() + offset);
        var formattedDate = fecha.getFullYear() + '-' + ('0' + (fecha.getMonth() + 1)).slice(-2) + '-' + ('0' + fecha.getDate()).slice(-2);

        console.log(formattedDate);
        $.ajax({
            url: 'reload',
            method: 'POST',
            data: { fecha: formattedDate },
            success: function(response) {
                $('.lst-dat').html(response);
                $('.hdr-mdl').text(formattedDate);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
});


