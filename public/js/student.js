$('.deleteBtn').click(function () {

    $.ajax({
        url : window.location.href + '/delete/' + this.id,
        type : "post",
        dataType:"text",
        data : {
            '_token': $('meta[name="csrf-token"]').attr('content')
        },
        success : function (result){
            alert('Delete Success');
            location.reload();
        }
    });
})
