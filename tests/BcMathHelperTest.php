<?php

use urfinjuezz\BCMathHelper\BCMathHelper;

class BcMathHelperTest extends \Codeception\Test\Unit
{


    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testFloor()
    {
        $testData = [
            '1.008' => '1',
            '-5.42324' => '-6',
            '5' => '5',
            '-6' => '-6'
        ];

        foreach ($testData as $in => $need) {
            $out = BCMathHelper::floor($in);
            $this->assertEquals(
                $out,
                $need,
                "Error. Sent '{$in}'', wanted '{$need}'', got '{$out}'"
            );
        }
    }

    // tests
    public function testCeil()
    {
        $testData = [
            '1.008' => '2',
            '-5.42324' => '-5',
            '5' => '5',
            '-6' => '-6'
        ];

        foreach ($testData as $in => $need) {
            $out = BCMathHelper::ceil($in);
            $this->assertEquals(
                $out,
                $need,
                "Error. Sent '{$in}', wanted '{$need}', got '{$out}'"
            );
        }
    }

    // tests
    public function testRound()
    {
        $testData = [
            ['1.008',0,'1'],
            ['-1.008',2,'-1.01'],
            ['-1.07',4,'-1.0700'],
            ['-1.08',0,'-1'],
            ['5.995',2,'6.00'],
            ['5.119',1,'5.1'],
        ];

        foreach ($testData as list($in,$precision,$need)) {
            $out = BCMathHelper::round($in,$precision);
            $this->assertEquals(
                $out,
                $need,
                "Error. Sent '{$in}' precision '{$precision}', wanted '{$need}', got '{$out}'"
            );
        }
    }

    public function testAbs() {
        $testData = [
            ['1.008',0,'1'],
            ['-1.008',2,'1.00'],
            ['-1.07',4,'1.07'],
            ['5.995',2,'5.99'],
        ];

        foreach ($testData as list($in,$scale,$need)) {
            $out = BCMathHelper::abs($in,$scale);
            $this->assertEquals(
                $out,
                $need,
                "Error. Sent '{$in}' precision '{$scale}', wanted '{$need}', got '{$out}'"
            );
        }
    }

    public function testMin(){
        $testData = [
            [['7.0000','3.105','3.109','12'],2,'3.10'],
        ];
        foreach ($testData as $key => list($values, $scale, $need)){
            $out = BCMathHelper::min($values, $scale);
            $this->assertEquals(
                $out,
                $need,
                "Error. Sent set '{$key}' with precision '{$scale}', wanted '{$need}', got '{$out}'"
            );
        }
    }

    public function testMax(){
        $testData = [
            [['7.0000','3.105','3.109','12'],2,'12.00'],
        ];
        foreach ($testData as $key => list($values, $scale, $need)){
            $out = BCMathHelper::max($values, $scale);
            $this->assertEquals(
                $out,
                $need,
                "Error. Sent set '{$key}' with precision '{$scale}', wanted '{$need}', got '{$out}'"
            );
        }
    }

    public function testArraySum(){
        $testData = [
            [['7.0000','3.105','3.109','12'],2,'25.20'],
        ];
        foreach ($testData as $key => list($values, $scale, $need)){
            $out = BCMathHelper::arraySum($values, $scale);
            $this->assertEquals(
                $out,
                $need,
                "Error. Sent set '{$key}' with precision '{$scale}', wanted '{$need}', got '{$out}'"
            );
        }
    }

}