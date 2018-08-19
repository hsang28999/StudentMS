$('.deleteBtn').click(function () {
    alert(window.location.href + '/delete?id=' + this.id);
    $.ajax({
        url : window.location.href + '/delete?id=' + this.id,
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
