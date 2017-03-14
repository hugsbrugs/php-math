<?php

namespace Hug\Math;

/**
 * Math utilities functions
 */
class Math
{
	/**
	 * Return modulo of a number given a divider
     *
	 * @param int $nb
	 * @param int $divider
	 * @return int $modulo
	 */
	public static function modulo($nb, $divider)
	{
		if($divider==0)
		{
			return false;
		}
	    return $nb - $divider * intval($nb / $divider); 
	} 

	/**
     * Computes Dice Coefficient for two given texts
     *
     * @link http://en.wikibooks.org/wiki/Algorithm_Implementation/Strings/Dice%27s_coefficient
     * @link http://tonyarchambeau.com/blog/400-php-coefficient-de-dice/
     *
     * @param string $str1 First text to compare
     * @param string $str2 Second text to compare
     * @return int $dice Dice Coefficient
     */
    public static function dice($str1 = '', $str2 = '')
    {
        $str1_length = strlen($str1);
        $str2_length = strlen($str2);

        // Length of the string must not be equal to zero
        if ( ($str1_length==0) OR ($str2_length==0) )
        {
            return 0;
        }

        $ar1 = [];
        $ar2 = [];
        $intersection = 0;

        # find the pair of characters
        for ($i=0 ; $i<($str1_length-1) ; $i++)
        {
            $ar1[] = substr($str1, $i, 2);
        }

        for ($i=0 ; $i<($str2_length-1) ; $i++)
        {
            $ar2[] = substr($str2, $i, 2);
        }

        # find the intersection between the two sets
        foreach ($ar1 as $pair1)
        {
            foreach ($ar2 as $pair2)
            {
                if ($pair1 == $pair2)
                {
                    $intersection++;
                }
            }
        }

        $count_set = count($ar1) + count($ar2);
        $dice = (2 * $intersection) / $count_set;
        return $dice;
    }
    
}
