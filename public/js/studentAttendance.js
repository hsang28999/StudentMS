$('#searchBtn').click(function () {
    console.log($('#classLabel').val())
    // url      = window.location.href
    return location.href = window.location.pathname + '/' + $('#classLabel').val();
})
$('#classLabel').change(function () {
    return location.href = window.location.pathname   + '?classId=' + $('#classLabel').val();
})