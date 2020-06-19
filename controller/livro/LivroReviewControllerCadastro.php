<?php
    require '../../model/LivroModel.php';

    $name = $_POST['name'];
    $category = $_POST['category'];
    $year = $_POST['year'];
    $autor = $_POST['autor'];
    $review = $_POST['review'];
    $rating = $_POST['ls2rating'];
    $picture = $_POST['picture'];
    $pages = $_POST['pages'];

    $newBook = new Livro();
    $newBook->setNome($name);
    $newBook->setDescricao($review);
    $newBook->setCategoria($category);
    $newBook->setAno($year);
    $newBook->setFoto($picture);
    $newBook->setAutor($autor);
    $newBook->setNotaMedia($rating);
    $newBook->setAvaliacoes(0);
    $newBook->setPaginas($pages);

    if(Livro::cadastrar($newBook))
        echo "<script> alert('Review feita com sucesso!') </script>
        <meta http-equiv='refresh' content=0.1;url='../../my-review-book.html'>";
     else
        echo "<script> alert('Não foi possível fazer a review!') </script>
        <meta http-equiv='refresh' content=0.1;url='../../review-book-create.html'>";
?>