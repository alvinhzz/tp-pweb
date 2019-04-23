var namaValid=/^[a-zA-Z]+(([\' '\'\,\.\-][a-zA-Z])?[a-zA-Z]*)*$/;
var nama1=getElementById('nama1');
var nama2=getElementById('nama2');
var tlpValid=/^[0-9]+$/;
var tlp=getElementById('tlp');
var alamat=getElementById('alamat');
var pesan='';
<script type="text/JavaScript">
function validasi(){
  if(nama1 == ''){
    pesan='Nama depan harus di isi\n';
  }
  if (nama1 != '' && !nama1.match(namaValid)) {
    pesan += 'Nama depan tidak valid\n';
  }
  if(nama2 == ''){
    pesan='Nama depan harus di isi\n';
  }
  if (nama2 != '' && !nama2.match(namaValid)) {
    pesan += 'Nama depan tidak valid\n';
  }
  if (tlp == '') {
    pesan += 'No Tlp wajib diisi\n';
  }
  if (tlp != '' && !tlp.match(tlpValid)) {
    pesan += 'No tlp tidak valid\n';
  }
  if (alamat == '') {
    pesan += "Alamat wajib diisi\n";
  }
  if (pesan != '') {
    alert('Ada kesalahan dalam mengisi formulir : \n'+pesan);
    return false;
  }
  return true;
}
</script>
