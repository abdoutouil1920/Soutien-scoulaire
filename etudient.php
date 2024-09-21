<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Page</title>
    <link rel="stylesheet" href="etudient.css">
</head>
<body>
    <header>
         <h1>Espace Etudiant</h1>
    </header>
    <main>
        <section id="courses">
            <h2>Courses</h2>
            <p>Here are the courses you are currently enrolled in:</p>
            <ul>
                <li>Mat </li>
                <li>English </li>
                <li>SGBD</li>
                <li>JAVA </li>
                <li>FRAMEWORK.NET </li>
                <li>SECURITE SI </li>

            </ul>
        </section>
        <section id="schedule">
            <h2>calendrier des cours</h2>
            <p>Voici votre horaire actuel:</p>
            <table>
                <thead>
                    <tr>
                        <th>Jour</th>
                        <th>Temps</th>
                        <th>Course</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lundi</td>
                        <td>9:00am - 10:30am</td>
                        <td>Math </td>
                    </tr>
                    <tr>
                        <td>Mercredi</td>
                        <td>1:00pm - 2:30pm</td>
                        <td>English </td>
                    </tr>
                    <tr>
                        <td>Vendredi</td>
                        <td>10:00am - 11:30am</td>
                        <td>FRAMEWORK.NET</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section id="support">
            <h2>Support</h2>
            <p>If you need any academic support, please fill out the form below:</p>
            <form action="submit-support-request.php" method="post">
                <label for="name">Nom:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="course">Course:</label>
                <select id="course" name="course">
                    <option value="math">Mat </option>
                    <option value="english">English </option>
                    <option value="science">SGBD</option>
                    <option value="math">JAVA</option>
                    <option value="english">FRAMEWORK.NET</option>
                    <option value="science">SECURITE SI</option>
                </select>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy;  2024 Esprit School Of Business  - Tous droits réservés</p>
    </footer>
</body>
</html>