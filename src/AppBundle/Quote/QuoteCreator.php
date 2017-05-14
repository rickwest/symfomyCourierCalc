<?php
/**
 * Created by PhpStorm.
 * User: rick
 * Date: 09/04/2017
 * Time: 00:23
 */

namespace AppBundle\Quote;


class QuoteCreator {

    public function convertMetersToMiles($meters) {
        return round($meters * 0.000621371);
    }
}