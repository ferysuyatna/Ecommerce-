const
    DEFAULTWIDTH = 1800;
var
    g_LastWitdh = window.innerWidth;

function ThumbVerticalMouseEnterHandler()
{
    jQuery(this).find(".tilesVerticalIcons").show();
    //jQuery(this).find(".tilesVerticalIcons").css("background","black");
    jQuery(this).find(".wrapCenter").css("margin-bottom", "0px");
    //jQuery(this).find(".tilesVerticalThumbNail").css("min-width", "240px");


}

function ThumbVerticalMouseLeaveHandler()
{
    jQuery(this).find(".tilesVerticalIcons").hide();
    //jQuery(this).find(".tilesVerticalIcons").css("background", "white");
    //jQuery(this).find(".tilesVerticalThumbNail").css("min-width", "240px");
    jQuery(this).find(".wrapCenter").css("margin-bottom", "15px");

}

function OnResize()
{
    var
        width = window.innerWidth,
        deltaW = 0;

    //if (width < g_LastWitdh) console.log("getting smaller"); else console.log("getting bigger");
    deltaW = Math.abs(Math.floor((DEFAULTWIDTH - width) / 100));
   //console.log("jQuery('.list-group-item:nth-child(" + ( deltaW)+ ")').hide()");
   if (width < g_LastWitdh)
   {
       jQuery(".menuKategori:nth-last-child(" + (deltaW) + ")").hide();
    }
    else
    {
        jQuery(".list-group-item:nth-last-child(" + (deltaW) + ")").show();
    }
    if (width >= DEFAULTWIDTH) jQuery(".menuKategori").show();
    g_LastWitdh = width;
}

function SliderInit()
{
    function OnSlide(evt)
    {
        jQuery("#LabelPrice").text(
            "Rp: " +
            (evt.value * 5000) +
            "- " +
            ((evt.value >= 100) ? ("tidak ada batas") : ("Rp" + evt.value * 10000)));
        console.log(evt.value);
    }
    jQuery("#PriceSlider").slider();
    jQuery("#PriceSlider").on("slide", OnSlide);
}

function ShowSnackbar(text) {
    var x = document.getElementById("snackbar");
    x.innerHTML = text;
    x.className = "show";
    setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
}

function getURLData(){
    var query = window.location.search.substring(1);
    var vars = query.split('&')[0];
    return vars.split('=');
}

function getEtalase(table){
    
    $.post('Etalase/getEtalase', function(data){
        var etalase = $.parseJSON(data);
        table.clear();
        for(var i = 0; i<etalase.length; i++){
            var rating = "";
            for(var s=1; s<=5; s++){
                rating += (s<=etalase[i].RATING ? '<i class="fa fa-star"></i>' : '<i class="fa fa-star-o"></i>');
            }

            table.row.add([
                i+1,
                etalase[i].JUDUL,
                etalase[i].HARGA,
                etalase[i].KATEGORI,
                rating,
                '<button class="btn btn-sm btn-warning" onclick="setModal('+etalase[i].ID_BUKU+')" data-toggle="modal" data-target="#modal-edit" style="margin-right: 5px"><i class="fa fa-edit"></i></button>'+
                '<button class="btn btn-sm btn-danger" onclick="hapusBuku('+etalase[i].ID_BUKU+')"><i class="fa fa-trash"></i></button>'
            ]).draw().node();
        }
    });
}

function setModal(id){
    $.post('Etalase/getBuku', {id: id}, function(data){
        var obj = $.parseJSON(data);
        $("#judul").val(obj.JUDUL);
        $("#penulis").val(obj.PENGARANG);
        $("#kategori").val(obj.KATEGORI);
        $("#bekas").val(obj.BEKAS);
        $("#harga").val(obj.HARGA);
        $("#stok").val(obj.JUMLAH);
        $("#deskripsi").text(obj.DESKRIPSI);
        $("#foto").attr('src', 'http://localhost/tubes/uploads/'+obj.GAMBAR);
        $("#simpan").attr('onclick', 'simpanBuku('+obj.ID_BUKU+')');
    });
}

function simpanBuku(id){
    var datas = new Object();
    datas = {
        id: id,
        judul: $("#judul").val(),
        penulis: $("#penulis").val(),
        kategori: $("#kategori").val(),
        bekas: $("#bekas").val(),
        harga: $("#harga").val(),
        stok: $("#stok").val(),
        deskripsi: $("#deskripsi").text()
    }
    $.post('Etalase/updateBuku', datas, function(data){
        alert(data);
        getEtalase(table);
    });
    
}

function hapusBuku(id){
    var r = confirm('Apakah yakin ingin menghapus buku ini?');
    if(r == true){
        $.post('Etalase/hapusBuku', {id: id}, function(data){
            alert(data);
            getEtalase(table);
        });
    }  
    
}