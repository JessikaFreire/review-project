<?php
    require '../../model/SerieModel.php';

    $name = $_POST['name'];
    $category = $_POST['category'];
    $year = $_POST['year'];
    $seasons = $_POST['seasons'];
    $review = $_POST['review'];
    $rating = $_POST['ss2rating'];
    $picture = $_POST['picture'];

    $newBook = new Livro();
    $newBook->setNome($name);
    $newBook->setDescricao($review);
    $newBook->setCategoria($category);
    $newBook->setAno($year);
    $newBook->setFoto($picture);
    $newBook->setTemporada($seasons);
    $newBook->setNotaMedia($rating);
    $newBook->setAvaliacoes(0);

    if(Livro::cadastrar($newBook))
        echo "<script> alert('Review feito com sucesso!') </script>
        <meta http-equiv='refresh' content=0.1;url='../../my-review-serie.html'>";
     else
        echo "<script> alert('Não foi possível fazer a review!') </script>
        <meta http-equiv='refresh' content=0.1;url='../../review-serie-create.html'>";
?>