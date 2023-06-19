
function viewaddress(fileInput){
    if(fileInput.files && fileInput.files[0])
    {
        var reader = new FileReader();
        reader.onload = function(e){
            $("#image").attr("src" , e.target.result);
        }
        reader.readAsDataURL(fileInput.files[0]);
    }
}
function test() {

    var testNumber = /^(\+84)\d{9,100}$/;
    var sdt = document.getElementById("sdt").value;
        if(!testNumber.test(sdt))
        {
            alert("Số điện thoại không hợp lệ! VD +84123456789");
            return false;
        }
        else if(document.getElementById("nguoidang").value.trim()=="" || document.getElementById("nguoidang").value.trim()==null)
            {
                alert("Tên người dùng không hợp lệ");
                return false;
            }
            else if(document.getElementById("tensp").value.trim()=="" || document.getElementById("tensp").value.trim()==null)
            {
                alert("Tên sản phẩm không hợp lệ");
                return false;
            }
        else return true;
    }