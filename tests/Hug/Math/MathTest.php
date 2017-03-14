<?php

# For PHP7
// declare(strict_types=1);

// namespace Hug\Tests\Math;

use PHPUnit\Framework\TestCase;

use Hug\Math\Math as Math;

/**
 *
 */
final class MathTest extends TestCase
{    
    public $text1 = null;
    public $text2 = null;

    function __construct()
    {

        $this->text1 = "Demain dès l'aube à l'heure où blanchit la campagne, je partirai. Vois-tu je sais que tu m'attends. J'irai par la forêt, j'irai par la montagne. Je ne puis demeurer loin de toi plus longtemps. Je marcherai les yeux fixés sur mes pensées, sans rien voir au dehors, sens entendre aucun bruit, seul inconnu, le dos courbé, les mains croisées, triste, et le jour sera pour moi comme la nuit. Je ne regarderai ni l'or du soir qui tombe, ni les voiles au loin descendant vers Harfleur, Et quand j'arriverai, je mettrai sur ta tombe Un bouquet de houx vert et de bruyère en fleur.";

        $this->text2 = "Demain dès l'aurore à l'heure où le boulanger se lève, je partirai. Vois-tu je sais que tu m'entends. Je traverserai la forêt, j'irai par la montagne. Je suis demeuré loin de toi plus longtemps. Je marcherai les yeux fixés sur mes pensées, sans rien voir au dehors, sens entendre aucun bruit, seul inconnu, le dos courbé, les mains croisées, triste, et le jour sere pour moi comme la nuit. Je regarderai l'or du soir qui tombe, ni les voiles au loin descendant vers Harfleur, Et quand j'arriverai, je mettrai sur ta tombe Un de houx et de bruyère en fleur.";        
    }

    /* ************************************************* */
    /* ****************** Math::modulo ***************** */
    /* ************************************************* */

    /**
     *
     */
    public function testCanModulo()
    {
        $test = Math::modulo(154, 8);
        $this->assertInternalType('integer', $test);
        $this->assertEquals(2, $test);
    }

    /**
     *
     */
    public function testCannotModulo()
    {
        $test = Math::modulo(8, 154);
        $this->assertInternalType('integer', $test);
        $this->assertEquals(8, $test);
    }

    /* ************************************************* */
    /* ******************* Math::dice ****************** */
    /* ************************************************* */

    /**
     *
     */
    public function testCanDice()
    {
        $test = Math::dice($this->text1, $this->text2);
        $this->assertInternalType('float', $test);
        $this->assertEquals(5.6739319965126, $test);
    }

    /**
     *
     */
    public function testCannotDice()
    {
        $test = Math::dice($this->text1, 123456);
        $this->assertInternalType('integer', $test);
        $this->assertEquals(0, $test);
    }


}

