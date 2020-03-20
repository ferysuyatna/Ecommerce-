// JavaScript source code
const
    jQuery = $;


//NOT IN USE
function RequireScript(path) {
    var
        Script = document.createElement("script");
    console.log("Load: " + path);
    Script.src = path;
    document.head.appendChild(Script);
}

//SPliting ARRAY IN FAST WAY
Object.defineProperty(Array.prototype, 'chunk', {
    value: function (chunkSize) {
        var R = [];
        for (var i = 0; i < this.length; i += chunkSize)
            R.push(this.slice(i, i + chunkSize));
        return R;
    }
});

function IntialiseList() {
    var
        deltaW = 0;
    deltaW = Math.floor((DEFAULTWIDTH - window.innerWidth) / 100);
    for (var i = 1; i <= deltaW;i++)
        jQuery(".menuKategori:nth-last-child(" + i + ")").hide();
}

//INPUT: none
//OUTPUT: none
//Desc: Main function!
function Main()
{
    jQuery(".row .tilesVerticalIcons").css("display", "none");
    jQuery(".thumbVertical").mouseenter(ThumbVerticalMouseEnterHandler);
    jQuery(".thumbVertical").mouseleave(ThumbVerticalMouseLeaveHandler);
    jQuery(".SideBarThumbNail").css("margin-top", "10px");
    jQuery(".SideBarThumbNail").css("margin-bottom", "10px");
    jQuery(".wrapCenter").css("margin-bottom", "15px");
    jQuery(window).resize(OnResize);
}
Main();
IntialiseList();