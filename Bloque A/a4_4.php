<?php
class Library
{
    public string $libraryName;
    private array $books;

    public function addBook(string $book)
    {
        //compruebo que el libro no está aún
        if (!in_array($book, $this->books)) {
            $this->books[] = $book;
        }
    }

    public function removeBook(string $book)
    {
        //primero compruebo que está el libro
        if (in_array($book, $this->books)) {
            $indx = array_search($book, $this->books);  //saco la posición del libro
            array_splice($this->books, $indx, 1);    //borro el libro
        }
    }

    public function getBooks()
    {
        return $this->books;
    }
}

$biblioteca = new Library();
$biblioteca->libraryName = "Biblioteca Rudea";
//añado libros
$biblioteca->addBook("The Cursed Clown Doll");
$biblioteca->addBook("The Crystal Turtle");
$biblioteca->addBook("The Fake Choice");
$biblioteca->addBook("The Dimension of World's Mistakes");
$biblioteca->addBook("The Healing Tree");
//quito un libro
$biblioteca->removeBook("The Fake Choice");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio 4.4: Library</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>

<body>
    <p>Library's name: <?= $biblioteca->libraryName ?></p>
    <p>Books</p>
    <ol>
        <?php for ($i = 0; $i < count($biblioteca->getBooks()); $i++) { ?>
            <li><?= $biblioteca->getBooks()[$i] ?></li>
        <?php } ?>
    </ol>

</body>

</html>