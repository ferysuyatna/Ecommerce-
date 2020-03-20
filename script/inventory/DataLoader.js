// INVENTORY.JS REQUIRED

function LoadItemList(input)
{
    var
        item = "",
        output = "";

    Data = input.chunk(4);
    console.log(Data);
    for (var i = 0; i < Data.length;i++)
    {
        output += '<div class="row terpopulerChild paddingLR5percent">';
        item = "";
        for (var j = 0; j < Data[i].length;j++)
        {
            var obj = Data[i][j];
                item += '<div class="col-md thumbVertical">';
                item +=     '<div class="row wrapCenter">';
                item +=         '<img src="'+g_BaseUrl + obj.thumb + '" class="tilesVerticalThumbNail innerCenter-0" />';
                item +=     '</div>';

                item +=     '<div class="row tilesVerticalIcons">';
                item +=         '<div class="col thumbnailAction buy">';
                item +=             '<span class="fa fa-shopping-cart" aria-hidden="true"></span>';
                item +=             '<div class="info" codeBarang="'+obj.id+'" namaBarang="'+obj.title+'" price="'+obj.price+'" bekas="'+((obj.bekas) ? "true" : "false")+'"></div>';
                item +=         '</div>';
                item +=         '<div class="col thumbnailAction">';
                item +=           ' <span class="fa fa-heart-o" aria-hidden="true"></span>'
                item +=         '</div>'
                item +=         '<div class="col thumbnailAction">';
                item +=             '<span class="fa fa-exchange" aria-hidden="true"></span>';
                item +=        '</div>';
                item +=        '<div class="col thumbnailAction detail">';
                item +=            '<span class="fa fa-eye info" codeBarang="'+obj.id+'" aria-hidden="true"></span>';
                item +=        '</div>';
                item +=     '</div>';

                item +=    ' <div class="row desc wrapCenter">';
                item +=         '<div class="innerCenter-0">';
                item +=             '<h5>'+obj.title+'</h5>';
                item +=         '</div>';
                item +=     '</div>';
                item +=     '<div class="row  wrapCenter">';
                item +=         '<div class="rating innerCenter-0">';
                for(var s=1; s<=5; s++){
                    item += (s<=obj.rating ? '<i class="fa fa-star"></i>' : '<i class="fa fa-star-o"></i>');
                }
                
                item +=          '</div>';
                item +=     '</div>';
                item +=     '<div class="row wrapCenter">';
                item +=         '<div class="price innerCenter-0">';
                item +=             'Rp' +  obj.price  + ((obj.bekas) ? "(Bekas)" : "(Baru)");
                item +=         '</div>';
                item +=     '</div>';
                item += '</div>';
                console.log(obj);
        }
        output += item;
        output += "</div>";
        console.log(Data[i]);
    }
    jQuery("#Content").html("");
    jQuery("#Content").html(output);
    console.log("succ");
}