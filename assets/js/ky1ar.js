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

    $(document).on('click', '.lst-del', function(e) {
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

    function nreload(date) {
        console.log(date);
        $.ajax({
            url: 'reload',
            method: 'POST',
            data: { fecha: date },
            success: function(response) {
                $('.lst-dat').html(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }



















    const $daysContainer = $('.days-container');
    const $monthName = $('.month-name');
    const $prevMonthBtn = $('.prev-month');
    const $nextMonthBtn = $('.next-month');
    
    let currentDate = new Date();
    let isScrolling;
    let isTouching = false;
    
    function renderDays() {
        $daysContainer.empty();
        $('<div>').addClass('day-placeholder').appendTo($daysContainer);
    
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();
        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const lastDay = new Date(year, month + 1, 0).getDate();
    
        const today = new Date();
        const todayDay = today.getDate();
        const todayMonth = today.getMonth();
        const todayYear = today.getFullYear();
    
        for (let i = 0; i < firstDay; i++) {
            $('<div>').addClass('day-placeholder').appendTo($daysContainer);
        }
    
        for (let day = 1; day <= daysInMonth; day++) {
            const dayDate = new Date(year, month, day);
            const dayName = dayDate.toLocaleDateString('es-ES', { weekday: 'short' });
            const formattedDate = dayDate.toISOString().split('T')[0];
            const $dayItem = $('<div>')
                .addClass('day-item')
                .html(`${day} <span class="day-name">${dayName}</span>`)
                .attr('data-date', formattedDate);
        
            if (year === todayYear && month === todayMonth && day === todayDay) {
                $dayItem.addClass('selected');
            }
        
            $dayItem.on('click', function() {
                $('.day-item.selected').removeClass('selected');
                $(this).addClass('selected');
        
                this.scrollIntoView({ inline: 'center', behavior: 'smooth' });
                nreload($(this).data('date'));
            });
        
            $dayItem.on('touchstart', function() {
                isTouching = true;
            });
        
            $dayItem.on('touchend', function() {
                isTouching = false;
            });
        
            $dayItem.appendTo($daysContainer);
        }
        
    
        $('<div>').addClass('day-placeholder').appendTo($daysContainer);
    
        const $selectedDayItem = $(`.day-item:contains(${currentDate.getDate()})`);
        if ($selectedDayItem.length) {
            $selectedDayItem.addClass('selected');
            $selectedDayItem[0].scrollIntoView({ inline: 'center', behavior: 'smooth' });
        } else {
            const $lastDayItem = $(`.day-item:contains(${lastDay})`);
            if ($lastDayItem.length) {
                $lastDayItem.addClass('selected');
                $lastDayItem[0].scrollIntoView({ inline: 'center', behavior: 'smooth' });
            }
        }
        updateMonthName();
    }
    
    function updateMonthName() {
        const monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Setiembre", "Octubre", "Noviembre", "Diciembre"];
        $monthName.text(`${monthNames[currentDate.getMonth()]}`);
    }
    
    function updateCentralDay() {
        if ($daysContainer[0].scrollWidth <= $daysContainer[0].clientWidth) return;
    
        let closestDistance = Infinity;
        let $closestItem = null;
        const containerCenter = $daysContainer.width() / 2 + $daysContainer.offset().left;
    
        $('.day-item').each(function() {
            const rect = this.getBoundingClientRect();
            const dayCenter = rect.left + rect.width / 2;
            const distance = Math.abs(dayCenter - containerCenter);
    
            if (distance < closestDistance) {
                closestDistance = distance;
                $closestItem = $(this);
            }
        });
    
        if ($closestItem) {
            $('.day-item.selected').removeClass('selected');
            $closestItem.addClass('selected');
    
            // Instead of using scrollIntoView, manually scroll to center
            const scrollOffset = $closestItem.offset().left - $daysContainer.offset().left - ($daysContainer.width() / 2 - $closestItem.width() / 2);
            $daysContainer.animate({ scrollLeft: scrollOffset }, 300);
        }
    }
    
    $daysContainer.on('scroll', function() {
        if ($daysContainer[0].scrollWidth <= $daysContainer[0].clientWidth) return;
    
        updateCentralDay();
        clearTimeout(isScrolling);
    
        isScrolling = setTimeout(function() {
            if (!isTouching) {
                nreload($('.day-item.selected').data('date'));
            }
        }, 200);
    });
    
    $daysContainer.on('touchmove', function() {
        updateCentralDay();
    });
    
    $prevMonthBtn.on('click', function() {
    
        const prevMonthDate = new Date(currentDate.getFullYear(), currentDate.getMonth() - 1, 1);
        const lastDayOfPrevMonth = new Date(prevMonthDate.getFullYear(), prevMonthDate.getMonth() + 1, 0).getDate();
        currentDate = new Date(prevMonthDate.getFullYear(), prevMonthDate.getMonth(), lastDayOfPrevMonth);
        renderDays();
    });
    
    $nextMonthBtn.on('click', function() {
        console.log(`currentDate before next: ${currentDate}`);
    
        const nextMonthDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 1);
        const today = new Date();
        
        if (nextMonthDate > today) {
            console.log("Cannot move to a future date.");
            return;
        }

        if (nextMonthDate.getMonth() === today.getMonth() && currentDate.getFullYear() === today.getFullYear()) {
            currentDate = new Date();
        } else {
            currentDate = new Date(nextMonthDate.getFullYear(), nextMonthDate.getMonth(), 1);
        }
    
        console.log(`currentDate after next: ${currentDate}`);
        renderDays();
    });
    
    renderDays();
    

    
    
});


