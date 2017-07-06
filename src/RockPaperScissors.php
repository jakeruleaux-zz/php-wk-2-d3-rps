<?php

      class RockPaperScissors

      {

          // private $first_input;
          // private $second_input;
          //
          // function __construct()
          //
          // {
          //   $this->first_input = "rock";
          //   $this->second_input = "scissors";
          // }
          //
          // function getFirstInput()
          //
          // {
          //   return $this->first_input;
          // }
          //
          // function getSecondInput()
          // {
          //   return $this->second_input;
          // }

          // $first_input = "rock";
          // $second_input = "scissors";
          function playGame($first_input, $second_input)
          {

            if ($first_input == "rock" && $second_input == "scissors") {
              return "Player 1";
            } elseif ($first_input == "scissors" && $second_input == "rock") {
              return "Player 2";
            } elseif ($first_input == "paper" && $second_input == "scissors") {
              return "Player 2";
            } elseif ($first_input == "rock" && $second_input == "paper") {
              return "Player 2";
            } elseif ($first_input == "paper" && $second_input == "rock") {
              return "Player 1";
            } elseif ($first_input == "scissors" && $second_input == "paper") {
              return "Player 1";
            } else {
                                                                return "Draw";
                                                              }
      }
}
 ?>
