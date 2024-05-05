<?php

// Initialize game field
function gameField()
{
    return [
        [" ", " ", " "],
        [" ", " ", " "],
        [" ", " ", " "]
    ];
}

function displayField($board)
{
    for ($i = 0; $i < 3; $i++) {
        echo implode(" | ", $board[$i]) . PHP_EOL;
        if ($i < 2) {
            echo "---------" . PHP_EOL;
        }
    }
    echo PHP_EOL;
}

// Function to check if a move is valid
function isValidMove($board, $row, $column)
{
    return ($row >= 0 && $row < 3) && ($column >= 0 && $column < 3) && ($board[$row][$column] === ' ');
}

// Function to check for a win
function checkWin($board, $player)
{   // Check rows
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] === $player && $board[$i][1] === $player && $board[$i][2] === $player) {
            return true;
        }
    }
    // Check columns
    for ($i = 0; $i < 3; $i++) {
        if ($board[0][$i] === $player && $board[1][$i] === $player && $board[2][$i] === $player) {
            return true;
        }
    }
    // Check diagonals
    if ($board[0][0] === $player && $board[1][1] === $player && $board[2][2] === $player) {
        return true;
    }
    if ($board[0][0] === $player && $board[1][1] === $player && $board[2][0] === $player) {
        return true;
    }
    return false;
}

// Function to check for a tie

function checkTie($board)
{
    foreach ($board as $row) {
        if (in_array(' ', $row)) {
            return false; // Still has empty spaces, not a tie
        }
    }
    return true; // All spaces are filled, it's a tie
}

// Main game loop
$board = gameField();
$players = ['X', 'O'];
$currentPlayer = 0;

while (true) {
    displayField($board);

    // Current player's move
    $input = readline("$players[$currentPlayer], choose your location (row, column): ");
    list($row, $column) = explode(' ', $input);
    $row = (int)$row;
    $column = (int)$column;

    // Validate the move
    if (!isValidMove($board, $row, $column)) {
        echo "Invalid move! Try again." . PHP_EOL;
    }
    // Make the move
    $board[$row][$column] = $players[$currentPlayer];
    // Check for a win
    if (checkWin($board, $players[$currentPlayer])) {
        displayField($board);
        echo "$players[$currentPlayer] wins!" . PHP_EOL;
        break;
    }
    // Check for a tie
    if (checkTie($board)) {
        displayField($board);
        echo "The game is a tie." . PHP_EOL;
        break;
    }
    $currentPlayer = 1 - $currentPlayer;
}