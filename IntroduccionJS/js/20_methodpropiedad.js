// Metodos de propiedad
const reproductor ={
    reprocir: function(id){
        console.log(`Reproduciendo Cancion con el ID ${id}`);
    },
    pausar: function(){
        console.log("Pausando...");
    },
    crearPlayList: function (nombre){
        console.log(`Creando Playlist: ${nombre}`);
    },
    reproducirPlayList: function (nombre){
        console.log(`Reproduciendo Playlist: ${nombre}`);
    },
}
reproductor.borrarCancion = function(id){
    console.log(`Borrando Cancion con el ID ${id}`);
}

reproductor.reprocir(3840);
reproductor.pausar();
reproductor.borrarCancion(123);
reproductor.crearPlayList("Hevy Metal");
reproductor.reproducirPlayList("Hevy Metal");