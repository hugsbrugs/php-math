<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Hug\Math\Math as Math;

$text1 = "Demain dès l'aube à l'heure où blanchit la campagne, je partirai. Vois-tu je sais que tu m'attends. J'irai par la forêt, j'irai par la montagne. Je ne puis demeurer loin de toi plus longtemps. Je marcherai les yeux fixés sur mes pensées, sans rien voir au dehors, sens entendre aucun bruit, seul inconnu, le dos courbé, les mains croisées, triste, et le jour sera pour moi comme la nuit. Je ne regarderai ni l'or du soir qui tombe, ni les voiles au loin descendant vers Harfleur, Et quand j'arriverai, je mettrai sur ta tombe Un bouquet de houx vert et de bruyère en fleur.";

$text2 = "Demain dès l'aurore à l'heure où le boulanger se lève, je partirai. Vois-tu je sais que tu m'entends. Je traverserai la forêt, j'irai par la montagne. Je suis demeuré loin de toi plus longtemps. Je marcherai les yeux fixés sur mes pensées, sans rien voir au dehors, sens entendre aucun bruit, seul inconnu, le dos courbé, les mains croisées, triste, et le jour sere pour moi comme la nuit. Je regarderai l'or du soir qui tombe, ni les voiles au loin descendant vers Harfleur, Et quand j'arriverai, je mettrai sur ta tombe Un de houx et de bruyère en fleur.";

/* ************************************************* */
/* ****************** Math::modulo ***************** */
/* ************************************************* */

$test = Math::modulo(154, 8);
error_log('Modulo : ' . $test);
error_log("\n");

$test = Math::modulo(8, 154);
error_log('Modulo : ' . $test);
error_log("\n");

/* ************************************************* */
/* ******************* Math::dice ****************** */
/* ************************************************* */

$test = Math::dice($text1, $text2);
error_log('Dice : ' . $test);
error_log("\n");

$test = Math::dice($text1, 123456);
error_log('Dice : ' . $test);
error_log("\n");
