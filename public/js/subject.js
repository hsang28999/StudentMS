$('.deleteBtn').click(function () {
    // alert($('meta[name="csrf-token"]').attr('content'));
    $.ajax({
        url : window.location.href + '/delete',
        type : "post",
        dataType:"text",
        data : {
            '_token': $('meta[name="csrf-token"]').attr('content'),
            'id': this.id
        },
        success : function (result){
            alert('Delete Success');
            location.reload();
        }
    });
})
