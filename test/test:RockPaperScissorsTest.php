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

        function testScissorsRock()
        {
            //Arrange
            $test_rock_paper_scissors = new RockPaperScissors;
            $first_input = "scissors";
            $second_input = "rock";

            //Act
            $result = $test_rock_paper_scissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function testRockRock()
        {
            //Arrange
            $test_rock_paper_scissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "rock";

            //Act
            $result = $test_rock_paper_scissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Draw", $result);
        }

        function testPaperScissors()
        {
            //Arrange
            $test_rock_paper_scissors = new RockPaperScissors;
            $first_input = "paper";
            $second_input = "scissors";

            //Act
            $result = $test_rock_paper_scissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function testRockPaper()
        {
            //Arrange
            $test_rock_paper_scissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "paper";

            //Act
            $result = $test_rock_paper_scissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }

        function testPaperRock()
        {
            //Arrange
            $test_rock_paper_scissors = new RockPaperScissors;
            $first_input = "paper";
            $second_input = "rock";

            //Act
            $result = $test_rock_paper_scissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function testScissorsPaper()
        {
            //Arrange
            $test_rock_paper_scissors = new RockPaperScissors;
            $first_input = "scissors";
            $second_input = "paper";

            //Act
            $result = $test_rock_paper_scissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }
    }

?>
