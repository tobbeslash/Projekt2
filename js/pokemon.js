$("document").ready(function(){
    function Display_Image(Pokemonimg,Type1img,Type2img,Name,Type1,Type2){
        var pokemons = document.getElementById("pokemons");
        var div = document.createElement("div");
        div.className = "pokemon";
        pokemons.appendChild(div);
        var type1img = document.createElement("img");
        type1img.src = Type1img;
        type1img.className = "typeimg";
        type1img.alt = Type1;
        div.appendChild(type1img);
        if(Type2img != null){
            var type2img = document.createElement("img");
            type2img.src = Type2img;
            type2img.className = "typeimg";
            type2img.alt = Type2;
            div.appendChild(type2img);
        }
        var pokemonimg = document.createElement("img");
        pokemonimg.src = Pokemonimg;
        pokemonimg.className = "pokemonimg";
        div.appendChild(pokemonimg);
        var name = document.createElement("p");
        name.innerHTML = Name;
        div.appendChild(name);
    }
    $.getJSON("http://tobias.teknikprogrammet.org/getjson.php",function(data){
        for(var i = 0; i < 12; i++){
            var obj = data[i][0];
            Display_Image(obj.Pokemonimage,obj.Type1image,obj.Type2image,obj.Name,obj.Type1,obj.Type2);
        }
    });
    return false;
});
