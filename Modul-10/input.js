// app = act
// el = tampung


let act = new function(){
	this.tampung = document.getElementById('daftarBarang');
	this.barang = ['Buku tulis', 'Pensil', 'Spidol'];
	let pjg=this.barang.length;
	this.FetchAll=function(){
		var data = '';
		if(pjg>0){
			for (var i = 0;i < this.pjg; i++) {
				data +='<ul>';
				data +='<li>' + this.barang[i]+'';
				data +='<a href="#" onclick="act.editF('+i+')">[Edit </a>]';
				data +='<a href="#" onclick="app.deleteF('+i+')"> | Delete]</a></li>';
				data += '</ul>';
			}
		}
		return this.tampung.innerHTML = data;
	};
	this.inputF = function () {
	tampung = doocument.getElementByName('nama');
	let barang = tampung.value;

	if (barang) {
		this.barang.push(barang.trim());
		tampung.value = '';
		this.FetchAll();
	}
};
	this.editF = function (item){
		tampung = prompt('Ubah barang','');
		this.barang[item]= tampung;
		this.FetchAll();
	};

	this.deleteF = function(item){
		let notf = confirm('Yakin ?');
		if (notf) {
			this.barang.splice(item, 1);
			this.FetchAll();
		}
	};
}

act.FetchAll();
