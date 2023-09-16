// Clases

class Producto{
    constructor(nombre, precio, disponible){
        this.nombre = nombre;
        this.precio = precio;
        this.disponible = disponible;
    }
    formatearProducto(){
        return `El producto ${this.nombre} tiene un precio de: $ ${this.precio}`;
    }
    obtenerPrecio(){
        console.log(this.precio);
    }
}

const producto2 = new Producto('Monitor curvo de 49"', 800);
const producto3 = new Producto('Laptop', 300,);

// Herencia
class Libro extends Producto{
    constructor(nombre,precio,isbn){
        super(nombre,precio);
        this.isbn = isbn;
    }
    formatearProducto(){
        return `${super.formatearProducto()}y su ISBN es ${this.isbn}`;
    }
    // Ereda los metodos
    obtenerPrecio(){
        super.obtenerPrecio();
        console.log('Y si hay en existencia');
    }
}

const libro = new Libro('JavaScript la revolucion', 120, '09876543456789');

console.log(libro.formatearProducto());
console.log(libro.obtenerPrecio());

console.log(producto2);
console.log(producto3);