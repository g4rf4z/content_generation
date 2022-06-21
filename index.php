<?php session_start();

include "inc/connection.php";

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Content Generation</title>
</head>

<body>
    <header class="header">
        <div class="slogan">
            <h1>Génération de contenus et statistiques</h1>
        </div>
    </header>
    <main>
        <!-- Input -->
        <section class="form-container">
            <form action="inc/input.php" method="post">
                <input type="number" name="input" min="0" required></input>
                <button type="submit" name="submit">Ajouter</button>
            </form>
            <p>
                Combien d'élèves voulez-vous générer?
            </p>
        </section>

        <!-- Truncate -->
        <section class="form-container">
            <form action="inc/truncate.php" method="post">
                <button type="submit" name="truncate">Reset</button>
            </form>
        </section>
        <section class="table-container">
            <h2>Tableau des écoles</h2>
            <table>
                <tr>
                    <th>Noms d'écoles</th>
                    <th>Nombre d'élèves</th>
                    <th>Nombre d’élèves pratiquant au moins un sport</th>
                    <th>Nombre d'activités sportives pratiquées</th>
                </tr>
                <tr>
                    <td>A</td>
                    <td><?php echo $_SESSION["number_of_students_from_school_a"] ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>B</td>
                    <td><?php echo $_SESSION["number_of_students_from_school_b"] ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>C</td>
                    <td><?php echo $_SESSION["number_of_students_from_school_c"] ?></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>