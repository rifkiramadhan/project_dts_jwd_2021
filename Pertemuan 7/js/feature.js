const HargaTotal = () => {
    let myForm = document.pemesanan;
    let total1;
    let total2;
    let total3;
    let total4;
    let total5;
    let jumlah1 = parseInt(myForm.jumlah1.value);
    let jumlah2 = parseInt(myForm.jumlah2.value);
    let jumlah3 = parseInt(myForm.jumlah3.value);
    let jumlah4 = parseInt(myForm.jumlah4.value);
    let jumlah5 = parseInt(myForm.jumlah5.value);
    
    if(myForm.jumlah1.value == "") jumlah1=0;
    if(myForm.jumlah2.value == "") jumlah2=0;
    if(myForm.jumlah3.value == "") jumlah3=0;
    if(myForm.jumlah4.value == "") jumlah4=0;
    if(myForm.jumlah5.value == "") jumlah5=0;
    
    total1 = parseInt(myForm.harga1.value)*jumlah1;
    total2 = parseInt(myForm.harga2.value)*jumlah2;
    total3 = parseInt(myForm.harga3.value)*jumlah3;
    total4 = parseInt(myForm.harga4.value)*jumlah4;
    total5 = parseInt(myForm.harga5.value)*jumlah5;
    
    myForm.total.value = total1 + total2 + total3 + total4 + total5;
}
    
const diskon = () => {
    let myForm = document.pemesanan;
    
    if(myForm.total.value < 60000) {
    myForm.potongan.value = 0;
    }
    else {
    myForm.potongan.value = 10000;
    }
}
    
const TotalBayar = () => {
    let myForm = document.pemesanan;
    
    myForm.bayar.value = parseInt(myForm.total.value) - parseInt(myForm.potongan.value);
}
    
const proses = () => {
    HargaTotal();
    diskon();
    TotalBayar();
}
    
const batal = () => {
    let element = document.pemesanan;
    
    element.jumlah1.value = "";
    element.jumlah2.value = "";
    element.jumlah3.value = "";
    element.jumlah4.value = "";
    element.jumlah5.value = "";
    element.total.value = "";
    element.potongan.value = "";
    element.bayar.value = "";
}