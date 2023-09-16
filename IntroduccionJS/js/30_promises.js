
const usuarioAutenticado = new Promise((resolve, reject) =>{
    const auth = true;

    if(auth){
        resolve("Usuario Autenticado"); // El promise se cumple
    }else{
        reject("No se pudo iniciar sesión"); // El promise no se cumple
    }
});

usuarioAutenticado
    .then(resultado => console.log(resultado))
    .catch(error => console.log(error));

// En los promises existen 3 valores
// Pending: No se ha cumplido pero tampoco se ha rechazado
// Fulfilled: Ya se cumplio
// Rejeacted: Se ha rechazado o no se puede cumplir