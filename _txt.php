<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/assets/style/style.css">

    <title>Txt</title>
</head>
<body>
    <main>
        <div class="controlForm">
            <form action="_txt.php" method="post">
                <label for="ttle">Title: </label>
                <input type="text" name="title" id="ttle" >

                <label for="cat">Category: </label>
                <select name="" id="">
                    <option value="">123</option>
                    <option value="">123</option>
                    <option value="">123</option>
                </select>


                <label for="cont">Content: </label>
                <textarea name="content" id="" cols="15" rows="3">

                </textarea>

                <label for="date">Date of Post: </label>
                <input type="date" name="date" id="date">

                <input type="submit" value="save" name="save">
            </form>
            
            <table>
                <tr>
                    <th>Id.</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Content</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Jean Claude</td>
                    <td>16</td>
                    <td>17</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Ezéckiel</td>
                    <td>24</td>
                    <td>36</td>
                </tr>
            </table>
        </div>
    </main>
</body>
</html>