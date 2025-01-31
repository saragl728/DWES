<?php
class Book
{
    private string $title;
    private string $author;
    private int $nPages;
    public function __construct(string $title, string $author, int $nPages = 100)
    {
        $this->title = $title;
        $this->author = $author;
        if ($nPages > 0)
            $this->nPages = $nPages;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPaginas()
    {
        return $this->nPages;
    }

    public function setPaginas(int $nPages)
    {
        if ($nPages > 0)
            $this->nPages = $nPages;    //compruebo que el nº de páginas es superior a 0
    }
}

class Library
{
    public string $name;
    private array $librios;

    public function anyadirLibro(Book $book)
    {
        $this->librios[] = $book;
    }

    public function borrarLibro(Book $book)
    {
        //compruebo si está el libro
        if (in_array($book, $this->librios)) {
            $indx = array_search($book, $this->librios);
            array_splice($this->librios, $indx, 1);
        }
    }

    public function getLibrios()
    {
        return $this->librios;
    }

}
?>