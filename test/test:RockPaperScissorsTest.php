<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function testRockScissors()
        {
            //Arrange
            $test_rock_paper_scissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "scissors";

            //Act
            $result = $test_rock_paper_scissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }
    }

?>
