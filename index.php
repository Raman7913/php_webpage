<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $books=[
            [
                'name'=>'hail mary',
                'author'=>'andy weir',
                'year'=>2021,
            ],
            [
                'name'=>'to kill a mocking bird',
                'author'=>'harper lee',
                'year'=>1960,
            ],
            [
                'name'=>'pride and prejudice',
                'author'=>'jane austen',
                'year'=>1813,
            ],
        ];

        function filter($books,$fn){
            $filteredBooks=[];
            foreach($books as $book){
                if($fn($book)){
                    $filteredBooks[]=$book;
                }
            }
            return $filteredBooks;
        }

         $answer=filter($books, function($book) {
            return $book['year'] < 2020 && $book['year'] > 1950;
        });
        print_r($answer);
    ?>
</body>

</html>
