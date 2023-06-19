function view(){
    var hientai = document.getElementById('tien').value;
    var goc = document.getElementById("giahientai").value;
    goc = goc.split('.').join('');
    hientai = parseFloat(hientai);
    goc = parseFloat(goc);
    // document.getElementById('Giahientai').value = tien;
    if(hientai <= goc)
        alert("Số tiền đăng phải lớn hơn giá hiên tại!");
    
}
