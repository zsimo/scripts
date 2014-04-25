<?php

/*
 * http://devzone.zend.com/16/php-101-part-10-a-session-in-the-cookie-jar/
 */

// Since cookies are used to record information about your activities on a particular
// domain, they can only be read by the domain that created them
// A single domain cannot set more than twenty cookies, and each cookie is limited
// to a maximum size of 4 KB
// A cookie usually possesses six attributes, of which only the first is mandatory.
// Here they are:
// - name: the name of the cookie
// - value: the value of the cookie
// - expires: the date and time at which the cookie expires
// - path: the top-level directory on the domain from which cookie data can be accessed
// - domain: the domain for which the cookie is valid
// - secure: a Boolean flag indicating whether the cookie should be transmitted only


if (!isset($_COOKIE['visited'])) {

    setcookie("visited", "1", mktime()+86400, "/") or die("Could not set cookie");

    echo "This is your first visit here today.";

}

















?>