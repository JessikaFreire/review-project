<?php
    require '../../model/FilmeModel.php';

    $name = $_POST['name'];
    $category = $_POST['category'];
    $year = $_POST['year'];
    $director = $_POST['director'];
    $review = $_POST['review'];
    $rating = $_POST['fs2rating'];
    $picture = $_POST['picture'];

    $newMovie = new Filme();
    $newMovie->setNome($name);
    $newMovie->setDescricao($review);
    $newMovie->setCategoria($category);
    $newMovie->setAno($year);
    $newMovie->setFoto($picture);
    $newMovie->setDiretor($director);
    $newMovie->setNotaMedia($rating);
    $newMovie->setAvaliacoes(0);

    if(Filme::cadastrar($newMovie))
        echo "<script> alert('Review feito com sucesso!') </script>
        <meta http-equiv='refresh' content=0.1;url='../../my-review-movie.html'>";
     else
        echo "<script> alert('Não foi possível fazer a review!') </script>
        <meta http-equiv='refresh' content=0.1;url='../../review-movie-create.html'>";
?>