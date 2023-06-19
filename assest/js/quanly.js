function deleted(Id)
{
    option = confirm("Bạn có chắc muốn xóa sản phẩm này !");
    if(!option) return;
    $.post('xoa.php',{
    'Id':Id} ,function(data){
        location.reload();
    })
}

function updated(Id)
{
    option = confirm("Bạn có chắc muốn đăng lại với giá khởi điểm cũ !");
    if(!option) return;
    $.post('danglai.php',{
    'Id':Id} ,function(data){
        location.reload();
    })
}