<?php

namespace Jamosaur\HrryCi;

/**
 * Class HrryCiTest
 * @package Jamosaur\HrryCi
 * @author  James Wallen-Jones <j.wallen.jones@googlemail.com>
 */
class HrryCiTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests that the class outputs a basic string correctly.
     */
    public function testHryyFormatsSentence()
    {
        $hrry = new HrryCi('This is just a test');

        $this->assertEquals('ths is jst a tst', $hrry->outpt());
    }

    public function testSentencesStartingWithWordsVowelsAreFormattedCorrectly()
    {
        $hrry = new HrryCi('Internet, Infamous, Elephant, Apple, Orange.');

        $this->assertEquals('intrnt, infms, elphnt, appl, orng.', $hrry->outpt());
    }

    public function testParagraphGetsFormattedCorrectly()
    {
        $paragraph = 'Nullam fringilla, ligula at suscipit gravida, erat lacus fermentum ex, quis pulvinar massa sapien ut justo. Donec at tempor odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean feugiat libero facilisis euismod hendrerit. Vivamus cursus tempor nisi, sed egestas nulla vulputate vel. Vivamus rhoncus, dolor et sollicitudin pulvinar, massa enim consequat tellus, fringilla sollicitudin neque arcu a nisl. Fusce volutpat tempus lacinia. Etiam sed sem a dui aliquet interdum. Praesent ullamcorper, elit eu fermentum vulputate, erat justo dignissim enim, nec laoreet nisi neque non arcu. Vestibulum eget massa et leo auctor interdum. Suspendisse imperdiet metus vitae accumsan vulputate. Integer orci velit, mollis non sem vitae, feugiat rutrum nibh. Vivamus vitae erat eros.';
        $expected  = 'nllm frngll, lgl at sscpt grvd, ert lcs frmntm ex, qs plvnr mss spn ut jst. dnc at tmpr od. clss aptnt tct scsq ad ltr trqnt per cnb nstr, per incpts hmns. ann fgt lbr fclss esmd hndrrt. vvms crss tmpr ns, sed egsts nll vlptt vl. vvms rhncs, dlr et sllctdn plvnr, mss enm cnsqt tlls, frngll sllctdn nq arc a nsl. fsc vltpt tmps lcn. etm sed sem a dui alqt intrdm. prsnt ullmcrpr, elt eu frmntm vlptt, ert jst dgnssm enm, nec lrt ns nq non arc. vstblm egt mss et leo actr intrdm. sspndss imprdt mts vt accmsn vlptt. intgr orc vlt, mlls non sem vt, fgt rtrm nbh. vvms vt ert ers.';
        $hrry      = new HrryCi($paragraph);

        $this->assertEquals($expected, $hrry->outpt());
    }

    public function testHrryCi()
    {
        $hrry = new HrryCi();
        $hrry->text = 'haha, yes';

        $this->assertEquals('hh, yes', $hrry->outpt());
    }
}
