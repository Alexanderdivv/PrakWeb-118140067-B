let act = new function(){
	this.tampung = document.getElementById('daftarBarang');
	this.daftarBarang = ['Buku tulis', 'Pensil', 'Spidol'];
	this.FetchAll=function(){
		var data = '';
		if(this.daftarBarang.length>0){
			for (i = 0;i < this.daftarBarang.length; i++) {
				data +='<ul>';
				data +='<li>' + this.daftarBarang[i]+' ';
				data +='<a href="#" onclick="act.editF('+i+')">[Edit </a>]';
				data +='<a href="#" onclick="act.deleteF('+i+')"> | Delete]</a></li>';
				data += '</ul>';
			}
		}
		return this.tampung.innerHTML = data;
	};
	this.inputF = function () {
	tampung = document.getElementById('nama');
	let daftarBarang = tampung.value;

	if (daftarBarang) {
		this.daftarBarang.push(daftarBarang.trim());
		tampung.value = '';
		this.FetchAll();
	}
};
	this.editF = function (item){
		tampung = prompt('Ubah Barang','');
		this.daftarBarang[item]= tampung;
		this.FetchAll();
	};

	this.deleteF = function(item){
		let notf = confirm('Yakin ?');
		if (notf) {
			this.daftarBarang.splice(item, 1);
			this.FetchAll();
		}
	};
}

act.FetchAll();
 function CloseInput() {
    document.getElementById('spoiler').style.display = 'none';
  }