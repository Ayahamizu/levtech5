<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>検索画面</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <form>
            <p>学部</p>
            <select name="posts[faculty_id]">
                
            </select>
            <p>学科</p>
            <div class="filter">
                <p>絞り込み
                    <input type="checkbox" name="filter" value="personal">個人で取り組む
                    <input type="checkbox" name="filter" value="group">グループで取り組む
                    <input type="checkbox" name="filter" value="few">少人数
                    <input type="checkbox" name="filter" value="many">大人数
                    <input type="checkbox" name="filter" value="career">就職に強い
                </p>
                <p><input type="submit" value="検索する"></p>
            </div>
        </form>
    </body>
</html>
