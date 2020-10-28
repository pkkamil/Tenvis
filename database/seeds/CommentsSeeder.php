<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'post_id' => '1',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Agatha',
            'content' => 'Our mission is to defend the legacy of America’s founding, the virtue of America’s heroes, and the nobility of the American character.'
        ]);
        Comment::create([
            'post_id' => '1',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Joe',
            'content' => 'Madrid back under city-wide lockdown after surge in coronavirus cases.'
        ]);
        Comment::create([
            'post_id' => '1',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Jack',
            'content' => 'It is far from clear that an antagonistic approach is a good fit for 2020, when Trump is an incumbent President and the country is locked in multiple crises. Those aggressive reflexes are one reason why the President handling of the pandemic that has killed more than 200,000 people has been so poor. And they mean that any advice from Trumps aides to torque back his demeanor ahead of the next debate in Miami on October 15 will either fall on deaf ears or be ignored in the heat of battle.'
        ]);
        Comment::create([
            'post_id' => '1',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Camille',
            'content' => 'Republican senators, suffering through one of hundreds of awkward on-the-spot moments of the Trump presidency, were particularly discomforted by questions about the President "stand back and stand by" order to the Proud Boys. Senate Majority Whip John Thune, R-South Dakota, suggested it was a statement the Trump team needed to "clear up."'
        ]);
        Comment::create([
            'post_id' => '1',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Michał',
            'content' => 'Typically, the first debate garners the biggest TV audience. Further, by mid-October, millions more voters will have cast early ballots, and if current trends hold, a building new wave of Covid-19 infections will be having a demonstrably more serious impact on American life. Such a scenario will underscore the President failure on Tuesday night to offer any authentic plans to conquer the pandemic and may deepen his vulnerability on health care, which offered Biden a clear opening.'
        ]);        Comment::create([
            'post_id' => '2',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Agatha',
            'content' => 'Our mission is to defend the legacy of America’s founding, the virtue of America’s heroes, and the nobility of the American character.'
        ]);
        Comment::create([
            'post_id' => '2',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Joe',
            'content' => 'Madrid back under city-wide lockdown after surge in coronavirus cases.'
        ]);
        Comment::create([
            'post_id' => '2',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Jack',
            'content' => 'It is far from clear that an antagonistic approach is a good fit for 2020, when Trump is an incumbent President and the country is locked in multiple crises. Those aggressive reflexes are one reason why the President handling of the pandemic that has killed more than 200,000 people has been so poor. And they mean that any advice from Trumps aides to torque back his demeanor ahead of the next debate in Miami on October 25 will either fall on deaf ears or be ignored in the heat of battle.'
        ]);
        Comment::create([
            'post_id' => '2',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Camille',
            'content' => 'Republican senators, suffering through one of hundreds of awkward on-the-spot moments of the Trump presidency, were particularly discomforted by questions about the President "stand back and stand by" order to the Proud Boys. Senate Majority Whip John Thune, R-South Dakota, suggested it was a statement the Trump team needed to "clear up."'
        ]);
        Comment::create([
            'post_id' => '2',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Michał',
            'content' => 'Typically, the first debate garners the biggest TV audience. Further, by mid-October, millions more voters will have cast early ballots, and if current trends hold, a building new wave of Covid-19 infections will be having a demonstrably more serious impact on American life. Such a scenario will underscore the President failure on Tuesday night to offer any authentic plans to conquer the pandemic and may deepen his vulnerability on health care, which offered Biden a clear opening.'
        ]);        Comment::create([
            'post_id' => '3',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Agatha',
            'content' => 'Our mission is to defend the legacy of America’s founding, the virtue of America’s heroes, and the nobility of the American character.'
        ]);
        Comment::create([
            'post_id' => '3',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Joe',
            'content' => 'Madrid back under city-wide lockdown after surge in coronavirus cases.'
        ]);
        Comment::create([
            'post_id' => '3',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Jack',
            'content' => 'It is far from clear that an antagonistic approach is a good fit for 2020, when Trump is an incumbent President and the country is locked in multiple crises. Those aggressive reflexes are one reason why the President handling of the pandemic that has killed more than 200,000 people has been so poor. And they mean that any advice from Trumps aides to torque back his demeanor ahead of the next debate in Miami on October 15 will either fall on deaf ears or be ignored in the heat of battle.'
        ]);
        Comment::create([
            'post_id' => '3',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Camille',
            'content' => 'Republican senators, suffering through one of hundreds of awkward on-the-spot moments of the Trump presidency, were particularly discomforted by questions about the President "stand back and stand by" order to the Proud Boys. Senate Majority Whip John Thune, R-South Dakota, suggested it was a statement the Trump team needed to "clear up."'
        ]);
        Comment::create([
            'post_id' => '3',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Michał',
            'content' => 'Typically, the first debate garners the biggest TV audience. Further, by mid-October, millions more voters will have cast early ballots, and if current trends hold, a building new wave of Covid-19 infections will be having a demonstrably more serious impact on American life. Such a scenario will underscore the President failure on Tuesday night to offer any authentic plans to conquer the pandemic and may deepen his vulnerability on health care, which offered Biden a clear opening.'
        ]);        Comment::create([
            'post_id' => '4',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Agatha',
            'content' => 'Our mission is to defend the legacy of America’s founding, the virtue of America’s heroes, and the nobility of the American character.'
        ]);
        Comment::create([
            'post_id' => '4',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Joe',
            'content' => 'Madrid back under city-wide lockdown after surge in coronavirus cases.'
        ]);
        Comment::create([
            'post_id' => '4',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Jack',
            'content' => 'It is far from clear that an antagonistic approach is a good fit for 2020, when Trump is an incumbent President and the country is locked in multiple crises. Those aggressive reflexes are one reason why the President handling of the pandemic that has killed more than 200,000 people has been so poor. And they mean that any advice from Trumps aides to torque back his demeanor ahead of the next debate in Miami on October 15 will either fall on deaf ears or be ignored in the heat of battle.'
        ]);
        Comment::create([
            'post_id' => '4',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Camille',
            'content' => 'Republican senators, suffering through one of hundreds of awkward on-the-spot moments of the Trump presidency, were particularly discomforted by questions about the President "stand back and stand by" order to the Proud Boys. Senate Majority Whip John Thune, R-South Dakota, suggested it was a statement the Trump team needed to "clear up."'
        ]);
        Comment::create([
            'post_id' => '4',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Michał',
            'content' => 'Typically, the first debate garners the biggest TV audience. Further, by mid-October, millions more voters will have cast early ballots, and if current trends hold, a building new wave of Covid-19 infections will be having a demonstrably more serious impact on American life. Such a scenario will underscore the President failure on Tuesday night to offer any authentic plans to conquer the pandemic and may deepen his vulnerability on health care, which offered Biden a clear opening.'
        ]);        Comment::create([
            'post_id' => '5',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Agatha',
            'content' => 'Our mission is to defend the legacy of America’s founding, the virtue of America’s heroes, and the nobility of the American character.'
        ]);
        Comment::create([
            'post_id' => '5',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Joe',
            'content' => 'Madrid back under city-wide lockdown after surge in coronavirus cases.'
        ]);
        Comment::create([
            'post_id' => '5',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Jack',
            'content' => 'It is far from clear that an antagonistic approach is a good fit for 2020, when Trump is an incumbent President and the country is locked in multiple crises. Those aggressive reflexes are one reason why the President handling of the pandemic that has killed more than 200,000 people has been so poor. And they mean that any advice from Trumps aides to torque back his demeanor ahead of the next debate in Miami on October 15 will either fall on deaf ears or be ignored in the heat of battle.'
        ]);
        Comment::create([
            'post_id' => '5',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Camille',
            'content' => 'Republican senators, suffering through one of hundreds of awkward on-the-spot moments of the Trump presidency, were particularly discomforted by questions about the President "stand back and stand by" order to the Proud Boys. Senate Majority Whip John Thune, R-South Dakota, suggested it was a statement the Trump team needed to "clear up."'
        ]);
        Comment::create([
            'post_id' => '5',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Michał',
            'content' => 'Typically, the first debate garners the biggest TV audience. Further, by mid-October, millions more voters will have cast early ballots, and if current trends hold, a building new wave of Covid-19 infections will be having a demonstrably more serious impact on American life. Such a scenario will underscore the President failure on Tuesday night to offer any authentic plans to conquer the pandemic and may deepen his vulnerability on health care, which offered Biden a clear opening.'
        ]);        Comment::create([
            'post_id' => '6',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Agatha',
            'content' => 'Our mission is to defend the legacy of America’s founding, the virtue of America’s heroes, and the nobility of the American character.'
        ]);
        Comment::create([
            'post_id' => '6',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Joe',
            'content' => 'Madrid back under city-wide lockdown after surge in coronavirus cases.'
        ]);
        Comment::create([
            'post_id' => '6',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Jack',
            'content' => 'It is far from clear that an antagonistic approach is a good fit for 2020, when Trump is an incumbent President and the country is locked in multiple crises. Those aggressive reflexes are one reason why the President handling of the pandemic that has killed more than 200,000 people has been so poor. And they mean that any advice from Trumps aides to torque back his demeanor ahead of the next debate in Miami on October 15 will either fall on deaf ears or be ignored in the heat of battle.'
        ]);
        Comment::create([
            'post_id' => '6',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Camille',
            'content' => 'Republican senators, suffering through one of hundreds of awkward on-the-spot moments of the Trump presidency, were particularly discomforted by questions about the President "stand back and stand by" order to the Proud Boys. Senate Majority Whip John Thune, R-South Dakota, suggested it was a statement the Trump team needed to "clear up."'
        ]);
        Comment::create([
            'post_id' => '6',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Michał',
            'content' => 'Typically, the first debate garners the biggest TV audience. Further, by mid-October, millions more voters will have cast early ballots, and if current trends hold, a building new wave of Covid-19 infections will be having a demonstrably more serious impact on American life. Such a scenario will underscore the President failure on Tuesday night to offer any authentic plans to conquer the pandemic and may deepen his vulnerability on health care, which offered Biden a clear opening.'
        ]);        Comment::create([
            'post_id' => '7',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Agatha',
            'content' => 'Our mission is to defend the legacy of America’s founding, the virtue of America’s heroes, and the nobility of the American character.'
        ]);
        Comment::create([
            'post_id' => '7',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Joe',
            'content' => 'Madrid back under city-wide lockdown after surge in coronavirus cases.'
        ]);
        Comment::create([
            'post_id' => '8',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Agatha',
            'content' => 'Our mission is to defend the legacy of America’s founding, the virtue of America’s heroes, and the nobility of the American character.'
        ]);
        Comment::create([
            'post_id' => '8',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Joe',
            'content' => 'Madrid back under city-wide lockdown after surge in coronavirus cases.'
        ]);
        Comment::create([
            'post_id' => '8',
            'avatar' => 'notloggedin'.rand(1, 10).'.png',
            'name' => 'Jack',
            'content' => 'It is far from clear that an antagonistic approach is a good fit for 2020, when Trump is an incumbent President and the country is locked in multiple crises. Those aggressive reflexes are one reason why the President handling of the pandemic that has killed more than 200,000 people has been so poor. And they mean that any advice from Trumps aides to torque back his demeanor ahead of the next debate in Miami on October 15 will either fall on deaf ears or be ignored in the heat of battle.'
        ]);
    }
}
