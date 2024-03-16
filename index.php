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

         $filtered=filter($books, function($book) {
            return $book['year'] < 2020 && $book['year'] > 1950;
        });
        include "index.view.php";
    ?>
    