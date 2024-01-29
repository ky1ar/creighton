$( document ).ready(function() {
    
    const over = $('#ky1-ovr');
    const add = $('#ky1-add');
    const addForm = $('#ky1-add-frm');

    add.on('click', function() {
        over.fadeToggle();
        addForm.fadeToggle();
    });

});


