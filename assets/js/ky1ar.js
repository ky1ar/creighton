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
        var day = $('.hdr-mdl').attr('data-day');

        var dat = ind + sen + clr + lbr;
        $.ajax({
            url: 'register',
            method: 'POST',
            data: { dat: dat, day: day },
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

    $('.hdr-mdl').click(function(){
        reload(0);
    });

    function reload(offset) {
        
        var hoy = new Date();
        var msj = '';

        if (offset == 0) {
            fecha = hoy;
            msj = 'Hoy, ';
        }

        fecha.setDate(fecha.getDate() + offset);
        var f_date = fecha.getFullYear() + '-' + ('0' + (fecha.getMonth() + 1)).slice(-2) + '-' + ('0' + fecha.getDate()).slice(-2);
        var f_hoy = hoy.getFullYear() + '-' + ('0' + (hoy.getMonth() + 1)).slice(-2) + '-' + ('0' + hoy.getDate()).slice(-2);

        if (f_date == f_hoy) {
            msj = 'Hoy, ';
        }

        var prt = f_date.split('-');
        var day = prt[2];
        var mon = prt[1];

        var months = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
        var month = months[parseInt(mon, 10) - 1];
        
        var t_date = msj + day + ' de ' + month;

        $.ajax({
            url: 'reload',
            method: 'POST',
            data: { fecha: f_date },
            success: function(response) {
                $('.lst-dat').html(response);
                $('.hdr-mdl').text(t_date);
                $('.hdr-mdl').attr('data-day', f_date);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
    
});


